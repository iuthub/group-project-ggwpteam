$(document).ready(function () {
	$('.br_collapse ul li:last-child a').click(function(){
		$(this).addClass('active').next().show();
	});
	$('.br_sideblock ul:not([class]) li a').click(function(){

		if($(this).hasClass('active')){
			$('.br_sideblock ul:not([class]) li a').removeClass('active');
			$('.br_sideblock ul:not([class]) ul').slideUp();
		} else {
			$('.br_sideblock ul:not([class]) li a').removeClass('active');
			$('.br_sideblock ul:not([class]) ul').slideUp();
			$(this).addClass('active');
			$(this).parent('li').find('.animation').slideDown();
		}
	});

	$('.br_sideblock ul.ul1 li a').click(function(){
		$(this).toggleClass('active');
	});



	$('.p_link').click(function(){
		if ($(this).find('i').attr('class')=='icon-eye') {
			$(this).find('i').removeAttr('class').attr('class', 'icon-eye-blocked');
			$(this).parent().find('input:password').removeAttr('type').attr('type','text');
		} else{
			$(this).find('i').removeAttr('class').attr('class', 'icon-eye');
			$(this).parent().find('input:text').removeAttr('type').attr('type','password');
		}
	});

	$('.br_input input').focus(function(){
		$(this).parent().addClass('focus');
	});
	$('.br_input input').blur(function(){
		if ($(this).val()!='') {

		}else{
			$(this).parent().removeClass('focus');
	}
		
	});
	$('.br_input input[required]').change(function(){
		if ($(this).val()!='') {
			$(this).parent().removeClass('error');
			$(this).parent().find('label small').remove();
		}else{
			$(this).parent().addClass('error');
			$(this).parent().find('label').append('<small>   *-Fill in the field</small>');
	}
	});
	$('.br_slider').owlCarousel({
		items: 1,
		nav: true,
	});
	$('.br_slider .owl-prev,.br_slider .owl-next,.br_slider .owl-dots').wrapAll('<div class="pagination"></div>');
	$('.br_partner_item').owlCarousel({
		items: 5,
		nav: true,
		loop: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 0.5,
		autoplayTimeout: 2500,
	});
	$('a[data-fancybox="gallery"]').fancybox({
		loop: true,
		transitionEffect: "circular",
	thumbs : {
		autoStart: true,
		axis: 'x',
			}
	});

	$('input:checkbox, input:radio, input:file, select').styler();
	$(window).scroll(function(){

		if ($(this).scrollTop()>160) {
			$('.top_link').stop().animate({ bottom:'47'},500);
		}else {
			$('.top_link').stop().animate({ bottom:'-47'},500);
		}
	});
	$('.top_link').click(function(){
		$('html,body').stop().animate({ scrollTop:'0'},500);
	});

	$( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
    });
    $('.br_tabs ul').on('click','li:not(.active)',function(){
    	$(this).addClass('active').siblings().removeClass('active')
    	.closest('div.br_tabs').find('div.br_tab_content').removeClass('show')
    	.eq($(this).index()).addClass('show');
    });
    function clock(){
    	var d=new Date();
    	var day=d.getDate();
    	var mm=d.getMonth()+1;
    	var yy=d.getFullYear();
    	var hrs=d.getHours();
    	var min=d.getMinutes();
    	var sec=d.getSeconds();
    	if (hrs<=9) hrs='0'+hrs;
    	if (min<=9) min='0'+min;  
    	if (sec<=9) sec='0'+sec;
    	if (day<=9) day='0'+day;
    	if (mm<=9) mm='0'+mm;  
    	$('.clock').html(hrs+':'+min+':'+sec);
    	$('.date').html(day+'.'+mm+'.'+yy)
    };
    setInterval(()=>clock(),500);


   
    $('.minus').click(function(){
    	var cur=$(this).parent().find('input:text').val();
    	if (cur<=1) {return false;}
    	$(this).parent().find('input:text').val(parseInt(cur)-1);

    });
    $('.plus').click(function(){
    	var cur=$(this).parent().find('input:text').val();
    	$(this).parent().find('input:text').val(parseInt(cur)+1);

    });
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 300 ],
      slide: function( event, ui ) {
       $( "#min" ).val(ui.values[ 0 ] );
       $( "#max" ).val(ui.values[ 1 ] );
       $('.ui-slider-handle:first .sticker').text(ui.values[0]);
       $('.ui-slider-handle:last .sticker').text(ui.values[1]);
      }
    });
    $('.ui-slider-handle:first').append($('<b class="sticker icon-droplet">'
    +$("#slider-range").slider('values',0)+'</b>')); 
	$('.ui-slider-handle:last').append($('<b class="sticker icon-droplet">'
	+$("#slider-range").slider('values',1)+'</b>')); 



// Portfolio sorting
  $('.filter li a').click(function () {
    $('.filter li a').removeClass('active');
    $(this).addClass('active');
      var selector = $(this).attr('data-filter');
        $container.isotope({
        filter: selector
      });
        return false;
  });

  	// Portfolio isotope
  var $container = $('.its_isolist');
    $container.imagesLoaded(function () {
    $('.its_isolist').isotope({
      itemSelector: '.item',
      percentPosition: true,
      layoutMode: 'fitRows',
		fitRows: {
		  gutter: 0
		}
    });
  });

var inProgress = false;

var startFrom = 1;

   $("#more").click(function(){
        $.ajax({

            url: '/stock/ajax.php',

            method: 'POST',

            data: {"startFrom" : startFrom},

            beforeSend: function() {
            	 $(".br_loading").css("display","flex");


            inProgress = true;}

            }).done(function(data){
            	$(".br_loading").css("display","none");

            data = jQuery.parseJSON(data);

            if (data.length > 0) {

            $.each(data, function(index, data){


            $(".br_ajax_result").append("<div class='br_stock'><a class='img_link' href='./detail.php?id=" 
            	+data.id+
            	"'> <img src="
            	+data.prev_img+
            	" class='img-fluid'></a><div><h3><a href='./detail.php?id="
            	+data.id+"' >"
            	+data.id+"-"+data.title + 
            	"</a></h3><span>"+data.date+"</span><p>"
            	+data.description+"</p><p><span class='hide_'>"
            	+data.description+
            	"</span><a href='javascript:void(0)'>Show more</a></p><a href='./detail.php?id="
            	+data.id+"' class='btn red'>More details</a></div></div>");
            });

            inProgress = false;

            startFrom += 2;
            }else{
            	
            }
        });
      });


   	$('.br_stock p a').click(function(){
		if($(this).text()=="Show more"){
			alert(123);
			$(this).text("Hide");
			$(this).parent().find('.hide_').show();
		} else {
			$(this).text("Show more");
			$(this).parent().find('.hide_').hide();
		}
	});

	var button = document.getElementById("cart-button");
	var number = document.querySelector('.number');
	var popup = document.querySelector(".popup");
	var plus = document.querySelector(".add");
	var minus = document.querySelector(".minus");
	var background = document.querySelector(".background");
	var counter = 0;

	button.addEventListener("click", function(event){
		if(counter === 0){
			number.classList.add("popup-open");
			popup.classList.add("popup-open");
			setTimeout(increment,640);
			console.log("COUNTER 0");
			minus.classList.add("minus-slide");
			plus.classList.add("add-slide");
		}
		if(counter > 0){
			setTimeout(increment,650);
			popup.classList.add("popup-open");
			popup.classList.add("popup-two");
			setTimeout(function(){
				background.classList.add("background-color");
				setTimeout(function(){
					background.classList.remove("background-color");
				},740);
			},739);
			setTimeout(function(){
				popup.classList.remove("popup-two");
			},740);
		}
	})

	minus.addEventListener("click",function(){
		counter--;
		if(counter == 0 ){
			number.innerHTML = null;
			number.classList.remove("popup-open");
			popup.classList.remove("popup-open");
			popup.classList.remove("popup-two");
			background.classList.remove("background-color");
			minus.classList.remove("minus-slide");
			plus.classList.remove("add-slide");
		}
		else{
			popup.classList.add("popup-open");
			popup.classList.add("popup-two");
			setTimeout(function(){
				background.classList.add("background-color");
				setTimeout(function(){
					background.classList.remove("background-color");
				},740);
			},739);
			setTimeout(function(){
				popup.classList.remove("popup-two");
			},740);
			setTimeout(function(){
				number.innerHTML = counter;
			},650);

		}

	})
	plus.addEventListener("click",function(){

		if(counter == 0){
			number.classList.add("popup-open");
			popup.classList.add("popup-open");
			setTimeout(increment,640);
			console.log("COUNTER 0");
			minus.classList.add("minus-slide");
			plus.classList.add("add-slide");
		}
		if(counter > 0){
			setTimeout(increment,650);

			popup.classList.add("popup-open");
			popup.classList.add("popup-two");
			setTimeout(function(){
				background.classList.add("background-color");
				setTimeout(function(){
					background.classList.remove("background-color");
				},740);
			},739);
			setTimeout(function(){
				popup.classList.remove("popup-two");
			},740);
		}

	})

	function increment(){
		counter = isNaN(counter) ? 0 : counter;
		counter++;
		number.innerHTML = counter;
	}
});
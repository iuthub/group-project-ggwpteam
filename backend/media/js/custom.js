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
	/*$('.layer').fadeIn(500);
	$('.br_modal').fadeIn(600);
	$('body').addClass('br_body');
	$('#yes').click(function(){
		$('.layer').fadeOut(500);
		$('.br_modal').fadeOut(600);
		$('body').removeClass('br_body');
	})*/
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
			$(this).parent().find('label').append('<small>   *-Заполните поле</small>');
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
		//$('.br_logotype span').text('123')
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
/* Переменная-флаг для отслеживания того, происходит ли в данный 
момент ajax-запрос. В самом начале даем ей значение false, 
т.е. запрос не в процессе выполнения */
var inProgress = false;
/* С какой статьи надо делать выборку из базы при ajax-запросе */
var startFrom = 1;

   $("#more").click(function(){
        $.ajax({
            /* адрес файла-обработчика запроса */
            url: '/stock/ajax.php',
            /* метод отправки данных */
            method: 'POST',
            /* данные, которые мы передаем в файл-обработчик */
            data: {"startFrom" : startFrom},
            /* что нужно сделать до отправки запрса */
            beforeSend: function() {
            	 $(".br_loading").css("display","flex");
            /* меняем значение флага на true, т.е. запрос 
            сейчас в процессе выполнения */

            inProgress = true;}

            /* что нужно сделать по факту выполнения запроса */
            }).done(function(data){
            	$(".br_loading").css("display","none");

            /* Преобразуем результат, пришедший от обработчика - 
            преобразуем json-строку обратно в массив */
            data = jQuery.parseJSON(data);

            /* Если массив не пуст (т.е. статьи там есть) */
            if (data.length > 0) {

            /* Делаем проход по каждому результату, оказвашемуся в массиве,
            где в index попадает индекс текущего элемента массива, 
            а в data - сама статья */
            $.each(data, function(index, data){

            /* Отбираем по идентификатору блок со статьями и дозаполняем его новыми данными */
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
            	"</span><a href='javascript:void(0)'>Показать еще</a></p><a href='./detail.php?id="
            	+data.id+"' class='btn red'>Подробнее</a></div></div>");
            });

            /* По факту окончания запроса снова меняем значение флага на false */
            inProgress = false;
            // Увеличиваем на 10 порядковый номер статьи, с которой надо начинать выборку из базы
            startFrom += 2;
            }else{
            	
            }
        });
      });


   	$('.br_stock p a').click(function(){
		if($(this).text()=="Показать еще"){
			alert(123);
			$(this).text("Скрыть");
			$(this).parent().find('.hide_').show();
		} else {
			$(this).text("Показать еще");
			$(this).parent().find('.hide_').hide();
		}
	});


});

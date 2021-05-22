<?php $pagename="Stocks";?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
<div class="row">
	<div class="col-12">
		<?php $page=isset($_GET['page'])?(int)$_GET['page']:1;
		$onpage=2;
		$shift=($page-1)*$onpage;
		$query_stock=mysqli_query($connect,"SELECT * FROM `stocks`LIMIT $shift, $onpage"); ?>
		<?php  foreach ($query_stock as $stock) { ?>
		<div class="br_stock">
			<a class="img_link" href="<?php  ?>">
				<img src="<?php echo $stock['prev_img'] ?>">
			</a>
			<div>
				<h3>
					<a href="javascript:void(0)" title="<?php echo $stock['title']   ?>"><?php echo $stock['id'].'-'.mb_substr(trim($stock['title']),0 ,30,'UTF-8')."..." ?></a>
				</h3>
				<span class="date"></span>
				<p><?php echo mb_substr(trim($stock['description']),0 ,100,'UTF-8')."..." ?></p>
				<p><span class="hide_"><?php echo mb_substr(trim($stock['description']),100 ,250,'UTF-8')."..." ?></span>
					<a href="javascript:void(0)">Show more</a></p>

				<a class="btn red" href="./detail.php?id=<?php echo $stock['id'] ?>">More details</a>
			</div>
		</div>
		<?php }
	?>
	<div class="br_ajax_result">
		
	</div>
	<div class="br_loading">
		<div class="spinner-border text-danger" role="status">
 			<span class="visually-hidden">>_<</span>
		</div>
	</div>
	
	<div class="br_more"> 
		<button class="btn red" id="more">Show more</button>
	</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
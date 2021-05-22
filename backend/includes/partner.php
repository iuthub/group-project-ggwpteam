<div class="br_partner_item owl-carousel owl-theme">
	<?php
	$query_partner=mysqli_query($connect,'SELECT * FROM `partner`');
	while ($partner=mysqli_fetch_assoc($query_partner)) {
?>
	<a href="<?php echo $partner['link']?>" class="item">
	    <img src="<?php echo $partner['img']?>">
    </a>
<?php	

	}
?>
</div>
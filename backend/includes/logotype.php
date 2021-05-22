<?php
	$query_logotype=mysqli_query($connect,'SELECT * FROM `logotype` WHERE id="1"');
	while ($logo=mysqli_fetch_assoc($query_logotype)) {
?>
<a href="<?php echo $logo['link']?>" class="br_logotype navbar-brand">
    <img class="logotransform" src="<?php echo $logo['img']?>" alt="<?php echo $logo['title']?>">
    <span><?php echo $logo['title']?></span>
</a>
<?php	

	}
?>


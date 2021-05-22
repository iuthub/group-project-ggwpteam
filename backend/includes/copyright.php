<?php
	$query_logotype=mysqli_query($connect,'SELECT * FROM `logotype` WHERE id="2"');
	while ($logo=mysqli_fetch_assoc($query_logotype)) {
?>
<div class="br_copyright">
	<span><?php echo $logo['title']?></span>
		<a href="<?php echo $logo['link']?>"></a>
</div>
<?php
	}
?>
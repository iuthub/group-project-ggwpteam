<?php $pagename=$GLOBALS[$key1]; ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
<?php $id=$_GET['id'];
$query_detail=mysqli_query($connect,"SELECT * FROM `stocks` WHERE `id`='$id'"); 
	foreach ($query_detail as $key) {
		$key1=$key['title'];?>
		
		<span><?php echo $key['date']?></span>
		<img src="<?php echo $key['detail_img']?>">
		<p><?php echo $key['description']?></p>


	<?php } ?>


<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
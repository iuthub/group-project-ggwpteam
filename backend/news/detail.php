<?php require($_SERVER['DOCUMENT_ROOT']."/template/header.php");?>

<?php 
$id = $_GET["id"];
$query = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = $id");
foreach ($query as $post) {


?>
<h1>
	<?php echo $post["title"]?>
</h1>

<span><?php echo $post['date']?></span>

<img src="<?php echo $post['detail_img']?>">

<p><?php echo $post['detail_txt']?></p>

<?php }?>

<?php require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");?>
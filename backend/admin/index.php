<?php $pagename="Admin panel"; ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
<?php $query_admin=mysqli_query($connect,"SELECT * FROM `users` WHERE `id`=1"); ?>
<ul>
<?php foreach ($query_admin as $user) { ?>

		<li><img src="<?php echo $user['photo']?>"></li>
		<li><span>Login:</span> <?php echo $user['login']?></li>
		<li><span>Name:</span> <?php echo $user['name']?></li>
		<li><span>Email:</span> <?php echo $user['email']?></li>
		<li><span>Phone:</span> <?php echo $user['tel']?></li>
		<li><span>Date of Birth:</span> <?php echo $user['date']?></li>
		<li><span>Country:</span> <?php echo $user['country']?></li>
		<li><span>Gender:</span> <?php echo $user['gender']?></li>
		
<?php } ?>
</ul>
<a class="btn red"  href="./edit.php">Edit profile</a>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
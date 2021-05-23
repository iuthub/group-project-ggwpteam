<?php $pagename="Editing a profile"; ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
<?php $query_admin=mysqli_query($connect,"SELECT * FROM `users` ORDER BY id DESC LIMIT 1"); ?>
<ul>
<?php foreach ($query_admin as $user) { ?>

		<li><img src="<?php echo $user['photo']?>"></li>
		<li><span>Логин:</span> <?php echo $user['login']?></li>
		<li><span>Имя:</span> <?php echo $user['name']?></li>
		<li><span>email:</span> <?php echo $user['email']?></li>
		<li><span>Телефон:</span> <?php echo $user['tel']?></li>
		<li><span>Дата рождения:</span> <?php echo $user['date']?></li>
		<li><span>Страна:</span> <?php echo $user['country']?></li>
		<li><span>Пол:</span> <?php echo $user['gender']?></li>
		
<?php } ?>
</ul>
<a class="btn red"  href="./edit.php">Edit profile</a>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
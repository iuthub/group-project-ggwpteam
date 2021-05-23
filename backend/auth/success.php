<?php $pagename="Authorization"; ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
<div class="success">
	<h2>Congratulations, you are registered!</h2>
	<span>In a few seconds you will be redirected to the login page.</span>
</div>
<?php header("Refresh:3 url=/auth"); ?>


<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
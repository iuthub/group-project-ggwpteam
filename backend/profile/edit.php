<?php $pagename="Admin panel"; ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
<?php $query_admin=mysqli_query($connect,"SELECT * FROM `users` WHERE `id`=1"); ?>
<?php foreach ($query_admin as $user) { ?>
<form class="application" method="POST" enctype="multipart/form-data">
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Login" name="reg_login" value="<?php echo $user['login']?>" required="">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Name" name="reg_name" value="<?php echo $user['name']?>">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Change your password" name="reg_password" >
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Repeat password" name="reg_repassword">
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" placeholder="Email" name="reg_email" value="<?php echo $user['email']?>">
		  </div>
		  <div class="form-group">
		    <input type="tel" class="form-control" placeholder="Phone" name="reg_tel" value="<?php echo $user['tel']?>">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Date of Birth" name="reg_date" value="<?php echo $user['date']?>">
		  </div>
		  <div class="form-group">
		    <select class="form-control" name="reg_country" >
		    	<?php $query_country=mysqli_query($connect,'SELECT * FROM `country`');
		    		while ($contact=mysqli_fetch_assoc($query_country)) { 
		    		?>
		    	<option >
		    		<?php echo $contact['name']?>
		    	</option>
		    <?php } ?>
		    </select>
		  </div>
		  <div class="form-group">
		    <label>
		    	<input type="radio" name="reg_gender" checked="" value="Male">
		    	<span>Male</span>
		    </label>
		    <label>
		    	<input type="radio" name="reg_gender" value="Female" >
		    	<span>Female</span>
		    </label>
		  </div>
		  <div class="form-group">
		  	<img src="<?php echo $user['photo']?>">
		    <input type="file" class="form-control" name="reg_photo" >
		  </div>
		  <button type="submit" class="btn red" name="reg_submit">Submit</button>
		  <a href="/admin" class="btn red">Back to profile</a>
		</form>
		<?php if(isset($_POST["reg_submit"])){
			$login=$_POST["reg_login"];
			$name=$_POST["reg_name"];
			$password=$_POST["reg_password"];
			$tel=$_POST["reg_tel"];
			$email=$_POST["reg_email"];
			$date=$_POST["reg_date"];
			$country=$_POST["reg_country"];
			$gender=$_POST["reg_gender"];

			$photo="/media/img/upload/".$_FILES["reg_photo"]["name"];
			move_uploaded_file($_FILES["reg_photo"]["tmp_name"],$_SERVER['DOCUMENT_ROOT'].$photo);

			$last_login=trim(htmlspecialchars(strip_tags($login)));
			$last_name=trim(htmlspecialchars(strip_tags($name)));
			$last_password=trim(htmlspecialchars(strip_tags(md5($password))));
			$last_tel=trim(htmlspecialchars(strip_tags($tel)));
			$last_email=trim(htmlspecialchars(strip_tags($email)));
			$last_date=trim(htmlspecialchars(strip_tags($date)));

					
			$query_logotype=mysqli_query($connect,"UPDATE `users` SET `login`='$last_login',`name`='$last_name',`password`='$last_password',`email`='$last_email',`tel`='$last_tel',`date`='$last_date',`country`='$country',`gender`='$gender',`photo`='$photo'WHERE `id`=1");
			header('Refresh:0');
		}
		?>
<?php } ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
<?php $pagename="Authorization"; ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
<div class="row">
	<div class="col-6">
		<form  method="POST" enctype="multipart/form-data">
	<h3>Login</h3>
	<div class="form-group br_input">
		<label>Login</label>
		<input type="text" class="form-control"  name="auth_login" required="">
	</div>
	<div class="form-group hidden_password">
		<label>Password</label>
		<input type="password" class="form-control" name="auth_password">
	</div>
	<button type="submit" class="btn red" name="auth_submit">Submit</button>
</form>

 <?php if(isset($_POST["auth_submit"])){
 	$login=$_POST["auth_login"];
	$password=$_POST["auth_password"];
 	$last_login=trim(htmlspecialchars(strip_tags($login)));
	$last_password=trim(htmlspecialchars(strip_tags(md5($password))));
	$query_users=mysqli_query($connect, "SELECT `login` FROM `users` WHERE `login`='$last_login'AND `password`='$last_password'");
	foreach ($query_users as $user ) {
		if ($user['login']=='admin') {
			$_SESSION['user']=$user['login'];
		header('Location:/admin/');
		} else{ $_SESSION['user']=$user['login'];
		header('Location:/profile/');
    	}
	}
	mysqli_free_result($query_users);
 } ?>
	</div>
    <div class="col-6">
        <form class="application" method="POST" enctype="multipart/form-data">
            <h3>Registration</h3>
            <div class="form-group  br_input">
                <label>Login</label>
                <input type="text" class="form-control" name="reg_login" required pattern="[a-z]{1,10}" title="The login field must contain lowercase Latin letters and from 1 to 10 characters">
            </div>
            <div class="form-group br_input">
                <label>Name</label>
                <input type="text" class="form-control"  name="reg_name" required pattern="[A-Za-zА-Яа-яЁё]{1,10}" title="Name field must contain lowercase Latin letters and from 1 to 10 characters">
            </div>
            <div class="form-group br_input">
                <label>Password</label>
                <input type="password" class="form-control" name="reg_password" required pattern="[A-Za-z0-9]{8,16}" title="Password field must contain lowercase Latin letters and numbers and from 8 to 16 characters">
            </div>
            <div class="form-group br_input">
                <label>Repeat password</label>
                <input type="password" class="form-control" name="reg_repassword2" required pattern="[A-Za-z0-9]{8,16}" title="Password field must contain lowercase Latin letters and numbers and from 8 to 16 characters">
            </div>
            <div class="form-group br_input">
                <label>Email</label>
                <input type="email" class="form-control" name="reg_email" required  pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}">
            </div>
            <div class="form-group br_input">
                <label>Phone</label>
                <input type="tel" class="form-control" name="reg_tel" required pattern="\+998\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}">
            </div>
            <div class="form-group br_input" >
                <label>Date of Birth</label>
                <input type="text" class="form-control" id="datepicker" autocomplete="off" name="reg_date" pattern="[0-9]{2}\-[0-9]{2}\-[0-9]{4}">
            </div>
            <div class="form-group">
                <select  name="reg_country">
                    <?php $query_country=mysqli_query($connect,'SELECT * FROM `country`');
                    while ($contact=mysqli_fetch_assoc($query_country)) {
                        ?>
                        <option >
                            <?php echo $contact['name']?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group gender_choose">
                <label>
                    <input type="radio" name="reg_gender" checked="" value="male">
                    <span>Male</span>
                </label>
                <label>
                    <input type="radio" name="reg_gender" value="female" >
                    <span>Female</span>
                </label>
            </div>
            <div class="form-group ">
                <input type="file"  name="reg_photo">
            </div>
            <button type="submit" class="btn red" name="reg_submit">Submit</button>

        </form>
        <?php if(isset($_POST["reg_submit"])){
            $login=$_POST["reg_login"];
            $name=$_POST["reg_name"];
            $password=$_POST["reg_password"];
            $password2=$_POST["reg_password2"];
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


            if($_POST['reg_password'] != $_POST['reg_password2']){
                echo '<b>Error! The passwords entered do not match!</b><br>';
            }

            $query_users=mysqli_query($connect, "SELECT `login` FROM `users`WHERE `login`='$last_login'");
            $row=mysqli_fetch_row($query_users);
            if (isset($row[0])){ echo "<b>Error! User exists!</b><br>";
            } else {
                $query_logotype=mysqli_query($connect,"INSERT INTO `users` (`login`,`name`,`password`,`email`,`tel`,`date`,`country`,`gender`,`photo`) VALUES ('$last_login','$last_name','$last_password','$last_email','$last_tel','$last_date','$country','$gender','$photo')");
                header('Location:/auth/success.php');
            }}

        ?>
    </div>
</div>


<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
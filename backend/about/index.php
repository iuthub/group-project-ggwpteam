<?php
$pagename="About us";
?>
<?php require($_SERVER['DOCUMENT_ROOT']."/template/header.php");?>



<?php
$_query=mysqli_query($connect, "SELECT * FROM `about` WHERE id='1'");
$_row=mysqli_fetch_assoc($_query);
?>

    <p>
        <?php echo $_row['preview_txt']?>
    </p>

    <div class="br_ico">
        <?php require($_SERVER['DOCUMENT_ROOT']."/includes/advantage.php");?>
    </div>

    <p>
        <?php echo $_row['detail_txt']?>
    </p>


<?php require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");?>
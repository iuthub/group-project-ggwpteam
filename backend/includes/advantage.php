<div class="row br_advantage">
<?php $query_advantage=mysqli_query($connect,'SELECT * FROM `advantage`'); 
$advantage=mysqli_fetch_all($query_advantage);

 foreach ($advantage as $post) { ?>

    <div class="col-3">
        <i class="icon-<?php echo $post['2'];?>"></i>
        <h3><?php echo $post['1'];?></h3>
    </div>
   <?php } ?>
</div>

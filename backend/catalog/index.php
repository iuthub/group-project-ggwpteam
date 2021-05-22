<?php
$pagename="Catalog";
?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
    <div class="br_items">
<?php
    $query = mysqli_query($connect,'SELECT * FROM `catalog`');

    foreach ($query as $item) {

    ?>

        <div class="br_item">
            <a href="javascript:void(0)" class="br_img">
                <img src="<?php echo $item['img']?>">
            </a>
            <h2>
                <a href="javascript:void(0)"><?php echo $item['product']?></a>
            </h2>
            <div class="br_price">
                <span><?php echo $item['price']?>$</span>
                <a href="/payment/index.php" class="btn">Order</a>
            </div>
        </div>

    <?php }
    ?>
    </div>

<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
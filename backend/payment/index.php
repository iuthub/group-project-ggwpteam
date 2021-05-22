<?php
$pagename="Order and Payment";
?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php') ?>
    <div class="br_items">
        <?php
        $query = mysqli_query($connect,'SELECT * FROM `catalog` WHERE id=1');

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

                </div>
            </div>

        <?php }
        ?>
    </div>
    <div class="cart">
        <div class="cart-number">
            <img src="/media/img/src/supermarket.png" alt="">
            <span class="background"></span>
            <span class="popup"></span>
            <span class="number"></span>
        </div>
        <div class="buttons">
            <button class="minus">-</button>
            <button class="cart-button"
                    id="cart-button">Add to cart
            </button>
            <button class="add">+</button>
        </div>
    </div>


<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php') ?>
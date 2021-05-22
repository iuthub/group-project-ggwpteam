<?php
$pagename="Pick-up points";
?>
<?php require($_SERVER['DOCUMENT_ROOT']."/template/header.php");?>

<?php

$page = isset($_GET["page"]) ? (int) $_GET["page"] : 1;

$on_page = 2;

$shift = ($page - 1) * $on_page;

$query = mysqli_query($connect,"SELECT * FROM `points` LIMIT $shift, $on_page");

foreach ($query as $item) {

    ?>

    <div class="br_point">
        <img src="<?php echo $item['img']?>">
        <div>
            <h3><?php echo $item['name']?></h3>
            <p><?php echo $item['address']?></p>

        </div>
    </div>


<?php }


$res = mysqli_query($connect,"SELECT count(*) FROM `points`");

$rows = mysqli_fetch_row($res);

$total = $rows[0];

$pages = ceil($total / $on_page);

?>

    <div class="br_pagination">

        <?php if ($page != 1) { ?>

            <a href="<?php echo "index.php?page=1"?>" class="paglnk">
                <i class="icon-arrow-left"></i>
            </a>

        <?php } ?>

        <ul class="br_paglist">
            <?php
            for ($i = 1; $i <= $pages; $i++) {

                if($i == $page){
                    echo "<li class='current'><a href='javascript:void(0)'> $i </a></li>";
                } else {
                    echo "<li><a href='/points/index.php?page=$i'> $i </a></li>";
                }
            }
            ?>
        </ul>

        <?php if ($shift != $total) { ?>
            <a href="<?php echo "index.php?page=$pages"?>" class="paglnk">
                <i class="icon-arrow-right"></i>
            </a>
        <?php } ?>

    </div>




<?php require($_SERVER['DOCUMENT_ROOT']."/template/footer.php");?>

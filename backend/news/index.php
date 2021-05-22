<?php
$pagename="News";
?>
<?php require($_SERVER['DOCUMENT_ROOT']."/template/header.php");?>
<?php

$page = isset($_GET["page"]) ? (int) $_GET["page"]:1;
$on_page = 2;
$shift = ($page-1)*$on_page;
$result = mysqli_query($connect, "SELECT * FROM `news` LIMIT $shift, $on_page");
foreach ($result as $post) {


    ?>
    <div class="br_newsitem">
        <div class="img">
            <a href="./detail.php?id='<?php echo $post["id"]?>'">
                <img src="<?php echo $post['prev_img']?>">
            </a>
        </div>

        <div>
            <h2>
                <a href="./detail.php?id='<?php echo $post["id"]?>'"><?php echo $post['title']?></a>
            </h2>
            <span class="date"></span>
            <p>
                <?php echo $post['prev_txt']?>
            </p>
            <a class="br_hidelink" href="javascript:void(0)">Show hidden text</a>
            <div class="br_hidetxt">
                <?php echo $post['hide_txt']?>
            </div>
        </div>
    </div>
<?php }

$res = mysqli_query($connect,"SELECT count(*) FROM `news`");

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
                    echo "<li><a href='/news/index.php?page=$i'> $i </a></li>";
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
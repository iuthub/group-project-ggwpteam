<?php require_once($_SERVER['DOCUMENT_ROOT']."/connect/connect.php");


$startFrom = $_POST['startFrom'];


$res = mysqli_query($connect, "SELECT * FROM `stocks` LIMIT {$startFrom}, 2");


$articles = array();
while ($row = mysqli_fetch_assoc($res))
{
    $articles[] = $row;
}


echo json_encode($articles);

?>

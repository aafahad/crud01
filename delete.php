<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "lict ftfl");
$query = "DELETE FROM `lict ftfl`.`profile` WHERE `profile`.`id` = $id";
mysqli_query($link, $query);
header('location:show_info.php');
?>

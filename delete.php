<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "lict_ftfl");
$query = "DELETE FROM `lict_ftfl`.`profile` WHERE `profile`.`id` = $id";
mysqli_query($link, $query);
header('location:show.php');
?>

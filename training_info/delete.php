<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");

$query = "DELETE FROM `crud01`.`training_info` WHERE `training_info`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
?>


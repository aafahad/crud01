<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");

$query = "DELETE FROM `crud01`.`contactinfo` WHERE `contactinfo`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');
?>

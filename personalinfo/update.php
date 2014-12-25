<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$id=$_POST['id'];
$query = "UPDATE `crud01`.`personalinfo` SET `name` = '".$_POST['name']."' WHERE `personalinfo`.`id` =$id;";

mysqli_query($link, $query);

header('location:list.php');

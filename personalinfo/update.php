<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");

$query = "UPDATE `crud01`.`personalinfo` SET `name`='".$_POST['name']."',`father_name`='".$_POST['father_name']."',
`mother_name`='".$_POST['mother_name']."',`gender`='".$_POST['gender']."',`religion`='".$_POST['religion']."',`date_of_birth`='".$_POST['date_of_birth']."',
`nationality`='".$_POST['nationality']."',`national_id`='".$_POST['national_id']."',`birth_reg`='".$_POST['birth_reg']."',
`passport`='".$_POST['passport']."' WHERE `personalinfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');

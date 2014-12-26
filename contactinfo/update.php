<?php


$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "UPDATE `crud01`.`contactinfo` SET `present_address`='".$_POST['present_address']."',`permanent_address`='".$_POST['permanent_address']."',
`district`='".$_POST['district']."',`home_phone`='".$_POST['home_phone']."',`mobile`='".$_POST['mobile']."',`emergency_contact`='".$_POST['emergency_contact']."',
`email`='".$_POST['email']."',`alternate_email`='".$_POST['alternate_email']."' WHERE `contactinfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');

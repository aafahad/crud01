<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query="INSERT INTO `crud01`.`personalinfo` (
`name`
)

VALUES (
                 '".$_POST['name']."'
);";

mysqli_query($link, $query);

header('location:list.php');

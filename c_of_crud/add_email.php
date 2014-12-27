<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "c_of_crud");

$query="INSERT INTO `c_of_crud`.`emails` (
`id` ,
`email` ,
`created`
)
VALUES (
'".$_POST['id']."', '".$_POST['email']."', '".$_POST['created']."'
);";

mysqli_query($link, $query);
header('location:show.php');
?>

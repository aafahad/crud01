<?php

$name = $_POST['name'];
$email= $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "INSERT INTO `crud01`.`users` (
`id` ,
`name` ,
`email` ,
`username` ,
`password`
)
VALUES (
'', '$name', '$email', '$username', '$password');";

mysqli_query($link, $query);
echo $query;
?>
<a href="home.php">GO to Home</a>

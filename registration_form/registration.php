<?php
print_r($_REQUEST);
$name = $_POST['name'];
$email = $_POST['email'];

$username = $_POST['username'];
$password = $_POST['password'];
$phonehome= $_POST['phonehone'];

$link = mysqli_connect("localhost","root","lict@2","crud01");

$query = "INSERT INTO `registration`.`user` (`name`, `email`, `username`, `password`)

VALUES ('$name', '$email', '$username', '$password')";
echo $query;
mysqli_query($link, $query);

<?php
//print_r($_SERVER['REQUEST_METHOD']);
session_start();
if($_SERVER['REQUEST_METHOD']=='GET'){
    header('location:login.php');
}
$_SESSION['loggedin']= true;
//header('location:dashboard.php')
$username = $_POST["username"];
$password = $_POST["password"];
if (isset($username)&& empty($username)) {
    $_SESSION['message']="invalid username";
    header('location:login.php');
}
if (isset($password)&& empty($password)) {
    $_SESSION['messagepass'] = "invalid password";
    header('location:login.php');
}
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "SELECT *
FROM `users`
WHERE `username` = '$username' AND `password`= '$password'; ";
$result = mysqli_query($link, $query);
//
//echo $query;
$row = mysqli_fetch_assoc($result);
//var_dump($row);
if(($username == $row['username']) && ($password == $row['password'])){
//(SEND Data to the SESSION and GO to The Dashboard)
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['username']=$row['username'];
    $_SESSION['password']=$row['password'];
    header('location: dashboard.php');
}

else{
    //(Redirect to the Login page)
    header('location:login.php');
}

?>

<?php

//print_r($_SERVER);
//
//if ($_SERVER['REQUEST_METHOD']=='GET'){
//
//    header('location:login.php');
//
//}
//
//
session_start();
//
//
//$_SESSION ['loggedin'] = TRUE;
//
//print_r($_SESSION);
//
////header('location:dashboard.php');
//


if(isset($_POST['username']) && empty($_POST['username']))
{
    $_SESSION['massage']='invalid username';
    header('location:login.php');
}

elseif(isset($_POST['password']) && empty($_POST['password']))
{
    $_SESSION['massage']='invalid password';
    header('location:login.php');
}

//else{
//    header('location:dashboard.php');
//}


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "registration");

$query="INSERT INTO `registration`.`user` (
`username`,
`password`
)

VALUES (NULL,
    '".$_POST['username']."', '".$_POST['password']."'
);";

$sql= "select * from user where username = $username AND password = $password";

//mysqli_query($link, $query);
$row= mysql_query($query);


if($row != "NULL"){
    if(($username == $row['username']) && ($password == $row['password'])){

        header('location:dashboard.php');
        //(SEND Data to the SESSION and GO to The Dashboard)

    }
    else{
        //(Redirect to the Login page)
        header('location:login.php');
    }
}

?>

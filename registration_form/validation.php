<?php


if(isset($_POST['username']) && empty($_POST['username']))
{
    echo "Name Required";
    header('location:login.php');
}

elseif(isset($_POST['password']) && empty($_POST['password']))
{
    echo "Password Required";
    header('location:login.php');
}

else{
    header('location:dashboard.php');
}
?>



<!--//else{-->
<!--//    $username = $_POST['username'];-->
<!--//    $password = $_POST['password'];-->
<!--//-->
<!--//    $link = mysqli_connect("localhost", "root", "lict@2", "loginsystem");-->
<!--//-->
<!--//    $query = "INSERT INTO `loginsystem`.`users`(`name`, `email`, `username`, `password`, `created`, `modified`)-->
<!--//                      VALUES ('$name', '$email', '$username', '$password', current_timestamp, current_timestamp)";-->
<!--//-->
<!--//    mysqli_query($link, $query);-->
<!---->
<!---->
<!--    //header('location:dashboard.php');-->
<!--//}-->


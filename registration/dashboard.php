<?php
session_start();
if(array_key_exists('loggedin',$_SESSION) && !empty($_SESSION['loggedin'])) {
    echo "Hello,you are on Dashboard";
}else {
    header('location:home.php');
}
if(isset($_SESSION['name'])){
    echo "Hello " . $_SESSION['name'] . "<br>";
    echo "Your email is " .$_SESSION['email']. "<br>";
    echo "You are Registered at " . $_SESSION['created'] . "<br>";
}
else{
    header("location:index.php");
}
?>
<a href="logout.php">Logout</a>
?><br>
<br><br>
<a href="logout.php">LOG OUT</a>

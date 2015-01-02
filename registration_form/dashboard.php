<?php


session_start();


if (array_key_exists('loggedin', $_SESSION)){
    echo "You are on Dashboard";
    ?>
<a href="logout.php">logout</a></br>

<?php
}

else{
    header('location:home.php');
}
?>

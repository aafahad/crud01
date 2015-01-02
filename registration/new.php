//php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/2/15
 * Time: 11:30 AM
 */ *
<?php if(isset($_SESSION['username']))echo $_SESSION['message'];?>
<?php if(isset($_SESSION['password']))echo $_SESSION['messagepass'];?>
    $result = mysqli_query($link, $query);
    echo $query;
    $row = mysql_fetch_assoc($result);
    var_dump($row);
    if ($row["username"] == $username && $row["password"] == $password)
    echo "You are a validated user.";
    else
    echo "Sorry, you are not valid, Please try again.";
    ?>
    ?php
    if(isset($_SESSION['message']))echo $_SESSION['message'];?>
<?php
if(isset($_SESSION['messagepass']))echo $_SESSION['messagepass'];
if($row != "NULL") {
    if (($username != $row['username']) && ($password != $row['password'])) {
//(Redirect to the Login page with a Message)
        $_SESSION['msg'] = "Invalid Username and/or Password. If You are not Registered User Please Complete Registration First or Contact with Administrator.";
        header('location:login.php');
    }
}

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        LOGIN FORM
    </title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['message']))echo $_SESSION['message'];
if(isset($_SESSION['messagepass']))echo $_SESSION['messagepass'];
session_unset()
?>

<form action="checkuser.php" method="post">
    <h1 style="color: brown" align="center" >Login Form</h1>
    <label>Username:</label>
    <input type="text" name="username" /><br>
    <br>
    <label>Password:</label>
    <input type="password" name="password" /><br>
    <br>
    <button type="login">login</button>
</form>
</body>
</html>

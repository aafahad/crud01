<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        Form
    </title>
</head>
<body>
<form action="add.php" method="post">
    <h1 align="center" >Registration Form</h1>
    <label>Name:</label>
    <input type="text" name="name" /><br>
    <br>
    <label>Email:</label>
    <input type="text" name="email" /><br>
    <br>
    <label>Username:</label>
    <input type="text" name="username" /><br>
    <br>
    <label>Password:</label>
    <input type="password" name="password" /><br>
    <br>
    <button type="submit">submit</button>
</form>
</body>
</html>


<?php

session_start();



If(isset($_SESSION['massage'])) echo $_SESSION['massage'];


session_unset();

?>
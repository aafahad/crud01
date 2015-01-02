
<html>
<body>
<p> <a href="registration.php">Register</a>
    <a href="login.php">Login</a></p><br>

<h3> Login Form</h3>

<form action="checkuser.php"method = 'POST'>
    <br>
    <label>User Name:</label>
    <input type ="text" name = "username">
    <br>
    <label>Password:</label>
    <input type ="password" name = "password">
    <br>
    <button type = "submit" name = "submit">login</button>
</form>
</body>
</html>


<?php

session_start();



If(isset($_SESSION['massage'])) echo $_SESSION['massage'];


session_unset();

?>
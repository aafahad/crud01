<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from personalinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<h4>Basic Information</h4>
<hr>

<form action="update.php" method="post">


    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>Name</label><span>*</span>
    <input type="text" name="name" value="<?php echo $row['name'];?>" /></br>

    <button type="submit" align="right">Update</button>

</form>

<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from contactinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<h4>Contact Information</h4>
<hr>

<form action="update.php" method="post">


    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>present_address</label><span>*</span>
    <input type="text" name="present_address" value="<?php echo $row['present_address'];?>" /></br>

    <label>permanent_address</label><span>*</span>
    <input type="text" name="permanent_address" value="<?php echo $row['permanent_address'];?>" /></br>

    <label>district</label><span>*</span>
    <input type="text" name="district" value="<?php echo $row['district'];?>" /></br>

    <label>home_phone</label><span>*</span>
    <input type="text" name="home_phone" value="<?php echo $row['home_phone'];?>" /></br>

    <label>mobile</label><span>*</span>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" /></br>

    <label>emergency_contact</label><span>*</span>
    <input type="text" name="emergency_contact" value="<?php echo $row['emergency_contact'];?>" /></br>

    <label>email</label><span>*</span>
    <input type="text" name="email" value="<?php echo $row['email'];?>" /></br>

    <label>alternate_email</label><span>*</span>
    <input type="text" name="alternate_email" value="<?php echo $row['alternate_email'];?>" /></br>

    <button type="submit" align="right">Update</button>

</form>

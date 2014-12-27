<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");


$query = "SELECT * FROM `contactinfo` WHERE  id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>


<h3></h3>
<dl>
    <dt>present_address</dt>
    <dd><?php echo $row['present_address'];?></dd>

    <dt>permanent_address</dt>
    <dd><?php echo $row['permanent_address'];?></dd>


    <dt>district</dt>
    <dd><?php echo $row['district'];?></dd>

    <dt>home_phone</dt>
    <dd><?php echo $row['home_phone'];?></dd>


    <dt>mobile</dt>
    <dd><?php echo $row['mobile'];?></dd>

    <dt>emergency_contact</dt>
    <dd><?php echo $row['emergency_contact'];?></dd>

    <dt>email</dt>
    <dd><?php echo $row['email'];?></dd>

    <dt>alternate_email</dt>
    <dd><?php echo $row['alternate_email'];?></dd>

</dl>


<a href="list.php">Go to Home</a>


<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");


$query = "SELECT * FROM `personalinfo` WHERE  id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>


<h3></h3>
<dl>
    <dt>name</dt>
    <dd><?php echo $row['name'];?></dd>

    <dt>father_name</dt>
    <dd><?php echo $row['father_name'];?></dd>


    <dt>mother_name</dt>
    <dd><?php echo $row['mother_name'];?></dd>

    <dt>religion</dt>
    <dd><?php echo $row['religion'];?></dd>


    <dt>date_of_birth</dt>
    <dd><?php echo $row['date_of_birth'];?></dd>

    <dt>gender</dt>
    <dd><?php echo $row['gender'];?></dd>

    <dt>nationality</dt>
    <dd><?php echo $row['nationality'];?></dd>

    <dt>national_id</dt>
    <dd><?php echo $row['national_id'];?></dd>

    <dt>birth_reg</dt>
    <dd><?php echo $row['birth_reg'];?></dd>

    <dt>passport</dt>
    <dd><?php echo $row['passport'];?></dd>

</dl>




<a href="list.php">Go to Home</a>

<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
$query = "select * from academics WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//var_dump($row);
?>




<h3></h3>
<dl>
    <dt>Level Of Education</dt>
    <dd><?php echo $row['level_of_education'];?></dd>

    <dt>exam_title</dt>
    <dd><?php echo $row['exam_title'];?></dd>


    <dt>subject</dt>
    <dd><?php echo $row['subject'];?></dd>

    <dt>institution</dt>
    <dd><?php echo $row['institution'];?></dd>


    <dt>result_type</dt>
    <dd><?php echo $row['result_type'];?></dd>

    <dt>result</dt>
    <dd><?php echo $row['result'];?></dd>

    <dt>passing_year</dt>
    <dd><?php echo $row['passing_year'];?></dd>

    <dt>duration</dt>
    <dd><?php echo $row['duration'];?></dd>

    <dt>achievement</dt>
    <dd><?php echo $row['achievement'];?></dd>

</dl>


<a href="list.php">Go to Home</a>


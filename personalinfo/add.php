<?php
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");

$query="INSERT INTO `crud01`.`personalinfo` (`id`, `name`, `father_name`, `mother_name`, `religion`, `date_of_birth`, `gender`, `nationality`, `national_id`, `birth_reg`, `passport`)
                                        VALUES (NULL,
                                             '".$_POST['name']."', '".$_POST['father_name']."', '".$_POST['mother_name']."',
                                             '".$_POST['gender']."', '".$_POST['religion']."', '".$_POST['date_of_birth']."',
                                             '".$_POST['nationality']."', '".$_POST['national_id']."', '".$_POST['birth_reg']."',
                                             '".$_POST['passport']."'
                                        );";



mysqli_query($link, $query);

header('location:list.php');

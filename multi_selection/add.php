<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';


$hobby='';

if(array_key_exists('hobby_travelling','obby_reading).$_POST && !empty('hobby_travelling').$_POST){
    $hobby .= $_POST['hobby_travelling'];
}

if(isset($_POST['hobby_reading']) && !empty($_POST['hobby_reading'])){
    $hobby .= ', ' . $_POST['hobby_reading'];
}

if(isset($_POST['hobby_movie']) && !empty($_POST['hobby_movie'])){
    $hobby .= ', ' . $_POST['hobby_movie'];
}

if(isset($_POST['hobby_others']) && !empty($_POST['hobby_others'])){
    $hobby .= ', ' . $_POST['hobby_others'];
}


echo "$hobby";


//$hobby = array('rice','burger','pizza','others');
//echo join(" ",$hobby);
//
//echo $hobby;


//
//$query="INSERT INTO `crud01`.`multi_select` (
//`id` ,
//`full_name` ,
//`hobby` ,
//`preferred_job_location`
//)
//
//VALUES ('', '$_POST[full_name]', '$_POST[travelling,reading_book,]', '$_POST[preferred_job_location]'
//);";
////
////
//////mysqli_query($link, $query);
//////print_r($_POST)
////
////
//////header('location:list.php');
//

<?php


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "lict_ftfl");
$query="INSERT INTO `lict_ftfl`.`profile` (
`id` ,
`name` ,
`father_name` ,
`mother_name` ,
`gender` ,
`religion` ,
`date_of_birth` ,
`national_id` ,
`birth_reg` ,
`passport_num` ,
`ssc_board` ,
`ssc_roll` ,
`hsc_board` ,
`hsc_roll` ,
`laptop` ,
`exam_center` ,
`mobile` ,
`home_phone` ,
`emergency_contact` ,
`email` ,
`alternate_email` ,
`current_location` ,
`present_address` ,
`parmanent_address`
)
VALUES (NULL,
'".$_POST['name']."', '".$_POST['father_name']."', '".$_POST['mother_name']."',
'".$_POST['gender']."', '".$_POST['religion']."', '".$_POST['date_of_birth']."',
'".$_POST['national_id']."', '".$_POST['birth_reg']."', '".$_POST['passport_num']."',
'".$_POST['ssc_board']."', '".$_POST['ssc_roll']."',
'".$_POST['hsc_board']."', '".$_POST['hsc_roll']."', '".$_POST['laptop']."',
'".$_POST['center']."', '".$_POST['mobile']."',
'".$_POST['home_phone']."', '".$_POST['emergency']."', '".$_POST['email']."',
'".$_POST['alternate_email']."', '".$_POST['current_location']."', '".$_POST['present_address']."', '".$_POST['parmanent_address']."'
);";


//echo $query;

mysqli_query($link, $query);
header('location:show.php');
?>

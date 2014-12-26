<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");


$query="INSERT INTO `crud01`.`contactinfo` (`id`, `present_address`, `permanent_address`,
`district`, `home_phone`, `mobile`,
`emergency_contact`, `email`, `alternate_email`
)
VALUES (NULL,
'".$_POST['present_address']."', '".$_POST['permanent_address']."',
'".$_POST['district']."', '".$_POST['home_phone']."', '".$_POST['mobile']."',
'".$_POST['emergency_contact']."', '".$_POST['email']."', '".$_POST['alternate_email']."'
);";



mysqli_query($link, $query);

header('location:list.php');
?>

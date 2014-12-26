<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");


$query="INSERT INTO `crud01`.`academics` (
`id`, `level_of_education`, `exam_title`,
`subject`, `institution`, `result_type`,
`result`, `passing_year`, `duration`, `achievement`
)

VALUES (NULL,
'".$_POST['level_of_education']."', '".$_POST['exam_title']."',
'".$_POST['subject']."', '".$_POST['institution']."', '".$_POST['result_type']."',
'".$_POST['result']."', '".$_POST['passing_year']."', '".$_POST['duration']."','".$_POST['achievement']."'
);";



mysqli_query($link, $query);

header('location:list.php');
?>

<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");


$query = "select * from academics;";
$result = mysqli_query($link, $query);

?>

<table border="1" width="100%">
    <tr>
        <td>level_of_education</td>
        <td>exam_title</td>
        <td>Subject</td>
        <td>institution</td>
        <td>result_type</td>
        <td>result</td>
        <td>passing_year</td>
        <td>duration</td>
        <td>achievement</td>
    </tr>


    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['level_of_education']?></td>
            <td><?php echo $row['exam_title']?></td>
            <td><?php echo $row['Subject']?></td>
            <td><?php echo $row['institution']?></td>
            <td><?php echo $row['result_type']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['passing_year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>
            <td><a href="view.php?id=<?php echo $row['id']?>">View</a>|
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>|
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>
</table>

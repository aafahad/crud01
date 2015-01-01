<?php

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");


$query = "select * from multi_select;";
$result = mysqli_query($link, $query);

?>

<table border="1" width="100%">
    <tr>
        <td>full_name</td>
        <td>hobby</td>
        <td>preferred_job_location</td>
    </tr>


    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['preferred_job_location']?></td>
            <td><a href="view.php?id=<?php echo $row['id']?>">View</a>|
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>|
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>
</table>

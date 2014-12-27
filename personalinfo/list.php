<?php

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");

$query = "select * from personalinfo;";

$result = mysqli_query($link, $query);

?>


<table border="1" width="100%">
    <tr>
        <td>name</td>
        <td>father_name</td>
        <td>mother_name</td>
        <td>gender</td>
        <td>religion</td>
        <td>date_of_birth</td>
        <td>nationality</td>
        <td>national_id</td>
        <td>birth_reg</td>
        <td>passport</td>
    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['father_name']?></td>
            <td><?php echo $row['mother_name']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['date_of_birth']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['national_id']?></td>
            <td><?php echo $row['birth_reg']?></td>
            <td><?php echo $row['passport']?></td>

            <td> <a href="view.php?id=<?php echo $row['id']?>">View</a> |<a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>

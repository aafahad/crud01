<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from contactinfo;";
$result = mysqli_query($link, $query);

?>

<table border="1" width="100%">
    <tr>
        <td>present_address</td>
        <td>permanent_address</td>
        <td>district</td>
        <td>home_phone</td>
        <td>mobile</td>
        <td>emergency_contact</td>
        <td>email</td>
        <td>alternate_email</td>
    </tr>


    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row['permanent_address']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['home_phone']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['emergency_contact']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['alternate_email']?></td>
            <td><a href="view.php?id=<?php echo $row['id']?>">View</a>|
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>|
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>
</table>

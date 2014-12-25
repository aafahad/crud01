<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "c_of_crud");
$query = "select * from emails;";
$result = mysqli_query($link, $query);
?>

<table border="1" width="100%">
    <tr>
        <td>Id</td>
        <td>email</td>
        <td>Createdr</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['created']?></td>

            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>

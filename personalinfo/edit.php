<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from personalinfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>name</label><span>*</span>
    <input type="text" name="name" value="<?php echo $row['name'];?>" /></br>

    <label>father_name</label><span>*</span>
    <input type="text" name="father_name" value="<?php echo $row['father_name'];?>"/></br>

    <label>mother_name</label><span>*</span>
    <input type="text" name="mother_name" value="<?php echo $row['mother_name'];?>"/></br>

    <label>gender</label><span>*</span>
    <select name="gender";?>">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
    </select></br>

    <label>religion</label><span>*</span>
    <select name="religion">
        <option value="Islam">Islam</option>
        <option value="Christianity">Christianity</option>
        <option value="Buddhism">Buddhism</option>
        <option value="Hinduism">Hinduism</option>
        <option value="Others">Others</option>
    </select></br>

    <label>date_of_birth</label><span>*</span>
    <input type="text" name="date_of_birth" value="<?php echo $row['date_of_birth'];?>"/></br>

    <label>nationality</label><span>*</span>
    <input type="text" name="nationality" value="<?php echo $row['nationality'];?>"/></br>

    <label>national_id</label><span>*</span>
    <input type="text" name="national_id" value="<?php echo $row['national_id'];?>"/></br>

    </br>

    <label>birth_reg</label>
    <input type="text" name="birth_reg" value="<?php echo $row['birth_reg'];?>"/></br>

    <label>passport</label>
    <input type="text" name="passport" value="<?php echo $row['passport'];?>"/></br>

    </br>

    <button type="submit" align="right">Update</button>

</form>

<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");

$query = "select * from ict_skills WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>experience_cat</label><span>*</span>
    <select name="experience_cat" >
    <option <?php if ($row['experience_cat']=='EEE') echo 'selected'?> value="EEE">EEE</option>
    <option <?php if ($row['experience_cat']=='CSE') echo 'selected'?> value="CSE">CSE</option>
    <option <?php if ($row['experience_cat']=='BBA') echo 'selected'?> value="BBA">BBA</option>
    <option <?php if ($row['experience_cat']=='HR') echo 'selected'?> value="HR">HR</option>
    <option <?php if ($row['experience_cat']=='Others') echo 'selected'?> value="Others">Others</option>
    </select></br>


    <label>skill_description</label><span>*</span>
    <input type="text" name="skill_description" value="<?php echo $row['skill_description'];?>" /></br>

    <label>extracurricular</label><span>*</span>
    <input type="text" name="extracurricular" value="<?php echo $row['extracurricular'];?>"/></br>

    </br>

    <button type="submit" align="right">Update</button>

</form>

<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "crud01");

$query = "select * from academics WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>

<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>level_of_education</label><span>*</span>
    <select name="level_of_education" >
        <option <?php if ($row['level_of_education']=='SSC') echo 'selected'?> value="SSC">SSC</option>
        <option <?php if ($row['level_of_education']=='HSC') echo 'selected'?> value="HSC">HSC</option>
        <option <?php if ($row['level_of_education']=='BACHELORS') echo 'selected'?> value="BACHELORS">BACHELORS</option>
        <option <?php if ($row['level_of_education']=='MASTERS') echo 'selected'?> value="MASTERS">MASTERS</option>
    </select></br>




    <label>exam_title</label><span>*</span>
    <input type="text" name="exam_title" value="<?php echo $row['exam_title'];?>" /></br>


    <label>subject</label><span>*</span>
    <input type="text" name="subject" value="<?php echo $row['subject'];?>"/></br>


    <label>institution</label><span>*</span>
    <select name="institution" >
        <option <?php if ($row['institution']=='DU') echo 'selected'?> value="DU">DU</option>
        <option <?php if ($row['institution']=='JU') echo 'selected'?> value="JU">JU</option>
        <option <?php if ($row['institution']=='AIUB') echo 'selected'?> value="AIUB">AIUB</option>
        <option <?php if ($row['institution']=='NSU') echo 'selected'?> value="NSU">NSU</option>
    </select></br>


    <label>result_type</label>
    <select name="result_type" >
        <option <?php if ($row['result_type ']=='grade') echo 'selected'?> value="grade">grade</option>
        <option <?php if ($row['result_type ']=='division') echo 'selected'?> value="division">division</option>
    </select></br>


    <label>result</label><span>*</span>
    <input type="text" name="result" value="<?php echo $row['result'];?>"/></br>


    <label>passing_year</label><span>*</span>
    <input type="text" name="passing_year" value="<?php echo $row['passing_year'];?>"/></br>


    <label>duration</label><span>*</span>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>"/></br>


    <label>achievement</label>
    <input type="text" name="achievement" value="<?php echo $row['achievement'];?>"/></br>
    </br>


    <button type="submit" align="right">Update</button>

</form>

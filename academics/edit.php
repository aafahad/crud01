<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");

$query = "select * from academics WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>

<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>level_of_education</label>
    <select name="level_of_education";?>">
    <option value="SSC">SSC</option>
    <option value="HSC">HSC</option>
    <option value="BACHELORS">BACHELORS</option>
    <option value="MASTERS">MASTERS</option>
    </select></br>



    <label>exam_title</label><span>*</span>
    <input type="text" name="exam_title" value="<?php echo $row['exam_title'];?>" /></br>


    <label>subject</label><span>*</span>
    <input type="text" name="subject" value="<?php echo $row['subject'];?>"/></br>


    <label>institution</label>
    <select name="institution";?>">
    <option value="DU">DU</option>
    <option value="JU">JU</option>
    <option value="AIUB">AIUB</option>
    <option value="NSU">NSU</option>
    </select></br>


    <label>result_type</label>
    <select name="result_type";?>">
    <option value="grade">grade</option>
    <option value="division">division</option>
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

<?php

mysql_connect("localhost","root","lict@2");
mysql_select_db("crud01");

$id=addslashes($_REQUEST['id']);

$image=mysql_query("SELECT * FROM photo WHERE id=$id");
$image=mysql_fetch_assoc($image);
$image=$image['image'];

header("Content-type: image/jpeg");

echo $image;

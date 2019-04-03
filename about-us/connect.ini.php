<?php

$conn_error='Could not connect';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='blood_manage';
@($con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db)) or die($conn_error);
//@mysqli_select_db($mysql_db) or die($conn_error);
//echo 'Connected!';
?>
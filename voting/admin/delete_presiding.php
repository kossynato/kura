<?php
include('dbcon.php');


$id=$_POST['id'];
$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$data_name = $_POST['data_name'];
$user_name = $_POST['user_name'];

mysql_query("delete from presiding where VoterID='$id'");

mysql_query("INSERT INTO history (`data`,`action`,`date`,user)VALUES('$data_name', 'Deleted Presiding', '$pc_date $pc_time','$user_name')")or die(mysql_error());	


?>
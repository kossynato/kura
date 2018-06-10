<?php
include('dbcon.php');

$id=$_POST['id'];
$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$data_name = $_POST['data_name'];


mysql_query("delete from candidate where CandidateID='$id'");


mysql_query("INSERT INTO history (`data`,`action`,`date`,user)VALUES('$data_name', 'Deleted Candidate', '$pc_date $pc_time','Admin')");	


?>
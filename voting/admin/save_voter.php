<?php

include('dbcon.php');
 
$regno=$_POST['regno'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$UserName=$_POST['UserName'];
$Section=$_POST['Section'];
$Year=$_POST['Year'];
$Password=$_POST['Password'];
$VoterID=$_POST['VoterID'];

$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$user_name=$_POST['user_name'];
mysql_query("insert into voters (regno,FirstName,LastName,UserName,Password,VoterID,Status,Year,MiddleName)
values('$regno','$FirstName','$LastName','$UserName','$Password','$VoterID','Unvoted','$Year','$Section')");

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$FirstName $LastName', 'Added Voter', '$pc_date $pc_time','$user_name')")or die(mysql_error());
?>

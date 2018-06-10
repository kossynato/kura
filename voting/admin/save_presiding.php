<?php

include('dbcon.php');
 
$PayrollNo=$_POST['PayrollNo'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$UserName=$_POST['UserName'];
$MiddleName=$_POST['MiddleName'];
$Password=$_POST['Password'];


$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$user_name=$_POST['user_name'];
$sql=mysql_query("insert into presiding (PayrollNo,FirstName,LastName,MiddleName,UserName,Password,Status)
           values('$PayrollNo','$FirstName','$LastName','$MiddleName','$UserName','$Password','active')");

$sql=mysql_query("INSERT INTO history (data,action,date,user)VALUES('$FirstName $LastName', 'Added Voter', '$pc_date $pc_time','$user_name')")or die(mysql_error());

if($sql){  
     //javascript   
  echo "<script type=\"text/javascript\">window.alert('Presiding Officer is successfuly Added');window.location.href = 'new_presiding.php';</script>";
     }
     else{
      echo "<script type=\"text/javascript\">window.alert('Presiding Officer is  NOT successfuly Added');window.location.href = 'new_presiding.php';</script>";
      }
?>

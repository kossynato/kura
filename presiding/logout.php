<?php
include('session.php');
include('dbcon.php');


$login_query=mysql_query("select * from users where User_id=$id_session");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);
$f=$row['FirstName'];
$l=$row['LastName'];
$type=$row['User_Type'];

session_start();


mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Logout', NOW(),'$type')")or die(mysql_error());




session_destroy();
header('location:../login.php');
?>
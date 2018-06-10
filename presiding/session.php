<?php
session_start();
if (!isset($_SESSION['id'])){

header('location:presiding/index.php');
}
$session_id=$_SESSION['id'];
?>
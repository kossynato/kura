<?php
session_start();
if (!isset($_SESSION['id'])){

header('location:save_voter.php');
}
?>
$session_id=$_SESSION['id'];
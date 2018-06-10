<?php
if (isset($_POST['vote'])){


$Sports=$_POST['Sports'];
mysql_query("insert into votes (CandidateID)values('$Sports')")or die(mysql_error());

$Spiritual=$_POST['Spiritual'];
mysql_query("insert into votes (CandidateID)values('$Spiritual')")or die(mysql_error());

$Social=$_POST['Social'];
mysql_query("insert into votes (CandidateID)values('$Social')")or die(mysql_error());


$cathering=$_POST['Cathering'];
mysql_query("insert into votes (CandidateID)values('$cathering')")or die(mysql_error());

$hostel=$_POST['Hostel'];
mysql_query("insert into votes (CandidateID)values('$hostel')")or die(mysql_error());


mysql_query("update voters set Status='Voted' where VoterID='$session_id'") or die(mysql_error());

?>
<?php

header('location:thankyou.php');
}
?>
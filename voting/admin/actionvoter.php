<?php
include('dbcon.php');
if(isset($_GET['session']))
{
$session1=$_GET['session'];
$select=mysql_query("select * from voters where VoterID='$session1'");
while($row=mysql_fetch_object($select))
{
$session_var=$row->session;
if($session_var=='0')
{
$session_state=1;
}
else
{
$session_state=0;
}
$update=mysql_query("update voters set session='$session_state' where VoterID='$session1' ");
if($update)
{
header("Location:activate_voter.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>
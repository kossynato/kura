'<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<?php include('dbcon.php');
include('header.php');
include('session.php');
 ?>
<script src="jquery.iphone-switch.js" type="text/javascript"></script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="brand">
		<img src="pic/counts.jpg" width="60" height="60">
 	</a>
	<a class="brand">
	 
	 <div class="chmsc_nav"><font size="4" color="white"><H2>OLGILGE UNIVERSITY</H2></font></div>
 	</a>

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
<div class="wrapper">

<div class="hero-body-voting">
<div class="vote_wise1"><font color="white" size="6">"Official Ballot"</font></div>
<div class="back">
<a class="btn btn-info" id="bak"  href="voting3.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
</div>
</div>

<div class="hero-body-456">
</div>
<?php include('ingiza.php')?>	

<form method="POST">

<?php 

if (isset($_POST['save'])){
$spiritual=$_POST['Spiritual'];
$sports=$_POST['Sports'];
$social=$_POST['Social'];
$cathering=$_POST['Cathering'];
$hostel=$_POST['Hostel'];

//spiritual affairs
$result=mysql_query("select * from candidate where CandidateID='$spiritual'")or die(mysql_query());
$row=mysql_fetch_array($result);
$name=$row['FirstName']."  ".$row['LastName'];
//
//sports
$result=mysql_query("select * from candidate where CandidateID='$sports'")or die(mysql_query());
$row_vice=mysql_fetch_array($result);

$name1=$row_vice['FirstName']."  ".$row_vice['LastName'];
//
//social affairs
$result=mysql_query("select * from candidate where CandidateID='$social'")or die(mysql_query());
$Representative1_row=mysql_fetch_array($result);

$name2=$Representative1_row['FirstName']."  ".$Representative1_row['LastName'];
//
//cathering
$result=mysql_query("select * from candidate where CandidateID='$cathering'")or die(mysql_query());
$Representative2_row=mysql_fetch_array($result);

$name3=$Representative2_row['FirstName']."  ".$Representative2_row['LastName'];
//

//Representative3
$result=mysql_query("select * from candidate where CandidateID='$hostel'")or die(mysql_query());
$Representative3_row=mysql_fetch_array($result);

$name4=$Representative3_row['FirstName']."  ".$Representative3_row['LastName'];
//
}
 
?>

<div class="ballot">

<div class="cent">
<p>spiritual affairs:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php  echo $name; 
if ($spiritual == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}
?>



 <input type="hidden" name="Spiritual" value="<?php echo $spiritual; ?>"/>
 
</div>
</br>
</br>
<div class="cent">
<p>sports:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php  echo $name1;
if ($sports == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}

 ?>
 <input type="hidden" name="Sports" value="<?php echo $sports; ?>"/>
</div>
</br>
</br>

<div class="cent">
<p>social affairs:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php  echo $name2;
if ($social == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}

 ?>
 <input type="hidden" name="Social" value="<?php echo $social; ?>"/>
</div>
</br>
</br>


<div class="cent">
<p>cathering:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php  echo $name3;
if ($cathering == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}

 ?>
 <input type="hidden" name="Cathering" value="<?php echo $cathering ?>"/>
</div>
</br>
</br>

<div class="cent">
<p>hostel:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php  echo $name4;
if ($hostel == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}

 ?>
 <input type="hidden" name="Hostel" value="<?php echo $hostel ?>"/>
</div>
</br>
</br>
</div>


<div class="hero-body-456">
<div class="ok_vote">

		<a class="btn btn-success" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Submit Final Votes</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal"></button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Submit Final Votes?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	<input type="submit" class="btn btn-primary" name="vote" value="vote" /><i class="icon-thumbs-up icon-large"></i>&nbsp;Yes</button>
		</div>
		</div>
	</div>
</div>

</form>
	<?php include('footer1.php')?>	
</div>

    </body>
	
</html>
			
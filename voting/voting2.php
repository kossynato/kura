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
		<img src="pic/counts.jpg"width="60" height="60">
 	</a>
	<a class="brand">
	 
	 <div class="chmsc_nav"><font size="4" color="white"><h2>OLGILGE UNIVERSITY</h2></font></div>
 	</a>

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
	<div class="container">
<div class="hero-body-voting">
<div class="vote_wise"><font color="white" size="6">"Please Vote Wisely"</font></div>
</div>
<form method ="post" action="vote2.php">
<div class="gov-align">
<div class="hero-body-candidate_gov">
<font color="white"><h2><b><center>Candidates for spiritual affairs</b></h2></center></font>
</div>
<div class="governor">
<div class="gov-margin">
<?php 
$governor=mysql_query("select * from candidate where Position='Spiritual Affairs' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($governor)){ $governor_id=$row['CandidateID']; ?>

<img class="gov" src="<?php echo $row['Photo'];?>" width="150" height="150" border="0" onMouseOver="showtrail('<?php echo $row['Photo'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onMouseOut="hidetrail()">
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="governor">
<div class="gov-margin">
<select name="Spiritual" class="span222">
<option class="option">--Select Candidate--</option>
<?php
$governor=mysql_query("select * from candidate where Position='Spiritual Affairs' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($governor)){ $governor_id=$row['CandidateID']; ?>
<option value="<?php echo $governor_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>


<div class="vice-align">
<div class="hero-body-candidate1">
<font color="white"><h2><b><center>Candidates for sports and association</center></b></h2></font>
</div>

<div class="governor">
<div class="gov-margin">
<?php 
$vice=mysql_query("select * from candidate where Position='Sports and Asociation' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($vice)){ $vice_id=$row['CandidateID']; ?>

<img class="gov" src="<?php echo $row['Photo'];?>" width="150" height="150" border="0" onMouseOver="showtrail('<?php echo $row['Photo'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onMouseOut="hidetrail()">
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="governor">
<div class="gov-margin">
<select name="Sports" class="span222">
<option class="option">--Select Candidate--</option>
<?php
$vice=mysql_query("select * from candidate where Position='Sports and Asociation' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($vice)){ $vice_id=$row['CandidateID']; ?>
<option value="<?php echo $vice_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>


<div class="vice-align">
<div class="hero-body-candidate1">
<font color="white"><h2><b><center>Candidates for social affairs</center></b></h2></font>
</div>

<div class="governor">
<div class="gov-margin">
<?php 
$representative=mysql_query("select * from candidate where Position='Social Affairs' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($representative)){ $representative_id=$row['CandidateID']; ?>

<img class="gov" src="<?php echo $row['Photo'];?>" width="150" height="150" border="0" onMouseOver="showtrail('<?php echo $row['Photo'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onMouseOut="hidetrail()">
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="governor">
<div class="gov-margin">
<select name="Social" class="span222">
<option class="option">--Select Candidate--</option>
<?php
$representative=mysql_query("select * from candidate where Position='Social Affairs' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($representative)){ $representative_id=$row['CandidateID']; ?>
<option value="<?php echo $representative_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>

<div class="vice-align">
<div class="hero-body-candidate1">
<font color="white"><h2><b><center>Candidates for cathering</center></b></h2></font>
</div>

<div class="governor">
<div class="gov-margin">
<?php 
$representative=mysql_query("select * from candidate where Position='Cathering' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($representative)){ $representative_id=$row['CandidateID']; ?>

<img class="gov" src="<?php echo $row['Photo'];?>" width="150" height="150" border="0" onMouseOver="showtrail('<?php echo $row['Photo'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onMouseOut="hidetrail()">
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="governor">
<div class="gov-margin">
<select name="Cathering" class="span222">
<option class="option">--Select Candidate--</option>
<?php
$representative1=mysql_query("select * from candidate where Position='Cathering' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($representative1)){ $representative1_id=$row['CandidateID']; ?>
<option value="<?php echo $representative1_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>

<div class="vice-align">
<div class="hero-body-candidate1">
<font color="white"><h2><b><center>Candidates for hostel and campus security</center></b></h2></font>
</div>

<div class="governor">
<div class="gov-margin">
<?php 
$representative=mysql_query("select * from candidate where Position='Hostel and Campus Security' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($representative)){ $representative_id=$row['CandidateID']; ?>

<img class="gov" src="<?php echo $row['Photo'];?>" width="150" height="150" border="0" onMouseOver="showtrail('<?php echo $row['Photo'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onMouseOut="hidetrail()">
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="governor">
<div class="gov-margin">
<select name="Hostel" class="span222">
<option class="option">--Select Candidate--</option>
<?php 
$representative2=mysql_query("select * from candidate where Position='Hostel and Campus Security' AND status=1")or die(mysql_error());
while($row=mysql_fetch_array($representative2)){ $representative2_id=$row['CandidateID']; ?>
<option value="<?php echo $representative2_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>









<div class="thumbnail_widget">

<div class="submit-vote">

	<button id="save_voter"  id="vote2" class="btn btn-success" name="save"><i class="icon-thumbs-up icon-large"></i>&nbsp;Submit Vote</button>
</div>
</div>

<div class="thumbnail_widget1">

<div class="submit-vote">

	<a class="btn" id="index" data-toggle="modal" href="#myModal"><i class="icon-circle-arrow-left icon-large"></i>&nbsp;Vote later</a>
</div>
</div>






</form>
</br>

<div class="foot">
	<?php include('footer1.php')?>
</div>	
</div>
</div>

    </body>
	
</html>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Vote Later?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout_back.php" class="btn btn-success">Yes</a>
		</div>
		</div>		
											
	
'<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<?php include('dbcon.php');
include('header.php');
include('session.php');
 ?>
 <script type="text/javascript">
	$(document).ready(function()
		{
		 var delay = 2000;
		setTimeout(function(){ window.location = '../login.php';}, delay);  
    });
	
	

</script>
 
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
	 
	 <div class="chmsc_nav"><font size="4" color="white"><h2>OLGILGE UNIVERSITY</h2></font></div>
 	</a>

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
<div class="wrapper">
<?php 
$result=mysql_query("select * from voters where VoterID='$session_id'") or die(mysql_error());
$row=mysql_fetch_array($result);
?>
<div class="thank_you">
<div class="thank">
<h2><font size="6" color="white">Thank You For Voting:&nbsp;&nbsp;<?php echo $row['FirstName']." ".$row['LastName'];?></font></h2>
</div>
<?php session_destroy(); ?>

</div>
</div>




	
</div>

    </body>
	
</html>
												
											
	
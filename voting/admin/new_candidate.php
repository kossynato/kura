<?php
include('header.php');
include('dbcon.php');
include('session.php');
?>
</head>
<script language="JavaScript" src="gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li class="active"><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  
		<li><a  href="presiding.php"><i class="icon-table icon-large"></i>Presiding Officer</a>
	  <li class=""><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
		 <li><a  href="canvassing_report.php"><i class="icon-book icon-large"></i>Canvassing Report</a></li>
		    <li><a  href="History.php"><i class="icon-table icon-large"></i>History Log</a>
		   <div class="modal hide fade" id="about">
	<div class="modal-header"> 
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	  <?php include('about.php') ?>
	  <div class="modal-footer_about">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		   <li>....</li>
	 </ul>
	<form class="navbar-form pull-right">
		<?php $result=mysql_query("select * from users where User_id='$id_session'");
	$row=mysql_fetch_array($result);
	?>
	<font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['User_Type']; ?></font>
	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	
	
	<div id="element" class="hero-body">
	
	<form method="POST"  name="frmname"action="save_candidate.php" class="form-horizontal" enctype="multipart/form-data">
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
    <fieldset>
   	       <div class="pagination">
    <ul>

    <li><a href="candidate_list.php"><font color="white">All</font></a></li>
    <li><a href="candidate_for_governor.php"><font color="white">SPIRITUAL AFFAIRS</font></a></li>
    <li><a href="candidate_for_vice-governor.php"><font color="white">SPORTS AND ASSOCIATION</font></a></li>
    <li><a href="1st_year.php"><font color="white">SOCIAL AFFAIRS</font></a></li>
    <li><a href="2nd_year.php"><font color="white">CATHERING</font></a></li>
    <li><a href="3rd_year.php"><font color="white">HOSTEL AND CAMPUS SECURITY</font></a></li>
    
   
 
  
    </ul>
	

    </div>

	<div class="pagination">
		  <ul>

    
    <li  class="active"><a href="new_candidate.php"><font color="white"><i class="icon-plus icon-large"></i>Add Candidates</font></a></li>
  
    </ul>
	</div>
	<div class="candidate_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">


   
	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="rfirstname" class="rfirstname">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="rlastname" class="rlastname">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Gender:</label>
    <div class="controls">
   <select name="rgender" class="rgender" id="span2">
   	<option></option>
	<option>Male</option>
	<option>FeMale</option>
	
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Year Level:</label>
    <div class="controls">
   <select name="ryear" class="ryear" id="span2">
  	<option></option>
	<option>1st year</option>
	<option>2nd year</option>
	<option>3rd year</option>
	<option>4th year</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
    <input type="text" name="rmname" class="rmnane">
    </div>
    </div>
	

	
	<div class="control-group">
    <label class="control-label" for="input01">Position:</label>
    <div class="controls">
   <select name="rposition" class="rposition" id="span22">
   	<option></option>
	<option>Spiritual Affairs</option>
	<option>Sports and Asociation</option>
	<option>Social Affairs</option>
	<option>Cathering</option>
	<option>Hostel and Campus Security</option>
	<option>Academics and Research</option>
	
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Party:</label>
    <div class="controls">
    <input type="text" name="party" class="party">
    </div>
    </div>
	
	
	<div class="control-group">
	<label class="control-label" for="input01">Image:</label>
    <div class="controls">
	<input type="file" name="image" class="font"> 
    </div>
    </div>

	
	
	<div class="control-group">
    <div class="controls">
		<button class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	</div>
	<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("frmname");
  
  frmvalidator.addValidation("rfirstname","req","Please enter First name;'");
  frmvalidator.addValidation("rfirstname","maxlen=20",   "Max length for FirstName is 20");
  frmvalidator.addValidation("rfirstname","minlen=3",    "Min length for FirstName is 3");
  frmvalidator.addValidation("rfirstname","alpha","Alphabetic chars only");
  
  frmvalidator.addValidation("rlastname","req","Please enter last Name");
  frmvalidator.addValidation("rlastname","maxlen=30",  "Max length for Last name is 30");
  frmvalidator.addValidation("rlastname","minlen=3",   "Min length for Last name is 3");
  frmvalidator.addValidation("rlastname","alpha","Alphabetic chars only");

  
  frmvalidator.addValidation("rgender","req","Please select gender e.g female or male");
  frmvalidator.addValidation("rgender","maxlen=30", "Max length for Address is 30");
  frmvalidator.addValidation("rgender","minlen=3",  "Min length for Address is 3");


  
  frmvalidator.addValidation("ryear","req","Please select  Year of study First");
  frmvalidator.addValidation("ryear","maxlen10", "Max length for date is 30");
  frmvalidator.addValidation("ryear","minlen=3", "Min length for dater is 3");


  frmvalidator.addValidation("rmname","req","Please enter MiddleName Name");
  frmvalidator.addValidation("rmname","maxlen=30",  "Max length for MiddleName is 30");
  frmvalidator.addValidation("rmname","minlen=3",   "Min length for MiddleName is 3");
  frmvalidator.addValidation("rmname","alpha","Alphabetic chars only");


  frmvalidator.addValidation("rposition","req","Please select Position");
  frmvalidator.addValidation("rposition","maxlen10", "Max length for Position is 30");
  frmvalidator.addValidation("rposition","minlen=3", "Min length for Position is 3");
  	

  
  
  frmvalidator.addValidation("party","req","Please enter Party");
  frmvalidator.addValidation("party","maxlen=30", "Max length for Party is 30");
  frmvalidator.addValidation("party","minlen=3", "Min length for Party is 2");


    frmvalidator.addValidation("image","req","Please select  image before  pressing save button");

//]]></script>

	<?php include('footer.php')?>


</div>
</div>
</div>



</body>
</html>

	  
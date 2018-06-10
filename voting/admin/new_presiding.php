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
	  <li><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  
		<li class="active"><a  href="presiding.php"><i class="icon-table icon-large"></i>Presiding Officer</a>
	  <li><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
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

	<form action="save_presiding.php" method="post" class="form-horizontal" name="frmname">
	<input type="hidden" class="pc_date" name="pc_date"/>
	<input type="hidden" class="pc_time" name="pc_time" />
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
	
    <fieldset>
 	    <div class="pagination">
    <ul>

    <li><a href="presiding.php"><font color="white">All</font></a></li>
    <li  class=""><a href="Active_presiding.php"><font color="white">Presiding Officer</font></a></li>
    
    <li  class="active"><a href="new_presiding.php"><font color="white"><i class="icon-plus icon-large"></i>Add Presiding Officer</font></a></li>
  
   
 
  
    </ul>
    </div>
	
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">

    <div class="control-group">
    <label class="control-label" for="input01">PAYROLNO.:</label>
    <div class="controls">
    <input type="text" name="PayrollNo" class="PayrollNo">
    </div>
    </div>
  
	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="FirstName" class="FirstName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="LastName" class="LastName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
   <input type="text" name="MiddleName" class="MiddleName">
    </div>
    </div>
	
	
	
	<div class="control-group">
    <label class="control-label" for="input01">UserName:</label>
    <div class="controls">
  <input type="text" name="UserName" class="UserName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Password:</label>
    <div class="controls">
  <input type="text" name="Password" class="Password">
    </div>
    </div>
	
	<div class="control-group">
    <div class="controls">
	<button type="submit" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	
    </div>
    </li>
    </ul>
    <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("frmname");
  frmvalidator.addValidation("PayrollNo","req","Please PayrollNo is important input");
  frmvalidator.addValidation("PayrollNo","maxlen=20");
  frmvalidator.addValidation("PayrollNo","minlen=4", "Min length for PayrollNo is 4");
  frmvalidator.addValidation("PayrollNo","numeric", "PayrollNo should be numeric you entered  alphanumeric");
  
  frmvalidator.addValidation("FirstName","req","Please enter First name;'");
  frmvalidator.addValidation("FirstName","maxlen=20",   "Max length for FirstName is 20");
  frmvalidator.addValidation("FirstName","minlen=3",    "Min length for FirstName is 3");
  frmvalidator.addValidation("FirstName","alpha","Alphabetic chars only");
  
  frmvalidator.addValidation("LastName","req","Please enter last Name");
  frmvalidator.addValidation("LastName","maxlen=30",  "Max length for Last name is 30");
  frmvalidator.addValidation("LastName","minlen=3",   "Min length for Last name is 3");
  frmvalidator.addValidation("LastName","alpha","Alphabetic chars only");


  frmvalidator.addValidation("MiddleName","req","Please enter MiddleName Name");
  frmvalidator.addValidation("MiddleName","maxlen=30",  "Max length for MiddleName is 30");
  frmvalidator.addValidation("MiddleName","minlen=3",   "Min length for MiddleName is 3");
  frmvalidator.addValidation("MiddleName","alpha","Alphabetic chars only");


  frmvalidator.addValidation("UserName","req","Please UserName is important input first 5 should be 20100");
  frmvalidator.addValidation("UserName","maxlen=10");
  frmvalidator.addValidation("UserName","minlen=6", "Min length for UserName is 6");
  frmvalidator.addValidation("UserName","numeric", "UserName should be numeric you entered  alphanumeric");

  
  frmvalidator.addValidation("Password","req","Please input Password you are almost done");
  frmvalidator.addValidation("Password","maxlen=30", "Max length for Address is 30");
  frmvalidator.addValidation("Password","minlen=3",  "Min length for Address is 4");

//]]></script>

	
	<?php include('footer.php'); ?>	
	</div>
	</div>
	</div>
		
	
	
</div>

</body>
</html>

<script type="text/javascript">
$(document).ready( function () {

/*  another date shit*/

var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
/*asta d*/

jQuery('#save_presiding').submit(function(e){
    e.preventDefault();
var FirstName = jQuery('.PayrollNo').val();
var FirstName = jQuery('.FirstName').val();
var LastName = jQuery('.LastName').val();
var Section = jQuery('.MiddleName').val();
var UserName = jQuery('.UserName').val();
var Password = jQuery('.Password').val();
	
    e.preventDefault();
if (FirstName && LastName && Section && Year && UserName && Password){	
    var formData = jQuery(this).serialize();	
	
    jQuery.ajax({
        type: 'POST',
        url:  'save_presiding.php',
        data: formData,
             success: function(msg){
            showNotification({
message: "Voter Successfully Added",
type: "success", 
autoClose: true, 
duration: 5 

});

		 var delay = 2000;
		setTimeout(function(){ window.location = 'presiding.php';}, delay);  
	
        }
    });
	
}else
{
alert('All fields are required!');
return false;
}	
});


});
</script>
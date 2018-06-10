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
	  <div class="center"><h2><B>VOTER REGISTRATION</B></h2></center></div>
	 </ul>
	<form class="navbar-form pull-right">

	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Exit</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to exit?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="login.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	
	<div id="element" class="hero-body">

	<form id="save_voter" class="form-horizontal" name="frmname">
	<input type="hidden" class="pc_date" name="pc_date"/>
	<input type="hidden" class="pc_time" name="pc_time" />
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
	
    <fieldset>
	
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">

    <div class="control-group">
    <label class="control-label" for="input01">REGNO.:</label>
    <div class="controls">
    <input type="text" name="regno" class="regno">
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
   <input type="text" name="Section" class="Section">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01" >Year Level:</label>
    <div class="controls">
   <select name="Year" class="Year" id="span2">
   <option></option>
	<option>1st year</option>
	<option>2nd year</option>
	<option>3rd year</option>
	<option>4th year</option>
	</select>
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
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
	 <a href="../Displinary/" class="btn btn-large btn-info full-width">LOGIN</a>
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
  
  frmvalidator.addValidation("regno","req","Please REGNO is important input");
  frmvalidator.addValidation("regno","maxlen=15");
  frmvalidator.addValidation("regno","minlen=15", "Min length for REGNO is 15");
  
  frmvalidator.addValidation("FirstName","req","Please enter First name;'");
  frmvalidator.addValidation("FirstName","maxlen=20",   "Max length for FirstName is 20");
  frmvalidator.addValidation("FirstName","minlen=3",    "Min length for FirstName is 3");
  frmvalidator.addValidation("FirstName","alpha","Alphabetic chars only");
  
  frmvalidator.addValidation("LastName","req","Please enter last Name");
  frmvalidator.addValidation("LastName","maxlen=30",  "Max length for Last name is 30");
  frmvalidator.addValidation("LastName","minlen=3",   "Min length for Last name is 3");
  frmvalidator.addValidation("LastName","alpha","Alphabetic chars only");

  frmvalidator.addValidation("Section","req","Please enter MiddleName Name");
  frmvalidator.addValidation("Section","maxlen=30",  "Max length for MiddleName is 30");
  frmvalidator.addValidation("Section","minlen=3",   "Min length for MiddleName is 3");
  frmvalidator.addValidation("Section","alpha","Alphabetic chars only");

  
  
  frmvalidator.addValidation("Year","req","Please select  Year of study First");
  frmvalidator.addValidation("Year","maxlen10", "Max length for date is 30");
  frmvalidator.addValidation("Year","minlen=3", "Min length for dater is 3");

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

jQuery('#save_voter').submit(function(e){
    e.preventDefault();
var FirstName = jQuery('.regno').val();
var FirstName = jQuery('.FirstName').val();
var LastName = jQuery('.LastName').val();
var Section = jQuery('.Section').val();
var Year = jQuery('.Year').val();
var UserName = jQuery('.UserName').val();
var Password = jQuery('.Password').val();
	
    e.preventDefault();
if (FirstName && LastName && Section && Year && UserName && Password){	
    var formData = jQuery(this).serialize();	
	
    jQuery.ajax({
        type: 'POST',
        url:  'save_voter.php',
        data: formData,
             success: function(msg){
            showNotification({
message: "Voter Successfully Added",
type: "success", 
autoClose: true, 
duration: 5 

});

		 var delay = 2000;
		setTimeout(function(){ window.location = 'voter_list.php';}, delay);  
	
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
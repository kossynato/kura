
<?php 
   error_reporting(E_ERROR);	
   session_start(); 
   include('dbcon.php');	
   ob_start();


$message="";
if(count($_POST)>0) { 

$password = $_POST["password"];
$username = $_POST["username"];
$usertype = $_POST["usertype"];

   switch ($usertype) {
   
    case 'admin':

		$result = mysql_query("SELECT * FROM users WHERE UserName='" .$username. "' and Password = '". $password."' ");
		$row  = mysql_fetch_array($result);
		if(is_array($row)) {
			$_SESSION["id"] = $row['User_id'];
			$_SESSION["username"] = $row['UserName'];
			header("Location:admin/");
		} else {
			$message .= '
			<div class="col-lg-4 col-lg-offset-4">	
		
			<div class="alert alert-error">
		
				<a href="#" class="close" data-dismiss="alert">&times;</a>
		
				<strong>Error!</strong> Invalid Username Or Password.
		
			</div>
		 </div>	
		
		';
		}
	 break;

	case 'student':
	    
		$result = mysql_query("SELECT * FROM voters WHERE UserName='" .$username. "' and Password = '". $password."' and voters.session=1");
		$row  = mysql_fetch_array($result);
		if(is_array($row)) {
			$_SESSION["id"] = $row['VoterID'];
			$_SESSION["Username"] = $row['Username'];
			header("Location:../kura/index.php");
		} else {
			$message .= '
			<div class="col-lg-4 col-lg-offset-4">	
		
			<div class="alert alert-error">
		
				<a href="#" class="close" data-dismiss="alert">&times;</a>
		
				<strong>Error!</strong> Invalid Username Or Password or your account is temporarily deactivated by the admin.
		
			</div>
		 </div>	
		
		';
		}
	
	break;
		
	case 'presiding':
	    
		$result = mysql_query("SELECT * FROM presiding WHERE UserName='" .$username. "' and Password = '". $password."'");
		$row  = mysql_fetch_array($result);
		if(is_array($row)) {
			$_SESSION["id"] = $row['VoterID'];
			$_SESSION["username"] = $row['UserName'];
			header("Location:../presiding/index.php");
		} else {
			$message .= '
			<div class="col-lg-4 col-lg-offset-4">	
		
			  <div class="alert alert-error">
		
				   <a href="#" class="close" data-dismiss="alert">&times;</a>
		
				     <strong>Error!</strong> Invalid Username Or Password.
		
			    </div>
		    </div>	
		
		';
		}
	
	break;
	
    
	default:
	 $message .= '
			<div class="col-lg-4 col-lg-offset-4">	
		
			<div class="alert alert-error">
		
				<a href="#" class="close" data-dismiss="alert">&times;</a>
		
				<strong>Error!</strong> Invalid Username Or Password.
		
			</div>
		 </div>	
		
		';
		
	break;	
		
 }
 
 }
?>


<!DOCTYPE html>
<html lang="en-US" class="no-js">

	<head>

		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
		<title>Online Voting System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		
		<!-- ==============================================
		CSS
		=============================================== --> 
		<link rel="stylesheet" href="kura/assets/css/bootstrap.css">   
		<link rel="stylesheet" href="kura/assets/css/font-awesome.css">
		<link rel="stylesheet" href="kura/assets/css/font-awesome.css">
		<link rel="stylesheet" href="kura/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrapValidator.min.css">
        <link rel="stylesheet" href="kura/assets/css/INDEX.css">
        <link  href="kura/assets/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		
		
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script language="JavaScript" src="gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        
     </head>

<body class="pamba">

    <div class="navbar navbar-default navbar-fixed-top scroll-me">
        <!-- pass scroll-me class above a tags to starts scrolling -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">

                   <img src="kura/assets/img/counts.jpg">
                </a>
     <a class="brand">
	 <div class="chmsc_nav"><font size="4" color="white">OLGILGE UNIVERSITY</font></div>
	</a>

            </div>

            
            <div class="pull-right">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="glyphicon glyphicon-calendar"></span>
            <?php
            $Today = date('y:m:d');
            $new = date('l, F d, Y', strtotime($Today));
            echo $new;
            ?>
   			 </div>
   			 <br>
   			 <div class="clockstyle pull-right" id="clockDisplay"></div>

        </div>
    </div>

     <!-- ==============================================
	 Login Section
	 ================================================ -->
	  <section class="login" id="login">
	   <div class="container">
	    <?php echo $message; ?>
	    <div class="row">
		  <div class="col-lg-4 col-lg-offset-4">
				<h1 class="text-center">Online Voting System</h1>
				<br>
				<form method="post" id="loginform" name="frmname"> 
				  <div class="form-group">
				    <label for="name">Username</label>
					<input name="username" type="text" class="form-control" placeholder="Enter Username...">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
					<input name="password" type="password" class="form-control"  placeholder="Enter Password...">
				  </div>
				  <div class="form-group">
				    <label for="usertype">User Type</label>
					<select name="usertype" type="text" class="form-control" >
					  <option value="admin">Admin</option>
					  <option value="student">Student</option>
					  <option value="presiding">Presiding Officer</option>
					  
					 </select>
				  </div>
				  <div>
				  <br/>
				  <button type="submit" name="login" class="btn btn-large btn-success full-width">SUBMIT</button><br/><br/>
				  <a href="../register/new_voter.php" class="btn btn-large btn-success full-width">VOTER REGISTRATION</a>
				  <br>
				  <br>
				  <a href="../forgot/index.php" class="btn  btn-success full-width ">FORGOT PASSWORD</a>
				  </div>
				</form>
			</div><!-- /.col-lg-7 -->
			
			
		 </div><!-- /.row -->	
	  </div><!-- /.container -->
	</section>
	
	<!-- ==============================================
	 Scripts
	 =============================================== -->
	 
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/respond.min.js"></script>
	<script src="js/html5shiv.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/application.js"></script>
	<script src="js/bootstrapValidator.min.js"></script>
	<script src="js/pi.js"></script>
	
		
		<script type="text/javascript" >
			function renderTime(){
				
				var currentTime= new Date();
				var diem="AM";
				var h=currentTime.getHours();
				var m=currentTime.getMinutes();
				var s=currentTime.getSeconds();
				
				if(h==0){
					h=12;
				} else if(h>12){
					h=h-12;
					diem="PM";
				}
				
				if(h<10){
					h="0" + h;
				}
				if(m<10){
					m="0" + m;
				}
				if(s<10){
					s="0" + s;
				}
				
				var myClock = document.getElementById('clockDisplay');
				myClock.textContent=h+":"+m+":"+s+" "+diem;
				myClock.innerHTML=h+":"+m+":"+s+" "+diem;
				
				setTimeout('renderTime()',1000);
			}
			renderTime();
		</script>
	
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("frmname");
  
  frmvalidator.addValidation("username","req","Please input UserName");
  frmvalidator.addValidation("username","maxlen=15");
  frmvalidator.addValidation("username","minlen=4", "Min length for UserName is 4");
  
  frmvalidator.addValidation("password","req","Please input  Password;'");
  frmvalidator.addValidation("password","maxlen=20",   "Max length for Password is 20");
  frmvalidator.addValidation("password","minlen=4",    "Min length for Password is 4");
  

//]]></script>
	
</body>
</html>

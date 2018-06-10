?<<!DOCTYPE html>
<html>
<head>
	<title>Online Voting System</title>
</head>
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-transition.js"></script>
<script type="text/javascript" src="js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>


<!----hover pop up -->
<script src="js/main.js" type="text/javascript"></script>
<script src="js/mouseover_popup.js" type="text/javascript"></script


<link rel="icon" href="images/chmsc.png" type="image" />
 <link rel="stylesheet" media="screen" type="text/css" href="css/spacegallery.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/custom.css" />

    
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/spacegallery.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
	
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen, projection" />
	 <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" media="screen, projection" />
	 <link rel="stylesheet" href="css/font-awesome.css">
	 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/Home.css" media="screen, projection" />
<body align ="center"> 
<div class="demo_jui">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
<tr>
<th colspan="2">RegNo</th>
<th colspan="2">FirstName</th>
<th colspan="2" >LastName</th>
<th colspan="2">MiddleName</th>
<th colspan="2">UserName</th> 

<th colspan="2">Password</th>
<th colspan="2">Year</th>
<th colspan="2">Status</th>
<th colspan="2">Actions</th>
<th colspan="2">Sex</th>
<th colspan="2">Description</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT firstname,lastname,username,idno,dateofbirth,phono,address,county,sex,description FROM registration where sex="female"';

mysql_select_db('ovs');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
              echo '<tr>';
              echo '<td colspan="2">'.$row['firstname'].'</td>';
			  echo '<td colspan="2">'.$row['lastname'].'</td>';
              echo '<td colspan="2">'.$row['username'].'</td>';
              echo '<td colspan="2">'.$row['idno'].'</td>';
              echo '<td colspan="2">'.$row['dateofbirth'].'</td>';
              echo '<td colspan="2">'.$row['phono'].'</td>';
              echo '<td colspan="2">'.$row['address'].'</td>';
              echo '<td colspan="2">'.$row['county'].'</td>';
              echo '<td colspan="2">'.$row['sex'].'</td>';
              echo '<td colspan="2">'.$row['description'].'</td>';
              echo '<td colspan="2">
              <a class="btn btn-success" href="#"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>
              <a class="btn btn-danger" href="#"><i class="icon-trash icon-large"></i>&nbsp;Delete</a></td>';
              echo '</tr>';
            }
              
            
      ?>
      </tbody>
      </table>
      </body>

<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>RegNo.</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>MiddleName</th>
				<th>UserName</th>
				<th>Password</th>
				<th>Year</th>
				<th>Status</th>
				<th>Actions</th>
				</tr>
			</thead>
			<tbody>
	</tr>

			</tbody>
		</table>
	</div>

</body>
</html>
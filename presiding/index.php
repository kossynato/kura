<?php
include('header.php');
include('dbcon.php');
include('session.php');
?>
</head>

<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
 
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	

	<form class="navbar-form pull-right">
    <a class="btn btn-primary" data-toggle=""  href="../kura/index.php"><i class="icon-off"></i>&nbsp;HOME</a>
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
<div class="pagination">
    <ul>

     <li><a href="index.php"><font color="white">All</font></a></li>
    <li><a href="spiritual.php"><font color="white">SPIRITUAL AFFAIRS</font></a></li>
    <li><a href="sports.php"><font color="white">SPORTS AND ASSOCIATION</font></a></li>
    <li><a href="social.php"><font color="white">SOCIAL AFFAIRS</font></a></li>
    <li><a  href="cathering.php"><font color="white">CATHERING</font></a></li>
    <li><a href="hostel.php"><font color="white">HOSTEL AND SECURITY</font></a></li>
    <li><a href="activate_candidate.php"><font color="white"><i class="icon-active icon-large"></i>Candidate Approval</font></a></li>
   
    </ul>
    </div>
	<?php
	$query=mysql_query("select  * from candidate WHERE status=1");
	$row=mysql_fetch_array($query); $id_excel=$row['CandidateID'];	
	?>

	<form method="POST" action="canvassing_excel.php">
	<input type="hidden" name="id_excel" value="<?php echo $id_excel; ?>">
	<button id="save_voter" class="btn btn-success" name="save"><i class="icon-download icon-large"></i>Download Excel File</button>
	</form>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th class="hide">abc</th>
				<th>Position</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Year</th>
				<th>Photo</th>
				<th>Actions</th>
				
				</tr>
			</thead>
			<tbody>


<?php $candidate_query=mysql_query("select  * from candidate WHERE  status=1");
		while($candidate_rows=mysql_fetch_array($candidate_query)){ $id=$candidate_rows['CandidateID'];
		$fl=$candidate_rows['FirstName'];
	
		?>

<tr class="del<?php echo $id ?>">
	<td align="center" class="hide"><?php echo $candidate_rows['abc']; ?></td>
	<td align="center"><?php echo $candidate_rows['Position']; ?></td>
	<td><?php echo $candidate_rows['FirstName']; ?></td>
	<td><?php echo $candidate_rows['LastName']; ?></td>
	<td align="center"><?php echo $candidate_rows['Year']; ?></td>
	<td align="center"><img class="pic" width="40" height="30" src="<?php echo $candidate_rows['Photo'];?>" border="0" onMouseOver="showtrail('<?php echo $candidate_rows['Photo'];?>','<?php echo $candidate_rows['FirstName']." ".$candidate_rows['LastName'];?> ',200,5)" onMouseOut="hidetrail()"></a></td>
	<td width="360" align="center">
	<a class="btn btn-info"  data-toggle="modal" href="#<?php echo $id; ?>" ><i class="icon-list icon-large"></i>&nbsp;View</a>
	<a class="btn btn-danger1" id="<?php echo $id; ?>"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>&nbsp;
	
	</td>

<div class="modal hide fade" id="<?php echo $id ?>">
	<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h1>Candidate Information</h1>
</div>	
	  <div class="modal-body">
	  
	  <p><img src="<?php echo $candidate_rows['Photo'];?>" width="200" height="200"></p>
	  <div class="pull-right-modal">
	  <p>
	  FirstName:&nbsp;<?php echo $candidate_rows['FirstName'];  ?>
	  </p>
	   <p>
	  LastName:&nbsp;<?php echo $candidate_rows['LastName'];  ?>
	  </p>
	  <p>
	  MiddleName:&nbsp;<?php echo $candidate_rows['MiddleName'];  ?>
	  </p>
	  <p>
	  Gender:&nbsp;<?php echo $candidate_rows['Gender'];  ?>
	  </p>
	
	   <p>
	  Position:&nbsp;<?php echo $candidate_rows['Position'];  ?>
	  </p>
	   <p>
	  Party:&nbsp;<?php echo $candidate_rows['Party'];  ?>
	  </p>
	  <p>
	  Year:&nbsp;<?php echo $candidate_rows['Year'];  ?>
	  </p>
	  </div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
	  
		</div>
		</div>	
		</div>
		</div>

	
<input type="hidden" name="data_name" class="data_name<?php echo $id ?>" value="<?php echo $candidate_rows['FirstName']." ".$candidate_rows['LastName']; ?>"/>
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['id']; ?>"/>
	
	</tr>
<?php } ?>

			</tbody>
		</table>
	</div>	
	</div>	
<?php include('footer.php')?>
	
</div>
<input type="hidden" class="pc_date" name="pc_date"/>
<input type="hidden" class="pc_time" name="pc_time"/>
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
	
	var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
	
	
	$('.btn-danger1').click( function() {
		
		var id = $(this).attr("id");
		var pc_date = $('.pc_date').val();
		var pc_time = $('.pc_time').val();
		var data_name = $('.data_name'+id).val();
		var user_name = $('.user_name').val();
		
		if(confirm("Are you sure you want to delete this Candidate?")){
			
		
			$.ajax({
			type: "POST",
			url: "delete_candidate.php",
			data: ({id: id,pc_time:pc_time,pc_date:pc_date,data_name:data_name,user_name:user_name}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow'); 
			} 
			}); 
			}else{
			return false;}
		});				
	});

</script>
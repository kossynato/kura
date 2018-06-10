<?php
include('header.php');
include('dbcon.php');
include('session.php');

?>
<html>
<title></title>
<head>
<link href="css/bootstrap.css"  rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
 
<div class="home_body">
	<form method="POST" action="canvassing_excel.php">
	<input type="hidden" name="id_excel" value="<?php echo $id_excel; ?>">
	<button id="save_voter" class="btn btn-success" name="save"><i class="icon-download icon-large"></i>Download Excel File</button>
	</form>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th class="hide">Abc</th>
				<th>Position</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Year</th>
			
				<th>Photo</th>
				<th>No. of Votes</th>
				
				</tr>
			</thead>
			<tbody>

<?php $candidate_query=mysql_query("select  * from candidate");
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
		<td align="center">
	<?php $votes_query=mysql_query("select * from votes where CandidateID='$id'");
	$vote_count=mysql_num_rows($votes_query);
	echo $vote_count;
	?>
</td>	




	
	
	
<input type="hidden" name="data_name" class="data_name<?php echo $id ?>" value="<?php echo $candidate_rows['FirstName']." ".$candidate_rows['LastName']; ?>"/>
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
	
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

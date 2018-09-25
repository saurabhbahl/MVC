<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
<title></title>

</head>

<body>

<div class="container">
<div class="table-responsive">
<div class="panel">


<div class="col-lg-8">
<h1>Subject List</h1>
</div>


</div>

	<table class="table table-bordered table-striped table-hover">
	
	<tr>
	<th>S.No</th>
	<th>Subject Name</th>
	</tr>	
		
	
	<?php    
	include_once('../dbConnection.php');
	
	

				$i=1;
				foreach($list as $key => $element)
				{
					?>
					
					<tr>
					
					<td><?php echo $i; ?></td>
					<td><?php echo $element['subject_name']; ?> </td>
					</tr>
				<?php	
				$i++;
				}
		
			
			
				//echo "<tr><td colspan='3'>No Result Found</tr>";
			
	//		var_dump($list);
?>			
				
	
	
	
	</table>
	</div>
	</div>

</body>
</html>

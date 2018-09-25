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
<div class="row">

<div class="col-lg-8">
<h1>Student List</h1>
</div>

<div class="col-lg-4" style="margin-top:24px;;">
<a href="index.php?controller=controllerSubjects&method=getSubjectList&param=''"><button class="btn btn-primary" style="position:absolute;top:4%;">View Subject List</button></a>
</div>

</div>

</div>

	<table class="table table-bordered table-striped table-hover">
	
	<tr>
	<th>Name</th>
	<th>Age</th>
	<th>Number</th>
	</tr>	
		
	
	<?php    
	include_once('../dbConnection.php');
	include_once('Modals/ElementStudent.php');	
	

	
				foreach($list as $key => $element)
				{
					?>
					
				
					<tr>
					<td><a href="index.php?controller=controller&method=getStudentList&param=<?php echo $element->name ?>" ><?php echo $element->name?></a></td>
					<td><?php echo $element->age; ?></td>
					<td><?php echo $element->phone_number; ?> </td>
					</tr>
				<?php	
				}
		
			
			
				//echo "<tr><td colspan='3'>No Result Found</tr>";
			
	//		var_dump($list);
?>			
				
	
	
	
	</table>
	</div>
	</div>

</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
<title></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</head>
<body>

<div class="container">
<div class="panel">
<h3>Student Details</h3>
</div>
<form >

<?php  
//var_dump($sDetails);
 foreach($sDetails as $key => $value)
{
 //echo " ".$value['student_name']." K ";

 foreach($value as $r => $k){
//var_dump($value['id']);
//echo " ".$k."=".$r."<br>";

?>
<div class="form-group">
<label><?php echo $r; ?></label>
<input class="form-control" type='text' value='<?php echo $k ?>' readonly></input> 

</div>

<?php
 }
}
	?>
</form>
</div>
</body>

</html>
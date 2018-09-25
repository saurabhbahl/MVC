<?php

//echo "index.php";
include_once('Controllers/controller.php');
include_once('Controllers/controller_student_subjects.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' || (isset($_GET['controller']) && isset($_GET['method']) )) 
{

	$controller = $_GET['controller'];
	$method = $_GET['method'];
	$param=$_GET['param'];

	
	$Controller=new $controller();

	$Controller->$method($param);
	
}
else
{
	

$controller=new controller();
$controller->getStudentList("");
}
?>
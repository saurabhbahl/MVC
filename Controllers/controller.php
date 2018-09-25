<?php
include_once('Modals/modal.php');
class controller
{
	
	public $modal;
	
	function __construct()
	{
		$this->modal=new Modal();
		
	}
	
	function getStudentList($param)
	{
		//echo $param;
		if($param!= null)
		{
		  	
			//echo "Id".$_GET['id'];
			$sDetails=$this->modal->getStudentDetails($param);
			include 'Views/student_details.php';
		}
		else
		{
			
			$list=$this->modal->getStudentData();
			include 'Views/studentList.php';
		}
	}
	
}

?>
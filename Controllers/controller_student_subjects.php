<?php
include_once('Modals/modal_student_subject.php');

class controllerSubjects
{
	
	public $modal;
	
	function __construct()
	{
		$this->modal=new ModalSubjectList();
		
	}
	
	function getSubjectList()
	{
		
			$list=$this->modal->getSubjects();
			include 'Views/student_subject_list.php';
	
//fdfdffdffdfdfdfdf;	
//rt
	}
	
	
	
}

?>
<?php
class ModalSubjectList
	{
		
		
		function getSubjects()
		{
			include '../dbConnection.php';
		
			
			$sql="select * from student_subjects";
			$result=mysqli_query($conn,$sql);
			$sSubList=array();
		
			if(mysqli_num_rows($result) > 0)
			{
				while($row= mysqli_fetch_assoc($result))
				{
				$sSubList[]=$row;	
				}
				
			}
			return $sSubList;
		}
		
		
		
		
		
	}

?>
<?php



	class Modal
	{
		
		
		function getStudentData()
		{
			include '../dbConnection.php';
			include 'ElementStudent.php';
			
			$sql="select * from student_add";
			$result=mysqli_query($conn,$sql);
			$sList=array();
		
			if(mysqli_num_rows($result) > 0)
			{
				while($row= mysqli_fetch_assoc($result))
				{
				$sList[]=new ElementStudent($row['student_name'],$row['student_age'],$row['student_phone']);	
				}
				
			}
			return $sList;
		}
		
		
		function getStudentDetails($studentName)
		{
			include '../dbConnection.php';
			include 'ElementStudent.php';
			
			$sql="select * from student_add where student_name='".$studentName."'";
			$result=mysqli_query($conn,$sql);
			$sDetail=array();
		
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
				//	echo "$ ".$row['id'];
					//var_dump($row);
					$sDetail[]= $row;	
				}
				
			}
			return $sDetail;
			
		}
		
		
	}

?>
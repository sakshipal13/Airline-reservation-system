<?php include('../connect.php');?>
<?php
	$tokenno="";
	$name="";
	$email="";
	$contact="";
	$message="";
	$errors= array();
	$output="";
	
	if(isset($_POST['submit']))
	{
	$tokenno=$_POST['tokenno'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$message=$_POST['message'];

	if(empty($email)){
		array_push($errors,"field is required");
	}
	if(empty($contact)){
		array_push($errors,"field is required");
	}
	if(count($errors)==0)
	{	
			
		$sql= "INSERT INTO contact (tokenno,name,email,contact,message)
				VALUES('$tokenno','$name','$email','$contact','$message')";
				mysqli_query($db,$sql);
		{
			$query = "SELECT * FROM contact WHERE tokenno LIKE '%$tokenno%'";
			$run=mysqli_query($db,$query);
			$count = mysqli_num_rows($run);
			$line1='Your token is Submitted';
			if($count==1){
			$output='<span style="color: white; font-size: 40px;">'.$line1.'';
			}
			else
			{
	    	$line2='Your token is not found';
			$output .='<span style="color: white; font-size: 40px;">'.$line2.'';
			}
		}		
	}
	}
	if(isset($_POST['back']))
	{
		header('location:../index.php');
	}
	

?>
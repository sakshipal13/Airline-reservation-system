<?php include('../connect.php');?>
<?php
	$fname="";
	$lname="";
	$flight_type="";
	$fromsrc="";
	$todest="";
	$flyon="";
	$returnon="";
	$adult="";
	$children="";
	$tclass="";
	$phno="";
	$email="";
	$errors= array();
	$output='';
	$token="";
	$line='THANK YOU! Your ticket token number is : ';
	
	if(isset($_POST['next']))
	{
		{
			$flight_type=$_POST['flight_type'];
			$fromsrc=$_POST['fromsrc'];
			$todest=$_POST['todest'];
			$flyon=$_POST['flyon'];
			$returnon=$_POST['returnon'];
			$tclass=$_POST['tclass'];
			$sql= "INSERT INTO query (flight_type,fromsrc,todest,flyon,returnon,tclass)
				VALUES('$flight_type','$fromsrc','$todest','$flyon','$returnon','$tclass')";
			mysqli_query($db,$sql);
			header('location:flights.php');
		}
	}

	if(isset($_POST['book']))
	{
		header('location:details.php');
	}
	if(isset($_POST['submit']))
	{
	$fromsrc=$_POST['fromsrc'];
	$todest=$_POST['todest'];
	$flyon=$_POST['flyon'];
	$returnon=$_POST['returnon'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$adult=$_POST['adult'];
	$children=$_POST['children'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];

	if(empty($fname)){
		array_push($errors,"Name is required");
	}
	if(count($errors)==0)
	{	
			
		$sql= "INSERT INTO details (fname,lname,fromsrc,todest,flyon,returnon,adult,children,phno,email)
				VALUES('$fname','$lname','$fromsrc','$todest','$flyon','$returnon','$adult','$children','$phno','$email')";
				//mysqli_query($db,$sql);
		if(mysqli_query($db,$sql))
		
		$token=mysqli_insert_id($db);
		$output='<span style="color: White; font-size: 40px;">'.$line.''.$token.'';
		

	}
	}

	if(isset($_POST['back']))
	{
		header('location:../index.php');
	}
	



?>
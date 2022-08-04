<?php include('../connect.php');?>
<?php
	$tokenno="";
	$baggage="";
	$tseat="";
	$tcheck="";
	$ins="";
	$ref="";
	$errors= array();
	$output="";
	if(isset($_POST['submit']))
	{
	$tokenno=$_POST['tokenno'];
	$baggage=$_POST['baggage'];
	$tseat=$_POST['tseat'];
	$tcheck=$_POST['tcheck'];
	$ins=$_POST['ins'];
	$ref=$_POST['ref'];

	if(empty($tokenno)){
		array_push($errors,"field is required");
	}
	
	if(count($errors)==0)
	{	
			
		$sql= "INSERT INTO add_on (tokenno,tseat,baggage,tcheck,ins,ref)
				VALUES('$tokenno','$tseat','$baggage','$tcheck','$ins','$ref')";
				mysqli_query($db,$sql);
		{
			$query = "SELECT * FROM add_on WHERE tokenno LIKE '%$tokenno%'";
			$run=mysqli_query($db,$query);
			$count = mysqli_num_rows($run);
			$line1='Your Request is Submitted';
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
<?php include('../connect.php');?>
<?php
	$output='';
	$name="";
	$flight_type="";
	$fromsrc="";
	$flyon="";
	$tclass="";
	if(isset($_POST['back']))
	{
		header('location: ../index.php');
	}

if(isset($_POST['key']))
{
	$key= $_POST['key'];
	$query = "SELECT * FROM details WHERE token LIKE '%$key%'";
	$run=mysqli_query($db,$query);
	$count = mysqli_num_rows($run);
	$line1='Your ticket is not yet Booked';
	if($count==0){
		$output='<span style="color: White; font-size: 40px;">'.$line1.'';
	}
	else
	{
		while($row = mysqli_fetch_array($run))
		{
	    	$fname=$row['fname'];
	    	$fromsrc=$row['fromsrc'];
	    	$flyon=$row['flyon'];
	    	$todest=$row['todest'];
	    }
	    	$line2='Your Journey is confirmed Mr. ';
			$output .='<span style="color: White; font-size: 40px;">'.$line2.''.$fname.' From '.$fromsrc.' To '.$todest.' On '.$flyon.'';
	}
}
	?>	
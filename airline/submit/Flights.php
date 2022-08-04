<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<style>
		button[class=submit] {   
 	width: 200px ;
    background-color: #5882e2;
    color: white;
    padding: 14px 20px;
    margin:8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type=submit]:hover {
   /* background-color: #5882e2;*/
    background-color: rgb(100,450,100);
}
	</style>


</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="booking-form">
				<h2 style="text-align: center; color: white">CHOOSE ONE</h2>
			</div>
			<div class="container">
				<form method="post" action="flights.php">
				<div class="booking-form">
				<div class="row" style="align-items: center;">
				<img src="img/ficon.jpg" style="width:100px;height:100px;margin-left:100px; margin-right:500px">	
				<button name="book" class="submit">Proceed</button>	
				</div>
			</div><br><br>
				<div class="booking-form">
				<div class="row" style="align-items: center;">
				<img src="img/ficon1.png" style="width:100px;height:100px;margin-left:100px; margin-right:500px">	
				<button name="book" class="submit">Proceed</button>	
				</div>
			</div><br><br>
			<div class="booking-form">
				<div class="row" style="align-items: center;">
				<img src="img/ficon2.png" style="width:100px;height:100px;margin-left:100px; margin-right:500px">	
				<button name="book" type="submit" class="submit">Proceed</button>	
				</div>
			</div><br><br>
					</form>
			</div>
		</div>
	</div>
</body>

</html>


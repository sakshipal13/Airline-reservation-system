<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Details</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<br><br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post" action="details.php">
							<center><img src="img/banner2.jpg" style="width:1050px;height:150px;"></center>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">First Namer</span>
										<input class="form-control" type="text" placeholder="First Name" name="fname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Last Namer</span>
										<input class="form-control" type="text" placeholder="Last Name" name="lname">
									</div>
								</div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying from</span>
										<input class="form-control" type="text" placeholder="City or airport" name="fromsrc">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flyning to</span>
										<input class="form-control" type="text" placeholder="City or airport" name="todest">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" name="flyon">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" name="returnon">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Phone No</span>
										<input class="form-control" type="text" placeholder="Phone No" name="phno">
									</div>
								</div>

								<div class="col-md-9">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="text" placeholder="Email" name="email">
									</div>
								</div>
								<div>

								<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">With Adults (18+)</span>
										<select class="form-control" name="adult">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">With Children (0-17)</span>
										<select class="form-control" name="children">
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div></div>
							</div>
							</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit">Book</button>
										<br>
										<button class="submit-btn" name="back">Go Back</button>
									</div>
								</div>
							</div> <br>
							<?php print("$output");?>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
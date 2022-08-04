<?php include('result.php');?>
<!DOCTYPE=html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Search</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- straps -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


</head>

<body>
	<div id="booking" class="section">
			<br></br>
	<br></br>
	<br></br>
	<br></br>
			<div class="container">
					<div class="booking-form">
						<form method="post" action="search.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Token Number</span>
										<input type="text" name="key" class="form-control" placeholder="Enter your token number">
									</div>
								</div>
							</div>
							<div class="col-md-3">a
									<div class="form-btn">
										<button class="submit-btn" name="submit">Submit</button>
										<button class="submit-btn" name="back">Go Back</button>
									</div>
							<div>
						</form>
					</div>
			</div>
			<?php print("$output");?>	
</body>


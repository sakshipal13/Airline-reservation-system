<?php include('server.php');?>
<!DOCTYPE= html>
<html>
<head>
	<title>User registration for admin pannel</title>
	<link rel="stylesheet" type="text/css" href='style1.css'>
	<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type=submit] {   
 	width: 200px ;
    background-color: #5882e2;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type=submit]:hover {
   /* background-color: #5882e2;*/
    background-color: rgb(100,450,100);
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<button type="submit" name="login">Log in</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
			<br></br>
			Or <a href="../index.php">Go Back!</a>
		</p>
	</form>
</body>
</html>
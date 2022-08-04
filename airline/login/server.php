<?php include('../connect.php');?>
<?php
	session_start();
	$username="";
	$email="";
	$errors= array();
	if(isset($_POST['register']))
	{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password_1=$_POST['password_1'];
	$password_2=$_POST['password_2'];
	$key=$_POST['key'];

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
	if(empty($password_1)){
	array_push($errors,"Password is required");
	}
	if($password_1 != $password_2){
		array_push($errors,"Password do not match");
	}
	if($key==0000){
	if(count($errors)==0)
	{	
			$password=md5($password_1);
		$sql= "INSERT INTO users (username,email,password)
				VALUES('$username','$email','$password')";
				mysqli_query($db,$sql);
				$_SESSION['user']=$username;
				$_SESSION['success']="You are now logged in";
				header('location: index.php');
	}
	}
	else
		array_push($errors,"Master Key do not match");
	
	}

	//login page login

	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
	if(count($errors)==0){
		$password=md5($password);
		$query="SELECT * FROM login WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db,$query);
		if (mysqli_num_rows($result)==1){
			//log user in
			$_SESSION['user']=$username;
				$_SESSION['success']="You are now logged in";
				header('location: index.php');
		}
		else{
			array_push($error,"Wrong username or password");
			header('location: login.php');
		}

	}
	}

?>
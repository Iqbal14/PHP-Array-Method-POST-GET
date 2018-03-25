<?php 
session_start();
$USERNAME = 'eko';
$PASSWORD = 'eko';
	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$username = $_POST['username'];
		$password = $_POST['password'];

		//validasi penyimpanan sementara
		if ($username == $USERNAME && $password == $PASSWORD) {
			
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			// header('Location: index.php');
			echo "LOGIN BERHASIL";
		}
		else{
			echo "username atau password anda salah!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="POST">
		<label for="username" >Username :</label>
		<input type="text" name="username">

		<label for="password" >Password</label>
		<input type="password" name="password">

		<input type="submit" value="Login" name="login">
	</form>
</body>
</html>
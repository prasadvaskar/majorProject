<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="emomusic";
	$conn = new mysqli($servername, $username, $password,$db);
	
	// if ($conn->connect_error) {
	// 	die("Connection failed: " . $conn->connect_error);
	// }
	// else{
	// 	 echo "connected";
	// }

	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];

	echo $name;
	echo $email;
	echo $pass;

	$sql = "INSERT INTO users (usernme,email,password) 
	 VALUES('$name','$email','$pass')";

	 $result = $conn->query($sql);
	 $conn->close();

	?>

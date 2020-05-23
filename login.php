<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emomusic";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM users WHERE usernme='" . $_POST["user"] . "' and password = '". $_POST["pass"]."'";
$result = $conn->query($sql);               
$count  = mysqli_num_rows($result);

if($count==0) {
    echo "Invalid Username or Password!";
} else {
    echo "You are successfully authenticated!";
  
    exit; 
}

$conn->close();
?>
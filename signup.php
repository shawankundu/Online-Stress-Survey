<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$class = $_POST['class'];
$gender = $_POST['gender'];

// Database connection
$conn = new mysqli('localhost','root','','test_db');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into registration_user(name, email, password, age, class, gender) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssiis", $name, $email, $password, $age, $class, $gender);
	$execval = $stmt->execute();
	// echo $execval;
	// echo "Registration successfully...";
	$stmt->close();
	$conn->close();
	header("location: index.html");
}
?>
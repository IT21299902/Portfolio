<?php

// database connection code
// $con = new mysqli('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect("localhost", "root", "","complaint");
if ($con->connect_error)
{
die("Connection failed: " .mysqli_connect_error());
}

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO contact (name,email,contact,message) VALUES ('$name', '$email', '$contact', '$message')";

// insert in database 

$con->query($sql);
if ($con->query($sql))
{
echo "Inserted successfully";
}
else {
echo "Error: ". $con->error;
}

$con->close();

?>
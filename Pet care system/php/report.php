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
$pid = $_POST['pid'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$inquiry = $_POST['inquiry'];
$description = $_POST['description'];

// database insert SQL code
$sql = "INSERT INTO report (name,pid,address,contact,inquiry,description) VALUES ('$name', '$pid', '$address', '$contact','$inquiry','$description')";

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
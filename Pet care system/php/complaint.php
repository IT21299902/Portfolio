<?php

// database connection code
// $con = new mysqli('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect("localhost", "root", "","complaint");
if ($con->connect_error)
{
die("Connection failed: " .mysqli_connect_error());
}

// get the post records
$fname = $_POST['fname'];
$name = $_POST['name'];
$date = $_POST['date'];
$location = $_POST['location'];
$pet = $_POST['pet'];
$subject= $_POST['subject'];

// database insert SQL code
$sql = "INSERT INTO pet_complaint (fname1,name, date, location, pet1,subject) VALUES ('$fname', '$name', '$date', '$location', '$pet','$subject')";

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
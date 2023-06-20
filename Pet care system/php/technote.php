<?php

//Create connection
$con = new mysqli("localhost", "root", "", "tech_db");

//check connection
if ($con->connect_error){
	die ("Connection failed: " .$conn->connect_error);
}


/* $Id = $_POST["Sid"]; */
$Note = $_POST["SNote"];

$sql= "INSERT INTO tech(Note)VALUES('$Note')";

if($con->query($sql)){
echo "Inserted successfully";
header("Location:http://localhost/Praneeth/html/Technician.html");
}
else{
echo "Error:". $con->error;
}
$con->close();
?>
<?php

//Create connection
$con = new mysqli("localhost", "root", "", "pet_db");

//check connection
if ($con->connect_error){
	die ("Connection failed: " .$conn->connect_error);
}


$email = $_POST["Sid"];
$about = $_POST["Sabout"];

$sql= "INSERT INTO poposal(email,about)VALUES('$email','$about')";

if($con->query($sql)){
echo "Inserted successfully";

header("Location:http://localhost/Praneeth/html/MarketingManager.html");

}
else{
echo "Error:". $con->error;
}
$con->close();
?>
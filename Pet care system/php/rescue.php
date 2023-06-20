<?php

// database connection code
// $con = new mysqli('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect("localhost", "root", "","rescue page");
if ($con->connect_error)
{
die("Connection failed: " .mysqli_connect_error());
}

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$tel_num = $_POST['tel_numb'];
$content1 = $_POST['content1'];
$content2 = $_POST['content2'];

// database insert SQL code
$sql = "INSERT INTO  (firstname,lastname,email,tel_numb,content1,content2) VALUES ('$firstname', '$lastname', '$email', '$tel_numb', '$content1','$content2')";

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
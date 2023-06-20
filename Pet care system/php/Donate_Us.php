<?php
// database connection 
   $conn= mysqli_connect("localhost", "root","","pet care system");
if ($conn->connect_error)
{
die("Connection failed: " .mysqli_connect_error());
}

   $optradio=       $_POST['optradio'];
   $amount_other= $_POST['amount_other'];
   $first_name=   $_POST['first_name'];
   $last_name=    $_POST['last_name'];
   $email=       $_POST['email'];
   $card_number=  $_POST['card_number'];
   $Date   =      $_POST['Date'];
   $security_code= 	$_POST['security_code'];


 // database insert SQL code
 $sql = "INSERT INTO (optradio,amount_other,first_name,last_name,email,card_number,Date ,security_code) VALUES ('$optradio', '$amount_other', '$first_name', '$last_name','$email','$card_number','$Date','$security_code')";
// insert in database


if ($con->query($sql))
{
echo "Inserted successfully";
}
else {
echo "Error: ". $conn->error;
}
$conn->close();
?> 


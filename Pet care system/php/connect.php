<?php 

//Watched youtbe tutotials and some online resources to complete the shope page 

echo "this is working";


$con = new mysqli("localhost" ,"root" ,"" ,"test");

echo "this is working";

//checking connection

if($con === false){
    die("ERROR:couldnt connect to the database" .mysqli_connect_error());
}


//reading all the values from the user inputs


$fullname = $_REQUEST['fullname'];
$dob = $_REQUEST['dob'];
$email = $_REQUEST['email'];
$tpno = $_REQUEST['tpno'];
$password = $_REQUEST['password'];
$address1 = $_REQUEST['address1'];
$address2 = $_REQUEST['address2'];
$city = $_REQUEST['city'];
$district = $_REQUEST['district'];
$zipcode = $_REQUEST['zipcode'];
$wno = $_REQUEST['wno'];
$petname = $_REQUEST['petname'];
$height = $_REQUEST['height'];
$colour = $_REQUEST['colour'];
$petid = $_REQUEST['petid'];
$weight = $_REQUEST['weight'];
$breed = $_REQUEST['breed'];


//insert query
 
$sql = "INSERT INTO registration(fullname, dob, email, tpno, password1, address1, address2, city, district, zipcode, wno, petname, height1, colour, petid, weight1, breed) VALUES('$fullname', '$dob', '$email', '$tpno', '$password', '$address1', '$address2', '$city', '$district', '$zipcode', '$wno', '$petname', '$height', '$colour', '$petid', '$weight', '$breed')";



if(mysqli_query($con,$sql)){

    echo "<h3> data stored succesfully</h3>";

    header("Location:http://localhost/iwt/html/HomePage.html");

    //printing values in php file
    echo"<h4> brows localhost  php file to read the data</h4>";

   
}
else{

    echo "Error.............. $sql"

    .mysqli_error($con);
}


//closing the connection

mysqli_close($con);

?>

?>
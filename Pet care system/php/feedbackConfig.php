
<?php

$con = new mysqli("localhost" ,"root" ,"" ,"feedback_form");


//checking connection

if($con === false){
    die("ERROR:couldnt connect to the database" .mysqli_connect_error());
}


//reading all the values from the user inputs

$exp = $_REQUEST['rate'];
$inteface = $_REQUEST['satisfied'];
$service = $_REQUEST['prices'];
$font = $_REQUEST['styles'];
$customer_support = $_REQUEST['customer'];
$recomend = $_REQUEST['recommend'];
$comments = $_REQUEST['more'];
$email = $_REQUEST['email'];

//insert query
 
$sql = "INSERT INTO feedback(Experience , Interface ,Services_Prices ,Font_Color , Customer_Support , recommendations ,Comments ,Email) VALUES('$exp','$inteface','$service','$font','$customer_support','$recomend','$comments','$email')";



if(mysqli_query($con,$sql)){

 
    header("Location:popup.php");
  
}
else{

    echo "Error.............. $sql"

    .mysqli_error($con);
}


//closing the connection

mysqli_close($con);

?>

<?php

$con = new mysqli("localhost" ,"root" ,"" ,"pet_addoption");


//checking connection

if($con === false){
    die("ERROR:couldnt connect to the database" .mysqli_connect_error());
}


//reading all the values from the user inputs

$f_name = $_REQUEST['fname'];
$l_name = $_REQUEST['lname'];
$petID = $_REQUEST['petID'];
$email = $_REQUEST['email'];
$tp_no = $_REQUEST['Phone'];
$Street = $_REQUEST['Street'];
$city = $_REQUEST['city'];
$Region = $_REQUEST['Region'];
$Postal = $_REQUEST['Postal'];
$currentpet = $_REQUEST['currentpet'];
$Breed = $_REQUEST['Breed'];
$behaviour = $_REQUEST['behaviour'];
$vetname = $_REQUEST['vetname'];
$vetTp   = $_REQUEST['vetTp'];
$yes_before = $_REQUEST['yes'];
$children = $_REQUEST['children'];
$left = $_REQUEST['left'];
$Dealing = $_REQUEST['Dealing'];



//insert query
$sql = "INSERT INTO pet_adoption_form (  f_name ,l_name ,pet_id , email ,tp_no ,street , city ,region , postal_code , own_pets ,breed ,behaviour ,vet_name ,vet_tp ,surrendered_Pets , childrens ,Pet_Left_Place , Dealing )VALUES('$f_name','$l_name','$petID','$email','$tp_no', '$Street' ,'$city','$Region','$Postal','$currentpet','$Breed','$behaviour','$vetname','$vetTp','$yes_before','$children','$left','$Dealing')";



 

if(mysqli_query($con,$sql)){

    echo"<br><br>";
   echo "<center><h1>Thank you for applying.</h1> </center>";
          
   header("Location:popup.php");
}
else{

    echo "Error.............. $sql"

    .mysqli_error($con);
}

    


//closing the connection

mysqli_close($con);

?>
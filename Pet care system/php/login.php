<?php

  $email = $_POST['email'];
  $password = $_POST['password'];
  echo $email;
  echo $password;
  //Database connection
  
  $con = new mysqli("localhost","root","","test");

  if($con->connect_error) {
      die("Failed to connect : " .$con->connect_error);
  }else {
      $stmt = $con->prepare("select * from registration where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0) {
          $data = $stmt_result->fetch_assoc();
          if($data['password1'] === $password){
              echo "<h2>Login Successfully</h2>";
              header("Location:http://localhost/iwt/html/HomePage.html");
          } else {
              echo "<h2>Invalid Email or password</h2>";
              //header("Location:http://localhost/iwt/html/login.html");
          }
      }else {
          echo "<h2>Invalid Email or password</h2>";
          //header("Location:http://localhost/iwt/html/login.html");
      }
  }



?>
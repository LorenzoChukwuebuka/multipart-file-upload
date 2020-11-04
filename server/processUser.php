<?php 

// security access and legal access to the form

$fName = "";
$lName = "";
$pass = "";
 

// $error for error checking...
$error = 0;

if(isset($_POST['submitReg'])){ 
    if(isset($_POST['first_name']) && $_POST['first_name'] != '' ){
        $fName = $_POST['first_name'];
    } else{
        $error =1;
    }

    if(isset($_POST['last_name']) && $_POST['last_name'] != '' ){
        $lName = $_POST['last_name'];
    } else {
        $error = 2;
    }

    if(isset($_POST['password']) && $_POST['password'] != '' ){
        $pass= $_POST['password'];
    } else {
        $error =3;
    } 

    // if error is greater than 0

    if($error > 0){
        echo $error;
    }else {
        // establish database connection and compute into the database 

 require_once('../dbconnect.php'); 

   $res = " INSERT INTO `users`(`first_name`, `last_name`, `pass`) VALUES ('$fName', '$lName','$pass') ";

     $res1 = $con->query($res);

      if($res1){
          echo 1;
      } else{
          echo 2;
      }

  

       
    }
  
  




}
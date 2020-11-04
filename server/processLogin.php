<?php 


//error variable

$error = 0;

// security check
 if(isset($_POST['UserName']) && $_POST['UserName'] != " " ){
     $User = $_POST['UserName'];
 } else {
     $error = 1;
 } 

   if(isset($_POST['password']) && $_POST['password'] != " "){
       $Pass =$_POST['password'];
   }else {
       $error = 1;
   }  

    if($error == 0){
         // db connection
         require_once('../dbconnect.php');

         $res = "SELECT * FROM users WHERE first_name='$User' AND pass='$Pass' ";
         
        $res1 =  $con->query($res);
         $numRows = $res1->num_rows;

         if($numRows == 1){
            $rw = $res1->fetch_assoc(); 

            session_start();

            $_SESSION['loggedIn'] = true;
            $_SESSION['id'] = $rw['id'];
            $_SESSION['name'] = $rw['first_name'];
            $_SESSION['password'] = $rw['pass']; 
      

            echo 200;
         }else {
             echo 501;
         }
        
   
    }  






?>

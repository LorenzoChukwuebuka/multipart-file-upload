<?php 

//require db connection

require_once('dbconnection.php');

//fetch files from db


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> X-Plorer</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="fonts/material-icons.css">
    <style>
        nav {
            background-color: #00365f;
        }
        .nav-wrapper {
            padding-left: 2vw;
        }
        </style>
    
  
</head>
<body>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">X-Plorer</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="User/login.php">Login</a></li>
      </ul>
    </div>
  </nav>
        


    <div class="container"> 
    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Images</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Audio</a></li>
        <li class="tab col s3"><a href="#test4">Video </a></li>
      </ul>
    </div>


    <div id="test1" class="col s12">Test 1</div>



    <div id="test2" class="col s12">Test 2</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
        
        
        
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/materialize.js"></script>

    <script>
    M.AutoInit();
    </script>
</body>
</html>
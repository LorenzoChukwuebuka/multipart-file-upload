<?php 
  session_start();
 if(!isset($_SESSION['loggedIn'])){
     header('location:../index.php');
 }

 $name = $_SESSION['name']; 
 $id = $_SESSION['id'];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?=$name?> </title>
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../fonts/material-icons.css"> 
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
      <a href="#" class="brand-logo">X-plorer </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><?=$name?></a></li>
        <li><a href="logout.php">logout</a></li>
     
      </ul>
    </div>
  </nav>
        
<div class="container">

  
<div class="col l5">
                        <form method="POST" id="uploadfile" enctype="multipart/form-data">
                            <div class="file-field input-field col 6">
                                <div class="btn">
                                    <span>Pick File</span>
                                    <input type="file" name="fileToUpload" >
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div> 

                        <!-- switch radio -->
                        <div class="  col s6">
                            <label for="switch"> Mode </label><br>
                            <p>
                                <label>
                                    <input name="mode" type="checkbox" id="mode"/>
                                    <span>Do you want to make this media private?</span>
                                </label>
                            </p>
                        </div>
                    </div>

                    <input type="hidden" value="<?=$id?>" name="user_id" id="userId">


                            <div class="input-field col 6">
                                <button class="btn waves-effect waves-light" type="submit" name="fileUpload">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div> 

</div>
    

    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/upload.js"></script>
    
    

    <script>
    M.AutoInit();
    </script>
</body>
</html>
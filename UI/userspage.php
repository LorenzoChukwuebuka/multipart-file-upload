<?php 
  session_start();
 if(!isset($_SESSION['loggedIn'])){
     header('location:../index.php');
 }

 $name = $_SESSION['name']; 
 
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
        <li><a href="sass.html">Sass</a></li>
        <li><a href="#"><?=$name?></a></li>
     
      </ul>
    </div>
  </nav>
        

 


    <div class="container"> 

    <?php
                if(isset($_POST['fileUpload'])){
                    echo '<div class="col l7">';
                        //PROCESS FILE
                        //target Folder
                        $imgDir = "assets/img";
                        $audioDir = "assets/audio";
                        $videoDir = "assets/video";
                        $fileType = '';
                        $uploadOk = 0;
                        $errorMsg = '';

                        $fileName = $_FILES["fileToUpload"]["name"];
                        $fileExt = strrchr($fileName,".");//get file extension

                        //validate file type
                        if($fileExt == '.jpg' || $fileExt == '.png'){
                            $fileType = 'image';
                            $targetDir = $imgDir;
                        } elseif($fileExt == '.mp3'){
                            $fileType = 'audio';
                            $targetDir = $audioDir;
                        } elseif($fileExt == '.mp4'){
                            $fileType = 'video';
                            $targetDir = $videoDir;
                        } else {
                            $uploadOk = 1;
                            $errorMsg .= '<li>Please ensure the file is one of the folowing file types: [mp3, mp4, jpg, png]</li>';
                        }

                        // Check if file already exists
                        $target_file = $targetDir.'/'.basename($fileName);
                        if (file_exists($target_file)) {
                            $uploadOk = 1;
                            $errorMsg .= "<li>Sorry, file already exists.</li>";                    
                        }

                        if($uploadOk == 0){
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {//upload
                                if($fileType == 'image'){
                                    echo '<img src="'.$target_file.'" class="responsive-img"/>';
                                } elseif($fileType == 'audio'){
                                    echo '  <audio controls>
                                                <source src="'.$target_file.'" type="audio/mpeg">
                                            </audio>';
                                } elseif($fileType == 'video'){
                                    echo '  <video class="responsive-video" controls>
                                                <source src="'.$target_file.'" type="video/mp4">
                                            </video>';
                                }
                                
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        } else {
                            echo '<ul>'.$errorMsg.'</ul>';
                        }
                    echo '</div>';
                } else {
            ?> 

                  <div class="col l5">
                        <form action="index.php" method="POST" enctype="multipart/form-data">
                            <div class="file-field input-field col l6">
                                <div class="btn">
                                    <span>Pick File</span>
                                    <input type="file" name="fileToUpload">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <div class="input-field col l6">
                                <button class="btn waves-effect waves-light" type="submit" name="fileUpload">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
            <?php
                }
            ?>
        </div>
        


        
    </div>

    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/materialize.js"></script>

    <script>
    M.AutoInit();
    </script>
</body>
</html>
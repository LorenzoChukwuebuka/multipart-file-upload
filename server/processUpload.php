<?php 

session_start();
 
   /* $mode = $_POST['mode'];
    $userId = $_POST['userId'];
    $fl = $_FILES['fileToUpload'];
    echo $userId; */ 

 
    if(isset($_POST['fileUpload'])){ 

        $error = 0;

        if(isset($_POST['mode'])){
            $mode = $_POST['mode'];
        }else{
            $error = 1;
        }
          
          
        if(isset($_POST['userId'])){
            $userId = $_POST['userId'];
        }else{
            $error = 1;
        }
    
        if(isset($_FILES['fileToUpload']['name'])){
    
            $fileName = $_FILES["fileToUpload"]["name"];

            //PROCESS FILE
                        //target Folder
                        $imgDir = "../assets/img";
                        $audioDir = "../assets/audio";
                        $videoDir = "../assets/video";
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
                            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                                // require db connection

                                require_once("../dbconnect.php");

                                $res = 'INSERT INTO `file`( `file_name`, `type`, `userId`) VALUES ("'.$fileName.'","'.$mode.'","'.$userId.'")';

                                $res1 = $con->query($res);

                                  if($res1){
                                     
                                    echo 200;

                                  } else {
                                echo 501;
                            } 
                        } 

                      
     
    }
      
       
?>
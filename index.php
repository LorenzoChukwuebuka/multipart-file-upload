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

        img{
   	float: left;
   	margin: 5px;
   	 
   }

   .gallery {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(8, 5vw);
    grid-gap: 15px;
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
        


    
    


    <?php 

//require db connection

require_once('dbconnect.php');

//fetch files from db 


$res = $con->query("SELECT * FROM  file ");
$num = $res->num_rows;

if($num > 0){
	  $imageArr = [];
	  $audioArr = [];
	  $VideoArr = [];
    while($row = $res->fetch_assoc())
    { 
		$type = $row['MediaType'];
		$mode = $row['type'];

    	//block of code for viewing the files


		if($mode == 1 && $type == 'I')
		{
			
		 
			array_push($imageArr, $row);
			
		} else if($mode == 1 && $type == 'A') {
      		  
			array_push($audioArr, $row);
        
    	} else if($mode == 1 && $type == 'V') {
         
			array_push($VideoArr, $row);
		}
	}
} else {
  	echo'No file was found';
}

 ?>
 	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab col s3"><a class="active" href="#image">Images</a></li>
				<li class="tab col s3"><a href="#video">Audio</a></li>
				<li class="tab col s3"><a href="#audio">Video </a></li>
			</ul>
		</div>
		<div id="image" class="col s12">
			<?php
				foreach($imageArr as $img){
					echo '<div class="col s3"><img src="assets/img/'.$img['file_name'].'" class="responsive-img"/></div>';
				}
			?>
		</div>
		<div id="video" class="col s12">Video</div>
		<div id="audio" class="col s12">Audio</div>
 	</div>



</div>
  

    


   
   
        
        
         

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/materialize.js"></script>

    <script>
    M.AutoInit();
    $('.tabs').tabs();
    </script>
</body>
</html>
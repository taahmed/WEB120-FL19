<?php include 'config.php';?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title> <?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/fp.css" />
<link rel="stylesheet" href="css/form.css" />   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<script src="js/script.js"></script>  
</head>
    
<body>
<!-- start wrapper -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Taher Ahmed WEB120 Final Project</a></h1>
  <!--<h1><a href="index.php" class="logo fa <?=$logo?>">Taher Ahmed WEB120 Final Project</a></h1>-->

<nav id="cssmenu">
  <ul> 
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="aboutus.php"><span><i class="fa fa-fw fa-cube"></i> Aboutus</span></a></li>
     <li><a href="services.php"><span><i class="fa fa-fw fa-camera-retro"></i> Services</span></a></li>  
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Location</span></a>
        <ul>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
      <li><a href="contact.php"><span><i class="fa fa-crosshairs"></i>ContactUs</span></a></li>
  </ul>              
</nav>    
</header>
    <!-- START LEFT COL -->
<section> 
 <h2 class="pageID"><?=$PageID?></h2>
 
<!--END HEADER INCLUDE FILE -->
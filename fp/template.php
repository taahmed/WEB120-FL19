
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Template page</title>
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
 <h2 class="pageID">Welcome</h2>
 
<!--END HEADER INCLUDE FILE -->

 
 <h3>Lorem Ipsum</h3>

   <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>


    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>


    </section>  
	
<!-- END LEFT COL (main) -->
<!-- START RIGHT COL (aside) -->
<aside>
 <h3> Lorem Ipsum</h3>
 
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
     <img src="http://lorempixel.com/400/200" alt="image-placeholder">   
</aside>
  
<!-- END RIGHT COL (aside) -->
<!--start bottom include file-->
<!-- START Footer -->
<footer>
  <p><small>Designed by <a href="#" target="_blank">Taher Ahmed &copy; 2018 - <?=date('Y')?></a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML!</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS!</a></small></p>
</footer>
<!-- END Footer --> 
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</div>
</body>
</html>
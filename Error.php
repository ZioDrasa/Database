<!DOCTYPE html>
<html>
<head>	
 <style>
  body {
    background-image: url('https://gestionali.ribo.it/Image/Real/news-sito-delivery-logistica.jpg');
    width: 100%;
    height: 100%;
    no-repeat center top;
    background-size: cover;
  }

.zoom {
}

.zoom:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

  a:link { text-decoration: none; }
  a:visited { text-decoration: none; }
  a:hover { text-decoration: underline; }
  a:active { text-decoration: underline; }
</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Error! </title>
</head>
<body>
<div style = "text-align:center; display: flex; justify-content: center; margin-top: 15%;">
<div class = "zoom"> <div class = "card" style = "width: 300px;  background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500'); border-style: solid; border-radius: 15px; padding: 5px">
	<?php
		session_start();
		if(isset($_SESSION['notfound']) and $_SESSION['notfound']){
			session_destroy();
      session_unset();
			?> <a class = "card-body" href = "Accedi.php" style = "color: white"> <h4> Credenziali Errate! </h4> </a> 
			<?php
		} else if(isset($_SESSION['general']) and $_SESSION['general']) { 
      
	?> <a class = "card-body" href = "accedi.php" style = "color: white"> <h4> Errore Generico </h4> </a> <?php } else{?>
        <a class = "card-body" href = "Accedi.php" style = "color: white"> <h4> Non risulti loggato </h4> </a> <?php
    	} 
    ?></div>
</div>
</body>
</html>
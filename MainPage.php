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

a:link { text-decoration: none; }
a:visited { text-decoration: none; }
a:hover { text-decoration: underline; }
a:active { text-decoration: underline; }

.zoom {
}

.zoom:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style> 
<link rel="shortcut icon" href = "PalmaLogo.PNG">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

 

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
</head>
<body>
  <?php
session_start();
if(isset($_SESSION['login']) and $_SESSION['login']){ 
?>
  <div style = "display: flex; justify-content: center">
    <h1 class="animate__animated animate__pulse" style = "text-align: center; border-style: solid; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; width: 350px; color: black; background-image: url('https://t4.ftcdn.net/jpg/03/74/14/79/360_F_374147969_s7IopdPmPvDgg09PJOg00x9J53FHwU6e.jpg'); border-color: white; padding: 5px"> Magazzini Esotici 
    </h1>
  </div>
  <b>
  <div class="grid-container" style = "grid-gap: 50px; display: grid; grid-template-columns: auto auto auto; display: flex; justify-content: center; margin-top: 15%;">
    <div class="grid-item">
      <div class = zoom> <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
        <a class = "card-body" href = "Cerca.php" style = "color: white"> Cerca Per Reparto </a>
      </div> </div>
    </div>
    <div class = zoom><div class="grid-item">
      <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
        <a class = "card-body" href = "aggiungi.php" style = "color: white"> Aggiungi </a>
      </div></div>
    </div>
    <div class = zoom><div class="grid-item">
      <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
        <a class = "card-body" href = "cancellazione.php" style = "color: white"> Elimina </a>
      </div></div>
    </div>
</div>
<div class="grid-container" style = "grid-gap: 50px; display: grid; grid-template-columns: auto auto auto; display: flex; justify-content: center; margin-top: 40px">
    <div class = zoom><div class="grid-item">
      <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
        <a class = "card-body" href = "logout.php" style = "color: white"> Logout </a>
      </div></div>
    </div>
    <div class = zoom><div class="grid-item">
      <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
        <a class = "card-body" href = "all.php" style = "color: white"> Database </a>
      </div></div>
    </div>
</div>
    
    </b>
  </div>
<div style = "position: fixed; bottom: 0; width: 100%; background-color: #333; color: white; text-align: center">
 © 2023 Magazzini Esotici, Inc. Tutti i diritti riservati
</div>
<?php
  } else header('location: error.php');
?>  
</body>
</html>
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

<link rel="shortcut icon" href = "PalmaLogo.PNG">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php
session_start();
if(isset($_SESSION['login']) and $_SESSION['login']){ 
?>
<form method="post" action="Modifica.php">
<div style = "width: 350px; margin:0 auto; margin-top: 50px">
<p style = "border-style: solid; border-radius: 10px; color: white; background-color: black; border-width: 0px; padding: 20px"> Inserisci Nome: &nbsp;&nbsp;<input type="text" name="nome"> <br> <br>
Inserisci la categoria: &nbsp;&nbsp;<select name="prodotto" style = "color: black">
      	<option name = "costruzione"> Costruzione </option>
        <option name = "Amministrazione"> Agricoltura</option>
        <option name = "Assemblaggio"> Generale </option>
</p>
</select>
</div>
&nbsp; &nbsp; <div class="grid-container" style = "grid-gap: 50px; display: grid; grid-template-columns: auto auto auto; display: flex; justify-content: center">
    <div class="grid-item">
      <div class = zoom> <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
        <a class = "card-body" href = "mainpage.php" style = "color: white; background-color: black"> Indietro </a>
      </div> </div>
    </div>
    <div class = zoom>
        <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
          <div class="grid-item"><button class = "card-body" type = "submit" name = "aggiungi" href = "Modifica.php" style = "color: white; background-color: black"> Invia </button>
        </div></div>
    </div>
</form>
<?php
  } else header('location: error.php');
?>
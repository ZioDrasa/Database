
<style>

::-moz-placeholder {
   text-align: center;  
}

  body {
    background-image: url('https://gestionali.ribo.it/Image/Real/news-sito-delivery-logistica.jpg');
    width: 100%;
    height: 100%;
    no-repeat center top;
    background-size: cover;
  }
</style> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<form method = "post" action = "QueryCod.php">
	<div style = "width: 350px; margin:0 auto; margin-top: 50px; text-align: center;">
		<div>
			<p style = "border-style: solid; border-radius: 10px; color: white; background-color: black; border-width: 0px; padding: 20px"> Inserisci ID: &nbsp;&nbsp;<input type="text" name="ID"> <br> <br>
			<button type = "submit" name = "cerca" class = "btn btn-light" style = "color: white; background-color: black"> &nbsp; <b> Cerca prodotto tramite ID &nbsp; </b> </button> </p>
 		</div>
 	</div>

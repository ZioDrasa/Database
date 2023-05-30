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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div style = "width: 600px; margin:0 auto; margin-top: 50px;">
	<p style = "text-align: center;">
<?php
require_once 'config.php';
	try {
		$connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
		$connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
	{ 
		die("Errore nella gestione del database $db: " . $e->getMessage () ); }
		if(isset($_POST['cerca'])){
			$sql = 'SELECT prodotto.ID, prodotto.nome, categoria.nome FROM prodotto, categoria  WHERE prodotto.ID = ? and prodotto.categoria = categoria.ID';
			$prepare = $connessione->prepare($sql);
			$prodotto = $_POST['ID'];
			$prepare->execute([$prodotto]);
			if($prepare->rowCount() > 0){
				
				$prodotto = array("ID", "nome", "categoria");

				?>
				<table style = "text-align: center; background-color: black; color: white; border-radius: 20px" border="1" width="100%">
				<tr>
				<?php 
				$procount = 0;
				foreach($prodotto as $data) {
				    if($procount != 0 && $procount%3 == 0) {
				?>
				    	</tr><tr>
				<?php 
				    }
				?>
				<td>
				    <?php echo $data; ?>
				</td>
				<?php
				    $procount++;
				} 
				?>
				<?php
				$result = $prepare->fetchAll();
				foreach ($result as $riga)	{
					$ID = $riga ['ID'];
					$nome = $riga [1];
					$categoria = $riga[2];
					$attributes = array($ID, $nome, $categoria);

					foreach($attributes as $attributi) {
					    if($procount != 0 && $procount%3 == 0) {
					?>
					    	</tr><tr>
					<?php 
					    }
					?>
					    <td>
					        <?php echo $attributi; ?>
					    </td>
					<?php
					    $procount++;
					} 
				}
				?>
				</tr>
				</table>

				<?php
				} else { ?>
					<a href = "Cerca.php">
						<button type = "submit" name = "submit" class = "btn btn-light" style = "color: white; background-color: black; border-radius: 30px; width: 300px"> &nbsp; Non è stato trovato nessun prodotto, riprova! &nbsp; </button> </p>
					</a>
				<?php
				}
			}
		else {
			session_start();
			$_SESSION['general'] = true;
			header('location: error.php');
		}
			?>
	<br>
	<a href = "Cerca.php">
	<div class="grid-container" style = " display: grid; grid-template-columns: auto auto auto; display: flex; justify-content: center; margin-top: 40px">
	    <div class = zoom><div class="grid-item">
	      <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
	        <a class = "card-body" href = "mainpage.php" style = "color: white"> Indietro </a>
	      </div></div>
	    </div>
	    <div class = zoom><div class="grid-item">
	      <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500'); margin-left: 50px">
	        <a class = "card-body" href = "cerca.php" style = "color: white"> Cerca per ID </a>
	      </div></div>
	    </div>
	</div>
	</a>
	</p>
	</div>

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
<div style = "width: 600px; margin:0 auto; margin-top: 50px;"> <p style = "text-align: center;">

<?php
session_start();
if(isset($_SESSION['login']) and $_SESSION['login']){
    require_once 'config.php';

    try {
      $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
      $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['aggiungi'])){
      $prodottoQuery = "SELECT DISTINCT categoria.id FROM categoria WHERE categoria.nome = ?";
    $prepareProdotto = $connessione->prepare($prodottoQuery);
    $prepareProdotto->execute([$_POST['prodotto']]);
    $resultProdotto = $prepareProdotto->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultProdotto) > 0) {
        $prodotto = $resultProdotto[0]['id'];

        $numberQuery = "SELECT * FROM prodotto";
        $resultNumber = $connessione->query($numberQuery);
        $num_righe = $resultNumber->rowCount();

        $nome = $_POST['nome'];

        $insertQuery = "INSERT INTO prodotto (ID, nome, categoria) VALUES (?, ?, ?)";
        $prepareInsert = $connessione->prepare($insertQuery);
        $prepareInsert->execute([$num_righe + 1, $nome, $prodotto]);
    }

    } else if(isset($_POST['cancella'])){
      $sql = "DELETE FROM prodotto WHERE ID = ? ";
      $preparata = $connessione->prepare($sql);
      $preparata->execute([$_POST['ID']]);
      if($preparata->rowcount() == 0){
        echo "<script language = \"JavaScript\">;
        window.alert('Codice non trovato');\n;
        </script>";
      }
    } 
    $sql = 'SELECT prodotto.id, prodotto.nome, categoria.nome FROM prodotto, categoria  WHERE categoria.id = prodotto.categoria ORDER BY ID';
    $prepare = $connessione->prepare($sql);
    $prepare->execute([]);
    $prodotto = array("ID", "nome", "categoria");
    ?>
    <table style = "text-align: center; background-color: black; color: white; border-radius: 20px" width="100%">
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
    foreach ($result as $riga)  {
      $ID = $riga [0];
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
    <br>
    <?php
      }
    catch(PDOException $e)
    { 
      die("Errore nella gestione del database $db: " . $e->getMessage () ); }
    ?>
</p>

<div class="grid-container" style = "grid-gap: 50px; display: grid; grid-template-columns: auto auto auto; display: flex; justify-content: center; margin-top: 15%;">
    <div class = zoom><div class="grid-item">
     <div class = "card" style = "width: 180px; text-align:center; background-image: url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
        <a class = "card-body" href = "mainpage.php" style = "color: white"> Indietro  </a>
      </div></div>
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

<?php
  } else header('location: error.php');
?>
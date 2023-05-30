<!DOCTYPE html>
<html>
<head>
 <style>
  body {
    background-image: url('https://cdn.wallpapersafari.com/97/50/eRwDMy.jpg');
    width: 100%;
    height: 100%;
    no-repeat center top;
    background-size: cover;
  }
</style>
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1">

<title> Login </title>

</head> 
<body>
<div style = "width: 600px; margin:0 auto; margin-top: 50px;"> <p style = "text-align: center;">
<?php
session_start();
if(isset($_POST['log'])){ 
  require_once 'config.php';

  try {
      $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
      $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = 'SELECT username, password FROM utenti WHERE username = ? and password = ?';
    $prepare = $connessione->prepare($sql);
    $user = $_POST['username'];
    $password = $_POST['pwd'];
    $prepare->execute([$user, $password]);
    $ris = $prepare->fetchAll();
    session_start();
    if($prepare->rowCount() > 0){
      foreach ($ris as $riga) {
        $user = $riga ['username'];
        $password = $riga ['password'];
        $_SESSION['login'] = true;
        header("location: mainpage.php");
      }
    } else { $_SESSION['notfound'] = true;
      header("location: Error.php");
    }
  }
  catch(PDOException $e)
  {
    die(header("location: Error.php"));
  }
} else header("location: Error.php");
?>
</div>  
</body>
</html>

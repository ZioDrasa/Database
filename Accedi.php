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
  }
</style>

  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src = "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
  <script src = "//code.jquery.com/jquery-1.11.1.min.js"> </script>
  <meta charset = "utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">

  <title> Login </title>

</head>
<body>
<form method = "post" action = "login.php">
  <div class = "separa" style = "margin-top: 15%; border-radius: 10px; border-style: solid; margin-left: auto; margin-right: auto; width: 610px; background-color: white">
  <div style = "width: 600px; margin: 10px">
  <div class = "form-group" style = "margin-right: 10px">
    <label> Username </label>
    <input style = "border-style: solid; border-width: 3px; border-color: black; border-radius: 20px" type = "text" class = "form-control" placeholder = "Enter Username" name = "username" autocomplete="off"  required>
  </div>
  <div class = "form-group" style = "margin-right: 10px">
    <label> Password </label>
    <input style = "border-style: solid; border-width: 3px; border-color: black; border-radius: 20px" type = "password" class = "form-control" placeholder = "Enter Password" name = "pwd" autocomplete="off"  required>
    <small class = "form-text text-muted"> <b> Non condivideremo con nessuno la tua password. </b> </small>
  </div>
  <button type = "submit" name = "log" class = "btn btn-primary"> Invia </button>
  </div>
</div>
</form>
</body>
</html>

  
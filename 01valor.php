<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    a{
      font-size: 20px;
      display: flex;
      text-decoration: none;
      color: red;
    }
  </style>
</head>
<body>
  <div>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é $rq"; 
    ?>
   <a href="index.php">voltar</a>
  </div>
</body>
</html>
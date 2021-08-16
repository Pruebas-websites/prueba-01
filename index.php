<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Enviar Emails</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>

  <form class="" action="" method="post">
    <input type="text" name="name" placeholder="Nombre">
    <input type="email" name="email" placeholder="email">
    <input type="text" name="asunto" placeholder="Asunto">
    <textarea name="msg" placeholder="mensaje"></textarea>
    <input type="submit" name="enviar" />
  </form>
  <?php
  include("correo.php");
  ?>
</body>
</html>

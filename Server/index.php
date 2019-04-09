<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <h1>Formulario:</h1>
  <h1> <?php echo 'Página en php' ?></h1>

  <br>

  <form action="respuesta.php" method="get">
      <input type="text" name="usser" id="usser" placeholder="Usuario">
      <input type="password" name="pass" id="pass" placeholder="Contraseña">
      <input type="submit" value="Enviar">
  </form>
</body>
</html>

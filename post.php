<?php
  // se recepciona todo lo que se enviq por el metodo post
  if($_POST){
  $nombre=$_POST['nombre'];//se guarda en la variable
  echo "mi nombre ". $nombre;//muestra lo que contiene la variable 
  }
  echo "<br>";

  if($_POST){
  $apellido=$_POST['apellido'];//se guarda en la variable
  echo "mi apellido ". $apellido;//muestra lo que contiene la variable
  }
  echo "<br>"; 
  
  if($_POST){
  $edad=$_POST['edad'];//se guarda en la variable
  echo "mi edad ". $edad;//muestra lo que contiene la variable 
  }
  echo "<br>";

  if($_POST){
  $altura=$_POST['altura'];//se guarda en la variable
  echo "mi altura ". $altura;//muestra lo que contiene la variable 
  }
  echo "<br>"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="post.php" method="post">
    Nombre:
    <input type="text" name="nombre " id="">
    <br>
    Apellido:
    <input type="text" name="apellido " id="">
    <br>
    Edad:
    <input type="text" name="edad " id="">
    <br>
    Altura:
    <input type="text" name="altura " id="">
    <br>
    <input type="submit" value="ENVIAR">

</form>
    


</body>
</html>
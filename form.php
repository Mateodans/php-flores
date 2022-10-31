<?php

$txtNombre = "";

$radio = "";

if ($_POST) {
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"sin dato";
    $radio = (isset($_POST["lenguaje"]))?$_POST["radio"]:"sin dato";
    print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong>Hola: </strong><?php echo $txtNombre;?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="txtNombre" id="">
    Estudíarias?
    <br>
    <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>
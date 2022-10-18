<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="21_prueba.php" method="post">
    <input type="text" name="desc" id="" placeholder="prod">
    <br>
    <input type="text" name="cant1" id="" placeholder="cant">
    <input type="text" name="precio1" id="" placeholder="precio">
    <br>
    <input type="text" name="cant2" id="">
    <input type="text" name="precio2" id="">
    <br>
    <input type="text" name="cant3" id="">
    <input type="text" name="precio3" id="">
    <input type="submit" value="calcular">
    </form>
</body>
</html>
<?php

if ($_POST) {
    $cant1=$_POST['cant1'];
    $precio1=$_POST['precio1'];
    $cant2=$_POST['cant2'];
    $precio2=$_POST['precio2'];
    $cant3=$_POST['cant3'];
    $precio3=$_POST['precio3'];
    $neto=(($cant1 * $precio1)+($cant2 * $precio2)+($cant3 * $precio3));
    $netob=(($neto*1.21)+($neto*1.3)+($neto*1.015));
    if ($netob >= 1000000) {
        $netob -1.5;
    }
    echo "tu neto es de ".$neto. "<br>";
    echo "tu neto bruto es de ". $netob;
}

?>
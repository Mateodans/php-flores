<?php
$valorA=$_POST ['valorA'];
$valorB=$_POST ['valorB'];
$saldo = $valorA;
for ($i = 1; $i<=$valorB; $i++){
    $interes = $saldo * 0.6;
    $saldo =$saldo * $interes;
    echo "interes ganado en anio". $i . "=". $interes. "<br>";
    echo "cap inicial ". $valorA. "<br>";
    echo "saldo anual en anio ". $i. "=". $saldo. "<br>";
    $iva=21%;
    $dgr=3%;
    $perpmuni=1.5%;
}
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
    <form action="" method="post">
        <input type="text" name="valorA" id="">
        <input type="text" name="valorB" id="">
        <input type="submit" value="calcular">
    </form>
</body>
</html>
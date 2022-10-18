<?php

if($_POST){
$lado1 =$_POST['lado1'];
$lado2 =$_POST['lado2'];
$lado3 =$_POST['lado3'];
}
if (($lado1 ===$lado2) && ($lado2 ===$lado3)) {
    echo "El triangulo es Equilatero";
}elseif (($lado1=!$lado2) && ($lado2=!$lado3)) {
    echo "Tu triangulo es Escaleno";
}else{echo "es isoceles";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangulos</title>
</head>
<body>
    <form action="21_prueba1.php" method="post">
    <input type="text" name="lado1" id="L1">
    <input type="text" name="lado2" id="L2">
    <input type="text" name="lado3" id="L3">
    <input type="submit" value="calcular">
    </form>
</body>
</html>
//Consigna:

//1)Dado el siguiente array red blue y green busca la manera de eliminar un elemento
//2)Contar los elementos del array
//3)Crea un array con 5 nombres de personas y recorrelo mostrando el texto  "Conozco a"
//4)Dado el array con los elementos 1 9 3 8 5 7 recorrelo imprimiendo el doble de cada numero.
//5)ESCRIBE EL CODIGO PARA ENCONTRAR EL NUMERO MAS ALTO Y EL MAS BAJO DE LA LISTA DE NUMEROS DADA.


<?php

//1
$colores = array("Green","Red","Blue");
unset($colores[2]); //borrar
print_r($colores);
//2
echo count($colores) . "<br>"; //contar
echo "<br>";

//3
$Conozco =array('rodri','agus','kevin','pato','luci');
foreach ($Conozco as $n => $nombres) {
    echo 'Conozco a '. $nombres .'<br>';
}
echo "<br>";
//foreach es un tipo especial de bucle que permite recorrer estructuras que contienen varios elementos

?>

<?php
//4
$numeritos2=array('1','9','3','8','5','7');
foreach ($numeritos2 as $n => $nxaumento) {
    echo "El doble de ".$nxaumento . " es ". $nxaumento2  .'<br>';
}
echo "<br>";

?>



<?php
//5

$numeritos = array("1", "9", "3", "8", "5", "7");

rsort($numeritos);
var_export($numeritos);
echo "<br>";
echo "<br>";
echo 'Maximo:' . '<br>';
print(max($numeritos));
echo "<br>";
echo 'Minimo:' ."<br>";
print(min($numeritos));
echo "<br>";

unset($numeritos[4]);

?>


<?php
//
//practicas (esto era algo que capaz hacia el profe que hagamos y pos lo hice por si las
//$numeritos2=array('1','2','3','4','5','6');
//foreach ($numeritos2 as $n) {
  //  echo $n .' por ' .$n.' es ' . $n$n  .'<br>';
//}
//echo "<br>";

?>
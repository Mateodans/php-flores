<?php
//una funcion es un bloque de codigo que realiza una operacion independientemente del programa
//una funicon tiene 3 componenetes importantes:
//los parametros que son lo svalores que recibe la funcion como entrada
//el codigo de la funicon que son las operaciones que realiza las function
//el resultado (o balor de retorno) que es el valor final que entrega la funcion
//tenemos 2 clases de funciones
//las que crea el usuario
//las propias del lenguaje
function mostrar_nombre($nombre, $apellido){
    echo"soy ". $nombre. " ". $apellido. "<br>";
}
function firma(){
    echo "soy Mateo Dans <br> Del Instituto Llano <br> Profesor";
}
function preparar_cafe($tipo="Capuccino"){
    echo "hacer una de $tipo. <br>";
}
function suma($n1,$n2){
    $resultado=$n1 + $n2;
    echo "la suma es:" .$resultado;
}
suma(2,4);
// echo "la suma es:".suma(2,3);
//preparar_cafe("Cafe");
//firma();
//mostrar_nombre("Mateo","Dans")
?>
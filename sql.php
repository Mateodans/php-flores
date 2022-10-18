<?php
$servidor="localhost";
$usuario="root";
$pass="";

try {

    $conexion= new PDO("mysql:host=$servidor;dbname=tienda",$usuario,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "conexion establecida";

    $sql="SELECT * FROM `producto`";
    $sql= "INSERT INTO `producto` (`nombre`, `precio`, `codigo_fabricante` ) VALUES ('promo 22', 3000, 1);";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();
    print_r($resultado);

} catch (PDOException $error) {
    echo "conexion erronea a causa de ".$error;
}

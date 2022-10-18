<?php

session_start();

$_SESSION["usuario"]="juan";
$_SESSION["estado"]="logueado";

echo "sesion iniciada".":<br>";

echo "Usuario: ".$_SESSION["usuario"]."Estado :". $_SESSION. ["estado"];

?>
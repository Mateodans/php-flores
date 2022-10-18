<?php
class persona{

    public $nombre;
    private $edad;
    public $domicilio;
    function __construct($nombre, $edad, $domicilio)
    {
        $this->nombre;
        $this->edad;
        $this->domicilio;
    }
    public function asignarNombre($nuevoNombre){

        $this->nombre=$nuevoNombre;

    }
    public function imprnombre(){
        echo "<br>Mi nombre es ".$this->nombre;
    }
    public function asignaredad($nuevaEdad){
        $this->edad=$nuevaEdad;
    }
    public function imprEdad(){
        echo "<br>Mi edad es ".$this->edad;
    }

}

// objpersona function imprimirtodo(){
//     echo "Mi  edad es ". $this->edad. "y mi nombre es ". $this->nombre. "y vivo en ". $this->domicilio;
// }

$objpersona= new persona("juan", 33, "paysandu 1234");

class trabajador extends persona{
    public $puesto;
    public function presentarse(){
        echo "Hola soy ". $this->nombre. "Y soy ".$this->puesto;
    }
}


$objetotrabajador->asignarNombre("juan");
$objetotrabajador->imprnombre('');
$objetotrabajador->puesto ="administrativo";
$objetotrabajador->presentarse();



$objpersona->asignarNombre("Omar");

$objpersona2->asignaredad(30);
$objpersona2->imprEdad();

?>
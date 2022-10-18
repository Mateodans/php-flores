<?php
//La programacion orientada a objeto es un modelo de paradigma de programacion que permite desarrollar aplicaciones complejas manteniendo un codigo mas claro y manejable que paradigmas anteriores.
//En este tipo  de programacion se organiza el codigo en unidades denominadas CLASES, de las cuales se crean OBJETOS.
class persona{// con el comando class se crea una clase

    public $nombre;//es un  atributo o propiedad.
    private $edad;// atributo privado, no se puede imprimir fuera de la clase.

    public function asignarNombre($nuevoNombre){//es un metodo, parecido a un funcion.

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


class trabajador extends persona{//creo una clase hija de la madre con el comando "extends". en poo es llamada herencia
    public $puesto;
    public function presentarse(){
        echo "Hola soy ". $this->nombre. "Y soy ".$this->puesto;
    }
}

$objetotrabajador = new trabajador();

$objetotrabajador->asignarNombre("juan");
$objetotrabajador->imprnombre('');
$objetotrabajador->puesto ="administrativo";
$objetotrabajador->presentarse();

$objpersona= new persona();//Con el comando new creo un objetp de la clase persona, crear un objeto en la variable se lla "INSTANCIAR".

$objpersona->asignarNombre("Omar");//llamo al metodo de la clases, y asigno un parametro.

// echo $objpersona->nombre;//imprimo en pantlla el resultdo.
$objpersona2=new persona();
// $objpersona2->asignarNombre("BEATRIZ");
// $objpersona2->imprnombre();

$objpersona2->asignaredad(30);
$objpersona2->imprEdad();

?>
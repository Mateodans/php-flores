<?php


    class vehiculo{

        public $color;
        public $peso;

        public function circula($circular){
            $this->nombre=$circular;
            echo "estoy circulando";
        }

        public function aniadir_persona($peso){
            $this->peso=$peso+$peso;
            echo "el peso es de ". $peso;
        }
    }
    class Cuatro_ruedas extends vehiculo{
        public $numero_puertas;
        public $color;

        public function numero_puertas($numero_puertas){
            $this->puerta=$numero_puertas;
            echo "tengo ".$numero_puertas ."de puertas";
        }
        public function repintar($color){
            $this->repintar=$color;
            echo "cambie de color el auto ahora su color es " .$color;
        }
}
        class Coche extends Cuatro_ruedas{
            public $numero_cadenas_nieve;

            public function aniadir_cadenas_nieve($numero_cadenas_nieve){
                $this->cadenas=$numero_cadenas_nieve;
                echo "tengo ". $numero_cadenas_nieve ."de cadenas para la nieve";
            }

            public function quitar_cadenas_nieve($numero_cadenas_nieve){
                $this->cadenas=$numero_cadenas_nieve-$numero_cadenas_nieve;
                echo "quite ". $numero_cadenas_nieve. "de cadenas para la nieve";
            }
        }

        class Camion extends Cuatro_ruedas{
            public $longitud;

            public function aniadir_remolque($longitud){
                $this->aniadir_remolque=$longitud;
                echo "agregue un nuevo remolque y la nueva longitudd es de ". $longitud;
            }
        }

    class Dos_ruedas extends vehiculo{
        public $cilindrada;
        public $litros;

        public function cilindrada($cilindrada){
            $this->cilindrada=$cilindrada;
        }

        public function poner_gasolina($litros){
            $this->litro=$litros;
            echo "le cargue gasolina ahora tiene ". $litros;
        }

    }
?>

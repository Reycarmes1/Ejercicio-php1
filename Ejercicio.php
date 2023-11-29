<?php
class Vehiculo {

    public $nombre;
    public $tipo;
    public $velocidad;
    
    
    function Acelerar(){

        echo " Velocidad total ";
    }

   

    function frenar(){

        echo ' ';
        echo "Velocidad 0";
    }

    function derrapar(){
        
        echo '';
        echo"Derrape potente";
    }
}

$Ferrari = new Vehiculo();
$Ferrari->tipo = "Deportivo ";
$Ferrari->nombre = "F40 ";
$Ferrari->velocidad = 500;
echo $Ferrari->nombre;
echo $Ferrari->tipo;
echo $Ferrari->velocidad;
$Ferrari->derrapar();

$Ford = new Vehiculo();
$Ford->tipo = " Todo terreno ";
$Ford->nombre = " f100 ";
$Ford->velocidad= 250;
echo $Ford->nombre;
echo $Ford->tipo;
$Ford->Acelerar();

$Chevrolet = new Vehiculo();
$Chevrolet->tipo = " Calle ";
$Chevrolet->nombre= " Prisma ";
$Chevrolet->velocidad = 250;
echo $Chevrolet->tipo;
$Chevrolet->Acelerar();
$Chevrolet->frenar();

$Bugatti = new Vehiculo();
$Bugatti->tipo = " Super deportivo ";
$Bugatti->nombre = "Beyron"
$Bugatti->velocidad = 450;
echo $Bugatti->tipo;
echo $Bugatti->fuerza;
$Bugatti->frenar();

$BMW = new Vehiculo();
$BMW->tipo = " Lujo ";
$BMW-> nombre = "M3";
$BMW-> velocidad = 350;
echo $BMW->tipo;
$BMW->Acelerar();
$BMW->derrapar();
$BMW->frenar();

?>
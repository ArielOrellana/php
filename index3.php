<?php

class Persona

{
      public $nombre = "";  // puede quedar tambien ((public $nombre;)) donde solo estoy declarando
      public $apellido = "";
      private $edad = 0;
      protected $dni = 0;

      function __construct ($nombre) //metodo especial que permite tener una funcion para realizar cosas que se debe hacer cuando es la primera vez que realizas un objeto
      {
      	$this->edad = 0;
        $this->dni = 0;
         	
      }
      function Persona ()
      {

      }

      public function crecer ( $anios)
      {
      	  $this->edad += $anios;

      }
      public function devolverEdad()
      {
      	return $this->edad; 
      }

      public function comer()
      {

      }

      public function caminar()
      {

      }

      private function darPaso()
      {

      }

}

$pablo = new Persona ("Pablo");
$samuel = new Persona ("Samuel");
$maxi = new Persona ("maxi");

var_dump($sofia);
echo "<br>";
$sofia->nombre = "Pepe";
echo " nombre : ".$sofia->nombre;
echo "<br>";
$sofia->crecer( 10 );
$edadSofia = $sofia->devolverEdad( );
echo "edad : ".$edadSofia;
//$pablo->darPaso( 10 ); //error por que lo pusimos como privado, a los oros si por ser publicos

//echo "<br>";
//var_dump($samuel);
//echo "<br>";
//var_dump($maxi);
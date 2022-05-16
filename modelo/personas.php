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

       function __destruct()
      {

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
?>
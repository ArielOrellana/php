<?php 
/**
 * 
 */
class alumno extends persona
{
    public $asistencia;
    public function __construct($nombre)
    {
    	parent::__construct($nombre);
    }
    public function asistencia($asistencia)
    {
    	$this->asistencia = 0;
    }
}
?>
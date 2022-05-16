<?php
/**
 * 
 */
class operacion
{
	protected $valor1;
	protected $valor2;
	protected $resultado;
	public function cargar1($v)
	{
		$this->valor1=$v;
	}
	public function cargar2($v2)
	{
		$this->valor2=$v2;
	}
	public function result()
	{
		echo $this->resultado.'<br>';
	}
}
?>
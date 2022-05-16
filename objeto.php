<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	include_once('modelo/personas.php');
	include_once('modelo/alumno.php');
	include_once('modelo/menu.php');
	include_once('modelo/operacion.php');
	include_once('modelo/suma.php');
	/*
	M : Modelo
	V : Vista -> motores de plantilla(html)
	C : controolador
	*/
	$ariel = new Persona ("ariel");
	$samuel = new Persona ("Samuel");
	$maxi = new Persona ("maxi");
	$rodolfo = new alumno("rodolfo");
	$ariel->nombre = "ariel";
	echo " nombre : ".$ariel->nombre;
	echo "<br>";
	$ariel->crecer( 20 );
	$edadariel = $ariel->devolverEdad( );
	echo "edad : ".$edadariel;
	echo "<br>";
	$rodolfo->nombre = "Rodolfo";
	echo "nombre:".$rodolfo->nombre;
	echo "<br>";
	$rodolfo->crecer( 20 );
	$edadrodolfo = $rodolfo->devolverEdad( );
	echo "edad: ".$edadrodolfo;
	echo "<br>";
	echo "asistencia: ".$rodolfo->asistencia = 10;
	$men = new menu();
	$men->cargar('https://www.youtube.com/','youtube');
	$men->cargar('https://www.facebook.com/','facebook');
	$men->mostrar();
	$hola = new suma();
	$hola->cargar1(10);
	$hola->cargar2(10);
	$hola->operar();
	$hola->result();
?>
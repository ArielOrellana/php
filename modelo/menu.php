<?php 
      class menu
      {
            private $enlaces=array();
            private $titulo=array();
            public function cargar($enlaces, $titulo)
            {
            	$this->enlaces[]=$enlaces;
            	$this->titulo[]=$titulo;
            }
            public function mostrar()
            {
            	for ($i=0; $i <count($this->enlaces) ; $i++) 
            	{ 
                        echo "<br>";
            		echo '<a href="'.$this->enlaces[$i].'">'.$this->titulo[$i].'</a>';
            		echo "<br>";
            	}
            }
      }
?>
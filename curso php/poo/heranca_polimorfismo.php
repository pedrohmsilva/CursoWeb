<?php
	
	//Superclasse
	class Felino {
		var $mamifero = 'sim';
		function correr() {
			echo 'Correr como felino';
		}
	}

	//Subclasse
	class Chita extends Felino {
		//Polimorfismo
		function correr() {
			echo 'Correr como chita 100km/h';
		}
	}

	$chita = new Chita();
	echo $chita->mamifero."<br>";
	$chita->correr();

?>
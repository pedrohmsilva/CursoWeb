<?php

	//Função sem retorno
	function exibir_boas_vindas($nome='Sem nome') {
		echo "$nome";
	}

	//Função com retorno
	function calcular_soma($numero1 = 0, $numero2 = 0) {
		return $numero1 + $numero2;
	}

	echo calcular_soma(1,2);
	//exibir_boas_vindas();

?>
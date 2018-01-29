<?php

	class Pessoa {

		private $nome;

		public function correr() {
			echo $this->nome . " correndo<br>";
		}

		function __construct($parametro_nome) {
			$this->nome = $parametro_nome;
			echo $this->nome."<br>";
		}

		function __destruct() {
			echo "Objeto removido.<br>";
		}

	}

	$pessoa = new Pessoa("Abc");
	$pessoa->correr();

?>
<?php

	class Pessoa {

		//atributos
		var $nome;

		//métodos
		function setNome($nome) {
			$this->nome = $nome;
		}

		function getNome() {
			return $this->nome;
		}

	}

	$pessoa = new Pessoa();
	$pessoa->setNome('Nome');
	echo $pessoa->getNome();

?>
<?php

	class Veiculo {
		
		/*
		public
		private
		protected
		*/

		private $placa;
		private $cor;
		protected $tipo = "Caminhonete";

		public function setPlaca($placa) {
			//Validação da placa


			$this->placa = $placa;
		}

		public function getPlaca() {
			return $this->placa;
		}

	}


	class Carro extends Veiculo {
		public function exibirTipo() {
			echo $this->tipo;
		}
	}


	$carro = new Carro();
	$carro->exibirTipo();

?>
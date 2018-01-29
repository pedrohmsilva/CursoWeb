<?php

	class Calculadora {

		private $total;
		private $numero1;
		private $numero2;

		function __construct() {
			$this->total = 0;
			$this->numero1 = 0;
			$this->numero2 = 0;
		}

		public function setNumero1($num) {
			$this->numero1 = $num;
		}

		public function setNumero2($num) {
			$this->numero2 = $num;
		}

		public function getTotal() {
			return $this->total;
		}

		//Operações
		public function somar() {
			$this->total = $this->numero1 + $this->numero2;
		}

		public function subtrair() {
			$this->total = $this->numero1 - $this->numero2;
		}

		public function multiplicar() {
			$this->total = $this->numero1 * $this->numero2;
		}

		public function dividir() {
			$this->total = $this->numero1 / $this->numero2;
		}


	}

?>
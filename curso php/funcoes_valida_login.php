<?php

	function valida_login($login, $senha) {
		$login_bd = "pedro.silva";
		$senha_bd = "teste";

		if($login == $login_bd && $senha == $senha_bd) {
			return true;
		}

		return false;
	}


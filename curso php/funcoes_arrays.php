<?php

	//is_array
	//$array = "String"; // retorna false
	//$array = array(); // retorna true
	//$array = array('Notebook', 'Teclado'); // retorna true
	//$retorno = is_array($array);

	//in_array
	//$array = array('Mac', 'Linux', 'Windows');
	//$retorno = in_array('Teste', $array);

	//array_keys
	//$produtos = array(10 => "Notebook", 11 => "Teclado");
	//$chaves_array = array_keys($produtos);
	//var_export($chaves_array);

	//sort
	//$frutas = array(0 => 'Banana', 1 => 'Amora', 2 => 'Carambola');
	//sort($frutas);
	//var_export($frutas);

	//asort
	//$frutas = array(0 => 'Banana', 1 => 'Amora', 2 => 'Carambola');
	//asort($frutas);
	//var_export($frutas);

	//count
	//$frutas = array(0 => 'Banana', 1 => 'Amora', 2 => 'Carambola');
	//$itens_array = count($frutas);
	//echo $itens_array;

	//array_merge
	//$array1 = array('mac', 'linux');
	//$array2 = array('windows');
	//$array3 = array('solaris');
	//$novo_array = array_merge($array1, $array2, $array3);
	//var_export($novo_array);

	//explode
	//$string = "20/10/2020";
	//$retorno = explode("/", $string);
	//var_export($retorno);

	//implode
	$string = "20/10/2020";
	$retorno = explode("/", $string);
	var_export($retorno);

	$nova_string = implode(".", $retorno);
	echo "<br>".$nova_string;

	

?>
<?php

	//strtolower
	$texto = "Curso completo";
	
	//strtoupper
	$texto = "curso completo";

	//ucfirst
	$texto = "curso completo";

	//strlen
	$texto = "Curso completo de PHP";


	/*$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
	$total_string_cpf = strlen($cpf);

	if($total_string_cpf != 11 && $cpf != "") {
		echo "CPF inválido";
	}*/

	//str_replace
	/*$texto = "123.123.123-12";
	$cpf =  str_replace(".", "", $texto);
	$cpf = str_replace("-", "", $cpf);
	echo $cpf;*/

	//substr
	$texto = "Isso é um texto usado para teste durante um curso de php";
	$noticia = substr($texto, 0, 33);
	echo $noticia." ...";

?>

<!--<form method="post" action="">
	<label>
		CPF:
		<input type="text" name="cpf">
		<input type="submit" value="Cadastrar">
	</label>
</form>-->
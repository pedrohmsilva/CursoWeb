<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens</title>
	</head>

	<body>
		<pre>
		<?php
			/*echo 'echo <br>';
			print 'print';*/

			//int
			$valor_inteiro = 1 * 4;
			
			$valor_inteiro = $valor_inteiro * 2;

			//float
			$valor_fracionado = -1.75;

			//boolean
			$estado = true;

			//strings
			$texto = 'Curso '.$valor_inteiro;

			//arrays
			$mensagens['a'] = 'Bom dia';
			$mensagens['b'] = 'Boa tarde';
			$mensagens[3] = 'Boa noite';
			$mensagens[4] = 'Obrigado';
			$mensagens[5] = 'Por favor';


			//
			$mensagens = array(
				'a' => 1,
				'b' => -10.7,
				3 => 'Boa noite',
				4 => 'Obrigado',
				5 => 'Por favor'
			);


			var_dump($mensagens);
			echo "<br>";
			print_r($mensagens);


		?>
		</pre>
	</body>
</html>
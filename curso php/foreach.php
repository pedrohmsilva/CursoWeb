<pre>
<?php

	$produtos[1] = 'Sofá';
	$produtos[2] = 'Mesa';
	$produtos[3] = 'Cadeira';
	$produtos[4] = 'Fogão';
	$produtos[5] = 'Geladeira';

	//var_dump($produtos);

	foreach($produtos as $produto) {
		echo $produto;
		echo "<br>";

		if($produto == 'Mesa') {
			echo ' Compre uma mesa e ganhe desconto<br>';
		}
	}

?>
</pre>
<pre>
<?php

	$noticias = array();

	$noticias[1]['titulo'] = "Título da notícia 1";
	$noticias[1]['conteudo'] = "Conteúdo da notícia 1";

	$noticias[2]['titulo'] = "Título da notícia 2";
	$noticias[2]['conteudo'] = "Conteúdo da notícia 2";	

	$noticias[3]['titulo'] = "Título da notícia 3";
	$noticias[3]['conteudo'] = "Conteúdo da notícia 3";

	$noticias[4]['titulo'] = "Título da notícia 4";
	$noticias[4]['conteudo'] = "Conteúdo da notícia 4";

	/*while($idx <= 3) {
		echo $noticias[$idx]['titulo'];
		echo '<br>';
		echo $noticias[$idx]['conteudo'];
		echo '<br><br>';
		$idx++;
	}*/

	/*do {
		echo $noticias[$idx]['titulo'];
		echo "<br>";
		echo $noticias[$idx]['conteudo'];
		echo "<br>";
		echo "<br>";
		$idx++;
	} while($idx <= 4);*/

	for($idx = 1; $idx <= 4; $idx++) {
		echo $noticias[$idx]['titulo'];
		echo "<br>";
		echo $noticias[$idx]['conteudo'];
		echo "<br>";
		echo "<br>";
	}

?>
</pre>
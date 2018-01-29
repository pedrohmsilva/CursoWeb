<?php

	//date
	$data =  date("d/m/Y H:i");

	//strtotime
	$data_inicial = '2018-01-29';
	$data_final = '2018-02-05';

	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);
	$diferenca_time = $time_final - $time_inicial;

	$dia_segundos = 24 * 60 * 60;
	$diferenca_dias = $diferenca_time / $dia_segundos;
	echo $diferenca_dias;

?>
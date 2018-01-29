<?php

	$num = 1;
	while( $num < 10 ) {
		if($num == 5) {
			$num++;
			continue;
		}
		echo "$num <br>";
		$num++;
	}

?>
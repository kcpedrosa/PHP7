<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP if else</title>
</head>
<body>
	<?php

	//==
	//===
	//!== ou <>
	//!=== o famoso nao identico
	// < ou > AND <= ou >=

		if(5 === '5'){
			echo 'Verdadeiro';
		} else {
			echo 'Falso';

		}
		echo '</br>';

		if(7 !== '7'){
			echo 'Verdadeiro';

		}else {
			echo 'Falso';
		}
		echo '</br>';

		if('a' == 'a')
			echo 'Verdadeiro';
		//mas é bom usar {} para deixar organizado, esse tipo de escrita pode causar confusao
		echo '</br>';

		if('a' == 'a')
			echo 'TRUE';
			echo 'Segunda instrucao';
			echo 'Terceira instrucao';

			//vai printar as 3


		


	?>
	
	

</body>
</html>
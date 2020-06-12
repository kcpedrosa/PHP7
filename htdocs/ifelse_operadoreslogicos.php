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

	
	if(3 == 3 && 10 > 3){
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}

	echo '<br>';

	if(3 == 4 || 10 > 3){
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	//pelo menos uma é verdade, entao o output é verdadeiro
	echo '<br>';

	if(3 == 4 XOR 10 > 3){
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}
	//uma é v, e somente uma
	echo '<br>';

	if( !('a' == 'b')){
		//seria falso, mas ! inverte o output
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}

	echo '<br>';

	if(3 == 3 && 10 > 3 && 5 != 5){
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}

	echo '<br>';
	// uso dos parenteses para determinar uma ordem para a analise do valor logico das expressoes
	// dá F e F
	if(3 == 4 XOR (10 > 3 && 5 != 5)){
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}



		


	?>
	
	
	

</body>
</html>
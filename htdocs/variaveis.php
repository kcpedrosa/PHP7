<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Testando Variaveis</title>
</head>
<body>

	<?php
	//string
	$nome = 'Sauron';
	//int
	$idade = 777;
	//float
	$peso = 130.5;
	//boolean
	$fumante_sn = true; //true imprimirá 1 E FALSE é vazio

	?>

	<h1>Ficha cadastral</h1>
	</br>
	<p>NOME: <?= $nome ?></p>
	<p>IDADE: <?= $idade ?> ANOS</p>
	<p>PESO: <?= $peso ?> KGS </p>
	<p>FUMANTE: <?= $fumante_sn ?></p>



</body>
</html>
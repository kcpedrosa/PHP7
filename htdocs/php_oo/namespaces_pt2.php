<?php 

	require "./biblioteca/lib1/lib1.php";
	require "./biblioteca/lib2/lib2.php";

	use A\Cliente as Cli1;
	use B\Cliente as Cli2;

	$teste1 = new Cli2();
	print_r($teste1);
	echo $teste1->__get('nome');

	$teste1 = new Cli1();
	print_r($teste1);
	echo $teste1->__get('nome');


 ?>
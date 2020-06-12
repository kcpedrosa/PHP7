<?php
	/*
	echo "<pre>";
	print_r($_POST);
	echo "</pre>"; 
	*/
	session_start();

	$titulo=str_replace('#', '-', $_POST['titulo']);
	$categoria=str_replace('#', '-', $_POST['categoria']);
	$descricao=str_replace('#', '-', $_POST['descricao']);
	//treating user inputs so # will not appear where we dont want it
	//we're using # as sort of a marker

	//implode('#', $_POST);
	//first use str_replace them glue the pieces with IMPLODE into a array
	/*$control = [$titulo, $categoria, $descricao];
	$implosion = implode('#', $control);
	echo "IMPLODE result: ";
	echo $implosion;
	echo "<hr>";
	*/

	$arquivogerado = fopen('../../app_help_desk2/arquivo.hd', 'a');
	//first test was using the extension .txt, then shifted to .hd as featured in class
	//attention, choose the right parmtr
	//'a'	Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
	

	
	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	fwrite($arquivogerado, $texto);
	fclose($arquivogerado);
	header('Location: abrir_chamado.php')

	//echo $texto;
 ?>
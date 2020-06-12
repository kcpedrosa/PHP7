<?php 

	session_start();
	session_destroy();
	header('Location: index.php');
	/*
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	//remover indices de array de sessao
	//use unset() 

	unset($_SESSION['x']);//if index does not exists, will not rise error
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	//destroy session array
	//session_destroy

	session_destroy();//session dstryd, will be refresh in next request, so type f5 or change page
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	*/

 ?>
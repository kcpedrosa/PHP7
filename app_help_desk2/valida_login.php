
<?php

	session_start();
	/*code bellow was for test purposes
	$_SESSION['x'] = 'hello Im a SESSION value';
	print_r($_SESSION);
	echo "<hr>";
	echo $_SESSION['y'];
	//y was defined in home.php as 1926 MeBz
	*/
	

	$usuarios_app = array(['id'=> 1, 'email'=>'john@teste.com.br','senha'=>'1234', 'perfil_id'=>1],
		['id'=> 2,'email'=>'user@teste.com.br','senha'=>'1234', 'perfil_id'=>1],
		['id'=> 3,'email'=>'maria@teste.com.br','senha'=>'1234','perfil_id'=>2],
		['id' => 4,'email'=>'joao@teste.com.br','senha'=>'1234','perfil_id'=>2]);
	
	echo "<pre>";
	echo var_dump($usuarios_app);
	echo "</pre>";

	$perfis = array(1 => 'Admin', 2 => 'User');
	
	$usuario_perfil_id = null;

	$usuario_id = null;

	$usuario_autenticado = false;
	foreach ($usuarios_app as $user) {
		//the following code is for debug
		/*echo "Usuario APP".$_POST['email']." / Senha " . $_POST['senha'];
		echo "<br>";
		echo "Usuario FORM".$user['email']." / Senha " . $user['senha'];
		echo"<hr>";*/
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_email = $user['email'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}
	if ($usuario_autenticado) {
			echo "Usuario autenticado";
			$_SESSION['autenticado']='SIM';
			$_SESSION['id'] = $usuario_id;
			$_SESSION['email'] = $usuario_email;
			$_SESSION['perfil_id'] = $usuario_perfil_id;
			header('Location: home.php');
			//if logged goes to home
		} else {
			$_SESSION['autenticado']='NAO';
			header('Location: index.php?login=erro');
		}

	/*
	//codigo abaixo testa o retorno dos metodos POST e GET
	echo "<pre>";
	echo var_dump($_GET);
	echo "</pre>";

	echo "<br>";
	echo $_GET['email'];
	echo "<br>";
	echo $_GET['senha'];

	echo "<hr>";

	echo "<pre>";
	echo var_dump($_POST);
	echo "</pre>";

	echo "<br>";
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['senha'];
	*/

 ?>
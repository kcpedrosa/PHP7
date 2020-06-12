<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP concatenacao</title>
</head>
<body>
	<?php
		define('BD_URL','endereco_bd_dev');
		define('BD_USUARIO','usuario_dev');
		define('BD_SENHA','senha_dev');

		//vc nao pode usar um define('BD_URL', aqui, ocorrerá um erro (already defined)
		echo BD_URL . '</br>';
		echo BD_USUARIO . '</br>';
		echo BD_SENHA . '</br>';
		//nao funcionou usar "BD_URL"


	?>
	

</body>
</html>
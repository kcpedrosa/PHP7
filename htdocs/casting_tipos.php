<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP </title>
	<!-- Bootstrap início -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->
</head>
<body>

	<div class="container">
		<div class="jumbotron m-5">
			<h1>CASTING</h1>
			<p>
				<?php
					//GETTYPE() retorna o tipo da variavel
					$valor = 15;
					$valor2 = (string) 15.35;
					$valor3 = (integer)'22.22';
					$valorextra = 'abc';
					$valor4 = (int) $valorextra;
					$valorbool = '22';//se deixar vazio dá false e n printa nada
					$valor5 = (bool) $valorbool;
					//$valor2 = (real) 15.35 //double, float, real
					//$valor2 = (integer) 15.35 //ou int, nesse caso perderemos a virgula

					echo $valor .' = '. gettype($valor);
					echo '</br>';
					echo $valor2 . ' = ' . gettype($valor2);
					echo '<br>';
					echo $valor3 . ' = ' . gettype($valor3);
					echo '<br>';
					echo $valor4 . ' = ' . gettype($valor4) . ' str to int > error ';
					echo '<br>';
					echo $valor5 . ' = ' . gettype($valor5);
					//true é 1 e false é vazio


				?>
			</p>
			
		

		</div>
	</div>
	
	

</body>
</html>
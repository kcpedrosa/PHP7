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
			<h1>False / Null / Empty</h1>
			<p>

				<?php
					
				//false - true/false varivael tipo boolean
				// null e empty- valores especiais

				$control1 = null;
				$control2 = '';
				$control3 = false;

				//valores NULL
				if(is_null($control1)){
					echo "variavel é NULL";
				}else {
					echo "variavel NAO é NULL";
				}

				echo "<br>";
				if(is_null($control2)){
					echo "variavel é NULL";
				}else {
					echo "variavel NAO é NULL";
				}

				echo "<br>";
				if(is_null($control3)){
					echo "[teste False para NULL]variavel é NULL";
				}else {
					echo "[teste False para NULL]variavel NAO é NULL";
				}

				//valores ''  - VAZIOS
				//empty tanto é ''(vazio) como o NULL
				//já o NULL é null
				echo "<br>";
				if(empty($control1)){
					echo "variavel é NULL";
				}else {
					echo "variavel NAO é NULL";
				}

				echo "<br>";
				if(empty($control2)){
					echo "variavel é NULL";
				}else {
					echo "variavel NAO é NULL";
				}

				//lembrando que control3 é false
				echo "<br>";
				if(empty($control3)){
					echo "[teste False para EMPTY]variavel é NULL";
				}else {
					echo "[teste False para EMPTY]variavel NAO é NULL";
				}
				//entao é melhor fazer todos os testes para NULL ?



					

				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
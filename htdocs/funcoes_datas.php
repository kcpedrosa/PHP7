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
			<h1>Funções / Datas</h1>
			<p>

				<?php
					
					echo date("d/m/Y  H:i ");
					echo date(' D ');
					echo date_default_timezone_get();
					date_default_timezone_set('America/Recife');
					echo date(" d/m/Y  H:i ");
					echo date_default_timezone_get();

					$data_inicial='2018-04-24';
					$data_final='2018-05-15';

					$time_inicial = strtotime($data_inicial);
					$time_final = strtotime($data_final);

					echo "<br> $time_inicial <br>";
					echo "<br> $time_final <br>";
					$diferenca_time = abs($time_inicial - $time_final);
					echo "<br> A diferenca de tempo é $diferenca_time segundos<br>";
					$diferenca_dias = $diferenca_time/86400;
					echo "Diferenca em dias é de $diferenca_dias dias";

				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
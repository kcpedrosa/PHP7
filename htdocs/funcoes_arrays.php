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
			<h1>Funcoes Arrays</h1>
			<p>

				<?php
				//uso da funcao IS_ARRAY
					$array1 = array('Tonale','Stelvio');
					$string = 'Qualquer coisa';
					$control1 = is_array($array1);

					if($control1){
						echo "É um array";
					} else {
						echo "Não é um array";
					}

					echo "<hr>";
					//uso da funcao ARRAY_KEYS

					$lmbrg = ['first' => 'Diablo', 'second' => 'Huracan'];
					echo '<pre>';
					echo var_dump($lmbrg);
					echo '</pre>';

					$chaves = array_keys($lmbrg);
					echo '<pre>';
					echo var_dump($chaves);
					echo '</pre>';

					echo "<hr>";
					//uso da funcao SORT
					$lmbrg2 = ['second' => 'Gallardo', 'first' => 'Miura', 'third'=>'Countach'];
					echo '<pre>';
					echo var_dump($lmbrg2);
					echo '</pre>';

					sort($lmbrg2);
					echo '<pre>';
					echo var_dump($lmbrg2);
					echo '</pre>';

					echo "<hr>";
					//uso da funcao ASORT
					echo strtoupper( "uso da funcao ASORT");
					$lmbrg2 = ['second' => 'Gallardo', 'first' => 'Miura', 'third'=>'Countach'];
					echo '<pre>';
					echo var_dump($lmbrg2);
					echo '</pre>';

					asort($lmbrg2);
					echo '<pre>';
					echo var_dump($lmbrg2);
					echo '</pre>';

					echo "<hr>";
					//uso da funcao COUNT

					$industrial = ['John5', 'Manson'];

					echo '<pre>';
					echo var_dump($industrial);
					echo "<h2>" . count($industrial) . "</h2>";
					//h2 to make the number more readable
					echo '</pre>';

					echo "<hr>";
					//uso da funcao ARRAY_MERGE


					$array1 = ['LG','Samsung'];
					$array2 = array('Linux');
					$array3 = ['Solaris'];

					$new_array = array_merge($array1, $array2, $array3);
					echo '<pre>';
					echo var_dump($new_array);
					echo '</pre>';

					echo "<hr>";
					//uso da funcao EXPLODE

					$controle = '20/05/2018';

					$array_retorno = explode('/', $controle);
					echo "<br> $controle <br>";

					echo '<pre>';
					echo var_dump($array_retorno);
					echo $array_retorno[2] .'-'.$array_retorno[1].'-'.$array_retorno[0]; 
					echo "<hr>";
					echo '</pre>';
					

					echo "<hr>";
					//uso da funcao IMPLODE
					$array_implode = ['D','E','L','L'];
					$implode_string = implode( '', $array_implode);
					echo $implode_string;




				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
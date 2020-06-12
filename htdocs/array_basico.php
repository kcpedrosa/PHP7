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
			<h1>Arrays</h1>
			<p>

				<?php
					//arrays sequenciais
					$chevrolet = array('Suburban','Corvette','Bolt','Silverado');
					//$chevrolet = ['Suburban','Corvette','Bolt','Silverado'];
					var_dump($chevrolet);
					echo "<hr>";

					echo "<pre>";
					var_dump($chevrolet);
					echo "</pre>";

					echo "<hr>";
					echo "<pre>";
					print_r($chevrolet);
					echo "</pre>";

					$chevrolet[] = 'Colorado';
					echo "<h3>$chevrolet[4]</h3>";

					//ARRAYS ASSOCIATIVOS
					$jaguar = ['a' => 'XK',
					'b' => 'XF',
					'c' => 'XE'];

					$jaguar['d'] = "F-Type";

					echo "<pre>";
					var_dump($jaguar);
					echo "</pre>";
					echo "<hr>";
					echo "<h4> $jaguar[d] </h4>";


					

				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
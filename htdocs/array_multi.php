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
			<h1>Arrays MULTIDIMENSIONAL</h1>
			<p>

				<?php
					
					$chevrolet = array('1' =>'Suburban','2' =>'Corvette','3' =>'Bolt','4' =>'Silverado');
					//$chevrolet = ['Suburban','Corvette','Bolt','Silverado'];
				

					$lista_auto = [];

					$lista_auto['alfaromeo'] = ['1' => 'Giulia','2' => 'Stelvio'];
					$lista_auto['chevrolet']=$chevrolet;
					echo "<hr>";

					$lista_auto['alfaromeo']['3'] = 'Tonale';

					//$chevrolet['5'] = "Tahoe"; didnt work

					echo "<pre>";
					var_dump($lista_auto);
					echo "</pre>";

					echo "<hr>";
					echo $lista_auto['chevrolet'][1];


					
					



					

				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
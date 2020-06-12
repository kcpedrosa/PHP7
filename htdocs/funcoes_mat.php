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
			<h1>Funções para Op Matemáticas</h1>
			<p>

				<?php
					echo "<br> funcao ceil <br>";
					$num = 7.3;
					echo ceil($num);
					echo "<br> funcao floor <br>";
					$num2 = 7.3;
					echo floor($num);
					echo "<br> funcao round <br>";
					$num3 = 2.3;
					echo round($num3);
					echo "<br> funcao RAND <br>";
					
					echo rand(20,10);
					echo "<br> funcao RAND MAX <br>";
					echo getrandmax();

					echo "<br> funcao SQRT <br>";
					$num4 = 427;
					echo sqrt($num4);
					

				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
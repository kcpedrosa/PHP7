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
			<h1> LOOPS </h1>
			<p>

				<?php
				
					$num = 1;
					echo "Início do LOOP <br>";
					while($num < 10){
						echo " $num <br>";
						$num++;
					}
					echo "Fim do LOOP <br>";

					$num = 0;
					echo "Início do LOOP <br>";
					while($num < 50){
						echo " $num <br>";
						$num += 5;
					}
					echo "Fim do LOOP <br>";

					echo "<hr>";
					$num = 0;
					echo "Início do LOOP c/ BREAK <br>";
					while($num < 500){
						echo " $num <br>";
						$num += 5;
						if($num >= 250){
							echo "critério de PARADA <br>";
								break;
						}
					}
					echo "Fim do LOOP c/ BREAK <br>";

					echo "<hr>";
					$num = 0;
					echo "Início do LOOP c/ CONTINUE <br>";
					while($num < 15){
						
						$num++;
						if($num == 2 || $num == 4){
							echo "continue <br>";
								continue;
						}
						echo " $num <br>";
					}
					echo "Fim do LOOP c/ CONTINUE <br>";




				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
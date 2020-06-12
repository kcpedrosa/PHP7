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
			<h1>Imposto</h1>
			<p>

				<?php
					function imposto($salario){
						$aliquota=0;
						$imposto=0;
						if($salario <= 1903.98){
							$imposto=0;
						} else if($salario > 1903.98 && $salario <= 2826.65){
							$aliquota = 0.075;
							$imposto = $salario * $aliquota;
						} else if($salario > 2826.65 && $salario <= 3751){
							$aliquota = 0.15;
							$imposto = $salario * $aliquota;
						} else if($salario > 3751 && $salario <= 4664){
							$aliquota = 0.225;
							$imposto = $salario * $aliquota;
						} else {
							$aliquota = 0.275;
							$imposto = $salario * $aliquota;
						}
						echo "Com salário de $salario, a aliquota é de $aliquota e o imposto a ser pago é de R$ <br>";
						return $imposto;
					}

					
					echo imposto(5000);


				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP OO</title>
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
			<h1> Pilar da Herança </h1>
			<p>

				<?php 

					class Veiculo {
						public $placa = null;
						public $cor = null;

						function acelerar() {
							echo " Acelerar <br> ";
						}

						function acionarFreio() {
							echo " Acionar freio <br> ";
						}
					}

					class Carro extends Veiculo {
						function __construct($placaEsc,$corEsc){
							$this->placa = $placaEsc;
							$this->cor = $corEsc;
						}
			
						public $tetoSolar = true;

						function abrirTetoSolar(){
							echo " Abrir teto solar <br> ";
						}

						function alterarPosicaoVolante(){
							echo " Alterar posicao volante <br>  ";
						}  

					}

					class Moto extends Veiculo {
						function __construct($placaEsc,$corEsc){
							$this->placa = $placaEsc;
							$this->cor = $corEsc;
						}
						
						public $contraPesoGuidao = true;

						function empinar() {
							echo " Empinar <br> ";
						}
					}

					

					$carro = new Carro('abc1234','grey');
					$moto = new Moto('def1234','red');

					echo "<pre>";
					print_r($carro);
					echo "<hr>";
					print_r($moto);
					echo "</pre>";

					echo "<hr>";
					$carro->abrirTetoSolar();
					//calling method of the parent class
					$carro->acelerar();
					echo "<hr>";
					$moto->empinar();
					//calling method of the parent class
					$moto->acelerar();
					$moto->acionarFreio();

			
				

				?>
		

		</div>
	</div>
	
	
	<!-- Optional JavaScript YOU WILL need it to make some components work well, like the dropdown-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

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
			<h1> Interfaces </h1>
			<p>

				<?php 

					interface EquipamentosEletronicosInterface {
						public function ligar();
						public function desligar();
					}

					class Geladeira implements EquipamentosEletronicosInterface {
						//
						public function abrirPorta(){
							echo ' Abrir porta <br>';
						}

						public function ligar(){
							echo ' Ligar -- <br>';
						}

						public function desligar(){
							echo ' Desligar -- <br>';
						}
					}

					class TV {
						public function trocarCanal(){
							echo ' Troca canal <br>';
						}
					}

					$y = new TV();

					interface MamiferoInterface {
						public function respirar();
					}

					interface TerrestreInterface {
						public function andar();
					}

					interface AquaticoInterface {
						public function nadar();
					}

					class Humano implements MamiferoInterface, TerrestreInterface {
						public function respirar(){
							echo ' Respirar <br>';
						}
						public function andar(){
							echo ' Andar <br>';
						}

						public function conversar() {
							echo ' conversa mole <br>';
						} 
					}

					class Baleia implements MamiferoInterface, AquaticoInterface {
						public function nadar(){
							echo ' Nadar <br>';
						}
						public function respirar(){
							echo ' Respirar <br>';	
						}

						protected function comerKrill() {
							echo ' Comer muito krill <br>';
						}

						public function executar(){
							$this->comerKrill();
							//if needed, implmt paramtrs for value + if 
						}
					}

					$a = new Baleia();
					$a->executar();
				
					interface AnimalInterface {
						public function comer();
					}

					interface AveInterface extends AnimalInterface{
						public function voar();
					}

					class Papagaio implements AveInterface {
						
						public function comer(){
							echo ' Comeu algo ';
						}
						
						public function voar(){
							echo ' Voa, voa ';
						}
					}

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
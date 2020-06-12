
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
			<h1> Pilar do Encapsulamento </h1>
			<p>

				<?php 

					class Pai {
						private $nome = 'John5 <br>';
						protected $sobrenome = 'James <br>';
						public $humor = ' Very crazy <br>';

						//tchr commented both magic mtds for testing
						/*
						public function __set($atributo, $valor){
							if(strlen($valor)>=3){
								$this->$atributo = $valor;
							} else {
								echo '-Erro-';
							}
							 
						}


						public function __get($atributo){
							return $this->$atributo;
						}
						*/

						private function executarMania() {
							echo " Assobiar <br>";
						}

						protected function responder() {
							echo " oi <br>";
						}
						
						public function executarAcao($opcao) {
							$x = $opcao;
							if($x==1){
								$this->executarMania();
							} elseif ($x==2) {
								$this->responder();
							} else {
								echo ' Atenção: digite 1 ou 2 como parametro! ';
							}
						}
					
					}
					
					class Filho extends Pai {
						public function __construct(){
							//show methods of object
							echo "<pre>";
							var_dump( get_class_methods($this));
							echo "</pre>";
							echo "<hr>";
						}

						private function executarMania() {
							echo "Cantar <br>";
						}

						public function teste() {
							$this->executarMania();
						}

						protected function responder() {
							echo " Hallo mein Freund <br>";
						}

						/*
						public function getAtributo($attr){
							return $this->$attr;
						}

						public function setAtributo($attr, $value){
							$this->$attr = $value;
						}
						*/



						public function __set($atributo, $valor){
							if(strlen($valor)>=3){
								$this->$atributo = $valor;
							} else {
								echo '-Erro-';
							}
							 
						}


						public function __get($atributo){
							return $this->$atributo;
						}

					}

					$filho = new Filho();
					
					/*
					echo $filho->getAtributo('humor');
					$filho->setAtributo('humor',' Angered by fear ');
					echo $filho->getAtributo('humor');
					*/

					//this bellow will create a new name called manson in the son
					/*
					$filho->setAtributo('nome',' Manson ');
					echo $filho->getAtributo('nome');
					*/

					echo "<pre>";
					print_r($filho);
					echo "</pre>";

					//bellow will raise error cause nome was not inherited
					//echo $filho->__get('nome');

					//show object methods, will not show responder, wich is private
					/*
					echo "<pre>";
					var_dump( get_class_methods($filho));
					echo "</pre>";
					*/

					$filho->executarAcao(2);
					$filho->teste();
					


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
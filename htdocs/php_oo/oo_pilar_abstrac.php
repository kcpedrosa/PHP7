
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
			<h1> Pilar da Abstração </h1>
			<p>

				<?php 

				class Funcionario {
					//atributos
					public $nome = null;
					public $telefone = null;
					public $numFilhos = null;

					//getters e setters
					//set
					function setNome($nomeEscolhido){
						$this->nome = $nomeEscolhido;
					}
					function setTelefone($telefoneEscolhido){
						$this->telefone = $telefoneEscolhido;
					}
					function setNumFilhos($setNumF){
						$this->numFilhos = $setNumF;
					}
					//get
					function getNome(){
						return $this->nome;
					}
					function getTelefone(){
						return $this->telefone;
					}
					function getNumFilhos(){
						return $this->numFilhos;
					}


					//metodos
					function resumirCadFunc() {
						return "$this->nome tem $this->numFilhos filhos <br>";
					}

					function modificarNumFilhos($nF) {
						//afetar atributos do objeto
						$this->numFilhos = $nF;
						//return $this->numFilhos;
					}
				}

				$joao = new Funcionario();
				$joao->setNome('joaomesmo');
				echo $joao->resumirCadFunc();
				$joao->modificarNumFilhos(7);
				echo $joao->resumirCadFunc();

				echo "<hr>";
				$x = new Funcionario;
				$x->setNome('xFactor');
				echo $x->resumirCadFunc();
				$x->modificarNumFilhos(13);
				echo $x->resumirCadFunc();

				echo "<hr>";
				$y = new Funcionario;
				$y->setNome('john77');
				$y->setNumFilhos(13);
				echo $y->resumirCadFunc();
				echo $y->getNome() . ' -tem- ' . $y->getNumFilhos() . ' -filhos '; 

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
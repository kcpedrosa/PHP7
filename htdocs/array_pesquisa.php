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
			<h1>Pesquisa em Arrays</h1>
			<p>

				<?php
					
					$chevrolet = array('1' =>'Suburban','2' =>'Corvette','3' =>'Bolt','4' =>'Silverado');
					
					//in_array retorna 1 se o elemento existir no array e vazio se NAO existir
					//array_search retorna o indice do elemento caso exista, se N, ret NULL
					echo "<pre>";
					echo var_dump($chevrolet);
					echo "</pre>";

					$control = in_array('Bolt', $chevrolet);
					echo $control;

					if($control){
						echo '<br> Elemento existe';
					} else {
						echo '<br> Elemento nao existe';
					}

					$control2 = array_search('Silverado', $chevrolet);
					echo "<br> $control2 <br>";

					if($control2){
						echo "<br>$control2 Elemento existe";
					} else {
						echo "<br>$control2 Elemento nao existe";
					}
					//prof disse pra por $control2 != null mas func sem

					$lista_auto['alfaromeo'] = ['1' => 'Giulia','2' => 'Stelvio'];
					$lista_auto['chevrolet']=$chevrolet;

					echo "<hr>";
					echo in_array('Giulia', $lista_auto['alfaromeo']);
					//se tirar a referencia alfaromeo nao ira funcionar, so se houves uma estrutura
					//de repeticao pra iterar no array principal
					echo "<hr>";

					echo "<pre>";
					echo var_dump($lista_auto);
					echo "</pre>";


					
					



					

				?>
			
			
		

		</div>
	</div>
	
	

</body>
</html>
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
			<h1> LOOPS, percorrendo arrays </h1>
			<p>

				<?php

				$control = array(
					['titulo'=>'titulo notícia UM', 'conteudo'=>'conteudo noticia UM'],
					['titulo'=>'titulo notícia DOIS', 'conteudo'=>'conteudo noticia DOIS'],
					['titulo'=>'titulo notícia TRES', 'conteudo'=>'conteudo noticia TRES'],
					['titulo'=>'titulo notícia QUATRO', 'conteudo'=>'conteudo noticia QUATRO'],);

				echo '<pre>';
				echo var_dump($control);
				echo '</pre>';
				echo "<hr>";
				echo "O array possui ". count($control)." registros";
				echo "<hr>";
				$idx = 0;
				while($idx < count($control)){

					echo '<h3>'. $control[$idx]['titulo'] .'</h3>';
					echo '<p>'. $control[$idx]['conteudo'] .'</p>';
					echo "<hr>";

					$idx++;
				}

				$idx=0;
				echo "INICIANDO COM DO WHILE";
				do {
					echo '<h3>'. $control[$idx]['titulo'] .'</h3>';
					echo '<p>'. $control[$idx]['conteudo'] .'</p>';
					echo "<hr>";

					$idx++;

				} while ($idx < count($control));

				$idx=0;
				echo "INICIANDO COM FOR";
				for ($idx=0; $idx < count($control) ; $idx++) { 
					echo '<h3>'. $control[$idx]['titulo'] .'</h3>';
					echo '<p>'. $control[$idx]['conteudo'] .'</p>';
					echo "<hr>";
				}




				?>
			</p>



			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/100.png" alt="Card image cap" style="width: 50px;">
			  <div class="card-body">
			    <h5 class="card-title">
			    	VOLTORB
			    </h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
			
		

		</div>
	</div>
	
	

</body>
</html>
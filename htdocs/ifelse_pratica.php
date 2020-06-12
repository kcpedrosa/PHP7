<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP operadores</title>
	<!-- Bootstrap início -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->
</head>
<body>
	<?php

	//==
	//===
	//!== ou <>
	//!=== o famoso nao identico
	// < ou > AND <= ou >=

	$usuario_possui_cartao_loja = true;
	//essa info poderia ter vindo do BD ou de consulta p/ alguma API
	$valor_compra = 225;
	$valor_frete = 50;
	$recebeu_desconto_frete = false;

		if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
			$valor_frete = 0;
			$recebeu_desconto_frete = true;
		}

	?>
	<div class="container">
		<div class="jumbotron m-5">
			<h1>Detalhes do pedido</h1>
			<p>Possui cartao da loja?
				<?php
					if($usuario_possui_cartao_loja){
						echo 'Sim, possui';
					} else {
						echo 'Não possui';
					}

				?>	
			</p>
			<p> Valor da compra R$ <?= $valor_compra ?></p>

			<p>Recebeu desconto no frete?
				<?php
					if($recebeu_desconto_frete == true){
						echo 'Desconto no frete foi recebido';
					}else {
						echo 'Não recebeu desconto no frete';
					}
				?>
			</p>
			<p>Valor do frete: R$ <?= $valor_frete ?></p>

		</div>
	</div>
	

</body>
</html>
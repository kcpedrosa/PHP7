<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP concatenacao</title>
</head>
<body>
	<?php
		$type = 'KLEINWAGEN';
		$nummer = 3;
		$status = 'GEBRAUCHTWAGEN';


		//operador ponto ( . )
		echo 'Wer einen ' .$type. ' als ' .$status. ' kaufen möchte, der sollte einen Blick auf Ford Fiesta und Opel Corsa mit Dreizylinder(' .$nummer. ')-Turbo werfen.';

		//usando aspas duplas pra concatenar

		echo '</br>';
		echo "Wer einen $type als $status kaufen möchte, der sollte einen Blick auf Ford Fiesta und Opel Corsa mit $nummer  zylinder-Turbo werfen";

	?>
	

</body>
</html>
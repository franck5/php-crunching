
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Combien de mots contient ce dictionnaire ?</h2>
	<?php 

		$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
		$dico = explode("\n", $string);

		$result = count($dico);
		echo "Ce dictionnaire contient $result mots <br>";

	?>
	<h2>Combien de mots font exactement 15 caractères ?</h2>
	<?php
		$string_15 = array();
		foreach ($dico as $recup) {
			if (strlen($recup) == 15) {
				array_push($string_15, $recup);
			}
		}
	echo count($string_15)." mots font exactement 15 caracteres <br>";
	?>


	<h2>Combien de mots contiennent la lettre « w » ?</h2>
	<?php
		$string_w = array();
		foreach ($dico as $stock) {
			if (strpos($stock, "w") !== false) {
				array_push($string_w, $stock);
			}
		}
	echo count($string_w)." mots contiennent un w";
	?>


	<h2>Combien de mots finissent par la lettre « q » ?</h2>
	<?php

		$string_q = array();
		foreach ($dico as $contenu) {
			if (substr($contenu, -1) == "q") {
				array_push($string_q, $contenu);
			}
		}
	echo count($string_q);



	?>
</body>
</html>



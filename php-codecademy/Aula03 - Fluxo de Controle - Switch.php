<?php 
	
	// Sintaxe da instrução switch case

	switch (0) {
		case 0:
			echo 'O valor é 0';
			break;
		case 1:
			echo 'O valor é 1';
			break;
		case 2:
			echo 'O valor é 2';
			break;
		default:
			echo "O valor não é 0, 1 nem 2";
		}
	
	// Falling Through: técnica usada para adicionar um case após o outro sem usar o break, veja o exemplo:

	$i = 5;
    
	switch ($i) {
		case 0:
			echo '$i é 0.';
			break;
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo '$i está entre 1 e  5.';
			break;
		case 6:
		case 7:
			echo '$i é 6 ou 7.';
			break;
		default:
			echo "Eu não sei quanto \$i vale.";
		}

		// Syntactic Sugar e o 'Endswitch'

		$i = 5;
    
		switch ($i):
		case 0:
			echo '$i é 0.';
			break;
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo '$i está entre 1 e  5.';
			break;
		case 6:
		case 7:
			echo '$i é 6 ou 7.';
			break;
		default:
			echo "Eu não sei quanto \$i vale.";
		endswitch;
?>
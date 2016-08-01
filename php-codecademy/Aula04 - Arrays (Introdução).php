<?php 
	
	// Declarando um array:
	$array = array("Egg", "Tomato", "Beans");

	// Acessando indices (com [] ou {}):
	echo $tens[0] // Imprime "Egg";
	echo $tens{2} // Imprime "Beans";

	// Adicionando itens a um array (array_push):
	array_push($tens, "Bacon");

	// Modificando Elementos do Array
	$myArray = array("red", "blue", "yellow");
	echo $myArray[1]; // tem "blue" como saída
	
	$myArray[1] = "green";
	echo $myArray[1]; // tem "green" como saída

	// Deletando Elementos do Array (unset)
	$array = array("red", "blue", "green");
  unset($array[2]);

  // Deletar array inteiro:
  unset($array);

?>
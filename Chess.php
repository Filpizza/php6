<?php

$handle = fopen("php://stdin","r");
echo "Vvedite shirinu = $string";
$string = trim(fgets($handle));
echo "Vvedite visotu = $column";
$column = trim(fgets($handle));
  
for ($i = 1; $i <= $column; $i++){
	for ($j = 1; $j <= $string; $j++){
		if ($i % 2 == 1) {
			if ($j % 2 == 1) {
			echo "_";
			}
			else echo "#";
		}
		else
		if ($j % 2 == 1) {
			echo "#";
		}
		else echo "_";
	}
	echo "\n";
}
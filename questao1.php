<?php
$array = [];

for($i = 1;$i <= 100;$i++){
	$array[] = $i; 
}
function mostrarResultado($valor,$key)
{
	if ($valor%3===0 && $valor%5===0) {
		echo "FizzBuzz<br>";
	} elseif($valor%3===0) {
		echo "Fizz<br>";
	} elseif($valor%5===0) {
		echo "Buzz<br>";
	} else {
            echo "$valor <br>";
        }
}

array_walk_recursive($array, 'mostrarResultado');

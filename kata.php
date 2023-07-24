<?php

/**
 * Sans utiliser la moindre fonction php trouver la valuer maximum 
 * et minimum du tableau suivant. Puis les afficher.
 * 
 */

$values = [162, 71, 89, 90, 138, 0, -48, -28, -16, 92, 166, 177, -49, -21, 132, 25, 103, 177, 127, 173];

$min = $max = $values[0];

foreach($values as $value) {
    if($min > $value) $min = $value;
    if($max < $value) $max = $value;
}

echo "Valeur maximale : $max\n";
echo "Valeur minimale : $min";
<?php

function calculateSum($array) {
    return array_sum($array);
}

$partialSum = 0;
$enteredNumbers = [];
$numberCount = 0;
$firstCountSuccess = false;

while ($partialSum != 67 && $numberCount < 10) {
    echo "Escriu un numero (1-9): ";
    $number = intval(trim(fgets(STDIN)));

    if ($number < 1 || $number > 9) {
        echo "Número invalid. Introdueix un número entre el 1 i el 9.\n";
        continue;
    }

    $enteredNumbers[] = $number;
    $numberCount++;

    $partialSum = calculateSum($enteredNumbers);

    echo "Suma Parcial: $partialSum\n";

    if ($partialSum == 67) {
        echo "Primer fre d'emergència activat!\n";
        $firstCountSuccess = true;
        break; 
    } elseif ($numberCount >= 10) {
        echo "El tren explota! Game Over!";
        exit; 
    }
}

if ($firstCountSuccess) {
    $partialSum = 0;
    $enteredNumbers = [];
    $numberCount = 0;

    while ($partialSum != 81 && $numberCount < 10) {
        echo "Escriu un numero (1-9): ";
        $number = intval(trim(fgets(STDIN)));

        if ($number < 1 || $number > 9) {
            echo "Número Invalid. Introdueix un número entre el 1 i el 9.\n";
            continue;
        }

        $enteredNumbers[] = $number;
        $numberCount++;

        $partialSum = calculateSum($enteredNumbers);
    }

    if ($partialSum == 81) {
        echo "Segon fre d'emergència activat! Has salvat el tren!";
    } else {
        echo "El tren explota! Game Over!";
    }
}
<?php

function calculateSum($array) {
    return array_sum($array);
}

function numberCounter($targetSum, $showPartialSum = true){
    $partialSum = 0;
    $enteredNumbers = [];
    $numberCount = 0;

    while ($partialSum != $targetSum && $numberCount < 10) {
        echo "Escriu un número (1-9): ";
        $number = intval(trim(fgets(STDIN)));

        if ($number < 1 || $number > 9) {
            echo "Número invàlid. Introdueix un número entre 1 i 9.\n";
            continue;
        }

        $enteredNumbers[] = $number;
        $numberCount++;

        $partialSum = calculateSum($enteredNumbers);

        if ($showPartialSum) {
            echo "Suma Parcial: $partialSum\n";
        }
    }

    return $partialSum;

}


$firstCount = numberCounter(67);

if ($firstCount == 67) {

    echo ("Primer fre d'emergència activat! Pero hi ha un altre bomba!\n");

    $secondCount = numberCounter(81, false);

    if ($secondCount == 81) {
        echo "Segon fre d'emergència activat! Has salvat el tren!";
    } else {
        echo "El tren explota! Game Over!";
    }
} else {
    echo "El tren explota! Game Over!";
}
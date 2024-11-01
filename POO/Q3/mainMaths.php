<?php

include "Maths.class.php";

main();

function main()
{
    $a = readline("Entrez a : ");
    $b = readline("Entrez b: ");
    echo Maths::addition($a, $b) . "\n";
    echo Maths::soustraction($a, $b) . "\n";
    echo Maths::multiplication($a, $b);
    try {
        echo Maths::division($a, $b);
    } catch (Exception) {
        echo "Division par zéro impossible.";
    }
}


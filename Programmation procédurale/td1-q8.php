#!/usr/bin/php
<!-- On souhaite améliorer le programme précédent afin que le message ne soit pas le même
lors de la demande suite à une erreur de saisie :
Saisissez un nombre positif : -5
Saisie incorrecte, recommencez votre saisie : -3
Saisie incorrecte, recommencez votre saisie : 2
Le nombre saisi est 2. -->

<?php

main($argv);

function main(array $argv)
{
    $value = readline("Saisissez un nombre positif : \n");
}
while ($value < 0 || !ctype_digit($value)) {
    $value = readline("Saisissez incorrecte, recommencez : \n");

    echo "Le nombre saisi est : $value. \n";
}

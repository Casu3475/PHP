#!/usr/bin/php
<?php

main();

function main()
{
    $leplusgrand = 0;
    $laposition = 0;
    $combien = 5;
    $compteur = 0;
    while ($compteur < $combien) {
        $nb = readline("Entrez un nombre positif : "); //recup une question et une valeur
        if (!ctype_digit($nb)) {
            continue; // tant qu'on a pas qqchose de positif, on ne continue pas!
            // continue =  contrôleur de boucle. on saute le reste du code et on recommence la boucle,, on oublie ce qu'il y a en dessous, tu reviens tout de suite à la colonne ouvrante de la boucle.
        }
        if ($leplusgrand < $nb) {
            $leplusgrand = $nb;
            $laposition = $compteur + 1;
        }
        $compteur++; // on incrémente le compteur de 1, et on recommence la boucle jusq'à ce que le compteur soit égal à 5. puis on sort de la boucle.
    }
    echo 'Le plus grand : ' . $leplusgrand . ' position ' . $laposition . "\n";
}

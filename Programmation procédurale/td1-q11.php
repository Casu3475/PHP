<!-- Écrire un programme qui demande successivement 5 nombres à l’utilisateur, et qui indique
lequel de ces nombres est le plus grand.  -->

<?php

main($argv);

function main()
{
    $leplusgrand = 0;
    $laposition = 0;
    $combien = 4;
    $compteur = 0;
    while (1) {
        $nb = readline("Saisissez un nombre positif : \n");
        if (!ctype_digit($nb)) {

            continue;
        }
        if ($leplusgrand < $nb) {
            $leplusgrand = $nb;
            $laposition = $compteur + 1;
        }
        $compteur++;
    }
    echo "Le plus grand nombre est : .max($leplusgrand). position : $laposition. \n";
}

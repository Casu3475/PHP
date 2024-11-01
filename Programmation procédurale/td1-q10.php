<!-- Écrire un programme qui demande un nombre de départ, et qui calcule la somme des
entiers jusqu’à ce nombre. Par exemple, si l’on entre 5, le programme doit calculer : 1 + 2 + 3
+ 4 + 5 et afficher 15. -->

<?php

main($argv);

function main()
{
    while (1) {
        $nb = readline("Saisissez un nombre positif : \n");
        if (ctype_digit($nb)) {
            continue;
        }
        $résultat = 0;
        for ($i = 1; $i <= $nb; $i++) {
            $résultat += $i;
        }
        echo "Le résultat est : $résultat. \n";
        break;
    }
}

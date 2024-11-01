<!-- On souhaite réaliser un programme qui demande un nombre compris entre 10 et 20, jusqu’à
ce que la réponse convienne. En cas de réponse supérieure à 20, on fera apparaître un
message : « Plus petit ! », et inversement, « Plus grand ! » si le nombre est inférieur à 10.  -->

<?php

main($argv);

function main()
{
    while (1) {
        $test = readline("Saisissez un nombre compris entre 10 et 20 : \n");
        if (!is_numeric($test)) {
            echo "C'est pas un nombre";
            continue;
        }
        if ($test < 10) {
            echo "Plus grand !";
            continue;
        }
        if ($test > 20) {
            echo "Plus petit !";
            continue;
        }
        echo "Le nombre saisi est : $test. \n";
        break; // sortir de la boucle sinon le while ne s'arrête jamais!
    }
}

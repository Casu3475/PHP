<?php

include "ChiffreSorter.class.php";

main();

function main()
{
    $lesNombres = ChiffreSorter::donneLesNombres();
    ChiffreSorter::triLesNombres($lesNombres);
    ChiffreSorter::afficheLesNombres($lesNombres);
}

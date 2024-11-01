<?php

include "Personne.class.php";
include "Etudiant.class.php";
include "Professeur.class.php";
include "Note.class.php";

main();

function main()
{
    $e = new Etudiant("jack", "sparrow", 36, "SIO");
    $p = new Professeur("john", "wick", 40, "PHP");
    $note = new Note($p, $e, 16);
    var_dump($note);
}

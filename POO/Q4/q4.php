<?php

include 'Personne.class.php';
include 'PersonneSorter.class.php';

main();

function main()
{
    $prenoms = [
        "Louis",
        "Sylvain",
        "Antoine",
        "Léon",
        "Colin",
        "Christine",
        "Nathalie",
        "Sylvie",
        "François",
        "Guy",
        "Vincent",
        "Alain",
        "Serge",
        "Gérard",
        "Bernard",
        "Léa",
    ];
    $personnes = [];
    foreach ($prenoms as $prenom) { 
        $personnes[] = new Personne($prenom); // on crée un tableau de personnes
    }
    PersonneSorter::leTri($personnes); // on trie le tableau de personnes
    var_dump($personnes);
}

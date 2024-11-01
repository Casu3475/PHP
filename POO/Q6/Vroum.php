<?php

include "Voiture.class.php";
include "Bmw.class.php";
include "Mercedes.class.php";
include "Audi.class.php";

main();

function main()
{
    /*$b = new Bmw();
    $m = new Mercedes();
    $b->getMarque();
    echo "\n";
    $m->getMarque();
    echo "\n";*/
    $voitures = generateArray();
    afficheArray($voitures);
}

function generateArray(): array
{
    $rand = rand(2, 10);
    $leTableau = [];
    for ($i = 0; $i < $rand; $i++) {
        // 1er jet
        /*$maislaquellevoiture = rand(0, 1);
        $laVoiture = null;
        if($maislaquellevoiture == 0){
            $laVoiture = new Bmw();
        }else {
            $laVoiture = new Mercedes();
        }
        $leTableau[] = $laVoiture;*/
        // Ou sinon
        // $leTableau[] = rand(0,1) ? new Bmw() : new Mercedes();
        // 3 et plus
        $maislaquellevoiture = rand(0, 2);
        //$marque = Voiture::MARQUES[$maislaquellevoiture];
        $leTableau[] = new (Voiture::MARQUES[$maislaquellevoiture])();
    }
    return $leTableau;
}

function afficheArray(array $voitures)
{
    foreach ($voitures as $voiture) {
        $voiture->getMarque();
        echo ' ';
        $voiture->getCarburant();
        echo "\n";
    }
}

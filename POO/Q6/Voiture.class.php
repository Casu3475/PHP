<?php

abstract class Voiture
{

    const MARQUES = [
        Bmw::class,
        Mercedes::class,
        Audi::class,
        Renault::class
    ];
    /*
    const CARBURANT_ESSENCE = "essence";
    const CARBURANT_DIESEL = "diesel";
    const CARBURANT_ELECTRIQUE = "electrique";
*/
    const CARBURANT_ESSENCE = 0;
    const CARBURANT_DIESEL = 1;
    const CARBURANT_ELECTRIQUE = 2;

    public function getMarque()
    {
        echo static::class;
    }

    protected function afficheCarburant(int $type)
    {
        if ($type == 0) {
            echo "essence";
        } else if ($type == 1) {
            echo "diesel";
        } else if ($type == 2) {
            echo "electrique";
        } else {
            echo "existe pas encore";
        }
    }
}

// late static binding 

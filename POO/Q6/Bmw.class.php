<?php

class Bmw extends Voiture
{

    public static $toto = "truc";

    public function getCarburant()
    {
        parent::afficheCarburant(parent::CARBURANT_ESSENCE);
    }
}

<?php

class Audi extends Voiture
{

    public function getCarburant()
    {
        parent::afficheCarburant(parent::CARBURANT_ESSENCE);
    }
}

<?php

class Mercedes extends Voiture
{

    public static $toto = "trac";

    public function getCarburant()
    {
        parent::afficheCarburant(parent::CARBURANT_ELECTRIQUE);
    }
}

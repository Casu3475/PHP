<?php

class Personne
{

    public $prenom;

    public function __construct(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function compare(Personne $personne)
    {
        return strcmp($personne->prenom, $this->prenom); //strcmp compare les string
    }
}

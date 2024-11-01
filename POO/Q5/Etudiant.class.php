<?php

class Etudiant extends Personne
{

    public string $promotion;

    public function __construct(string $nom, string $prenom, int $age, string $promotion)
    {
        parent::__construct($nom, $prenom, $age);
        $this->promotion = $promotion;
    }
}

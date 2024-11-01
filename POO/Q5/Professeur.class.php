<?php

class Professeur extends Personne
{

    public string $matiere;

    public function __construct(string $nom, string $prenom, int $age, string $matiere)
    {
        parent::__construct($nom, $prenom, $age);
        $this->matiere = $matiere;
    }
}

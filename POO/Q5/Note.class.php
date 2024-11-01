<?php

class Note
{

    public Professeur $professeur;
    public Etudiant $etudiant;
    public int $note;

    public function __construct(Professeur $professeur, Etudiant $etudiant, int $note)
    {
        $this->professeur = $professeur;
        $this->etudiant = $etudiant;
        $this->note = $note;
    }
}

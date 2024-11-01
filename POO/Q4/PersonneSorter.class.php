<?php

class PersonneSorter
{

    public static function leTri(array &$personnes)
    {
        usort($personnes, "PersonneSorter::comparePersonne");
    }

    public static function comparePersonne(Personne $a, Personne $b)
    {
        return $b->compare($a);
    }
}

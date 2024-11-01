#!/usr/bin/php
<?php

main($argv);

function main(array $argv){
    $montant = getMontant($argv);
    $taux = getTaux($argv);
    echo "Le montant converti est : ". $montant * $taux. "\n";
}

function getMontant(array $argv) : int{
    $montant = getValue($argv, "-m");
    if(!ctype_digit($montant)){
        echo "C'est pas un nombre";
        exit(1);
    }
    return $montant;
}

function getTaux(array $argv) : int{
    $taux = getValue($argv, "-t");
    if(!ctype_digit($taux)){
        echo "C'est pas un nombre";
        exit(1);
    }
    return $taux;
}

function getValue(array $argv, string $param) {
    if(sizeof($argv) < 3){
        echo "Tchao\n";
        exit(1);
    }
    foreach($argv as $key => $value){
        if($value==$param){
            if(!isset($argv[$key + 1])){
                echo "marche pas";
                exit(2);
            }
            return $argv[$key + 1];
        }
    }
    echo "paramètre non trouvé $param\n";
    exit(3);
}


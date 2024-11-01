#!/usr/bin/php
<!-- 
Écrire un programme qui affiche des étoiles selon divers modes :
• n étoiles sur la même ligne ;
• n étoiles en allant à la ligne à chaque fois -->

<?php

main($argv); // La fonction main($argv) est appelée au début du script, avec $argv qui représente les arguments de ligne de commande passés au script. Cette fonction est la principale du script et gère le flux de contrôle.

function main(array $argv) //Dans la fonction main(array $argv), le programme commence par afficher "choisir en ligne (l) ou colonne (c) : " pour demander à l'utilisateur de choisir entre deux modes.
{
    echo "choisir en ligne (l) ou colonne (c) : ";
    $mode = readline(); // La fonction readline() est utilisée pour lire l'entrée de l'utilisateur. La valeur lue est stockée dans la variable $mode.
    if ($mode != "c" && $mode != "l") { //Le programme vérifie si la valeur de $mode est différente de "c" et différente de "l". Si c'est le cas, il affiche "c'est pas bon" (ce n'est pas correct) et se termine avec le code de sortie 1 en utilisant exit(1). Cela signifie que l'utilisateur a fait un choix incorrect et le programme se termine avec une erreur.
        echo " c' est pas bon";
        exit(1);
    }
    echo "choisir le nombre d' étoile : ";
    $value = readline(); //Ensuite, le programme demande à l'utilisateur de choisir le nombre d'étoiles avec "choisir le nombre d'étoiles : " et lit cette valeur dans la variable $value.
    if (!ctype_digit($value) && $value > 0) { //Le programme vérifie si $value n'est pas un nombre positif en utilisant la condition !ctype_digit($value) && $value > 0. Si c'est le cas, il affiche "ce n'est pas un nombre positif" et se termine avec le code de sortie 2 en utilisant exit(2). Cela signifie que l'utilisateur a entré une valeur incorrecte pour le nombre d'étoiles.
        echo "ce n'est pas un nombre positif";
        exit(2);
    }
    afficheEtoile($value, $mode); //Enfin, si l'utilisateur a fait des choix valides pour le mode et le nombre d'étoiles, le programme appelle la fonction afficheEtoile($value, $mode) pour afficher les étoiles en fonction du mode choisi.
}

function afficheEtoile($value, $mode) //La fonction afficheEtoile($value, $mode) utilise une boucle while pour afficher le nombre d'étoiles spécifié ($value) selon le mode choisi. Si le mode est "c" (colonne), elle affiche chaque étoile sur une nouvelle ligne, sinon, elle les affiche sur la même ligne.
{
    $i = 0;
    while ($i < $value) {
        echo "*";
        if ($mode == "c") {
            echo "\n";
        }
        $i++;
    }
}

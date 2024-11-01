<?php

// main($argv);

// function main($argv)
// {
//     $num = getNumber($argv);
//     checkPrime($num);
// }

// function getNumber($argv)
// {
//     while (1) {
//         $nb = readline("Entrez un nombre positif : ");
//         if (ctype_digit($nb)) {
//             return $nb;
//         }
//     }
// }

// function checkPrime($num): void
// {
//     echo $num;
//     echo isPrime($num) ? " is " : " is not ";
//     echo "a prime number\n";
// }

// function isPrime($num): bool
// {
//     if ($num == 0 || $num == 1) {
//         return FALSE;
//     }
//     if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
//         return TRUE;
//     }
//     return !($num % 2 == 0 || $num % 3 == 0 || $num % 5 == 0 || $num % 7 == 0);
// } 

main($argv);

function main($argv)
{
    $nums = getNumbers($argv);
    array_walk($nums, "checkPrime");
}

function getNumbers($argv): array
{
    if (sizeof($argv) < 2) {
        echo "Tchao";
        exit(1);
    }
    return explode(',', $argv[1]);
}

function checkPrime($num): void
{
    echo $num;
    echo isPrime($num) ? " is " : " is not ";
    echo "a prime number\n";
}

function isPrime($num): bool
{
    if ($num == 0 || $num == 1) {
        return FALSE;
    }
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        return TRUE;
    }
    return !($num % 2 == 0 || $num % 3 == 0 || $num % 5 == 0 || $num % 7 == 0);
}


<?php

main($argv);

function main($argv)
{
    $combien = readline("Combien :");
    echo "Les nombres pairs sont : ";
    array_map(
        function ($even) {
            echo $even . " ";
        },
        array_filter(generateArrayOfNumbers($combien), "isEven")
    );
    echo "\n";
}

function isEven($num)
{
    return $num % 2 == 0;
}

function generateArrayOfNumbers($max)
{
    $numbers = [];
    for ($i = 0; $i < $max; $i++) {
        $numbers[] = $i;
    }
    return $numbers;
}

function displayArray($evens)
{
    return array_reduce(
        $evens,
        function ($carry, $even) {
            return $carry .= $even . ' ';
        },
        'Following numbers are even : '
    ) . "\n";
}  



// main($argv);

// function main($argv)
// {
//     $size = sizeof($argv) > 1 ? $argv[1] : 20;
//     echo displayArray(filterEven(generateArrayOfNumbers($size)));
// }

// function displayArray(array $evens): string
// {
//     return array_reduce($evens, function ($carry, $even){
//         return $carry .= $even.' ';
//     }, 'Following numbers are even : ') . "\n";
// }

// function generateArrayOfNumbers($max): array
// {
//     $numbers = [];
//     for ($i = 0; $i < $max; $i++) {
//         $numbers[] = $i;
//     }
//     return $numbers;
// }

// function filterEven($array): array
// {
//     return array_filter($array, 'isEven');
// }

// function isEven($number): bool
// {
//     return $number % 2 == 0;
// }
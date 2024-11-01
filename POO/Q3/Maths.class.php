<?php

class Maths
{
    public static function addition(int $a, int $b): int
    {
        return $a + $b;
    }
    public static function soustraction(int $a, int $b): int
    {
        return $a - $b;
    }

    public static function multiplication(int $a, int $b): int
    {
        return $a * $b;
    }
    /**
     * @throws Exception 
     */

    public static function division(int $a, int $b): float
    {
        if ($b == 0) {
            throw new Exception("Division par zéro impossible.");
        }
        return $a / $b;
    }
}

// class Calcul
// {
//     private $nombre1;
//     private $nombre2;

//     public function __construct($nombre1, $nombre2)
//     {
//         $this->nombre1 = $nombre1;
//         $this->nombre2 = $nombre2;
//     }

//     public function addition()
//     {
//         return $this->nombre1 + $this->nombre2;
//     }

//     public function soustraction()
//     {
//         return $this->nombre1 - $this->nombre2;
//     }

//     public function multiplication()
//     {
//         return $this->nombre1 * $this->nombre2;
//     }

//     public function division()
//     {
//         if ($this->nombre2 != 0) {
//             return $this->nombre1 / $this->nombre2;
//         } else {
//             return "Division par zéro impossible.";
//         }
//     }
// }

// $c = new Calcul(2, 5);
// echo $c->addition();
// echo $c->soustraction();
// echo $c->multiplication();
// echo $c->division();

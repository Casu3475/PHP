<?php

class ChiffreSorter
{

    public static function afficheLesNombres(array $lesNombres)
    {
        var_dump($lesNombres);
    }

    public static function triLesNombres(array &$lesNombres)
    {
        sort($lesNombres);
    }

    public static function donneLesNombres(): array
    {
        $lesNombres = [];
        while (true) {
            $nb = readline("Entrez un nombre positif ou walou : ");
            if (empty($nb)) {
                break;
            }
            if (!ctype_digit($nb)) {
                continue;
            }
            $lesNombres[] = $nb;
        }
        return $lesNombres;
    }
}



// class ChiffreSorter {

//     private $lesNombres = [];

//     public function afficheLesNombres(){
//         var_dump($this->lesNombres);
//         return $this;
//     }

//     public function triLesNombres() {
//         sort($this->lesNombres);
//         return $this;
//     }

//     public function donneLesNombres() {
//         while(true){
//             $nb = readline("Entrez un nombre positif ou walou : ");
//             if(empty($nb)){
//                 break;
//             }
//             if(!ctype_digit($nb)){
//                 continue;
//             }
//             $this->lesNombres[] = $nb;
//         }
//         return $this;
//     }

// }

// $cs = new ChiffreSorter();
// $cs->donneLesNombres()->afficheLesNombres()->triLesNombres()->afficheLesNombres();
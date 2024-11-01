<?php

main($argv);

function main(array $argv){ // fonction principale
  $lettre = getLettre($argv);
  // if(empty($lettre)){
  // echo "Vous n'avez pas saisi de lettre!\n";
  // exit(1);
// }
  if(ctype_lower($lettre)){
  echo strtoupper($lettre) ? strtoupper($lettre) : strtolower($lettre);
  exit(0); // all good
  }
}

function getLettre(array $argv): string { 
  $lettre = (sizeof($argv)> 1 ? $argv[1] : readline("Tapez une lettre: "));
  if(strlen($lettre) == 0){
    echo "Vous n'avez pas saisi de lettre!\n";
    exit(1); 
}
if (is_numeric($lettre)){
  echo "pfffff, stop!";
  exit(2);
}
 if(strlen($lettre) > 1){
  echo "Vous avez saisi plus d'une lettre!\n";
  exit(3);
}

return $lettre;
}
 
echo strtoupper($lettre)."\n";

// usr/bin/php
// usr/sbin

// chmod +x td1.php
// chmod +x 755 td1.php





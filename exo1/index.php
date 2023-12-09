<?php

$personne1 = [
    "nom" => "Toto", "age" => 30, "sexe" => "homme" 
];

$personne2 = [
    "nom" => "Tata", "age" => 25, "sexe" => "femme"
];

echo "<pre>";
print_r($personne1);
echo "</pre>";

echo "<hr>";

$tableau = [
    ["nom" => "Toto", "age" => 30, "sexe" => "homme"],
    ["nom" => "Tata", "age" => 25, "sexe" => "femme"]
];

function display($personne){
    foreach ($personne as $key => $value) {
      echo $key. " : ".$value. "<br>"  ;
    }
}

echo display($tableau[0])."<br>";
echo display($tableau[1]);
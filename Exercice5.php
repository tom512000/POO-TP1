<?php
declare(strict_types=1);

# Question 28
$tableau = array("un", "deux", "trois", "quatre");

# Boucle for
for ($i = 0; $i < count($tableau); $i++) {
    echo "$i - $tableau[$i]\n";
}

# Boucle foreach
$nb = 0;
foreach ($tableau as $element) {
    echo "$nb - $element\n";
    $nb += 1;
}
# La boucle foreach ne permet pas de récupérer l'indice des valeurs du tableau.

# Boucle foreach avec l'attribut $cle
foreach($tableau as $cle => $element) {
    echo "$cle - $element\n";
}
# L'attribut $cle permet de récupérer l'indice de chaque valeur.

# Question 29
$tableau2 = array(1 => "un", "deux", "trois", "quatre");

# Boucle for
for ($i = 1; $i < count($tableau2)+1; $i++) {
    echo "$i - $tableau2[$i]\n";
}

# Boucle foreach
$nb = 1;
foreach ($tableau2 as $element) {
    echo "$nb - $element\n";
    $nb += 1;
}

# Boucle foreach avec l'attribut $cle
foreach($tableau2 as $cle => $element) {
    echo "$cle - $element\n";
}
# Grâce au mot-clé '1 =>', l'indice des valeurs commence à 1 et non 0.

# Question 30
$jours = array(1 => "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

foreach($jours as $cle => $element) {
    echo "$cle - $element\n";
}

function determineJour(int $indice, array $tableau) : string
{
    if ($indice >= 1 and $indice <= 7) {
        $res = $tableau[$indice];
    } else {
        $res = "Inconnu";
    }
    return $res;
}
echo "\nFonction determineJour : \n";
for ($i = 1; $i < count($jours)+2; $i++) {
    echo "$i - ".determineJour($i, $jours)."\n";
}

# Question 31
$days = array("Lundi" => "Monday",
    "Mardi" => "Tuesday",
    "Mercredi" => "Wednesday",
    "Jeudi" => "Thursday",
    "Vendredi" => "Friday",
    "Samedi" => "Saturday",
    "Dimanche" => "Sunday");

foreach($days as $cle => $element) {
    echo "$cle - $element\n";
}

function traduitEnAnglais(string $cle, array $tableau) : string
{
    if (array_key_exists($cle, $tableau)) {
        $res = $tableau[$cle];
    } else {
        $res = "Inconnu";
    }
    return $res;
}

echo "\nFonction traduitEnAnglais : \n";
echo traduitEnAnglais("Lundi", $days)."\n";
echo traduitEnAnglais("Sandron", $days)."\n";

function traduitEnFrancais(string $valeur, array $tableau) : string
{
    if (in_array($valeur, $tableau)) {
        $res = array_search($valeur, $tableau);
    } else {
        $res = "Inconnu";
    }
    return $res;
}

echo "\nFonction traduitEnFrancais : \n";
echo traduitEnFrancais("Monday", $days)."\n";
echo traduitEnFrancais("Sandron", $days)."\n";

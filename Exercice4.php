<?php

declare(strict_types=1);

# Question 19
function creeTableau(int $taille, int $min, int $max): array
{
    $tableau = [];
    for ($i=0; $i<$taille; $i++ ) {
        $tableau[$i] = rand($min, $max);
    }
    return $tableau;
}
echo "Fonction creeTableau : \n";
var_dump(creeTableau(10, 1, 20));

# Question 20
function afficheTableau(array $tableau): string
{
    $cont = "[ ";
    for ($i=0; $i<count($tableau); $i++){
        $cont .= $tableau[$i]." ";
    }
    $cont .= "]";
    return $cont;
}
echo "\nFonction afficheTableau : \n";
echo (afficheTableau(creeTableau(10, 1, 20)))."\n";

# Question 21
function calculerMoyenne(array $tableau): float
{
    $moy = 0;
    $len = count($tableau);
    for ($i=0; $i<$len; $i++){
        $moy += $tableau[$i];
    }
    return $moy/$len;
}
echo "\nFonction calculerMoyenne : \n";
echo calculerMoyenne(creeTableau(10, 0, 20))."\n";

# Question 22
function estPresent(array $tableau, int $valeur): bool
{
    $res = false;
    for ($i=0; $i<count($tableau); $i++){
        if ($tableau[$i] == $valeur) {
            $res = true;
        }
    }
    return $res;
}

function decodeBooleen(bool $bool): string
{
    $res = "True";
    if (!$bool) {
        $res = "False";
    }
    return $res;
}
echo "\nFonction estPresent : \n";
echo decodeBooleen(estPresent(creeTableau(10, 1, 20), 5))."\n";

# Question 23
function indexOf(array $tableau, int $valeur): int
{
    $i = 0;
    $res = -1;
    while ($i < count($tableau) && $res == -1) {
        if ($tableau[$i] == $valeur) {
            $res = $i;
        }
        $i++;
    }
    return $res;
}
echo "\nFonction indexOf : \n";
echo indexOf(creeTableau(10, 1, 20), 5)."\n";

# Question 24
function getMaximum(array $tableau): int
{
    $max = $tableau[0];
    for ($i = 1; $i < count($tableau); $i++){
        if ($tableau[$i] > $max) {
            $max = $tableau[$i];
        }
    }
    return $max;
}
echo "\nFonction getMaximum : \n";
echo getMaximum(creeTableau(10, 0, 20))."\n";

# Question 25
function getIndiceMinimum(array $tableau): int
{
    $indmin = 0;
    $min = $tableau[0];
    for ($i = 1; $i < count($tableau); $i++){
        if ($tableau[$i] < $min) {
            $indmin = $i;
            $min = $tableau[$i];
        }
    }
    return $indmin;
}
echo "\nFonction getIndiceMinimum : \n";
echo getIndiceMinimum(creeTableau(10, 0, 20))."\n";

# Question 26
# Lorsqu'on passe un paramètre scalaire à une fonction, une copie de la valeur est créée et utilisée à l'intérieur de la fonction.
# Toute modification effectuée sur cette copie à l'intérieur de la fonction ne sera pas reflétée sur la variable originale à l'extérieur de la fonction.
function modifierValeur(int $valeur): void {
    $valeur += 10;
}

$valeurOriginale = 5;
modifierValeur($valeurOriginale);

echo "\nFonction modifierValeur : \n";
echo $valeurOriginale."\n";
# La valeur originale reste 5.

# Question 27
function echange(array $tableau, int $ind1, int $ind2): array
{
    if (($ind1 <= count($tableau)) || ($ind2 <= count($tableau))) {
        $echange = $tableau[$ind1];
        $tableau[$ind1] = $tableau[$ind2];
        $tableau[$ind2] = $echange;
    }
    return $tableau;
}
echo "\nFonction getIndiceMinimum : \n";
$tableau = creeTableau(10, 0, 20);
echo afficheTableau($tableau)."\n";
echo afficheTableau(echange($tableau, 2, 3));

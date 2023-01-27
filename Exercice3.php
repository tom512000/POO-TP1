<?php
declare(strict_types=1);

# Question 11
# Les 8 opérateurs de comparaison sont :
# ==  :(égal à) - vérifie si les deux valeurs sont égales
# === : (identique à) - vérifie si les deux valeurs sont égales et de même type
# !=  : (différent de) - vérifie si les deux valeurs sont différentes
# !== : (non identique à) - vérifie si les deux valeurs sont différentes ou de types différents
# <   : (inférieur à) - vérifie si la première valeur est inférieure à la seconde
# <=  : (inférieur ou égal à) - vérifie si la première valeur est inférieure ou égale à la seconde
# >   : (supérieur à) - vérifie si la première valeur est supérieur à la seconde
# >=  : (supérieur ou égal à) - vérifie si la première valeur est supérieur ou égale à la seconde

# Question 12
# Les 6 opérateurs logiques sont :
# &&  : (ET) - vérifie si les deux expressions sont vraies
# and : (ET) - vérifie si les deux expressions sont vraies
# ||  : (OU) - vérifie si au moins une des expressions est vraie
# or  : (OU) - vérifie si au moins une des expressions est vraie
# xor : (OU exclusif) - vérifie si une des expressions est vraie, mais pas les deux
# !   : (NON) - négation d'une expression, rend vrai si l'expression est fausse et vice versa

# Question 13
function calculerRemise(int $pkilo , int $pgramme): float
{
    $eco = $pkilo * $pgramme / 1000;
    $remise = 0.0;
    if ($eco >= 200) {
        $remise = 0.25;
    } elseif ($eco >= 100) {
        $remise = 0.15;
    } elseif ($eco >= 50) {
        $remise = 0.05;
    }
    return $eco * (1.0 - $remise);
}
echo calculerRemise(15, 10000)."\n";
echo calculerRemise(50, 10000)."\n";

# Question 14
function estBissextile( int $annee ) : string
{
    $quatre = $annee / 4;
    $cent = $annee / 100;
    $qcent = $annee / 400;
    $divq = gettype($quatre);
    $divc = gettype($cent);
    $divqc = gettype($qcent);
    if (($divc == "integer")||($divq == "integer" && $divc == "double")) {
        $bis = 1;
    } else{
        $bis = 0;
    }
    if ($bis == 1) {
        $res = "Vrai";
    } else{
        $res = "Faux";
    }
    return $res;
}
echo estBissextile(2024)."\n";

# Question 15
function auMoinsDeuxVrais( bool $bool1, bool $bool2, bool $bool3 ) : string
{
    $res = "Faux";
    if (($bool1 && $bool2)||($bool1 && $bool3)||($bool2 && $bool3)) {
        $res = "Vrai";
    }
    return $res;
}
echo auMoinsDeuxVrais(true, true, false)."\n";
echo auMoinsDeuxVrais(true, false, false)."\n";

# Question 16
function exactementDeuxVrais( bool $bool1, bool $bool2, bool $bool3 ) : string
{
    $res = "Faux";
    if (($bool1 && $bool2 && !$bool3)||($bool1 && $bool3 && !$bool2)||($bool2 && $bool3 && !$bool1)) {
        $res = "Vrai";
    }
    return $res;
}
echo exactementDeuxVrais(true, true, false)."\n";
echo exactementDeuxVrais(true, true, true)."\n";

# Question 17
function saisieReponse() : string
{
    $res = strval(readline("Oui ou Non ?"));
    while (($res != "oui") && ($res != "Oui") && ($res != "OUI") && ($res != "o") && ($res != "O") && ($res != "Yes") && ($res != "yes") && ($res != "YES") && ($res != "y") && ($res != "Y") && ($res != "non") && ($res != "Non") && ($res != "NON") && ($res != "n") && ($res != "N") && ($res != "No") && ($res != "no") && ($res != "NO")){
        $res = strval(readline("Oui ou Non ?"));
    }
    return $res;
}
#echo saisieReponse();

# Question 18
function dessinerRectanglePlein( string $motif, int $nbl, int $nbc ) : void
{
    for ($i=0; $i<$nbl; $i++) {
        for ($j=0; $j<$nbc; $j++) {
            echo " $motif ";
        }
        echo "\n";
    }
}
dessinerRectanglePlein('*', 10, 10);

<?php
declare(strict_types=1);

# Question 19
function creeTableau( int $taille, int $min, int $max ) : array
{
    $tableau = [];
    for ($i=0; $i<$taille; $i++ ) {
        $tableau[$i] = rand($min, $max);
    }
    return $tableau;
}
echo "\nFonction creeTableau : \n";
var_dump(creeTableau(10, 1, 20));

# Question 20
function afficheTableau( array $tableau ) : string
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
function calculerMoyenne( array $tableau ) : float
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
function estPresent( array $tableau, int $valeur ) : string
{
    $res = "Faux";
    for ($i=0; $i<count($tableau); $i++){
        if ($tableau[$i] == $valeur) {
            $res = "Vrai";
        }
    }
    return $res;
}
echo "\nFonction estPresent : \n";
echo estPresent(creeTableau(10, 1, 20), 5)."\n";

# Question 23
function indexOf( array $tableau, int $valeur ) : int
{
    $res = -1;
    $i = 0;
    while ((count($tableau) > $i) && ($tableau[$i] != $valeur)) {
        $res = $i;
        $i += 1;
    }
    return $res;
}
echo "\nFonction indexOf : \n";
echo indexOf(creeTableau(10, 1, 20), 5)."\n";

# Question 24
function getMaximum( array $tableau ) : int
{
    $max = $tableau[0];
    for ( $i = 1; $i < count($tableau); $i++ ){
        if ($tableau[$i] > $max) {
            $max = $tableau[$i];
        }
    }
    return $max;
}
echo "\nFonction getMaximum : \n";
echo getMaximum(creeTableau(10, 0, 20))."\n";

# Question 25
function getIndiceMinimum( array $tableau ) : int
{
    $indmin = 0;
    $min = $tableau[0];
    for ( $i = 1; $i < count($tableau); $i++ ){
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
# Lorsqu'une fonction prend en paramètre un paramètre de type scalaire float, la modification de ce paramètre n'est pas visible en dehors de cette fonction. Ce qui signifie que les valeurs sont copiées dans la fonction.
# Pour vérifier, on peut définir une variable avant d'appeler une fonction qui la modifie à l'intérieur.
# Après, on peut afficher la valeur de la variable avant et après l'appel de la fonction pour voir si elle a été modifiée.

# Question 27
function echange( array $tableau, int $ind1, int $ind2 ) : array
{
    if (($ind1 <= count($tableau)) || ($ind2 <= count($tableau))) {
        $echange = $tableau[$ind1];
        $tableau[$ind1] = $tableau[$ind2];
        $tableau[$ind2] = $echange;
    }
    return $tableau;
}
$tableau = creeTableau(10, 0, 20);
echange($tableau, 2, 3);

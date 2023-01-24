<?php
declare(strict_types = 1);

# Question 1
echo "Sikora Tom\n";

# Question 2
$entier = 9;
echo gettype($entier)."\n";
# Type : integer
$reel = 2.5;
echo gettype($reel)."\n";
# Type : double
$cdc = "Test";
echo gettype($cdc)."\n";
# Type : string

# Question 3
# $resultat = $entier + $reel + $cdc;
# echo $resultat;
# Les variables ne sont pas du même type donc le programme lance une erreur.

# Question 4
$str1 = "Phrase";
echo $str1."\n";
$str2 = 'Phrase';
echo $str2."\n";
# Les 2 variables s'affichent de la même façon, elles sont du même type.

# Question 5
$str3 = "Mot";
$str4 = "Mot";
$str5 = $str3.$str4;
echo $str5."\n";;
# (+) : ne permet pas de concaténation, elle additionne 2 chaines de caractères et donc renvoie une erreur.
# (.) : permet une concaténation.

# Question 6
$entier = 2;
$str6 = "$entier\n";
echo $str6;
$str7 = '$entier\n';
echo $str7;
# Les "" permettent de renvoyer la valeur d'une variable contenu dans la chaîne de caractères.
# Les '' ne permettent pas de renvoyer la valeur d'une variable contenu dans la chaîne de caractères.
# Idem pour ""
# Idem pour ''

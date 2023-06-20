<?php

declare(strict_types=1);

# Question 7
function afficheNomPrenom(string $nom, string $prenom): string
{
    return "$nom $prenom\n";
}
echo "Fonction afficheNomPrenom : \n";
echo afficheNomPrenom('Sikora', 'Tom');

# Question 8
function calculSomme(int $a, int $b, int $c): int
{
    $resultat = $a + $b + $c ;
    return $resultat ;
}
echo "\nFonction calculSomme : \n";
echo calculSomme(2, 3, 4)."\n";

# Question 9
function getAge(): int
{
    return intval(readline("Saisissez votre âge !"));
}
#echo "\nFonction afficheNomPrenom : \n";
#echo getAge();

# Question 10
function plusGrand(int $min, int $max): bool
{
    $hasard1 = rand ($min, $max);
    $hasard2 = rand ($min, $max);
    echo "$hasard1 / $hasard2\n";
    $res = false;
    if ($hasard1 > $hasard2) {
        $res = true;
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

echo "\nFonction plusGrand : \n";
echo decodeBooleen(plusGrand(1, 10));

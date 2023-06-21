<?php

declare(strict_types=1);

# Question 1
function dessinerContourRectangle(string $caractere, int $lignes, int $colonnes): void
{
    for ($i = 1; $i < $colonnes+1; $i++) {
        echo "$caractere ";
    }
    echo "\n";
    for ($i = 1; $i < $lignes-1; $i++) {
        echo "$caractere ";
        for ($j = 1; $j < $colonnes-1; $j++) {
            echo "  ";
        }
        echo "$caractere \n";
    }
    for ($i = 1; $i < $colonnes+1; $i++) {
        echo "$caractere ";
    }
}
echo "Fonction dessinerContourRectangle :\n";
dessinerContourRectangle('*', 10, 10);

# Question 2
function dessinerTriangleRectanglePlein(string $caractere, int $cote): void
{
    for ($i = 1; $i <= $cote; $i++) {
        for ($j = 1; $j <= $cote-$i; $j++) {
            echo "  ";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "$caractere ";
        }
        echo "\n";
    }
}
echo "\n";
echo "\nFonction dessinerTriangleRectanglePlein :\n";
dessinerTriangleRectanglePlein('*', 6);

# Question 3
function dessinerTriangleIsocelePlein(string $caractere, int $cote): void
{
    // Vérification si la base est paire, ajustement si nécessaire
    if ($cote % 2 == 0) {
        $cote++;
    }

    for ($i = 1; $i <= $cote; $i += 2) {
        $espaces = ($cote - $i) / 2;

        for ($j = 0; $j < $espaces; $j++) {
            echo " ";
        }

        for ($k = 0; $k < $i; $k++) {
            echo $caractere;
        }

        echo "\n";
    }
}
echo "\nFonction dessinerTriangleIsocelePlein :\n";
dessinerTriangleIsocelePlein('*', 5);

# Question 4
# Les nombres premiers inférieurs à 50 sont 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43 et 47.

# Question 5
function cribleEratosthene(int $n): array {
    $prime = array_fill(0, $n+1, true);
    $p = 2;
    while ($p * $p <= $n) {
        if ($prime[$p]) {
            for ($i = $p * $p; $i <= $n; $i += $p) {
                $prime[$i] = false;
            }
        }
        $p++;
    }
    $primes = array();
    for ($i = 2; $i <= $n; $i++) {
        if ($prime[$i]) {
            $primes[] = $i;
        }
    }
    return $primes;
}
echo "\nFonction cribleEratosthene :\n";
var_dump(cribleEratosthene(20));

# Question 6
function cribleEratostheneBis(int $n): array {
    $nums = array();
    for ($i = 2; $i <= $n; $i++) {
        $nums[$i] = true;
    }
    $sqrt_n = sqrt($n);
    for ($i = 2; $i <= $sqrt_n; $i++) {
        if ($nums[$i]) {
            for ($j = $i * $i; $j <= $n; $j += $i) {
                $nums[$j] = false;
            }
        }
    }
    $primes = array();
    foreach ($nums as $num => $is_prime) {
        if ($is_prime) {
            $primes[] = $num;
        }
    }

    return $primes;
}
echo "\nFonction cribleEratostheneBis :\n";
var_dump(cribleEratostheneBis(20));

# Question 7
function afficheChiffres(int $n): void
{
    $chiffres = array();
    while ($n > 0) {
        $calcul = $n % 10;
        array_unshift($chiffres, $calcul);
        $n = (int)($n / 10);
    }
    foreach ($chiffres as $chiffre) {
        echo "$chiffre ";
    }
}
echo "\nFonction afficheChiffres :\n";
afficheChiffres(45);

# Question 8
function sommeCarresChiffres(int $n): int
{
    $somme = 0;
    while ($n > 0) {
        $chiffre = $n % 10;
        $somme += $chiffre ** 2;
        $n = (int)($n / 10);
    }

    return $somme;
}
echo "\n\nFonction sommeCarresChiffres :\n";
echo sommeCarresChiffres(45);

# Question 9
function determinePeriode(int $n): array
{
    $sequence = array();
    $occurrences = array();

    while (!in_array($n, $occurrences)) {
        $sequence[] = $n;
        $occurrences[] = $n;

        $n = sommeCarresChiffres($n);

        if (in_array($n, $occurrences)) {
            $index = array_search($n, $occurrences);
            $sequence = array_slice($sequence, $index);
            break;
        }
    }
    return $sequence;
}

function listePeriodes(int $limite): array
{
    $periodes = array();

    for ($i = 1; $i <= $limite; $i++) {
        $sequence = determinePeriode($i);
        if (!empty($sequence)) {
            $periodes[] = $sequence;
            echo "Séquence du nombre/chiffre $i : " . implode(", ", $sequence) . "\n";
        }
    }

    return $periodes;
}

function estPresente($valeur, $sequences): bool
{
    foreach ($sequences as $sequence) {
        if (in_array($valeur, $sequence)) {
            return true;
        }
    }

    return false;
}

function decodeBooleen(bool $bool): string
{
    $res = "True";
    if (!$bool) {
        $res = "False";
    }
    return $res;
}
echo "\n\nFonction estPresente :\n";
echo decodeBooleen(estPresente(2, listePeriodes(100)))."\n";
echo decodeBooleen(estPresente(18, listePeriodes(10000)));

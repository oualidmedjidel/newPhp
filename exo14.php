<?php
function ajouter($entier)
{
    $resultat = $entier + 5;
    return $resultat;
}
$nombre = 15;
$resultat = ajouter($nombre);
echo $resultat;

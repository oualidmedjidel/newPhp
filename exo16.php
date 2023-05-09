<?php
function affiche($n)
{
    for ($i = 1; $i <= $n; $i++) {
        $ligne = '';
        for ($j = 1; $j <= $i; $j++) {
            $ligne .= $i;
        }
        echo $ligne . "\n <br>";
    }
}
affiche(100);

<?php
function nombres_premiers()
{
    $nombres_premiers = array();
    $nombre = 2;

    while (count($nombres_premiers) < 5) {
        $est_premier = true;
        for ($i = 2; $i <= sqrt($nombre); $i++) {
            if ($nombre % $i == 0) {
                $est_premier = false;
                break;
            }
        }
        if ($est_premier) {
            $nombres_premiers[] = $nombre;
        }
        $nombre++;
    }

    foreach ($nombres_premiers as $nombre_premier) {
        echo $nombre_premier . " ";
    }
}
nombres_premiers();

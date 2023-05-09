<?php
$phrase = "Ceci est une chaîne de caractère";
$mots = explode(" ", $phrase); 


foreach ($mots as $mot) {
    echo $mot . "<br/>";
}

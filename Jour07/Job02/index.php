<?php

function bonjour($jour)
{
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}
$x = true;
bonjour($x);

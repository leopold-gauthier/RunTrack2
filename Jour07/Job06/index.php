<?php

// PREMIERE TECHNIQUE

function leetSpeak($str)
{

    $output = str_replace(array('a', 'b', 'e', 'g', 'l', 's', 't', 'A', 'B', 'E', 'G', 'L', 'S', 'T'), array('4', '8', '3', '6', '1', '5', '7', '4', '8', '3', '6', '1', '5', '7'), $str);
    echo $output;
}

leetSpeak('Salut les hackers attention au chute de binaire !');

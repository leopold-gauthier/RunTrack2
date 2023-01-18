<?php
// PREMIERE TECHNIQUE

function occurence($str, $char)
{
    echo "Variable = " . $str . "<br>";
    echo "Occurence = " . $char . "<br>";
    echo "Dans la variable 'str' il y'a : " . substr_count($str, $char) . " occurence";
}
$result = occurence("Bonjour", 'o');


// SECONDE TECHNIQUE SANS FUNCTION SUBSTR_COUNT

function occurence2($str, $char)
{
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++)
        if ($str[$i] == $char) {
            $count++;
        }
    return $count;
}
echo occurence2("Bonjour", "o");

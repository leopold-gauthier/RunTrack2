<?php

function calcule($a = 0, $operation = "", $b = 0)
{
    if ($operation === "/") {

        $result = $a / $b;
        echo  $result;
        return $result;
    } else if ($operation === "+") {

        $result = $a + $b;
        echo  $result;
        return $result;
    } else if ($operation === "-") {

        $result = $a - $b;
        echo  $result;
        return $result;
    } else if ($operation === "*") {

        $result = $a * $b;
        echo  $result;
        return $result;
    }
}

// CHOICE IF U WANT + , -, * or /

calcule(12, "/", 12);

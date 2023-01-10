<?php 

$x = 1000;
for ($a = 2; $a < $x; $a++) {
    for ($b = 2; $b < $a; $b++) {
        if (($a % $b) == 0) break;
        if ($b == ($a - 1)) echo "$a<br>";
    }
}

?>

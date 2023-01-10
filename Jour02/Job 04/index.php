<?php 

for($n=0 ; $n <= 100; $n++ ){


    // modulo 3 et 5 = fizzbuzz
    if(($n%3 == 0)  && ($n%5 == 0)){
        echo "fizzbuzz<br>";
    }
    // modulo de 3
    else if(($n%3 == 0)){
            echo "fizz<br>";
    }
    //modulo de 5
    else if(($n%5 == 0)){
            echo "buzz<br>";
        }
        //sinon echo le reste
    else{
            echo $n."<br>";
        }
    }

?>

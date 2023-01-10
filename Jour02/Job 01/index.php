<?php 

//incremente jusqu'a 1337 et si n=42 alors tu le sourligne sinon tu conitune a echo n
for($n=0 ; $n <= 1337; $n++ ){
    if($n == 42){
        echo "<b><u>".$n."</u></b><br>";
    }else{
        echo $n."<br>";
    }
}


?>
<?php

$numbers = array(200, 204, 173, 98, 171, 404, 459);

//Pour chaque nombre qui a une clé doit etre égal ou supérieur a lui méme. Si nombre divisble par 2 = 0 alors il est paire sinon le reste et impair

foreach($numbers as $key => $numbers){
    if($numbers % 2 == 0){
        echo $numbers."&nbsp paire <br>";
    }else{
        echo $numbers."&nbsp impaire <br>";
    }
}

?>
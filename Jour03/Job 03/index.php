<?php 

$tab = array('a', 'e', 'i', 'o', 'u', 'y','A', 'E', 'I', 'O', 'U', 'Y');
$str = "I'm sorry Dave I'm afraid I can't do that";

for($i=0; isset($str[$i])!=null; $i++){
    foreach($tab as $voyelle){
        if($str[$i] == $voyelle){
            echo $str[$i];
        }
    }


}
?>

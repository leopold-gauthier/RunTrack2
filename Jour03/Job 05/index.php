

<?php 
$cptv = 0;
$cptc = 0;
$tabconsonne = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z','B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z' );
$tabvoyelle = array('a', 'e', 'i', 'o', 'u', 'y','A', 'E', 'I', 'O', 'U', 'Y');
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";


foreach($tabvoyelle as $voyelle){
 $cptv += substr_count(strtolower($str), $voyelle);
}
foreach($tabconsonne as $consonne){
    $cptc += substr_count(strtolower($str), $consonne);
   }
?>




<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job 05</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Consonne</th>
            <th>Voyelle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $cptc; ?></td>
            <td><?php echo $cptv; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>
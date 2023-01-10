<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>body {text-align:center;}</style>
<body>
<?php
$hauteur= 10;
//Boucle total de ligne (Horisontal)
for ($i = 0; $i < $hauteur; $i++)
{
    //Boucle des espaces, on retire 1 espace a
    //chaque fois qu'on dessens d'une ligne
    // exemple
    // 1er ligne : $k = ($hauteur - $i) = 5 = (5 - 0)
    // 2eme ligne: $k = ($hauteur - $i) = 4 = (5 - 1)
    // 3eme ligne: $k = ($hauteur - $i) = 3 = (5 - 2)
    // Insi de suite jusqu'a 0
    for ($k = ($hauteur - $i); $k > 0; $k--)
    {
        echo " ";
    }
    //Bloucle d'etoiles on ajoute a fur et a mesure
    // 1er ligne : $z <= $i = 0 <= 0 (Donc on en met une )
    // 2eme ligne: $z <= $i = 0 <= 1 (Donc on en met deux )
    // et insi de suite a chaque fois $z doit etre pareil que $i
    for($z=0;$z<=$i;$z++)
    {
        echo "@";
    }
    echo "<br />";
}
   
?>
</body>
</html>





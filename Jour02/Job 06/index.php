<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div></div>
    <?php 

$largeur = 20;
$hauteur = 100;

while($largeur <= 500 ){?>

<div style="height : <?php echo $hauteur?>; width : <?php echo $largeur?>; border : 1px solid black; margin-bottom: 1rem;"></div>
<?php
 $largeur *=2;

}
   
?>
</body>
</html>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="#">
        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="submit">
    </form>
</body>

</html>
<?php


$cpt = 0;

foreach ($_POST as $key => $value) {

    if ($value != "") {
        $cpt++;
    }
}

echo "Le nombre de post envoyé est : " . $cpt;
?>
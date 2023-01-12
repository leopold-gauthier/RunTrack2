<style>
    body {
        text-align: center;
    }
</style>

<form method="get" action="#">
    <label>Hauteur souhaiter :
        <input type="text" name="hauteur">
    </label>
    <input type="submit" name="sub">
</form>

<?php
foreach ($_GET as $key => $value) {
    //Boucle total de ligne (Horizontal)
    for ($i = 0; $i < $_GET['hauteur']; $i++) {
        //Boucle des espaces, on retire 1 espace a
        //chaque fois qu'on dessens d'une ligne
        // exemple
        // 1er ligne : $k = ($hauteur - $i) = 5 = (5 - 0)
        // 2eme ligne: $k = ($hauteur - $i) = 4 = (5 - 1)
        // 3eme ligne: $k = ($hauteur - $i) = 3 = (5 - 2)
        // Insi de suite jusqu'a 0
        for ($k = ($_GET['hauteur'] - $i); $k > 0; $k--) {
            echo " ";
        }
        //Bloucle d'etoiles on ajoute a fur et a mesure
        // 1er ligne : $z <= $i = 0 <= 0 (Donc on en met une )
        // 2eme ligne: $z <= $i = 0 <= 1 (Donc on en met deux )
        // et insi de suite a chaque fois $z doit etre pareil que $i
        for ($z = 0; $z <= $i; $z++) {
            echo "@";
        }

        echo "<br>";
    }

    break;
}
?>
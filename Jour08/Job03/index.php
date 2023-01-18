<?php

session_start();

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = [];
    // création d'un tableau pour stocker les var
}

if (isset($_POST['reset'])) {
    $_SESSION['name'] = [];
    $_POST['reset'] = '';
    // réinitilation avec le bouton reset
}

if (
    isset($_POST['prenom']) &&
    $_POST['prenom'] != '' &&
    $_POST['prenom'] !== end($_SESSION['name'])
    // vérification de la doublure
) {
    array_push($_SESSION['name'], $_POST['prenom']);
}

?>

<style>
    ul {
        list-style: none;
    }

    li {
        margin: 1em 0;
    }

    form {
        margin-bottom: 1em;
    }
</style>


<form action="" method="post">
    <input type="text" name="prenom" id="">
    <input type="submit">
</form>
<form action="" method="post">
    <input type="submit" name="reset" value="Reset">
</form>
<div>
    <ul>
        <?php
        foreach ($_SESSION['name'] as $key => $val) :
        ?>
            <li><b>
                    <?= $key + 1 ?></b>:
                <?= $val ?></li>
        <?php endforeach ?>
    </ul>
</div>
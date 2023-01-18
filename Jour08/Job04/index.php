<form id="connect" methode="get" action="">
    <input type="text" name="prenom">
    <input type="submit" name="connexion" value="connexion">
</form>

<?php

setcookie('utilisateur', 'prenomcookie', time());
if (isset($_GET['prenom'])) {
    $_COOKIE['prenomcookie'] = $_GET['prenom']; ?>
    <style>
        #connect {
            display: none;
        }
    </style>
<?php
    echo "Bonjour " . $_COOKIE["prenomcookie"] . " !";
} else if (!isset($_GET['prenom'])) { ?>
    <style>
        #disconnect {
            display: none;
        }
    </style>
<?php
}
?>
<style>
    body {
        text-align: center;
    }
</style>
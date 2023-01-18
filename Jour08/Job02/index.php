<?php


setcookie('utilisateur', 'nbvisites', time());


if (isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);
    echo 'Vous avez visité ', $_COOKIE['nbvisites'] + 1, ' fois ce site';
}
if (isset($_GET['reset'])) {
    setcookie('nbvisites', 0);
}
?>

<form methode="get" action="">
    <input type="submit" name="reset" value="reset">
</form>
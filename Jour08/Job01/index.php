<?php


session_start();


if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0;
} else {
    $_SESSION["nbvisites"] = $_SESSION["nbvisites"] + 1;
}
echo $_SESSION["nbvisites"];
if (isset($_GET["reset"])) {
    session_destroy();
    header("location:index.php");
}

?>

<form methode="get" action="">
    <input type="submit" name="reset" value="reset">
</form>
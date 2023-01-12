<form method="get" action="#">
    <label>Nombre :
        <input type="text" name="nombre">
    </label>
    <input type="submit">
</form>

<?php

foreach ($_GET as $key => $value) {
    if ($_GET['nombre'] % 2 == 0) {
        echo "&nbsp paire <br>";
    } else {
        echo "&nbsp impaire <br>";
    }
}
?>
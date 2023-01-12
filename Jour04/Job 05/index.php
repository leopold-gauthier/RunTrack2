<form method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <label>Password :
        <input type="password" name="password">
    </label>
    <input type="submit">
</form>

<?php
foreach ($_POST as $key) {
    if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
        echo "C’est pas ma guerre";
        break;
    } else if ($_POST['username'] == null && $_POST['password'] == null) {
        echo "";
        break;
    } else {
        echo "Votre pire cauchemar";
        break;
    }
}
?>
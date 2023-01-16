<form method="post" action="#">
    <label>Prénom :
        <input type="text" name="prenom">
    </label>
    <label>Nom :
        <input type="text" name="nom">
    </label>
    <input type="submit" name="sub">
</form>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom</td>
            <td>
                <?php
                if (isset($_POST['nom']) == null) {
                    $_POST['nom'] = " ";
                }
                echo $_POST['nom']; ?>
            </td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td>
                <?php
                if (isset($_POST['prenom']) == null) {
                    $_POST['prenom'] = " ";
                }
                echo $_POST['prenom'];
                ?>
            </td>
        </tr>
    </tbody>
</table>
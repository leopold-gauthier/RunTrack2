<form method="get" action="#">
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
                if (isset($_GET['nom']) == null) {
                    $_GET['nom'] = " ";
                }
                echo $_GET['nom'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td>
                <?php
                if (isset($_GET['prenom']) == null) {
                    $_GET['prenom'] = " ";
                }
                echo $_GET['prenom'];
                ?>
            </td>
        </tr>
    </tbody>
</table>
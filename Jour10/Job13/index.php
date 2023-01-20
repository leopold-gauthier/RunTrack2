<body>
    <?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=jour9", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Connexion réussie';
    }

    /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/ catch (PDOException $e) {
        // echo "Erreur : " . $e->getMessage();
    }

    // On récupère tout le contenu de la table etages
    $sql1 = "SELECT * FROM `salles` INNER JOIN `etage` ON `salles`.`id_etage` = `etage`.`id`;";
    $etagesStatement = $conn->prepare($sql1);
    $etagesStatement->execute();
    $etages = $etagesStatement->fetchAll();

    $sql2 = "SELECT * FROM `etage` INNER JOIN `salles` ON `salles`.`id_etage` = `etage`.`id`;";
    $sallesStatement = $conn->prepare($sql2);
    $sallesStatement->execute();
    $salles = $sallesStatement->fetchAll();
    ?>
    <h1>Nom des étage et des salle</h1>

    <table>
        <thead>
            <tr>
                <th>Nom des etages</th>
                <th>Nom des salles</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < sizeof($etages); $i++) :
            ?>
                <tr>
                    <td><?= $etages[$i]['nom'] ?></td>
                    <td><?= $salles[$i]["nom"] ?></td>

                </tr>
            <?php
            endfor;
            ?>

        </tbody>
    </table>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid;
        }
    </style>
</body>
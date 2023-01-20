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

    // On récupère tout le contenu de la table etudiants
    $sqlQuery = "SELECT * FROM etudiants WHERE naissance >= '1998-00-00' AND naissance <= '2018-00-00'; ";
    $etudiantsStatement = $conn->prepare($sqlQuery);
    $etudiantsStatement->execute();
    $etudiants = $etudiantsStatement->fetchAll();
    ?>
    <h1>Etudiant née entre 1998 et 2018</h1>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($etudiants as $etudiant) {
            ?>
                <tr>
                    <?php echo "<td>" . $etudiant['prenom'] . "</td>" ?>
                    <?php echo "<td>" . $etudiant['nom'] . "</td>" ?>
                    <?php echo "<td>" . $etudiant['naissance'] . "</td>" ?>

                <?php

            }
                ?>
                </tr>
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
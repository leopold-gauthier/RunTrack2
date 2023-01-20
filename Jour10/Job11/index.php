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

    // On récupère tout le contenu de la table capacites
    $sqlQuery = "SELECT AVG(capacite) FROM salles; ";
    $capacitesStatement = $conn->prepare($sqlQuery);
    $capacitesStatement->execute();
    $capacites = $capacitesStatement->fetchAll();
    ?>
    <h1>Capacité moyenne des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Capacité Moyenne</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($capacites as $capacite) {
                for ($i = 0; isset($capacite[$i]) != null; $i++) {
            ?>
                    <tr>
                        <?php echo "<td>" . $capacite[$i] . "</td>" ?>

                <?php
                }
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
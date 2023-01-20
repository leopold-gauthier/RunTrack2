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
    $sqlQuery = "SELECT SUM(`superficie`) FROM `etage`";
    $etagesStatement = $conn->prepare($sqlQuery);
    $etagesStatement->execute();
    $etages = $etagesStatement->fetchAll();
    ?>
    <table>
        <thead>
            <tr>
                <th>Superficie Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($etages as $etage) {
                for ($i = 0; isset($etage[$i]) != null; $i++) {
            ?>
                    <tr>
                        <?php echo "<td>" . $etage[$i] . "</td>" ?>

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
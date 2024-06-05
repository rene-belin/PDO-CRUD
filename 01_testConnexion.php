<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion à MySQL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="container mt-5">
        <?php
        $serveur = "localhost";
        $nomBdd = "test2";
        $login = "root";
        $pass = "";
        // tester la connexion
        try {
            $connexion = new PDO("mysql:host=$serveur;dbname=$nomBdd", $login, $pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $codeSql = "CREATE TABLE Visiteurs(
                    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    nom VARCHAR(50),
                    prenom VARCHAR(50),
                    email VARCHAR(70)
                    )";

            $connexion->exec($codeSql);
            echo'Table "Visiteurs" créée';
            
        } catch (PDOException $e) {
            echo 'Echec de la connexion : ' . $e->getMessage();
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

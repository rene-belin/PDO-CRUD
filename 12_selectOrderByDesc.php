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

        try {
            //1)connexion à la BDD
            $connexion = new PDO("mysql:host=$serveur;dbname=$nomBdd", $login, $pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $requete1 = $connexion->prepare("SELECT prenom FROM Visiteurs ORDER BY age DESC");

            $requete1->execute();
            $resultat = $requete1->fetchAll();

            echo '<pre>';
            print_r($resultat);
            echo '</pre>';
        } catch (PDOException $e) {
            echo 'Echec de la connexion : ' . $e->getMessage();
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
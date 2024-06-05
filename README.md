# PDO-CRUD

## Objectif du Projet

L'objectif de ce projet est d'apprendre à manipuler une base de données en utilisant PDO en PHP. Les opérations CRUD sont essentielles pour toute application qui interagit avec une base de données :

- **Create (Créer)** : Ajouter de nouvelles données à la base de données.
- **Read (Lire)** : Récupérer des données depuis la base de données.
- **Update (Mettre à jour)** : Modifier des données existantes dans la base de données.
- **Delete (Supprimer)** : Supprimer des données de la base de données.

## Prérequis

- PHP 7.4 ou supérieur
- Serveur web (Apache, Nginx, etc.)
- MySQL 5.7 ou supérieur

## Installation

1. Clonez ce dépôt sur votre machine locale.

2. Accédez au répertoire du projet.

3. Configurez votre base de données MySQL et mettez à jour les informations de connexion dans chaque script PHP si nécessaire.

## Scripts PHP

1. **01_testConnexion.php**
    - Teste la connexion à la base de données en utilisant PDO.

2. **02_creez_la_BDD.php**
    - Crée la base de données requise pour le projet.

3. **03_creerLesTables.php**
    - Crée les tables nécessaires dans la base de données via MySQL.

4. **04_insererUneEntree.php**
    - Insère une seule entrée dans une table via MySQL.

5. **05_insererPlusieursEntrees.php**
    - Insère plusieurs entrées dans une table via MySQL.

6. **06_uneRequeteTroisEntrees.php.php**
    - Effectue une requête pour insérer trois entrées via MySQL.

7. **07_requetePreparee.php**
    - Utilise des requêtes préparées pour sécuriser les opérations de la base de données.

8. **08_recupererLesDonnees.php**
    - Récupère et affiche les données de la base de données.

9. **09_alterTableSexe.php**
    - Modifie une table pour ajouter une colonne `sexe` via MySQL.

10. **10_alterTableAge.php**
    - Modifie une table pour ajouter une colonne `age` via MySQL.

11. **11_selectPrenom.php**
    - Sélectionne et affiche les prénoms de la base de données.

12. **12_selectOrderByDesc.php**
    - Sélectionne et affiche les données en ordre décroissant.

13. **13_selectVisiteurMoins25ans.php**
    - Sélectionne les visiteurs ayant moins de 25 ans.

14. **14_limit_0.3.php**
    - Limite les résultats de la requête à 3 enregistrements via MySQL.

15. **15_UPDATE.php**
    - Met à jour des entrées spécifiques dans une table.

16. **16_DELETE.php**
    - Supprime des entrées spécifiques d'une table.

17. **17_dropTable.php**
    - Supprime une table spécifique de la base de données.

18. **18_supprimerLaTable.php**
    - Supprime la table principale de la base de données.

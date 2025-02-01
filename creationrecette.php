<?php
session_start();
require 'config.php';  // Page php qui se connecte à la base de donnée  

// Vérifier si l'utilisateur est connecté 
if (!isset($_SESSION['user_id'])) {
    die("Accès refusé ! Connexion obligatoire !");
}

$user_id = $_SESSION['user_id'];

$ingre = "SELECT id, nom,image FROM ingredient";
$req = $db->prepare($ingre);
$req->execute();
$ingredients = $req->fetchAll(PDO::FETCH_ASSOC);

// vérifier le formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'] ?? ''; 
    $categorie = $_POST['categorie'];  
    $prix = $_POST['prix'];

    // Récupérer les ingrédients sélectionnés (s'il y en a)
    $selectedIngredients = isset($_POST['ingredients']) ? implode(", ", $_POST['ingredients']) : ''; 
    $description = $selectedIngredients ? "Ingrédients: " . $selectedIngredients : ''; 

    $requete = "INSERT INTO plat (nom, categorie, description, prix) 
                VALUES (:nom, :categorie, :description, :prix)";

    // Préparation de la requête pour plus de sécurité 
    $sql = $db->prepare($requete);

    // Lier les paramètres 
    $sql->bindParam(':nom', $nom, PDO::PARAM_STR);
    $sql->bindParam(':categorie', $categorie, PDO::PARAM_STR);  // Lier la catégorie choisie
    $sql->bindParam(':description', $description, PDO::PARAM_STR);
    $sql->bindParam(':prix', $prix, PDO::PARAM_STR);

    // Exécution de la requête
    $sql->execute();

}

$db = null;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="checkbox.css">
    <title>Profil</title>
</head>

<body>
<nav>
        <a href="index.html">Accueil</a>
        <a href="menu.php">Mes Recettes</a>
        <a class="active" href="creationrecette.php">Creer Recettes</a>
        <div class="dropdown2">
            <button class="dropbtn2"><a href="#"><img src="https://static.vecteezy.com/system/resources/previews/011/947/163/non_2x/gold-user-icon-free-png.png" alt="icone profil"></a></button>
            <div class="dropdown-content2">
              <a href="info.php">Parametres</a>
              <a href="logout.php">Déconnexion</a>
            </div>
        </div>
    </nav>

    <div class="content">
    <div class="container">
      <h3>Creation Recette</h3>
      <form action="creationrecette.php" method="POST">
        <label for="nom">Nom du plat :</label>
        <input type="text" name="nom" id="nom" placeholder="Nom du plat" required />

        <label for="categorie">Catégorie :</label>
        <select name="categorie" id="categories" required>
            <option value="entree">Entrée</option>
            <option value="plats">Plat Principal</option>
            <option value="dessert">Dessert</option>
        </select>

        <label for="prix">Prix :</label>
        <input type="number" name="prix" id="prix" placeholder="Prix" required />

        <label for="ingredient">Ingrédients :</label>
        <?php
            foreach ($ingredients as $ingredient) {
                $checkbox_id = 'myCheckbox' . $ingredient['id'];
                echo '<li>';
                echo '<input type="checkbox" id="' . $checkbox_id . '" name="ingredients[]" value="' . $ingredient['nom'] . '" />';
                echo '<label for="' . $checkbox_id . '">';
                echo '<img src="' . $ingredient['image'] . '" alt="' . $ingredient['nom'] . '" />';
                echo '</label>';
                echo '</li>';
            }
        ?>

        <button type="submit">Valider</button>
      </form>
    </div>
    </div>

    <footer>
        © Copyright
        <div class="Copyright">
            <p>Magali Vacher
            <br><a href="#"><img src="img/githublogo.png" alt="logo github"></a></p>
            <p>Anna Maras
            <br><a href="#"><img src="img/githublogo.png" alt="logo github"></a></p>
            <p>Jeffry KHALIFE
            <br><a href="https://github.com/jeffry-khalife"><img src="img/githublogo.png" alt="logo github"></a></p>
        </div>
    </footer>
</body>
</html>

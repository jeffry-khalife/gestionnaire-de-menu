<?php
session_start();
require 'config.php';  // Page php qui se connecte à la base de donnée  

// Verifier si l'utilisateur est connecter 
if (!isset($_SESSION['user_id'])) {
    die("Accès refusé ! Connexion obligatoire !");
}

$user_id = $_SESSION['user_id'];

// verififer le formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'] ?? ''; 
    $categorie = $_POST['categorie'];
    $description = $_POST['ingredient'] ?? '';      
    $prix = $_POST['prix'];

        // requete sql pour ajouter le nom,categorie,desctiption et le prix à la table plat 
        $requete = "INSERT INTO plat (nom, categorie, description, prix) 
                    VALUES (:nom, :categorie, :description, :prix)";

        // Preparation de la requete pour plus de sécuriter 
        $sql = $db->prepare($requete);

        // lié les parametres 
        $sql->bindParam(':nom', $nom, PDO::PARAM_STR);
        $sql->bindParam(':categorie', $categorie, PDO::PARAM_STR);
        $sql->bindParam(':description', $description, PDO::PARAM_STR);
        $sql->bindParam(':prix', $prix, PDO::PARAM_STR);

        // Execution de la requete
        $sql->execute();
    
}

// fermer la connexion à la base de donnée
$db = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="checkbox.css">
    <title>Profil</title>
</head>

<body>
<nav>
        <a  href="index.html">Accueil</a>
        <a href="#">Mes Recettes</a>
        <a class="active" href="creationrecette.php">Creer Recettes</a>
        <div class="dropdown2">
            <button class="dropbtn2"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/8847/8847419.png" alt="icone profil"></a></button>
            <div class="dropdown-content2">
              <a href="info.php">Parametres</a>
              <a href="logout.php">Déconnexion</a>
            </div>
        </div>
    </nav>

    <div class="content">
    <div class="container">
      <h2>Creation Recette</h2>
      <form  action="creationrecette.php" method="POST">
          <label for="nom" >Nom : </label>
          <input type="text" id="nom" name="nom" required>

          <!-- <label for="description">Description : </label>
          <input type="text" id="description" name="description" required> -->

          <label for="categorie">Catégorie</label>

          <select name="categorie" id="categories">
              <option value="entree">Entrée</option>
              <option value="plat">Plat principal</option>
              <option value="dessert">Dessert</option>
          </select>


          <label for="ingredient">Ingrédients :</label>
          <ul>
          <li>
              <input type="checkbox" id="myCheckbox1" />
              <label for="myCheckbox1"><img src="https://static.vecteezy.com/system/resources/thumbnails/027/730/158/small_2x/chervil-parsley-herb-food-vegetable-generative-ai-free-png.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox2" />
              <label for="myCheckbox2"><img src="https://png.pngtree.com/png-vector/20240920/ourmid/pngtree-realistic-illustration-of-fresh-edible-mushrooms-from-nature-png-image_13880487.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox3" />
              <label for="myCheckbox3"><img src="https://static.vecteezy.com/system/resources/previews/027/215/718/non_2x/aubergine-aubergine-transparent-background-ai-generated-free-png.png" /></label>
          </li>
          </ul>
          <ul>
          <li>
              <input type="checkbox" id="myCheckbox4" />
              <label for="myCheckbox4"><img src="https://static.vecteezy.com/system/resources/previews/028/828/146/non_2x/artichoke-on-white-background-png.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox5" />
              <label for="myCheckbox5"><img src="https://png.pngtree.com/png-clipart/20231127/original/pngtree-a-carrot-png-image_13717899.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox6" />
              <label for="myCheckbox6"><img src="https://static.vecteezy.com/system/resources/previews/012/629/188/non_2x/avocado-fruit-healthy-food-free-png.png" /></label>
          </li>
          </ul>
          <ul>
          <li>
              <input type="checkbox" id="myCheckbox7" />
              <label for="myCheckbox7"><img src="https://static.vecteezy.com/system/resources/thumbnails/029/720/727/small_2x/cucumber-transparent-background-png.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox8" />
              <label for="myCheckbox8"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0pmbySKCjM2qaXVpT2veRp3VlKZvFTSGT7Q&s" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox9" />
              <label for="myCheckbox9"><img src="https://i0.wp.com/www.greenyaute.fr/wp-content/uploads/2020/10/Pommes-de-terre.png?resize=324%2C324&ssl=1" /></label>
          </li>
          </ul>
          <ul>
          <li>
              <input type="checkbox" id="myCheckbox10" />
              <label for="myCheckbox10"><img src="https://png.pngtree.com/png-clipart/20210530/original/pngtree-tomato-natural-gourmet-vegetables-png-image_6370292.jpg" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox11" />
              <label for="myCheckbox11"><img src="https://www.pngarts.com/files/4/Flour-PNG-High-Quality-Image.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox12" />
              <label for="myCheckbox12"><img src="https://png.pngtree.com/png-clipart/20210704/original/pngtree-flour-starch-wheat-food-png-image_6490608.jpg" /></label>
          </li>
          </ul>
          <ul>
          <li>
              <input type="checkbox" id="myCheckbox13" />
              <label for="myCheckbox13"><img src="https://static.vecteezy.com/system/resources/thumbnails/011/190/611/small_2x/fresh-garlic-isolated-png.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox14" />
              <label for="myCheckbox14"><img src="https://static.vecteezy.com/system/resources/previews/031/760/231/non_2x/basil-with-ai-generated-free-png.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox15" />
              <label for="myCheckbox15"><img src="https://lh3.googleusercontent.com/proxy/CvxB1mQbrJ4PdfgMdmwKPIrPeNrttdOyRv_7W9rcEx5--6jz9bdRlFs7HEpvUeeHaRQdyQv3UP456zNhGUTjs1HLTD1bRFUwIQ" /></label>
          </li>
          </ul>
          <ul>
          <li>
              <input type="checkbox" id="myCheckbox16" />
              <label for="myCheckbox16"><img src="https://pngimg.com/d/mayonnaise_PNG48.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox17" />
              <label for="myCheckbox17"><img src="https://png.pngtree.com/png-clipart/20231002/original/pngtree-ravioli-italian-food-png-image_13067095.png" /></label>
          </li>
          <li>

              <input type="checkbox" id="myCheckbox18" />
              <label for="myCheckbox18"><img src="https://e7.pngegg.com/pngimages/391/802/png-clipart-white-rice-in-bowl-cooked-rice-white-rice-food-rice-white-recipe-thumbnail.png" /></label>
          </li>
          </ul>
          <label for="prix">Prix : </label>
          <input type="number" id="prix" name="prix" required>£

              <br><br>
              <button type="submit">Valider</button>
      </form>


      </select>
      <br><br>
              </div>
  </div>

    <footer>
        © Copyright
        <div class="Copyright">
            <p>Magali Vacher
            <br><a href="#"><img src = "img/githublogo.png" alt="logo github"></a></p>
            <p>Anna Maras
            <br><a href="#"><img src = "img/githublogo.png" alt="logo github"></a></p>
            <p>Jeffry KHALIFE
            <br><a href="#"><img src = "img/githublogo.png" alt="logo github"></a></p>
        </div>
    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
        <h2>Profil</h2>
        <form action="info.php" method="POST">
          <div class="form-group">
            <label for="username">Nom</label>
            <input type="text" id="nom" name="nom" value="">
          </div>
    
          <div class="form-group">
            <label for="username">Prenom</label>
            <input type="text" id="prenom" name="prenom" value="">
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="" >
          </div>
    
          <div class="form-group">
            <label for="mot_de_passe">Nouveau Mot de Passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="">
          </div>
    
          <div class="form-group">
            <label for="confirmation_mot_de_passe">Confirmer Mot De Passe</label>
            <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" placeholder="">
          </div>
    
          <button type="submit">Valider</button>
        </form>
    
        <div class="message">
        </div>
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
<?php
session_start();
require 'config.php';  // Page php qui se connecte à la base de donnée 

// Verifier si l'utilisateur est connecter 
if (!isset($_SESSION['user_id'])) {
    die("Accés refusé ! Connexion obligatoire ! ");
}

$user_id = $_SESSION['user_id'];

// verififer le formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'] ?? ''; 
    $prenom = $_POST['prenom'] ?? '';      
    $email = $_POST['email'] ?? '';
    $mot_de_passe = $_POST['mot_de_passe'];
    $confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];

    if (empty($nom) || empty($prenom) || empty($email)) {
        echo "Nom, Prenom, and Email sont obligatoire.";
        exit;
    }

    // Verfier si les mdp sont identique
    if (!empty($mot_de_passe) && $mot_de_passe !== $confirmation_mot_de_passe) {
        echo "Les mots de passes ne corresponde pas";
        exit;
    }

    // requete sql pour mettre à jours les informations 
    $requete = "UPDATE utilisateur SET nom = ?, prenom = ?, email = ?";

    // Hash le nouveau mot de passe et le mettre à jours 
    if (!empty($mot_de_passe)) {
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_BCRYPT);  
        $requete .= ", mot_de_passe = ?"; 
    }

    $requete .= " WHERE id = ?";

    // Preparation de la requete pour plus de sécuriter 
    $sql = $db->prepare($requete);

    // lié les parametres 
    if (!empty($mot_de_passe)) {
        // lié le mot de passe et les autres parametres 
        $sql->bindValue(1, $nom, PDO::PARAM_STR);  
        $sql->bindValue(2, $prenom, PDO::PARAM_STR);   
        $sql->bindValue(3, $email, PDO::PARAM_STR);     
        $sql->bindValue(4, $mot_de_passe_hash, PDO::PARAM_STR);  
        $sql->bindValue(5, $user_id, PDO::PARAM_INT);    
    } else {
        $sql->bindValue(1, $nom, PDO::PARAM_STR);
        $sql->bindValue(2, $prenom, PDO::PARAM_STR);
        $sql->bindValue(3, $email, PDO::PARAM_STR);
        $sql->bindValue(4, $user_id, PDO::PARAM_INT);
    }

    // Execution de la requete
    if ($sql->execute()) {
        echo "Profil mis à jours";
    } else {
        echo "Erreur" . implode(" ", $sql->errorInfo());
    }

    $sql = null;
}

$db = null;
?>

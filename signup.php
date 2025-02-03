<?php
include ('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
$confirmation_mot_de_passe = password_hash($_POST['confirmation_mot_de_passe'], PASSWORD_DEFAULT);

$requete = "INSERT INTO utilisateur (nom,prenom,email,mot_de_passe,confirmation_mot_de_passe)Values ('$nom','$prenom','$email', '$mot_de_passe','$confirmation_mot_de_passe')"  ;
$sql = $db->prepare($requete);
$sql->setFetchMode(PDO::FETCH_ASSOC);
$sql->execute();
$utilisateurs = $sql->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <title>Profil</title>
</head>

<body>
<nav>
        <a  href="index.html">Accueil</a>
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
        <form action="signup.php" method="post">
                <h3>Inscription</h3>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
    
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenom" required>
    
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
    
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
    
                <label for="confirmation_mot_de_passe">Confirmation Mot de passe</label>
                <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" required>
    
                <button type="submit">S'inscrire</button>
            </form>
            <p>Vous avez déja un compte ? <a href="login.php">Connexion</a></p>
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
            <br><a href="https://github.com/jeffry-khalife"><img src = "img/githublogo.png" alt="logo github"></a></p>
        </div>
    </footer>
</body>
</html>
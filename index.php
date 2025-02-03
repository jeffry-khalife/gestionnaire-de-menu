<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $requete = "SELECT * FROM utilisateur WHERE email = :email";
    $sql = $db->prepare($requete);
    $sql->bindParam(':email', $email, PDO::PARAM_STR);
    $sql->execute();
    $user = $sql->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($mot_de_passe, $user['mot_de_passe'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header('Location: info.php');
            exit();  
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet email.";
    }
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
            <h3>Connexion</h3>
            <form method="POST" action="index.php">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br><br>
    
                <label for="password">Mot de passe : </label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
    
                <button type="submit">Connexion</button>
            </form>
            <p>Pas de compte ? <a href="signup.php">Inscription</a></p>
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
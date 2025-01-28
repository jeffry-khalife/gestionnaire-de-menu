<?php
session_start();

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=recette;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Traitement du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];

    // Validation de base
    $erreurs = [];
    
    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "Email invalide";
    }
    
    if ($mot_de_passe !== $confirmation_mot_de_passe) {
        $erreurs[] = "Les mots de passe ne correspondent pas";
    }

    // Vérifier si l'email existe déjà
    $sql = "SELECT * FROM utilisateur WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        $erreurs[] = "Cet email est déjà utilisé";
    }

    // Si pas d'erreurs, enregistrer l'utilisateur
    if (empty($erreurs)) {
        // Hacher le mot de passe
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Insertion dans la base de données
        $sql = "INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $email, $mot_de_passe_hash]);

        // Connexion automatique après inscription
        $user_id = $pdo->lastInsertId();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['nom'] = $nom;

        header('Location: dashboard.php');
        exit();
    }
}
?>

<!-- Le reste du code HTML reste inchangé -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            max-width: 400px; 
            margin: 0 auto; 
            padding: 20px; 
        }
        .erreur { color: red; }
        input { 
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
        }
        button { 
            width: 100%; 
            padding: 10px; 
        }
    </style>
</head>
<body>
    <h2>Inscription</h2>
    
    <?php 
    if (!empty($erreurs)) {
        echo "<div class='erreur'>";
        foreach ($erreurs as $erreur) {
            echo "<p>$erreur</p>";
        }
        echo "</div>";
    }
    ?>

    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
        <input type="password" name="confirmation_mot_de_passe" placeholder="Confirmez le mot de passe" required>
        <button type="submit">S'inscrire</button>
    </form>

    <p>Déjà un compte ? <a href="login.php">Connectez-vous</a></p>
</body>
</html>

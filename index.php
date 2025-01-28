<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=recette;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupérer les recettes de l'utilisateur connecté
$sql = "SELECT * FROM plat WHERE utilisateur_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['user_id']]);
$recettes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Recettes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['nom']); ?> !</h1>
<a href="logout.php">Se déconnecter</a>
<a href="create.php">Ajouter une nouvelle recette</a>

<h2>Liste de vos recettes</h2>

<?php if (count($recettes) > 0): ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix (€)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recettes as $recette): ?>
                <tr>
                    <td><?php echo htmlspecialchars($recette['nom']); ?></td>
                    <td><?php echo htmlspecialchars($recette['description']); ?></td>
                    <td><?php echo number_format($recette['prix'], 2); ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $recette['id']; ?>">Modifier</a> |
                        <a href="delete.php?id=<?php echo $recette['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette recette ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune recette trouvée. Ajoutez-en une !</p>
<?php endif; ?>

</body>
</html>


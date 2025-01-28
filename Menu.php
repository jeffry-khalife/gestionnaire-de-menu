 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Vente</title>
    <link rel="stylesheet" href="Menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    // Liste des pages pour la navigation
    $pages = [
        "index.php" => "Accueil",
        "ventes.php" => "Vente",
        "apropos.php" => "A propos",
        "histoire.php" => "Histoire",
        "contact.php" => "Contact"
    ];

    // Liste des produits
    $products = [
        [
            "image" => "image/produit-removebg-preview.png",
            "title" => "Matcha Pure",
            "description" => "Un matcha de qualité supérieure, idéal pour une dégustation traditionnelle.",
            "price" => "20€"
        ],
        [
            "image" => "image/pack-removebg-preview.png",
            "title" => "Matcha Latte",
            "description" => "Un mélange savoureux de matcha et de lait crémeux pour un moment de douceur.",
            "price" => "15€"
        ],
        [
            "image" => "image/box-removebg-preview.png",
            "title" => "Matcha Ceremonial",
            "description" => "Le matcha idéal pour les cérémonies traditionnelles japonaises.",
            "price" => "40€"
        ],
        [
            "image" => "image/théé-removebg-preview.png",
            "title" => "Matcha Deluxe",
            "description" => "Un thé matcha riche et velouté pour les amateurs exigeants.",
            "price" => "15€"
        ],
        [
            "image" => "image/bamboo.jpg",
            "title" => "Matcha Ice",
            "description" => "Parfait pour des boissons glacées au thé matcha.",
            "price" => "10€"
        ],
        [
            "image" => "image/kit-removebg-preview.png",
            "title" => "Matcha Fusion",
            "description" => "Un mélange unique de thé matcha et d'épices.",
            "price" => "35€"
        ],
        [
            "image" => "image/matc-removebg-preview.png",
            "title" => "Matcha Zen",
            "description" => "Le thé matcha pour des moments de pure détente.",
            "price" => "28€"
        ],
        [
            "image" => "image/boite_noir-removebg-preview.png",
            "title" => "Matcha Gourmet",
            "description" => "Pour une expérience culinaire inégalée.",
            "price" => "25€"
        ],
        [
            "image" => "image/canette-removebg-preview.png",
            "title" => "Matcha Premium",
            "description" => "Un choix idéal pour une saveur authentique.",
            "price" => "22€"
        ]
    ];
    ?>

    <nav>
        <a href="ventes.php"><img src="image/panier-removebg-preview.png" alt="logo thé" width="50" height="50"></a>
        <a href="index.php"><p> MatchaTea </p></a>
        <a href="profil.php"><img src="image/utilisateur.png" alt="logo profile" width="50" height="50"></a>
    </nav>

    <div class="sidebar">
        <?php foreach ($pages as $url => $label): ?>
            <div class="box vertical-rl">
                <a href="<?= $url ?>"><?= $label ?></a>
            </div>
        <?php endforeach; ?>
    </div>

    <section class="products-section">
        <h2>Nos Thés Matcha</h2>
        <p>
            Qu'est-ce que c'est ? Le “matcha” (抹茶) soit littéralement “thé moulu” en japonais, est un thé vert réduit en poudre très fine. Un matcha de qualité est reconnaissable à sa couleur vert vif.
            Composés à 100 % de thé vert matcha et 100 % naturels, nos thés matcha conviennent à la boisson comme à la pâtisserie.
        </p>
        <div class="mosaic">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['title']) ?>" title="<?= htmlspecialchars($product['description']) ?>">
                    <div class="product-info">
                        <strong><?= $product['price'] ?></strong>
                        <div class="product-description"><?= htmlspecialchars($product['description']) ?></div>
                        <a href="#" class="add-to-cart">Ajouter au panier</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <!-- Navigation -->
            <div class="footer-nav">
                <h3>Navigation</h3>
                <ul>
                    <?php foreach ($pages as $url => $label): ?>
                        <li><a href="<?= $url ?>"><?= $label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Card -->
            <div class="footer-card">
                <a href="ventes.php"><img src="image/logo matc.jpg" alt="logo vente"></a>
            </div>
            <!-- Copyright -->
            <div class="footer-copyright">
                <p>&copy; La plateforme - 2025</p>
                <p>Magali Vacher</p>
                <p>Anna Marras</p>
                <p>Jeffry Khalife</p>
            </div>
        </div>
    </footer>
</body>
</html>

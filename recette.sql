-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 01 fév. 2025 à 13:56
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `quantite` varchar(50) DEFAULT NULL,
  `plat_id` int DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plat_id` (`plat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `nom`, `quantite`, `plat_id`, `image`) VALUES
(1, 'Laitue', '1', 1, 'https://png.pngtree.com/png-clipart/20221014/original/pngtree-hot-pot-shabu-shabu-lettuce-greens-png-image_8686014.png'),
(2, 'Poulet grillé', '100g', 1, 'https://static.vecteezy.com/system/resources/thumbnails/021/665/568/small_2x/delicious-grilled-chicken-cutout-png.png'),
(3, 'Parmesan', '10g', 1, 'https://static.vecteezy.com/system/resources/thumbnails/036/573/064/small/piece-of-parmesan-cheese-png.png'),
(4, 'Sauce César', '50ml', 1, 'https://www.soreal.fr/images/medias/recettes_sauce-caesar-384x3404x.jpg'),
(5, 'veau', '1.2 kg', NULL, 'https://png.pngtree.com/png-clipart/20240201/original/pngtree-fresh-raw-meat-veal-photo-png-image_14202993.png'),
(6, 'eau', '1.5 litre', NULL, 'https://static.vecteezy.com/system/resources/thumbnails/041/733/282/small/bottle-of-water-isolated-soft-smooth-lighting-only-premium-high-quality-png.png'),
(7, 'bouillon de volaille', '1 cube', NULL, 'https://www.croquonslavie.fr/sites/default/files/styles/large/public/pdh_product_images/SKU_07613035645585/07613035645585_H1N1_s05.png?itok=icvUKbiy'),
(8, 'carotte', '1', NULL, 'https://static.vecteezy.com/system/resources/previews/025/065/279/non_2x/carrot-with-ai-generated-free-png.png'),
(9, 'blanc de poireau', '1', NULL, 'https://png.pngtree.com/png-clipart/20231117/original/pngtree-fresh-leek-white-picture-image_13266717.png'),
(10, 'branche de celeri', '1', NULL, 'https://www.plaineduroussillon.com/wp-content/uploads/2017/10/CoopPDR-CeleriOK.png'),
(11, 'bouquet garni', '1', NULL, 'https://www.provincesbio.com/457081-large_default/bouquet-garni-sec-de-provence-pot-au-feu-20-g.jpg'),
(12, 'sel', '1 pincée', NULL, 'https://static.vecteezy.com/system/resources/thumbnails/046/828/477/small_2x/empty-salt-shaker-isolated-on-transparent-background-png.png'),
(13, 'poivre ', '1 pincée', NULL, 'https://png.pngtree.com/png-vector/20210630/ourmid/pngtree-black-pepper-color-natural-diet-png-image_3539555.jpg'),
(14, 'champignons ', '250 grammes', NULL, 'https://png.pngtree.com/png-clipart/20231015/original/pngtree-champignon-mushrooms-mushroom-picture-image_13166352.png'),
(15, 'beurre', '10 grammes', NULL, 'https://static.vecteezy.com/system/resources/thumbnails/044/813/520/small_2x/butter-with-knife-isolated-on-transparent-background-png.png'),
(16, 'jaune d\'oeuf', '1', NULL, 'https://storage.canalblog.com/57/35/796167/93177413_o.png'),
(17, 'citron', '1', NULL, 'https://static.vecteezy.com/system/resources/previews/027/572/504/non_2x/lemon-lemon-lemon-transparent-background-ai-generative-free-png.png'),
(18, 'farine', '50 grammes', 0, 'https://static.vecteezy.com/system/resources/previews/034/616/355/non_2x/ai-generated-flour-in-bowl-on-transparent-background-image-png.png'),
(19, 'moutarde', '1 cuillère à soupe', NULL, 'https://res.cloudinary.com/kraft-heinz-whats-cooking-ca/image/upload/f_auto/q_auto/r_8/c_limit,w_3840/f_auto/q_auto/v1/dxp-images/heinz/products/00057000019952-yellow-mustard/marketing-view-color-front_2388f513b6f067fb15630a76b81d39626971508e_abfbedf9fe0c'),
(20, 'huile d\'olive', '1 cuillère à soupe', NULL, 'https://lh5.googleusercontent.com/proxy/dEBfzuXcyp6QvM2558qeVGvMMO1WSaluwwbzAkQJvFziiJ1yBOi6n7PF5r4ET7w0LugyBh3k5Gzkj3JtxUtTq8tJrqo0jALLYQ'),
(21, 'sauce worcestershire', '1 cuillère à soupe', NULL, 'https://cdn.allotta.io/image/upload/v1712508627/dxp-images/heinz/products/00013000002844-worcestershire-sauce/marketing-view-color-front_e808a0a7cfdb4f55ced7b8a1c8b378b16651ea37_8ce42d4403d45827b73a6b5a69deecc8.png'),
(22, 'ketchup', '1 cuillère à soupe', NULL, 'https://pngimg.com/d/ketchup_PNG48.png'),
(23, 'tabasco', 'gouttes', NULL, 'https://pngimg.com/d/tabasco_PNG23.png'),
(24, 'oeufs', '1', NULL, 'https://static.vecteezy.com/system/resources/previews/036/113/259/non_2x/ai-generated-a-box-of-eggs-isolated-on-transparent-background-free-png.png'),
(25, 'lait', '10 cl', NULL, 'https://www.sodiaalprofessionnel.com/app/uploads/2017/02/lt-1-2-gdl-fs-bp-1l-pgn-1.png'),
(26, 'sucre', '1 cuillère à soupe', NULL, 'https://png.pngtree.com/png-clipart/20230609/ourmid/pngtree-sugar-cube-png-image_7125546.png'),
(27, 'beurre fondu', '1 cuillère à soupe', NULL, 'https://png.pngtree.com/png-vector/20230728/ourmid/pngtree-butter-clipart-homemade-honey-bread-with-melted-honey-png-image_6801450.png'),
(28, 'salade romaine', '1', NULL, 'https://png.pngtree.com/png-clipart/20231015/original/pngtree-lettuce-romaine-flat-green-color-png-png-image_13302817.png'),
(29, 'filet de poulet', '1', NULL, 'https://locavor.fr/data/produits/6/128450/filet-de-poulet-128450-1602521499-1.png'),
(30, 'croûtons', '150 grammes', NULL, 'https://static.vecteezy.com/system/resources/previews/025/222/212/non_2x/croutons-isolated-on-transparent-background-png.png'),
(31, 'ail', '1 gousse', NULL, 'https://static.vecteezy.com/system/resources/thumbnails/011/190/611/small_2x/fresh-garlic-isolated-png.png'),
(32, 'jus de citron', '1 cuillère à soupe', NULL, 'https://png.pngtree.com/png-clipart/20231020/original/pngtree-summer-lemon-juice-png-image_13381072.png'),
(33, 'filet d\'anchois', '1', NULL, 'https://www.demetrafood.it/storage/media/products/ref_thumbnail_images/000417.png'),
(34, 'pomme de terre', '1', NULL, 'https://upload.wikimedia.org/wikipedia/commons/6/61/Pommes_de_terre.png'),
(35, 'crème fraiche', '10 cl', NULL, 'https://static.vecteezy.com/system/resources/thumbnails/052/243/706/small_2x/bowl-of-cream-cheese-isolated-on-transparent-background-png.png'),
(36, 'gorge de porc', '500 grammes', NULL, 'https://ferme-montchervet.com/Magasin/Drive/245-home_default/gorge-de-porc.jpg'),
(37, 'foie de porc', '300 grammes', NULL, 'https://media.olymelpork.com/webfolder_download/c08001263a65a65c1d9cd56dcd390dbe/foie_v2/d05aee8622757b55a3c4e4dac6caea97d52f623a/foie_v2.png'),
(38, 'échines de porc', '200 grammes', NULL, 'https://www.achetezaluzy.fr/1535/roti-echine-de-porc.jpg'),
(39, 'saindoux', '10 grammes', NULL, 'https://www.coursesu.com/dw/image/v2/BBQX_PRD/on/demandware.static/-/Sites-digitalu-master-catalog/default/dwf2b8c6d5/3180050770003_A_539600_S01.png?sw=388&sh=388&sm=fit'),
(40, 'échalote', '1', NULL, 'https://static.vecteezy.com/system/resources/previews/016/548/114/non_2x/watercolor-shallot-vegetable-png.png'),
(41, 'cognac', '1 cuillère à soupe', NULL, 'https://pngimg.com/uploads/cognac/cognac_PNG15147.png'),
(42, 'armagnac', '1 cuillère à soupe', NULL, 'https://www.chateaudecassaigne.com/wp-content/uploads/sites/2/2020/03/DC-ARMAGNAC-CASSAIGNE-20ANS-Detoure.png'),
(43, 'quatre épices', '1 cuillère à soupe', NULL, 'https://d1e3z2jco40k3v.cloudfront.net/-/media/project/oneweb/ducros/products/quatre-epices-800x800.webp?rev=dce0ca35dd804d018b24554738848dee&vd=20241105T162151Z&extension=webp&hash=D8B98AABECA2FC3D8FF68E1F03D19E0D'),
(44, 'persil', '1 bouquet', NULL, 'https://png.pngtree.com/png-vector/20231019/ourmid/pngtree-green-parsley-leaf-png-image_10256664.png'),
(45, 'riz', '100 grammes', NULL, 'https://static.vecteezy.com/system/resources/previews/009/887/170/non_2x/white-rice-in-bow-free-png.png'),
(46, 'pâtes fraiches', '100 grammes', NULL, 'https://png.pngtree.com/png-vector/20240617/ourmid/pngtree-pile-of-fresh-raw-fettuccine-ribbon-pasta-isolated-on-a-transparent-png-image_12778659.png'),
(47, 'tagliatelles fraiche', '100 grammes', NULL, 'https://png.pngtree.com/png-vector/20230904/ourmid/pngtree-italian-pasta-tagliatelle-domestic-png-image_9932429.png'),
(48, 'nutella', NULL, NULL, 'https://www.pngplay.com/wp-content/uploads/15/Nutella-Free-PNG.png'),
(49, 'confiture de fraise', NULL, NULL, 'https://static.vecteezy.com/system/resources/previews/020/695/747/non_2x/watercolor-strawberry-jam-png.png'),
(50, 'cacao', NULL, NULL, 'https://static.vecteezy.com/system/resources/previews/035/982/852/non_2x/ai-generated-cocoa-isolated-on-transparent-background-free-png.png');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text,
  `prix` decimal(10,2) DEFAULT NULL,
  `utilisateur_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `utilisateur_id` (`utilisateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `nom`, `description`, `prix`, `utilisateur_id`) VALUES
(1, 'Menu du Jour', 'Menu complet', 25.00, NULL),
(2, 'Menu Végétarien', 'Menu sans viande', 22.00, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

DROP TABLE IF EXISTS `plat`;
CREATE TABLE IF NOT EXISTS `plat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text,
  `prix` decimal(10,2) DEFAULT NULL,
  `categorie` enum('Entrée','Plats','Dessert') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `nom`, `description`, `prix`, `categorie`, `menu_id`) VALUES
(1, 'Velouté de potiron', 'Un velouté de potiron crémeux, délicatement parfumé, idéal pour réchauffer vos soirées d\'automne.', 8.00, NULL, NULL),
(2, 'Blanquette de veau', 'Plongez dans l\'onctuosité et la tendresse d\'un plat emblématique de la cuisine française : la blanquette de veau .', 12.00, NULL, NULL),
(3, 'Salade César', 'Craquez pour la salade César , une icône delégèreté et croquante un plat équilibré et généreux, parfait pour une pause déjeuner raffinée ou un dîner léger mais gourmand. À déguster', 12.00, NULL, NULL),
(4, 'Crêpe', 'Fine, dorée et légèrement croustillante sur les bords, la crêpe au sucreest unsucre fondant ,\r\n\r\nRapide à préparer, savoureuse à chaque bouchée, elle incarne le dessert ou le goûter parfait, à savourer encore tiède pour un maximum de gourmandise. Simple, efficace et toujours un succès !', 8.00, NULL, NULL),
(5, 'Entrecôte + Frites', 'Un grand classique indémodable qui fait toujours sensation : l\'entrecôte frites !bœuf tendre et juteuse , saisiefrites dorées et croustillantes . Servie avec une sauce au\r\n\r\nUn plat simple et efficace, idéal pour se régaler à la brasserie comme à la maison. ', 18.00, NULL, NULL),
(6, 'salade verte', 'Avant de déguster un bon plat chaud, l\'entrée salade verte composé de différentes saveurs fraiche et ', 8.00, NULL, NULL),
(7, 'tartare de boeuf', 'Frais, savoureux et raffiné, le tartare de bœuf est bœuf de qualité finement haché ,jaune d\'œuf, câpres, cornichons, moutarde, échalotes et persil. Chaque bouchée', 12.00, NULL, NULL),
(8, 'Terrine', 'Frais, savoureux et raffiné, la terrine est une bonne occasion de passer un good mood.', 8.00, NULL, NULL),
(9, 'assiette de Fromage', 'un plateau a partager ou non savoureux', 8.00, NULL, NULL),
(10, 'Tiramisu', 'recette traditionnelle Italienne , une saveur unique.', 8.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `confirmation_mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `mot_de_passe`, `confirmation_mot_de_passe`) VALUES
(1, '', 'marras', 'anna.marras@laplateforme.io', '$2y$10$SqID8UevpmH106FiVBohsO1haXGyZyWsW/2sGtLdLU1X4zH7Aad5.', ''),
(2, '', 'Magali', 'magali.vacher@laplateforme.io', '$2y$10$ALgBwusXnlH9RtSNOx6fnuL77WR5s2k.uE3L7kp0XgQ7Uaaw4tj12', ''),
(3, 'dupon', 'toto', 'totodupon@gmail.com', '$2y$10$IJfnY6qYX8pP2igieSKlNup4TkKpotSfzxGLKazVP.Nfk.byQGlHW', '$2y$10$zT7hilAC5S5.HrzmKIoLF.F4rSKU5tzCZ22VxXjmHEOs5zE5WQQFu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

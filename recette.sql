-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 31 jan. 2025 à 13:48
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
  PRIMARY KEY (`id`),
  KEY `plat_id` (`plat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `nom`, `quantite`, `plat_id`) VALUES
(1, 'Laitue', '1', 1),
(2, 'Poulet grillé', '100g', 1),
(3, 'Parmesan', '10g', 1),
(4, 'Sauce César', '50ml', 1),
(5, 'veau', '1.2 kg', NULL),
(6, 'eau', '1.5 litre', NULL),
(7, 'bouillon de volaille', '1 cube', NULL),
(8, 'carotte', '1', NULL),
(9, 'blanc de poireau', '1', NULL),
(10, 'branche de celeri', '1', NULL),
(11, 'bouquet garni', '1', NULL),
(12, 'sel', '1 pincée', NULL),
(13, 'poivre ', '1 pincée', NULL),
(14, 'champignons ', '250 grammes', NULL),
(15, 'beurre', '10 grammes', NULL),
(16, 'jaune d\'oeuf', '1', NULL),
(17, 'citron', '1', NULL),
(18, 'farine', '50 grammes', 0),
(19, 'moutarde', '1 cuillère à soupe', NULL),
(20, 'huile d\'olive', '1 cuillère à soupe', NULL),
(21, 'sauce worcestershire', '1 cuillère à soupe', NULL),
(22, 'ketchup', '1 cuillère à soupe', NULL),
(23, 'tabasco', 'gouttes', NULL),
(24, 'oeufs', '1', NULL),
(25, 'lait', '10 cl', NULL),
(26, 'sucre', '1 cuillère à soupe', NULL),
(27, 'beurre fondu', '1 cuillère à soupe', NULL),
(28, 'salade romaine', '1', NULL),
(29, 'filet de poulet', '1', NULL),
(30, 'croûtons', '150 grammes', NULL),
(31, 'ail', '1 gousse', NULL),
(32, 'jus de citron', '1 cuillère à soupe', NULL),
(33, 'filet d\'anchois', '1', NULL),
(34, 'pomme de terre', '1', NULL),
(35, 'crème fraiche', '10 cl', NULL),
(36, 'gorge de porc', '500 grammes', NULL),
(37, 'foie de porc', '300 grammes', NULL),
(38, 'échines de porc', '200 grammes', NULL),
(39, 'saindoux', '10 grammes', NULL),
(40, 'échalote', '1', NULL),
(41, 'cognac', '1 cuillère à soupe', NULL),
(42, 'armagnac', '1 cuillère à soupe', NULL),
(43, 'quatre épices', '1 cuillère à soupe', NULL),
(44, 'persil', '1 bouquet', NULL),
(45, 'riz', '100 grammes', NULL),
(46, 'pâtes fraiches', '100 grammes', NULL),
(47, 'tagliatelles fraiche', '100 grammes', NULL),
(48, 'nutella', NULL, NULL),
(49, 'confiture de fraise', NULL, NULL),
(50, 'cacao', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `categorie` enum('Entrée','Plat principal','Dessert') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `confirmation_mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `mot_de_passe`, `confirmation_mot_de_passe`) VALUES
(1, '', 'marras', 'anna.marras@laplateforme.io', '$2y$10$SqID8UevpmH106FiVBohsO1haXGyZyWsW/2sGtLdLU1X4zH7Aad5.', ''),
(2, '', 'Magali', 'magali.vacher@laplateforme.io', '$2y$10$ALgBwusXnlH9RtSNOx6fnuL77WR5s2k.uE3L7kp0XgQ7Uaaw4tj12', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

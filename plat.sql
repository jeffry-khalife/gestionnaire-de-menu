-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 31 jan. 2025 à 13:12
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 26 fév. 2023 à 21:47
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `photos`
--

-- --------------------------------------------------------

--
-- Structure de la table `pics`
--

DROP TABLE IF EXISTS `pics`;
CREATE TABLE IF NOT EXISTS `pics` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PSEUDO` varchar(30) NOT NULL,
  `TITLE` varchar(30) NOT NULL,
  `LOC` varchar(30) NOT NULL,
  `FILE_NAME` text NOT NULL,
  `created at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pics`
--

INSERT INTO `pics` (`ID`, `PSEUDO`, `TITLE`, `LOC`, `FILE_NAME`, `created at`) VALUES
(1, 'alo', 'alo', 'alger', '', '2023-02-26 19:45:31'),
(2, 'ali', 'ali', 'alger', '', '2023-02-26 20:02:15'),
(3, 'ala', 'ala', 'alger', '', '2023-02-26 20:24:18'),
(9, 'samy45', 'street', 'Paris', '', '2023-02-26 22:16:17'),
(8, 'amay', 'souvenir', 'Orléans', '', '2023-02-26 22:15:42'),
(10, 'zeus', 'newyork', 'newyork', '', '2023-02-26 22:32:33'),
(11, 'amayess45', 'italia', 'milano', '', '2023-02-26 22:34:03'),
(12, 'mohammed', 'farouk', 'ALGER', '', '2023-02-26 22:39:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

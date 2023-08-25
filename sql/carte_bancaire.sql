-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 août 2023 à 13:31
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carte_bancaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte_bancaire`
--

DROP TABLE IF EXISTS `carte_bancaire`;
CREATE TABLE IF NOT EXISTS `carte_bancaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_carte` varchar(100) NOT NULL,
  `titulaire` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `code_cvv` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte_bancaire`
--

INSERT INTO `carte_bancaire` (`id`, `numero_carte`, `titulaire`, `date`, `code_cvv`) VALUES
(1, '4440 5550 6665 6565', 'Zoniaina Fanekena Elio', '24/26', '335'),
(2, '4555 555 555 555 ', 'Zoniaina Fanekena Elio', '25/26', '322'),
(3, 'dsfgsdfg', 'fdsgsdf', 'sdfgsdf', '444'),
(4, 'sqdfqsdfqsd', 'sdqdfqsfd', 'sqsdfqdfqd', '444');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

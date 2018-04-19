-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 avr. 2018 à 12:11
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `troc`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` int(3) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description_courte` varchar(255) DEFAULT NULL,
  `description_longue` text,
  `prix` float(6,2) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `pays` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `date_enregistrement` datetime DEFAULT NULL,
  `membre_id` int(3) NOT NULL,
  `photo_id` int(3) NOT NULL,
  `categorie_id` int(3) NOT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `membre_id` (`membre_id`),
  KEY `photo_id` (`photo_id`),
  KEY `categorie_id` (`categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(3) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `motscles` text,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(3) NOT NULL AUTO_INCREMENT,
  `commentaire` text,
  `membre_id` int(3) NOT NULL,
  `annonce_id` int(3) NOT NULL,
  `date_enregistrement` datetime DEFAULT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `membre_id` (`membre_id`),
  KEY `annonce_id` (`annonce_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(3) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) DEFAULT NULL,
  `mdp` varchar(60) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `civilite` enum('m','f') DEFAULT NULL,
  `statut` int(1) DEFAULT NULL,
  `date_enregistrement` datetime DEFAULT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(3) NOT NULL AUTO_INCREMENT,
  `note` int(3) DEFAULT NULL,
  `avis` text,
  `date_enregistrement` datetime DEFAULT NULL,
  `membre_id1` int(3) NOT NULL,
  `membre_id2` int(3) NOT NULL,
  PRIMARY KEY (`id_note`),
  KEY `membre_id1` (`membre_id1`),
  KEY `membre_id2` (`membre_id2`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id_photo` int(3) NOT NULL AUTO_INCREMENT,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

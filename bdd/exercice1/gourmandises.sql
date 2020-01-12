-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 déc. 2019 à 12:05
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gourmandises`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `CodeArt` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleArt` varchar(50) NOT NULL,
  `PrixUnitArt` float NOT NULL,
  PRIMARY KEY (`CodeArt`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`CodeArt`, `LibelleArt`, `PrixUnitArt`) VALUES
(1, 'Calissons', 15),
(2, 'Nougats', 20),
(3, 'Croissants', 1),
(4, 'Éclair au chocolat', 2.5),
(5, 'Éclair au café', 3),
(6, 'Éclair à la vanille', 1.8);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_client`
--

DROP TABLE IF EXISTS `categorie_client`;
CREATE TABLE IF NOT EXISTS `categorie_client` (
  `CodeCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleCategorie` varchar(20) NOT NULL,
  PRIMARY KEY (`CodeCategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie_client`
--

INSERT INTO `categorie_client` (`CodeCategorie`, `LibelleCategorie`) VALUES
(1, 'Boulangeries'),
(2, 'Épiceries fines'),
(3, 'Chocolateries');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `CodeCli` int(11) NOT NULL AUTO_INCREMENT,
  `NomCli` varchar(50) NOT NULL,
  `AdresseRueCli` varchar(50) NOT NULL,
  `AdresseCPcli` varchar(6) NOT NULL,
  `AdresseVilleCli` varchar(50) NOT NULL,
  `TelFixCli` varchar(20) NOT NULL,
  `TelPortCli` varchar(20) NOT NULL,
  `CodeCategorie` int(11) NOT NULL,
  `CodeRegl` int(11) NOT NULL,
  PRIMARY KEY (`CodeCli`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CodeCli`, `NomCli`, `AdresseRueCli`, `AdresseCPcli`, `AdresseVilleCli`, `TelFixCli`, `TelPortCli`, `CodeCategorie`, `CodeRegl`) VALUES
(1, 'La petite marquise', '17 rue malin', '81200', 'Mazamet', '0505050505', 'NULL', 1, 1),
(2, 'Le sablé d\'or', '17 rue Malesherbes', '45300', 'Pithiviers', '0145454545', '0706060606', 1, 3),
(3, 'La rose des vents', '25 avenue Marx', '36500', 'Buzançais', '0303030303', '0606060606', 2, 4),
(4, 'Chez Norbert', '12 Route de Bâle', '68000', 'Colmar', '03 89 23 55 05', 'NULL', 1, 2),
(5, 'Alexandre', '34 Rue Turenne', '68000', 'Colmar', '0 892 31 14 18', 'NULL', 1, 4),
(6, 'Sezanne', '30 Grand Rue', '68000', 'Colmar', '03 89 41 55 94', '0605050401', 2, 1),
(7, 'Douceurs et Plaisirs D\'Alsace', '5 Rue Mercière', '68000', 'Colmar', '03 89 41 83 22', '', 2, 3),
(8, 'CHOCOLATERIE GANACHE', '42 Rue des Marchands', '68000', 'Colmar', '09 83 60 32 03', '0605078987', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `NumFact` int(11) NOT NULL AUTO_INCREMENT,
  `DateFact` date NOT NULL,
  `CodeCli` int(11) NOT NULL,
  PRIMARY KEY (`NumFact`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`NumFact`, `DateFact`, `CodeCli`) VALUES
(1, '2019-11-03', 1),
(2, '2019-11-05', 2),
(3, '2019-11-06', 2),
(4, '2019-11-06', 3),
(5, '2019-11-08', 5),
(6, '2019-11-09', 6),
(7, '2019-11-10', 6),
(8, '2019-11-12', 7),
(9, '2019-11-13', 1),
(10, '2019-11-15', 8),
(11, '2019-11-20', 1),
(12, '2019-12-22', 2),
(13, '2019-11-26', 6),
(14, '2019-12-27', 8),
(15, '2019-12-01', 8),
(16, '2019-12-01', 5),
(17, '2019-12-02', 6),
(18, '2019-12-02', 8);

-- --------------------------------------------------------

--
-- Structure de la table `lignefact`
--

DROP TABLE IF EXISTS `lignefact`;
CREATE TABLE IF NOT EXISTS `lignefact` (
  `CodeFact` int(11) NOT NULL,
  `CodeArt` int(11) NOT NULL,
  `QteAch` int(11) NOT NULL,
  `TxRemise` float(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lignefact`
--

INSERT INTO `lignefact` (`CodeFact`, `CodeArt`, `QteAch`, `TxRemise`) VALUES
(1, 5, 20, 0),
(1, 4, 10, 0),
(1, 7, 5, 0),
(2, 6, 20, 0),
(2, 5, 5, 0),
(3, 4, 12, 0),
(4, 4, 100, 0),
(4, 1, 1, 0),
(5, 4, 10, 0),
(6, 5, 10, 0),
(6, 6, 20, 0),
(7, 3, 10, 0),
(7, 2, 10, 0),
(7, 1, 20, 0),
(8, 1, 25, 0),
(9, 1, 1, 0),
(10, 4, 50, 0),
(11, 5, 20, 0),
(11, 4, 20, 0),
(11, 3, 2, 0),
(11, 1, 1, 0),
(12, 5, 10, 0),
(13, 6, 10, 0),
(14, 1, 10, 0),
(15, 2, 20, 0),
(16, 3, 45, 0),
(17, 1, 10, 0),
(17, 2, 15, 0),
(17, 3, 18, 0),
(17, 4, 25, 0),
(17, 5, 50, 0),
(17, 6, 100, 0),
(18, 5, 50, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

DROP TABLE IF EXISTS `reglement`;
CREATE TABLE IF NOT EXISTS `reglement` (
  `CodeRegl` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleRegl` varchar(50) NOT NULL,
  PRIMARY KEY (`CodeRegl`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reglement`
--

INSERT INTO `reglement` (`CodeRegl`, `LibelleRegl`) VALUES
(1, 'Billet à ordre 30 jours'),
(2, 'Chèque 30 jours'),
(3, 'Chèque 30 jours fin de mois'),
(4, 'Chèque 60 jours');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

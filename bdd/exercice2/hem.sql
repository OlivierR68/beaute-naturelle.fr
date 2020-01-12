-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 21 nov. 2018 à 13:30
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hem`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `num_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(30) NOT NULL,
  `prenom_contact` varchar(30) NOT NULL,
  `tel_contact` varchar(15) NOT NULL,
  PRIMARY KEY (`num_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`num_contact`, `nom_contact`, `prenom_contact`, `tel_contact`) VALUES
(1, 'Benallou', 'Nour', '0388967027'),
(2, 'Buffet', 'Léa', '0388163065'),
(3, 'Burckert', 'Léa', '0388768850'),
(4, 'Tekin', 'Anissa', '0388769708'),
(5, 'Vuilliet', 'Thomas', ''),
(6, 'Badea', 'Lucia', '0388375041'),
(7, 'Barkane', 'Myriam', '0388884759'),
(8, 'Beltzung', 'Steven', '0388862936'),
(9, 'Bihry', 'Alban', '0388872696'),
(10, 'Frey', 'Nicolas', '0388921518'),
(11, 'Oberlin-Martins', 'Arthur', '0388107472'),
(12, 'Pfister', 'Adrien', '0388119857'),
(13, 'Schneider', 'Jérémy', '0388824824'),
(14, 'Sénéchal', 'Julien', '0388520021'),
(15, 'Spahn', 'Antoine', '0388112909'),
(16, 'Stahl', 'David', '0388418705');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `num_entreprise` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(40) NOT NULL,
  `num_contact` int(11) NOT NULL,
  PRIMARY KEY (`num_entreprise`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`num_entreprise`, `nom_entreprise`, `num_contact`) VALUES
(1, 'ATIWEB', 5),
(2, 'K2M SERVICES', 4),
(3, 'DIVALTO', 3),
(4, 'SNCF TECHNICENTRE', 2),
(5, 'ECOGREENENERGY', 1),
(6, 'TRIBE IT PARTNERS', 16),
(7, 'GEFCO INDUSTRIAL SERVICES', 15),
(8, 'UBICENTREX', 14),
(9, 'GEPIX', 13),
(10, 'TKDES', 12),
(11, 'CACTUS GRAPHISME', 11),
(12, 'PIXEL PLURIMEDIA', 10),
(13, 'NEOONE', 9),
(14, 'EIGHTY DESIGN', 8),
(15, 'HDR COMMUNICATIONS', 7),
(16, 'FM LOGISTIC CORPORATE', 6);

-- --------------------------------------------------------

--
-- Structure de la table `enveloppe`
--

DROP TABLE IF EXISTS `enveloppe`;
CREATE TABLE IF NOT EXISTS `enveloppe` (
  `num_entreprise` int(11) NOT NULL,
  `num_taxe` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `montant` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enveloppe`
--

INSERT INTO `enveloppe` (`num_entreprise`, `num_taxe`, `annee`, `montant`) VALUES
(1, 2, 2015, 2000),
(1, 2, 2016, 2500),
(1, 2, 2017, 2200),
(1, 2, 2018, 2900),
(2, 1, 2018, 3200),
(3, 1, 2017, 1200),
(3, 1, 2018, 1800),
(4, 1, 2017, 1900),
(4, 2, 2017, 600),
(4, 1, 2018, 1900),
(4, 2, 2018, 900),
(5, 1, 2018, 3600),
(6, 1, 2016, 400),
(6, 1, 2017, 600),
(6, 1, 2018, 1200),
(7, 1, 2017, 500),
(7, 2, 2017, 400),
(7, 1, 2018, 900),
(7, 2, 2018, 1300),
(8, 1, 2018, 250),
(9, 2, 2016, 450),
(9, 2, 2017, 600),
(9, 2, 2018, 800),
(10, 2, 2015, 1500),
(10, 2, 2016, 1600),
(10, 2, 2017, 1900),
(10, 2, 2018, 2200),
(11, 2, 2017, 1500),
(11, 2, 2018, 1900),
(12, 1, 2018, 2000),
(12, 2, 2018, 400),
(13, 1, 2016, 400),
(13, 1, 2017, 500),
(13, 1, 2018, 800),
(14, 2, 2018, 700),
(15, 1, 2016, 1250),
(15, 1, 2017, 1400),
(15, 1, 2018, 1600),
(16, 1, 2017, 1100),
(16, 1, 2018, 1500);

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

DROP TABLE IF EXISTS `secteur`;
CREATE TABLE IF NOT EXISTS `secteur` (
  `num_secteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_secteur` varchar(40) NOT NULL,
  PRIMARY KEY (`num_secteur`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `secteur`
--

INSERT INTO `secteur` (`num_secteur`, `nom_secteur`) VALUES
(1, 'Agroalimentaire'),
(2, 'Informatique / Télécoms'),
(3, 'Études et conseils'),
(4, 'Métallurgie / Travail du métal'),
(5, 'Services aux entreprises'),
(6, 'Transports / Logistique'),
(7, 'Plastique / Caoutchouc'),
(8, 'Électronique / Électricité'),
(9, 'Banque / Assurance'),
(10, 'Textile / Habillement / Chaussure');

-- --------------------------------------------------------

--
-- Structure de la table `taxe`
--

DROP TABLE IF EXISTS `taxe`;
CREATE TABLE IF NOT EXISTS `taxe` (
  `num_taxe` int(11) NOT NULL AUTO_INCREMENT,
  `nom_taxe` varchar(30) NOT NULL,
  PRIMARY KEY (`num_taxe`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `taxe`
--

INSERT INTO `taxe` (`num_taxe`, `nom_taxe`) VALUES
(1, 'Formation continue'),
(2, 'Apprentissage');

-- --------------------------------------------------------

--
-- Structure de la table `typologie`
--

DROP TABLE IF EXISTS `typologie`;
CREATE TABLE IF NOT EXISTS `typologie` (
  `num_entreprise` int(11) NOT NULL,
  `num_secteur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typologie`
--

INSERT INTO `typologie` (`num_entreprise`, `num_secteur`) VALUES
(1, 5),
(1, 7),
(2, 8),
(3, 4),
(3, 9),
(3, 10),
(4, 1),
(4, 5),
(4, 6),
(5, 8),
(5, 2),
(6, 1),
(7, 6),
(7, 5),
(7, 9),
(8, 10),
(8, 1),
(8, 4),
(9, 2),
(10, 10),
(10, 9),
(10, 7),
(11, 4),
(11, 8),
(12, 10),
(12, 7),
(12, 9),
(13, 4),
(13, 5),
(13, 9),
(14, 1),
(14, 8),
(15, 2),
(16, 10),
(16, 4),
(16, 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

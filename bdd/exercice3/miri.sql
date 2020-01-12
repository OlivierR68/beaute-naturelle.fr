-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 16 déc. 2019 à 08:12
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
-- Base de données :  `miri`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `Num_employe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_employe` text NOT NULL,
  `Prenom_employe` text NOT NULL,
  PRIMARY KEY (`Num_employe`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`Num_employe`, `Nom_employe`, `Prenom_employe`) VALUES
(1, 'Aron', 'Louis'),
(2, 'Berliet', 'Paul'),
(3, 'Petit', 'Eugène'),
(4, 'Gorse', 'Herbert'),
(5, 'Grimaud', 'Georges'),
(6, 'Jeanson', 'Raymond'),
(7, 'Jixe', 'Pierre'),
(8, 'Marcuse', 'Jacques'),
(9, 'Massu', 'Maurice'),
(10, 'Valès', 'Francis'),
(11, 'Wodli', 'Jules');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `Num_intervention` int(11) NOT NULL AUTO_INCREMENT,
  `Date_intervention` date NOT NULL,
  `Num_machine` int(11) NOT NULL,
  `Num_employe` int(11) NOT NULL,
  PRIMARY KEY (`Num_intervention`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`Num_intervention`, `Date_intervention`, `Num_machine`, `Num_employe`) VALUES
(1, '2016-01-05', 1, 3),
(2, '2016-01-05', 5, 1),
(3, '2016-01-11', 4, 6),
(4, '2016-01-12', 3, 2),
(5, '2016-01-14', 1, 8),
(6, '2016-01-18', 2, 1),
(7, '2016-01-19', 1, 11),
(8, '2016-01-22', 4, 4),
(9, '2016-01-24', 5, 4),
(10, '2016-01-25', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE IF NOT EXISTS `machine` (
  `Num_machine` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_machine` varchar(50) DEFAULT NULL,
  `Num_type_machine` int(11) DEFAULT NULL,
  PRIMARY KEY (`Num_machine`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `machine`
--

INSERT INTO `machine` (`Num_machine`, `Nom_machine`, `Num_type_machine`) VALUES
(1, 'Chargeuse  à godet', 2),
(2, 'Dumper girabenne', 2),
(3, 'Rouleau tandem', 1),
(4, 'Brise-roche hydrolique', 3),
(5, 'Compacteur mixte', 1),
(6, 'Chargeuse compacte', 2),
(7, 'Compacteur monocylindre', 1),
(8, 'Micropelle', 3),
(9, 'Plaque vibrante', 1),
(10, 'Minipelle', 3);

-- --------------------------------------------------------

--
-- Structure de la table `type_machine`
--

DROP TABLE IF EXISTS `type_machine`;
CREATE TABLE IF NOT EXISTS `type_machine` (
  `Num_type_machine` int(11) NOT NULL AUTO_INCREMENT,
  `Designation_type_machine` text NOT NULL,
  PRIMARY KEY (`Num_type_machine`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_machine`
--

INSERT INTO `type_machine` (`Num_type_machine`, `Designation_type_machine`) VALUES
(1, 'Compactage'),
(2, 'Remblayage'),
(3, 'Terrassement');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

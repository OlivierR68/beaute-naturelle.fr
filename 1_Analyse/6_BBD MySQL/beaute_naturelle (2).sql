-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 12 jan. 2020 à 14:19
-- Version du serveur :  8.0.18
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
-- Base de données :  `beaute_naturelle`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `categorie_id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_slug` varchar(80) NOT NULL,
  `categorie_name` varchar(120) NOT NULL,
  `categorie_description` text NOT NULL,
  PRIMARY KEY (`categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(120) NOT NULL,
  `event_slug` varchar(50) NOT NULL,
  `event_img` varchar(255) NOT NULL,
  `event_content` text NOT NULL,
  `event_create_date` date NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_state` date NOT NULL,
  `event_capacity` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `event_user`
--

DROP TABLE IF EXISTS `event_user`;
CREATE TABLE IF NOT EXISTS `event_user` (
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_user_valid` tinyint(1) NOT NULL,
  `event_user_date` date NOT NULL,
  `event_user_valid_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_libelle` varchar(120) NOT NULL,
  `img_slug` varchar(80) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `img_description` text NOT NULL,
  `img_author` varchar(50) NOT NULL,
  `img_publi_date` date NOT NULL,
  `img_validation` tinyint(1) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image_comment`
--

DROP TABLE IF EXISTS `image_comment`;
CREATE TABLE IF NOT EXISTS `image_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_date` date NOT NULL,
  `comment_last_date` date NOT NULL,
  `comment_content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `newsletter_id` int(11) NOT NULL AUTO_INCREMENT,
  `newsletter_libelle` varchar(80) NOT NULL,
  `newsletter_content` text NOT NULL,
  PRIMARY KEY (`newsletter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_libelle` varchar(120) NOT NULL,
  `permission_description` text NOT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

DROP TABLE IF EXISTS `prestation`;
CREATE TABLE IF NOT EXISTS `prestation` (
  `prestation_id` int(11) NOT NULL,
  `prestation_name` varchar(120) NOT NULL,
  `prestation_slug` varchar(80) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `prestation_description` text NOT NULL,
  `prestation_tarif` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `profil_id` int(11) NOT NULL,
  `profil_libelle` varchar(50) NOT NULL,
  `profil_description` text NOT NULL,
  PRIMARY KEY (`profil_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profil_permission`
--

DROP TABLE IF EXISTS `profil_permission`;
CREATE TABLE IF NOT EXISTS `profil_permission` (
  `profil_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_libelle` varchar(80) NOT NULL,
  `slide_bg_image` varchar(255) NOT NULL,
  `slide_banner_content` text NOT NULL,
  PRIMARY KEY (`slide_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE IF NOT EXISTS `subscriber` (
  `subscriber_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscriber_email` varchar(120) NOT NULL,
  PRIMARY KEY (`subscriber_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_pseudo` varchar(50) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_inscription_date` date NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_gender` int(11) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_tel` varchar(30) NOT NULL,
  `profil_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

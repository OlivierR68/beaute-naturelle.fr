-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 12 jan. 2020 à 12:24
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
-- Base de données :  `beaute_naturelle`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes_newsletter`
--

DROP TABLE IF EXISTS `abonnes_newsletter`;
CREATE TABLE IF NOT EXISTS `abonnes_newsletter` (
  `subscriber_id` int(11) NOT NULL,
  `subscriber_email` varchar(120) COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_slug` varchar(80) COLLATE utf32_swedish_ci NOT NULL,
  `categorie_name` varchar(120) COLLATE utf32_swedish_ci NOT NULL,
  `categorie_description` text COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evénements`
--

DROP TABLE IF EXISTS `evénements`;
CREATE TABLE IF NOT EXISTS `evénements` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(120) COLLATE utf32_swedish_ci NOT NULL,
  `event_slug` varchar(50) COLLATE utf32_swedish_ci NOT NULL,
  `event_img` varchar(255) COLLATE utf32_swedish_ci NOT NULL,
  `event_content` text COLLATE utf32_swedish_ci NOT NULL,
  `event_create_date` date NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_start` date NOT NULL,
  `event_capacity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `galerie_images`
--

DROP TABLE IF EXISTS `galerie_images`;
CREATE TABLE IF NOT EXISTS `galerie_images` (
  `img_id` int(11) NOT NULL,
  `img_libelle` varchar(120) COLLATE utf32_swedish_ci NOT NULL,
  `img_slug` varchar(80) COLLATE utf32_swedish_ci NOT NULL,
  `img_src` varchar(255) COLLATE utf32_swedish_ci NOT NULL,
  `img_description` text COLLATE utf32_swedish_ci NOT NULL,
  `img_author` varchar(50) COLLATE utf32_swedish_ci NOT NULL,
  `img_publi_date` date NOT NULL,
  `img_validation` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_libelle` varchar(80) COLLATE utf32_swedish_ci NOT NULL,
  `newsletter_content` text COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `permission_id` int(11) NOT NULL,
  `permission_libelle` varchar(120) COLLATE utf32_swedish_ci NOT NULL,
  `permission_description` text COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prestations`
--

DROP TABLE IF EXISTS `prestations`;
CREATE TABLE IF NOT EXISTS `prestations` (
  `presta_id` int(11) NOT NULL,
  `prestation_name` varchar(80) COLLATE utf32_swedish_ci NOT NULL,
  `prestation_slug` varchar(80) COLLATE utf32_swedish_ci NOT NULL,
  `prestation_description` text COLLATE utf32_swedish_ci NOT NULL,
  `prestation_tarif` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

DROP TABLE IF EXISTS `profils`;
CREATE TABLE IF NOT EXISTS `profils` (
  `profil_id` int(11) NOT NULL,
  `profil_libelle` varchar(50) COLLATE utf32_swedish_ci NOT NULL,
  `profil_description` text COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_bg_image` varchar(255) COLLATE utf32_swedish_ci NOT NULL,
  `slide_banner_content` text COLLATE utf32_swedish_ci NOT NULL,
  `slide_libelle` varchar(120) COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `user_id` int(11) NOT NULL,
  `user_pseudo` varchar(50) COLLATE utf32_swedish_ci NOT NULL,
  `user_pwd` varchar(255) COLLATE utf32_swedish_ci NOT NULL,
  `user_inscription_date` date NOT NULL,
  `user_last_name` varchar(50) COLLATE utf32_swedish_ci NOT NULL,
  `user_first_name` varchar(50) COLLATE utf32_swedish_ci NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_gender` int(11) NOT NULL,
  `user_email` varchar(30) COLLATE utf32_swedish_ci NOT NULL,
  `user_tel` varchar(30) COLLATE utf32_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

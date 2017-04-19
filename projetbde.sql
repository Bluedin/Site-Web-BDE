-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Avril 2017 à 11:49
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetbde`
--

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nom_club` varchar(500) NOT NULL,
  `description_club` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_picture` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `date_event`
--

DROP TABLE IF EXISTS `date_event`;
CREATE TABLE IF NOT EXISTS `date_event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nom_event` varchar(100) NOT NULL,
  `description_event` text NOT NULL,
  `exclu_club` tinyint(1) NOT NULL,
  `budget_total` int(9) NOT NULL,
  `image_event_presentation` varchar(200) NOT NULL,
  `budget_reel` int(9) NOT NULL,
  `recettes` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_pictures` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prénom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `promo` varchar(10) NOT NULL,
  `phrasechoc` varchar(500) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_club`
--

DROP TABLE IF EXISTS `user_club`;
CREATE TABLE IF NOT EXISTS `user_club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) NOT NULL,
  `id_club` int(5) NOT NULL,
  `role_user_club` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_event`
--

DROP TABLE IF EXISTS `user_event`;
CREATE TABLE IF NOT EXISTS `user_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(9) NOT NULL,
  `id_event` int(9) NOT NULL,
  `role_user_event` varchar(200) NOT NULL,
  `date_choisie` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

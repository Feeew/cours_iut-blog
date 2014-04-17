-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 17 Avril 2014 à 23:20
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `iut_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contenu` text CHARACTER SET latin1 NOT NULL,
  `publie` int(1) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Contenu de la table `billet`
--

INSERT INTO `billet` (`id`, `titre`, `contenu`, `publie`, `date`) VALUES
(1, 'Mon premier billet', 'Ceci est le contenu d''un billet. Eh ouais, ça dégomme hein ? ', 1, '2014-03-25 00:00:00'),
(2, 'Mon deuxieme billet', 'Ceci est le contenu de mon deuxieme billet. Ouais je sais, ce blog est genial.', 1, '2014-03-25 17:39:11'),
(12, 'Mon troisieme billet', 'Mon message (je perds l''inspiration)', 1, '2014-03-26 00:00:00'),
(24, 'test', 'test', 0, '2014-04-05 00:00:00'),
(26, 'Test1', 'test', 0, '2014-04-19 00:00:00'),
(27, 'test2', 'test2', 0, '2014-04-19 00:00:00'),
(28, 'Titre', 'message', 0, '2014-04-25 00:00:00'),
(54, 'titre', 'message', 1, '2014-04-03 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` (`id`, `libelle`) VALUES
(17, 'TAG1'),
(18, 'TAG2'),
(19, 'TAG3'),
(20, 'tag11'),
(21, 'tag21'),
(22, 'tag31');

-- --------------------------------------------------------

--
-- Structure de la table `tag_billet`
--

CREATE TABLE `tag_billet` (
  `tag_id` int(11) NOT NULL,
  `billet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tag_billet`
--

INSERT INTO `tag_billet` (`tag_id`, `billet_id`) VALUES
(17, 51),
(18, 51),
(19, 51),
(17, 52),
(18, 52),
(19, 52),
(17, 53),
(18, 53),
(19, 53),
(20, 54),
(21, 54),
(22, 54);

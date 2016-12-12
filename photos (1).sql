-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 02 Janvier 2016 à 15:36
-- Version du serveur :  5.6.24
-- Version de PHP :  5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `photos`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `depot` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_photo` int(11) NOT NULL,
  `auteur` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `contenu`, `depot`, `id_photo`, `auteur`) VALUES
(28, 'ddze', '2012-02-01 01:06:41', 20, 'raf'),
(30, 'www', '2012-02-01 01:07:02', 20, 'char'),
(35, 'c twa ? :3', '2012-02-01 01:38:54', 24, 'tahiri'),
(36, 'ioii', '2015-12-23 20:35:39', 23, 'char'),
(37, 'jllkj', '2015-12-23 20:35:47', 23, 'char'),
(38, 'lj', '2015-12-23 20:35:49', 23, 'char'),
(39, 'jllkj', '2015-12-23 20:35:59', 23, 'char'),
(40, 'jjjj', '2015-12-23 20:36:05', 23, 'char'),
(41, '', '2015-12-23 20:36:11', 23, 'char'),
(42, 'gffgfg', '2015-12-25 09:47:19', 25, 'char'),
(43, 'dddd', '2015-12-29 23:00:00', 32, 'anas');

-- --------------------------------------------------------

--
-- Structure de la table `groupes_amis`
--

CREATE TABLE IF NOT EXISTS `groupes_amis` (
  `id_groupe_amis` int(11) NOT NULL,
  `nom_groupe_amis` varchar(64) NOT NULL,
  `login_proprietaire_groupe` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupes_amis`
--

INSERT INTO `groupes_amis` (`id_groupe_amis`, `nom_groupe_amis`, `login_proprietaire_groupe`) VALUES
(1, 'best', 'raf'),
(5, 'best', 'tahiri'),
(6, 'travail', 'tahiri'),
(7, 'famille', 'tahiri'),
(8, 'Famille', 'char'),
(9, 'Amis', 'char'),
(10, 'hhhh', 'char'),
(11, 'ayoub', 'char'),
(12, 'tttt', 'char'),
(13, 'xxxxx', 'char'),
(14, 'testing', 'anas'),
(15, 'testing', 'char'),
(21, 'maroc', 'anas'),
(22, 'love', 'anas'),
(23, 'anasss', 'anas'),
(24, 'rasse taro', 'char'),
(25, 'bllb', 'char'),
(26, 'dd', 'char'),
(27, 'anasss', 'char');

-- --------------------------------------------------------

--
-- Structure de la table `groupe_utilisateurs`
--

CREATE TABLE IF NOT EXISTS `groupe_utilisateurs` (
  `id_groupe_amis` int(11) NOT NULL,
  `login` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupe_utilisateurs`
--

INSERT INTO `groupe_utilisateurs` (`id_groupe_amis`, `login`) VALUES
(1, 'tahiri'),
(5, 'raf'),
(6, 'char'),
(7, 'char'),
(7, 'raf'),
(8, 'raf'),
(8, 'tahiri'),
(9, 'raf'),
(9, 'tahiri'),
(11, 'tahiri'),
(12, 'raf'),
(12, 'tahiri'),
(21, 'anas'),
(22, 'char'),
(22, 'khawella'),
(23, 'anas'),
(23, 'char'),
(23, 'tahiri'),
(24, 'char'),
(24, 'khawella'),
(24, 'tahiri'),
(25, 'char'),
(26, 'anas'),
(26, 'khawella'),
(26, 'tahiri'),
(27, 'char'),
(27, 'tahiri');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `date_photo` date NOT NULL,
  `description` text NOT NULL,
  `proprietaire` varchar(128) NOT NULL,
  `groupe_amis` int(11) DEFAULT NULL,
  `desc_lien` varchar(64) NOT NULL,
  `contenu_lien` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `fichier`, `date_photo`, `description`, `proprietaire`, `groupe_amis`, `desc_lien`, `contenu_lien`) VALUES
(20, 'photos/5221C5C770729D666C3079660B260AF0.gif', '2012-01-12', 'Victoire\r\n	', 'tahiri', 5, '', ''),
(22, 'photos/3889b5ed109e30_full.gif', '2012-02-01', 'Killing me :/', 'char', 9, '', 'http://'),
(23, 'photos/lion.cub.c02.11.2005.jz3f8748.b-700.jpg', '2012-02-01', 'yeee', 'char', 8, 'Le père du bébé', 'http://www.zambiatourism.com/travel/wildlife/images/Lion%20-%20Busanga%20main%20pride.jpg'),
(24, 'photos/19503.jpg', '2012-01-30', 'Cool bro', 'raf', 1, '', ''),
(25, 'photos/49226.jpg', '2012-01-31', 'My friend', 'char', 8, 'Ami de mon ami', 'photo.php?id=26'),
(26, 'photos/wallpaper_cat_fond_ecran_chat_005241_.jpg', '2012-02-01', 'mon ninou', 'tahiri', 7, 'Un bon chien de la famille', 'photo.php?id=25'),
(27, 'photos/Logo.png', '2012-02-01', 'Logo', 'raf', 0, '', ''),
(28, 'photos/xp.jpg', '2016-01-31', 'fffff', 'char', 0, 'fff', 'fefee'),
(30, 'photos/11668-12349Logo_share_original_white.jpg', '2015-12-31', 'ccc', 'char', 0, 'ccc', 'cc'),
(31, 'photos/30073-4798423661-a-contre-jour-la-lumiere-est-plus-belle.jpg', '2015-12-01', 'fffff', 'anas', 0, 'ccc', 'fefee'),
(32, 'photos/17865-942212360280_924788204273548_1080392342507648173_n.jpg', '2015-12-30', 'ccc', 'anas', 0, 'fff', 'zzzz');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nom_utilisateur` varchar(30) NOT NULL,
  `prenom_utilisateur` varchar(30) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom_utilisateur`, `prenom_utilisateur`, `login`, `password`) VALUES
('anas', 'anas', 'anas', 'anas'),
('rachi', 'char', 'char', 'char'),
('khawella', 'khawella', 'khawella', '11'),
('errachidi', 'charaf', 'raf', 'raf'),
('tahiri', 'Jihane Sophia', 'tahiri', 'tahiri');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_utiliateur_commentaire` (`auteur`), ADD KEY `fk_photo_commentaire` (`id_photo`);

--
-- Index pour la table `groupes_amis`
--
ALTER TABLE `groupes_amis`
  ADD PRIMARY KEY (`id_groupe_amis`);

--
-- Index pour la table `groupe_utilisateurs`
--
ALTER TABLE `groupe_utilisateurs`
  ADD PRIMARY KEY (`id_groupe_amis`,`login`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_utiliateur_photo` (`proprietaire`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `groupes_amis`
--
ALTER TABLE `groupes_amis`
  MODIFY `id_groupe_amis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
ADD CONSTRAINT `fk_photo_commentaire` FOREIGN KEY (`id_photo`) REFERENCES `photo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_utiliateur_commentaire` FOREIGN KEY (`auteur`) REFERENCES `utilisateur` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
ADD CONSTRAINT `fk_utiliateur_photo` FOREIGN KEY (`proprietaire`) REFERENCES `utilisateur` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

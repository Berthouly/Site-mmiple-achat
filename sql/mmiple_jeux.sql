-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 23 Février 2022 à 17:48
-- Version du serveur :  10.1.48-MariaDB-0+deb9u2
-- Version de PHP :  7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mmijlandre`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `mmiple_jeux` (
  `jeu_code` int(11) NOT NULL,
  `jeu_nom` varchar(100) DEFAULT NULL,
  `jeu_editeur` varchar(100) DEFAULT NULL,
  `jeu_duree_partie` int(11) DEFAULT NULL,
  `jeu_nb_joueurs_mini` int(11) DEFAULT NULL,
  `jeu_nb_joueurs_maxi` int(11) DEFAULT NULL,
  `jeu_photo1` varchar(100) DEFAULT NULL,
  `jeu_photo2` varchar(100) DEFAULT NULL,
  `jeu_photo3` varchar(100) DEFAULT NULL,
  `jeu_prix_unit` float DEFAULT NULL,
  `jeu_qte_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `jeux`
--

INSERT INTO `mmiple_jeux` (`jeu_code`, `jeu_nom`, `jeu_editeur`, `jeu_duree_partie`, `jeu_nb_joueurs_mini`, `jeu_nb_joueurs_maxi`, `jeu_photo1`, `jeu_photo2`, `jeu_photo3`, `jeu_prix_unit`, `jeu_qte_stock`) VALUES
(1, 'Kingdomino', 'Blue orange', 30, 2, 4, 'img/jeux/kingdomino1.jpg', 'img/jeux/kingdomino2.jpg', 'img/jeux/kingdomino3.jpg', 20.99, 12),
(2, 'Cacao', 'Z-man games', 45, 2, 4, 'img/jeux/cacao1.jpg', 'img/jeux/cacao2.jpg', 'img/jeux/cacao3.jpg', 33, 17),
(4, 'Wingspan', 'Matagot', 75, 1, 5, 'img/jeux/wingspan1.jpg', 'img/jeux/wingspan2.jpg', 'img/jeux/wingspan3.jpg', 60, 8),
(11, 'Chasseurs de légendes', 'Gigamic', 45, 2, 5, 'img/jeux/chasseurs1.jpg', 'img/jeux/chasseurs2.jpg', 'img/jeux/chasseurs3.jpg', 29.5, 7),
(12, 'Carcassonne', 'Filosofia', 45, 2, 5, 'img/jeux/carcassonne1.jpg', 'img/jeux/carcassonne2.jpg', 'img/jeux/carcassonne3.jpg', 45.5, 21),
(13, 'Azul', 'Next move', 45, 2, 4, 'img/jeux/azul1.jpg', 'img/jeux/azul2.jpg', 'img/jeux/azul3.jpg', 39.9, 31);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `jeux`
--
ALTER TABLE `mmiple_jeux`
  ADD PRIMARY KEY (`jeu_code`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `mmiple_jeux`
  MODIFY `jeu_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

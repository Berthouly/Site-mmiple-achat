-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 23 Février 2022 à 17:47
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
-- Structure de la table `clients`
--

CREATE TABLE `mmiple_clients` (
  `client_code` int(11) NOT NULL,
  `client_genre` char(1) DEFAULT NULL,
  `client_prenom` varchar(100) DEFAULT NULL,
  `client_nom` varchar(100) DEFAULT NULL,
  `client_adr` varchar(200) DEFAULT NULL,
  `client_cp` varchar(20) DEFAULT NULL,
  `client_ville` varchar(100) DEFAULT NULL,
  `client_pays` varchar(60) DEFAULT NULL,
  `client_tel` varchar(30) DEFAULT NULL,
  `client_date_naiss` date DEFAULT NULL,
  `client_email` varchar(100) DEFAULT NULL,
  `client_mdp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `clients`
--

INSERT INTO `mmiple_clients` (`client_code`, `client_genre`, `client_prenom`, `client_nom`, `client_adr`, `client_cp`, `client_ville`, `client_pays`, `client_tel`, `client_date_naiss`, `client_email`, `client_mdp`) VALUES
(10, 'F', 'Anne', 'Onime', '111 rue des coquelicots', '75001', 'Paris', 'France', '07-07-07-07-07', '2003-04-24', 'anne@anonyme.fr', '$2y$11$0P4ojEOQ.0FiHvU1rVTVX.0bUcxRTiJNJilMd4dzDRQu2u9K1F0tu'),
(12, 'M', 'Jérôme', 'Landré', '9 rue de Québec', '10000', 'Troyes', 'France', '06 06 06 06 06', '1972-10-12', 'jerome.landre@univ-reims.fr', '$2y$11$g7biNmGLWxiEhdBF1FLIKOl/lU/GfeuWieu38h6qlsNH1HprCc1Hi');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `mmiple_clients`
  ADD PRIMARY KEY (`client_code`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `mmiple_clients`
  MODIFY `client_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

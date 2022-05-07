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
-- Structure de la table `acheter`
--

CREATE TABLE `mmiple_acheter` (
  `acheter_code` int(11) NOT NULL,
  `jeu_code_` int(11) NOT NULL,
  `client_code_` int(11) NOT NULL,
  `acheter_date` date NOT NULL,
  `acheter_qte` int(11) DEFAULT NULL,
  `acheter_prix_unit` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `acheter`
--

INSERT INTO `mmiple_acheter` (`acheter_code`, `jeu_code_`, `client_code_`, `acheter_date`, `acheter_qte`, `acheter_prix_unit`) VALUES
(1, 1, 12, '2020-12-16', 2, 20.99),
(2, 2, 10, '2021-02-15', 1, 33),
(3, 4, 10, '2021-02-15', 1, 60),
(4, 4, 12, '2021-02-09', 3, 60),
(5, 11, 12, '2020-12-16', 1, 29.5),
(6, 12, 12, '2021-02-02', 2, 45.5),
(7, 13, 12, '2021-02-09', 2, 39.9);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acheter`
--
ALTER TABLE `mmiple_acheter`
  ADD PRIMARY KEY (`acheter_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

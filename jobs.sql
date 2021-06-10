-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 10 juin 2021 à 20:21
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `trtp`
--

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `date_inscription` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `family_name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT '',
  `adress_plus` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone_code` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `job` varchar(255) NOT NULL,
  `contrat` varchar(255) NOT NULL,
  `availability_date` text NOT NULL,
  `letter` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `date_inscription`, `first_name`, `middle_name`, `family_name`, `adress`, `adress_plus`, `city`, `zip`, `email`, `phone_code`, `phone`, `job`, `contrat`, `availability_date`, `letter`) VALUES
(18, '2021-06-10', 'test prenom', 'test second prenom', 'test nom de famille', 'test adresse', 'test complement adresse', 'ville', 11, 'test@gmail.com', 1, 65252525, 'Soudeur-TIG', 'test type de contrat', '2021-07-01', 0x5245554e494f4e2044552031372e706466);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

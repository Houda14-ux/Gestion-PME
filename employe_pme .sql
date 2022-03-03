-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 mars 2022 à 02:21
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `employe_pme`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `Matricule` char(4) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Date` date DEFAULT NULL,
  `Departement` varchar(50) DEFAULT NULL,
  `Salaire` decimal(10,0) DEFAULT NULL,
  `Fonction` varchar(50) DEFAULT NULL,
  `Photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`Matricule`, `Nom`, `Prenom`, `Date`, `Departement`, `Salaire`, `Fonction`, `Photo`) VALUES
('5666', '', '', '2022-02-03', '', '0', '', 'images/5666.png'),
('A222', 'houda', 'sidiammi', '2022-02-04', 'A', '100000', 'admin', 'images/A222.png'),
('amal', 'amal', 'amila', '2022-03-04', 'AB', '666', 'acteur', 'images/amali.png'),
('BEEE', 'fff', 'rrrr', '2022-02-03', 'A', '0', 'admin', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD UNIQUE KEY `Matricule` (`Matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

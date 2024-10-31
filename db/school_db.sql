-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 juil. 2024 à 13:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `aemail` varchar(255) NOT NULL,
  `apassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`aemail`, `apassword`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `centre_form`
--

CREATE TABLE `centre_form` (
  `id_cen` int(11) NOT NULL,
  `nom_cen` varchar(255) NOT NULL,
  `site_cen` varchar(255) NOT NULL,
  `address_cen` varchar(255) NOT NULL,
  `email_cen` varchar(255) NOT NULL,
  `image_cen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_con` int(11) NOT NULL,
  `nom_con` varchar(255) NOT NULL,
  `telephone_con` varchar(255) NOT NULL,
  `email_con` varchar(255) NOT NULL,
  `message_con` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_con`, `nom_con`, `telephone_con`, `email_con`, `message_con`) VALUES
(5, 'fokou togoue', '693077550', 'dylanetogoue@gmail.com', 'merci');

-- --------------------------------------------------------

--
-- Structure de la table `univ_prive`
--

CREATE TABLE `univ_prive` (
  `id_up` int(11) NOT NULL,
  `nom_up` varchar(255) NOT NULL,
  `site_up` varchar(255) NOT NULL,
  `address_up` varchar(255) NOT NULL,
  `email_up` varchar(255) NOT NULL,
  `image_up` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `univ_public`
--

CREATE TABLE `univ_public` (
  `id_upb` int(11) NOT NULL,
  `nom_upb` varchar(255) NOT NULL,
  `site_upb` varchar(255) NOT NULL,
  `address_upb` varchar(255) NOT NULL,
  `email_upb` varchar(255) NOT NULL,
  `image_upb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `nom_u` varchar(255) NOT NULL,
  `email_u` varchar(255) NOT NULL,
  `password_u` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_u`, `nom_u`, `email_u`, `password_u`) VALUES
(1, 'DILAN TOGOUE', 'dylanetogoue@gmail.com', 'azerty'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `webuser`
--

CREATE TABLE `webuser` (
  `email` varchar(255) NOT NULL,
  `usertype` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `webuser`
--

INSERT INTO `webuser` (`email`, `usertype`) VALUES
('admin@admin.com', 'a'),
('dylanetogoue@gmail.com', 'u'),
('', 'u');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `centre_form`
--
ALTER TABLE `centre_form`
  ADD PRIMARY KEY (`id_cen`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_con`);

--
-- Index pour la table `univ_prive`
--
ALTER TABLE `univ_prive`
  ADD PRIMARY KEY (`id_up`);

--
-- Index pour la table `univ_public`
--
ALTER TABLE `univ_public`
  ADD PRIMARY KEY (`id_upb`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `centre_form`
--
ALTER TABLE `centre_form`
  MODIFY `id_cen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `univ_prive`
--
ALTER TABLE `univ_prive`
  MODIFY `id_up` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `univ_public`
--
ALTER TABLE `univ_public`
  MODIFY `id_upb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

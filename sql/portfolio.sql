-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 27 oct. 2017 à 16:58
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `Nom`, `Prenom`, `Email`, `Messages`) VALUES
(1, 'SOMMEIL', 'ludovic', 'ludovic.sommeil@gmail.com', 'A la recherche du bonheur.'),
(2, 'BONOBO', 'Momo', 'momo.bonobo@gmail.com', 'A la recherche du bonheur.'),
(3, 'LAMINE', 'Chow-boy', 'chow-boy.lamine@gmail.com', 'A la recherche du bonheur.'),
(4, 'BIG', 'Small', 'small.big@gmail.com', 'A la recherche du bonheur.'),
(6, 'KAKA', 'Sergo', 'sergo.kaka@gmail.com', 'A la recherche du bonheur.'),
(8, 'LOCAUX', 'Tifany', 'tifany.locaux@gmail.com', 'A la rcherche du bonheur.'),
(10, 'LOLITA', 'Kimie', 'kimie.lolita@gmail.com', 'A la recherche du bonheur.'),
(12, 'CARAMADE', 'Lucien', 'lucien.camarade@gmail.com', 'A la recherche du bonheur.'),
(14, 'KFC', 'Monsieur', 'monsieur.kfc@gmail.com', 'A la recherche du bonheur.'),
(16, 'MONUT', 'kola', 'kola.manut.@gmail.com', 'A la recherche du bonheur.'),
(17, 'BOLOGNE', 'Seine', 'seine.bologne@gmail.com', 'A la recherche du bonheur.'),
(20, 'MOLOSSE', 'Kevin', 'kevin.molosse@gmail.com', 'A la recherche du bonheur.'),
(21, 'GOUBIN', 'Nanou', 'nanou.goubin@gmail.com', 'A la rechercher du bonheur.'),
(23, 'APATOU', 'Joseph', 'joseph.apatou@gmail.com', 'A la rechercher du bonheur.'),
(35, '', '', '', ''),
(43, 'LOPATI', 'Marvin', 'marvin.lopati@gmail.com', 'A la recherche du bonheur.'),
(48, 'LARALO', 'Cola', 'cola.laralo@gmail.com', 'A la recherche du bonheur.'),
(72, 'LAURENTS', 'James', 'james.laurents@gmail.com', 'A la recherche du bonheur.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 19 mars 2018 à 11:00
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_cd`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `maps`
--

CREATE TABLE `maps` (
  `map_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `maps`
--

INSERT INTO `maps` (`map_id`, `user_id`) VALUES
(1, 0),
(4, 7);

-- --------------------------------------------------------

--
-- Structure de la table `map_to_template`
--

CREATE TABLE `map_to_template` (
  `map_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pois`
--

CREATE TABLE `pois` (
  `poi_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `content` text,
  `picture` int(11) DEFAULT NULL,
  `url` text,
  `map_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pois`
--

INSERT INTO `pois` (`poi_id`, `name`, `lat`, `lng`, `content`, `picture`, `url`, `map_id`) VALUES
(43, 'La Jurasserie Fine', 48.8855, 2.33576, '6 bus rue de Ravignan - 75018 - Paris', NULL, NULL, 1),
(44, 'Chez Charlicot', 48.8615, 2.37262, '6 rue de la Folie-Méricourt - 75011 Paris', NULL, NULL, 1),
(46, 'Chez l\'Auvergnat', 2.37175, 48.8648, '60 rue Oberkampf - 75011 Paris', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `templates`
--

CREATE TABLE `templates` (
  `template_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `user_role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `user_role`) VALUES
(0, '', '', 'admin'),
(7, 'etiendo', 'mdp', ''),
(8, 'etienne', 'mdp2', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`map_id`),
  ADD KEY `poi_id` (`user_id`);

--
-- Index pour la table `map_to_template`
--
ALTER TABLE `map_to_template`
  ADD KEY `map_id` (`map_id`),
  ADD KEY `template_id` (`template_id`);

--
-- Index pour la table `pois`
--
ALTER TABLE `pois`
  ADD PRIMARY KEY (`poi_id`),
  ADD KEY `map_id` (`map_id`);

--
-- Index pour la table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `maps`
--
ALTER TABLE `maps`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `pois`
--
ALTER TABLE `pois`
  MODIFY `poi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT pour la table `templates`
--
ALTER TABLE `templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `maps_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `map_to_template`
--
ALTER TABLE `map_to_template`
  ADD CONSTRAINT `map_to_template_ibfk_1` FOREIGN KEY (`template_id`) REFERENCES `templates` (`template_id`),
  ADD CONSTRAINT `map_to_template_ibfk_2` FOREIGN KEY (`map_id`) REFERENCES `maps` (`map_id`);

--
-- Contraintes pour la table `pois`
--
ALTER TABLE `pois`
  ADD CONSTRAINT `pois_ibfk_1` FOREIGN KEY (`map_id`) REFERENCES `maps` (`map_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

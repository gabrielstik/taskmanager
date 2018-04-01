-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  Dim 01 avr. 2018 à 23:50
-- Version du serveur :  5.6.38
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `tasques`
--

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `related_wall` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `is_done` tinyint(1) NOT NULL,
  `deadline` int(11) NOT NULL,
  `priority` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `related_wall`, `title`, `is_done`, `deadline`, `priority`) VALUES
(49, '5', 'Sortir Sudo', 0, 1523222198, 0),
(50, '6', 'Préparer les partiels', 0, 1523222160, 3),
(51, '6', 'Corriger les devoirs', 1, 1523222214, 0),
(54, '6', 'Préparer la semaine API', 0, 1523222293, 0),
(55, '5', 'Finir mon projet', 1, 1523222280, 1),
(56, '7', 'Que faire cet été ?', 0, 1523222337, 0),
(57, '8', 'afezrgetr', 0, 1523222444, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(6, 'suzuki', '$2y$10$BTi/WhbWEOtzTNBwDFe/me3IyvFeoGiWE4P5wEYgS/VU2O3WlAkVq');

-- --------------------------------------------------------

--
-- Structure de la table `walls`
--

CREATE TABLE `walls` (
  `id` int(11) NOT NULL,
  `wall` varchar(50) NOT NULL,
  `related_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `walls`
--

INSERT INTO `walls` (`id`, `wall`, `related_user`) VALUES
(5, 'Perso', 'suzuki'),
(6, 'HETIC', 'suzuki'),
(7, 'Vacances', 'suzuki');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `walls`
--
ALTER TABLE `walls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `walls`
--
ALTER TABLE `walls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

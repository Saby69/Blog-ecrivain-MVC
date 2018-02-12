-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 09 Février 2018 à 07:23
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog-jf-ecrivain`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `alert` int(11) NOT NULL DEFAULT '1',
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `alert`, `author`, `comment`, `comment_date`) VALUES
(26, 2, 3, 'Saby', 'blabla', '2018-01-21 07:50:52'),
(8, 1, 2, 'Saby', 'Test', '2018-01-19 17:46:21'),
(10, 1, 1, 'Saby', 'test', '2018-01-19 17:49:53'),
(11, 1, 2, 'Saby', 'Test3', '2018-01-19 17:54:54'),
(12, 1, 3, 'Saby', 'Test5', '2018-01-19 17:56:38'),
(14, 1, 3, 'Saby', 'test9', '2018-01-20 12:04:51'),
(39, 1, 3, 'Sab', 'Test', '2018-01-25 08:04:33'),
(40, 1, 2, 'fff', 'fff', '2018-01-25 12:46:16'),
(41, 10, 2, 'Saby', 'Test', '2018-01-25 17:07:07'),
(42, 10, 2, 'Saby', 'ldk djlkds', '2018-01-25 17:49:48'),
(43, 10, 3, 'Saby', 'Test 3', '2018-01-25 17:50:49'),
(44, 1, 2, 'Raffi', 'alert test', '2018-01-31 15:34:56'),
(45, 2, 2, 'qqqqq', 'qqqqqq', '2018-01-31 17:39:07'),
(46, 1, 3, 'Mario', 'ffdsf fbvbvc', '2018-01-31 18:48:32'),
(52, 16, 1, 'QQQ', 'qqqq', '2018-02-07 17:56:16'),
(48, 1, 1, 'QQQQ', 'qqq', '2018-01-31 19:03:26'),
(53, 21, 2, 'vv', 'vvv', '2018-02-08 06:41:33'),
(54, 21, 1, 'Saby', 'Test bouton', '2018-02-08 07:05:29'),
(55, 21, 1, 'Saby', 'Test mentorat', '2018-02-08 08:22:28');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'Jean Forteroche',
  `datecreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author`, `datecreation`) VALUES
(21, 'Titre', '<p>fdffd</p>', 'Jean Forteroche', '2018-02-08 06:35:40');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'Saby', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

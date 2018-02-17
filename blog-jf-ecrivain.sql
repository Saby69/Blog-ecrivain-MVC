-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 17 Février 2018 à 09:56
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

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
(58, 23, 2, 'Astérix Épéril', 'Oh la la !!! ', '2018-02-14 11:02:41'),
(10, 1, 1, 'Saby', 'test', '2018-01-19 17:49:53'),
(59, 24, 3, 'Daisy Des Rata', 'J\'aime beaucoup le lorem ipsum !!!', '2018-02-14 11:03:47'),
(60, 24, 1, 'Ella Lapêche', 'C\'est nul !!!', '2018-02-14 11:04:38'),
(61, 24, 1, 'Eva Porée', 'Mais ou suis je ?', '2018-02-14 11:05:01'),
(62, 26, 1, 'Guy Tar', 'J\'aime ce coté chantant de l\'écriture !!!', '2018-02-14 11:05:42'),
(52, 16, 1, 'QQQ', 'qqqq', '2018-02-07 17:56:16'),
(48, 1, 1, 'QQQQ', 'qqq', '2018-01-31 19:03:26'),
(56, 23, 1, 'Jean Aymar', 'Bravo j\'adore votre style !!', '2018-02-14 11:00:54'),
(63, 23, 1, 'Saby', 'Test', '2018-02-15 08:08:17'),
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
(27, 'Chapitre 5', '<p>Iam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.</p>\r\n<p>Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus, et Serenianus dignus exsecratione cunctorum, innoxius, modo non reclamante publico vigore, discessit.</p>\r\n<p>Horum adventum praedocti speculationibus fidis rectores militum tessera data sollemni armatos omnes celeri eduxere procursu et agiliter praeterito Calycadni fluminis ponte, cuius undarum magnitudo murorum adluit turres, in speciem locavere pugnandi. neque tamen exiluit quisquam nec permissus est congredi. formidabatur enim flagrans vesania manus et superior numero et ruitura sine respectu salutis in ferrum.</p>', 'Jean Forteroche', '2018-02-14 10:58:41'),
(23, 'Chapitre 1', '<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. quam Constantina exultans ut in tuto iam locata mariti salute muneratam vehiculoque inpositam per regiae ianuas emisit in publicum, ut his inlecebris alios quoque ad indicanda proliceret paria vel maiora.</p>\r\n<p>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.</p>\r\n<p>Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</p>', 'Jean Forteroche', '2018-02-14 10:54:00'),
(24, 'Chapitre 2', '<p>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.</p>\r\n<p>Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</p>\r\n<p>Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.</p>', 'Jean Forteroche', '2018-02-14 10:54:52'),
(25, 'Chapitre 3', '<p>Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</p>\r\n<p>Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.</p>\r\n<p>Tempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem.</p>', 'Jean Forteroche', '2018-02-14 10:56:04'),
(29, 'Chapitre 4', '<p>Quod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.</p>\r\n<p>&nbsp;</p>\r\n<p>Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia montium petiere celsorum.</p>\r\n<p>&nbsp;</p>\r\n<p>Victus universis caro ferina est lactisque abundans copia qua sustentantur, et herbae multiplices et siquae alites capi per aucupium possint, et plerosque mos vidimus frumenti usum et vini penitus ignorantes.</p>', 'Jean Forteroche', '2018-02-14 17:02:26');

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
(1, 'Saby', '$2y$10$w6vth4XSySr1aJNitYTNxuPfv0qEg3UGYXUJW3rakOuI3ar/ZO/BO');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

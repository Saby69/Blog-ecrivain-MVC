-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Janvier 2018 à 14:23
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
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(26, 2, 'Saby', 'blabla', '2018-01-21 07:50:52'),
(8, 1, 'Saby', 'Test', '2018-01-19 17:46:21'),
(10, 1, 'Saby', 'test', '2018-01-19 17:49:53'),
(11, 1, 'Saby', 'Test3', '2018-01-19 17:54:54'),
(12, 1, 'Saby', 'Test5', '2018-01-19 17:56:38'),
(14, 1, 'Saby', 'test9', '2018-01-20 12:04:51');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `datecreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author`, `datecreation`) VALUES
(1, 'Chapitre 1', 'Quis enim aut eum diligat quem metuat, aut eum a quo se metui putet? Coluntur tamen simulatione dumtaxat ad tempus. Quod si forte, ut fit plerumque, ceciderunt, tum intellegitur quam fuerint inopes amicorum. Quod Tarquinium dixisse ferunt, tum exsulantem se intellexisse quos fidos amicos habuisset, quos infidos, cum iam neutris gratiam referre posset.\r\n\r\nEx turba vero imae sortis et paupertinae in tabernis aliqui pernoctant vinariis, non nulli velariis umbraculorum theatralium latent, quae Campanam imitatus lasciviam Catulus in aedilitate sua suspendit omnium primus; aut pugnaciter aleis certant turpi sono fragosis naribus introrsum reducto spiritu concrepantes; aut quod est studiorum omnium maximum ab ortu lucis ad vesperam sole fatiscunt vel pluviis, per minutias aurigarum equorumque praecipua vel delicta scrutantes.\r\n\r\nUt enim quisque sibi plurimum confidit et ut quisque maxime virtute et sapientia sic munitus est, ut nullo egeat suaque omnia in se ipso posita iudicet, ita in amicitiis expetendis colendisque maxime excellit. Quid enim? Africanus indigens mei? Minime hercule! ac ne ego quidem illius; sed ego admiratione quadam virtutis eius, ille vicissim opinione fortasse non nulla, quam de meis moribus habebat, me dilexit; auxit benevolentiam consuetudo. Sed quamquam utilitates multae et magnae consecutae sunt, non sunt tamen ab earum spe causae diligendi profectae.\r\n\r\nPost emensos insuperabilis expeditionis eventus languentibus partium animis, quas periculorum varietas fregerat et laborum, nondum tubarum cessante clangore vel milite locato per stationes hibernas, fortunae saevientis procellae tempestates alias rebus infudere communibus per multa illa et dira facinora Caesaris Galli, qui ex squalore imo miseriarum in aetatis adultae primitiis ad principale culmen insperato saltu provectus ultra terminos potestatis delatae procurrens asperitate nimia cuncta foedabat. propinquitate enim regiae stirpis gentilitateque etiam tum Constantini nominis efferebatur in fastus, si plus valuisset, ausurus hostilia in auctorem suae felicitatis, ut videbatur.\r\n\r\nInter quos Paulus eminebat notarius ortus in Hispania, glabro quidam sub vultu latens, odorandi vias periculorum occultas perquam sagax. is in Brittanniam missus ut militares quosdam perduceret ausos conspirasse Magnentio, cum reniti non possent, iussa licentius supergressus fluminis modo fortunis conplurium sese repentinus infudit et ferebatur per strages multiplices ac ruinas, vinculis membra ingenuorum adfligens et quosdam obterens manicis, crimina scilicet multa consarcinando a veritate longe discreta. unde admissum est facinus impium, quod Constanti tempus nota inusserat sempiterna.\r\n\r\nHaec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.\r\n\r\nOportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.\r\n\r\nUnde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.\r\n\r\nPost quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.\r\n\r\nIamque non umbratis fallaciis res agebatur, sed qua palatium est extra muros, armatis omne circumdedit. ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum Polam, ubi quondam peremptum Constantini filium accepimus Crispum.', 'Jean Forteroche', '2017-12-27 00:00:00'),
(2, 'Chapitre 2', 'Ex turba vero imae sortis et paupertinae in tabernis aliqui pernoctant vinariis, non nulli velariis umbraculorum theatralium latent, quae Campanam imitatus lasciviam Catulus in aedilitate sua suspendit omnium primus; aut pugnaciter aleis certant turpi sono fragosis naribus introrsum reducto spiritu concrepantes; aut quod est studiorum omnium maximum ab ortu lucis ad vesperam sole fatiscunt vel pluviis, per minutias aurigarum equorumque praecipua vel delicta scrutantes.\r\n\r\nUt enim quisque sibi plurimum confidit et ut quisque maxime virtute et sapientia sic munitus est, ut nullo egeat suaque omnia in se ipso posita iudicet, ita in amicitiis expetendis colendisque maxime excellit. Quid enim? Africanus indigens mei? Minime hercule! ac ne ego quidem illius; sed ego admiratione quadam virtutis eius, ille vicissim opinione fortasse non nulla, quam de meis moribus habebat, me dilexit; auxit benevolentiam consuetudo. Sed quamquam utilitates multae et magnae consecutae sunt, non sunt tamen ab earum spe causae diligendi profectae.\r\n\r\nPost emensos insuperabilis expeditionis eventus languentibus partium animis, quas periculorum varietas fregerat et laborum, nondum tubarum cessante clangore vel milite locato per stationes hibernas, fortunae saevientis procellae tempestates alias rebus infudere communibus per multa illa et dira facinora Caesaris Galli, qui ex squalore imo miseriarum in aetatis adultae primitiis ad principale culmen insperato saltu provectus ultra terminos potestatis delatae procurrens asperitate nimia cuncta foedabat. propinquitate enim regiae stirpis gentilitateque etiam tum Constantini nominis efferebatur in fastus, si plus valuisset, ausurus hostilia in auctorem suae felicitatis, ut videbatur.\r\n\r\nInter quos Paulus eminebat notarius ortus in Hispania, glabro quidam sub vultu latens, odorandi vias periculorum occultas perquam sagax. is in Brittanniam missus ut militares quosdam perduceret ausos conspirasse Magnentio, cum reniti non possent, iussa licentius supergressus fluminis modo fortunis conplurium sese repentinus infudit et ferebatur per strages multiplices ac ruinas, vinculis membra ingenuorum adfligens et quosdam obterens manicis, crimina scilicet multa consarcinando a veritate longe discreta. unde admissum est facinus impium, quod Constanti tempus nota inusserat sempiterna.\r\n\r\nHaec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.\r\n\r\nOportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.\r\n\r\nUnde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.\r\n\r\nPost quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae singula narrare non refert, me professione modum, quod evitandum est, excedamus.\r\n\r\nIamque non umbratis fallaciis res agebatur, sed qua palatium est extra muros, armatis omne circumdedit. ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum Polam, ubi quondam peremptum Constantini filium accepimus Crispum.', 'Jean Forteroche', '2017-12-28 00:00:00'),
(3, 'Chapitre 3', 'Nullam ut dignissim justo. Nulla venenatis massa sit amet finibus pulvinar. Pellentesque eget pharetra sem. In sit amet auctor dui, id cursus massa. Quisque tincidunt, tortor at tempor consectetur, nibh arcu lacinia ligula, eget porta erat erat ut risus. Nullam dictum est ante, sit amet vehicula nibh varius sed. Sed in libero scelerisque tortor tincidunt pretium quis quis ex. Mauris ultricies, purus congue mattis lobortis, nulla odio tempus justo, a porttitor dolor neque quis ipsum. Suspendisse potenti. Cras semper lectus et ultrices accumsan. Donec lobortis non eros non vulputate.\r\n\r\nPraesent consectetur nulla a quam sodales fringilla. Nunc imperdiet sed mi vel mattis. Phasellus interdum, elit mattis tristique varius, nisi odio laoreet arcu, vel euismod turpis tortor sit amet ligula. Praesent ornare commodo fringilla. Proin magna odio, faucibus sit amet rhoncus et, volutpat nec augue. Aenean sodales libero a risus malesuada, dictum congue eros gravida. Mauris dapibus libero eget leo lobortis, eget consectetur dui fermentum. Nulla pharetra diam lectus, et fermentum ligula rutrum sit amet. Mauris et justo ac tortor molestie consequat. Aliquam at neque dui. Nam sit amet auctor mi. Etiam eu magna iaculis, aliquam sapien volutpat, consequat ipsum. Vivamus eu posuere mauris, eget fringilla massa. Pellentesque vel mauris eros. Cras luctus cursus ipsum in convallis.', '', '2018-01-21 08:27:58'),
(4, 'Chapitre 4', 'Integer elementum tortor et consequat tristique. Cras accumsan nisi tincidunt lorem ullamcorper, ac mollis tortor rhoncus. Cras malesuada viverra tellus sit amet consectetur. Nulla at elit vel felis viverra cursus sed vel risus. Integer condimentum purus quis sapien ornare viverra. Suspendisse potenti. Nulla facilisi. Mauris posuere augue vestibulum odio consequat tempor. Vestibulum aliquet tellus ut turpis rhoncus fermentum.\r\n\r\nMorbi mauris nulla, maximus vitae dolor sed, tempus laoreet tortor. Vivamus euismod lacinia tortor, nec suscipit sem condimentum vel. Nunc quis interdum magna. Maecenas ut enim dolor. Mauris condimentum leo eget augue congue, in iaculis enim luctus. Nulla imperdiet dui quis ex vulputate aliquet. Nam dignissim urna arcu, vitae fermentum turpis efficitur at. Vestibulum cursus nisi metus. Praesent et elit non massa gravida posuere cursus id purus. Proin non metus eget lorem accumsan sagittis at vitae arcu. Quisque mi ante, volutpat ac sapien non, volutpat condimentum leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi hendrerit congue mauris, sit amet fermentum nunc lobortis in. Duis nibh est, semper ac diam in, placerat dignissim metus. Pellentesque blandit mauris ligula, ac convallis risus lacinia quis.', '', '2018-01-21 08:29:31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

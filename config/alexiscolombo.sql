-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : carbonecnm4l3x1s.mysql.db
-- Généré le :  mar. 10 oct. 2017 à 18:51
-- Version du serveur :  5.6.34-log
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `carbonecnm4l3x1s`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `post_date` datetime NOT NULL,
  `image_name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `post_date`, `image_name`) VALUES
(1, 'Le premier billet de mon blog !', 'Je sens que je vais m\'amuser avec ce TP.  \r\nCa va être plus coton que le chat, vous pensez ? Et ben on verra.', '2017-08-04 09:06:31', ''),
(2, 'Le deuxieme billet de mon blog !', 'En fait je pense que ca va bien se passer. J\'ai bien compris tout ce qu\'on avait besoin pour le chat, et on a ajouté juste les fonctions SQL qui ne sont pas compliquées. Alors ça devrait aller.', '2017-08-04 10:53:31', ''),
(3, 'Et ben je pense qu\'on maitrise bien SQL', 'Encore un nouveau TP finit, avec les bonus aussi ^^', '2017-08-07 17:43:50', ''),
(4, 'Il me faut 6 billets', 'Comme ça je peux tester la pagination', '2017-08-07 17:44:35', ''),
(5, '5ème billet', 'On y est presque, je pense que ça va être bon !', '2017-08-07 17:45:11', ''),
(6, 'Et le 6ème billet', 'C\'est LE moment tant attendu. On croise les doigts !', '2017-08-07 17:45:55', ''),
(8, 'Un billet crÃ©Ã© avec l\'administration du blog !', 'J\'avoue que je me sens gÃ©nial d\'arriver Ã  faire Ã§Ã  !', '2017-08-08 15:14:01', ''),
(12, 'Billet modifiÃ© avec l\'admin !', 'Et je peux changer le texte aussi ! Ã©', '2017-08-08 15:25:31', '3mundi.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `method` text COLLATE utf8_bin NOT NULL,
  `image_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `video` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `method`, `image_name`, `video`) VALUES
(51, 'Chroniques Nephrim', 'Illustration', 'CrÃ©ation d\'une illustration heroic fantasy, illustration d\'un scÃ©nario.', 'crypt.jpg', ''),
(49, 'Ork', 'Illustration', 'CrÃ©ation d\'une illustration heroic fantasy.', 'ork.jpg', ''),
(3, 'SpaceOrigin', 'Affiche publicitaire', 'CrÃ©ation d\'une affiche pour le jeu SpaceOrigin.', 'affiche_so.jpg', ''),
(1, 'Instrumentarium Ambulant', 'CrÃ©ation d\'une illustration pour la dÃ©coration d\'une fourgonette.', 'Croquis et line avec Clip Studio paint, colorisation avec Photoshop et Afinity designer', 'instrumentarium_ambulant.jpg', ''),
(2, 'Affiche Faral', 'Communication sur lieu de vente', 'CrÃ©ation d\'une affiche pour la sociÃ©tÃ© de conseil et formation en sÃ©curitÃ©, Faral.', 'faral_affiche.jpg', ''),
(50, 'Ludospherik', 'Boutique en ligne', 'CrÃ©ation de la charte graphique de la boutique prestashop Ludospherik. Modification d\'un thÃ¨me, paramÃ©trage de modules et SAV.', 'ludospherik.jpg', ''),
(4, '3mundi', 'VidÃ©o de prÃ©sentation de services', 'CrÃ©ation du design et rÃ©alisation de l\'animation des diffÃ©rents plans.', '3mundi.jpg', 'https://vimeo.com/224638317'),
(45, 'Voyages SNCF', 'Jeu concours en partenariat avec Ducasse', 'CrÃ©ation de la charte graphique d\'un jeu concours. Mise en page des diffÃ©rentes maquettes et crÃ©ation du gameplay.', 'sncf_ducasse.jpg', ''),
(47, 'Toys\'R\'Us', 'Jeu concours', 'CrÃ©ation de la charte graphique en adÃ©quation avec la licence. Mise en page des diffÃ©rentes maquettes, suivit de leur intÃ©gration HTML5/CCS3.', 'tru_minions.jpg', ''),
(52, 'Ysandel', 'Boutique en ligne', 'CrÃ©ation de la charte graphique de la boutique prestashop Ysandel. Modification d\'un thÃ¨me, paramÃ©trage de modules et SAV.', 'ysandel.jpg', ''),
(53, 'Qatar Airways', 'Jeu concours', 'CrÃ©ation de la charte graphique d\'un jeu concours. Mise en page des diffÃ©rentes maquettes et crÃ©ation du gameplay. Jeu traduit en plus de 10 langues.', 'qatar_premierjeu.jpg', ''),
(54, 'Toys\'R\'Us', 'Jeu concours Lego', 'CrÃ©ation de la charte graphique en adÃ©quation avec la licence. Mise en page des diffÃ©rentes maquettes, suivit de leur intÃ©gration.', 'tru_lego.jpg', ''),
(55, 'Roady', 'Supports de communication', 'Mise en page des diffÃ©rents supports de communication pour une campagne nationale, suivant une charte donnÃ©e. Siteweb, affiche, urne, guirlande, flyer, encart pub.', 'roady.jpg', ''),
(56, 'Le Gaulois', 'Jeu web', 'CrÃ©ation de la charte graphique d\'un gameplay de crÃ©ation de recette.', 'legaulois.jpg', ''),
(57, 'Viking', 'Illustration', 'CrÃ©ation d\'une illustration sur le thÃ¨me des vikings.', 'viking.jpg', ''),
(58, 'Nectar de Com', 'VidÃ©o de fin d\'annÃ©e', 'CrÃ©ation du design et rÃ©alisation de l\'animation des diffÃ©rents plans.', 'video.jpg', 'https://vimeo.com/150884877'),
(59, 'GRT Gaz', 'Illustrations', 'CrÃ©ation d\'illustrations pour les supports de formation suivant un thÃ¨me donnÃ©.', 'grt_gaz.jpg', ''),
(60, 'Leclerc Drive', 'Jeu concours', 'CrÃ©ation de la charte graphique de l\'Ã©vÃ¨nement national. Mise en pages des maquettes des diffÃ©rentes pages du site responsive, crÃ©ation d\'affiche et de banniÃ¨res pub.', 'leclerc_drive.jpg', ''),
(61, 'MusÃ©e Giverny', 'Charte graphique', 'CrÃ©ation de la charte graphique et mise en page des diffÃ©rents Ã©crans de l\'application, crÃ©ation d\'un set d\'icÃ´nes.', 'giverny_appli_jardin.jpg', ''),
(62, 'Culturogame', 'Jeu Ã©ducatif sur les musÃ©es disponible sur les Ã©crans tactiles des abris-bus.', 'CrÃ©ation de la charte graphique et mise en page des diffÃ©rents Ã©crans de l\'application. Charte dÃ©clinable sur tablette.', 'culturogame.jpg', ''),
(63, 'Carrefour banque', 'Jeu concours', 'CrÃ©ation des maquettes des diffÃ©rentes pages en suivant une charte graphique donnÃ©es, crÃ©ation graphique du gameplay faÃ§on &quot;Fruits ninja&quot; et intÃ©gration du mini-site responsive.', 'carefour_zeco.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_bin NOT NULL,
  `browser` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `browser`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.80'),
(2, '2a01:cb1c:129:2f00:c8bf:645c:3029:afe6', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.80'),
(3, '2a01:cb1c:129:2f00:c144:f376:2acc:4789', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36'),
(4, '167.114.228.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:51.0) Gecko/20100101 Firefox/51.0'),
(5, '46.70.194.86', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(6, '69.50.234.142', 'Mozilla/5.0 (compatible; MixrankBot; crawler@mixrank.com)'),
(7, '41.102.16.105', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(8, '54.71.118.127', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36'),
(9, '199.58.86.211', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)'),
(10, '180.76.15.157', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(11, '180.76.15.31', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(12, '170.79.220.51', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(13, '37.9.169.21', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.99 Safari/533.4'),
(14, '68.180.229.116', 'Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)'),
(15, '180.76.15.7', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(16, '105.174.5.246', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(17, '213.251.182.102', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.0.6) Gecko/20060728 Firefox/1.5'),
(18, '202.46.51.36', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36'),
(19, '182.65.34.103', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(20, '69.30.205.218', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.7; http://mj12bot.com/)'),
(21, '66.249.76.120', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(22, '66.249.66.21', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(220, '164.132.163.131', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:19.0) Gecko/20100101 Firefox/19.0'),
(23, '79.177.70.193', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(24, '80.211.200.51', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; .NET CLR 1.0.3705;)'),
(25, '39.40.156.78', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(26, '199.58.86.209', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)'),
(27, '66.249.76.121', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(61, '107.150.62.138', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)'),
(28, '180.76.15.28', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(29, '81.251.87.118', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_3 like Mac OS X) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.0 Mobile/14G60 Safari/602.1'),
(30, '66.249.76.119', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(31, '2a01:e35:8bd6:7960:99c7:a4e8:628e:306f', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.91 Safari/537.36'),
(32, '78.210.102.84', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(33, '163.172.4.153', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36'),
(34, '204.79.180.8', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0;  Trident/5.0)'),
(57, '160.120.32.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36'),
(35, '202.46.49.110', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36'),
(36, '109.228.253.102', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(37, '180.76.15.151', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(38, '66.249.66.154', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(39, '220.181.51.88', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36'),
(40, '123.125.71.80', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(41, '2a01:cb08:89ac:f100:a00:27ff:fe14:b4ae', 'Mozilla/5.0 ;Windows NT 6.1; WOW64; Trident/7.0; rv:11.0; like Gecko'),
(42, '162.210.196.130', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)'),
(43, '41.136.220.116', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(44, '54.241.155.9', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36'),
(45, '54.153.121.92', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36'),
(46, '183.87.114.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:50.0) Gecko/20100101 Firefox/50.0'),
(47, '180.76.15.141', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(48, '36.78.40.13', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(49, '138.19.223.13', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(50, '139.226.144.35', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.1; .NET CLR 2.0.50727'),
(51, '108.59.8.70', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)'),
(52, '180.76.15.143', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(53, '37.58.148.116', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36'),
(54, '123.236.91.20', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(55, '54.226.136.93', 'CheckMarkNetwork/1.0 (+http://www.checkmarknetwork.com/spider.html)'),
(56, '180.76.15.159', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(58, '91.121.83.160', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36'),
(59, '156.208.7.161', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(60, '66.249.66.23', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(96, '180.76.15.22', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(62, '31.50.90.48', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(63, '66.249.66.22', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(64, '40.77.167.4', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)'),
(65, '90.31.130.114', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(66, '40.77.167.62', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)'),
(67, '194.187.170.108', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(68, '41.225.29.229', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(69, '2a00:f41:4875:cbea:942b:20a4:1f78:d34c', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(70, '81.254.205.15', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(71, '2800:810:503:2e5:5042:82a8:6631:1443', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(72, '92.103.115.30', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'),
(73, '45.40.127.80', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'),
(74, '194.187.170.113', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(75, '37.79.252.242', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(76, '189.38.191.254', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(77, '162.210.196.98', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)'),
(78, '109.127.66.231', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(79, '63.250.30.59', '=Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16'),
(80, '203.206.66.19', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(81, '66.249.76.60', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(82, '194.187.170.138', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(83, '193.104.54.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36'),
(84, '2a01:cb1c:129:2f00:c8a4:8d83:3b85:dd83', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.80'),
(85, '51.255.93.6', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.80'),
(86, '180.76.15.158', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(87, '5.36.96.39', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(88, '194.187.170.104', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(89, '146.255.78.133', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(90, '180.76.15.23', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(91, '180.76.15.16', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(92, '177.247.107.15', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(93, '180.76.15.14', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(94, '99.241.232.136', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(95, '77.31.93.29', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(97, '2.86.127.66', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(98, '112.198.77.46', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(99, '2602:306:c51a:2920:39e4:c83d:baff:37ab', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(100, '181.143.217.162', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(101, '160.178.182.109', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36'),
(102, '1.36.253.162', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(103, '141.8.142.96', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)'),
(104, '188.142.254.61', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(105, '172.82.186.170', 'Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko'),
(106, '180.76.15.5', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(107, '180.76.15.12', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(108, '37.17.172.122', 'Mozilla/5.0 (X11; Linux x86_64; rv:54.0) Gecko/20100101 Firefox/54.0'),
(109, '180.76.15.21', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(110, '192.187.101.194', 'Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko'),
(111, '180.76.15.154', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(112, '54.145.58.47', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB6 (.NET CLR 3.5.30729)'),
(113, '13.114.37.235', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB6 (.NET CLR 3.5.30729)'),
(114, '46.229.170.197', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(115, '84.19.181.25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(116, '103.11.162.35', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(117, '172.82.184.162', 'Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko'),
(118, '180.76.15.33', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(119, '13.229.116.232', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB6 (.NET CLR 3.5.30729)'),
(120, '212.83.38.202', 'Mozilla/5.0 (Windows NT 5.1; rv:40.0) Gecko/20100101 Firefox/40.0'),
(121, '155.133.82.64', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.102 Safari/537.36'),
(122, '162.210.196.97', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)'),
(123, '38.100.21.63', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2)'),
(124, '155.133.82.119', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50'),
(125, '180.76.15.150', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(126, '54.233.231.196', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB6 (.NET CLR 3.5.30729)'),
(127, '37.251.155.46', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.99 Safari/533.4'),
(128, '176.10.104.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(129, '94.228.179.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8'),
(130, '34.240.211.190', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB6 (.NET CLR 3.5.30729)'),
(131, '194.187.170.145', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(132, '190.122.101.58', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(133, '95.178.223.78', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(134, '41.76.157.26', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(135, '107.178.194.118', 'AppEngine-Google; (+http://code.google.com/appengine; appid: s~buzzstream-tools-hrd)'),
(136, '54.229.249.65', 'Python/3.6 aiohttp/2.2.5'),
(137, '180.76.15.11', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(138, '158.69.228.56', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36'),
(139, '87.250.224.34', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)'),
(140, '60.112.138.153', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(141, '24.238.197.10', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(142, '181.214.191.201', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'),
(143, '81.17.31.194', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36'),
(144, '107.167.112.193', 'Opera/9.80 (Android; Opera Mini/29.0.2254/69.162; U; fr) Presto/2.12.423 Version/12.16'),
(145, '80.12.42.215', 'Mozilla/5.0 (Linux; Android 5.1.1; PULP FAB 4G Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.107 Mobile Safari/537.36'),
(146, '194.199.7.22', 'Mozilla/5.0 (compatible; bnf.fr_bot; +http://www.bnf.fr/fr/outils/a.dl_web_capture_robot.html)'),
(147, '194.187.170.109', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(148, '189.217.107.75', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(149, '2a01:cb1c:129:2f00:388a:60c0:3142:7a32', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.80'),
(150, '107.167.99.203', 'Opera/9.80 (Android; Opera Mini/28.0.2254/69.162; U; fr) Presto/2.12.423 Version/12.16'),
(152, '91.92.242.112', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(151, '41.142.245.227', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(153, '77.21.253.241', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(154, '80.74.143.2', 'Mozilla/5.0 (Windows NT 5.1; rv:32.0) Gecko/20100101 Firefox/32.0'),
(155, '219.206.231.121', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(156, '194.187.170.136', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(157, '186.7.142.8', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(158, '213.181.83.239', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'),
(159, '139.227.145.45', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.1; .NET CLR 2.0.50727'),
(160, '120.29.67.77', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(161, '76.64.183.224', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(162, '118.100.18.188', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(163, '49.205.242.185', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(164, '171.25.193.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(165, '2a01:cb1c:129:2f00:dd8a:a233:4687:d181', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Brackets/1.10.0.0 Chrome/49.0.2623.110 Safari/537.36'),
(166, '162.210.196.129', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)'),
(167, '122.176.39.76', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(168, '176.126.252.11', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(169, '49.206.126.187', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(170, '183.82.171.144', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(171, '194.125.17.92', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(172, '107.167.99.147', 'Opera/9.80 (Android; Opera Mini/28.0.2254/69.162; U; fr) Presto/2.12.423 Version/12.16'),
(173, '109.190.254.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0'),
(174, '54.165.90.203', 'ia_archiver'),
(175, '151.250.165.45', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(176, '31.17.253.74', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(177, '180.76.15.147', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(178, '180.76.15.9', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(179, '185.16.25.68', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(180, '87.18.242.66', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(181, '78.229.68.12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36'),
(182, '186.92.236.227', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(183, '104.238.248.15', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)'),
(184, '2001:4ca0:108:42::19', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.85 Safari/537.36'),
(185, '1.23.238.126', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(186, '180.76.15.10', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(187, '203.8.180.114', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(188, '185.86.77.38', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0'),
(189, '82.178.52.123', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(190, '194.187.170.111', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(191, '162.243.166.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(192, '116.74.110.33', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(193, '216.19.208.120', '=Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16'),
(194, '5.45.207.65', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)'),
(195, '185.100.85.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(196, '107.167.99.197', 'Opera/9.80 (Android; Opera Mini/28.0.2254/69.162; U; fr) Presto/2.12.423 Version/12.16'),
(197, '180.76.15.155', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(198, '64.119.200.124', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(199, '93.171.21.78', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(200, '2400:2652:600:8600:44a5:7b0c:7a39:c06a', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(201, '34.213.78.75', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.11 (KHTML like Gecko) Chrome/23.0.1271.95 Safari/537.11'),
(202, '103.25.44.26', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(203, '159.203.81.93', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0'),
(204, '94.129.240.4', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(205, '88.180.189.54', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(206, '123.125.67.163', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36'),
(207, '123.125.71.109', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(208, '46.183.218.199', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(209, '109.98.165.101', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(210, '180.76.15.136', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(211, '194.187.170.103', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(212, '78.101.87.223', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(213, '37.187.129.166', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(214, '89.38.10.15', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(215, '221.14.169.112', 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1'),
(216, '49.146.32.149', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(217, '122.149.30.111', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(218, '1.22.71.218', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(219, '103.37.201.96', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(221, '66.249.64.218', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(237, '86.121.191.149', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36'),
(222, '66.249.64.216', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(223, '197.207.24.160', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(224, '51.7.141.249', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(225, '51.255.65.3', 'Mozilla/5.0 (compatible; AhrefsBot/5.2; +http://ahrefs.com/robot/)'),
(226, '178.22.112.2', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(227, '197.248.25.6', 'IBrowse/2.16 (iPhone 2.5; fr;)'),
(228, '66.249.64.214', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(232, '72.140.105.76', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(229, '190.152.150.62', '}__test|O:21:&quot;JDatabaseDriverMysqli&quot;:3:{s:2:&quot;fc&quot;;O:17:&quot;JSimplepieFactory&quot;:0:{}s:21:&quot;\\0\\0\\0disconnectHandlers&quot;;a:1:{i:0;a:2:{i:0;O:9:&quot;SimplePie&quot;:5:{s:8:&quot;sanitize&quot;;O:20:&quot;JDatabaseDriverMysql&q'),
(230, '194.187.170.140', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(231, '202.155.199.210', 'Konqueror/9.9 (Windows Vista 4.9; fr;)'),
(233, '37.105.227.83', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(234, '204.8.156.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(235, '82.227.141.117', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; .NET CLR 1.0.3705;)'),
(236, '2001:e68:543f:a6:115:6fd3:472d:b03', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(238, '2001:e68:6d00:dd01:38ae:1d7f:d984:3297', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(239, '66.180.193.219', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(240, '151.61.167.141', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(241, '105.159.251.187', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(242, '90.87.41.221', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36'),
(243, '105.156.138.50', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(244, '109.245.63.6', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(245, '158.69.225.36', 'Mozilla/5.0 (Linux; Android 5.1.1; SM-G925F Build/LMY47X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.94 Mobile Safari/537.36'),
(246, '179.111.112.184', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(247, '103.16.168.130', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(248, '157.55.39.55', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)'),
(249, '177.95.252.195', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(250, '78.160.7.198', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(251, '202.93.211.85', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(252, '54.202.150.7', 'Mozilla/5.0'),
(253, '54.218.25.246', 'Mozilla/5.0 (Unknown; Linux x86_64) AppleWebKit/534.34 (KHTML, like Gecko) PhantomJS/1.9.2 Safari/534.34'),
(254, '213.149.146.131', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(255, '180.191.87.104', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(256, '13.59.127.74', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36'),
(257, '2a01:cb1c:129:2f00:7473:2601:b639:3805', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.80'),
(258, '54.84.20.149', 'woobot/2.0'),
(259, '54.84.20.149', 'woobot/2.0'),
(260, '54.88.157.40', 'woobot/2.0'),
(261, '204.236.198.59', 'Mozilla/5.0 (iPad; CPU OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1'),
(262, '54.144.115.89', 'woobot/2.0'),
(264, '66.102.8.130', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko; Google Page Speed Insights) Chrome/41.0.2272.118 Mobile Safari/537.36'),
(263, '34.204.7.163', 'Mozilla/5.0 (iPad; CPU OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1'),
(265, '54.90.201.255', 'woobot/2.0'),
(266, '94.228.142.55', 'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101  Firefox/28.0'),
(267, '104.196.195.134', 'MailChimp'),
(268, '51.15.87.157', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(269, '41.82.192.31', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(270, '108.65.208.220', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(271, '2a01:e34:ee53:c960:c557:8cdf:4be7:771', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:55.0) Gecko/20100101 Firefox/55.0'),
(272, '92.156.213.75', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(273, '5.9.60.241', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.7; http://mj12bot.com/)'),
(274, '185.56.211.242', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(275, '35.190.171.190', 'Mozilla/5.0 (Windows NT 5.1; rv:32.0) Gecko/20100101 Firefox/32.0'),
(276, '35.184.241.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/601.6.17 (KHTML, like Gecko) Version/9.1.1 Safari/601.6.17'),
(277, '180.76.15.148', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(278, '180.76.15.137', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)'),
(279, '52.14.34.216', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36'),
(280, '160.16.241.184', 'crawler4j (http://code.google.com/p/crawler4j/)'),
(281, '194.187.170.110', 'Mozilla/5.0 (compatible; Qwantify/2.4w; +https://www.qwant.com/)/2.4w'),
(282, '66.249.64.158', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(283, '54.91.104.120', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:30.0) Gecko/20100101 Firefox/30.0'),
(284, '192.160.102.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(285, '62.141.39.47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36'),
(286, '82.80.249.243', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22'),
(287, '85.236.158.88', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'),
(288, '128.30.52.64', 'Validator.nu/LV http://validator.w3.org/services'),
(289, '66.249.93.27', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko; Google Page Speed Insights) Chrome/41.0.2272.118 Mobile Safari/537.36'),
(290, '66.249.93.26', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko; Google Page Speed Insights) Chrome/41.0.2272.118 Safari/537.36'),
(291, '213.251.182.115', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0'),
(292, '128.30.52.72', 'Validator.nu/LV http://validator.w3.org/services'),
(293, '2a01:cb1c:129:2f00:5459:e2bf:f13b:755e', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36 OPR/47.0.2631.80'),
(294, '2a03:2880:3010:cfe3:face:b00c:0:8000', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'),
(295, '190.221.170.34', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(296, '2a03:2880:3010:cff5:face:b00c:0:8000', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'),
(297, '2a03:2880:3010:cfea:face:b00c:0:8000', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'),
(298, '2a03:2880:3010:cfe6:face:b00c:0:8000', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'),
(299, '2a03:2880:3010:cfe9:face:b00c:0:8000', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'),
(300, '108.59.8.80', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.7; http://mj12bot.com/)'),
(301, '178.255.215.85', 'Mozilla/5.0 (compatible; Exabot/3.0; +http://www.exabot.com/go/robot)'),
(302, '128.30.52.96', 'Validator.nu/LV http://validator.w3.org/services'),
(303, '128.30.52.73', 'Validator.nu/LV http://validator.w3.org/services'),
(304, '2a03:2880:3010:cfed:face:b00c:0:8000', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)'),
(305, '128.106.160.177', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(306, '128.30.52.134', 'Validator.nu/LV http://validator.w3.org/services'),
(307, '90.28.128.169', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38'),
(308, '195.144.11.46', 'Mozilla/5.0 (compatible; https://alyze.info)'),
(309, '2607:5300:203:15c2::1', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.7; http://mj12bot.com/)'),
(310, '137.103.35.117', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1'),
(311, '2a01:cb1c:129:2f00:5d6d:c2f2:efdc:8efb', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36 OPR/48.0.2685.35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT pour la table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

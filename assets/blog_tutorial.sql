-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : mar. 08 août 2023 à 10:12
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_tutorial`
--
CREATE DATABASE IF NOT EXISTS `blog_tutorial` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `blog_tutorial`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `shortDescription` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `author` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `description`, `content`, `shortDescription`, `createdAt`, `updatedAt`, `author`) VALUES
(1, 'Mon voyage au japon', 'mon-voyage-au-japon', 'Une Aventure Inoubliable. Carnet de route de mon voyage au Japon', '        <h2>Mon Voyage au Japon : Une Aventure Inoubliable</h2>\n        <p>De <strong>Tokyo</strong> à <strong>Kyoto</strong>, en passant par les magnifiques paysages naturels et les temples historiques, mon voyage au Japon a été une expérience incroyable.</p>\n\n        <h3>Découvrir Tokyo : L\'Effervescence de la Métropole</h3>\n        <p>Dans la vibrante capitale du Japon, j\'ai été immédiatement plongé dans un monde de contrastes. Des gratte-ciels modernes de <strong>Shinjuku</strong> aux ruelles traditionnelles d\'Asakusa, chaque coin de rue raconte une histoire unique.</p>\n\n        <h3>L\'Élégance Intemporelle de Kyoto</h3>\n        <p>À <strong>Kyoto</strong>, la beauté intemporelle des temples et des jardins m\'a captivé. Les ruelles pavées de <strong>Gion</strong>, où l\'on peut parfois apercevoir des <strong>geishas</strong> élégantes, ont ajouté une touche de mystère à mon voyage.</p>\n\n        <h3>Les Trésors Cachés de la Campagne Japonaise</h3>\n        <p>Mon périple m\'a également conduit hors des sentiers battus, vers les montagnes pittoresques de <strong>Hakone</strong> et les villages tranquilles. Les onsens naturels, les sources chaudes, m\'ont offert une expérience relaxante et apaisante.</p>\n\n        <h3>Rencontres et Échanges Culturels</h3>\n        <p>Les habitants du Japon m\'ont accueilli avec chaleur et curiosité. Les échanges avec les locaux, la dégustation de la cuisine locale et les discussions sur les traditions m\'ont permis de mieux comprendre la culture japonaise.</p>\n\n        <h3>Le Mont Fuji : Une Vue à Couper le Souffle</h3>\n        <p>Ma rencontre avec le majestueux <strong>Mont Fuji</strong> a été un moment fort de mon voyage. L\'ascension du sommet m\'a offert une vue panoramique qui m\'a laissé sans voix. Le coucher de soleil depuis le sommet était tout simplement spectaculaire.</p>\n\n        <h3>Une Expérience à Jamais Oubliée</h3>\n        <p>Mon voyage au Japon a été une aventure riche en découvertes, en émotions et en enseignements. Entre la fusion du moderne et du traditionnel, la gentillesse des habitants et la beauté des paysages, j\'ai vécu des moments inoubliables qui resteront gravés dans ma mémoire pour toujours.</p>', 'Une Aventure Inoubliable', '2021-11-09 15:59:01', '2022-11-07 15:59:01', 1),
(2, 'Mon voyage en Irlande', 'mon-voyage-en-irlande', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum lacinia quis vel eros donec. Ac tortor dignissim convallis aenean et tortor. Proin libero nunc consequat interdum varius sit amet. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Sodales ut eu sem integer vitae justo. Enim ut tellus elementum sagittis vitae et leo duis ut. Gravida rutrum quisque non tellus. Id cursus metus aliquam eleifend mi in nulla posuere.', '<h2>Mon Voyage en Irlande : Paysages Époustouflants et Accueil Chaleureux</h2>\n        <p>Mon aventure en <strong>Irlande</strong> a été une immersion dans des paysages verdoyants à couper le souffle, une riche histoire et une culture vivante qui m\'ont laissé des souvenirs inoubliables.</p>\n\n        <h3>Dublin : Entre Tradition et Modernité</h3>\n        <p>La capitale <strong>Dublin</strong> m\'a accueilli avec son mélange unique de vieux pubs traditionnels et d\'ambiances contemporaines. J\'ai flâné dans les rues pavées, visité le Trinity College et exploré les rives de la Liffey.</p>\n\n        <h3>La Côte Sauvage d\'Atlantique</h3>\n        <p>La <strong>côte ouest</strong> de l\'Irlande m\'a émerveillé avec ses falaises majestueuses. La vue depuis les falaises de <strong>Moher</strong> était à couper le souffle, me donnant une perspective panoramique sur l\'océan infini.</p>\n\n        <h3>Exploration des Châteaux et des Ruines Anciennes</h3>\n        <p>En parcourant la campagne, j\'ai découvert des <strong>châteaux médiévaux</strong> perdus dans des paysages pittoresques. Les ruines de <strong>Rock of Cashel</strong> m\'ont transporté dans le passé glorieux de l\'Irlande.</p>\n\n        <h3>La Magie des Légendes et des Musiques Traditionnelles</h3>\n        <p>L\'Irlande est riche en contes et légendes, et cela se ressent dans l\'atmosphère. Les sessions de musique traditionnelle dans les pubs, où les mélodies envoûtantes des violons et des flûtes m\'ont enchanté, ont été des moments magiques.</p>\n\n        <h3>Connexion avec la Nature et les Locaux</h3>\n        <p>Les Irlandais m\'ont accueilli à bras ouverts, partageant leur héritage culturel et leurs histoires avec enthousiasme. Les randonnées dans les <strong>parcs nationaux</strong> m\'ont permis de me connecter avec la nature préservée du pays.</p>\n\n        <h3>Un Pays de Contrastes et de Beauté</h3>\n        <p>Mon voyage en Irlande m\'a montré un pays de contrastes, où les paysages variés se mêlent à l\'histoire profonde et à la chaleur des habitants. Les souvenirs de ce voyage resteront gravés dans ma mémoire comme une expérience enrichissante et inspirante.</p>', 'Paysages Époustouflants et Accueil Chaleureux', '2022-11-08 15:59:01', '2022-11-07 15:59:01', 2),
(3, 'Mon voyage en jamaique', 'mon-voyage-en-jamaique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Condimentum lacinia quis vel eros donec. Ac tortor dignissim convallis aenean et tortor. Proin libero nunc consequat interdum varius sit amet. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Sodales ut eu sem integer vitae justo. Enim ut tellus elementum sagittis vitae et leo duis ut. Gravida rutrum quisque non tellus. Id cursus metus aliquam eleifend mi in nulla posuere.', '        <h2>Mon Voyage en Jamaïque : Soleil, Plages et Culture Colorée</h2>\n        <p>Mon escapade en <strong>Jamaïque</strong> a été une expérience vibrante et envoûtante. Cette île caribéenne regorge de paysages magnifiques, de musique envoûtante et d\'une atmosphère chaleureuse qui m\'a captivé dès mon arrivée.</p>\n\n        <h3>Découvrir les Plages de Rêve</h3>\n        <p>Les plages de sable blanc bordées d\'eau turquoise ont été mon premier arrêt. <strong>Negril</strong> avec ses couchers de soleil spectaculaires et <strong>Montego Bay</strong> avec ses eaux calmes m\'ont offert des moments de détente et d\'évasion.</p>\n\n        <h3>La Vie Nocturne Vibrante de Kingston</h3>\n        <p>La capitale, <strong>Kingston</strong>, est le cœur battant de la Jamaïque. Les rues résonnent de reggae, de dancehall et de la joie de vivre jamaïcaine. Les soirées colorées et festives m\'ont permis de me fondre dans la culture locale.</p>\n\n        <h3>Exploration de la Campagne Verdoyante</h3>\n        <p>En quittant les plages, j\'ai exploré les montagnes verdoyantes et les cascades rafraîchissantes. <strong>Ocho Rios</strong> m\'a offert une expérience inoubliable en grimpant les chutes de la <strong>Dunn\'s River</strong>.</p>\n\n        <h3>Savourer la Cuisine Locale</h3>\n        <p>La cuisine jamaïcaine a été un véritable festin pour mes papilles. Les plats épicés comme le <strong>jerky de porc</strong> et le <strong>curry de chèvre</strong> ont réveillé mes sens. Sans oublier les fruits tropicaux frais qui ont comblé ma soif de saveurs exotiques.</p>\n\n        <h3>Rencontres Chaleureuses et Sourires Sincères</h3>\n        <p>Les habitants jamaïcains m\'ont accueilli avec des sourires sincères et une hospitalité chaleureuse. Les discussions animées et les échanges culturels m\'ont permis de mieux comprendre la vie quotidienne en Jamaïque.</p>\n\n        <h3>La Nature à l\'État Brut</h3>\n        <p>Les parcs nationaux et les réserves marines m\'ont offert des moments d\'émerveillement. J\'ai exploré les fonds marins colorés en plongée sous-marine et j\'ai découvert des espèces marines fascinantes.</p>\n\n        <h3>Un Voyage Enrichissant</h3>\n        <p>Ce voyage en Jamaïque a été bien plus qu\'une simple escapade. Il m\'a permis de plonger dans une culture riche, de me détendre sur des plages de rêve et de vivre des aventures uniques. La Jamaïque restera à jamais gravée dans ma mémoire comme une destination authentique et pleine de vie.</p>   ', 'Soleil, Plages et Culture Colorée', '2022-11-04 15:59:01', '2022-11-04 15:59:01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `createdAt`, `updatedAt`) VALUES
(1, 'john@mail.com', 'john', 'John', 'Doe', '2022-11-06 16:26:10', '2022-11-06 16:26:10'),
(2, 'jack@mail.com', 'jack', 'Jack', 'Doe', '2022-11-06 16:26:18', '2022-11-06 16:26:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 26 jan. 2021 à 14:33
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `id_logement` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext,
  PRIMARY KEY (`id_logement`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'Trump Tower', 'Manhattan', 'New York', 41000, 1000000, 5, '1611659154', 'location', 'Décrivez le logement…'),
(2, 'appt3', '1 rue Dupont', 'Marseille', 13000, 50, 500, '1611659406.jpg', 'location', 'un logement quelconque'),
(3, 'appt4', '5 avenue Jacques Chirac', 'Montreuil', 62170, 40, 50000, '1611659560', 'vente', 'F1'),
(4, 'appt4', '5 avenue Jacques Chirac', 'Montreuil', 62170, 40, 50000, NULL, 'vente', 'F1'),
(5, 'maison', '6 rue des Pommiers en fleur', 'Roubaix', 59100, 150, 100000, NULL, 'vente', ''),
(6, 'maison', '6 rue des Pommiers en fleur', 'Roubaix', 59100, 150, 100000, NULL, 'location', 'Lorem ipsum'),
(7, 'maison', '6 rue des Pommiers en fleur', 'Roubaix', 59100, 150, 100000, NULL, 'location', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum'),
(8, 'a', '5 route de Valenciennes', 'Besançon', 25000, 10, 500, '1611666512.jpg', 'location', 'studio'),
(9, 'penthouse suite #2', '6th avenue', 'New York', 41000, 300, 1000000000, '1611666946.jpg', 'location', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, debitis voluptas accusamus dolor iure, ratione cumque rem odio consectetur quasi tenetur id enim? Quae aliquid culpa possimus ipsam, modi aperiam quibusdam reiciendis quidem praesentium animi fuga perspiciatis laudantium quam atque laboriosam voluptas molestias ipsum blanditiis earum obcaecati debitis nobis! Aliquid veritatis pariatur est quod dolor enim, dolores rem deserunt, distinctio necessitatibus fugit! Deleniti, rem. Quod, at ipsum iste hic aliquid placeat quisquam commodi, eaque accusamus quasi labore exercitationem velit praesentium. Perferendis quo aut reiciendis? Illo cum impedit tempore, quo cumque esse quaerat asperiores est vitae corporis dolorem, accusamus eum ullam soluta optio placeat distinctio consequatur? Placeat, ipsam repudiandae voluptate animi quisquam illo praesentium asperiores tempora, enim iusto ea facere, labore quia. Id repellat impedit nam numquam! Quas iure tempora sed harum neque, dolorem distinctio soluta similique dolorum modi. Magni sit minus illum, odio, nemo hic eaque laboriosam eius maxime ad, earum repudiandae quibusdam nihil commodi a illo. A fuga aut natus cupiditate illum ullam, corrupti facere id quibusdam provident culpa quae in perspiciatis veniam, laudantium dolore ex voluptate sit cumque temporibus et vero reprehenderit repudiandae accusamus! Officia in odit quae asperiores omnis voluptate magnam perferendis aspernatur voluptatem! Quo impedit aliquam vel delectus, optio, corporis laboriosam eius fuga blanditiis iste suscipit ipsam. Ipsum ullam facere eaque eveniet, quis, explicabo dolore voluptatibus dolorem aperiam ipsa enim dicta ipsam officia rerum laborum. Facere iste architecto, hic animi ipsa porro. Deserunt consequatur, incidunt eum laborum vel soluta non nam minus. Quae possimus tempore vel enim modi quas dolore sequi unde quod. Repellendus, excepturi. Quas corrupti asperiores consequuntur soluta beatae perferendis nobis cupiditate voluptatem reiciendis autem? Eaque vitae qui alias nostrum quae praesentium, eum maiores. Veniam explicabo dolorem dolore non exercitationem quam quis officia blanditiis obcaecati temporibus. Quas sequi dolorem mollitia tenetur eaque, magni rem. Consequatur eveniet repellat aliquid, dolore quisquam, dolores voluptates fuga exercitationem officiis assumenda similique esse ratione molestiae optio laborum. Nemo ipsum eos voluptatem optio suscipit exercitationem itaque incidunt quos quod quia placeat at nesciunt nihil accusantium saepe corrupti accusamus, maxime porro sapiente, corporis ut. Excepturi dolor recusandae blanditiis veniam dolore nobis in ad saepe aspernatur eaque. Magnam, quis voluptatibus beatae pariatur deserunt velit incidunt, cum reiciendis suscipit provident praesentium, debitis odio corporis? Doloribus numquam cumque mollitia, repellat architecto aperiam minima aliquid labore assumenda culpa laborum sed veritatis illo accusantium nostrum! Laudantium molestiae maiores impedit eius ducimus dolorem eos, facere nostrum, quos ad excepturi quidem. Nihil eaque quisquam deleniti tempora explicabo asperiores amet, repudiandae tenetur illo quo odit repellendus fuga, magni earum deserunt quos et soluta fugit, distinctio exercitationem modi! Dolorem, laborum ea tempora ratione voluptatibus nam earum doloribus quos minus, rerum eius voluptates nobis eveniet delectus rem voluptas molestias veritatis ab sint aut exercitationem enim veniam. Soluta deserunt sit fugiat rem, cumque aperiam dignissimos ullam ut. Illum vero eos consectetur deleniti unde voluptatibus animi quae labore corporis, cum, quas aspernatur dolor. Quam cum, est sunt tenetur aliquid assumenda sapiente quaerat, cupiditate laboriosam expedita id architecto fuga! Aliquid esse consectetur quaerat asperiores fugiat, excepturi dolor libero voluptatum autem modi, ipsum, eaque quis possimus cumque non. Earum error voluptates est quos quis, voluptas accusamus repellat repellendus consectetur suscipit veritatis, officia vero eos odit velit nemo quia dolore sequi officiis, odio deleniti blanditiis id. Consectetur quas eum, alias ipsum ad aspernatur nihil voluptatibus perferendis maiores aut enim facilis ab odit saepe corrupti nesciunt velit quisquam magnam laudantium ipsam assumenda. Magnam praesentium assumenda beatae aperiam similique? Perspiciatis accusantium debitis animi iusto, veritatis, provident aut explicabo, amet sed laboriosam eos? Inventore culpa molestiae maiores, cumque consequatur minima distinctio impedit, ipsa, cupiditate exercitationem earum dolores cum natus.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

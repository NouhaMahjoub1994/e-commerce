-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 14 mars 2019 à 18:47
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `commandeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `totale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`commandeId`, `userId`, `totale`) VALUES
(19, 1, 300),
(20, 1, 112),
(21, 1, 50),
(22, 1, 112),
(23, 1, 50),
(24, 1, 50),
(25, 2, 50),
(26, 0, 50),
(27, 0, 50),
(28, 0, 150),
(29, 0, 50),
(30, 0, 112),
(31, 0, 1188),
(32, 0, 50),
(33, 0, 50);

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

CREATE TABLE `lignecommande` (
  `commandeLineId` int(11) NOT NULL,
  `produitId` int(11) NOT NULL,
  `produitQuantite` int(11) NOT NULL,
  `commandeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`commandeLineId`, `produitId`, `produitQuantite`, `commandeId`) VALUES
(9, 5, 3, 0),
(10, 4, 3, 0),
(11, 4, 1, 0),
(12, 6, 1, 0),
(13, 4, 1, 21),
(14, 5, 1, 22),
(15, 6, 1, 22),
(16, 5, 1, 23),
(17, 4, 1, 24),
(18, 4, 1, 25),
(19, 4, 1, 26),
(20, 4, 1, 27),
(21, 5, 3, 28),
(22, 4, 1, 29),
(23, 5, 1, 30),
(24, 6, 1, 30),
(25, 4, 9, 31),
(26, 5, 4, 31),
(27, 6, 1, 31),
(28, 7, 1, 31),
(29, 9, 1, 31),
(30, 8, 1, 31),
(31, 4, 1, 32),
(32, 4, 1, 33);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `nom_produit` varchar(255) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `prix_produit` int(3) NOT NULL,
  `image_1_produit` varchar(255) NOT NULL,
  `image_2_produit` varchar(255) NOT NULL,
  `image_3_produit` varchar(255) NOT NULL,
  `image_4_produit` varchar(255) NOT NULL,
  `descrip_produit` text NOT NULL,
  `quantite` varchar(200) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `marque` varchar(200) NOT NULL,
  `couleur` varchar(200) NOT NULL,
  `image_panier_produit` varchar(255) NOT NULL,
  `image_boutique_produit` varchar(60) NOT NULL,
  `categorie_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`nom_produit`, `id_produit`, `prix_produit`, `image_1_produit`, `image_2_produit`, `image_3_produit`, `image_4_produit`, `descrip_produit`, `quantite`, `categorie`, `marque`, `couleur`, `image_panier_produit`, `image_boutique_produit`, `categorie_id`) VALUES
('Night Stand', 4, 50, '4.jpg', '4.jpg', '4.jpg', '4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?', '', 'Table', 'The factory', 'white', 'cart4.jpg', 'product4.jpg', 0),
('Plant pot', 5, 50, '5.jpg', '5.jpg', '5.jpg', '5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?', '', 'Pot', 'Ikea', 'beige', 'cart5.jpg', 'product5.jpg', 0),
('Wooden table', 6, 62, '6.jpg', '6.jpg', '6.jpg', '6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?', '', 'Table', 'Furniture Inc', 'white', 'cart6.jpg', 'product6.jpg', 0),
('Metallic Chair', 7, 123, '1.jpg', '1.jpg', '1.jpg', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?', '', 'Chair', 'Furniture Inc', 'white', 'cart1.jpg', 'product1.jpg', 0),
('Modern Rocking Chair', 8, 233, '8.jpg', '8.jpg', '8.jpg', '8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?', '', 'Chair', 'Amado', 'white', 'cart8.jpg', 'product8.jpg', 0),
('Minimalistic plant pot', 9, 120, '2.jpg', '2.jpg', '2.jpg', '2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?', '12', 'Pot', 'Ikea', 'white', 'cart3.jpg', 'product2.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`, `slug`, `level`) VALUES
(1, 'Administrateur', 'admin', 3),
(2, 'Membre', 'membre', 1),
(3, 'vendeur', 'vendor', 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_token_auth`
--

CREATE TABLE `tbl_token_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_token_auth`
--

INSERT INTO `tbl_token_auth` (`id`, `username`, `password_hash`, `selector_hash`, `is_expired`, `expiry_date`) VALUES
(17, 'nouha215', '$2y$10$drmS4ntzRzNXVE4n3TA55uhUxFBV6MYmjDzFgKTHqSoQysn3KsAtK', '$2y$10$fc6.WTS6LeinZdqHJSDAAOZ7Iqhv10l/IGG810M2GSFsmqtROs6WW', 1, '2019-01-30 16:42:42'),
(18, 'nouha215', '$2y$10$xknIBLmcREOVyULvmLJ9c.JiR9BT2mtCrE8V369vRTJL0EN5oUtqe', '$2y$10$tL8.1RbYpTQ1xp77rUYpLOEKdSvH2zbykVRuQp49ky/4wnD/rHKAG', 1, '2019-01-30 17:00:32'),
(19, 'nouha215', '$2y$10$gTaVKZ1oGmGS45ruB5xYiOTi9.B.0d24EU9y6uSM.8g6kiEd1uCWu', '$2y$10$vS6LboC4aBfoCmHrkLMQWuKNEtnLfudXgxgg7M74cHIVK.SMGONuS', 1, '2019-01-30 17:33:58'),
(20, 'nouha215', '$2y$10$HZN4ywvlFxJ4ESKZHnLQbOpYCc3QeEtmkt051xirWg/6tot.gqBZm', '$2y$10$tZn/td/38dkDc3fNByqX9OxHX9p26Ab0fABWJJTsl40Jc6P8wb5Tu', 1, '2019-01-30 17:39:31'),
(21, 'nouha215', '$2y$10$Q/wwoFsXgca2NFy/NmuwjeQ804Tg99u4FXkzfjwNEY.eWd0lQXycm', '$2y$10$iQxG.g5wtfvGS0deFJjZPuFhFcHf3Ek6h2OD43O6pqxkR8qmOI5qu', 1, '2019-01-31 07:24:46'),
(22, 'nouha215', '$2y$10$hIfeC7dmmcr5COy4xX.4/OJzSgBmH35t7QgwkFHKAKZ.l6bkifU7.', '$2y$10$dgN2dhydel9vBVn.oy2IQ.pzgEvEYoJiWV6WwtQpIqtns4ijKj66O', 1, '2019-01-31 07:26:03'),
(23, 'nouha215', '$2y$10$7l6B7Jz.om2TsHWIqf.OV.0C0gJ8SpuR3cppcrp4r2gq7p.LZkhXW', '$2y$10$7fxbaziX.9EkQ0y.MGyxO.l.XmdD779U5AWgJvANpNeBzMj.0di1i', 1, '2019-02-15 14:02:49'),
(24, 'nouha215', '$2y$10$EM.mXZ6J82MSzVywWsHz5u.7Q0vr1aTCoTxSfOEwx6q4qdOmTey9a', '$2y$10$pONKwAqmXqYtEQ2E4LPHqOnK1QCWLIHsUuZ9R.vBHJEqGG2Op6P62', 1, '2019-02-15 16:52:52'),
(25, 'nouha215', '$2y$10$i6L/ktb3zzFbAvZv3GbAK.waMGbTtOAHGzW/RqmcIfo4DATr0oLlW', '$2y$10$E.up21BBAUfaSJdCIAs3JuWJHTWGklidiB3nBHvDA1vPq7hLHhNCy', 1, '2019-02-15 17:10:26'),
(26, 'nouha215', '$2y$10$VTLANO7Opk21euSmBOzl1.p.8uGl9dxOQFUIU4j1.MkmqORq.KmT6', '$2y$10$EFJgujC0p2QThkUYde4.eOnXK8JICgTsrk3aCDtMSW94nsaBFZpxe', 0, '2019-03-17 17:10:25');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userId` int(4) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(60) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipCode` int(4) NOT NULL,
  `phone_number` int(8) NOT NULL,
  `roleId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `pseudo`, `fullName`, `mail`, `password`, `country`, `street_address`, `city`, `zipCode`, `phone_number`, `roleId`) VALUES
(1, 'nouha215', 'Mahjoub', 'mahjoubnouha1994@gmail.com', '$2y$10$4Gu3iMwelwNZgE2F/p/ZI.VI7j5js3X9U1Mr5VX6rAFCsMO5lmXxa', 'usa', 'Brn arous', 'Ben arous', 2063, 56129429, 1),
(2, 'nouh', 'nouh', 'm@h.bom', '$2y$10$Q/2dBFhtGf2Kj1FQ6HUV3uC7fqNjY8EZYEiMEeCsTWbF99FoDTday', 'usa', 'Brn arous', 'Ben arous', 2063, 56129429, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`commandeId`);

--
-- Index pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD PRIMARY KEY (`commandeLineId`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `commandeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  MODIFY `commandeLineId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

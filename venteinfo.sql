-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Sam 03 Juin 2017 à 23:09
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `venteinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcateg` int(11) NOT NULL,
  `libcateg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idcateg`, `libcateg`) VALUES
(8, 'Scanneur'),
(9, 'Portable'),
(10, 'Imprimente'),
(11, 'Ordinateur'),
(15, 'haut-parleurs');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nomClient` varchar(20) NOT NULL,
  `emailClient` varchar(20) NOT NULL,
  `telclient` varchar(8) NOT NULL,
  `adressclient` varchar(100) NOT NULL,
  `login` varchar(20) NOT NULL,
  `motpass` varchar(20) NOT NULL,
  `niveau` int(11) NOT NULL DEFAULT '2',
  `etat` varchar(10) NOT NULL DEFAULT 'bloque',
  `cin` varchar(8) NOT NULL,
  `remise` float NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `nomClient`, `emailClient`, `telclient`, `adressclient`, `login`, `motpass`, `niveau`, `etat`, `cin`, `remise`) VALUES
(1, 'drine', 'drinodroid@gmail.com', '456666', 'sfax route matar', 'ihssene', '06101920', 2, 'valide', '12345678', 1),
(4, 'ramzi', 'nr07@gmail.com', '456123', 'klibia', 'ramzi', 'ramzi', 2, 'valide', '45678912', 0.2),
(10, '', 'admin', '', '', 'admin', 'admin', 1, 'bloque', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `nocom` int(11) NOT NULL,
  `datecom` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idclient` int(11) NOT NULL,
  `etatcom` varchar(20) NOT NULL DEFAULT 'en cours'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`nocom`, `datecom`, `idclient`, `etatcom`) VALUES
(31, '2017-05-02 00:44:28', 4, 'livree'),
(32, '2017-05-02 10:56:11', 1, 'livree'),
(33, '2017-05-02 10:58:21', 1, 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `nocom` int(11) NOT NULL,
  `idmat` int(11) NOT NULL,
  `qtecomm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`nocom`, `idmat`, `qtecomm`) VALUES
(31, 20, 1),
(32, 20, 1),
(33, 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `matriel`
--

CREATE TABLE `matriel` (
  `idmat` int(11) NOT NULL,
  `libmat` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(100) NOT NULL,
  `categoriemat` int(11) NOT NULL,
  `qte_stock` float NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matriel`
--

INSERT INTO `matriel` (`idmat`, `libmat`, `prix`, `description`, `categoriemat`, `qte_stock`, `image`) VALUES
(20, 'Asus X541SA XX251D', 559, 'Marque : Asus REF : 90NB0CH5-M07240 Intel Celeron N3060 1.6 GHz up 2.48 GHZ - 2 Mo cache 4 Go DDR3 D', 11, 7, 'XX251D_g.jpg'),
(21, ' Asus X541SA XX038D', 559, 'Marque : Asus REF : 90NB0CH1-M06430 Intel Celeron N3060 1.6 GHz up 2.48 GHZ - 2 Mo cache 4 Go DDR3 D', 11, 10, 'XX038D_g.jpg'),
(22, ' Asus E202SA FD0114D', 589, 'Marque : Asus REF : 90NL0054-M07400 Intel Celeron N3060 1.6 GHz up 2.48 GHZ - 2 Mo cache 2 Go DDR3 D', 11, 5, 'FD0114D_g.jpg'),
(23, ' MSI LEOPARD PRO GP6', 1799, 'REF : 9S7-16J522-1651 Intel Core i7-6700HQ up to 3.5 GHz - 6 Mo cache 8 Go DDR4 Disque dur 1To SATA ', 11, 5, 'GP62-6QE_g.jpg'),
(24, 'ACME SS114', 25, 'Marque : ACME REF : 0087494 ACME SS114 MULTIMEDIA SPEAKERS ', 15, 100, 'SS114_g.jpg'),
(26, 'EPSON L382', 419, 'Marque : EPSON REF : C11CF43403 EPSON Imprimante L382 A4 3en1 couleur USB ', 10, 50, 'L382_g.jpg'),
(27, 'aa', 5.2, 'qqqq', 8, 5, 'dell_scanner.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `login` varchar(20) NOT NULL,
  `motpass` varchar(20) NOT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`login`, `motpass`, `niveau`) VALUES
('admin', 'admin', 1),
('client', 'client', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcateg`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD UNIQUE KEY `cin` (`cin`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`nocom`),
  ADD KEY `idclient` (`idclient`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`nocom`,`idmat`),
  ADD KEY `ligne_cmd_ibfk_2` (`idmat`);

--
-- Index pour la table `matriel`
--
ALTER TABLE `matriel`
  ADD PRIMARY KEY (`idmat`),
  ADD KEY `matriel_ibfk_1` (`categoriemat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcateg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `nocom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `matriel`
--
ALTER TABLE `matriel`
  MODIFY `idmat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `fk_ligne_b1` FOREIGN KEY (`nocom`) REFERENCES `commande` (`nocom`),
  ADD CONSTRAINT `ligne_cmd_ibfk_2` FOREIGN KEY (`idmat`) REFERENCES `matriel` (`idmat`);

--
-- Contraintes pour la table `matriel`
--
ALTER TABLE `matriel`
  ADD CONSTRAINT `matriel_ibfk_1` FOREIGN KEY (`categoriemat`) REFERENCES `categorie` (`idcateg`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

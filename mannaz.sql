-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 06 déc. 2019 à 13:25
-- Version du serveur :  5.7.26
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mannaz`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `ID_Annonces` int(11) NOT NULL AUTO_INCREMENT,
  `Titre_Annonces` varchar(50) NOT NULL,
  `Photo_Annonces` blob NOT NULL,
  `Video_Annonces` blob NOT NULL,
  `Description_Annonces` varchar(255) NOT NULL,
  `Prix_Annonces` decimal(15,3) NOT NULL,
  `Duree` date NOT NULL,
  PRIMARY KEY (`ID_Annonces`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `ID_Contrat` int(11) NOT NULL AUTO_INCREMENT,
  `Types_Contrat` varchar(100) NOT NULL,
  `Duree_Contrat` date NOT NULL,
  `Descritption_Contrat` varchar(255) NOT NULL,
  `Forfait_Contrat` varchar(255) NOT NULL,
  `Prix_Contrat` decimal(15,3) NOT NULL,
  `ID_Annonces` int(11) NOT NULL,
  PRIMARY KEY (`ID_Contrat`),
  KEY `Contrat_Annonces_FK` (`ID_Annonces`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `details_user`
--

DROP TABLE IF EXISTS `details_user`;
CREATE TABLE IF NOT EXISTS `details_user` (
  `Id_User` int(11) NOT NULL,
  `Nom_User` varchar(255) NOT NULL,
  `Prenom_User` varchar(255) NOT NULL,
  `Photo_User` blob NOT NULL,
  `Moyen_de_paiment_User` varchar(255) NOT NULL,
  `Disponibilite_User` date NOT NULL,
  `Telephone_User` int(11) NOT NULL,
  `Adresse_User` varchar(255) NOT NULL,
  `Description_User` varchar(255) NOT NULL,
  `Mail_User` varchar(255) NOT NULL,
  `Password_User` varchar(50) NOT NULL,
  `Type_User` int(11) NOT NULL,
  `ID_Contrat` int(11) NOT NULL,
  PRIMARY KEY (`Id_User`),
  KEY `Details_User_Contrat_FK` (`ID_Contrat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `Contrat_Annonces_FK` FOREIGN KEY (`ID_Annonces`) REFERENCES `annonces` (`ID_Annonces`);

--
-- Contraintes pour la table `details_user`
--
ALTER TABLE `details_user`
  ADD CONSTRAINT `Details_User_Contrat_FK` FOREIGN KEY (`ID_Contrat`) REFERENCES `contrat` (`ID_Contrat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

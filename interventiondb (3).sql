-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2020 at 11:10 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interventiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `id_rapport` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_rapport` (`id_rapport`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `contenu`, `date`, `id_rapport`) VALUES
(1, 'ce pas bon', '2020-03-11', 4),
(2, 'ces ppacac', '2020-03-11', 5),
(3, 'papp asasdm ', '2020-03-11', 8),
(4, 'bien fait', '2020-03-11', 5),
(5, 'caséalksd asjnkljasdn aslnlkasdlk asdljnlksd ', '2020-03-12', 8),
(6, 'mec toujours pas bon ', '2020-03-12', 8),
(7, 'tu plaisante', '2020-03-12', 8);

-- --------------------------------------------------------

--
-- Table structure for table `engins`
--

DROP TABLE IF EXISTS `engins`;
CREATE TABLE IF NOT EXISTS `engins` (
  `idEngins` int(11) NOT NULL,
  `Nom_Engin` varchar(45) DEFAULT NULL,
  `Date_Heur_Depart` date DEFAULT NULL,
  `Date_Heure_Arriver` date DEFAULT NULL,
  `Date_Heure_Retour` date DEFAULT NULL,
  PRIMARY KEY (`idEngins`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engins`
--

INSERT INTO `engins` (`idEngins`, `Nom_Engin`, `Date_Heur_Depart`, `Date_Heure_Arriver`, `Date_Heure_Retour`) VALUES
(1, 'bmw', '2020-02-11', '2020-02-27', '2020-02-27'),
(2, 'jaguar', '2020-02-10', '2020-02-11', '2020-02-12'),
(3, 'mercedes', '2020-02-26', '2020-02-27', '2020-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `engins_personnel`
--

DROP TABLE IF EXISTS `engins_personnel`;
CREATE TABLE IF NOT EXISTS `engins_personnel` (
  `Engins_idEngins` int(11) NOT NULL,
  `Personnel_idPersonnel` int(11) NOT NULL,
  `Intervention_Numero_intervention` int(11) DEFAULT NULL,
  `Responsable_idResponsable` int(11) DEFAULT NULL,
  PRIMARY KEY (`Engins_idEngins`,`Personnel_idPersonnel`),
  KEY `fk_Engins_has_Personnel_Personnel1_idx` (`Personnel_idPersonnel`),
  KEY `fk_Engins_has_Personnel_Engins1_idx` (`Engins_idEngins`),
  KEY `Intervention_Numero_intervention` (`Intervention_Numero_intervention`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engins_personnel`
--

INSERT INTO `engins_personnel` (`Engins_idEngins`, `Personnel_idPersonnel`, `Intervention_Numero_intervention`, `Responsable_idResponsable`) VALUES
(1, 4, 1, NULL),
(1, 5, 2, NULL),
(2, 1, 1, NULL),
(2, 2, 2, NULL),
(2, 3, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geographique`
--

DROP TABLE IF EXISTS `geographique`;
CREATE TABLE IF NOT EXISTS `geographique` (
  `idGeographique` int(11) NOT NULL,
  `Position_X` int(11) DEFAULT NULL,
  `Position_Y` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGeographique`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geographique`
--

INSERT INTO `geographique` (`idGeographique`, `Position_X`, `Position_Y`) VALUES
(1, 2, 3),
(2, 34, 54),
(3, 43, 98),
(4, 25, 47);

-- --------------------------------------------------------

--
-- Table structure for table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `Numero_Intervention` int(11) NOT NULL,
  `Commune` varchar(45) DEFAULT NULL,
  `Adresse` varchar(45) DEFAULT NULL,
  `Type_interv` varchar(45) DEFAULT NULL,
  `Opm` tinyint(4) DEFAULT NULL,
  `Important` tinyint(4) DEFAULT NULL,
  `Date_Heure_Debut` datetime DEFAULT NULL,
  `Date_Heure_Fin` date DEFAULT NULL,
  `Geographique_idGeographique` int(11) NOT NULL,
  `Responsable_idResponsable` int(11) DEFAULT NULL,
  PRIMARY KEY (`Numero_Intervention`,`Geographique_idGeographique`),
  KEY `fk_Intervention_Geographique1_idx` (`Geographique_idGeographique`),
  KEY `Responsable_idResponsable` (`Responsable_idResponsable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intervention`
--

INSERT INTO `intervention` (`Numero_Intervention`, `Commune`, `Adresse`, `Type_interv`, `Opm`, `Important`, `Date_Heure_Debut`, `Date_Heure_Fin`, `Geographique_idGeographique`, `Responsable_idResponsable`) VALUES
(1, 'casa', '47 barte', 'feu de brousse', 1, 1, '2020-02-03 00:00:00', '2020-02-10', 1, 1),
(2, 'bamako', '56 charle stoessel', 'bombe', 1, 1, '2020-02-11 00:00:00', '2020-02-29', 2, 2),
(3, 'kalaban', '46 deste', 'tremblement', 4, 5, '2020-02-26 00:00:00', '2020-02-27', 3, 3),
(4, 'paris', '57 retw', 'terrorist', 0, 0, '2020-02-11 00:00:00', '2020-02-19', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `intervention_engins`
--

DROP TABLE IF EXISTS `intervention_engins`;
CREATE TABLE IF NOT EXISTS `intervention_engins` (
  `Intervention_Numero_Intervention` int(11) NOT NULL,
  `Engins_idEngins` int(11) NOT NULL,
  PRIMARY KEY (`Intervention_Numero_Intervention`,`Engins_idEngins`),
  KEY `fk_Intervention_has_Engins_Engins1_idx` (`Engins_idEngins`),
  KEY `fk_Intervention_has_Engins_Intervention_idx` (`Intervention_Numero_Intervention`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intervention_engins`
--

INSERT INTO `intervention_engins` (`Intervention_Numero_Intervention`, `Engins_idEngins`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(3, 3),
(4, 1),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `parametre`
--

DROP TABLE IF EXISTS `parametre`;
CREATE TABLE IF NOT EXISTS `parametre` (
  `idParametre` int(11) NOT NULL,
  `Jours_Feries` varchar(45) DEFAULT NULL,
  `Heure_Debut` datetime DEFAULT NULL,
  `Heure_Fin` datetime DEFAULT NULL,
  PRIMARY KEY (`idParametre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parametre`
--

INSERT INTO `parametre` (`idParametre`, `Jours_Feries`, `Heure_Debut`, `Heure_Fin`) VALUES
(1, '2', '2020-02-12 00:00:00', '2020-02-13 00:00:00'),
(2, '3', '2020-02-24 00:00:00', '2020-02-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `idPersonnel` int(11) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `Responsable_idResponsable` int(11) NOT NULL,
  `Parametre_idParametre` int(11) NOT NULL,
  `P_CODE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idPersonnel`,`Responsable_idResponsable`,`Parametre_idParametre`),
  KEY `fk_Personnel_Responsable1_idx` (`Responsable_idResponsable`),
  KEY `fk_Personnel_Parametre1_idx` (`Parametre_idParametre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`idPersonnel`, `Nom`, `Role`, `Responsable_idResponsable`, `Parametre_idParametre`, `P_CODE`) VALUES
(1, 'sidi', 'conducteur', 2, 1, '4'),
(2, 'toto', 'equipier', 1, 2, '5'),
(3, 'tat', 'apprenant', 3, 2, '6'),
(4, 'amine', 'chef equipe', 2, 1, '7'),
(5, 'sali', 'equipier', 1, 2, '8');

-- --------------------------------------------------------

--
-- Table structure for table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id_rapport` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text DEFAULT NULL,
  `Numero_intervention` int(11) DEFAULT NULL,
  `statut` varchar(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_rapport`),
  KEY `Numero_intervention` (`Numero_intervention`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapport`
--

INSERT INTO `rapport` (`id_rapport`, `contenu`, `Numero_intervention`, `statut`, `date`) VALUES
(4, 'nouveau rapport', 1, 'valide', '2020-02-25'),
(5, 'tooot ttrettrebbyx yx,nbxmc mnbkj< kkjyx  poolk', 4, 'valide', '2020-02-25'),
(8, 'dernier rapport maitenant je faais la dernierre modification fifn mec qdfjsd sdjfknlkdf knk df sdnlksdf dsfsmd   sdfl  df j\'aos', 2, 'rejete', '2020-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `idResponsable` int(11) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `P_CODE` varchar(20) NOT NULL,
  PRIMARY KEY (`idResponsable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responsable`
--

INSERT INTO `responsable` (`idResponsable`, `Nom`, `P_CODE`) VALUES
(1, 'kante', '1'),
(2, 'hamza', '2'),
(3, 'oumar', '3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_rapport`) REFERENCES `rapport` (`id_rapport`);

--
-- Constraints for table `engins_personnel`
--
ALTER TABLE `engins_personnel`
  ADD CONSTRAINT `engins_personnel_ibfk_1` FOREIGN KEY (`Intervention_Numero_intervention`) REFERENCES `intervention` (`Numero_Intervention`),
  ADD CONSTRAINT `engins_personnel_ibfk_2` FOREIGN KEY (`Responsable_idResponsable`) REFERENCES `responsable` (`idResponsable`),
  ADD CONSTRAINT `fk_Engins_has_Personnel_Engins1` FOREIGN KEY (`Engins_idEngins`) REFERENCES `engins` (`idEngins`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `fk_Intervention_Geographique1` FOREIGN KEY (`Geographique_idGeographique`) REFERENCES `geographique` (`idGeographique`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `intervention_ibfk_1` FOREIGN KEY (`Responsable_idResponsable`) REFERENCES `responsable` (`idResponsable`);

--
-- Constraints for table `intervention_engins`
--
ALTER TABLE `intervention_engins`
  ADD CONSTRAINT `fk_Intervention_has_Engins_Engins1` FOREIGN KEY (`Engins_idEngins`) REFERENCES `engins` (`idEngins`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Intervention_has_Engins_Intervention` FOREIGN KEY (`Intervention_Numero_Intervention`) REFERENCES `intervention` (`Numero_Intervention`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `fk_Personnel_Parametre1` FOREIGN KEY (`Parametre_idParametre`) REFERENCES `parametre` (`idParametre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Personnel_Responsable1` FOREIGN KEY (`Responsable_idResponsable`) REFERENCES `responsable` (`idResponsable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `rapport_ibfk_1` FOREIGN KEY (`Numero_intervention`) REFERENCES `intervention` (`Numero_Intervention`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

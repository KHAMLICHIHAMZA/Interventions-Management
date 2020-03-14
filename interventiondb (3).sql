CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text DEFAULT NULL,
  `date` date,
  `id_rapport` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_rapport` (`id_rapport`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `engins` (
  `idEngins` int(11) NOT NULL,
  `Nom_Engin` varchar(45) DEFAULT NULL,
  `Date_Heur_Depart` date DEFAULT NULL,
  `Date_Heure_Arriver` date DEFAULT NULL,
  `Date_Heure_Retour` date DEFAULT NULL,
  PRIMARY KEY (`idEngins`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `geographique` (
  `idGeographique` int(11) NOT NULL,
  `Position_X` int(11) DEFAULT NULL,
  `Position_Y` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGeographique`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `intervention_engins` (
  `Intervention_Numero_Intervention` int(11) NOT NULL,
  `Engins_idEngins` int(11) NOT NULL,
  PRIMARY KEY (`Intervention_Numero_Intervention`,`Engins_idEngins`),
  KEY `fk_Intervention_has_Engins_Engins1_idx` (`Engins_idEngins`),
  KEY `fk_Intervention_has_Engins_Intervention_idx` (`Intervention_Numero_Intervention`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `parametre` (
  `idParametre` int(11) NOT NULL,
  `Jours_Feries` varchar(45) DEFAULT NULL,
  `Heure_Debut` datetime DEFAULT NULL,
  `Heure_Fin` datetime DEFAULT NULL,
  PRIMARY KEY (`idParametre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `personnel` (
  `idPersonnel` int(11) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `Responsable_idResponsable` int(11) NOT NULL,
  `P_CODE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idPersonnel`,`Responsable_idResponsable`),
  KEY `fk_Personnel_Responsable1_idx` (`Responsable_idResponsable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `rapport` (
  `id_rapport` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text DEFAULT NULL,
  `Numero_intervention` int(11) DEFAULT NULL,
  `statut` varchar(100) DEFAULT NULL,
  `date` date,
  PRIMARY KEY (`id_rapport`),
  KEY `Numero_intervention` (`Numero_intervention`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `responsable` (
  `idResponsable` int(11) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `P_CODE` varchar(20) NOT NULL,
  PRIMARY KEY (`idResponsable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_rapport`) REFERENCES `rapport` (`id_rapport`);

ALTER TABLE `engins_personnel`
  ADD CONSTRAINT `engins_personnel_ibfk_1` FOREIGN KEY (`Intervention_Numero_intervention`) REFERENCES `intervention` (`Numero_Intervention`),
  ADD CONSTRAINT `engins_personnel_ibfk_2` FOREIGN KEY (`Responsable_idResponsable`) REFERENCES `responsable` (`idResponsable`),
  ADD CONSTRAINT `fk_Engins_has_Personnel_Engins1` FOREIGN KEY (`Engins_idEngins`) REFERENCES `engins` (`idEngins`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `intervention`
  ADD CONSTRAINT `fk_Intervention_Geographique1` FOREIGN KEY (`Geographique_idGeographique`) REFERENCES `geographique` (`idGeographique`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `intervention_ibfk_1` FOREIGN KEY (`Responsable_idResponsable`) REFERENCES `responsable` (`idResponsable`);

ALTER TABLE `intervention_engins`
  ADD CONSTRAINT `fk_Intervention_has_Engins_Engins1` FOREIGN KEY (`Engins_idEngins`) REFERENCES `engins` (`idEngins`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Intervention_has_Engins_Intervention` FOREIGN KEY (`Intervention_Numero_Intervention`) REFERENCES `intervention` (`Numero_Intervention`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `personnel`
  ADD CONSTRAINT `fk_Personnel_Responsable1` FOREIGN KEY (`Responsable_idResponsable`) REFERENCES `responsable` (`idResponsable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `rapport`
  ADD CONSTRAINT `rapport_ibfk_1` FOREIGN KEY (`Numero_intervention`) REFERENCES `intervention` (`Numero_Intervention`);
COMMIT;

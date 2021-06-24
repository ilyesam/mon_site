-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Juin 2021 à 17:53
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdd_medical`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE IF NOT EXISTS `avoir` (
  `id_avoir` int(11) NOT NULL AUTO_INCREMENT,
  `id_p` int(11) NOT NULL,
  `id_m` int(11) NOT NULL,
  PRIMARY KEY (`id_avoir`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `connecter`
--

CREATE TABLE IF NOT EXISTS `connecter` (
  `id` int(110) NOT NULL AUTO_INCREMENT,
  `date_c` varchar(100) NOT NULL,
  `etat` varchar(100) NOT NULL,
  `idc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Contenu de la table `connecter`
--

INSERT INTO `connecter` (`id`, `date_c`, `etat`, `idc`) VALUES
(1, '12', '12', ''),
(2, '1', '1', '1'),
(3, '06/06/2021', '1', '9835'),
(4, '06/06/2021', '1', '9672'),
(5, '06/06/2021', '0', '4441'),
(6, '06/06/2021', '0', '12574'),
(7, '06/06/2021', '1', '8889'),
(8, '06/06/2021', '0', '13921'),
(9, '06/06/2021', '1', '25990'),
(10, '06/06/2021', '1', '15943'),
(11, '06/06/2021', '0', '12227'),
(12, '06/06/2021', '1', '28736'),
(13, '13/06/2021', '0', '2135'),
(14, '13/06/2021', '1', '22573'),
(15, '13/06/2021', '1', '29026'),
(16, '13/06/2021', '0', '22688'),
(17, '13/06/2021', '0', '4707'),
(18, '13/06/2021', '0', '20996'),
(19, '13/06/2021', '0', '11872'),
(20, '13/06/2021', '0', '12057'),
(21, '13/06/2021', '1', '23518'),
(22, '13/06/2021', '1', '21235'),
(23, '14/06/2021', '1', '6097'),
(24, '14/06/2021', '1', '566'),
(25, '14/06/2021', '0', '27157'),
(26, '14/06/2021', '1', '5431'),
(27, '14/06/2021', '0', '16682'),
(28, '14/06/2021', '0', '15131'),
(29, '14/06/2021', '0', '5304'),
(30, '14/06/2021', '0', '31396'),
(31, '14/06/2021', '0', '24589'),
(32, '15/06/2021', '0', '18454'),
(33, '15/06/2021', '1', '13557'),
(34, '15/06/2021', '0', '29854'),
(35, '15/06/2021', '0', '27438'),
(36, '16/06/2021', '0', '24472'),
(37, '16/06/2021', '0', '13297'),
(38, '16/06/2021', '1', '15318'),
(39, '16/06/2021', '1', '15650'),
(40, '16/06/2021', '0', '968'),
(41, '16/06/2021', '1', '5043'),
(42, '16/06/2021', '0', '7536'),
(43, '16/06/2021', '0', '15457'),
(44, '16/06/2021', '0', '29574'),
(45, '16/06/2021', '0', '13383'),
(46, '16/06/2021', '1', '5236'),
(47, '16/06/2021', '0', '22761'),
(48, '16/06/2021', '1', '15773'),
(49, '21/06/2021', '0', '6985'),
(50, '21/06/2021', '0', '3150'),
(51, '21/06/2021', '0', '28499'),
(52, '21/06/2021', '0', '5572'),
(53, '21/06/2021', '0', '24720'),
(54, '21/06/2021', '0', '11437'),
(55, '21/06/2021', '0', '27618'),
(56, '21/06/2021', '1', '21607'),
(57, '21/06/2021', '1', '17547'),
(58, '21/06/2021', '0', '532'),
(59, '21/06/2021', '0', '14696'),
(60, '21/06/2021', '0', '20865'),
(61, '21/06/2021', '0', '12838'),
(62, '21/06/2021', '0', '7783'),
(63, '21/06/2021', '0', '31603'),
(64, '21/06/2021', '0', '10941'),
(65, '21/06/2021', '0', '1044'),
(66, '21/06/2021', '0', '30898'),
(67, '21/06/2021', '0', '18992'),
(68, '21/06/2021', '0', '1213'),
(69, '22/06/2021', '0', '26281'),
(70, '22/06/2021', '0', '29127'),
(71, '22/06/2021', '0', '30797'),
(72, '22/06/2021', '0', '17396'),
(73, '22/06/2021', '0', '24322'),
(74, '22/06/2021', '0', '16403'),
(75, '22/06/2021', '0', '16976'),
(76, '22/06/2021', '0', '19529'),
(77, '22/06/2021', '0', '30493'),
(78, '22/06/2021', '1', '5619'),
(79, '23/06/2021', '0', '15075'),
(80, '23/06/2021', '0', '17797'),
(81, '23/06/2021', '0', '20442'),
(82, '24/06/2021', '0', '7179'),
(83, '24/06/2021', '0', '6230'),
(84, '24/06/2021', '1', '2470'),
(85, '24/06/2021', '1', '4995'),
(86, '24/06/2021', '0', '19908'),
(87, '24/06/2021', '0', '26880'),
(88, '24/06/2021', '1', '8783'),
(89, '24/06/2021', '0', '24028');

-- --------------------------------------------------------

--
-- Structure de la table `dosssier_medical`
--

CREATE TABLE IF NOT EXISTS `dosssier_medical` (
  `id_dossier` int(11) NOT NULL AUTO_INCREMENT,
  `id_p` int(11) NOT NULL,
  `id_m` int(11) NOT NULL,
  `Antecedant` text CHARACTER SET utf8 COLLATE utf8_bin,
  `traitement_actuel` text CHARACTER SET utf8 COLLATE utf8_bin,
  `resultat_anal_biologiques` text CHARACTER SET utf8 COLLATE utf8_bin,
  `resultat_irm_radio` text CHARACTER SET utf8 COLLATE utf8_bin,
  `pathologie` varchar(200) DEFAULT NULL,
  `date_dossier` datetime NOT NULL,
  PRIMARY KEY (`id_dossier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `dosssier_medical`
--

INSERT INTO `dosssier_medical` (`id_dossier`, `id_p`, `id_m`, `Antecedant`, `traitement_actuel`, `resultat_anal_biologiques`, `resultat_irm_radio`, `pathologie`, `date_dossier`) VALUES
(1, 1, 1, ' 2', ' 21', ' 21', ' 21', ' 21', '2021-05-27 09:20:06'),
(2, 14588, 1, ' 66', ' 66', ' 66', ' 66', ' 66ffffffffffff', '0000-00-00 00:00:00'),
(3, 15237, 1, '77', '77', '77', '77', '77', '0000-00-00 00:00:00'),
(4, 16196, 1, '   clean', '   Aucun\r\nTraitement 1\r\nTraitement2', '   Bon\r\nAssez bon\r\n', '    Bonne ', '    Rhume', '0000-00-00 00:00:00'),
(5, 24551, 1, 'clean', 'clean', 'clean', 'clean', 'Toux', '0000-00-00 00:00:00'),
(6, 26516, 1, '', '', '', '', '', '0000-00-00 00:00:00'),
(7, 25149, 1, '', '', '', '', '', '0000-00-00 00:00:00'),
(8, 6706, 1, '', '', '', '', '', '0000-00-00 00:00:00'),
(9, 16599, 1, '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `id_med` int(11) NOT NULL AUTO_INCREMENT,
  `nom_med` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `prenom_med` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `specialite_med` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mp` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_med`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`id_med`, `nom_med`, `prenom_med`, `specialite_med`, `email`, `mp`, `adresse`, `ville`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1'),
(2, '1', '1', '1', '1', '1', '1', '1'),
(3, 'berouaa', 'djamila', '3', '123@123.com', '123', '', 'paris'),
(5, 'allaa', 'md', 'ORL', 'allaa@gmail.com', NULL, 'oyyy', 'paris'),
(6, 'AMROUN', 'Ilyes', 'Sélectionner la Spécialité...', 'ilyesamroun28@gmail.com', NULL, '10 Allée Louis Arragon', 'paris'),
(7, 'Medecinn', 'Medddddd', '2', 'med3@gmail.com', NULL, '10 Allée Louis Arragon', 'paris');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id_p` int(50) NOT NULL,
  `nom_p` varchar(100) CHARACTER SET utf8 NOT NULL,
  `prenom_p` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_naiss_p` date NOT NULL,
  `adresse_p` varchar(100) NOT NULL,
  `tel_p` varchar(25) NOT NULL,
  `email_p` varchar(100) NOT NULL,
  `sexe_p` varchar(25) NOT NULL,
  `n_securite_social` varchar(100) DEFAULT NULL,
  `ville_p` varchar(100) NOT NULL,
  `pays_p` varchar(100) NOT NULL,
  `id_med` int(11) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id_p`, `nom_p`, `prenom_p`, `date_naiss_p`, `adresse_p`, `tel_p`, `email_p`, `sexe_p`, `n_securite_social`, `ville_p`, `pays_p`, `id_med`) VALUES
(1, 'nom', 'prénom', '0000-00-00', '1', '1', 'p@gmail.com', 'm', '1654654564', 'paris', 'france', 0),
(2, '1', '1', '0000-00-00', '1', '1', '1', '1', '1', '1', '1', 0),
(3, '1', '1', '0000-00-00', '1', '', '1', '1', '1', '1', '1', 1),
(4, '2', '2', '0000-00-00', '2', '', '2', '2', '2', '2', '2', 0),
(5, '2', '2', '0000-00-00', '2', '2', '2', '2', '2', '2', '2', 1),
(6, '2', '2', '0000-00-00', '2', '2', '2', '2', '2', '2', '2', 1),
(6706, 'ttttttttttttttttttttttt', 'tttttttttttt', '1992-06-29', 'tttttttttttt', '0222222222', 'tttttt@gmail.fr', 'f', '01234567896541', 'tttttt', 'France', 1),
(11630, '55', '55', '0000-00-00', '55', '55', '55', '55', '55', '55', '55', 1),
(13486, 'PAUL', 'Claude', '1958-07-28', '40 rue de la liberation', '0610101010', 'claude.paul@yahoo.fr', 'm', '12345678987654', 'Paris', 'France', 1),
(14588, '66', '66', '0000-00-00', '66', '66', '66', '66', '66', '66', '66', 1),
(15237, '77', '77', '0000-00-00', '77', '77', '77', '77', '77', '77', '77', 1),
(16196, 'Pierre', 'Mendes', '0000-00-00', '11 rue de la paix', '0666666666', '', '', '2313218489', 'Issy', 'France', 1),
(16599, 'aaaaaaaaaaaa', 'aaaaaaaaa', '1984-01-28', 'aaaaaa', '0333333333', 'aaaaaaa@gmail.com', 'm', '987456321098745', 'aaaaa', 'France', 1),
(24551, 'PAUL', 'Claude', '1958-07-28', '40 rue de la liberation', '0610101010', 'claude.paul@yahoo.fr', 'm', '12345678987654', 'Paris', 'France', 1),
(25149, 'ssssssssssssss', 'ssssssssssss', '1975-06-08', 'ssssssss', '0111111111', 'sssss@gmail.fr', 'f', '01234567899874', 'sssss', 'France', 1),
(26516, 'DUPONT', 'Clara', '1980-05-07', '30 rue des lilas', '0611111111', 'clara.dupont@gmail.fr', 'f', '987456321789456', 'Paris', 'France', 1),
(30191, '55', '55', '0000-00-00', '55', '55', '55', '55', '55', '55', '55', 1);

-- --------------------------------------------------------

--
-- Structure de la table `plage_horaire`
--

CREATE TABLE IF NOT EXISTS `plage_horaire` (
  `id_h` int(11) NOT NULL AUTO_INCREMENT,
  `id_m` int(11) NOT NULL,
  `jour_semaine` varchar(100) NOT NULL,
  `heure_debut` time NOT NULL,
  `heur_fin` time NOT NULL,
  PRIMARY KEY (`id_h`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(3, 'test', 'test', '2021-04-11 14:13:34', '2021-04-11 14:13:34');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `id_rdv` int(11) NOT NULL AUTO_INCREMENT,
  `id_p` int(11) DEFAULT NULL,
  `id_m` int(11) NOT NULL,
  `date_heure_rdv` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id_rdv`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `rdv`
--

INSERT INTO `rdv` (`id_rdv`, `id_p`, `id_m`, `date_heure_rdv`, `nom`, `prenom`, `tel`) VALUES
(1, 0, 1, '1', '1', '1', '1'),
(3, NULL, 1, '', '1 1', '', ''),
(4, NULL, 1, '4', '4', '4', '4'),
(5, NULL, 4, '4', '4', '4', '4'),
(6, NULL, 0, '5555', '555', '555', '5555'),
(7, NULL, 0, '6666', '666', '6', '6666'),
(8, NULL, 1, '987', '987', '987', '987'),
(9, NULL, 2, '46', '5464', '65', '54'),
(10, NULL, 1, '15/06/2021 10:00', 'nom', 'prenom', '0659364299'),
(11, NULL, 1, '15/06/2021 11:00', 'Pierre', 'Mendes', '0666666666'),
(12, NULL, 1, '16/08/2021 11:00', 'thomas', 'van', '075645181928'),
(13, NULL, 5, '19/06/2021', 'nom2', 'Prénom2', '0778986545'),
(14, NULL, 1, '2021-06-21T16:00', 'Amr', 'Aek', '0770926410'),
(15, NULL, 1, '2021-07-07T15:00', 'PAUL', 'Claude', '0610101010'),
(16, NULL, 1, '2021-06-25T10:20', 'aaaaaaaaaaaa', 'aaaaaaaaa', '0333333333');

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE IF NOT EXISTS `secretaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `id_` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `role`, `created`, `modified`, `id_`) VALUES
(5, 'test', 'test', 'test@test.com', '0550265465', 'admin', '2021-04-11 14:11:43', '2021-04-11 14:11:43', 1),
(6, 'med', 'med', 'med@gmail.com', NULL, 'medecin', '2021-05-27 00:00:00', NULL, 1),
(7, 'patient', '123', 'contact@gmail.com', '066023585145', 'patient', '2021-05-04 00:00:00', NULL, 1),
(8, '2', '2', '2', '2', '2', '2021-05-12 00:00:00', '2021-05-12 00:00:00', 2),
(9, '', '12334', '55', '55', 'patient', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 11630),
(10, '', '66', '66', '66', 'patient', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14588),
(11, '', '66', '66', '66', 'patient', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14588),
(12, '', '77', '77', '77', 'patient', '2021-05-19 00:00:00', '2021-05-19 00:00:00', 15237),
(13, 'Pierre', 'pierremendes90', '', '0666666666', 'patient', '2021-06-13 15:04:00', '2021-06-13 15:04:00', 16196),
(14, 'cpaul', 'cpaul1010', 'claude.paul@yahoo.fr', '0610101010', 'patient', '2021-06-24 14:38:00', '2021-06-24 14:38:00', 24551),
(15, '', 'Dupclara80', 'clara.dupont@gmail.fr', '0611111111', 'patient', '2021-06-24 14:00:00', '2021-06-24 14:00:00', 26516),
(16, '', 'ssssssss', 'sssss@gmail.fr', '0111111111', 'patient', '2021-06-24 15:51:00', '2021-06-24 15:51:00', 25149),
(17, '', 'tttttttt', 'tttttt@gmail.fr', '0222222222', 'patient', '2021-06-24 15:01:00', '2021-06-24 15:01:00', 6706),
(18, 'aaaaaa', 'aaaaaaaaa', 'aaaaaaa@gmail.com', '0333333333', 'patient', '2021-06-24 15:18:00', '2021-06-24 15:18:00', 16599);

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE IF NOT EXISTS `visite` (
  `id_visite` int(11) NOT NULL AUTO_INCREMENT,
  `id_p` int(11) NOT NULL,
  `id_m` int(11) NOT NULL,
  `date_visite` date NOT NULL,
  `diagnostic_patient` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_visite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

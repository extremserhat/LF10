-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Apr 2016 um 11:01
-- Server Version: 5.6.16
-- PHP-Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `gewinnspiel`
--
CREATE DATABASE IF NOT EXISTS `gewinnspiel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gewinnspiel`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gw_antworten`
--

DROP TABLE IF EXISTS `gw_antworten`;
CREATE TABLE IF NOT EXISTS `gw_antworten` (
  `an_frage` int(11) DEFAULT NULL,
  `an_antwort` int(11) DEFAULT NULL,
  `an_text` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gw_antworten`
--

INSERT INTO `gw_antworten` (`an_frage`, `an_antwort`, `an_text`) VALUES
(1, 1, 'Ram'),
(1, 2, 'Rom'),
(1, 3, 'Bios'),
(2, 1, 'Brüssel'),
(2, 2, 'London'),
(2, 3, 'Paris'),
(3, 1, 'Slowakei'),
(3, 2, 'Slowenien'),
(3, 3, 'Tschechien'),
(4, 1, 'Ljubljana'),
(4, 2, 'Istanbul'),
(4, 3, 'Oslo');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gw_fragen`
--

DROP TABLE IF EXISTS `gw_fragen`;
CREATE TABLE IF NOT EXISTS `gw_fragen` (
  `fr_id` int(11) NOT NULL AUTO_INCREMENT,
  `fr_frage` varchar(80) DEFAULT NULL,
  `fr_korrekt` int(11) DEFAULT NULL,
  PRIMARY KEY (`fr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `gw_fragen`
--

INSERT INTO `gw_fragen` (`fr_id`, `fr_frage`, `fr_korrekt`) VALUES
(1, 'Wie heißt die Hauptstadt von Italien?', 2),
(2, 'Welche dieser Hauptstädte hieß einst Lutetia?', 3),
(3, 'Bratislava ist die Hauptstadt von ...?', 1),
(4, 'Welche dieser Städte ist keine Hauptstadt?', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gw_teilnahme`
--

DROP TABLE IF EXISTS `gw_teilnahme`;
CREATE TABLE IF NOT EXISTS `gw_teilnahme` (
  `tl_tln` int(11) DEFAULT NULL,
  `tl_frag` int(11) DEFAULT NULL,
  `tl_antw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gw_teilnahme`
--

INSERT INTO `gw_teilnahme` (`tl_tln`, `tl_frag`, `tl_antw`) VALUES
(4, 1, 2),
(4, 2, 3),
(4, 3, 1),
(4, 4, 2),
(5, 1, 2),
(5, 2, 1),
(5, 3, 2),
(5, 4, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gw_teilnehmer`
--

DROP TABLE IF EXISTS `gw_teilnehmer`;
CREATE TABLE IF NOT EXISTS `gw_teilnehmer` (
  `tn_id` int(11) NOT NULL AUTO_INCREMENT,
  `tn_uname` varchar(40) DEFAULT NULL,
  `tn_email` varchar(50) DEFAULT NULL,
  `tn_interest` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`tn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `gw_teilnehmer`
--

INSERT INTO `gw_teilnehmer` (`tn_id`, `tn_uname`, `tn_email`, `tn_interest`) VALUES
(1, 'Kanzler', 'HansK@web.de', '1'),
(2, 'Gruber', 'gruber@t-online.de', '2'),
(3, 'Hauser', 'hauser@hsa.de', '3'),
(4, 'güni', 'ich@web.de', '4'),
(5, 'andreas', 'andreas.schmieder@googlemail.com', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

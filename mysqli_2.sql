-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 18. Feb 2017 um 01:36
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mysqli_2`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `text`
--

CREATE TABLE `text` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL DEFAULT '1',
  `Email` varchar(250) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `userlevel` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `IP`, `date`, `userlevel`) VALUES
(28, 'diego', 'diego@mail.de', '84d3e7273e5b1813862437221de7c8790cb6df842276d44c02813f6a47484a56', '0', '2017-01-24 01:08:06', 1),
(29, 'perlo', 'perlo@mail.com', '7dfa966315b40c4fb8b59109a3eac5dbeac0bfe51252c7b7460bcf3d298a7958', '0', '2017-01-24 01:15:34', 1),
(32, 'juangarcia', 'juangarciaotromail@gmail.com', '12345', '0', '2017-01-24 19:30:39', 1),
(49, 'any3', 'any3@gmail.com', 'cc96c9596473055ef070af3672b2601f88e9b5aba9b718dea7b3ff99252bbfe3', '2130706433', '2017-01-25 20:19:07', 1),
(64, 'karola', 'karola@mail.de', '0d6e59afde066af4a3cd26d4e481ff1f6d2b68d22440f0b815857bfd61b19064', '2130706433', '2017-01-31 23:29:58', 2),
(67, 'anyname555', 'anyname555@gmail.com', '97f2921ba3d20a0f5f1e0d958266a6f7bca0c264218605634d993f40e9aff626', '2130706433', '2017-02-01 20:39:15', 1),
(94, 'ulfi', 'ulfi@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '0', '2017-02-17 22:10:58', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `text`
--
ALTER TABLE `text`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

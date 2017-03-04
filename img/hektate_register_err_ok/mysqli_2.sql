-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 01. Feb 2017 um 20:51
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
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `userlevel` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `IP`, `date`, `userlevel`) VALUES
(1, 'ulfi', 'ulf@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '0', '2017-01-22 21:35:17', 0),
(2, 'kar', 'alien@mail.de', '206febc76c928a0fc709f353bb36af007282f3e30072f24b6fd2657ec8691206', '0', '2017-01-22 21:53:41', 0),
(5, 'kur', 'kar-kur@freenet.de', '$2y$10$6Ymy5PwoyS53x3E65o78N.ulsmU6.CJ1kq17zakdF.GwjoCGSNDQG', '0', '2017-01-22 22:06:31', 0),
(7, 'laien', 'laien@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '0', '2017-01-22 22:12:13', 0),
(9, 'alien', 'alien@mail.com', '0d6e59afde066af4a3cd26d4e481ff1f6d2b68d22440f0b815857bfd61b19064', '0', '2017-01-22 22:17:55', 0),
(15, 'guten', 'guten@morgen.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '0', '2017-01-22 23:08:29', 0),
(16, 'uschi', 'uschi@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '0', '2017-01-23 00:26:59', 0),
(25, 'grÃ¶ben', 'groeben@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '0', '2017-01-23 01:07:13', 0),
(28, 'diego', 'diego@mail.de', '84d3e7273e5b1813862437221de7c8790cb6df842276d44c02813f6a47484a56', '0', '2017-01-24 01:08:06', 0),
(29, 'perlo', 'perlo@mail.com', '7dfa966315b40c4fb8b59109a3eac5dbeac0bfe51252c7b7460bcf3d298a7958', '0', '2017-01-24 01:15:34', 0),
(31, 'ekel', 'alfred@mail.de', '3772950dfcab39b40c25dd13082b74df7ad449e5b9c4f4e5c5360388e103976c', '0', '2017-01-24 01:18:45', 0),
(32, 'juangarcia', 'juangarcia@gmail.com', 'cc96c9596473055ef070af3672b2601f88e9b5aba9b718dea7b3ff99252bbfe3', '0', '2017-01-24 19:30:39', 0),
(33, 'anyname', 'anymail@gmail.com', 'cc96c9596473055ef070af3672b2601f88e9b5aba9b718dea7b3ff99252bbfe3', '0', '2017-01-24 20:22:46', 0),
(35, 'anyname2', 'anyname2@gmail.com', 'cc96c9596473055ef070af3672b2601f88e9b5aba9b718dea7b3ff99252bbfe3', '127', '2017-01-24 20:29:43', 0),
(36, 'alter name', 'name@mail.de', '5dcee184ea8f04765a077039500d6e5bdc553b4e7d334235959d51c62f153212', '127', '2017-01-25 14:05:58', 0),
(37, 'name name', 'name@mail.com', '5dcee184ea8f04765a077039500d6e5bdc553b4e7d334235959d51c62f153212', '127', '2017-01-25 14:17:51', 0),
(40, 'hallo', '123@mail.de', '2ca8a5f5797ea93505108c7856f37542d690f88c7ef8ffffc5f485ba0f531127', '127', '2017-01-25 14:21:18', 0),
(44, 'hallo1', 'hallo@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '127', '2017-01-25 14:23:34', 0),
(48, 'hallo2', 'hallo2@mail.de', '19d6d2fdfafbb97adfcb64dd2e2dcaed1f072bb734a6272a7cdc71a6bef35bec', '127', '2017-01-25 14:25:39', 0),
(49, 'any3', 'any3@gmail.com', 'cc96c9596473055ef070af3672b2601f88e9b5aba9b718dea7b3ff99252bbfe3', '2130706433', '2017-01-25 20:19:07', 0),
(51, 'andreas', 'andreas@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '2130706433', '2017-01-25 20:46:46', 0),
(52, 'benjamin', 'bluemchen@mail.de', '2af001075a1bbef765fac604a26f22d6efb1fb1df4a0ce58e82bf786a8a0d7b3', '2130706433', '2017-01-25 23:34:38', 0),
(54, 'name', 'meinname@mail.de', '854c38e88df548208e6af8ed1884d48c8b43ca2fd0a14fed2c5699b84ad2d2e0', '2130706433', '2017-01-27 10:25:09', 0),
(55, 'klasse', 'tasse@mail.com', '1b53316f13ce9d7a59fd4ba10f7fbe9f809d1bfc623cd6062d2210385fabf2a9', '2130706433', '2017-01-27 14:51:24', 0),
(58, 'tobi', 'tobi@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '2130706433', '2017-01-27 16:08:52', 1),
(62, 'mÃ¼lleimer', 'muelleimer@mail.de', 'd46f4ea98fd480e8916a67b787c20b3173989b8142613740a87a5af23597c265', '2130706433', '2017-01-27 19:53:39', 0),
(63, 'andrea', 'neue@gmail.com', '2676b1f547eb2b0184e8712427dceb3f7e0f5099307fe874fa81354b05d8b7fb', '2130706433', '2017-01-29 22:38:15', 0),
(64, 'karola', 'karola@mail.de', '0d6e59afde066af4a3cd26d4e481ff1f6d2b68d22440f0b815857bfd61b19064', '2130706433', '2017-01-31 23:29:58', 1),
(65, 'martin', 'martin@mail.de', '58cc76601a03698b474cf0fae311dcd6a2ffb77ddad328a81ea1045e6856e450', '2130706433', '2017-02-01 00:29:05', 0),
(67, 'anyname555', 'anyname555@gmail.com', '97f2921ba3d20a0f5f1e0d958266a6f7bca0c264218605634d993f40e9aff626', '2130706433', '2017-02-01 20:39:15', 1);

--
-- Indizes der exportierten Tabellen
--

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
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

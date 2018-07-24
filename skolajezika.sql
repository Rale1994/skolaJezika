-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 09:33 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skolajezika`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE `clanovi` (
  `imeprezime` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `brojtelefona` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `stranijezik` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `napomena` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`imeprezime`, `brojtelefona`, `email`, `stranijezik`, `napomena`) VALUES
('Dejana Matovic', '064857496', 'dekinoair@gmail.com', 'Arapski', 'Mora li bas s desna u levo?'),
('Ivana Milićević', '064859587', 'ivana.milicevic18@gmail.com', 'italijanski', 'Cool'),
('Pera Perić', '064859674', 'perica@gmail.com', 'Arapski', ':)');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `komentar` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `imeprezime` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `kurs` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sifra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`komentar`, `imeprezime`, `kurs`, `sifra`) VALUES
('super', 'Pera Perić', 'Italijanski', 1),
('Strava super extra vrh, profesorka kida, kursevi su odlicni', 'Radovan', 'Nemački', 2),
('Svaka čast', 'Mika', 'Engleski', 3),
('Odlicno', 'Milojka', 'Španski', 4),
('super', 'Sanja', 'Španski', 123);

-- --------------------------------------------------------

--
-- Table structure for table `premiumkursevi`
--

CREATE TABLE `premiumkursevi` (
  `nazivkursa` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `cena` varchar(11) COLLATE utf32_unicode_ci NOT NULL,
  `trajanje` varchar(30) COLLATE utf32_unicode_ci NOT NULL,
  `brojpoena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `premiumkursevi`
--

INSERT INTO `premiumkursevi` (`nazivkursa`, `cena`, `trajanje`, `brojpoena`) VALUES
('Kurs arapskog jezika', '250 €', '3 meseca', 8),
('Kurs engleskog jezika', '250 €', '3 meseca', 10),
('Kurs francuskog jezika', '250 €', '3 meseca', 7),
('Kurs italijanskog jezika', '250 €', '3 meseca', 1),
('Kurs nemačkog jezika', '250 €', '3 meseca', 1),
('Kurs norveškog jezika', '250 €', '3 meseca', 1),
('Kurs ruskog jezika', '250 €', '3 meseca', 2),
('Kurs španskog jezika', '250 €', '3 meseca', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`brojtelefona`);

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`sifra`);

--
-- Indexes for table `premiumkursevi`
--
ALTER TABLE `premiumkursevi`
  ADD PRIMARY KEY (`nazivkursa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `sifra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

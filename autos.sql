-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 feb 2022 om 11:01
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autos`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(5) NOT NULL,
  `naam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `merk`
--

INSERT INTO `merk` (`id`, `naam`) VALUES
(1, 'Volkswagen'),
(2, 'Audi'),
(3, 'Opel'),
(4, 'Renault'),
(5, 'Peugeot'),
(6, 'BMW');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `model`
--

CREATE TABLE `model` (
  `id` int(5) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `merk_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `model`
--

INSERT INTO `model` (`id`, `naam`, `merk_id`) VALUES
(1, 'Golf', 1),
(2, 'Up', 1),
(3, 'Touran', 1),
(4, 'Tiguan', 1),
(5, 'A1', 2),
(6, 'A2', 2),
(7, 'A3', 2),
(8, 'A4', 2),
(9, 'Mokka', 3),
(10, 'Ampera', 3),
(11, 'Meriva', 3),
(12, 'Kadjar', 4),
(13, 'Captur', 4),
(14, 'Clio', 4),
(15, 'Scenic', 4),
(16, 'Partner', 5),
(17, 'Boxer', 5),
(18, '4007', 5),
(19, 'X1', 6),
(20, 'X2', 6),
(21, '2-serie', 6),
(22, '3-serie', 6);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `model`
--
ALTER TABLE `model`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `merk`
--
ALTER TABLE `merk`
  ADD CONSTRAINT `merk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `model` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

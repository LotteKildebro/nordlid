-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Vært: localhost
-- Genereringstid: 11. 11 2020 kl. 12:34:28
-- Serverversion: 10.4.11-MariaDB
-- PHP-version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nordlid`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `brugere`
--

CREATE TABLE `brugere` (
  `id` int(11) NOT NULL,
  `fname` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `tlf` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `brugere`
--

INSERT INTO `brugere` (`id`, `fname`, `email`, `tlf`) VALUES
(49, '', 'ukendt', 'ukendt'),
(50, 'ukendt', 'ukendt', 'ukendt'),
(57, 'test3333', 'test33333@hotmail.com', '98765432'),
(58, 'test3333', 'test33333@hotmail.com', '98765432'),
(59, 'ukendt', 'ukendt', 'ukendt'),
(60, 'ukendt', 'ukendt', 'ukendt'),
(75, 'mike', 'mike@hotmail.com', '98765434'),
(76, 'mike', 'mike@hotmail.com', '98765434'),
(78, 'jjjj', 'jjj@hotmail.com', '09876543'),
(80, 'jjjj', 'jjjj@hotmail.com', '567567'),
(82, 'mannyjjjjj', 'LotteKildebro93@hotmail.com', '56789678'),
(83, 'mannyjjjjj', 'LotteKildebro93@hotmail.com', '56789678'),
(84, '', '', ''),
(85, '', '', ''),
(86, '', '', ''),
(87, '', '', ''),
(88, '', '', ''),
(89, '', '', ''),
(90, '', '', ''),
(91, '', '', ''),
(92, '', '', ''),
(93, '', '', ''),
(94, '', '', ''),
(95, '', '', ''),
(96, '', '', ''),
(97, '', '', ''),
(98, '', '', ''),
(99, 'test', 'knjkj@kjdwkdj.dk', '67890098'),
(100, 'test', 'knjkj@kjdwkdj.dk', '67890098'),
(101, '', '', ''),
(102, '', '', ''),
(103, '', '', ''),
(104, 'test', 'LotteKildebro93@hotmail.com', '23234565'),
(105, '', '', ''),
(106, '', '', ''),
(107, '', '', ''),
(108, '', '', ''),
(109, 'testAmanda', 'amanda@hotmail.com', '65456765'),
(110, 'LOTTE ER SEEEEJ', 'hej@k.sk', '98765678'),
(111, 'LOTTE ER SEEEEJ', 'hej@k.sk', '98765678'),
(112, 'test', 'LotteKildebro93@hotmail.com', '44321234'),
(113, 'test', 'LotteKildebro93@hotmail.com', '34565432');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `brugere`
--
ALTER TABLE `brugere`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `brugere`
--
ALTER TABLE `brugere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

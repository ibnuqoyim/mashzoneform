-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 04 Mar 2018 pada 19.47
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u7402961_mzdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Level4`
--

CREATE TABLE `Level4` (
  `id` int(11) NOT NULL,
  `namaLvl4` varchar(30) NOT NULL,
  `idBisnis` varchar(30) NOT NULL,
  `idLvl3` int(11) NOT NULL,
  `idPic` int(11) NOT NULL,
  `progres` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Level4`
--

INSERT INTO `Level4` (`id`, `namaLvl4`, `idBisnis`, `idLvl3`, `idPic`, `progres`, `status`) VALUES
(1, 'MTO - FM 200 System', 'TA.000001', 0, 6, 0, 0),
(2, 'MTO - Fire Hydrant c/w monitor', 'TA.000002', 0, 6, 0, 0),
(3, 'MTO - Heavy Duty Hoses', 'TA.000003', 0, 8, 0, 0),
(4, 'MTO for Manual Valve', 'TA.000192', 0, 8, 0, 0),
(5, 'MTO for Fittings', 'TA.000193', 0, 8, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Level4`
--
ALTER TABLE `Level4`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

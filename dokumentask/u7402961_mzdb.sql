-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2018 at 09:37 PM
-- Server version: 10.1.31-MariaDB
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
-- Table structure for table `doctask`
--

CREATE TABLE `doctask` (
  `id` int(11) NOT NULL,
  `idDoc` int(11) NOT NULL,
  `forinput4` int(11) NOT NULL,
  `untilinput5` int(11) NOT NULL,
  `forinput5` varchar(100) NOT NULL,
  `outfrom` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `needA` int(11) NOT NULL,
  `source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctask`
--

INSERT INTO `doctask` (`id`, `idDoc`, `forinput4`, `untilinput5`, `forinput5`, `outfrom`, `file`, `needA`, `source`) VALUES
(61, 1, 1, 3, '1', 1, 'Safety Equipment Datasheet.pdf', 0, 'Process Safety Engineering'),
(62, 2, 1, 3, '1', 1, 'Mechanical Equipment Datasheet.pdf', 0, 'Mechanical Engineering'),
(63, 3, 1, 3, '1', 1, 'Piping Datasheet.pdf', 0, 'Piping Engineering'),
(64, 4, 1, 3, '1', 1, 'Piping Isometric Drawing.pdf', 0, 'Piping Engineering'),
(65, 5, 1, 3, '1', 1, 'Instrument and Telecom Calculation Sheet.pdf', 0, 'Instrument & Telecom Engineering'),
(66, 6, 1, 3, '1', 1, 'Instrument Cable Accessories Sheet.pdf', 0, 'Instrument & Telecom Engineering'),
(67, 7, 1, 3, '1', 1, 'Cable Schedule List.pdf', 0, 'Electrical Engineering'),
(68, 8, 1, 3, '1', 1, 'Site Development Plan.pdf', 0, 'Civil Engineering'),
(69, 9, 1, 3, '1', 1, 'Civil & Standard Drawing.pdf', 0, 'Civil Engineering'),
(70, 10, 1, 3, '1', 1, 'Civil & Structural.pdf', 0, 'Civil Engineering'),
(71, 11, 1, 3, '1', 1, 'Calculation and Detail Drawing.pdf', 0, 'Civil Engineering'),
(72, 12, 1, 3, '1', 1, 'Pipe Support Location & Foundation Drawing.pdf', 0, '0'),
(73, 13, 1, 4, '4', 6, '1.JPG', 0, '0'),
(74, 14, 1, 5, '5', 8, 'Draft Bill of Material.pdf', 2, 'Ardi'),
(75, 15, 1, 6, '6', 12, 'PrintScreen WebApp.png', 3, 'Hafiz'),
(76, 16, 1, 7, '7', 16, '', 0, '0'),
(77, 1, 2, 3, '1', 20, '', 0, 'Process Safety Engineering'),
(78, 2, 2, 3, '1', 20, '', 0, 'Mechanical Engineering'),
(79, 3, 2, 3, '1', 20, '', 0, 'Piping Engineering'),
(80, 4, 2, 3, '1', 20, '', 0, '0'),
(81, 5, 2, 3, '1', 20, '', 0, '0'),
(82, 6, 2, 3, '1', 20, '', 0, '0'),
(83, 7, 2, 3, '1', 20, '', 0, '0'),
(84, 8, 2, 3, '1', 20, '', 0, '0'),
(85, 9, 2, 3, '1', 20, '', 0, '0'),
(86, 10, 2, 3, '1', 20, '', 0, '0'),
(87, 11, 2, 3, '1', 20, '', 0, '0'),
(88, 12, 2, 3, '1', 20, '', 0, '0'),
(89, 13, 2, 4, '4', 25, '', 0, '0'),
(90, 14, 2, 5, '5', 27, '', 0, '0'),
(91, 15, 2, 6, '6', 31, '', 1, '0'),
(92, 16, 2, 7, '7', 35, '', 0, '0'),
(93, 1, 3, 3, '1', 39, '', 0, 'Process Safety Engineering'),
(94, 2, 3, 3, '1', 39, '', 0, 'Mechanical Engineering'),
(95, 3, 3, 3, '1', 39, '', 0, 'Piping Engineering'),
(96, 4, 3, 3, '1', 39, '', 0, '0'),
(97, 5, 3, 3, '1', 39, '', 0, '0'),
(98, 6, 3, 3, '1', 39, '', 0, '0'),
(99, 7, 3, 3, '1', 39, '', 0, '0'),
(100, 8, 3, 3, '1', 39, '', 0, '0'),
(101, 9, 3, 3, '1', 39, '', 0, '0'),
(102, 10, 3, 3, '1', 39, '', 0, '0'),
(103, 11, 3, 3, '1', 39, '', 0, '0'),
(104, 12, 3, 3, '1', 39, '', 0, '0'),
(105, 13, 3, 4, '4', 44, '', 0, '0'),
(106, 14, 3, 5, '5', 46, '', 0, '0'),
(107, 15, 3, 6, '6', 50, '', 1, '0'),
(108, 16, 3, 7, '7', 54, '', 0, '0'),
(109, 1, 4, 3, '1', 58, '', 0, 'Process Safety Engineering'),
(110, 2, 4, 3, '1', 58, '', 0, 'Mechanical Engineering'),
(111, 3, 4, 3, '1', 58, '', 0, 'Piping Engineering'),
(112, 4, 4, 3, '1', 58, '', 0, '0'),
(113, 5, 4, 3, '1', 58, '', 0, '0'),
(114, 6, 4, 3, '1', 58, '', 0, '0'),
(115, 7, 4, 3, '1', 58, '', 0, '0'),
(116, 8, 4, 3, '1', 58, '', 0, '0'),
(117, 9, 4, 3, '1', 58, '', 0, '0'),
(118, 10, 4, 3, '1', 58, '', 0, '0'),
(119, 11, 4, 3, '1', 58, '', 0, '0'),
(120, 12, 4, 3, '1', 58, '', 0, '0'),
(121, 13, 4, 4, '4', 63, '', 0, '0'),
(122, 14, 4, 5, '5', 65, '', 0, '0'),
(123, 15, 4, 6, '6', 69, '', 1, '0'),
(124, 16, 4, 7, '7', 73, '', 0, '0'),
(125, 1, 5, 3, '1', 77, '', 0, 'Process Safety Engineering'),
(126, 2, 5, 3, '1', 77, '', 0, 'Mechanical Engineering'),
(127, 3, 5, 3, '1', 77, '', 0, 'Piping Engineering'),
(128, 4, 5, 3, '1', 77, '', 0, '0'),
(129, 5, 5, 3, '1', 77, '', 0, '0'),
(130, 6, 5, 3, '1', 77, '', 0, '0'),
(131, 7, 5, 3, '1', 77, '', 0, '0'),
(132, 8, 5, 3, '1', 77, '', 0, '0'),
(133, 9, 5, 3, '1', 77, '', 0, '0'),
(134, 10, 5, 3, '1', 77, '', 0, '0'),
(135, 11, 5, 3, '1', 77, '', 0, '0'),
(136, 12, 5, 3, '1', 77, '', 0, '0'),
(137, 13, 5, 4, '4', 82, '', 0, '0'),
(138, 14, 5, 5, '5', 84, '', 0, '0'),
(139, 15, 5, 6, '6', 88, '', 1, '0'),
(140, 16, 5, 7, '7', 92, '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `dokreject`
--

CREATE TABLE `dokreject` (
  `id` int(11) NOT NULL,
  `idDocTask` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `lampiran` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokreject`
--

INSERT INTO `dokreject` (`id`, `idDocTask`, `alasan`, `lampiran`) VALUES
(8, 75, 'masih perlu disempurnakan.. kurang tuntas', 'Data Model Definition v.0..png'),
(7, 75, 'tidak kumplit pekerjaannya', 'ProjectPlanV.2.0.png');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `namaDoc` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `namaDoc`, `ket`) VALUES
(1, 'Safety Equipment Datasheet', '-'),
(2, 'Mechanical Equipment Datasheet', '-'),
(3, 'Piping Datasheet', '-'),
(4, 'Piping Isometric drawing', '-'),
(5, 'Instrument and Telecom Calculation Sheet', '-'),
(6, 'Instrument Cable Accessories Sheet', '-'),
(7, 'Cable Schedule List', '-'),
(8, 'Site Development Plan', '-'),
(9, 'Civil & Standard Drawing', '-'),
(10, 'Civil & Structural', '-'),
(11, 'Calculation and Detail Drawing', '-'),
(12, 'Pipe support location & foundation drawing', '-'),
(13, 'MTO List', '-'),
(14, 'Draft Bill of Material', '-'),
(15, 'Bill of Material to be Approved', '-'),
(16, 'Bill of Material Approved', '-');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` varchar(11) NOT NULL,
  `namaItem` varchar(30) NOT NULL,
  `idMto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `namaItem`, `idMto`) VALUES
('M 000 001', 'FM 200 System', 'MTO Process Safety'),
('M 000 002', 'Fire Hydrant c/w Monitor', 'MTO Process Safety'),
('M 000 003', 'Heavy Duty Houses', 'MTO Process Safety'),
('M 000 004', 'Adjustable Water Nozzle', 'MTO Process Safety'),
('M 000 005', 'Portable File Extinguisher', 'MTO Process Safety'),
('M 000 006', 'Water Spray Nozzle', 'MTO Process Safety'),
('M 000 007', 'Pipe', 'MTO Piping'),
('M 000 008', 'Manual Valve', 'MTO Piping'),
('M 000 009', 'Fittings', 'MTO Piping'),
('M 000 010', 'Flanges', 'MTO Piping'),
('M 000 011', 'Gasket', 'MTO Piping'),
('M 000 012', 'Bolt & Nuts', 'MTO Piping'),
('M 000 013', 'Bulk Material', 'MTO Instrument'),
('M 000 014', 'Cable and Accessories', 'MTO Instrument'),
('M 000 015', 'Bulk Material', 'MTO Electrical'),
('M 000 016', 'Main Equipment', 'MTO Electrical'),
('M 000 017', 'Cathodic Protection', 'MTO Electrical'),
('M 000 018', 'Electric Heater', 'MTO Electrical');

-- --------------------------------------------------------

--
-- Table structure for table `level4`
--

CREATE TABLE `level4` (
  `id` int(11) NOT NULL,
  `namaLvl4` varchar(30) NOT NULL,
  `idBisnis` varchar(30) NOT NULL,
  `idLvl3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level4`
--

INSERT INTO `level4` (`id`, `namaLvl4`, `idBisnis`, `idLvl3`) VALUES
(1, 'FM 200 System', 'TA.000001', 6),
(2, 'Fire Hydrant c/w monitor', 'TA.000002', 8),
(3, 'Heavy Duty Hoses', 'TA.000003', 6),
(4, 'Adjustable Water Nozzle', 'TA.000192', 8),
(5, 'Portable Fire Extinguisher', 'TA.000193', 6),
(6, 'Water Spray Nozzle', 'TA.000194', 8);

-- --------------------------------------------------------

--
-- Table structure for table `level5`
--

CREATE TABLE `level5` (
  `id` int(30) NOT NULL,
  `namaLvl5` varchar(30) NOT NULL,
  `idBisnis` varchar(30) NOT NULL,
  `idLvl4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level5`
--

INSERT INTO `level5` (`id`, `namaLvl5`, `idBisnis`, `idLvl4`) VALUES
(1, 'Menerima dokumen masukan', '04.08.01.01.00', '1'),
(2, 'Analisis Drawing', '04.08.01.02.00', '1'),
(3, 'Menyusun MTO List', '04.08.01.03.00', '1'),
(4, 'Menyusun Bill of Material', '04.08.01.04.00', '1'),
(5, 'Review Internal Bill Of Materi', '04.08.01.05.00', '1'),
(6, 'Konfirmasi dan Approval Bill O', '04.08.01.06.00', '1'),
(7, 'Menerima Bill of Material', '04.08.01.07.00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `level6`
--

CREATE TABLE `level6` (
  `id` int(30) NOT NULL,
  `namaLvl6` varchar(50) NOT NULL,
  `idBisnis` varchar(30) NOT NULL,
  `idLvl5` varchar(30) NOT NULL,
  `needA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level6`
--

INSERT INTO `level6` (`id`, `namaLvl6`, `idBisnis`, `idLvl5`, `needA`) VALUES
(1, 'Mengecek dokumen masukan', '04.08.01.01.01', '1', 0),
(2, 'Menerima dokumen masukan', '04.08.01.01.02', '1', 0),
(3, 'Memahami Dokumen', '04.08.01.02.01', '2', 0),
(4, 'Penajaman Analysis Dokumen TI', '04.08.01.02.02', '2', 0),
(5, 'Mengidentifikasikan Material yang Diperlukan', '04.08.01.03.01', '3', 0),
(6, 'Menyusun List Material Menjadi MTO List', '04.08.01.03.02', '3', 0),
(7, 'Menyusun Struktur Produk', '04.08.01.04.01', '4', 0),
(8, 'Menyerahkan BoM Ke Manager Engineering Proyek', '04.08.01.04.02', '4', 0),
(9, 'Menerima Draft Bill of Material', '04.08.01.05.01', '5', 0),
(10, 'Review Draft Bill of Material', '04.08.01.05.02', '5', 0),
(11, 'Memberi Catatan Revisi Bill of Material', '04.08.01.05.03', '5', 0),
(12, 'Mengkonfirmasi Bill of Material ke Owner', '04.08.01.05.04', '5', 0),
(13, 'Menerima Bill of Material', '04.08.01.06.01', '6', 0),
(14, 'Review Draft Bill of Material', '04.08.01.06.02', '6', 1),
(15, 'Memberi Catatan Revisi Bill of Material', '04.08.01.06.03', '6', 0),
(16, 'Meng-approve Bill of Material', '04.08.01.06.04', '6', 1),
(17, 'Menerima Bill of Material', '04.08.01.07.01', '7', 0),
(18, 'Mengarsipkan Bill of Material', '04.08.01.07.02', '7', 0),
(19, 'Meneruskan Bill of Material ke Dept. Pengadaan', '04.08.01.07.03	', '7', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mto`
--

CREATE TABLE `mto` (
  `id` int(11) NOT NULL,
  `nameMto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mto`
--

INSERT INTO `mto` (`id`, `nameMto`) VALUES
(1, 'MTO Process Safety'),
(2, 'MTO Piping'),
(3, 'MTO Instrument'),
(4, 'MTO Electrical');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `namePic` varchar(30) NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `author` varchar(40) NOT NULL,
  `postDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `attachment`, `author`, `postDate`) VALUES
(3, 'Pengumuman Pendaftaran Penghuni Baru Untuk Asrama Jatinangor Periode Januari - Mei 2016', '<p style=\"text-align: justify;\">\r\n	Bagi mahasiswa yang akan tinggal di Asrama Jatinangor pada periode kontrak Januari 2016 - Mei 2016, dapat mendaftarkan dan menandatangani kontrak pada;</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Tanggal : 25 Januari 2016 - 29 Januari 2016.</li>\r\n	<li style=\"text-align: justify;\">\r\n		Tempat : Kantor Sekretariat UPT Asrama di Gedung Lab. Doping Lt.1, Jalan Ganesha No.10 Bandung.</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n', '', '6', '2016-01-26'),
(4, 'Pengumuman Surat Kontrak untuk para Penghuni  Asrama Jatinangor ', '<p>\r\n	Terkait dengan Surat Kontrak untuk para Penghuni Asrama Jatinangor yang harus di tanda-tangani oleh setiap penghuni. Dimohon setiap penghuni menandatangani Surat Perjanjian Tinggal di Asrama ITB bedasarkan jadwal dan tempat yang terlampir di bawah ini.&nbsp;</p>\r\n', 'pengumumanTTDKontrak_150316.pdf', '32', '2016-04-06'),
(5, 'Formulir Keluar Asrama', '<p>\r\n	Formulir Keluar Asrama yang harus di perhatikan terkait dengan persyaratan-persyaratan yang harus terlebih dahulu di lengkapi/terpenuhi ,&nbsp; yang terlampir di bawah ini.</p>\r\n', 'Form Keluar asrama.pdf', '32', '2016-04-06'),
(6, 'Pengumuman Hasil Rekrutmen Tutor', '<p>\r\n	Setelah mempertimbangkan penilaian dari keseluruhan proses seleksi tutor dan musyawarah serta persetujuan dari Pimpinan UPT Asrama. Maka kami sampaikan nama-nama berikut yang <strong>Lolos</strong> sebagai tutor periode 2016/2017 yang terlampir dibawah ini.</p>\r\n', 'Pengumuman Hasil Rekrutmen Tutor.docx', '32', '2016-05-02'),
(7, 'Pengajuan Penangguhan Dan Perjanjian Pelunasan Pembayaran Asrama', '<p>\r\n	Terlampir Form Pengajuan Penangguhan Dan Perjanjian Pelunasan Pembayaran&nbsp; Asrama untuk penghuni Asrama yang memiliki tunggakan pembayaran Asrama ITB.</p>\r\n', 'Form Penangguhan Pembayaran.pdf', '32', '2016-05-12'),
(10, 'Pengumuman Pendaftaran Asrama ITB untuk Mahasiswa TPB Angkatan 2016', '<p>\r\n	Pengumuman tentang Pendaftaran Asrama ITB untuk para Mahasiswa TPB Angkatan 2016 Pendaftar BIDIKMISI dan Non Pendaftar BIDIKMISI yang terlampir dibawah ini.</p>\r\n', 'scan 7949.pdf', '32', '2016-05-30'),
(11, 'Pengumuman Ketentuan Tinggal dan Mekanisme Pendaftaran Asrama Matrikulasi bagi Mahasiswa ITB Cirebon', '<p>\r\n	Terlampir dibawah ini Ketentuan tinggal di Asrama dan Mekanisme Pendaftaran Asrama selama matrikulasi bagi Mahasiswa ITB CIrebon.</p>\r\n', 'scan 7948.pdf', '32', '2016-05-30'),
(12, 'Pengumunan Registrasi Calon Penghuni Baru', '<p>\r\n	Menindaklanjuti pengumuman nomor 112/I1.B01.10/LL/2016 tentang <em>&ldquo;Pendaftaran Calon Penghuni Periode Tinggal 1 Agustus s.d. 31 Desember 2016 untuk Semua Asrama&rdquo;</em> dengan ini, diumumkan bahwa link Registrasi penghuni baru akan dibuka pada tanggal 1 Juni 2016 pada pukul 16.00 sampai dengan 17 Juli 2016.</p>\r\n<p>\r\n	Untuk informasi lebih detil terkait Registrasi penghuni baru akan diumumkan pada pengumuman selanjutnya.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Terimakasih,</p>\r\n<p>\r\n	Admin Sistem Informasi Asrama</p>\r\n', '', '1', '2016-05-31'),
(13, 'Pendaftaran Calon penghuni Asrama ITB Periode Tinggal 1 Agustus s.d Desember 2016 Untuk Mahasiswa ITB Semua Angkatan', '<p>\r\n	Menindaklanjuti pengumuman nomor 112/I1.B01.10/LL/2016 tentang &ldquo;Pendaftaran Calon Penghuni Periode Tinggal 1 Agustus s.d. 31 Desember 2016 untuk Semua Asrama&rdquo; dan pengumuman nomor 136/I1.B01.10/LL/2016 tentang &ldquo;Pendaftaran Asrama ITB untuk Mahasiswa TPB Angkatan 2016 Pendaftar BIDIKMISI dan untuk Mahasiswa TPB Angkatan 2016 Non Pendaftar BIDIKMISI&rdquo;, dengan ini, diumumkan beberapa hal sebagaimana dalam lampiran berikut.</p>\r\n', 'Pengumuman 01_06_2016.PDF', '1', '2016-06-01'),
(17, 'Pengumuman Registrasi Penghuni dan Registrasi Asrama', '<p>\r\n	Dengan ini, pengelola Sistem Informasi Asrama menyampaikan bahwa masih terdapat beberapa masalah pada aplikasi registrasi penghuni dan registrasi asrama pada hari Rabu sore, 1 Juni 2016 s.d. hari Kamis pagi, 2 Juni 2016. Untuk itu, kami memohon maaf sebesar-besarnya. Saat ini sistem registrasi sudah berjalan kembali, namun kami masih akan melakukan beberapa perbaikan. Diperkirakan dalam minggu ini, sistem registrasi akan sudah berjalan normal.</p>\r\n<p>\r\n	Perlu kami sampaikan bahwa bagi yang telah melakukan registrasi penghuni pada waktu tersebut di atas, data Anda&nbsp;<strong><u>aman&nbsp;</u></strong>sehingga tidak perlu melakukan registrasi ulang.</p>\r\n<p>\r\n	<br />\r\n	Sekedar mengingatkan:&nbsp;</p>\r\n<p>\r\n	1) Untuk penghuni lama, dipersilakan langsung melakukan login dengan menggunakan NIM sebagai username untuk melakukan registrasi asrama pada periode 1 Agt. s.d. 31 Des 2016. Silakan merujuk pada pengumuman sebelumnya.</p>\r\n<p>\r\n	2) Untuk penghuni baru, setelah melakukan registrasi penghuni, dipersilakan login dengan menggunakan NIM/NoReg yang sudah dientrikan untuk melakukan registrasi asrama pada periode 1 Agt. s.d. 31 Des 2016.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Terima kasih.</p>\r\n<p>\r\n	Hormat kami,</p>\r\n<p>\r\n	Pengelola Sistem Informasi Asrama</p>\r\n', '', '1', '2016-06-01'),
(18, 'Alur Registrasi Penghuni Asrama Yang Harus Dilakukan', '<p>\r\n	Pengumuman bagi calon penghuni baru maupun penghuni lama asrama ITB, ada beberapa langkah yang wajib dilakukan untuk melakukan registrasi sampai dengan pendaftarkan asrama mana yang akan ditempati.</p>\r\n<p>\r\n	Bagi calon penghuni baru, ada beberapa tahapan yang harus dilakukan yaitu:</p>\r\n<ol>\r\n	<li>\r\n		Registrasi Online (Untuk mendapatkan akses masuk ke dalam sistem)</li>\r\n	<li>\r\n		Login (Masuk kedalam sistem)</li>\r\n	<li>\r\n		Registrasi Asrama (Untuk mendaftarkan diri pada asrama yang akan ditempati)</li>\r\n</ol>\r\n<p>\r\n	Sedangkan bagi penghuni lama yang ingin melanjutkan masa tinggal pada periode selanjutnya, ada beberapa tahapan yang harus dilakukan yaitu:</p>\r\n<ol>\r\n	<li>\r\n		Login (Masuk kedalam sistem)</li>\r\n	<li>\r\n		Registrasi Asrama (Untuk mendaftarkan diri pada asrama yang akan ditempati pada periode baru)</li>\r\n</ol>\r\n<p>\r\n	Untuk lebih jelas, alur pendaftaran/registrasi asrama dapat dilihat pada lampiran terlampir pada link download.</p>\r\n<p>\r\n	<strong>Note:</strong> Hanya calon penghuni yang melakukan semua tahapan yang akan dialokasikan pada kamar asrama sesuai dengan kapasitasnya.</p>\r\n', 'Alur Registrasi Penghuni Asrama.pdf', '1', '2016-06-06'),
(19, 'Pengumuman Penghuni Asrama ITB 2016', '<p>\r\n	Terlampir 5 File Hasil Alokasi Calon Penghuni Asrama ITB untuk periode 1 Agustus s.d. 31 Desember 2016. Bagi penghuni yang diterima harap melakukan daftar ulang pada tanggal 25 s.d 27 Juli 2016 ( boleh memilih salah satu waktu ) bertempat di Asrama masing-masing.</p>\r\n', 'Pengumuman Penghuni Asrama ITB 2016.rar', '32', '2016-07-22'),
(22, 'Penegasan Hasil Alokasi Penghuni Asrama 2016', '<p>\r\n	Dengan ini, kami menegaskan bahwa daftar penghuni baru yang diterima pada untuk periode 1 Agustus s.d. 31 Desember 2016 adalah sesuai yang telah diberikan pada pengumuman sebelumnya, yaitu pengumuman No. 178/I1.B01/KM?2016 dan lampirannya. Dengan demikian, yang namanya tidak tercantum dalam pengumuman terrsebut, dinyatakan <em><strong>tidak diterima</strong></em> untuk periode alokasi saat ini.</p>\r\n<p>\r\n	Untuk itu, kami memohon maaf jika terjadi kebingungan, khususnya pada beberapa pendaftar yang tidak teralokasi, karena adanya kesalahan informasi yang sempat tersebar pada sistem informasi kami. Kami akan terus berusaha memperbaiki sistem kami agar menjadi lebih baik di kemudian hari.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Terima kasih atas perhatian yang diberikan.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Kabid SIM UPT Asrama,</p>\r\n<p>\r\n	Dr. Fazat Nur Azizah, S.T., M.Sc.</p>\r\n', '', '32', '2016-07-22'),
(23, 'Perubahan Jadwal Penerimaan Penghuni Baru dari Calon Mahasiswa ITB Angkatan 2016 Pendaftar BidikMisi dan Calon Mahasiswa Kampur Cirebon.', '<p>\r\n	Sebagaimana telah diinformasikan melalui web Penerimaan Mahasiswa Baru ITB <em><u>(http://usm.itb.ac.id/wp/?page_id=1812)</u></em>, untuk calon Mahasiswa ITB pendaftar beasiswa BidikMisi Angkatan 2016 dan calon Mahasiswa ITB Kampus Cirebon, waktu pendaftaran ulang untuk menghuni asrama untuk periode 1 Agustus s.d 31 Desember 2016 di ubah menjadi tanggal 26 Juli s.d 1 Agustus 2016.</p>\r\n<p>\r\n	Bagi yang telah hadir pada tanggal 25 Juli 2016 telah mendaftar ulang, tidak menjadi masalah dan tidak perlu mengulang pendaftaran.</p>\r\n<p>\r\n	Semoga dapat dipahami. Terima kasih</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Kabid Manajemen dan Sistem Informasi,</p>\r\n<p>\r\n	Dr. Fazat Nur Azizah, S.T., M.Sc.</p>\r\n', '', '32', '2016-07-25'),
(24, 'Alokasi Penempatan Asrama ITB untuk Mahasiswa ITB Kampus Cirebon TahapII', '<p>\r\n	Menyusul pengumuman alokasi Asrama ITB pada tanggal 22 Juli 2016, berikut disampaikan daftar alokasi penempatan Asrama ITB untuk Mahasiswa ITB Kampus Cirebon Tahap II untuk periode tinggal 1 Agustus s.d 31 Desember 2016.&nbsp;</p>\r\n<p>\r\n	Mahasiswa diharapkan untuk mendaftarkan ulang dan sekaligus dapat mulai tinggal di Asrama ITB Jatinangor mulai tanggal 26 Juli s.d 1 Agustus 2016.</p>\r\n<p>\r\n	Terima kasih.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Kabid Manajemen dan Sistem Informasi,</p>\r\n<p>\r\n	Dr. Fazat Nur Azizah , S.T., M.Sc.</p>\r\n', 'LampPengumumanAlokasi_JTN_CirebonII_260716.pdf', '32', '2016-07-26'),
(25, 'Pembayaran Tagihan Asrama untuk Periode Tinggal 1 Agt s.d. 31 Des 2016', '<p>\r\n	Kepada para penghuni Asrama ITB (semua asrama) untuk periode tinggal 1 Agustus s.d. 31 Desember 2016, silakan membaca pengumuman terkait pembayaran tagihan asrama di bawah ini.</p>\r\n<p>\r\n	Terima kasih.</p>\r\n<p>\r\n	Kabid Manajemen dan Sistem Informasi,</p>\r\n<p>\r\n	Dr. Fazat Nur Azizah, S.T., M.Sc.</p>\r\n', 'Pengumuman_Pembayaran_Tagihan.pdf', '32', '2016-09-13'),
(26, 'Form Pengajuan Penangguhan Dan Perjanjian Pelunasan Pembayaran Asrama', '<p>\r\n	Berikut ini lampiran Form Pengajuan Penangguhan dan Perjanjian Pelunasan Pembayaran Asrama ITB untuk penghuni yang tidak dapat melakukan pembayaran atau akan mengajukan penangguhan.</p>\r\n', 'Form Penangguhan Pembayaran Ganjil 2016.docx', '32', '2016-10-16'),
(27, 'Pendaftaran Calon Penghuni Asrama ITB Periode Tinggal 1 Januari s.d. 31 Mei 2017', '<div>\r\n	Pendaftaran penghuni asrama, baik untuk penghuni lama maupun penghuni baru, untuk periode tinggal 1 Januari s.d. 31 Mei 2017 dilaksanakan tgl. 12 s.d. 23 Desember 2016.&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Penghuni lama yang ingin memperpanjang masa tinggal atau yang ingin keluar asrama dimohon untuk mengikuti prosedur yang ditetapkan. Silakan membaca pengumuman terlampir untuk informasi lebih detil.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Asrama ITB menerima calon penghuni baru untuk semua asrama untuk periode tinggal 1 Januari s.d. 31 Mei 2017. Silakan membaca pengumuman terlampir untuk informasi lebih detil.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Terima kasih.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Kabid Manajemen dan Sistem Informasi,</div>\r\n<div>\r\n	Dr. Fazat Nur Azizah</div>\r\n', 'Pengumuman Pendaftaran Penghuni Asrama ITB.zip', '32', '2016-12-13'),
(28, 'Penempatan Penghuni Asrama Bagi Penghuni Baru Periode Tinggal 1 Januari s.d 31 Mei 2017', '<p>\r\n	Penempatan penghuni asrama, khususnya bagi calon penghuni baru, untuk periode tinggal 1 Januari s.d. 31 Mei 2017 akan dilaksanakan mulai 9 s.d. 20 Januari 2017 (pada jam kerja) di masing-masing asrama. Informasi lebih lengkap mengenai hal ini dan informasi untuk penghuni lama dapat dibaca pada file terlampir.</p>\r\n<div>\r\n	Terima kasih.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Kabid Manajemen dan Sistem Informasi UPT Asrama ITB</div>\r\n<div>\r\n	Dr. Fazat Nur Azizah, S.T., M.Sc</div>\r\n', 'PenempatanPenghuniAsrama_060117.pdf', '32', '2017-01-06'),
(29, 'OMDO : Open Mic Dormitory , Menyambung Bahagia Dalam Asrama', '<p style=\"text-align: justify;\">\r\n	<img alt=\"Description: C:\\Users\\Lenovo\\Desktop\\Dokumentasi Jatinangor\\OMDO.jpg\" src=\"https://image.ibb.co/ifd7Yv/omdo1.png\" style=\"margin-left: 12px; margin-right: 12px; float: left; width: 500px; height: 333px;\" /></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	<em style=\"text-align: -webkit-center;\">Maulidi &amp; Fikri dari Pertanian 2014 bertindak sebagai MC</em></p>\r\n<p style=\"text-align: justify;\">\r\n	Jatinangor (<strong>NA</strong>), Asrama ITB merupakan tempat berkumpul, belajar, dan beristirahat yang nyaman bagi mahasiswa. Berdasarkan salah satu visi UPT Asrama ITB yaitu untuk memiliki atmosfer yang kondusif bagi pengembangan minat dan bakat mahasiswa ITB, Tutor Asrama ITB Jatinangor menginisiasi sebuah Perhelatan Akbar bernama OMDO : <em>Open Mic Dormitory </em>yang diselenggarakan pada Hari Rabu (16/11/2016). Untuk pertama kalinya, di asrama ITB Jatinangor digelar acara yang mengundang seluruh penghuni untuk menjadi pengisi acara dan peserta khususnya yang tertarik dalam bidang <em>stand up comedy</em>.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Panitia OMDO yang diketuai oleh Fikry Aulia H (Kewirusahaan 2014) mengonsep acara tersebut sebagai sebuah perlombaan <em>stand up</em> khusus penghuni ITB Jatinangor dengan mengusung tema : dari, oleh, dan untuk penghuni asrama. Sebagai juri lomba, OMDO juga mengundang tiga orang juri yang sudah berpengalaman dalam bidangnya. Pertama adalah Aditya &ldquo;Madam&rdquo; Nugraha Akbari (Rekayasa Pertanian 2012), yaitu seorang seniman yang sudah malang melintang di berbagai acara kebudayaan tradisional dan memiliki segudang pengamalan dalam dunia <em>entertainment</em> dalam dan luar kota. Juri kedua adalah pemuda tampan penyuka bisnis yaitu Kang Iden Darmawan (Kewirausahaan 2014) yang juga pernah menjadi finalis Mojang Jajaka Kota Bandung dan sekarang sedang menjabat sebagai ketua himpunan IMK &quot;ARTHA&quot; ITB. Lalu juri terakhir bernama Reni Rohimawati (Rekayasa Hayati 2013) seorang mahasiswi tingkat akhir yang setia mengamati semua episode <em>Stand Up Comedy</em> Indonesia (SUCI) &ndash; sebuah acara <em>stand up </em>yang disiarkan di salah satu stasiun TV swasta. &nbsp;</p>\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Acara berlangsung di <em>Tower Building </em>(TB) 2 yang biasanya menjadi pusat berkegiatan penghuni. Pemilihan tempat inilah yang menjadi daya tarik tersendiri bagi penghuni. Pada saat acara mulai berlangsung, masih sedikit sekali penghuni yang datang. Namun setelah satu per satu komika tampil, penghuni semakin bertambah banyak. Antusiasme bahkan ditunjukan dengan adanya sejumlah penghuni yang mendengarkan dari lantai atas TB 2. Beberapa penghuni mengaku baru pertama kalinya mendengarkan <em>stand up comedy </em>secara live.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Penghuni yang hadir terlihat sangat terhibur oleh penampilan dari komika yang terbilang sangat mencairkan suasana. Hal ini karena para komika saling bersaing untuk menjadi yang terbaik dan mendapatkan juara pertama. Aspek-aspek yang menjadi penilaian juri antara lain adalah konten materi, penguasaan panggung, respon audiens, dan penyampaian. Setiap komika tampil secara bergantian kemudian dikomentari oleh juri yang juga dengan candaan. Hal tersebut membuat suasana pada malam itu sangat pecah. Selain itu, penonton juga interaktif dengan komika dan para juri.</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salah satu panitia OMDO, Shandy Destiadi tidak percaya jika antusiasme yang ditunjukkan oleh penghuni terhadap acara OMDO sangat tinggi.</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ldquo;Beban pikiran atas satu bulan persiapan, akhirnya bisa terbayar dengan melihat acara yang bisa semeriah ini. Tentunya ini atas perjuangan para panitia dan kerjasama penghuni asrama, akhirnya Kampus ITB Jatinangor juga punya cerita&rdquo;, ucap Shandy Destiadi yang merupakan Koordinator Tutor Asrama ITB Jatinangor. Dalam acara tersebut, Shandy menuturkan kebanggaannya terhadap para panitia dan peserta yang luar biasa. Selanjutnya, Shandy berharap agar OMDO dapat digelar secara rutin dan menghasilkan banyak komika-komika berbakat yang lainnya.</p>\r\n<p>\r\n	<img alt=\"Description: C:\\Users\\Lenovo\\Pictures\\OMDO\\OMDO 2016\\Edit\\_MG_0027a.jpg\" src=\"https://image.ibb.co/i3YKfa/omdo2.png\" style=\"margin-left: 12px; margin-right: 12px; float: left; width: 624px; height: 416px;\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n<p>\r\n	<em>Salah satu penampilan dari peserta OMDO (Habibi, BA 2015)</em></p>\r\n<p>\r\n	Acara OMDO diakhiri dengan pemberihan hadiah kepada para juara. Untuk juara pertama, kedua, dan ketiga berturut-turut diraih oleh M. Daffa A. dari Teknik Industri 2016, Dimas Ammar A. &nbsp;dari Kewirusahaan 2013, dan Novaldy Agnial F. dari Teknik Pengelolaan Sumber Daya Air 2013. Ketiganya berhasil menarik perhatian para juri dan penonton, bahkan setelah acara berlangsung ada komika yang mendapat penawaran untuk show di salah satu tempat perbelanjaan daerah Jatinangor.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	<img alt=\"Description: C:\\Users\\Lenovo\\Pictures\\OMDO\\OMDO 2016\\Edit\\_MG_0020a.jpg\" src=\"https://image.ibb.co/dLguDv/omdo3.png\" style=\"margin-left: 12px; margin-right: 12px; float: left; width: 623px; height: 416px;\" /><img alt=\"Description: C:\\Users\\Lenovo\\Desktop\\TEMPORAL\\fotolampiran\\2bcfa0fe-bdff-4ec0-b769-66ed3f87d01f.jpg\" src=\"https://image.ibb.co/cHBuDv/omdo4.png\" style=\"margin-left: 12px; margin-right: 12px; float: left; width: 624px; height: 416px;\" /><em>Pemberian hadiah untuk juara 1 OMDO (Daffa, TI 2016)</em></p>\r\n<p align=\"right\">\r\n	<img alt=\"Description: C:\\Users\\Lenovo\\Pictures\\OMDO\\OMDO 2016\\_MG_0110.JPG\" src=\"https://image.ibb.co/dqaMtv/omdo5.png\" style=\"margin-left: 12px; margin-right: 12px; float: left; width: 624px; height: 416px;\" /></p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	<em>Foto Bersama antara panitia dan peserta OMDO</em></p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p align=\"right\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	giatan kebersamaan penghuni Asrama ITB bermanfaat besar bagi mahasiswa, selain berkumpul dan belajar mahasiswa dapat mengembangkan minat dan bakat inspiratf yang di miliki. Berikut ini merupakan link Artikel serta Rekaman kegiatan yang di adakan di Asrama ITB Jatinangor:</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p>\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GTGKQlQMjF0\" frameborder=\"0\" allowfullscreen></iframe>\r\n	<a href=\"https://drive.google.com/file/d/0B4kZGjZFmziLOThIdm15T2swelE/view?usp=sharing\">Artikel Open Mic Dormitory</a></p>\r\n<p>\r\n	<a href=\"https://youtu.be/GTGKQlQMjF0\">Video Open Mic Dormitory</a></p>\r\n', '', '34', '2017-03-25'),
(31, 'Pembayaran Tagihan Asrama untuk Periode Tinggal 1 Januari s.d. 31 Mei 2017', '<p>\r\n	Kepada para penghuni Asrama ITB (semua asrama) untuk periode tinggal 1 Januari s.d. 31 Mei 2017, silakan membaca pengumuman terkait pembayaran tagihan asrama di bawah ini.</p>\r\n<p>\r\n	Terima kasih.</p>\r\n<p>\r\n	Kabid Manajemen dan Sistem Informasi,</p>\r\n<p>\r\n	Dr. Fazat Nur Azizah, S.T., M.Sc.</p>\r\n', 'Pengumuman Pembayaran Asrama.PDF', '32', '2017-02-21'),
(32, 'Penangguhan Pembayaran Asrama Semester. 2 2016/2017', '<p>\r\n	Terlampir Form Pengajuan Penangguhan Dan Perjanjian Pelunasan Pembayaran&nbsp; Asrama untuk penghuni Asrama yang memiliki tunggakan pembayaran Asrama ITB.</p>\r\n', 'Form Penangguhan Pembayaran Asrama_sem 2 1617.docx', '32', '2017-03-05'),
(33, 'Perubahan Batas Waktu Pembayaran Tagihan Asrama', '<div style=\"text-align: justify;\">\r\n	Berikut saya lampirkan file pengumuman informasi terkait perpanjang batas waktu pembayaran tagihan asrama untuk periode tinggal I Januari s.d. 31 Mei 2017, &nbsp;berlaku untuk seluruh penghuni reguler.&nbsp;</div>\r\n', 'Perubahan Batas Pembayaran.PDF', '32', '2017-03-13'),
(34, 'Pembinaan Terpusat Maret 2017 : The Hidden Driver of Excellence', '<p>\r\n	Pembinaan terpusat&nbsp; adalah kegiatan pembinaan yang diikuti oleh seluruh mahasiswa bidikmisi tpb yang dilaksanakan sebulan sekali . Kegiatan ini diadakan oleh UPT asrama ITB bertujuan untuk pembentukan karakter mahasiswa/i bidikmisi (berkaitan dengan asrama). Dengan adanya acara ini, peserta juga diharapkan dapat menambah wawasan, mempererat kebersamaan sebagai mahaiswa/i bidikmisi, serta mempersiapkan peserta dalam menghadapi setiap jenjang perkuliahan TPB ITB.</p>\r\n<p>\r\n	Pembinaan Terpusat September jatuh pada tanggal 02/03/2017 . Tema yang diusung dalam Pembinaan Terpusat Maret 2017 adalah <strong>&ldquo;</strong><strong>The Hidden Driver of Excellence</strong><strong>&rdquo; . </strong>Tema tersebut bertujuan untuk membantu mahasisswa mengenali dirinya sendiri dimana dapat membantu mahasiswa menemukan potensi yang dimilik oleh setiap mahasiswa. Rangkaian kegiatan pada pembinaan terpusat kali ini sangat bergam yaitu <em>talkshow </em>, <em>workshop</em> kelompok ,dan sesi <em>sharing </em>tentang&nbsp; melanjutkan pendidikan &nbsp;ke luar negri serta ada kegiatan anti korupsi dan pengumuman pemenang lomba&nbsp; foto yang bertemakan The Hidden Driver of Excellence.</p>\r\n<p>\r\n	<a href=\"https://imgbb.com/\"><img alt=\"1\" border=\"0\" src=\"https://image.ibb.co/mzAywQ/1.png\" /></a></p>\r\n<p>\r\n	Acara dibuka dengan sambutan dari Ketua Pelaksana PT Maret 2017 yaitu Muhammad Saifudin &nbsp;mahasiswa Teknik Metalurgi angkatan 2014 dan Wakil Ketua Pelaksana PT Maret 2017 yaitu Ucik Devi mahasiswa Teknik Pertambangan 2014.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<a href=\"https://imgbb.com/\"><img alt=\"2\" border=\"0\" src=\"https://image.ibb.co/iYLywQ/2.png\" /></a></p>\r\n<p>\r\n	Setelah itu ada sambutan dari kepala UPT Asrama ITB yaitu Bapak Agung Wiyono.&nbsp;</p>\r\n<p>\r\n	<a href=\"https://imgbb.com/\"><img alt=\"3\" border=\"0\" src=\"https://image.ibb.co/j9uDVk/3.png\" /></a></p>\r\n<p>\r\n	Talk show pada pembinaan terpusat kali ini diisi oleh Ir. Rama Royani atau yang akrab disapa Abah Rama selaku Founder of Talent Mapping , Creator of Strength Cluster Map , and Strength Topology beserta situs &nbsp;temubakat.com. Pada talk show kali ini materi yang beliau sampaikan bertemakan <strong>&ldquo;The Hidden Driver of Excellence&rdquo;</strong></p>\r\n<p>\r\n	<a href=\"https://imgbb.com/\"><img alt=\"4\" border=\"0\" src=\"https://image.ibb.co/bMKfAk/4.png\" /></a></p>\r\n<p>\r\n	<em>Workshop</em> kelompok adalah sebuah &nbsp;acara yang bertujuan untuk mengimplementasikan materi yang telah disampaikan sebelumnya oleh Abah Rama . Dimana mengenai kekuatan pada setiap pribadi yag berbeda beda. Peserta workshop didampingin oleh fasilitator akan mencoba membuat sebuah struktur organisasi dimana jabatan &ndash;jabatan yang dibutuhkan pada organisasi tersebut harus di duduki oleh orang yang memiliki keprbadian paling cocok dengan jabatan tersebut .Nantinya hasil <em>workshop</em> dipresentasikan didepan Abah Rama .</p>\r\n<p>\r\n	<a href=\"https://imgbb.com/\"><img alt=\"5\" border=\"0\" src=\"https://image.ibb.co/dDGGi5/5.png\" /></a></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Acara selanjutnya adalah mengenai anti korupsi yang dibawakan oleh PJ Anti Korupsi Eva Dwi Rizkiyah mahasiswa Teknik Lingkungan angkatan 2014 . Secara keseluruhan eva menyampaikan tentang dampak dampak yang ditimbulkan dari korupsi.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<a href=\"https://imgbb.com/\"><img alt=\"6\" border=\"0\" src=\"https://image.ibb.co/hhNYVk/6.png\" /></a></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Setelah itu disusul acara sharing session tentang melanjutkan pendidikan di luar negri&nbsp; bersama anak dan menantu pak Agung.&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"https://imgbb.com/\"><img alt=\"7\" border=\"0\" src=\"https://image.ibb.co/nu6Gi5/7.png\" /></a><br />\r\n	Selanjutnya sebelum acara ditutup terdapat pegumuman pemenang lomba foto Instagram .</p>\r\n', '', '34', '2017-04-15'),
(35, 'Pengumuman Penyelesaian Proses Penghuni Asrama Untuk Penghuni Regular Periode 1 Januari 2017 s.d 31 Mei 2017 untuk semua Asrama ITB', '<p>\r\n	Telampir File PDF terkait Pengumuman Penyelesaian Proses Penghuni Asrama Untuk Penghuni Regular Periode 1 Januari 2017 s.d 31 Mei 2017 untuk semua Asrama ITB.</p>\r\n', 'Pengumuman_Penyelesai_Proses_Menghuni_AsramaITB.PDF', '32', '2017-05-01'),
(36, 'PT. April Mengajak Mahasiswa Lebih Religius dan Berani Keluar dari Zona Nyaman', '<p style=\"text-align: justify;\">\r\n	<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\"><strong>Bandung, asrama.itb.ac.id</strong> &ndash; Pada hari Minggu, tanggal 23 April 2017, UPT Asrama ITB menyelenggarakan pembinaan terpusat April 2017 di Aula Timur ITB. Pembinaan kali ini mengusung tema &ldquo;Be the Best of You&rdquo;. Narasumber yang dilibatkan adalah Prof. Ir. Syarif Hidayat, dosen Teknik Tenaga Listrik yang juga merupakan Kepala Yasasan Pembina Masjid Salman ITB.</span></span></p>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\"><img src=\"http://i.imgur.com/IS86zPV.png\" /></span></span></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<strong><span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Peserta antusias mendengarkan pembukaan acara oleh Pak Agung</span></span></strong></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\">\r\n	<p style=\"text-align: justify;\">\r\n		<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Diketuai oleh Ikhwanul Muslimin, pembinaan kali ini membawa nilai-nilai relijius, keteladanan, dan mandiri. Nilai-nilai ini merupakan beberapa nilai yang tercantum dalam <em>grand design</em> pembinaan asrama ITB. Nilai-nilai ini dituangkan dalam beberapa mata acara, khususnya melalui penyampaian materi dan <em>sharing with </em>tutors.</span></span></p>\r\n</blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\"><img src=\"http://i.imgur.com/Lm7ZF43.png\" /></span></span></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<strong><span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Sambutan oleh ketua asrama ITB Bapak Agung Wiyono</span></span></strong></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\">\r\n	<p style=\"text-align: justify;\">\r\n		<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Acara dimulai pada pukul 08.00 WIB oleh pembawa acara, dilanjutkan dengan menyanyikan lagu Indonesia raya, sambutan oleh ketua panitia, Ir. Agung Wiyono sebagai kepala UPT Asrama ITB, dan perwakilan dari Direktorat Pendidikan ITB. Setelah itu, acara diserahkan kepada Ir. Agung Wiyono sebagai moderator untuk memandu materi bersama Ir. Syarif Hidayat.</span></span></p>\r\n</blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\"><img src=\"http://i.imgur.com/zP1EqAS.png\" /></span></span></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<strong><span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Penyampaian materi oleh Bapak Ir. Syarif Hidayat</span></span></strong></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\">\r\n	<p style=\"text-align: justify;\">\r\n		<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Ir. Syarif Hidayat menanamkan pemahaman kepada para mahasiswa agar menjadi pribadi yang mengingat tujuan diciptakannya manusia, yaitu untuk beribadah dan sebagai khalifah di muka bumi. Dan untuk menjadi manusia yang unggul, para mahasiswa haruslah berani untuk keluar dari zona nyamannya menuju zona yang mengandung tantangan dan resiko. Beliau mencontohkan beberapa tokoh yang berhasil keluar dari zona nyaman, termasuk Ir Soekarno, Nabi Muhammad, Nabi Ibrahim, dan Nabi Adam. Di akhir penyampaian materinya, beliau mendorong seluruh mahasiswa untuk mencontoh tokoh-tokoh tersebut.</span></span></p>\r\n	<p style=\"text-align: justify;\">\r\n		<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Setelah materi, acara dilanjutkan dengan <em>sharing with tutor</em>. Di sini para tutor mengajak mahasiswa untuk menceritakan tokoh yang menjadi <em>role model</em> dalam kehidupannya. Acara ini berlangsung hingga pukul 11.30. Setelah itu, mahasiswa beristirahat hingga pukul 12.30.</span></span></p>\r\n</blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\"><img src=\"http://i.imgur.com/dQ1el5W.png\" /></span></span></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<strong><span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Kegiatan sharing dengan tutor asrama</span></span></strong></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\">\r\n	<p style=\"text-align: justify;\">\r\n		<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Pada sesi sore, mahasiswa ditanamkan pendidikan antikorupsi yang telah dirancang oleh tutor PJ Antikorupsi Asrama ITB. Selanjutnya, acara dilanjutkan dengan pengumuman <em>Instagram Contest</em> yang telah digelar sebelum acara ini berlangsung. Acara selesai pada pukul 14.15.</span></span></p>\r\n</blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\"><img src=\"http://i.imgur.com/dXJgoni.png\" /></span></span></blockquote>\r\n<blockquote class=\"imgur-embed-pub\" data-id=\"IS86zPV\" lang=\"en\" style=\"text-align: center;\">\r\n	<strong><span style=\"font-size:16px;\"><span style=\"font-family: times new roman,times,serif;\">Bincang hangat dengan peserta&nbsp;</span></span></strong></blockquote>\r\n', '', '8', '2017-05-09'),
(37, 'Pengumuman Pendaftaran Calon Penghuni Baru Asrama ITB Periode Tinggal I Agustus s.d. 31 Desember 2017 Untuk Semua Asrama', '<div>\n	UPT Asrama ITB menerima calon penghuni baru &nbsp;Asrama ITB</div>\n<div>\n	<div>\n		&nbsp;untuk periode tinggal 1 Agustus 2017 s.d 31 Desember 2017,&nbsp;</div>\n	<div>\n		dengan ketentuan sebagai berikut :</div>\n	<div>\n		&nbsp;</div>\n	<div>\n		<div>\n			1. Asrama ITB di Bandung menerima pendaftaran&nbsp;</div>\n		<div>\n			calon penghuni dari mahasiswa TPB ITB 2017 ,&nbsp;</div>\n		<div>\n			dengan syarat bersedia mengikuti kegiatan&nbsp;</div>\n		<div>\n			Pembinaan Mahasiswa Asrama ITB.&nbsp;</div>\n		<div>\n			&nbsp;</div>\n		<div>\n			2. Asrama ITB di Jatinangor menerima pendaftaran&nbsp;</div>\n		<div>\n			calon penghuni dari mahasiswa ITB seluruh strata&nbsp;</div>\n		<div>\n			dan prodi.&nbsp;</div>\n		<div>\n			&nbsp;</div>\n	</div>\n</div>\n<div>\n	Pendaftaran asrama dilakukan secara online di</div>\n<div>\n	website UPT Asrama ITB pada 16 Mei 2017 s.d.</div>\n<div>\n	16 Juli 2017 melalui&nbsp;</div>\n<div>\n	<a href=\"http://asrama.itb.ac.id/index.php/site/registrasi\">http://asrama.itb.ac.id/index.php/site/registrasi </a></div>\n<div>\n	&nbsp;</div>\n<div>\n	Dengan ini terlampir file PDF terkait Pengumuman Penerimaan Calon Penghuni Baru Asrama ITB dari mahasiswa ITB untuk periode tinggal I Agustus s.d.31 Desember 2017.</div>\n<div>\n	&nbsp;</div>\n', 'Pengumuman Pendafatran Penghuni Baru 2017.PDF', '32', '2017-05-14'),
(38, 'Pengumuman Pendaftaran Penghuni Asrama ITB Jatinangor (Baru dan Lama) Periode Tinggal I Agustus s.d. 3l Desember 2017', '<p style=\"text-align: justify;\">\r\n	Asrama Jatinangor menerima pendaftaran penghuni reguler untuk periode tinggal 1 Agustus s.d. 31 Desember 2017 dari mahasiswa ITB semua strata dan prodi. Pada periode tinggal ini, Asrama Jatinangor menyediakan kamar untuk kurang lebih 480 mahasiswa putri dan 480 mahasiswa putra. Kamar di Asrama Jatinangor berkapasitas 2 s.d. 3 orang per kamar.</p>\r\n<p style=\"text-align: justify;\">\r\n	Dengan ini terlampir file PDF terkait penerimaan pendaftaran penghuni reguler Asrama ITB Jatinangor&nbsp;dari mahasiswa ITB untuk periode tinggal 1 Agustus s.d. 31 Desember 2017.</p>\r\n', 'Pengumuman Pendaftaran Penghuni Asrama Jatinangor (Baru dan Lama).PDF', '32', '2017-05-17'),
(39, 'Pengumuman Penerimaan Calon Penghuni Asrama Mahasiswa ITB Periode Tinggal 1 Agustus s.d. 31 Desember 2017 Nomor: 254/I1.B01.10/KM/2017', '<p>\n	Dengan ini UPT Asrama ITB menyampaikan daftar calon penghuni Asrama Mahasiswa ITB periode tinggal 1 Agustus s.d. 31 Desember 2017 sebagaimana <strong><u>terlampir</u></strong>. Dalam pengumuman ini, disampaikan daftar calon penghuni yang dinyatakan <strong><u>diterima</u></strong> di semua asrama, baik di Bandung maupun di Jatinangor (lihat Lampiran 1), dan daftar pendaftar Asrama yang dikarenakan berbagai hal saat ini belum dapat diterima dan masuk ke dalam <strong><u>waiting list.</u>&nbsp;</strong></p>\n<p>\n	Terlampir file PDF terkait daftar calon penghuni Asrama mahasiswa ITB periode tinggal 1 Agustus s.d. 31 Desember 2017</p>\n<p>\n	&nbsp;</p>\n', 'Penerimaan Calon Penghuni Asrama Mahasiswa ITB 1 Agt-31 Des 2017.pdf', '32', '2017-07-27'),
(40, 'Perbaikan Data NIM Penghuni', '<div>\r\n	Penghuni Asrama Periode Agt s.d. Des 2017 ysh.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Berkaitan dengan pembayaran biaya asrama periode 1 Agt s.d. 31 Des 2017 dengan mekanisme host-to-host, dimohon seluruh penghuni Asrama ITB untuk memperbaharui data no. identitas pada profil pengguna di sistem informasi Asrama dengan data NIM terbaru. Caranya adalah dengan login sebagai penghuni di web asrama <a href=\"http://asrama.itb.ac.id/index.php/site/loginPenghuni\">(http://asrama.itb.ac.id)</a> dan memilih menu untuk mengganti profil.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Beberapa perhatian khusus:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Mahasiswa program fasttrack S1-S2 yang telah diterima di prodi S2 mohon untuk mengganti no. identitas dengan NIM di prodi S2.</div>\r\n<div>\r\n	- Mahasiswa tingkat 2 yang kembali tinggal di Asrama, mohon mengganti no. identitas dengan NIM prodi masing-masing.</div>\r\n<div>\r\n	- Mahasiswa TPB (angkatan 2017) mohon mengganti no. identitas dengan NIM TPB masing-masing.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Dimohon perbaikan data ini dilakukan selambat-lambatnya Jumat, 8 September 2017.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Terima kasih atas perhatian yang diberikan.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Bandung, 5 September 2017</div>\r\n<div>\r\n	Kabid Manajemen dan Sistem Informasi UPT Asrama ITB</div>\r\n<div>\r\n	Dr. Fazat Nur Azizah</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '', '32', '2017-09-05'),
(41, 'Pengumuman Pembayaran Tagihan Asrama Periode Tinggal 1 Agustus s.d 31 Desember 2017', '<div>\r\n	Berikut terlampir file PDF terkait mekanisme pembayaran tagihan asrama untuk periode tinggal 1 Agustus s.d. 31 Desember 2017, penjelasan lengkap terkait pembayaran dapat diunduh softcopynya dibawah ini.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Terima kasih.</div>\r\n<div>\r\n	<br />\r\n	Kabid Manajemen dan Sistem Informasi,</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Dr. Fazat Nur Azizah, S.T., M.Sc.</div>\r\n<div>\r\n	<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">\r\n		&nbsp;</p>\r\n</div>\r\n', 'Pembayaran Asrama 1 Agustus s.d 31 Desember 2017.PDF', '32', '2017-10-06'),
(42, 'Pengumuman Penyelesaian Periode Tinggal 1 Agustus s.d 31 Desember 2017 dan Pendaftaran Penghuni Periode Tinggal 1 Januari s.d. 31 Mei 2018 Untuk Semua Asrama ITB', '<p>\r\n	Berikut terlampir file PDF terkait&nbsp;pengumuman&nbsp; informasi penyelesaian periode tinggal 1 Agustus s.d. 31 Desember dan pendaftaran asrama, baik penghuni lama maupun baru, untuk periode tinggal 1 Januari s.d. 31 Mei 2018.</p>\r\n<p>\r\n	Terima kasih</p>\r\n', 'Pengumuman penyelesaian  periode tinggal dan pendaftaran.pdf', '32', '2017-11-29'),
(43, 'ss', '<p>\r\n	sssssssssssssss<img alt=\"angry\" height=\"20\" src=\"http://localhost/mashzoneform/assets/cadce862/plugins/smiley/images/angry_smile.gif\" title=\"angry\" width=\"20\" /></p>\r\n', 'Level4.sql', '7', '2018-03-05'),
(44, 'd', '<p>\r\n	d</p>\r\n', '', '7', '2018-03-05'),
(45, 'd', '<p>\r\n	d</p>\r\n', '_forma.php', '7', '2018-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `Id` int(11) NOT NULL,
  `IdTask` int(11) NOT NULL,
  `pStart` int(11) NOT NULL,
  `pTahap1` int(11) NOT NULL,
  `pTahap2` int(11) NOT NULL,
  `pFinish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progres`
--

INSERT INTO `progres` (`Id`, `IdTask`, `pStart`, `pTahap1`, `pTahap2`, `pFinish`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 2, 1, 1, 1, 1),
(3, 3, 1, 1, 1, 1),
(4, 4, 1, 1, 1, 1),
(5, 5, 0, 1, 1, 1),
(6, 6, 1, 1, 1, 1),
(7, 7, 1, 1, 1, 1),
(8, 8, 1, 1, 1, 1),
(9, 9, 1, 1, 1, 1),
(10, 10, 1, 1, 1, 1),
(11, 11, 1, 1, 1, 1),
(12, 12, 1, 1, 1, 1),
(13, 13, 1, 1, 1, 1),
(14, 14, 1, 1, 1, 1),
(15, 15, 1, 1, 1, 1),
(16, 16, 1, 1, 1, 0),
(17, 17, 1, 1, 1, 1),
(18, 18, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `namaStatus` varchar(50) NOT NULL,
  `progres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `namaStatus`, `progres`) VALUES
(0, 'Document Rejected', 0),
(1, 'Incomplete Input', 0),
(2, 'Not Started', 25),
(3, 'On Progress', 50),
(4, 'Waiting Approval', 100),
(5, 'Completed', 100);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `idLevel6` int(11) NOT NULL,
  `idPic6` int(11) NOT NULL,
  `idLevel5` int(11) NOT NULL,
  `idPic5` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `bStart` date NOT NULL,
  `bFinish` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `progres` int(11) NOT NULL,
  `attachment` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `idLevel6`, `idPic6`, `idLevel5`, `idPic5`, `idItem`, `bStart`, `bFinish`, `status`, `progres`, `attachment`) VALUES
(95, 19, 11, 7, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(94, 18, 11, 7, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(93, 17, 11, 7, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(92, 16, 10, 6, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(91, 15, 10, 6, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(90, 14, 10, 6, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(89, 13, 10, 6, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(88, 12, 5, 5, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(87, 11, 5, 5, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(86, 10, 5, 5, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(85, 9, 5, 5, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(84, 8, 4, 4, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(83, 7, 4, 4, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(82, 6, 3, 3, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(81, 5, 3, 3, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(80, 4, 7, 2, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(79, 3, 7, 2, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(78, 2, 7, 1, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(77, 1, 7, 1, 6, 5, '2017-08-27', '2017-08-29', '1', 0, ''),
(76, 19, 16, 7, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(75, 18, 16, 7, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(74, 17, 16, 7, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(73, 16, 15, 6, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(72, 15, 15, 6, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(71, 14, 15, 6, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(70, 13, 15, 6, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(69, 12, 14, 5, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(68, 11, 14, 5, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(67, 10, 14, 5, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(66, 9, 14, 5, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(65, 8, 13, 4, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(64, 7, 13, 4, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(63, 6, 12, 3, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(62, 5, 12, 3, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(61, 4, 9, 2, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(60, 3, 9, 2, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(59, 2, 9, 1, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(58, 1, 9, 1, 8, 4, '2017-08-27', '2017-08-29', '1', 0, ''),
(57, 19, 11, 7, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(56, 18, 11, 7, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(55, 17, 11, 7, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(54, 16, 10, 6, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(53, 15, 10, 6, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(52, 14, 10, 6, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(51, 13, 10, 6, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(50, 12, 5, 5, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(49, 11, 5, 5, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(48, 10, 5, 5, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(47, 9, 5, 5, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(46, 8, 4, 4, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(45, 7, 4, 4, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(44, 6, 3, 3, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(43, 5, 3, 3, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(42, 4, 7, 2, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(41, 3, 7, 2, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(40, 2, 7, 1, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(39, 1, 7, 1, 6, 3, '2017-08-27', '2017-08-29', '1', 0, ''),
(38, 19, 16, 7, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(37, 18, 16, 7, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(36, 17, 16, 7, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(35, 16, 15, 6, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(34, 15, 15, 6, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(33, 14, 15, 6, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(32, 13, 15, 6, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(31, 12, 14, 5, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(30, 11, 14, 5, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(29, 10, 14, 5, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(28, 9, 14, 5, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(27, 8, 13, 4, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(26, 7, 13, 4, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(25, 6, 12, 3, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(24, 5, 12, 3, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(23, 4, 9, 2, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(22, 3, 9, 2, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(21, 2, 9, 1, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(20, 1, 9, 1, 8, 2, '2017-08-27', '2017-08-29', '1', 0, ''),
(19, 19, 11, 7, 6, 1, '2017-08-30', '2017-09-01', '1', 0, ''),
(18, 18, 11, 7, 6, 1, '2017-08-27', '2017-08-29', '1', 0, ''),
(17, 17, 11, 7, 6, 1, '2017-08-24', '2017-08-26', '1', 0, ''),
(16, 16, 10, 6, 6, 1, '2017-08-21', '2017-08-23', '1', 0, ''),
(15, 15, 10, 6, 6, 1, '2017-08-18', '2017-08-20', '1', 0, ''),
(14, 14, 10, 6, 6, 1, '2017-08-15', '2017-08-17', '1', 0, ''),
(13, 13, 10, 6, 6, 1, '2017-08-12', '2017-08-14', '3', 0, ''),
(12, 12, 5, 5, 6, 1, '2017-08-09', '2017-08-11', '0', 100, ''),
(11, 11, 5, 5, 6, 1, '2017-08-06', '2017-08-08', '5', 100, ''),
(10, 10, 5, 5, 6, 1, '2017-08-03', '2017-08-05', '5', 100, ''),
(9, 9, 5, 5, 6, 1, '2017-07-31', '2017-08-02', '5', 100, ''),
(8, 8, 4, 4, 6, 1, '2017-07-28', '2017-07-30', '5', 100, ''),
(7, 7, 4, 4, 6, 1, '2017-07-25', '2017-07-27', '5', 100, ''),
(6, 6, 3, 3, 6, 1, '2017-07-22', '2017-07-24', '5', 100, ''),
(5, 5, 3, 3, 6, 1, '2017-07-19', '2017-07-21', '5', 100, ''),
(4, 4, 7, 2, 6, 1, '2017-07-17', '2017-07-19', '5', 100, ''),
(3, 3, 7, 2, 6, 1, '2017-07-15', '2017-07-17', '5', 100, ''),
(2, 2, 7, 1, 6, 1, '2017-07-13', '2017-07-15', '5', 100, ''),
(1, 1, 7, 1, 6, 1, '2017-07-11', '2017-07-13', '5', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(12) NOT NULL,
  `ket` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `nama`, `alamat`, `ket`) VALUES
(1, '32234', 'sdasda', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(100) NOT NULL,
  `enkrip` varchar(50) NOT NULL,
  `role` varchar(75) NOT NULL,
  `kodeAsrama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `telp`, `username`, `password`, `enkrip`, `role`, `kodeAsrama`) VALUES
(3, 'Hukman', '-', '-', '085711112228', 'Hukman', 'ce7b7df841aeb5c245fb79781422c75b', '5aae82c015db16.04736267', 'Operator Lapangan', ''),
(4, 'Ardi', '-', '-', '085711112212', 'Ardi', 'e080d1d72b9878981f4dfcabe6d5c5d0', '5aae82db334bc4.17796570', 'Operator Lapangan', ''),
(5, 'Hafiz', '-', '-', '085711112216', 'Hafiz', '12eb844726ecbf3f1749cb04fc965c01', '5aae82f342e7c6.56516224', 'Operator Lapangan', ''),
(6, 'Ibnu', '-', '-', '085711112220', 'ibnu', '32fd157490b0ebd10856cfa57b8dda07', '5a97a72e316206.32405173', 'Manager', ''),
(7, 'Eko', '-', '-', '085711112224', 'Eko', '198025c6cf461f6b62f55057b3f33917', '5a97a7690e10b6.81917625', 'Operator Lapangan', ''),
(8, 'wisnu', '-', '-', '085711112228', 'wisnu', '2a615a4695cefb591a93d8d195bbec18', '5a97a74ec544b8.03630649', 'Manager', ''),
(9, 'Veri', '-', '-', '085711112232', 'Veri', '46330f790c6dc69f3bb8b471af561ae5', '5a97a77ef32768.15933776', 'Operator Lapangan', ''),
(10, 'Adin', '-', '-', '085711112236', 'Adin', '7053a069e1116b3a4f539236ce83b47d', '5aae830df01ae9.79756433', 'Operator Lapangan', ''),
(11, 'Rina', '-', '-', '085711112240', 'Rina', '811c4b081061cee53739402fabeb935f', '5aae8321f0b976.36951501', 'Operator Lapangan', ''),
(51, 'Muhamad Ibnu Qoyim', 'Bandung', 'muhamadibnu9@gmail.com', '089673569437', 'ibnuqoyim', 'f08dcb43bb4fc72e778d838ea47aadb5', '5a25118b0c3a85.82618145', 'Admin', ''),
(52, 'ibnututor', 'a', 'muhamadibnu9@gmail.com', '089673569437', 'ibnututor', 'bf98866db6bcb5a01c94bec29972b3e4', '5a2f9c5ce59cb2.43011259', 'Tutor', 'KP'),
(53, 'Kepala', 'bdg', 'muhamadibnu9@gmail.com', '089673569437', 'kepalaupt', '7b5243076625e1e0559092e5ae4e66c0', '5a2f9e85c99b71.51626435', 'Kepala UPT Asrama', ''),
(54, 'Agung Mr.', '0852 72345 1111', '0852 72345 1111', '0852 72345 1111', 'Agung', '7ee8de7fdda016a44d0081ada2e0662a', '5a8ad923c0c659.21245113', 'Operator Lapangan', ''),
(55, 'Miko Mr.', '0851 7686 2222', '0852 72345 1111', '0851 7686 2222', 'Miko', '54c7a62bdda3b0f339d2b89394d43fb0', '5a8ad956b357b6.51739712', 'Operator Lapangan', ''),
(56, 'Rindang', '0851 7686 2222', '0852 72345 1111', '0851 7686 2222', 'Rindang', 'bee96cac79d6cf489e9c5970d4b1882e', '5a8ad972a6ced8.96886686', 'Manager', ''),
(57, 'Nida', '0851 7686 2222', '0852 72345 1111', '0851 7686 2222', 'Nida', '874782e36cc77b3b36016c4879054d58', '5a8ad9849c1880.70704240', 'Administrator', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctask`
--
ALTER TABLE `doctask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokreject`
--
ALTER TABLE `dokreject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level4`
--
ALTER TABLE `level4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level5`
--
ALTER TABLE `level5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level6`
--
ALTER TABLE `level6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mto`
--
ALTER TABLE `mto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctask`
--
ALTER TABLE `doctask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `dokreject`
--
ALTER TABLE `dokreject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

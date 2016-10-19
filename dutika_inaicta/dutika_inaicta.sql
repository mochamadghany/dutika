-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Sep 2016 pada 03.20
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dutika_inaicta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admindutika', 'admindutika', 'dutika'),
(2, 'hary_suryanto', 'admin', 'Hary Suryanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_disable`
--

CREATE TABLE IF NOT EXISTS `tb_disable` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_duel`
--

CREATE TABLE IF NOT EXISTS `tb_duel` (
`id_duel` int(11) NOT NULL,
  `id_user1` int(11) NOT NULL,
  `status1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `status2` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_duel`
--

INSERT INTO `tb_duel` (`id_duel`, `id_user1`, `status1`, `id_user2`, `status2`, `tanggal`) VALUES
(82, 37, 0, 0, 0, 16),
(81, 37, 0, 0, 0, 16),
(80, 44, 0, 49, 0, 16),
(79, 44, 0, 49, 0, 16),
(78, 44, 0, 0, 0, 16),
(77, 44, 0, 46, 0, 16),
(76, 44, 0, 0, 0, 16),
(75, 44, 0, 42, 0, 16),
(74, 44, 0, 42, 0, 16),
(73, 44, 0, 42, 0, 16),
(72, 40, 0, 42, 0, 16),
(71, 40, 0, 42, 0, 16),
(70, 40, 0, 42, 0, 16),
(69, 40, 0, 42, 0, 16),
(68, 40, 0, 42, 0, 16),
(67, 40, 0, 42, 0, 16),
(66, 38, 0, 42, 0, 16),
(65, 38, 0, 42, 0, 16),
(64, 38, 0, 0, 0, 16),
(63, 38, 0, 38, 0, 16),
(62, 38, 0, 38, 0, 16),
(61, 38, 0, 37, 0, 16),
(60, 38, 0, 37, 0, 16),
(59, 38, 0, 37, 0, 16),
(58, 38, 0, 37, 0, 16),
(57, 38, 0, 37, 0, 16),
(56, 38, 0, 37, 0, 16),
(55, 38, 0, 37, 0, 16),
(54, 38, 0, 37, 0, 16),
(53, 37, 0, 38, 0, 16),
(31, 28, 0, 25, 0, 16),
(32, 28, 0, 25, 0, 16),
(33, 28, 0, 25, 0, 16),
(34, 28, 0, 25, 0, 16),
(35, 28, 0, 25, 0, 16),
(36, 28, 0, 25, 0, 16),
(37, 28, 0, 25, 0, 16),
(38, 28, 0, 25, 0, 16),
(39, 28, 0, 25, 0, 16),
(40, 28, 0, 25, 0, 16),
(41, 28, 0, 25, 0, 16),
(42, 28, 0, 25, 0, 16),
(43, 28, 0, 25, 0, 16),
(44, 28, 0, 25, 0, 16),
(45, 28, 0, 25, 0, 16),
(46, 28, 0, 25, 0, 16),
(47, 28, 0, 25, 0, 16),
(48, 28, 0, 25, 0, 16),
(49, 28, 0, 25, 0, 16),
(50, 28, 0, 25, 0, 16),
(51, 28, 0, 25, 0, 16),
(52, 38, 0, 38, 0, 16),
(83, 52, 0, 37, 0, 16),
(84, 52, 0, 37, 0, 16),
(85, 52, 0, 37, 0, 16),
(86, 40, 0, 40, 0, 16),
(87, 40, 0, 40, 0, 16),
(88, 40, 0, 40, 0, 16),
(89, 30, 0, 40, 0, 16),
(90, 40, 0, 40, 0, 16),
(91, 40, 0, 30, 0, 16),
(92, 40, 0, 30, 0, 16),
(93, 40, 0, 30, 0, 16),
(94, 55, 0, 40, 0, 16),
(95, 40, 0, 30, 0, 16),
(96, 38, 0, 62, 0, 16),
(97, 38, 0, 62, 0, 16),
(98, 55, 1, 40, 0, 16),
(99, 62, 0, 0, 0, 16),
(100, 62, 0, 0, 0, 16),
(101, 28, 0, 37, 0, 16),
(102, 28, 0, 37, 0, 16),
(103, 28, 0, 37, 0, 16),
(104, 28, 0, 37, 0, 16),
(105, 28, 0, 37, 0, 16),
(106, 28, 0, 37, 0, 16),
(107, 28, 0, 37, 0, 16),
(108, 28, 0, 37, 0, 16),
(109, 28, 0, 37, 0, 16),
(110, 28, 0, 37, 0, 16),
(111, 28, 0, 37, 0, 16),
(112, 28, 0, 37, 0, 16),
(113, 28, 0, 37, 0, 16),
(114, 28, 0, 37, 0, 16),
(115, 28, 0, 37, 0, 16),
(116, 28, 0, 37, 0, 16),
(117, 28, 0, 37, 0, 16),
(118, 28, 0, 37, 0, 16),
(119, 28, 0, 37, 0, 16),
(120, 28, 0, 37, 0, 16),
(121, 28, 0, 37, 0, 16),
(122, 28, 0, 37, 0, 16),
(123, 28, 0, 37, 0, 16),
(124, 28, 0, 37, 0, 16),
(125, 28, 0, 37, 0, 16),
(126, 28, 0, 37, 0, 16),
(127, 28, 0, 37, 0, 16),
(128, 28, 0, 37, 0, 16),
(129, 28, 0, 37, 0, 16),
(130, 28, 0, 37, 0, 16),
(131, 28, 0, 37, 0, 16),
(132, 28, 0, 37, 0, 16),
(133, 28, 0, 37, 0, 16),
(134, 28, 0, 37, 0, 16),
(135, 28, 0, 37, 0, 16),
(136, 28, 0, 37, 0, 16),
(137, 28, 0, 37, 0, 16),
(138, 28, 0, 37, 0, 16),
(139, 28, 0, 37, 0, 16),
(140, 28, 0, 37, 0, 16),
(141, 28, 0, 37, 0, 16),
(142, 28, 0, 37, 0, 16),
(143, 28, 0, 37, 0, 16),
(144, 28, 0, 37, 0, 16),
(145, 28, 0, 37, 0, 16),
(146, 28, 0, 37, 0, 16),
(147, 28, 0, 37, 0, 16),
(148, 28, 0, 37, 0, 16),
(149, 28, 0, 37, 0, 16),
(150, 28, 0, 37, 0, 16),
(151, 28, 0, 0, 0, 16),
(152, 28, 0, 0, 0, 16),
(153, 28, 0, 0, 0, 16),
(154, 28, 0, 0, 0, 16),
(155, 28, 0, 0, 0, 16),
(156, 28, 1, 28, 1, 16),
(157, 67, 0, 55, 0, 16),
(158, 67, 1, 55, 1, 16),
(159, 55, 0, 68, 0, 16),
(160, 55, 1, 68, 1, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_forum`
--

CREATE TABLE IF NOT EXISTS `tb_forum` (
`id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_forum`
--

INSERT INTO `tb_forum` (`id_forum`, `id_user`, `tanggal`, `judul`, `gambar`, `isi`, `status`, `id_kategori`) VALUES
(58, 26, '2016/04/26 12:42:11', 'alhamdulilah', '', 'www', '', 1),
(59, 26, '2016/04/26 13:15:18', 'bisa', '', 'baloon', '', 1),
(60, 26, '2016/04/26 13:17:38', 'aksjkj', 'BENDERA.png', 'bendera', '', 1),
(61, 26, '2016/04/26 13:18:05', 'kosong', '', 'kosong', '', 1),
(62, 40, '2016/04/27 10:40:41', 'Nc', '', 'WOW', '', 3),
(63, 45, '2016/04/27 11:44:45', 'Tes aja', '', 'Hayyyy', '', 1),
(64, 43, '2016/04/27 11:45:33', 'Antis semangat Revisi', '', 'wleu', '', 1),
(65, 46, '2016/04/27 11:45:46', '', '', 'Hayyyy', '', 1),
(66, 38, '2016/04/27 11:58:15', 'ldsfjeksl', '', 'bismillah', '', 1),
(67, 38, '2016/04/27 12:00:00', 'nsknd', 'Penguins1.jpg', 'ljdflekjd', '', 1),
(68, 40, '2016/04/27 15:03:25', 'TEST', '', 'bagus', '', 4),
(69, 55, '2016/04/29 13:04:53', 'W*F aing jago :v', '', 'Assassin''s Creed Syndicate', '', 1),
(70, 55, '2016/04/29 13:07:25', ':v', '', 'Wkwkwk', '', 1),
(71, 68, '2016/07/19 11:43:54', 'Polisi Teman', '', 'Tempat Cheat Polisi', '', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_forum_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_forum_kategori` (
`id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_forum_kategori`
--

INSERT INTO `tb_forum_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Categori'),
(2, 'Bug'),
(3, 'Game'),
(4, 'Cheat'),
(5, 'Question'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hint`
--

CREATE TABLE IF NOT EXISTS `tb_hint` (
`id_hint` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hint`
--

INSERT INTO `tb_hint` (`id_hint`, `pertanyaan`) VALUES
(1, 'What is your nickname when you were a child?'),
(2, 'What is the name of your favorite food?'),
(3, 'What are your hobbies?'),
(4, 'What animals do you liked?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE IF NOT EXISTS `tb_jawaban` (
`id` int(11) NOT NULL,
  `jawaban_texta` varchar(250) NOT NULL,
  `jawaban_textb` varchar(250) NOT NULL,
  `jawaban_textc` varchar(250) NOT NULL,
  `jawaban_textd` varchar(250) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_language` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id`, `jawaban_texta`, `jawaban_textb`, `jawaban_textc`, `jawaban_textd`, `id_soal`, `id_language`) VALUES
(1, '3', '4', '7', 'benar', 1, 1),
(2, 'Benar', '1', '2', '3', 2, 1),
(3, '20', '8', '9', '0', 3, 1),
(4, '12', '9', '20', '21', 4, 1),
(5, '21', '20', '10', '25', 5, 1),
(6, '12', '1', '10', '0', 6, 1),
(7, '4', '5', '8', '3', 7, 1),
(8, '', '', '', '', 8, 1),
(9, 'Plus', 'Minus', 'Equal', 'Number', 9, 1),
(10, '1', '0', '4', '9', 10, 1),
(11, '3', '9', '12', '20', 11, 1),
(12, '7', '8', '9', '10', 12, 1),
(13, '12', '40', '20', '35', 13, 1),
(14, '1,587,039 ', '1,687,093 ', '2,578,031', '2,687,096', 14, 1),
(15, '(100 X 5) + (4 X 5) ', '(100 X 5) + (4 X 50)', '(100 X 50) + (4 X 50)', '(100 X 50) + (40 X 50)', 15, 1),
(16, '-3', '-4', '13', '4', 16, 1),
(17, '2,000', '2,001', '1,001', '1,000', 17, 1),
(18, '2,000', '2,001', '1,001', '1,000', 18, 1),
(19, '12', '10', '8', '7', 19, 1),
(20, '40', '45', '50', '55', 20, 1),
(21, '17', '16', '15.4', '14.4', 21, 1),
(22, '28,6', '27,6', '25,6', '24,6', 22, 1),
(23, '11,796', '11,976', '11,967', '11.697', 23, 1),
(24, '7,20', '7,22', '7,21', '7,23', 24, 1),
(25, '5', '6', '7', '8', 25, 1),
(26, '15', '16', '17', '18', 26, 1),
(27, '115', '125', '135', '145', 27, 1),
(28, '50', '53', '60', '63', 28, 1),
(29, '432', '342', '243', '234', 29, 1),
(30, '29', '16', '17', '24,5', 30, 1),
(31, '495', '496', '497', '498', 31, 1),
(32, '6', '7,22', '8', '9', 32, 1),
(33, '16/25', '4/25', '25/4', '16/16', 33, 1),
(34, '6', '7', '8', '9', 34, 1),
(35, '6', '7', '8', '9', 35, 1),
(36, '110%', '0.1%', '1%', '10%', 36, 1),
(37, '0,284', '0,285', '0,286', '0,287', 37, 1),
(38, '0.15', '1.5', '0.01', '15.0', 38, 1),
(39, '5', '6', '7', '8', 39, 1),
(40, '4', '5', '3', '2', 40, 1),
(41, '5', '10', '15', '20', 41, 1),
(42, '10', '11', '12', '9', 42, 1),
(43, '60', '90', '120', '180', 43, 1),
(44, 'x = 3', 'x = 6', 'x = 4', 'x = 2', 44, 1),
(45, '5y + 3x = 13', '5x + 3y = 31', '3y - 5x = 31', '5y - 3x = 13', 45, 1),
(46, '3x-2 ', '3x-1', '3x-3', '3x-4', 46, 1),
(47, '300 girls , 315 boys', '215 girls , 325 boys', '375 girls , 225 boys', '175 girls , 325 boys', 47, 1),
(48, '5', '6', '7', '8', 48, 1),
(49, '1240', '1640', '1460', '1420', 49, 1),
(50, '3', '5', '2', 'y', 50, 1),
(51, '4', '6', '8', '2', 51, 1),
(52, '3x', '11x', '2x', 'x', 52, 1),
(53, '40', '20', '10', '14', 53, 1),
(54, '60', '40', '20', '12', 54, 1),
(55, '20', '16', '18', '15', 55, 1),
(56, '60', '64', '50', '12', 56, 1),
(57, '9', '4', '2', '6', 57, 1),
(58, '27', '24', '34', '56', 58, 1),
(59, '5', '4', '3', '2', 59, 1),
(60, '5', '10', '12', '15', 60, 1),
(61, '5', '4.5', '2', '4', 61, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_quiz`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_quiz` (
`id` int(11) NOT NULL,
  `kategori_quiz` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_quiz`
--

INSERT INTO `tb_kategori_quiz` (`id`, `kategori_quiz`) VALUES
(1, 'Matematika Dasar'),
(2, 'Matamatika Sulit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komenforum`
--

CREATE TABLE IF NOT EXISTS `tb_komenforum` (
`id_komen` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komenforum`
--

INSERT INTO `tb_komenforum` (`id_komen`, `id_forum`, `id_user`, `komentar`, `tanggal`) VALUES
(6, 36, 24, 'BISSMILLAHIRRAHMANIRRAHIIM', '2016/04/26 07:37:32'),
(7, 61, 39, 'nc', '2016/04/27 07:11:10'),
(8, 68, 30, 'Apaan?', '2016/04/27 15:06:06'),
(9, 68, 40, 'kagak', '2016/04/27 15:06:28'),
(10, 67, 55, 'NIce!', '2016/04/27 16:48:53'),
(11, 63, 55, 'Berisik', '2016/04/29 11:30:35'),
(12, 64, 55, '<('''')', '2016/04/29 11:31:12'),
(13, 71, 55, 'Cacad lo\r\n', '2016/07/19 11:45:24'),
(14, 69, 68, 'huuuuuu', '2016/07/19 11:45:22'),
(15, 71, 55, 'awe,', '2016/07/19 11:45:43'),
(16, 71, 68, 'siapa ?\r\n', '2016/07/19 11:45:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komenforum2`
--

CREATE TABLE IF NOT EXISTS `tb_komenforum2` (
`id_komen2` int(11) NOT NULL,
  `id_komen` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_language`
--

CREATE TABLE IF NOT EXISTS `tb_language` (
`id` int(11) NOT NULL,
  `language` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_language`
--

INSERT INTO `tb_language` (`id`, `language`) VALUES
(1, 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE IF NOT EXISTS `tb_level` (
`id_level` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`, `tingkat`, `kelas`, `score`) VALUES
(1, 1, '1', '', '1000'),
(2, 2, '2', '', '2000'),
(3, 3, '3', '', '3000'),
(4, 4, '4', '', '4000'),
(5, 5, '5', '', '5000'),
(6, 6, '6', '', '6000'),
(7, 7, '7', '', '7000'),
(8, 8, '8', '', '8000'),
(9, 9, '9', '', '9000'),
(10, 10, '10', '', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penghargaan`
--

CREATE TABLE IF NOT EXISTS `tb_penghargaan` (
`id_penghargaan_user` int(11) NOT NULL,
  `id_penghargaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hasil_misi_user` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penghargaan`
--

INSERT INTO `tb_penghargaan` (`id_penghargaan_user`, `id_penghargaan`, `id_user`, `hasil_misi_user`, `status`) VALUES
(1, 1, 2, 'Menang sebanyak 1000 kali', 0),
(2, 2, 55, 'Menang berturut-turut sebanyak 3 kali', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertemanan`
--

CREATE TABLE IF NOT EXISTS `tb_pertemanan` (
`id_pertemanan` int(11) NOT NULL,
  `id_anggota1` int(11) NOT NULL,
  `status1` int(11) NOT NULL,
  `id_anggota2` int(11) NOT NULL,
  `status2` int(11) NOT NULL,
  `hasil_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_quiz`
--

CREATE TABLE IF NOT EXISTS `tb_quiz` (
`id` int(11) NOT NULL,
  `tanggal` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_quiz`
--

INSERT INTO `tb_quiz` (`id`, `tanggal`) VALUES
(10, '2016-04-29'),
(11, '2016-04-29'),
(12, '2016-04-30'),
(13, '2016-04-30'),
(14, '2016-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_quiz_language`
--

CREATE TABLE IF NOT EXISTS `tb_quiz_language` (
  `id_quiz` int(11) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `judul_quiz` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `soal1` int(11) NOT NULL,
  `soal2` int(11) NOT NULL,
  `soal3` int(11) NOT NULL,
  `soal4` int(11) NOT NULL,
  `soal5` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_quiz_language`
--

INSERT INTO `tb_quiz_language` (`id_quiz`, `cover`, `judul_quiz`, `keterangan`, `soal1`, `soal2`, `soal3`, `soal4`, `soal5`, `id_level`) VALUES
(10, '', 'Introduction', 'Starting from small things.', 10, 9, 12, 11, 13, 1),
(11, '', 'Do not be afraid to try', 'By trying, it means you learn.', 17, 19, 14, 17, 15, 2),
(12, '', ' quite alluring', 'don''t forget to pray before work', 20, 21, 22, 23, 24, 3),
(13, '', 'search at real life', 'don''t forget to pray before work', 25, 26, 27, 28, 29, 4),
(14, '', 'counting to work', 'don''t forget to pray before work', 33, 36, 38, 40, 43, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_room`
--

CREATE TABLE IF NOT EXISTS `tb_room` (
`id_room` int(11) NOT NULL,
  `nomer_room` int(11) NOT NULL,
  `id_anggota1` int(11) NOT NULL,
  `status1` int(11) NOT NULL,
  `id_anggota2` int(11) NOT NULL,
  `status2` int(11) NOT NULL,
  `hasil_status` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_room`
--

INSERT INTO `tb_room` (`id_room`, `nomer_room`, `id_anggota1`, `status1`, `id_anggota2`, `status2`, `hasil_status`) VALUES
(63, 8, 38, 1, 62, 1, 1),
(72, 9, 62, 1, 62, 1, 1),
(59, 6, 40, 1, 30, 1, 1),
(58, 5, 40, 1, 30, 1, 1),
(57, 4, 40, 1, 30, 1, 1),
(56, 3, 30, 1, 40, 1, 1),
(55, 2, 40, 1, 30, 1, 1),
(54, 1, 52, 1, 37, 1, 1),
(73, 10, 28, 1, 28, 1, 1),
(74, 11, 28, 1, 28, 1, 1),
(75, 12, 28, 1, 28, 1, 1),
(76, 13, 28, 1, 28, 1, 1),
(77, 14, 67, 1, 55, 1, 1),
(78, 15, 55, 1, 68, 1, 1),
(79, 16, 68, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE IF NOT EXISTS `tb_soal` (
`id` int(11) NOT NULL,
  `jawaban` varchar(250) NOT NULL,
  `jawaban_text_benar` varchar(250) NOT NULL,
  `id_level` int(11) NOT NULL,
  `xp` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id`, `jawaban`, `jawaban_text_benar`, `id_level`, `xp`) VALUES
(9, 'B', '40', 1, 50),
(10, 'C', '9', 1, 50),
(11, 'A', '3', 1, 50),
(12, 'D', '9', 1, 50),
(13, 'A', 'Plus', 1, 50),
(14, 'A', '1,587,039 ', 2, 75),
(15, 'C', '(100 X 50) + (4 X 50)', 2, 75),
(17, 'B', '-4', 2, 75),
(18, 'C', '1,001', 2, 75),
(19, 'D', '7', 2, 75),
(20, 'D', '55', 3, 100),
(21, 'D', '14.4', 3, 100),
(22, 'B', '27,6', 3, 100),
(23, 'A', '11,796', 3, 100),
(24, 'C', '7,21', 3, 100),
(25, 'B', '6', 4, 125),
(26, 'C', '17', 4, 125),
(27, 'A', '115', 4, 125),
(28, 'D', '63', 4, 125),
(29, 'A', '432', 4, 125),
(30, 'B', '16', 4, 125),
(31, 'A', '495', 4, 125),
(33, 'B', '4/25', 5, 150),
(35, 'B', '7', 4, 125),
(36, 'D', '10%', 5, 150),
(37, 'A', '0,284', 4, 125),
(38, 'A', '0.15', 5, 150),
(39, 'A', '5', 4, 125),
(40, 'C', '3', 5, 150),
(41, 'C', '15', 3, 100),
(42, 'D', '9', 3, 100),
(43, 'D', '180', 5, 150),
(44, 'B', 'x = 6', 5, 150),
(45, 'A', '5y + 3x = 13', 5, 150),
(46, 'A', '3x-2 ', 3, 100),
(47, 'C', '375 girls , 225 boys', 5, 150),
(48, 'B', '6', 3, 100),
(49, 'B', '1640', 3, 100),
(50, 'A', '3', 5, 150),
(51, 'D', '2', 2, 75),
(52, 'C', '2x', 5, 150),
(53, 'A', '40', 2, 50),
(54, 'A', '60', 1, 50),
(55, 'B', '16', 2, 75),
(56, 'B', '64', 2, 75),
(57, 'A', '9', 1, 50),
(58, 'B', '24', 2, 75),
(59, 'B', '4', 1, 50),
(60, 'D', '15', 1, 50),
(61, 'D', '4', 1, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_language`
--

CREATE TABLE IF NOT EXISTS `tb_soal_language` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(250) NOT NULL,
  `id_language` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_language`
--

INSERT INTO `tb_soal_language` (`id_soal`, `soal`, `id_language`) VALUES
(8, '10... How do you read the text above...', 1),
(9, 'What is this symbol (+)?', 1),
(10, 'Which is the biggest number?', 1),
(11, 'Which number is greater than 15?', 1),
(12, '4 + 5 =', 1),
(13, '2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 + 2 =', 1),
(14, ' Which of these numbers is evenly divisible by 3?', 1),
(15, ' Which of the following is equal to 104 X 50?', 1),
(16, 'Simplify. -2 .(-5 + 7) =', 1),
(17, 'Find the quotient. 76,076 + 76 ...', 1),
(18, 'Find the quotient. 76.076 + 76 ..', 1),
(19, 'Solve for n. , 2n + 3 = 17 ..', 1),
(20, 'Find the sum.  1+2+3 ...+ 9+10 ..', 1),
(21, ' What is 45% of 32? ', 1),
(22, 'Simplify. 3(5 + 8.2 - 4) ..', 1),
(23, '27.03 - 15.234 ..', 1),
(24, 'Round to the nearest hundredth. 7.20631  ..', 1),
(25, 'How many factors of 4000 are perfect squares? ', 1),
(26, 'What is the largest prime divisor of 187 ? ', 1),
(27, 'The average of five numbers is 23. What is their sum? ', 1),
(28, 'What is the whole number nearest the square root of 4004 ? ', 1),
(29, 'What is the least common multiple of 24,54, and 144 ? ', 1),
(30, 'What is the mean of the following list of numbers: {1,4,7, 10, 13, 16, 19,22,25,28,31). ...', 1),
(31, 'What is the smallest multiple of 5 the sum of whose digits is 18 ? ', 1),
(32, 'If la = ab - a - b, then what is m?', 1),
(33, 'Which fraction is equivalent to 16%? ', 1),
(34, ' If (a b) = ab - a - b, then what is (5 3)?', 1),
(35, ' If (a b) = ab - a - b, then what is (5 3)?', 1),
(36, 'Convert 0.1 to percentage is ...', 1),
(37, 'Find the value of 0.2 + 0.08 + 0.004 ? Express your answer as a decimal. ..', 1),
(38, 'Convert 15% to decimals', 1),
(39, 'What is the sum of the distinct prime factors of 12?', 1),
(40, 'In the triangle there are how many angles?', 1),
(41, 'Find the largest odd natural number that is a factor of 5', 1),
(42, ' How many palindrome numbers are there between 10 and 100 ?', 1),
(43, 'How many degrees in a triangle?', 1),
(44, 'The numbers 2 , 3 , 5 and x have an average equal to 4. What is x?', 1),
(45, 'Find an equation of the line containing (- 4,5) and perpendicular to the line 5x - 3y = 4. ', 1),
(46, 'What is the mean of 3x, 4x =5, and 2x- 1?', 1),
(47, 'There are 600 pupils in a school. The ratio of boys to girls in this school is 3:5. How many girls and how many boys are in this school?', 1),
(48, ' Find the value of (x + y) if 8(x + y) = 48, ', 1),
(49, ' Compute: 41(9) + 41(31) ', 1),
(50, 'Tentukan koefisien x pada 5x2y + 3x', 1),
(51, 'How many axes of symmetry does a rectangle have given that it is not a square? ', 1),
(52, 'Simplify the algebra 5x + 6x - 9x', 1),
(53, '4*5*2', 1),
(54, '3*5*4', 1),
(55, '2*2*2*2', 1),
(56, '4*4*4', 1),
(57, 'two chickens plus 9 chickens, minus 2 chickens. Amount....', 1),
(58, '2+4+5+6+7', 1),
(59, '5-2+(2-1) =', 1),
(60, '1+2+3+4+5', 1),
(61, '20/5 =', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `id_hint` int(11) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `email`, `tanggal`, `id_hint`, `jawaban`, `status`, `foto`) VALUES
(24, 'retnam', '123', 'Retno Ambar', 'retno25ambarwati@gmail.com', '26 Apr 16', 1, 'eno', 0, 'Jellyfish2.jpg'),
(27, 'sonisetiawan007', 'soni.setiawan.it07@gmail.com', 'Soni Setiawan', 'soni.setiasawan.it07@gmail.com', '26 Apr 16', 1, 'Soni', 0, 'S.png'),
(28, 'soni', 'soni', 'soni', 'soni.setiawasn.it07@gmail.com', '26 Apr 16', 1, 'ikan', 0, 'S.png'),
(61, 'caumenkhel', 'acumnekhel', 'caumenkhle', 'caumenkhel@gmail.com', '27 Apr 16', 1, 'caumenkhel', 1, 'C.png'),
(40, 'mochamadghany', '12345', 'Mochamad Ghany Ramdhani', 'mochammadghani@gmail.com', '27 Apr 16', 1, 'gani', 1, '13043221_1252669398094759_5704130284167328951_n.jpg'),
(39, 'Ganteng9', 'semangatsekarangpresentasi', 'Fajar Saputo J', 'fajarthea5@gmail.com', '27 Apr 16', 1, 'Jar', 1, 'G.png'),
(37, 'sonice', 'sonice', 'sonice', 'soni.setiawan.it07@gmail.com', '27 Apr 16', 1, 'ikan', 1, 'S.png'),
(38, 'daniahanum', '123', 'Dania Febyola', 'daniafebyola@gmail.com', '27 Apr 16', 1, 'mpeb', 1, 'D.png'),
(42, 'rizkyism', 'cherrybelle', 'Rizky Ismail', 'rizkyism27@gmail.com', '27 Apr 16', 2, 'Basmut', 1, 'IMG_c9aa5ac86db0984f7180e1cdfa902f0a.jpg'),
(43, 'rismafitria', 'vinavanimira22', 'Risma Fitrianti', 'rismafitria9e@gmail.com', '27 Apr 16', 1, 'sima', 1, 'R.png'),
(68, 'Dika28', 'mahardika121', 'Dika', 'rahaditiam@gmail.com', '19 Jul 16', 3, 'football', 1, 'D.png'),
(45, 'Antis', '123', 'Antis', 'antis.iniswatin98@gmail.com', '27 Apr 16', 1, 'titis', 1, 'A.png'),
(63, 'uzmaku69', 'm.ahsan69', 'wahyu sumirat', 'bilhaq69@gmail.com', '27 Apr 16', 1, 'wahyu', 1, 'U.png'),
(52, 'qwerty', '085230050098', 'qwerty', 'mubaroq@upi.edu', '27 Apr 16', 1, 'sukenti', 1, 'Q.png'),
(55, 'hary_suryanto', 'admin', 'Hary Suryanto', 'hary.suryanto01@gmail.com', '27 Apr 16', 2, 'Nasi goreng', 1, '1043_8r-3-1.jpg'),
(49, 'Fanny', 'fanny123', 'Siti Yulfanny', 'yulfannyhamidah@gmail.com', '27 Apr 16', 3, 'Jalan-jalan', 1, 'Hello-kitty.png'),
(66, 'ree', '777', 'Retno Ambar', 'retno25ambarwati@gmail.com', '28 Apr 16', 1, 'eno', 0, 'C360_2016-03-31-17-12-52-781.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_level`
--

CREATE TABLE IF NOT EXISTS `tb_user_level` (
`id_user_level` int(11) NOT NULL,
  `id_user_score` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_level`
--

INSERT INTO `tb_user_level` (`id_user_level`, `id_user_score`, `id_level`) VALUES
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 3),
(24, 24, 1),
(25, 25, 7),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 3),
(33, 33, 3),
(34, 34, 2),
(35, 35, 6),
(36, 36, 1),
(37, 37, 4),
(38, 38, 1),
(39, 39, 2),
(40, 40, 1),
(41, 41, 2),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 2),
(48, 48, 1),
(49, 49, 1),
(50, 50, 5),
(51, 51, 1),
(52, 52, 1),
(53, 53, 1),
(54, 54, 1),
(55, 55, 1),
(56, 56, 1),
(57, 57, 1),
(58, 58, 2),
(59, 59, 1),
(60, 60, 1),
(61, 61, 1),
(62, 62, 1),
(63, 63, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_score`
--

CREATE TABLE IF NOT EXISTS `tb_user_score` (
`id_user_score` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `coin` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `score_level` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_score`
--

INSERT INTO `tb_user_score` (`id_user_score`, `id_user`, `coin`, `score`, `score_level`) VALUES
(19, 24, 500, 1000, '0'),
(20, 25, 30, 300, '300'),
(21, 26, 100, 0, '0'),
(22, 27, 100, 0, '0'),
(23, 28, 1008, 10025, '2025'),
(24, 29, 100, 0, '0'),
(25, 30, 2665, 25650, '4650'),
(26, 31, 100, 0, '0'),
(27, 32, 100, 0, '0'),
(28, 33, 100, 0, '0'),
(29, 34, 100, 0, '0'),
(30, 35, 100, 0, '0'),
(31, 36, 100, 0, '0'),
(32, 37, 585, 4850, '1850'),
(33, 38, 600, 5000, '2000'),
(34, 39, 305, 2050, '1050'),
(35, 40, 1935, 18350, '3350'),
(36, 41, 100, 0, '0'),
(37, 42, 855, 7550, '1550'),
(38, 43, 100, 0, '0'),
(39, 44, 375, 2750, '1750'),
(40, 45, 100, 0, '0'),
(41, 46, 220, 1200, '1100'),
(42, 47, 100, 0, '0'),
(43, 48, 100, 0, '0'),
(44, 49, 100, 0, '0'),
(45, 50, 100, 0, '0'),
(46, 51, 100, 0, '0'),
(47, 52, 380, 2800, '1800'),
(48, 53, 100, 0, '0'),
(49, 54, 100, 0, '0'),
(50, 55, 1156, 10550, '550'),
(51, 56, 100, 0, '0'),
(52, 57, 100, 0, '0'),
(53, 58, 100, 0, '0'),
(54, 59, 120, 200, '200'),
(55, 60, 100, 0, '0'),
(56, 61, 100, 0, '0'),
(57, 62, 120, 200, '200'),
(58, 63, 210, 1100, '100'),
(59, 64, 100, 0, '0'),
(60, 65, 100, 0, '0'),
(61, 66, 100, 0, '0'),
(62, 67, 150, 500, '500'),
(63, 68, 125, 250, '250');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_win`
--

CREATE TABLE IF NOT EXISTS `tb_win` (
`id_win` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_main` varchar(10) NOT NULL,
  `menang` varchar(10) NOT NULL COMMENT 'Nama tabel:  	Tambahkan kolom  StrukturDokumentasi Nama 	JenisDokumentasi 	Panjang/Nilai 	Bawaan 	Penyortiran 	Atribut 	Kosong 	Indeks 	A_I 	Komentar 	Jenis MIME 	Transformasi Browser 	Pilihan transformasi 	 	  	 	 	 		 	 	  	 	 	 		 	 	  	 	 	 		 	 	  	 	 	 		 	 	  	 	 	 		 	 	  	 	 	 		 	 	  	 	 	 		',
  `kalah` varchar(10) NOT NULL,
  `seri` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_disable`
--
ALTER TABLE `tb_disable`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_duel`
--
ALTER TABLE `tb_duel`
 ADD PRIMARY KEY (`id_duel`);

--
-- Indexes for table `tb_forum`
--
ALTER TABLE `tb_forum`
 ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `tb_forum_kategori`
--
ALTER TABLE `tb_forum_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_hint`
--
ALTER TABLE `tb_hint`
 ADD PRIMARY KEY (`id_hint`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori_quiz`
--
ALTER TABLE `tb_kategori_quiz`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komenforum`
--
ALTER TABLE `tb_komenforum`
 ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `tb_komenforum2`
--
ALTER TABLE `tb_komenforum2`
 ADD PRIMARY KEY (`id_komen2`);

--
-- Indexes for table `tb_language`
--
ALTER TABLE `tb_language`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_penghargaan`
--
ALTER TABLE `tb_penghargaan`
 ADD PRIMARY KEY (`id_penghargaan_user`);

--
-- Indexes for table `tb_pertemanan`
--
ALTER TABLE `tb_pertemanan`
 ADD PRIMARY KEY (`id_pertemanan`);

--
-- Indexes for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
 ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
 ADD PRIMARY KEY (`id_user_level`);

--
-- Indexes for table `tb_user_score`
--
ALTER TABLE `tb_user_score`
 ADD PRIMARY KEY (`id_user_score`);

--
-- Indexes for table `tb_win`
--
ALTER TABLE `tb_win`
 ADD PRIMARY KEY (`id_win`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_disable`
--
ALTER TABLE `tb_disable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_duel`
--
ALTER TABLE `tb_duel`
MODIFY `id_duel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `tb_forum`
--
ALTER TABLE `tb_forum`
MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `tb_forum_kategori`
--
ALTER TABLE `tb_forum_kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_hint`
--
ALTER TABLE `tb_hint`
MODIFY `id_hint` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tb_kategori_quiz`
--
ALTER TABLE `tb_kategori_quiz`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_komenforum`
--
ALTER TABLE `tb_komenforum`
MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_komenforum2`
--
ALTER TABLE `tb_komenforum2`
MODIFY `id_komen2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_language`
--
ALTER TABLE `tb_language`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_penghargaan`
--
ALTER TABLE `tb_penghargaan`
MODIFY `id_penghargaan_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pertemanan`
--
ALTER TABLE `tb_pertemanan`
MODIFY `id_pertemanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tb_user_score`
--
ALTER TABLE `tb_user_score`
MODIFY `id_user_score` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tb_win`
--
ALTER TABLE `tb_win`
MODIFY `id_win` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2016 pada 13.52
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fruitology`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE IF NOT EXISTS `bahan` (
`id_bahan` smallint(3) NOT NULL,
  `nama_bahan` varchar(30) NOT NULL,
  `deskripsi` text,
  `resep` smallint(2) NOT NULL,
  `gambar_bahan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `deskripsi`, `resep`, `gambar_bahan`) VALUES
(1, 'lemon', 'peras 1/2 buah lemon', 1, 'lemon.jpg'),
(4, 'madu', '1 sendok makan atau secukupnya', 1, 'madu.jpg'),
(7, 'apokat', '1 buah apokat', 5, 'apokat.jpg'),
(8, 'Apel', '1 buah apel hijau', 1, 'apel-hijau.jpg'),
(9, 'madu', '4 sendok makan', 5, 'madu.jpg'),
(10, 'Apel', '1 buah apel hijau', 2, 'apel-hijau.jpg'),
(11, 'anggur', '5-10 butir anggur ungu', 2, 'anggur-merah.jpg'),
(12, 'lemon', 'peras 1/2 buah lemon', 2, 'lemon.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id_gallery` int(11) NOT NULL,
  `pict_gallery` varchar(50) DEFAULT NULL,
  `nama_pict` varchar(50) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `pict_gallery`, `nama_pict`, `deskripsi`) VALUES
(68, 'lemon.jpg', 'lemon', 'mencerahkan kulit, daya tahan tubuh, penetral asam lambung mencerahkan kulit, daya tahan tubuh, penetral asam lambung\r\nmencerahkan kulit, daya tahan tubuh, penetral asam lambung\r\nmencerahkan kulit, daya tahan tubuh, penetral asam lambung\r\n'),
(69, 'apel-hijau.jpg', 'apel hijau', 'meningkatkan daya tahan tubuh, detox pencernaan dan melembabkan kulit'),
(70, 'nanas.jpg', 'nanas', 'membunuh bakteri, penawar racun'),
(72, 'wortel.jpg', 'wortel', 'meningkatkan pengelihatan, detox pencernaan'),
(73, 'pisang.jpg', 'pisang', 'mengandung kalium yang dapat meningkatkan energi'),
(74, 'melon.jpg', 'Melon', 'mengurangi rasa mulas, meredakan sakit maag'),
(75, 'jambu-biji.jpg', 'jambu', 'menambah trombosit, vitamin c paling tinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `id` varchar(50) DEFAULT NULL,
  `pass` char(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `id`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
`id_resep` smallint(2) NOT NULL,
  `judul_resep` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `judul_resep`) VALUES
(1, 'jus detox lambung'),
(2, 'jus daya tahan tubuh'),
(5, 'masker pelembab kulit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
 ADD PRIMARY KEY (`id_bahan`), ADD KEY `resep` (`resep`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
 ADD PRIMARY KEY (`id_resep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
MODIFY `id_bahan` smallint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
MODIFY `id_resep` smallint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bahan`
--
ALTER TABLE `bahan`
ADD CONSTRAINT `coba` FOREIGN KEY (`resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

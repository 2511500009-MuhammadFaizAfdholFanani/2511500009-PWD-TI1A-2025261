-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Jan 2026 pada 13.42
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata_mahasiswa`
--

CREATE TABLE `tbl_biodata_mahasiswa` (
  `cmid` int(11) NOT NULL,
  `cnim` varchar(20) NOT NULL,
  `cnama` varchar(100) NOT NULL,
  `ctempat_lahir` varchar(50) NOT NULL,
  `ctanggal_lahir` date NOT NULL,
  `chobi` varchar(100) NOT NULL,
  `cpasangan` varchar(50) DEFAULT NULL,
  `cpekerjaan` varchar(50) DEFAULT NULL,
  `cnama_ortu` varchar(100) NOT NULL,
  `cnama_kakak` varchar(100) DEFAULT NULL,
  `cnama_adik` varchar(100) DEFAULT NULL,
  `dcreated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dupdated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_biodata_mahasiswa`
--

INSERT INTO `tbl_biodata_mahasiswa` (`cmid`, `cnim`, `cnama`, `ctempat_lahir`, `ctanggal_lahir`, `chobi`, `cpasangan`, `cpekerjaan`, `cnama_ortu`, `cnama_kakak`, `cnama_adik`, `dcreated_at`, `dupdated_at`) VALUES
(1, '2511500009', 'Muhammad Faiz Afdhol Fanani', 'sungailiat', '2007-03-06', 'ya gitu lah', 'adalah', 'hmmmmmmm', 'King abuyy dan Jendral Tuti', 'kariee', 'sotooo', '2026-01-07 07:17:51', '2026-01-07 07:17:51'),
(2, '2511500006', 'govin', 'bedukang', '2007-12-01', 'gamee', 'hengky', 'nyabu', 'King abuyy dan Jendral Tuti', '-', '-', '2026-01-07 07:52:17', '2026-01-07 07:52:17'),
(3, '2511500007', 'raka pradipta', 'parit tiga', '2005-07-10', 'mancing', 'adalah', 'mahasiswa', 'punten king abuy', '-', '-', '2026-01-07 13:32:09', '2026-01-07 13:32:09'),
(4, '2511500010', 'miftah', 'pemali', '2007-09-14', 'gamee', 'adaaa', 'yaaa gitulah', 'kingg abuy nya mana', 'abuyy', 'tuti', '2026-01-07 13:35:25', '2026-01-07 13:35:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_biodata_mahasiswa`
--
ALTER TABLE `tbl_biodata_mahasiswa`
  ADD PRIMARY KEY (`cmid`),
  ADD UNIQUE KEY `cnim` (`cnim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_biodata_mahasiswa`
--
ALTER TABLE `tbl_biodata_mahasiswa`
  MODIFY `cmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

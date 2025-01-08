-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Jan 2025 pada 09.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma01mandau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtb_sma01mandau`
--

CREATE TABLE `dtb_sma01mandau` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alumni` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dtb_sma01mandau`
--

INSERT INTO `dtb_sma01mandau` (`id`, `nama`, `asal`, `alamat`, `jenis_kelamin`, `agama`, `alumni`) VALUES
(2, 'Revaldi erman syah', 'duri', 'jl.sskasim', 'laki-laki', 'Islam', 'smp11 mandau'),
(19, 'darman s', 'pku', 'jln pemuda\r\n', 'laki-laki', 'Kristen', 'SMP1'),
(20, 'revaldi', '', '', '', 'Islam', ''),
(21, 'darman s', '', '', '', 'Islam', ''),
(22, 'dd', 'dd', 'dd', 'perempuan', 'Islam', 'SMP1'),
(23, 'jjjjjj', 'jjjj', 'jjjjj', 'laki-laki', 'Islam', '11'),
(24, 'qq', 'qqq', 'qqq', 'perempuan', 'Islam', 'qq'),
(25, 'rayan', 'duri', 'jln.semangka', 'perempuan', 'Islam', '12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dtb_sma01mandau`
--
ALTER TABLE `dtb_sma01mandau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dtb_sma01mandau`
--
ALTER TABLE `dtb_sma01mandau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

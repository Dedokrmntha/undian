-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2024 pada 08.55
-- Versi server: 10.4.21-MariaDB-log
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorprize`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_admin`
--

CREATE TABLE `db_admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_admin`
--

INSERT INTO `db_admin` (`username`, `password`, `fullname`, `gambar`) VALUES
('Dedo', '7fa873e55dca13d1e7241161e731b8e1', 'dedokarmanata', ''),
('superadmin', '0cc175b9c0f1b6a831c399e269772661', 'superadmin', 'logo.png'),
('yuda', 'ac9053a8bd7632586c3eb663a6cf15e4', 'yuda', 'yuda.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_hasil`
--

CREATE TABLE `db_hasil` (
  `id` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_hasil`
--

INSERT INTO `db_hasil` (`id`, `id_user`, `keterangan`) VALUES
(3, 4, 'tv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_user`
--

CREATE TABLE `db_user` (
  `id` int(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_user`
--

INSERT INTO `db_user` (`id`, `nomor`, `nama`, `unit`) VALUES
(1, '02222', 'yuda12', ''),
(2, '0', 'fahri', ''),
(3, '0', 'fajar', ''),
(4, '0', 'entah', ''),
(5, '0', 'firman', ''),
(6, '0', 'akuu', ''),
(7, '0', 'ade', ''),
(16, '01233', 'PS2', ''),
(17, '2147483647000000', 'iwan', 'teknologi'),
(18, '111111122222333', 'akaiii', 'teknologiii');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `db_hasil`
--
ALTER TABLE `db_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_hasil`
--
ALTER TABLE `db_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

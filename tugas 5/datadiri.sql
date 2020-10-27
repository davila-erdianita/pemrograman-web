-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2020 pada 00.48
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datadiri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterampilan`
--

CREATE TABLE `keterampilan` (
  `id_keterampilan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_keterampilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterampilan`
--

INSERT INTO `keterampilan` (`id_keterampilan`, `id_pengguna`, `nama_keterampilan`) VALUES
(1, 1, 'Creative'),
(2, 1, 'Hardworking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_institusi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_pengguna`, `nama_institusi`) VALUES
(1, 1, 'SDN Kauman 1 Malang'),
(2, 1, 'SMPN 1 Malang'),
(3, 1, 'SMAN 3 Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'Davila Erdianita', 'jl.Sumba no 6 Malang', '081122332245');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keterampilan`
--
ALTER TABLE `keterampilan`
  ADD PRIMARY KEY (`id_keterampilan`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keterampilan`
--
ALTER TABLE `keterampilan`
  MODIFY `id_keterampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

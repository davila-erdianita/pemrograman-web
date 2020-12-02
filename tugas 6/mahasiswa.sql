-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2020 pada 23.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjangpendidikan`
--

CREATE TABLE `jenjangpendidikan` (
  `id_jenjang` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenjangpendidikan`
--

INSERT INTO `jenjangpendidikan` (`id_jenjang`, `jenjang_pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoritelepon`
--

CREATE TABLE `kategoritelepon` (
  `kategori_telepon` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoritelepon`
--

INSERT INTO `kategoritelepon` (`kategori_telepon`, `nama_kategori`) VALUES
(1, 'mobile'),
(2, 'Fax'),
(3, 'office');

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
-- Struktur dari tabel `kodetelepon`
--

CREATE TABLE `kodetelepon` (
  `id_kodetelepon` int(11) NOT NULL,
  `kategori_telepon` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kodetelepon`
--

INSERT INTO `kodetelepon` (`id_kodetelepon`, `kategori_telepon`, `kode`) VALUES
(1, 1, '081'),
(2, 1, '085'),
(3, 1, '082'),
(4, 3, '0341');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomortelepon`
--

CREATE TABLE `nomortelepon` (
  `id_telepon` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `kategori_telepon` int(11) NOT NULL,
  `id_kodetelepon` int(11) NOT NULL,
  `nomor` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nomortelepon`
--

INSERT INTO `nomortelepon` (`id_telepon`, `id_pengguna`, `kategori_telepon`, `id_kodetelepon`, `nomor`) VALUES
(1, 1, 1, 1, '08122334455'),
(2, 1, 1, 1, '235476578');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_institusi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_jenjang`, `id_pengguna`, `nama_institusi`) VALUES
(1, 1, 1, 'SDN Kauman 1 Malang'),
(2, 2, 1, 'SMPN 1 Malang'),
(3, 3, 1, 'SMAN 3 Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `alamat`) VALUES
(1, 'Davila Erdianita', 'jl.Sumba no 6 Malang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenjangpendidikan`
--
ALTER TABLE `jenjangpendidikan`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `kategoritelepon`
--
ALTER TABLE `kategoritelepon`
  ADD PRIMARY KEY (`kategori_telepon`);

--
-- Indeks untuk tabel `keterampilan`
--
ALTER TABLE `keterampilan`
  ADD PRIMARY KEY (`id_keterampilan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `kodetelepon`
--
ALTER TABLE `kodetelepon`
  ADD PRIMARY KEY (`id_kodetelepon`),
  ADD KEY `kategori_telepon` (`kategori_telepon`);

--
-- Indeks untuk tabel `nomortelepon`
--
ALTER TABLE `nomortelepon`
  ADD PRIMARY KEY (`id_telepon`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `kategori_telepon` (`kategori_telepon`),
  ADD KEY `id_kodetelepon` (`id_kodetelepon`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenjangpendidikan`
--
ALTER TABLE `jenjangpendidikan`
  MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategoritelepon`
--
ALTER TABLE `kategoritelepon`
  MODIFY `kategori_telepon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `keterampilan`
--
ALTER TABLE `keterampilan`
  MODIFY `id_keterampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kodetelepon`
--
ALTER TABLE `kodetelepon`
  MODIFY `id_kodetelepon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nomortelepon`
--
ALTER TABLE `nomortelepon`
  MODIFY `id_telepon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keterampilan`
--
ALTER TABLE `keterampilan`
  ADD CONSTRAINT `keterampilan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `kodetelepon`
--
ALTER TABLE `kodetelepon`
  ADD CONSTRAINT `kodetelepon_ibfk_1` FOREIGN KEY (`kategori_telepon`) REFERENCES `kategoritelepon` (`kategori_telepon`);

--
-- Ketidakleluasaan untuk tabel `nomortelepon`
--
ALTER TABLE `nomortelepon`
  ADD CONSTRAINT `nomortelepon_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `nomortelepon_ibfk_2` FOREIGN KEY (`kategori_telepon`) REFERENCES `kategoritelepon` (`kategori_telepon`),
  ADD CONSTRAINT `nomortelepon_ibfk_3` FOREIGN KEY (`id_kodetelepon`) REFERENCES `kodetelepon` (`id_kodetelepon`);

--
-- Ketidakleluasaan untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

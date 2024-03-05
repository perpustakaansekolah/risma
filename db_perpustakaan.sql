-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2024 pada 03.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_buku`
--

CREATE TABLE `list_buku` (
  `no` int(11) NOT NULL,
  `kode_buku` varchar(100) NOT NULL,
  `jenis_buku` varchar(30) NOT NULL,
  `judul_buku` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `list_buku`
--

INSERT INTO `list_buku` (`no`, `kode_buku`, `jenis_buku`, `judul_buku`) VALUES
(3, 'BK2', 'komik', 'rety'),
(4, 'BK4', 'pelajaran', 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no`, `user`, `password`) VALUES
(1, 'rismajulianti@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `no` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `kode_buku` varchar(100) NOT NULL,
  `jenis_buku` varchar(11) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `peminjaman` date NOT NULL,
  `pengembalian` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`no`, `nama`, `kelas`, `kode_buku`, `jenis_buku`, `judul_buku`, `peminjaman`, `pengembalian`, `status`) VALUES
(1, 'Yana', '12 rpl 2', '0003', 'pelajaran', 'INDONESIA', '2024-02-22', '2024-02-23', 'di Kembalikan'),
(2, 'Risma', '12 rpl 2', '0003', 'pelajaran', 'INDONESIA', '2024-02-09', '2024-02-10', 'di Kembalikan'),
(3, 'Risma', '12 rpl 2', 'BK1', 'pelajaran', 'io9pl', '2024-03-20', '2024-03-27', 'di Kembalikan'),
(4, 'Risma', '12 rpl 2', 'BK2', 'pelajaran', 'rety', '2024-03-01', '2024-03-01', 'pinjam'),
(5, 'Risma', '12 rpl 2', 'BK2', 'pelajaran', 'rety', '2024-03-01', '2024-03-01', 'pinjam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list_buku`
--
ALTER TABLE `list_buku`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list_buku`
--
ALTER TABLE `list_buku`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

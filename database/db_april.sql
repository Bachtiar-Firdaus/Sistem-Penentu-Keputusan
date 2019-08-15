-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2019 pada 18.34
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_april`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_calon_siswa`
--

CREATE TABLE `tbl_calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `suku` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `pt_k1` varchar(100) NOT NULL,
  `pt_k2` varchar(100) NOT NULL,
  `pt_k3` varchar(100) NOT NULL,
  `atls` varchar(100) NOT NULL,
  `km` varchar(100) NOT NULL,
  `mn` varchar(100) NOT NULL,
  `pb` varchar(100) NOT NULL,
  `bpbd_k1` varchar(100) NOT NULL,
  `bpbd_k2` varchar(100) NOT NULL,
  `bpbd_k3` varchar(100) NOT NULL,
  `bpbd_k4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_calon_siswa`
--

INSERT INTO `tbl_calon_siswa` (`id`, `nama`, `jk`, `ttl`, `agama`, `suku`, `bahasa`, `desa`, `kecamatan`, `kabupaten`, `pt_k1`, `pt_k2`, `pt_k3`, `atls`, `km`, `mn`, `pb`, `bpbd_k1`, `bpbd_k2`, `bpbd_k3`, `bpbd_k4`) VALUES
(2, 'daus', 'laki laki', 'palas', 'islam', 'jepang', 'inggris', 'palas aji', 'amerika', 'amsterdam', 'setrata sajana 5', 'sampai kelas', '', '-', 'ya', 'ya', 'pernah', 'bgr', 'Gaji', '2 trilin', 'Perbulan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_calon_siswa`
--
ALTER TABLE `tbl_calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_calon_siswa`
--
ALTER TABLE `tbl_calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2019 pada 20.54
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dayat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL,
  `Usia_Usia_1` varchar(4) NOT NULL,
  `Tanggungan_Usia_1` varchar(4) NOT NULL,
  `Pendidikan_Usia_1` varchar(4) NOT NULL,
  `Pekerjaan_Usia_1` varchar(4) NOT NULL,
  `Penghasilan_Usia_1` varchar(4) NOT NULL,
  `Kesehatan_Usia_1` varchar(4) NOT NULL,
  `Kondisi_Usia_1` varchar(4) NOT NULL,
  `Kendaraan_Usia_1` varchar(4) NOT NULL,
  `Status_Usia_1` varchar(4) NOT NULL,
  `Rata_Usia_1` varchar(4) NOT NULL,
  `Usia_Tanggungan_2` varchar(4) NOT NULL,
  `Tanggungan_Tanggungan_2` varchar(4) NOT NULL,
  `Pendidikan_Tanggungan_2` varchar(4) NOT NULL,
  `Pekerjaan_Tanggungan_2` varchar(4) NOT NULL,
  `Penghasilan_Tanggungan_2` varchar(4) NOT NULL,
  `Kesehatan_Tanggungan_2` varchar(4) NOT NULL,
  `Kondisi_Tanggungan_2` varchar(4) NOT NULL,
  `Kendaraan_Tanggungan_2` varchar(4) NOT NULL,
  `Status_Tanggungan_2` varchar(4) NOT NULL,
  `Rata_Tanggungan_2` varchar(4) NOT NULL,
  `Usia_Pendidikan_3` varchar(4) NOT NULL,
  `Tanggungan_Pendidikan_3` varchar(4) NOT NULL,
  `Pendidikan_Pendidikan_3` varchar(4) NOT NULL,
  `Pekerjaan_Pendidikan_3` varchar(4) NOT NULL,
  `Penghasilan_Pendidikan_3` varchar(4) NOT NULL,
  `Kesehatan_Pendidikan_3` varchar(4) NOT NULL,
  `Kondisi_Pendidikan_3` varchar(4) NOT NULL,
  `Kendaraan_Pendidikan_3` varchar(4) NOT NULL,
  `Status_Pendidikan_3` varchar(4) NOT NULL,
  `Rata_Pendidikan_3` varchar(4) NOT NULL,
  `Usia_Pekerjaan_4` varchar(4) NOT NULL,
  `Tanggungan_Pekerjaan_4` varchar(4) NOT NULL,
  `Pendidikan_Pekerjaan_4` varchar(4) NOT NULL,
  `Pekerjaan_Pekerjaan_4` varchar(4) NOT NULL,
  `Penghasilan_Pekerjaan_4` varchar(4) NOT NULL,
  `Kesehatan_Pekerjaan_4` varchar(4) NOT NULL,
  `Kondisi_Pekerjaan_4` varchar(4) NOT NULL,
  `Kendaraan_Pekerjaan_4` varchar(4) NOT NULL,
  `Status_Pekerjaan_4` varchar(4) NOT NULL,
  `Rata_Pekerjaan_4` varchar(4) NOT NULL,
  `Usia_Penghasilan_5` varchar(4) NOT NULL,
  `Tanggungan_Penghasilan_5` varchar(4) NOT NULL,
  `Pendidikan_Penghasilan_5` varchar(4) NOT NULL,
  `Pekerjaan_Penghasilan_5` varchar(4) NOT NULL,
  `Penghasilan_Penghasilan_5` varchar(4) NOT NULL,
  `Kesehatan_Penghasilan_5` varchar(4) NOT NULL,
  `Kondisi_Penghasilan_5` varchar(4) NOT NULL,
  `Kendaraan_Penghasilan_5` varchar(4) NOT NULL,
  `Status_Penghasilan_5` varchar(4) NOT NULL,
  `Rata_Penghasilan_5` varchar(4) NOT NULL,
  `Usia_Kesehatan_6` varchar(4) NOT NULL,
  `Tanggungan_Kesehatan_6` varchar(4) NOT NULL,
  `Pendidikan_Kesehatan_6` varchar(4) NOT NULL,
  `Pekerjaan_Kesehatan_6` varchar(4) NOT NULL,
  `Penghasilan_Kesehatan_6` varchar(4) NOT NULL,
  `Kesehatan_Kesehatan_6` varchar(4) NOT NULL,
  `Kondisi_Kesehatan_6` varchar(4) NOT NULL,
  `Kendaraan_Kesehatan_6` varchar(4) NOT NULL,
  `Status_Kesehatan_6` varchar(4) NOT NULL,
  `Rata_Kesehatan_6` varchar(4) NOT NULL,
  `Usia_Kondisi_7` varchar(4) NOT NULL,
  `Tanggungan_Kondisi_7` varchar(4) NOT NULL,
  `Pendidikan_Kondisi_7` varchar(4) NOT NULL,
  `Pekerjaan_Kondisi_7` varchar(4) NOT NULL,
  `Penghasilan_Kondisi_7` varchar(4) NOT NULL,
  `Kesehatan_Kondisi_7` varchar(4) NOT NULL,
  `Kondisi_Kondisi_7` varchar(4) NOT NULL,
  `Kendaraan_Kondisi_7` varchar(4) NOT NULL,
  `Status_Kondisi_7` varchar(4) NOT NULL,
  `Rata_Kondisi_7` varchar(4) NOT NULL,
  `Usia_Kendaraan_8` varchar(4) NOT NULL,
  `Tanggungan_Kendaraan_8` varchar(4) NOT NULL,
  `Pendidikan_Kendaraan_8` varchar(4) NOT NULL,
  `Pekerjaan_Kendaraan_8` varchar(4) NOT NULL,
  `Penghasilan_Kendaraan_8` varchar(4) NOT NULL,
  `Kesehatan_Kendaraan_8` varchar(4) NOT NULL,
  `Kondisi_Kendaraan_8` varchar(4) NOT NULL,
  `Kendaraan_Kendaraan_8` varchar(4) NOT NULL,
  `Status_Kendaraan_8` varchar(4) NOT NULL,
  `Rata_Kendaraan_8` varchar(4) NOT NULL,
  `Usia_Status_9` varchar(4) NOT NULL,
  `Tanggungan_Status_9` varchar(4) NOT NULL,
  `Pendidikan_Status_9` varchar(4) NOT NULL,
  `Pekerjaan_Status_9` varchar(4) NOT NULL,
  `Penghasilan_Status_9` varchar(4) NOT NULL,
  `Kesehatan_Status_9` varchar(4) NOT NULL,
  `Kondisi_Status_9` varchar(4) NOT NULL,
  `Kendaraan_Status_9` varchar(4) NOT NULL,
  `Status_Status_9` varchar(4) NOT NULL,
  `Rata_Status_9` varchar(4) NOT NULL,
  `Usia_Rata_10` varchar(4) NOT NULL,
  `Tanggungan_Rata_10` varchar(4) NOT NULL,
  `Pendidikan_Rata_10` varchar(4) NOT NULL,
  `Pekerjaan_Rata_10` varchar(4) NOT NULL,
  `Penghasilan_Rata_10` varchar(4) NOT NULL,
  `Kesehatan_Rata_10` varchar(4) NOT NULL,
  `Kondisi_Rata_10` varchar(4) NOT NULL,
  `Kendaraan_Rata_10` varchar(4) NOT NULL,
  `Status_Rata_10` varchar(4) NOT NULL,
  `Rata_Rata_10` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

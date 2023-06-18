-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 10.20
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
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nama` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tgl_lahir_ibu` varchar(10) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `no_telepon_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` varchar(10) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `no_telepon_ayah` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `nisn`, `jenis_kelamin`, `agama`, `sekolah`, `no_telepon`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `no_telepon_ibu`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `no_telepon_ayah`, `alamat`) VALUES
('Muhammad Diska Puja Utomo', '3172052512970002', 'Subang', '1997-12-25', '0001687234', 'laki-laki', 'Islam', 'SMPN 2 Compreng', '082299437446', 'Puji Lestari', 'Jakarta', '1979-04-27', 'SD/Sederajat', 'Ibu Rumah Tangga', '08229917243', 'Subang', '1976-08-14', 'SD/Sederaj', 'Karman Bin Darji', 'Wiraswasta', '08139036774', 'jl. budimulia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD UNIQUE KEY `nama` (`nama`,`nik`,`tempat_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`no_telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tgl_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`no_telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`no_telepon_ayah`,`alamat`) USING HASH,
  ADD UNIQUE KEY `nama_2` (`nama`,`nik`,`tempat_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`no_telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tgl_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`no_telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`no_telepon_ayah`,`alamat`) USING HASH,
  ADD UNIQUE KEY `nama_3` (`nama`,`nik`,`tempat_lahir`,`tgl_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`no_telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tgl_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`no_telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`no_telepon_ayah`,`alamat`) USING HASH,
  ADD UNIQUE KEY `nama_4` (`nama`,`nik`,`tempat_lahir`,`tgl_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`no_telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tgl_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`no_telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`no_telepon_ayah`,`alamat`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

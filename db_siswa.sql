-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2023 at 05:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tanggal_lahir_ibu` varchar(10) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `telepon_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tanggal_lahir_ayah` varchar(10) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `telepon_ayah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `nisn`, `jenis_kelamin`, `agama`, `sekolah`, `telepon`, `alamat`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `telepon_ibu`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `telepon_ayah`) VALUES
(1, 'Muhammad Diska Puja Utomo', 'Subang', '1997-12-25', '0001687234', 'laki-laki', 'Islam', 'SMPN 2 Compreng', '082299437446', 'jl. budimulia', 'Puji Lestari', 'Jakarta', '1979-04-27', 'SD/Sederajat', 'Ibu Rumah Tangga', '08229917243', 'Karman Bin Darji', 'Subang', '1976-08-14', 'SD/Sederajat', 'Wiraswasta', '08139036774'),
(2, 'Rifky Galuh Yuliawan', 'Ponorogo', '2002-07-30', '1003812379', 'laki-laki', 'Islam', 'SMPN 4 Kepanjen', '6288220215021', 'Jl. Rahmat, Sukoraharjo', 'Sri Wahyuni', 'Ponorogo', '1979-08-21', 'SMA/Sederajat', 'Ibu Rumah Tangga', '6282233601282', 'Achmad Arif Jamhari', 'Malang', '1976-03-26', 'SMA/Sederajat', 'Swasta', '6285859960233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`,`tempat_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tanggal_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`telepon_ayah`,`alamat`) USING HASH,
  ADD UNIQUE KEY `nama_2` (`nama`,`tempat_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tanggal_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`telepon_ayah`,`alamat`) USING HASH,
  ADD UNIQUE KEY `nama_3` (`nama`,`tempat_lahir`,`tanggal_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tanggal_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`telepon_ayah`,`alamat`) USING HASH,
  ADD UNIQUE KEY `nama_4` (`nama`,`tempat_lahir`,`tanggal_lahir`,`nisn`,`jenis_kelamin`,`agama`,`sekolah`,`telepon`,`nama_ibu`,`tempat_lahir_ibu`,`tanggal_lahir_ibu`,`pendidikan_terakhir_ibu`,`pekerjaan_ibu`,`telepon_ibu`,`nama_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_terakhir_ayah`,`pekerjaan_ayah`,`telepon_ayah`,`alamat`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 02:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profil`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(15) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, 'me.jpg', 'ALIF PUTRA DAFIANTO', 'Saya Alif Putra Dafianto Asal Sekolah Smk Prima Unggul Tangerang Jurusan Teknik Komputer Jaringan Tahun 2017, Sekarang Saya berkuliah disalah satu Kampus Daerah Tangerang Selatan Yaitu Universitas Pembangunan Jaya prodi Teknik Informatika, Saya Suka Informatika Terutama dibidang Jaringan.\r\n\r\n\r\nMelihat ke atas sebagai motivasi bukan untuk jadi rendah diri, melihat ke bawah agar lebih bersyukur bukan agar jadi sombong.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `isi`) VALUES
(8, 'Alif Putra Dafianto', 'alifxtkj1@gmail.com', 'TEs'),
(9, 'Alif PD', 'alifxtkj1@gmail.com', 'TSSSS'),
(10, 'Akbar Murdani', 'Akbarm@gmail.com', 'Susah gan');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(15) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `keahlian` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `nama`, `keahlian`) VALUES
(1, 'Cyber Security', 'Cybersecurity adalah teknologi, proses dan praktik yang dirancang untuk melindungi jaringan, komputer, program dan data dari serangan, kerusakan atau akses yang tidak sah. Cyber security juga disebut sebagai upaya untuk melindungi informasi dari adanya cy'),
(2, 'Network Essentials', 'Networking Essentials adalah dua atau lebih komputer yang terhubung satu sama lain dan digunakan untuk berbagi data. Jaringan komputer dibangun dengan kombinasi hardware dan software. Untuk membuat jaringan komputer, switch dan router menggunakan berbagai'),
(3, 'Linux Programming', 'Membuat Database dan Server Pakai Linux');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

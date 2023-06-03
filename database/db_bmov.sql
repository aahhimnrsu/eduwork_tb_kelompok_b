-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 07:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bmov`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artis`
--

CREATE TABLE `tb_artis` (
  `id` int(11) NOT NULL,
  `nama_artis` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_kota` varchar(40) NOT NULL,
  `biografi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artis`
--

INSERT INTO `tb_artis` (`id`, `nama_artis`, `tanggal_lahir`, `asal_kota`, `biografi`, `foto`) VALUES
(1, 'Daniel Radcliff', '1989-07-23', 'London', 'Daniel Jacob Radcliffe is an English actor. He rose to fame at age twelve, when he began portraying Harry Potter in the film series of the same name. Over his career, Radcliffe has received various awards and nominations.', 'Daniel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_film`
--

CREATE TABLE `tb_film` (
  `id` int(11) NOT NULL,
  `poster` text NOT NULL,
  `judul` text NOT NULL,
  `jenis` enum('Movie','Series') NOT NULL,
  `genre` text NOT NULL,
  `artis` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `link_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_film`
--

INSERT INTO `tb_film` (`id`, `poster`, `judul`, `jenis`, `genre`, `artis`, `deskripsi`, `tahun`, `negara`, `link_video`) VALUES
(33, 'Daniel.jpg', 'Harry Potter and The Half Blood Prince', 'Movie', 'Comedy', 'Daniel Radcliffe', '13123', 2005, 'USA', 'https://www.youtube.com/embed/y6ZW7KXaXYk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_genre`
--

CREATE TABLE `tb_genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `terakhir_diubah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_genre`
--

INSERT INTO `tb_genre` (`id`, `genre`, `terakhir_diubah`) VALUES
(2, 'Comedy', '2023-06-03'),
(3, 'Fantasy', '2023-06-03'),
(4, 'Horror', '2023-06-03'),
(5, 'Sci-fi', '2023-06-03'),
(6, 'Drama', '2023-06-03'),
(7, 'Romance', '2023-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `review` text NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Rei', 'admin', '123', 'admin'),
(2, 'Dicky', 'dicky', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artis`
--
ALTER TABLE `tb_artis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_film`
--
ALTER TABLE `tb_film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artis`
--
ALTER TABLE `tb_artis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_film`
--
ALTER TABLE `tb_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

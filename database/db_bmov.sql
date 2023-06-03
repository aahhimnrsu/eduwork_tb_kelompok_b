-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 07:35 PM
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
(33, 'harry5.jpg', 'Harry Potter and Order of Phoenix', 'Movie', 'Fantasy', 'Daniel Radcliffe', 'Now in his fifth year at Hogwarts, Harry (Daniel Radcliffe) learns that many in the wizarding community do not know the truth of his encounter with Lord Voldemort. Cornelius Fudge, minister of Magic, appoints his toady, Dolores Umbridge, as Defense Against the Dark Arts teacher, for he fears that professor Dumbledore will take his job. But her teaching is deficient and her methods, cruel, so Harry prepares a group of students to defend the school against a rising tide of evil.', 2007, 'USA', 'https://www.youtube.com/embed/y6ZW7KXaXYk'),
(34, 'dokter cha.jpg', 'Dr. Cha', 'Series', 'Drama', 'Daniel Radcliff', '', 2023, 'Korea Selatan', 'https://www.youtube.com/embed/PxnupLto-Ww'),
(35, 'My Sassy Girl.jpg', 'My Sassy Girl', 'Movie', 'Drama', 'Jefri Nichol', 'My Sassy Girl Indonesia is a romantic comedy film that tells the story of an ordinary Indonesian man who unexpectedly falls in love with a girl who is full of arrogance and recklessness. They both find themselves involved in a series of hilarious and unpredictable situations that test the mans resilience and patience. However, as time goes by, they start to get to know each other and experience a deep connection, creating funny, romantic, and emotionally charged moments that teach them about true love and overcoming their differences to build a strong relationship.', 2022, 'Indonesia', 'https://www.youtube.com/embed/IEm0t4YW0Xw'),
(36, 'harry1.jpeg', 'Harry Potter and The Philosopers Stone', 'Movie', 'Fantasy', 'Daniel Radcliffe', 'Adaptation of the first of J.K. Rowling popular children novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents mysterious deaths.', 2001, 'USA', 'https://www.youtube.com/embed/nzNvymsSHxM');

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
  `subject` text NOT NULL,
  `review` text NOT NULL,
  `rating` float NOT NULL,
  `terakhir_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id`, `id_film`, `id_user`, `subject`, `review`, `rating`, `terakhir_diubah`) VALUES
(1, 33, 3, 'BEST HARRY POTTER MOVIES', 'VERY GOOD', 9.1, '2023-06-03 16:59:25'),
(4, 33, 3, 'NICE', 'GOOD', 10, '2023-06-03 17:34:20'),
(5, 33, 2, 'good', 'good', 4, '2023-06-03 18:01:41'),
(6, 34, 3, 'COOL', 'Best Drama i have ever seen <3', 9.4, '2023-06-03 18:13:03'),
(7, 35, 3, 'Funny', 'So Funny haha', 8.3, '2023-06-03 19:29:07'),
(8, 36, 3, 'Classic', 'mwh', 4.9, '2023-06-03 19:29:27');

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
(2, 'Dicky', 'dicky', '123', 'admin'),
(3, 'Raihan', 'muhraihans', '123', 'user');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tb_film`
--
ALTER TABLE `tb_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 02:33 PM
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
  `link_video` text NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `wholikes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_film`
--

INSERT INTO `tb_film` (`id`, `poster`, `judul`, `jenis`, `genre`, `artis`, `deskripsi`, `tahun`, `negara`, `link_video`, `likes`, `wholikes`) VALUES
(33, 'harry5.jpg', 'Harry Potter and Order of Phoenix', 'Movie', 'Fantasy', 'Daniel Radcliffe', 'Now in his fifth year at Hogwarts, Harry (Daniel Radcliffe) learns that many in the wizarding community do not know the truth of his encounter with Lord Voldemort. Cornelius Fudge, minister of Magic, appoints his toady, Dolores Umbridge, as Defense Against the Dark Arts teacher, for he fears that professor Dumbledore will take his job. But her teaching is deficient and her methods, cruel, so Harry prepares a group of students to defend the school against a rising tide of evil.', 2007, 'USA', 'https://www.youtube.com/embed/y6ZW7KXaXYk', 0, ''),
(34, 'dokter cha.jpg', 'Dr. Cha', 'Series', 'Drama', 'Daniel Radcliff', '', 2023, 'Korea Selatan', 'https://www.youtube.com/embed/PxnupLto-Ww', 0, ''),
(35, 'My Sassy Girl.jpg', 'My Sassy', 'Movie', 'Comedy', 'Jefri Nichol', 'My Sassy Girl Indonesia is a romantic comedy film that tells the story of an ordinary Indonesian man who unexpectedly falls in love with a girl who is full of arrogance and recklessness. They both find themselves involved in a series of hilarious and unpredictable situations that test the mans resilience and patience. However, as time goes by, they start to get to know each other and experience a deep connection, creating funny, romantic, and emotionally charged moments that teach them about true love and overcoming their differences to build a strong relationship.', 2022, 'Indonesia', 'https://www.youtube.com/embed/IEm0t4YW0Xw', 0, ''),
(36, 'harry1.jpeg', 'Harry Potter and The Philosopers Stone', 'Movie', 'Fantasy', 'Daniel Radcliffe', 'Adaptation of the first of J.K. Rowling popular children novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents mysterious deaths.', 2001, 'USA', 'https://www.youtube.com/embed/nzNvymsSHxM', 0, ''),
(37, 'mario bros.jpg', 'The Super Mario Bros', 'Series', 'Comedy', 'Anya Taylor-Joy, Charlie Day, Chris Pratt, Fred Armisen, Jack Black, Keegan-Michael Key, Kevin Michael Richardson, Khary Payton, Sebastian Maniscalco, Seth Rogen', '', 2023, 'America', 'https://www.youtube.com/embed/TnGl01FkMMo', 1, '/3/'),
(38, 'Revenge of Others.jpg', 'Revenge of Others', 'Series', 'Drama', 'Chae Sang-woo, Chung Su-bin, Jin Ho Eun, Kim Joo-ryoung, Lee Soo-Min, Lomon, Seo Ji-hoon, Shin Ye Eun, Woo Yeon, Yeon Oh', '', 2022, 'Korea Selatan', 'https://www.youtube.com/embed/GJtu6iUA8tQ', 0, ''),
(39, 'teluh darah.jpg', 'Teluh Darah', 'Series', 'Horror', 'Dayu Wijanto, Deva Mahenra, Imelda Therinne, Justin Adiwinata, Kiki Narendra, Lukman Sardi, Mike Lucock, Mikha Tambayong, Shenina Cinnamon, Willem Bevers', '', 2023, 'Indonesia', 'https://www.youtube.com/embed/9L6iVfMxTyQ', 0, ''),
(40, 'Pokémon.jpg', 'Pokemon ', 'Series', 'Fantasy', 'Ayane Sakura, Daiki Yamashita, Ikkyu Juku, Ikue Otani, Kei Shindo, Kenta Miyake, Megumi Hayashibara, Minori Suzuki, Taku Yashiro, Yuka Terasaki', '', 2023, 'Jepang', 'https://www.youtube.com/embed/oWh72apu_3Q', 0, ''),
(41, 'Our Sister’s Soulmate.jpg', 'Our Sister’s Soulmate', 'Series', 'Drama', 'Kaito Takahashi, Kasumi Arimura, Kento Hayashi, Naohito Fujiki, Ryoka Minamide, Wataru Hyuga', '', 2020, 'Jepang', 'https://www.youtube.com/embed/K8K_njXmgD0', 0, ''),
(42, 'kkn.jpg', 'KKN Di Desa Penari', 'Movie', 'Horror', 'Achmad Megantara, Adinda Thomas, Aghniny Haque, Aty Cancer, Aulia Sarah, Calvin Jeremy, Diding Zet A, Fajar Nugra, Kiki Narendra, Tissa Biani Azzahra', 'Nur, Widya, Ayu, Bima, Anton, and Wahyu are 6 students who carry out real work lectures (KKN) in a remote village. However, they had absolutely no idea that the village they had chosen was no ordinary village. Pak Prabu, the village head, had warned them not to cross the forbidden gate. A few days in the village, they began to feel strange. Bima experienced a change in attitude and their KKN program eventually fell apart.\r\nThey also get the terror of a mysterious, scary dancer. They asked for help from Mbah Buyut, a local shaman. Unfortunately, they are in danger of not being able to return home safely from the village known as the dancing village.', 2022, 'Indonesia', 'https://www.youtube.com/embed/PAMx9m4Z2V4', 0, ''),
(43, 'lara ati.jpg', 'Lara Ati', 'Movie', 'Comedy', 'Bayu Skak, Benidictus Siregar, Cak Kartolo, Ciccio Manassero, Dono Pradana, Indra Pramujito, Keisya Levronka, Ning Tini, Sahila Hisyam, Tatjana Saphira', 'It tells the story of two friends named Joko (Bayu Chess) and Ayu (Tatjana Saphira). Joko and Ayu experience heartache because of love problems. Joko was abandoned by his girlfriend, while Ayu was ignored by her lover because she moved to Surabaya. Joko and Ayu also work together to be able to return to the hearts of their respective lovers.\r\nApart from love problems, Joko has an anxiety within himself, namely always listening to other people but forgetting his own conscience and desires. Joko really wants to get out of the pressures of his youth (quarter life crisis).', 2022, 'Indonesia', 'https://www.youtube.com/embed/ECvEx437cNw', 11, '/4//3/'),
(44, 'train.jpg', 'Train to Busan', 'Movie', 'Drama', 'Ahn So-hee, Choi Gwi-hwa, Choi Woo-shik, Gong Yoo, Jeong Seok-yong, Jung Yu-mi, Kim Chang-hwan, Kim Eui-sung, Kim Soo-an, Ma Dong-seok', 'The beginning of the story of Train to Busan is when a truck carrying goods is allowed to pass through an area that has a leak. At that time, the truck driver did not see a deer crossing the middle of the road so the dead deer turned into a zombie deer.\r\nSeok-Woo, a financial manager for a company, leaves for Busan with his son, Su-an, to meet his mother as a birthday present for his daughter. Seok-Woo, newly divorced from his wife, departs by KTX (Korean high-speed rail) from Seoul with other passengers. When the train was about to leave, a woman with a wound on her leg got into the train. The woman tried to attack the train stewardess who wanted to try to help her. Since then, the zombie woman has infected a large number of train passengers.', 2016, 'Korea', '', 1, '/3/');

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
(8, 36, 3, 'Classic', 'mwh', 4.9, '2023-06-03 19:29:27'),
(9, 42, 4, 'so scary...', 'goods', 7, '2023-06-04 13:47:34'),
(10, 43, 4, 'aaa this film is funny and so sad', 'the film is not boring', 9, '2023-06-04 13:49:17'),
(11, 44, 4, 'soooo good ', 'niceee', 8.7, '2023-06-04 13:51:24'),
(12, 37, 4, 'this animasi film is good ', 'so funny', 8.5, '2023-06-04 13:52:19'),
(13, 39, 4, 'good and nice', 'scary because the movie feels real', 8.2, '2023-06-04 13:53:57'),
(14, 38, 4, 'very good', 'highly anticipated series', 9.1, '2023-06-04 13:56:42'),
(15, 40, 4, 'animasi', 'this pokemon is cute and looks real, but a bit boring', 7.9, '2023-06-04 13:59:35'),
(16, 41, 4, 'drama ', 'a sad drama so that those who watch it feel like it', 8, '2023-06-04 14:01:22'),
(17, 43, 5, 'kerennn', 'aku suka banget sama film ini', 9.5, '2023-06-05 14:50:33'),
(18, 43, 3, 'Borrrrinngggg!!!', 'i think this movie is so boring', 5, '2023-06-05 15:04:38'),
(19, 43, 6, 'nice', '213', 1.4, '2023-06-05 15:34:00');

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
(1, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'Diki', 'dicky', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'Raihan', 'muhraihans', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'Yuliana', 'yuli', '202cb962ac59075b964b07152d234b70', 'user'),
(5, 'Prilan', 'prilan', '202cb962ac59075b964b07152d234b70', 'user'),
(7, 'eduwork', 'eduwork', '202cb962ac59075b964b07152d234b70', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

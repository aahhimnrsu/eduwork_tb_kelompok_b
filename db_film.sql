-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 15.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `poster` text DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `jenis` enum('Movies','Series') NOT NULL,
  `genre` text DEFAULT NULL,
  `artis` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `link_video` text NOT NULL,
  `terakhir_diubah` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `poster`, `judul`, `jenis`, `genre`, `artis`, `deskripsi`, `tahun`, `negara`, `link_video`, `terakhir_diubah`) VALUES
(1, 'kkn.jpg', 'KKN Di Desa Penari', 'Movies', 'Horror', 'Tissa Biani sebagai Nur, Adinda Thomas sebagai Widya, Achmad Megantara sebagai Bima, Aghniny Haque sebagai Ayu, Calvin Jeremy sebagai Anton, M Fajar Nugraha sebagai Wahyu, Kiki Narendra sebagai Prabu, Aulia Sarah sebagai Badarawuhi, Aty Cancer sebagai Sundari, Diding Boneng Zeta sebagai Mbah Buyut, Dewi Sri sebagai Mbah Dok, dan Andri Mashadi sebagai Ilham', 'Nur, Widya, Ayu, Bima, Anton, dan Wahyu adalah 6 orang mahasiswa yang melaksanakan kuliah kerja nyata (KKN) di sebuah desa terpencil. Namun, mereka sama sekali tidak menyangka bahwa desa yang mereka pilih bukanlah desa biasa. Pak Prabu, sang kepala desa telah memperingatkan mereka untuk tidak melewati batas gapura terlarang. Beberapa hari di desa tersebut, mereka mulai merasakan keanehan. Bima mengalami perubahan sikap dan program KKN mereka akhirnya berantakan.\r\nMereka pun mendapatkan teror sosok penari misterius menyeramkan. Mereka meminta bantuan Mbah Buyut, dukun setempat. Sayangnya, mereka terancam tidak bisa pulang dengan selamat dari desa yang dikenal dengan sebutan desa penari tersebut.', 2022, 'Indonesia', 'https://youtu.be/PAMx9m4Z2V4', '2023-05-31'),
(2, 'makmum.jpg', 'MAKMUM', 'Movies', 'Horror', 'Titi Kamal sebagai Rini, Ali Syakieb sebagai Pak Ustadz Ganda, Tissa Biani sebagai Nurul, Adila Fitri sebagai Putri, Bianca Hello sebagai Nisa, Jajang C. Noer sebagai Bu Kinanti, Reny Yuliana sebagai Rosa, Arief Didu sebagai Slamet, dan Misha Jetar sebagai Ningsih.', 'Sosok gaib yang disebut Makmum oleh para penghuni asrama semakin sering mengganggu, sejak Rini (Titi Kamal) menetap kembali di asrama untuk memenuhi permintaan Bu Kinanti (Jajang C. Noer) yang kesehatannya terus menurun. Rosa (Reny Yuliana), pemimpin asrama baru, tidak menanggapi ketakutan tiga siswi: Nurul (Tissa Biani), Nisa (Bianca Hello), Putri (Adila Fitri) yang dilarang keluar asrama selama masa liburan, karena nilai mereka yang jelek. Intensitas kesurupan Putri yang terus meningkat, membuat suasana semakin tidak kondusif. Rini menyadari ada sesuatu yang tidak beres di dalam asrama ini. Ia mencoba membantu para siswi dan berusaha menguak misteri tersebut. Ia tidak sadar bahwa nyawanya terancam.', 2019, 'Indonesia', 'https://youtu.be/lIYmtcaV4iM', '2023-05-31'),
(3, 'miracle.jpg', 'Miracle in Cell No. 7', 'Movies', 'Comedy, Drama, Family, Populer', 'Bryan Domani, Denny Sumargo, Graciella Abigail, Indra Jegel, Indro, Mawar Eva De Jongh, Rigen Rakelna, Teuku Rifnu Wikana, Tora Sudiro, Vino G. Bastian', ' Tidak hanya memenuhi kebutuhan Kartika, Dodo juga selalu berupaya menghibur anaknya dengan menunjukkan tingkah dan perilaku seperti anak kecil. Pada kenyataannya, justru Kartika yang lebih sering menjaga dan merawat ayahnya.\r\n\r\nWalaupun hanya hidup berdua, tapi keduanya hidup bahagia. Kartika bangga pada ayahnya yang yang penjual balon.\r\n\r\nTapi kebahagiaan mereka tidak berlangsung lama ketika keduanya harus dipisahkan. Dodo ditangkap atas tuduhan memperkosa dan membunuh gadis kecil bernama Melati (Makayla Rose Hilli).', 2022, 'Indonesia', 'https://youtu.be/cNxkfrFzqmM', '2023-05-31'),
(4, 'lara ati.jpg', 'Lara Ati', 'Movies', 'Comedy, Drama', 'Bayu Skak, Benidictus Siregar, Cak Kartolo, Ciccio Manassero, Dono Pradana, Indra Pramujito, Keisya Levronka, Ning Tini, Sahila Hisyam, Tatjana Saphira', 'Berkisah tentang dua orang sahabat yang bernama Joko (Bayu Skak) dan Ayu (Tatjana Saphira). Joko dan Ayu mengalami sakit hati lantaran masalah asmara. Joko ditinggalkan oleh kekasihnya, sementara Ayu diacuhkan oleh sang kekasih lantaran ia pindah ke Surabaya. Joko dan Ayu pun bekerja sama untuk bisa kembali mendapatkan hati kekasih masing-masing.\r\n\r\nSelain masalah asmara, Joko mempunyai kegundahan dalam dirinya yaitu selalu mendengarkan orang lain tetapi melupakan kata hati dan keinginan sendiri. Joko ingin sekali keluar dari tekanan masa mudanya (quarter life crisis).', 2022, 'Indonesia', 'https://youtu.be/djLAuPxkaQI', '2023-05-31'),
(5, 'black panther.jpg', 'Black Panther: Wakanda Forever', 'Movies', 'Action, Adventure, Populer, Science Fiction', 'Angela Bassett, Danai Gurira, Dominique Thorne, Florence Kasumba, Letitia Wright, Lupita Nyong\'o, Martin Freeman, Michaela Coel, Tenoch Huerta, Winston Duke', 'Kehidupan di Wakanda setelah ditinggalkan oleh Raja T’Challa. Di tengah suasana kesedihan yang melanda, negeri Wakanda kemudian diserang musuh. Ratu Ramonda, Shuri, M’Baku, Okoye dan Dora Milaje harus berjuang untuk melindungi negeri mereka dari campur tangan kekuatan dunia dan musuh lainnya yang berusaha ingin menguasai Wakanda.\r\n\r\nMereka harus melawan pasukan Raja Namor dari bangsa Talokan yang tiba-tiba datang menyerang. Raja Namor merupakan penguasa kerajaan laut atau bangsa Atlantis yang biasa disebut Kukulkhan. Sehingga para pahlawan harus bersatu dengan bantuan War Dog Nakia dan Everett Ross agar dapat bertahan hidup di tengah peperangan.', 2022, 'Amerika Serikat', 'https://youtu.be/_Z3QKkl1WyM', '2023-05-31'),
(6, 'spiderman.jpg', 'Spider-Man: No Way Home ', 'Movies', 'Action, Adventure, Fantasy, Populer, Science Fiction', 'Alfred Molina, Benedict Cumberbatch, Jacob Batalon, Jamie Foxx, Jon Favreau, Marisa Tomei, Tom Holland, Tony Revolori, Willem Dafoe, Zendaya', 'Spiderman No Way Home menceritakan kembali seorang Peter Parker. Saat itu ia di fitnah oleh Mysterio musuh spiderman di film sebelumnya yaitu Spider-Man Far From Home. Mysterio mengungkap idientitas di balik kostum Spiderman dan memfitnahnya bahwa Peter adalah pembunuh dan Villain.', 2021, 'Amerika Serikat', 'https://youtu.be/JfVOs4VSpmA', '2023-05-31'),
(7, 'train.jpg', 'Train to Busan', 'Movies', 'Action, Horror, Thriller', 'Ahn So-hee, Choi Gwi-hwa, Choi Woo-shik, Gong Yoo, Jeong Seok-yong, Jung Yu-mi, Kim Chang-hwan, Kim Eui-sung, Kim Soo-an, Ma Dong-seok', 'Awal cerita Train to Busan adalah ketika sebuah truk pembawa barang diizinkan melewati sebuah daerah yang mengalami kebocoran. Ketika itu, pengendara truk tidak melihat seekor rusa melintas di tengah jalan sehingga rusa yang mati itu berubah menjadi rusa zombie.\r\n\r\nSeok-Woo, seorang manajer keuangan sebuah perusahaan, berangkat ke Busan bersama anaknya, Su-an, untuk bertemu dengan ibunya sebagai hadiah ulang tahun anak perempuannya. Seok-Woo, yang baru bercerai dengan istrinya, berangkat dengan KTX (kereta api cepat Korea) dari Seoul bersama para penumpang lain. Ketika kereta akan berangkat, seorang wanita dengan luka di kakinya masuk ke dalam kereta tersebut. Wanita tersebut mencoba menyerang pramugari kereta yang ingin mencoba menolongnya. Sejak itu, wanita zombie itu telah menginfeksi sejumlah besar penumpang kereta.', 2016, 'Korea', 'https://youtu.be/lsByZLBg5HE', '2023-05-31'),
(8, 'insidious the last key.jpg', 'Insidious: The Last Key', 'Movies', 'Horror, Mystery, Thriller', 'Angus Sampson, Bruce Davison, Caitlin Gerard, Hana Hayes, Josh Stewart, Kirk Acevedo, Leigh Whannell, Lin Shaye, Spencer Locke, Tessa Ferrer', 'Berdiri di tengah waralaba ini adalah Elise, seorang parapsikologis, yang membantu orang-orang yang menempati rumah dihuni oleh roh jahat. Insidious: The Last Key sebenarnya adalah prekuel dari film yang pertama, (dua episode ini nyaris berjalan beruntun) karena input kita tahu Elise sendiri sudah jadi hantu di film yang kedua. Jadi, di film ini kita akan melihat kisah asal dari tokoh Elise. Kita akan melihat ia di masa kecilnya. Rumah Elise dulu di dalam kompleks penitentiary di New Mexico.\r\n\r\nGimana kemampuannya melihat hal-hal goib menjadi penyebab utama Elise kecil dipukuli oleh bokapnya yang mendapat nafkah dari menghukum kriminal-kriminal. Masa kecil yang enggak bahagia, fisiknya menderita, mental haluspun ikut didera oleh banyaknya makhluk yang lihat ia. Salah satunya terbebas dari pintu yang dibuka Elise, melepas teror yang berujung kepada Elise remaja kabur dari rumah. Masa lalu mencerminkan hidupmu yang sekarang, tahun 2010 Elise mendapat telepon dari seorang klien. “Alamat Anda di mana?” dan DEG! Permintaan mengusir hantu itu ternyata datang dari rumah masa kanak-kanaknya yang penuh dengan hantu-hantu masa lalu !!', 2018, 'Amerika Serikat', 'https://youtu.be/acQyrwQyCOk', '2023-05-31'),
(9, 'teluh darah.jpg', 'Teluh Darah', 'Series', 'Horror, Series Indonesia', 'Dayu Wijanto, Deva Mahenra, Imelda Therinne, Justin Adiwinata, Kiki Narendra, Lukman Sardi, Mike Lucock, Mikha Tambayong, Shenina Cinnamon, Willem Bevers', 'Teluh Darah berkisah tentang perempuan cerdas yang bekerja di perusahaan investasi, Wulan. Kehidupan Wulan yang tak percaya klenik mendadak berubah drastis saat keluarganya mendapat teror aneh. Awalnya seekor musang mati tergeletak di depan rumah Wulan.', 2023, 'Indonesia', 'https://youtu.be/WTUg_yE0Dwc', '2023-05-31'),
(10, 'dokter cha.jpg', 'Doctor Cha', 'Series', 'Drama, Drama Korea', 'Kim Byung-chul, Kim Ye-eun, Min Woo-hyuk, Myung Se-bin, Uhm Jung-hwa', 'Doctor Cha mengangkat cerita mengenai Cha Jeong Suk yang menikah selama 20 tahun dengan Seo In Ho. Selama 20 tahun, ia menjalani kehidupan sebagai ibu rumah tangga. Suaminya adalah seorang professor dan dokter bedah syaraf di sebuah rumah sakit universitas.\r\n\r\nDemikian pula dengan anak laki-lakinya, Seo Jung Min, yang sedang menjalani magang di rumah sakit yang sama dengan ayahnya. Cha Jeong Suk pun sebenarnya memiliki latar belakang pendidikan sebagai seorang dokter.\r\n\r\nSetelah mengalami kejadian yang cukup berat dalam hidupnya, Cha Jeong Suk memutuskan untuk kembali menjalani profesinya sebagai dokter. Ia pun memutuskan untuk mengambil residensi di rumah sakit yang sama dengan suami dan anaknya.', 2023, 'Korea', 'https://youtu.be/vlS9ccfza64', '2023-05-31'),
(11, 'mario bros.jpg', 'The Super Mario Bros. Movie', 'Series', 'Adventure, Animation, Comedy, Family, Fantasy, Populer', 'Anya Taylor-Joy, Charlie Day, Chris Pratt, Fred Armisen, Jack Black, Keegan-Michael Key, Kevin Michael Richardson, Khary Payton, Sebastian Maniscalco, Seth Rogen', 'Kisah Mario (Chris Pratt) si tukang ledeng yang melakukan perjalanan heroik untuk menyelamatkan saudaranya, Luigi (Charlie Day). Di perjalanan, Mario tidak sendiri, ia dibantu oleh Putri Peach (Anya Taylor-Joy) dan prajurit kerajaan jamur.', 2023, 'Amerika Serikat, Jepang', 'https://youtu.be/TnGl01FkMMo', '2023-05-31'),
(12, 'Revenge of Others.jpg', 'Revenge of Others', 'Series', 'Drama, Drama Korea', 'Chae Sang-woo, Chung Su-bin, Jin Ho Eun, Kim Joo-ryoung, Lee Soo-Min, Lomon, Seo Ji-hoon, Shin Ye Eun, Woo Yeon, Yeon Oh', 'Tentang balas dendam yang penuh aksi, pertunjukan dimulai dengan Chanmi (Shin Ye-eun, He Is Psychometric, More Than Friends) belajar saudara kembarnya, Park Wonseok (Kang Yeol), telah meninggal dalam keadaan yang dia menolak untuk percaya. atau menerima. Dia adalah bintang dari tim menembak SMA-nya tapi Chan-mi mengubah hidupnya dan bergerak lintas negara untuk mengejar calon pembunuhnya. Di sekolah barunya, Yongtan High, dia bertemu dengan Ji Soo-heon yang saleh (bintang All of Us Are Dead, Lomon), seorang siswa yang sadar diri yang tampaknya optimis dan berkepala dingin meskipun kehidupan rumah tangganya disfungsional.', 2022, 'Korea Selatan', 'https://youtu.be/GJtu6iUA8tQ', '2023-05-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `id_user`, `id_film`, `komentar`, `rating`) VALUES
(1, 2, 1, 'Film yang ditunggu akhirnya rilis, secara keseluruhan filmnya bagus dan sesuai alur dengan yang diceritakan pada twitter. Namun, terdapat beberapa alur yang sepertinya dicut. Untuk kualitas video juga bagus, mantapp...', 6),
(2, 3, 3, 'Film Miracle in Cell No. 7 merupakan film yang diangkat dari kisah nyata disuatu negara. Film yang bagus dengan kualitas video yang mendukung.', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Muhammad Raihan', 'admin', '123', 'admin'),
(2, 'Dicky', 'dicky', '123', 'user'),
(3, 'Yuliana', 'yuli', '345', 'user'),
(4, 'Prilantania', 'prila', '765', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_film` (`id_film`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 18.14
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
(2, 'makmum.jpeg', 'MAKMUM', 'Movies', 'Horror', 'Titi Kamal sebagai Rini, Ali Syakieb sebagai Pak Ustadz Ganda, Tissa Biani sebagai Nurul, Adila Fitri sebagai Putri, Bianca Hello sebagai Nisa, Jajang C. Noer sebagai Bu Kinanti, Reny Yuliana sebagai Rosa, Arief Didu sebagai Slamet, dan Misha Jetar sebagai Ningsih.', 'Sosok gaib yang disebut Makmum oleh para penghuni asrama semakin sering mengganggu, sejak Rini (Titi Kamal) menetap kembali di asrama untuk memenuhi permintaan Bu Kinanti (Jajang C. Noer) yang kesehatannya terus menurun. Rosa (Reny Yuliana), pemimpin asrama baru, tidak menanggapi ketakutan tiga siswi: Nurul (Tissa Biani), Nisa (Bianca Hello), Putri (Adila Fitri) yang dilarang keluar asrama selama masa liburan, karena nilai mereka yang jelek. Intensitas kesurupan Putri yang terus meningkat, membuat suasana semakin tidak kondusif. Rini menyadari ada sesuatu yang tidak beres di dalam asrama ini. Ia mencoba membantu para siswi dan berusaha menguak misteri tersebut. Ia tidak sadar bahwa nyawanya terancam.', 2019, 'Indonesia', 'https://youtu.be/lIYmtcaV4iM', '2023-05-31'),
(3, 'miracle.jpg', 'Miracle in Cell No. 7', 'Movies', 'Comedy, Drama, Family, Populer', 'Bryan Domani, Denny Sumargo, Graciella Abigail, Indra Jegel, Indro, Mawar Eva De Jongh, Rigen Rakelna, Teuku Rifnu Wikana, Tora Sudiro, Vino G. Bastian', ' Tidak hanya memenuhi kebutuhan Kartika, Dodo juga selalu berupaya menghibur anaknya dengan menunjukkan tingkah dan perilaku seperti anak kecil. Pada kenyataannya, justru Kartika yang lebih sering menjaga dan merawat ayahnya.\r\n\r\nWalaupun hanya hidup berdua, tapi keduanya hidup bahagia. Kartika bangga pada ayahnya yang yang penjual balon.\r\n\r\nTapi kebahagiaan mereka tidak berlangsung lama ketika keduanya harus dipisahkan. Dodo ditangkap atas tuduhan memperkosa dan membunuh gadis kecil bernama Melati (Makayla Rose Hilli).', 2022, 'Indonesia', 'https://youtu.be/cNxkfrFzqmM', '2023-05-31'),
(4, 'lara ati.jpg', 'Lara Ati', 'Movies', 'Comedy, Drama', 'Bayu Skak, Benidictus Siregar, Cak Kartolo, Ciccio Manassero, Dono Pradana, Indra Pramujito, Keisya Levronka, Ning Tini, Sahila Hisyam, Tatjana Saphira', 'Berkisah tentang dua orang sahabat yang bernama Joko (Bayu Skak) dan Ayu (Tatjana Saphira). Joko dan Ayu mengalami sakit hati lantaran masalah asmara. Joko ditinggalkan oleh kekasihnya, sementara Ayu diacuhkan oleh sang kekasih lantaran ia pindah ke Surabaya. Joko dan Ayu pun bekerja sama untuk bisa kembali mendapatkan hati kekasih masing-masing.\r\n\r\nSelain masalah asmara, Joko mempunyai kegundahan dalam dirinya yaitu selalu mendengarkan orang lain tetapi melupakan kata hati dan keinginan sendiri. Joko ingin sekali keluar dari tekanan masa mudanya (quarter life crisis).', 2022, 'Indonesia', 'https://youtu.be/djLAuPxkaQI', '2023-05-31'),
(5, 'black panther.jpeg', 'Black Panther: Wakanda Forever', 'Movies', 'Action, Adventure, Populer, Science Fiction', 'Angela Bassett, Danai Gurira, Dominique Thorne, Florence Kasumba, Letitia Wright, Lupita Nyong\'o, Martin Freeman, Michaela Coel, Tenoch Huerta, Winston Duke', 'Kehidupan di Wakanda setelah ditinggalkan oleh Raja T’Challa. Di tengah suasana kesedihan yang melanda, negeri Wakanda kemudian diserang musuh. Ratu Ramonda, Shuri, M’Baku, Okoye dan Dora Milaje harus berjuang untuk melindungi negeri mereka dari campur tangan kekuatan dunia dan musuh lainnya yang berusaha ingin menguasai Wakanda.\r\n\r\nMereka harus melawan pasukan Raja Namor dari bangsa Talokan yang tiba-tiba datang menyerang. Raja Namor merupakan penguasa kerajaan laut atau bangsa Atlantis yang biasa disebut Kukulkhan. Sehingga para pahlawan harus bersatu dengan bantuan War Dog Nakia dan Everett Ross agar dapat bertahan hidup di tengah peperangan.', 2022, 'Amerika Serikat', 'https://youtu.be/_Z3QKkl1WyM', '2023-05-31'),
(6, 'spiderman.jpg', 'Spider-Man: No Way Home ', 'Movies', 'Action, Adventure, Fantasy, Populer, Science Fiction', 'Alfred Molina, Benedict Cumberbatch, Jacob Batalon, Jamie Foxx, Jon Favreau, Marisa Tomei, Tom Holland, Tony Revolori, Willem Dafoe, Zendaya', 'Spiderman No Way Home menceritakan kembali seorang Peter Parker. Saat itu ia di fitnah oleh Mysterio musuh spiderman di film sebelumnya yaitu Spider-Man Far From Home. Mysterio mengungkap idientitas di balik kostum Spiderman dan memfitnahnya bahwa Peter adalah pembunuh dan Villain.', 2021, 'Amerika Serikat', 'https://youtu.be/JfVOs4VSpmA', '2023-05-31'),
(7, 'train.jpg', 'Train to Busan', 'Movies', 'Action, Horror, Thriller', 'Ahn So-hee, Choi Gwi-hwa, Choi Woo-shik, Gong Yoo, Jeong Seok-yong, Jung Yu-mi, Kim Chang-hwan, Kim Eui-sung, Kim Soo-an, Ma Dong-seok', 'Awal cerita Train to Busan adalah ketika sebuah truk pembawa barang diizinkan melewati sebuah daerah yang mengalami kebocoran. Ketika itu, pengendara truk tidak melihat seekor rusa melintas di tengah jalan sehingga rusa yang mati itu berubah menjadi rusa zombie.\r\n\r\nSeok-Woo, seorang manajer keuangan sebuah perusahaan, berangkat ke Busan bersama anaknya, Su-an, untuk bertemu dengan ibunya sebagai hadiah ulang tahun anak perempuannya. Seok-Woo, yang baru bercerai dengan istrinya, berangkat dengan KTX (kereta api cepat Korea) dari Seoul bersama para penumpang lain. Ketika kereta akan berangkat, seorang wanita dengan luka di kakinya masuk ke dalam kereta tersebut. Wanita tersebut mencoba menyerang pramugari kereta yang ingin mencoba menolongnya. Sejak itu, wanita zombie itu telah menginfeksi sejumlah besar penumpang kereta.', 2016, 'Korea', 'https://youtu.be/lsByZLBg5HE', '2023-05-31'),
(8, 'insidious the last key.jpg', 'Insidious: The Last Key', 'Movies', 'Horror, Mystery, Thriller', 'Angus Sampson, Bruce Davison, Caitlin Gerard, Hana Hayes, Josh Stewart, Kirk Acevedo, Leigh Whannell, Lin Shaye, Spencer Locke, Tessa Ferrer', 'Berdiri di tengah waralaba ini adalah Elise, seorang parapsikologis, yang membantu orang-orang yang menempati rumah dihuni oleh roh jahat. Insidious: The Last Key sebenarnya adalah prekuel dari film yang pertama, (dua episode ini nyaris berjalan beruntun) karena input kita tahu Elise sendiri sudah jadi hantu di film yang kedua. Jadi, di film ini kita akan melihat kisah asal dari tokoh Elise. Kita akan melihat ia di masa kecilnya. Rumah Elise dulu di dalam kompleks penitentiary di New Mexico.\r\n\r\nGimana kemampuannya melihat hal-hal goib menjadi penyebab utama Elise kecil dipukuli oleh bokapnya yang mendapat nafkah dari menghukum kriminal-kriminal. Masa kecil yang enggak bahagia, fisiknya menderita, mental haluspun ikut didera oleh banyaknya makhluk yang lihat ia. Salah satunya terbebas dari pintu yang dibuka Elise, melepas teror yang berujung kepada Elise remaja kabur dari rumah. Masa lalu mencerminkan hidupmu yang sekarang, tahun 2010 Elise mendapat telepon dari seorang klien. “Alamat Anda di mana?” dan DEG! Permintaan mengusir hantu itu ternyata datang dari rumah masa kanak-kanaknya yang penuh dengan hantu-hantu masa lalu !!', 2018, 'Amerika Serikat', 'https://youtu.be/acQyrwQyCOk', '2023-05-31'),
(9, 'teluh darah.jpg', 'Teluh Darah', 'Series', 'Horror, Series Indonesia', 'Dayu Wijanto, Deva Mahenra, Imelda Therinne, Justin Adiwinata, Kiki Narendra, Lukman Sardi, Mike Lucock, Mikha Tambayong, Shenina Cinnamon, Willem Bevers', 'Teluh Darah berkisah tentang perempuan cerdas yang bekerja di perusahaan investasi, Wulan. Kehidupan Wulan yang tak percaya klenik mendadak berubah drastis saat keluarganya mendapat teror aneh. Awalnya seekor musang mati tergeletak di depan rumah Wulan.', 2023, 'Indonesia', 'https://youtu.be/WTUg_yE0Dwc', '2023-05-31'),
(10, 'dokter cha.jpg', 'Doctor Cha', 'Series', 'Drama, Drama Korea', 'Kim Byung-chul, Kim Ye-eun, Min Woo-hyuk, Myung Se-bin, Uhm Jung-hwa', 'Doctor Cha mengangkat cerita mengenai Cha Jeong Suk yang menikah selama 20 tahun dengan Seo In Ho. Selama 20 tahun, ia menjalani kehidupan sebagai ibu rumah tangga. Suaminya adalah seorang professor dan dokter bedah syaraf di sebuah rumah sakit universitas.\r\n\r\nDemikian pula dengan anak laki-lakinya, Seo Jung Min, yang sedang menjalani magang di rumah sakit yang sama dengan ayahnya. Cha Jeong Suk pun sebenarnya memiliki latar belakang pendidikan sebagai seorang dokter.\r\n\r\nSetelah mengalami kejadian yang cukup berat dalam hidupnya, Cha Jeong Suk memutuskan untuk kembali menjalani profesinya sebagai dokter. Ia pun memutuskan untuk mengambil residensi di rumah sakit yang sama dengan suami dan anaknya.', 2023, 'Korea', 'https://youtu.be/vlS9ccfza64', '2023-05-31'),
(11, 'mario bros.jpg', 'The Super Mario Bros. Movie', 'Series', 'Adventure, Animation, Comedy, Family, Fantasy, Populer', 'Anya Taylor-Joy, Charlie Day, Chris Pratt, Fred Armisen, Jack Black, Keegan-Michael Key, Kevin Michael Richardson, Khary Payton, Sebastian Maniscalco, Seth Rogen', 'Kisah Mario (Chris Pratt) si tukang ledeng yang melakukan perjalanan heroik untuk menyelamatkan saudaranya, Luigi (Charlie Day). Di perjalanan, Mario tidak sendiri, ia dibantu oleh Putri Peach (Anya Taylor-Joy) dan prajurit kerajaan jamur.', 2023, 'Amerika Serikat, Jepang', 'https://youtu.be/TnGl01FkMMo', '2023-05-31'),
(12, 'Revenge of Others.jpg', 'Revenge of Others', 'Series', 'Drama, Drama Korea', 'Chae Sang-woo, Chung Su-bin, Jin Ho Eun, Kim Joo-ryoung, Lee Soo-Min, Lomon, Seo Ji-hoon, Shin Ye Eun, Woo Yeon, Yeon Oh', 'Tentang balas dendam yang penuh aksi, pertunjukan dimulai dengan Chanmi (Shin Ye-eun, He Is Psychometric, More Than Friends) belajar saudara kembarnya, Park Wonseok (Kang Yeol), telah meninggal dalam keadaan yang dia menolak untuk percaya. atau menerima. Dia adalah bintang dari tim menembak SMA-nya tapi Chan-mi mengubah hidupnya dan bergerak lintas negara untuk mengejar calon pembunuhnya. Di sekolah barunya, Yongtan High, dia bertemu dengan Ji Soo-heon yang saleh (bintang All of Us Are Dead, Lomon), seorang siswa yang sadar diri yang tampaknya optimis dan berkepala dingin meskipun kehidupan rumah tangganya disfungsional.', 2022, 'Korea Selatan', 'https://youtu.be/GJtu6iUA8tQ', '2023-05-31'),
(13, 'Fast X.jpeg', 'Fast X', 'Movies', 'Action, Crime, Populer, Thriller', 'Jason Momoa, John Cena, Jordana Brewster, Ludacris, Michelle Rodriguez, Nathalie Emmanuel, Scott Eastwood, Sung Kang, Tyrese Gibson, Vin Diesel', 'Selama banyak misi dan melawan rintangan yang mustahil, Dom Toretto dan keluarganya telah mengakali dan mengalahkan setiap musuh di jalan mereka. Sekarang, mereka menghadapi lawan paling mematikan yang pernah mereka hadapi: Ancaman mengerikan yang muncul dari bayang-bayang masa lalu yang dipicu oleh dendam berdarah, dan yang bertekad untuk menghancurkan keluarga ini dan menghancurkan segalanyadan semua orangyang dicintai Dom, selamanya. ', 2023, 'Amerika ', 'https://youtu.be/eoOaKN4qCKw', '2023-05-31'),
(14, 'Our Sister’s Soulmate.jpg', 'Our Sister’s Soulmate', 'Series', 'Comedy, Drama', 'Kaito Takahashi, Kasumi Arimura, Kento Hayashi, Naohito Fujiki, Ryoka Minamide, Wataru Hyuga', 'Saat Momoko Adachi ( Kasumi Arimura ) masih SMA, orang tuanya meninggal karena kecelakaan. Dia ditinggal bersama 3 adiknya. Untuk menghidupi keluarganya, Momoko Adachi menyerah untuk kuliah dan bekerja di toko perangkat keras. 9 tahun kemudian, dia sekarang berusia 27 tahun. 3 adiknya berusia 20, 17, dan 14 tahun. Momoko Adachi menempatkan kebahagiaan saudaranya di atas segalanya. Suatu hari, dia bertemu Yoshioka-san di tempat kerja. Dia tertarik pada Yoshioka-san, yang selalu tersenyum, tapi dia punya rahasia.', 2020, 'Jepang', 'https://youtu.be/K8K_njXmgD0', '2023-05-31'),
(15, 'Eclipse of the Heart.jpg', 'Eclipse of the Heart', 'Series', 'Drama, Mystery, Thailand Series', 'Chatchai Plengpanich, Game Santi Santiwetchakun, Jessica Pasaphan, Khwanruedi Klomklom, Maylada Susri, Popetorn Soonthornyanakij, Prin Suparat, Sarocha Watitapun, Sarut Vichitrananda, Unda Kulteera Yordchang', 'Kisah hidup Pareena (Bow Maylada) yang sangat sempurna dan indah hingga kematian sang ayah. Setelah kematian ayahnya, Pareena menemukan sesuatu yang janggal dengan kematian ayahnya. Hal ini pun mendorong Pareena untuk mengungkapkan misteri tersebut demi kehormatan ayahnya.', 2023, 'Thailand', 'https://youtu.be/_VKA_akb3RI', '2023-05-31'),
(16, 'The Conjuring.jpg', 'The Conjuring', 'Movies', 'Horror, Thriller', 'Hayley McFarland, Joey King, Kyla Deaver, Lili Taylor, Mackenzie Foy, Patrick Wilson, Ron Livingston, Shanley Caswell, Shannon Kook, Vera Farmiga', 'Pada tahun 1970, penyelidik paranormal dan ahli demonologi Lorraine (Vera Farmiga) dan Ed (Patrick Wilson) Warren dipanggil ke rumah Carolyn (Lili Taylor) dan Roger (Ron Livingston) Perron. Keluarga Perron dan kelima putri mereka baru-baru ini pindah ke sebuah rumah pertanian terpencil, di mana kehadiran supernatural telah diketahui. Meskipun manifestasinya relatif jinak pada awalnya, peristiwa segera meningkat dengan cara yang mengerikan, terutama setelah Warrens menemukan sejarah mengerikan rumah itu.', 2013, 'Amerika Serikat', 'https://youtu.be/Bx9DSJVcpBU', '2023-05-31'),
(17, 'Pokémon.jpg', 'Pokémon', 'Series', 'Action & Adventure, Animation, Kids', 'Ayane Sakura, Daiki Yamashita, Ikkyu Juku, Ikue Otani, Kei Shindo, Kenta Miyake, Megumi Hayashibara, Minori Suzuki, Taku Yashiro, Yuka Terasaki', 'Salah satu waralaba media yang dimiliki oleh perusahaan permainan video Nintendo dan diciptakan oleh Satoshi Tajiri pada 1995. Dalam mayoritas seri Pokémon, seorang pelatih yang dapat menghadang kekuatan Pokémon liar dapat menangkapnya untuk kemudian dijadikan peliharaannya sendiri dengan melemparkan sebuah benda yang bisa menciutkan massa jenis Pokémon tersebut, yang kemudian dinamakan Poké Ball. Dengan tertangkapnya Pokémon liar tersebut, maka sang pelatih secara resmi memiliki Pokémon liar tersebut.', 2023, 'Jepang', 'https://youtu.be/bAav4UAT7zk', '2023-05-31'),
(18, 'My Sassy Girl.jpg', 'My Sassy Girl ', 'Movies', 'Comedy, Drama, Romance\r\n\r\n', 'Aida Nurmala, Axel Matthew Thomas, Azzura Pinkan, Ferry Salim, Ibnu Wardani, Jefri Nichol, Mahalini Raharja, Petrus Mahendra, Raja Giannuca, Tiara Andini', 'My Sassy Girl merupakan film orisinal asal Korea Selatan pada 2001 yang diadaptasi menjadi versi Indonesia dengan judul sama yang pertama kali ditayangkan pada 2001. Gian (Jefri Nichol) adalah seorang mahasiswa pascasarjana yang kerap gundah karena tak kunjung menemukan cinta sejatinya.\r\n\r\nSampai pada suatu hari, di tengah perjalanan pulang ke rumah, ia bersua dengan seorang perempuan yang dianggapnya aneh, kasar, namun ajaib di sebuah stasiun kereta.\r\n\r\nPerempuan itu mabuk dan tak sadarkan diri hingga nyaris jatuh ke rel kereta. Momen tersebut sontak membuat Gian sigap untuk menolong.\r\n\r\nTernyata pertolongan dari Gian itu hanya disambut dengan tatapan sinis dari sang perempuan.\r\n\r\nDi dalam kereta, ada kejadian yang semakin membuat Gian merasa tidak nyaman. Perempuan yang terus diamatinya tersebut menegur seorang penumpang yang tak memberikan kursi kepada ibu hamil dengan teriakan keras.\r\n\r\nKarena mengakibatkan sebuah adegan yang tak nyaman, Gian kembali mencoba menenangkan perempuan itu. Hingga akhirnya, perempuan tersebut muntah di baju Gian dan pingsan di pelukannya.', 2022, 'Indonesia', 'https://youtu.be/IEm0t4YW0Xw', '2023-05-31'),
(19, 'mumun.jpeg', 'Mumun', 'Movies', 'Comedy, Drama, Horror, Populer', 'Acha Septriasa, Bedu, Dimas Aditya, Eddies Adellia, Ence Bagus, Mandra, Volland Humonggio', 'Mumun dan Juned adalah sepasang kekasih yang saling mencintai. Namun, Mumun meninggal secara mengenaskan dalam sebuah kecelakaan dan Juned sangat mengerikan. Setelah jenazah Mumun dimakamkan, ternyata Husein selaku penggali kubur lupa membuka tali pocong Mumun saat prosesi penguburan, sehingga beliau bangkit dari kubur untuk meminta tali pocong dibuka.', 2022, 'Indonesia', 'https://youtu.be/MImuvAd36nA', '2023-05-31'),
(20, 'The King’s Daughter.jpg', 'The King’s Daughter', 'Movies', 'Drama, Fantasy, Romance', 'Ben Lloyd-Hughes, Benjamin Walker, Fan Bingbing, Julie Andrews, Kaya Scodelario, Pablo Schreiber, Paul Ireland, Pierce Brosnan, Rachel Griffiths, William Hurt', 'Dongeng tentang pencarian Raja Matahari untuk keabadian, putri duyung (Bingbing) dan anak haram yang bersemangat dan gagah dibesarkan di sebuah biara, pemain cello dari beberapa bakat yang tidak tahu siapa ayahnya, bahkan ketika dia memanggilnya untuk meramaikan musik pengadilannya. Ada seorang tabib pengadilan yang kejam dan suka mencari bantuan (Pablo Schreiber, luar biasa), seorang padre istana yang sabar (Sakit, baik) dan seorang kapten bajak laut yang gagah (Benjamin Walker) diperas untuk mengambil pekerjaan mengambil sirene laut untuk menyelamatkan ” raja yang paling lama memerintah dalam sejarah” ketidaknyamanan kematian.\r\n\r\n“Putri” harus menangkis pelamar yang diatur (Ben Lloyd-Hughes), dokter yang tidak berperasaan dan keinginan penghujatan raja yang sia-sia untuk hidup selamanya dalam upaya menyelamatkan putri duyung, yang tanpa kata memanggilnya, satu musisi ke musisi lainnya. Efek putri duyung, sebagian dikreditkan sebagai salah satu alasan Paramount tidak pernah merilis film ini, lebih dari sekadar mengumpulkan dalam versi ini. Pertunjukannya tidak pernah kurang dari cukup, dengan kilasan kecerdasan — Brosnan dan Hurt saat Louis dan pendeta/orang kepercayaannya berbagi “pengakuan” di kaki ranjangnya yang penuh skandal — dan hatinya.', 2022, 'Amerika', 'https://youtu.be/NjGSWdmVVHM', '2023-05-31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 12:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduwork_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'myadminpage', '20032304');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `tahun_rilis` date NOT NULL,
  `sinopsis` text NOT NULL,
  `tag` set('Trending Now','Latest Film','Most Repeat','Top Views Day','Top Views Week','Top Views Month','Top Views Year','Slide') DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sutradara` int(11) NOT NULL,
  `genre` set('Romance','Horor','Advanture','Action','Comedi','Drama','Animation','Crime','Fantasy') NOT NULL,
  `nama_pemain` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `tahun_rilis`, `sinopsis`, `tag`, `id_kategori`, `id_sutradara`, `genre`, `nama_pemain`, `gambar`, `video`) VALUES
(34, 'TOY STORY', '1995-10-30', 'Seorang anak kecil bernama Andy senang berada di kamarnya sambil bermain-main dengan mainannya, terutama bonekanya yang bernama \"Woody\". Tapi, apa yang dilakukan mainan-mainan itu ketika Andy tidak bersama mereka, mainan-mainan itu menjadi hidup. Woody yakin hidupnya (sebagai mainan) baik. Namun, dia harus khawatir dengan kepindahan keluarga Andy, dan yang tidak diketahui Woody adalah tentang pesta ulang tahun Andy. Woody tidak menyadari bahwa ibu Andy memberinya action figure yang dikenal sebagai Buzz Lightyear, yang tidak percaya bahwa dia adalah mainan, dan dengan cepat menjadi mainan favorit Andy yang baru.', 'Trending Now', 6, 3, 'Advanture,Comedi,Animation', 'Don Rickles, Jim Varney, Tim Allen, Tom Hanks', 'images/film-toy-story-1995.jpg.webp', 'v-PjgYDrg70'),
(35, 'Justice League', '2017-11-15', 'Dipicu oleh kembalinya keyakinannya pada kemanusiaan dan terinspirasi oleh tindakan tanpa pamrih Superman, Bruce Wayne meminta bantuan sekutu barunya, Diana Prince, untuk menghadapi musuh yang lebih besar. Bersama-sama, Batman dan Wonder Woman bekerja cepat untuk menemukan dan merekrut tim manusia meta untuk melawan ancaman yang baru muncul ini. Namun terlepas dari terbentuknya liga pahlawan yang belum pernah terjadi sebelumnya – Batman, Wonder Woman, Aquaman, Cyborg, dan The Flash – mungkin sudah terlambat untuk menyelamatkan planet ini dari serangan bencana dalam skala besar.', 'Latest Film', 6, 3, 'Advanture,Action,Fantasy', 'Amy Adams, Ben Affleck, Ezra Miller, Gal Gadot, Henry Cavill', 'images/film-justice-league-2017.jpg.webp', 'IAGz2bDlwqA'),
(36, 'The Moon', '2023-08-02', 'Seorang pria ditinggalkan di luar angkasa karena kecelakaan yang tidak menguntungkan sementara pria lain di Bumi berjuang untuk membawanya kembali dengan selamat.', 'Latest Film', 2, 15, 'Advanture,Drama', 'Kim Hee-ae, Kyung-soo Do, Sol Kyung-gu', 'images/film-the-moon-2023-lk21-d21.jpg.webp', 'OLpqIDNL3eE'),
(37, 'ALONG WITH THE GODS: THE TWO WORLDS', '2017-12-20', 'Setelah meninggal secara tak terduga, petugas pemadam kebakaran Ja-hong dibawa ke alam baka oleh 3 penjaga alam baka. Hanya ketika dia melewati 7 persidangan selama 49 hari dan membuktikan bahwa dia tidak bersalah dalam kehidupan manusia, dia dapat bereinkarnasi, dan 3 penjaga akhirat berada di sisinya untuk membelanya dalam persidangan.', 'Latest Film', 2, 15, 'Drama,Fantasy', 'Hyang-gi Kim, Ji-hun Ju, Jung-jae Lee, Jung-woo Ha, Tae-hyun Cha', 'images/film-singwa-hamgge-2017.jpg.webp', 'sD7dmu-IWNw'),
(38, '200 POUNDS BEAUTY', '2006-12-14', 'Han-na, seorang wanita gemuk dengan suara yang indah, memberikan vokal sesungguhnya untuk seorang bintang pop cantik yang tidak bisa membawakan lagu. Setelah pertemuan yang memalukan, Han-na menjalani operasi plastik dari kepala hingga kaki dan muncul kembali setahun kemudian sebagai penyanyi langsing Jenny.', 'Most Repeat', 2, 15, 'Romance,Comedi,Drama', 'Ah-jung Kim, Dong-il Sung, Hyeon-sook Kim, Jin-mo Ju', 'images/film-200-pounds-beauty-2006.jpg.webp', 'sGjhhlHhEhA'),
(39, 'Friendzone', '2019-02-14', 'Palm (Nine Naphat) terjebak dalam status Friend Zone oleh Gink (Baifern Pimchanok). Mereka sudah bersahabat selama 10 tahun dan Palm ingin mengutarakan perasaannya pada akhir masa sekolah. Namun Gink hanya menjawab “menjadi teman lebih baik.”', 'Most Repeat', 5, 14, 'Romance,Comedi,Drama', 'Naphat Siangsomboon, Pimchanok Luevisadpaibul', 'images/download.jpeg', 'LHzwwYcrKks'),
(40, 'may who?', '2015-10-01', 'berkisah tentang seorang remaja yang memiliki kekuatan super. Pong (Thiti Mahayotaruk) adalah seorang remaja yang gemar menghabiskan waktunya seorang diri. Di tengah kesibukannya di sekolah, Pong selalu menyempatkan diri untuk menyelesaikan komik buatannya. Pong mengarang kisah kehidupan pahlawan super dan seorang tokoh protagonis yang menjadi kekasihnya. Karakter tersebut merupakan gambaran dari Ming (Narikun Ketprapakorn), teman sekelas Pong yang membuatnya jatuh hati. Suatu hari, Pong tanpa sengaja mengumpulkan buku sketsa komiknya pada seorang guru. Buku ini kemudian jatuh ke tangan May Nhai (Sutatta Udomsilp) yang juga dikenal sebagai siswa penyendiri. Pong merasa kesal saat May memperlihatkan isi buku tersebut di hadapan teman-teman kelas mereka. Saat Pong berusaha mendapatkan sketsanya kembali, ia terkejut melihat respon May yang mengeluarkan aliran listrik dari tubuhnya.', 'Most Repeat', 5, 14, 'Romance,Comedi,Drama', 'Sutatta Udomsilp, Narikun Ketprapakorn, Thanapob Leeratanakajorn, Thiti Mahayotaruk', 'images/may.jpeg', 'aNHYlWz0Huw'),
(41, 'Suckseed', '2011-04-20', 'Ped adalah kutu buku di SD yang tidak memiliki minat musik. Sejak teman sekelasnya Ern berbagi kecintaannya pada musik dengannya, Ped jadi menyukai Ern. Tapi orang tua Ern membawanya pergi ke Bangkok membuat mereka berdua terpisah.', 'Top Views Day', 5, 14, 'Comedi', 'Jirayu Laongmanee, Pachara Chirathivat, Thawat Pornrattanaprasert, Nattasha Nauljam', 'images/SuckSeed', 'cOa375cE1Cw'),
(42, '127 Days', '2023-11-23', 'Film ini diadaptasi dari novel yang berjudul sama karya dari Nadzirah Shafa, diketahui kisah ini dituliskan oleh penulis berdasarkan kisahnya dengan sang suami. Kisah ini mengabadikan perjalanan hijrah dan kisah cintanya selama 172 hari bersama sang suami Amer Azzikra, yang kini telah meninggal dunia.', 'Top Views Day', 1, 13, 'Romance,Drama', ' Bryan Domani, Dan Yasmin Napper', 'images/169866489520398_287x421.jpg', 'IPRBKGxCCZQ'),
(44, 'Merindu Cahaya de Amstel', '2022-01-20', 'Film ini menceritakan sosok gadis Belanda yang kemudian memeluk agama Islam, bernama Khadija Veenhoven dengan nama asli Marien Veenhoven. Sementara itu, sosok Khadija membuat penasaran Nico, seorang fotografer dan jurnalis, karena mengingatkannya pada sosok sang ibu.', 'Top Views Week', 1, 13, 'Romance,Drama', 'Amanda Rawles, Rachel Amanda, Bryan Domani', 'images/Poster_film_Merindu_Cahaya_de_Amstel.jpeg', 'OW-Bfslos1I');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` enum('Indonesia','Korea','China','Jepang','Thailand','Amerika') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Indonesia'),
(2, 'Korea'),
(3, 'China'),
(4, 'Jepang'),
(5, 'Thailand'),
(6, 'Amerika');

-- --------------------------------------------------------

--
-- Table structure for table `kritikdansaran`
--

CREATE TABLE `kritikdansaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kritikdansaran`
--

INSERT INTO `kritikdansaran` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'Rahma Khairani', 'pacarjeno@gmail.com', 'gak tau coba aja dulu');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rating_film` enum('1/10','2/10','3/10','4/10','5/10','6/10','7/10','8/10','9/10','10/10') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `rating_film`) VALUES
(1, '1/10'),
(2, '2/10'),
(3, '3/10'),
(4, '4/10'),
(5, '5/10'),
(6, '6/10'),
(7, '7/10'),
(8, '8/10'),
(9, '9/10'),
(10, '10/10');

-- --------------------------------------------------------

--
-- Table structure for table `sutradara`
--

CREATE TABLE `sutradara` (
  `id_sutradara` int(11) NOT NULL,
  `nama_sutradara` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sutradara`
--

INSERT INTO `sutradara` (`id_sutradara`, `nama_sutradara`, `tanggal_lahir`, `negara`) VALUES
(3, 'Joss Whedon', '1964-06-23', 'Amerika Serikat'),
(11, 'Hanung Bramantyo', '1975-10-01', 'Indonesia'),
(12, 'James Wan', '1977-02-26', 'Australia'),
(13, ' Hadrah Daeng Ratu ', '1989-11-02', 'Indonesia'),
(14, 'Chayanop Boonprakob', '1986-03-19', 'Thailand '),
(15, 'Kim Yong-hwa', '1971-09-25', 'Korea Selatan'),
(16, 'Ann Hui', '1947-05-23', 'Republic of China'),
(18, 'Takahiro Miki', '1974-08-29', 'Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(11) NOT NULL,
  `ulasan_id` int(11) NOT NULL,
  `nama_ulasan` varchar(255) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `ulasan_rating` int(11) NOT NULL,
  `tanggal_ulasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`,`id_sutradara`),
  ADD KEY `sutradara` (`id_sutradara`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `sutradara`
--
ALTER TABLE `sutradara`
  ADD PRIMARY KEY (`id_sutradara`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ulasan_id` (`ulasan_id`),
  ADD KEY `ulasan_rating` (`ulasan_rating`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sutradara`
--
ALTER TABLE `sutradara`
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `sutradara` FOREIGN KEY (`id_sutradara`) REFERENCES `sutradara` (`id_sutradara`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `rating` FOREIGN KEY (`ulasan_rating`) REFERENCES `rating` (`id_rating`),
  ADD CONSTRAINT `ulasan` FOREIGN KEY (`ulasan_id`) REFERENCES `film` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

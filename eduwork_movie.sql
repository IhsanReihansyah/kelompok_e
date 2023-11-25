-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 03:49 PM
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
(1, 'myadminpage', '2003_2304');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `tahun_rilis` date NOT NULL,
  `sinopsis` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sutradara` int(11) NOT NULL,
  `id_rating` int(11) NOT NULL,
  `genre` set('Romance','Horor','Advanture','Action','Comedi','Drama','Animation','Crime','Fantasy') NOT NULL,
  `nama_pemain` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `tahun_rilis`, `sinopsis`, `id_kategori`, `id_sutradara`, `id_rating`, `genre`, `nama_pemain`, `gambar`) VALUES
(6, 'Sen to Chihiro no Kamikakushi', '2023-11-07', 'Every human inhabiting the world of Alcia is branded by a “Count” or a number written on their body. ', 1, 2, 6, 'Romance,Horor', 'asd', 'img/popular/popular-1.jpg'),
(7, 'Great Teacher Onizuka', '2023-11-07', 'qwe', 3, 2, 9, 'Action', 'qwe', 'img/recent/recent-2.jpg'),
(8, 'Shouwa Genroku Rakugo Shinjuu', '2023-11-07', 'qwe', 3, 2, 9, 'Action', 'qwe', 'img/recent/recent-1.jpg'),
(9, 'Boruto: Naruto next generations', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-1.jpg'),
(10, 'The Seven Deadly Sins: Wrath of the Gods', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-2.jpg'),
(11, 'Sword art online alicization war of underworld', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-3.jpg'),
(12, 'Fate/stay night: Heavens Feel I. presage flower', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-4.jpg'),
(13, 'Fate stay night unlimited blade works', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-5.jpg'),
(14, 'qwe', '2023-11-07', 'qwe', 6, 2, 3, 'Romance,Horor,Advanture,Action,Comedi,Drama', 'qwe', 'qwe'),
(15, 'THE CREATOR', '2023-10-27', 'Dengan latar belakang perang antara manusia dan robot dengan kecerdasan buatan, seorang mantan tentara menemukan senjata rahasia, robot dalam bentuk anak kecil.\r\n', 6, 4, 7, 'Advanture,Action,Drama', 'Gemma Chan, John David Washington, Madeleine Yuna Voyles', 'images/film-the-creator-2023-lk21-d21.jpg.webp'),
(16, 'CREATION OF THE GODS I: KINGDOM OF STORMS', '2023-07-20', 'Epik fantasi tinggi timur yang luar biasa yang menciptakan kembali perang mitos berkepanjangan antara manusia, makhluk abadi, dan monster, yang terjadi lebih dari tiga ribu tahun yang lalu.\r\n', 3, 5, 7, 'Advanture,Drama', 'Huang Bo, Kris Phillips, Xuejian Li', 'images/film-creation-of-the-gods-i-kingdom-of-storms-2023-lk21-d21.jpg.webp'),
(17, 'BELIEVER 2', '2023-10-10', 'seorang detektif polisi yang berusaha menjatuhkan kartel narkoba terbesar di Asia yang dijalankan oleh seorang pria bernama Tuan Lee. Dia tidak pernah diketahui oleh siapa pun dan sebagai konsekuensinya, banyak pengedar narkoba menyamar sebagai Tuan Lee untuk melakukan perdagangan ilegal.', 2, 7, 1, 'Romance,Horor,Advanture,Action,Drama,Animation,Crime,Fantasy', 'Cha Seung-won, Cho Jin-woong, Han Hyo-joo ', 'https://o-cdn-cas.sirclocdn.com/parenting/images/Believer_2.width-800.format-webp.webp'),
(22, 'Captain Marvel', '2023-09-06', 'Pada 1995 di planet ibu kota Kekaisaran Kree, Hala, anggota Starforce Vers menderita amnesia dan mimpi buruk berulang yang melibatkan seorang wanita yang lebih tua.', 6, 7, 1, 'Advanture,Action,Drama', 'Ben Mendelsohn, Brie Larson, Jude Law, Samuel L. Jackson', 'images/marvel.jpg'),
(23, 'THE CREATOR', '2023-11-17', 'Di tengah perang masa depan antara umat manusia dan kekuatan kecerdasan buatan, seorang mantan agen pasukan khusus yang berduka atas hilangnya istrinya, direkrut untuk memburu dan membunuh Sang Pencipta, arsitek AI canggih yang sulit dipahami yang telah mengembangkan sebuah teknologi misterius. senjata dengan kekuatan untuk mengakhiri perang dan umat manusia itu sendiri.', 6, 7, 4, 'Action', 'Gemma Chan, John David Washington, Madeleine Yuna Voyles', 'images/film-the-creator-2023-lk21-d21.jpg.webp');

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
(1, 'Ihsan Reihansyah', NULL, NULL),
(2, 'Albert', NULL, NULL),
(3, 'Joss Whedon', '1964-06-23', 'inggris'),
(4, 'Taika Watiti', '1975-08-16', 'Selandia Baru'),
(5, 'Wuershan', '1972-06-10', 'china'),
(7, 'Joss Whedo', '1964-08-27', 'Amerika Serikat'),
(8, 'Park Hoon-jung', '1981-04-27', 'Korea Selatan'),
(10, 'Kim Yong-hwa', '1989-06-22', 'seoul'),
(11, 'Carol Danvers', '1989-10-10', 'Amerika Serikat');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(11) NOT NULL,
  `ulasan_id` int(11) NOT NULL,
  `nama_ulasan` varchar(255) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `tanggal_ulasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id`, `ulasan_id`, `nama_ulasan`, `ulasan`, `tanggal_ulasan`) VALUES
(2, 9, 'rehan bakery', 'sangat baik', '2023-11-07'),
(3, 9, 'albert barber', 'tidak menarik', '2023-11-16'),
(4, 12, 'Yesicha', 'tidak bagus', '2023-11-07'),
(5, 17, 'rani', 'sangat baik', '2023-11-23'),
(6, 17, 'yesi', 'bagus banget filmnya', '2023-11-23');

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
  ADD KEY `sutradara` (`id_sutradara`),
  ADD KEY `id_rating` (`id_rating`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
  ADD KEY `ulasan_id` (`ulasan_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sutradara`
--
ALTER TABLE `sutradara`
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating` FOREIGN KEY (`id_rating`) REFERENCES `rating` (`id_rating`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sutradara` FOREIGN KEY (`id_sutradara`) REFERENCES `sutradara` (`id_sutradara`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`ulasan_id`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

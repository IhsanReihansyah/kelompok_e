-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 08:40 AM
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
(5, 'Fate Stay Night: Unlimited Blade', '2019-10-02', 'Every human inhabiting the world of Alcia is branded by a “Count” or a number written on their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss, never to be seen again. But her mother’s last words send Hina on a quest to find a legendary hero from the Waste War - the fabled Ace!', 2, 1, 9, 'Advanture,Action,Drama', 'Tidak Ada', 'img/anime/details-pic.jpg'),
(6, 'Sen to Chihiro no Kamikakushi', '2023-11-07', 'Every human inhabiting the world of Alcia is branded by a “Count” or a number written on their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss, never to be seen again. But her mother’s last words send Hina on a quest to find a legendary hero from the Waste War - the fabled Ace!', 1, 2, 6, 'Romance,Horor', 'asd', 'img/popular/popular-1.jpg'),
(7, 'Great Teacher Onizuka', '2023-11-07', 'qwe', 3, 2, 9, 'Action', 'qwe', 'img/recent/recent-2.jpg'),
(8, 'Shouwa Genroku Rakugo Shinjuu', '2023-11-07', 'qwe', 3, 2, 9, 'Action', 'qwe', 'img/recent/recent-1.jpg'),
(9, 'Boruto: Naruto next generations', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-1.jpg'),
(10, 'The Seven Deadly Sins: Wrath of the Gods', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-2.jpg'),
(11, 'Sword art online alicization war of underworld', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-3.jpg'),
(12, 'Fate/stay night: Heavens Feel I. presage flower', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-4.jpg'),
(13, 'Fate stay night unlimited blade works', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-5.jpg'),
(14, 'qwe', '2023-11-07', 'qwe', 6, 2, 3, 'Romance,Horor,Advanture,Action,Comedi,Drama', 'qwe', 'qwe'),
(15, 'THE CREATOR', '2023-10-27', 'Dengan latar belakang perang antara manusia dan robot dengan kecerdasan buatan, seorang mantan tentara menemukan senjata rahasia, robot dalam bentuk anak kecil.\r\n', 6, 4, 7, 'Advanture,Action,Drama', 'Gemma Chan, John David Washington, Madeleine Yuna Voyles', 'images/film-the-creator-2023-lk21-d21.jpg.webp'),
(16, 'CREATION OF THE GODS I: KINGDOM OF STORMS', '2023-07-20', 'Epik fantasi tinggi timur yang luar biasa yang menciptakan kembali perang mitos berkepanjangan antara manusia, makhluk abadi, dan monster, yang terjadi lebih dari tiga ribu tahun yang lalu.\r\n', 3, 5, 7, 'Advanture,Drama', 'Huang Bo, Kris Phillips, Xuejian Li', 'images/film-creation-of-the-gods-i-kingdom-of-storms-2023-lk21-d21.jpg.webp');

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
(3, 'Joss Whedon', '1964-06-23', 'Amerika Serikat'),
(4, 'Taika Watiti', '1975-08-16', 'Selandia Baru'),
(5, 'Wuershan', '1972-06-10', 'china');

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
(4, 12, 'Yesicha', 'tidak bagus', '2023-11-07');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `rating` FOREIGN KEY (`id_rating`) REFERENCES `rating` (`id_rating`),
  ADD CONSTRAINT `sutradara` FOREIGN KEY (`id_sutradara`) REFERENCES `sutradara` (`id_sutradara`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`ulasan_id`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

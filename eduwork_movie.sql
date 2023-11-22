-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 09:32 AM
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
  `genre` set('Romance','Horor','Advanture','Action','Comedi','Drama') NOT NULL,
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
(13, 'Fate stay night unlimited blade works', '2023-11-08', 'qwe', 4, 2, 8, 'Romance,Advanture', 'qwe', 'img/sidebar/tv-5.jpg');

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
  `nama_sutradara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sutradara`
--

INSERT INTO `sutradara` (`id_sutradara`, `nama_sutradara`) VALUES
(1, 'Ihsan Reihansyah'),
(2, 'Albert');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `tanggal_ulasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `ulasan`, `rating`, `tanggal_ulasan`) VALUES
(1, 'Sangat bisa diterima', 'Sangat bagus', '2023-11-23');

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
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

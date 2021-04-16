-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 16, 2021 at 06:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040126`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `judul`, `penulis`, `penerbit`, `tahun`, `genre`) VALUES
(1, 'hujan.png', 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', 'Januari 2016', 'Science-Fiction'),
(2, 'marmut.png', 'Marmut Merah Jambu', 'Raditya Dika', 'Bukune', 'Juni 2010', 'Comedy'),
(3, 'omen.png', 'Omen', 'Lexie Xu', 'Gramedia Pustaka utama', 'September 2012', 'Thriller, Romance'),
(4, 'bumi.png', 'Bumi', 'Tere Liye', 'Gramedia Pustaka Utama', 'Januari 2014', 'Bildungsroman, Fiksi petualangan, Fantasi'),
(5, 'buma.png', 'Bumi Manusia', 'Pramoedya Ananta Toer\"', 'Hasta Mitra', '1980', 'Drama Histori'),
(6, 'maut.png', 'Permainan Maut', 'Lexie Xu', 'Gramedia Pustaka Utama', 'November 2011', 'Thriller, Romance, Teenlit'),
(7, 'salmon.png', 'Manusia Setengah Salmon', 'Raditya Dika', 'GagasMedia', 'Desember 2011', 'Comedy'),
(8, 'negeri.png', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 'Juli 2009', 'Edukasi, Religi, Roman'),
(9, 'ranah.png', 'Ranah 3 Warna', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 'Januari 2011', 'Edukasi, Religi, Roman\r\n'),
(10, 'kopi.png', 'Filosofi Kopi', 'Dewi Lestari', 'Jakarta: Trude Books & GagasMedia', '2006', 'Roman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

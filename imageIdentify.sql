-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2021 at 09:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imageIdentify`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarfoto`
--

CREATE TABLE `daftarfoto` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nama_asli` varchar(255) NOT NULL,
  `tipe_gambar` varchar(255) NOT NULL,
  `ukuran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarfoto`
--

INSERT INTO `daftarfoto` (`id`, `deskripsi`, `nama_asli`, `tipe_gambar`, `ukuran`) VALUES
(89, '', '[752]new.png', 'image/png', 106),
(90, 'Testbuild', '[436]Screenshot from 2020-12-14 10-46-03.png', 'image/png', 1070),
(91, 'Testbuild', '[483]Screenshot from 2020-12-14 10-46-03.png', 'image/png', 1070),
(92, 'testlah', '[736]Screenshot from 2021-01-02 14-16-03.png', 'image/png', 76),
(93, 'test svg', '[93]instagram.svg', 'image/svg+xml', 4),
(94, 'rest jpg', '[97]3225707.jpg', 'image/jpeg', 3938),
(95, 'Testbuild', '[690]8070d5ae903168f5effe67fcfe97e4a9.jpg', 'image/jpeg', 106),
(97, 'Testbuild', '[388]123359bfa593c90fd227eacf8f3eda9b.png', 'image/png', 87),
(98, 'California poem', '[511]icons8-document.svg', 'image/svg+xml', 4),
(99, 'png', '[265]Saly-18.png', 'image/png', 949),
(100, 'Testbuild', '[380]icons8-restart.svg', 'image/svg+xml', 2),
(101, 'Testbuild', '[353]icons8-document.svg', 'image/svg+xml', 4),
(102, 'Testbuild', '[999]icons8-sun.svg', 'image/svg+xml', 2),
(103, 'California poem', '[555]8070d5ae903168f5effe67fcfe97e4a9.jpg', 'image/jpeg', 106);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarfoto`
--
ALTER TABLE `daftarfoto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarfoto`
--
ALTER TABLE `daftarfoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

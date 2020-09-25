-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 01:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `euro_flora`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `discription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `price`, `image`, `discription`) VALUES
(1, 'The Smile', 78.90, 'the smile.jpg', 'Roses and mixed flowers'),
(2, 'Cheyanne', 78.80, 'Cheyanne.jpg', 'Bright gerberas or daisies, alstroemerias and mixed flowers'),
(3, 'Nicole ', 77.90, 'Nicloe.jpg', 'Mixed bright flowers'),
(4, 'Denise', 77.50, 'Denise.jpg', 'Lively roses, daisies or gerberas and mixed flowers'),
(5, 'Lia ', 77.70, 'Lia.jpg', 'Pastel roses, gerberas and mixed flowers\r\n'),
(6, 'Alexa', 77.00, 'alexa.jpg', 'Bright roses, gerberas and mixed flowers\r\n'),
(7, 'Nora ', 77.00, 'nora ', ' Red roses, daisies and mixed flowers\r\n'),
(8, 'Lucille ', 77.70, 'Lucille.jpg', 'Delicate roses, lilies, alstroemerias and mixed flowers\r\n'),
(9, 'Vwana', 89.00, 'Vwana.jpg', 'Sunny roses, gerberas, alstroemerias and mixed flowers'),
(10, 'Mila', 78.00, 'Mila.jpg', 'Lively roses, gerberas and mixed flowers'),
(11, 'Gabriella', 78.80, 'gabriella.jpg', '80 Bright roses, lilies, gerberas and mixed flowers'),
(12, 'Maribel ', 77.80, 'Maribel.jpg', 'Pastel roses, gerberas or daisies and mixed flowers\r\n'),
(13, 'Orchidea', 92.70, 'Orchidea.jpg', 'First class orchid plant\r\n'),
(14, 'Aria', 84.90, 'aria.jpg', 'Pink roses, gerberas, lilies and mixed flowers'),
(15, 'Remy', 99.80, 'remy.jpg', 'White and red roses, lilies, daisies or gerberas and mixed flowers'),
(16, 'Bianca ', 83.80, 'bianca.jpg', ' Delicate roses, lisianthuses, lilies and mixed flowers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

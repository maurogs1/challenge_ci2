-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2020 at 08:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge_ci2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Comida'),
(2, 'Servicios'),
(3, 'Entretenimiento'),
(5, 'Transporte'),
(6, 'Salud');

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `concept` varchar(150) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `personId`, `categoryId`, `amount`, `date`, `concept`, `type`) VALUES
(7, 11, 2, 522123, '2020-11-10', 'Sin concepto nuevo', 'egress'),
(9, 11, 2, 233223, '2020-11-10', '23223', 'entry'),
(10, 12, 1, 550000, '2020-11-10', 'Chocolate', 'egress'),
(11, 11, 5, 6000, '2020-11-11', 'Colecetivo', 'egress'),
(13, 11, 2, 3000, '2020-11-11', 'Test', 'egress'),
(14, 11, 3, 555555, '2020-11-11', 'Sin concepto', 'entry'),
(15, 11, 1, 8000, '2020-11-11', 'Prueba', 'entry'),
(16, 11, 6, 5000, '2020-11-11', 'Medicos', 'entry'),
(17, 11, 3, 8000, '2020-11-11', 'Compras', 'egress'),
(19, 11, 2, 5000, '2020-11-11', '600', 'entry'),
(20, 11, 1, 30000, '2020-11-11', 'Chocolate', 'egress'),
(21, 11, 2, 50056, '2020-11-13', 'Sin concepto', 'entry');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `dni`, `name`, `lastname`, `email`) VALUES
(11, 3352, 'Mauro', 'Saravia', 'kuqzao@gmail.com'),
(12, 23321, 'chocolat', 'choco', 'Choco@gmail.com'),
(13, 332, 'napolitano', 'Napo', 'napo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `personId`, `username`, `password`) VALUES
(16, 11, 'mau', '412850457e98a6998f9595d0bdc95e3100c087e0'),
(17, 12, 'choco', '910d810b429dcbfe283764127031d61803f6d9ca'),
(18, 13, 'napo', '4d2984028019893f15304da3e6cb60989147f177');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personId` (`personId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personId` (`personId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_ibfk_2` FOREIGN KEY (`personId`) REFERENCES `persons` (`id`),
  ADD CONSTRAINT `operations_ibfk_3` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`personId`) REFERENCES `persons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:11 PM
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
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(0, 'Gelo', 'angelo.medina506@gmail.com', 'gegege', '2023-06-26 13:57:38'),
(0, 'Gelo', 'angelo.medina506@gmail.com', 'Ang lakas ko grabe', '2023-06-26 13:57:52'),
(0, 'Gelo', 'angelo.medina506@gmail.com', 'Ang lakas ko grabe', '2023-06-26 14:00:17'),
(0, 'Gelo', 'angelo.medina506@gmail.com', 'Ang lakas ko grabe', '2023-06-26 14:00:51'),
(0, 'Gelo', 'angelo.medina506@gmail.com', '1, 2 Buckle \r\n3, 4 Buckle some more\r\n5, 6 Nike kicks', '2023-06-26 14:10:25'),
(0, 'Gelo', 'angelo.medina506@gmail.com', 'Sheeshable', '2023-06-26 14:56:41'),
(0, 'Gelo', 'angelo.medina506@gmail.com', 'Happy Birthday', '2023-06-26 15:09:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

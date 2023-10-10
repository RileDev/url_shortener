-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 09:26 PM
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
-- Database: `db_url`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `code`, `url`, `created_at`) VALUES
(3, 'W8Y2h4ZP', 'https://imet.metropolitan.ac.rs/student/#/home', '2023-10-10'),
(4, 'm4M1SDuT', 'https://www.google.com/', '2023-10-10'),
(5, 'aPB5XtFQ', 'https://getbootstrap.com/', '2023-10-10'),
(6, 'W7Zfgz8d', 'https://www.instagram.com/', '2023-10-10'),
(7, '35K0OrD4', 'https://www.instagram.com/', '2023-10-10'),
(8, '884V15h9', 'https://www.instagram.com/', '2023-10-10'),
(9, 'wevekXm5', 'https://www.instagram.com/', '2023-10-10'),
(10, 'KRkkpDu9', 'http://localhost/url_shortener/::1//url_shortener/index.php/?code=aPB5XtFQ', '2023-10-10'),
(11, '0aJm4Acr', 'https://mail.google.com/mail/u/3/#inbox', '2023-10-10'),
(12, 'dCyYlz3f', 'https://www.metropolitan.ac.rs/met-ileda-data-viz-hackathon/', '2023-10-10'),
(13, 'FgPHXhDH', 'https://www.instagram.com/', '2023-10-10'),
(14, '5gFdZTrC', 'https://www.instagram.com/', '2023-10-10'),
(15, 'P9JLFcSu', 'https://create-react-app.dev/', '2023-10-10'),
(16, 'STYQTAMC', 'https://create-react-app.dev/', '2023-10-10'),
(17, '7hhRjQbd', 'https://www.instagram.com/', '2023-10-10'),
(18, 'xBgsjim5', 'https://www.instagram.com/', '2023-10-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

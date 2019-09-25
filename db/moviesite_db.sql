-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 07:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_config`
--

CREATE TABLE `app_config` (
  `key` varchar(15) NOT NULL,
  `value` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_config`
--

INSERT INTO `app_config` (`key`, `value`, `created_at`) VALUES
('initialized', 1, '2019-09-24 12:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `duration`, `image_path`, `sinopsis`) VALUES
(3, 'Dragonball', 'animeee', '150', 'images/poster_dragonball.jpg', 'dfasdfaslskfasjfdlkjalkdfasdfadfadfadfadfadfjalksdjvalksdjvlkassdasadadsdadjvlkasjdvlkasjdlvk'),
(4, 'Spiderman', 'Action,', '150', 'images/poster_spiderman.jpg', 'dfasdfaslkd,fjasdlkfjaslkjflksaddfasdfasdfajflkasjflkasjlkfasjfdlkjalkdfjalksdjvalksdjvlkasjvlkasjdvlkasjdlvk'),
(5, 'Aquaman', 'Action,', '150', 'images/poster_venom.jpg', 'dfasdfaslkd,fjasdlkfdfasdfasdfadfafdafjaslkjflksadjflkasjflkasjlkfasjfdlkjalkdfjalksdjvalksdjvlkasjvlkasjdvlkasjdlvk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'dummy1', 'dummy1', 'dummy1@dummy.com', 'dummy1dummy1', '2019-09-24 12:09:30', '2019-09-24 12:09:30'),
(2, 'dummy2', 'dummy2', 'dummy2@dummy.com', 'dummy2dummy2', '2019-09-24 12:09:30', '2019-09-24 12:09:30'),
(3, 'dummy3', 'dummy3', 'dummy3@dummy.com', 'dummy3dummy3', '2019-09-24 12:09:30', '2019-09-24 12:09:30'),
(4, 'Antoni Wijaya', 'kwok', 'wijayaantoni1234@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2019-09-25 00:02:04', '2019-09-25 00:02:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_config`
--
ALTER TABLE `app_config`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 07:06 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ckeditor`
--

-- --------------------------------------------------------

--
-- Table structure for table `ckeditor`
--

CREATE TABLE `ckeditor` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `editor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ckeditor`
--

INSERT INTO `ckeditor` (`id`, `title`, `editor`) VALUES
(7, 'IBA BALITA', '<p><img src=\"uploads/download (1).jpg\" width=\"465\" height=\"290\" /></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\">jdiijaijijdiadda</span></p>'),
(9, 'national', '<p><img src=\"uploads/download.jpg\" width=\"474\" height=\"316\" /></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\">ljocdjowjojep w9jej09je9jfeijfiejfiejife</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `news_editor`
--

CREATE TABLE `news_editor` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_editor`
--

INSERT INTO `news_editor` (`admin_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', '123', 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ckeditor`
--
ALTER TABLE `ckeditor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_editor`
--
ALTER TABLE `news_editor`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ckeditor`
--
ALTER TABLE `ckeditor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news_editor`
--
ALTER TABLE `news_editor`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

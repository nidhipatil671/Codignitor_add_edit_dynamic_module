-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 03:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeignitor_custom_fields`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE `custom_fields` (
  `id` int(11) NOT NULL,
  `field_type` varchar(255) DEFAULT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom_fields`
--

INSERT INTO `custom_fields` (`id`, `field_type`, `field_name`, `table_name`, `column_name`) VALUES
(1, 'number', 's', 'users', 'custom_field_1'),
(2, 'number', 'nidhi', 'users', 'custom_field_2'),
(3, 'number', 's', 'users', 'custom_field_3'),
(4, 'number', 'h', 'users', 'custom_field_4'),
(5, 'text', 'attr', 'users', 'custom_field_5'),
(6, 'text', 'nidhipatill', 'users', 'custom_field_6'),
(7, 'text', 'tttttttttttttttt', 'users', 'custom_field_7'),
(8, 'number', 'testttttttttttttttttt', 'users', 'custom_field_8'),
(9, 'text', 'STATUS', 'users', 'custom_field_9'),
(10, 'text', 'REG_NO', 'users', 'custom_field_10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `custom_field_1` int(11) NOT NULL,
  `custom_field_2` int(11) NOT NULL,
  `custom_field_3` int(11) NOT NULL,
  `custom_field_4` int(11) NOT NULL,
  `custom_field_5` varchar(255) NOT NULL,
  `custom_field_6` varchar(255) NOT NULL,
  `custom_field_7` varchar(255) NOT NULL,
  `custom_field_8` int(11) NOT NULL,
  `custom_field_9` varchar(255) NOT NULL,
  `custom_field_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `description`, `custom_field_1`, `custom_field_2`, `custom_field_3`, `custom_field_4`, `custom_field_5`, `custom_field_6`, `custom_field_7`, `custom_field_8`, `custom_field_9`, `custom_field_10`) VALUES
(2, 'sdsbbbbbbbbbbbbbb', 'sdsdsvvvvvvvvvvvvreeeeeeeeeeee', 4, 2, 8, 323, '4', '', '', 0, 'SOME NEW', ''),
(3, 'd', 'd', 0, 0, 0, 0, '', '', '', 0, '', ''),
(4, 's', 's', 0, 0, 0, 0, '', '', '', 0, '', ''),
(6, 's', 's', 0, 0, 0, 0, '', '', '', 0, '', ''),
(7, 'sssssssss', 'sssssssssssssdsfd', 0, 0, 0, 0, '', '', '', 0, '', ''),
(8, 'new', 'ds', 567567, 1212, 433, 2322, '', '', '', 0, '', ''),
(9, 'x', 'w', 5, 6, 7, 8, 'ddd39', '', '', 0, '', ''),
(10, 's', 's', 46, 56, 65, 6, '56', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
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
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

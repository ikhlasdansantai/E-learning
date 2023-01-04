-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2023 at 07:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyimpanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `category`, `content`, `author`, `created_on`) VALUES
(7, 'Cara meretas IG dapat 500000 followers', 'Cybersecurity', 'Tinggal tanya CEO instagram', 'Aziz', '2021-01-05 01:25:09'),
(8, 'Cara membuat aplikasi hacking', 'Programming', 'Lorem ipsum dolor sit amet', 'Aziz', '2023-01-05 01:25:44'),
(9, 'Cara buat satelit', 'IoT', 'Buat aja', 'Aziz', '2023-01-05 01:26:01'),
(10, 'Hello', 'Hello', 'asfdsfsdf', 'Ikhsan', '2023-01-05 01:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `incorrect_attempts` int(5) DEFAULT NULL,
  `is_locked` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `incorrect_attempts`, `is_locked`) VALUES
(1, 'Aziz', 'johndoe', '$2a$12$xcG6.WhxYajVDpqnk8nzGe7lv7oFRFcZYgGgRyjJeG2z2jR.gcNlC', 0, 0),
(2, 'Fadillah', 'krisfrizki', '$2a$12$dCBdIULq49HV3PKxwg5WoeWkvg4X2yI6wicpLBWr0TD8buBrqRbai', 0, 0),
(3, 'Ikhsan', 'ikhlasdansantai', '$2a$12$gr8Vg0pE3KJ/C/kDwTraF.PddS/Of5i4/VyDO70WzeO1VVznRBHCO', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

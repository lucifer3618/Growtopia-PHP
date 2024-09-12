-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 03:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `growtopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `nic`, `password`) VALUES
('kasun123', 'kasun@gmail.com', '200020002000', '$2y$12$31e3MXl39usN7Vop02888OWKY24vZzFz64m2Q/KFFdjPWRtlpf/l6'),
('kavinda123', 'kavinda@gmail.com', '200020002222', '$2y$12$ABvoRojJyOGA61fjfQD6qeOL07Ff5e6UXDB1U1x3RAvI476Uvquh2'),
('lucifer21', 'dasun@gmail.com', '200020002000', '$2y$12$MSBHyv8u2SibmYztERXuo.L8tkLPiropWQpyjFHfKgrRLCDQAxS2.'),
('yasitha123', 'yasitha@gmail.com', '200020002000', '$2y$12$QbYbTXOmpytMR9/er9EKa.ABWx.JLaBX04kMm5.DQNGS/ghXke80e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

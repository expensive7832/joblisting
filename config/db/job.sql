-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 02:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Teaching'),
(2, 'science'),
(3, 'Medical'),
(4, 'Business'),
(5, 'Admininstration');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobTitle` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `JobDesc` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `phone` decimal(20,0) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Info` varchar(255) NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT current_timestamp(),
  `cat_id` int(50) NOT NULL,
  `jobtype_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobTitle`, `company`, `Location`, `salary`, `JobDesc`, `Address`, `phone`, `Email`, `Info`, `datePosted`, `cat_id`, `jobtype_id`) VALUES
(12, 'Teacher', 'Honssanah Nursery And Primary', 'ilorin, NG', '24000.00', 'urgently in need of a primary school teacher', 'ile singini ladipo street kuntu', '9023455676', 'expensive7832@gmail.com', 'A diligent graduate of Bsc, HND or NCE is highly needed at this great citadel. \r\nResponsibitlity\r\n1. Teach\r\n2. monitor\r\n3. Teach Moral', '2021-11-13 13:32:08', 1, 1),
(14, 'Engineer', 'Lapariah Tech', 'ilorin, NG', '50000.00', 'field engineer with experience is highly needed', 'oja-iya junction, Taiwo road', '9023455676', 'az@b.com', 'Have you ever climb mast? Are you passionate? and willingness to sacrifice your time and knowledge in pushing this company forward', '2021-11-13 13:39:05', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE `jobtype` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`id`, `jobtype`) VALUES
(1, 'Fulltime'),
(3, 'PartTime'),
(5, 'Freelance'),
(7, 'Temporary'),
(9, 'Internship');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

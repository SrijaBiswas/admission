-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 03:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `profile` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `c_edu` varchar(500) NOT NULL,
  `a_edu` varchar(500) NOT NULL,
  `c_dur` varchar(500) NOT NULL,
  `cer` varchar(500) NOT NULL,
  `s_date` date NOT NULL,
  `e_date` date NOT NULL,
  `g_name` varchar(500) NOT NULL,
  `g_occ` varchar(500) NOT NULL,
  `fa_name` varchar(500) NOT NULL,
  `ma_name` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `dist` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `pin` int(7) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `g_contact` bigint(12) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `dob`, `profile`, `gender`, `c_edu`, `a_edu`, `c_dur`, `cer`, `s_date`, `e_date`, `g_name`, `g_occ`, `fa_name`, `ma_name`, `state`, `dist`, `city`, `pin`, `contact`, `g_contact`, `email`) VALUES
(1, 'Srija', 'Biswas', '2001-01-30', '164519445220200927_101407.jpg', 'female', 'UG', 'Python Programming', '3 Months', 'yes', '2022-02-25', '2022-05-25', 'Jayanta Biswas', 'Business', 'Jayanta Biswas', 'Soma Biswas', 'West Bengal', 'Kolkata', 'Kolkata', 700004, 9330288151, 9830313993, 'biswassrija01@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

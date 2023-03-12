-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 09:22 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrator_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlogin_tbl`
--

CREATE TABLE `userlogin_tbl` (
  `id` int(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contactnumber` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin_tbl`
--

INSERT INTO `userlogin_tbl` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `contactnumber`) VALUES
(1, 'user', 'user123', 'username', 'user@yahoo.como', '1234', 123456789),
(2, 'mark', 'chritian', 'mark1', 'mark@yahoo.com', '1234', 123456789),
(3, '123123', '123132', '123123', '213123@yahoo.com', '123', 213213),
(4, 'asd', 'asdas', '3123', 'dasd@yahoo.com', '123', 12312),
(5, 'Joey ', 'Aumenta', 'joeyaumenta', 'joeyaumenta@gmail.co', 'test123', 9123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlogin_tbl`
--
ALTER TABLE `userlogin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogin_tbl`
--
ALTER TABLE `userlogin_tbl`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

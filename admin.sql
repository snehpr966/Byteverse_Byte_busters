-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 08:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Firstname`, `Lastname`, `Address`, `Phone`, `Email`, `Password`) VALUES
(0, 'sdsad', 'sadad', 'adsasdas', 12344, 'Dipto4200@gmail.com', '12'),
(0, 'ds', 'sadsad', 'asdsad', 12113, 'neodipto2@gmail.com', '123'),
(0, 'Dipto', 'A', 'Dhaka', 2147483647, 'neodipto2@gmail.com', '1233'),
(0, 'asd', 'aadd', 'adadsa', 2147483647, 'Rakib@gmail.com', '1234'),
(1, 'rakib', 'ahmed', 'asd', 987654321, 'rakib@gmai.com', '123'),
(0, 'wewe', 'sdfdfs', 'dsfsdf', 2147483647, 'Rakib@gmail.com', '1234'),
(0, 'Dipto', 'A', 'Dhaka', 2147483647, 'Rakib@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

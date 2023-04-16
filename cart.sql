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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Mname` varchar(60) NOT NULL,
  `Mquantity` varchar(10) NOT NULL,
  `Mprice` varchar(20) NOT NULL,
  `Rfname` varchar(60) NOT NULL,
  `Rlname` varchar(50) NOT NULL,
  `Rapartment` varchar(50) NOT NULL,
  `Rstreet` varchar(15) NOT NULL,
  `Rtown` varchar(50) NOT NULL,
  `Rpost` varchar(50) NOT NULL,
  `Rphone` varchar(50) NOT NULL,
  `Remail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Mname`, `Mquantity`, `Mprice`, `Rfname`, `Rlname`, `Rapartment`, `Rstreet`, `Rtown`, `Rpost`, `Rphone`, `Remail`) VALUES
('Multivitamin', '3', '2310', 'sdsad', 'aadd', 'wqe', 'adadsa', 'Dhaka', '1206', '12345678909', 'latifhriday6@gmail.com'),
('Lactogen', '1', '1050', 'sdsad', 'A', 'wqe', 'adadsa', 'Dhaka', '1206', '12345678901', 'neodipto2@gmail.com'),
('Diaper', '3', '1050', 'ds', 'sadsad', '12', 'Dhaka', 'sfdasfads', 'dsfwfas', '09876543211', 'latifhriday6@gmail.com'),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('Napa', '2', '20', 'Dipto', 'A', 'wqe', 'Dhaka', 'Dhaka', '1206', '12345678900', 'latifhriday6@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

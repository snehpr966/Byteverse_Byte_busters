-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 08:13 AM
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
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Pid` int(20) NOT NULL,
  `Pname` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Quantity` int(30) NOT NULL,
  `Price` int(30) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Pid`, `Pname`, `Company`, `Category`, `Quantity`, `Price`, `Picture`) VALUES
(1, 'Lotion', 'Johnson', 'Babycare', 150, 250, 'images/1543586772.jpg'),
(2, 'Lactogen', 'Nestle', 'Babycare', 250, 1050, 'images/1543586530.jpg'),
(3, 'Diaper', 'Neocare', 'Babycare', 50, 350, 'images/1543587084.jpg'),
(4, 'Napa', 'Beximco', 'Health', 155, 10, 'images/1543337415.jpg'),
(5, 'Losectil', 'SK-F', 'Health', 300, 11, 'images/1543561003.jpg'),
(6, 'Metryl', 'Opsonin', 'Health', 50, 3, 'images/1543583322.jpg'),
(11, 'Multivitamin', 'WholeFood', 'Women', 250, 770, 'images/1543593505.jpg'),
(12, 'Marvelon', 'MSD', 'Women', 350, 650, 'images/1543593637.jpg'),
(13, 'Vimax', 'MSD', 'Women', 122, 1120, 'images/1543593806.jpg'),
(14, 'Bandage', 'Neocare', 'Orthopaedic', 111, 110, 'images/1543594467.jpg'),
(15, 'Anklet', 'SK-F', 'Orthopaedic', 54, 220, 'images/1543594524.jpg'),
(16, 'Flamitape', 'Beximco', 'Orthopaedic', 40, 80, 'images/1543594570.jpg'),
(17, 'Mouthwash', 'Boccamint', 'Dental', 300, 150, 'images/1543679127.jpg'),
(18, 'Toothpaste', 'Sensodyne', 'Dental', 60, 70, 'images/1543679233.jpg'),
(19, 'Hearingaid', 'Rionet', 'Dental', 100, 5000, 'images/1543679440.jpg'),
(20, 'Vaxphoid', 'Incepta', 'IV', 125, 1500, 'images/1543679778.jpg'),
(21, 'Clexane', 'Sanofi', 'IV', 500, 700, 'images/1543679946.jpg'),
(22, 'Eporen', 'Square', 'IV', 125, 900, 'images/1543680078.jpg'),
(24, 'Almin', 'Kumudini', 'Powder 2', 120, 7, 'images/1543680454.jpg'),
(26, 'Ace', 'Beximco', 'Powder', 12222, 122, 'images/1545115252.jpg'),
(27, 'grv', 'hkhkhkhk', 'test', 66, 44, 'images/1545115796.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `Pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

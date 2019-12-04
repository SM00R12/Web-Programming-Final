-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 08:16 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `Name` varchar(50) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `ID` int(5) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`Name`, `Author`, `ID`, `Price`, `Quantity`) VALUES
('Hair Love', 'Matthew A. Cherry', 1111, 11.99, 30),
('Charlotte\'s Web', 'E.B. White', 1112, 7.99, 15),
('Junnie B. Jones and the Stupid Smelly Bus', 'Barbara Park', 1113, 5.99, 25),
('Dragons Love Tacos', 'Adam Rubin', 1114, 9.99, 20),
('Mystery Book', 'N/A', 1115, 8.99, 10),
('There Are No Bears in This Bakery', 'Julia Sarcone-Roach', 1116, 12.99, 20),
('The Good Egg', 'Jory John', 1117, 12.99, 30),
('Llama Llama Red Pajama', 'Anna Dewdney', 1118, 10.99, 40),
('The Story of Ferdinand', 'Munro Leaf', 1119, 7.99, 50),
('Hanukkah Bear', 'Eric A. Kimmel', 1120, 10.99, 20),
('How the Grinch Stole Christmas', 'Dr. Seuss', 1121, 9.99, 60),
('Pete the Cat Saves Christmas', 'Julia Sarcone-Roach', 1122, 10.99, 45);

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `ID` int(20) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `Full Name` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `City` varchar(40) NOT NULL,
  `CCNum` int(30) NOT NULL,
  `Zip` int(6) NOT NULL,
  `Exp Year` int(4) NOT NULL,
  `Exp Month` int(2) NOT NULL,
  `CVV` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Email` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Email`, `Password`) VALUES
('test@email.com', 'usertest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `ID` (`ID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `Users` (`Email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `Books` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `Users` (`Email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 04:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19_shopping_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` varchar(10) NOT NULL,
  `ANAME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `EMAIL`, `PASSWORD`) VALUES
('A101', 'Mohadeb Kumar', 'mohadeb.cse@gmail.com', '123'),
('A102', 'Priya Rani', 'priyarani@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `charge_customer`
--

CREATE TABLE `charge_customer` (
  `NAME` varchar(100) DEFAULT NULL,
  `PHONE` varchar(20) NOT NULL,
  `ADDRESS` varchar(200) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_customer`
--

INSERT INTO `charge_customer` (`NAME`, `PHONE`, `ADDRESS`, `PASSWORD`) VALUES
('Binoy Chandra Debnath', '01705810718', 'Karai, Adamdighi, Bogura', '123'),
('Mohadeb Kumar', '01746019124', 'Karai, Adamdighi, Bogura', '123'),
('Priya Rani', '01865983214', 'Robir More, Naogaon Sadar, Naogaon', '123');

-- --------------------------------------------------------

--
-- Table structure for table `charge_customer_order`
--

CREATE TABLE `charge_customer_order` (
  `NAME` varchar(100) DEFAULT NULL,
  `PHONE` varchar(20) DEFAULT NULL,
  `PRODUCT_NAME` varchar(200) DEFAULT NULL,
  `PRICE` double DEFAULT NULL,
  `QUANTITY` double DEFAULT NULL,
  `UNIT` varchar(50) DEFAULT NULL,
  `TOTAL_PRICE` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_customer_order`
--

INSERT INTO `charge_customer_order` (`NAME`, `PHONE`, `PRODUCT_NAME`, `PRICE`, `QUANTITY`, `UNIT`, `TOTAL_PRICE`) VALUES
(NULL, NULL, 'Face Mask', NULL, 5, 'Pices', NULL),
('Priya Rani', '01865983214', 'Soabin oil', NULL, 2, 'Litter(L)', NULL),
('Priya Rani', '01865983214', 'Soabin oil', NULL, 2, 'Litter(L)', NULL),
('Priya Rani', '01865983214', 'Soabin oil', NULL, 2, 'Litter(L)', NULL),
('Mohadeb Kumar', '01746019124', 'Face Mask', NULL, 2, 'Pices(P)', NULL),
('Mohadeb Kumar', '01746019124', 'Face Mask', NULL, 2, 'Pices(P)', NULL),
('Mohadeb Kumar', '01746019124', 'Face Mask', NULL, 2, 'Pices(P)', NULL),
('Mohadeb Kumar', '01746019124', 'Face Mask', NULL, 2, 'Pices(P)', NULL),
('Mohadeb Kumar', '01746019124', 'Face Mask', NULL, 2, 'Pices(P)', NULL),
('Mohadeb Kumar', '01746019124', 'Face Mask', NULL, 2, 'Pices(P)', NULL),
('Binoy Chandra Debnath', '01705810718', 'Alu', NULL, 5, 'Kilogram(Kg)', NULL),
('Binoy Chandra Debnath', '01705810718', 'Soabin oil', NULL, 1, 'Litter(L)', NULL),
('Binoy Chandra Debnath', '01705810718', 'Aa', NULL, 6, 'Kilogram(Kg)', NULL),
('Binoy Chandra Debnath', '01705810718', 'ডাল', NULL, 2, 'Kilogram(Kg)', NULL),
('Binoy Chandra Debnath', '01705810718', 'আটা', NULL, 1, 'Kilogram(Kg)', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `charge_customer`
--
ALTER TABLE `charge_customer`
  ADD PRIMARY KEY (`PHONE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

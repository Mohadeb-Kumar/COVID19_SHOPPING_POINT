-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 12:55 PM
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
-- Table structure for table `charge_customer_order`
--

CREATE TABLE `charge_customer_order` (
  `REG_NAME` varchar(100) DEFAULT NULL,
  `REG_PHONE` varchar(20) DEFAULT NULL,
  `PRODUCT_NAME` varchar(200) DEFAULT NULL,
  `PRICE` double DEFAULT NULL,
  `QUANTITY` double DEFAULT NULL,
  `UNIT` varchar(50) DEFAULT NULL,
  `TOTAL_PRICE` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_customer_order`
--

INSERT INTO `charge_customer_order` (`REG_NAME`, `REG_PHONE`, `PRODUCT_NAME`, `PRICE`, `QUANTITY`, `UNIT`, `TOTAL_PRICE`) VALUES
('Mohadeb Kumar', '01746019124', 'Alu', NULL, 2, 'Kilogram(Kg)', NULL),
('Mohadeb Kumar', '01746019124', 'Soabin oil', NULL, 1, 'Litter(L)', NULL),
('Mohadeb Kumar', '01746019124', 'Ata', NULL, 5, 'Kilogram(Kg)', NULL),
('', '', 'Potol', NULL, 1, 'Kilogram(Kg)', NULL),
('Mohadeb Kumar', '01746019124', 'Soabin oil', NULL, 1, 'Litter(L)', NULL),
('Priya Rani', '01865983214', 'Soabin oil', NULL, 2, 'Litter(L)', NULL),
('Priya Rani', '01865983214', 'Alu', NULL, 5, 'Kilogram(Kg)', NULL),
('Mohadeb Kumar', '01746019124', 'Soabin oil', NULL, 1, 'Litter(L)', NULL),
('Mohadeb Kumar', '01746019124', 'Soabin oil', NULL, 1, 'Litter(L)', NULL),
('Mohadeb Kumar', '01746019124', 'Alu', NULL, 5, 'Kilogram(Kg)', NULL),
('Mohadeb Kumar', '01746019124', 'Potol', NULL, 5, 'Kilogram(Kg)', NULL),
('Mohadeb Kumar', '01746019124', 'Soabin oil', NULL, 1, 'Litter(L)', NULL),
('Mohadeb Kumar', '01746019124', 'Alu', NULL, 1, 'Kilogram(Kg)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `charge_customer_order_location`
--

CREATE TABLE `charge_customer_order_location` (
  `REG_NAME` varchar(100) DEFAULT NULL,
  `REG_PHONE` varchar(20) DEFAULT NULL,
  `ODR_NAME` varchar(100) DEFAULT NULL,
  `ODR_PHONE` varchar(20) DEFAULT NULL,
  `DIVISION` varchar(100) DEFAULT NULL,
  `DISTRICT` varchar(100) DEFAULT NULL,
  `UPOZILA` varchar(100) DEFAULT NULL,
  `STREET_ADDRESS` varchar(200) DEFAULT NULL,
  `APARTMENT` varchar(200) DEFAULT NULL,
  `ODR_TIME` time DEFAULT NULL,
  `ODR_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_customer_order_location`
--

INSERT INTO `charge_customer_order_location` (`REG_NAME`, `REG_PHONE`, `ODR_NAME`, `ODR_PHONE`, `DIVISION`, `DISTRICT`, `UPOZILA`, `STREET_ADDRESS`, `APARTMENT`, `ODR_TIME`, `ODR_DATE`) VALUES
('Mohadeb Kumar', '01746019124', 'Mohadeb Debnath', '01746019124', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '12:46:49', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Mohadeb Debnath', '01746019124', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '15:19:41', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Mohadeb Debnath', '01746019124', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '15:22:21', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Mohadeb Debnath', '01746019124', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '15:22:40', '2021-01-21'),
('Priya Rani', '01865983214', 'Priya Rani', '01865983214', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '15:29:46', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'user', '01746019124', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '15:55:54', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Bilash Pal', '01931652986', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '15:57:58', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Bilash Pal', '01931652986', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '16:00:33', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Pankaj Pa', '01931652986', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '16:03:18', '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Priya Rani', '01931652986', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '21:00:06', '2021-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `charge_customer_reg`
--

CREATE TABLE `charge_customer_reg` (
  `REG_NAME` varchar(100) DEFAULT NULL,
  `REG_PHONE` varchar(20) NOT NULL,
  `ADDRESS` varchar(200) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_customer_reg`
--

INSERT INTO `charge_customer_reg` (`REG_NAME`, `REG_PHONE`, `ADDRESS`, `PASSWORD`) VALUES
('Binoy Chandra Debnath', '01705810718', 'Karai, Adamdighi, Bogura', '123'),
('Mohadeb Kumar', '01746019124', 'Karai, Adamdighi, Bogura', '123'),
('Priya Rani', '01865983214', 'Robir More, Naogaon Sadar, Naogaon', '123');

-- --------------------------------------------------------

--
-- Table structure for table `charge_order_customer_list`
--

CREATE TABLE `charge_order_customer_list` (
  `REG_NAME` varchar(100) DEFAULT NULL,
  `REG_PHONE` varchar(20) DEFAULT NULL,
  `ODR_NAME` varchar(100) DEFAULT NULL,
  `TOTAL_ODR_PRODUCT` int(11) DEFAULT NULL,
  `ODR_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_order_customer_list`
--

INSERT INTO `charge_order_customer_list` (`REG_NAME`, `REG_PHONE`, `ODR_NAME`, `TOTAL_ODR_PRODUCT`, `ODR_DATE`) VALUES
('Mohadeb Kumar', '01746019124', 'Mohadeb Debnath', 8, '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Mohadeb Debnath', 8, '2021-01-21'),
('Priya Rani', '01865983214', 'Priya Rani', 2, '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Bilash Pal', 8, '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Bilash Pal', 8, '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Pankaj Pa', 1, '2021-01-21'),
('Mohadeb Kumar', '01746019124', 'Priya Rani', 3, '2021-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `removable_customer_order`
--

CREATE TABLE `removable_customer_order` (
  `REG_NAME` varchar(100) DEFAULT NULL,
  `REG_PHONE` varchar(20) DEFAULT NULL,
  `PRODUCT_NAME` varchar(200) DEFAULT NULL,
  `QUANTITY` double DEFAULT NULL,
  `UNIT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `removable_customer_order`
--

INSERT INTO `removable_customer_order` (`REG_NAME`, `REG_PHONE`, `PRODUCT_NAME`, `QUANTITY`, `UNIT`) VALUES
('Mohadeb Kumar', '01746019124', 'Alu', 1, 'Kilogram(Kg)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `charge_customer_reg`
--
ALTER TABLE `charge_customer_reg`
  ADD PRIMARY KEY (`REG_PHONE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

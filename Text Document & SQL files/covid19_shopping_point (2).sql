-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 05:10 PM
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
  `MRP` double DEFAULT NULL,
  `QUANTITY` double DEFAULT NULL,
  `UNIT` varchar(50) DEFAULT NULL,
  `TOTAL_PRICE` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_customer_order`
--

INSERT INTO `charge_customer_order` (`REG_NAME`, `REG_PHONE`, `PRODUCT_NAME`, `MRP`, `QUANTITY`, `UNIT`, `TOTAL_PRICE`) VALUES
('Mohadeb Debnath', '01746019124', 'Soabin oil', NULL, 1, 'Litter(L)', NULL),
('Mohadeb Debnath', '01746019124', 'Potol', NULL, 5, 'Kilogram(Kg)', NULL);

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
('Mohadeb Debnath', '01746019124', 'Mohadeb Debnath', '01746019124', 'Rajshahi', 'Bogura', 'Adamdighi', 'Karai road, Karai', 'Deb Vila', '20:40:51', '2021-01-22');

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
('Mohadeb Debnath', '01746019124', 'Adamdighi, Bogura', '123');

-- --------------------------------------------------------

--
-- Table structure for table `charge_order_customer_list`
--

CREATE TABLE `charge_order_customer_list` (
  `REG_NAME` varchar(100) DEFAULT NULL,
  `REG_PHONE` varchar(20) DEFAULT NULL,
  `ODR_NAME` varchar(100) DEFAULT NULL,
  `TOTAL_ODR_PRODUCT` int(11) DEFAULT NULL,
  `PRICED` varchar(10) DEFAULT NULL,
  `ODR_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charge_order_customer_list`
--

INSERT INTO `charge_order_customer_list` (`REG_NAME`, `REG_PHONE`, `ODR_NAME`, `TOTAL_ODR_PRODUCT`, `PRICED`, `ODR_DATE`) VALUES
('Mohadeb Debnath', '01746019124', 'Mohadeb Debnath', 2, 'NO', '2021-01-22');

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

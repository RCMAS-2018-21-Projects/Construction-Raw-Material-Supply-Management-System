-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2020 at 09:34 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `cust_id` (`cust_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cust_id`, `item_id`, `quantity`) VALUES
(22, 7, 34, 20),
(35, 4, 34, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(7) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(2, 'metal'),
(12, 'brick'),
(13, 'sand');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cheque`
--

DROP TABLE IF EXISTS `tbl_cheque`;
CREATE TABLE IF NOT EXISTS `tbl_cheque` (
  `chq_id` int(7) NOT NULL AUTO_INCREMENT,
  `chq_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chq_bank` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chq_date` date NOT NULL,
  `chq_amt` float(9,2) NOT NULL,
  PRIMARY KEY (`chq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cheque`
--

INSERT INTO `tbl_cheque` (`chq_id`, `chq_no`, `chq_bank`, `chq_date`, `chq_amt`) VALUES
(21, '245645', 'federal bank', '2020-04-25', 15000.00),
(22, '567567', 'canara bank', '2020-11-23', 4268.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_street` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_pin` int(15) NOT NULL,
  `cust_phno` bigint(20) NOT NULL,
  PRIMARY KEY (`cust_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='customerdetails';

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `email`, `cust_name`, `cust_street`, `cust_city`, `cust_district`, `cust_pin`, `cust_phno`) VALUES
(4, 'arjun@gmail.com', 'arjunrajesh', 'kottayam', 'kottayam', 'kochi', 654435, 983455432),
(5, 'thomas@gmail.com', 'thomasjacob', 'kottayam', 'kottayam', 'kottayam', 682347, 982346237),
(7, 'manu@gmail.com', 'manu joseph', 'chowara', 'aluva', 'ernakulam', 683101, 9845675434);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery`
--

DROP TABLE IF EXISTS `tbl_delivery`;
CREATE TABLE IF NOT EXISTS `tbl_delivery` (
  `deliv_id` int(7) NOT NULL AUTO_INCREMENT,
  `veh_regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orma_id` int(7) NOT NULL,
  `deliv_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliv_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`deliv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='deliverydetails';

--
-- Dumping data for table `tbl_delivery`
--

INSERT INTO `tbl_delivery` (`deliv_id`, `veh_regno`, `orma_id`, `deliv_date`, `deliv_status`) VALUES
(15, 'kl-07-4353', 23, '2020-11-12', 'on road'),
(16, 'kl-07-1234', 24, '2020-01-14', 'pending'),
(17, 'NULL', 25, 'NULL', 'pending'),
(38, 'NULL', 46, 'NULL', 'pending'),
(39, 'NULL', 47, 'NULL', 'pending'),
(40, 'NULL', 48, 'NULL', 'pending'),
(41, 'NULL', 49, 'NULL', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE IF NOT EXISTS `tbl_item` (
  `item_id` int(7) NOT NULL AUTO_INCREMENT,
  `cat_id` int(7) NOT NULL,
  `scat_id` int(7) NOT NULL,
  `item_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` float(7,2) NOT NULL,
  `item_img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `cat_id` (`cat_id`),
  KEY `scat_id` (`scat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`item_id`, `cat_id`, `scat_id`, `item_name`, `rate`, `item_img`) VALUES
(33, 12, 6, 'Burned Brick 6\"', 14.00, 'brick.png'),
(34, 2, 7, '4mm', 44.00, '4-mm-metal.png'),
(35, 13, 8, 'M-sand', 35.00, 'M_sand.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`email`, `usertype`, `password`) VALUES
('admin@gmail.com', 'admin', 'admin'),
('akshai@gmail.com', 'staff', 'akshai123'),
('arjun@gmail.com', 'cust', 'arj'),
('manu@gmail.com', 'cust', 'manu123'),
('rahul@gmail.com', 'cust', 'Rahul123'),
('roshan@gmail.com', 'staff', 'roshan'),
('thomas@gmail.com', 'cust', 'thomas123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderchild`
--

DROP TABLE IF EXISTS `tbl_orderchild`;
CREATE TABLE IF NOT EXISTS `tbl_orderchild` (
  `orch_id` int(7) NOT NULL AUTO_INCREMENT,
  `orma_id` int(7) NOT NULL,
  `item_id` int(7) NOT NULL,
  `rate` float(7,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`orch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='orderchilddetails';

--
-- Dumping data for table `tbl_orderchild`
--

INSERT INTO `tbl_orderchild` (`orch_id`, `orma_id`, `item_id`, `rate`, `quantity`) VALUES
(87, 36, 34, 880.00, 20),
(88, 36, 35, 700.00, 20),
(89, 37, 33, 700.00, 50),
(90, 38, 33, 700.00, 50),
(91, 39, 33, 700.00, 50),
(92, 40, 33, 700.00, 50),
(93, 41, 33, 700.00, 50),
(94, 42, 33, 700.00, 50),
(95, 43, 33, 700.00, 50),
(96, 44, 34, 880.00, 20),
(97, 44, 35, 700.00, 20),
(98, 45, 35, 700.00, 20),
(99, 45, 33, 700.00, 50),
(100, 46, 34, 880.00, 20),
(101, 47, 34, 880.00, 20),
(102, 48, 34, 3960.00, 90),
(103, 49, 34, 4400.00, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordermaster`
--

DROP TABLE IF EXISTS `tbl_ordermaster`;
CREATE TABLE IF NOT EXISTS `tbl_ordermaster` (
  `orma_id` int(7) NOT NULL AUTO_INCREMENT,
  `cust_id` int(7) NOT NULL,
  `or_date` date NOT NULL,
  `total_amt` float(12,2) NOT NULL,
  PRIMARY KEY (`orma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_ordermaster`
--

INSERT INTO `tbl_ordermaster` (`orma_id`, `cust_id`, `or_date`, `total_amt`) VALUES
(36, 4, '2020-11-19', 1580.00),
(37, 5, '2020-11-19', 700.00),
(46, 4, '2020-11-19', 880.00),
(47, 4, '2020-11-20', 880.00),
(48, 4, '2020-11-20', 3841.20),
(49, 4, '2020-11-22', 4268.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `pay_id` int(7) NOT NULL AUTO_INCREMENT,
  `orma_id` int(7) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `chq_id` int(7) NOT NULL,
  `pay_mode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_date` date NOT NULL,
  `pay_status` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(10) NOT NULL,
  `total_amt` decimal(12,2) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `orma_id`, `staff_id`, `chq_id`, `pay_mode`, `pay_date`, `pay_status`, `discount`, `total_amt`) VALUES
(27, 23, 0, 0, 'Cash', '2020-11-18', 'pending', 100, '3239.80'),
(40, 48, 16, 21, 'Cheque', '2020-11-20', 'pending', 119, '3841.20'),
(41, 49, 17, 22, 'Cheque', '2020-11-22', 'pending', 132, '4268.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

DROP TABLE IF EXISTS `tbl_staff`;
CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_street` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_pin` int(20) NOT NULL,
  `staff_phno` bigint(20) NOT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `email`, `staff_name`, `staff_street`, `staff_city`, `staff_district`, `staff_pin`, `staff_phno`) VALUES
(16, 'akshai@gmail.com', 'akshai123', 'edap', 'ekm', 'ekm', 67874, 9856234324),
(17, 'roshan@gmail.com', 'roshan', 'kottayam', 'kottayam', 'kotayam', 6823432, 9823472632);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

DROP TABLE IF EXISTS `tbl_subcategory`;
CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `scat_id` int(7) NOT NULL AUTO_INCREMENT,
  `cat_id` int(7) NOT NULL,
  `scat_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`scat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`scat_id`, `cat_id`, `scat_name`) VALUES
(6, 12, 'Burned Bricks'),
(7, 2, 'Metal '),
(8, 13, 'MSAND');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

DROP TABLE IF EXISTS `tbl_supplier`;
CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `sup_id` int(7) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_street` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_pin` int(15) NOT NULL,
  `sup_phno` bigint(20) NOT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`sup_id`, `email`, `sup_name`, `sup_street`, `sup_city`, `sup_district`, `sup_pin`, `sup_phno`) VALUES
(2, 'suppler@gmail.com', 'supplier', 'Angamaly', 'Ernakulam', 'ernakulam', 683581, 98346326237);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

DROP TABLE IF EXISTS `tbl_vehicle`;
CREATE TABLE IF NOT EXISTS `tbl_vehicle` (
  `veh_regno` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veh_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veh_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_phno` bigint(12) NOT NULL,
  PRIMARY KEY (`veh_regno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`veh_regno`, `veh_name`, `veh_type`, `driver_name`, `driver_phno`) VALUES
('kl-07-1234', 'tata ace', '4 wheeler', 'manu', 98345345453),
('kl-07-4353', 'ashok lailand', '6 wheeler', 'phantom', 9863745343);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `tbl_customer` (`cust_id`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`item_id`);

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `fk_custemail` FOREIGN KEY (`email`) REFERENCES `tbl_login` (`email`);

--
-- Constraints for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD CONSTRAINT `tbl_item_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`),
  ADD CONSTRAINT `tbl_item_ibfk_2` FOREIGN KEY (`scat_id`) REFERENCES `tbl_subcategory` (`scat_id`);

--
-- Constraints for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `tbl_login` (`email`);

--
-- Constraints for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD CONSTRAINT `tbl_subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

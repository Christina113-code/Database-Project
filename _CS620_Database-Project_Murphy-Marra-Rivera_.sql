-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2023 at 06:46 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baseball_cards`
--

-- --------------------------------------------------------

--
-- Table structure for table `baseballcard`
--

DROP TABLE IF EXISTS `baseballcard`;
CREATE TABLE IF NOT EXISTS `baseballcard` (
  `card_id` char(10) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `current_value` decimal(10,2) DEFAULT NULL,
  `manufactured_date` date DEFAULT NULL,
  `grade` int DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  PRIMARY KEY (`card_id`)
) ;

--
-- Dumping data for table `baseballcard`
--

INSERT INTO `baseballcard` (`card_id`, `serial_number`, `current_value`, `manufactured_date`, `grade`, `supplier_id`) VALUES
('000100', 'ABC123', '500.00', '2023-10-19', 9, 1234),
('000200', 'XYZ456', '300.00', '2023-10-19', 8, 2345),
('000300', 'AB0002', '900.00', '2023-10-19', 1, 201),
('000400', 'AB0001', '850.00', '2023-10-19', 4, 201),
('000500', 'AB0003', '725.00', '2023-10-19', 8, 250),
('000600', 'BB0004', '1000.00', '2023-10-19', 7, 260),
('000700', 'BB0005', '789.54', '2023-11-29', 6, 270),
('000800', 'BB0006', '1500.00', '2023-11-29', 6, 270);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` char(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` char(5) DEFAULT NULL,
  `postal` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `name`, `address`, `city`, `state`, `postal`, `email`) VALUES
('C22000', 'B Ball Collectors', '100 5th Ave', 'New York', 'NY', '10022', 'bcollector@aol.com'),
('C23000', 'eBay Card & Trading', '2025 Hamilton Avenue', 'San Jose', 'CA', '95125', 'ebaytrade@ebay.com'),
('C24000', 'Amazon Sports', '2021 7th Avenue', 'Seattle', 'WA', '98109', 'amazonsports@amazon.com'),
('C25000', 'World Series sellers', '3051 Seashore Dr', 'Miami', 'FL', '33125', 'amazonsports@amazon.com'),
('C26000', 'U.S. Sports', '1060 W Addison Street', 'Chicago', 'IL', '60613', 'ussports@gmail.com'),
('C28000', 'Sunset Sports Trading', '4500 Sports Arena Blvd', 'San Diego', 'CA', '92110', 'sunsetsports@aol.com'),
('C29100', 'Iona Baseball II', '715 North Ave', 'New Rochelle', 'NY', '10802', '');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `player_id` char(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `RBIs` int DEFAULT NULL,
  `home_runs` int DEFAULT NULL,
  `shirt_number` int DEFAULT NULL,
  `team_id` char(3) DEFAULT NULL,
  PRIMARY KEY (`player_id`),
  KEY `team_id` (`team_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `first_name`, `last_name`, `RBIs`, `home_runs`, `shirt_number`, `team_id`) VALUES
('BR01', 'Babe', 'Ruth', 2215, 714, 3, 'NYY'),
('MM01', 'Mickey', 'Mantle', 1510, 536, 7, 'NYY'),
('LG01', 'Henry Louis', 'Gehrig', 1996, 493, 4, 'NYY'),
('RJ01', 'Reginald Martinez', 'Jackson', 1498, 590, 9, 'LAD'),
('MT01', 'Mike', 'Trout', 1398, 548, 22, 'LAA'),
('MM02', 'Manny', 'Machado', 1300, 528, 12, 'SDP'),
('RH01', 'Ryan', 'Howard', 1194, 382, 6, 'PPL'),
('NY21', 'Derick', 'Jeter', 4551, 456, 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_record`
--

DROP TABLE IF EXISTS `sales_record`;
CREATE TABLE IF NOT EXISTS `sales_record` (
  `item_id` char(5) NOT NULL,
  `customerID` char(10) NOT NULL,
  `soldPrice` decimal(10,2) DEFAULT NULL,
  `dateSold` date DEFAULT NULL,
  `paymentType` char(5) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `customerID` (`customerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sales_record`
--

INSERT INTO `sales_record` (`item_id`, `customerID`, `soldPrice`, `dateSold`, `paymentType`) VALUES
('A1501', 'C22000', '500.22', '2023-10-17', 'CCard'),
('A1502', 'C23000', '2200.00', '2023-10-21', 'Bitc'),
('A1503', 'C23000', '200.99', '2023-09-15', 'Wire'),
('A1504', 'C22000', '75.55', '2023-10-24', 'CCard'),
('A1505', 'C22000', '980.65', '2023-10-27', 'Check'),
('A1506', 'C24000', '90.99', '2023-09-17', 'Check'),
('1900', 'C28000', '995.45', '2023-10-31', 'Wire'),
('a5555', 'C99999', '200.00', '2023-11-13', 'CCard'),
('A1000', 'C999901', '850.88', '2023-11-11', 'Wire'),
('A1507', 'C880000', '1100.22', '2023-10-17', 'Bitc'),
('A1509', 'C880001', '345.66', '2023-10-17', 'Check'),
('A1511', 'C880001', '345.66', '2023-10-17', 'Check'),
('A1512', 'C880002', '435.66', '2023-11-13', 'Wire'),
('A4444', 'C3333333', '450.00', '2023-11-17', 'Wire'),
('A1599', 'C22009', '436.98', '2023-11-26', 'Cash'),
('A1525', 'C22009', '436.98', '2023-11-26', 'Cash'),
('A1526', 'C22009', '436.98', '2023-11-26', 'Cash'),
('A1527', 'C22000', '765.99', '2023-11-26', 'Cash'),
('A1535', 'C22000', '765.99', '2023-11-26', 'Cash'),
('A1577', 'C22000', '67.55', '2023-11-26', 'Cash'),
('A1570', 'C22000', '876.99', '2023-11-26', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

DROP TABLE IF EXISTS `shipment`;
CREATE TABLE IF NOT EXISTS `shipment` (
  `shipment_id` char(10) NOT NULL,
  `pickup_location` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `item_id` int DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  `transportation_type` varchar(10) DEFAULT NULL,
  `date_shipped` date DEFAULT NULL,
  PRIMARY KEY (`shipment_id`),
  KEY `item_id` (`item_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `pickup_location`, `destination`, `item_id`, `supplier_id`, `transportation_type`, `date_shipped`) VALUES
('B007', 'Denver', '16 Fremont Ave', 1100, 1234, 'UPS', '2023-10-31'),
('B002', 'New Rochelle', '652 Richmond Ave', 1200, 2345, 'FedEx', '2023-11-03'),
('B004', 'Brooklyn NY', 'New Rochelle, NY', 1300, 201, 'USPS', '2023-10-17'),
('B0011', 'Brooklyn, NY', 'Los Angeles, CA', 1400, 201, 'FedEx', '2023-10-17'),
('B0012', 'Yonkers, NY', 'Boston, MA', 1500, 250, 'USPS', '2023-11-01'),
('B0013', 'Las Vegas, NV', 'Bayside, NY', 1600, 260, 'UPS', '2023-10-25'),
('B0014', 'Dallas, TX', 'Houston, TX', 1700, 270, 'FedEx', '2023-10-07'),
('B0020', 'Boston, MA', 'Des Moines, IA', 1900, 270, 'UPS', '2023-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` char(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `card_purchased_price` decimal(10,2) DEFAULT NULL,
  `date_purchased` date DEFAULT NULL,
  `card_id` int DEFAULT NULL,
  `shipment_id` int DEFAULT NULL,
  PRIMARY KEY (`supplier_id`),
  KEY `card_id` (`card_id`),
  KEY `shipment_id` (`shipment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `address`, `card_purchased_price`, `date_purchased`, `card_id`, `shipment_id`) VALUES
('1234', 'Tim Berk', '374 blah Rd', '100.00', '2023-10-27', NULL, NULL),
('2345', 'Mark', '30 blah Rd', '75.00', '2023-11-01', NULL, NULL),
('201', 'Brooklyn Dodgers Bas', '800 Fairgrounds', '700.25', '2023-10-25', NULL, NULL),
('250', 'Yonkers Card Trading', '222 Kimball Ave', '800.99', '2023-10-23', NULL, NULL),
('260', 'Sin City Baseball', '4300 The Strip', '990.00', '2023-10-26', NULL, NULL),
('270', 'Gaels Baseball', '715 North Ave', '1500.01', '2023-10-25', NULL, NULL),
('422', 'White Plain Collecti', '333 Main Street', '745.00', '2023-11-02', NULL, NULL),
('500', 'Northeastern Sports', '360 Huntington Ave', '1150.00', '2023-11-02', NULL, NULL),
('600', 'New Rochelle Sports ', '1000 Soundview Pl', '564.35', '2023-11-30', 987, 10034);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` char(10) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `num_players` int DEFAULT NULL,
  `manager` varchar(255) DEFAULT NULL,
  `league` varchar(255) DEFAULT NULL,
  `world_series` int DEFAULT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `num_players`, `manager`, `league`, `world_series`) VALUES
('NYY', 'New York Yankees', 25, 'Joe Smith', 'American League', 27),
('NYM', 'New York Mets', 25, 'Yogi Berra', 'National League', 2),
('TR', 'Texas Rangerss', 26, 'Bruce Douglas Bochy', 'American League', 1),
('CC', 'Chicago Cubs', 27, 'Craig John Counsell', 'National League', 3),
('LAD', 'LA Dodgers', 25, 'Tommy Lasorda', 'National League', 7),
('FLM', 'Florida Marlins', 25, 'Skip Schumaker', 'National League', 2),
('LAA', 'LA Angels', 24, 'Phil Nevin', 'American League', 1),
('SDP', 'San Diego Padres', 24, 'Benji Gil', 'National League', 0),
('PPL', 'Philadelphia Phillies', 28, 'Rob Thomson', 'National League', 2),
('NYR', 'New Rochelle Gaels', 22, 'Arrigoni', 'Minors', 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

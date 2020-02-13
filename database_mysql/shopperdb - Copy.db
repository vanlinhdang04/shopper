-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 03:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopperdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `CatalogID` varchar(10) COLLATE utf8_bin NOT NULL,
  `CatalogName` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`CatalogID`, `CatalogName`) VALUES
('AK', 'Coats'),
('AT', 'T-Shirt'),
('JEAN', 'Jeans'),
('SH', 'Shorts'),
('SM', 'Shirts');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderID` varchar(50) COLLATE utf8_bin NOT NULL,
  `ProductID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Price` varchar(255) COLLATE utf8_bin NOT NULL,
  `Amount` varchar(100) COLLATE utf8_bin NOT NULL,
  `Size` varchar(10) COLLATE utf8_bin NOT NULL,
  `Total` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`OrderID`, `ProductID`, `Price`, `Amount`, `Size`, `Total`) VALUES
('OD_01', 'SM24', '16.77', '1', 's', '16.77'),
('OD_01', 'SM20', '16.77', '1', 'xl', '16.77'),
('OD_01', 'SM20', '16.77', '3', 'l', '50.31'),
('OD_01', 'SM21', '16.77', '1', 'l', '16.77'),
('OD_02', 'SM25', '16.32', '2', 'm', '32.64'),
('OD_03', 'SM23', '16.90', '2', 'l', '33.8'),
('OD_03', 'SM23', '16.90', '1', 's', '16.9'),
('OD_04', 'SM25', '16.32', '1', 'm', '16.32'),
('OD_05', 'AK17', '29.75', '50', 'm', '1487.5'),
('OD_06', 'SM10', '15.09', '10', 'm', '150.9'),
('OD_07', 'SM01', '15.09', '1', 'xl', '15.09'),
('OD_08', 'SM23', '16.90', '3', 'm', '50.7'),
('OD_09', 'SM25', '16.32', '4', 'xl', '65.28'),
('OD_010', 'SM23', '16.90', '4', 'm', '67.6'),
('OD_011', 'SM24', '16.77', '3', 'm', '50.31'),
('OD_011', 'SM24', '16.77', '3', 's', '50.31'),
('OD_011', 'AT04', '10', '1', 'm', '10'),
('OD_012', 'SM23', '16.90', '1', 'l', '16.9'),
('OD_013', 'SM25', '16.32', '1', 'xl', '16.32'),
('OD_014', 'SM24', '16.77', '1', 'xl', '16.77'),
('OD_015', 'SM25', '16.32', '2', 's', '32.64'),
('OD_017', 'SM27', '13.9', '3', 'm', '41.7'),
('OD_018', 'JEAN22', '20', '6', 'm', '120');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(50) COLLATE utf8_bin NOT NULL,
  `UserID` varchar(20) COLLATE utf8_bin NOT NULL,
  `FirstName` varchar(20) COLLATE utf8_bin NOT NULL,
  `LastName` varchar(20) COLLATE utf8_bin NOT NULL,
  `City` varchar(50) COLLATE utf8_bin NOT NULL,
  `CompanyName` varchar(50) COLLATE utf8_bin NOT NULL,
  `Address` varchar(50) COLLATE utf8_bin NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `Phone` varchar(50) COLLATE utf8_bin NOT NULL,
  `Notes` text COLLATE utf8_bin NOT NULL,
  `Total` varchar(50) COLLATE utf8_bin NOT NULL,
  `Status` varchar(10) COLLATE utf8_bin NOT NULL,
  `Created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `FirstName`, `LastName`, `City`, `CompanyName`, `Address`, `Email`, `Phone`, `Notes`, `Total`, `Status`, `Created`) VALUES
('OD_01', '', 'Văn', 'Linh', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', 'minh se ung ho mai', '100.62', '3', '2019-04-17'),
('OD_010', '', 'Đặng Văn', 'Linh', 'Ho Chi Minh', '', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0378945612', 'cc', '67.6', '3', '2019-04-26'),
('OD_011', '', 'Văn', 'Linh', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', 'ok', '110.62', '3', '2019-04-26'),
('OD_012', '', 'Đặng Văn', 'Linh', 'Ho Chi Minh', '', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0378945612', '', '16.9', '3', '2019-04-26'),
('OD_013', '', 'Văn', 'Linh', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', '', '16.32', '2', '2019-04-26'),
('OD_014', 'USER03', 'Đặng Văn', 'Linh', 'Ho Chi Minh', '', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0378945612', '', '16.77', '2', '2019-04-26'),
('OD_015', '', 'Đặng Văn', 'Linh', 'Ho Chi Minh', '', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0378945612', 'ff', '32.64', '1', '2019-05-09'),
('OD_016', 'USER010', 'linh', 'van', 'Da Nang', '', '273 An Dương Vương, Q.5', 'qeqadad@gmail.com', '0963258147', '', '0', '1', '2019-05-10'),
('OD_017', 'USER01', 'Luong Tu', 'Linh', 'Ho Chi Minh', '', '273 An Dương Vương, Q.5', 'hoailinhkt2015@gmail.com', '0365563068', '', '41.7', '2', '2019-05-11'),
('OD_018', 'USER017', 'fbfdbdf', 'fbdfb', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'dfbfdb@gmail.com', '0343240000', '', '120', '3', '2019-05-11'),
('OD_02', '', 'adsad', 'asdsadasdsad', 'Ho Chi Minh', 'asdsadasd', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', '', '32.64', '1', '2019-04-18'),
('OD_03', '', 'adsad', 'asdsadasdsad', 'Ho Chi Minh', 'asdsadasd', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', 'giao nhanh dum', '50.7', '1', '2019-04-18'),
('OD_04', '', 'chi', 'linh', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An duong Vuong, q5', 'vanlinhdang1999@gmail.com', '0767345427', 'áo đẹp lắm mình se mua thêm', '16.32', '1', '2019-04-18'),
('OD_05', '', 'Tuan', 'Dat', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', 'ao như ....', '1487.5', '1', '2019-04-18'),
('OD_06', '', 'kim young ', 'un', 'Thai Binh', 'chinna', '23/01/45', 'nghgg@gmail.com', '0933623304', '', '150.9', '1', '2019-04-18'),
('OD_07', '', 'Văn', 'Linh', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', '', '15.09', '1', '2019-04-19'),
('OD_08', '', 'Văn', 'Linh', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', 'giao nhanh ', '50.7', '1', '2019-04-22'),
('OD_09', '', 'Văn', 'Linh', 'Ho Chi Minh', 'đại học Sài Gòn', '273 An Dương Vương, Q.5', 'vanlinhdang1999@gmail.com', '0395482136', 'giao nhanh dum a a met lam', '65.28', '1', '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(20) NOT NULL,
  `ProductID` varchar(255) COLLATE utf8_bin NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_bin NOT NULL,
  `CatalogID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Color` varchar(255) COLLATE utf8_bin NOT NULL,
  `Price` varchar(255) COLLATE utf8_bin NOT NULL,
  `Amount` int(255) NOT NULL,
  `AmountBuy` int(255) NOT NULL,
  `Image` varchar(255) COLLATE utf8_bin NOT NULL,
  `ImageList` varchar(255) COLLATE utf8_bin NOT NULL,
  `Status` int(10) NOT NULL,
  `Created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `ProductID`, `ProductName`, `CatalogID`, `Color`, `Price`, `Amount`, `AmountBuy`, `Image`, `ImageList`, `Status`, `Created`) VALUES
(1, 'AK01', 'Coats AK01', 'abc', 'blue', '23.29', 31, 0, 'images/ao khoac/AK01.jpg', '', 0, '2019-04-02'),
(2, 'AK02', 'Coats AK02', 'AK', 'blue', '23.29', 30, 0, 'images/AK02.jpg', '', 1, '2019-04-02'),
(3, 'AK03', 'Coats AK03', 'AK', 'blue', '23.29', 35, 0, 'images/ao khoac/AK03.jpg', '', 0, '2019-04-02'),
(4, 'AK04', 'Coats AK04', 'AK', 'black', '23.29', 30, 0, 'images/ao khoac/AK04.jpg', '', 1, '2019-04-02'),
(5, 'AK05', 'Coats AK05', 'AK', 'brown', '21.35', 30, 0, 'images/ao khoac/AK05.jpg', '', 1, '2019-04-02'),
(6, 'AK06', 'Coats AK06', 'AK', 'white', '21.35', 30, 0, 'images/ao khoac/AK06.jpg', '', 1, '2019-04-02'),
(7, 'AK07', 'Coats AK07', 'AK', 'black', '21.35', 30, 0, 'images/ao khoac/AK07.jpg', '', 1, '2019-04-02'),
(8, 'AK08', 'Coats AK08', 'AK', 'gray', '21.35', 30, 0, 'images/ao khoac/AK08.jpg', '', 1, '2019-04-02'),
(9, 'AK09', 'Coats AK09', 'AK', 'white', '15.52', 30, 0, 'images/ao khoac/AK09.jpg', '', 1, '2019-04-02'),
(10, 'AK10', 'Coats AK10', 'AK', 'blue', '15.52', 30, 0, 'images/ao khoac/AK10.jpg', '', 1, '2019-04-02'),
(11, 'AK11', 'Coats AK11', 'AK', 'blue', '15.52', 30, 0, 'images/ao khoac/AK11.jpg', '', 1, '2019-04-02'),
(12, 'AK12', 'Coats AK12', 'AK', 'white', '15.52', 30, 0, 'images/ao khoac/AK12.jpg', '', 1, '2019-04-02'),
(13, 'AK13', 'Coats AK13', 'AK', 'gray', '15.52', 30, 0, 'images/ao khoac/AK13.jpg', '', 1, '2019-04-02'),
(14, 'AK14', 'Coats AK14', 'AK', 'black', '15.52', 30, 0, 'images/ao khoac/AK14.jpg', '', 1, '2019-04-02'),
(15, 'AK15', 'Coats AK15', 'AK', 'blue', '18.11', 30, 0, 'images/ao khoac/AK15.jpg', '', 1, '2019-04-02'),
(16, 'AK16', 'Coats AK16', 'AK', 'white', '15.52', 30, 0, 'images/ao khoac/AK16.jpg', '', 1, '2019-04-02'),
(17, 'AK17', 'Coats AK17', 'AK', 'gray', '29.75', 30, 0, 'images/ao khoac/AK17.jpg', '', 1, '2019-04-02'),
(18, 'AK18', 'Coats AK02', 'AK', 'blue', '29.75', 30, 0, 'images/ao khoac/AK19.jpg', '', 1, '2019-04-02'),
(19, 'AK19', 'Coats AK19', 'AK', 'brown', '29.75', 30, 0, 'images/ao khoac/AK19.jpg', '', 1, '2019-04-02'),
(20, 'AK20', 'Coats AK20', 'AK', 'blue', '23.29', 30, 0, 'images/ao khoac/AK20.jpg', '', 1, '2019-04-02'),
(21, 'AT01', 'T-Shirt AT01', 'AT', 'white', '10', 12, 0, 'images/ao thun/AT01.jpg', '', 0, '2019-04-01'),
(22, 'AT02', 'T-Shirt AT02', 'AT', 'gray', '12', 16, 0, 'images/AT02.jpg', '', 1, '2019-04-01'),
(23, 'AT03', 'T-Shirt AT03', 'AT', 'blue', '10', 23, 0, 'images/ao thun/AT03.jpg', '', 1, '2019-04-01'),
(24, 'AT04', 'T-Shirt AT04', 'AT', 'black', '10', 30, 0, 'images/ao thun/AT04.jpg', '', 1, '2019-04-01'),
(25, 'AT05', 'T-Shirt AT05', 'AT', 'black', '13', 20, 0, 'images/ao thun/AT05.jpg', '', 1, '2019-04-01'),
(26, 'AT06', 'T-Shirt AT06', 'AT', 'white', '10', 15, 0, 'images/ao thun/AT06.jpg', '', 1, '2019-04-01'),
(27, 'AT07', 'T-Shirt AT07', 'AT', 'white', '10', 22, 0, 'images/ao thun/AT07.jpg', '', 1, '2019-04-01'),
(28, 'AT08', 'T-Shirt AT08', 'AT', 'blue', '13', 17, 0, 'images/ao thun/AT08.jpg', '', 1, '2019-04-01'),
(29, 'AT09', 'T-Shirt AT09', 'AT', 'white', '13', 17, 0, 'images/ao thun/AT09.jpg', '', 1, '2019-04-01'),
(30, 'AT10', 'T-Shirt AT10', 'AT', 'gray', '12', 23, 0, 'images/ao thun/AT10.jpg', '', 1, '2019-04-01'),
(31, 'AT11', 'T-Shirt AT11', 'AT', 'white', '12', 15, 0, 'images/ao thun/AT11.jpg', '', 1, '2019-04-01'),
(32, 'AT13', 'T-Shirt AT13', 'AT', 'blue', '13', 23, 0, 'images/ao thun/AT13.jpg', '', 1, '2019-04-01'),
(33, 'AT14', 'T-Shirt AT14', 'AT', 'white', '13', 22, 0, 'images/ao thun/AT14.jpg', '', 1, '2019-04-01'),
(34, 'AT15', 'T-Shirt AT15', 'AT', 'gray', '13', 12, 0, 'images/ao thun/AT15.jpg', '', 1, '2019-04-01'),
(35, 'AT16', 'T-Shirt AT16', 'AT', 'blue', '13', 13, 0, 'images/ao thun/AT16.jpg', '', 1, '2019-04-01'),
(36, 'AT17', 'T-Shirt AT17', 'AT', 'brown', '12', 12, 0, 'images/ao thun/AT17.jpg', '', 1, '2019-04-01'),
(37, 'AT18', 'T-Shirt AT18', 'AT', 'white', '12', 22, 0, 'images/ao thun/AT18.jpg', '', 1, '2019-04-01'),
(38, 'AT19', 'T-Shirt AT19', 'AT', 'black', '12', 15, 0, 'images/ao thun/AT19.jpg', '', 1, '2019-04-01'),
(39, 'AT20', 'T-Shirt AT20', 'AT', 'white', '14', 25, 0, 'images/ao thun/AT29.jpg', '', 1, '2019-04-01'),
(40, 'AT21', 'T-Shirt AT21', 'AT', 'black', '14', 22, 0, 'images/ao thun/AT21.jpg', '', 1, '2019-04-01'),
(41, 'AT22', 'T-Shirt AT22', 'AT', 'white', '14', 16, 0, 'images/ao thun/AT22.jpg', '', 1, '2019-04-01'),
(42, 'AT23', 'T-Shirt AT23', 'AT', 'black', '14', 19, 0, 'images/ao thun/AT23.jpg', '', 1, '2019-04-01'),
(43, 'AT25', 'T-Shirt AT25', 'AT', 'white', '11', 19, 0, 'images/ao thun/AT25.jpg', '', 1, '2019-04-01'),
(44, 'AT26', 'T-Shirt AT26', 'AT', 'white', '10', 15, 0, 'images/ao thun/AT26.jpg', '', 1, '2019-04-01'),
(45, 'AT27', 'T-Shirt AT27', 'AT', 'white', '10', 20, 0, 'images/ao thun/AT27.jpg', '', 1, '2019-04-01'),
(46, 'AT28', 'T-Shirt AT28', 'AT', 'black', '11.17', 15, 0, 'images/ao thun/AT28.jpg', '', 1, '2019-04-01'),
(47, 'AT29', 'T-Shirt AT29', 'AT', 'white', '11.60', 30, 0, 'images/ao thun/AT29.jpg', '', 1, '2019-04-01'),
(48, 'AT30', 'T-Shirt AT30', 'AT', 'white', '11.60', 25, 0, 'images/ao thun/AT30.jpg', '', 1, '2019-04-01'),
(49, 'AT31', 'T-Shirt AT31', 'AT', 'white', '12.03', 25, 0, 'images/ao thun/AT31.jpg', '', 1, '2019-04-01'),
(50, 'AT32', 'T-Shirt AT32', 'AT', 'white', '12.03', 30, 0, 'images/ao thun/AT32.jpg', '', 1, '2019-04-01'),
(51, 'AT33', 'T-Shirt AT33', 'AT', 'white', '11.60', 30, 0, 'images/ao thun/AT33.jpg', '', 1, '2019-04-01'),
(52, 'AT36', 'T-Shirt AT36', 'AT', 'white', '12.03', 30, 0, 'images/ao thun/AT36.jpg', '', 1, '2019-04-01'),
(53, 'AT37', 'T-Shirt AT37', 'AT', 'white', '11.60', 20, 0, 'images/ao thun/AT37.jpg', '', 1, '2019-04-01'),
(54, 'AT38', 'T-Shirt AT38', 'AT', 'white', '12.03', 30, 0, 'images/ao thun/AT38.jpg', '', 1, '2019-04-01'),
(55, 'AT39', 'T-Shirt AT39', 'AT', 'white', '12.03', 20, 0, 'images/ao thun/AT39.jpg', '', 1, '2019-04-01'),
(56, 'AT41', 'T-Shirt AT41', 'AT', 'white', '11.60', 20, 0, 'images/ao thun/AT41.jpg', '', 1, '2019-04-01'),
(57, 'AT42', 'T-Shirt AT42', 'AT', 'blue', '11.60', 25, 0, 'images/ao thun/AT42.jpg', '', 1, '2019-04-01'),
(58, 'AT43', 'T-Shirt AT43', 'AT', 'blue', '11.60', 20, 0, 'images/ao thun/AT43.jpg', '', 1, '2019-04-01'),
(59, 'AT44', 'T-Shirt AT44', 'AT', 'gray', '11.60', 30, 0, 'images/ao thun/AT44.jpg', '', 1, '2019-04-01'),
(60, 'AT45', 'T-Shirt AT45', 'AT', 'white', '11.60', 30, 0, 'images/ao thun/AT45.jpg', '', 1, '2019-04-01'),
(61, 'JEAN01', 'Jeans 01', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN01.jpg', '', 1, '2019-04-03'),
(62, 'JEAN02', 'Jeans 02', 'JEAN', 'black', '21.13', 30, 0, 'images/jean/JEAN02.jpg', '', 1, '2019-04-03'),
(63, 'JEAN03', 'Jeans 03', 'JEAN', 'black', '21.13', 30, 0, 'images/jean/JEAN03.jpg', '', 1, '2019-04-03'),
(64, 'JEAN04', 'Jeans 04', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN04.jpg', '', 1, '2019-04-03'),
(65, 'JEAN05', 'Jeans 05', 'JEAN', 'blue', '19.40', 30, 0, 'images/jean/JEAN05.jpg', '', 1, '2019-04-03'),
(66, 'JEAN06', 'Jeans 06', 'JEAN', 'blue', '19.40', 30, 0, 'images/jean/JEAN06.jpg', '', 1, '2019-04-03'),
(67, 'JEAN07', 'Jeans 07', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN07.jpg', '', 1, '2019-04-03'),
(68, 'JEAN08', 'Jeans 08', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN08.jpg', '', 1, '2019-04-03'),
(69, 'JEAN09', 'Jeans 09', 'JEAN', 'black', '21.13', 30, 0, 'images/jean/JEAN09.jpg', '', 1, '2019-04-03'),
(70, 'JEAN10', 'Jeans 10', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN10.jpg', '', 1, '2019-04-03'),
(71, 'JEAN11', 'Jeans 11', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN11.jpg', '', 1, '2019-04-03'),
(72, 'JEAN12', 'Jeans 12', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN12.jpg', '', 1, '2019-04-03'),
(73, 'JEAN13', 'Jeans 13', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN13.jpg', '', 1, '2019-04-03'),
(74, 'JEAN14', 'Jeans 14', 'JEAN', 'black', '21.13', 30, 0, 'images/jean/JEAN14.jpg', '', 1, '2019-04-03'),
(75, 'JEAN15', 'Jeans 15', 'JEAN', 'black', '21.13', 30, 0, 'images/jean/JEAN15.jpg', '', 1, '2019-04-03'),
(76, 'JEAN16', 'Jeans 16', 'JEAN', 'blue', '21.13', 30, 0, 'images/jean/JEAN16.jpg', '', 1, '2019-04-03'),
(77, 'JEAN17', 'Jeans 17', 'JEAN', 'white', '18.54', 30, 0, 'images/jean/JEAN17.jpg', '', 1, '2019-04-03'),
(78, 'JEAN18', 'Jeans 18', 'JEAN', 'black', '21.13', 30, 0, 'images/jean/JEAN11.jpg', '', 1, '2019-04-03'),
(79, 'JEAN19', 'Jeans 19', 'JEAN', 'white', '18.54', 30, 0, 'images/jean/JEAN19.jpg', '', 1, '2019-04-03'),
(80, 'JEAN20', 'Jeans 20', 'JEAN', 'black', '20.40', 30, 0, 'images/jean/JEAN20.jpg', '', 1, '2019-04-03'),
(81, 'SHORT01', 'Shorts 01', 'SH', 'blue', '13.36', 30, 0, 'images/shorts/SHORT01.jpg', '', 1, '2019-04-03'),
(82, 'SHORT02', 'Shorts 02', 'SH', 'black', '13.36', 30, 0, 'images/shorts/SHORT02.jpg', '', 1, '2019-04-03'),
(83, 'SHORT03', 'Short 03', 'SH', 'black', '13.36', 30, 0, 'images/shorts/SHORT03.jpg', '', 1, '2019-04-03'),
(84, 'SHORT04', 'Short 04', 'SH', 'black', '13.36', 30, 0, 'images/shorts/SHORT04.jpg', '', 1, '2019-04-03'),
(85, 'SHORT05', 'Short 05', 'SH', 'blue', '13.36', 30, 0, 'images/shorts/SHORT05.jpg', '', 1, '2019-04-03'),
(86, 'SHORT06', 'Short 06', 'SH', 'gray', '13.36', 30, 0, 'images/shorts/SHORT06.jpg', '', 1, '2019-04-03'),
(87, 'SHORT07', 'Short 07', 'SH', 'white', '13.36', 30, 0, 'images/shorts/SHORT07.jpg', '', 1, '2019-04-03'),
(88, 'SHORT08', 'Short 08', 'SH', 'blue', '13.36', 30, 0, 'images/shorts/SHORT08.jpg', '', 1, '2019-04-03'),
(89, 'SHORT09', 'Short 09', 'SH', 'black', '13.36', 30, 0, 'images/shorts/SHORT09.jpg', '', 1, '2019-04-03'),
(90, 'SHORT10', 'Short 10', 'SH', 'black', '13.36', 30, 0, 'images/shorts/SHORT10.jpg', '', 1, '2019-04-03'),
(91, 'SHORT11', 'Short 11', 'SH', 'black', '13.36', 30, 0, 'images/shorts/SHORT11.jpg', '', 1, '2019-04-03'),
(92, 'SHORT12', 'Short 12', 'SH', 'blue', '13.36', 30, 0, 'images/shorts/SHORT12.jpg', '', 1, '2019-04-03'),
(93, 'SM01', 'Shirts SM01', 'SM', 'white', '15.09', 20, 0, 'images/somi/SM01.jpg', 'images/somi/SM01_01.jpg,,images/somi/SM01_02.jpg,,images/somi/SM01_03.jpg', 1, '2019-04-01'),
(94, 'SM02', 'Shirts SM02', 'SM', 'black', '15.96', 10, 0, 'images/somi/SM02.jpg', 'images/somi/SM02_01.jpg,,images/somi/SM02_02.jpg,,images/somi/SM02_03.jpg', 1, '2019-04-01'),
(95, 'SM03', 'Shirts SM03', 'SM', 'blue', '15.09', 20, 0, 'images/somi/SM03.jpg', '', 1, '2019-04-01'),
(96, 'SM05', 'Shirts SM05', 'SM', 'blue', '16.39', 10, 0, 'images/somi/SM05.jpg', '', 1, '2019-04-01'),
(97, 'SM06', 'Shirts SM06', 'SM', 'blue', '15.09', 20, 0, 'images/somi/SM06.jpg', '', 1, '2019-04-01'),
(98, 'SM07', 'Shirts SM07', 'SM', 'blue', '12.07', 15, 0, 'images/somi/SM07.jpg', '', 1, '2019-04-01'),
(99, 'SM08', 'Shirts SM08', 'SM', 'black', '16.39', 20, 0, 'images/somi/SM08.jpg', '', 1, '2019-04-01'),
(100, 'SM09', 'Shirts SM09', 'SM', 'gray', '17', 20, 0, 'images/somi/SM09.jpg', '', 1, '2019-04-01'),
(101, 'SM10', 'Shirts SM10', 'SM', 'black', '15.09', 25, 0, 'images/somi/SM10.jpg', '', 1, '2019-04-01'),
(102, 'SM11', 'Shirts SM11', 'SM', 'white', '16', 20, 0, 'images/somi/SM11.jpg', '', 1, '2019-04-01'),
(103, 'SM12', 'Shirts SM12', 'SM', 'white', '16', 20, 0, 'images/somi/SM12.jpg', '', 1, '2019-04-01'),
(104, 'SM13', 'Shirts SM13', 'SM', 'gray', '15.96', 20, 0, 'images/somi/SM13.jpg', '', 1, '2019-04-01'),
(105, 'SM14', 'Shirts SM14', 'SM', 'black', '16.77', 30, 0, 'images/somi/SM14.jpg', '', 1, '2019-04-02'),
(106, 'SM15', 'Shirt SM15', 'SM', 'white', '16.90', 30, 0, 'images/somi/SM15.jpg', '', 1, '2019-04-02'),
(107, 'SM16', 'Shirts SM16', 'SM', 'blue', '16.90', 30, 0, 'images/somi/SM16.jpg', '', 1, '2019-04-02'),
(108, 'SM17', 'Shirt SM17', 'SM', 'white', '16.90', 30, 0, 'images/somi/SM17.jpg', '', 1, '2019-04-02'),
(109, 'SM18', 'Shirts SM18', 'SM', 'white', '16.32', 30, 0, 'images/somi/SM18.jpg', '', 1, '2019-04-02'),
(110, 'SM19', 'Shirt SM19', 'SM', 'gray', '16.90', 30, 0, 'images/somi/SM19.jpg', '', 1, '2019-04-02'),
(111, 'SM20', 'Shirts SM20', 'SM', 'blue', '16.77', 30, 0, 'images/somi/SM20.jpg', '', 1, '2019-04-02'),
(112, 'SM21', 'Shirt SM21', 'SM', 'white', '16.77', 30, 0, 'images/somi/SM21.jpg', '', 1, '2019-04-02'),
(113, 'SM22', 'Shirts SM22', 'SM', 'white', '16.32', 30, 0, 'images/somi/SM22.jpg', '', 1, '2019-04-02'),
(114, 'SM23', 'Shirt SM23', 'SM', 'white', '16.90', 30, 0, 'images/somi/SM23.jpg', 'images/somi/SM23_01.jpg,,images/somi/SM23_02.jpg,,images/somi/SM23_03.jpg,,images/somi/SM23_04.jpg', 1, '2019-04-02'),
(115, 'SM24', 'Shirts SM24', 'SM', 'white', '16.77', 30, 0, 'images/somi/SM24.jpg', '', 1, '2019-04-02'),
(116, 'SM25', 'Shirt SM25', 'SM', 'white', '16.32', 30, 0, 'images/somi/SM25.jpg', '', 1, '2019-04-02'),
(117, 'JEAN21', 'JEANS 21', 'JEAN', 'blue', '20.60', 30, 0, 'images/jean/JEAN21.jpg', 'images/jean/JEAN21_01.jpg', 1, '2019-05-11'),
(118, 'AK21', 'Coats AK21', 'AK', 'black', '19.50', 30, 0, 'images/ao khoac/AK21.jpg', 'images/ao khoac/AK21_01.jpg,,images/ao khoac/AK21_02.jpg,,images/ao khoac/AK21_03.jpg', 1, '2019-05-11'),
(119, 'SHORT13', 'Shorts 13', 'SH', 'white', '15.50', 30, 0, 'images/shorts/SHORT13.jpg', 'images/shoets/SHORTS13_01.jpg', 1, '2019-05-11'),
(120, 'SM26', 'Shirts SM26', 'SM', 'white', '15.30', 30, 0, 'images/SM26.jpg', 'images/SM26_01.jpg,,images/SM26_02.jpg', 1, '2019-05-11'),
(121, 'AT46', 'T-Shirt AT46', 'AT', 'white', '10.6', 30, 0, 'images/AT46.jpg', 'images/ao thun/AT46_01.jpg,,images/ao thun/AT46_02.jpg,,images/ao thun/AT46_03.jpg', 1, '2019-05-11'),
(122, 'JEAN22', 'JEANS 22', 'JEAN', 'blue', '20', 30, 0, 'images/JEAN22.jpg', 'images/jean/JEAN22_01.jpg', 1, '2019-05-11'),
(123, 'SM27', 'Shirts SM27', 'SM', 'black', '13.9', 35, 0, 'images/SM27.jpg', 'images/somi/SM27_01.jpg,,images/somi/SM27_02.jpg,,images/somi/SM27_03.jpg', 1, '2019-05-11'),
(124, 'AT47', 'T-Shirt AT47', 'AT', 'white', '10.2', 30, 0, 'images/AT47.jpg', 'images/ao thun/AT47_01.jpg,,images/ao thun/AT47_02.jpg,,images/ao thun/AT47_03.jpg', 1, '2019-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Roleid` int(255) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Roleid`, `Role`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Userid` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Roleid` int(255) NOT NULL,
  `Create` date NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Userid`, `Username`, `Password`, `Firstname`, `Lastname`, `Phone`, `Email`, `Roleid`, `Create`, `Status`) VALUES
('USER01', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Luong Tu', 'Linh', '0365563068', 'hoailinhkt2015@gmail.com', 1, '2019-04-19', 1),
('USER010', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'linh', 'van', '0963258147', 'qeqadad@gmail.com', 3, '2019-04-21', 1),
('USER011', 'test1', 'e10adc3949ba59abbe56e057f20f883e', 'nhat', 'quyen', '0326514856', 'jsak@gmail.com', 2, '2019-04-21', 1),
('USER012', 'asdf', 'e10adc3949ba59abbe56e057f20f883e', 'Văn', 'Linh', '0395482136', 'vanlinhdang1999@gmail.com', 3, '2019-04-22', 0),
('USER013', 'qwert', 'e10adc3949ba59abbe56e057f20f883e', 'Văn', 'Linh', '0395482135', 'vanlinhdang199@gmail.com', 3, '2019-04-22', 1),
('USER014', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'Văn', 'Linh', '0395482137', 'vanlinhdangbede@gmail.com', 2, '2019-04-25', 1),
('USER015', 'huypham', 'e10adc3949ba59abbe56e057f20f883e', 'huy', 'pham', '0767328271', 'huyphamnguyenminh99@yahoo.com', 2, '2019-05-07', 1),
('USER016', 'admin10', 'e10adc3949ba59abbe56e057f20f883e', 'linh', 'van', '0963258145', 'qeqadgd@gmail.com', 3, '2019-05-10', 1),
('USER017', 'abc', 'e10adc3949ba59abbe56e057f20f883e', 'fbfdbdf', 'fbdfb', '0343240000', 'dfbfdb@gmail.com', 3, '2019-05-11', 1),
('USER02', 'manager', 'e10adc3949ba59abbe56e057f20f883e', 'Van', 'Linh', '0393456786', 'vanlinhdang@gmail.com', 2, '2019-04-19', 1),
('USER03', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Dinh', 'Khuong', '0938546223', 'qweasdzxc@gmail.com', 3, '2019-04-19', 1),
('USER04', 'user0', '25d55ad283aa400af464c76d713c07ad', 'Nhat', 'Quyen', '0369258147', 'asdfgh@gmai.com', 3, '2019-04-19', 1),
('USER05', 'linh02', '25f9e794323b453885f5181f1b624d0b', 'va', 'li', '0852147369', 'lilili@gmail.com', 3, '2019-04-21', 1),
('USER06', 'lollol', '25f9e794323b453885f5181f1b624d0b', 'va', 'li', '0987654321', 'qweasdlk@gmail.com', 3, '2019-04-21', 1),
('USER07', 'qqqqq', '25f9e794323b453885f5181f1b624d0b', 'a', 'a', '0357159258', 'qpqkodjqo@gmail.com', 3, '2019-04-21', 1),
('USER08', 'asdfgh', 'e10adc3949ba59abbe56e057f20f883e', 'a', 'a', '0925486215', 'afhasih@gmail.com', 3, '2019-04-21', 1),
('USER09', 'asgajd', 'e10adc3949ba59abbe56e057f20f883e', 'qw', 'qw', '0935854835', 'askd@gmail.com', 3, '2019-04-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`CatalogID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD KEY `OrderID` (`OrderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Roleid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Userid`),
  ADD KEY `Roleid` (`Roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Roleid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 03:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_458`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `uid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwds` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`uid`, `pwds`) VALUES
('masud', 'masud');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `card_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `card_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `card_program` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `card_intake` int(3) NOT NULL,
  `card_blood` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `card_barcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `card_date` date DEFAULT NULL,
  `card_photo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`card_ID`, `card_name`, `card_program`, `card_intake`, `card_blood`, `card_barcode`, `card_date`, `card_photo`) VALUES
('1001', 'Abraham', 'CSE', 12, 'AB-', 'b8c37e33de', '2022-11-21', 'index.jpg'),
('1002', 'Xion', 'EEE', 15, 'B-', 'fba9d88164', '2022-11-27', 'asght.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `card_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `card_password` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `card_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`card_ID`, `card_password`, `card_status`) VALUES
('1001', '9760', 0),
('1002', '2017', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`card_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`card_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

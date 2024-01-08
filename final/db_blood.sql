-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 02:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood`
--

CREATE TABLE `tbl_blood` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `blood_group` varchar(3) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `address` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blood`
--

INSERT INTO `tbl_blood` (`id`, `name`, `blood_group`, `area`, `address`, `gender`, `age`) VALUES
(1001, 'eyamin', 'O+', 'Mirpur', 'Dhaka', 'Male', 23),
(1002, 'Rakib', 'O-', 'Dhanmondi', 'Dhaka', 'Male', 28),
(1003, 'Nahian', 'A+', 'Mohammadpur', 'Jessore', 'Male', 90),
(1004, 'Maisaa', 'AB-', 'Khulna Sadar', 'Khulna', 'Female', 45),
(101, 'Mohibbullah vai', 'C+', 'Dhaka sadar', 'mirpur', 'Male', 55);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

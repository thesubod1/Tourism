-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 11:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Full_Name` char(100) DEFAULT NULL,
  `Gender` char(10) DEFAULT NULL,
  `Age` date DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Profile_Pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Full_Name`, `Gender`, `Age`, `Email`, `Password`, `Profile_Pic`) VALUES
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png'),
('Subodh Dahal', 'Male', '2000-05-17', 'thesubodh1@gmail.com', '1234567890', 'Java frame 8_25_2022 8_56_47 PM.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

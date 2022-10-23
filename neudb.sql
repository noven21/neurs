-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 04:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `AID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `profilePicture` varchar(300) DEFAULT NULL,
  `isActive` int(11) NOT NULL,
  `ModifiedBy` varchar(100) NOT NULL,
  `DateModified` varchar(100) NOT NULL,
  `UserType` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`AID`, `Username`, `Password`, `FirstName`, `LastName`, `Birthday`, `Gender`, `Address`, `Email`, `profilePicture`, `isActive`, `ModifiedBy`, `DateModified`, `UserType`) VALUES
(1, 'admin', 'admin', 'Junex Xd', 'Rainin', '0000-00-00', '', NULL, NULL, NULL, 1, '', '', 'admin'),
(2, 'user1', '1234567', 'ONie', '88', '1998-02-21', 'Male', 'val city PH', 'onienie19@gmail.com', NULL, 1, '', '', 'user'),
(3, 'user2', '123456', 'Akoko', 'Jskske', '2020-05-24', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(4, 'user3', '123456', 'samp12', 'sam', '2020-05-24', 'Male', '', '', NULL, 1, '', '', 'user'),
(5, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(6, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(7, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(8, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(9, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(10, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(11, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(12, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(13, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(14, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(15, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(16, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(17, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(18, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(19, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(20, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(21, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(22, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(23, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(24, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(25, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(26, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(27, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(28, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(29, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(30, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(31, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(32, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(33, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(34, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(35, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(36, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(37, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(38, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(39, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(40, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(41, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(42, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(43, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(44, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(45, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(46, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(47, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(48, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(49, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(50, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(51, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(52, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(53, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(54, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(55, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(56, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(57, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(58, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(59, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(60, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(61, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(62, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(63, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(64, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(65, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(66, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(67, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(68, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(69, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(70, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(71, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 0, '', '', 'user'),
(72, 'Kxks', 'jsjsjs', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(73, 'Kxks', 'udjsus', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(74, 'Kxks', '0wpsosow', 'mzmz', 'Jsjs', '2020-05-25', 'Male', NULL, NULL, NULL, 1, '', '', 'user'),
(75, 'onie88', '123456', 'Jasonnnnnnxx', 'Trestizaksksnxns', '1997-01-30', 'Male', 'Bsnxmzks', 'Jsksnxnx', NULL, 1, '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `itemNo` int(11) NOT NULL,
  `itemName` varchar(30) DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`itemNo`, `itemName`, `isActive`) VALUES
(1, 'Projector 1', 1),
(2, 'Projector 2', 1),
(3, 'Projector 3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `resID` int(11) NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `roomNo` int(20) DEFAULT NULL,
  `itemNo` int(30) DEFAULT NULL,
  `Instructor` varchar(50) NOT NULL,
  `collegeDepartment` varchar(30) NOT NULL,
  `contactNumber` varchar(30) NOT NULL,
  `isDone` int(11) DEFAULT NULL,
  `Remarks` varchar(150) DEFAULT NULL,
  `dateApplied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`resID`, `start`, `end`, `studentID`, `roomNo`, `itemNo`, `Instructor`, `collegeDepartment`, `contactNumber`, `isDone`, `Remarks`, `dateApplied`) VALUES
(1, '2020-05-25 15:00:00', '2020-05-25 18:00:00', 2, 1, 1, 'Teacher Blabla', 'CAS', '0443311', 1, NULL, '2020-05-23 15:21:31'),
(2, '2020-05-25 12:00:00', '2020-05-25 15:00:00', 2, 2, 2, 'Okok', 'Pop', 'Kaka', 1, NULL, '2020-05-23 15:45:07'),
(4, '2020-05-27 16:00:00', '2020-05-27 17:00:00', 2, 2, 2, 'Pvpvpv', 'Ockxkx', 'Jajaja', 1, NULL, '2020-05-23 16:48:16'),
(5, '2020-05-27 16:00:00', '2020-05-27 17:00:00', 2, 1, 2, 'Pvpvpv', 'Ockxkx', 'Jajaja', 1, NULL, '2020-05-23 16:51:53'),
(6, '2020-05-27 16:00:00', '2020-05-27 17:00:00', 2, 6, 2, 'Pvpvpv', 'Ockxkx', 'Jajaja', 1, NULL, '2020-05-23 17:03:12'),
(8, '2020-05-26 12:30:00', '2020-05-26 13:00:00', 2, 1, 2, 'Pvpvpv', 'Ockxkx', 'Jajaja', 1, NULL, '2020-05-23 17:19:11'),
(9, '2020-05-28 12:00:00', '2020-05-28 13:00:00', 2, 1, 1, 'Kckck', 'Mcmc', 'Nznx', 1, NULL, '2020-05-23 17:21:17'),
(12, '2020-05-28 12:30:00', '2020-05-28 13:00:00', 2, 2, 1, 'Kckck', 'Mcmc', 'Nznx', 1, NULL, '2020-05-23 17:32:48'),
(13, '2020-05-28 12:30:00', '2020-05-28 13:00:00', 2, 1, 1, 'Kckck', 'Mcmc', 'Nznx', 1, NULL, '2020-05-23 17:37:20'),
(14, '2020-05-29 17:00:00', '2020-05-29 18:00:00', 2, 1, 1, 'Jckc', 'Lvlv', 'Hqhaha', 1, NULL, '2020-05-23 17:58:51'),
(25, '2020-05-29 17:40:00', '2020-05-29 20:00:00', 2, 2, 2, 'Nnnm', 'Jsjs', 'Hxhx', 1, NULL, '2020-05-23 19:16:50'),
(27, '2020-05-29 21:00:00', '2020-05-29 22:00:00', 2, 1, 1, 'Nnnm', 'Jsjs', 'Hxhx', 1, NULL, '2020-05-23 19:24:34'),
(28, '2020-05-24 18:00:00', '2020-05-24 19:00:00', 4, 1, 1, 'Teacher Blabla', 'IT', '434343', 1, NULL, '2020-05-24 18:42:13'),
(29, '2020-05-27 12:00:00', '2020-05-27 13:00:00', 2, 1, 1, 'sdfsd', '11', 'werfwer', 1, NULL, '2020-05-27 12:51:34'),
(32, '2020-05-27 14:00:00', '2020-05-27 15:00:00', 2, 1, 1, 'Teacher Blabla', 'CAS', '09255721656', 1, NULL, '2020-05-27 14:13:02'),
(33, '2020-05-28 07:00:00', '2020-05-28 08:00:00', 75, 1, 1, 'Teacher Onie', 'IT', '09663382625', 1, NULL, '2020-05-28 00:56:23'),
(34, '2020-05-28 12:00:00', '2020-05-28 13:00:00', 2, 1, 1, 'Teacher Blabla', 'CAS', '0443311', 0, NULL, '2020-05-28 13:42:47'),
(35, '2020-05-28 12:00:00', '2020-05-28 13:00:00', 2, 2, 2, 'Teacher Blabla', 'IT', '09755721626', 0, NULL, '2020-05-28 13:47:14'),
(36, '2020-05-28 12:30:00', '2020-05-28 13:30:00', 2, 6, 3, 'Teacher Blabla', 'IT', '09755721626', 0, NULL, '2020-05-28 13:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `roomNo` int(11) NOT NULL,
  `roomName` varchar(30) DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`roomNo`, `roomName`, `isActive`) VALUES
(1, 'Multimedia Room 1', 1),
(2, 'Multimedia Room 2', 1),
(3, 'Multimedia Room 3', 0),
(4, 'Multimedia Room 4', 0),
(5, 'Multimedia Room 5', 1),
(6, 'No Room', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`itemNo`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`resID`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`roomNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `itemNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `resID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `roomNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

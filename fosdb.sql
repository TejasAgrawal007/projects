-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 06:58 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `username`, `password`) VALUES
(0, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menuID` int(11) NOT NULL,
  `menuName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menuID`, `menuName`) VALUES
(1, 'Nasi Goreng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menuitem`
--

CREATE TABLE `tbl_menuitem` (
  `itemID` int(11) NOT NULL,
  `menuID` int(11) NOT NULL,
  `menuItemName` text NOT NULL,
  `price` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menuitem`
--

INSERT INTO `tbl_menuitem` (`itemID`, `menuID`, `menuItemName`, `price`) VALUES
(1, 1, 'Ayam', '3.00'),
(2, 1, 'Cina', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderID` int(11) NOT NULL,
  `status` text NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `orderID` int(11) NOT NULL,
  `orderDetailID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role`) VALUES
('waiter'),
('chef');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staffID` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staffID`, `username`, `password`, `status`, `role`) VALUES
(1, 'Abu', 'abc123', 'Offline', 'waiter'),
(4, 'Anjir', 'abc123', 'Online', 'chef'),
(5, 'Fuad', 'abc123', 'Online', 'chef'),
(6, 'Ali', 'abc123', 'Online', 'chef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menuID`);

--
-- Indexes for table `tbl_menuitem`
--
ALTER TABLE `tbl_menuitem`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `menuID` (`menuID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD PRIMARY KEY (`orderDetailID`),
  ADD KEY `itemID` (`itemID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_menuitem`
--
ALTER TABLE `tbl_menuitem`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `orderDetailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staffID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

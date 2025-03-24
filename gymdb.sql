-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladdpackage`
--

CREATE TABLE `tbladdpackage` (
  `id` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `titlename` varchar(450) DEFAULT NULL,
  `PackageType` varchar(45) DEFAULT NULL,
  `PackageDuratiobn` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `uploadphoto` varchar(450) DEFAULT NULL,
  `Description` varchar(450) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladdpackage`
--

INSERT INTO `tbladdpackage` (`id`, `category`, `titlename`, `PackageType`, `PackageDuratiobn`, `Price`, `uploadphoto`, `Description`, `create_date`) VALUES
(1, '1', 'Free Fitness Gear Package', '1', '3 Month', '6000', NULL, 'Complimentary OnePass', '2022-03-05 02:55:34'),
(2, '1', '3 Months Membership Package', '1', '6 Month', '8000', NULL, 'Weight Loss / Weight Gain', '2022-03-05 02:56:44'),
(3, '1', 'Self-Defence', '1', '4 Month', '2000', NULL, 'Only For Women', '2022-05-22 02:34:08'),
(7, '4', 'Silambam', '5', 'Any Time', '300', NULL, 'morning class 6.00AM-7.00AM', '2024-03-04 18:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `name`, `email`, `mobile`, `password`, `create_date`) VALUES
(1, 'admin', 'admin@gmail.com', '9361524859', '21232f297a57a5a743894a0e4a801fc3', '2024-01-03 11:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `package_id` varchar(45) DEFAULT NULL,
  `userid` varchar(45) DEFAULT NULL,
  `booking_date` timestamp NULL DEFAULT current_timestamp(),
  `payment` varchar(45) DEFAULT NULL,
  `paymentType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `package_id`, `userid`, `booking_date`, `payment`, `paymentType`) VALUES
(1, '2', '1', '2022-03-05 03:53:21', '800', 'Full Payment'),
(2, '1', '1', '2022-03-05 03:53:28', '600', 'Partial Payment'),
(3, '2', '5', '2022-03-08 17:44:18', '300', 'Full Payment'),
(6, '1', '5', '2022-05-22 02:16:14', NULL, NULL),
(7, '2', '6', '2022-05-22 02:32:45', NULL, 'Full Payment');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `category_name`, `status`) VALUES
(1, 'Men', '0'),
(2, 'Women', '0'),
(4, 'Men / Women', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tblpackage`
--

CREATE TABLE `tblpackage` (
  `id` int(11) NOT NULL,
  `cate_id` varchar(45) DEFAULT NULL,
  `PackageName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpackage`
--

INSERT INTO `tblpackage` (`id`, `cate_id`, `PackageName`) VALUES
(1, '1', 'Weight gain/loss'),
(3, '2', 'self-defence'),
(5, '4', 'தற்காப்பு கலை');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `id` int(11) NOT NULL,
  `bookingID` varchar(45) DEFAULT NULL,
  `paymentType` varchar(45) DEFAULT NULL,
  `payment` varchar(45) DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`id`, `bookingID`, `paymentType`, `payment`, `payment_date`) VALUES
(1, '1', 'Partial Payment', '300', '2022-03-05 03:54:10'),
(4, '1', 'Full Payment', '500', '2022-05-22 01:01:58'),
(5, '3', 'Partial Payment', '300', '2022-05-22 01:09:53'),
(8, '3', 'Full Payment', '500', '2022-05-22 01:19:03'),
(9, '7', 'Partial Payment', '500', '2022-05-22 02:40:34'),
(10, '7', 'Full Payment', '300', '2022-05-22 02:41:14'),
(11, '1', 'Full Payment', '7200', '2024-03-04 18:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `fname`, `lname`, `email`, `mobile`, `password`, `state`, `city`, `address`, `create_date`) VALUES
(1, 'Muthamizh', 'S', 'muthudmj2@gmail.com', '9361524859', '25d55ad283aa400af464c76d713c07ad', 'TamilNadu', 'Ariyalur', '166/A, Azhgappa nagar', '2022-02-16 16:48:25'),
(2, 'Naveen', 'T', 'naveen@gmail.com', '9876543212', 'ca383961eacba643c76e31af4325ceac', 'TamilNadu', 'Pudhukottai', '34/B, K.C Nagar', '2022-02-16 17:00:20'),
(3, 'Fernandez', 'J', 'fernandez@gmail.com', '1243568709', '677af7cceca41d72b53e054ba36c2f71', 'Tamilnadu', 'kallakurichi', '23/C, MGR Nagar', '2022-03-02 15:37:22'),
(4, 'Infant', 'W', 'infant@gmail.com', '2345768678', 'f9e7b955f2438b1d017e2d328a5db9e1', 'TamilNadu', 'Ariyalur', '23/D, Jayakondom', '2022-03-05 03:27:28'),
(5, 'Hari', 'Presanna', 'hari@Gmail.com', '8756435678', 'd99774e66f79812af5833e1518e44be7', 'TamilNadu', 'Trichy', '34/B, Karu Mandabam', '2022-03-08 17:43:23'),
(6, 'Muthu', 'S', 'muthu@test.com', '1425635241', 'muthu@123', 'Tamilnadu', 'Ariyalur', '123/S, Ariyalur North', '2022-05-22 02:31:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladdpackage`
--
ALTER TABLE `tbladdpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpackage`
--
ALTER TABLE `tblpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladdpackage`
--
ALTER TABLE `tbladdpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpackage`
--
ALTER TABLE `tblpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

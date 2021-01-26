-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 07:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getmob`
--

-- --------------------------------------------------------

--
-- Table structure for table `stolen_phone`
--

CREATE TABLE `stolen_phone` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `place` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stolen_phone`
--

INSERT INTO `stolen_phone` (`id`, `fullname`, `serial`, `date`, `place`, `type`, `mobile`, `img`) VALUES
(1, 'محمد حسام الدين', '010', '11/10/2021', 'مصر الميعادى شارع 9', 'سامسونج F12', '010203040', '940278_test.jpg'),
(2, 'Mark adams', 'Ms98383030', '11/20/2022', 'Cairo egypt', 'Iphone 7 plus', '0102020282', '74507_IMG-20210124-WA0015.jpg'),
(3, 'كمال عمر', 'Mg93181283012983', '10/10/2030', 'الاسكندريه سيدى بشر', 'ايفون تسعه', '0103065081', '940278_test.jpg'),
(4, 'محروس الشويش', 'BAK3910912', '10/20/1990', 'البحيره ارض الجولف', 'نوكيا فون', '0126854798', '940278_test.jpg'),
(5, 'محمود احمد ابراهيم', 'GB93812083', '11/20/3030', 'اسكندريه سى جابر', 'ايفون 8', '0103065081', '940278_test.jpg'),
(6, 'ناصر الدسوقى ابراهيم', 'MG92103812', '11/10/1990', 'سوهاج شارع 8', 'نوكيا 3310', '01177485102', '532063_test.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stolen_phone`
--
ALTER TABLE `stolen_phone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stolen_phone`
--
ALTER TABLE `stolen_phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

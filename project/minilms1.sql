-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 05:54 AM
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
-- Database: `minilms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`, `time`) VALUES
(1, 'admin@gmail.com', '1234', '2021-02-12 12:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `userid` varchar(150) NOT NULL,
  `bookid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userid`, `bookid`, `time`, `status`) VALUES
(1, 'saddhu6393@gmail.com', 24, '2021-02-09 13:18:43', ''),
(2, 'tannusingh10july@gmail.com', 56, '2021-02-09 13:21:27', ''),
(3, 'indiaglobal0@gmail.com', 24, '2021-02-09 14:14:50', ''),
(4, 'indiaglobal0@gmail.com', 56, '2021-02-09 16:46:20', ''),
(5, 'pandeyjiup51wale@gmail.com', 901, '2021-02-09 21:30:02', ''),
(6, 'abhisheksinghhh7@gmail.com', 568, '2021-02-11 10:37:38', ''),
(7, 'kartikeysam18@gmail.com', 56, '2021-02-12 13:05:24', ''),
(8, '', 0, '2021-02-17 18:31:45', ''),
(9, 'sdisha5830@gmail.com', 632, '2021-02-22 11:09:05', ''),
(10, 'indiaglobal0@gmail.com', 632, '2021-02-22 11:12:17', '');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookid` int(100) NOT NULL,
  `bookname` varchar(500) NOT NULL,
  `bwname` varchar(500) NOT NULL,
  `blang` varchar(500) NOT NULL,
  `byear` int(100) NOT NULL,
  `bprice` int(100) NOT NULL,
  `bq` int(100) NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `aq` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookid`, `bookname`, `bwname`, `blang`, `byear`, `bprice`, `bq`, `create_at`, `aq`) VALUES
(1, 11, 'Arion and the Dolphin', 'Vikram Seth', 'Hindi', 678, 677, 8, '2021-02-05 11:26:32', '8'),
(8, 47, 'An Autobiography', 'Jawaharlal Nehru', 'English', 2020, 390, 9, '2021-02-05 20:06:21', '9'),
(9, 56, 'IAS', 'Kautilya', 'hindi', 2020, 2222, 3, '2021-02-06 18:51:50', '0'),
(10, 24, 'Python advance', 'John', 'English', 2098, 390, 9, '2021-02-08 05:20:16', '7'),
(12, 901, 'Think And Grow Rich', 'Samm', 'English , Hindi', 2012, 215, 8, '2021-02-09 21:28:06', '7'),
(13, 568, 'Data Structure Using C', 'williom p', 'Hindi', 2014, 368, 4, '2021-02-11 10:30:50', '3'),
(14, 632, 'An idealist View of Life', 'Dr.S. Radhakrishnan', 'Hindi', 2015, 473, 2, '2021-02-22 11:02:56', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'dsdasd asdasd', 'darkaniket0@gmail.com', 'lkjbh', 'kohgfc', '2021-02-08 07:19:37'),
(2, 'mahima', 'darkaniket0@gmail.com', 'poiug', 'oiuygf', '2021-02-08 07:31:51'),
(3, 'Shivam  Pandey', 'pandeyjiup51wale@gmail.com', 'Timing', 'what is the timing of offline library', '2021-02-09 21:20:34'),
(4, 'abhishek', 'abhisheksinghhh7@gmail.com', 'test msj', 'hllo test', '2021-02-11 10:26:13'),
(5, 'aniket', 'itanikett@gmail.com', 'mobile number', 'What is your mobile number', '2021-02-12 14:25:20'),
(6, 'aniket', 'itanikett@gmail.com', 'number', 'what is your mobile number', '2021-02-12 14:26:43'),
(7, 'aniket', 'jsansike@fggd.cn', 'test', 'jajdhfbhsdf', '2021-02-17 18:41:57'),
(8, 'aniket', 'jsansike@fggd.cn', 'test', 'jajdhfbhsdf', '2021-02-17 18:42:26'),
(9, 'aniket', 'jsansike@fggd.cn', 'test', 'jajdhfbhsdf', '2021-02-17 18:42:28'),
(10, 'aniet', 'hsgdng@ghsb.com', 'dsbdhhsud', 'kjwdavcbdsc', '2021-02-17 18:42:44'),
(11, 'aniet', 'hsgdng@ghsb.com', 'dsbdhhsud', 'kjwdavcbdsc', '2021-02-17 18:43:38'),
(12, 'Mahi singh', 'sdisha5830@gmail.com', 'what is feee', 'wahat is your plans.......', '2021-02-22 10:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `sendnotice`
--

CREATE TABLE `sendnotice` (
  `sid` int(11) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `notice` varchar(600) NOT NULL,
  `create_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sendnotice`
--

INSERT INTO `sendnotice` (`sid`, `headline`, `notice`, `create_at`) VALUES
(5, 'New Books Available In Library', 'Some New Books Available, You can read soon.', 2147483647),
(6, 'Sunday Library Will Close', 'Library will close because some issue.', 2147483647),
(7, 'New Year Offer 2021', 'Membership price now down New year offer 2021', 2147483647),
(9, '20% Off in Feb', '20% Off extra for students', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `dob`, `email`, `mobile`, `gender`, `address`, `time`) VALUES
(7, 'Aniket Rathaur', '2021-03-02', 'indiaglobal0@gmail.com', '5623', 'Male', 'lhgfc', '2021-02-06 21:12:34'),
(9, 'kartikey', '2021-02-10', 'kartikeysam18@gmail.com', '6736345345', 'Male', 'jasdhasd', '2021-02-06 21:24:58'),
(11, 'surendra', '2021-02-27', 'itanikett@gmail.com', '8567567566', 'Male', 'asdasdasd\r\nasdasd', '2021-02-06 21:57:03'),
(13, 'Himansu', '2021-02-12', '16himanshu16yadav@gmail.com', '8226593236', 'Male', 'prayagraj', '2021-02-07 11:34:41'),
(14, 'Mahima Singh', '2001-09-04', 'saddhu6393@gmail.com', '966895225', 'Female', 'Gonda', '2021-02-08 05:18:51'),
(15, 'Tanya', '2021-02-03', 'tannusingh10july@gmail.com', '8090093151', 'Female', '1155 NEW RAJENDRA NAGAR\r\nORAI', '2021-02-08 13:34:11'),
(16, 'Shivam Pandey', '2000-08-18', 'pandeyjiup51wale@gmail.com', '9451357784', 'Male', 'Indra Nagar Lucknow', '2021-02-09 21:25:53'),
(17, 'Abhishek Singh', '2021-02-18', 'abhisheksinghhh7@gmail.com', '8952989235', 'Male', 'lucknow', '2021-02-11 10:27:32'),
(18, 'Mahi Singh', '2001-09-04', 'sdisha5830@gmail.com', '9546587451', 'Female', 'Gonda, Up', '2021-02-22 11:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `email`, `pass`, `time`) VALUES
(6, 'indiaglobal0@gmail.com', '1234', '2021-02-17 16:28:33'),
(8, 'kartikeysam18@gmail.com', '1234', '2021-02-17 16:29:06'),
(9, 'itanikett@gmail.com', 'EsbX1Zb', '2021-02-06 21:57:03'),
(11, '16himanshu16yadav@gmail.com', '8PpJXPz', '2021-02-07 11:34:41'),
(12, 'saddhu6393@gmail.com', 'WwYnVvO', '2021-02-08 05:18:51'),
(13, 'tannusingh10july@gmail.com', 'I5dLSEk', '2021-02-08 13:34:11'),
(14, 'pandeyjiup51wale@gmail.com', 'rrOj1JN', '2021-02-09 21:25:53'),
(15, 'abhisheksinghhh7@gmail.com', 'PIAAnDu', '2021-02-11 10:27:32'),
(16, 'sdisha5830@gmail.com', 'mahi', '2021-02-22 11:10:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookid` (`bookid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendnotice`
--
ALTER TABLE `sendnotice`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sendnotice`
--
ALTER TABLE `sendnotice`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

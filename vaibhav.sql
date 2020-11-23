-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 07:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaibhav`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `message`) VALUES
(1, 'gyug', 'ygyu', 'gyug'),
(2, 'vaishnavi upadhyay', 'vaish123@gmail.com', 'searching for the soulmate!!!!!!!!!!!'),
(3, 'vaishnavi upadhyaysfbjkrsbjgk', 'sakkfmanjf', 'ekfnjiewhgfuiewuighe'),
(4, 'hjkhjkh', 'jkhkjhjkhjk', 'jkhjkhjkhjkhjkh');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `name`, `email`, `message`) VALUES
(5, 'vaibhav', 'gggggggggggg', 'soulmate'),
(6, 'vaibhav', 'VAIBHAVVERMAONKIEN@gmail.com', 'kaioken!!!!!!!!!!!!!!!'),
(7, 'hjghjghjg', 'hjghjghj', 'ggjhghjgjhg');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `gender` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `height` float NOT NULL,
  `education` varchar(20) NOT NULL,
  `job` varchar(20) NOT NULL,
  `income` bigint(20) NOT NULL,
  `house` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `loginname` varchar(20) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `sno` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `agefrom` int(50) NOT NULL,
  `ageto` int(50) NOT NULL,
  `region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `v2`
--

CREATE TABLE `v2` (
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `v3`
--

CREATE TABLE `v3` (
  `sno` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `maritialstatus` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `education` varchar(20) NOT NULL,
  `workin` varchar(20) NOT NULL,
  `monthlyincome` varchar(50) NOT NULL,
  `house` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `loginname` varchar(20) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `IMAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v3`
--

INSERT INTO `v3` (`sno`, `gender`, `caste`, `religion`, `maritialstatus`, `name`, `age`, `height`, `education`, `workin`, `monthlyincome`, `house`, `address`, `region`, `email`, `loginname`, `phoneno`, `password`, `IMAGE`) VALUES
(22, 'Male', 'GENERAL', 'hindu', 'Un Married', 'pawan kumar', '28', '5 Feet 6 Inch', 'software engineer', 'Contract', '41000', 'Own', '54 sector Noeda', 'Delhi', 'pawankumarlove@gmail', 'pawan', '8989283290', '3gc7dcy', 'image/manoj.jpg'),
(23, 'Female', 'GENERAL', 'hindu', 'Un Married', 'malaika', '29', '5 Feet 5 Inch', 'b com', 'Contract', '10000', 'Official', '853 secotor mumbai', 'Maharashtra', 'malaikakka@gmail.com', 'malaika', '899039204', 'e8u38fcu', 'image/malaika.jpg'),
(24, 'Male', 'OBC', 'hindu', 'Un Married', 'manoj choudry', '34', '5 Feet 4 Inch', 'advocate', 'Goverment', '212999', 'Own', 'mahonaka indore', 'Madhya Pradesh', 'manojchod@gmail.com', 'manoj', '7897987567', 'yuitit', 'image/funny.jpg'),
(25, 'Female', 'GENERAL', 'hindu', 'Un Married', 'sa', '- Select -', '- Select -', '', '', '', '', '', '-Select-', '', '', '', '', 'image/'),
(26, 'Female', 'GENERAL', 'hindu', 'Un Married', 'sakshi rohida', '25', '4 Feet 5 Inch', 'b com', 'Business', '12000', 'Rental', '45 sector lokmanya n', 'Madhya Pradesh', 'rohidaonlkin@gmail.c', 'sakshi', '6787098989', 'tuuiiygi', 'image/WIN_20190909_11_49_53_Pro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `v3`
--
ALTER TABLE `v3`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `v3`
--
ALTER TABLE `v3`
  MODIFY `sno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2018 at 07:57 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(10) NOT NULL,
  `enroll_no` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `marks` int(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `college1` varchar(250) NOT NULL,
  `college2` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `allowed_college` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `enroll_no`, `fname`, `lname`, `marks`, `email`, `password`, `date_of_birth`, `college1`, `college2`, `gender`, `allowed_college`) VALUES
(1, 719256991, 'prakash', 'kumar', 50, 'prakashpandey911@gmail.com', '1234567890', '2018-03-15', 'Aryabhatta College', 'Deen Dayal Upadhyaya College', 'male', 'Acharya Narendra Dev College'),
(2, 1260655686, 'prakash', 'kumar', 50, 'prakashpandey911@gmail.com', '1234567890', '2018-03-15', 'Aryabhatta College', 'Deen Dayal Upadhyaya College', 'male', 'Bhim Rao Ambedkar College'),
(3, 1353348563, 'prakash', 'kumar', 50, 'prakashpandey911@gmail.com', '1234567890', '2018-03-15', 'Aryabhatta College', 'Deen Dayal Upadhyaya College', 'male', 'Bhim Rao Ambedkar College'),
(4, 457661779, 'alex', 'kumar', 60, 'prakashpandey911@gmail.com', '12345', '2018-03-22', 'Acharya Narendra Dev College', 'Bhim Rao Ambedkar College', 'female', 'Bhim Rao Ambedkar College');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

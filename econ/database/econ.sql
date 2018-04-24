-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 07:48 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `econ`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Lalit Admin', 'admin@gmail.com', 'e020590f0e18cd6053d7ae0e0a507609');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `sender` varchar(225) DEFAULT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `receiver` varchar(225) NOT NULL DEFAULT 'admin'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `title`, `description`, `sender`, `date`, `time`, `receiver`) VALUES
(5, 'k', 'kk ', '301297', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(6, 'k', 'kk ', '301297', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(7, 'd', ' d', '301297', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(8, 'd', ' d', '301297', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(9, 'hh', 'uhhhd\r\nkdfjdl\r\nndlfn', '301297', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(10, 'kkkkk', ' ', NULL, '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(11, 'kkTest', ' kkTest\r\nkkTest', '123456', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(12, 'kk', 'kk ', '123456', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(13, 'kkk', 'kkkk ', '123456', '0000-00-00', '0000-00-00 00:00:00', 'admin'),
(14, 'Lalit', 'Lalit ', NULL, '0000-00-00', '0000-00-00 00:00:00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `PRN` int(11) NOT NULL,
  `enrolment` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `birth` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`PRN`, `enrolment`, `fname`, `lname`, `email`, `birth`, `status`, `password`) VALUES
(963, 6, 'j', 'j', '2018-04-12', '', 0, '832ac2451ac31236bd67afbce25bd4dc'),
(301297, 5, 'jitesh', 'bondre', '2018-04-05', 'G', 1, '832ac2451ac31236bd67afbce25bd4dc'),
(1236, 444, 'jitesh', 'bondre', 'jiiy', '55555', 1, '44'),
(123456, 123, 'UMA', 'BONDRE', '2018-04-21', 'JITBONDRE@gmail.com', 0, 'e020590f0e18cd6053d7ae0e0a507609'),
(3366, 123456, 'lalit', 'diwate', '2018-04-20', 'lalitdiwate@gmail.com', 1, 'e020590f0e18cd6053d7ae0e0a507609'),
(123, 123, 'lala', 'diwate', '2018-04-26', 'lala@gmail.com', 1, 'e020590f0e18cd6053d7ae0e0a507609');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `PRN` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `middle_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `mother_name` varchar(225) NOT NULL,
  `date_of_birth` varchar(225) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `blood_group` varchar(225) NOT NULL,
  `mothertongue` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `caste` varchar(225) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `phone_no` int(11) DEFAULT NULL,
  `email_address` varchar(225) NOT NULL,
  `permenent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `city` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `remark` text NOT NULL,
  `1st_branch` varchar(225) NOT NULL,
  `2st_branch` varchar(225) DEFAULT NULL,
  `3st_branch` varchar(225) DEFAULT NULL,
  `4st_branch` varchar(225) DEFAULT NULL,
  `1st_cgpa` int(11) DEFAULT NULL,
  `2st_cgpa` int(11) DEFAULT NULL,
  `3st_cgpa` int(11) DEFAULT NULL,
  `4st_cgpa` int(11) DEFAULT NULL,
  `1st_roll_no` int(11) DEFAULT NULL,
  `2st_roll_no` int(11) DEFAULT NULL,
  `3st_roll_no` int(11) DEFAULT NULL,
  `4st_roll_no` int(11) DEFAULT NULL,
  `1st_result` varchar(225) DEFAULT NULL,
  `2st_result` varchar(225) DEFAULT NULL,
  `3st_result` varchar(225) DEFAULT NULL,
  `4st_result` varchar(11) DEFAULT NULL,
  `1st_section` text,
  `2st_section` varchar(225) DEFAULT NULL,
  `3st_section` varchar(225) DEFAULT NULL,
  `4st_section` varchar(225) DEFAULT NULL,
  `1st_year_of_admision` int(11) NOT NULL,
  `2st_year_of_admision` int(11) NOT NULL,
  `3st_year_of_admision` int(11) NOT NULL,
  `4st_year_of_admision` int(11) NOT NULL,
  `type_of_admision` varchar(225) NOT NULL,
  `annual_income_of_parents` int(11) NOT NULL,
  `name_of_last_collage_or_school` text NOT NULL,
  `address_of_last_collage_or_school` text NOT NULL,
  `ssc_percentage` int(11) NOT NULL,
  `hsc_percentage` int(11) NOT NULL,
  `area_of_interest` varchar(225) NOT NULL,
  `achivment_in_school` text NOT NULL,
  `achivment_in_during_the_coures` text NOT NULL,
  `any_scholership` varchar(225) NOT NULL,
  `additional_qualification` text NOT NULL,
  `work_area_choice_for_placement` varchar(225) DEFAULT NULL,
  `future_planning` text,
  `hobbies` text,
  `any_other_info` text,
  `full_name` varchar(789) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`PRN`, `first_name`, `middle_name`, `last_name`, `mother_name`, `date_of_birth`, `image`, `gender`, `blood_group`, `mothertongue`, `category`, `caste`, `religion`, `phone_no`, `email_address`, `permenent_address`, `present_address`, `city`, `country`, `remark`, `1st_branch`, `2st_branch`, `3st_branch`, `4st_branch`, `1st_cgpa`, `2st_cgpa`, `3st_cgpa`, `4st_cgpa`, `1st_roll_no`, `2st_roll_no`, `3st_roll_no`, `4st_roll_no`, `1st_result`, `2st_result`, `3st_result`, `4st_result`, `1st_section`, `2st_section`, `3st_section`, `4st_section`, `1st_year_of_admision`, `2st_year_of_admision`, `3st_year_of_admision`, `4st_year_of_admision`, `type_of_admision`, `annual_income_of_parents`, `name_of_last_collage_or_school`, `address_of_last_collage_or_school`, `ssc_percentage`, `hsc_percentage`, `area_of_interest`, `achivment_in_school`, `achivment_in_during_the_coures`, `any_scholership`, `additional_qualification`, `work_area_choice_for_placement`, `future_planning`, `hobbies`, `any_other_info`, `full_name`, `status`) VALUES
(301297, 'jitesh', 'pudlikrao', 'bondre', 'jyoti', '2018-04-12', '', 'Male', 'O+', 'Marathi', 'NT', 'KUNDI', 'Hindu', 44444, 'jitbondre@gmail.com', 'kk', 'k', 'k', 'KZ', 'k', 'cmps', 'cmps', 'j', 'jj', 5, 10, 4, 4, 5544, 455, 77, 211, '6', 'pass', 'pass', 'DC', NULL, NULL, NULL, NULL, 2018, 555, 1, 11, 'CAP', 22222, 'j', 'j', 444, 11, 'NonTechnical', 'j', 'j', 'Yes', 'j', 'jj', 'j', 'j', 'j', 'jitwsh publikrao bondre', 1),
(123456, 'Lalit1', 'dineshh', 'Lalit1', 'mala', '2018-04-23', 'images/1524548718.png', 'Male', 'O+', 'Marathi', 'OBC', 'KUNDI', 'Hindu', 999999, 'lalitdiwate@gmail.com', 'll', 'll', 'arvi', 'IN', 'nothing', 'cse', 'cds', 'fdd', '', 6, 7, 5, 5, 3565, 525, 853, 0, '6', 'pass', '', '', NULL, NULL, NULL, NULL, 2016, 2017, 0, 0, 'MANAGMENT', 534864, 'fggcd', 'tthftfr', -8, 0, 'NonTechnical', 'fcfdefsf', 'ftffrtf', 'Yes', 'gdrrtdf', 'tgthfrd', 'trftdr2', 'qr6urttyeq', 'wtytwqe', 'ldd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`PRN`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`PRN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

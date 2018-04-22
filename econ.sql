-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 09:44 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `PRN` int(11) NOT NULL,
  `enrolment` int(11) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`PRN`, `enrolment`, `lname`, `fname`, `email`, `birth`, `password`) VALUES
(123, 456, 'bondre', 'jitesh', '2018-04-26', 'jitbondre@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(766, 1293879, 'kfh', 'nfj', '2018-04-20', 'djh', 'd41d8cd98f00b204e9800998ecf8427e'),
(301297, 4555, 'bondte', 'jitesh', '2018-04-21', 'jitesh@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(963, 258, 'm', 'jitesh', '2018-04-14', 'jhui', '832ac2451ac31236bd67afbce25bd4dc'),
(852, 55, 'shende', 'sagar', '2018-04-12', 'h', '41ed44e3038dbeee7d2ffaa7f51d8a4b'),
(456, 4, 'k', 'k', '2018-04-19', 'j', '832ac2451ac31236bd67afbce25bd4dc');

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
  `date_of_birth` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `blood_group` varchar(225) NOT NULL,
  `mothertongue` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `caste` varchar(225) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email_address` varchar(225) NOT NULL,
  `permenent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `city` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `remark` text NOT NULL,
  `1st_branch` varchar(225) NOT NULL,
  `2st_branch` varchar(225) NOT NULL,
  `3st_branch` varchar(225) NOT NULL,
  `4st_branch` varchar(225) NOT NULL,
  `1st_cgpa` int(11) NOT NULL,
  `2st_cgpa` int(11) NOT NULL,
  `3st_cgpa` int(11) NOT NULL,
  `4st_cgpa` int(11) NOT NULL,
  `1st_roll_no` int(11) NOT NULL,
  `2st_roll_no` int(11) NOT NULL,
  `3st_roll_no` int(11) NOT NULL,
  `4st_roll_no` int(11) NOT NULL,
  `1st_result` int(11) NOT NULL,
  `2st_result` int(11) NOT NULL,
  `3st_result` int(11) NOT NULL,
  `4st_result` int(11) NOT NULL,
  `1st_section` text NOT NULL,
  `2st_section` varchar(225) NOT NULL,
  `3st_section` varchar(225) NOT NULL,
  `4st_section` varchar(225) NOT NULL,
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
  `work_area_choice_for_placement` varchar(225) NOT NULL,
  `future_planning` text NOT NULL,
  `hobbies` text NOT NULL,
  `any_other_info` text NOT NULL,
  `full_name` varchar(789) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`PRN`, `first_name`, `middle_name`, `last_name`, `mother_name`, `date_of_birth`, `gender`, `blood_group`, `mothertongue`, `category`, `caste`, `religion`, `phone_no`, `email_address`, `permenent_address`, `present_address`, `city`, `country`, `remark`, `1st_branch`, `2st_branch`, `3st_branch`, `4st_branch`, `1st_cgpa`, `2st_cgpa`, `3st_cgpa`, `4st_cgpa`, `1st_roll_no`, `2st_roll_no`, `3st_roll_no`, `4st_roll_no`, `1st_result`, `2st_result`, `3st_result`, `4st_result`, `1st_section`, `2st_section`, `3st_section`, `4st_section`, `1st_year_of_admision`, `2st_year_of_admision`, `3st_year_of_admision`, `4st_year_of_admision`, `type_of_admision`, `annual_income_of_parents`, `name_of_last_collage_or_school`, `address_of_last_collage_or_school`, `ssc_percentage`, `hsc_percentage`, `area_of_interest`, `achivment_in_school`, `achivment_in_during_the_coures`, `any_scholership`, `additional_qualification`, `work_area_choice_for_placement`, `future_planning`, `hobbies`, `any_other_info`, `full_name`, `status`) VALUES
(963, '', '', '', '', '', '', '', '', '', '', '', 4, '', '', '', '', '', '', '', '', '', '', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', '', '', '', 5, 5, 5, 5, '5', 5, '4', '4', 4, 44, '', '4', '', '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`PRN`),
  ADD UNIQUE KEY `enrolment` (`enrolment`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`PRN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

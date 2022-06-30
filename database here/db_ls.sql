-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 05:01 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ls`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `borrowing`
--

CREATE TABLE `borrowing` (
  `borrow_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(50) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'None'),
(2, 'chemical');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_category` varchar(50) NOT NULL,
  `item_description` varchar(50) NOT NULL,
  `item_condition` varchar(200) NOT NULL,
  `item_remark` varchar(60) NOT NULL,
  `item_quantity` int(50) NOT NULL,
  `item_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `department`, `item_name`, `item_category`, `item_description`, `item_condition`, `item_remark`, `item_quantity`, `item_type`) VALUES
(1, 'high school science department', 'Test tube', 'None', '10 mL', 'good', '  .', 15, 'pcs'),
(2, 'high school science department', 'Test tube', 'None', '50 mL', 'good', '.', 15, 'pcs'),
(3, 'high school science department', 'Test tube', 'None', '100 mL', 'good', '.', 15, 'pcs'),
(4, 'high school science department', 'Test Tube Rack', 'None', 'Wood', 'good', '.', 5, 'pcs'),
(5, 'high school science department', 'Test Tube Brush', 'None', 'Meduim', 'good', '.', 5, 'pcs'),
(6, 'high school science department', 'Test Tube Holder', 'None', '.', 'good', '.', 10, 'pcs'),
(7, 'high school science department', 'Beaker', 'None', '50 mL', 'good', '.', 5, 'pcs'),
(8, 'high school science department', 'Beaker', 'None', '1000 mL', 'good', '.', 5, 'pcs'),
(9, 'high school science department', 'Beaker', 'None', '2000mL', 'good', '.', 5, 'pcs'),
(10, 'high school science department', 'Erlenmeyer Flask', 'None', '250 mL', 'good', '.', 5, 'pcs'),
(11, 'high school science department', 'Florence Flask', 'None', 'none', 'good', 'none', 5, 'pcs'),
(12, 'high school science department', 'Distilling Flask', 'None', 'none', 'good', 'none', 5, 'pcs'),
(13, 'high school science department', 'Volumetric Flask', 'None', 'none', 'good', 'none', 5, 'pcs'),
(14, 'high school science department', 'Glass Tubing', 'None', 'none', 'good', 'none', 10, 'pcs'),
(15, 'high school science department', 'Glass Funnel', 'None', '75mm', 'good', 'none', 5, 'pcs'),
(16, 'high school science department', 'Stirring Rod', 'None', 'none', 'good', '2 pcs. broken during Science Magice Show Pratice', 10, 'pcs'),
(17, 'high school science department', 'Graduated Cylinder', 'None', '100mL', 'good', 'none', 5, 'pcs'),
(18, 'high school science department', 'Graduated Cylinder', 'None', '1000mL', 'good', 'none', 7, 'pcs'),
(19, 'high school science department', 'Alchohol Lamp', 'None', 'none', 'good', 'none', 10, 'pcs'),
(20, 'high school science department', 'Tripod', 'None', 'Meduim Height', 'good', 'none', 10, 'pcs'),
(21, 'high school science department', 'Pipette', 'None', 'none', 'good', 'none', 5, 'pcs'),
(22, 'high school science department', 'Wire Guaze', 'None', 'none', 'good', 'none', 10, 'pcs'),
(23, 'high school science department', 'Clay Triangle', 'None', 'none', 'good', 'none', 5, 'pcs'),
(24, 'high school science department', 'Crucible with Cover', 'None', 'Porcelain', 'good', 'none', 5, 'pcs'),
(25, 'high school science department', 'Crucible Tong', 'None', 'none', 'good', 'none', 5, 'pcs'),
(26, 'high school science department', 'Spatula', 'None', 'none', 'good', '1 pc. broken during Science Magic Show Pratice', 9, 'pcs'),
(27, 'high school science department', 'Mortar and Pestle ', 'None', 'none', 'good', 'none', 5, 'pcs'),
(28, 'high school science department', 'Triple Beam Balance ', 'None', 'none', 'good', 'none', 5, 'pcs'),
(29, 'high school science department', 'Watch Glass', 'None', 'none', 'good', 'none', 5, 'pcs'),
(30, 'high school science department', 'Plastic Tray', 'None', 'none', 'good', 'none', 10, 'pcs'),
(31, 'high school science department', 'Evaporating Dish', 'None', 'none', 'good', 'none', 5, 'pcs'),
(32, 'high school science department', 'Petri Dish', 'None', 'none', 'good', '3 pcs. broken during Science Magic Show Practice', 5, 'pcs'),
(33, 'high school science department', 'Iron Stand with Ring & Clamp ', 'None', 'none', 'good', 'none', 5, 'pcs'),
(34, 'high school science department', 'Reagent Bottle ', 'None', 'none', 'good', 'none', 5, 'pcs'),
(35, 'high school science department', 'Test Tube Cork', 'None', 'Small', 'good', 'none', 10, 'pcs'),
(36, 'high school science department', 'Test Tube Cork', 'None', 'Large', 'good', 'none', 10, 'pcs'),
(37, 'high school science department', 'Laboratory Gown', 'None', 'none', 'good', 'none', 10, 'pcs'),
(38, 'high school science department', 'Googles', 'None', 'none', 'good', 'none', 10, 'pcs'),
(39, 'high school science department', 'Laboratory Thermometer', 'None', 'none', 'good', 'none', 5, 'pcs'),
(40, 'high school science department', 'Litmus Paper', 'None', 'Blue', 'good', 'none', 1, 'set'),
(41, 'high school science department', 'Litmus Paper', 'None', 'Red', 'good', 'none', 1, 'set'),
(42, 'high school science department', 'pH Paper', 'None', 'none', 'good', 'none', 1, 'set'),
(43, 'high school science department', 'Atomic Model', 'None', 'none', 'good', 'none', 1, 'set'),
(44, 'high school science department', 'Spring Scale', 'None', 'none ', 'good', 'none', 5, 'pcs'),
(45, 'high school science department', 'Spring Model', 'None', 'none', 'good', 'none', 5, 'pcs'),
(46, 'high school science department', 'Tuning Fork', 'None', 'none', 'good', 'none', 5, 'pcs'),
(47, 'high school science department', 'Equilateral Prisms', 'None', 'none', 'good', 'none', 5, 'pcs'),
(48, 'high school science department', 'Prepared Specimen', 'None', 'none', 'good', 'none', 1, 'box'),
(49, 'high school science department', 'Glass Slides', 'None', 'none', 'good', 'none', 2, 'box'),
(50, 'high school science department', 'Cover Slip', 'None', 'none ', 'good', 'none', 2, 'box'),
(51, 'high school science department', 'Dissecting Pan', 'None', 'none', 'good', 'none', 5, 'pcs'),
(52, 'high school science department', 'Dissecting Kit', 'None', 'none', 'good', 'none', 5, 'pcs'),
(53, 'high school science department', 'Compound Light Microscope', 'None', 'none', 'good', 'none', 5, 'pcs'),
(54, 'high school science department', 'Nutrient Agar ', 'chemical', 'none', 'good', 'none', 1, 'bottle'),
(55, 'high school science department', 'Methylene Blue', 'chemical', 'none', 'good', 'none', 1, 'bottle'),
(56, 'high school science department', 'Gentian Violet ', 'chemical', 'none', 'good', 'none', 1, 'bottle'),
(57, 'high school science department', 'Denatured Alchohol', 'chemical', 'none', 'good', 'none', 3, 'bottle'),
(58, 'high school science department', 'Iron Filings ', 'chemical', 'none', 'good', 'none', 1, 'bottle'),
(59, 'high school science department', 'Sodium Hydroxide', 'chemical', 'none', 'good', 'none', 1, 'bottle'),
(60, 'high school science department', 'Iodine Solution', 'chemical', 'none', 'good', 'none', 1, 'bottle'),
(62, 'high school science department', 'Lugols Reagent', 'chemical', 'none', 'good', 'none', 1, 'bottle'),
(63, 'high school science department', 'Glycerine', 'None', 'none', 'good', 'none', 1, 'bottle'),
(64, 'high school science department', 'Benedict Solution', 'None', 'none', 'good', 'none', 1, 'bottle');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(50) NOT NULL,
  `action_time` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `action_time`, `user`, `item_name`, `action`) VALUES
(1, '01-07-21 08:09:47am', 'admin', 'None', 'ADDED'),
(2, '01-07-21 08:10:07am', 'admin', 'chemical', 'ADDED'),
(3, '01-07-21 08:13:45am', 'admin', 'Test tube', 'ADDED'),
(4, '01-07-21 08:14:20am', 'admin', 'Test tube', 'ADDED'),
(5, '01-07-21 08:14:55am', 'admin', 'Test tube', 'ADDED'),
(6, '01-07-21 08:15:33am', 'admin', 'Test Tube Rack', 'ADDED'),
(7, '01-07-21 08:16:18am', 'admin', 'Test Tube Brush', 'ADDED'),
(8, '01-07-21 08:17:24am', 'admin', 'Test Tube Holder', 'ADDED'),
(9, '01-07-21 08:18:04am', 'admin', 'Beaker', 'ADDED'),
(10, '01-07-21 08:18:27am', 'admin', 'Beaker', 'ADDED'),
(11, '01-07-21 08:19:20am', 'admin', 'Beaker', 'ADDED'),
(12, '01-07-21 08:20:04am', 'admin', 'Erlenmeyer Flask', 'ADDED'),
(13, '01-07-21 08:20:44am', 'admin', 'Florence Flask', 'ADDED'),
(14, '01-07-21 08:21:47am', 'admin', 'Distilling Flask', 'ADDED'),
(15, '01-07-21 08:22:20am', 'admin', 'Volumetric Flask', 'ADDED'),
(16, '01-07-21 08:23:08am', 'admin', 'Glass Tubing', 'ADDED'),
(17, '01-07-21 08:23:38am', 'admin', 'Glass Funnel', 'ADDED'),
(18, '01-07-21 08:24:35am', 'admin', 'Stirring Rod', 'ADDED'),
(19, '01-07-21 08:25:14am', 'admin', 'Graduated Cyciinder', 'ADDED'),
(20, '01-07-21 08:26:03am', 'admin', 'Graduated Cylinder', 'ADDED'),
(21, '01-07-21 08:50:04am', 'admin', 'Alchohol Lamp', 'ADDED'),
(22, '01-07-21 09:27:09am', 'admin', 'Graduated Cylinder', 'EDITED'),
(23, '01-07-21 09:29:08am', 'admin', 'Tripod', 'ADDED'),
(24, '01-07-21 09:29:43am', 'admin', 'Pipette', 'ADDED'),
(25, '01-07-21 09:30:52am', 'admin', 'Wire Guaze', 'ADDED'),
(26, '01-07-21 09:31:29am', 'admin', 'Clay Triangle', 'ADDED'),
(27, '01-07-21 09:32:17am', 'admin', 'Crucible with Cover', 'ADDED'),
(28, '01-07-21 09:32:50am', 'admin', 'Crucible Tong', 'ADDED'),
(29, '01-07-21 09:33:44am', 'admin', 'Spatula', 'ADDED'),
(30, '01-07-21 09:34:36am', 'admin', 'Mortar and Pestle ', 'ADDED'),
(31, '01-07-21 09:35:10am', 'admin', 'Triple Beam Balance ', 'ADDED'),
(32, '01-07-21 09:35:56am', 'admin', 'Watch Glass', 'ADDED'),
(33, '01-07-21 09:36:45am', 'admin', 'Plastic Tray', 'ADDED'),
(34, '01-07-21 09:37:16am', 'admin', 'Evaporating Dish', 'ADDED'),
(35, '01-07-21 09:37:52am', 'admin', 'Petri Dish', 'ADDED'),
(36, '01-07-21 09:39:25am', 'admin', 'Iron Stand with Ring & Clamp ', 'ADDED'),
(37, '01-07-21 09:40:06am', 'admin', 'Reagent Bottle ', 'ADDED'),
(38, '01-07-21 09:41:09am', 'admin', 'Petri Dish', 'EDITED'),
(39, '01-07-21 09:41:46am', 'admin', 'Test Tube Cork', 'ADDED'),
(40, '01-07-21 09:42:15am', 'admin', 'Test Tube Cork', 'ADDED'),
(41, '01-07-21 09:42:42am', 'admin', 'Laboratory Gown', 'ADDED'),
(42, '01-07-21 09:43:53am', 'admin', 'Googles', 'ADDED'),
(43, '01-07-21 09:44:35am', 'admin', 'Laboratory Thermometer', 'ADDED'),
(44, '01-07-21 09:45:14am', 'admin', 'Litmus Paper', 'ADDED'),
(45, '01-07-21 09:45:41am', 'admin', 'Litmus Paper', 'ADDED'),
(46, '01-07-21 09:46:23am', 'admin', 'pH Paper', 'ADDED'),
(47, '01-07-21 09:47:25am', 'admin', 'Atomic Model', 'ADDED'),
(48, '01-07-21 09:47:47am', 'admin', 'Spring Scale', 'ADDED'),
(49, '01-07-21 09:48:12am', 'admin', 'Spring Model', 'ADDED'),
(50, '01-07-21 09:48:44am', 'admin', 'Tuning Fork', 'ADDED'),
(51, '01-07-21 09:49:13am', 'admin', 'Equilateral Prisms', 'ADDED'),
(52, '01-07-21 09:49:44am', 'admin', 'Prepared Specimen', 'ADDED'),
(53, '01-07-21 09:50:14am', 'admin', 'Glass Slides', 'ADDED'),
(54, '01-07-21 09:50:39am', 'admin', 'Cover Slip', 'ADDED'),
(55, '01-07-21 09:51:02am', 'admin', 'Dissecting Pan', 'ADDED'),
(56, '01-07-21 09:51:23am', 'admin', 'Dissecting Kit', 'ADDED'),
(57, '01-07-21 09:51:58am', 'admin', 'Compound Light Microscope', 'ADDED'),
(58, '01-07-21 09:52:34am', 'admin', 'Nutrient Agar ', 'ADDED'),
(59, '01-07-21 09:53:00am', 'admin', 'Methylene Blue', 'ADDED'),
(60, '01-07-21 09:53:32am', 'admin', 'Gentian Violet ', 'ADDED'),
(61, '01-07-21 09:54:06am', 'admin', 'Denatured Alchohol', 'ADDED'),
(62, '01-07-21 09:54:31am', 'admin', 'Iron Filings ', 'ADDED'),
(63, '01-07-21 09:55:11am', 'admin', 'Sodium Hydroxide', 'ADDED'),
(64, '01-07-21 09:55:45am', 'admin', 'Iodine Solution', 'ADDED'),
(65, '01-07-21 09:56:08am', 'admin', 'Sodium Hydroxide', 'EDITED'),
(66, '01-07-21 09:56:27am', 'admin', 'Iron Filings ', 'EDITED'),
(67, '01-07-21 10:38:54am', 'admin', 'Lugols Reagent', 'ADDED'),
(68, '01-07-21 10:40:47am', 'admin', 'Glycerine', 'ADDED'),
(69, '01-07-21 10:41:19am', 'admin', 'Benedict Solution', 'ADDED');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_no` varchar(8) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(8) NOT NULL,
  `section` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `firstname`, `middlename`, `lastname`, `course`, `section`) VALUES
(1, '101054', 'Ruby', '', 'Diamon', 'BSIT', '2B');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `temp_id` int(11) NOT NULL,
  `prepared_by` varchar(50) NOT NULL,
  `prepared_by_label` varchar(50) NOT NULL,
  `inspected` varchar(50) NOT NULL,
  `inspected_by_label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`temp_id`, `prepared_by`, `prepared_by_label`, `inspected`, `inspected_by_label`) VALUES
(1, 'ace', 'polero', 'aljohn', 'badang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `borrowing`
--
ALTER TABLE `borrowing`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD UNIQUE KEY `temp_id` (`temp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `borrowing`
--
ALTER TABLE `borrowing`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

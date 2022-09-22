-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 01:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Yasmine', 'yasminkhaled32003@gmail.com', '123', 1),
(25, 'merna', 'merna@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2),
(26, 'Hassan', 'hassan@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(27, 'youssef', 'youssef@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
(28, 'sama', 'sama@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(29, 'Dalia', 'dalia@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'hr'),
(2, 'sales'),
(3, 'data entry'),
(4, 'front end '),
(7, 'Back end'),
(8, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(66) NOT NULL,
  `image` varchar(255) NOT NULL,
  `depId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `image`, `depId`) VALUES
(0, 'Yasmine', 'yasminkhaled32003@gmail.com', '1663606392a9a4fb5ba7d2f73907f5b4aefbed1b3a.jpg', 1),
(40, 'hassan', 'hassan@gmail.com', '', 3),
(51, 'merna', 'merna@gmail.com', '166354980201bc5d2ab7415af42243fda73385a2c6.jpg', 2),
(52, 'yasmine khaled', 'yasminkhaled32003@gmail.com', '1663556896cc121707-d820-4ee2-aac3-93c4a6c885a5.jpg', 1),
(58, 'yazed', 'yazed@gmail.com', '166375721801c751482ef7c4f5e93f3539efd27f6f.jpg', 4),
(59, 'Dalia', 'dalia@gmail.com', '1663757589a9a4fb5ba7d2f73907f5b4aefbed1b3a.jpg', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `employeesjoinwithdepartment`
-- (See below for the actual view)
--
CREATE TABLE `employeesjoinwithdepartment` (
`EmpId` int(11)
,`EmpName` varchar(200)
,`empImg` varchar(255)
,`empEmail` varchar(66)
,`DepName` varchar(200)
);

-- --------------------------------------------------------

--
-- Structure for view `employeesjoinwithdepartment`
--
DROP TABLE IF EXISTS `employeesjoinwithdepartment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employeesjoinwithdepartment`  AS SELECT `employees`.`id` AS `EmpId`, `employees`.`name` AS `EmpName`, `employees`.`image` AS `empImg`, `employees`.`email` AS `empEmail`, `departments`.`name` AS `DepName` FROM (`employees` join `departments` on(`employees`.`depId` = `departments`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `name` (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depID` (`depId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`depId`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

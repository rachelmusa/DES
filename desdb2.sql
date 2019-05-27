-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 07:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `issuedby` int(11) NOT NULL,
  `doc` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `issuedby`, `doc`, `status`) VALUES
(1, 'panadol', 1, NULL, 'active'),
(2, 'parasetamo', 1, NULL, 'active'),
(3, 'panadol', 1, NULL, 'active'),
(4, 'parasetamo', 1, NULL, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `drugstatus`
--

CREATE TABLE `drugstatus` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `issuedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `tel`, `mobile`, `email`, `issuedate`) VALUES
(1, 'maria stopes', '8985555', '255888', 'maria@gmail.com', '2019-05-19 18:40:06'),
(2, 'st monica', '4566', '7889', 'monica@gmail.com', '2019-05-20 11:33:56'),
(3, 'st annalog', '789782893', '7889', 'monica@gmail.com', '2019-05-20 17:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE `jobtype` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`id`, `name`, `status`) VALUES
(1, 'admin', 'active'),
(2, 'doctor', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `id` int(11) NOT NULL,
  `height` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `bmi` varchar(45) DEFAULT NULL,
  `issuedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `patientsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patientdrug`
--

CREATE TABLE `patientdrug` (
  `id` int(11) NOT NULL,
  `doc` varchar(45) DEFAULT NULL,
  `issuedby` int(11) DEFAULT NULL,
  `drugsid` int(11) NOT NULL,
  `patientsymptomsid` int(11) NOT NULL,
  `drugstatusid` int(11) NOT NULL,
  `issuedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patientfiles`
--

CREATE TABLE `patientfiles` (
  `id` int(11) NOT NULL,
  `issuedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `patientsid` int(11) NOT NULL,
  `hosptialsid` int(11) NOT NULL,
  `issuedby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `issuedby` int(11) NOT NULL,
  `issuedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fname`, `mname`, `lname`, `gender`, `address`, `mobile`, `email`, `issuedby`, `issuedate`) VALUES
(1, 'fatuma', 'mussa', 'saidi', 'female', 'ilala', '0719525658', 'mustap@gmail.com', 1, '2019-05-19 19:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `patientsymptoms`
--

CREATE TABLE `patientsymptoms` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `doc` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `patientfileno` int(11) NOT NULL,
  `usersid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `issuedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(50) DEFAULT NULL,
  `hospitalsid` int(11) NOT NULL,
  `jobtypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `gender`, `mobile`, `email`, `address`, `issuedate`, `password`, `hospitalsid`, `jobtypeid`) VALUES
(1, 'kassam', '', 'mustapha', 'male', '0719525658', 'km@gmail.com', '', '2019-05-19 18:41:13', '202cb962ac59075b964b07152d234b70', 1, 1),
(2, 'fatuma', 'mussa', 'isa', 'male', '0719525658', 'mustapha@gmail.com', 'ilala', '2019-05-20 11:37:24', '165a1761634db1e9bd304ea6f3ffcf2b', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugstatus`
--
ALTER TABLE `drugstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_patientdetails_patients1_idx` (`patientsid`);

--
-- Indexes for table `patientdrug`
--
ALTER TABLE `patientdrug`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_patientdrug_drugs1_idx` (`drugsid`),
  ADD KEY `fk_patientdrug_patientsymptoms1_idx` (`patientsymptomsid`),
  ADD KEY `fk_patientdrug_drugstatus1_idx` (`drugstatusid`);

--
-- Indexes for table `patientfiles`
--
ALTER TABLE `patientfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_patienttreatments_patients1_idx` (`patientsid`),
  ADD KEY `fk_patienttreatments_hosptials1_idx` (`hosptialsid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientsymptoms`
--
ALTER TABLE `patientsymptoms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_patientsymptoms_patientfiles1_idx` (`patientfileno`),
  ADD KEY `fk_patientsymptoms_users1_idx` (`usersid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doctors_hosptials_idx` (`hospitalsid`),
  ADD KEY `fk_users_jobtype1_idx` (`jobtypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drugstatus`
--
ALTER TABLE `drugstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientdetails`
--
ALTER TABLE `patientdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patientdrug`
--
ALTER TABLE `patientdrug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patientfiles`
--
ALTER TABLE `patientfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patientsymptoms`
--
ALTER TABLE `patientsymptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD CONSTRAINT `fk_patientdetails_patients1` FOREIGN KEY (`patientsid`) REFERENCES `patients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patientdrug`
--
ALTER TABLE `patientdrug`
  ADD CONSTRAINT `fk_patientdrug_drugs1` FOREIGN KEY (`drugsid`) REFERENCES `drugs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patientdrug_drugstatus1` FOREIGN KEY (`drugstatusid`) REFERENCES `drugstatus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patientdrug_patientsymptoms1` FOREIGN KEY (`patientsymptomsid`) REFERENCES `patientsymptoms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patientfiles`
--
ALTER TABLE `patientfiles`
  ADD CONSTRAINT `fk_patienttreatments_hosptials1` FOREIGN KEY (`hosptialsid`) REFERENCES `hospitals` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patienttreatments_patients1` FOREIGN KEY (`patientsid`) REFERENCES `patients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patientsymptoms`
--
ALTER TABLE `patientsymptoms`
  ADD CONSTRAINT `fk_patientsymptoms_patientfiles1` FOREIGN KEY (`patientfileno`) REFERENCES `patientfiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patientsymptoms_users1` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_doctors_hosptials` FOREIGN KEY (`hospitalsid`) REFERENCES `hospitals` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_jobtype1` FOREIGN KEY (`jobtypeid`) REFERENCES `jobtype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

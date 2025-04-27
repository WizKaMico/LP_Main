-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 01:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp_associates_db_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `lp_agent`
--

CREATE TABLE `lp_agent` (
  `agent_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `unhashed` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT 'ACTIVE',
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lp_agent`
--

INSERT INTO `lp_agent` (`agent_id`, `email`, `password`, `unhashed`, `status`, `date_created`) VALUES
(1, 'gmfacistol@landpassociate.com', '098f6bcd4621d373cade4e832627b4f6', 'test', 'ACTIVE', '2025-04-22'),
(2, 'rhea@landpassociate.com', '81fb218e4e8cc000efa8f86e8f8e48d4', 'lpassociaterhea', 'ACTIVE', '2025-04-22'),
(3, 'frances@landpassociate.com', 'e14344e38aabb968cd501157d3b9704a', 'lpassociatefrances', 'ACTIVE', '2025-04-22'),
(4, 'ritchie@landpassociate.com', '424ba7ea7bd965b749f836b7f891737b', 'lpassociateritchie', 'ACTIVE', '2025-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `lp_agent_activity`
--

CREATE TABLE `lp_agent_activity` (
  `hid` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `activity` varchar(250) NOT NULL,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lp_agent_activity`
--

INSERT INTO `lp_agent_activity` (`hid`, `agent_id`, `activity`, `date_created`) VALUES
(1, 1, 'LOGGED IN AT 2025-04-22', '2025-04-22'),
(2, 1, 'LOGGED IN AT 2025-04-22', '2025-04-22'),
(3, 1, 'LOGGED IN AT 2025-04-22', '2025-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `lp_blogs`
--

CREATE TABLE `lp_blogs` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL DEFAULT 1,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lp_consultation`
--

CREATE TABLE `lp_consultation` (
  `consultation_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `credit_goals` text NOT NULL,
  `credit_score` varchar(50) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  `housing_status` varchar(50) NOT NULL,
  `holding_credit_back` varchar(50) NOT NULL,
  `disputed` varchar(50) NOT NULL,
  `money_invest` text NOT NULL,
  `message` text NOT NULL,
  `consultation_time` date NOT NULL,
  `hour_availability` varchar(50) NOT NULL,
  `date_created` date DEFAULT curdate(),
  `code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lp_consultation`
--

INSERT INTO `lp_consultation` (`consultation_id`, `firstname`, `lastname`, `email`, `phone`, `credit_goals`, `credit_score`, `employment_status`, `housing_status`, `holding_credit_back`, `disputed`, `money_invest`, `message`, `consultation_time`, `hour_availability`, `date_created`, `code`) VALUES
(1, 'Gerald Mico', 'Facistol', 'gmfacistol@outlook.com', '09171439388', 'Buy house and lot', '600-700', 'Fulltime', 'Own', 'Late payment', 'Yes', 'test', 'test', '2025-04-17', '', '2025-04-17', 7049);

-- --------------------------------------------------------

--
-- Table structure for table `lp_newsletter`
--

CREATE TABLE `lp_newsletter` (
  `news_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lp_newsletter`
--

INSERT INTO `lp_newsletter` (`news_id`, `email`, `date_created`) VALUES
(1, 'gmfacistol@outlook.com', '2025-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `lp_talktous`
--

CREATE TABLE `lp_talktous` (
  `tid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date_created` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lp_talktous`
--

INSERT INTO `lp_talktous` (`tid`, `name`, `email`, `phone`, `message`, `date_created`) VALUES
(1, 'Gerald Mico Facistol', 'gmfacistol@outlook.com', '09531599179', 'ts', '2025-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lp_agent`
--
ALTER TABLE `lp_agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lp_agent_activity`
--
ALTER TABLE `lp_agent_activity`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `lp_blogs`
--
ALTER TABLE `lp_blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `lp_consultation`
--
ALTER TABLE `lp_consultation`
  ADD PRIMARY KEY (`consultation_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `lp_newsletter`
--
ALTER TABLE `lp_newsletter`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `lp_talktous`
--
ALTER TABLE `lp_talktous`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lp_agent`
--
ALTER TABLE `lp_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lp_agent_activity`
--
ALTER TABLE `lp_agent_activity`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lp_blogs`
--
ALTER TABLE `lp_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lp_consultation`
--
ALTER TABLE `lp_consultation`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lp_newsletter`
--
ALTER TABLE `lp_newsletter`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lp_talktous`
--
ALTER TABLE `lp_talktous`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

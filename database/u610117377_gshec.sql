-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2023 at 04:35 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u610117377_gshec`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `page_template_id` int(10) DEFAULT NULL,
  `frm_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `work_type` varchar(25) DEFAULT NULL,
  `work_name` varchar(50) DEFAULT NULL,
  `area_of_work` text DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `profile_link` varchar(100) DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `phone_no` varchar(12) DEFAULT NULL,
  `type_of_eng` text DEFAULT NULL,
  `visit_freq` varchar(25) DEFAULT NULL,
  `local_address` text DEFAULT NULL,
  `local_work` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`id`, `name`, `email`, `address`, `city`, `state`, `country`, `work_type`, `work_name`, `area_of_work`, `designation`, `cv`, `profile_link`, `permanent_address`, `phone_no`, `type_of_eng`, `visit_freq`, `local_address`, `local_work`, `created_at`) VALUES
(1, '', '', '', '', '', 'India', 'Institution', '', '', '', 'uploads/64502dbedc3bcCV Mayur Naik.pdf', '', '', '1234567890', '', '', '', '', '2023-05-01 21:23:10'),
(2, '', '', '', '', '', 'India', 'Institution', '', '', '', 'uploads/64502e44bf5a9CV Mayur Naik.pdf', '', '', '1234567890', '', '', '', '', '2023-05-01 21:25:24'),
(3, 'mayur', 'mayur@gmail.com', 'goa india', 'quepem', 'Goa', 'India', 'Institution', 'engineer', 'Lead', 'Developer', 'uploadfile6460b73e17ea1Localsale.xlsx', '', 'india goa', '8976543268', 'siper ikdd ', '', '', '', '2023-05-14 10:26:06'),
(4, 'mayur', 'mayur@gmail.com', 'goa india', 'quepem', 'Goa', 'India', 'Institution', 'engineer', 'Lead', 'Developer', 'uploads/6460b8da22cd4Localsale (1).xlsx', '', 'india goa', '8976543268', 'siper ikdd ', '', '', '', '2023-05-14 10:32:58'),
(5, 'mayur', 'mayur@gmail.com', 'goa india', 'quepem', 'Goa', 'India', 'Institution', 'engineer', 'Lead', 'Developer', 'uploads/6460b93d79123Localsale (1).xlsx', '', 'india goa', '8976543268', 'siper ikdd ', '', '', '', '2023-05-14 10:34:37'),
(6, 'mayur', 'mayur@gmail.com', 'goa india', 'quepem', 'Goa', 'India', 'Institution', 'engineer', 'Lead', 'Developer', 'uploads/6460b9adc66b7CV Mayur Naik.pdf', '', 'india goa', '8976543268', 'siper ikdd ', '', '', '', '2023-05-14 10:36:29'),
(7, 'mayur', 'mayur@gmail.com', 'goa india', 'quepem', 'Goa', 'India', 'Institution', 'engineer', 'Lead', 'Developer', 'uploads/6460bb45e8b2cLocalsale.xlsx', '', 'india goa', '8976543268', 'siper ikdd ', '', '', '', '2023-05-14 10:43:17'),
(8, 'Mayur', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', 'AAA', 'WERT', 'Admin', 'uploads/646210981e930CV Mayur Naik.pdf', '', '10/1 DEULMOL SHIRVOI', '8605123116', '234', '', '', '', '2023-05-15 10:59:36'),
(9, 'Mayur', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', 'AAA', 'WERT', 'Admin', 'uploads/646210c126843CV Mayur Naik.pdf', '', '10/1 DEULMOL SHIRVOI', '8605123116', '234', '', '', '', '2023-05-15 11:00:17'),
(10, 'Mayur', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', 'AAA', 'WERT', 'Admin', 'uploads/6462129792af7Localsale.xlsx', '', '10/1 DEULMOL SHIRVOI', '8605123116', '234', '', '', '', '2023-05-15 11:08:07'),
(11, 'Mayur ', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', ' EEFSDF', '2345', 'Software Engineer', '', 'https://open.spotify.com/collection/tracks', '10/1 DEULMOL SHIRVOI', '0726289253', 'DSFFDSFSD', '', '23ERR', '3R3E3Q', '2023-05-15 11:14:14'),
(12, 'Mayur ', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', ' EEFSDF', '2345Y', '4454', 'uploads/64621440a9080CV Mayur Naik.pdf', '', '10/1 DEULMOL SHIRVOI', '0726289253', '12345YU', '', 'ERETRY', 'WAE AAEAW', '2023-05-15 11:15:12'),
(13, 'Mayur ', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', ' EEFSDF', '2345Y', '4454', 'uploads/64621458b1b73Localsale.xlsx', '', '10/1 DEULMOL SHIRVOI', '0726289253', '12345YU', '', 'ERETRY', 'WAE AAEAW', '2023-05-15 11:15:36'),
(14, 'Mayur ', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', '123456', '12345', '12345', '', 'https://gshec.craftitt.com', '10/1 DEULMOL SHIRVOI', '0726289253', 'frae ssds', '', '', '', '2023-05-15 12:45:52'),
(15, 'Mayur ', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', '123456', 'sdsd ', 'qwqw', 'uploads/646229a2aabedCV Mayur Naik.pdf', '', '10/1 DEULMOL SHIRVOI', '0726289253', 'ertt', '', '', '', '2023-05-15 12:46:26'),
(16, 'Mayur ', 'mayurnaik123116@gmail.com', '10/1 DEULMOL SHIRVOI', 'QUEPEM', 'Goa', 'India', 'Institution', ' EEFSDF', 'q234rer', 'erseresr', 'uploads/64622b17cd51bLocalsale (1).xlsx', '', '10/1 DEULMOL SHIRVOI', '0726289253', 'asasasas', '', '', '', '2023-05-15 12:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `scholar_recommendation`
--

CREATE TABLE `scholar_recommendation` (
  `id` int(11) NOT NULL,
  `scholar_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_no` varchar(12) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `affiliation` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholar_recommendation`
--

INSERT INTO `scholar_recommendation` (`id`, `scholar_id`, `name`, `email`, `phone_no`, `designation`, `affiliation`, `created_at`) VALUES
(1, 11, '33343', 'mayurnaik123116@gmail.com', '34434344', '3443', '4343', '2023-05-15 11:14:14'),
(2, 12, 'WEWWEW', 'EEWEE', '1234567890', 'EWEWE', 'GFGFFG', '2023-05-15 11:15:12'),
(3, 13, 'WEWWEW', 'EEWEE', '1234567890', 'EWEWE', 'GFGFFG', '2023-05-15 11:15:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholar_recommendation`
--
ALTER TABLE `scholar_recommendation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `scholar_recommendation`
--
ALTER TABLE `scholar_recommendation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

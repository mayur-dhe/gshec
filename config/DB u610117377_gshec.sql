-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2023 at 07:34 PM
-- Server version: 10.5.15-MariaDB-cll-lve
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
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_template_id` int(10) DEFAULT NULL,
  `frm_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antigua & Barbuda'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'Aruba'),
(12, 'Australia'),
(13, 'Austria'),
(14, 'Azerbaijan'),
(15, 'Bahamas'),
(16, 'Bahrain'),
(17, 'Bangladesh'),
(18, 'Barbados'),
(19, 'Belarus'),
(20, 'Belgium'),
(21, 'Belize'),
(22, 'Benin'),
(23, 'Bermuda'),
(24, 'Bhutan'),
(25, 'Bolivia'),
(26, 'Bonaire'),
(27, 'Bosnia & Herzegovina'),
(28, 'Botswana'),
(29, 'Brazil'),
(30, 'British Indian Ocean Ter'),
(31, 'Brunei'),
(32, 'Bulgaria'),
(33, 'Burkina Faso'),
(34, 'Burundi'),
(35, 'Cambodia'),
(36, 'Cameroon'),
(37, 'Canada'),
(38, 'Canary Islands'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Channel Islands'),
(44, 'Chile'),
(45, 'China'),
(46, 'Christmas Island'),
(47, 'Cocos Island'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Congo'),
(51, 'Cook Islands'),
(52, 'Costa Rica'),
(53, 'Cote DIvoire'),
(54, 'Croatia'),
(55, 'Cuba'),
(56, 'Curacao'),
(57, 'Cyprus'),
(58, 'Czech Republic'),
(59, 'Denmark'),
(60, 'Djibouti'),
(61, 'Dominica'),
(62, 'Dominican Republic'),
(63, 'East Timor'),
(64, 'Ecuador'),
(65, 'Egypt'),
(66, 'El Salvador'),
(67, 'Equatorial Guinea'),
(68, 'Eritrea'),
(69, 'Estonia'),
(70, 'Ethiopia'),
(71, 'Falkland Islands'),
(72, 'Faroe Islands'),
(73, 'Fiji'),
(74, 'Finland'),
(75, 'France'),
(76, 'French Guiana'),
(77, 'French Polynesia'),
(78, 'French Southern Ter'),
(79, 'Gabon'),
(80, 'Gambia'),
(81, 'Georgia'),
(82, 'Germany'),
(83, 'Ghana'),
(84, 'Gibraltar'),
(85, 'Great Britain'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guinea'),
(93, 'Guyana'),
(94, 'Haiti'),
(95, 'Hawaii'),
(96, 'Honduras'),
(97, 'Hong Kong'),
(98, 'Hungary'),
(99, 'Iceland'),
(100, 'Indonesia'),
(101, 'India'),
(102, 'Iran'),
(103, 'Iraq'),
(104, 'Ireland'),
(105, 'Isle of Man'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Japan'),
(110, 'Jordan'),
(111, 'Kazakhstan'),
(112, 'Kenya'),
(113, 'Kiribati'),
(114, 'Korea North'),
(115, 'Korea South'),
(116, 'Kuwait'),
(117, 'Kyrgyzstan'),
(118, 'Laos'),
(119, 'Latvia'),
(120, 'Lebanon'),
(121, 'Lesotho'),
(122, 'Liberia'),
(123, 'Libya'),
(124, 'Liechtenstein'),
(125, 'Lithuania'),
(126, 'Luxembourg'),
(127, 'Macau'),
(128, 'Macedonia'),
(129, 'Madagascar'),
(130, 'Malaysia'),
(131, 'Malawi'),
(132, 'Maldives'),
(133, 'Mali'),
(134, 'Malta'),
(135, 'Marshall Islands'),
(136, 'Martinique'),
(137, 'Mauritania'),
(138, 'Mauritius'),
(139, 'Mayotte'),
(140, 'Mexico'),
(141, 'Midway Islands'),
(142, 'Moldova'),
(143, 'Monaco'),
(144, 'Mongolia'),
(145, 'Montserrat'),
(146, 'Morocco'),
(147, 'Mozambique'),
(148, 'Myanmar'),
(149, 'Nambia'),
(150, 'Nauru'),
(151, 'Nepal'),
(152, 'Netherland Antilles'),
(153, 'Netherlands (Holland, Europe)'),
(154, 'Nevis'),
(155, 'New Caledonia'),
(156, 'New Zealand'),
(157, 'Nicaragua'),
(158, 'Niger'),
(159, 'Nigeria'),
(160, 'Niue'),
(161, 'Norfolk Island'),
(162, 'Norway'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Palau Island'),
(166, 'Palestine'),
(167, 'Panama'),
(168, 'Papua New Guinea'),
(169, 'Paraguay'),
(170, 'Peru'),
(171, 'Philippines'),
(172, 'Pitcairn Island'),
(173, 'Poland'),
(174, 'Portugal'),
(175, 'Puerto Rico'),
(176, 'Qatar'),
(177, 'Republic of Montenegro'),
(178, 'Republic of Serbia'),
(179, 'Reunion'),
(180, 'Romania'),
(181, 'Russia'),
(182, 'Rwanda'),
(183, 'St Barthelemy'),
(184, 'St Eustatius'),
(185, 'St Helena'),
(186, 'St Kitts-Nevis'),
(187, 'St Lucia'),
(188, 'St Maarten'),
(189, 'St Pierre & Miquelon'),
(190, 'St Vincent & Grenadines'),
(191, 'Saipan'),
(192, 'Samoa'),
(193, 'Samoa American'),
(194, 'San Marino'),
(195, 'Sao Tome & Principe'),
(196, 'Saudi Arabia'),
(197, 'Senegal'),
(198, 'Seychelles'),
(199, 'Sierra Leone'),
(200, 'Singapore'),
(201, 'Slovakia'),
(202, 'Slovenia'),
(203, 'Solomon Islands'),
(204, 'Somalia'),
(205, 'South Africa'),
(206, 'Spain'),
(207, 'Sri Lanka'),
(208, 'Sudan'),
(209, 'Suriname'),
(210, 'Swaziland'),
(211, 'Sweden'),
(212, 'Switzerland'),
(213, 'Syria'),
(214, 'Tahiti'),
(215, 'Taiwan'),
(216, 'Tajikistan'),
(217, 'Tanzania'),
(218, 'Thailand'),
(219, 'Togo'),
(220, 'Tokelau'),
(221, 'Tonga'),
(222, 'Trinidad & Tobago'),
(223, 'Tunisia'),
(224, 'Turkey'),
(225, 'Turkmenistan'),
(226, 'Turks & Caicos Is'),
(227, 'Tuvalu'),
(228, 'Uganda'),
(229, 'United Kingdom'),
(230, 'Ukraine'),
(231, 'United Arab Emirates'),
(232, 'United States of America'),
(233, 'Uruguay'),
(234, 'Uzbekistan'),
(235, 'Vanuatu'),
(236, 'Vatican City State'),
(237, 'Venezuela'),
(238, 'Vietnam'),
(239, 'Virgin Islands (Brit)'),
(240, 'Virgin Islands (USA)'),
(241, 'Wake Island'),
(242, 'Wallis & Futana Is'),
(243, 'Yemen'),
(244, 'Zaire'),
(245, 'Zambia'),
(246, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worktype` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areaofwork` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitfreq` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_add` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_inst` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othername` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otheremail` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
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
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

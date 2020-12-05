-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 22, 2020 at 02:34 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `lat`, `lon`) VALUES
(1, 'Ancient Mound Amin', 29.973003, 76.888504),
(2, 'Bhadrakali Temple', 29.979208, 76.831512),
(3, 'Bhishma Kunda', 29.966694, 76.799446),
(4, 'BrahmaSarovar', 29.961399, 76.828598),
(15, 'Sannihit Sarovar', 29.981199, 76.827904),
(9, 'Panorama', 29.965500, 76.833900),
(5, 'Gurudwara Mastgarh', 29.973003, 76.888504),
(6, 'Jyoitsar Tirth', 29.961735, 76.770927),
(7, 'Kalpana Chawla Planetorium', 29.962200, 76.790298),
(8, 'Kartikey Temple', 29.969513, 76.878281),
(10, 'Pathar Masjid', 29.976101, 76.828201),
(11, 'Pashupatinath Temple', 29.969513, 76.878281),
(12, 'Prachin Shiva Temple', 29.969513, 76.878281),
(13, 'Raja Harsh Ka Qila', 29.969513, 76.878281),
(14, 'Raja Karna Ka Qila', 29.969513, 76.878281),
(16, 'Sheikh Chilli\'s Tomb', 29.976101, 76.828201),
(17, 'Shri Krishna Museum', 29.965401, 76.834000),
(18, 'Sthaneshwar Mahadev Temple', 29.969513, 76.878281),
(19, 'Vishwamitra ka tila', 29.969513, 76.878281),
(20, 'Dharohar Museum', 29.969513, 76.878281),
(21, 'OP Jindal Park', 29.969513, 76.878281);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

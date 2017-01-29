-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306

-- Generation Time: Jan 29, 2017 at 04:52 PM
-- Server version: 5.5.33
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mchacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(255) NOT NULL,
  `o_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `s_time` varchar(255) NOT NULL,
  `e_time` varchar(255) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `o_id`, `description`, `s_time`, `e_time`) VALUES
(1, 'Billy Idol', 2, 'Bell Stage', '2017/07/07 09:00 PM', '2017/07/07 10:00 PM'),
(2, 'Schoolboy Q', 2, 'Claridge Stage', '2017/07/07 08:00 PM', '2017/07/07 09:00 PM'),
(3, 'Suits N'' Toques', 2, 'River Stage', '2017/07/07 05:00 PM', '2017/07/07 05:45 PM'),
(4, 'Scattered Clouds', 2, 'River Stage', '2017/07/07 06:00 PM', '2017/07/07 06:30 PM'),
(5, 'Lost To The River', 2, 'Claridge Stage', '2017/07/07 05:30 PM', '2017/07/07 06:15 PM'),
(6, 'Frayd', 2, 'Claridge Stage', '2017/07/07 06:30 PM', '2017/07/07 07:00 PM'),
(7, 'Tyler Kealey', 2, 'Claridge Stage', '2017/07/07 07:15 PM', '2017/07/07 08:00 PM'),
(8, 'The Flava Factory', 2, 'River Stage', '2017/07/07 06:30 PM', '2017/07/07 07:00 PM'),
(9, 'Joe Jackson', 2, 'Bell Stage', '2017/07/07 07:30 PM', '2017/07/07 08:30 PM'),
(10, 'David Good', 2, 'Bell Stage', '2017/07/07 05:00 PM', '2017/07/07 06:00 PM'),
(11, 'DJ Acro', 2, 'Electric Stage', '2017/07/07 08:00 PM', '2017/07/07 09:00 PM'),
(12, 'Son Little', 2, 'Electric Stage', '2017/07/07 05:30 PM', '2017/07/07 06:00 PM'),
(13, 'The Head and The Heart', 2, 'Electric Stage', '2017/07/07 06:15 PM', '2017/07/07 06:30 PM'),
(14, 'Peter Njorn and John', 2, 'Electric Stage', '2017/07/07 09:30 PM', '2017/07/07 10:30 PM'),
(15, 'Coeur de Pirate', 2, 'River Stage', '2017/08/07 05:30 PM', '2017/08/07 06:00 PM'),
(16, 'Banners', 3, 'Scene de la Riviere Virgin Mobile ', '2016/29/07 01:00 PM', '2016/29/07 01:40 PM'),
(17, 'Caveboy', 3, 'Scene Verte', '2016/29/07 01:00 PM', '2016/29/07 01:35 PM'),
(18, 'Haute', 3, 'Scene Piknic Electronic', '2016/29/07 01:00 PM', '2016/29/07 02:00 PM'),
(19, 'Dragonette', 3, 'Scene De La Montage', '2016/29/07 01:40 PM', '2016/29/07 02:25 PM'),
(20, 'Elephant Stone', 3, 'Scene De La Vallee', '2016/29/07 01:35 PM', '2016/29/07 02:05 PM'),
(21, 'La Famille Quellette', 3, 'Scene Des Arbres', '2016/29/07 01:35 PM', '2016/29/07 02:05 PM'),
(22, 'Jeremy Loops', 3, 'Scene Verte', '2016/29/07 02:05 PM', '2016/29/07 02:45 PM'),
(23, 'Kaleo', 3, 'Scene De La Riviere', '2016/29/07 02:25 PM', '2016/29/07 03:10 PM'),
(24, 'Classixx', 3, 'Scene Piknic Electronik', '2016/29/07 02:00 PM', '2016/29/07 03:00 PM'),
(25, 'Jack Garratt', 3, 'Scene De La Vallee', '2016/29/07 02:45 PM', '2016/29/07 03:25 PM'),
(26, 'Safia Nolin', 3, 'Scene Des Arbres', '2016/29/07 02:45 PM', '2016/29/07 03:25 PM'),
(27, 'Elle King', 3, 'Scene De La Montagne', '2016/29/07 03:10 PM', '2016/29/07 03:55 PM'),
(28, 'Goldlink', 3, 'Scene Verte', '2016/29/07 03:25 PM', '2016/29/07 04:10 PM'),
(29, 'Snakehips', 3, 'Scene Piknic Electronik', '2016/29/07 03:00 PM', '2016/29/07 04:00 PM'),
(30, 'Silversun Pickups', 3, 'Scene De La Riviere', '2016/29/07 03:55 PM', '2016/29/07 04:40 PM'),
(31, 'Oh Wonder', 3, 'Scene De La Vallee', '2016/29/07 04:10 PM', '2016/29/07 04:55 PM'),
(32, 'Dear Rouge', 3, 'Scene Des Arbres', '2016/29/07 04:10 PM', '2016/29/07 04:55 PM'),
(33, 'Sophie', 3, 'Scene Piknic Electronik', '2016/29/07 04:00 PM', '2016/29/07 05:00 PM'),
(34, 'Passenger', 3, 'Scene De La Montagne', '2016/29/07 04:40 PM', '2016/29/07 05:30 PM'),
(35, 'Wolf Parade', 3, 'Scene Verte', '2016/29/07 04:55 PM', '2016/29/07 05:40 PM'),
(36, 'Hi-Lo', 3, 'Scene Piknic Electronik', '2016/29/07 05:00 PM', '2016/29/07 06:00 PM'),
(37, 'Beirut', 3, 'Scene De La Riviere', '2016/29/07 05:30 PM', '2016/29/07 06:20 PM'),
(38, 'The Wombats', 3, 'Scene De La Vallee', '2016/29/07 05:40 PM', '2016/29/07 06:25 PM'),
(39, 'White Lung', 3, 'Scene Des Arbres', '2016/29/07 05:40 PM', '2016/29/07 06:25 PM'),
(40, 'Boris Brejcha', 3, 'Scene Piknic Electronik', '2016/29/07 06:00 PM', '2016/29/07 07:00 PM'),
(41, 'Cypress Hill', 3, 'Scene De La Montagne', '2016/29/07 06:20 PM', '2016/29/07 07:20 PM'),
(42, 'Bloc Party', 3, 'Scene Verte', '2016/29/07 06:25 PM', '2016/29/07 07:15 PM'),
(43, 'Years & Years', 3, 'Scene De La Vallee', '2016/29/07 07:15 PM', '2016/29/07 08:00 PM'),
(44, 'Marian Hill', 3, 'Scene Des Arbres', '2016/29/07 07:15 PM', '2016/29/07 08:00 PM'),
(45, 'Half Moon Run', 3, 'Scene De La Riviere', '2016/29/07 07:20 PM', '2016/29/07 08:20 PM'),
(46, 'Paul Kalkbrenner', 3, 'Scene Piknic Electronik', '2016/29/07 07:00 PM', '2016/29/07 08:00 PM'),
(47, 'The Underachievers', 3, 'Scene Verte', '2016/29/07 08:00 PM', '2016/29/07 09:00 PM'),
(48, 'The Lumineers', 3, 'Scene De La Montagne', '2016/29/07 08:20 PM', '2016/29/07 09:20 PM'),
(49, 'Vince Staples', 3, 'Scene De La Vallee', '2016/29/07 09:00 PM', '2016/29/07 10:00 PM'),
(50, 'Lapsley', 3, 'Scene De La Vallee', '2016/29/07 09:00 PM', '2016/29/07 09:50 PM'),
(51, 'Red Hot Chili Peppers', 3, 'Scene De La Riviere', '2016/29/07 09:20 PM', '2016/29/07 10:50 PM'),
(52, 'Flume', 3, 'Scene Verte', '2016/29/07 09:50 PM', '2016/29/07 10:50 PM'),
(53, 'Boys Noize', 3, 'Scene Piknic Electronik', '2016/29/07 09:00 PM', '2016/29/07 10:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_name` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `s_date` varchar(255) NOT NULL,
  `e_date` varchar(255) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`o_id`, `o_name`, `u_id`, `location`, `s_date`, `e_date`) VALUES
(2, 'Bluesfest', 5, 'Ottawa, Ontario, Canada', 'July 7, 2016', 'July 17, 2016'),
(3, 'Osheaga', 3, 'Montreal, PQ', '2016/29/07', '2016/31/07');

-- --------------------------------------------------------

--
-- Table structure for table `optimizations`
--

CREATE TABLE `optimizations` (
  `op_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`op_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `f_name`, `l_name`, `email`, `password`, `salt`) VALUES
(3, 'Colin', 'Bingham', '13cpb3@queensu.ca', 'ac', ''),
(4, 'Vinith', 'Suriyakumar', 'suriyaku@gmail.com', 'mchacks2017', ''),
(5, 'Vinith', 'Suriyakumar', 'suriyaku@gmail.com', 'mchacks2017', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

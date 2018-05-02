-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- المزود: 127.0.0.1
-- أنشئ في: 02 مايو 2018 الساعة 23:12
-- إصدارة المزود: 5.5.57-0ubuntu0.14.04.1
-- PHP إصدارة: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `mydb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `rate` float NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`ID`, `title`, `image`, `author`, `date`, `rate`, `price`) VALUES
(1, 'Enlightenment Now: The Case for Reason, Science, Humanism, and Progress', 'https://images.gr-assets.com/books/1517949382l/35696171.jpg', 'Steven Pinker', 'Mar 13 2018', 4.25, 57),
(2, 'The Future of Humanity: Terraforming Mars, Interstellar Travel, Immortality, and Our Destiny Beyond', 'https://images.gr-assets.com/books/1508947061l/36407347.jpg', 'Michio Kaku', 'Feb 20 2018', 4.11, 60),
(5, 'Quirky: The Remarkable Story of the Traits, Foibles, and Genius of Breakthrough Innovators Who Changed the World', 'https://images.gr-assets.com/books/1497940936l/35397862.jpg', 'Melissa A. Schilling', 'Mar 12 2012', 4.24, 50),
(6, 'Lost Connections: Uncovering the Real Causes of Depression - and the Unexpected Solutions', 'https://images.gr-assets.com/books/1500785858l/34921573.jpg', 'Johann Hari', 'Jan 23 2018', 4.34, 77);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

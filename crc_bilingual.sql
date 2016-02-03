-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 03:28 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `crc_bilingual`
--
CREATE DATABASE IF NOT EXISTS `crc_bilingual` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crc_bilingual`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book` enum('HOME','VANIER','GAME','ROBOT','JOURNALISM','TEAM','GALLERY','TUTORIAL','SPONSORS') NOT NULL,
  `lang` enum('EN','FR') NOT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `subpage` enum('BUILD','KIOSK','VIDEO','WEB') DEFAULT NULL,
  `pageid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `book_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COMMENT='stores all text for description pages';

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book`, `lang`, `content`, `subpage`, `pageid`) VALUES
  (1, 'VANIER', 'EN', ' ', '', 1),
  (2, 'VANIER', 'EN', ' ', NULL, 2),
  (3, 'VANIER', 'EN', '<div class="book-content">\r\n<h1>Youth 3</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Being born out of wedlock in the puritan America of the 1950s, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<p>2</p>\r\n', '', 3),
  (4, 'VANIER', 'EN', 'page 4', NULL, 4),
  (5, 'VANIER', 'EN', 'page 5', NULL, 5),
  (6, 'VANIER', 'EN', 'page 6', NULL, 6),
  (7, 'VANIER', 'EN', 'page 7', NULL, 7),
  (8, 'VANIER', 'EN', 'page 8', NULL, 8),
  (10, 'VANIER', 'EN', ' <div class="book-content">\r\n<h1>Youth 10ffs</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Being born out of wedlock in the puritan America of the 1950s, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<p>2</p>\r\n', NULL, 9),
  (11, 'VANIER', 'EN', ' <div class="book-content">\r\n<h1>Youth 11</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Why does the other page not work, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<span class=''page-number''>11</span>\r\n', NULL, 10),
  (12, 'VANIER', 'EN', '<div class="book-content">\r\n<h1>Wilderness years</h1>\r\n<h2>Still Useless</h2>\r\n<p> "Becaiuse picture page example" <p>\r\n<p><img class="left-pic zoom-this" src="samples/steve-jobs/pics/21.jpg" width="172" height="213"> pictures n shit. \r\n the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately.</p>\r\n\r\n</div>\r\n<span class=''page-number''>12</span>', NULL, 11),
  (13, 'VANIER', 'EN', ' <div class="book-content">\r\n<h1>Fucking Book</h1>\r\n\r\n<h2>Jack ass</h2>\r\n\r\n<p>Steve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson, and his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.</p>\r\n\r\n<p>Why does the other page not work, the baby was put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately, the candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the war. Paul was a machinist from the Midwest who had</p>\r\n</div>\r\n\r\n<span class=''page-number''>13</span>\r\n', NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

DROP TABLE IF EXISTS `translate`;
CREATE TABLE IF NOT EXISTS `translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(20) DEFAULT NULL,
  `lang` enum('EN','FR') DEFAULT NULL,
  `text` longtext,
  `page` enum('HOME','GAME','VANIER','ROBOT','JOURNALISM','TUTORIAL','SPONSORS','GALLERY') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `table_name_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `translate`
--

INSERT INTO `translate` (`id`, `class`, `lang`, `text`, `page`) VALUES
  (1, 'TITLE', 'EN', '<div class="book-content">\r\n\r\n<h1>Youth</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p class="capital">\r\nSteve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson,\r\nand his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.\r\n</p>\r\n\r\n\r\n<p>\r\nBeing born out of wedlock in the puritan America of the 1950s, the baby\r\nwas put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately,\r\nthe candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the\r\nwar. Paul was a machinist from the Midwest who had\r\n</p>\r\n\r\n\r\n</div>\r\n<span class="page-number">1</span>', 'ROBOT'),
  (2, 't2', 'EN', '<div class="book-content">\r\n\r\n<h1>Youth2</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p class="capital">\r\nSteve Jobs was born on February 24, 1955, in the city of San Francisco. His biological mother was an unwed graduate student named Joanne Simpson,\r\nand his biological father was either a political science or mathematics professor, a native Syrian named Abdulfattah John Jandali.\r\n</p>\r\n\r\n\r\n<p>\r\nBeing born out of wedlock in the puritan America of the 1950s, the baby\r\nwas put up for adoption. Joanne had a college education, and she insisted that the future parents of her boy be just as well educated. Unfortunately,\r\nthe candidates, Paul and Clara Jobs, did not meet her expectations: they were a lower-middle class couple that had settled in the Bay Area after the\r\nwar. Paul was a machinist from the Midwest who had\r\n</p>\r\n\r\n\r\n</div>\r\n<span class="page-number">2</span>', 'VANIER');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_user_id_uindex` (`user_id`),
  UNIQUE KEY `users_username_uindex` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
  (1, 'u3', 'fa074610667173c1d6e863930c2d2aee82a2323de25692ed36de4f87aeb3666f', 'Andrew', 'Hanichkovsky');

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 06:48 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crc_bilingual`
--
CREATE DATABASE IF NOT EXISTS `crc_bilingual`
  DEFAULT CHARACTER SET latin1
  COLLATE latin1_swedish_ci;
USE `crc_bilingual`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id`      INT(11)                                                                                                            NOT NULL AUTO_INCREMENT,
  `book`    ENUM('HOME', VANIER, 'GAME', 'ROBOT', 'JOURNALISM', 'TEAM', 'GALLERY', 'TUTORIAL', 'SPONSORS') NOT NULL,
  `lang`    ENUM('EN', 'FR')                                                                                               NOT NULL,
  `content` VARCHAR(1000)                                                                                                               DEFAULT NULL,
  `subpage` ENUM('BUILD', 'KIOSK', 'VIDEO', 'WEB')                                                                              DEFAULT NULL,
  `pageid`  INT(11)                                                                                                            NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `book_id_uindex` (`id`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 11
  DEFAULT CHARSET = latin1
  COMMENT = ' stores ALL TEXT FOR description pages';

--
-- Truncate table before insert `book`
--

TRUNCATE TABLE `book`;
--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book`, `lang`, `content`, `subpage`, `pageid`) VALUES
  (1, 'VANIER', 'EN',
      '< DIV class = "book-content" > \r\n\r\n<h1>Youth2</h1>\r\n\r\n<h2>The jobs family</h2>\r\n\r\n<p class="capital">\r\nSteve Jobs was born ON February 24, 1955, IN the city of San Francisco.His biological mother was an unwed
      graduate student named Joanne Simpson, \r\nand his biological father was either a political science OR mathematics
      professor,
      a native Syrian named Abdulfattah John Jandali.\r\n</p>\r\n\r\n\r\n<p>\r\nBeing born OUT of wedlock IN the puritan America of the 1950s,
      the baby\r\nwas put up FOR adoption.Joanne had a college education, AND she insisted that the future parents of
                                                                              her boy be just AS well educated.
      Unfortunately, \r\nthe candidates, Paul AND Clara Jobs,
   did NOT meet her expectations:they were a lower-middle class couple that had settled IN the Bay Area AFTER the\r\nwar.Paul was a machinist FROM the Midwest who had\r\n</p>\r\n\r\n\r\n</ DIV >\r\n<span class="page-number">2< / span > ',
   NULL, 1),
  (2, 'VANIER', 'EN',
   ' < DIV class = "book-content" > \r\n\r\n<h1> PAGE 2</h1>\r\n\r\n<h2>god damn this</h2>\r\n</ DIV >', NULL, 2),
  (3, 'VANIER', 'EN', 'PAGE 3', NULL, 3),
  (4, 'VANIER', 'EN', 'PAGE 4', NULL, 4),
  (5, 'VANIER', 'EN', 'PAGE 5', NULL, 5),
  (6, 'VANIER', 'EN', 'PAGE 6', NULL, 6),
  (7, 'VANIER', 'EN', 'PAGE 7', NULL, 7),
  (8, 'VANIER', 'EN', 'PAGE 8', NULL, 8),
  (9, 'VANIER', 'EN', 'PAGE 9', NULL, 9),
  (10, 'VANIER', 'EN', 'PAGE 10', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id`    INT(11)     NOT NULL AUTO_INCREMENT,
  `username`   VARCHAR(20) NOT NULL,
  `password`   VARCHAR(64) NOT NULL,
  `first_name` VARCHAR(30) NOT NULL,
  `last_name`  VARCHAR(30) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_user_id_uindex` (`user_id`),
  UNIQUE KEY `users_username_uindex` (`username`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 2
  DEFAULT CHARSET = latin1;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
  (1, 'u3', 'fa074610667173c1d6e863930c2d2aee82a2323de25692ed36de4f87aeb3666f', 'Andrew', 'Hanichkovsky');

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;

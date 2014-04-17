-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 17, 2014 at 10:23 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `iut_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tag_billet`
--

CREATE TABLE `tag_billet` (
  `tag_id` int(11) NOT NULL,
  `billet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag_billet`
--

INSERT INTO `tag_billet` (`tag_id`, `billet_id`) VALUES
(17, 51),
(18, 51),
(19, 51),
(17, 52),
(18, 52),
(19, 52),
(17, 53),
(18, 53),
(19, 53),
(20, 54),
(21, 54),
(22, 54);

-- phpMyAdmin SQL Dump
-- version 3.2.2.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2010 at 01:14 AM
-- Server version: 5.1.41
-- PHP Version: 5.2.10-2ubuntu6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `alan`
--

-- --------------------------------------------------------

--
-- Table structure for table `snaptics`
--

CREATE TABLE IF NOT EXISTS `snaptics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `snaptic_user_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `type` enum('trip_begin','trip_end','gps') NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `snaptics`
--


-- --------------------------------------------------------

--
-- Table structure for table `snaptic_users`
--

CREATE TABLE IF NOT EXISTS `snaptic_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL COMMENT 'in plain text for some fucking reason',
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `snaptic_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `snaptic_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `initial_comment` text NOT NULL,
  `final_comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trips`
--


-- --------------------------------------------------------

--
-- Table structure for table `trip_check_ins`
--

CREATE TABLE IF NOT EXISTS `trip_check_ins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `long` geometry NOT NULL,
  `lat` geometry NOT NULL,
  `timestamp` int(11) NOT NULL COMMENT 'elapsed seconds since the beginning of the trip as reported by the client',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trip_check_ins`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `snaptic_user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--



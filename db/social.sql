-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 06:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lawyer314`
--

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
`social_id` int(11) NOT NULL,
  `social_name` varchar(255) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_class` varchar(255) NOT NULL,
  `social_status` int(11) NOT NULL DEFAULT '1',
  `social_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `social_name`, `social_url`, `social_class`, `social_status`, `social_deleted`) VALUES
(1, 'Facebook', '', 'fab fa-facebook-f', 1, 0),
(2, 'Twitter', '', 'fab fa-twitter', 1, 0),
(3, 'Google +', '', 'fab fa-google-plus', 1, 0),
(4, 'Linkedin', '', 'fab fa-linkedin', 1, 0),
(5, 'Instagram', '', 'fab fa-instagram', 1, 0),
(6, 'Pinterest', '', 'fab fa-pinterest', 1, 0),
(7, 'Youtube', '', 'fab fa-youtube', 1, 0),
(8, 'Vkontakte', '', 'fab fa-vk', 1, 0),
(9, 'Stack Overflow', '', 'fab fa-stack-overflow', 1, 0),
(10, 'Slack', '', 'fab fa-slack', 1, 0),
(11, 'Github', '', 'fab fa-github', 1, 0),
(12, 'Comments', '', 'fa fa-comments', 1, 0),
(13, 'Email', '', 'fa fa-envelope', 1, 0),
(14, 'Dribbble', '', 'fab fa-dribbble', 1, 0),
(15, 'Snapchat Ghost', '', 'fab fa-snapchat-ghost', 1, 0),
(16, 'Skype', '', 'fab fa-skype', 1, 0),
(17, 'Vimeo', '', 'fab fa-vimeo', 1, 0),
(18, 'Vine', '', 'fab fa-vine', 1, 0),
(19, 'Four Square', '', 'fab fa-foursquare', 1, 0),
(20, 'Stumble Upon', '', 'fab fa-stumbleupon', 1, 0),
(21, 'Flickr', '', 'fab fa-flickr', 1, 0),
(22, 'Reddit', '', 'fab fa-reddit', 1, 0),
(23, 'Rss', '', 'fab fa-rss', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `social`
--
ALTER TABLE `social`
 ADD PRIMARY KEY (`social_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

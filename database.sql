-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2017 at 04:37 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CS50Final`
--
CREATE DATABASE IF NOT EXISTS `CS50Final` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `CS50Final`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) UNSIGNED NOT NULL,
  `user_id` int(255) UNSIGNED DEFAULT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_city` varchar(255) NOT NULL,
  `post_phone` varchar(255) NOT NULL,
  `post_email` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `animal_type` varchar(255) NOT NULL,
  `animal_sex` varchar(255) DEFAULT 'unknown',
  `animal_name` varchar(255) DEFAULT NULL,
  `animal_health` varchar(255) NOT NULL,
  `animal_age` varchar(255) DEFAULT NULL,
  `post_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_name`, `post_city`, `post_phone`, `post_email`, `picture`, `animal_type`, `animal_sex`, `animal_name`, `animal_health`, `animal_age`, `post_date`) VALUES
(74, 26, 'Marcelo', 'Miami Beach', '305', 'marcelo@gmail.com', '4285-cats-master-header.png', 'cat', 'male', 'Gandalf', 'good', 'adult', '04/26/2017'),
(76, 26, 'Marcelo', 'Miami Beach', '305-283-9865', 'marcelo@gmail.com', '68533-cats-master-header.png', 'cat', 'male', 'Gandalf', 'good', 'adult', '04/26/2017'),
(77, 26, 'Mark', 'Miami', '(305)2839176', '', '3966-download.jpeg', 'dog', 'male', 'Boris', 'good', 'adult', '04/26/2017'),
(78, 30, 'Mike', 'Doral', '305-572-5837', '', '61023-what-to-feed-a-stray-cat-without-cat-food-hungry-e1474382940248.png', 'cat', 'female', '', 'unknown', 'infant', '04/27/2017'),
(79, 30, 'Tom', 'Homestead', '305.698.3938', '', '36581-1394744352493pug.jpg', 'dog', 'male', 'Doug', 'good', 'adult', '04/27/2017'),
(80, 30, 'Tom', 'North Miami', '786-567-2826', '', '68031-eyoMG92k.jpg', 'dog', 'female', '', 'good', 'adult', '04/27/2017'),
(81, 30, 'Fry', 'Miami', '789.382.2837', 'fry@planetexpress.com', '41901-92c889d5f8ade33561bfa0f10b019d24.jpg', 'other', 'male', 'Nibbler', 'good', 'adult', '04/27/2017');

-- --------------------------------------------------------

--
-- Table structure for table `shelters`
--

CREATE TABLE `shelters` (
  `shelter_id` int(255) UNSIGNED NOT NULL,
  `user_id` int(255) UNSIGNED NOT NULL,
  `capacity` int(255) UNSIGNED DEFAULT NULL,
  `availability` int(255) UNSIGNED DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shelters`
--

INSERT INTO `shelters` (`shelter_id`, `user_id`, `capacity`, `availability`, `type`, `phone`) VALUES
(10, 27, 100, 25, 'mixed', '123'),
(11, 28, 1000, 456, 'mixed', '123'),
(12, 29, 50, 14, 'dog', '123'),
(13, 30, 75, 67, 'dog', '123');

-- --------------------------------------------------------

--
-- Table structure for table `shelter_address`
--

CREATE TABLE `shelter_address` (
  `adress_id` int(255) UNSIGNED NOT NULL,
  `shelter_id` int(255) UNSIGNED NOT NULL,
  `address_number` int(255) UNSIGNED NOT NULL,
  `address_street` varchar(255) NOT NULL,
  `address_city` varchar(255) NOT NULL,
  `address_province` varchar(255) NOT NULL,
  `address_postal_code` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shelter_address`
--

INSERT INTO `shelter_address` (`adress_id`, `shelter_id`, `address_number`, `address_street`, `address_city`, `address_province`, `address_postal_code`) VALUES
(1, 1, 123, 'main st', 'miami', 'florida', 33132),
(2, 2, 123, 'batcave', 'gotham', 'NY ', 33456),
(3, 3, 123, 'haha st', 'gotham', 'NY', 3829290),
(4, 4, 123, 'metropolis st', 'metropolis', 'MS', 12345),
(5, 5, 123, 'main st', 'miami beach', 'fl', 33139),
(6, 6, 123, 'underwater st', 'bikini bottom', 'underwater', 12345),
(7, 7, 29206, 'Daoiz', 'Matanzas', 'Matanzas', 40100),
(8, 8, 10178, 'collins ave', 'bal harbour', 'florida', 33154),
(9, 9, 601, 'biscayne blvd', 'miami', 'fl', 33132),
(10, 10, 3651, 'NW 79 AVE', 'Miami ', 'Fl', 33166),
(11, 11, 16101, 'Dixie Highway', 'North Miami Beach', 'Fl', 33160),
(12, 12, 1000, 'Ponce De Leon Blvd', 'Coral Gables ', 'FL ', 33134),
(13, 13, 8717, 'SW 134 ST', 'Miami', 'Fl', 33176);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) UNSIGNED NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_shelter` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `is_shelter`) VALUES
(13, 'Mike', '$2y$10$uErrG307WyjA974u7FfSyOu6330IS12dM4AbpDLOBDycYu3UFikuu', '', 1),
(14, 'batman', '$2y$10$PwWrC4rspoNmpboAJQoKYOd/xo6xPZSyPdKlY7US8ORodTzyBruJS', '', 1),
(15, 'joker', '$2y$10$8chBVIVW2oY8cFTD9/7Hu.TyK0oyvGDBA7o.cYmj/QJVdm6GfpeGq', '', 1),
(16, 'superman', '$2y$10$DFk2oxo.KDc6VMVslWFyRO8M0X92YaeJg0at9/0gGnA8dTBRe91T.', '', 1),
(17, 'luis', '$2y$10$mI46vCLZPw4f8m4VDDirGOINMkXCs2FA9xk1f4XRJw6aHLvS8V6U6', '123@456.com', 1),
(18, 'spongebob', '$2y$10$rJxASp12/9erpMn.T2cVNuBzpkcEH/NArtiXA8NyKtqKQP5bos1jC', '', 1),
(19, 'marcelo test', '$2y$10$iKdYwB5hwRrGXWfpsJj2MOt9TgYpzmkvEeyugEj.scqcARjJqnZMK', '', 1),
(20, 'marcelo 2', '$2y$10$9vztx.uhxyigTxibd9JuyOLgRumRHZ/gaTTc2L8vKEWdMa9izzjyC', '', 1),
(22, 'tester', '$2y$10$pW9ZfZCb0jN27g1XbbNyaOFgqtrDV1QiGerDtwAg06z2pe2bIeatq', '', 0),
(24, 'test1639826', '$2y$10$gm.sXodgPiZBrM68rxh2Q.uhXcHYT670LpmgMog8dkl9sHkiatg.S', 'mtest@123.com', 1),
(25, 'logintest', '$2y$10$p3hQNq4zsGrSm6fZhKRrBezfJEBKflupoq1qtwQBsAFpw1J/rXIou', '', 0),
(26, 'mclopes1', '$2y$10$j/xRqs2Q6cZCxiPvVz806eYwd5UwDcwgDss1a7RDEsPxqrJ5lOY3u', 'marcelo@cs50w.com', 0),
(27, 'AnimalServices', '$2y$10$7oj77FF0HA7bCMlVvhf97e.rhy5sba/la4iq7gAxbet.U/w8P0OiG', '', 1),
(28, 'HumaneSociety', '$2y$10$mTah3LyiQEwswmarXZIw0OVz1qhd1zFy2rC3pWLtroHJvz2s/mfcG', '', 1),
(29, 'Coalition', '$2y$10$q2AMDcSgVImDteysWRagWe4lBByfx7LP2IqBkVe/THdIp58ews5h6', '', 1),
(30, 'Paws4U', '$2y$10$6PxQa19Nu8H4rNTWdLJ3EeG1eynsqkIIjriBuRL1vY2mIqlKFE/Wm', '', 1),
(31, 'testing1', '$2y$10$0cJN7mz6SSzSMXQb40jcc.vyuoogjOpPT/K5FgW0jN9Yx2NYewCLS', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `shelters`
--
ALTER TABLE `shelters`
  ADD PRIMARY KEY (`shelter_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shelter_address`
--
ALTER TABLE `shelter_address`
  ADD PRIMARY KEY (`adress_id`),
  ADD UNIQUE KEY `shelter_id` (`shelter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `shelters`
--
ALTER TABLE `shelters`
  MODIFY `shelter_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `shelter_address`
--
ALTER TABLE `shelter_address`
  MODIFY `adress_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `shelters`
--
ALTER TABLE `shelters`
  ADD CONSTRAINT `shelters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

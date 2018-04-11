-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 09:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talkingspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Web Programming', 'Web ProgrammingWeb ProgrammingWeb ProgrammingWeb ProgrammingWeb ProgrammingWeb ProgrammingWeb ProgrammingWeb ProgrammingWeb ProgrammingWeb ProgrammingWeb Programming'),
(2, 'Web Design', 'Web DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb Design');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `topic_id`, `user_id`, `create_date`, `body`) VALUES
(1, 1, 2, '2018-04-09 22:05:47', 'I know about it. Do you want to know?'),
(2, 1, 1, '2018-04-09 22:06:47', 'Yes'),
(3, 1, 3, '2018-04-10 01:12:27', 'Please Answer! I need to know too.'),
(4, 1, 1, '2018-04-10 01:18:27', 'Ko KO???'),
(5, 2, 4, '2018-04-10 01:14:01', 'For me, I learn by making projects'),
(6, 2, 1, '2018-04-10 01:14:40', 'Wow..Great Tips. Thank you .'),
(7, 2, 4, '2018-04-10 01:18:01', 'You are Welcome.'),
(8, 3, 5, '2018-04-11 07:19:26', '<p>Anyone?</p>'),
(9, 3, 5, '2018-04-11 07:20:51', '<p>please? answer me</p>'),
(10, 3, 4, '2018-04-11 07:25:43', '<p>Sorry for late.. Is this even a question???</p><p>What do you need me to answer?</p>'),
(11, 3, 4, '2018-04-11 07:26:48', '<p>what?</p>'),
(12, 3, 4, '2018-04-11 07:27:16', '<p>hello???</p>');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `last_activity` datetime NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_id`, `user_id`, `title`, `body`, `last_activity`, `create_date`) VALUES
(1, 1, 1, 'Favourite Server-Side Language', 'What is your fav server-side Language?', '0000-00-00 00:00:00', '2018-04-09 09:57:46'),
(2, 2, 1, 'How did you learn Css and html?', 'Please Answer this question. ', '0000-00-00 00:00:00', '2018-04-09 09:57:46'),
(3, 1, 5, 'The Subtle Art of Not Giving a Fuck', '<p>sddddddd</p>', '2018-04-11 08:11:27', '2018-04-11 06:12:27'),
(4, 1, 4, 'Attention', '<p>Please answer eveyrone questions guy..</p>', '2018-04-11 09:11:19', '2018-04-11 07:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `about` text NOT NULL,
  `last_activity` datetime NOT NULL,
  `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `username`, `password`, `about`, `last_activity`, `join_date`) VALUES
(1, 'Brad Traversy', 'techguyinfo@gmail.com', 'avatar1.png', 'BraT', 'password', 'Im a web developer', '0000-00-00 00:00:00', '2018-04-09 16:23:39'),
(2, 'KoKo', 'KoKo@gmail.com', 'avatar2.png', 'KoKo', 'password', 'developer', '0000-00-00 00:00:00', '2018-04-10 04:32:48'),
(3, 'Mya Mya', 'mya@gmail.com', 'avatar3.png', 'MyaMya', 'password', 'is a girl', '0000-00-00 00:00:00', '2018-04-10 07:39:51'),
(4, 'Ba Chit', 'bachit@gmail.com', 'avatar4.png', 'BaChit', 'password', 'bachit', '0000-00-00 00:00:00', '2018-04-10 07:40:26'),
(5, 'Aung Myo Myint', 'amm@gmail.com', 'avatar5.png', 'AungMyoMyint19', 'password', '<p>a</p>', '2018-04-10 09:10:56', '2018-04-10 14:12:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

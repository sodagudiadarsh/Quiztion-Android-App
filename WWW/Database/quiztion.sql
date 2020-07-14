-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2020 at 04:11 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiztion`
--

-- --------------------------------------------------------

--
-- Table structure for table `Discover`
--

CREATE TABLE `Discover` (
  `topic_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Discover`
--

INSERT INTO `Discover` (`topic_id`, `title`) VALUES
(1, 'Culture'),
(2, 'Coding'),
(3, 'History'),
(4, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `Leaderboard`
--

CREATE TABLE `Leaderboard` (
  `user_id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Leaderboard`
--

INSERT INTO `Leaderboard` (`user_id`, `quiz_name`, `score`) VALUES
(2, 'PAP', '0'),
(3, 'PAP', '20'),
(4, 'PAP', '40'),
(2, 'mobile app development', '33'),
(2, 'test', '0'),
(2, 'test2', '0'),
(2, 'vvv', '100'),
(2, 'zzz', '0'),
(7, 'vvv', '100'),
(7, 'PAP', '0'),
(7, 'mobile app development', '33'),
(7, 'test', '20'),
(2, 'Language C', '50'),
(6, 'Language C', '0'),
(6, 'texas', '100'),
(2, 'texas', '50'),
(6, 'culture', '100'),
(2, 'pizza', '50');

-- --------------------------------------------------------

--
-- Table structure for table `QuestionBank`
--

CREATE TABLE `QuestionBank` (
  `quizname` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice 1` varchar(255) NOT NULL,
  `choice 2` varchar(255) NOT NULL,
  `choice 3` varchar(255) NOT NULL,
  `choice 4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `QuestionBank`
--

INSERT INTO `QuestionBank` (`quizname`, `question`, `choice 1`, `choice 2`, `choice 3`, `choice 4`, `answer`) VALUES
('PAP', 'PRIME MINISTER OF INDIA', 'MODI', 'ANIL', 'TRUMP', 'SUNIL', ''),
('PAP', 'WER', 'A', 'B', 'C', 'D', 'A'),
('PAP', 'POPKJ', 'A', 'B', 'C', 'D', 'B'),
('PAP', 'MNBVG', 'A', 'B', 'C', 'D', 'C'),
('PAP', 'UYTY', 'A', 'B', 'C', 'D', 'D'),
('mobile app development', 'android', 'android', 'apple', 'samsung', 'black berry', 'A'),
('mobile app development', 'apple', 'android', 'apple', 'blackberry', 'samsung', 'B'),
('mobile app development', 'blackberry', 'blackberry', 'samsung', 'samsung', 'android', 'A'),
('test', 'anil', 'anil', 'sunil', 'alekhya', 'rakshith', 'anil'),
('test', 'nithin', 'anil', 'nithin', 'alekhya', 'sunil', 'nithin'),
('test', 'rakshith', 'sunil', 'aadarsh', 'rakshith', 'eka', 'rakshith'),
('test2', 'Anil', 'Anil', 'adarsh', 'sunil', 'eka', 'A'),
('test2', 'Sunil ', 'eka', 'rak', 'sai', 'sunil', 'D'),
('test', 'A', 'A', 'anil', 'sunil', 'cat', 'A'),
('test', 'B', 'anil', 'B', 'sunil', 'dog', 'B'),
('vvv', 'abba', 'abba', 'hjk', 'jdmdn', 'ndnd', 'A'),
('vvv', 'yuu', 'idkdk', 'nsmd', 'yuu', 'ndmdl', 'C'),
('zzz', 'bbb', 'bbb', 'sk k n', 'ndndj', 'ndjd', 'A'),
('zzz', 'ggg', 'etay', 'kakk', 'ndmsl', 'ggg', 'D'),
('', '', '', '', '', '', ''),
('Language C', 'Father of C', 'James', 'John', 'Cat', 'Apple', 'B'),
('Language C', 'A stands for', 'Apple', 'Ball', 'Bag', 'Dragon', 'A'),
('texas', 'anil is', 'good', 'bad', 'verygood', 'awsome', 'A'),
('texas', 'raksith is ', 'bad', 'good ', 'crazy', 'lazy', 'D'),
('culture', 'captail of india', 'delhi', 'hyder', 'ahmedabad', 'gujarat', 'A'),
('culture', 'Captial of hyderabad', 'ts', 'ap', 'jaipur', 'rajsthan', 'A'),
('pizza', 'pizza but or dominos', 'pizza hut', 'dominos', 'both', 'neither', 'D'),
('pizza', 'Veggies masaala or Pizza', 'Veggi masala', 'pizza', 'both', 'neither', 'A'),
('sunil', 'snsks', 'ejsj', 'jek', 'kkek', 'kkdkd', 'djd');

-- --------------------------------------------------------

--
-- Table structure for table `Quiz`
--

CREATE TABLE `Quiz` (
  `topic_id` int(11) NOT NULL,
  `quizname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Quiz`
--

INSERT INTO `Quiz` (`topic_id`, `quizname`) VALUES
(1, 'PAP'),
(2, 'mobile app development'),
(3, 'test'),
(1, 'test2'),
(4, 'vvv'),
(4, 'zzz'),
(0, ''),
(2, 'Language C'),
(3, 'texas'),
(1, 'culture'),
(1, 'pizza'),
(4, 'sunil');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `imageurl` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `username`, `password`, `institution`, `email`, `phone`, `imageurl`) VALUES
(1, 'Admin', 'Admin', 'CSULb', 'Admin@gmail.com', '9876543210', ''),
(2, 'Anil', 'Anil', 'CSUF', 'Anil@gmail.com', '8765432190', ''),
(3, 'sunil', 'sunil123', 'csulb', 'sunil@gmail.com', '5623148540', ''),
(12, '', '', '', '', '', ''),
(6, 'alekhya', 'alekhya', 'csulb', 'alekhya@gmail.com', '9638527412', ''),
(7, 'Rakshith', 'Chinnu1215', 'CSULB', 'rakshith22@outlook.com', '5623419195', ''),
(9, 'bobby', 'bobby123', 'csulb', 'bobby@gmail.com', '7896541238', ''),
(11, 'sunilkumarpog', 'sunilkumar', 'sunilkumarpog@gmail.com', 'sunilkumarpog@gmail.com', '8897589060', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Discover`
--
ALTER TABLE `Discover`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Discover`
--
ALTER TABLE `Discover`
  MODIFY `topic_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

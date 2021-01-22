-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 03:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizium`
--

-- --------------------------------------------------------

--
-- Table structure for table `answeredquiz`
--

CREATE TABLE `answeredquiz` (
  `answeredQuizID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `InstructorID` int(11) NOT NULL,
  `quizName` varchar(255) NOT NULL,
  `dateOpen` date NOT NULL,
  `dateClose` date NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `answeredquizquestion`
--

CREATE TABLE `answeredquizquestion` (
  `answeredQuizQuestionID` int(11) NOT NULL,
  `quizQuestion` varchar(255) NOT NULL,
  `quizAnswer` varchar(255) NOT NULL,
  `correctAnswer` varchar(255) NOT NULL,
  `answeredQuizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructorID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructorID`, `name`, `username`, `password`) VALUES
(1, 'Aiman', 'manza', '123'),
(2, 'Aina', 'ena', '123');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(11) NOT NULL,
  `InstructorID` int(11) NOT NULL,
  `quizName` varchar(255) NOT NULL,
  `dateOpen` datetime NOT NULL,
  `dateClose` datetime NOT NULL,
  `quizDescription` varchar(255) NOT NULL,
  `quizCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `InstructorID`, `quizName`, `dateOpen`, `dateClose`, `quizDescription`, `quizCode`) VALUES
(1, 1, 'ITS571', '2020-12-01 00:00:00', '2020-12-02 00:00:00', '1', '0'),
(6, 2, 'Cuba try test', '2021-01-12 00:00:00', '2021-01-13 00:00:00', 'Hello??? apa awak buat ni', '0'),
(8, 2, 'cuba', '2021-01-15 00:00:00', '2021-01-16 00:00:00', 'bisa', '0'),
(9, 2, 'nothing like me and you', '2021-01-15 00:00:00', '2021-01-16 00:00:00', 'Apakah ini bisa terjadi? 2.0', '0'),
(10, 2, 'AMENDE', '2021-01-16 00:00:00', '2021-01-22 00:00:00', 'NI OI', '0'),
(11, 2, 'AMENDE12', '2021-01-15 00:00:00', '2021-01-21 00:00:00', 'Apakah ini bisa terjadi?', '0'),
(12, 2, 'AMENDE', '2021-01-16 00:00:00', '2021-01-17 00:00:00', 'NI OI ???', '0'),
(13, 2, 'Testing 123', '2021-01-16 00:00:00', '2021-01-17 00:00:00', 'Apakah ini bisa terjadi?', '0'),
(14, 2, 'yang ni banyak sikit', '2021-01-16 00:00:00', '2021-01-22 00:00:00', 'Apakah ini bisa terjadi?', '0'),
(15, 2, 'AMENDE', '2021-01-17 00:00:00', '2021-01-25 00:00:00', 'test', '0'),
(16, 2, 'Testing 123', '2021-01-16 00:00:00', '2021-01-20 00:00:00', 'Apakah ini bisa terjadi?', '0'),
(17, 2, 'AMENDE', '2021-01-16 00:00:00', '2021-01-22 00:00:00', 'bisa', '0'),
(18, 2, 'AMENDE', '2021-01-16 00:00:00', '2021-01-22 00:00:00', 'bisa', '0'),
(19, 2, 'AMENDE', '2021-01-16 00:00:00', '2021-01-22 00:00:00', 'bisa', '0'),
(20, 2, 'AMENDE', '2021-01-16 00:00:00', '2021-01-22 00:00:00', 'bisa', '0'),
(21, 2, 'AMENDE', '2021-01-16 00:00:00', '2021-01-22 00:00:00', 'bisa', '0'),
(22, 2, 'Testing 123', '2021-01-21 00:00:00', '2021-01-29 00:00:00', 'Apakah ini bisa terjadi? 2.0', '0'),
(23, 2, 'nothing like me and you hahahahahdsnjakncdin', '2021-01-15 00:00:00', '2021-01-22 00:00:00', 'bisa', '0'),
(24, 2, '//??', '2021-01-22 00:00:00', '2021-01-22 00:00:00', 'NI OI', '0'),
(25, 2, '//??', '2021-01-22 00:00:00', '2021-01-22 00:00:00', 'NI OI', '0'),
(26, 2, 'aina cantik', '2021-01-15 00:00:00', '2021-01-21 00:00:00', 'sangat', '0'),
(27, 2, 'aina cantik', '2021-01-15 00:00:00', '2021-01-21 00:00:00', 'n cute', '0'),
(28, 2, 'aina cantik', '2021-01-15 00:00:00', '2021-01-21 00:00:00', 'nbapakkk cute', '0'),
(29, 2, '20 jan', '2021-01-20 00:00:00', '2021-01-21 00:00:00', 'test', '0'),
(30, 2, '//??', '2021-01-21 00:00:00', '2021-01-21 00:00:00', 'Apakah ini bisa terjadi?', '0'),
(31, 2, 'Testing 123', '2021-01-21 00:00:00', '2021-01-21 00:00:00', 'bisa', '0'),
(32, 2, 'AMENDE', '2021-01-21 00:00:00', '2021-01-21 00:00:00', 'NI OI', '0'),
(33, 2, 'cuba', '2021-01-21 00:00:00', '2021-01-21 00:00:00', 'Apakah ini bisa terjadi?', '0'),
(34, 2, 'cuba', '2021-01-21 00:00:00', '2021-01-22 00:00:00', 'Apakah ini bisa terjadi?', '0'),
(35, 2, 'AMENDE', '2021-01-21 00:00:00', '2021-01-21 00:00:00', 'bisa', '0'),
(36, 2, '//??', '2021-01-21 00:00:00', '2021-01-21 00:00:00', 'uhuk', '0'),
(38, 2, 'Testing 123', '2021-01-20 00:00:00', '2021-01-21 00:00:00', 'NI OI', '0'),
(39, 2, '833', '2021-01-22 00:00:00', '2021-01-23 00:00:00', 'test', '0'),
(40, 2, 'test', '2021-01-22 00:00:00', '2021-01-23 00:00:00', 'test', '0'),
(41, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT'),
(42, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'NI OI', 'WYG-GHT-WXT'),
(43, 2, 'cuba', '2021-01-23 00:00:00', '2021-01-24 00:00:00', 'test', 'WYG-GHT-WXT'),
(44, 2, '31', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'bisa', 'WYG-GHT-WXT'),
(45, 2, 'try test', '2021-01-22 00:00:00', '2021-01-23 00:00:00', 'uhuk', 'WYG-GHT-WXT'),
(46, 2, '31', '2021-01-22 00:00:00', '2021-01-24 00:00:00', 'NI OI', 'WYG-GHT-WXT'),
(47, 2, '//??', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'Apakah ini bisa terjadi?', 'WYG-GHT-WXT'),
(48, 2, 'AMENDE', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'bisa', 'WYG-GHT-WXT'),
(49, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'cub atry test', 'WYG-GHT-WXT'),
(50, 2, 'hello', '2021-01-22 00:00:00', '2021-01-23 00:00:00', 'its me', 'WYG-GHT-WXT'),
(51, 2, 'cuba', '2021-01-22 00:00:00', '2021-01-23 00:00:00', 'try test', 'WYG-GHT-WXT'),
(52, 2, 'Testing 123', '2021-01-23 00:00:00', '2021-01-23 00:00:00', 'amirah jawab ni', 'WYG-GHT-WXT');

-- --------------------------------------------------------

--
-- Table structure for table `quizanswer`
--

CREATE TABLE `quizanswer` (
  `quizAnswerID` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `quizQuestionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizanswer`
--

INSERT INTO `quizanswer` (`quizAnswerID`, `answer`, `quizQuestionID`) VALUES
(1, '3', 1),
(2, '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizquestion`
--

CREATE TABLE `quizquestion` (
  `quizQuestionID` int(11) NOT NULL,
  `questionName` varchar(255) NOT NULL,
  `answer1` int(11) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `asnwer3` varchar(255) NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizquestion`
--

INSERT INTO `quizquestion` (`quizQuestionID`, `questionName`, `answer1`, `answer2`, `asnwer3`, `quizID`) VALUES
(1, '2 + 2 = WHAT ?', 4, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `matrixNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  ADD PRIMARY KEY (`answeredQuizID`),
  ADD KEY `answeredquiz_ibfk_1` (`InstructorID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `answeredquizquestion`
--
ALTER TABLE `answeredquizquestion`
  ADD PRIMARY KEY (`answeredQuizQuestionID`),
  ADD KEY `answeredquizquestion_ibfk_1` (`answeredQuizID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructorID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`),
  ADD KEY `quiz_ibfk_1` (`InstructorID`);

--
-- Indexes for table `quizanswer`
--
ALTER TABLE `quizanswer`
  ADD PRIMARY KEY (`quizAnswerID`),
  ADD KEY `quizQuestionID` (`quizQuestionID`);

--
-- Indexes for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD PRIMARY KEY (`quizQuestionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  MODIFY `answeredQuizID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answeredquizquestion`
--
ALTER TABLE `answeredquizquestion`
  MODIFY `answeredQuizQuestionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `quizanswer`
--
ALTER TABLE `quizanswer`
  MODIFY `quizAnswerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizquestion`
--
ALTER TABLE `quizquestion`
  MODIFY `quizQuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answeredquiz`
--
ALTER TABLE `answeredquiz`
  ADD CONSTRAINT `answeredquiz_ibfk_1` FOREIGN KEY (`InstructorID`) REFERENCES `instructor` (`instructorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answeredquiz_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answeredquizquestion`
--
ALTER TABLE `answeredquizquestion`
  ADD CONSTRAINT `answeredquizquestion_ibfk_1` FOREIGN KEY (`answeredQuizID`) REFERENCES `answeredquiz` (`answeredQuizID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`InstructorID`) REFERENCES `instructor` (`instructorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quizanswer`
--
ALTER TABLE `quizanswer`
  ADD CONSTRAINT `quizanswer_ibfk_1` FOREIGN KEY (`quizQuestionID`) REFERENCES `quizquestion` (`quizQuestionID`);

--
-- Constraints for table `quizquestion`
--
ALTER TABLE `quizquestion`
  ADD CONSTRAINT `quizquestion_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

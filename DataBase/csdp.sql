-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2016 at 07:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `userid` varchar(50) NOT NULL,
  `joinyear` int(11) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`userid`, `joinyear`) VALUES
('aditya', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `ebook_master`
--

CREATE TABLE IF NOT EXISTS `ebook_master` (
  `userid` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `path` varchar(250) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook_master`
--

INSERT INTO `ebook_master` (`userid`, `bookname`, `path`) VALUES
('faculty@faculty.com', 'php', 'C:/wamp/www/cseportalproject/documents/Learning_PHP_MySQL_Javascript_CSS_HTML5__Robin_Nixon_3e.epub'),
('faculty@faculty.com', 'php pdf', 'C:/wamp/www/cseportalproject/documents/Learning_PHP_MySQL_Javascript_CSS_HTML5__Robin_Nixon_3e.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE IF NOT EXISTS `faculty_master` (
  `userid` varchar(50) NOT NULL,
  `department` varchar(30) DEFAULT NULL,
  `degree` varchar(10) DEFAULT NULL,
  `joinyear` int(11) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`userid`, `department`, `degree`, `joinyear`) VALUES
('faculty@faculty.com', 'cse', 'M.tech', 2011),
('ef@gh.com', 'cse', 'M.tech', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_personal_master`
--

CREATE TABLE IF NOT EXISTS `faculty_personal_master` (
  `userid` varchar(50) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `mobile` decimal(10,0) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_personal_master`
--

INSERT INTO `faculty_personal_master` (`userid`, `name`, `dob`, `gender`, `mobile`) VALUES
('faculty@faculty.com', NULL, NULL, NULL, NULL),
('ef@gh.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE IF NOT EXISTS `login_master` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`userid`, `password`, `status`) VALUES
('adikumar209@gmail.com', 'addy123', 'stdnt'),
('adikumar209@hotmail.com', 'addy123', 'stdnt'),
('aditya', 'aditya123', 'admin'),
('ef@gh.com', '1234', 'fclty'),
('faculty@faculty.com', 'faculty123', 'fclty');

-- --------------------------------------------------------

--
-- Table structure for table `notice_master`
--

CREATE TABLE IF NOT EXISTS `notice_master` (
  `userid` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `content` varchar(250) DEFAULT NULL,
  `type` varchar(8) DEFAULT NULL,
  `dateissued` date DEFAULT NULL,
  `docpath` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`title`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_master`
--

INSERT INTO `notice_master` (`userid`, `title`, `content`, `type`, `dateissued`, `docpath`) VALUES
('aditya', 'hello', 'testing', 'faculty', '2016-07-04', 'admin'),
('aditya', 'Hello 2', 'this is aditya testing my php project faculty notice board section........ have a good day ahead;', 'faculty', '2016-07-04', 'admin'),
('aditya', 'Notice by admin', 'Notice from admin to all the students;', 'student', '2016-07-05', 'admin'),
('faculty@faculty.com', 'notice by faculty', 'hello students', 'student', '2016-07-03', 'fclty');

-- --------------------------------------------------------

--
-- Table structure for table `student_academic_master`
--

CREATE TABLE IF NOT EXISTS `student_academic_master` (
  `userid` varchar(50) NOT NULL,
  `acdachvmt` varchar(150) DEFAULT NULL,
  `sports` varchar(150) DEFAULT NULL,
  `cultural` varchar(150) DEFAULT NULL,
  `others` varchar(150) DEFAULT NULL,
  `graduation` int(11) DEFAULT NULL,
  `inter` int(11) DEFAULT NULL,
  `highschool` int(11) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_academic_master`
--

INSERT INTO `student_academic_master` (`userid`, `acdachvmt`, `sports`, `cultural`, `others`, `graduation`, `inter`, `highschool`) VALUES
('adikumar209@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('adikumar209@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE IF NOT EXISTS `student_master` (
  `userid` varchar(50) NOT NULL,
  `roll` int(11) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `degree` varchar(10) DEFAULT NULL,
  `joinyear` int(11) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`userid`, `roll`, `batch`, `branch`, `degree`, `joinyear`) VALUES
('adikumar209@gmail.com', 10, 2017, 'cse 12', 'B.tech', 2013),
('adikumar209@hotmail.com', 12, 2017, 'cse', 'B.tech', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_master`
--

CREATE TABLE IF NOT EXISTS `student_personal_master` (
  `userid` varchar(50) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobile` decimal(10,0) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_personal_master`
--

INSERT INTO `student_personal_master` (`userid`, `name`, `dob`, `gender`, `address`, `mobile`) VALUES
('adikumar209@gmail.com', 'Aditya Kumar', '1994-09-02', 'male', 'Danapur', '8544251441'),
('adikumar209@hotmail.com', 'Addy', '1994-03-06', 'male', 'Patna', '9835445807');

-- --------------------------------------------------------

--
-- Table structure for table `student_technical_master`
--

CREATE TABLE IF NOT EXISTS `student_technical_master` (
  `userid` varchar(50) NOT NULL,
  `prgmlanguage` varchar(50) DEFAULT NULL,
  `databasekwn` varchar(50) DEFAULT NULL,
  `os` varchar(50) DEFAULT NULL,
  `software` varchar(50) DEFAULT NULL,
  `otherskill` varchar(150) DEFAULT NULL,
  `industryexp` varchar(150) DEFAULT NULL,
  `academicproject` varchar(50) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_technical_master`
--

INSERT INTO `student_technical_master` (`userid`, `prgmlanguage`, `databasekwn`, `os`, `software`, `otherskill`, `industryexp`, `academicproject`) VALUES
('adikumar209@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('adikumar209@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD CONSTRAINT `admin_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ebook_master`
--
ALTER TABLE `ebook_master`
  ADD CONSTRAINT `ebook_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`);

--
-- Constraints for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD CONSTRAINT `faculty_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_personal_master`
--
ALTER TABLE `faculty_personal_master`
  ADD CONSTRAINT `faculty_personal_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notice_master`
--
ALTER TABLE `notice_master`
  ADD CONSTRAINT `notice_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`);

--
-- Constraints for table `student_academic_master`
--
ALTER TABLE `student_academic_master`
  ADD CONSTRAINT `student_academic_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_master`
--
ALTER TABLE `student_master`
  ADD CONSTRAINT `student_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_personal_master`
--
ALTER TABLE `student_personal_master`
  ADD CONSTRAINT `student_personal_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_technical_master`
--
ALTER TABLE `student_technical_master`
  ADD CONSTRAINT `student_technical_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

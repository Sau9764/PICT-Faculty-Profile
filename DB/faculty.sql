-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 07:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `emp_id` varchar(100) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`emp_id`, `fullname`, `dept`, `email`) VALUES
('empBoth', 'Both admin and faculty', 'Information Technology', 'sourabh.mpbdigitalindia@gmail.com'),
('master_admin', 'Sourabh Kekade', 'Computer Engineering', 'demo@pict.edu');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `eid` varchar(200) NOT NULL,
  `bid` int(100) NOT NULL,
  `bname` varchar(1000) NOT NULL,
  `publication` varchar(1000) NOT NULL,
  `year` varchar(20) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `eid` varchar(200) NOT NULL,
  `cid` int(200) NOT NULL,
  `ctitle` varchar(1000) NOT NULL,
  `ctype` varchar(200) NOT NULL,
  `year` varchar(20) NOT NULL,
  `cdetails` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consultancy`
--

CREATE TABLE `consultancy` (
  `eid` varchar(200) NOT NULL,
  `csid` int(20) NOT NULL,
  `ioiu` varchar(2000) NOT NULL,
  `sdate` varchar(200) NOT NULL,
  `edate` varchar(200) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `status` varchar(2000) NOT NULL,
  `details` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `eid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `acontact` varchar(15) NOT NULL,
  `texperience` int(100) NOT NULL,
  `iexperience` int(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `responsibility` varchar(2000) NOT NULL,
  `aoi` varchar(2000) NOT NULL,
  `other` varchar(2000) NOT NULL,
  `cv` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `enable` varchar(20) NOT NULL,
  `adjunct` int(11) NOT NULL,
  `edate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`eid`, `password`, `image`, `fullname`, `contact`, `acontact`, `texperience`, `iexperience`, `doj`, `department`, `designation`, `responsibility`, `aoi`, `other`, `cv`, `email`, `enable`, `adjunct`, `edate`) VALUES
('emp234', '', 'facultyImages/emp234.jpeg', 'Mr. Manish R. Khodaskar', '12345', '', 50, 51, '01/01/2004', 'Information Technology', 'Assistant Professor', 'new 1', 'new', 'new 1', 'facultyCV/emp234.doc', 'demo@pict.edu', '1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `fundedrp`
--

CREATE TABLE `fundedrp` (
  `eid` varchar(200) NOT NULL,
  `fid` int(20) NOT NULL,
  `ptitle` varchar(2000) NOT NULL,
  `picoi` varchar(2000) NOT NULL,
  `duration` varchar(1000) NOT NULL,
  `famount` varchar(1000) NOT NULL,
  `fegency` varchar(1000) NOT NULL,
  `remark` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `eid` varchar(200) NOT NULL,
  `jid` int(20) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patent`
--

CREATE TABLE `patent` (
  `eid` varchar(200) NOT NULL,
  `pid` int(20) NOT NULL,
  `ptitle` varchar(2000) NOT NULL,
  `year` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `assignee` varchar(500) NOT NULL,
  `patentno` varchar(500) NOT NULL,
  `pagenos` varchar(2000) NOT NULL,
  `webadd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `contenttype` text NOT NULL,
  `problem` text NOT NULL,
  `description` text NOT NULL,
  `eid` text NOT NULL,
  `email` text NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `eid` varchar(200) NOT NULL,
  `qid` int(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `specialization` varchar(300) NOT NULL,
  `uname` varchar(300) NOT NULL,
  `college` varchar(500) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tfaculty`
--

CREATE TABLE `tfaculty` (
  `eid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `acontact` varchar(15) NOT NULL,
  `texperience` varchar(100) NOT NULL,
  `iexperience` varchar(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `responsibility` varchar(2000) NOT NULL,
  `aoi` varchar(2000) NOT NULL,
  `other` varchar(2000) NOT NULL,
  `cv` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `enable` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `Books_ibfk_1` (`eid`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `Conferences_ibfk_1` (`eid`);

--
-- Indexes for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD PRIMARY KEY (`csid`),
  ADD KEY `Consultancy_ibfk_1` (`eid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `fundedrp`
--
ALTER TABLE `fundedrp`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `Fundedrp_ibfk_1` (`eid`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `Journals_ibfk_1` (`eid`);

--
-- Indexes for table `patent`
--
ALTER TABLE `patent`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `Patent_ibfk_1` (`eid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `Qualifications_ibfk_1` (`eid`);

--
-- Indexes for table `tfaculty`
--
ALTER TABLE `tfaculty`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `cid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `consultancy`
--
ALTER TABLE `consultancy`
  MODIFY `csid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fundedrp`
--
ALTER TABLE `fundedrp`
  MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `jid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patent`
--
ALTER TABLE `patent`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `qid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `Books_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `conferences`
--
ALTER TABLE `conferences`
  ADD CONSTRAINT `Conferences_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD CONSTRAINT `Consultancy_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fundedrp`
--
ALTER TABLE `fundedrp`
  ADD CONSTRAINT `Fundedrp_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `Journals_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patent`
--
ALTER TABLE `patent`
  ADD CONSTRAINT `Patent_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD CONSTRAINT `Qualifications_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

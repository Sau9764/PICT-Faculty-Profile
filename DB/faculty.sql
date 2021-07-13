-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 09:59 AM
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
-- Database: `faculty`
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
('adminSk', 'Sourabh', 'Information Technology', 'facultypict@pict.edu'),
('emp1', 'Sourabh Admin', 'Information Technology', 'sau.kekade@gmail.com'),
('empBoth', 'Both admin and faculty', 'Information Technology', 'sourabh.mpbdigitalindia@gmail.com');

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

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`eid`, `bid`, `bname`, `publication`, `year`, `description`) VALUES
('emp234', 4, 'Information & Cyber Security', 'Technical ', '2018', ' \r\n		New BE IT (2015 Pattern)		    	\r\n				    '),
('b', 8, 'abcd', 'na', '2514', 'Na');

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

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`eid`, `cid`, `ctitle`, `ctype`, `year`, `cdetails`) VALUES
('EMP563', 3, 'Security in Computing and Communications', 'International', '2013', ' Jambhulkar, Parag J., Soumyadev Maity, and Ramesh C. Hansdah. \"A Multicast Authentication Protocol (MAP) for Dynamic Multicast Groups in Wireless Networks.\" Security in Computing and Communications. Springer Berlin Heidelberg, 2013. 138-149.\r\n				    	\r\n				    '),
('EMP563', 4, 'Third national conference on current trends in Computer Science & Engineering and Technology', 'National', '2014', 'Hemanth K., Parag J. Jambhulkar; â€œRemainder based scheme to secure multicast communication in Distributed Wireless Network.â€ Third national conference on current trends in Computer Science & Engineering and Technology, 2014, Jain University Bangalore. 234-243.'),
('EMP563', 5, 'Security in Computing and Communications. Springer Berlin Heidelberg', 'International', '2013', 'Jambhulkar, Parag J., Soumyadev Maity, and Ramesh C. Hansdah. \"A Multicast Authentication Protocol (MAP) for Dynamic Multicast Groups in Wireless Networks.\" Security in Computing and Communications. Springer Berlin Heidelberg, 2013. 138-149.'),
('EMP563', 6, 'Third national conference on current trends in Computer Science & Engineering and Technology, 2014, Jain University Bangalore', 'National', '2014', 'Hemanth K., Parag J. Jambhulkar; â€œRemainder based scheme to secure multicast communication in Distributed Wireless Network.â€ Third national conference on current trends in Computer Science & Engineering and Technology, 2014, Jain University Bangalore. 234-243.'),
('emp234', 12, 'ICEI 2018', 'Coordinator', '2017', 'ICEI 2018'),
('b', 14, 'na', 'a', '1625', '1212');

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

--
-- Dumping data for table `consultancy`
--

INSERT INTO `consultancy` (`eid`, `csid`, `ioiu`, `sdate`, `edate`, `duration`, `amount`, `status`, `details`) VALUES
('emp234', 2, 'e-Zest', '05/05/2017', '05/05/2018', '1 year', 'after product developed', 'In Process', '				    	\r\n				4 Project for 20 students and 4 staff    '),
('emp234', 5, 'e-Zest', '05/05/2017', '05/05/2018', '1 year', 'after product developed', 'In Process', '				    					4 Project for 20 students and 4 staff    ');

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
('121212121', '', '', 'Mr. abcd kaka oo', '23232323', '32', 0, 0, '2021-03-18', 'Information Technology', 'Professor', '', '', '', '', '2323232@d.eds', '1', 0, ''),
('123', '', '', 'Mr. Harshad r Kadam', '9876543210', '91', 0, 0, '2019-01-17', 'Computer Engineering', 'HOD', '', '', '', '', 'harshad@gmail.com', '1', 0, ''),
('b', '', 'facultyImages/b.jpg', 'Mrs. bb b b', '233223', '4', 0, 0, '2021-03-11', 'Information Technology', 'HOD', 'I am Manage Websites', '', 'This is all my intro', 'facultyCV/b.pdf', 'b@ff.sdfsf', '1', 0, ''),
('eid_temp', '', '', 'Akshay', '', '', 0, 0, '', 'Computer Engineering', '', '', '', '', '', 'makshay1498@gmail.com', '', 0, ''),
('EMP119', '', '', 'Dr. Anant M Bagade', '9011531597', '', 0, 0, '02/01/2001', 'Information Technology', 'Associate Professor', '', 'AI', '', '', 'ambagade@pict.edu', '1', 0, ''),
('EMP195', '', '', 'Dr. Sweta C Dharmadhikari', '9011042683', '', 0, 0, '01/08/2002', 'Information Technology', 'Associate Professor', '', '', '', '', 'scdharmadhikari@pict.edu', '1', 0, ''),
('EMP203', '', '', 'Mr. Sachin S Pande', '9823139795', '', 0, 0, '05/09/2002', 'Information Technology', 'Assistant Professor', '', '', '', '', 'sspande@pict.edu', '1', 0, ''),
('EMP231', '', 'facultyImages/EMP231.jpg', 'Dr. Emmanuel  M', '8087308832', '', 0, 0, '02/06/2003', 'Information Technology', 'Professor', 'abvdfd', '', '', '', 'emmanuelm@pict.edu', '1', 0, ''),
('emp234', '', 'facultyImages/emp234.jpeg', 'Mr. Manish R. Khodaskar', '9822074520', '', 14, 1, '01/01/2004', 'Information Technology', 'Assistant Professor', 'NBA Coordinator, NAAC IQAC Coordinator, InC 2018 Coordinator, PBS Coordinator', 'Cyber Security, Software engg and Project Management,Distributed Systems', 'International Conference Coordinator', 'facultyCV/emp234.doc', 'saurabhkekade9764@gmail.com', '1', 0, ''),
('EMP267', '', '', 'Mr. Abhinay G Dhamankar', '9850069485', '', 0, 0, '03/12/2011', 'Information Technology', 'Assistant Professor', '', '', '', '', 'agdhamankar@pict.edu', '1', 0, ''),
('emp321', '', '', 'Mr. Tushar A Rane', '9850960081', '', 0, 0, '11/07/2005', 'Information Technology', 'Assistant Professor', '', '', '', '', 'tarane@pict.edu', '1', 0, ''),
('EMP326', '', 'facultyImages/EMP326.jpeg', 'Mrs. Seema H Chandak', '9371654105', '', 12, 0, '17/07/2006', 'Information Technology', 'Assistant Professor', '', 'Data Structures, Database, cloud Computing, Infromation retrieval , Algorithm and analysis', '', '', 'shchandak@pict.edu', '1', 0, ''),
('emp386', '', 'facultyImages/emp386.jpeg', 'Mr. Mahesh W Nimje', '9923063465', '', 0, 0, '10/07/2001', 'Information Technology', 'Assistant Professor', '', 'Web Technology', '', '', 'mwnimje@pict.edu', '1', 0, ''),
('EMP414', '', '', 'Mrs. Deepali D Londhe', '9421304599', '', 0, 0, '07/08/2007', 'Information Technology', 'Assistant Professor', '', '', '', '', 'ddlondhe@pict.edu', '1', 0, ''),
('EMP563', '', 'facultyImages/EMP563.jpeg', 'Mr. Parag J. Jambhulkar', '9945676843', '456', 7, 0, '2014-24-11', 'Computer Engineering', 'Assistant Professor', 'Web Incharge, Monthly Report Coordinator', 'Parallel Computing, Network Security', 'Working as Assistant Professor in Computer Engineering Dept.', 'facultyCV/EMP563.pdf', 'pjjambhulkar@pict.edu', '1', 0, ''),
('emp976431', '', '', 'Sourabh Faculty', '', '', 0, 0, '', 'Information Technology', 'Assistant Professor', '', '', '', '', 'saurabhkekade9764@gmail.com', '1', 0, ''),
('empBoth', '', '', 'Both', '', '', 0, 0, '', 'Information Technology', 'Assistant Professor', '', '', '', '', 'sourabh.mpbdigitalindia@gmail.com', '1', 0, ''),
('entc_hod', '', '', 'Dr. Demo HOD ENTC', '9087654321', '91', 1, 1, '', 'Electronics and Telecommunication', 'HOD', '', '', '', '', 'entcHod@pict.edu', '1', 0, ''),
('FY_hod', '', '', 'Dr. Demo HOD FY', '9087654321', '91', 1, 1, '', 'First Year Engineering', 'HOD', '', '', '', '', 'FYHod@pict.edu', '1', 0, '');

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

--
-- Dumping data for table `fundedrp`
--

INSERT INTO `fundedrp` (`eid`, `fid`, `ptitle`, `picoi`, `duration`, `famount`, `fegency`, `remark`) VALUES
('emp234', 2, 'To design and developed wireless Sensor based System', 'CO-PI', '1 year', '20 lakh', 'DST', '		In Process		    	\r\n				    '),
('emp234', 5, 'To design and developed wireless Sensor based System', '1 year', 'CO-PI', '20 lakh', 'DST', '		In Process		    					    '),
('b', 7, 'Na', 'na', 'ma', '200', '2', 'a');

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

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`eid`, `jid`, `title`, `type`, `year`, `description`) VALUES
('b', 4, 'abcd', 'Na', '2910', 'This is sample journal'),
('b', 5, 'temp2 ', 'na', '2617', 'This is sample too');

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

--
-- Dumping data for table `patent`
--

INSERT INTO `patent` (`eid`, `pid`, `ptitle`, `year`, `country`, `assignee`, `patentno`, `pagenos`, `webadd`) VALUES
('emp234', 2, 'SMART TIARA', '2017', 'India', 'Manish R Khodaskar', '201721018877 A', '21', 'http://www.ipindia.nic.in'),
('emp234', 6, 'SMART TIARA', 'India', '2017', 'Manish R Khodaskar', '201721018877 A', '21', 'http://www.ipindia.nic.in'),
('b', 7, 'a', '2121', 'a', 'aa', 'aa', 'a', 'an');

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

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`eid`, `qid`, `level`, `degree`, `specialization`, `uname`, `college`, `year`) VALUES
('emp386', 21, 'Graduate', 'BE', 'IT', 'SPPU', 'Zeal College of Engineering', '2006'),
('emp234', 22, 'Graduate', 'BE', 'Computer Science and Engg.', 'Amravati University', 'V.Y.W.S. College of engg, Badnera, Amravati', '2001'),
('emp234', 23, 'Post-Graduate', 'ME', 'Computer Engg.', 'SPPU', 'PICT', '2010'),
('EMP326', 24, 'Post-Graduate', 'ME', 'Computer  Enginnering', 'Pune  University , Pune', 'Pune Instittue  of Computer  Technology, Pune', '2011'),
('EMP563', 25, 'Post-Graduate', 'ME', 'Computer Science & Engineering', 'Indian Institute of Science Bangalore', 'Indian Institute of Science Bangalore', '2012'),
('EMP563', 26, 'Post-Graduate', 'ME', 'Computer Science & Engineering', 'Indian Institute of Science Bangalore', 'Indian Institute of Science Bangalore', '2012'),
('emp386', 27, 'Post-Graduate', 'ME', 'IT', 'SPPU', 'PICT', '2017'),
('empBoth', 43, '', '', '', '', '', ''),
('emp386', 44, 'Graduate', 'IT', 'BE', 'SPPU', 'Zeal College of Engineering', '2006'),
('emp234', 45, 'Graduate', 'Computer S', 'BE', 'Amravati University', 'V.Y.W.S. College of engg, Badnera, Amravati', '2001'),
('EMP326', 46, 'Post-Graduate', 'Computer  ', 'ME', 'Pune  University , Pune', 'Pune Instittue  of Computer  Technology, Pune', '2011'),
('b', 47, 'Graduate', 'MEch', 'Comp', 'NA', 'Na', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbooks`
--

CREATE TABLE `tbooks` (
  `eid` varchar(200) NOT NULL,
  `bid` int(10) NOT NULL,
  `bname` varchar(1000) NOT NULL,
  `publication` varchar(1000) NOT NULL,
  `year` varchar(20) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbooks`
--

INSERT INTO `tbooks` (`eid`, `bid`, `bname`, `publication`, `year`, `description`) VALUES
('emp234', 9, 'Information & Cyber Security', 'Technical ', '2018', ' \r\n		New BE IT (2015 Pattern)		    	\r\n				    ');

-- --------------------------------------------------------

--
-- Table structure for table `tconferences`
--

CREATE TABLE `tconferences` (
  `eid` varchar(200) NOT NULL,
  `cid` int(20) NOT NULL,
  `ctitle` varchar(1000) NOT NULL,
  `ctype` varchar(200) NOT NULL,
  `year` varchar(20) NOT NULL,
  `cdetails` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tconferences`
--

INSERT INTO `tconferences` (`eid`, `cid`, `ctitle`, `ctype`, `year`, `cdetails`) VALUES
('EMP563', 7, 'Security in Computing and Communications', 'International', '2013', ' Jambhulkar, Parag J., Soumyadev Maity, and Ramesh C. Hansdah. \"A Multicast Authentication Protocol (MAP) for Dynamic Multicast Groups in Wireless Networks.\" Security in Computing and Communications. Springer Berlin Heidelberg, 2013. 138-149.\r\n				    	\r\n				    '),
('EMP563', 8, 'Third national conference on current trends in Computer Science & Engineering and Technology', 'National', '2014', 'Hemanth K., Parag J. Jambhulkar; â€œRemainder based scheme to secure multicast communication in Distributed Wireless Network.â€ Third national conference on current trends in Computer Science & Engineering and Technology, 2014, Jain University Bangalore. 234-243.'),
('EMP563', 9, 'Security in Computing and Communications. Springer Berlin Heidelberg', 'International', '2013', 'Jambhulkar, Parag J., Soumyadev Maity, and Ramesh C. Hansdah. \"A Multicast Authentication Protocol (MAP) for Dynamic Multicast Groups in Wireless Networks.\" Security in Computing and Communications. Springer Berlin Heidelberg, 2013. 138-149.'),
('EMP563', 10, 'Third national conference on current trends in Computer Science & Engineering and Technology, 2014, Jain University Bangalore', 'National', '2014', 'Hemanth K., Parag J. Jambhulkar; â€œRemainder based scheme to secure multicast communication in Distributed Wireless Network.â€ Third national conference on current trends in Computer Science & Engineering and Technology, 2014, Jain University Bangalore. 234-243.');

-- --------------------------------------------------------

--
-- Table structure for table `tconsultancy`
--

CREATE TABLE `tconsultancy` (
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
-- Table structure for table `tcontent_delete`
--

CREATE TABLE `tcontent_delete` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `eid` varchar(200) NOT NULL,
  `tid` int(11) NOT NULL,
  `rowid` int(11) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `tname` varchar(1000) NOT NULL,
  `value` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp2`
--

CREATE TABLE `temp2` (
  `tid` int(11) NOT NULL,
  `rowid` int(11) NOT NULL,
  `eid` varchar(200) NOT NULL,
  `tname` varchar(1000) NOT NULL
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
-- Dumping data for table `tfaculty`
--

INSERT INTO `tfaculty` (`eid`, `password`, `image`, `fullname`, `contact`, `acontact`, `texperience`, `iexperience`, `doj`, `department`, `designation`, `responsibility`, `aoi`, `other`, `cv`, `email`, `enable`) VALUES
('sourabh.mpbdigitalindia@gmail.com', '', 'req_ImgCv/facultyImages/sourabh.mpbdigitalindia@gmail.com.jpeg', '', '8484052559', '', '', '', '', '', '', 'Na', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tfundedrp`
--

CREATE TABLE `tfundedrp` (
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
-- Table structure for table `tjournals`
--

CREATE TABLE `tjournals` (
  `eid` varchar(200) NOT NULL,
  `jid` int(20) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `description` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpatent`
--

CREATE TABLE `tpatent` (
  `eid` varchar(200) NOT NULL,
  `pid` int(20) NOT NULL,
  `ptitle` varchar(2000) NOT NULL,
  `year` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `assignee` varchar(500) NOT NULL,
  `tpatentno` varchar(500) NOT NULL,
  `pagenos` varchar(2000) NOT NULL,
  `webadd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpost`
--

CREATE TABLE `tpost` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `contenttype` text NOT NULL,
  `problem` text NOT NULL,
  `description` text NOT NULL,
  `eid` text NOT NULL,
  `email` text NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpost`
--

INSERT INTO `tpost` (`id`, `title`, `contenttype`, `problem`, `description`, `eid`, `email`, `pdf`) VALUES
(2, 'Abcd', 'Notes', 'AN', 'NA', 'empBoth', 'sourabh.mpbdigitalindia@gmail.com', 'Notes/Abcd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tqualifications`
--

CREATE TABLE `tqualifications` (
  `eid` varchar(200) NOT NULL,
  `qid` int(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `specialization` varchar(300) NOT NULL,
  `uname` varchar(300) NOT NULL,
  `college` varchar(500) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tqualifications`
--

INSERT INTO `tqualifications` (`eid`, `qid`, `level`, `degree`, `specialization`, `uname`, `college`, `year`) VALUES
('EMP563', 41, 'Post-Graduate', 'ME', 'Computer Science & Engineering', 'Indian Institute of Science Bangalore', 'Indian Institute of Science Bangalore', '2012'),
('EMP563', 42, 'Post-Graduate', 'ME', 'Computer Science & Engineering', 'Indian Institute of Science Bangalore', 'Indian Institute of Science Bangalore', '2012');

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
-- Indexes for table `tbooks`
--
ALTER TABLE `tbooks`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `tbooks_ibfk_1` (`eid`);

--
-- Indexes for table `tconferences`
--
ALTER TABLE `tconferences`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `tconferences_ibfk_1` (`eid`);

--
-- Indexes for table `tconsultancy`
--
ALTER TABLE `tconsultancy`
  ADD PRIMARY KEY (`csid`),
  ADD KEY `tconsultancy_ibfk_1` (`eid`);

--
-- Indexes for table `tcontent_delete`
--
ALTER TABLE `tcontent_delete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `temp2`
--
ALTER TABLE `temp2`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `tfaculty`
--
ALTER TABLE `tfaculty`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tfundedrp`
--
ALTER TABLE `tfundedrp`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `tfundedrp_ibfk_1` (`eid`);

--
-- Indexes for table `tjournals`
--
ALTER TABLE `tjournals`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `tpatent`
--
ALTER TABLE `tpatent`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `tpatent_ibfk_1` (`eid`);

--
-- Indexes for table `tpost`
--
ALTER TABLE `tpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tqualifications`
--
ALTER TABLE `tqualifications`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `tqualifications_ibfk_1` (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `cid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `consultancy`
--
ALTER TABLE `consultancy`
  MODIFY `csid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fundedrp`
--
ALTER TABLE `fundedrp`
  MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `jid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patent`
--
ALTER TABLE `patent`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `qid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbooks`
--
ALTER TABLE `tbooks`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tconferences`
--
ALTER TABLE `tconferences`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tconsultancy`
--
ALTER TABLE `tconsultancy`
  MODIFY `csid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tcontent_delete`
--
ALTER TABLE `tcontent_delete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp2`
--
ALTER TABLE `temp2`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tfundedrp`
--
ALTER TABLE `tfundedrp`
  MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tjournals`
--
ALTER TABLE `tjournals`
  MODIFY `jid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `tpatent`
--
ALTER TABLE `tpatent`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tpost`
--
ALTER TABLE `tpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tqualifications`
--
ALTER TABLE `tqualifications`
  MODIFY `qid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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

--
-- Constraints for table `tbooks`
--
ALTER TABLE `tbooks`
  ADD CONSTRAINT `tbooks_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tconferences`
--
ALTER TABLE `tconferences`
  ADD CONSTRAINT `tconferences_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tconsultancy`
--
ALTER TABLE `tconsultancy`
  ADD CONSTRAINT `tconsultancy_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tfundedrp`
--
ALTER TABLE `tfundedrp`
  ADD CONSTRAINT `tfundedrp_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tpatent`
--
ALTER TABLE `tpatent`
  ADD CONSTRAINT `tpatent_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tqualifications`
--
ALTER TABLE `tqualifications`
  ADD CONSTRAINT `tqualifications_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `faculty` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

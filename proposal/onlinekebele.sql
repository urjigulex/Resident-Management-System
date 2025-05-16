-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 08:02 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinekebele`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE IF NOT EXISTS `birth` (
  `reg_no` int(11) NOT NULL,
  `childfullname` varchar(30) NOT NULL,
  `chage` varchar(15) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `dateofbirth` varchar(22) NOT NULL,
  `placeofbirth` varchar(65) NOT NULL,
  `typeofbirth` varchar(113) NOT NULL,
  `motherfullname` varchar(44) NOT NULL,
  `mage` varchar(33) NOT NULL,
  `mnation` varchar(33) NOT NULL,
  `mreligion` varchar(54) NOT NULL,
  `moccupation` varchar(47) NOT NULL,
  `maddress` varchar(54) NOT NULL,
  `mtel` varchar(33) NOT NULL,
  `fatherfullname` varchar(33) NOT NULL,
  `fage` int(23) NOT NULL,
  `fnation` varchar(44) NOT NULL,
  `freligion` varchar(33) NOT NULL,
  `foccupation` varchar(22) NOT NULL,
  `faddress` varchar(22) NOT NULL,
  `ftel` varchar(67) NOT NULL,
  `datereg` date NOT NULL,
  `approvedby` varchar(67) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`reg_no`, `childfullname`, `chage`, `sex`, `dateofbirth`, `placeofbirth`, `typeofbirth`, `motherfullname`, `mage`, `mnation`, `mreligion`, `moccupation`, `maddress`, `mtel`, `fatherfullname`, `fage`, `fnation`, `freligion`, `foccupation`, `faddress`, `ftel`, `datereg`, `approvedby`) VALUES
(1, 'urji', '2', 'Female', '2025-06-20', 'dahuch', 'Type of Birth', 'likie', '31', 'Ethiopian', 'Religion', 'farmig', 'arbaya', '0943387663', 'guluma', 38, 'Ethiopian', 'Religion', 'farmer', 'dahucch', '0944455555', '2025-06-16', 'urji'),
(2, 'gonder', '', 'Female', '1987-06-06', 'bahabiftu', 'Single', 'likie agegnehu', '31', 'Ethiopian', 'Religion', 'farmig', 'arbaya', '0943387663', 'oromia', 38, 'Ethiopian', 'Religion', 'farmer', 'dahucch', '0944455555', '2025-06-23', 'urji');

-- --------------------------------------------------------

--
-- Table structure for table `clark_account`
--

CREATE TABLE IF NOT EXISTS `clark_account` (
  `user_id` varchar(15) NOT NULL,
  `privilege` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `state` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clark_account`
--

INSERT INTO `clark_account` (`user_id`, `privilege`, `username`, `password`, `phone`, `state`) VALUES
('AAAA', 'Clark', 'urji', '1234', '0934544333', 'active'),
('ccr/0111/09', 'Clark', 'clark', '1234', '0910023283', 'active'),
('ccr/0123/09', 'Clark', 'feyisa', '0942', '0942450933', 'active'),
('cl/123/11', 'Clark', 'clarka', '1234', '0999999999', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kebele` varchar(15) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`no`, `name`, `email`, `kebele`, `comment`) VALUES
(6, 'urji', 'eshe123@gmail.com', 'Bate ', 'sadfghj'),
(7, 'urji', 'eshe123@gmail.com', 'Bate ', ' dfghjk'),
(8, 'feyisa lemi', 'feyisalemi42@gmail.com', 'Bale', ' ixcfgvhjkl,mnbhj');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE IF NOT EXISTS `death` (
  `reg_no` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `dateofbirth` varchar(20) DEFAULT NULL,
  `pplaceofbirth` varchar(20) DEFAULT NULL,
  `nationality` varchar(109) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `dateofdeath` varchar(20) DEFAULT NULL,
  `placeofdeath` varchar(20) DEFAULT NULL,
  `causeofdeath` varchar(100) DEFAULT NULL,
  `timeofdeath` varchar(20) DEFAULT NULL,
  `date` varchar(12) NOT NULL,
  `approve` varchar(20) NOT NULL,
  `remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`reg_no`, `location`, `name`, `age`, `dateofbirth`, `pplaceofbirth`, `nationality`, `sex`, `dateofdeath`, `placeofdeath`, `causeofdeath`, `timeofdeath`, `date`, `approve`, `remark`) VALUES
(1, 'ab.JPG', 'urji', 0, '24545-12-04', 'bbbbbbbbb', 'ethiopian', 'Male', '2025-05-23', 'aaaaa', 'aaaaaaaaaaaaaa', '11:11', '1444-12-04', 'aaaa', 'qqwww'),
(13, 'download.png', 'gonder', 60, '1987-06-06', 'bahabiftu', 'Ethiopian', 'Female', '2025-06-23', 'aaaaa', 'aaaaaaaaaaaaaa', '11:11', '2025-06-23', 'abishiru', 'qqwww');

-- --------------------------------------------------------

--
-- Table structure for table `devorce`
--

CREATE TABLE IF NOT EXISTS `devorce` (
  `reg_no` int(11) NOT NULL,
  `pid_no` varchar(11) DEFAULT NULL,
  `pfullname` varchar(30) DEFAULT NULL,
  `page` int(12) NOT NULL,
  `psex` varchar(20) DEFAULT NULL,
  `pdateofbirth` varchar(20) DEFAULT NULL,
  `pplaceofbirth` varchar(20) DEFAULT NULL,
  `pnation` varchar(20) DEFAULT NULL,
  `rfullname` varchar(30) DEFAULT NULL,
  `rage` int(11) NOT NULL,
  `rsex` varchar(20) DEFAULT NULL,
  `rdateofbirth` varchar(20) DEFAULT NULL,
  `rplaceofbirth` varchar(20) DEFAULT NULL,
  `rnationality` varchar(20) DEFAULT NULL,
  `noofchild` int(11) DEFAULT NULL,
  `under18` int(11) DEFAULT NULL,
  `dateofsep` varchar(20) DEFAULT NULL,
  `placeofsep` varchar(20) DEFAULT NULL,
  `timeofsep` varchar(20) DEFAULT NULL,
  `approvedby` varchar(20) DEFAULT NULL,
  `dateapprove` varchar(20) DEFAULT NULL,
  `rid_no` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devorce`
--

INSERT INTO `devorce` (`reg_no`, `pid_no`, `pfullname`, `page`, `psex`, `pdateofbirth`, `pplaceofbirth`, `pnation`, `rfullname`, `rage`, `rsex`, `rdateofbirth`, `rplaceofbirth`, `rnationality`, `noofchild`, `under18`, `dateofsep`, `placeofsep`, `timeofsep`, `approvedby`, `dateapprove`, `rid_no`) VALUES
(1, '240', 'live', 0, 'Male', '1234-11-12', 'love', 'american', 'ffff', 0, 'Male', '1234-11-12', 'ethiop', 'like', 12, 3, '1212-11-11', 'fddsf', '01:00', 'hhhh', '2016-02-02', '122'),
(5, 'ccr/0240', 'fghj', 18, 'Male', '2025-06-21', 'bbbbbbbbb', 'Ethiopian', 'dfgh', 25, 'Male', '2025-06-21', 'fghfdfghjk', 'Ethiopia', 67, 6, '2025-06-21', 'aaaaa', '14:22', 'urji', '2025-06-17', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `id_card`
--

CREATE TABLE IF NOT EXISTS `id_card` (
  `id_no` varchar(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(20) NOT NULL,
  `dateofbirth` date NOT NULL,
  `placeofbirth` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `region` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `houseno` int(20) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `dategiven` date DEFAULT NULL,
  `Kebele` varchar(20) DEFAULT NULL,
  `approvedby` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `renewed_date` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_card`
--

INSERT INTO `id_card` (`id_no`, `fname`, `mname`, `lname`, `age`, `sex`, `dateofbirth`, `placeofbirth`, `nationality`, `phone`, `region`, `zone`, `woreda`, `houseno`, `occupation`, `dategiven`, `Kebele`, `approvedby`, `location`, `renewed_date`) VALUES
('ccr/0240/09', 'urji', 'guluma', 'girmaw', 23, 'male', '2025-06-16', 'uhjun', 'ethiopian', '0943387663', 'hjk,jjj', 'huuhuh', 'fcvgbvfvbjghb', 123, 'std', '2025-06-22', 'hgf', 'hgf', 'WIN_20181109_05_36_53_Pro.jpg', '22-Jun-2025'),
('CCR/027 /09', 'urji', 'bhvgfgvdfvds', 'ddsfdsff', 23, 'dsadsdsds', '2025-06-16', 'uhjun', 'hhhuhuh', '99999', 'hjk,jjj', 'huuhuh', 'fcvgbvfvbjghb', 0, 'cvbghjm', '2025-06-22', 'vbnjbhgvgvhj', 'urji', 'WIN_20181109_05_36_53_Pro.jpg', '22-Jun-2025'),
('CCR/027 /099', 'mesi', 'oromia', 'gonder', 60, 'Female', '1987-06-06', 'bahabiftu', 'Ethiopian', '0910023283', 'Oromia', 'arsi', 'sire', 800, 'ddddddddddddd', '2025-06-23', 'bassa', 'urji', 'eshe.JPG', NULL),
('ccr/766', 'ali', 'alex', 'mulie', 23, 'Male', '2025-06-23', 'bahabiftu', 'Ethiopian', '0967777777', 'Oromia', 'bale', 'sinana', 123, 'admin', '2025-06-23', 'baha', 'admin', 'images (18).jpg', '23-Jun-2025'),
('cr/099/09', 'mesi', 'oromia', 'gonder', 60, 'Female', '1987-06-06', 'bahabiftu', 'Ethiopian', '0910023283', 'Oromia', 'arsi', 'sire', 800, 'ddddddddddddd', '2025-06-23', 'bassa', 'urji', 'download (3).jpg', '23-Jun-2025');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE IF NOT EXISTS `marriage` (
  `reg_no` int(11) NOT NULL,
  `hid_no` varchar(11) NOT NULL,
  `hfirstname` varchar(20) DEFAULT NULL,
  `hmiddlename` varchar(20) DEFAULT NULL,
  `hlastname` varchar(20) DEFAULT NULL,
  `hage` varchar(12) NOT NULL,
  `hdateofbirth` varchar(20) DEFAULT NULL,
  `hnation` varchar(20) DEFAULT NULL,
  `hreligion` varchar(20) DEFAULT NULL,
  `hstatus` varchar(20) DEFAULT NULL,
  `hfathernation` varchar(20) DEFAULT NULL,
  `hmothername` varchar(20) DEFAULT NULL,
  `hmothernation` varchar(20) DEFAULT NULL,
  `wid_no` varchar(11) NOT NULL,
  `wfirstname` varchar(20) DEFAULT NULL,
  `wmiddlename` varchar(20) DEFAULT NULL,
  `wlastname` varchar(20) DEFAULT NULL,
  `wage` varchar(11) NOT NULL,
  `wdateofbirth` varchar(20) DEFAULT NULL,
  `wnation` varchar(20) DEFAULT NULL,
  `wreligion` varchar(20) DEFAULT NULL,
  `wstatus` varchar(20) DEFAULT NULL,
  `wfathernation` varchar(20) DEFAULT NULL,
  `wmothername` varchar(20) DEFAULT NULL,
  `wmothernation` varchar(20) DEFAULT NULL,
  `datemarriage` varchar(20) DEFAULT NULL,
  `placemarriage` varchar(30) DEFAULT NULL,
  `timemarriage` varchar(20) DEFAULT NULL,
  `approvedby` varchar(20) DEFAULT NULL,
  `dateapprove` varchar(20) DEFAULT NULL,
  `wittness1` varchar(20) DEFAULT NULL,
  `wittness2` varchar(20) DEFAULT NULL,
  `wittness3` varchar(20) DEFAULT NULL,
  `wlocation` varchar(100) DEFAULT NULL,
  `hlocation` varchar(100) DEFAULT NULL,
  `hplaceofbirth` varchar(25) DEFAULT NULL,
  `wplaceofbirth` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`reg_no`, `hid_no`, `hfirstname`, `hmiddlename`, `hlastname`, `hage`, `hdateofbirth`, `hnation`, `hreligion`, `hstatus`, `hfathernation`, `hmothername`, `hmothernation`, `wid_no`, `wfirstname`, `wmiddlename`, `wlastname`, `wage`, `wdateofbirth`, `wnation`, `wreligion`, `wstatus`, `wfathernation`, `wmothername`, `wmothernation`, `datemarriage`, `placemarriage`, `timemarriage`, `approvedby`, `dateapprove`, `wittness1`, `wittness2`, `wittness3`, `wlocation`, `hlocation`, `hplaceofbirth`, `wplaceofbirth`) VALUES
(1, '296', 'shimalis', 'kebeba', 'sinbaba', '23', '0544-12-04', 'Ethiopian', 'protestant', 'Single', 'Ethiopian', 'yedesh', 'america', '267', 'derartu', 'tolessa', 'sabona', '18', '54545-02-05', 'Ethiopian', 'protestant', 'Single', 'Ethiopian', 'beredu', 'Ethiopian', '0012-12-12', 'sheraten', '02:12', 'urji', '45454-02-15', 'samuel', 'samson', 'gebisa', 'WIN_20181101_14_58_45_Pro.jpg', 'WIN_20181101_14_59_49_Pro.jpg', 'bah', 'wolikitie');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `rtype` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `reg_no`, `fname`, `lname`, `rtype`, `email`, `message`, `message_date`) VALUES
(28, '12', 'urji', 'okn', 'give merraige certificate', 'eshe123@gmail.com', 'gfgfhdhfhdhfd', '2025-06-14'),
(29, '10', 'urji', 'guluma', 'give Birth certificate', 'eshe123@gmail.com', 'dfsdfghjk', '2025-06-19'),
(30, '10', 'urji', 'guluma', 'give Birth certificate', 'eshe123@gmail.com', 'dfsdfghjk', '2025-06-19'),
(31, '10', 'urji', 'guluma', 'give Birth certificate', 'eshe123@gmail.com', 'dfsdfghjk', '2025-06-19'),
(33, '36', 'muhammed', 'aman', 'give_id', 'muham@gmail.com', 'lesgdvsgdcgxcxgzcgx xxcxvcxxf', '2025-06-19'),
(34, 'hhhh', 'hhh', 'jjjjj', 'give Birth certificate', 'hhh@gg.com', 'iiii', '2025-06-21'),
(35, 'frfrefr', '324343', 'ffff', 'give Birth certificate', 'fffff@ggm.com', 'ffffffffffffffffffffffffffffffffffffffffffffff', '2025-06-22'),
(36, 'frfrefr', '324343', 'ffff', 'give Birth certificate', 'fffff@ggm.com', 'ffffffffffffffffffffffffffffffffffffffffffffff', '2025-06-22'),
(37, '43654', 'fggdggg', 'ewrt', 'give Birth certificate', 'fdffffff@g.vo', 'ewreeeeeeeeeeeeeee', '2025-06-22'),
(38, '43654', 'fggdggg', 'ewrt', 'give Birth certificate', 'fdffffff@g.vo', 'ewreeeeeeeeeeeeeee', '2025-06-22'),
(39, '10', 'urji', 'okn', 'give_id', 'eshe123@gmail.com', 'dydgyvgdhgv', '2025-06-22'),
(40, '11', 'ASHE', 'LEMI', 'give_id', 'feyisalmi42@gmail.com', 'MMMMMMMMMMMMMMMMMMMM', '2025-06-22'),
(41, '004', 'faniyye', 'samii', 'give Birth certificate', 'sami@gmail.com', 'sin jalaadhaa faniyeeeee', '2025-06-22'),
(42, '44', 'lalisa', 'debela', 'give_id', 'lali23@gmail.com', 'ggggggggggfffffffffffffhhhhhhhhhhhh', '2025-06-22'),
(43, '222', 'cala', 'bbbb', 'give Birth certificate', 'b23@gmail.com', 'sssssssssssssssssssssssssssssssssssssssssssssss', '2025-06-22'),
(44, '333', 'cala', 'bbbb', 'give Birth certificate', 'b23@gmail.com', 'sssssssssssssssssdddddddddd', '2025-06-22'),
(45, '5678', 'mesi', 'oromia', 'give_id', 'mes42@gmail.com', 'because of to move other country', '2025-06-23'),
(46, '14', 'ali', 'alex', 'give merraige certificate', 'urjiguluma1223@gmail.com', 'tyygjjfncbv', '2025-06-23'),
(47, '14', 'Ali', 'alex', 'give_id', 'urjiguluma1223@gmail.com', 'ygytftf', '2025-06-23'),
(48, '14', 'Ali', 'alex', 'give_id', 'urjiguluma1223@gmail.com', 'ygytftf', '2025-06-23'),
(49, '16', 'dame', 'lemi', 'renew_id', 'dam42@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh', '2025-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `news` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `date`, `title`, `news`) VALUES
(1, '2025-06-22', 'madda walabu university', 'ooooooooooooooooooooooooooooooooooooo'),
(12, '2025-06-22', 'aaaaaaaaaaaaaaaaaaa', 'jhgfdddddddddddhtsrts'),
(13, '2025-06-23', 'zdfghjklkihugyt', 'jasedrtyuio');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `no` int(11) NOT NULL,
  `Residents_id` varchar(33) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `report_type` varchar(20) NOT NULL,
  `report` varchar(20) NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`no`, `Residents_id`, `fname`, `lname`, `report_type`, `report`, `message_date`) VALUES
(6, 'ccr/0240/09', 'urji', 'okn', 'ferfrefre', 'xcfvgbnm', '2025-06-20'),
(7, 'ccr/0240/09', 'urji', 'okn', 'ferfrefre', 'njbvbn', '2025-06-22'),
(8, 'ccr/0246/09', 'Beza', 'Getachew', 'sex', 'fghjkljhgfghjnkm', '2025-06-22'),
(9, 'ccr/033/09', 'Bocola', 'Qotiyyo', 'dfghjkjhgfertyui', 'ertyuiuytr54e678', '2025-06-22'),
(10, 'ccr/01234/09', 'dame', 'lemi', 'permision', 'hhhhhhhhhhhhhhhhhhhh', '2025-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE IF NOT EXISTS `resident` (
  `reg_no` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(20) NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `placeofbirth` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `martial` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `kebele` varchar(15) NOT NULL,
  `houseno` varchar(20) NOT NULL,
  `type` varchar(22) NOT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dateofreg` varchar(15) NOT NULL,
  `plocation` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `approve` varchar(134) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`reg_no`, `fname`, `mname`, `lname`, `age`, `sex`, `dateofbirth`, `placeofbirth`, `nationality`, `region`, `religion`, `martial`, `language`, `zone`, `woreda`, `kebele`, `houseno`, `type`, `occupation`, `phone`, `dateofreg`, `plocation`, `reason`, `approve`) VALUES
(13, 'mesi', 'oromia', 'gonder', 60, 'Female', '1987-06-06', 'bahabiftu', 'Ethiopian', 'Oromia', 'Orthodox', 'UnMarried', 'amharic', 'arsi', 'sire', 'bassa', '800', 'Private', 'ddddddddddddd', '0910023283', '2025-06-23', 'WIN_20180305_21_55_48_Pro.jpg', 'work trip', 'urji'),
(14, 'urji', 'alex', 'mulie', 23, 'Male', '2025-06-23', 'bahabiftu', 'Ethiopian', 'Oromia', 'Islam', 'UnMarried', 'oromo', 'bale', 'sinana', 'Bate ', '123', 'Tenants', 'admin', '0967777777', '2025-06-23', '1.png', 'education', 'clarka aabb'),
(15, 'Gabisa', 'Kejela', 'Dawo', 22, 'Male', '2025-06-23', 'Baha bigtu', 'Ethiopian', 'Tigray', 'Orthodox', 'UnMarried', 'Oromiffa', 'Bale', 'Sinana', 'Bate ', '304', 'Kebele', 'Student', '0912123223', '2025-06-23', '1558704574159_trimmed.png', 'Fff', 'urji'),
(16, 'dame', 'lemi', 'bedaso', 25, 'Male', '1987-06-05', 'bahabiftu', 'Ethiopian', 'Oromia', 'Orthodox', 'UnMarried', 'oromic', 'bale', 'sinana', 'Bate ', '42', 'Private', 'student', '0910023283', '2025-06-24', '4.jpg', 'hhhhhhhhhhhhhhhh', 'feyisa'),
(17, 'urji', 'guluma', 'girmaw', 23, 'Male', '2025-06-25', 'bahabiftu', 'Ethiopian', 'Tigray', 'Orthodox', 'UnMarried', 'amharic', 'bale', 'sinana', 'Bate ', '305', 'Private', 'student', '0943387663', '2025-06-25', '1.png', 'education', 'aaaa'),
(18, 'feyisa', 'lemi', 'bedahso', 22, 'Male', '2025-06-25', 'dahuch', 'Ethiopian', 'Oromia', 'Islam', 'UnMarried', 'amharic', 'bale', 'sinana', 'Bate ', '305', 'Kebele', 'student', '0934544333', '2025-06-25', 'eshe.JPG', 'education', 'ssssssssssssss'),
(19, 'urji', 'guluma', 'girmaw', 23, 'Male', '2025-06-25', 'dahuch', 'Ethiopian', 'Oromia', 'Orthodox', 'UnMarried', 'amharic', 'bale', 'arbaya', 'Bate ', '305', 'Private', 'student', '0934544333', '2025-06-25', 'my.JPG', 'education', 'ssssssssssssss'),
(20, 'lalisa', 'dabala', 'dawoo', 23, 'Male', '2025-06-25', 'bahabiftu', 'Ethiopian', 'Oromia', 'Orthodox', 'UnMarried', 'amharic', 'bale', 'sinana', 'Bate ', '305', 'Tenants', 'admin', '0934544333', '2025-06-25', '8.jpg', 'work trip', 'ssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `res_account`
--

CREATE TABLE IF NOT EXISTS `res_account` (
  `user_id` varchar(33) NOT NULL,
  `privilege` varchar(40) NOT NULL,
  `username` varchar(66) NOT NULL,
  `password` varchar(88) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `state` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_account`
--

INSERT INTO `res_account` (`user_id`, `privilege`, `username`, `password`, `phone`, `state`) VALUES
('ccer/088/09', 'Resident', 'urji', '1234', '0934544333', 'active'),
('Ccr/011/09', 'Resident', 'gebre', '12345', '0944444466', 'active'),
('ccr/0111/09', 'Resident', 'mesi', '5048', '0910023283', 'active'),
('ccr/01234/09', 'Resident', 'dame', '0910', '0910023283', 'active'),
('ccr/0247/09', 'Resident', 'admin', '1234', '0999999999', 'inacti'),
('ccr/033/09', 'Resident', 'Bocola', '1122', '0911223344', 'active'),
('ccr/0998/09', 'Resident', 'bezi', '0099', '0985103910', 'active'),
('ccr/132', 'Resident', 'admin', '1234', '0999999999', 'inacti'),
('TFGF', 'Resident', 'YYUUY', 'YUYUKTYUK', '0934544333', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `smad`
--

CREATE TABLE IF NOT EXISTS `smad` (
  `reg_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `message` varchar(250) NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smad`
--

INSERT INTO `smad` (`reg_no`, `name`, `type`, `message`, `message_date`) VALUES
(5, 'urji', 'Weekly Report', 'sdfghj', '2025-06-21'),
(6, 'urji', 'Daily Report Re', ' qwe4r5t6y78ui9o0iufds423456', '2025-06-22'),
(7, 'urji', 'Weekly Report', 'ytytryewtrywet', '2025-06-22'),
(8, 'urji', 'Daily Report Re', ' ggghjuiuytre34e56789i0oiuygtfre45r678uijuhygt678uijhgyu', '2025-06-22'),
(9, 'Clarka', 'Daily Report Re', ' ali alex mulie is al legal resident in Bate  kebele he needs to have an account \r\nreg=14', '2025-06-23'),
(10, 'feyisa', 'Daily Report Re', ' bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb reg no=16', '2025-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `smcl`
--

CREATE TABLE IF NOT EXISTS `smcl` (
  `no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(240) NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smcl`
--

INSERT INTO `smcl` (`no`, `name`, `message`, `message_date`) VALUES
(1, 'urji', 'vfdghjk', '2025-06-13'),
(2, 'urji', ' ygfgfgfg', '2025-06-22'),
(3, 'urji', ' ygfgfgfg', '2025-06-22'),
(4, 'Admin', 'jhgfgh', '2025-06-22'),
(5, 'Admin', 'jhgfgh', '2025-06-22'),
(6, 'Admin', ' ddddddddddddddsaWERRRRRRRRRRRRRRRRRRRRRRRRRRRRR', '2025-06-22'),
(7, 'Admin', ' bbbbbbbbbbbbbbbbbbbbbbbcccccccccccccccccccfffffffffffffffff', '2025-06-22'),
(8, 'Admin', ' I hate my self. I bleive to my God.\r\none day I Will be a man! ', '2025-06-23'),
(9, 'Admin', ' ghfdddddddddddddddddddcgffc', '2025-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `usermessage`
--

CREATE TABLE IF NOT EXISTS `usermessage` (
  `message_id` int(11) NOT NULL,
  `id_no` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermessage`
--

INSERT INTO `usermessage` (`message_id`, `id_no`, `fname`, `lname`, `email`, `rtype`, `message`, `message_date`) VALUES
(60, '', 'urji', '', 'urjiguluma1223@gmail.com', '', '', '2025-06-22'),
(61, '', 'urji', '', 'urjiguluma1223@gmail.com', '', '', '2025-06-22'),
(62, '', 'urji', '', 'urjiguluma1223@gmail.com', '', '', '2025-06-22'),
(63, '295', 'urji', 'jkhgfdfgh', 'eshe123@gmail.com', 'Give_withdrawal', 'fghj', '2025-06-22'),
(64, 'ccr/01234 /09', 'Nimona', 'lemi', 'feyisalemi42@gmail.com', 'Give_withdrawal', 'to release this kebele', '2025-06-22'),
(66, 'mesi', 'oromia', 'gonder', 'mes42@gmail.com', 'Give_withdrawal', 'because of health', '2025-06-23'),
(67, 'ccr/766', 'Aali', 'alex', 'eshe123@gmail.com', 'Give_withdrawal', 'sdfrfgdfgf', '2025-06-23'),
(68, 'CCR/01234 /09', 'dame', 'lemi', 'dam42@gmail.com', 'Give_withdrawal', 'hhhhhhhhhhhhhhhhhhhh', '2025-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `privilege` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(90) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `phone`, `privilege`, `username`, `password`, `state`) VALUES
('1111/08/khh', '0934544333', 'Admin', 'admin', '1234', 'active'),
('ccr/0123 /09', '0943387663', 'Admin', 'info', 'edu', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE IF NOT EXISTS `withdrawal` (
  `no` int(11) NOT NULL,
  `IdNumber` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `middleName` varchar(15) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `age` varchar(22) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `Reason_Of_Clearance` varchar(113) NOT NULL,
  `Date_Of_Taken` varchar(44) NOT NULL,
  `approve` varchar(33) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`no`, `IdNumber`, `FirstName`, `middleName`, `LastName`, `age`, `sex`, `Reason_Of_Clearance`, `Date_Of_Taken`, `approve`) VALUES
(1, '240', 'urji', 'guluma', 'girmaw', '21', 'male', 'dfghjk', '777/4/6', 'ttgyhjk'),
(3, 'ccr/027 /09', 'muhammed', 'aman', 'ooo', '23', 'Male', 'acyucfgayufhvgwyg', '2025-06-19', 'urji'),
(4, '134240187179576', 'dsadsaaaaaaaaasads', 'iuiii', 'dssadsds', '23', 'Male', 'cxffffffffffffffffffffffffffffffffffcdfyegfnjfbdhascbhjdcdc', '2025-06-20', 'dcddsdas'),
(5, '123', 'abb', 'kkkkk', 'safe', '22', 'Male', 'dsfgdddddddddddddddddddddf', '2025-06-20', 'aaaa'),
(6, 'ccr/766', 'ali', 'alex', 'uyugyg', '445', 'Male', 'dfghn fg b', '2025-06-23', 'clarka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `clark_account`
--
ALTER TABLE `clark_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `devorce`
--
ALTER TABLE `devorce`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `id_card`
--
ALTER TABLE `id_card`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `res_account`
--
ALTER TABLE `res_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `smad`
--
ALTER TABLE `smad`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `smcl`
--
ALTER TABLE `smcl`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `usermessage`
--
ALTER TABLE `usermessage`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `devorce`
--
ALTER TABLE `devorce`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `reg_no` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `smad`
--
ALTER TABLE `smad`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `smcl`
--
ALTER TABLE `smcl`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usermessage`
--
ALTER TABLE `usermessage`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

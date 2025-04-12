-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 09:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `life_saver`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (admin_id int primary key,
name varchar(50),
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pwd`) VALUES
('admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor_consent`
--

CREATE TABLE IF NOT EXISTS `blood_donor_consent` (
  `bun` int(11) NOT NULL AUTO_INCREMENT,
  `vdno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `organisation` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `tel` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `obd` int(11) NOT NULL,
  `dld` varchar(20) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `tom` varchar(15) NOT NULL,
  `q1` varchar(15) NOT NULL,
  `q2` varchar(15) NOT NULL,
  `q3` varchar(15) NOT NULL,
  `q4` varchar(15) NOT NULL,
  `q5_a` varchar(15) NOT NULL,
  `q5_b` varchar(15) NOT NULL,
  `q5_c` varchar(15) NOT NULL,
  `q5_d` varchar(15) NOT NULL,
  `q5_e` varchar(15) NOT NULL,
  `q6_a` varchar(15) NOT NULL,
  `q6_b` varchar(15) NOT NULL,
  `q6_c` varchar(15) NOT NULL,
  `q7_a` varchar(20) NOT NULL,
  `q7_b` varchar(20) NOT NULL,
  `q7_c` varchar(20) NOT NULL,
  `q7_d` varchar(20) NOT NULL,
  `q7_e` varchar(20) NOT NULL,
  `q7_f` varchar(20) NOT NULL,
  `q7_g` varchar(20) NOT NULL,
  `q7_h` varchar(20) NOT NULL,
  `q7_i` int(20) NOT NULL,
  `q7_j` varchar(20) NOT NULL,
  `q7_k` varchar(20) NOT NULL,
  `q7_l` varchar(20) NOT NULL,
  `q8` varchar(20) NOT NULL,
  `q9` varchar(20) NOT NULL,
  `q10` varchar(20) NOT NULL,
  `q11_a` varchar(20) NOT NULL,
  `q11_b` varchar(20) NOT NULL,
  `q11_c` varchar(20) NOT NULL,
  `q11_d` varchar(20) NOT NULL,
  `dod` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `pulse` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `hg` int(11) NOT NULL,
  `ffd` varchar(20) NOT NULL,
  `bbn` int(11) NOT NULL,
  `lot` int(11) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `seg` int(11) NOT NULL,
  `bg2` int(11) NOT NULL,
  `rh` int(11) NOT NULL,
  `h1n1` int(11) NOT NULL,
  `hbsag` int(11) NOT NULL,
  `hcv` int(11) NOT NULL,
  `vdrl` int(11) NOT NULL,
  `mp` int(11) NOT NULL,
  PRIMARY KEY (`bun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blood_donor_consent`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor_consent1`
--

CREATE TABLE IF NOT EXISTS `blood_donor_consent1` (
  `bun` int(11) NOT NULL AUTO_INCREMENT,
  `vdno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `organisation` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `tel` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `obd` int(11) NOT NULL,
  `dld` varchar(20) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `tom` varchar(15) NOT NULL,
  `q1` varchar(15) NOT NULL,
  `q2` varchar(15) NOT NULL,
  `q3` varchar(15) NOT NULL,
  `q4` varchar(15) NOT NULL,
  `q5_a` varchar(15) NOT NULL,
  `q5_b` varchar(15) NOT NULL,
  `q5_c` varchar(15) NOT NULL,
  `q5_d` varchar(15) NOT NULL,
  `q5_e` varchar(15) NOT NULL,
  `q6_a` varchar(15) NOT NULL,
  `q6_b` varchar(15) NOT NULL,
  `q6_c` varchar(15) NOT NULL,
  `q7_a` varchar(20) NOT NULL,
  `q7_b` varchar(20) NOT NULL,
  `q7_c` varchar(20) NOT NULL,
  `q7_d` varchar(20) NOT NULL,
  `q7_e` varchar(20) NOT NULL,
  `q7_f` varchar(20) NOT NULL,
  `q7_g` varchar(20) NOT NULL,
  `q7_h` varchar(20) NOT NULL,
  `q7_i` int(20) NOT NULL,
  `q7_j` varchar(20) NOT NULL,
  `q7_k` varchar(20) NOT NULL,
  `q7_l` varchar(20) NOT NULL,
  `q8` varchar(20) NOT NULL,
  `q9` varchar(20) NOT NULL,
  `q10` varchar(20) NOT NULL,
  `q11_a` varchar(20) NOT NULL,
  `q11_b` varchar(20) NOT NULL,
  `q11_c` varchar(20) NOT NULL,
  `q11_d` varchar(20) NOT NULL,
  PRIMARY KEY (`bun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blood_donor_consent1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_receiver`
--

CREATE TABLE IF NOT EXISTS `blood_receiver` (
  `datee` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `organisation` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bg` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_receiver`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardinfo`
--

CREATE TABLE IF NOT EXISTS `cardinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vdno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `contact` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `wt` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `hb` int(11) NOT NULL,
  `hiv` int(11) NOT NULL,
  `hbsag` int(11) NOT NULL,
  `hcv` int(11) NOT NULL,
  `vdrl` int(11) NOT NULL,
  `mp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `name` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `organisation` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` varchar(10) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `vol` varchar(10) NOT NULL,
  `qty` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `bg`, `vol`, `qty`) VALUES
('1','A+','100','0'),
('10','A-','350','0'),
('11','B+','350','0'),
('12','B-','350','0'),
('13','AB+','350','0'),
('14','AB-','350','0'),
('15','O+','350','0'),
('16','O-','100','0'),
('17','O-','350','0'),
('2','A-','100','0'),
('3','B+','100','0'),
('4','B-','100','0'),
('5','AB+','100','0'),
('6','AB-','100','0'),
('7','O+','100','0'),
('9','A+','350','0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
create table contact(name varchar(50),
phone int(10),
email varchar(30),
message varchar(250)
);

create table user_reg(user_id int primary key auto_increment,
name varchar(50),
email_id varchar(30),
contact int(10),
password varchar(20),
confirm_password varchar(20),
address varchar(250),
gender varchar(50),
blood_group varchar(10)
);


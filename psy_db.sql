-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 04:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `depression_test`
--

CREATE TABLE `depression_test` (
  `U_ID` varchar(11) NOT NULL,
  `Q1` varchar(15) NOT NULL,
  `Q2` varchar(15) NOT NULL,
  `Q3` varchar(15) NOT NULL,
  `Q4` varchar(15) NOT NULL,
  `Q5` varchar(15) NOT NULL,
  `Q6` varchar(15) NOT NULL,
  `Q7` varchar(15) NOT NULL,
  `Q8` varchar(15) NOT NULL,
  `Q9` varchar(15) NOT NULL,
  `Q10` varchar(15) NOT NULL,
  `Q11` varchar(15) NOT NULL,
  `Q12` varchar(15) NOT NULL,
  `Q13` varchar(15) NOT NULL,
  `Q14` varchar(15) NOT NULL,
  `Q15` varchar(15) NOT NULL,
  `Q16` varchar(15) NOT NULL,
  `Q17` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depression_test`
--

INSERT INTO `depression_test` (`U_ID`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`) VALUES
('151-15-5123', 'Partly', 'Partly', 'Partly', 'Partly', 'Not at all', 'Not at all', 'A lot', 'Partly', 'Partly', 'Partly', 'Not at all', 'Partly', 'Partly', 'To a great exte', 'Not at all', 'Partly', 'Not at all'),
('151-15-5435', 'Not at all', 'Partly', 'Partly', 'Not at all', 'A lot', 'To a great exte', 'Partly', 'To a great exte', 'To a great exte', 'To a great exte', 'To a great exte', 'Not at all', 'A lot', 'A lot', 'Partly', 'Not at all', 'Not at all'),
('152-15-5546', 'Not at all', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'A lot', 'To a great exte', 'To a great exte', 'To a great exte', 'Partly', 'To a great exte', 'Not at all', 'A lot', 'Partly', 'To a great exte', 'To a great exte', 'To a great exte'),
('152-15-5547', 'Not at all', 'Partly', 'A lot', 'Partly', 'Partly', 'Partly', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all'),
('152-15-5586', 'A lot', 'To a great exte', 'To a great exte', 'Not at all', 'A lot', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'Partly', 'A lot', 'To a great exte', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'A lot'),
('152-15-5699', 'Partly', 'A lot', 'A lot', 'Partly', 'A lot', 'Not at all', 'A lot', 'Not at all', 'Not at all', 'Partly', 'A lot', 'A lot', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Partly'),
('152-15-5724', 'A lot', 'Not at all', 'Not at all', 'Not at all', 'A lot', 'A lot', 'A lot', 'A lot', 'Not at all', 'Partly', 'Partly', 'Partly', 'Partly', 'A lot', 'Not at all', 'A lot', 'Not at all'),
('152-15-5771', 'Not at all', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'Partly', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'A lot', 'Not at all', 'A lot', 'Partly'),
('152-15-5777', 'Not at all', 'Not at all', 'Partly', 'Partly', 'Partly', 'Partly', 'A lot', 'Partly', 'Partly', 'Partly', 'Partly', 'Not at all', 'Partly', 'Partly', 'Partly', 'Partly', 'Partly'),
('152-15-5783', 'Partly', 'Partly', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all'),
('152-15-5859', 'Not at all', 'Partly', 'Partly', 'Partly', 'Not at all', 'Not at all', 'Partly', 'A lot', 'Not at all', 'Partly', 'A lot', 'Partly', 'Partly', 'Partly', 'Not at all', 'Not at all', 'Not at all'),
('152-15-5879', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Partly', 'Not at all', 'Partly', 'Partly', 'Partly', 'Partly', 'Not at all', 'Partly', 'Partly', 'Partly', 'Not at all', 'Partly', 'Not at all'),
('152-15-5931', 'A lot', 'A lot', 'A lot', 'A lot', 'Partly', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot', 'A lot'),
('152-15-5960', 'Not at all', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Not at all', 'A lot', 'A lot', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Not at all'),
('152-15-5970', 'Not at all', 'Not at all', 'A lot', 'Not at all', 'A lot', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'A lot', 'Not at all', 'Not at all'),
('152-15-6020', 'To a great exte', 'Not at all', 'A lot', 'Partly', 'A lot', 'A lot', 'Partly', 'Not at all', 'Partly', 'Not at all', 'A lot', 'To a great exte', 'Partly', 'Partly', 'Partly', 'Partly', 'Not at all'),
('152-15-6023', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'A lot', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Partly', 'A lot', 'Partly', 'Not at all', 'Partly'),
('152-15-6037', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Partly', 'Not at all', 'Partly', 'A lot', 'Partly', 'A lot', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Not at all');

-- --------------------------------------------------------

--
-- Table structure for table `insomnia _test`
--

CREATE TABLE `insomnia _test` (
  `U_ID` varchar(11) NOT NULL,
  `Q1` varchar(15) NOT NULL,
  `Q2` varchar(15) NOT NULL,
  `Q3` varchar(15) NOT NULL,
  `Q4` varchar(15) NOT NULL,
  `Q5` varchar(15) NOT NULL,
  `Q6` varchar(15) NOT NULL,
  `Q7` varchar(15) NOT NULL,
  `Q8` varchar(15) NOT NULL,
  `Q9` varchar(15) NOT NULL,
  `Q10` varchar(15) NOT NULL,
  `Q11` varchar(15) NOT NULL,
  `Q12` varchar(15) NOT NULL,
  `Q13` varchar(15) NOT NULL,
  `Q14` varchar(15) NOT NULL,
  `Q15` varchar(15) NOT NULL,
  `Q16` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insomnia _test`
--

INSERT INTO `insomnia _test` (`U_ID`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`) VALUES
('152-15-5573', 'Partly', 'A lot', 'Partly', 'A lot', 'A lot', 'Partly', 'Partly', 'Partly', 'Partly', 'Partly', 'Not at all', 'Partly', 'Partly', 'Partly', 'Partly', 'Not at all'),
('161-15-6807', 'Partly', 'A lot', 'Not at all', 'A lot', 'Partly', 'Partly', 'Partly', 'A lot', 'Not at all', 'Not at all', 'Partly', 'Partly', 'Not at all', 'A lot', 'Partly', 'Not at all'),
('161-15-6914', 'Partly', 'Partly', 'Not at all', 'Not at all', 'A lot', 'A lot', 'Partly', 'Partly', 'Partly', 'Partly', 'A lot', 'Partly', 'Not at all', 'A lot', 'A lot', 'Not at all'),
('161-15-7046', 'A lot', 'Partly', 'Not at all', 'Partly', 'A lot', 'Partly', 'Partly', 'A lot', 'A lot', 'A lot', 'A lot', 'Partly', 'Partly', 'Partly', 'Not at all', 'A lot'),
('161-15-7203', 'Partly', 'Not at all', 'A lot', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Partly', 'Partly', 'Partly', 'Partly', 'To a great exte', 'Partly', 'A lot', 'A lot', 'To a great exte'),
('161-15-7213', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all'),
('161-15-7325', 'Partly', 'Not at all', 'Not at all', 'Partly', 'Partly', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'Partly', 'Not at all', 'Not at all', 'Not at all', 'Partly', 'Partly'),
('161-15-7330', 'Not at all', 'To a great exte', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'A lot', 'Not at all', 'A lot', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Not at all', 'Partly', 'A lot'),
('161-15-7333', 'To a great exte', 'A lot', 'Not at all', 'A lot', 'To a great exte', 'Not at all', 'A lot', 'To a great exte', 'Partly', 'To a great exte', 'Partly', 'Partly', 'Partly', 'To a great exte', 'To a great exte', 'To a great exte'),
('Rabby', 'Not at all', 'A lot', 'Partly', 'Not at all', 'To a great exte', 'Not at all', 'A lot', 'A lot', 'Partly', 'Partly', 'A lot', 'Not at all', 'Not at all', 'A lot', 'A lot', 'Partly');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `NAME` varchar(50) NOT NULL,
  `U_ID` varchar(11) NOT NULL,
  `U_MAIL` varchar(60) NOT NULL,
  `GENDER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`NAME`, `U_ID`, `U_MAIL`, `GENDER`) VALUES
('Fahamidur Rahman', '151-15-5123', 'fahamidur15-5122@diu.edu.bd', 'Male'),
('Dyuti Islam ', '151-15-5435', 'dyuti15-5435@diu.edu.bd', 'Female'),
('nobel haque', '152-15-5546', 'nobel15-5546@diu.edu.bd', 'Male'),
('Md. Zahidul Hasan Hridoy', '152-15-5547', 'zahidul15-5547@diu.edu.bd', 'Male'),
('Md. Shakil Mahmud', '152-15-5573', 'mahmud15-5573@diu.edu.bd', 'Male'),
('Ankon', '152-15-5586', 'rahaman15-5586@diu.edu.bd', 'Male'),
('good', '152-15-5699', 'mamun15-5699@diu.edu.bd', 'Male'),
('Md. Akhlaqur Rahman Siddiqui', '152-15-5724', 'siddiqui15-5724@diu.edu.bd', 'Male'),
('Araf Islam', '152-15-5771', 'islam15-5771@diu.edu.bd', 'Male'),
('TAnmoy', '152-15-5777', 'koer15-5777@diu.edu.bd', 'Male'),
('Md.Akdas Ali', '152-15-5783', 'akdas15-5783@diu.edu.bd', 'Male'),
('Mohammad Hasibul Hasan', '152-15-5859', 'hasan15-5859@diu.edu.bd', 'Male'),
('Mahadi Hasan', '152-15-5879', 'kamrul15-5879@diu.edu.bd', 'Male'),
('Sarthok Biswas Shetu', '152-15-5931', 'Shetu15-5931@diu.edu.bd ', 'Male'),
('Jakir Hossain', '152-15-5960', 'jakir15-5960@diu.edu.bd', 'Male'),
('MD. SAFAYET HOSSAIN', '152-15-5970', 'hossain15-5970@diu.edu.bd', 'Male'),
('mim', '152-15-6020', 'mim15-6020@diu.edu.bd', 'Male'),
('Nusrat Jahan Nisha', '152-15-6023', 'nisha15-6023@diu.edu.bd', 'Female'),
('Md Rubel', '152-15-6037', 'rubel15-6037@diu.edu.bd', 'Male'),
('Kona', '161-15-6807', 'kohinoor15-6807@gmail.com', 'Female'),
('Anmona Mamun Monisha', '161-15-6914', 'mamun15-6914@diu.edu.bd', 'Female'),
('Sium Jahan', '161-15-7046', 'sium15-7046@diu.edu.bd', 'Male'),
('Khaled Akram', '161-15-7203', 'akram15-7203@diu.edu.bd', 'Male'),
('Afnanul Hassan', '161-15-7213', 'afnanul15-7213@diu.edu.bd', 'Male'),
('Humayra Khanum', '161-15-7325', 'humayra15-7325@diu.edu.bd', 'Female'),
('Mahathir Mohammad Arnab', '161-15-7330', 'mohammad15-7330@diu.edu.bd', 'Male'),
('Syeda khadizatul maria', '161-15-7333', 'khadizatul15-7333@diu.edu.bd', 'Female'),
('Md Bayazid khan', 'Rabby', 'bayazid15-7063@diu.edu.bd', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depression_test`
--
ALTER TABLE `depression_test`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `insomnia _test`
--
ALTER TABLE `insomnia _test`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`U_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

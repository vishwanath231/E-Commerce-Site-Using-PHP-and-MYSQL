-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 06:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Size` varchar(1000) NOT NULL,
  `P_Price` int(255) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `Total_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_section_1`
--

CREATE TABLE `m_section_1` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_section_1`
--

INSERT INTO `m_section_1` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(1, 'p-1.jpg', 'ella - hlothemes', 'sedian vitaen mi pretium aliquet - beige', 1, 149),
(2, 'p-2.jpg', 'marc', 'suscipit quamet lorem eleifend - beige', 1, 149);

-- --------------------------------------------------------

--
-- Table structure for table `m_section_2`
--

CREATE TABLE `m_section_2` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_section_2`
--

INSERT INTO `m_section_2` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(1, 'p-3.jpg', 'ella - hlothemes', 'losmo naminis delementum milance', 1, 50),
(2, 'p-4.jpg', 'sunglass', 'pharetras pranueu homuir an mollis', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `m_section_3`
--

CREATE TABLE `m_section_3` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_section_3`
--

INSERT INTO `m_section_3` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(1, 'p-5.jpg', 'classic', 'bamio lementum de cras hamo dincidunts de acelos', 1, 170),
(2, 'p-6.jpg', 'lorem', 'faucibus sullamcorper matti dros', 1, 70),
(3, 'p-7.jpg', 'ella - hlothemes', 'hentum tosmo namin delemrine', 1, 50),
(4, 'p-8.jpg', 'sleeper', 'hentum tosmois dilementum milance', 1, 70),
(5, 'p-3.jpg', 'marc', 'losni naminis delementum milance', 1, 75);

-- --------------------------------------------------------

--
-- Table structure for table `m_section_4`
--

CREATE TABLE `m_section_4` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_section_4`
--

INSERT INTO `m_section_4` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(1, 'p-2.jpg', 'classic', 'suscipit quamet lorem eleifend - bige', 1, 149),
(2, 'p-1.jpg', 'ella - hlothemes', 'sedian vitaen mi pretium aliquet - beige', 1, 129),
(3, 'p-9.jpg', 'marc', 'preteus tomuir laggin sue matti drost - black', 1, 99),
(4, 'p-4.jpg', 'sunglass', 'pharetras pranueu homuir an mollis', 1, 50),
(5, 'p-3.jpg', 'ella - hlothemes', 'losmo naminis delementum milance', 1, 60),
(6, 'p-8.jpg', 'sleeper', 'hentum tosmois dilementum milance', 1, 70),
(7, 'p-7.jpg', 'ella - hlothemes', 'hentum tosmo namin delemrine', 1, 50),
(8, 'p-6.jpg', 'classic', 'faucibus sullamcorper matti dros', 1, 70),
(9, 'c-4.jpg', 'lorem', 'endisse vestibu lumisus aucibus lynk - beige', 1, 349),
(10, 'p-5.jpg', 'classic', 'bamio lementum de cras hamo dincidunts de acelos', 1, 170);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Code` int(255) NOT NULL,
  `Status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Email`, `Password`, `Code`, `Status`) VALUES
(1, 'vishwanath', 'vishwanathvishwabai@gmail.com', 'vishwa@1', 0, 'verfied'),
(2, 'vishwa', 'vishwanath@gmail.com', 'vishwa@12', 0, 'verfied');

-- --------------------------------------------------------

--
-- Table structure for table `w_card_1`
--

CREATE TABLE `w_card_1` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_card_1`
--

INSERT INTO `w_card_1` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(3, 'img-4.webp', 'ella - halothemes', 'homulr faucibus mollis phoretras praneu', 1, 89),
(5, 'img-2.jpg', 'lorem', 'lamcorper ostique amattis drosele', 1, 89);

-- --------------------------------------------------------

--
-- Table structure for table `w_card_2`
--

CREATE TABLE `w_card_2` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_card_2`
--

INSERT INTO `w_card_2` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(1, 'img-6.webp', 'lorem', 'faucibus sullamcorper matti drost', 1, 89),
(2, 'img-7.webp', 'marc', 'homulr mollis phoretras praneu', 1, 99);

-- --------------------------------------------------------

--
-- Table structure for table `w_card_3`
--

CREATE TABLE `w_card_3` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_card_3`
--

INSERT INTO `w_card_3` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(1, 'img-5.webp', 'marc', 'faucibus sullamcorper matti drost - black', 1, 189),
(2, 'img-8.webp', 'ella - halothemes', 'darturien laciniddo magnis meros - lightskyblue', 1, 79),
(3, 'img-7.webp', 'ella - halothemes', 'praneu homuir mollis pharetras - gold', 1, 110),
(4, 'img-6.webp', 'lorem', 'mollis pharetras praneu homuir - black', 1, 120),
(5, 'img-10.webp', 'hand bag', 'allamcorper tempor pretium aliquet - black', 1, 169);

-- --------------------------------------------------------

--
-- Table structure for table `w_card_4`
--

CREATE TABLE `w_card_4` (
  `ID` int(11) NOT NULL,
  `P_Img` varchar(1000) NOT NULL,
  `P_Name` varchar(1000) NOT NULL,
  `P_Des` varchar(1000) NOT NULL,
  `P_Qty` int(255) NOT NULL,
  `P_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_card_4`
--

INSERT INTO `w_card_4` (`ID`, `P_Img`, `P_Name`, `P_Des`, `P_Qty`, `P_Price`) VALUES
(1, 'img-10.webp', 'hand bag', 'allamcorper tempor pretium aliquet - black', 1, 169),
(2, 'img-19.jpg', 'ELLA - HALOTHEMES', 'Cosmo Naminos Delementum Bra', 1, 149),
(3, 'img-8.webp', 'ella - halothemes', 'Darturien Laciniado Magnis Meros - Lightskyblue', 1, 79),
(4, 'img-5.webp', 'marc', 'Faucibus Sullamcorper Matti Drost - Black', 1, 189),
(5, 'img-4.webp', 'lorem', 'Homuir Mollis Pharetras Praneu', 1, 89),
(6, 'img-20.jpg', 'ella - halothemes', 'laciniado Magnis Darturien Meros', 1, 169),
(7, 'img-2.jpg', 'lorem', 'Lamcorper Ostique Amattis Drosele - Palegreen', 1, 99),
(8, 'img-3.webp', 'marc', 'Loremous Scelerisques Saliduar Dan - Pink', 1, 189),
(9, 'img-6.webp', 'ella - halothemes', 'Mollis Pharetras Praneu Homuir - Black', 1, 110),
(10, 'img-7.webp', 'ella - halothemes', 'Praneu Homuir Mollis Pharetras - Black', 1, 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m_section_1`
--
ALTER TABLE `m_section_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m_section_2`
--
ALTER TABLE `m_section_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m_section_3`
--
ALTER TABLE `m_section_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m_section_4`
--
ALTER TABLE `m_section_4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `w_card_1`
--
ALTER TABLE `w_card_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `w_card_2`
--
ALTER TABLE `w_card_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `w_card_3`
--
ALTER TABLE `w_card_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `w_card_4`
--
ALTER TABLE `w_card_4`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `m_section_1`
--
ALTER TABLE `m_section_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_section_2`
--
ALTER TABLE `m_section_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_section_3`
--
ALTER TABLE `m_section_3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_section_4`
--
ALTER TABLE `m_section_4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `w_card_1`
--
ALTER TABLE `w_card_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `w_card_2`
--
ALTER TABLE `w_card_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `w_card_3`
--
ALTER TABLE `w_card_3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `w_card_4`
--
ALTER TABLE `w_card_4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2016 at 06:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `van`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `FirstName` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `Lastname` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `Address` text COLLATE utf8_croatian_ci NOT NULL,
  `Username` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `FirstName`, `Lastname`, `Address`, `Username`, `Password`) VALUES
(1, 'นางสาวศศิธร ', 'วิชาดี', ' วลัยลักษณ์ ', 'admin01', '1234'),
(2, 'นางสาวจุฑาภรณ์', 'พุ่มมณี', 'วลัยลักษณ์', 'admin02', '1234'),
(3, 'นายครรชิต', 'แก้วเนื้ออ่อน', 'วลัยลักษณ์', 'admin03', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID_booking` int(11) NOT NULL,
  `FirstName` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `LastName` varchar(45) COLLATE utf8_croatian_ci NOT NULL,
  `PhoneNumber` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `Address` text COLLATE utf8_croatian_ci NOT NULL,
  `Total_cose` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetail`
--

CREATE TABLE `bookingdetail` (
  `IDbookingDetail` int(11) NOT NULL,
  `From` varchar(80) COLLATE utf8_croatian_ci NOT NULL,
  `To` varchar(80) COLLATE utf8_croatian_ci NOT NULL,
  `ID_booking` int(11) NOT NULL,
  `seat` int(2) NOT NULL,
  `No` int(3) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bus_schedule`
--

CREATE TABLE `bus_schedule` (
  `No` int(3) NOT NULL,
  `time_out_van` varchar(80) COLLATE utf8_croatian_ci NOT NULL,
  `Way` varchar(1) COLLATE utf8_croatian_ci NOT NULL,
  `statusOnDB` varchar(1) COLLATE utf8_croatian_ci NOT NULL DEFAULT '1',
  `ID_van` varchar(10) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `bus_schedule`
--

INSERT INTO `bus_schedule` (`No`, `time_out_van`, `Way`, `statusOnDB`, `ID_van`) VALUES
(1, '06.00 น.', '1', '1', '915-9'),
(2, '08.00 น.', '1', '1', '845-3'),
(3, '10.00 น.', '1', '1', '123-5'),
(4, '12.00 น.', '1', '1', '231-9'),
(5, '14.00 น.', '1', '1', '987-0'),
(6, '16.00 น.', '1', '1', '124-6'),
(7, '06.00 น.', '0', '1', '231-9'),
(8, '08:00 น.', '0', '1', '987-0'),
(9, '10:00 น.', '0', '1', '124-6'),
(10, '12:00 น.', '0', '1', '915-9'),
(11, '14:00 น.', '0', '1', '845-3'),
(12, '16:00 น.', '0', '1', '123-5');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `ID_driver` int(10) NOT NULL,
  `Name_Driver` varchar(60) COLLATE utf8_croatian_ci NOT NULL,
  `Address` text COLLATE utf8_croatian_ci NOT NULL,
  `PhoneNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`ID_driver`, `Name_Driver`, `Address`, `PhoneNumber`) VALUES
(3, 'นายฮานีฟ ไทรทอง', 'ลักษณานิเวศ 7', 987859542),
(4, 'พิรุณรัตน์ ชูกลิ่น', 'ลักษณานิเวศ 3', 636925678),
(5, 'นายนิธิกันต์ ช่วยจันทร์', 'ลักษณษนิเวศ 7', 852409279),
(6, 'นางสาวจุฑามาศ แซ่ฉั่ว', 'ลักษณานิเวศ 3', 844424234),
(7, 'นางสาวกนกวรรณ มีแก้ว', 'ลักษณานิเวศ 1', 26927138),
(8, 'นายกิตติพง สงทอง', 'ท่าศาลา', 919834590);

-- --------------------------------------------------------

--
-- Table structure for table `van`
--

CREATE TABLE `van` (
  `ID_van` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `License_plate` varchar(6) COLLATE utf8_croatian_ci NOT NULL,
  `ID_driver` int(10) NOT NULL,
  `blank_total` int(2) NOT NULL DEFAULT '14'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `van`
--

INSERT INTO `van` (`ID_van`, `License_plate`, `ID_driver`, `blank_total`) VALUES
('123-5', 'ทท0980', 7, 14),
('124-6', 'กข2522', 6, 14),
('231-9', 'กข7810', 5, 14),
('845-3', 'อป1756', 4, 14),
('915-9', 'พท1487', 3, 14),
('987-0', 'ปย1912', 8, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID_booking`);

--
-- Indexes for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  ADD PRIMARY KEY (`IDbookingDetail`),
  ADD KEY `ID_booking` (`ID_booking`),
  ADD KEY `ID_seat` (`seat`),
  ADD KEY `No` (`No`);

--
-- Indexes for table `bus_schedule`
--
ALTER TABLE `bus_schedule`
  ADD PRIMARY KEY (`No`),
  ADD KEY `ID_van` (`ID_van`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`ID_driver`);

--
-- Indexes for table `van`
--
ALTER TABLE `van`
  ADD PRIMARY KEY (`ID_van`),
  ADD KEY `ID_driver` (`ID_driver`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID_booking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  MODIFY `IDbookingDetail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bus_schedule`
--
ALTER TABLE `bus_schedule`
  MODIFY `No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  ADD CONSTRAINT `bookingdetail_ibfk_1` FOREIGN KEY (`ID_booking`) REFERENCES `booking` (`ID_booking`),
  ADD CONSTRAINT `bookingdetail_ibfk_3` FOREIGN KEY (`No`) REFERENCES `bus_schedule` (`No`);

--
-- Constraints for table `bus_schedule`
--
ALTER TABLE `bus_schedule`
  ADD CONSTRAINT `bus_schedule_ibfk_1` FOREIGN KEY (`ID_van`) REFERENCES `van` (`ID_van`);

--
-- Constraints for table `van`
--
ALTER TABLE `van`
  ADD CONSTRAINT `van_ibfk_1` FOREIGN KEY (`ID_driver`) REFERENCES `driver` (`ID_driver`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

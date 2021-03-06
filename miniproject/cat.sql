-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 08:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cat`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `catID` varchar(4) NOT NULL,
  `catType` varchar(50) NOT NULL,
  `catDetail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`catID`, `catType`, `catDetail`) VALUES
('0000', 'แมวเปอร์เซีย (Persian)', 'เพศผู้ ตัวสีขาว ตามสีฟ้า ขนยาว นิสัยขี้อาย กลัวคน '),
('0001', 'แมวเปอร์เซีย (Persian)', 'เพศเมีย สีเทา ตาสีน้ำตาล นิสัยขี้เล่น ชอบกวนเจ้าของ ค่อนข้างที่จะดื้อ'),
('0002', 'แมวอเมริกัน ชอร์ตแฮร์ (American Shorthair)', 'เพศเมีย สีขาวลายดำ นิสัยขี้อ้อน ชอบกินปลาทู'),
('0003', 'แมววิเชียรมาศ (Siamese)', 'เพศผู้ มีแต้มสีน้ำตาลเข้ม 9 จุดอยู่บนตัว ได้แก่ ที่ปลายเท้าทั้งสี่ ปลายหูทั้งสอง ปลายหาง บนจมูก และที่อวัยวะเพศ'),
('0004', 'แมวโคราช (Korat)', 'เพศเมีย มีขนเรียบ โคนขนสีเทาขุ่น ๆ ส่วนปลายขนเป็นสีเงินประกายคล้ายหยดน้ำค้างบนใบบัว');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`catID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

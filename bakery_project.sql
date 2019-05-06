-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 04:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Address_ID` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `Address_Number` varchar(20) NOT NULL,
  `Address_Street` varchar(20) NOT NULL,
  `Address_Tambon` varchar(20) NOT NULL,
  `Address_District` varchar(20) NOT NULL,
  `Address_Province` varchar(20) NOT NULL,
  `Postcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Address_ID`, `member_id`, `Address_Number`, `Address_Street`, `Address_Tambon`, `Address_District`, `Address_Province`, `Postcode`) VALUES
(1, 1, '23', 'สุทธิหรรษา ซ.3', 'หาดใหญ่', 'หาดใหญ่', 'สงขลา', '90110');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(11) NOT NULL,
  `Category_Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `member_name` varchar(20) NOT NULL,
  `member_lastname` varchar(20) NOT NULL,
  `member_phone` varchar(10) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `status` enum('admin','member') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `member_name`, `member_lastname`, `member_phone`, `member_email`, `status`) VALUES
(1, 'jubumiru', '12345', 'ราเชน', 'ปานุกูล', '0973506151', 'olo.olo.olo@windowslive.com', 'member'),
(2, 'admin', '12345', 'admin', 'taew', '0183472181', 'sarawut.thongjun77@gmail.com', 'admin'),
(3, 'test', '1234', 'java', 'script', '0842932010', 'down_zuza_05@hotmail.com', 'member'),
(4, 'harry', '1111', 'ts', 'script', 'asdsadasd', 'autoonez@hotmail.com', 'member'),
(5, 'rachen', '1234', 'pnk', 'pnk', '0183472181', 'down_zuza_05@hotmail.com', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_ID` int(11) NOT NULL,
  `Member_ID` int(11) NOT NULL,
  `Address_ID` int(11) NOT NULL,
  `Order_Date` date NOT NULL,
  `Order_Status` varchar(10) NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Payment_Image` varchar(20) NOT NULL,
  `Price_Sold` varchar(5) NOT NULL,
  `Discount_Rate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Product_Amount` varchar(5) NOT NULL,
  `Product_Note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Product_Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Product_Price` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Product_Detail` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Product_Category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_Status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Product_Name`, `image`, `Product_Price`, `Product_Detail`, `Product_Category`, `Product_Status`) VALUES
(1, 'เค้กวนิลา', 'vanilacake.jpg', '150', 'ลิ้มลองความนุ่มละมุนของเค้กเนื้อวนิลาที่แสนหอมหวาน สามารถเลือกเขียนลายเส้นด้วยแยมรสชาติต่างๆ ตามความต้องการ', 'เค้กวันเกิด', '1'),
(2, 'เค้กช็อคโกแลต', 'chococake.jpg', '200', 'เค้กเนื้อช็อกโกแลต เนื้อแน่น หวานฉ่ำ  กลมกล่อม  สัมผัสได้ถึงรสชาติของช็อกโกแลตอย่างแท้จริง  แต่งหน้าเค้กด้วยครีมดาร์กช็อกโกแลตและผงโกโก้โรยรอบตัวเค้กด้วยช็อกโกแลตชิพรสเข้ม', 'เค้กวันเกิด', '1'),
(3, 'เค้กสตรอว์เบอร์รี', 'strawcake.jpg', '200', 'หอมหวานเนื้อเค้กรสสตรอว์เบอร์รี นุ่ม ฟู ตกแต่งด้วยครีมดอกไม้นุ่มละมุนลิ้นทุกครั้งที่ได้ลิ้มลอง', 'เค้กวันเกิด', '1'),
(4, 'เค้กโรล', 'roll.jpg', '30', 'ดีงามไปกับความนุ่มของเมนูแยมโรล เค้กม้วนครีมอ่อน สอดไส้เนื้อครีมหอมละมุน', 'เค้กชิ้น', '1'),
(5, 'บราวนี่', 'browniee.jpg', '30', 'บราวนี่เนื้อนุ่ม ช็อคโกแลตหอมหวานนุ่มนวล', 'เค้กชิ้น', '1'),
(6, 'เค้กฝอยทอง', 'goldcake.jpg', '30', 'เนื้อเค้กที่นุ่มละมุนลิ้น ตกแต่งหน้าเค้กด้วยฝอยทองแสนนุ่มหวานหอม เป็นรสชาติที่ลงตัวและเข้ากันพอดีคำ', 'เค้กชิ้น', '1'),
(7, 'เอแคลร์', 'supreme.jpg', '25', 'รสชาติของเอแคลร์ที่แสนอร่อย สอดไส้ที่หอมหวาน เนื้อแป้งเนียนนุ่ม', 'เอแคลร์', '1'),
(8, 'ขนมปังกรอบ', 'bread.JPG', '35', 'ขนมปังกรอบที่มีรสชาติหอมกลิ่นเนยหอมๆ กรอบอร่อย', 'ขนมปังกรอบ', '1'),
(9, 'เค้กชิ้นโบราณ', 'borancake.jpg', '15', 'เค้กโบราณหน้าแยมส้ม โรยด้วยเม็ดมะม่วงหิมพานต์ ตกแต่งด้วยครีมเล็กน้อย รสชาติที่เข้ากันและลงตัวมาตั้งแต่สมัยโบราณ', 'เค้กชิ้น', '1'),
(10, 'คุกกี้', 'cookies.jpg', '50', 'คุกกี้ที่มีรสชาติหอมละมุนละไม ประทับใจตั้งแต่คำแรกที่กัด', 'คุ้กกี้', '1'),
(11, 'เค้กชิ้นสตรอว์เบอรี่', 'cakestraw.jpg', '21', 'สัมผัสรสชาติของเค้กผลไม้ ที่มีส่วนผสมของแยมสตรอเบอร์รี่และผลไม้ตระกูลเบอร์รี่ต่าง ๆ รสหวานซ่อนเปรี้ยว ประดับตกแต่งหน้าเค้กด้วยแยมสตรอเบอร์รี่ฉ่ำ อย่างสวยงามและน่ารับประทาน', 'เค้กชิ้น', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Address_ID`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Member_ID` (`Member_ID`),
  ADD KEY `Address_ID` (`Address_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `Order_ID` (`Order_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `Address_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Member_ID`) REFERENCES `member` (`Member_ID`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`Address_ID`) REFERENCES `address` (`Address_ID`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `order` (`Order_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2021 lúc 05:34 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlithietbimaytinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `AccountID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`AccountID`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin');
INSERT INTO `account` (`AccountID`, `UserName`, `Password`) VALUES
(1, 'danghieu', 'truongminhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL, 
  `Category` varchar(50) NOT NULL,
  `ImageSrc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `Description`, `Category`, `ImageSrc`) VALUES
(9, 'ROG PC', '50000000', 'Republic Of Gamer', 'PC', 'images/7.jpg'),
(10, 'ROG PC', '40000000', 'Republic Of Gamer ', 'PC', 'images/8.jpg'),
(11, 'Corsair PC', '35000000', 'Corsair ', 'PC', 'images/9.jpg'),
(12, 'Mainboard', '20000000', 'ASUS ROG Zenith II Extreme Alpha ', 'Linhkien', 'images/10.jpg'),
(13, 'Ram', '8780000', 'G.SKILL Trident Z Neo DDR4 CL16-16-16-36', 'Linhkien', 'images/11.jpg'),
(14, 'Tản nhiệt nước', '7490000', 'AIO ASUS ROG RYUJIN 360', 'Linhkien', 'images/12.jpg'),
(15, 'Bàn Phím Cơ', '3590000', 'Razer Blackwidow V3', 'Banphim', 'images/13.jpg'),
(16, 'Bàn phím cơ', '5290000', 'Corsair K100 RGB', 'Banphim', 'images/14.jpg'),
(17, 'Bàn Phím Cơ', '3490000', 'Akko Designer Studio MOD001', 'Banphim', 'images/15.jpg'),
(18, 'Chuột', '3490000', 'Razer Viper Ultimate Wireless', 'Chuot', 'images/16.jpg'),
(19, 'Chuột', '3890000', 'Asus ROG Chakram', 'Chuot', 'images/17.jpg'),
(20, 'Chuột', '3000000', 'Logitech G903 Hero Lightspeed', 'Chuot', 'images/18.jpg');





-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

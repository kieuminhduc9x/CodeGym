-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2019 lúc 09:08 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Mamay` int(11) NOT NULL,
  `Ngaymua` date DEFAULT NULL,
  `Ngaygiao` date DEFAULT NULL,
  `Diachi` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Thanhtien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `Mamay` int(11) NOT NULL,
  `Tenmay` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Mahang` int(11) NOT NULL,
  `Hinhanh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Dongia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`Mamay`, `Tenmay`, `Mahang`, `Hinhanh`, `Soluong`, `Dongia`) VALUES
(1, 'Iphone SX Max', 1, 'images/iphone/iphone-xs-max-space-select-2018.png', 200, 24500000),
(2, 'Iphone XR', 1, 'images/iphone/iphone XR.jpg', 203, 17800000),
(3, 'Iphone X ', 1, 'images/iphone/iphone X.png', 555, 20700000),
(4, 'Iphone 8 Plus', 1, 'images/iphone/iphone 8plus.png', 123, 12200000),
(5, 'Iphone 7 Plus', 1, 'images/iphone/iphone 7 plus 32 gb.jpeg', 354, 10500000),
(6, 'Iphone 6S', 1, 'images/iphone/iphone6s plus 32gb.jpg', 756, 6600000),
(7, 'Iphone 6', 1, 'images/iphone/iphone6s plus 32gb.jpg', 845, 5100000),
(8, 'Samsung Galaxy note 9', 3, 'images/samsung/Samsung-Galaxy-Note-9-Xách-tay.jpg', 120, 12350000),
(9, 'Samsung Galaxy S10', 3, 'images/samsung/samsung-galaxy-s10-trang.jpg', 142, 15500000),
(10, 'Samsung Galaxy A8', 3, 'images/samsung/samsung-galaxy-a8-2018-purple.jpg', 256, 6990000),
(11, 'Samsung Galaxy S8 ', 3, 'images/samsung/galyxy s8+.jpg', 252, 15500000),
(12, 'Samsung Galaxy note 8 ', 3, 'images/samsung/samsung-galaxy-note8-black.jpg', 363, 8000000),
(13, 'Xiaomi Black Shark 2', 2, 'images/xiaomi-black-shark-2-blackkk-small.jpg', 1412, 12500000),
(14, 'Xiaommi K20 pro', 2, 'images/redmi-k20-pro-small.jpg', 1232, 8500000),
(15, 'Xiaomi Redmi Note 7', 2, 'images/xiaomi/xiaomi note 7.jpg', 2423, 4350000),
(16, 'Xiaomi Mi 6x (A2 )', 2, 'images/xiaomi/xiaomi-mi-6x-hong-small.jpg', 353, 3850000),
(17, 'Xiaomi Mi 9 SE', 2, 'images/xiaomi/Xiaomi_Mi_9_SE.jpg', 234, 8350000),
(18, 'Xiaomi Mi Mix 3 ', 2, 'images/xiaomi/Xiaomi-Mi-Mix-3.jpg', 2, 12900000),
(19, 'Xiaomi Mi 8 ', 2, 'images/xiaomi/xiaomi-mi-8-black.jpg', 23432, 7350000),
(20, 'Xiaomi Redmi 5 Plus', 2, 'images/xiaomi/xiaomi-redmi-5-plus-hong-small.jpg', 129, 3250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `Mahang` int(11) NOT NULL,
  `Tenhang` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`Mahang`, `Tenhang`) VALUES
(1, 'Iphone'),
(2, 'Xiaomi'),
(3, 'Samsung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `Tenmay` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Ngaymua` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(8) NOT NULL,
  `TenKH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Taikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(15) NOT NULL,
  `Level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Taikhoan`, `Matkhau`, `Diachi`, `SDT`, `Level`) VALUES
(2, 'kieu minh duc', 'kieuduc', 'duc', 'Ha Noi', 975083149, 2),
(3, 'Nam', 'Nam123', '123', 'Ha Nam', 2147483647, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`Mamay`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`Mahang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `Mamay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `Mahang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

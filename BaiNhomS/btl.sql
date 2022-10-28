-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2021 lúc 02:57 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--
CREATE DATABASE IF NOT EXISTS `btl` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `btl`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Xiaomi'),
(2, 'Iphone'),
(3, 'Oppo'),
(4, 'Vivo'),
(5, 'Samsung'),
(7, 'Nokia'),
(8, 'Vsmart'),
(9, 'Realme'),
(10, 'Masstel');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `prd_id` int(5) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `image` char(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `brand_id` int(5) NOT NULL,
  `id_loaisp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `price`, `quantity`, `description`, `brand_id`, `id_loaisp`) VALUES
(23, 'iphone X', 'iphone_11.jpg', 12, 10, 'Sản xuất năm 2020', 1, 1),
(24, 'iphone Xs', 'iphone_11.jpg', 50000, 122, 'Sản xuất năm 2020', 1, 1),
(25, 'OPPO ZENO', 'R.jpg', 100000, 12, 'Sản xuất năm 2020', 2, 1),
(26, 'ASUS gaming', 'Acer Aspire 5 A515.jfif', 1098765, 12, 'Sản xuất năm 2020', 8, 2),
(27, 'ASUS tuf gaming ', 'Dell Latitude 7480.png', 19886545, 12, 'Sản xuất năm 2020', 1, 2),
(28, 'Sony f112', 'SamSung Galaxy A03.png', 1000000, 12, 'sản xuất năm 2021', 9, 1),
(29, 'Samsung gly8', 'iphone_x.jpg', 2147483647, 1, 'sản xuất năm 2021', 5, 1),
(30, 'redmi note 8', 'SamSung Galaxy S Series.jpg', 1000000, 12, 'sản xuất năm 2021', 9, 1),
(31, 'Vertu 01', 'Vertu Signature S Rose Gold Ceramic.png', 19999999, 12, 'sản xuất năm 2021', 10, 1),
(32, 'realme note 7', 'Realme 5.png', 1000000, 12, 'sản xuất năm 2021', 9, 1),
(33, 'OPPO ZENO2', 'iphone_x.jpg', 100000, 12, 'Sản xuất năm 2020', 3, 1),
(34, 'ASUS gaming 12', 'OPPO Reno 4 Pro.png', 10000, 12, 'Sản xuất năm 2020', 9, 1),
(35, 'iphone XsMax', 'Oppo A7 ColorOS.jpg', 100000, 12, 'Sản xuất năm 2020', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(2, 'son', 'c4ca4238a0b923820dcc509a6f75849b', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`id_loaisp`, `tenloaisp`) VALUES
(1, 'Điện thoai'),
(2, 'máy tính'),
(4, 'sim&thẻ'),
(8, 'HÀNG GIA DỤNG'),
(9, 'MÁY CŨ GIÁ RẺ'),
(10, 'TRẢ GÓP 0%');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `id_loaisp` (`id_loaisp`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_loaisp`) REFERENCES `tbl_loaisanpham` (`id_loaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

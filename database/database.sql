-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 03:26 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` int(10) UNSIGNED NOT NULL,
  `bd_name` varchar(150) NOT NULL,
  `bd_sex` varchar(25) NOT NULL,
  `bd_age` int(3) DEFAULT NULL,
  `bd_bgroup` varchar(3) NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
(1, 'Nguyễn Ngọc Cường', 'Nam', 20, 'O', '2021-10-19', '0953543887'),
(2, 'Trần Thịnh Cường', 'Nam', 24, 'B', '2021-10-10', '0867567564'),
(3, 'Nguyễn Hoàng Mỹ', 'Nữ', 21, 'A', '2021-10-11', '0987654513'),
(4, 'Nguyễn Thuận Thành', 'Nam', 23, 'O', '2021-10-19', '0956854645'),
(5, 'Nguyễn Tường Anh', 'Nữ', 24, 'B', '2021-10-18', '0966234521'),
(6, 'Vũ Mạnh Ðình', 'Nam', 26, 'AB', '2021-10-11', '0934573475'),
(7, 'Lê Bích Thảo', 'Nữ', 21, 'O', '2021-10-18', '0953366784'),
(8, 'Bùi Mộng Hằng', 'Nữ', 22, 'B', '2021-10-11', '0162423528'),
(9, 'Đỗ Kim Khanh', 'Nam', 25, 'A', '2021-10-16', '0154359905'),
(10, 'Lý Hữu Hiệp', 'Nam', 24, 'AB', '2021-10-11', '0945345636');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`bd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2024 lúc 02:30 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sinhvien_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `course1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `username`, `password`, `lastname`, `firstname`, `city`, `email`, `course1`) VALUES
(1, '2151173744', 'cse@485A', 'Nguyễn Đại', 'An', 'KTPM3_63KTPM1', '2151173744@e.tlu.edu.vn', 'CSE485.202401'),
(2, '2251061693', 'cse@485A', 'BÙI PHƯƠNG', 'ANH', 'KTPM3_64CNTT1', '2251061693@e.tlu.edu.vn', 'CSE485.202401'),
(3, '2251172224', 'cse@485A', 'LĂNG TUẤN', 'ANH', 'KTPM3_64KTPM3', '2251172224@e.tlu.edu.vn', 'CSE485.202401'),
(4, '2251172225', 'cse@485A', 'LÊ ĐÌNH', 'ANH', 'KTPM3_64KTPM3', '2251172225@e.tlu.edu.vn', 'CSE485.202401'),
(5, '2151062701', 'cse@485A', 'Lê Hải', 'Anh', 'KTPM3_63CNTT.NB', '2151062701@e.tlu.edu.vn', 'CSE485.202401'),
(6, '2151062706', 'cse@485A', 'Nguyễn Quỳnh', 'Anh', 'KTPM3_63CNTT.NB', '2151062706@e.tlu.edu.vn', 'CSE485.202401'),
(7, '2151062712', 'cse@485A', 'Trần Duy', 'Anh', 'KTPM3_63CNTT1', '2151062712@e.tlu.edu.vn', 'CSE485.202401'),
(8, '2251172244', 'cse@485A', 'NGÔ THỊ NGỌC', 'ÁNH', 'KTPM3_64KTPM3', '2251172244@e.tlu.edu.vn', 'CSE485.202401'),
(9, '2251172253', 'cse@485A', 'LÊ ĐỨC', 'CHIẾN', 'KTPM3_64KTPM3', '2251172253@e.tlu.edu.vn', 'CSE485.202401'),
(10, '2251172264', 'cse@485A', 'TRẦN CÔNG', 'DANH', 'KTPM3_64KTPM3', '2251172264@e.tlu.edu.vn', 'CSE485.202401'),
(11, '2251172266', 'cse@485A', 'ĐINH QUANG', 'ĐẠT', 'KTPM3_64KTPM3', '2251172266@e.tlu.edu.vn', 'CSE485.202401'),
(12, '2251172267', 'cse@485A', 'ĐỖ VĂN', 'ĐẠT', 'KTPM3_64KTPM3', '2251172267@e.tlu.edu.vn', 'CSE485.202401'),
(13, '2151160524', 'cse@485A', 'Nguyễn Tất', 'Đạt', 'KTPM3_63HTTT1', '2151160524@e.tlu.edu.vn', 'CSE485.202401'),
(14, '2251172272', 'cse@485A', 'TRẦN TIẾN', 'ĐẠT', 'KTPM3_64KTPM3', '2251172272@e.tlu.edu.vn', 'CSE485.202401'),
(15, '2251172276', 'cse@485A', 'NGUYỄN THỊ', 'DINH', 'KTPM3_64KTPM3', '2251172276@e.tlu.edu.vn', 'CSE485.202401'),
(16, '2251172279', 'cse@485A', 'NGUYỄN THÀNH', 'ĐỒNG', 'KTPM3_64KTPM3', '2251172279@e.tlu.edu.vn', 'CSE485.202401'),
(17, '2251172281', 'cse@485A', 'BÙI MẠNH', 'ĐỨC', 'KTPM3_64KTPM3', '2251172281@e.tlu.edu.vn', 'CSE485.202401'),
(18, '185P1063488', 'cse@485A', 'Hồ Minh', 'Đức', 'KTPM3_HL-TH', '185P1063488@e.tlu.edu.vn', 'CSE485.202401'),
(19, '2251172290', 'cse@485A', 'NGUYỄN LÊ', 'ĐỨC', 'KTPM3_64KTPM3', '2251172290@e.tlu.edu.vn', 'CSE485.202401'),
(20, '2251172294', 'cse@485A', 'TRẦN VĂN', 'ĐỨC', 'KTPM3_64KTPM3', '2251172294@e.tlu.edu.vn', 'CSE485.202401'),
(21, '2251172298', 'cse@485A', 'ĐỖ TUẤN', 'DŨNG', 'KTPM3_64KTPM3', '2251172298@e.tlu.edu.vn', 'CSE485.202401'),
(22, '2251172305', 'cse@485A', 'NGUYỄN VIỆT', 'DŨNG', 'KTPM3_64KTPM3', '2251172305@e.tlu.edu.vn', 'CSE485.202401'),
(23, '2251172321', 'cse@485A', 'NGUYỄN VŨ TÙNG', 'DUY', 'KTPM3_64KTPM3', '2251172321@e.tlu.edu.vn', 'CSE485.202401'),
(24, '2151170580', 'cse@485A', 'Lê Ngân', 'Hà', 'KTPM3_63KTPM1', '2151170580@e.tlu.edu.vn', 'CSE485.202401'),
(25, '2251172325', 'cse@485A', 'TẠ NGỌC', 'HÀ', 'KTPM3_64KTPM3', '2251172325@e.tlu.edu.vn', 'CSE485.202401'),
(26, '2251172339', 'cse@485A', 'BÙI VIẾT', 'HIỂN', 'KTPM3_64KTPM3', '2251172339@e.tlu.edu.vn', 'CSE485.202401'),
(27, '2251172345', 'cse@485A', 'NGUYỄN QUANG', 'HIẾU', 'KTPM3_64KTPM3', '2251172345@e.tlu.edu.vn', 'CSE485.202401'),
(28, '2251172348', 'cse@485A', 'VŨ NGỌC', 'HIẾU', 'KTPM3_64KTPM3', '2251172348@e.tlu.edu.vn', 'CSE485.202401'),
(29, '2251172354', 'cse@485A', 'NGUYỄN SINH', 'HOÀNG', 'KTPM3_64KTPM3', '2251172354@e.tlu.edu.vn', 'CSE485.202401'),
(30, '2251172355', 'cse@485A', 'NGUYỄN TUẤN', 'HOÀNG', 'KTPM3_64KTPM3', '2251172355@e.tlu.edu.vn', 'CSE485.202401'),
(31, '2251172356', 'cse@485A', 'TRẦN VIỆT', 'HOÀNG', 'KTPM3_64KTPM3', '2251172356@e.tlu.edu.vn', 'CSE485.202401'),
(32, '2251172357', 'cse@485A', 'ĐINH VĂN', 'HỌC', 'KTPM3_64KTPM3', '2251172357@e.tlu.edu.vn', 'CSE485.202401'),
(33, '2251172367', 'cse@485A', 'VŨ ĐĂNG', 'HƯỞNG', 'KTPM3_64KTPM3', '2251172367@e.tlu.edu.vn', 'CSE485.202401'),
(34, '2251172369', 'cse@485A', 'BẠCH QUỐC', 'HUY', 'KTPM3_64KTPM3', '2251172369@e.tlu.edu.vn', 'CSE485.202401'),
(35, '2251172371', 'cse@485A', 'BÙI KHẮC', 'HUY', 'KTPM3_64KTPM3', '2251172371@e.tlu.edu.vn', 'CSE485.202401'),
(36, '2251172564', 'cse@485A', 'NGUYỄN MINH', 'VƯƠNG', 'KTPM3_64KTPM3', '2251172564@e.tlu.edu.vn', 'CSE485.202401');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

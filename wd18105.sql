-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2023 lúc 03:11 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wd18105`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name_car` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `car`
--

INSERT INTO `car` (`id`, `name_car`, `color`) VALUES
(3, 'BMW', 'Orange'),
(4, 'VinFast', 'white'),
(5, 'Mazda', 'yellow'),
(6, 'Toyota', 'red'),
(7, 'Mercedes-benz', 'green'),
(8, 'Lexus', 'brown'),
(9, 'Ford', 'blue'),
(10, 'Hyundai', 'gray'),
(11, 'Porsche', 'purple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `name_music` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `music`
--

INSERT INTO `music` (`id`, `name_music`, `author`) VALUES
(3, 'luôn yêu đời', 'Đen Vâu'),
(4, 'Diễn viên tồi', 'Đen vâu'),
(5, 'Mang tiền về cho mẹ', 'Đen Vâu'),
(6, 'Đố em biết anh đang nghĩ gì', 'Đen Vâu x JustaTee');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `tenSP` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `tenSP`, `gia`) VALUES
(28, 'sách vở', '5000'),
(29, 'bút bi', '1000'),
(30, 'chuột máy tính', '2000'),
(31, 'bàn phím', '3000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `age`) VALUES
(18, 'user2', 'User2@gmail.com', '2'),
(21, 'user3', 'User3@gmail.com', '3'),
(22, 'user4', 'User4@gmail.com', '4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `ten`, `matkhau`) VALUES
(1, 'namvu', '123456'),
(2, 'namkk', '234567'),
(3, 'kkkkkk', '1233'),
(4, 'Vũ Văn Nam', '820304'),
(5, 'koukovu', '6523'),
(6, 'aaa', '111'),
(7, 'bbb', '222'),
(8, 'kkkkkk', '820304'),
(10, 'ffff', '4444'),
(12, 'Vũ Văn Nam', '820304'),
(13, 'NamVu', '1233'),
(16, 'kkkkkk', '1233');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2017 lúc 05:14 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laptrinhphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang1`
--

CREATE TABLE `bang1` (
  `MaItem` int(11) NOT NULL,
  `TenItem` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bang1`
--

INSERT INTO `bang1` (`MaItem`, `TenItem`, `link`) VALUES
(1, 'item 1', 'banla.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang2`
--

CREATE TABLE `bang2` (
  `MaBaiviet` int(11) NOT NULL,
  `TieuDe` text NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bang2`
--

INSERT INTO `bang2` (`MaBaiviet`, `TieuDe`, `TomTat`, `NoiDung`) VALUES
(1, 'baiviet1', 'hanoi', 'amnhac');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bang1`
--
ALTER TABLE `bang1`
  ADD PRIMARY KEY (`MaItem`);

--
-- Chỉ mục cho bảng `bang2`
--
ALTER TABLE `bang2`
  ADD PRIMARY KEY (`MaBaiviet`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bang1`
--
ALTER TABLE `bang1`
  MODIFY `MaItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `bang2`
--
ALTER TABLE `bang2`
  MODIFY `MaBaiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

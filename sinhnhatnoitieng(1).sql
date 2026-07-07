-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2017 lúc 06:22 PM
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
-- Cơ sở dữ liệu: `sinhnhatnoitieng`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `people`
--

CREATE TABLE `people` (
  `rank` int(11) NOT NULL,
  `name` text CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `img` text COLLATE utf8_vietnamese_ci NOT NULL,
  `age` text COLLATE utf8_vietnamese_ci NOT NULL,
  `career` text COLLATE utf8_vietnamese_ci NOT NULL,
  `link` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `people`
--

INSERT INTO `people` (`rank`, `name`, `img`, `age`, `career`, `link`) VALUES
(1, 'Sơn Tùng M-TP', '/thumbnails/son-tung-m-tp-medium.jpg', ', 23', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/son-tung-m-tp.html'),
(2, 'Jvevermind', '/thumbnails/tran-viet-medium.jpg', ', 25', 'Ngôi Sao YouTube', 'https://www.famousbirthdays.com/people/viet-tran.html'),
(3, 'Mỹ Tâm', '/thumbnails/tam-my-medium.jpg', ', 36', 'Ca Sĩ Nhạc Pop', ''),
(4, 'Khởi My', '/thumbnails/my-khoi-medium.jpg', ', 27', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/khoi-my.html'),
(5, 'Linh Ka', '/thumbnails/ka-linh-medium.jpg', ', 15', 'Ngôi Sao Instagram', 'https://www.famousbirthdays.com/people/linh-ka.html'),
(6, 'Hồ Ngọc Hà', '/thumbnails/ngoc-ha-ho-medium.jpg', ', 32', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/ho-ngoc-ha.html'),
(7, 'Big Daddy', '/thumbnails/vu-tat-tran-medium.jpg', ', 26', 'Ca Sĩ Nhạc Rap', 'https://www.famousbirthdays.com/people/big-daddy.html'),
(8, 'Trấn Thành', '/thumbnails/thanh-tran-medium.jpg', ', 30', 'Dẫn Chương Trình TV', 'https://www.famousbirthdays.com/people/tran-thanh.html'),
(9, 'Đông Nhi', '/thumbnails/nhi-dong-medium.jpg', ', 29', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/dong-nhi.html'),
(10, 'Hoài Linh', '/thumbnails/linh-hoai-medium.jpg', ', 47', 'Diễn Viên Hài', 'https://www.famousbirthdays.com/people/hoai-linh.html'),
(11, 'Bích Phương', '/thumbnails/phuong-bich-medium.jpg', ', 28', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/bich-phuong.html'),
(12, 'Mỹ Linh', '/thumbnails/linh-my-medium.jpg', ', 42', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/my-linh.html'),
(13, 'Minh Hằng', '/thumbnails/hang-minh-medium.jpg', ', 30', 'Ca Sĩ Nhạc Pop', ''),
(14, 'Hari won', '/thumbnails/won-hari-medium.jpg', ', 32', 'Ca Sĩ Nhạc Pop', ''),
(15, 'Ngọc Trinh', '/thumbnails/trinh-ngoc-medium.jpg', ', 28', 'Ca Sĩ Nhạc Pop', ''),
(16, 'Tăng Thanh Hà', '/thumbnails/ha-thanh-tang-medium.jpg', ', 31', 'Ca Sĩ Nhạc Pop', ''),
(17, 'Thùy Chi', '/thumbnails/chi-thuy-medium.jpg', ', 27', 'Ca Sĩ Nhạc Pop', ''),
(18, 'Thuỷ Tiên', '/thumbnails/tien-thuy-medium.jpg', ', 32', 'Ca Sĩ Nhạc Pop', ''),
(19, 'Chipu', '/thumbnails/chi-pu-medium.jpg', ',24', 'Diễn Viên Nữ Phim Ngắn', ''),
(20, 'Đan Trường', '/thumbnails/truong-dan-medium.jpg', ', 40', 'Ca Sĩ Nhạc Pop', ''),
(21, 'Bảo Thy', '/thumbnails/thy-bao-medium.jpg', ', 29', 'Ca Sĩ Nhạc Pop', ''),
(22, 'Phương Trinh', '/thumbnails/trinh-phuong-medium.jpg', ', 22', 'Ca Sĩ Nhạc Pop', ''),
(23, 'Thanh Hằng', '/thumbnails/hang-thanh-medium.jpg', ', 34', 'Người Mẫu', ''),
(24, 'Việt Hương', '/thumbnails/huong-viet-medium.jpg', ', 41', 'Diễn Viên Hài', ''),
(25, 'Ngân Khánh', '/thumbnails/khanh-ngan-medium.jpg', ', 32', 'Diễn Viên Nữ Phim Dài Tập', ''),
(26, 'Lương Minh Trang', '/thumbnails/trang-minh-luong.jpg', ', 22', 'Ca Sĩ Nhạc Pop', ''),
(27, 'Nguyễn Tấn Dũng', '/thumbnails/dung-nguyen-medium.jpg', ', 68', 'Thủ Tướng VN', 'https://www.famousbirthdays.com/people/nguyen-dung.html'),
(28, 'Phạm Phi Nhung', '/thumbnails/nhung-phi-pham-medium.jpg', ', 45', 'Ca Sĩ Hải Ngoại', ''),
(29, '	Noo Phước Thịnh', '/thumbnails/thinh-noo-medium.jpg', ', 28', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/noo-thinh.html'),
(30, 'Đàm Vĩnh Hưng', '/thumbnails/hung-dam-medium.jpg', ', 46', 'Ca Sĩ Nhạc Pop', 'https://www.famousbirthdays.com/people/dam-hung.html'),
(31, 'Dumbo', '/thumbnails/nguyen-matt-medium.jpg', ', 28', 'Vũ Công', 'https://www.famousbirthdays.com/people/matt-nguyen.html'),
(32, 'Tuấn Hưng', '/thumbnails/hung-tuan-medium.jpg', ', 39', 'Ca Sĩ Nhạc Pop', ''),
(33, 'Khắc Việt', '/thumbnails/viet-khac-medium.jpg', ', 30', 'Ca Sĩ Nhạc Pop', ''),
(34, 'Hồ Quang Hiếu', '/thumbnails/hieu-quang-ho-medium.jpg', ', 31', 'Ca Sĩ Nhạc Pop', ''),
(35, 'Công Phượng', '/thumbnails/phuong-cong-medium.jpg', ', 22', 'Cầu Thủ Bóng Đá', ''),
(36, 'Lại Văn Sâm', '/thumbnails/lai-van-sam.jpg', ', 60', 'Dẫn Chương Trình TV', ''),
(37, 'Hồng Sơn', '/thumbnails/hong-son-medium.jpg', ', 47', 'Cầu Thủ Bóng Đá', ''),
(38, 'Nhã Phương', '/thumbnails/nha-phuong.jpg', '', 'Diễn Viên Phim Dài Tập', ''),
(39, 'Thanh Bùi', '/thumbnails/thanh-bui.jpg', '', 'Ca Sĩ Nhạc Pop', ''),
(40, 'Chi Dân', '/thumbnails/chi-dan.jpg', '', 'Ca Sĩ Nhạc Pop', ''),
(41, 'Công Vinh', '/thumbnails/cong-vinh.jpg', '', 'Cầu Thủ Bóng Đá', ''),
(42, 'Hồng Đăng', '/thumbnails/hong-dang.jpg', '', 'Ca Sĩ Nhạc Pop', ''),
(43, 'Justatee', '/thumbnails/justatee.jpg', '', 'Ca Sĩ Nhạc Pop', ''),
(44, 'Emily', '/thumbnails/emily-huong-ly.jpg', '', 'Ca Sĩ Nhạc Pop', ''),
(45, 'Lil Knight', '/thumbnails/lil-knight.jpg', '', 'Ca Sĩ Nhạc Pop', ''),
(46, 'Lê Hoàng', '/thumbnails/le-hoang.jpg', ', 36', 'Ca Sĩ Nhạc Pop', ''),
(47, 'Ngô Tiến Dũng', '/thumbnails/ngo-tien-dung.jpg', ', 33', 'Ca Sĩ Nhạc Pop', ''),
(48, 'Hải Băng', '/thumbnails/hai-bang.jpg', ', 28', 'Ca Sĩ Nhạc Pop', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`rank`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `people`
--
ALTER TABLE `people`
  MODIFY `rank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

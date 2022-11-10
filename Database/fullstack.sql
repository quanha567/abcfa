-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2022 lúc 10:44 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fullstack`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `student_id` int(10) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cources`
--

CREATE TABLE `cources` (
  `id` int(10) NOT NULL,
  `cate_id` int(10) NOT NULL,
  `cource_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fee` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lession_count` int(10) NOT NULL,
  `total_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cources`
--

INSERT INTO `cources` (`id`, `cate_id`, `cource_name`, `img`, `description`, `result`, `fee`, `lession_count`, `total_time`, `access`, `content`, `video`, `level`, `time_update`) VALUES
(0, 1, 'Kiến Thức Nhập Môn IT', '1.png', 'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.', 'Các kiến thức cơ bản, nền móng của ngành IT\r\nCác mô hình, kiến trúc cơ bản khi triển khai ứng dụng\r\nCác khái niệm, thuật ngữ cốt lõi khi triển khai ứng dụng\r\nHiểu hơn về cách internet và máy vi tính hoạt động', 'Miễn phí', 12, '03 giờ 26 phút', 'Học mọi lúc, mọi nơi', 'Nội dung khóa học', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M62l1xA5Eu8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Trình độ cơ bản', '2022-06-14 01:19:24'),
(1, 1, 'HTML, CSS từ Zero đến Hero', '2.png', 'Trong khóa này chúng ta sẽ cùng nhau xây dựng giao diện 2 trang web là The Band & Shopee.', 'Biết cách xây dựng giao diện web với HTML, CSS\r\nBiết cách phân tích giao diện website\r\nBiết cách đặt tên class CSS theo chuẩn BEM\r\nBiết cách làm giao diện web responsive\r\nLàm chủ Flexbox khi dựng bố cục website\r\nSở hữu 2 giao diện web khi học xong khóa học\r\nBiết cách tự tạo động lực cho bản thân\r\nBiết cách tự học những kiến thức mới\r\nHọc được cách làm UI chỉn chu, kỹ tính\r\nNhận chứng chỉ khóa học do F8 cấp', 'Miễn phí', 166, '28 giờ 07 phút', 'Học mọi lúc, mọi nơi', 'Nội dung khóa học', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/R6plN3FvzFY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Trình độ cơ bản', '2022-06-14 01:23:27'),
(2, 2, 'Node & ExpressJS', '3.png', 'Học Back-end với Node & ExpressJS framework, hiểu các khái niệm khi làm Back-end và xây dựng RESTful API cho trang web.', 'Nắm chắc lý thuyết chung trong việc xây dựng web\r\nBiết cách làm việc với Mongoose, MongoDB trong NodeJS\r\nXây dựng web với Express bằng kiến thức thực tế\r\nBiết cách xây dựng API theo chuẩn RESTful API\r\nNắm chắc lý thuyết về API và RESTful API\r\nĐược chia sẻ lại kinh nghiệm làm việc thực tế\r\nNắm chắc khái niệm về giao thức HTTP\r\nHiểu rõ tư tưởng và cách hoạt động của mô hình MVC\r\nHọc được cách tổ chức code trong thực tế\r\nBiết cách deploy (triển khai) website lên internet', 'Miễn phí', 38, '12 giờ 10 phút', 'Học mọi lúc, mọi nơi', 'Nội dung khóa học', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/z2f7RHgvddc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Trình độ cơ bản', '2022-06-14 01:31:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cources_categories`
--

CREATE TABLE `cources_categories` (
  `cate_id` int(10) NOT NULL,
  `cate_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cources_categories`
--

INSERT INTO `cources_categories` (`cate_id`, `cate_name`) VALUES
(1, 'Front-End'),
(2, 'Back-End');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `follow`
--

CREATE TABLE `follow` (
  `student_id` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `student_id` int(10) NOT NULL,
  `student_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `avata` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`student_id`);

--
-- Chỉ mục cho bảng `cources`
--
ALTER TABLE `cources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `cources_categories`
--
ALTER TABLE `cources_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`student_id`,`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cources_categories`
--
ALTER TABLE `cources_categories`
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cources`
--
ALTER TABLE `cources`
  ADD CONSTRAINT `cources_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `cources_categories` (`cate_id`);

--
-- Các ràng buộc cho bảng `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`id`) REFERENCES `cources` (`id`);

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `accounts` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

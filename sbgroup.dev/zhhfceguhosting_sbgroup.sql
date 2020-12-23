-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 22, 2020 lúc 02:22 PM
-- Phiên bản máy phục vụ: 10.3.27-MariaDB-log-cll-lve
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `zhhfceguhosting_sbgroup`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `links` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Đang đổ dữ liệu cho bảng `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle`, `description`, `links`) VALUES
(0, 'dasdfadsfsd', 'dasdfadsfsd', 'dasdfadsfsd', 'dasdfadsfsd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bufflike`
--

CREATE TABLE `bufflike` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `soluong` text NOT NULL,
  `tinhtrang` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bufflike`
--

INSERT INTO `bufflike` (`id`, `uid`, `soluong`, `tinhtrang`, `username`) VALUES
(1, '', '', '0', 'yancoder'),
(2, '', '', '0', 'yancoder'),
(3, '', '', '0', 'yancoder'),
(4, 'fadsfa', '100', '0', 'yancoder'),
(5, '123a', '100', '0', 'yancoder'),
(6, 'fasdasdb', '100', '0', 'yanne'),
(7, 'fadsfdsavs', '100', '0', 'yanne'),
(8, 'dfsgdffg', '100', '0', 'yanne');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ten` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `VND` varchar(50) CHARACTER SET utf8 NOT NULL,
  `money` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phanquyen` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `register`
--

INSERT INTO `register` (`id`, `username`, `ten`, `email`, `password`, `VND`, `money`, `phanquyen`) VALUES
(8, 'thanhduc98', '', 'truongthanhduc270998@gmail.com', 'thanhduc98', '', '0', 'Quản Trị Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `meta` text NOT NULL,
  `keyword` text NOT NULL,
  `tieude` text NOT NULL,
  `thongbao` text NOT NULL,
  `tinhtrang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `meta`, `keyword`, `tieude`, `thongbao`, `tinhtrang`) VALUES
(11, '', '', 'KHUYẾN MÃI 20% CHO MEMBER NẠP THẺ', 'Liên Hệ Admin Qua Số Điện Thoại : 0866699365', ''),
(14, '', '', '30/4', 'KHUYẾN MÃI 20% THẺ NẠP', ''),
(15, '', '', 'DEVELOP BY SBGROUP', 'DEVELOP BY SBGROUP', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vipbot`
--

CREATE TABLE `vipbot` (
  `id` int(11) NOT NULL,
  `tokens` text NOT NULL,
  `ngaythue` text NOT NULL,
  `camxuc` text NOT NULL,
  `username` text NOT NULL,
  `tinhtrang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vipbot`
--

INSERT INTO `vipbot` (`id`, `tokens`, `ngaythue`, `camxuc`, `username`, `tinhtrang`) VALUES
(1, 'vipbot', '30', 'LIKE', 'yancoder', '0'),
(2, 'afsdfas', '30', 'LOVE', 'yancoder', '0'),
(3, 'fasdfasdf', '30', 'LOVE', 'yancoder', '0'),
(4, 'afsd', '30', 'LOVE', 'yancoder', '0'),
(5, 'afdsfasdf', '30', 'LOVE', 'yancoder', '0'),
(6, 'asdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjjasdfkjjjjjjjjj', '30', 'LOVE', 'yancoder', '0'),
(7, 'hfnbfbs', '30', 'LOVE', 'yanne', '0'),
(8, 'sgfdgsbf', '30', '', 'yanne', '0'),
(9, 'fshfdgdfs', '30', 'WOW', 'yanne', '0'),
(10, 'sdgdsf', '30', 'WOW', 'yanne', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vipcmt`
--

CREATE TABLE `vipcmt` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `soluong` text NOT NULL,
  `ngaythue` text NOT NULL,
  `time` text NOT NULL,
  `noidung` text NOT NULL,
  `username` text NOT NULL,
  `tinhtrang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vipcmt`
--

INSERT INTO `vipcmt` (`id`, `uid`, `soluong`, `ngaythue`, `time`, `noidung`, `username`, `tinhtrang`) VALUES
(1, 'asdfas', '300', '1', '20', 'afsdf', 'yancoder', '0'),
(2, 'fasdfasdf', '500', '1', '20', 'fasd', 'yancoder', '0'),
(3, 'fadsfasd', '300', '1', '20', 'afsdfasd', 'yancoder', '0'),
(4, 'fsadfsad', '300', '1', '20', 'asdfasdf', 'yancoder', '0'),
(5, 'fasdf', '300', '1', '20', 'sdfsadfasd', 'yancoder', '0'),
(6, 'sdfhfn', '300', '1', '20', 'hsfhhgfh', 'yanne', '0'),
(7, 'hgfnfdgn', '500', '1', '20', 'hdgfnmgm', 'yanne', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `viplike`
--

CREATE TABLE `viplike` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `soluong` text NOT NULL,
  `ngaythue` text NOT NULL,
  `time` text NOT NULL,
  `camxuc` text NOT NULL,
  `username` text NOT NULL,
  `tinhtrang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Đang đổ dữ liệu cho bảng `viplike`
--

INSERT INTO `viplike` (`id`, `uid`, `soluong`, `ngaythue`, `time`, `camxuc`, `username`, `tinhtrang`) VALUES
(1, '', '', '1', '', 'LIKE', '', ''),
(2, '', '', '1', '', 'LIKE', '', ''),
(3, '213', '', '1', '', 'LIKE', '', ''),
(4, '123', '', '1', '', 'LIKE', '', ''),
(5, 'fadsfsaf', '50', '1', '', 'WOW', '', ''),
(6, 'adsfasfd', '300', '1', '', 'LIKE', '', '0'),
(7, 'dasfadsfd', '500', '1', '', 'LIKE', '', '0'),
(8, '42423', '300', '1', '', 'WOW', '', '0'),
(9, 'fasfasf', '200', '1', '', 'WOW', '', '0'),
(10, 'fsdfaadsfasf', '500', '1', '', 'LIKE', '', '0'),
(11, '12312', '300', '1', '20', 'LIKE', '', '0'),
(12, 'fsdfasd', '200', '1', '20', 'WOW', '', '0'),
(13, 'sdafsfas', '500', '1', '20', 'WOW', '', '0'),
(14, 'dsafasdfas', '300', '1', '20', 'LIKE', '', '0'),
(15, 'asdfsadf', '300', '1', '20', 'LIKE', 'yancoder', '0'),
(16, 'fs', '200', '1', '20', 'LIKE', '', '0'),
(17, 'asdfasdfsa', '300', '1', '20', 'LIKE', '', '0'),
(18, 'afsdfasd', '200', '1', '20', 'LIKE', 'yancoder', '0'),
(19, 'fsadfasd', '300', '1', '20', 'LIKE', 'yancoder', '0'),
(20, '4', '500', '1', '20', 'HAHA', 'yancoder', '0'),
(21, '123a', '50', '1', '10', 'LIKE', 'yancoder', '0'),
(22, '4', '500', '1', '20', 'WOW', 'yanne', '0'),
(23, 'fsdf', '300', '1', '20', 'LIKE', 'yanne', '0'),
(24, 'fsdvd', '500', '1', '20', 'HAHA', 'yanne', '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bufflike`
--
ALTER TABLE `bufflike`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vipbot`
--
ALTER TABLE `vipbot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vipcmt`
--
ALTER TABLE `vipcmt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `viplike`
--
ALTER TABLE `viplike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bufflike`
--
ALTER TABLE `bufflike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `vipbot`
--
ALTER TABLE `vipbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `vipcmt`
--
ALTER TABLE `vipcmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `viplike`
--
ALTER TABLE `viplike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 07, 2023 lúc 10:05 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `id` int NOT NULL,
  `noidung` text NOT NULL,
  `id_user` int NOT NULL,
  `id_pro` int NOT NULL,
  `ten` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `ngaybinhluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_binhluan`
--

INSERT INTO `tb_binhluan` (`id`, `noidung`, `id_user`, `id_pro`, `ten`, `email`, `ngaybinhluan`) VALUES
(16, 'asgasgasgasg', 5, 39, 'leduylinh123', 'linhduyle6a1@gmail.com', '05:12:04am 27/11/2023'),
(17, 'sản phẩm tuyệt vời quá, gút chóp\r\n', 5, 40, 'leduylinh123', 'linhduyle6a1@gmail.com', '09:51:42am 30/11/2023'),
(19, 'EM LINH ĐẸP ZAI', 5, 39, 'leduylinh123', 'linhduyle424ggh2fhsh6a1@gmail.com', '05:02:52pm 01/12/2023'),
(20, 'san pham tot lam', 22, 51, 'leduylinh123', 'linhldph35320@fpt.edu.vn', '09:46:06am 05/12/2023'),
(21, 'san pham tuyet voi', 22, 51, 'leduylinh123', 'linhldph35320@fpt.edu.vn', '09:46:22am 05/12/2023'),
(22, 'asgasgsagsag', 22, 51, 'leduylinh123', 'linhldph35320@fpt.edu.vn', '10:00:25am 05/12/2023'),
(23, '14124125', 22, 51, 'leduylinh123', 'linhldph35320@fpt.edu.vn', '10:10:13am 05/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id` int NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id`, `tendanhmuc`, `img`) VALUES
(8, 'Vivo', '637987654083012579_vivo-v25e-vang-dd.jpg'),
(9, 'Xiaomi', 'xiaomi-redmi-12-bac-thumb-(1)-600x600.jpg'),
(10, 'Oppo', 'dien-thoai-oppo-moi-nhat-5-2048x2048.jpg'),
(14, 'Iphone', 'iphone-15-pro-blue-thumbnew-600x600.jpg'),
(15, 'Realme', 'realme-c30s-3gb-64gb-blue-thumb-600x600.jpg'),
(16, 'Nokia', 'nokia-215-xanh-ngoc-new-600x600-600x600.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id` int NOT NULL,
  `iduser` int NOT NULL DEFAULT '0',
  `ho` varchar(25) NOT NULL,
  `ten` varchar(25) NOT NULL,
  `tendaydu` varchar(200) NOT NULL,
  `tinh_thanhpho` varchar(100) NOT NULL,
  `quan_huyen` varchar(100) NOT NULL,
  `phuong_xa` varchar(100) NOT NULL,
  `sonha_tenduong` varchar(500) NOT NULL,
  `sodienthoai` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ghichu` text NOT NULL,
  `phuongthucthanhtoan` tinyint NOT NULL COMMENT '1. thanh toán khi nhận hàng\r\n2. thanh toán online',
  `tongtien` int NOT NULL DEFAULT '0',
  `tinhtrangdonhang` tinyint NOT NULL DEFAULT '0' COMMENT '1. Chờ xác nhận\r\n2. Đã xác nhận',
  `ngaydathang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_donhang`
--

INSERT INTO `tb_donhang` (`id`, `iduser`, `ho`, `ten`, `tendaydu`, `tinh_thanhpho`, `quan_huyen`, `phuong_xa`, `sonha_tenduong`, `sodienthoai`, `email`, `ghichu`, `phuongthucthanhtoan`, `tongtien`, `tinhtrangdonhang`, `ngaydathang`) VALUES
(95, 22, '1', '1', '1', '1', '1', '1', '1', '1', '1@gmail.com', '', 1, 3000000, 2, '01:55:41am 06/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hoadon`
--

CREATE TABLE `tb_hoadon` (
  `id` int NOT NULL,
  `iduser` int NOT NULL DEFAULT '0',
  `idpro` int NOT NULL,
  `ten` varchar(500) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `gia` int NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hoadon`
--

INSERT INTO `tb_hoadon` (`id`, `iduser`, `idpro`, `ten`, `img`, `gia`, `soluong`, `thanhtien`, `idbill`) VALUES
(65, 22, 47, 'Điện thoại OPPO Find N3 Flip 5G Hồng ', 'oppo-find-n3-flip-pink-thumb-600x600.jpeg', 22000000, 2, 22000000, 54),
(66, 22, 47, 'Điện thoại OPPO Find N3 Flip 5G Hồng ', 'oppo-find-n3-flip-pink-thumb-600x600.jpeg', 22000000, 2, 22000000, 55),
(67, 22, 47, 'Điện thoại OPPO Find N3 Flip 5G Hồng ', 'oppo-find-n3-flip-pink-thumb-600x600.jpeg', 22000000, 1, 22000000, 57),
(68, 22, 48, 'Điện thoại OPPO Find N3 5G ', 'oppo-find-n3-vang-dong-thumb-600x600.jpg', 44000000, 1, 44000000, 69),
(69, 22, 47, 'Điện thoại OPPO Find N3 Flip 5G Hồng ', 'oppo-find-n3-flip-pink-thumb-600x600.jpeg', 22000000, 1, 22000000, 75),
(70, 22, 48, 'Điện thoại OPPO Find N3 5G ', 'oppo-find-n3-vang-dong-thumb-600x600.jpg', 44000000, 1, 44000000, 76),
(71, 22, 47, 'Điện thoại OPPO Find N3 Flip 5G Hồng ', 'oppo-find-n3-flip-pink-thumb-600x600.jpeg', 22000000, 1, 22000000, 77),
(72, 22, 51, 'Điện thoại vivo V27e ', 'vivo-v27e-tim-thumb-600x600.jpg', 7990000, 2, 7990000, 77),
(73, 22, 51, 'Điện thoại vivo V27e ', 'vivo-v27e-tim-thumb-600x600.jpg', 7990000, 1, 7990000, 83),
(82, 22, 46, 'Samsung Galaxy A05s 6GB ', 'samsung-galaxy-a05s-sliver-thumb-600x600.jpeg', 3000000, 1, 3000000, 95);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id` int NOT NULL,
  `tensanpham` varchar(500) NOT NULL,
  `giagoc` float NOT NULL,
  `giagiam` float NOT NULL,
  `anhdaidiensp` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mota` text NOT NULL,
  `soluong` int NOT NULL,
  `lk_danhmuc` int NOT NULL,
  `luotxem` int NOT NULL DEFAULT '0',
  `soluongban` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id`, `tensanpham`, `giagoc`, `giagiam`, `anhdaidiensp`, `mota`, `soluong`, `lk_danhmuc`, `luotxem`, `soluongban`) VALUES
(46, 'Samsung Galaxy A05s 6GB ', 3490000, 3000000, 'samsung-galaxy-a05s-sliver-thumb-600x600.jpeg', 'Samsung Galaxy A05s 6GB được cho ra mắt tại thị trường Việt Nam vào hồi tháng 09/2023. Máy được chú ý nhờ sở hữu mức giá bán hợp lý, cấu hình ổn với chip Snapdragon 680 8 nhân và hệ thống camera chất lượng đến 50 MP.', 2, 10, 3, 4),
(47, 'Điện thoại OPPO Find N3 Flip 5G Hồng ', 22990000, 22000000, 'oppo-find-n3-flip-pink-thumb-600x600.jpeg', 'OPPO Find N3 Flip 5G Hồng được OPPO cho ra mắt chính thức tại thị trường Việt Nam vào tháng 10/2023. Sản phẩm được hãng đầu tư mạnh mẽ về camera với độ phân giải lên đến 50 MP, cấu hình sử dụng chip Dimensity 9200 5G và thiết kế được thay đổi với bản lề gập mở tốt hơn cùng màu hồng sang trọng và nữ tính.', 4, 10, 2, 8),
(48, 'Điện thoại OPPO Find N3 5G ', 44990000, 44000000, 'oppo-find-n3-vang-dong-thumb-600x600.jpg', 'OPPO chính thức giới thiệu sản phẩm OPPO Find N3 5G, một chiếc điện thoại thông minh với thiết kế gập ngang hoàn toàn hiện đại và đẳng cấp, nổi bật với camera và hiệu năng đứng đầu. Đây là một bước đột phá của OPPO trong việc kết hợp sự tiện ích và thẩm mỹ tối ưu, đem lại trải nghiệm độc đáo cho người dùng.', 4, 10, 0, 2),
(49, 'Điện thoại vivo V29e 5G 12GB', 9990000, 9690000, 'vivo-v29e-black-avt-600x600.jpg', 'vivo V29e 5G là một phiên bản điện thoại di động đáng chú ý trong phân khúc tầm trung, đặc biệt với sự kết hợp tinh tế giữa thiết kế và hiệu suất. Điều làm nổi bật chiếc điện thoại này chính là camera chất lượng, thiết kế sang trọng và viên pin lớn kèm sạc nhanh. ', 2, 8, 0, 0),
(50, 'Điện thoại vivo Y36 128GB', 5990000, 5690000, 'vivo-y36-xanh-thumbnew-600x600.jpg', 'vivo Y36 128GB là một trong những sản phẩm điện thoại thông minh nổi bật và đáng chú ý của thương hiệu vivo. Với những tính năng và thông số kỹ thuật vượt trội, vivo Y36 hứa hẹn mang đến cho người dùng trải nghiệm di động đỉnh cao.', 3, 8, 0, 0),
(51, 'Điện thoại vivo V27e ', 8990000, 7990000, 'vivo-v27e-tim-thumb-600x600.jpg', 'vivo V27e một trong những chiếc điện thoại tầm trung nổi bật của vivo trong năm 2023. Với thiết kế độc đáo và khả năng chụp ảnh - quay phim ấn tượng, vì thế máy đã mang lại cho vivo nhiều niềm tự hào khi ra mắt tại thị trường Việt Nam, hứa hẹn mang đến trải nghiệm tuyệt vời đến với người dùng.', 4, 8, 74, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham_img`
--

CREATE TABLE `tb_sanpham_img` (
  `idimg` int NOT NULL,
  `id_sanpham` int NOT NULL,
  `anhsanpham` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham_img`
--

INSERT INTO `tb_sanpham_img` (`idimg`, `id_sanpham`, `anhsanpham`) VALUES
(71, 15, 'iphone-15-pro-slider--10--1020x570.jpg'),
(72, 15, 'vi-vn-iphone-15-pro-slider--(9).jpg'),
(73, 15, 'vi-vn-iphone-15-pro-slider--(8).jpg'),
(74, 15, 'vi-vn-iphone-15-pro-slider--(7).jpg'),
(75, 15, 'vi-vn-iphone-15-pro-slider--(4).jpg'),
(76, 15, 'vi-vn-iphone-15-pro-slider--(6).jpg'),
(77, 15, 'vi-vn-iphone-15-pro-slider--(5).jpg'),
(78, 15, 'vi-vn-iphone-15-pro-slider--(3).jpg'),
(79, 15, 'vi-vn-iphone-15-pro-slider--(2).jpg'),
(80, 15, 'vi-vn-iphone-15-pro-slider--1-1020x570.jpg'),
(81, 15, 'iphone-15-pro-thumbyt-1020x570.jpg'),
(82, 16, '1-800x449-1.jpeg'),
(83, 16, '3-800x449-1.jpeg'),
(84, 16, '2-800x449-1.jpeg'),
(85, 16, '5-800x449.jpeg'),
(155, 32, 'vi-vn-hp-15s-fq5229tu-i3-8u237pa-slider-6.jpg'),
(156, 32, 'vi-vn-hp-15s-fq5229tu-i3-8u237pa-slider-5.jpg'),
(157, 32, 'vi-vn-hp-15s-fq5229tu-i3-8u237pa-slider-4.jpg'),
(158, 32, 'vi-vn-hp-15s-fq5229tu-i3-8u237pa-slider-3.jpg'),
(159, 32, 'vi-vn-hp-15s-fq5229tu-i3-8u237pa-slider-2.jpg'),
(160, 32, 'vi-vn-hp-15s-fq5229tu-i3-8u237pa-slider-abc-1-1020x570-1.jpg'),
(175, 37, 'vi-vn-asus-tuf-gaming-f15-fx506hf-i5-hn014w--(1).jpg'),
(176, 37, 'vi-vn-asus-tuf-gaming-f15-fx506hf-i5-hn014w--(6).jpg'),
(177, 37, 'vi-vn-asus-tuf-gaming-f15-fx506hf-i5-hn014w--(5).jpg'),
(178, 37, 'vi-vn-asus-tuf-gaming-f15-fx506hf-i5-hn014w--(4).jpg'),
(179, 37, 'vi-vn-asus-tuf-gaming-f15-fx506hf-i5-hn014w--(3).jpg'),
(180, 37, 'vi-vn-asus-tuf-gaming-f15-fx506hf-i5-hn014w--(2).jpg'),
(183, 38, 'vi-vn-iphone-15-pro-slider--(8).jpg'),
(184, 38, 'vi-vn-iphone-15-pro-slider--(7).jpg'),
(185, 38, 'vi-vn-iphone-15-pro-slider--(4).jpg'),
(186, 38, 'vi-vn-iphone-15-pro-slider--(6).jpg'),
(187, 38, 'vi-vn-iphone-15-pro-slider--(5).jpg'),
(188, 38, 'vi-vn-iphone-15-pro-slider--(3).jpg'),
(189, 38, 'vi-vn-iphone-15-pro-slider--(2).jpg'),
(190, 38, 'vi-vn-iphone-15-pro-slider--1-1020x570.jpg'),
(191, 38, 'iphone-15-pro-thumbyt-1020x570.jpg'),
(238, 46, '9-800x449-1.jpeg'),
(239, 46, '8-800x533-1.jpeg'),
(240, 46, '7-800x449.jpeg'),
(241, 46, '6-800x449.jpeg'),
(242, 46, '5-800x533.jpeg'),
(243, 46, '4-800x449-2.jpeg'),
(244, 46, '3-800x449-2.jpeg'),
(245, 46, '2-800x449-2.jpeg'),
(246, 46, '1-800x449-2.jpeg'),
(247, 47, 'oppo-find-n3-flip-hong638357727101122892.jpg'),
(248, 47, 'oppo-find-n3-flip-hong638357727097252877.jpg'),
(249, 47, 'oppo-find-n3-flip-hong638357727100052925.jpg'),
(250, 47, 'oppo-find-n3-flip-hong638357727098912935.jpg'),
(251, 47, 'oppo-find-n3-flip-hong638357727103722921.jpg'),
(252, 47, 'oppo-find-n3-flip-hong638357727102482934.jpg'),
(253, 47, 'oppo-find-n3-flip-hong638357727104862948.jpg'),
(254, 47, 'oppo-find-n3-flip-hong638357727095402878.jpg'),
(255, 48, 'vi-vn-oppo-find-n3-slider--(8).jpg'),
(256, 48, 'vi-vn-oppo-find-n3-slider--(5).jpg'),
(257, 48, 'vi-vn-oppo-find-n3-slider--(4).jpg'),
(258, 48, 'vi-vn-oppo-find-n3-slider--(3).jpg'),
(259, 48, 'vi-vn-oppo-find-n3-slider--(2).jpg'),
(260, 48, 'vi-vn-oppo-find-n3-slider--(6).jpg'),
(261, 48, 'vi-vn-oppo-find-n3-slider--(7).jpg'),
(262, 48, 'vi-vn-oppo-find-n3-slider--(1).jpg'),
(263, 49, 'vivo-v29e-5g638334187374225084.jpg'),
(264, 49, 'vivo-v29e-5g638334187373415071.jpg'),
(265, 49, 'vivo-v29e-5g638334187372605037.jpg'),
(266, 49, 'vivo-v29e-5g638334187371775090.jpg'),
(267, 49, 'vivo-v29e-5g638334187370795034.jpg'),
(268, 49, 'vivo-v29e-12gb-slider-7-1020x570.jpg'),
(269, 49, 'vivo-v29e-slider-12gb-99-1020x570.jpg'),
(270, 50, 'vivo-y36-128gb638256203266305570.jpeg'),
(271, 50, 'vivo-y36-128gb638256203263525543.jpeg'),
(272, 50, 'vivo-y36-128gb638256203257735591.jpeg'),
(273, 50, 'vivo-y36-128gb638256203254045523.jpeg'),
(274, 50, 'vivo-y36-128gb638256203250935509.jpeg'),
(275, 50, 'vivo-y36-128gb-slider-1-1020x570.jpg'),
(276, 51, 'vivo-v27e-slider-6-1020x570.jpg'),
(277, 51, 'vi-vn-vivo-v27e-slider--(5).jpg'),
(278, 51, 'vi-vn-vivo-v27e-slider--(4).jpg'),
(279, 51, 'vi-vn-vivo-v27e-slider--(3).jpg'),
(280, 51, 'vi-vn-vivo-v27e-slider--(2).jpg'),
(281, 51, 'vi-vn-vivo-v27e-slider--(6).jpg'),
(282, 51, 'vi-vn-vivo-v27e-slider--(8).jpg'),
(283, 51, 'vivo-v27e-tongquan-1020x570.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci DEFAULT NULL,
  `user` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `pass` varchar(201) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `role`) VALUES
(2, 'Lê Linh', 'Số nhà 38. Khu 4. Phường Đông Triều. Thị xã Đông Triều. Tỉnh Quảng Ninh', 'linhldph35320@fpt.edu.vn', 'admin', '123', 1),
(22, NULL, NULL, 'linhldph35320@fpt.edu.vn', 'leduylinh123', 'linhduyle123', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_hoadon_sanpham` (`idpro`),
  ADD KEY `lk_hoadon_donhang` (`idbill`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`lk_danhmuc`);

--
-- Chỉ mục cho bảng `tb_sanpham_img`
--
ALTER TABLE `tb_sanpham_img`
  ADD PRIMARY KEY (`idimg`),
  ADD KEY `lk_img_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `tb_sanpham_img`
--
ALTER TABLE `tb_sanpham_img`
  MODIFY `idimg` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`lk_danhmuc`) REFERENCES `tb_danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

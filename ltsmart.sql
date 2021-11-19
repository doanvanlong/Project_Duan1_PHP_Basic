-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2021 lúc 02:37 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltsmart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id_bai_viet` int(11) NOT NULL,
  `id_dm_news` int(11) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan_news`
--

CREATE TABLE `binh_luan_news` (
  `id_bl_news` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_bai_viet` int(11) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan_pro`
--

CREATE TABLE `binh_luan_pro` (
  `id_bl_pro` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `rate` int(1) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinh_phone`
--

CREATE TABLE `cau_hinh_phone` (
  `id_ch_phone` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `man_hinh` text COLLATE utf8_unicode_ci NOT NULL,
  `camera_sau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `camera_selfie` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ram` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `cpu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dung_luong_pin` int(11) NOT NULL,
  `the_sim` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `he_dieu_hanh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_xu` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hinh_phone`
--

INSERT INTO `cau_hinh_phone` (`id_ch_phone`, `id_sp`, `man_hinh`, `camera_sau`, `camera_selfie`, `ram`, `rom`, `cpu`, `dung_luong_pin`, `the_sim`, `he_dieu_hanh`, `xuat_xu`) VALUES
(16, 66, 'Ok', 'Ok', 'Ram', 21, 16, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_news`
--

CREATE TABLE `danh_muc_news` (
  `id_dm_news` int(11) NOT NULL,
  `ten_dm_news` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_pro`
--

CREATE TABLE `danh_muc_pro` (
  `id_dm_pro` int(11) NOT NULL,
  `ten_dm_pro` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_pro`
--

INSERT INTO `danh_muc_pro` (`id_dm_pro`, `ten_dm_pro`) VALUES
(47, 'Điện thoại'),
(49, 'Oppo'),
(48, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dung_luong_phone`
--

CREATE TABLE `dung_luong_phone` (
  `id_dl_phone` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dung_luong_phone`
--

INSERT INTO `dung_luong_phone` (`id_dl_phone`, `id_sp`, `rom`, `don_gia`) VALUES
(19, 66, 16, 80),
(20, 66, 12, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hoa_don` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `tinh_trang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `ngay_dat_hang` date NOT NULL,
  `ngay_giao_hang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `id_hoa_don_chi_tiet` int(11) NOT NULL,
  `id_hoa_don` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong_mua` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_pro`
--

CREATE TABLE `images_pro` (
  `id_images_pro` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images_pro`
--

INSERT INTO `images_pro` (`id_images_pro`, `id_sp`, `images`) VALUES
(5, 66, '(600x600)_crop_iPhone_6s_16GB_Quoc_Te_Likenew_XTsmart.jpg'),
(6, 66, '(600x600)_crop_iphone_7_plus_gold_xtsmart.jpg'),
(7, 66, '(600x600)_crop_iphone_13_pro_max_1.png'),
(8, 66, '(600x600)_crop_iphone_xr_gray_xtsmart.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mau_sac_phone`
--

CREATE TABLE `mau_sac_phone` (
  `id_ms_phone` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_mau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mau_sac_phone`
--

INSERT INTO `mau_sac_phone` (`id_ms_phone`, `id_sp`, `ten_mau`, `hinh_anh`) VALUES
(50, 66, 'ĐỎ', '565736971.jpg'),
(51, 66, 'vàng', '80_iphone_xs_max_den_xtsmart.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `id_dm_pro` int(11) NOT NULL,
  `id_sub_dm_pro` int(11) NOT NULL,
  `ten_sp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` int(11) NOT NULL,
  `so_luong` int(20) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `so_luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `id_dm_pro`, `id_sub_dm_pro`, `ten_sp`, `hinh_anh`, `don_gia`, `so_luong`, `ngay_nhap`, `mo_ta`, `so_luot_xem`) VALUES
(66, 47, 45, 'Long12', '565736971.jpg', 80, 21, '2021-11-18', '<p>dsad</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_danh_muc_pro`
--

CREATE TABLE `sub_danh_muc_pro` (
  `id_sub_dm_pro` int(11) NOT NULL,
  `ten_sub_dm_pro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_dm_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sub_danh_muc_pro`
--

INSERT INTO `sub_danh_muc_pro` (`id_sub_dm_pro`, `ten_sub_dm_pro`, `id_dm_pro`) VALUES
(45, 'Oppo', 47),
(46, 'Samsung', 47),
(47, 'Iphone', 47),
(48, 'Tai nghe', 48);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bai_viet`),
  ADD KEY `id_dm_news` (`id_dm_news`);

--
-- Chỉ mục cho bảng `binh_luan_news`
--
ALTER TABLE `binh_luan_news`
  ADD PRIMARY KEY (`id_bl_news`),
  ADD KEY `id_bai_viet` (`id_bai_viet`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `binh_luan_pro`
--
ALTER TABLE `binh_luan_pro`
  ADD PRIMARY KEY (`id_bl_pro`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `cau_hinh_phone`
--
ALTER TABLE `cau_hinh_phone`
  ADD PRIMARY KEY (`id_ch_phone`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `danh_muc_news`
--
ALTER TABLE `danh_muc_news`
  ADD PRIMARY KEY (`id_dm_news`);

--
-- Chỉ mục cho bảng `danh_muc_pro`
--
ALTER TABLE `danh_muc_pro`
  ADD PRIMARY KEY (`id_dm_pro`),
  ADD UNIQUE KEY `ten_dm_pro` (`ten_dm_pro`);

--
-- Chỉ mục cho bảng `dung_luong_phone`
--
ALTER TABLE `dung_luong_phone`
  ADD PRIMARY KEY (`id_dl_phone`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hoa_don`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`id_hoa_don_chi_tiet`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_hoa_don` (`id_hoa_don`);

--
-- Chỉ mục cho bảng `images_pro`
--
ALTER TABLE `images_pro`
  ADD PRIMARY KEY (`id_images_pro`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `mau_sac_phone`
--
ALTER TABLE `mau_sac_phone`
  ADD PRIMARY KEY (`id_ms_phone`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD UNIQUE KEY `ten_sp` (`ten_sp`),
  ADD KEY `id_dm_pro` (`id_dm_pro`),
  ADD KEY `id_sub_dm_pro` (`id_sub_dm_pro`);

--
-- Chỉ mục cho bảng `sub_danh_muc_pro`
--
ALTER TABLE `sub_danh_muc_pro`
  ADD PRIMARY KEY (`id_sub_dm_pro`),
  ADD UNIQUE KEY `ten_sub_dm_pro` (`ten_sub_dm_pro`),
  ADD KEY `id_dm_pro` (`id_dm_pro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bai_viet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan_news`
--
ALTER TABLE `binh_luan_news`
  MODIFY `id_bl_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan_pro`
--
ALTER TABLE `binh_luan_pro`
  MODIFY `id_bl_pro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cau_hinh_phone`
--
ALTER TABLE `cau_hinh_phone`
  MODIFY `id_ch_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danh_muc_news`
--
ALTER TABLE `danh_muc_news`
  MODIFY `id_dm_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc_pro`
--
ALTER TABLE `danh_muc_pro`
  MODIFY `id_dm_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `dung_luong_phone`
--
ALTER TABLE `dung_luong_phone`
  MODIFY `id_dl_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id_hoa_don_chi_tiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images_pro`
--
ALTER TABLE `images_pro`
  MODIFY `id_images_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mau_sac_phone`
--
ALTER TABLE `mau_sac_phone`
  MODIFY `id_ms_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `sub_danh_muc_pro`
--
ALTER TABLE `sub_danh_muc_pro`
  MODIFY `id_sub_dm_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `bai_viet_ibfk_1` FOREIGN KEY (`id_dm_news`) REFERENCES `danh_muc_news` (`id_dm_news`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `binh_luan_news`
--
ALTER TABLE `binh_luan_news`
  ADD CONSTRAINT `binh_luan_news_ibfk_1` FOREIGN KEY (`id_bai_viet`) REFERENCES `bai_viet` (`id_bai_viet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_news_ibfk_2` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `binh_luan_pro`
--
ALTER TABLE `binh_luan_pro`
  ADD CONSTRAINT `binh_luan_pro_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_pro_ibfk_2` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cau_hinh_phone`
--
ALTER TABLE `cau_hinh_phone`
  ADD CONSTRAINT `cau_hinh_phone_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dung_luong_phone`
--
ALTER TABLE `dung_luong_phone`
  ADD CONSTRAINT `dung_luong_phone_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`id_hoa_don`) REFERENCES `hoa_don` (`id_hoa_don`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `images_pro`
--
ALTER TABLE `images_pro`
  ADD CONSTRAINT `images_pro_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mau_sac_phone`
--
ALTER TABLE `mau_sac_phone`
  ADD CONSTRAINT `mau_sac_phone_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_dm_pro`) REFERENCES `danh_muc_pro` (`id_dm_pro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`id_sub_dm_pro`) REFERENCES `sub_danh_muc_pro` (`id_sub_dm_pro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sub_danh_muc_pro`
--
ALTER TABLE `sub_danh_muc_pro`
  ADD CONSTRAINT `sub_danh_muc_pro_ibfk_1` FOREIGN KEY (`id_dm_pro`) REFERENCES `danh_muc_pro` (`id_dm_pro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

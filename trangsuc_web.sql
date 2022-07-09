-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2022 lúc 04:56 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trangsuc_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_ban`
--

CREATE TABLE `bills_ban` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `tong_tien` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `status` varchar(20) NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills_ban`
--

INSERT INTO `bills_ban` (`id`, `id_kh`, `date_order`, `tong_tien`, `payment`, `status`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-05-06', 20000, 'on', '1', NULL, '2022-04-25 09:56:58', '2019-05-05 18:19:04'),
(2, 2, '2019-05-09', 35000, 'on', '1', NULL, '2022-04-25 09:57:07', '2019-05-09 01:27:05'),
(3, 3, '2019-04-19', 17000, 'on', '1', NULL, '2022-04-25 09:57:19', '2019-04-18 22:48:32'),
(4, 4, '2019-04-19', 70000, 'on', '0', NULL, '2022-04-25 09:57:30', '2019-04-22 01:21:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills_nhap`
--

CREATE TABLE `bills_nhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ncc` int(11) DEFAULT NULL,
  `id_nhanvien` int(10) NOT NULL,
  `date_order` date DEFAULT NULL,
  `tong_tien` float DEFAULT NULL COMMENT 'tổng tiền',
  `thanh_toan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills_nhap`
--

INSERT INTO `bills_nhap` (`id`, `id_ncc`, `id_nhanvien`, `date_order`, `tong_tien`, `thanh_toan`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-04-15', 1500000, 'on', NULL, '2019-04-15 06:35:40', '2019-04-15 05:39:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail_ban`
--

CREATE TABLE `bill_detail_ban` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill_ban` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `sl` int(11) NOT NULL COMMENT 'số lượng',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail_ban`
--

INSERT INTO `bill_detail_ban` (`id`, `id_bill_ban`, `id_sp`, `sl`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 1, '2022-04-25 09:57:52', '2019-04-18 22:50:19'),
(2, 2, 4, 1, '2022-04-25 09:58:00', '2019-04-18 22:48:32'),
(3, 3, 7, 2, '2022-04-25 09:58:08', '2019-04-18 22:50:19'),
(4, 4, 2, 1, '2022-04-25 09:58:17', '2019-05-09 01:27:05'),
(5, 5, 6, 1, '2022-04-25 09:58:27', '2019-05-05 18:19:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail_nhap`
--

CREATE TABLE `bill_detail_nhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill_nhap` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `sl` int(11) NOT NULL COMMENT 'số lượng',
  `don_vi` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail_nhap`
--

INSERT INTO `bill_detail_nhap` (`id`, `id_bill_nhap`, `id_sp`, `sl`, `don_vi`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 'kg', '2019-04-15 06:35:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ten_kh`, `email`, `dia_chi`, `sdt`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Đoàn Thùy Linh', 'doanlinh1098@gmail.com', 'Bình Nguyên-Đa Lộc-Ân Thi-Hưng Yên', '0983017991', NULL, '2022-04-25 09:58:46', '2019-04-18 22:50:19'),
(2, 'Đoàn Văn Việt', 'tuan@gmail.com', 'Đa Lộc-Ân Thi-Hưng Yên', '0983756482', NULL, '2022-04-25 09:58:57', '2019-05-05 18:19:04'),
(3, 'Đoàn Linh', 'doanlinh@gmail.com', 'Đa Lộc- Ân Thi-Hưng Yên', '01628470872', NULL, '2022-04-25 09:59:08', '2019-05-09 01:27:05'),
(4, 'Nguyễn Văn Hùng', 'hung@gmail.com', 'Nguyễn Xá- Nhân Hòa-Mỹ Hào-Hưng yên', '0983017763', NULL, '2022-04-25 09:59:17', '2019-04-18 22:48:32'),
(5, 'Đặng Ngọc Minh', 'ngocminh@gmail.com', 'Hưng Yên', '0984512478', NULL, '2022-05-03 14:25:07', '2022-05-03 14:24:48'),
(6, 'Ngô Lan Anh', 'ngoanh@gmail.com', 'An Vĩ - Khoái Châu - Hưng Yên', '0974524512', NULL, '2022-05-03 14:33:57', '2022-05-03 14:33:57'),
(7, 'Đỗ Hữu Thành', 'huuthanh@gmail.com', 'Nhân Hòa - Mỹ Hào - Hưng Yên', '0945781244', NULL, '2022-05-03 14:39:25', '2022-05-03 14:39:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

CREATE TABLE `kho` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`id`, `id_sp`, `sl`) VALUES
(1, 1, 12),
(2, 2, 23),
(3, 3, 23),
(4, 4, 23),
(5, 5, 34),
(6, 6, 34),
(7, 7, 56),
(8, 8, 25),
(9, 9, 45),
(10, 10, 27),
(11, 11, 43),
(12, 12, 44),
(13, 13, 29),
(14, 14, 55),
(15, 15, 58),
(16, 31, 77),
(17, 32, 55);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Delet` int(11) NOT NULL COMMENT '0:hien,1:an',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id`, `tenloai`, `Delet`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ', 1, '2019-04-05 14:27:26', '2019-04-21 20:57:50'),
(2, 'Trang sức cưới', 1, '2019-04-17 03:41:45', '2019-05-08 18:45:27'),
(3, 'Trang sức kim cương', 0, '2019-04-17 03:41:45', '2019-05-08 20:20:27'),
(4, 'Trang sức bạc', 1, '2019-04-22 01:56:35', '2019-05-09 01:27:43'),
(5, 'Kim cương viên', 1, '2022-04-13 16:08:14', '2022-04-22 16:08:14'),
(6, 'Trang sức ngọc trai', 0, '2022-04-03 16:10:44', '2022-04-22 16:10:44'),
(7, 'Trang sức đá màu', 0, '2021-04-15 16:11:40', '2022-04-22 16:08:14'),
(8, 'Quà tặng', 1, '2019-04-16 16:13:02', '2022-04-04 16:12:23'),
(9, 'Trang sức vàng 24K', 1, '2019-04-16 16:17:32', '2022-04-22 16:10:44'),
(10, 'Trang sức trẻ', 1, '2020-04-13 16:30:26', '2022-04-22 16:10:44'),
(14, 'đgfdbg', 1, '2022-05-19 10:09:52', '2022-05-19 10:09:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_new` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_new`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, '10 loại trang sức đẹp nhất', '', 'img2.png', '2019-03-31 11:16:43', '0000-00-00 00:00:00'),
(2, 'Chọn trang sức', '', 'img1.png', '2019-03-31 11:16:43', '0000-00-00 00:00:00'),
(3, '9 công dụng chữa bệnh của đậu nành', '', 'img3.png', '2019-03-31 11:16:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id` int(11) NOT NULL,
  `ten_nhanvien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capbac` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id`, `ten_nhanvien`, `gioitinh`, `ngaysinh`, `quequan`, `sdt`, `email`, `capbac`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thị Thùy', 'Nữ', '1989-10-04', 'Nguyễn Xá-Nhân Hòa-Mỹ Hào-Hưng Yên', '0986253821', 'thuynguyen@gmail.com', '1', '2019-04-04 14:45:32', '0000-00-00 00:00:00'),
(2, 'Nguyễn Trà My', 'Nữ', '2002-05-02', 'Từ Hồ - Yên Mỹ - Hưng Yên', '098412563', 'tramyng@gmail.com', '2', '2022-05-03 14:50:33', '0000-00-00 00:00:00'),
(3, 'Bùi Hải Nam', 'Nam', '2003-05-12', 'Hàm Tử - Khoái Châu - Hưng Yên', '0954751524', 'hainam@gmail.com', '2', '2022-05-03 14:58:40', '0000-00-00 00:00:00'),
(4, 'Bùi Việt Hoàng', 'Nam', '2001-02-01', 'Nghệ An - Việt Nam', '0344751259', 'dohoang@gmail.com', '2', '2022-05-19 15:21:54', '2022-05-19 08:21:54'),
(5, 'Trần Minh Ngọc', 'Nữ', '2000-03-08', 'Yên Vĩnh - Khoái Châu - Hưng Yên', '0356124511', 'minhngoc@gmail.com', '3', '2022-05-03 15:05:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_cung_cap`
--

CREATE TABLE `nha_cung_cap` (
  `id` int(11) NOT NULL,
  `ten_ncc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_ncc` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Delet` int(11) NOT NULL COMMENT '0:hien,1:an',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_cung_cap`
--

INSERT INTO `nha_cung_cap` (`id`, `ten_ncc`, `diachi_ncc`, `email`, `sdt`, `Delet`, `created_at`, `updated_at`) VALUES
(1, 'CÔNG TY CỔ PHẦN ĐẦU TƯ EXP VIỆT NAM', 'Nhà D21, dãy D, khu tập thể sư đoàn 361, P. Xuân Đỉnh, Q. Bắc Từ Liêm, Hà Nội', 'trangsucxp@gmail.com', '024 3750294', 0, '2022-05-03 15:08:04', '0000-00-00 00:00:00'),
(2, 'Công Ty TNHH Sản xuất trang sức Thiên Hà', 'Lầu 10, Toà Nhà Vinaconex, 47 Điện Biên Phủ, P. Đa Kao, Q. 1, Tp. Hồ Chí Minh (TPHCM)', 'nancy@galaxy-vn.com', '(028) 39103066', 0, '2022-05-03 15:09:49', '0000-00-00 00:00:00'),
(3, 'Trang sức Galaxy Agro - Công Ty TNHH Galaxy Agro', 'Số 14/16, Đường 990, Khu Phố 4, Phường Phú Hữu, Quận 9, Tp. Hồ Chí Minh (TPHCM)', 'nancy@galaxy-vn.com', '(028) 39103066', 0, '2022-05-03 15:10:08', '0000-00-00 00:00:00'),
(4, 'Công ty QTY', 'Phố 4, Quận 7 Tp.Hồ Chí Minh', 'QTY@gmail.com', '09648359821', 0, '2019-05-09 03:40:05', '2019-05-08 20:40:05'),
(5, 'Công ty cổ phần trang sức DL', '123 Bạch Mai - Hà Nội', 'dltrangsuc@gmail.com', '0985124577', 1, '2022-05-03 15:10:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_hoi`
--

CREATE TABLE `phan_hoi` (
  `id_phan_hoi` int(11) NOT NULL,
  `id_tk` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_hoi`
--

INSERT INTO `phan_hoi` (`id_phan_hoi`, `id_tk`, `id_sp`, `level`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 'Nếu mua sỉ có được chiết khấu không vậy?', '2022-05-03 15:26:24', '0000-00-00 00:00:00'),
(2, 1, 7, 5, 'Trang sức rất sang trọng và đẹp.', '2022-05-03 15:27:06', '0000-00-00 00:00:00'),
(3, 1, 2, 3, 'Đẹp xuất sắc.', '2022-05-03 15:28:00', '0000-00-00 00:00:00'),
(4, 1, 1, 0, 'Trang sức giá hợp lý lại đẹp.', '2022-05-03 15:28:22', '2019-04-10 02:20:29'),
(5, 1, 1, 0, 'Chất lượng tuyệt vời.', '2022-05-03 15:28:52', '2019-04-10 02:21:01'),
(6, 1, 9, 1, 'Rất hài lòng.', '2022-05-03 15:29:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `tittle` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_loai_sp` int(10) UNSIGNED DEFAULT NULL,
  `id_ncc` int(11) NOT NULL,
  `mota_sp` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `gia_km` float DEFAULT NULL,
  `so_luong` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kich_thuoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Delet` int(11) DEFAULT NULL COMMENT '0:hien, 1:an',
  `new` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `id_loai_sp`, `id_ncc`, `mota_sp`, `unit_price`, `gia_km`, `so_luong`, `image`, `kich_thuoc`, `Delet`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Nhẫn DJR1398', 3, 2, 'Tinh tế mang tới vẻ dịu dàng, thanh lịch', 47311000, NULL, 24, 'nhan_djr1398.jpg', '20-25', 1, 0, '2019-04-16 16:17:32', '2019-05-08 00:25:19'),
(2, 'Mặt dây DJP404', 5, 2, 'Kiêu sa', 35426000, NULL, 52, 'matday_djp404.jpg', '20-25', 1, 1, '2020-04-13 16:30:26', '2019-05-09 01:27:05'),
(3, 'Bông tai DJE1107-2', 3, 1, 'Trẻ trung, hiện đại', 62696000, NULL, 15, 'bongtai_dje1107-2.jpg', '', 0, 0, '2018-04-10 16:34:45', '2019-05-08 20:39:07'),
(4, 'Mặt dây DJP1379', 5, 3, 'Tinh tế, huyền bí', 35485000, NULL, 23, 'matday_DJP1379.jpg', '', 0, 0, '2022-04-05 16:43:03', '2022-04-22 16:10:44'),
(5, 'Nhẫn Kim cương DJR3095', 3, 3, 'Sang trọng, quý phái', 52120000, NULL, 16, 'nhankimcuong_DJR3095.jpg', '20-25', 0, 0, '2019-04-16 16:17:32', '2019-05-05 06:14:19'),
(6, 'Mặt dây chuyền DJP1135', 3, 3, 'Kiêu sa', 46197500, NULL, 42, 'matdaychuyen_DJP1135.jpg', '', 0, 1, '2019-04-16 16:13:02', '2019-05-05 18:19:04'),
(7, 'Mặt dây Kim cương DJP1296', 3, 2, 'Đẹp, huyền bí', 54204500, NULL, 27, 'matdaykimcuong_DJP1296.jpg', '', 0, 1, '2020-04-13 16:30:26', '2022-04-22 16:10:44'),
(8, 'Nhẫn nữ Kim cương DJR1835-5', 3, 3, 'Sang trọng', 65124500, NULL, 33, 'nhankimcuong_DJR1835-5.jpg', '20-25', 0, 1, '2019-04-16 16:13:02', '2022-04-22 16:08:14'),
(9, 'Mặt dây kim cương DJP582-3', 5, 2, 'Tinh tế', 45620500, NULL, 35, 'matdaykimcuong_DJP582-3.jpg', '', 0, 0, '2019-04-16 16:13:02', '2019-05-05 05:53:41'),
(10, 'Nhẫn cưới Salsa NWR1576', 2, 2, 'Đặc biệt', 25450000, NULL, 32, 'nhancuoisalsa_NWR1576.jpg', '20-25', 0, 0, '2019-04-16 16:13:02', '2022-04-22 16:08:14'),
(11, 'Nhẫn cưới Mono NWR1488', 2, 2, 'Sang trọng, xinh đẹp', 16030000, NULL, 24, 'nhancuoimono_NWR1488.png', '20-25', 0, 0, '2019-04-16 16:13:02', '2022-04-22 16:08:14'),
(12, 'Nhẫn cưới Mono NWR1489', 2, 2, 'Ý nghĩa ', 25120000, NULL, 23, 'nhancuoimono_NWR1489.jpg', '20-25', 0, 1, '2019-04-16 16:13:02', '2019-04-11 05:04:55'),
(13, 'Nhẫn cưới Mono NWR1126-2', 2, 2, 'Tinh tế', 12155000, NULL, 25, 'nhancuoimono_NWR1126-2.png', '20-25', 0, 0, '2019-04-06 03:00:48', '2019-04-06 13:00:36'),
(14, 'Nhẫn cưới Salsa NWR1680', 2, 1, 'Sang trọng', 12024000, NULL, 15, 'nhancuoisalsa_NWR1680.jpg', '20-25', 0, 1, '2019-04-15 02:46:52', '2019-04-15 02:46:52'),
(15, 'Lắc tay FB_01307', 9, 1, 'Tinh tế', 10250000, NULL, 23, 'lactayFB_01307.jpg', '20-25', 1, 1, '2019-04-22 00:41:04', '2019-05-08 19:32:47'),
(16, 'Mặt dây FP_60283', 9, 3, 'Đẹp', 12300000, NULL, 20, 'matdayFP_60283.jpg', '20-25', 0, 1, '2019-05-05 06:21:03', '2019-05-05 06:29:01'),
(17, 'Hoa tai FE_60283', 9, 1, 'Quyền lực', 10050000, NULL, 40, 'hoataiFE_60283.jpg', '20-25', 0, 1, '2019-05-05 06:23:08', '2019-05-05 06:27:11'),
(18, 'Nhẫn FR_60283', 9, 3, 'Sang trọng', 10230000, NULL, 27, 'nhanFR_60283.jpg', '20-25', 0, 1, '2019-05-05 06:26:17', '2019-05-05 06:26:17'),
(19, 'Kiềng cổ collier FC_60285', 9, 3, 'Sang trọng', 20217000, NULL, 26, 'kiengcocollierFC_60285.jpg', '20-25', 0, 1, '2019-05-05 06:28:35', '2019-05-05 06:28:35'),
(20, 'Hoa tai FE_60285', 9, 1, 'Tinh tế', 12150000, NULL, 20, 'hoataiFE_60285.jpg', '20-25', 0, 1, '2019-05-08 18:45:28', '2019-05-09 00:34:24'),
(21, 'Đồng hồ Konig 74 K74C005', 1, 2, 'Đẳng cấp', 25100000, NULL, 20, 'donghoKonig74K74C005.jpg', '20-25', 1, 1, '2019-05-09 00:33:58', '2019-05-09 00:35:33'),
(22, 'Đồng hồ Konig 74 K74M002', 1, 2, 'Quý phái', 12100000, NULL, 20, 'donghoKonig74_K74M002.jpg', '20-25', 0, 1, '2019-05-09 01:28:03', '2019-05-09 01:28:03'),
(23, 'Đồng hồ Konig 74 K74MS003', 1, 3, 'Tinh tế', 25110000, NULL, 30, 'donghoKonig74_K74MS003.jpg', '20-25', 0, 1, '2019-05-09 01:28:03', '2019-05-09 01:28:03'),
(24, 'Đồng hồ Konig 74 K74BJ004', 1, 2, NULL, 22150000, NULL, 20, 'donghoKonig74_K74BJ004.jpg', '20-25', 0, 1, '2019-05-09 01:28:03', '2019-05-09 01:28:03'),
(25, 'Đồng hồ Konig 74 K74SK001', 1, 2, 'Nam tính', 16752000, NULL, 12, 'donghoKonig74_K74SK001.jpg', '20-25', 1, 0, '2020-04-13 16:30:26', '2022-04-22 16:08:14'),
(26, 'Đồng hồ Konig 74 K74LCR006', 1, 1, 'Tinh tế', 23450000, NULL, 10, 'donghoKonig74_K74LCR006.jpg', '20-25', 1, 0, '2022-04-06 09:40:22', '2022-04-20 09:40:22'),
(27, 'Vương Trượng Quang Minh GF-0011', 8, 1, 'Quý phái', 25450000, NULL, 5, 'vuongtruongquangminh_GF-0011-1219.jpg', NULL, 1, 0, '2020-04-13 16:30:26', '2022-04-22 16:10:44'),
(28, 'Kim Ngân Tài BYS-F10559', 8, 2, 'Sang trọng', 12450000, NULL, 5, 'kimngantai_BYS-F10559.jpg', NULL, 0, 0, '2022-04-06 09:40:22', '2022-04-20 09:40:22'),
(29, 'Song Ngư Bảo Lộc DJDESX240', 8, 3, 'Sang trọng', 9780000, NULL, 10, 'songngubaoloc_DJDESX240.jpg', NULL, 1, 0, '2020-04-13 16:30:26', '2022-04-22 16:08:14'),
(30, 'Bình Hoa Phú Quý WRJ003', 8, 1, 'Sang trọng', 23450000, NULL, 5, 'binhhoaphuquy_WRJ003.jpg', NULL, 1, 0, '2022-04-06 09:40:22', '2022-04-20 09:40:22'),
(31, 'Hoa tai DJE882', 5, 2, 'Đẹp', 12450000, NULL, 10, 'hoatai_DJE882.jpg', NULL, 1, 1, '2022-05-10 01:39:10', '2022-05-18 01:39:10'),
(32, 'Nhẫn cưới Salsa NWR1481', 2, 1, 'Tinh tế', 20561000, NULL, 12, 'salsa_NWR1481.jpg', '20-25', 1, 0, '2022-05-02 01:42:28', '2022-05-12 01:42:28'),
(33, 'Vòng charm CB60190', 9, 1, 'Tinh tế', 2120000, NULL, 20, 'charm_CB60190.jpg', '20-25', 1, 0, '2022-05-01 01:51:34', '2022-05-09 01:51:34'),
(34, 'Cài áo hoa hồng vàng 24K FH60013', 9, 2, 'Đẹp', 23450000, NULL, 41, 'caiao_FH60013.jpg', NULL, 1, 0, '2022-05-09 01:51:34', '2022-05-24 01:51:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(10) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `link`, `image`) VALUES
(1, '', 'image-14.jpg'),
(2, '', 'image-33.jpg'),
(3, '', 'image-13.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `users_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Delet` int(11) NOT NULL COMMENT '0:hien,1:an',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `users_name`, `email`, `password`, `phone`, `address`, `image`, `Delet`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đoàn Linh', 'DoanLinh', 'doanlinh@gmail.com', 'doanlinh', '01628470872', 'Đa Lộc- Ân Thi-Hưng Yên', '', 0, NULL, '2022-05-25 09:41:16', '2019-04-14 22:16:56'),
(2, 'DoanThiLinh', 'LinhD', 'vinh@gmail.com', 'doanthilinh', '983715373', 'Ân Thi', '', 1, NULL, '2022-05-25 09:41:37', '2019-05-08 23:50:25'),
(3, 'Đoàn Thị Thùy Linh', 'LinhDoan', 'doanlinh101998@gmail.com', 'linhdoan', '0983017992', 'Đa Lộc -Ân Thi-Hưng Yên', '', 0, NULL, '2022-05-25 09:41:50', '2019-04-22 01:52:34'),
(4, 'Đoàn Thị Linh', 'Linh', 'doanlinh1098@gmail.com', 'thilinhdoan', '0983017991', 'Bình Nguyên-Đa Lộc-Ân Thi-Hưng Yên', '', 0, 'bWKdka3a0UR3Qu8Iu2wGYZrqafQnlzhk9O82dcsUlILBO0vIXS0zvog62m51', '2022-05-25 09:42:09', '2019-05-04 22:23:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills_ban`
--
ALTER TABLE `bills_ban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills_nhap`
--
ALTER TABLE `bills_nhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail_ban`
--
ALTER TABLE `bill_detail_ban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail_nhap`
--
ALTER TABLE `bill_detail_nhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenloai` (`tenloai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phan_hoi`
--
ALTER TABLE `phan_hoi`
  ADD PRIMARY KEY (`id_phan_hoi`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `full_name` (`full_name`),
  ADD UNIQUE KEY `users_name` (`users_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills_ban`
--
ALTER TABLE `bills_ban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `bills_nhap`
--
ALTER TABLE `bills_nhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `bill_detail_ban`
--
ALTER TABLE `bill_detail_ban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `bill_detail_nhap`
--
ALTER TABLE `bill_detail_nhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `kho`
--
ALTER TABLE `kho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phan_hoi`
--
ALTER TABLE `phan_hoi`
  MODIFY `id_phan_hoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

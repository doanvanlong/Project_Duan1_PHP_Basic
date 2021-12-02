-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2021 lúc 03:23 PM
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
  `tieu_de_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ngay_post` date NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id_bai_viet`, `id_dm_news`, `tieu_de_news`, `img_news`, `noi_dung`, `id_sp`, `ngay_post`, `so_luot_xem`) VALUES
(8, 9, 'TRÊN TAY IPHONE 12 PRO: SMARTPHONE ĐÁNG ĐỂ SỞ HỮU', '1418852972.jpg', '<h2><strong>Như đ&atilde; biết, iPhone 12 Pro l&agrave; một trong 4 model thuộc d&ograve;ng&nbsp;<a href=\"http://www.xtsmart.vn/iphone-12\" target=\"_blank\">iPhone 12</a>&nbsp;ra mắt hồi tuần rồi. D&ograve;ng iPhone mới n&agrave;y hứa hẹn mang đến cho người d&ugrave;ng nhiều trải nghiệm th&uacute; vị. B&agrave;i viết h&ocirc;m nay sẽ d&agrave;nh ri&ecirc;ng cho iPhone 12 Pro, c&ugrave;ng theo d&otilde;i xem flagship n&agrave;y c&oacute; đủ ấn tượng để bạn sở hữu kh&ocirc;ng nh&eacute;!</strong></h2>\r\n\r\n<p>&gt;&gt; Xem th&ecirc;m:</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/dxomark-danh-gia-camera-iphone-12-pro-max-khong-phai-la-tot-nhat\" target=\"_blank\">DxOMark đánh giá camera iPhone 12 Pro Max kh&ocirc;ng phải là t&ocirc;́t nh&acirc;́t</a></li>\r\n	<li><a href=\"https://www.xtsmart.vn/nguoi-dung-iphone-x-co-nen-nang-cap-len-iphone-12-hay-khong\" target=\"_blank\">Người dùng iPhone X có n&ecirc;n n&acirc;ng c&acirc;́p l&ecirc;n iPhone 12 hay kh&ocirc;ng?</a></li>\r\n</ul>\r\n\r\n<h3><strong>Thiết kế sang trọng, thu h&uacute;t</strong></h3>\r\n\r\n<p>Mặc d&ugrave; l&agrave; phi&ecirc;n bản kế nhiệm của iPhone 11 Pro trước đ&oacute; nhưng về thiết kế, Apple đ&atilde; tinh chỉnh một số chi tiết tr&ecirc;n iPhone 12 Pro. Cụ thể, m&aacute;y dược ho&agrave;n thiện bởi khung viền th&eacute;p cao cấp kh&ocirc;ng gỉ với c&aacute;c cạnh sắc n&eacute;t 90 độ. Đ&acirc;y cũng l&agrave; thay đổi duy nhất của &ocirc;ng lớn về thiết kế iPhone từ đời iPhone X đến nay. Đặc biệt, mặt trước iPhone 12 Pro được phủ lớp Ceramic Shield, cho khả năng bảo vệ gấp 4 lần k&iacute;nh cường lực th&ocirc;ng thường.</p>\r\n\r\n<p><img alt=\"mặt trước iPhone 12 Pro được phủ lớp Ceramic Shield, cho khả năng bào vệ gấp 4 lần kính cường lực thông thường\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2020/thiet-ke-apple-iphone-12-pro-xtsmart.jpg\" /></p>\r\n\r\n<p>Mặc d&ugrave; việc cầm nắm kh&ocirc;ng được thoải m&aacute;i như&nbsp;tiền nhiệm, nhưng việc thao t&aacute;c ở c&aacute;c n&uacute;t hai b&ecirc;n trở n&ecirc;n thuận tiện. B&ecirc;n cạnh đ&oacute;, sự đa dạng về m&agrave;u sắc như Graphite, Silver, Gold v&agrave; Pacific Blue gi&uacute;p bạn c&oacute; nhiều lựa chọn hơn. Nhưng phải c&ocirc;ng nhận rằng, d&ugrave; l&agrave; phi&ecirc;n bản m&agrave;u n&agrave;o đều dư sức thu h&uacute;t người đối diện nhờ kết hợp với mặt k&iacute;nh mờ ở ph&iacute;a sau v&agrave; khung viền th&eacute;p sang trọng.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh hiển thị tuyệt vời</strong></h3>\r\n\r\n<p>Tương tự tiền nhiệm, iPhone 12 Pro vẫn sử dụng c&ocirc;ng nghệ m&agrave;n h&igrave;nh OLED. Tuy nhi&ecirc;n, Apple đ&atilde; n&acirc;ng cấp l&ecirc;n Super Retina XDR OLED l&agrave;m tăng chất lượng hiển thị l&ecirc;n 1170 x 2532 pixels v&agrave; c&oacute; độ s&aacute;ng tối đa l&ecirc;n tới 1200 nits. Hơn thế, m&agrave;n h&igrave;nh iPhone 12 Pro c&oacute; m&agrave;u đen s&acirc;u hơn, m&agrave;u sắc tươi s&aacute;ng, g&oacute;c nh&igrave;n rộng v&agrave; được hỗ trợ HDR10.</p>\r\n\r\n<p><img alt=\"iPhone 12 Pro vẫn sử dụng công nghệ màn hình OLED\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2020/man-hinh-apple-iphone-12-pro-xtsmart.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, thay đổi dễ nhận thấy nhất đ&oacute; l&agrave; k&iacute;ch thước m&agrave;n h&igrave;nh tăng từ 5,8 inch l&ecirc;n 6,1 inch nhưng kh&ocirc;ng l&agrave;m thay đổi k&iacute;ch thước tổng thể của iPhone. Nhờ đ&oacute;, thiết bị vừa c&oacute; thể nằm gọn trong l&ograve;ng b&agrave;n tay vừa mang đến cho người d&ugrave;ng kh&ocirc;ng gian hiển thị rộng r&atilde;i, ch&acirc;n thật.</p>\r\n\r\n<h3><strong>Camera đ&uacute;ng chất chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>iPhone 12 Pro được trang bị 3 camera 12MP ở mặt sau như&nbsp;thế hệ trước, bao gồm ống k&iacute;nh g&oacute;c si&ecirc;u rộng, ống k&iacute;nh tele 2x v&agrave; ống k&iacute;nh g&oacute;c si&ecirc;u rộng. Đặc biệt, năm nay Apple c&ograve;n h&agrave;o ph&oacute;ng trang bị th&ecirc;m m&aacute;y qu&eacute;t LiDAR, gi&uacute;p m&aacute;y ảnh iPhone 12 Pro trở n&ecirc;n chuy&ecirc;n nghiệp hơn. Nhất l&agrave; khi chụp h&igrave;nh trong m&ocirc;i trường &aacute;nh s&aacute;ng yếu, LiDAR sẽ gi&uacute;p lấy n&eacute;t nhanh, đảm bảo chất lượng h&igrave;nh ảnh.</p>\r\n\r\n<p><img alt=\"iPhone 12 Pro được trang bị 3 camera 12MP ở mặt sau như thế hệ trước\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2020/camera-iphone-12-pro-xtsmart_1.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng những vậy, tr&ecirc;n iPhone 12 Pro c&ograve;n c&oacute; sự xuất hiện của định dạng tệp ProRAW. N&oacute;i dễ hiểu, t&iacute;nh năng n&agrave;y tương tự như định dạng ảnh th&ocirc; (RAW) m&agrave; nhiều nhiếp ảnh gia sử dụng. Tuy nhi&ecirc;n, Apple đ&atilde; l&agrave;m tốt hơn một ch&uacute;t khi kh&ocirc;ng sử dụng c&aacute;c dữ liệu như c&acirc;n bằng trắng để xử l&yacute; h&igrave;nh ảnh.</p>\r\n\r\n<p>C&oacute; thể nhiều người đ&aacute;nh gi&aacute; rằng camera iPhone 12 Pro kh&ocirc;ng c&oacute; g&igrave; kh&aacute;c camera iPhone 11 Pro. Đ&uacute;ng, đ&uacute;ng ở đ&acirc;y l&agrave; c&ugrave;ng sử dụng 3 cảm biến 12MP, nhưng thật chất Apple đ&atilde; l&agrave;m lớn khẩu độ l&ecirc;n f/1.6 gi&uacute;p cải thiện t&igrave;nh trạng chụp ảnh thiếu s&aacute;ng tới 27%. Đ&oacute; l&agrave; chưa kể đến t&iacute;nh T&aacute;o khuyết c&ograve;n trang bị t&iacute;nh năng Flash Retina ở mặt trước. Giờ đ&acirc;y, d&ugrave; bạn c&oacute; selfie ban đ&ecirc;m cũng kh&ocirc;ng cần lo lắng bất kỳ điều g&igrave;.</p>\r\n\r\n<h3><strong>Hiệu năng mạnh mẽ</strong></h3>\r\n\r\n<p>Cung cấp sức mạnh cho iPhone 12 Pro l&agrave; vi xử l&yacute; Apple A14 Bionic. Được biết, con chip n&agrave;y được sản xuất tr&ecirc;n tiến tr&igrave;nh 5nm hiện đại, kh&ocirc;ng chỉ mạnh mẽ về hiệu năng m&agrave; c&ograve;n tiết kiệm năng lượng tối đa cho iPhone 12 Pro. B&ecirc;n cạnh đ&oacute;, h&atilde;ng c&ograve;n trang bị bộ nhớ RAM l&ecirc;n tới 6GB c&ugrave;ng bộ nhớ ROM lưu trữ ti&ecirc;u chuẩn 128GB v&agrave; tối đa l&ecirc;n tới 512GB.</p>\r\n\r\n<p><img alt=\"hieu-nang-apple-iphone-12-pro-xtsmart\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2020/hieu-nang-apple-iphone-12-pro-xtsmart.jpg\" /></p>\r\n\r\n<p>Trang bị tr&ecirc;n gi&uacute;p iPhone 12 Pro đ&aacute;nh bại c&aacute;c thiệt bị đối thủ c&ugrave;ng ph&acirc;n kh&uacute;c. Theo đ&oacute;, thiết bị kh&ocirc;ng chỉ l&agrave;m tốt c&aacute;c t&aacute;c vụ h&agrave;ng ng&agrave;y như duyệt web, lưu file, xem phim m&agrave; c&ograve;n dư sức chiến c&aacute;c tựa game đồ họa nặng nhất thị trường hiện nay.</p>\r\n\r\n<h3><strong>Thời lượng pin tốt</strong></h3>\r\n\r\n<p>Nhờ sự tốt ưu tốt từ iOS 14, thời lượng pin của iPhone 12 Pro đủ để người d&ugrave;ng sử dụng trong một ng&agrave;y d&agrave;i. Ngo&agrave;i ra, việc t&aacute;i tạo năng lượng của thiết bị cũng v&ocirc; c&ugrave;ng nhanh ch&oacute;ng nhờ sạc nhanh 20W, cho ph&eacute;p sạc 50% pin chỉ trong 30 ph&uacute;t. Đ&aacute;ng tiếc, d&ograve;ng iPhone 2020 n&agrave;y sẽ kh&ocirc;ng được Apple cung cấp củ sạc trong hợp b&aacute;n lẻ. Do đ&oacute;, người d&ugrave;ng cần bỏ ra &iacute;t ph&iacute; nữa để sở hữu củ sạc ph&ugrave; hợp.</p>\r\n\r\n<p><img alt=\"iPhone 12 Pro còn hỗ trợ sạc không dây với bộ sạc MagSafe\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2020/pin-apple-iphone-12-pro-xtsmart.jpg\" /></p>\r\n\r\n<p>Đặc biệt, iPhone 12 Pro c&ograve;n hỗ trợ sạc kh&ocirc;ng d&acirc;y với bộ sạc MagSafe. Được biết, MagSafe mới kh&ocirc;ng chỉ kết nối từ t&iacute;nh chắc chắn với mặt sau của iPhone 12 Pro m&agrave; c&ograve;n căn chỉnh điện thoại ngay ch&iacute;nh giữa đế sạc v&agrave; sạc lại pin ở vị tr&iacute; ho&agrave;n hảo nhất. C&ocirc;ng suất sạc của MagSafe rơi v&agrave;o khoảng 15W v&agrave; được b&aacute;n ra với gi&aacute; 39 USD (tương đương 904 ng&agrave;n đồng).</p>\r\n\r\n<p>Một điểm mới nữa tr&ecirc;n d&ograve;ng iPhone 12 n&agrave;y ch&iacute;nh l&agrave; kết nối 5G. D&ugrave; biết tốc độ kết nối của c&ocirc;ng nghệ n&agrave;y vượt trội hơn rất nhiều, nhưng chưa thật sự phổ biến. Cuối c&ugrave;ng về gi&aacute; b&aacute;n, mức gi&aacute; b&aacute;n khởi điểm của iPhone 12 Pro l&agrave; 999 USD (khoảng 23,2 triệu đồng), tức cao hơn 200 USD (khoảng 4,6 triệu đồng) so với gi&aacute; b&aacute;n khởi điểm của iPhone 12 l&agrave; 799 USD (khoảng 18,5 triệu đồng) cho bản 64GB.</p>\r\n', 108, '2021-11-24', 0),
(30, 9, 'TOP 3 ĐIỆN THOẠI CAO CẤP, CẤU HÌNH MẠNH GIẢM SỐC DỊP 20/11 TẠI LTSMART', '1783509340.jpg', '<h2><strong>Sở hữu một chiếc&nbsp;<a href=\"https://www.xtsmart.vn/dien-thoai\" target=\"_blank\">điện thoại</a>&nbsp;cao cấp, cấu h&igrave;nh mạnh lu&ocirc;n l&agrave; mong muốn của hầu hết người d&ugrave;ng. Với Top 3 điện thoại dưới đ&acirc;y chắc chắn sẽ mang đến cho bạn những trải nghiệm tuyệt vời nhất hiện nay trong ph&acirc;n kh&uacute;c tầm trung.</strong></h2>\r\n\r\n<p>&gt;&gt; Xem th&ecirc;m:</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/ro-ri-dien-thoai-galaxy-z-fold-4-duoc-tich-hop-cam-bien-van-tay-hai-mat-duoi-man-hinh\" target=\"_blank\">R&ograve; rỉ: Điện thoại Galaxy Z Fold 4 được t&iacute;ch hợp cảm biến v&acirc;n tay hai mặt dưới m&agrave;n h&igrave;nh</a></li>\r\n	<li><a href=\"https://www.xtsmart.vn/concept-galaxy-z-fold-note-voi-man-hinh-gap-bao-quanh-xuat-hien-an-tuong\" target=\"_blank\">Concept Galaxy Z Fold Note với màn hình g&acirc;̣p bao quanh xu&acirc;́t hi&ecirc;̣n &acirc;́n tượng</a></li>\r\n</ul>\r\n\r\n<p>Đặc biệt, nh&acirc;n dịp 20/11 sắp tới, top 3 điện thoại cao cấp, cấu h&igrave;nh mạnh b&ecirc;n dưới c&ograve;n được giảm gi&aacute; sốc hơn 2 triệu đồng. Đ&acirc;y l&agrave; cơ hội v&agrave;ng cho người d&ugrave;ng sở hữu một chiếc smartphone đ&aacute;p ứng tốt mọi t&aacute;c vụ từ thấp đến cao.</p>\r\n\r\n<h3><strong>Galaxy S10 5G 256GB cũ H&agrave;n Quốc (Gi&aacute; chỉ c&ograve;n 6.680.000đ)</strong></h3>\r\n\r\n<p><a href=\"https://www.xtsmart.vn/samsung-galaxy-s10-5g-8gb-256gb-likenew-han-quoc\" target=\"_blank\">Galaxy S10 5G 256GB cũ H&agrave;n Quốc</a>&nbsp;l&agrave; một trong những thiết bị cấu h&igrave;nh mạnh mẽ v&agrave; được giảm gi&aacute; s&acirc;u nh&acirc;n dịp lễ 20/11. Điện thoại thu h&uacute;t người d&ugrave;ng ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n nhờ ngoại h&igrave;nh sang trọng v&agrave; m&agrave;n h&igrave;nh Infinity O độc đ&aacute;o. Được biết, tấm nền Dynamic AMOLED c&oacute; k&iacute;ch thước l&ecirc;n đến 6.7 inch, độ ph&acirc;n giải đạt 2K+ si&ecirc;u sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Galaxy S10 5G 256GB cũ Hàn Quốc được trang bị chip Exynos 9820\" src=\"https://www.xtsmart.vn/vnt_upload/news/11_2021/galaxy-s10-5g-256gb-cu-han-quoc-xtsmart.jpg\" /></p>\r\n\r\n<p>Đặc biệt, Galaxy S10 5G 256GB cũ H&agrave;n Quốc sử dụng sức mạnh từ bộ xử l&iacute; Exynos 9820 8 nh&acirc;n. Theo &ocirc;ng lớn, con chip được x&acirc;y dựng tr&ecirc;n tiến tr&igrave;nh 8nm hiện đại, c&oacute; tốc độ xử l&yacute; th&ocirc;ng tin, khả năng xử l&yacute; đồ họa v&agrave; tiết kiệm năng lượng vượt trội hơn tiền nhiệm. Song song đ&oacute;, Galaxy S10 5G cũ gi&aacute; rẻ c&ograve;n được chạy tr&ecirc;n hệ điều h&agrave;nh Android 9.0 Pie v&agrave; bộ nhớ RAM/ROM l&ecirc;n tới 8GB/256GB.</p>\r\n\r\n<p>Với những trang bị cao cấp n&agrave;y, Galaxy S10 5G 256GB cũ H&agrave;n Quốc đảm bảo l&agrave;m tốt mọi t&aacute;c vụ từ nhẹ đến nặng. Thậm ch&iacute; l&agrave; chiến c&aacute;c game như Pubg Mobile, Li&ecirc;n Qu&acirc;n Mobile hay bất k&igrave; một tựa game đồ họa nặng n&agrave;o nặng nhất hiện nay.</p>\r\n\r\n<h3><strong>iPhone X 64GB cũ (Gi&aacute; chỉ c&ograve;n 7.980.000đ)</strong></h3>\r\n\r\n<p>Điểm g&acirc;y ch&uacute; &yacute; đầu ti&ecirc;n mỗi khi nhắc đến&nbsp;<a href=\"https://www.xtsmart.vn/iphone-x-64gb-quoc-te-likenew\" target=\"_blank\">iPhone X 64GB cũ</a>&nbsp;ch&iacute;nh l&agrave; ngoại h&igrave;nh lột x&aacute;c ho&agrave;n to&agrave;n so với những thế hệ trước. Điện thoại được hoàn thi&ecirc;̣n từ ch&acirc;́t li&ecirc;̣u g&ocirc;́m sứ Zirconia si&ecirc;u bền k&ecirc;́t hợp với khung thép kh&ocirc;ng gỉ. Điều n&agrave;y mang đến tổng thể vừa sang trọng, đẳng cấp vừa đảm bảo độ bền tốt cho flagship cao cấp.</p>\r\n\r\n<p><img alt=\" iPhone X 64GB có hiệu suất vượt trội\" src=\"https://www.xtsmart.vn/vnt_upload/news/11_2021/iphone-x-64gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, cấu h&igrave;nh cũng l&agrave; ưu điểm kh&ocirc;ng thể bỏ qua, mặc d&ugrave; iPhone X 64GB cũ đ&atilde; ra mắt kh&aacute; l&acirc;u. Đ&aacute;nh gi&aacute; cho thấy điện thoại vẫn dư sức đ&aacute;p ứng mọi nhu cầu, thậm ch&iacute; l&agrave; đ&aacute;nh bại&nbsp;c&aacute;c thiết bị c&ugrave;ng ph&acirc;n kh&uacute;c tr&ecirc;n thị trường. Đơn giản v&igrave; Apple đ&atilde; trang bị cho iPhone X 64GB cũ gi&aacute; rẻ chip xử lý A11 Bionic. Bộ xử l&yacute; n&agrave;y kh&ocirc;ng chỉ cung cấp hiệu năng mạnh mẽ m&agrave; c&ograve;n tiết kiệm điện năng hiệu quả.</p>\r\n\r\n<h3><strong>iPhone XS Max 64GB cũ 97% (Gi&aacute; chỉ c&ograve;n 11.380.000đ)</strong></h3>\r\n\r\n<p>Kh&ocirc;ng qu&aacute; khi n&oacute;i&nbsp;<a href=\"https://www.xtsmart.vn/iphone-xs-max-64gb-quoc-te-likenew-97\" target=\"_blank\">iPhone Xs Max 64GB cũ 97%</a>&nbsp;l&agrave; lựa chọn s&aacute;ng suốt đ&aacute;p ứng hai ti&ecirc;u ch&iacute; gi&aacute; rẻ v&agrave; cấu h&igrave;nh vượt trội. Si&ecirc;u phẩm nh&agrave; Apple đồng h&agrave;nh c&ugrave;ng chip xử lý A12 Bionic được sản xu&acirc;́t tr&ecirc;n ti&ecirc;́n trình 7nm hiện đại với 6 nh&acirc;n, trong đ&oacute; 2 nh&acirc;n hi&ecirc;̣u su&acirc;́t cao và 4 nh&acirc;n ti&ecirc;́t ki&ecirc;̣m năng lượng. C&ugrave;ng với đ&oacute; l&agrave; b&ocirc;̣ nhớ lưu trữ tương đ&ocirc;́i &ocirc;̉n định với RAM/ ROM lần lượt l&agrave; 4GB/ 64GB.&nbsp;</p>\r\n\r\n<p><img alt=\"iPhone XS Max 64GB cũ 97% mượt mà ở mọi tác vụ\" src=\"https://www.xtsmart.vn/vnt_upload/news/11_2021/iphone-xs-max-64gb-cu-97-xtsmart.jpg\" /></p>\r\n\r\n<p>Ch&iacute;nh v&igrave; vậy m&aacute;y hoàn toàn dư sức xử lý các tác vụ trong thời gian dài đ&ecirc;́n vài năm nữa mà kh&ocirc;ng có b&acirc;́t cứ tình trạng giật lag hay đứng m&aacute;y n&agrave;o. B&ecirc;n cạnh đ&oacute;, iPhone XS Max 64GB cũ 97% c&ograve;n cung cấp khả năng chụp ảnh chuy&ecirc;n nghiệp với camera kép ở mặt sau với đ&ocirc;̣ ph&acirc;n giải 12MP. &Ocirc;ng lớn cũng kh&ocirc;ng qu&ecirc;n t&iacute;ch hợp th&ecirc;m tính năng hiện đại như: Smart HDR giúp hình ảnh tốt, x&oacute;a ph&ocirc;ng, chống rung quang học OIS, l&acirc;́y nét nhanh...</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; Top 3 điện thoại cao cấp, cấu h&igrave;nh mạnh giảm sốc dịp 20/11 tại LTsmart, bạn c&oacute; thể đến trực tiếp tại cửa h&agrave;ng để trải nghiệm sản phẩm một c&aacute;ch tốt nhấ</p>\r\n', 0, '2021-11-24', 0),
(31, 11, 'SĂN DEAL CUỐI THÁNG - GIÁ RẺ BẤT NGỜ: ĐIỆN THOẠI GIẢM ĐẾN 2.1 TRIỆU ĐỒNG', '722220496.png', '<h2><strong>Cơ hội v&agrave;ng sở hữu điện thoại&nbsp;<a href=\"https://www.xtsmart.vn/apple\" target=\"_blank\">iPhone</a>,&nbsp;<a href=\"https://www.xtsmart.vn/samsung\" target=\"_blank\">Samsung</a>&nbsp;gi&aacute; hời khi bạn tham gia chương tr&igrave;nh Săn deal cuối th&aacute;ng - Gi&aacute; rẻ bất ngờ của LTsmart. Được biết, mức gi&aacute; giảm c&oacute; thể l&ecirc;n đến 2.1 triệu đồng c&ugrave;ng nhiều phần qu&agrave; hấp dẫn.</strong></h2>\r\n\r\n<h3><strong>Th&ocirc;ng tin chương tr&igrave;nh:</strong></h3>\r\n\r\n<ul>\r\n	<li>T&ecirc;n chương tr&igrave;nh:&nbsp;<strong>Săn deal cuối th&aacute;ng - Gi&aacute; rẻ bất ngờ</strong></li>\r\n	<li>Thời gian &aacute;p dụng: Từ ng&agrave;y&nbsp;<strong>29/10 - 01/11/2021</strong></li>\r\n	<li>Phạm vi &aacute;p dụng: Tất cả c&aacute;c kh&aacute;ch h&agrave;ng mua iPhone trực tiếp tại&nbsp;<strong>137 Nguyễn Thị Thập -Đ&agrave; Nẵng</strong>&nbsp;hoặc đặt online tr&ecirc;n Website LTsmart.vn.</li>\r\n</ul>\r\n\r\n<h3><strong>Sản phẩm khuyến m&atilde;i:</strong></h3>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/samsung-galaxy-s10-5g-8gb-256gb-likenew-97-han-quoc\" target=\"_blank\">Samsung S10 5G 256GB</a>&nbsp;Gi&aacute; chỉ c&ograve;n:&nbsp;<strong>6.880.000đ</strong>&nbsp;(Gi&aacute; ni&ecirc;m yết:&nbsp;<s>8.990.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"Flash_sale_galaxy_s10_5g\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2021/flash_sale_galaxy_s10_5g.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/samsung-galaxy-note-10-5g-256gb-likenew-han-quoc\" target=\"_blank\">Samsung Note 10 5G 256GB</a>&nbsp;Gi&aacute; chỉ c&ograve;n:&nbsp;<strong>7.880.000đ</strong>&nbsp;(Gi&aacute; ni&ecirc;m yết:&nbsp;<s>9.990.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"flash_sale_samsung_note_10_plus\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2021/flash_sale_samsung_note_10_plus.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/samsung-galaxy-note-10-plus-5g-12gb-256gb-likenew-han-quoc\" target=\"_blank\">Samsung Note 10 Plus 5G 256GB</a>&nbsp;Gi&aacute; chỉ c&ograve;n:&nbsp;<strong>9.480.000đ</strong>&nbsp;(Gi&aacute; ni&ecirc;m yết:&nbsp;<s>11.590.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"flash_sale_samsung_note_10_plus\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2021/flash_sale_samsung_note_10_plus.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-x-64gb-quoc-te-likenew\" target=\"_blank\">iPhone X 64GB</a>&nbsp;Gi&aacute; chỉ c&ograve;n:&nbsp;<strong>7.880.000đ</strong>&nbsp;(Gi&aacute; ni&ecirc;m yết:&nbsp;<s>9.990.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"Flash_sale_iphone_X\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2021/flash_sale_iphone_x.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-xs-max-64gb-quoc-te-likenew\" target=\"_blank\">iPhone Xs&nbsp;Max&nbsp;64GB</a>&nbsp; Gi&aacute; chỉ c&ograve;n:&nbsp;<strong>11.480.000đ</strong>&nbsp;(Gi&aacute; ni&ecirc;m yết:&nbsp;<s>13.590.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"Flash_sale_iphone_XS_A\" src=\"https://www.xtsmart.vn/vnt_upload/news/10_2021/Flash_sale_iphone_XS_A.jpg\" /></p>\r\n\r\n<p><strong>Ngoài mức giảm h&acirc;́p d&acirc;̃n khi mua đi&ecirc;̣n thoại, quý khách hàng còn nh&acirc;̣n được những ưu đãi h&acirc;́p d&acirc;̃n sau:</strong></p>\r\n\r\n<ul>\r\n	<li>Tặng combo voucher trị gi&aacute; l&ecirc;n đến&nbsp;<strong>3.000.000</strong>&nbsp;khi mua m&aacute;y</li>\r\n	<li>Tặng phiếu tham gia tr&uacute;ng thưởng iPhone 13 c&ugrave;ng nhiều phần qu&agrave; hấp dẫn kh&aacute;c tổng gi&aacute; trị l&ecirc;n đến&nbsp;<strong>50 triệu đồng</strong>.</li>\r\n	<li><strong>Giảm ngay 100k</strong>&nbsp;khi kh&aacute;ch check in tại cửa h&agrave;ng</li>\r\n	<li><strong>Tặng ngay phiếu mua h&agrave;ng 200k</strong>&nbsp;&aacute;p dụng cho kh&aacute;ch mua sạc dự ph&ograve;ng v&agrave; đồ chơi c&ocirc;ng nghệ</li>\r\n	<li>Tặng g&oacute;i bảo h&agrave;nh 6 th&aacute;ng - 1 đổi 1 trong v&ograve;ng 30 ng&agrave;y trị gi&aacute; 790k</li>\r\n	<li><strong>Giảm sốc 45%</strong>&nbsp;khi n&acirc;ng cấp g&oacute;i bảo h&agrave;nh vip 1 đổi 1 trong v&ograve;ng 12 th&aacute;ng&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>Ưu đãi khi n&acirc;ng c&acirc;́p gói bảo hành VIP:</strong></p>\r\n\r\n<ul>\r\n	<li>Tặng voucher bảo h&agrave;nh rơi vỡ 12 th&aacute;ng gi&aacute; trị l&ecirc;n đến hơn&nbsp;<strong>10.000.000đ</strong></li>\r\n	<li>Cơ hội mua Quạt Mipow ch&iacute;nh h&atilde;ng gi&aacute; chỉ 199k (Bảo h&agrave;nh l&ecirc;n đến 12 th&aacute;ng)</li>\r\n</ul>\r\n\r\n<p><strong>Một số lưu &yacute; cần nhớ:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>KH&Ocirc;NG</strong>&nbsp;&aacute;p dụng k&egrave;m voucher v&agrave; chương tr&igrave;nh khuyến m&atilde;i kh&aacute;c tại XTsmart</li>\r\n	<li>Hỗ trợ mua trả g&oacute;p 0%, trả trước 0Đ v&agrave; thu cũ l&ecirc;n đời iPhone, Samsung</li>\r\n</ul>\r\n\r\n<p>Mọi chi ti&ecirc;́t khách hàng có th&ecirc;̉ li&ecirc;n hệ ngay tổng đ&agrave;i tư vấn b&aacute;n h&agrave;ng&nbsp;<strong>1900 2063</strong>&nbsp;của XTsmart được h&ocirc;̃ trợ tư v&acirc;́n nhé!</p>\r\n', 0, '2021-11-24', 0),
(32, 11, 'ĐẶT TRƯỚC IPHONE 13 SERIES VN/A: TIẾT KIỆM LÊN ĐẾN 5 TRIỆU ĐỒNG', '243660802.png', '<h2><strong>D&ugrave; mới ra mắt nhưng loạt&nbsp;<a href=\"https://www.xtsmart.vn/iphone-13\" target=\"_blank\">iPhone 13</a>&nbsp;gần như đ&atilde; chiếm lĩnh thị trường c&ocirc;ng nghệ hiện tại. Đơn giản v&igrave; d&ograve;ng điện thoại sở hữu nhiều c&ocirc;ng nghệ h&agrave;ng đầu. Chưa hết, khi đặt trước iPhone 13 series tại LTsmart bạn c&ograve;n c&oacute; cơ hội mua si&ecirc;u phẩm với gi&aacute; si&ecirc;u ưu đ&atilde;i, giảm hơn 5&nbsp;triệu đồng.</strong></h2>\r\n\r\n<h3><strong>Th&ocirc;ng tin chương tr&igrave;nh</strong></h3>\r\n\r\n<ul>\r\n	<li>T&ecirc;n chương tr&igrave;nh:&nbsp;<strong>ĐẶT H&Agrave;NG DẾ XINH&nbsp;- AN T&Acirc;M CHỐNG DỊCH</strong></li>\r\n	<li>Thời gian đặt h&agrave;ng: từ ng&agrave;y&nbsp;<strong>7/10/2021</strong></li>\r\n	<li>Thời gian trả h&agrave;ng: bắt đầu từ ng&agrave;y&nbsp;<strong>22/10/2021</strong>, trả theo thứ tự</li>\r\n	<li>Điều kiện tham gia: Kh&aacute;ch h&agrave;ng để lại th&ocirc;ng tin v&agrave; SĐT, cọc trước&nbsp;<strong>500.000đ/ sản phẩm</strong></li>\r\n</ul>\r\n\r\n<p><strong>Qu&agrave; tặng d&agrave;nh cho 10 kh&aacute;ch cọc đầu ti&ecirc;n</strong></p>\r\n\r\n<ul>\r\n	<li>Trợ gi&aacute; đổi m&aacute;y l&ecirc;n đời</li>\r\n	<li>Combo voucher trị gi&aacute; 3.000.000đ&nbsp;sử dụng c&aacute;c dịch vụ tại cửa h&agrave;ng (mua phụ kiện, điện thoại, sửa chữa )</li>\r\n	<li>Tri &acirc;n giỏ qu&agrave; trị gi&aacute; 1.000.0000đ</li>\r\n</ul>\r\n\r\n<h3><strong>Th&ocirc;ng tin sản phẩm</strong></h3>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-128gb\" target=\"_blank\">iPhone 13 128GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>21.450.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-256gb\" target=\"_blank\">iPhone 13 256GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>24.050.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-512gb\" target=\"_blank\">iPhone 13 512GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>29.350.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-mini-128gb-chinh-hang-vna\" target=\"_blank\">iPhone 13 mini 128GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>18.550.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-mini-256gb-chinh-hang-vn-a\" target=\"_blank\">iPhone 13 mini 256GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>21.350.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-mini-512gb-chinh-hang-vn-a\" target=\"_blank\">iPhone 13 mini 512GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>26.650.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-pro-128gb\" target=\"_blank\">iPhone 13 Pro 128GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>26.850.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-pro-256gb\" target=\"_blank\">iPhone 13 Pro 256GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>29.650.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-pro-512gb\" target=\"_blank\">iPhone 13 Pro 512GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>35.050.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-pro-max-128gb\" target=\"_blank\">iPhone 13 Pro Max 128GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>29.850.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-pro-max-256gb\" target=\"_blank\">iPhone 13 Pro Max 256GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>32.350.000đ</strong></li>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-13-pro-max-512gb-chinh-hang-VN-A\" target=\"_blank\">iPhone 13 Pro Max 512GB</a>&nbsp;gi&aacute; chỉ c&ograve;n&nbsp;<strong>37.650.000đ</strong></li>\r\n</ul>\r\n\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n\r\n<ul>\r\n	<li>Đồng gi&aacute; cho tất cả c&aacute;c m&agrave;u sắc của d&ograve;ng iPhone 13</li>\r\n	<li><strong>Gi&aacute; c&oacute; thể sẽ thay đổi</strong>, LTsmart sẽ cập nhật thường xuy&ecirc;n tại website v&agrave; fanpage</li>\r\n	<li>Trước khi giao h&agrave;ng LTsmart sẽ li&ecirc;n hệ v&agrave; b&aacute;o gi&aacute; ch&iacute;nh thức cho kh&aacute;ch h&agrave;ng, nếu kh&ocirc;ng đồng &yacute; với gi&aacute; ch&iacute;nh thức kh&aacute;ch h&agrave;ng&nbsp;<strong>c&oacute; thể nhận lại tiền cọc.</strong></li>\r\n	<li>Hỗ trợ mua trả g&oacute;p 0%, trả trước 0Đ v&agrave; thu cũ l&ecirc;n đời iPhone</li>\r\n	<li><strong>KH&Ocirc;NG</strong>&nbsp;&aacute;p dụng k&egrave;m voucher v&agrave; chương tr&igrave;nh khuyến m&atilde;i kh&aacute;c tại LTsmart</li>\r\n</ul>\r\n\r\n<p>Li&ecirc;n hệ ngay tổng đ&agrave;i tư vấn b&aacute;n h&agrave;ng 1900 2063 hoặc 0901 963 222 của LTsmart nếu muốn biết chi tiết hơn về sản phẩm cũng như chương tr&igrave;nh khuyến m&atilde;i đang diễn ra nh&eacute;!</p>\r\n', 0, '2021-11-24', 0),
(33, 11, 'CƠ HỘI TRÚNG IPHONE 13 SÀNH ĐIỆU KHI MUA SẮM TẠI CỬA HÀNG XTSMART', '943855082.png', '<h2><strong>Cơ h&ocirc;̣i h&acirc;́p d&acirc;̃n trúng iPhone 13&nbsp;khi trải nghi&ecirc;̣m mua sắm tại h&ecirc;̣ th&ocirc;́ng cửa hàng LTsmart. Chương trình di&ecirc;̃n ra xuy&ecirc;n su&ocirc;́t đ&ecirc;́n h&ecirc;́t tháng 12, tại đ&acirc;y quý khách hàng sẽ nh&acirc;̣n được các ph&acirc;̀n quà có giá trị h&acirc;́p d&acirc;̃n.</strong></h2>\r\n\r\n<h3><strong>Th&ocirc;ng tin khuy&ecirc;́n mãi</strong></h3>\r\n\r\n<ul>\r\n	<li>T&ecirc;n chương trình:&nbsp;<strong>Sắm li&ecirc;̀n tay - Trúng ngay iPhone 13</strong></li>\r\n	<li>Thời gian áp dụng: từ ngày<strong>&nbsp;10/06 - 31/12/2021</strong></li>\r\n	<li>Hình thức tham gia: Tặng phi&ecirc;́u tham gia quay s&ocirc;́ trúng thưởng cho khách hàng khi mua sắm tại LTsmart.</li>\r\n	<li>Đ&ocirc;́i tượng áp dụng: T&acirc;́t cả khách hàng đ&ecirc;́n tham quan và mua sắm tại h&ecirc;̣ th&ocirc;́ng cửa hàng LTsmart.</li>\r\n</ul>\r\n\r\n<h3><strong>Cơ c&acirc;́u giải thưởng</strong></h3>\r\n\r\n<ul>\r\n	<li>Giải thưởng tu&acirc;̀n: Quý khách hàng sẽ nh&acirc;̣n được các ph&acirc;̀n quà trị giá đ&ecirc;́n 500.000đ</li>\r\n	<li>Giải thưởng tháng: Quý khách hàng sẽ nh&acirc;̣n được các ph&acirc;̀n quà trị giá đ&ecirc;́n 1.000.000đ</li>\r\n	<li>Giải thưởng quý: Cơ h&ocirc;̣i nh&acirc;̣n ngay 1 chi&ecirc;́c iPhone 13&nbsp;Full Box.</li>\r\n</ul>\r\n\r\n<h3><strong>Thời gian c&ocirc;ng b&ocirc;́ giải thưởng</strong></h3>\r\n\r\n<p><em>K&ecirc;́t quả trúng thưởng sẽ được&nbsp;<strong>c&ocirc;ng b&ocirc;́ vào 19h t&ocirc;́i&nbsp;</strong>các ngày như sau:</em></p>\r\n\r\n<ul>\r\n	<li>Giải&nbsp;thưởng tu&acirc;̀n sẽ được c&ocirc;ng b&ocirc;́ k&ecirc;́t quả chủ nh&acirc;̣t của m&ocirc;̃i tu&acirc;̀n (bắt đ&acirc;̀u từ ngày 20/06)</li>\r\n	<li>Giải thưởng tháng sẽ được c&ocirc;ng b&ocirc;́ k&ecirc;́t quả vào ngày 01 của các tháng 07,08,09,10,11 v&agrave; 12</li>\r\n	<li>Giải thưởng Quý sẽ được c&ocirc;ng b&ocirc;́ k&ecirc;́t quả vào ngày v&agrave;&nbsp;ngày 31/12/2021</li>\r\n</ul>\r\n\r\n<p>Khi đ&ecirc;́n trải nghi&ecirc;̣m mua sắm tại cửa hàng, quý khách sẽ nh&acirc;̣n được phi&ecirc;́u tham gia quay s&ocirc;́ may mắn:</p>\r\n\r\n<ul>\r\n	<li>Mua đi&ecirc;̣n thoại tại cửa hàng sẽ nh&acirc;̣n được 1 phi&ecirc;́u</li>\r\n	<li>Mua tr&ecirc;n 3 phụ ki&ecirc;̣n sẽ nh&acirc;̣n được 1 phi&ecirc;́u (t&ocirc;́i đa 2 phi&ecirc;́u)</li>\r\n	<li>Mua gói bảo hành vip được nh&acirc;̣n 1 phi&ecirc;́u</li>\r\n	<li>Khách hàng check in tại cửa hàng được nh&acirc;̣n 1 phi&ecirc;́u</li>\r\n</ul>\r\n\r\n<p>**Lưu ý:&nbsp;Mỗi kh&aacute;ch h&agrave;ng sẽ c&oacute; tối đa 5 phiếu đ&ecirc;̉&nbsp;tham gia quay số tr&uacute;ng thưởng</p>\r\n\r\n<p>Phi&ecirc;́u hợp l&ecirc;̣ là phi&ecirc;́u sẽ được đánh s&ocirc;́ thứ tự từ 1-2000 có t&ecirc;n và s&ocirc;́ đi&ecirc;̣n thoại của khách. Sau khi đi&ecirc;̀n đ&acirc;̀y đủ th&ocirc;ng tin, quý khách sẽ giao lại phi&ecirc;́u cho cửa hàng.&nbsp;Phiếu thứ tự tham gia tr&uacute;ng thưởng sẽ được đ&oacute;ng dấu chụp ảnh lưu lại tr&ecirc;n zalo của kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<ul>\r\n	<li>Trong ngày c&ocirc;ng b&ocirc;́ k&ecirc;́t quả trúng thưởng LTsmart sẽ&nbsp;livestream trực tiếp v&agrave; quay theo số tr&ecirc;n random.org đ&ecirc;̉ tìm ra khách hàng may mắn.&nbsp;</li>\r\n	<li>Sau khi trúng thưởng, khách hàng gửi hình ảnh đã lưu s&ocirc;́ thứ từ v&ecirc;̀ fanpage LTsmart đ&ecirc;̉ xác nh&acirc;̣n th&ocirc;ng tin và nh&acirc;̣n quà.</li>\r\n	<li>T&acirc;́t cả khách hàng đ&ecirc;̀u có cơ h&ocirc;̣i trúng giải tu&acirc;̀n, tháng và quý.&nbsp;</li>\r\n	<li>Kh&aacute;ch c&oacute; phiếu tham gia c&agrave;ng nhiều th&igrave; khả năng tr&uacute;ng tưởng iPhone 13&nbsp;sẽ c&agrave;ng cao.</li>\r\n</ul>\r\n\r\n<p>Mọi chi ti&ecirc;́t khách hàng có th&ecirc;̉&nbsp;li&ecirc;n hệ ngay<strong>&nbsp;tổng đ&agrave;i tư vấn b&aacute;n h&agrave;ng 1900 2063</strong>&nbsp;của LTsmart được h&ocirc;̃ trợ tư v&acirc;́n nhé!</p>\r\n', 0, '2021-11-24', 0),
(34, 11, 'SĂN DEAL XINH - SẮM DẾ XỊN: MUA ĐIỆN THOẠI GIẢM THÊM ĐẾN 3 TRIỆU ĐỒNG', '1629468697.png', '<h2><strong>Trợ giá mùa dịch, mua đi&ecirc;̣n thoại tại h&ecirc;̣ th&ocirc;́ng cửa hàng LTsmart quý khách hàng sẽ được giảm th&ecirc;m đ&ecirc;́n 3 tri&ecirc;̣u đ&ocirc;̀ng. Cùng với đó là những ưu đãi giá trị, cơ h&ocirc;̣i trúng iPhone 12 xịn xò.</strong></h2>\r\n\r\n<h3><strong>Th&ocirc;ng tin chương tr&igrave;nh:</strong></h3>\r\n\r\n<ul>\r\n	<li>T&ecirc;n chương tr&igrave;nh:<strong>&nbsp;Săn deal xinh - Sắm d&ecirc;́ xịn</strong></li>\r\n	<li>Thời gian &aacute;p dụng:&nbsp;<strong>29/06&nbsp;- 05//05/2021</strong></li>\r\n	<li>Phạm vi &aacute;p dụng: Tất cả c&aacute;c kh&aacute;ch h&agrave;ng mua iPhone trực tiếp tại 137 Nguyễn Thị Thập&nbsp; -Đ&agrave; Nẵng&nbsp;hoặc đặt online tr&ecirc;n Website LTsmart.vn.</li>\r\n</ul>\r\n\r\n<h3><strong>Sản phẩm khuyến m&atilde;i:</strong></h3>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.xtsmart.vn/iphone-7-plus-128gb-quoc-te-likenew\" target=\"_blank\">iPhone 7 Plus 128GB cũ</a>&nbsp;giá chỉ còn&nbsp;5.580.000đ&nbsp;(giá ni&ecirc;m y&ecirc;́t&nbsp;<s>7.580.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"Flash_sale_iphone_7_plush_1\" src=\"https://www.xtsmart.vn/vnt_upload/news/06_2021/flash_sale_iphone_7_plush_1.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.xtsmart.vn/iphone-8-plus-64gb-quoc-te-likenew\" target=\"_blank\">iPhone 8 Plus 64GB cũ</a>&nbsp;giá chỉ còn&nbsp;6.580.000đ&nbsp;(giá ni&ecirc;m y&ecirc;́t&nbsp;<s>8.580.000đ)</s></li>\r\n</ul>\r\n\r\n<p><img alt=\"Flash_sale_iphone_8_plush_1\" src=\"https://www.xtsmart.vn/vnt_upload/news/06_2021/flash_sale_iphone_8_plush_1.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-xr-128gb-quoc-te-likenew\" target=\"_blank\">iPhone Xr 128GB cũ&nbsp;</a>giá chỉ còn&nbsp;8.980.000đ&nbsp;(giá ni&ecirc;m y&ecirc;́t&nbsp;<s>11.980.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"Flash_sale_iphone_Xr_1\" src=\"https://www.xtsmart.vn/vnt_upload/news/06_2021/flash_sale_iphone_xr_1.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.xtsmart.vn/iphone-xs-256gb-quoc-te-likenew\" target=\"_blank\">iPhone Xs 256GB cũ</a>&nbsp;giá chỉ còn&nbsp;9.480.000đ&nbsp;(giá ni&ecirc;m y&ecirc;́t&nbsp;<s>12.480.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"flash_sale_iphone_xs_1\" src=\"https://www.xtsmart.vn/vnt_upload/news/06_2021/flash_sale_iphone_xs_1.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/iphone-11-128gb-quoc-te-likenew\" target=\"_blank\">iPhone 11&nbsp;128GB cũ</a>&nbsp;giá chỉ còn&nbsp;14.280.000đ&nbsp;(giá ni&ecirc;m y&ecirc;́t&nbsp;<s>16.280.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"flash_sale_iphone_11_1\" src=\"https://www.xtsmart.vn/vnt_upload/news/06_2021/flash_sale_iphone_11_1.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/samsung-galaxy-s10-5g-8gb-256gb-likenew-han-quoc\" target=\"_blank\">Galaxy S10 5G 256GB cũ</a>&nbsp;giảm chỉ còn&nbsp;6.980.000đ&nbsp;(giá ni&ecirc;m y&ecirc;́t&nbsp;<s>8.980.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"flash_sale_samsung_s10_5g\" src=\"https://www.xtsmart.vn/vnt_upload/news/06_2021/flash_sale_samsung_s10_5g.jpg\" /></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.xtsmart.vn/samsung-galaxy-note-10-5g-256gb-likenew-han-quoc\" target=\"_blank\">Galaxy Note 10&nbsp;5G 256GB cũ</a>&nbsp;giảm chỉ còn&nbsp;8.680.000đ&nbsp;(giá ni&ecirc;m y&ecirc;́t&nbsp;<s>10.680.000đ</s>)</li>\r\n</ul>\r\n\r\n<p><img alt=\"Flash_sale_samsung_note_10_plus\" src=\"https://www.xtsmart.vn/vnt_upload/news/06_2021/flash_sale_samsung_note_10_plus.jpg\" /></p>\r\n\r\n<p>Ngoài mức giảm h&acirc;́p d&acirc;̃n khi mua đi&ecirc;̣n thoại, quý khách hàng còn nh&acirc;̣n được những ưu đãi h&acirc;́p d&acirc;̃n sau:</p>\r\n\r\n<ul>\r\n	<li>Tặng th&ecirc;m voucher trị gi&aacute; đến 3.000.000đ khi mua m&aacute;y</li>\r\n	<li>Tặng phi&ecirc;́u mua hàng 200.000đ (áp dụng mua sạc dự phòng&nbsp;INNOSTYLE POWER GO II SMART AI 20000mAh)</li>\r\n	<li>Tặng phi&ecirc;́u tham gia chương trình trúng iPhone 12 tại cửa hàng</li>\r\n	<li>Tặng gói bảo hành 6 tháng 1 đ&ocirc;̉i 1 trong 30 ngày trị giá 790K</li>\r\n	<li>Giảm th&ecirc;m 45% khi n&acirc;ng c&acirc;́p gói bảo hành vip, 1 đ&ocirc;́i 1 12 tháng</li>\r\n</ul>\r\n\r\n<p><em><strong>Ưu đãi khi n&acirc;ng c&acirc;́p gói bảo hành VIP:</strong></em></p>\r\n\r\n<ul>\r\n	<li>Tặng voucher bảo h&agrave;nh rơi vỡ 12 th&aacute;ng trị gi&aacute; l&ecirc;n đến hơn 10.000.000đ</li>\r\n	<li>Cơ h&ocirc;̣i mua pin dự phòng Innostyle chính hãng giá chỉ 279.000đ (bảo h&agrave;nh l&ecirc;n đến 24 th&aacute;ng)</li>\r\n</ul>\r\n\r\n<h3><strong>Một số lưu &yacute; cần nhớ:</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>KH&Ocirc;NG</strong>&nbsp;&aacute;p dụng k&egrave;m voucher v&agrave; chương tr&igrave;nh khuyến m&atilde;i kh&aacute;c tại LTsmart</li>\r\n	<li>Hỗ trợ mua trả g&oacute;p 0%, trả trước 0Đ v&agrave; thu cũ l&ecirc;n đời iPhone</li>\r\n	<li>\r\n	<p>Mọi chi ti&ecirc;́t khách hàng có th&ecirc;̉&nbsp;li&ecirc;n hệ ngay<strong>&nbsp;tổng đ&agrave;i tư vấn b&aacute;n h&agrave;ng 1900 2063</strong>&nbsp;của LTsmart được h&ocirc;̃ trợ tư v&acirc;́n nhé!</p>\r\n	</li>\r\n</ul>\r\n', 0, '2021-11-24', 0);

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
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan_pro`
--

INSERT INTO `binh_luan_pro` (`id_bl_pro`, `id_kh`, `id_sp`, `noi_dung`, `ngay_bl`) VALUES
(16, 14, 109, '  Iphone 13 256 Gb còn màu  hồng không shop ?                              ', '2021-11-25'),
(17, 14, 109, 'sản phẩm rất chất lượng , cảm ơn shop', '2021-11-25'),
(19, 14, 109, '                      s          ', '2021-11-25'),
(20, 14, 109, '                                ', '2021-11-25'),
(21, 14, 109, '                                s', '2021-11-25'),
(29, 13, 110, '    sản phẩm này còn hàng không v shop?                          ', '2021-11-26'),
(30, 13, 103, 'sản phẩm này còn không                                ', '2021-11-26'),
(31, 13, 103, '    OK shop                            ', '2021-11-26');

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
(44, 108, '6.1\", Super Retina XDR, OLED, 2532 x 1170 Pixel', '2.0 MP + 12.0 MP + 12.0 MP', '12.0 MP', 6, 128, 'A14 Bionic', 2815, '2, 1 eSIM, 1 Nano SI', 'iOS 14', 'Trung Quốc'),
(45, 109, '6.1\" Super Retina XDR', '2 camera 12 MP', '12 MP', 6, 256, 'Apple A15 Bionic', 309520, '	1 Nano SIM & 1 eSIM', 'IOS 15', ''),
(46, 110, 'Dynamic AMOLED 2X6.7\"Quad HD+ (2K+)', '10 MP', '	Chính 12 MP & Phụ 6', 8, 128, 'Exynos 990', 4500, '2 Nano SIM hoặc 1 Na', 'Android 10', ''),
(47, 111, '	Dynamic AMOLED 6,8 inch 1440 x 3040 pixels', 'Chính 12 MP & Phụ 12 MP, 16 MP, TOF 3D', '10', 12, 256, 'Snapdragon 855 (7 nm', 4300, '	Nano SIM', 'Android 9', ''),
(48, 115, 'AMOLED6.67\"Full HD+', 'Chính 48 MP & Phụ 8 MP, 5 MP', '20MP', 6, 128, '	Snapdragon 870', 4520, '	2 Nano SIMHỗ trợ 5G', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_news`
--

CREATE TABLE `danh_muc_news` (
  `id_dm_news` int(11) NOT NULL,
  `ten_dm_news` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_news`
--

INSERT INTO `danh_muc_news` (`id_dm_news`, `ten_dm_news`) VALUES
(9, 'Đánh giá và trải nghiệm'),
(14, 'Game'),
(12, 'Hoạt động của cửa hàng'),
(11, 'Khuyến mãi'),
(10, 'Thủ thuật'),
(7, 'Tin công nghệ');

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
(76, 103, 32, 5000000),
(78, 108, 128, 27400000),
(79, 108, 256, 29000000),
(80, 109, 256, 25190000),
(82, 110, 128, 16890000),
(84, 111, 256, 13720000),
(86, 115, 128, 9900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giam_gia`
--

CREATE TABLE `giam_gia` (
  `id_giam_gia` int(11) NOT NULL,
  `id_khuyen_mai` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_loai_giam_gia_tien` int(11) NOT NULL,
  `muc_giam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giam_gia`
--

INSERT INTO `giam_gia` (`id_giam_gia`, `id_khuyen_mai`, `id_sp`, `id_loai_giam_gia_tien`, `muc_giam`) VALUES
(26, 18, 115, 2, 100000),
(28, 18, 113, 2, 100000),
(29, 18, 112, 2, 100000),
(30, 18, 103, 2, 500000),
(31, 18, 108, 2, 500000),
(32, 18, 115, 2, 500000),
(33, 18, 113, 2, 500000),
(34, 18, 112, 2, 500000),
(35, 20, 110, 1, 2),
(36, 21, 114, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hoa_don` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `tinh_trang_thanh_toan` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nếu hình thức thanh toán là 0 thì trạng thái là chuathanhtoan ,nếu là 1 thì trạng thái dathanhtoan',
  `trang_thai_don_hang` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mặc định là đơn hàng chưa xác nhận ,khi admin vào duyệt thì đổi trạng thái đơn hàng',
  `hinh_thuc_thanh_toan` int(1) NOT NULL DEFAULT 0 COMMENT '0 là thanh toán khi nhận hàng , 1 là thanh toán Online',
  `tong_tien` int(11) NOT NULL,
  `ngay_dat_hang` date NOT NULL,
  `ngay_giao_hang` date NOT NULL,
  `khuyen_mai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id_hoa_don`, `id_kh`, `tinh_trang_thanh_toan`, `trang_thai_don_hang`, `hinh_thuc_thanh_toan`, `tong_tien`, `ngay_dat_hang`, `ngay_giao_hang`, `khuyen_mai`) VALUES
(7, 13, 'chuathanhtoan', 'chuaxacnhan', 0, 55180000, '2021-11-29', '0000-00-00', '200000'),
(15, 13, 'chuathanhtoan', 'chuaxacnhan', 0, 24990000, '2021-11-30', '0000-00-00', '200000'),
(16, 13, 'chuathanhtoan', 'chuaxacnhan', 0, 9700000, '2021-11-30', '0000-00-00', '200000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `id_hoa_don_chi_tiet` int(11) NOT NULL,
  `id_hoa_don` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong_mua` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `mau_sac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dung_luong` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giam_gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`id_hoa_don_chi_tiet`, `id_hoa_don`, `id_sp`, `so_luong_mua`, `don_gia`, `mau_sac`, `dung_luong`, `giam_gia`) VALUES
(3, 7, 109, 2, 25190000, 'Trắng/Đỏ', '256', ''),
(4, 7, 103, 1, 5000000, 'Vàng', '32', ''),
(12, 15, 109, 1, 25190000, 'Trắng', '256', ''),
(13, 16, 115, 1, 9900000, 'Trắng', '128', '');

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
(85, 108, '80_iphone_12_pro_max_trang_1.png'),
(86, 108, '600_iphone_12_pro_max_vang_1.png'),
(87, 108, '600_iphone_12_pro_max_xam_1.png'),
(88, 108, '600_iphone_12_pro_max_xanh_1.png'),
(89, 109, '600_iphone_13_den_dem_muon_3.png'),
(90, 109, '600_iphone_13_do_3.png'),
(91, 109, '600_iphone_13_hong_3.png'),
(92, 109, '600_iphone_13_trang_anh_sao_3.png'),
(93, 109, '600_iphone_13_xanh_duong_3.png'),
(94, 111, 'galaxy_note_10_plus_den_2.png'),
(95, 111, 'galaxy_note_10_plus_do_3.png'),
(96, 111, 'galaxy_note_10_plus_gradian_3.png'),
(97, 111, 'galaxy_note_10_plus_hong_2.png'),
(98, 111, 'galaxy_note_10_plus_xanh_2.png'),
(99, 115, '600_Xiaomi_Poco_F3_Xanh.png'),
(100, 115, 'Xiaomi_Poco_F3_Den.png'),
(101, 115, 'Xiaomi_Poco_F3_Trang.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `so_dien_thoai` varchar(10) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `vai_tro` int(1) NOT NULL DEFAULT 0 COMMENT '0 là tài khoản khách hàng ,1 là quản trị viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `username`, `mat_khau`, `ho_ten`, `hinh_anh`, `so_dien_thoai`, `email`, `dia_chi`, `vai_tro`) VALUES
(13, 'longdv', '12345678', 'Long Đoàn', '512754276.jpg', '0378854216', 'longlongdoan1998@gmail.com', '214 Âu Cơ - Hoà Khánh Bắc - Liên Chiểu - Tp Đà Nẵng', 1),
(14, 'thangpham', '12345678', 'Thắng Phạm', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(11) NOT NULL,
  `ten_chuong_trinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_loai_khuyen_mai` int(11) NOT NULL,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime NOT NULL,
  `so_luot_su_dung` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL COMMENT '1 là đang diễn ra ,0 là đã kết thúc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ten_chuong_trinh`, `id_loai_khuyen_mai`, `ngay_bat_dau`, `ngay_ket_thuc`, `so_luot_su_dung`, `tinh_trang`) VALUES
(18, 'Giảm giá 500k', 1, '2021-12-02 19:40:00', '2021-12-13 20:13:00', 50, 1),
(20, 'Giam gia', 1, '2021-12-02 20:14:00', '2021-12-02 20:16:00', 21, 0),
(21, '2', 1, '2021-12-05 20:18:00', '2021-12-02 20:18:22', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_giam_gia_tien`
--

CREATE TABLE `loai_giam_gia_tien` (
  `id_loai_giam_gia_tien` int(11) NOT NULL,
  `ten_loai_giam_gia_tien` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_giam_gia_tien`
--

INSERT INTO `loai_giam_gia_tien` (`id_loai_giam_gia_tien`, `ten_loai_giam_gia_tien`) VALUES
(1, 'Giảm giá theo %'),
(2, 'Giảm giá theo số tiền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_khuyen_mai`
--

CREATE TABLE `loai_khuyen_mai` (
  `id_loai_khuyen_mai` int(11) NOT NULL,
  `ten_loai_khuyen_mai` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_khuyen_mai`
--

INSERT INTO `loai_khuyen_mai` (`id_loai_khuyen_mai`, `ten_loai_khuyen_mai`) VALUES
(1, 'Giảm giá sản phẩm'),
(2, 'Mã giảm giá'),
(3, 'Mua kèm deal sốc');

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
(121, 103, 'Vàng', '1832599755.jpg'),
(123, 108, 'Trắng', '101958767.png'),
(124, 108, 'Xanh', '600_iphone_12_pro_max_xanh_1.png'),
(125, 108, 'Đen ', '600_iphone_12_pro_max_xam_1.png'),
(126, 108, 'Vàng', '600_iphone_12_pro_max_vang_1.png'),
(127, 109, 'Trắng', '1126825242.png'),
(128, 109, 'Hồng', '600_iphone_13_hong_3.png'),
(129, 109, 'Đỏ', '600_iphone_13_do_3.png'),
(130, 109, 'Đen bóng ', '600_iphone_13_den_dem_muon_3.png'),
(131, 109, 'Xanh dương', '600_iphone_13_xanh_duong_3.png'),
(132, 110, 'Tím', '1307321390.png'),
(134, 111, 'Navy', '943036231.png'),
(135, 111, 'Hồng', 'galaxy_note_10_plus_hong_2.png'),
(136, 111, 'Đỏ', 'galaxy_note_10_plus_do_3.png'),
(137, 111, 'Trắng', '600_galaxy_note_10_plus_trang_2.png'),
(138, 111, 'Đen ', '600_galaxy_note_10_plus_den_2.png'),
(139, 115, 'Trắng', '620415731.png'),
(140, 115, 'Đen', 'Xiaomi_Poco_F3_Den.png'),
(141, 115, 'Xanh', '600_Xiaomi_Poco_F3_Xanh.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating_sp`
--

CREATE TABLE `rating_sp` (
  `id_rating` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `rating` int(5) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_rating` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rating_sp`
--

INSERT INTO `rating_sp` (`id_rating`, `id_sp`, `id_kh`, `rating`, `noi_dung`, `ngay_rating`) VALUES
(59, 109, 14, 5, '             Tuyệt vời                   ', '2021-11-25'),
(60, 109, 13, 4, 'Sản phẩm rất đẹp                  ', '2021-11-25'),
(61, 110, 13, 4, ' Sản phấm chất lượng                               ', '2021-11-26'),
(62, 103, 13, 4, '                                ', '2021-11-26'),
(63, 113, 13, 2, '                                ', '2021-11-26'),
(66, 113, 13, 5, '                                ', '2021-11-26'),
(67, 113, 13, 5, '                                ', '2021-11-26'),
(68, 113, 13, 1, '                                ', '2021-11-26'),
(69, 113, 13, 1, '                                ', '2021-11-26'),
(70, 113, 13, 1, '                                ', '2021-11-26'),
(71, 113, 13, 1, '                                ', '2021-11-26'),
(72, 113, 13, 1, '                                ', '2021-11-26'),
(73, 113, 13, 1, '                                ', '2021-11-26'),
(74, 113, 13, 1, '                                ', '2021-11-26'),
(75, 113, 13, 5, '                                ', '2021-11-26'),
(76, 103, 13, 1, '                                ', '2021-11-26'),
(77, 103, 13, 5, '                                ', '2021-11-26'),
(78, 103, 13, 5, '                                ', '2021-11-26'),
(79, 103, 13, 5, '                                ', '2021-11-26'),
(80, 103, 13, 5, '               s                 ', '2021-11-26'),
(81, 103, 13, 3, '                                ', '2021-11-26'),
(82, 103, 13, 1, '                                ', '2021-11-26'),
(83, 103, 13, 5, '                                ', '2021-11-26'),
(84, 103, 13, 5, '                                ', '2021-11-26'),
(90, 103, 13, 3, '                                ', '2021-11-27'),
(107, 111, 13, 4, '                                ', '2021-11-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply_binh_luan_pro`
--

CREATE TABLE `reply_binh_luan_pro` (
  `id_reply` int(11) NOT NULL,
  `id_bl_pro` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_reply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reply_binh_luan_pro`
--

INSERT INTO `reply_binh_luan_pro` (`id_reply`, `id_bl_pro`, `id_kh`, `noi_dung`, `ngay_reply`) VALUES
(22, 16, 13, ' Hiện tại cửa hàng vẫn còn nha bạn ?\r\nA/e quan tâm vui lòng để số điện thoại shop sẽ gọi cho bạn trong thời gian sơm nhất .                             ', '2021-11-25'),
(29, 17, 14, '                           sss     ', '2021-11-25'),
(30, 19, 14, '       s                         ', '2021-11-25'),
(31, 19, 14, '           ss                     ', '2021-11-25'),
(32, 19, 14, '                   sssssssssssssssssssss             ', '2021-11-25'),
(33, 20, 14, '                                s', '2021-11-25'),
(34, 20, 14, '            s                    ', '2021-11-25'),
(35, 19, 14, '                 sản phẩm ok đó               ', '2021-11-25'),
(36, 21, 14, '                        sao rồi        ', '2021-11-25');

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
(103, 47, 47, 'iPhone 7 Plus 256GB Quốc Tế (Likenew)', '1832599755.jpg', 5000000, 21, '2021-11-22', '<h2>Đánh giá chi tiết iPhone 7 Plus 256GB Quốc Tế (Likenew)</h2>\r\n\r\n<h2><strong><a href=\"https://www.xtsmart.vn/iphone-7-plus-256gb-quoc-te-likenew-\" target=\"_blank\">iPhone 7 Plus 256GB cũ</a> là một trong những điện thoại đáng mua nhất hiện nay. Bởi thiết bị không chỉ mang đến mức giá hấp dẫn cho người dùng mà còn đảm bảo hiệu năng ổn định, thiết kế sang trọng bền bỉ. </strong></h2>\r\n\r\n<h3><strong>Thiết kế truyền thống, tinh tế</strong></h3>\r\n\r\n<p>Thiết kế iPhone 7 Plus 256GB cũ mang đến sự chắc chắn và bền bỉ cao cho người dùng. Apple đã sử dụng chất liệu cao cấp dành cho flagship của mình với khung kim loại nguyên khối kết hợp với mặt kính Ion-strengthened Glass ở mặt trước. Điều này giúp mặt trước có khả năng chống va đập và hạn chế trầy xước tốt hơn.</p>\r\n\r\n<p><img alt=\"Thiết kế iPhone 7 Plus 256GB cũ mang đến sự chắc chắn\" src=\"https://www.xtsmart.vn/vnt_upload/product/08_2020/thiet-ke-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Bên cạnh đó Apple cũng đã tích hợp công nghệ kháng nước IP 67 cho iPhone 7 Plus. Với tính năng này máy có thể sống sót tốt ở độ sâu 1m trong thời gian 30 phút. Các góc cạnh trên máy được bo cong mềm mại mang đến cảm giác cầm nắm tốt hơn, đồng thời mặt lưng máy cũng được Apple tinh chỉnh thông thoáng hơn khi di chuyển dải ăng-ten lên 2 cạnh viền trên và dưới.</p>\r\n\r\n<p>Trên điện thoại iPhone 7 Plus 256GB cũ cũng đã loại bỏ jack cắm tai nghe 3.5mm và  phím home ảo được thiết kế dạng button. Đây là một trong những tính năng khiến người dùng tiếc nuối. Mua iPhone 7 Plus 256GB cũ bạn sẽ được trải nghiệm màn hình lớn với kích thước 5.5 inch, trên tấm nền IPS LCD với độ phân giải 1080x1920 Pixels, tỉ lệ 16:9.</p>\r\n\r\n<p><img alt=\"Mua iPhone 7 Plus 256GB được trang bị màn hình 5.5 inch\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/man-hinh-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Chất lượng hiển thị được đánh giá cao, mang lại màu sắc rực rỡ, độ chi tiết cao và độ tương phản đạt 1398:1. Thậm chí điện thoại hoàn toàn có khả năng hiển thị tốt ở ngoài trời nhờ độ sáng tối đa lên đến 600 nits.</p>\r\n\r\n<h3><strong>Cấu hình là điều mà Apple tự hào</strong></h3>\r\n\r\n<p>Hiệu năng trên điện thoại là một trong những thế mạnh giúp Apple có thể đánh bại các đối thủ hiện nay. Trải qua bao nhiêu năm đi nữa thì hiệu suất hoạt động trên các model iPhone vẫn rất ổn định. Cấu hình iPhone 7 256GB cũ được tích hợp chipset Apple A10 Fusion 4 lõi sản xuất trên tiến trình 16nm.</p>\r\n\r\n<p><img alt=\"Cấu hình iPhone 7 256GB cũ được tích hợp chipset Apple A10 Fusion\" src=\"https://www.xtsmart.vn/vnt_upload/product/08_2020/cau-hinh-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Với con chip mạnh mẽ này mang đến tốc độ xử lý các tác vụ hàng ngày một cách nhanh nhẹn và mượt mà. Chưa hết khả năng đa nhiệm cũng được đánh giá cao nhờ sự hỗ trợ của bộ nhớ lưu trữ tương đối lớn với RAM 3GB và ROM 256GB. Điện thoại hoàn toàn dư sức đáp ứng tốt các tựa game đồ họa nặng nhất hiện nay nhờ GPU PowerVR Series7XT Plus 6 lõi.</p>\r\n\r\n<h3><strong>Điện thoại đầu tiên sở hữu camera kép</strong></h3>\r\n\r\n<p>Camera iPhone 7 Plus 256GB được trang bị 2 ống kính đặt góc trên bên trái điện thoại. Hệ thống camera có cùng độ phân giải 12MP mang đến khả năng chụp ảnh ấn tượng. Bên cạnh đó Apple cũng đã bổ sung thêm một số tính năng mới giúp chất lượng hình ảnh được hoàn thiện hơn như: Lấy nét tự động, chống rung quang học OIS, zoom quang học 2x...</p>\r\n\r\n<p><img alt=\"Camera iPhone 7 Plus 256GB được trang bị 2 ống kính \" src=\"https://www.xtsmart.vn/vnt_upload/product/08_2020/camera-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>So với thế hệ tiền nhiệm thì camera trên iPhone 7 Plus 256GB cũ mang đến chất lượng chụp ảnh đêm tốt hơn nhờ sự hỗ trợ của đèn LED, hình ảnh ít nhiễu và dễ dàng kiểm soát hơn. Trong khi đó camera trước máy có độ phân giải 7MP cũng được hỗ trợ nhiều tính năng hấp dẫn nhằm phục vụ tốt nhu cầu chụp ảnh tự sướng.</p>\r\n\r\n<h3><strong>Thời lượng pin được cải thiện</strong></h3>\r\n\r\n<p>Dung lượng pin 2.900 mAh trên iPhone 7 Plus 256GB cũ được xem là một cải thiện lớn so với thế hệ iPhone cũ. Cùng với đó kết hợp với chipset tiết kiệm điện năng đã mang đến thời lượng sử dụng tốt hơn trên iPhone 7 Plus, máy có thể đáp ứng hơn 1 ngày đối với người dùng sử dụng ở cường độ bình thường. </p>\r\n\r\n<p><img alt=\"Thời lượng pin trên iPhone 7 256GB cũ được cải thiện\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/thoi-luong-pin-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<h3><strong>Mua iPhone 7 Plus 256GB cũ tại XTsmart</strong></h3>\r\n\r\n<p>Mua iPhone 7 Plus 256GB cũ tại XTsmart hoàn toàn yên tâm về chất lượng thông qua các chính sách bảo hành và hậu mãi cực tốt. Đối với máy cũ sẽ được bảo hành 6 tháng, bảo hành 1 đổi 1 trong 30 ngày. Bên cạnh đó, tại cửa hàng còn hỗ trợ mua iPhone 7 Plus 256GB cũ trả góp 0%, thu cũ lên đời máy mới không bù tiền...</p>\r\n', 487),
(104, 48, 48, 'Tai nghe có dây choàng đầu có mic i.value T-139', '1054568922.jpg', 239000, 22, '2021-11-22', '', 1),
(108, 47, 47, 'iPhone 12 Pro 128GB', '101958767.png', 27400000, 21, '2021-11-22', '<h2>Đặc điểm nổi bật của&nbsp;iPhone 12 Pro</h2>\r\n\r\n<p><img alt=\"iPhone 12 Pro 256GB\" src=\"https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2021/5/24/637574720778410065_iphone-12-pro-dung-luong-128gb.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Đ&aacute;nh gi&aacute; chi tiết&nbsp;iPhone 12 Pro</h2>\r\n\r\n<p><strong>Đến với đẳng cấp Pro đ&iacute;ch thực, nơi m&agrave; những điều đặc biệt đang chờ đ&oacute;n bạn tr&ecirc;n&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-12-pro\">iPhone 12 Pro</a>. Từ hệ thống camera Pro chụp thiếu s&aacute;ng cực đỉnh, kết nối 5G si&ecirc;u tốc cho đến bộ vi xử l&yacute; A14 Bionic nhanh nhất thế giới smartphone, vẫn c&ograve;n nhiều bất ngờ kh&aacute;c để bạn kh&aacute;m ph&aacute;.</strong></p>\r\n\r\n<p><strong><img alt=\"Điện thoại iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-1.jpg\" /></strong></p>\r\n\r\n<h3><strong>Viền m&agrave;n h&igrave;nh mỏng hơn, m&agrave;n h&igrave;nh lớn hơn</strong></h3>\r\n\r\n<p>Nhờ viền m&agrave;n h&igrave;nh mỏng hơn, iPhone 12 Pro đ&atilde; c&oacute; thể trang bị một m&agrave;n h&igrave;nh lớn hơn, nhưng k&iacute;ch thước vẫn nhỏ gọn tương tự&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-11-pro-64gb\">iPhone 11 Pro</a>. Giờ đ&acirc;y bạn sẽ c&oacute; m&agrave;n h&igrave;nh lớn tới 6,1 inch, để trải nghiệm được nhiều hơn.</p>\r\n\r\n<p>Ấn tượng hơn nữa, m&agrave;n h&igrave;nh iPhone 12 Pro si&ecirc;u sắc n&eacute;t với c&ocirc;ng nghệ Super Retina XDR. Tấm nền OLED mang tới h&igrave;nh ảnh trong trẻo, m&agrave;u sắc ch&iacute;nh x&aacute;c, độ tương phản l&ecirc;n tới 2.000.000:1, độ s&aacute;ng tối đa 1200 nits. C&aacute;c c&ocirc;ng nghệ kh&aacute;c như HDR hay True Tone khiến cho chất lượng hiển thị của iPhone 12 Pro th&ecirc;m phần ho&agrave;n hảo.</p>\r\n\r\n<p><img alt=\"màn hình iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-10.jpg\" /></p>\r\n\r\n<h3><strong>Mặt k&iacute;nh m&agrave;n h&igrave;nh bền nhất thế giới smartphone</strong></h3>\r\n\r\n<p>Apple đ&atilde; đưa c&ocirc;ng nghệ bảo vệ m&agrave;n h&igrave;nh phủ gốm Ceramic Shield l&ecirc;n iPhone 12 Pro. C&aacute;c tinh thể gốm nano cứng hơn cả kim loại v&agrave; k&iacute;nh được đưa v&agrave;o tấm k&iacute;nh m&agrave;n h&igrave;nh, mang tới độ bền cũng như khả năng chống xước tuyệt vời. Kết quả l&agrave; m&agrave;n h&igrave;nh iPhone 12 Pro sẽ bền hơn tới 4 lần trong thử nghiệm thả rơi. Nguy cơ bị vỡ m&agrave;n h&igrave;nh của bạn sẽ giảm đi rất nhiều với Ceramic Shield.</p>\r\n\r\n<p><img alt=\"mặt kính iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-3.jpg\" /></p>\r\n\r\n<h3><strong>T&aacute;c phẩm nghệ thuật đ&iacute;ch thực</strong></h3>\r\n\r\n<p>iPhone 12 Pro đ&atilde; đạt đến tầm tinh xảo thượng thừa trong thiết kế. Bạn sẽ c&oacute; một chiếc điện thoại viền th&eacute;p kh&ocirc;ng gỉ đặc biệt sang trọng v&agrave; cứng c&aacute;p. Phần viền th&eacute;p được l&agrave;m phẳng, vu&ocirc;ng vắn với những đường cắt kim cương s&aacute;ng b&oacute;ng tạo n&ecirc;n vẻ ngo&agrave;i cao cấp, xứng tầm t&aacute;c phẩm nghệ thuật.</p>\r\n\r\n<p>Sẽ c&oacute; 4 m&agrave;u sắc để bạn lựa chọn l&agrave; Bạc, X&aacute;m than ch&igrave;, V&agrave;ng v&agrave; Xanh đại dương. Cả 4 m&agrave;u sắc n&agrave;y đều rất đẳng cấp v&agrave; tạo phong th&aacute;i ri&ecirc;ng cho người d&ugrave;ng.</p>\r\n\r\n<p><img alt=\"thiết kế iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-2.jpg\" /></p>\r\n\r\n<h3><strong>Đ&aacute;nh bật nỗi lo v&agrave;o nước</strong></h3>\r\n\r\n<p>Chuẩn chống nước IP68 tr&ecirc;n iPhone 12 Pro mang tới khả năng chống nước h&agrave;ng đầu trong ng&agrave;nh smartphone. Bạn c&oacute; thể ng&acirc;m nước ở độ s&acirc;u l&ecirc;n đến 6m trong v&ograve;ng 30 ph&uacute;t m&agrave; kh&ocirc;ng ảnh hưởng g&igrave; đến điện thoại. Gần như to&agrave;n bộ mối nguy hại từ nước đều được miễn nhiễm bởi iPhone 12 Pro.</p>\r\n\r\n<p><img alt=\"chống nước iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-8.jpg\" /></p>\r\n\r\n<h3><strong>C&ocirc;ng nghệ&nbsp;5G si&ecirc;u&nbsp;tốc độ</strong></h3>\r\n\r\n<p>Kết nối 5G gi&uacute;p cho iPhone 12 Pro trở th&agrave;nh thiết bị ho&agrave;n hảo để v&agrave;o mạng. Giờ đ&acirc;y bạn c&oacute; thể tải xuống những tệp tin lớn, xem phim HDR chất lượng cao, chơi game online si&ecirc;u mượt, kh&ocirc;ng hề c&oacute; bất cứ hiện tượng lag giật nhỏ n&agrave;o. iPhone 12 Pro cũng l&agrave; chiếc điện thoại c&oacute; băng tần 5G lớn nhất hiện nay, mở ra một tương lai mới cho tốc độ Internet.</p>\r\n\r\n<p><img alt=\"5G iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-9.jpg\" /></p>\r\n\r\n<h3><strong>Hiệu năng đỉnh cao với Apple A14 Bionic</strong></h3>\r\n\r\n<p>Cho đến trước khi&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-12\">iPhone 12</a>, iPhone 12 Pro v&agrave;&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-12-pro-max\">iPhone 12 Pro Max</a>&nbsp;xuất hiện, Apple A13 Bionic của iPhone 11 Pro vẫn l&agrave; con chip mạnh nhất thế giới smartphone. Nhưng sự c&oacute; mặt của&nbsp;<a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/tat-tan-tat-ve-chip-apple-a14-trai-tim-se-lam-nen-suc-manh-cho-iphone-12-121314\">Apple A14 Bionic</a>&nbsp;đ&iacute;ch thực l&agrave; một &ldquo;vụ nổ&rdquo; với loạt n&acirc;ng cấp v&agrave; c&ocirc;ng nghệ mới đ&aacute;ng gi&aacute;. Đ&acirc;y l&agrave; con chip sản xuất tr&ecirc;n tiến tr&igrave;nh 5nm đầu ti&ecirc;n, tăng tới 40% số lượng b&oacute;ng b&aacute;n dẫn, cho hiệu suất vượt trội v&agrave; thời lượng pin tuyệt vời.</p>\r\n\r\n<p>Hơn thế nữa, Apple A14 Bionic c&ograve;n t&iacute;ch hợp chip xử l&yacute; h&igrave;nh ảnh ISP mới, cho t&iacute;nh năng quay video Dolby Vision, t&iacute;nh năng m&agrave; nhiều m&aacute;y quay phim chuy&ecirc;n nghiệp c&ograve;n kh&ocirc;ng l&agrave;m được.</p>\r\n\r\n<p><img alt=\"vi xử lý iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-7.jpg\" /></p>\r\n\r\n<h3><strong>M&aacute;y qu&eacute;t LiDAR, tương lai của thực tế tăng cường AR</strong></h3>\r\n\r\n<p>LiDAR l&agrave; c&ocirc;ng nghệ đang được NASA sử dụng trong ng&agrave;nh h&agrave;ng kh&ocirc;ng vũ trụ. Với m&aacute;y qu&eacute;t LiDAR, iPhone 12 Pro c&oacute; thể đo khoảng thời gian &aacute;nh s&aacute;ng phản xạ lại từ c&aacute;c vật thể để tạo ra bản đồ chiều s&acirc;u của bất cứ vật thể n&agrave;o trong kh&ocirc;ng gian.</p>\r\n\r\n<p>Tốc độ cực nhanh v&agrave; ch&iacute;nh x&aacute;c gi&uacute;p bạn c&oacute; thể t&aacute;i hiện cả một khu rừng ngay trong ph&ograve;ng nhờ c&aacute;c ứng dụng AR. M&aacute;y qu&eacute;t LiDAR chuy&ecirc;n nghiệp sẽ mở ra tương lai của c&ocirc;ng nghệ thực tế tăng cường AR, xu hướng c&ocirc;ng nghệ ứng dụng sẽ rất phổ biến trong thời gian tới.</p>\r\n\r\n<p><img alt=\"LiDAR iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-6.jpg\" /></p>\r\n\r\n<h3><strong>Camera si&ecirc;u chụp đ&ecirc;m r&otilde; n&eacute;t như ban ng&agrave;y</strong></h3>\r\n\r\n<p>Chế độ chụp đ&ecirc;m Night Mode c&oacute; mặt tr&ecirc;n cả camera g&oacute;c rộng v&agrave; g&oacute;c si&ecirc;u rộng của iPhone 12 Pro, đồng thời loạt t&iacute;nh năng l&yacute; tưởng gi&uacute;p cho m&aacute;y c&oacute; khả năng chụp ảnh thiếu s&aacute;ng cực đỉnh. Khẩu độ lớn f/1.6 gi&uacute;p thu được &aacute;nh s&aacute;ng nhiều hơn 27%; thấu k&iacute;nh 7 th&agrave;nh phần mới cho độ sắc n&eacute;t ho&agrave;n hảo; t&iacute;nh năng chống rung quang học OIS được cải tiến, đồng thời sự trợ gi&uacute;p của m&aacute;y qu&eacute;t LiDAR gi&uacute;p tăng tốc độ lấy n&eacute;t tới 6 lần trong điều kiện thiếu s&aacute;ng.</p>\r\n\r\n<p>Kết quả l&agrave; ảnh thiếu s&aacute;ng tr&ecirc;n iPhone 12 Pro tốt hơn tới 87%, cho bạn chụp những bức ảnh ban đ&ecirc;m v&ocirc; c&ugrave;ng r&otilde; n&eacute;t, m&agrave;u sắc ch&iacute;nh x&aacute;c, &aacute;nh s&aacute;ng tuyệt vời v&agrave; &iacute;t nhiễu. Thậm ch&iacute; bạn c&ograve;n c&oacute; thể chụp ch&acirc;n dung trong đ&ecirc;m tối với hiệu ứng l&agrave;m mờ đầy nghệ thuật, với hậu cảnh l&agrave; những &aacute;nh đ&egrave;n lung linh huyền ảo.</p>\r\n\r\n<p><img alt=\"chụp đêm iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-20.jpg\" /></p>\r\n\r\n<h3><strong>Chụp ảnh sắc n&eacute;t trong mọi ho&agrave;n cảnh</strong></h3>\r\n\r\n<p>Tr&iacute; tuệ nh&acirc;n tạo AI cũng đ&oacute;ng g&oacute;p vai tr&ograve; quan trọng để iPhone 12 Pro chụp ảnh xuất sắc trong mọi ho&agrave;n cảnh. T&iacute;nh năng Smart HDR 3 sẽ tự động tinh chỉnh c&aacute;c điểm nổi bật, hiệu ứng b&oacute;ng đổ v&agrave; đường viền trong bức ảnh để bạn chụp ảnh r&otilde; n&eacute;t trong điều kiện &aacute;nh s&aacute;ng phức tạp. D&ugrave; chủ thể l&agrave; khu&ocirc;n mặt hay cảnh vật, Smart HDR 3 đều đủ th&ocirc;ng minh để nhận dạng v&agrave; tạo n&ecirc;n bức ảnh ch&acirc;n thực, c&oacute; hồn nhất.</p>\r\n\r\n<p><img alt=\"camera iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-18(1).jpg\" /></p>\r\n\r\n<h3><strong>Quay video 4K Dolby Vision chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>Với phần cứng camera mạnh mẽ v&agrave; chip xử l&yacute; A14 Bionic cực nhanh, lần đầu ti&ecirc;n iPhone 12 Pro tr&igrave;nh l&agrave;ng t&iacute;nh năng quay video 4K Dolby Vision l&ecirc;n tới 60fps, điều m&agrave; nhiều m&aacute;y quay chuy&ecirc;n nghiệp kh&ocirc;ng l&agrave;m được chứ chưa n&oacute;i đến những chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai\">điện thoại</a>&nbsp;kh&aacute;c. Bạn c&oacute; thể quay những đoạn video si&ecirc;u sắc n&eacute;t, khả năng phơi s&aacute;ng tuyệt vời, dải m&agrave;u sống động tới 700 triệu m&agrave;u ở những đoạn video Dolby Vision.</p>\r\n\r\n<p>Chưa hết, bạn c&ograve;n c&oacute; thể chỉnh sửa video Dolby Vision ngay tr&ecirc;n iPhone 12 Pro. H&atilde;y thử xuất bản v&agrave; xem tr&ecirc;n TV 4K HDR m&agrave;n h&igrave;nh lớn, bạn sẽ được chi&ecirc;m ngưỡng những t&aacute;c phẩm điện ảnh đ&iacute;ch thực quay bằng ch&iacute;nh iPhone 12 Pro.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Camera selfie TrueDepth đỉnh cao</strong></h3>\r\n\r\n<p>Tin vui cho những ai th&iacute;ch sử dụng camera trước, Apple đ&atilde; t&iacute;ch hợp tất cả những t&iacute;nh năng cao cấp của camera sau l&ecirc;n camera TrueDepth mặt trước. Bạn sẽ c&oacute; chế độ chụp selfie đ&ecirc;m; t&iacute;nh năng Deep Fusion, Smart HDR 3 v&agrave; cả quay video Dolby Vision. Lu&ocirc;n tỏa s&aacute;ng rạng ngời với những bức ảnh selfie, video hay livestream bằng iPhone 12 Pro.</p>\r\n\r\n<p><img alt=\"camera selfie iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-16.jpg\" /></p>\r\n', 857),
(109, 47, 47, 'iPhone 13 256GB Chính hãng (VN/A)', '1126825242.png', 25190000, 24, '2021-11-22', '<h2>Đ&aacute;nh gi&aacute; chi tiết iPhone 13 256GB Ch&iacute;nh h&atilde;ng (VN/A)</h2>\r\n\r\n<h2><strong><a href=\"https://www.xtsmart.vn/iphone-13-256gb\" target=\"_blank\">iPhone 13 256GB VN/A</a>&nbsp;là chi&ecirc;́c iPhone được trang bị h&ecirc;̣ th&ocirc;́ng camera kép t&ocirc;́t nh&acirc;́t từ trước đ&ecirc;́n nay. Kh&ocirc;ng những v&acirc;̣y, đi&ecirc;̣n còn sở hữu c&acirc;́u hình mạnh mẽ với chip xử lý A15 Bionic, thời lượng pin cải thi&ecirc;̣n...sẵn sàng đáp ứng mọi nhu c&acirc;̀u người dùng.&nbsp;</strong></h2>\r\n\r\n<p>Đánh giá iPhone 13 256GB chính hãng cho th&acirc;́y đ&acirc;y ứng cử vi&ecirc;́n bán chạy nh&acirc;́t trong s&ocirc;́ các thi&ecirc;́t bị mà Apple trình làng bởi mức giá h&acirc;́p d&acirc;̃n. N&ecirc;́u bạn còn ph&acirc;n v&acirc;n v&ecirc;̀ những ưu đi&ecirc;̉m mà đi&ecirc;̣n thoại mang lại thì hãy xem ngay bài vi&ecirc;́t sau nhé!</p>\r\n\r\n<h3><strong>Thi&ecirc;́t k&ecirc;́ sang trọng, b&ecirc;̀n bỉ</strong></h3>\r\n\r\n<p>Thi&ecirc;́t k&ecirc;́ iPhone 13 256GB v&acirc;̃n toát l&ecirc;n sự đẳng c&acirc;́p ngay từ cái nhìn đ&acirc;̀u ti&ecirc;n. Mặc dù kh&ocirc;ng có sự đ&ocirc;̣t phá v&ecirc;̀ mặt ngoại hình nhưng máy đã được &quot;Táo khuy&ecirc;́t&quot; tinh chỉnh trở n&ecirc;n hoàn hảo hơn. Khung vi&ecirc;̀n vát phẳng k&ecirc;́t hợp với màn hình tai thỏ và m&ocirc;-đun camera hình vu&ocirc;ng là những đi&ecirc;̀u quen thu&ocirc;̣c mà Apple giữ lại tr&ecirc;n th&ecirc;́ h&ecirc;̣ iPhone mới của mình.&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế iPhone 13 256GB vẫn toát lên sự đẳng cấp\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/thiet-ke-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Năm nay, c&ocirc;ng ty đã thu hẹp kích thước tai thỏ tr&ecirc;n iPhone 13 256GB giá rẻ nhỏ hơn 20% so với các model trước. Từ đó giúp màn hình tr&ocirc;ng r&ocirc;̣ng rãi và đẹp mắt hơn. Hai &ocirc;́ng kính phía sau cũng được sắp x&ecirc;́p lại b&ocirc;́ cục đường chéo thay vì dọc giúp người dùng d&ecirc;̃ dàng ph&acirc;n bi&ecirc;̣t với iPhone 12. &Ocirc;́ng kính cũng có ph&acirc;̀n nh&ocirc; ra và lớn hơn so với th&ecirc;́ h&ecirc;̣ ti&ecirc;̀n nhi&ecirc;̣m của nó.</p>\r\n\r\n<p>Vi&ecirc;̣c thay đ&ocirc;̉i m&ocirc;̣t vài chi ti&ecirc;́t thi&ecirc;́t k&ecirc;́ k&ecirc;́t hợp với dung lượng pin lớn hơn đã làm cho t&ocirc;̉ng th&ecirc;̉ của đi&ecirc;̣n thoại có ph&acirc;̀n dày và nặng hơn so với trước. Apple đã mang đ&ecirc;́n khá nhi&ecirc;̀u tùy chọn màu sắc phong phú cho người dùng khi mua iPhone 13 256GB. Các phi&ecirc;n bản màu bao g&ocirc;̀m: H&ocirc;̀ng, đen, trắng, xanh và đỏ.</p>\r\n\r\n<h3><strong>Màn hình hi&ecirc;̉n thị ch&acirc;́t lượng</strong></h3>\r\n\r\n<p>Màn hình iPhone 13 256GB chính hãng ti&ecirc;́p tục sử dụng kích thước 6,1 inch, tr&ecirc;n t&acirc;́m n&ecirc;̀n OLED cao c&acirc;́p. N&ecirc;́u như các bi&ecirc;́n th&ecirc;̉ iPhone 13 Pro và iPhone 13 Pro Max nh&acirc;̣n được n&acirc;ng c&acirc;́p màn hình lớn với t&ocirc;́c đ&ocirc;̣ làm mới 120Hz thì tr&ecirc;n phi&ecirc;n bản ti&ecirc;u chu&acirc;̉n v&acirc;̃n chỉ có t&acirc;̀n s&ocirc;́ quét 60Hz. Tuy nhi&ecirc;n, đi&ecirc;̣n thoại v&acirc;̃n đáp ứng t&ocirc;́t các trải nghi&ecirc;̣m chơi game, xem phim hay giải trí m&ocirc;̣t cách mượt mà.</p>\r\n\r\n<p><img alt=\"Màn hình iPhone 13 256GB chính hãng tiếp tục sử dụng kích thước 6,1 inch\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/man-hinh-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Màn hình Super Retina XDR tr&ecirc;n iPhone 13 được đánh giá có đ&ocirc;̣ sáng t&ocirc;́t hơn đ&ecirc;́n 28% so với model trước nhờ đ&ocirc;̣ sáng 800 nits thay vì 600 nits. Do đó, sẽ mang đ&ecirc;́n cho người dùng cảm giác thoải mái khi hi&ecirc;̉n thị ngoài trời. Dù kh&ocirc;ng có t&acirc;̀n s&ocirc;́ quét cao nhưng màn hình hi&ecirc;̉n thị tr&ecirc;n đi&ecirc;̣n thoại v&acirc;̃n r&acirc;́t xu&acirc;́t sắc với hình ảnh ch&acirc;n th&acirc;̣t và đ&ocirc;̣ chi ti&ecirc;́t cao.</p>\r\n\r\n<h3><strong>C&acirc;́u hình mạnh mẽ</strong></h3>\r\n\r\n<p>iPhone 13 256GB VN/A giá rẻ được cho là đi&ecirc;̣n thoại nhanh nh&acirc;́t so với b&acirc;́t kỳ đ&ocirc;́i thủ hi&ecirc;̣n nào hi&ecirc;̣n nay khi được trang bị chip A15 Bionic. Con chip A14 Bionic tr&ecirc;n iPhone 12 v&ocirc;́n đã r&acirc;́t mạnh, nhưng giờ đ&acirc;y A15 Bionic lại có hi&ecirc;̣u su&acirc;́t tăng đáng k&ecirc;̉. Chính vì v&acirc;̣y, mua iPhone 13 chắc chắn sẽ đáp ứng t&acirc;́t cả nhu c&acirc;̀u của người dùng m&ocirc;̣t cách nhanh nh&acirc;́t.</p>\r\n\r\n<p>Nói m&ocirc;̣t chút v&ecirc;̀ chipset mới của Apple, gi&ocirc;́ng với th&ecirc;́ h&ecirc;̣ ti&ecirc;̀n nhi&ecirc;̣m nó cũng g&ocirc;̀m 6 nh&acirc;n CPU (2 nh&acirc;n hi&ecirc;̣u năng cao và 4 nh&acirc;n ti&ecirc;́t ki&ecirc;̣m đi&ecirc;̣n năng) 4 nh&acirc;n GPU. Tuy nhi&ecirc;n, giờ đ&acirc;y chip xử lý mới còn có th&ecirc;m 16 lõi&nbsp;Neural Engine cho máy học và AI, giúp nó có th&ecirc;̉ thực hi&ecirc;̣n được 15.8 nghìn phép tính m&ocirc;̃i gi&acirc;y.</p>\r\n\r\n<p><img alt=\"iPhone 13 256GB VN/A giá rẻ được cho là điện thoại nhanh nhất \" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/cau-hinh-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng những sở hữu c&acirc;́u hình mạnh mẽ, đi&ecirc;̣n thoại còn được trang bị k&ecirc;́t n&ocirc;́i 5G th&ecirc;́ h&ecirc;̣ mới được mở r&ocirc;̣ng với hơn 200 nhà mạng ở 60 qu&ocirc;́c gia. Ngoài ra Apple cũng trang bị vi&ecirc;n pin có dung lượng lớn hơn cho đi&ecirc;̣n thoại. Đ&acirc;y là m&ocirc;̣t trong những n&acirc;ng c&acirc;́p nh&acirc;̣n được nhi&ecirc;̀u sự quan t&acirc;m của người dùng bởi pin lu&ocirc;n là đi&ecirc;̉m y&ecirc;́u tr&ecirc;n iPhone.</p>\r\n\r\n<p>Tại thời đi&ecirc;̉m ra mắt, Apple đã c&ocirc;ng b&ocirc;́ iPhone 13 có thời lượng sử dụng pin l&acirc;u hơn đ&ecirc;́n 1.5 giờ so với iPhone 12. Đ&ecirc;̉ có được đi&ecirc;̀u này là cả m&ocirc;̣t quá trình từ nhi&ecirc;̀u y&ecirc;́u t&ocirc;́ như dung lượng pin được n&acirc;ng c&acirc;́p, màn hình hi&ecirc;̣u quả và chip xử lý ti&ecirc;́t ki&ecirc;̣m đi&ecirc;̣n năng. Tuy nhi&ecirc;n, đi&ecirc;̣n thoại v&acirc;̃n chỉ h&ocirc;̃ trợ sạc nhanh với c&ocirc;ng su&acirc;́t 20W và sạc kh&ocirc;ng d&acirc;y 15W.</p>\r\n\r\n<h3><strong>Camera ch&acirc;́t lượng</strong></h3>\r\n\r\n<p>Camera là m&ocirc;̣t trong những đi&ecirc;̉m sáng giá tr&ecirc;n iPhone 13 256GB chính hãng. Mặc dù đi&ecirc;̣n thoại v&acirc;̃n được trang bị hai &ocirc;́ng kính với đ&ocirc;̣ ph&acirc;n giả 12MP nhưng Apple đã n&acirc;ng c&acirc;́p khá nhi&ecirc;̀u giúp khả năng chụp ảnh cũng như video t&ocirc;́t hơn khá nhi&ecirc;̀u. Trong đó &ocirc;́ng kính chính có kích thước đi&ecirc;̉m ảnh 1.7um, thu sáng t&ocirc;́t hơn 47% so với model trước.</p>\r\n\r\n<p>Trong khi đó, camera góc si&ecirc;u r&ocirc;̣ng h&ocirc;̃ trợ t&ocirc;́t hơn trong các đi&ecirc;̀u ki&ecirc;̣n ánh sáng y&ecirc;́u và ít nhi&ecirc;̃u hơn và chụp nhi&ecirc;̀u cảnh hơn g&acirc;́p 4 l&acirc;̀n. Cảm bi&ecirc;́t mới ch&acirc;́t lượng giúp camera Ultra Wide của iPhone 13 giúp chụp ảnh thi&ecirc;́u sáng t&ocirc;́t hơn, b&ocirc;̉ sung ch&ecirc;́ đ&ocirc;̣ chụp đ&ecirc;m, ch&acirc;́t lượng hình ảnh ch&acirc;n thực hơn bao giờ h&ecirc;́t.</p>\r\n\r\n<p><img alt=\"Camera là một trong những điểm sáng giá trên iPhone 13 256GB chính hãng\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/camera-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Năm nay, gã kh&ocirc;̉ng l&ocirc;̀ c&ocirc;ng ngh&ecirc;̣ Mỹ cũng b&ocirc;̉ sung th&ecirc;m khá nhi&ecirc;̀u tính năng giúp vi&ecirc;̣c chụp ảnh trở n&ecirc;n chuy&ecirc;n nghi&ecirc;̣p hơn. Tính năng Photographic, cho phép người dùng chuy&ecirc;̉n đ&ocirc;̉i nhi&ecirc;̀u phong cách nhi&ecirc;̣t đ&ocirc;̣ màu khác nhau g&ocirc;̀m: ti&ecirc;u chu&acirc;̉n, &acirc;́m áp, mát mẻ, s&ocirc;́ng đ&ocirc;̣ng, đ&ocirc;̣ tương phản phong phú. Nhìn chung, ch&acirc;́t lượng hình ảnh của iPhone 13 và iPhone 12 kh&ocirc;ng có nhi&ecirc;̀u sự ch&ecirc;nh l&ecirc;̣ch trong nhi&ecirc;̀u tính u&ocirc;́ng.</p>\r\n\r\n<p>Nhưng đ&ocirc;́i với ch&ecirc;́ đ&ocirc;̣ ban đ&ecirc;m thì camera iPhone 13 mang đ&ecirc;́n ch&acirc;́t lượng t&ocirc;́t hơn nhờ Apple đã n&acirc;ng c&acirc;́p kích thước cảm bi&ecirc;́n lớn hơn. Mua iPhone 13 256GB VN/A người dùng còn được trải nghi&ecirc;̣m ch&ecirc;́ đ&ocirc;̣&nbsp;Cinematic Mode&nbsp;cho phép quay video chuy&ecirc;n nghi&ecirc;̣p như các b&ocirc;̣ phim đi&ecirc;̣n ảnh nhờ vi&ecirc;̣c làm mờ h&acirc;̣u cảnh.&nbsp;</p>\r\n\r\n<h3><strong>Có n&ecirc;n mua iPhone 13 256GB chính hãng giá rẻ</strong></h3>\r\n\r\n<p>Đánh giá iPhone 13 256GB VN/A cho th&acirc;́y đ&acirc;y là phi&ecirc;n bản n&acirc;ng c&acirc;́p hoàn hảo của iPhone 12, dù kh&ocirc;ng có nhi&ecirc;̀u đ&ocirc;̣t phá nhưng nó đã t&acirc;̣p trung vào trải nghi&ecirc;̣m người dùng hơn. Mua iPhone 13 256GB chính hãng là lựa chọn tuy&ecirc;̣t vời ở thời đi&ecirc;̉m này, đặc bi&ecirc;̣t XTsmart còn h&ocirc;̃ trợ trả góp 0% lãi su&acirc;́t cùng nhi&ecirc;̀u chính sách ưu đãi h&acirc;́p d&acirc;̃n cho khách hàng.</p>\r\n', 1184),
(110, 47, 49, 'Samsung Galaxy S20 Plus (8GB|128GB) BTS Edition (CTY)', '1307321390.png', 16890000, 12, '2021-11-22', '<h2>Đ&aacute;nh gi&aacute; chi tiết Samsung Galaxy S20 Plus (8GB|128GB) BTS Edition (CTY)</h2>\r\n\r\n<h2>C&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u, Samsung đ&atilde; cho ra mắt&nbsp;<strong><a href=\"https://www.xtsmart.vn/samsung-galaxy-s20-plus-bts-edition\" target=\"_blank\">Galaxy S20 Plus BTS Edition</a></strong>&nbsp;với sự hợp t&aacute;c của nh&oacute;m nhạc nổi tiếng nhất nh&igrave; Kpop &ndash; BTS. Flagship kh&ocirc;ng chỉ nổi bật về thiết kế, cấu h&igrave;nh m&agrave; đ&acirc;y c&ograve;n l&agrave; một cơ hội để người h&acirc;m mộ BTS thể hiện sự y&ecirc;u qu&yacute; thần tượng của m&igrave;nh.</h2>\r\n\r\n<h3><strong>Thiết kế thu h&uacute;t ngay &aacute;nh nh&igrave;n đầu ti&ecirc;n</strong></h3>\r\n\r\n<p>C&oacute; thể n&oacute;i, thiết kế l&agrave; điểm thu h&uacute;t nhất&nbsp;của phi&ecirc;n bản Galaxy S20 Plus BTS Edition c&oacute; một kh&ocirc;ng hai n&agrave;y. M&aacute;y kho&aacute;c tr&ecirc;n m&igrave;nh sắc t&iacute;m độc đ&aacute;o nhưng v&ocirc; c&ugrave;ng thời thượng, đ&acirc;y l&agrave; m&agrave;u sắc m&agrave; hầu hết c&aacute;c nh&agrave; sản xuất chỉ d&ugrave;ng cho phi&ecirc;n bản đặc biệt của m&igrave;nh m&agrave; th&ocirc;i. Điểm mới lạ n&agrave;y mang đến sự trẻ trung, c&aacute; t&iacute;nh ri&ecirc;ng cho người sở hữu.</p>\r\n\r\n<p><img alt=\"Galaxy S20 Plus BTS Edition có biểu tượng trái tim nhỏ nhắn nằm liền kề cụm camera chính\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>Điểm nhấn ấn tượng nhất tr&ecirc;n Galaxy S20 Plus BTS Edition ch&iacute;nh l&agrave; biểu tượng tr&aacute;i tim nhỏ nhắn nằm liền kề cụm camera ch&iacute;nh. B&ecirc;n cạnh đ&oacute;, sẽ xuất hiện logo BTS dưới t&ecirc;n nh&agrave; sản xuất Samsung. Ngo&agrave;i ra, h&atilde;ng c&ograve;n c&agrave;i sẵn Weverse &ndash; bộ chủ đề về BTS v&agrave; cộng đồng Fan c&ugrave;ng 7 chiếc photocard c&oacute; h&igrave;nh ảnh của c&aacute;c th&agrave;nh vi&ecirc;n BTS b&ecirc;n trong&nbsp;hộp.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh c&ocirc;ng nghệ hiện đại</strong></h3>\r\n\r\n<p>Samsung Galaxy S20 Plus BTS Edition được trang bị m&agrave;n h&igrave;nh tr&agrave;n viền c&oacute; k&iacute;ch thước tới 6,7 inch. Kh&ocirc;ng gian hiển thị n&agrave;y được xem l&agrave; lớn nhất nh&igrave; hiện nay, nhất l&agrave; kh&ocirc;ng bị giới hạn ở mọi g&oacute;c nh&igrave;n. H&igrave;nh ảnh hiển thị tr&ecirc;n Galaxy S20 Plus&nbsp;sẽ c&oacute; độ ph&acirc;n giải Quad HD+ v&ocirc; c&ugrave;ng sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Galaxy S20 Plus BTS Edition được trang bị màn hình tràn viền có kích thước tới 6,7 inch\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/man-hinh-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>K&egrave;m theo đ&oacute; l&agrave; c&ocirc;ng nghệ Dynamic Amoled 2X mang đến chất lượng hiển thị kh&ocirc;ng thua k&eacute;m g&igrave; một chiếc TV hiện nay. Mọi chuyển động trở n&ecirc;n mượt m&agrave;, sống động với độ ph&acirc;n giải cao, sắc n&eacute;t, ch&acirc;n thật như thực tế.</p>\r\n\r\n<h3><strong>Camera chuy&ecirc;n nghiệp c&ugrave;ng biểu tượng tr&aacute;i tim</strong></h3>\r\n\r\n<p>Như đ&atilde; giới thiệu ở tr&ecirc;n, điểm nhấn tr&ecirc;n phi&ecirc;n bản n&agrave;y ch&iacute;nh l&agrave; biểu tượng tr&aacute;i tim nằm gần kề cụm camera sau. Galaxy S20 Plus BTS Edition c&oacute; tất cả 3 ống k&iacute;nh 64MP, 12MP, 12MP v&agrave; 1 cảm biến VGA mang đến khả năng chụp ảnh chuy&ecirc;n nghiệp, bắt trọn từng khoảnh khắc m&agrave; người d&ugrave;ng muốn lưu giữ.</p>\r\n\r\n<p><img alt=\"Galaxy S20 Plus BTS Edition là camera selfie 10MP\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/camera-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>C&ograve;n mặt trước Galaxy S20 Plus BTS Edition l&agrave; camera selfie 10MP với khả năng tự động lấy n&eacute;t chuẩn x&aacute;c. C&aacute;c ống k&iacute;nh đều được Samsung t&iacute;ch hợp c&aacute;c t&iacute;nh năng hỗ trợ hiện đại nhất n&ecirc;n d&ugrave; chụp ở camera n&agrave;o th&igrave; h&igrave;nh ảnh vẫn v&ocirc; c&ugrave;ng xuất sắc.</p>\r\n\r\n<h3><strong>Hiệu năng mạnh mẽ, thời lượng pin tốt</strong></h3>\r\n\r\n<p>Phi&ecirc;n bản Samsung Galaxy S20 Plus BTS Edition sở hữu bộ nhớ RAM 8GB c&ugrave;ng bộ nhớ trong l&ecirc;n đến 128GB. M&aacute;y kh&ocirc;ng chỉ mang đến hiệu năng mạnh mẽ với những pha xử l&yacute; t&aacute;c vụ mượt m&agrave;, nhanh ch&oacute;ng m&agrave; c&ograve;n c&oacute; kh&ocirc;ng gian lưu trữ rộng r&atilde;i. Theo đ&oacute;, người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể tải phim, game hay lưu nhiều video, h&igrave;nh ảnh m&agrave; kh&ocirc;ng lo đầy bộ nhớ.</p>\r\n\r\n<p><img alt=\"Samsung Galaxy S20 Plus BTS Edition sở hữu bộ nhớ RAM 8GB cùng bộ nhớ trong lên đến 128GB\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/hieu-nang-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>Để đ&aacute;p ứng nhu cầu sử dụng suốt ng&agrave;y, Samsung đ&atilde; trang bị thỏi pin lớn 4.500 mAh. Với những t&aacute;c vụ th&ocirc;ng thường, vi&ecirc;n pin n&agrave;y dư sức duy tr&igrave; đến ng&agrave;y thứ hai. Ch&iacute;nh v&igrave; vậy, bạn c&oacute; thể thoải m&aacute;i tận hưởng m&agrave; kh&ocirc;ng cần bận t&acirc;m dừng lại sạc giữa chừng.</p>\r\n\r\n<h3><strong>Mua Samsung Galaxy S20 Plus BTS Edition tại XTsmart</strong></h3>\r\n\r\n<p>Nếu bạn đang n&oacute;ng l&ograve;ng muốn sở hữu một chiếc Samsung Galaxy S20 Plus BTS Edition về cho m&igrave;nh th&igrave; XTsmart l&agrave; địa chỉ m&agrave; bạn c&oacute; thể tin tưởng để đến v&agrave; sắm chiếc smartphone độc đ&aacute;o ấy về cho m&igrave;nh. XTsmart lu&ocirc;n cam đoan mang đến cho kh&aacute;ch h&agrave;ng smartphone với chất lượng tốt nhất, gi&aacute; rẻ nhất thị&nbsp;trường TP.HCM v&agrave; Đ&agrave; Nẵng.</p>\r\n\r\n<p>Khi mua Samsung Galaxy S20 Plus BTS Edition tại XTsmart, qu&yacute; kh&aacute;ch h&agrave;ng c&ograve;n c&oacute; thể nhận được qu&agrave; tặng, ưu đ&atilde;i rất hấp dẫn. Ngo&agrave;i ra, XTsmart lu&ocirc;n c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp, tận t&igrave;nh sẵn s&agrave;ng giải đ&aacute;p mọi vấn đề của bạn về sản phẩm.</p>\r\n', 589),
(111, 47, 49, 'Samsung Galaxy Note 10 Plus (12GB|256GB) Mỹ (New Nobox)', '943036231.png', 13720000, 42, '2021-11-22', '<h2>Đ&aacute;nh gi&aacute; chi tiết Samsung Galaxy Note 10 Plus (12GB|256GB) Mỹ (New Nobox)</h2>\r\n\r\n<h2>Ngay từ khi ra mắt,&nbsp;<strong><a href=\"https://www.xtsmart.vn/samsung-galaxy-note-10-plus-12gb-256gb-my-new-nobox-\" target=\"_blank\">Galaxy Note 10 Plus 256GB New Nobox Mỹ</a></strong>&nbsp;đ&atilde; được đ&aacute;nh gi&aacute; cao bởi thi&ecirc;́t k&ecirc;́ đẹp mắt, c&acirc;́u hình mạnh mẽ cùng nhiều tính năng hiện đại ấn tượng. C&oacute; thể n&oacute;i, chiếc smartphone n&agrave;y đ&atilde; n&acirc;ng tầm trải nghiệm của người d&ugrave;ng l&ecirc;n một tầm cao mới.</h2>\r\n\r\n<h3><strong>Thiết kế tinh chỉnh ho&agrave;n hảo</strong></h3>\r\n\r\n<p>Về tổng thể, Galaxy Note 10 Plus 256GB New Nobox Mỹ vẫn mang ng&ocirc;n ngữ thiết kế đặc trưng của Galaxy Note series. Tuy nhi&ecirc;n, Samsung đ&atilde; ho&agrave;n thiện tốt hơn thế hệ trước với c&aacute;c đường viền cạnh/ g&oacute;c bao quanh m&aacute;y tr&ocirc;ng mềm mại hơn. Nhưng hơn hết l&agrave; vẫn giữ được sự sang trọng, mạnh mẽ v&agrave; nam t&iacute;nh vốn c&oacute;.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ còn tích hợp vân tay siêu âm vào thẳng màn hình\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, nh&agrave; sản xuất c&ograve;n tận dụng lợi thế của m&agrave;n h&igrave;nh tr&agrave;n viền n&ecirc;n d&ugrave; c&oacute; k&iacute;ch thước đến 6,8 inch nhưng Galaxy Note 10 Plus vẫn kh&ocirc;ng qu&aacute; lớn. Kh&ocirc;ng những vậy, Galaxy Note 10 Plus 256GB New Nobox Mỹ c&ograve;n t&iacute;ch hợp v&acirc;n tay si&ecirc;u &acirc;m v&agrave;o thẳng m&agrave;n h&igrave;nh. C&ocirc;ng nghệ n&agrave;y c&oacute; khả năng nhận diện nhanh, ch&iacute;nh x&aacute;c v&agrave; bảo mật tuyệt đối thiết bị c&aacute; nh&acirc;n của bạn.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ vẫn mang ngôn ngữ thiết kế đặc trưng của Galaxy Note series\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-lung-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Chưa hết, Samsung c&ograve;n trang bị th&ecirc;m khả năng kh&aacute;ng nước ở độ s&acirc;u 1,5m v&agrave; bụi bẩn chuẩn IP68 cho Galaxy Note 10 Plus 256GB&nbsp;Mỹ. Nhờ đ&oacute;, người d&ugrave;ng tha hồ vui chơi ở m&ocirc;i trường nước m&agrave; kh&ocirc;ng phải lo hư hỏng hay chập m&aacute;y.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh chuẩn &ldquo;điện ảnh&rdquo;</strong></h3>\r\n\r\n<p>Galaxy Note 10 Plus 256GB New Nobox Mỹ được trang bị tấm nền Dynamic AMOLED c&oacute; độ ph&acirc;n giải 3.040 x 1.440 pixels, đảm bảo hiển thị nội dung đầy đủ, sắc n&eacute;t v&agrave; kh&ocirc;ng bị giới hạn g&oacute;c nh&igrave;n tr&ecirc;n k&iacute;ch thước 6,8 inch. Được biết, tấm nền n&agrave;y c&ograve;n được hỗ trợ c&ocirc;ng nghệ chuẩn HDR10+ n&ecirc;n h&igrave;nh ảnh hiển thị c&oacute; độ s&aacute;ng cao, dải m&agrave;u rộng, sống động như thực tế.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ được trang bị tấm nền Dynamic AMOLED\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/man-hinh-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng chỉ mang lại trải nghiệm tuyệt vời, tấm nền tr&ecirc;n Galaxy Note 10 Plus 256GB New Nobox c&ograve;n hạn chế tối đa &aacute;nh s&aacute;ng xanh &ndash; t&aacute;c nh&acirc;n g&acirc;y hại cho mắt. V&igrave; vậy, d&ugrave; c&oacute; sử dụng trong thời gian d&agrave;i, mắt bạn vẫn kh&ocirc;ng gặp phải t&igrave;nh trạng mỏi hay nhức mắt như trước đ&acirc;y.</p>\r\n\r\n<h3><strong>Cụm camera chất lượng</strong></h3>\r\n\r\n<p>Samsung bố tr&iacute; hệ thống camera ch&iacute;nh tr&ecirc;n Galaxy Note 10 Plus 256GB New Nobox Mỹ theo chiều dọc, c&oacute; phần hơi lồi ra ở mặt lưng. Đ&oacute; l&agrave; cụm 3 ống k&iacute;nh c&ugrave;ng 1 cảm biến 3D ToF gi&uacute;p chuy&ecirc;n đo chiều s&acirc;u để qu&eacute;t h&igrave;nh ảnh 3D đặt dưới đ&egrave;n Flash. Điểm nổi bật ở đ&acirc;y ch&iacute;nh l&agrave; sự linh hoạt thay đổi khẩu độ trong từng điều kiện m&ocirc;i trường kh&aacute;c nhau. Do đ&oacute;, m&aacute;y đ&atilde; khắc phục được t&igrave;nh trạng chụp trong tối hay dưới &aacute;nh s&aacute;ng mặt trời một c&aacute;ch hiệu quả.</p>\r\n\r\n<p><img alt=\"hệ thống camera chính trên Galaxy Note 10 Plus 256GB New Nobox Mỹ theo chiều dọc\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/camera-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Ri&ecirc;ng mặt trước l&agrave; camera selfie 10MP, hỗ trợ nhận diện khu&ocirc;n mặt v&agrave; tự động lấy n&eacute;t (AF). C&oacute; thể n&oacute;i, Samsung đầu tư ng&agrave;y c&agrave;ng nhiều hơn, nghi&ecirc;m t&uacute;c hơn cho thiết bị của m&igrave;nh. C&oacute; lẽ &ocirc;ng lớn xứ kim chi muốn biến Galaxy Note 10 Plus 256GB New Nobox Mỹ th&agrave;nh một &ldquo;camera phone&rdquo; ch&iacute;nh hiệu.</p>\r\n\r\n<h3><strong>Cấu h&igrave;nh khủng</strong></h3>\r\n\r\n<p>L&agrave; d&ograve;ng điện thoại cao cấp, n&ecirc;n Galaxy Note 10 Plus 256GB New Nobox Mỹ c&oacute; sức mạnh vượt trội về hiệu năng cũng l&agrave; lẽ hiển nhi&ecirc;n. M&aacute;y sử dụng con chip Snapdragon 855 8 nh&acirc;n của Qualcomm, sản xuất tr&ecirc;n tiến tr&igrave;nh 7nm hiện đại c&ugrave;ng chip đồ họa GPU Adreno 64. Tương ứng l&agrave; bộ nhớ 12GB RAM v&agrave; 256GB bộ nhớ trong, tạo ra kh&ocirc;ng gian lưu trữ v&ocirc; c&ugrave;ng rộng r&atilde;i.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ sử dụng con chip Snapdragon 855\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/hieu-nang-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Nhờ tối ưu h&oacute;a tốt của phần cứng v&agrave; phần mềm m&agrave; Galaxy Note 10 Plus 256GB New Nobox mang đến những pha xử l&yacute; mượt m&agrave;, nhanh ch&oacute;ng&nbsp;kh&ocirc;ng cần phải load lại. Đồng thời, bạn c&oacute; thể thoải m&aacute;i tải phim, game m&agrave; kh&ocirc;ng phải lo t&igrave;nh trạng &ldquo;x&oacute;a &ndash; x&oacute;a &ndash; x&oacute;a &ldquo; do đầy bộ nhớ như trước đ&acirc;y.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB Mỹ được trang bị thỏi pin có dung lượng khủng 4.300 mAh\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/pin-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Về pin, Galaxy Note 10 Plus 256GB Mỹ được trang bị thỏi pin c&oacute; dung lượng khủng 4.300 mAh c&ugrave;ng sạc nhanh 45W, tha hồ cho bạn&nbsp;sử dụng nguy&ecirc;n ng&agrave;y chỉ sau 1 giờ sạc m&agrave; th&ocirc;i.</p>\r\n\r\n<h3><strong>B&uacute;t S-Pen thế hế mới</strong></h3>\r\n\r\n<p>Với Galaxy Note 10 Plus 256GB New Nobox Mỹ, b&uacute;t S-Pen được hỗ trợ th&ecirc;m nhiều t&iacute;nh năng đặc biệt, hỗ trợ kết nối Bluetooth LE. Theo đ&oacute;, người d&ugrave;ng c&oacute; thể điều khiển từ xa một số thao t&aacute;c cơ bản, c&oacute; thể kể đến như chụp ảnh, bật nhạc, thay đổi ứng dụng, nhận diện chữ viết tay, ghi ch&uacute;,&hellip;</p>\r\n\r\n<h3><strong>Mua Galaxy Note 10 Plus 256GB New Nobox Mỹ tại XTsmart</strong></h3>\r\n\r\n<p>Qua b&agrave;i đ&aacute;nh gi&aacute; chi tiết về Galaxy Note 10 Plus 256GB New Nobox Mỹ, XTsmart hy vọng rằng bạn sẽ nhanh ch&oacute;ng sở hữu cho m&igrave;nh chiếc điện thoại tuyệt vời n&agrave;y. Vừa mang đến cho bạn những trải nghiệm l&yacute; th&uacute;, vừa thể hiện sự sang trọng, đẳng cấp. Hiện nay, tại XTsmart gi&aacute; của Galaxy Note 10 Plus Mỹ c&oacute; thể n&oacute;i l&agrave; rẻ nhất thị trường, đi c&ugrave;ng l&agrave; những phần qu&agrave; v&agrave; ưu đ&atilde;i si&ecirc;u hấp dẫn, k&egrave;m theo đ&oacute; l&agrave; ch&iacute;nh s&aacute;ch hậu m&atilde;i số 1 tại TP.HCM v&agrave; Đ&agrave; Nẵng.</p>\r\n', 146),
(112, 48, 52, 'Ốp lưng iPhone 13 Pro Max Leather Case with MagSafe ', '663173266.jpg', 1200000, 44, '2021-11-22', '', 12),
(113, 48, 51, 'SẠC DỰ PHÒNG HYPERJUICE USB-C + LIGHTNING 18W 10000mAh', '671719120.jpg', 1400000, 23, '2021-11-22', '', 47),
(114, 48, 48, 'ai nghe chơi game không dây Corsair Virtuoso RGB SE ', '1550058048.jpg', 4300000, 55, '2021-11-22', '', 2),
(115, 47, 54, 'Xiaomi poco F3 (8GB|256GB) NEW CTY', '620415731.png', 9900000, 55, '2021-11-24', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Sản phẩm được tự động k&iacute;ch hoạt bảo h&agrave;nh sau khi kết nối Internet.</li>\r\n	<li>Chip: Snapdragon Qualcomm 870 5G</li>\r\n	<li>Qualcomm Kryo 585 8 l&otilde;i l&ecirc;n đến 3.2GHz.</li>\r\n	<li>Qualcomm Adreno 650 GPU</li>\r\n	<li>RAM: 6GB / 8GB</li>\r\n	<li>ROM: 128GB / 256GB</li>\r\n	<li>Dung lượng pin: 4,520 mAH - Sạc nhanh 33W</li>\r\n	<li>M&agrave;n h&igrave;nh E4 AMOLED 6.67&quot; - Tần số qu&eacute;t 120Hz - Tần số lấy mẫu cảm ứng 360Hz</li>\r\n	<li>Trang bị Corning Gorrilla Glass 5 cho mặt lưng v&agrave; mặt trước.</li>\r\n	<li>Bộ 3 Camera sau: 48MP + 8MP + 5MP</li>\r\n	<li>Camera trước 20MP.</li>\r\n	<li>Loa k&eacute;p Dolby Atmos.</li>\r\n	<li>Trọng lượng: 196g</li>\r\n	<li>Mỏng 7.8mm</li>\r\n</ul>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/cb65c91035a1cc7c08813452e3338937.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/387176baa5ec37ea47ecf01f2b64b5fe.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/4b2d557ae44a63cd3c76ce0eab9b7fe9.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/a4f2c66d217d134c98cd7a50abcce1c7.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/31571c98b03cede670d38985d8cb4d4c.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n', 6);

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
(47, 'Iphone', 47),
(48, 'Tai nghe', 48),
(49, 'Samsung', 47),
(51, 'Pin dự phòng', 48),
(52, 'Ốp lưng', 48),
(54, 'Xiaomi', 47);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bai_viet`),
  ADD KEY `id_dm_news` (`id_dm_news`),
  ADD KEY `id_sp` (`id_sp`);

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
  ADD PRIMARY KEY (`id_dm_news`),
  ADD UNIQUE KEY `ten_dm_news` (`ten_dm_news`);

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
-- Chỉ mục cho bảng `giam_gia`
--
ALTER TABLE `giam_gia`
  ADD PRIMARY KEY (`id_giam_gia`),
  ADD KEY `id_khuyen_mai` (`id_khuyen_mai`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_loai_giam_gia_tien` (`id_loai_giam_gia_tien`);

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
  ADD KEY `id_hoa_don` (`id_hoa_don`),
  ADD KEY `id_sp` (`id_sp`);

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
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`),
  ADD UNIQUE KEY `ten_chuong_trinh` (`ten_chuong_trinh`),
  ADD KEY `id_loai_khuyen_mai` (`id_loai_khuyen_mai`);

--
-- Chỉ mục cho bảng `loai_giam_gia_tien`
--
ALTER TABLE `loai_giam_gia_tien`
  ADD PRIMARY KEY (`id_loai_giam_gia_tien`);

--
-- Chỉ mục cho bảng `loai_khuyen_mai`
--
ALTER TABLE `loai_khuyen_mai`
  ADD PRIMARY KEY (`id_loai_khuyen_mai`);

--
-- Chỉ mục cho bảng `mau_sac_phone`
--
ALTER TABLE `mau_sac_phone`
  ADD PRIMARY KEY (`id_ms_phone`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `rating_sp`
--
ALTER TABLE `rating_sp`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `reply_binh_luan_pro`
--
ALTER TABLE `reply_binh_luan_pro`
  ADD PRIMARY KEY (`id_reply`),
  ADD KEY `id_bl_pro` (`id_bl_pro`);

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
  MODIFY `id_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `binh_luan_news`
--
ALTER TABLE `binh_luan_news`
  MODIFY `id_bl_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan_pro`
--
ALTER TABLE `binh_luan_pro`
  MODIFY `id_bl_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `cau_hinh_phone`
--
ALTER TABLE `cau_hinh_phone`
  MODIFY `id_ch_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `danh_muc_news`
--
ALTER TABLE `danh_muc_news`
  MODIFY `id_dm_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `danh_muc_pro`
--
ALTER TABLE `danh_muc_pro`
  MODIFY `id_dm_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `dung_luong_phone`
--
ALTER TABLE `dung_luong_phone`
  MODIFY `id_dl_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `giam_gia`
--
ALTER TABLE `giam_gia`
  MODIFY `id_giam_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id_hoa_don_chi_tiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `images_pro`
--
ALTER TABLE `images_pro`
  MODIFY `id_images_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `loai_giam_gia_tien`
--
ALTER TABLE `loai_giam_gia_tien`
  MODIFY `id_loai_giam_gia_tien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loai_khuyen_mai`
--
ALTER TABLE `loai_khuyen_mai`
  MODIFY `id_loai_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `mau_sac_phone`
--
ALTER TABLE `mau_sac_phone`
  MODIFY `id_ms_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT cho bảng `rating_sp`
--
ALTER TABLE `rating_sp`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `reply_binh_luan_pro`
--
ALTER TABLE `reply_binh_luan_pro`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `sub_danh_muc_pro`
--
ALTER TABLE `sub_danh_muc_pro`
  MODIFY `id_sub_dm_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
-- Các ràng buộc cho bảng `giam_gia`
--
ALTER TABLE `giam_gia`
  ADD CONSTRAINT `giam_gia_ibfk_1` FOREIGN KEY (`id_khuyen_mai`) REFERENCES `khuyen_mai` (`id_khuyen_mai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giam_gia_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giam_gia_ibfk_3` FOREIGN KEY (`id_loai_giam_gia_tien`) REFERENCES `loai_giam_gia_tien` (`id_loai_giam_gia_tien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`id_hoa_don`) REFERENCES `hoa_don` (`id_hoa_don`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_3` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `images_pro`
--
ALTER TABLE `images_pro`
  ADD CONSTRAINT `images_pro_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD CONSTRAINT `khuyen_mai_ibfk_1` FOREIGN KEY (`id_loai_khuyen_mai`) REFERENCES `loai_khuyen_mai` (`id_loai_khuyen_mai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mau_sac_phone`
--
ALTER TABLE `mau_sac_phone`
  ADD CONSTRAINT `mau_sac_phone_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rating_sp`
--
ALTER TABLE `rating_sp`
  ADD CONSTRAINT `rating_sp_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_sp_ibfk_2` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `reply_binh_luan_pro`
--
ALTER TABLE `reply_binh_luan_pro`
  ADD CONSTRAINT `reply_binh_luan_pro_ibfk_1` FOREIGN KEY (`id_bl_pro`) REFERENCES `binh_luan_pro` (`id_bl_pro`) ON DELETE CASCADE ON UPDATE CASCADE;

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

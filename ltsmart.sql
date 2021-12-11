-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2021 lúc 05:18 PM
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
(44, 15, 110, 'Sản phẩm này còn không shop?                             ', '2021-12-05');

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
(48, 115, 'AMOLED6.67\"Full HD+', 'Chính 48 MP & Phụ 8 MP, 5 MP', '20MP', 6, 128, '	Snapdragon 870', 4520, '	2 Nano SIMHỗ trợ 5G', '', ''),
(59, 127, 'Dynamic AMOLED 2X6.7\"Quad HD+ (2K+)', 'Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D', '10 MP', 8, 128, 'Exynos 990', 4000, '	2 Nano SIM hoặc 1 N', '', ''),
(60, 128, '	IPS LCD, 6.53\", HD+', 'Chính 13 MP & Phụ 2 MP, 2 MP', '5 MP', 2, 128, 'MediaTek Helio G35', 500010, '	2 Nano SIMHỗ trợ 4G', '', ''),
(61, 129, 'AMOLED, 6.55\", Full HD+', 'Chính 64 MP & Phụ 8 MP, 5 MP', '20 MP', 8, 128, '	Snapdragon 778G 5G ', 4250, '2 Nano SIM (SIM 2 ch', '', ''),
(62, 130, '	AMOLED, 6.43\", Full HD+', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', '13 MP', 8, 128, '	MediaTek Helio G95', 5000, '2 Nano SIM, Hỗ trợ 4', '', ''),
(63, 131, 'Super AMOLED, 6.2\", Quad HD+ (2K+)', '	2 camera 12 MP', '	8 MP', 4, 64, 'Exynos 9810', 3000, '2 Nano SIM (SIM 2 ch', '', ''),
(64, 132, '	LED-backlit IPS LCD, 4.7\", Retina HD', '	12 MP', '	5 MP', 2, 32, '	Apple A9', 1715, '1 Nano SIM', 'iOS 11', ''),
(65, 133, '	OLED, 6.5\", Super Retina', '	2 camera 12 MP', '	7 MP', 4, 256, 'Apple A12 Bionic', 3135, '1 Nano SIM & 1 eSIM,', 'iOS 14', ''),
(66, 134, '6.1\" Liquid Retina LCD', '	2 camera 12 MP', '	12 MP', 4, 64, '	Apple A13 Bionic', 3110, '	1 Nano SIM & 1 eSIM', '	iOS 14', '');

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
-- Cấu trúc bảng cho bảng `deal_soc`
--

CREATE TABLE `deal_soc` (
  `id_deal_soc` int(11) NOT NULL,
  `id_khuyen_mai` int(11) NOT NULL,
  `id_sp_chinh` int(11) NOT NULL,
  `id_sp_mua_kem` int(11) NOT NULL,
  `id_loai_giam_gia_tien` int(11) NOT NULL,
  `muc_giam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `deal_soc`
--

INSERT INTO `deal_soc` (`id_deal_soc`, `id_khuyen_mai`, `id_sp_chinh`, `id_sp_mua_kem`, `id_loai_giam_gia_tien`, `muc_giam`) VALUES
(3, 70, 109, 112, 1, 30),
(4, 70, 109, 104, 1, 20),
(6, 72, 130, 136, 2, 400000);

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
(86, 115, 128, 9900000),
(114, 127, 128, 11180000),
(115, 128, 128, 3390000),
(116, 129, 128, 8900000),
(117, 130, 128, 6300000),
(118, 131, 64, 5700000),
(119, 131, 128, 6300000),
(120, 131, 256, 6500000),
(121, 132, 32, 2810000),
(122, 132, 16, 2500000),
(123, 132, 64, 3000000),
(124, 132, 128, 3300000),
(125, 133, 256, 13000000),
(126, 134, 64, 12100000);

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
(43, 18, 111, 2, 500000),
(44, 18, 110, 2, 500000),
(48, 39, 103, 1, 20),
(49, 39, 115, 1, 20),
(50, 40, 114, 1, 2),
(51, 41, 112, 1, 10),
(52, 62, 132, 2, 400000),
(55, 62, 129, 2, 400000),
(63, 62, 133, 2, 400000),
(64, 62, 134, 2, 400000),
(67, 62, 128, 2, 400000),
(68, 63, 135, 1, 2),
(69, 39, 130, 1, 20);

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
(37, 13, 'chuathanhtoan', 'huy', 0, 24190000, '2021-12-04', '0000-00-00', '500000'),
(38, 13, 'dathanhtoan', 'huy', 0, 24196200, '2021-12-04', '2021-12-06', '493800'),
(40, 14, 'chuathanhtoan', 'dahuy', 0, 24190000, '2021-12-04', '0000-00-00', '500000'),
(41, 13, 'chuathanhtoan', 'dahuy', 0, 24690000, '2021-12-04', '0000-00-00', '0'),
(47, 13, 'chuathanhtoan', 'dahuy', 0, 27400000, '2021-12-05', '0000-00-00', '0'),
(48, 13, 'chuathanhtoan', 'daxacnhan', 0, 289500000, '2021-12-06', '0000-00-00', '500000'),
(49, 13, 'chuathanhtoan', 'dahuy', 0, 8500000, '2021-12-07', '0000-00-00', '0'),
(50, 13, 'chuathanhtoan', 'dahuy', 0, 12600000, '2021-12-07', '0000-00-00', '0'),
(51, 13, 'chuathanhtoan', 'chuaxacnhan', 0, 11180000, '2021-12-07', '0000-00-00', '0'),
(52, 13, 'chuathanhtoan', 'chuaxacnhan', 0, 11180000, '2021-12-07', '0000-00-00', '0'),
(53, 13, 'chuathanhtoan', 'chuaxacnhan', 0, 30656500, '2021-12-08', '0000-00-00', '1613500'),
(54, 14, 'chuathanhtoan', 'chuaxacnhan', 0, 8500000, '2021-12-10', '0000-00-00', '0'),
(56, 30, 'chuathanhtoan', 'chuaxacnhan', 0, 11700000, '2021-12-10', '0000-00-00', '0');

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
  `dung_luong` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`id_hoa_don_chi_tiet`, `id_hoa_don`, `id_sp`, `so_luong_mua`, `don_gia`, `mau_sac`, `dung_luong`) VALUES
(33, 37, 109, 1, 24690000, 'Trắng', '256'),
(34, 38, 109, 1, 24690000, 'Trắng', '256'),
(35, 40, 109, 1, 24690000, 'Trắng', '256'),
(36, 41, 109, 1, 24690000, 'Trắng', '256'),
(43, 47, 108, 1, 27400000, 'Trắng', '128'),
(44, 48, 108, 10, 29000000, 'Xanh', '256'),
(45, 49, 129, 1, 8500000, 'Hồng', '128'),
(46, 50, 133, 1, 12600000, 'Vàng', '256'),
(47, 51, 127, 1, 11180000, 'Da xanh', '128'),
(48, 52, 127, 1, 11180000, 'Da xanh', '128'),
(49, 53, 130, 1, 5040000, 'Trắng', '128'),
(50, 53, 136, 1, 1200000, '', ''),
(51, 53, 109, 1, 25190000, 'Đỏ', '256'),
(52, 53, 112, 1, 840000, '', ''),
(53, 54, 129, 1, 8500000, 'Hồng', '128'),
(55, 56, 134, 1, 11700000, 'Đỏ', '64');

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
(101, 115, 'Xiaomi_Poco_F3_Trang.png'),
(109, 127, 'galaxy_s20_plus_do.png'),
(110, 127, 'galaxy_s20_plus_trang.png'),
(111, 127, 'galaxy_s20_plus_xam.png'),
(112, 127, 'galaxy_s20_plus_xam_1.png'),
(113, 127, 'galaxy_s20_plus_xanh.png'),
(114, 128, '600_Xiaomi_redmi_9c_da_cam.png'),
(115, 128, '600_Xiaomi_redmi_9c_xam.png'),
(116, 128, '600_Xiaomi_redmi_9c_xanh.png'),
(117, 130, '600_Xiaomi_note_10s_den.png'),
(118, 130, '600_Xiaomi_note_10s_xanh.png'),
(119, 130, 'Xiaomi_note_10s_trang.png'),
(120, 131, '600_galaxy_s9_plus_den.png'),
(121, 131, '600_galaxy_s9_plus_xanh.png'),
(122, 131, '600_galaxy-s9-plus-vang_2.png'),
(123, 131, '600_galaxy-s9-plus-YY_1.png'),
(124, 131, 'galaxy-s9-plus-tim_2.png'),
(125, 132, '600_iphone_6_gray_xtsmart_9.jpg'),
(126, 132, '600_iphone_6s_gold_xtsmart_2.jpg'),
(127, 132, '600_iphone_6s_rosegold_xtsmart_2 (1).jpg'),
(128, 132, '600_iphone_6s_silver_xtsmart_1.jpg');

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
  `so_dien_thoai` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vai_tro` int(1) NOT NULL DEFAULT 0 COMMENT '0 là tài khoản khách hàng ,1 là quản trị viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `username`, `mat_khau`, `ho_ten`, `hinh_anh`, `so_dien_thoai`, `email`, `dia_chi`, `vai_tro`) VALUES
(13, 'longdv', '87654321', 'Long Đoàn', 'Đoàn Văn Long PD05236 (2).jpg', '0378854216', NULL, '214 Âu Cơ - Hoà Khánh Bắc - Liên Chiểu - Tp Đà Nẵng', 1),
(14, 'thangpham', '12345678', 'Thắng Phạm', NULL, '', '', NULL, 0),
(15, 'longdv1', '12345678', 'Long', NULL, NULL, NULL, NULL, 0),
(26, 'bglight', '12345678', 'Bg Light', NULL, NULL, NULL, NULL, 0),
(30, NULL, NULL, 'Long Đoàn', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=3237155579861475&height=200&width=200&ext=1641741014&hash=AeQJItwovxNbaqR_utk', '0333333333', 'longlongdoan1998@gmail.com', 'Quảng Nam', 0);

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
  `so_luot_su_dung` int(11) NOT NULL COMMENT 'Nếu đã sử dụng = số lượt sử dụng thì chuyển tình trạng 0 ( kết thúc)',
  `tinh_trang` int(11) NOT NULL COMMENT '1 là đang diễn ra ,0 là đã kết thúc',
  `da_su_dung` int(11) NOT NULL COMMENT 'Khi User đặt hàng thì sẻ + 1 vào đây'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ten_chuong_trinh`, `id_loai_khuyen_mai`, `ngay_bat_dau`, `ngay_ket_thuc`, `so_luot_su_dung`, `tinh_trang`, `da_su_dung`) VALUES
(18, 'Giảm giá 500k', 1, '2021-12-02 19:40:00', '2021-12-24 00:46:00', 50, 1, 6),
(39, 'Giảm giá 20%  ', 1, '2021-12-02 23:37:00', '2021-12-24 13:24:00', 100, 1, 3),
(40, 's', 1, '2021-12-03 16:40:00', '2021-12-03 20:10:41', 2, 0, 0),
(41, 'giam gia', 1, '2021-12-03 17:06:00', '2021-12-03 18:13:30', 20, 0, 2),
(51, 's22', 2, '2021-12-03 20:05:00', '2021-12-03 20:06:48', 2, 0, 0),
(52, 's222', 2, '2021-12-04 09:26:00', '2021-12-04 23:07:04', 40, 0, 1),
(54, 'Giảm giá 10%', 2, '2021-12-04 20:05:00', '2021-12-04 23:07:04', 20, 0, 0),
(55, '1', 2, '2021-12-16 20:19:00', '2021-12-04 23:06:54', 22, 0, 0),
(56, 'abc', 2, '2021-12-04 23:04:00', '2021-12-04 23:06:50', 30, 0, 0),
(57, '2', 2, '2021-12-04 23:10:00', '2021-12-05 00:29:42', 2, 0, 1),
(60, 'Giảm 500k', 2, '2021-12-05 18:06:00', '2021-12-31 18:06:00', 20, 1, 2),
(61, 'Abcd', 2, '2021-12-06 10:46:00', '2021-12-18 10:46:00', 20, 1, 1),
(62, 'giamgia12/12', 1, '2021-12-06 10:48:00', '2021-12-12 16:45:00', 12, 1, 5),
(63, 'ss', 1, '2021-12-06 17:15:00', '2021-12-18 17:15:00', 11, 1, 0),
(70, 'Giảm giá đến 30% khi mua kèm deal sốc', 3, '2021-12-07 16:50:00', '2021-12-31 17:24:28', 30, 1, 0),
(72, 'Giảm 400k khi mua kèm', 3, '2021-12-07 19:57:00', '2021-12-31 19:57:00', 20, 1, 0);

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
(141, 115, 'Xanh', '600_Xiaomi_Poco_F3_Xanh.png'),
(166, 127, 'Da xanh', '416762736.png'),
(167, 127, 'Xám', 'galaxy_s20_plus_xam.png'),
(168, 127, 'Trắng', 'galaxy_s20_plus_trang.png'),
(169, 127, 'Đỏ', 'galaxy_s20_plus_do.png'),
(170, 128, 'Cam', '55087766.png'),
(171, 128, 'Đen', '600_Xiaomi_redmi_9c_xam.png'),
(172, 128, 'Xanh', '600_Xiaomi_redmi_9c_xanh.png'),
(173, 129, 'Hồng', '1834818691.png'),
(174, 130, 'Trắng', '1512163810.png'),
(175, 130, 'Xám', '600_Xiaomi_note_10s_den.png'),
(176, 130, 'Xanh', '600_Xiaomi_note_10s_xanh.png'),
(177, 131, 'Tím', '6233800.png'),
(178, 131, 'Vàng', '600_galaxy-s9-plus-vang_2.png'),
(179, 131, 'Đen', '600_galaxy_s9_plus_den.png'),
(180, 131, 'Xanh', '600_galaxy_s9_plus_xanh.png'),
(181, 131, 'Đỏ', '600_galaxy-s9-plus-YY_1.png'),
(182, 132, 'Xám', '1696411374.jpg'),
(183, 132, 'Hồng', '600_iphone_6s_rosegold_xtsmart_2.jpg'),
(184, 132, 'Bạc', '600_iphone_6s_silver_xtsmart_1.jpg'),
(185, 133, 'Vàng', '1441346892.jpg'),
(186, 134, 'Đỏ', '1940728250.png'),
(187, 134, 'Tím', '600_iphone11_tim_1.png'),
(188, 134, 'Trắng', '600_iphone11_trang_1.png'),
(189, 134, 'Đen bóng', '600_iphone11_den_1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_giam_gia`
--

CREATE TABLE `ma_giam_gia` (
  `id_ma_giam_gia` int(11) NOT NULL,
  `id_khuyen_mai` int(11) NOT NULL,
  `id_kh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'Khi có User áp mã thì sẻ gán id vào đây',
  `ten_ma_giam_gia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_loai_giam_gia_tien` int(11) NOT NULL,
  `muc_giam` int(11) NOT NULL,
  `gia_tri_don_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ma_giam_gia`
--

INSERT INTO `ma_giam_gia` (`id_ma_giam_gia`, `id_khuyen_mai`, `id_kh`, `ten_ma_giam_gia`, `id_loai_giam_gia_tien`, `muc_giam`, `gia_tri_don_hang`) VALUES
(4, 51, NULL, 'LTS2', 1, 2, 2),
(5, 52, '13', 'LTS222', 1, 2, 5000000),
(7, 54, NULL, 'LTS10', 1, 10, 20000000),
(8, 55, NULL, 'LTS321', 1, 1, 11111),
(9, 56, NULL, 'LTS21', 2, 500000, 20000000),
(10, 57, '13', 'LTS22', 1, 2, 2),
(13, 60, '13', 'LTS02', 2, 500000, 12000000),
(14, 61, '13', 'LTS00000', 1, 5, 20000000);

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
  `ngay_rating` date NOT NULL,
  `avg_rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rating_sp`
--

INSERT INTO `rating_sp` (`id_rating`, `id_sp`, `id_kh`, `rating`, `noi_dung`, `ngay_rating`, `avg_rating`) VALUES
(59, 109, 14, 5, '             Tuyệt vời                   ', '2021-11-25', 5),
(61, 110, 13, 4, ' Sản phấm chất lượng                               ', '2021-11-26', 4),
(63, 113, 13, 2, '                                ', '2021-11-26', 2),
(66, 113, 13, 5, '                                ', '2021-11-26', 2),
(67, 113, 13, 5, '                                ', '2021-11-26', 2),
(68, 113, 13, 1, '                                ', '2021-11-26', 2),
(69, 113, 13, 1, '                                ', '2021-11-26', 2),
(70, 113, 13, 1, '                                ', '2021-11-26', 2),
(71, 113, 13, 1, '                                ', '2021-11-26', 2),
(110, 109, 15, 5, '   Cho 5 sao luôn                             ', '2021-12-05', 5),
(117, 115, 13, 3, '                                ', '2021-12-09', 3);

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
(103, 47, 47, 'iPhone 7 Plus 256GB Quốc Tế (Likenew)', '1832599755.jpg', 5000000, 21, '2021-11-22', '<h2>Đánh giá chi tiết iPhone 7 Plus 256GB Quốc Tế (Likenew)</h2>\r\n\r\n<h2><strong><a href=\"https://www.xtsmart.vn/iphone-7-plus-256gb-quoc-te-likenew-\" target=\"_blank\">iPhone 7 Plus 256GB cũ</a> là một trong những điện thoại đáng mua nhất hiện nay. Bởi thiết bị không chỉ mang đến mức giá hấp dẫn cho người dùng mà còn đảm bảo hiệu năng ổn định, thiết kế sang trọng bền bỉ. </strong></h2>\r\n\r\n<h3><strong>Thiết kế truyền thống, tinh tế</strong></h3>\r\n\r\n<p>Thiết kế iPhone 7 Plus 256GB cũ mang đến sự chắc chắn và bền bỉ cao cho người dùng. Apple đã sử dụng chất liệu cao cấp dành cho flagship của mình với khung kim loại nguyên khối kết hợp với mặt kính Ion-strengthened Glass ở mặt trước. Điều này giúp mặt trước có khả năng chống va đập và hạn chế trầy xước tốt hơn.</p>\r\n\r\n<p><img alt=\"Thiết kế iPhone 7 Plus 256GB cũ mang đến sự chắc chắn\" src=\"https://www.xtsmart.vn/vnt_upload/product/08_2020/thiet-ke-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Bên cạnh đó Apple cũng đã tích hợp công nghệ kháng nước IP 67 cho iPhone 7 Plus. Với tính năng này máy có thể sống sót tốt ở độ sâu 1m trong thời gian 30 phút. Các góc cạnh trên máy được bo cong mềm mại mang đến cảm giác cầm nắm tốt hơn, đồng thời mặt lưng máy cũng được Apple tinh chỉnh thông thoáng hơn khi di chuyển dải ăng-ten lên 2 cạnh viền trên và dưới.</p>\r\n\r\n<p>Trên điện thoại iPhone 7 Plus 256GB cũ cũng đã loại bỏ jack cắm tai nghe 3.5mm và  phím home ảo được thiết kế dạng button. Đây là một trong những tính năng khiến người dùng tiếc nuối. Mua iPhone 7 Plus 256GB cũ bạn sẽ được trải nghiệm màn hình lớn với kích thước 5.5 inch, trên tấm nền IPS LCD với độ phân giải 1080x1920 Pixels, tỉ lệ 16:9.</p>\r\n\r\n<p><img alt=\"Mua iPhone 7 Plus 256GB được trang bị màn hình 5.5 inch\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/man-hinh-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Chất lượng hiển thị được đánh giá cao, mang lại màu sắc rực rỡ, độ chi tiết cao và độ tương phản đạt 1398:1. Thậm chí điện thoại hoàn toàn có khả năng hiển thị tốt ở ngoài trời nhờ độ sáng tối đa lên đến 600 nits.</p>\r\n\r\n<h3><strong>Cấu hình là điều mà Apple tự hào</strong></h3>\r\n\r\n<p>Hiệu năng trên điện thoại là một trong những thế mạnh giúp Apple có thể đánh bại các đối thủ hiện nay. Trải qua bao nhiêu năm đi nữa thì hiệu suất hoạt động trên các model iPhone vẫn rất ổn định. Cấu hình iPhone 7 256GB cũ được tích hợp chipset Apple A10 Fusion 4 lõi sản xuất trên tiến trình 16nm.</p>\r\n\r\n<p><img alt=\"Cấu hình iPhone 7 256GB cũ được tích hợp chipset Apple A10 Fusion\" src=\"https://www.xtsmart.vn/vnt_upload/product/08_2020/cau-hinh-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Với con chip mạnh mẽ này mang đến tốc độ xử lý các tác vụ hàng ngày một cách nhanh nhẹn và mượt mà. Chưa hết khả năng đa nhiệm cũng được đánh giá cao nhờ sự hỗ trợ của bộ nhớ lưu trữ tương đối lớn với RAM 3GB và ROM 256GB. Điện thoại hoàn toàn dư sức đáp ứng tốt các tựa game đồ họa nặng nhất hiện nay nhờ GPU PowerVR Series7XT Plus 6 lõi.</p>\r\n\r\n<h3><strong>Điện thoại đầu tiên sở hữu camera kép</strong></h3>\r\n\r\n<p>Camera iPhone 7 Plus 256GB được trang bị 2 ống kính đặt góc trên bên trái điện thoại. Hệ thống camera có cùng độ phân giải 12MP mang đến khả năng chụp ảnh ấn tượng. Bên cạnh đó Apple cũng đã bổ sung thêm một số tính năng mới giúp chất lượng hình ảnh được hoàn thiện hơn như: Lấy nét tự động, chống rung quang học OIS, zoom quang học 2x...</p>\r\n\r\n<p><img alt=\"Camera iPhone 7 Plus 256GB được trang bị 2 ống kính \" src=\"https://www.xtsmart.vn/vnt_upload/product/08_2020/camera-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>So với thế hệ tiền nhiệm thì camera trên iPhone 7 Plus 256GB cũ mang đến chất lượng chụp ảnh đêm tốt hơn nhờ sự hỗ trợ của đèn LED, hình ảnh ít nhiễu và dễ dàng kiểm soát hơn. Trong khi đó camera trước máy có độ phân giải 7MP cũng được hỗ trợ nhiều tính năng hấp dẫn nhằm phục vụ tốt nhu cầu chụp ảnh tự sướng.</p>\r\n\r\n<h3><strong>Thời lượng pin được cải thiện</strong></h3>\r\n\r\n<p>Dung lượng pin 2.900 mAh trên iPhone 7 Plus 256GB cũ được xem là một cải thiện lớn so với thế hệ iPhone cũ. Cùng với đó kết hợp với chipset tiết kiệm điện năng đã mang đến thời lượng sử dụng tốt hơn trên iPhone 7 Plus, máy có thể đáp ứng hơn 1 ngày đối với người dùng sử dụng ở cường độ bình thường. </p>\r\n\r\n<p><img alt=\"Thời lượng pin trên iPhone 7 256GB cũ được cải thiện\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/thoi-luong-pin-iphone-7-plus-256gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<h3><strong>Mua iPhone 7 Plus 256GB cũ tại XTsmart</strong></h3>\r\n\r\n<p>Mua iPhone 7 Plus 256GB cũ tại XTsmart hoàn toàn yên tâm về chất lượng thông qua các chính sách bảo hành và hậu mãi cực tốt. Đối với máy cũ sẽ được bảo hành 6 tháng, bảo hành 1 đổi 1 trong 30 ngày. Bên cạnh đó, tại cửa hàng còn hỗ trợ mua iPhone 7 Plus 256GB cũ trả góp 0%, thu cũ lên đời máy mới không bù tiền...</p>\r\n', 584),
(104, 48, 48, 'Tai nghe có dây choàng đầu có mic i.value T-139', '1054568922.jpg', 239000, 22, '2021-11-22', '', 13),
(108, 47, 47, 'iPhone 12 Pro 128GB', '101958767.png', 27400000, 21, '2021-11-22', '<h2>Đặc điểm nổi bật của&nbsp;iPhone 12 Pro</h2>\r\n\r\n<p><img alt=\"iPhone 12 Pro 256GB\" src=\"https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2021/5/24/637574720778410065_iphone-12-pro-dung-luong-128gb.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Đ&aacute;nh gi&aacute; chi tiết&nbsp;iPhone 12 Pro</h2>\r\n\r\n<p><strong>Đến với đẳng cấp Pro đ&iacute;ch thực, nơi m&agrave; những điều đặc biệt đang chờ đ&oacute;n bạn tr&ecirc;n&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-12-pro\">iPhone 12 Pro</a>. Từ hệ thống camera Pro chụp thiếu s&aacute;ng cực đỉnh, kết nối 5G si&ecirc;u tốc cho đến bộ vi xử l&yacute; A14 Bionic nhanh nhất thế giới smartphone, vẫn c&ograve;n nhiều bất ngờ kh&aacute;c để bạn kh&aacute;m ph&aacute;.</strong></p>\r\n\r\n<p><strong><img alt=\"Điện thoại iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-1.jpg\" /></strong></p>\r\n\r\n<h3><strong>Viền m&agrave;n h&igrave;nh mỏng hơn, m&agrave;n h&igrave;nh lớn hơn</strong></h3>\r\n\r\n<p>Nhờ viền m&agrave;n h&igrave;nh mỏng hơn, iPhone 12 Pro đ&atilde; c&oacute; thể trang bị một m&agrave;n h&igrave;nh lớn hơn, nhưng k&iacute;ch thước vẫn nhỏ gọn tương tự&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-11-pro-64gb\">iPhone 11 Pro</a>. Giờ đ&acirc;y bạn sẽ c&oacute; m&agrave;n h&igrave;nh lớn tới 6,1 inch, để trải nghiệm được nhiều hơn.</p>\r\n\r\n<p>Ấn tượng hơn nữa, m&agrave;n h&igrave;nh iPhone 12 Pro si&ecirc;u sắc n&eacute;t với c&ocirc;ng nghệ Super Retina XDR. Tấm nền OLED mang tới h&igrave;nh ảnh trong trẻo, m&agrave;u sắc ch&iacute;nh x&aacute;c, độ tương phản l&ecirc;n tới 2.000.000:1, độ s&aacute;ng tối đa 1200 nits. C&aacute;c c&ocirc;ng nghệ kh&aacute;c như HDR hay True Tone khiến cho chất lượng hiển thị của iPhone 12 Pro th&ecirc;m phần ho&agrave;n hảo.</p>\r\n\r\n<p><img alt=\"màn hình iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-10.jpg\" /></p>\r\n\r\n<h3><strong>Mặt k&iacute;nh m&agrave;n h&igrave;nh bền nhất thế giới smartphone</strong></h3>\r\n\r\n<p>Apple đ&atilde; đưa c&ocirc;ng nghệ bảo vệ m&agrave;n h&igrave;nh phủ gốm Ceramic Shield l&ecirc;n iPhone 12 Pro. C&aacute;c tinh thể gốm nano cứng hơn cả kim loại v&agrave; k&iacute;nh được đưa v&agrave;o tấm k&iacute;nh m&agrave;n h&igrave;nh, mang tới độ bền cũng như khả năng chống xước tuyệt vời. Kết quả l&agrave; m&agrave;n h&igrave;nh iPhone 12 Pro sẽ bền hơn tới 4 lần trong thử nghiệm thả rơi. Nguy cơ bị vỡ m&agrave;n h&igrave;nh của bạn sẽ giảm đi rất nhiều với Ceramic Shield.</p>\r\n\r\n<p><img alt=\"mặt kính iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-3.jpg\" /></p>\r\n\r\n<h3><strong>T&aacute;c phẩm nghệ thuật đ&iacute;ch thực</strong></h3>\r\n\r\n<p>iPhone 12 Pro đ&atilde; đạt đến tầm tinh xảo thượng thừa trong thiết kế. Bạn sẽ c&oacute; một chiếc điện thoại viền th&eacute;p kh&ocirc;ng gỉ đặc biệt sang trọng v&agrave; cứng c&aacute;p. Phần viền th&eacute;p được l&agrave;m phẳng, vu&ocirc;ng vắn với những đường cắt kim cương s&aacute;ng b&oacute;ng tạo n&ecirc;n vẻ ngo&agrave;i cao cấp, xứng tầm t&aacute;c phẩm nghệ thuật.</p>\r\n\r\n<p>Sẽ c&oacute; 4 m&agrave;u sắc để bạn lựa chọn l&agrave; Bạc, X&aacute;m than ch&igrave;, V&agrave;ng v&agrave; Xanh đại dương. Cả 4 m&agrave;u sắc n&agrave;y đều rất đẳng cấp v&agrave; tạo phong th&aacute;i ri&ecirc;ng cho người d&ugrave;ng.</p>\r\n\r\n<p><img alt=\"thiết kế iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-2.jpg\" /></p>\r\n\r\n<h3><strong>Đ&aacute;nh bật nỗi lo v&agrave;o nước</strong></h3>\r\n\r\n<p>Chuẩn chống nước IP68 tr&ecirc;n iPhone 12 Pro mang tới khả năng chống nước h&agrave;ng đầu trong ng&agrave;nh smartphone. Bạn c&oacute; thể ng&acirc;m nước ở độ s&acirc;u l&ecirc;n đến 6m trong v&ograve;ng 30 ph&uacute;t m&agrave; kh&ocirc;ng ảnh hưởng g&igrave; đến điện thoại. Gần như to&agrave;n bộ mối nguy hại từ nước đều được miễn nhiễm bởi iPhone 12 Pro.</p>\r\n\r\n<p><img alt=\"chống nước iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-8.jpg\" /></p>\r\n\r\n<h3><strong>C&ocirc;ng nghệ&nbsp;5G si&ecirc;u&nbsp;tốc độ</strong></h3>\r\n\r\n<p>Kết nối 5G gi&uacute;p cho iPhone 12 Pro trở th&agrave;nh thiết bị ho&agrave;n hảo để v&agrave;o mạng. Giờ đ&acirc;y bạn c&oacute; thể tải xuống những tệp tin lớn, xem phim HDR chất lượng cao, chơi game online si&ecirc;u mượt, kh&ocirc;ng hề c&oacute; bất cứ hiện tượng lag giật nhỏ n&agrave;o. iPhone 12 Pro cũng l&agrave; chiếc điện thoại c&oacute; băng tần 5G lớn nhất hiện nay, mở ra một tương lai mới cho tốc độ Internet.</p>\r\n\r\n<p><img alt=\"5G iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-9.jpg\" /></p>\r\n\r\n<h3><strong>Hiệu năng đỉnh cao với Apple A14 Bionic</strong></h3>\r\n\r\n<p>Cho đến trước khi&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-12\">iPhone 12</a>, iPhone 12 Pro v&agrave;&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/iphone-12-pro-max\">iPhone 12 Pro Max</a>&nbsp;xuất hiện, Apple A13 Bionic của iPhone 11 Pro vẫn l&agrave; con chip mạnh nhất thế giới smartphone. Nhưng sự c&oacute; mặt của&nbsp;<a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/tat-tan-tat-ve-chip-apple-a14-trai-tim-se-lam-nen-suc-manh-cho-iphone-12-121314\">Apple A14 Bionic</a>&nbsp;đ&iacute;ch thực l&agrave; một &ldquo;vụ nổ&rdquo; với loạt n&acirc;ng cấp v&agrave; c&ocirc;ng nghệ mới đ&aacute;ng gi&aacute;. Đ&acirc;y l&agrave; con chip sản xuất tr&ecirc;n tiến tr&igrave;nh 5nm đầu ti&ecirc;n, tăng tới 40% số lượng b&oacute;ng b&aacute;n dẫn, cho hiệu suất vượt trội v&agrave; thời lượng pin tuyệt vời.</p>\r\n\r\n<p>Hơn thế nữa, Apple A14 Bionic c&ograve;n t&iacute;ch hợp chip xử l&yacute; h&igrave;nh ảnh ISP mới, cho t&iacute;nh năng quay video Dolby Vision, t&iacute;nh năng m&agrave; nhiều m&aacute;y quay phim chuy&ecirc;n nghiệp c&ograve;n kh&ocirc;ng l&agrave;m được.</p>\r\n\r\n<p><img alt=\"vi xử lý iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-7.jpg\" /></p>\r\n\r\n<h3><strong>M&aacute;y qu&eacute;t LiDAR, tương lai của thực tế tăng cường AR</strong></h3>\r\n\r\n<p>LiDAR l&agrave; c&ocirc;ng nghệ đang được NASA sử dụng trong ng&agrave;nh h&agrave;ng kh&ocirc;ng vũ trụ. Với m&aacute;y qu&eacute;t LiDAR, iPhone 12 Pro c&oacute; thể đo khoảng thời gian &aacute;nh s&aacute;ng phản xạ lại từ c&aacute;c vật thể để tạo ra bản đồ chiều s&acirc;u của bất cứ vật thể n&agrave;o trong kh&ocirc;ng gian.</p>\r\n\r\n<p>Tốc độ cực nhanh v&agrave; ch&iacute;nh x&aacute;c gi&uacute;p bạn c&oacute; thể t&aacute;i hiện cả một khu rừng ngay trong ph&ograve;ng nhờ c&aacute;c ứng dụng AR. M&aacute;y qu&eacute;t LiDAR chuy&ecirc;n nghiệp sẽ mở ra tương lai của c&ocirc;ng nghệ thực tế tăng cường AR, xu hướng c&ocirc;ng nghệ ứng dụng sẽ rất phổ biến trong thời gian tới.</p>\r\n\r\n<p><img alt=\"LiDAR iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-6.jpg\" /></p>\r\n\r\n<h3><strong>Camera si&ecirc;u chụp đ&ecirc;m r&otilde; n&eacute;t như ban ng&agrave;y</strong></h3>\r\n\r\n<p>Chế độ chụp đ&ecirc;m Night Mode c&oacute; mặt tr&ecirc;n cả camera g&oacute;c rộng v&agrave; g&oacute;c si&ecirc;u rộng của iPhone 12 Pro, đồng thời loạt t&iacute;nh năng l&yacute; tưởng gi&uacute;p cho m&aacute;y c&oacute; khả năng chụp ảnh thiếu s&aacute;ng cực đỉnh. Khẩu độ lớn f/1.6 gi&uacute;p thu được &aacute;nh s&aacute;ng nhiều hơn 27%; thấu k&iacute;nh 7 th&agrave;nh phần mới cho độ sắc n&eacute;t ho&agrave;n hảo; t&iacute;nh năng chống rung quang học OIS được cải tiến, đồng thời sự trợ gi&uacute;p của m&aacute;y qu&eacute;t LiDAR gi&uacute;p tăng tốc độ lấy n&eacute;t tới 6 lần trong điều kiện thiếu s&aacute;ng.</p>\r\n\r\n<p>Kết quả l&agrave; ảnh thiếu s&aacute;ng tr&ecirc;n iPhone 12 Pro tốt hơn tới 87%, cho bạn chụp những bức ảnh ban đ&ecirc;m v&ocirc; c&ugrave;ng r&otilde; n&eacute;t, m&agrave;u sắc ch&iacute;nh x&aacute;c, &aacute;nh s&aacute;ng tuyệt vời v&agrave; &iacute;t nhiễu. Thậm ch&iacute; bạn c&ograve;n c&oacute; thể chụp ch&acirc;n dung trong đ&ecirc;m tối với hiệu ứng l&agrave;m mờ đầy nghệ thuật, với hậu cảnh l&agrave; những &aacute;nh đ&egrave;n lung linh huyền ảo.</p>\r\n\r\n<p><img alt=\"chụp đêm iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-20.jpg\" /></p>\r\n\r\n<h3><strong>Chụp ảnh sắc n&eacute;t trong mọi ho&agrave;n cảnh</strong></h3>\r\n\r\n<p>Tr&iacute; tuệ nh&acirc;n tạo AI cũng đ&oacute;ng g&oacute;p vai tr&ograve; quan trọng để iPhone 12 Pro chụp ảnh xuất sắc trong mọi ho&agrave;n cảnh. T&iacute;nh năng Smart HDR 3 sẽ tự động tinh chỉnh c&aacute;c điểm nổi bật, hiệu ứng b&oacute;ng đổ v&agrave; đường viền trong bức ảnh để bạn chụp ảnh r&otilde; n&eacute;t trong điều kiện &aacute;nh s&aacute;ng phức tạp. D&ugrave; chủ thể l&agrave; khu&ocirc;n mặt hay cảnh vật, Smart HDR 3 đều đủ th&ocirc;ng minh để nhận dạng v&agrave; tạo n&ecirc;n bức ảnh ch&acirc;n thực, c&oacute; hồn nhất.</p>\r\n\r\n<p><img alt=\"camera iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-18(1).jpg\" /></p>\r\n\r\n<h3><strong>Quay video 4K Dolby Vision chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>Với phần cứng camera mạnh mẽ v&agrave; chip xử l&yacute; A14 Bionic cực nhanh, lần đầu ti&ecirc;n iPhone 12 Pro tr&igrave;nh l&agrave;ng t&iacute;nh năng quay video 4K Dolby Vision l&ecirc;n tới 60fps, điều m&agrave; nhiều m&aacute;y quay chuy&ecirc;n nghiệp kh&ocirc;ng l&agrave;m được chứ chưa n&oacute;i đến những chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai\">điện thoại</a>&nbsp;kh&aacute;c. Bạn c&oacute; thể quay những đoạn video si&ecirc;u sắc n&eacute;t, khả năng phơi s&aacute;ng tuyệt vời, dải m&agrave;u sống động tới 700 triệu m&agrave;u ở những đoạn video Dolby Vision.</p>\r\n\r\n<p>Chưa hết, bạn c&ograve;n c&oacute; thể chỉnh sửa video Dolby Vision ngay tr&ecirc;n iPhone 12 Pro. H&atilde;y thử xuất bản v&agrave; xem tr&ecirc;n TV 4K HDR m&agrave;n h&igrave;nh lớn, bạn sẽ được chi&ecirc;m ngưỡng những t&aacute;c phẩm điện ảnh đ&iacute;ch thực quay bằng ch&iacute;nh iPhone 12 Pro.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Camera selfie TrueDepth đỉnh cao</strong></h3>\r\n\r\n<p>Tin vui cho những ai th&iacute;ch sử dụng camera trước, Apple đ&atilde; t&iacute;ch hợp tất cả những t&iacute;nh năng cao cấp của camera sau l&ecirc;n camera TrueDepth mặt trước. Bạn sẽ c&oacute; chế độ chụp selfie đ&ecirc;m; t&iacute;nh năng Deep Fusion, Smart HDR 3 v&agrave; cả quay video Dolby Vision. Lu&ocirc;n tỏa s&aacute;ng rạng ngời với những bức ảnh selfie, video hay livestream bằng iPhone 12 Pro.</p>\r\n\r\n<p><img alt=\"camera selfie iPhone 12 Pro\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-12-pro-16.jpg\" /></p>\r\n', 1129),
(109, 47, 47, 'iPhone 13 256GB Chính hãng (VN/A)', '1126825242.png', 25190000, 24, '2021-11-22', '<h2>Đ&aacute;nh gi&aacute; chi tiết iPhone 13 256GB Ch&iacute;nh h&atilde;ng (VN/A)</h2>\r\n\r\n<h2><strong><a href=\"https://www.xtsmart.vn/iphone-13-256gb\" target=\"_blank\">iPhone 13 256GB VN/A</a>&nbsp;là chi&ecirc;́c iPhone được trang bị h&ecirc;̣ th&ocirc;́ng camera kép t&ocirc;́t nh&acirc;́t từ trước đ&ecirc;́n nay. Kh&ocirc;ng những v&acirc;̣y, đi&ecirc;̣n còn sở hữu c&acirc;́u hình mạnh mẽ với chip xử lý A15 Bionic, thời lượng pin cải thi&ecirc;̣n...sẵn sàng đáp ứng mọi nhu c&acirc;̀u người dùng.&nbsp;</strong></h2>\r\n\r\n<p>Đánh giá iPhone 13 256GB chính hãng cho th&acirc;́y đ&acirc;y ứng cử vi&ecirc;́n bán chạy nh&acirc;́t trong s&ocirc;́ các thi&ecirc;́t bị mà Apple trình làng bởi mức giá h&acirc;́p d&acirc;̃n. N&ecirc;́u bạn còn ph&acirc;n v&acirc;n v&ecirc;̀ những ưu đi&ecirc;̉m mà đi&ecirc;̣n thoại mang lại thì hãy xem ngay bài vi&ecirc;́t sau nhé!</p>\r\n\r\n<h3><strong>Thi&ecirc;́t k&ecirc;́ sang trọng, b&ecirc;̀n bỉ</strong></h3>\r\n\r\n<p>Thi&ecirc;́t k&ecirc;́ iPhone 13 256GB v&acirc;̃n toát l&ecirc;n sự đẳng c&acirc;́p ngay từ cái nhìn đ&acirc;̀u ti&ecirc;n. Mặc dù kh&ocirc;ng có sự đ&ocirc;̣t phá v&ecirc;̀ mặt ngoại hình nhưng máy đã được &quot;Táo khuy&ecirc;́t&quot; tinh chỉnh trở n&ecirc;n hoàn hảo hơn. Khung vi&ecirc;̀n vát phẳng k&ecirc;́t hợp với màn hình tai thỏ và m&ocirc;-đun camera hình vu&ocirc;ng là những đi&ecirc;̀u quen thu&ocirc;̣c mà Apple giữ lại tr&ecirc;n th&ecirc;́ h&ecirc;̣ iPhone mới của mình.&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế iPhone 13 256GB vẫn toát lên sự đẳng cấp\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/thiet-ke-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Năm nay, c&ocirc;ng ty đã thu hẹp kích thước tai thỏ tr&ecirc;n iPhone 13 256GB giá rẻ nhỏ hơn 20% so với các model trước. Từ đó giúp màn hình tr&ocirc;ng r&ocirc;̣ng rãi và đẹp mắt hơn. Hai &ocirc;́ng kính phía sau cũng được sắp x&ecirc;́p lại b&ocirc;́ cục đường chéo thay vì dọc giúp người dùng d&ecirc;̃ dàng ph&acirc;n bi&ecirc;̣t với iPhone 12. &Ocirc;́ng kính cũng có ph&acirc;̀n nh&ocirc; ra và lớn hơn so với th&ecirc;́ h&ecirc;̣ ti&ecirc;̀n nhi&ecirc;̣m của nó.</p>\r\n\r\n<p>Vi&ecirc;̣c thay đ&ocirc;̉i m&ocirc;̣t vài chi ti&ecirc;́t thi&ecirc;́t k&ecirc;́ k&ecirc;́t hợp với dung lượng pin lớn hơn đã làm cho t&ocirc;̉ng th&ecirc;̉ của đi&ecirc;̣n thoại có ph&acirc;̀n dày và nặng hơn so với trước. Apple đã mang đ&ecirc;́n khá nhi&ecirc;̀u tùy chọn màu sắc phong phú cho người dùng khi mua iPhone 13 256GB. Các phi&ecirc;n bản màu bao g&ocirc;̀m: H&ocirc;̀ng, đen, trắng, xanh và đỏ.</p>\r\n\r\n<h3><strong>Màn hình hi&ecirc;̉n thị ch&acirc;́t lượng</strong></h3>\r\n\r\n<p>Màn hình iPhone 13 256GB chính hãng ti&ecirc;́p tục sử dụng kích thước 6,1 inch, tr&ecirc;n t&acirc;́m n&ecirc;̀n OLED cao c&acirc;́p. N&ecirc;́u như các bi&ecirc;́n th&ecirc;̉ iPhone 13 Pro và iPhone 13 Pro Max nh&acirc;̣n được n&acirc;ng c&acirc;́p màn hình lớn với t&ocirc;́c đ&ocirc;̣ làm mới 120Hz thì tr&ecirc;n phi&ecirc;n bản ti&ecirc;u chu&acirc;̉n v&acirc;̃n chỉ có t&acirc;̀n s&ocirc;́ quét 60Hz. Tuy nhi&ecirc;n, đi&ecirc;̣n thoại v&acirc;̃n đáp ứng t&ocirc;́t các trải nghi&ecirc;̣m chơi game, xem phim hay giải trí m&ocirc;̣t cách mượt mà.</p>\r\n\r\n<p><img alt=\"Màn hình iPhone 13 256GB chính hãng tiếp tục sử dụng kích thước 6,1 inch\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/man-hinh-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Màn hình Super Retina XDR tr&ecirc;n iPhone 13 được đánh giá có đ&ocirc;̣ sáng t&ocirc;́t hơn đ&ecirc;́n 28% so với model trước nhờ đ&ocirc;̣ sáng 800 nits thay vì 600 nits. Do đó, sẽ mang đ&ecirc;́n cho người dùng cảm giác thoải mái khi hi&ecirc;̉n thị ngoài trời. Dù kh&ocirc;ng có t&acirc;̀n s&ocirc;́ quét cao nhưng màn hình hi&ecirc;̉n thị tr&ecirc;n đi&ecirc;̣n thoại v&acirc;̃n r&acirc;́t xu&acirc;́t sắc với hình ảnh ch&acirc;n th&acirc;̣t và đ&ocirc;̣ chi ti&ecirc;́t cao.</p>\r\n\r\n<h3><strong>C&acirc;́u hình mạnh mẽ</strong></h3>\r\n\r\n<p>iPhone 13 256GB VN/A giá rẻ được cho là đi&ecirc;̣n thoại nhanh nh&acirc;́t so với b&acirc;́t kỳ đ&ocirc;́i thủ hi&ecirc;̣n nào hi&ecirc;̣n nay khi được trang bị chip A15 Bionic. Con chip A14 Bionic tr&ecirc;n iPhone 12 v&ocirc;́n đã r&acirc;́t mạnh, nhưng giờ đ&acirc;y A15 Bionic lại có hi&ecirc;̣u su&acirc;́t tăng đáng k&ecirc;̉. Chính vì v&acirc;̣y, mua iPhone 13 chắc chắn sẽ đáp ứng t&acirc;́t cả nhu c&acirc;̀u của người dùng m&ocirc;̣t cách nhanh nh&acirc;́t.</p>\r\n\r\n<p>Nói m&ocirc;̣t chút v&ecirc;̀ chipset mới của Apple, gi&ocirc;́ng với th&ecirc;́ h&ecirc;̣ ti&ecirc;̀n nhi&ecirc;̣m nó cũng g&ocirc;̀m 6 nh&acirc;n CPU (2 nh&acirc;n hi&ecirc;̣u năng cao và 4 nh&acirc;n ti&ecirc;́t ki&ecirc;̣m đi&ecirc;̣n năng) 4 nh&acirc;n GPU. Tuy nhi&ecirc;n, giờ đ&acirc;y chip xử lý mới còn có th&ecirc;m 16 lõi&nbsp;Neural Engine cho máy học và AI, giúp nó có th&ecirc;̉ thực hi&ecirc;̣n được 15.8 nghìn phép tính m&ocirc;̃i gi&acirc;y.</p>\r\n\r\n<p><img alt=\"iPhone 13 256GB VN/A giá rẻ được cho là điện thoại nhanh nhất \" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/cau-hinh-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng những sở hữu c&acirc;́u hình mạnh mẽ, đi&ecirc;̣n thoại còn được trang bị k&ecirc;́t n&ocirc;́i 5G th&ecirc;́ h&ecirc;̣ mới được mở r&ocirc;̣ng với hơn 200 nhà mạng ở 60 qu&ocirc;́c gia. Ngoài ra Apple cũng trang bị vi&ecirc;n pin có dung lượng lớn hơn cho đi&ecirc;̣n thoại. Đ&acirc;y là m&ocirc;̣t trong những n&acirc;ng c&acirc;́p nh&acirc;̣n được nhi&ecirc;̀u sự quan t&acirc;m của người dùng bởi pin lu&ocirc;n là đi&ecirc;̉m y&ecirc;́u tr&ecirc;n iPhone.</p>\r\n\r\n<p>Tại thời đi&ecirc;̉m ra mắt, Apple đã c&ocirc;ng b&ocirc;́ iPhone 13 có thời lượng sử dụng pin l&acirc;u hơn đ&ecirc;́n 1.5 giờ so với iPhone 12. Đ&ecirc;̉ có được đi&ecirc;̀u này là cả m&ocirc;̣t quá trình từ nhi&ecirc;̀u y&ecirc;́u t&ocirc;́ như dung lượng pin được n&acirc;ng c&acirc;́p, màn hình hi&ecirc;̣u quả và chip xử lý ti&ecirc;́t ki&ecirc;̣m đi&ecirc;̣n năng. Tuy nhi&ecirc;n, đi&ecirc;̣n thoại v&acirc;̃n chỉ h&ocirc;̃ trợ sạc nhanh với c&ocirc;ng su&acirc;́t 20W và sạc kh&ocirc;ng d&acirc;y 15W.</p>\r\n\r\n<h3><strong>Camera ch&acirc;́t lượng</strong></h3>\r\n\r\n<p>Camera là m&ocirc;̣t trong những đi&ecirc;̉m sáng giá tr&ecirc;n iPhone 13 256GB chính hãng. Mặc dù đi&ecirc;̣n thoại v&acirc;̃n được trang bị hai &ocirc;́ng kính với đ&ocirc;̣ ph&acirc;n giả 12MP nhưng Apple đã n&acirc;ng c&acirc;́p khá nhi&ecirc;̀u giúp khả năng chụp ảnh cũng như video t&ocirc;́t hơn khá nhi&ecirc;̀u. Trong đó &ocirc;́ng kính chính có kích thước đi&ecirc;̉m ảnh 1.7um, thu sáng t&ocirc;́t hơn 47% so với model trước.</p>\r\n\r\n<p>Trong khi đó, camera góc si&ecirc;u r&ocirc;̣ng h&ocirc;̃ trợ t&ocirc;́t hơn trong các đi&ecirc;̀u ki&ecirc;̣n ánh sáng y&ecirc;́u và ít nhi&ecirc;̃u hơn và chụp nhi&ecirc;̀u cảnh hơn g&acirc;́p 4 l&acirc;̀n. Cảm bi&ecirc;́t mới ch&acirc;́t lượng giúp camera Ultra Wide của iPhone 13 giúp chụp ảnh thi&ecirc;́u sáng t&ocirc;́t hơn, b&ocirc;̉ sung ch&ecirc;́ đ&ocirc;̣ chụp đ&ecirc;m, ch&acirc;́t lượng hình ảnh ch&acirc;n thực hơn bao giờ h&ecirc;́t.</p>\r\n\r\n<p><img alt=\"Camera là một trong những điểm sáng giá trên iPhone 13 256GB chính hãng\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2021/camera-iphone-13-256gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Năm nay, gã kh&ocirc;̉ng l&ocirc;̀ c&ocirc;ng ngh&ecirc;̣ Mỹ cũng b&ocirc;̉ sung th&ecirc;m khá nhi&ecirc;̀u tính năng giúp vi&ecirc;̣c chụp ảnh trở n&ecirc;n chuy&ecirc;n nghi&ecirc;̣p hơn. Tính năng Photographic, cho phép người dùng chuy&ecirc;̉n đ&ocirc;̉i nhi&ecirc;̀u phong cách nhi&ecirc;̣t đ&ocirc;̣ màu khác nhau g&ocirc;̀m: ti&ecirc;u chu&acirc;̉n, &acirc;́m áp, mát mẻ, s&ocirc;́ng đ&ocirc;̣ng, đ&ocirc;̣ tương phản phong phú. Nhìn chung, ch&acirc;́t lượng hình ảnh của iPhone 13 và iPhone 12 kh&ocirc;ng có nhi&ecirc;̀u sự ch&ecirc;nh l&ecirc;̣ch trong nhi&ecirc;̀u tính u&ocirc;́ng.</p>\r\n\r\n<p>Nhưng đ&ocirc;́i với ch&ecirc;́ đ&ocirc;̣ ban đ&ecirc;m thì camera iPhone 13 mang đ&ecirc;́n ch&acirc;́t lượng t&ocirc;́t hơn nhờ Apple đã n&acirc;ng c&acirc;́p kích thước cảm bi&ecirc;́n lớn hơn. Mua iPhone 13 256GB VN/A người dùng còn được trải nghi&ecirc;̣m ch&ecirc;́ đ&ocirc;̣&nbsp;Cinematic Mode&nbsp;cho phép quay video chuy&ecirc;n nghi&ecirc;̣p như các b&ocirc;̣ phim đi&ecirc;̣n ảnh nhờ vi&ecirc;̣c làm mờ h&acirc;̣u cảnh.&nbsp;</p>\r\n\r\n<h3><strong>Có n&ecirc;n mua iPhone 13 256GB chính hãng giá rẻ</strong></h3>\r\n\r\n<p>Đánh giá iPhone 13 256GB VN/A cho th&acirc;́y đ&acirc;y là phi&ecirc;n bản n&acirc;ng c&acirc;́p hoàn hảo của iPhone 12, dù kh&ocirc;ng có nhi&ecirc;̀u đ&ocirc;̣t phá nhưng nó đã t&acirc;̣p trung vào trải nghi&ecirc;̣m người dùng hơn. Mua iPhone 13 256GB chính hãng là lựa chọn tuy&ecirc;̣t vời ở thời đi&ecirc;̉m này, đặc bi&ecirc;̣t XTsmart còn h&ocirc;̃ trợ trả góp 0% lãi su&acirc;́t cùng nhi&ecirc;̀u chính sách ưu đãi h&acirc;́p d&acirc;̃n cho khách hàng.</p>\r\n', 1800),
(110, 47, 49, 'Samsung Galaxy S20 Plus (8GB|128GB) BTS Edition (CTY)', '1307321390.png', 16890000, 12, '2021-11-22', '<h2>Đ&aacute;nh gi&aacute; chi tiết Samsung Galaxy S20 Plus (8GB|128GB) BTS Edition (CTY)</h2>\r\n\r\n<h2>C&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u, Samsung đ&atilde; cho ra mắt&nbsp;<strong><a href=\"https://www.xtsmart.vn/samsung-galaxy-s20-plus-bts-edition\" target=\"_blank\">Galaxy S20 Plus BTS Edition</a></strong>&nbsp;với sự hợp t&aacute;c của nh&oacute;m nhạc nổi tiếng nhất nh&igrave; Kpop &ndash; BTS. Flagship kh&ocirc;ng chỉ nổi bật về thiết kế, cấu h&igrave;nh m&agrave; đ&acirc;y c&ograve;n l&agrave; một cơ hội để người h&acirc;m mộ BTS thể hiện sự y&ecirc;u qu&yacute; thần tượng của m&igrave;nh.</h2>\r\n\r\n<h3><strong>Thiết kế thu h&uacute;t ngay &aacute;nh nh&igrave;n đầu ti&ecirc;n</strong></h3>\r\n\r\n<p>C&oacute; thể n&oacute;i, thiết kế l&agrave; điểm thu h&uacute;t nhất&nbsp;của phi&ecirc;n bản Galaxy S20 Plus BTS Edition c&oacute; một kh&ocirc;ng hai n&agrave;y. M&aacute;y kho&aacute;c tr&ecirc;n m&igrave;nh sắc t&iacute;m độc đ&aacute;o nhưng v&ocirc; c&ugrave;ng thời thượng, đ&acirc;y l&agrave; m&agrave;u sắc m&agrave; hầu hết c&aacute;c nh&agrave; sản xuất chỉ d&ugrave;ng cho phi&ecirc;n bản đặc biệt của m&igrave;nh m&agrave; th&ocirc;i. Điểm mới lạ n&agrave;y mang đến sự trẻ trung, c&aacute; t&iacute;nh ri&ecirc;ng cho người sở hữu.</p>\r\n\r\n<p><img alt=\"Galaxy S20 Plus BTS Edition có biểu tượng trái tim nhỏ nhắn nằm liền kề cụm camera chính\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>Điểm nhấn ấn tượng nhất tr&ecirc;n Galaxy S20 Plus BTS Edition ch&iacute;nh l&agrave; biểu tượng tr&aacute;i tim nhỏ nhắn nằm liền kề cụm camera ch&iacute;nh. B&ecirc;n cạnh đ&oacute;, sẽ xuất hiện logo BTS dưới t&ecirc;n nh&agrave; sản xuất Samsung. Ngo&agrave;i ra, h&atilde;ng c&ograve;n c&agrave;i sẵn Weverse &ndash; bộ chủ đề về BTS v&agrave; cộng đồng Fan c&ugrave;ng 7 chiếc photocard c&oacute; h&igrave;nh ảnh của c&aacute;c th&agrave;nh vi&ecirc;n BTS b&ecirc;n trong&nbsp;hộp.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh c&ocirc;ng nghệ hiện đại</strong></h3>\r\n\r\n<p>Samsung Galaxy S20 Plus BTS Edition được trang bị m&agrave;n h&igrave;nh tr&agrave;n viền c&oacute; k&iacute;ch thước tới 6,7 inch. Kh&ocirc;ng gian hiển thị n&agrave;y được xem l&agrave; lớn nhất nh&igrave; hiện nay, nhất l&agrave; kh&ocirc;ng bị giới hạn ở mọi g&oacute;c nh&igrave;n. H&igrave;nh ảnh hiển thị tr&ecirc;n Galaxy S20 Plus&nbsp;sẽ c&oacute; độ ph&acirc;n giải Quad HD+ v&ocirc; c&ugrave;ng sắc n&eacute;t.</p>\r\n\r\n<p><img alt=\"Galaxy S20 Plus BTS Edition được trang bị màn hình tràn viền có kích thước tới 6,7 inch\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/man-hinh-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>K&egrave;m theo đ&oacute; l&agrave; c&ocirc;ng nghệ Dynamic Amoled 2X mang đến chất lượng hiển thị kh&ocirc;ng thua k&eacute;m g&igrave; một chiếc TV hiện nay. Mọi chuyển động trở n&ecirc;n mượt m&agrave;, sống động với độ ph&acirc;n giải cao, sắc n&eacute;t, ch&acirc;n thật như thực tế.</p>\r\n\r\n<h3><strong>Camera chuy&ecirc;n nghiệp c&ugrave;ng biểu tượng tr&aacute;i tim</strong></h3>\r\n\r\n<p>Như đ&atilde; giới thiệu ở tr&ecirc;n, điểm nhấn tr&ecirc;n phi&ecirc;n bản n&agrave;y ch&iacute;nh l&agrave; biểu tượng tr&aacute;i tim nằm gần kề cụm camera sau. Galaxy S20 Plus BTS Edition c&oacute; tất cả 3 ống k&iacute;nh 64MP, 12MP, 12MP v&agrave; 1 cảm biến VGA mang đến khả năng chụp ảnh chuy&ecirc;n nghiệp, bắt trọn từng khoảnh khắc m&agrave; người d&ugrave;ng muốn lưu giữ.</p>\r\n\r\n<p><img alt=\"Galaxy S20 Plus BTS Edition là camera selfie 10MP\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/camera-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>C&ograve;n mặt trước Galaxy S20 Plus BTS Edition l&agrave; camera selfie 10MP với khả năng tự động lấy n&eacute;t chuẩn x&aacute;c. C&aacute;c ống k&iacute;nh đều được Samsung t&iacute;ch hợp c&aacute;c t&iacute;nh năng hỗ trợ hiện đại nhất n&ecirc;n d&ugrave; chụp ở camera n&agrave;o th&igrave; h&igrave;nh ảnh vẫn v&ocirc; c&ugrave;ng xuất sắc.</p>\r\n\r\n<h3><strong>Hiệu năng mạnh mẽ, thời lượng pin tốt</strong></h3>\r\n\r\n<p>Phi&ecirc;n bản Samsung Galaxy S20 Plus BTS Edition sở hữu bộ nhớ RAM 8GB c&ugrave;ng bộ nhớ trong l&ecirc;n đến 128GB. M&aacute;y kh&ocirc;ng chỉ mang đến hiệu năng mạnh mẽ với những pha xử l&yacute; t&aacute;c vụ mượt m&agrave;, nhanh ch&oacute;ng m&agrave; c&ograve;n c&oacute; kh&ocirc;ng gian lưu trữ rộng r&atilde;i. Theo đ&oacute;, người d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể tải phim, game hay lưu nhiều video, h&igrave;nh ảnh m&agrave; kh&ocirc;ng lo đầy bộ nhớ.</p>\r\n\r\n<p><img alt=\"Samsung Galaxy S20 Plus BTS Edition sở hữu bộ nhớ RAM 8GB cùng bộ nhớ trong lên đến 128GB\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/hieu-nang-galaxy-s20-plus-bts-edition-xtsmart.jpg\" /></p>\r\n\r\n<p>Để đ&aacute;p ứng nhu cầu sử dụng suốt ng&agrave;y, Samsung đ&atilde; trang bị thỏi pin lớn 4.500 mAh. Với những t&aacute;c vụ th&ocirc;ng thường, vi&ecirc;n pin n&agrave;y dư sức duy tr&igrave; đến ng&agrave;y thứ hai. Ch&iacute;nh v&igrave; vậy, bạn c&oacute; thể thoải m&aacute;i tận hưởng m&agrave; kh&ocirc;ng cần bận t&acirc;m dừng lại sạc giữa chừng.</p>\r\n\r\n<h3><strong>Mua Samsung Galaxy S20 Plus BTS Edition tại XTsmart</strong></h3>\r\n\r\n<p>Nếu bạn đang n&oacute;ng l&ograve;ng muốn sở hữu một chiếc Samsung Galaxy S20 Plus BTS Edition về cho m&igrave;nh th&igrave; XTsmart l&agrave; địa chỉ m&agrave; bạn c&oacute; thể tin tưởng để đến v&agrave; sắm chiếc smartphone độc đ&aacute;o ấy về cho m&igrave;nh. XTsmart lu&ocirc;n cam đoan mang đến cho kh&aacute;ch h&agrave;ng smartphone với chất lượng tốt nhất, gi&aacute; rẻ nhất thị&nbsp;trường TP.HCM v&agrave; Đ&agrave; Nẵng.</p>\r\n\r\n<p>Khi mua Samsung Galaxy S20 Plus BTS Edition tại XTsmart, qu&yacute; kh&aacute;ch h&agrave;ng c&ograve;n c&oacute; thể nhận được qu&agrave; tặng, ưu đ&atilde;i rất hấp dẫn. Ngo&agrave;i ra, XTsmart lu&ocirc;n c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp, tận t&igrave;nh sẵn s&agrave;ng giải đ&aacute;p mọi vấn đề của bạn về sản phẩm.</p>\r\n', 632),
(111, 47, 49, 'Samsung Galaxy Note 10 Plus (12GB|256GB) Mỹ (New Nobox)', '943036231.png', 13720000, 42, '2021-11-22', '<h2>Đ&aacute;nh gi&aacute; chi tiết Samsung Galaxy Note 10 Plus (12GB|256GB) Mỹ (New Nobox)</h2>\r\n\r\n<h2>Ngay từ khi ra mắt,&nbsp;<strong><a href=\"https://www.xtsmart.vn/samsung-galaxy-note-10-plus-12gb-256gb-my-new-nobox-\" target=\"_blank\">Galaxy Note 10 Plus 256GB New Nobox Mỹ</a></strong>&nbsp;đ&atilde; được đ&aacute;nh gi&aacute; cao bởi thi&ecirc;́t k&ecirc;́ đẹp mắt, c&acirc;́u hình mạnh mẽ cùng nhiều tính năng hiện đại ấn tượng. C&oacute; thể n&oacute;i, chiếc smartphone n&agrave;y đ&atilde; n&acirc;ng tầm trải nghiệm của người d&ugrave;ng l&ecirc;n một tầm cao mới.</h2>\r\n\r\n<h3><strong>Thiết kế tinh chỉnh ho&agrave;n hảo</strong></h3>\r\n\r\n<p>Về tổng thể, Galaxy Note 10 Plus 256GB New Nobox Mỹ vẫn mang ng&ocirc;n ngữ thiết kế đặc trưng của Galaxy Note series. Tuy nhi&ecirc;n, Samsung đ&atilde; ho&agrave;n thiện tốt hơn thế hệ trước với c&aacute;c đường viền cạnh/ g&oacute;c bao quanh m&aacute;y tr&ocirc;ng mềm mại hơn. Nhưng hơn hết l&agrave; vẫn giữ được sự sang trọng, mạnh mẽ v&agrave; nam t&iacute;nh vốn c&oacute;.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ còn tích hợp vân tay siêu âm vào thẳng màn hình\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, nh&agrave; sản xuất c&ograve;n tận dụng lợi thế của m&agrave;n h&igrave;nh tr&agrave;n viền n&ecirc;n d&ugrave; c&oacute; k&iacute;ch thước đến 6,8 inch nhưng Galaxy Note 10 Plus vẫn kh&ocirc;ng qu&aacute; lớn. Kh&ocirc;ng những vậy, Galaxy Note 10 Plus 256GB New Nobox Mỹ c&ograve;n t&iacute;ch hợp v&acirc;n tay si&ecirc;u &acirc;m v&agrave;o thẳng m&agrave;n h&igrave;nh. C&ocirc;ng nghệ n&agrave;y c&oacute; khả năng nhận diện nhanh, ch&iacute;nh x&aacute;c v&agrave; bảo mật tuyệt đối thiết bị c&aacute; nh&acirc;n của bạn.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ vẫn mang ngôn ngữ thiết kế đặc trưng của Galaxy Note series\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-lung-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Chưa hết, Samsung c&ograve;n trang bị th&ecirc;m khả năng kh&aacute;ng nước ở độ s&acirc;u 1,5m v&agrave; bụi bẩn chuẩn IP68 cho Galaxy Note 10 Plus 256GB&nbsp;Mỹ. Nhờ đ&oacute;, người d&ugrave;ng tha hồ vui chơi ở m&ocirc;i trường nước m&agrave; kh&ocirc;ng phải lo hư hỏng hay chập m&aacute;y.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh chuẩn &ldquo;điện ảnh&rdquo;</strong></h3>\r\n\r\n<p>Galaxy Note 10 Plus 256GB New Nobox Mỹ được trang bị tấm nền Dynamic AMOLED c&oacute; độ ph&acirc;n giải 3.040 x 1.440 pixels, đảm bảo hiển thị nội dung đầy đủ, sắc n&eacute;t v&agrave; kh&ocirc;ng bị giới hạn g&oacute;c nh&igrave;n tr&ecirc;n k&iacute;ch thước 6,8 inch. Được biết, tấm nền n&agrave;y c&ograve;n được hỗ trợ c&ocirc;ng nghệ chuẩn HDR10+ n&ecirc;n h&igrave;nh ảnh hiển thị c&oacute; độ s&aacute;ng cao, dải m&agrave;u rộng, sống động như thực tế.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ được trang bị tấm nền Dynamic AMOLED\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/man-hinh-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng chỉ mang lại trải nghiệm tuyệt vời, tấm nền tr&ecirc;n Galaxy Note 10 Plus 256GB New Nobox c&ograve;n hạn chế tối đa &aacute;nh s&aacute;ng xanh &ndash; t&aacute;c nh&acirc;n g&acirc;y hại cho mắt. V&igrave; vậy, d&ugrave; c&oacute; sử dụng trong thời gian d&agrave;i, mắt bạn vẫn kh&ocirc;ng gặp phải t&igrave;nh trạng mỏi hay nhức mắt như trước đ&acirc;y.</p>\r\n\r\n<h3><strong>Cụm camera chất lượng</strong></h3>\r\n\r\n<p>Samsung bố tr&iacute; hệ thống camera ch&iacute;nh tr&ecirc;n Galaxy Note 10 Plus 256GB New Nobox Mỹ theo chiều dọc, c&oacute; phần hơi lồi ra ở mặt lưng. Đ&oacute; l&agrave; cụm 3 ống k&iacute;nh c&ugrave;ng 1 cảm biến 3D ToF gi&uacute;p chuy&ecirc;n đo chiều s&acirc;u để qu&eacute;t h&igrave;nh ảnh 3D đặt dưới đ&egrave;n Flash. Điểm nổi bật ở đ&acirc;y ch&iacute;nh l&agrave; sự linh hoạt thay đổi khẩu độ trong từng điều kiện m&ocirc;i trường kh&aacute;c nhau. Do đ&oacute;, m&aacute;y đ&atilde; khắc phục được t&igrave;nh trạng chụp trong tối hay dưới &aacute;nh s&aacute;ng mặt trời một c&aacute;ch hiệu quả.</p>\r\n\r\n<p><img alt=\"hệ thống camera chính trên Galaxy Note 10 Plus 256GB New Nobox Mỹ theo chiều dọc\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/camera-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Ri&ecirc;ng mặt trước l&agrave; camera selfie 10MP, hỗ trợ nhận diện khu&ocirc;n mặt v&agrave; tự động lấy n&eacute;t (AF). C&oacute; thể n&oacute;i, Samsung đầu tư ng&agrave;y c&agrave;ng nhiều hơn, nghi&ecirc;m t&uacute;c hơn cho thiết bị của m&igrave;nh. C&oacute; lẽ &ocirc;ng lớn xứ kim chi muốn biến Galaxy Note 10 Plus 256GB New Nobox Mỹ th&agrave;nh một &ldquo;camera phone&rdquo; ch&iacute;nh hiệu.</p>\r\n\r\n<h3><strong>Cấu h&igrave;nh khủng</strong></h3>\r\n\r\n<p>L&agrave; d&ograve;ng điện thoại cao cấp, n&ecirc;n Galaxy Note 10 Plus 256GB New Nobox Mỹ c&oacute; sức mạnh vượt trội về hiệu năng cũng l&agrave; lẽ hiển nhi&ecirc;n. M&aacute;y sử dụng con chip Snapdragon 855 8 nh&acirc;n của Qualcomm, sản xuất tr&ecirc;n tiến tr&igrave;nh 7nm hiện đại c&ugrave;ng chip đồ họa GPU Adreno 64. Tương ứng l&agrave; bộ nhớ 12GB RAM v&agrave; 256GB bộ nhớ trong, tạo ra kh&ocirc;ng gian lưu trữ v&ocirc; c&ugrave;ng rộng r&atilde;i.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB New Nobox Mỹ sử dụng con chip Snapdragon 855\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/hieu-nang-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Nhờ tối ưu h&oacute;a tốt của phần cứng v&agrave; phần mềm m&agrave; Galaxy Note 10 Plus 256GB New Nobox mang đến những pha xử l&yacute; mượt m&agrave;, nhanh ch&oacute;ng&nbsp;kh&ocirc;ng cần phải load lại. Đồng thời, bạn c&oacute; thể thoải m&aacute;i tải phim, game m&agrave; kh&ocirc;ng phải lo t&igrave;nh trạng &ldquo;x&oacute;a &ndash; x&oacute;a &ndash; x&oacute;a &ldquo; do đầy bộ nhớ như trước đ&acirc;y.</p>\r\n\r\n<p><img alt=\"Galaxy Note 10 Plus 256GB Mỹ được trang bị thỏi pin có dung lượng khủng 4.300 mAh\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/pin-galaxy-note-10-plus-256gb-new-bobox-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Về pin, Galaxy Note 10 Plus 256GB Mỹ được trang bị thỏi pin c&oacute; dung lượng khủng 4.300 mAh c&ugrave;ng sạc nhanh 45W, tha hồ cho bạn&nbsp;sử dụng nguy&ecirc;n ng&agrave;y chỉ sau 1 giờ sạc m&agrave; th&ocirc;i.</p>\r\n\r\n<h3><strong>B&uacute;t S-Pen thế hế mới</strong></h3>\r\n\r\n<p>Với Galaxy Note 10 Plus 256GB New Nobox Mỹ, b&uacute;t S-Pen được hỗ trợ th&ecirc;m nhiều t&iacute;nh năng đặc biệt, hỗ trợ kết nối Bluetooth LE. Theo đ&oacute;, người d&ugrave;ng c&oacute; thể điều khiển từ xa một số thao t&aacute;c cơ bản, c&oacute; thể kể đến như chụp ảnh, bật nhạc, thay đổi ứng dụng, nhận diện chữ viết tay, ghi ch&uacute;,&hellip;</p>\r\n\r\n<h3><strong>Mua Galaxy Note 10 Plus 256GB New Nobox Mỹ tại XTsmart</strong></h3>\r\n\r\n<p>Qua b&agrave;i đ&aacute;nh gi&aacute; chi tiết về Galaxy Note 10 Plus 256GB New Nobox Mỹ, XTsmart hy vọng rằng bạn sẽ nhanh ch&oacute;ng sở hữu cho m&igrave;nh chiếc điện thoại tuyệt vời n&agrave;y. Vừa mang đến cho bạn những trải nghiệm l&yacute; th&uacute;, vừa thể hiện sự sang trọng, đẳng cấp. Hiện nay, tại XTsmart gi&aacute; của Galaxy Note 10 Plus Mỹ c&oacute; thể n&oacute;i l&agrave; rẻ nhất thị trường, đi c&ugrave;ng l&agrave; những phần qu&agrave; v&agrave; ưu đ&atilde;i si&ecirc;u hấp dẫn, k&egrave;m theo đ&oacute; l&agrave; ch&iacute;nh s&aacute;ch hậu m&atilde;i số 1 tại TP.HCM v&agrave; Đ&agrave; Nẵng.</p>\r\n', 166),
(112, 48, 52, 'Ốp lưng iPhone 13 Pro Max Leather Case with MagSafe ', '663173266.jpg', 1200000, 44, '2021-11-22', '', 25),
(113, 48, 51, 'SẠC DỰ PHÒNG HYPERJUICE USB-C + LIGHTNING 18W 10000mAh', '671719120.jpg', 1400000, 23, '2021-11-22', '', 77),
(114, 48, 48, 'ai nghe chơi game không dây Corsair Virtuoso RGB SE ', '1550058048.jpg', 4300000, 55, '2021-11-22', '', 7),
(115, 47, 54, 'Xiaomi poco F3 (8GB|256GB) NEW CTY', '620415731.png', 9900000, 55, '2021-11-24', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Sản phẩm được tự động k&iacute;ch hoạt bảo h&agrave;nh sau khi kết nối Internet.</li>\r\n	<li>Chip: Snapdragon Qualcomm 870 5G</li>\r\n	<li>Qualcomm Kryo 585 8 l&otilde;i l&ecirc;n đến 3.2GHz.</li>\r\n	<li>Qualcomm Adreno 650 GPU</li>\r\n	<li>RAM: 6GB / 8GB</li>\r\n	<li>ROM: 128GB / 256GB</li>\r\n	<li>Dung lượng pin: 4,520 mAH - Sạc nhanh 33W</li>\r\n	<li>M&agrave;n h&igrave;nh E4 AMOLED 6.67&quot; - Tần số qu&eacute;t 120Hz - Tần số lấy mẫu cảm ứng 360Hz</li>\r\n	<li>Trang bị Corning Gorrilla Glass 5 cho mặt lưng v&agrave; mặt trước.</li>\r\n	<li>Bộ 3 Camera sau: 48MP + 8MP + 5MP</li>\r\n	<li>Camera trước 20MP.</li>\r\n	<li>Loa k&eacute;p Dolby Atmos.</li>\r\n	<li>Trọng lượng: 196g</li>\r\n	<li>Mỏng 7.8mm</li>\r\n</ul>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/cb65c91035a1cc7c08813452e3338937.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/387176baa5ec37ea47ecf01f2b64b5fe.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/4b2d557ae44a63cd3c76ce0eab9b7fe9.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/a4f2c66d217d134c98cd7a50abcce1c7.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n\r\n<p><img src=\"https://vn-live-05.slatic.net/shop/31571c98b03cede670d38985d8cb4d4c.jpeg_2200x2200q80.jpg_.webp\" /></p>\r\n', 52),
(127, 47, 49, 'Galaxy S20 Plus (8GB|128GB) (CTY - Cũ 99%', '416762736.png', 11180000, 100, '2021-12-05', '<h2>Đ&aacute;nh gi&aacute; chi tiết Galaxy S20 Plus (8GB|128GB) (CTY - Cũ 99%)</h2>\r\n\r\n<h2><strong><a href=\"https://www.xtsmart.vn/galaxy-s20-plus-8gb-128gb-cty-cu-99\" target=\"_blank\">Galaxy S20 Plus 128GB cũ</a>&nbsp;l&agrave; mẫu điện thoại h&agrave;ng đầu của Samsung trong năm 2020. M&aacute;y được trang bị nhiều c&ocirc;ng nghệ hiện đại, đ&aacute;p ứng tốt mọi nhu cầu của người d&ugrave;ng. Dưới đ&acirc;y l&agrave; một số ưu điểm nổi bật m&agrave; XTsmart liệt k&ecirc; được, tham khảo ngay nh&eacute;!</strong></h2>\r\n\r\n<h3><strong>Thiết kế thu h&uacute;t, sang trọng</strong></h3>\r\n\r\n<p>Galaxy S20 Plus 128GB cũ g&acirc;y ấn tượng bởi thiết kế độc đ&aacute;o b&ecirc;n ngo&agrave;i với điểm nhấn l&agrave; khối camera ngang v&agrave; khung kim loại sang trọng. B&ecirc;n cạnh đ&oacute;, Samsung đ&atilde; kết hợp với m&agrave;n h&igrave;nh cong tạo được cảm gi&aacute;c thoải m&aacute;i&nbsp;khi cằm nắm. Mặc d&ugrave; c&oacute; m&agrave;n h&igrave;nh lớn nhưng nh&igrave;n tổng thể, Galaxy S20 Plus kh&ocirc;ng qu&aacute; cồng kềnh v&agrave; qu&aacute; nặng.</p>\r\n\r\n<p><img alt=\"thiet-ke-galaxy-s20-plus-128gb-cu-xtsmart\" src=\"https://www.xtsmart.vn/vnt_upload/news/02_2021/thiet-ke-galaxy-s20-plus-128gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, Galaxy S20 Plus 128GB cũ c&ograve;n mang đến sự đa dạng m&agrave;u sắc, bao gồm Cloud Blue, Cosmic Grey, Cosmic Black. Điều n&agrave;y gi&uacute;p người d&ugrave;ng c&oacute; thể thoải m&aacute;i hơn trong việc chọn lựa m&agrave;u sắc theo &yacute; th&iacute;ch hoặc phong thủy chẳng hạn. Nhưng c&oacute; một lưu &yacute; l&agrave; những m&agrave;u n&agrave;y xuất hiện phụ thuộc v&agrave;o khu vực.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh hiển thị ch&acirc;n thật</strong></h3>\r\n\r\n<p>Galaxy S20 Plus 128GB cũ được trang bị m&agrave;n h&igrave;nh AMOLED c&oacute; k&iacute;ch thước tới 6,7 inch, trong khi tiền nhiệm chỉ 6,4 inch m&agrave; th&ocirc;i. Ph&iacute;a trước m&agrave;n h&igrave;nh c&oacute; sự xuất hiện của một camera đục lỗ ở ngay trung t&acirc;m. Được biết, độ ph&acirc;n giải của Galaxy S20 Plus cũ đạt 3200 x 1440 pixels c&ugrave;ng Wide Quad High-Definition Plus (WQHD +). Độ ph&acirc;n giải cao n&agrave;y c&oacute; thể ti&ecirc;u hao kh&aacute; nhiều năng lượng, do đ&oacute; Samsung cũng trang bị th&ecirc;m t&iacute;nh năng t&ugrave;y chỉnh xuống độ ph&acirc;n giải thấp hơn.</p>\r\n\r\n<p><img alt=\"man-hinh-galaxy-s20-plus-128gb-cu-xtsmart\" src=\"https://www.xtsmart.vn/vnt_upload/news/02_2021/man-hinh-galaxy-s20-plus-128gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Đặc biệt, người d&ugrave;ng đ&aacute;nh gi&aacute; cao chất lượng hiển thị của Galaxy S20 Plus cũ một phần cũng v&igrave; tốc độ l&agrave;m mới m&agrave;n h&igrave;nh cũng đạt 120Hz. Nếu so với c&aacute;c thiết bị kh&aacute;c tr&ecirc;n thị trường hiện nay th&igrave; con số n&agrave;y l&agrave; gấp đ&ocirc;i. Trang bị n&agrave;y mang đến h&igrave;nh ảnh hiển thị v&ocirc; c&ugrave;ng sắc n&eacute;t, chi tiết sống động c&ugrave;ng m&agrave;u sắc t&aacute;i hiện kh&ocirc;ng kh&aacute;c g&igrave; thực tế.</p>\r\n\r\n<h3><strong>Hệ thống camera chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>Camera l&agrave; một trong những cải tiến nổi bật của Galaxy S20 Plus 128GB cũ. Thiết bị xuất hiện với 4 camera tương tự như tr&ecirc;n Galaxy S10 Plus. Tr&ecirc;n Galaxy S20 Plus&nbsp;c&oacute; một camera cực rộng với ống k&iacute;nh 12MP, khẩu độ f/2.2 v&agrave; đặc biệt l&agrave; camera tele n&acirc;ng cấp l&ecirc;n 64MP với khả năng zoom quang 3x. C&ugrave;ng với đ&oacute; l&agrave; khả năng zoom kỹ thuật số 30x.</p>\r\n\r\n<p><img alt=\"may-anh-galaxy-s20-plus-128gb-cu-xtsmart\" src=\"https://www.xtsmart.vn/vnt_upload/news/02_2021/may-anh-galaxy-s20-plus-128gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Mặc d&ugrave; đ&acirc;y l&agrave; những t&iacute;nh năng phổ biến tr&ecirc;n thị trường hiện nay nhưng c&oacute; thể thấy được ống k&iacute;nh tr&ecirc;n Galaxy S20 Plus cũ v&ocirc; c&ugrave;ng linh hoạt, qu&aacute; tr&igrave;nh chuyển đổi, thu hẹp khoảng c&aacute;ch v&ocirc; c&ugrave;ng mượt m&agrave;. Nhất l&agrave; những chi tiết được t&aacute;i hiện sắc n&eacute;t d&ugrave; đ&atilde; ph&oacute;ng to. Ngo&agrave;i ra, cụm camera ch&iacute;nh c&ograve;n c&oacute; một ống k&iacute;nh ToF được sử dụng để cảm nhận độ s&acirc;u, gi&uacute;p ph&acirc;n biệt giữa c&aacute;c đối tượng v&agrave; h&igrave;nh nền một c&aacute;ch ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p><img alt=\"camera-galaxy-s20-plus-128gb-cu-xtsmart\" src=\"https://www.xtsmart.vn/vnt_upload/news/02_2021/camera-galaxy-s20-plus-128gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Ở mặt trước l&agrave; camera selfie 10MP, tương tự như tr&ecirc;n Galaxy S10. Kết hợp với chế độ Live Focus, phần mềm tối ưu h&oacute;a xử l&yacute; hậu kỳ v&agrave; AI của Samsung. V&igrave; vậy những chụp bằng Galaxy S20 Plus 128GB cũ tr&ocirc;ng rất đẹp, từ m&agrave;u sắc cho đến chi tiết kh&ocirc;ng qu&aacute; &ldquo;lố&rdquo;, đảm bảo cho bạn c&oacute; một bức ảnh xuất sắc để khoe với bạn b&egrave;.</p>\r\n\r\n<h3><strong>Hiệu năng mạnh mẽ c&ugrave;ng pin lớn</strong></h3>\r\n\r\n<p>Cung cấp sức mạnh cho Galaxy S20 Plus 128GB cũ l&agrave; bộ xử l&yacute; Exynos 990, RAM 8GB. Đi k&egrave;m với đ&oacute; l&agrave; hệ điều h&agrave;nh Android 10. v&agrave; giao diện người d&ugrave;ng UI One. Điện thoại chắc chắn sẽ được hỗ trợ c&aacute;c bản cập nhật Android mới nhất. Trang bị tr&ecirc;n kh&ocirc;ng chỉ đ&aacute;p ứng c&aacute;c nhu cầu th&ocirc;ng thường của người d&ugrave;ng m&agrave; smartphone c&ograve;n đảm bảo hoạt động ở c&aacute;c t&aacute;c vụ nặng như chơi game đồ họa.</p>\r\n\r\n<p><img alt=\"Galaxy S20 Plus 128GB được trang bị bộ xử lý Exynos 990\" src=\"https://www.xtsmart.vn/vnt_upload/news/02_2021/hieu-nang-galaxy-s20-plus-128gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Cuối c&ugrave;ng, Galaxy S20 Plus cũ được trang bị thỏi pin c&oacute; dung lượng tới 4.500mAh, gi&uacute;p thiết bị k&eacute;o d&agrave;i thời gian hoạt động cả một ng&agrave;y. Đồng thời, Samsung c&ograve;n hỗ trợ th&ecirc;m sạc nhanh 25W qua USB-C hoặc Sạc nhanh kh&ocirc;ng d&acirc;y 2.0. Ngo&agrave;i ra, ở Galaxy S20 Plus 128GB cũ c&ograve;n chia sẻ năng lượng kh&ocirc;ng d&acirc;y rất đa dụng. Theo đ&oacute;, thiết bị cho ph&eacute;p bạn sạc Samsung Galaxy Buds Plus, smartwatch hoặc thiết bị sạc Qi kh&aacute;c bằng c&aacute;ch đặt n&oacute; ở mặt sau của điện thoại.</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; một số ưu điểm của Galaxy S20 Plus 128GB cũ, quả thật từ ngoại h&igrave;nh cho đến những t&iacute;nh năng b&ecirc;n trong đều được ho&agrave;n thiện tốt nhất. Nếu bạn c&ograve;n bất cứ thắc mắc n&agrave;o li&ecirc;n quan Galaxy S20 Plus 128GB cũ n&oacute;i ri&ecirc;ng v&agrave; c&aacute;c thiết bị Samsung n&oacute;i chung h&atilde;y li&ecirc;n hệ ngay Xtsmart để được giải đ&aacute;p sớm nhất nh&eacute;!</p>\r\n', 18);
INSERT INTO `san_pham` (`id_sp`, `id_dm_pro`, `id_sub_dm_pro`, `ten_sp`, `hinh_anh`, `don_gia`, `so_luong`, `ngay_nhap`, `mo_ta`, `so_luot_xem`) VALUES
(128, 47, 54, 'Xiaomi Redmi 9C (4GB|128GB) (CTY)', '55087766.png', 3390000, 200, '2021-12-06', '<h2>Đ&aacute;nh gi&aacute; chi tiết&nbsp;Xiaomi Redmi 9C 4GB-128GB</h2>\r\n\r\n<p><strong>Xiaomi Redmi 9C phi&ecirc;n bản mới 4GB RAM 128GB bộ nhớ trong chắc chắn sẽ l&agrave; lựa chọn ho&agrave;n hảo trong tầm gi&aacute; rẻ, khi bạn sẽ c&oacute; sức mạnh, khả năng đa nhiệm v&agrave; bộ nhớ được n&acirc;ng cấp đầy hấp dẫn</strong></p>\r\n\r\n<p><strong><img alt=\"Đánh giá điện thoại Xiaomi Redmi 9C (3GB-64GB)\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/redmi-9c-64gb-1.jpg\" /></strong></p>\r\n\r\n<h3><strong>Dung lượng pin l&ecirc;n tới 5000 mAh</strong></h3>\r\n\r\n<p>Redmi 9C mang tr&ecirc;n m&igrave;nh&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/sieu-trau-tren-4000-mah\">vi&ecirc;n pin dung lượng cao</a>&nbsp;h&agrave;ng đầu hiện nay với con số l&ecirc;n tới 5000 mAh. Bạn c&oacute; thể sử dụng thoải m&aacute;i trong hơn 2 ng&agrave;y sau một lần sạc đầy. Kh&ocirc;ng chỉ dung lượng cao, m&agrave; pin Xiaomi Redmi 9C c&ograve;n rất bền với chu kỳ sạc l&ecirc;n tới 1000 lần. Nghĩa l&agrave; sau 2,5 năm, pin của bạn cũng kh&ocirc;ng xuống cấp nhiều, giảm thiểu hiện tượng chai pin.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C (3GB-64GB) | Dung lượng pin lớn\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/redmi-9c-64gb-2.jpg\" /></p>\r\n\r\n<h3><strong>Th&ecirc;m bộ nhớ, th&ecirc;m sức mạnh</strong></h3>\r\n\r\n<p>Phi&ecirc;n bản Xiaomi Redmi 9C 128GB c&oacute; 4GB RAM v&agrave; bộ nhớ trong rất lớn 128GB, thoải m&aacute;i để bạn lưu trữ cũng như chạy đa nhiệm. Bộ vi xử l&yacute;&nbsp;<a href=\"https://fptshop.com.vn/tin-tuc/tin-moi/mediatek-ra-mat-con-chip-gia-re-helio-g35-va-helio-g25-tap-trung-vao-choi-game-122801\">Helio G35</a>&nbsp;tr&ecirc;n Xiaomi Redmi 9C c&oacute; sức mạnh vượt trội so với c&aacute;c đối thủ c&ugrave;ng tầm gi&aacute; nhờ tiến tr&igrave;nh 12nm, 8 nh&acirc;n tốc độ xung nhịp tối đa 2,3GHz v&agrave; GPU đồ họa PowerVR8320. Những t&aacute;c vụ thường ng&agrave;y đều diễn ra một c&aacute;ch mượt m&agrave;, nhanh ch&oacute;ng. Đồng thời bạn cũng c&oacute; thể giải tr&iacute; với những tựa game y&ecirc;u th&iacute;ch.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C (3GB-64GB) | Cấu hình mạnh mẽ\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/redmi-9c-64gb-3.jpg\" /></p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh lớn tr&agrave;n viền cực đ&atilde;</strong></h3>\r\n\r\n<p>Sở hữu&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/tren-60-inch\">m&agrave;n h&igrave;nh cực lớn</a>&nbsp;với k&iacute;ch thước 6,53 inch ho&agrave;n thiện kh&ocirc;ng viền dạng &ldquo;giọt nước&rdquo;, bạn sẽ được tha hồ đắm ch&igrave;m v&agrave;o những h&igrave;nh ảnh lớn, đẹp v&agrave; sắc n&eacute;t tr&ecirc;n chiếc điện thoại&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/xiaomi\">Xiaomi</a>. Những trải nghiệm như đọc b&aacute;o, v&agrave;o mạng x&atilde; hội, xem phim, chơi game đều trở n&ecirc;n hấp dẫn hơn. Ngo&agrave;i ra, m&agrave;n h&igrave;nh c&ograve;n c&oacute; chế độ giảm &aacute;nh s&aacute;ng xanh, chứng nhận bảo vệ mắt, để bạn c&oacute; thể sử dụng điện thoại l&acirc;u d&agrave;i m&agrave; kh&ocirc;ng bị mỏi mắt hay mất ngủ.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C (3GB-64GB) | Màn hình lớn với kích thước 6,53 inch\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/redmi-9c-64gb-4.jpg\" /></p>\r\n\r\n<h3><strong>Chụp ảnh thời thượng bằng 3 camera sau AI</strong></h3>\r\n\r\n<p>Redmi 9C g&acirc;y bất ngờ trong tầm gi&aacute; rẻ khi trang bị tới 3 camera, mang đến trải nghiệm nhiếp ảnh thực sự chuy&ecirc;n nghiệp cho người d&ugrave;ng. Bạn sẽ c&oacute; camera ch&iacute;nh 13MP, camera x&oacute;a ph&ocirc;ng 2MP v&agrave; camera chụp si&ecirc;u cận macro 2MP. Kết hợp c&ugrave;ng đ&egrave;n flash LED, ch&uacute;ng ta c&oacute; một cụm camera h&igrave;nh vu&ocirc;ng s&agrave;nh điệu, đ&uacute;ng xu hướng thời thượng.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C (3GB-64GB) | Bộ 3 camera sau AI\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/redmi-9c-64gb-5.jpg\" /></p>\r\n\r\n<h3><strong>Ảnh ch&acirc;n dung x&oacute;a ph&ocirc;ng đầy s&aacute;ng tạo</strong></h3>\r\n\r\n<p>Camera ch&iacute;nh 13MP v&agrave; camera x&oacute;a ph&ocirc;ng 2MP của Xiaomi Redmi 9C gi&uacute;p bạn chụp được những bức ảnh ch&acirc;n dung x&oacute;a ph&ocirc;ng, l&agrave;m nổi bật chủ thể v&agrave; l&agrave;m mờ hậu cảnh đầy ảo diệu. Cho bạn vẻ đẹp rực rỡ v&agrave; lu&ocirc;n tỏa s&aacute;ng trong mọi khung h&igrave;nh.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C (3GB-64GB) | Ảnh chân dung xóa phông\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-9c-4.jpg\" /></p>\r\n\r\n<h3><strong>Lấy n&eacute;t si&ecirc;u cận cảnh</strong></h3>\r\n\r\n<p>Những vật thể d&ugrave; nhỏ cũng đều c&oacute; n&eacute;t đẹp ri&ecirc;ng của n&oacute;. Với&nbsp;<a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/ong-kinh-macro-la-gi-tim-hieu-ve-camera-macro-tren-smartphone-130840\">camera chụp si&ecirc;u cận cảnh</a>, Redmi 9C c&oacute; thể lấy n&eacute;t ở cực ly cực gần, để bạn lưu giữ những cảnh đẹp hiếm c&oacute; như nhụy hoa, giọt sương tr&ecirc;n chiếc l&aacute;, mặt đồng hồ hay nhiều vật thể nhỏ th&uacute; vị kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C (3GB-64GB) | Lấy nét siêu cận cảnh\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-9c-5.jpg\" /></p>\r\n\r\n<h3><strong>Tự tin chụp ảnh selfie</strong></h3>\r\n\r\n<p>Camera trước của Redmi 9C t&iacute;ch hợp c&ocirc;ng nghệ l&agrave;m đẹp AI 5.0, chế độ ch&acirc;n dung AI v&agrave; hỗ trợ HDR, gi&uacute;p bạn lu&ocirc;n tự tin khi những n&eacute;t đẹp sẽ được l&agrave;m nổi bật, đồng thời những khuyết điểm được x&oacute;a đi một c&aacute;ch kh&eacute;o l&eacute;o. Kh&ocirc;ng chỉ vậy, Redmi 9C c&ograve;n c&oacute; nhiều thao t&aacute;c chụp ảnh th&ocirc;ng minh như vẫy tay để chụp, chỉ cần hướng l&ograve;ng tay của bạn v&agrave;o camera để hẹn giờ chụp selfie.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C 3GB-64GB | Tự tin chụp ảnh selfie\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-9c-6.jpg\" /></p>\r\n\r\n<h3><strong>Mở kh&oacute;a bằng cả khu&ocirc;n mặt v&agrave; v&acirc;n tay</strong></h3>\r\n\r\n<p>D&ugrave; trong tầm gi&aacute; rẻ, nhưng Redmi 9C 128GB vẫn t&iacute;ch hợp hai phương ph&aacute;p mở kh&oacute;a sinh trắc học ti&ecirc;n tiến nhất hiện nay l&agrave;&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/nhan-dien-khuon-mat\">nhận dạng khu&ocirc;n mặt</a>&nbsp;v&agrave;&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/bao-mat-van-tay\">cảm biến v&acirc;n tay</a>. Chỉ cần một c&uacute; chạm hoặc đưa&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai\">điện thoại</a>&nbsp;l&ecirc;n ngang tầm mắt, Redmi 9C sẽ sẵn s&agrave;ng đồng h&agrave;nh c&ugrave;ng bạn ngay lập tức.</p>\r\n\r\n<p><img alt=\"Xiaomi Redmi 9C 3GB-64GB | Mở khóa bằng cả khuôn mặt và vân tay\" src=\"https://images.fpt.shop/unsafe/fit-in/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/redmi-9c-64gb-7.jpg\" /></p>\r\n\r\n<h3><strong>Thể hiện c&aacute; t&iacute;nh với kiểu d&aacute;ng tươi trẻ</strong></h3>\r\n\r\n<p>Redmi 9C mang tr&ecirc;n m&igrave;nh thiết kế tao nh&atilde; với kiểu d&aacute;ng vu&ocirc;ng vắn, cụm camera vu&ocirc;ng đậm c&aacute; t&iacute;nh. Phần mặt lưng m&aacute;y được l&agrave;m họa tiết đường v&acirc;n sang trọng, cho cảm gi&aacute;c cầm nắm chắc chắn hơn, đồng thời kh&ocirc;ng b&aacute;n bẩn v&agrave; dấu v&acirc;n tay. Bạn sẽ c&oacute; 3 lựa chọn m&agrave;u sắc l&agrave; X&aacute;m, Xanh v&agrave; Cam, những m&agrave;u sắc hết sức trẻ trung, tr&agrave;n đầy sức sống v&agrave; đậm c&aacute; t&iacute;nh.</p>\r\n', 18),
(129, 47, 54, 'Xiaomi 11 Lite 5G NE (8GB/128GB )', '1834818691.png', 8900000, 211, '2021-12-06', '<h2>Đ&aacute;nh gi&aacute; chi tiết&nbsp;Xiaomi 11 Lite 5G NE 8GB - 128GB</h2>\r\n\r\n<p><strong>Kh&ocirc;ng chỉ l&agrave; một chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai\">điện thoại</a>,&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/xiaomi-11-lite-5g-ne\">Xiaomi 11 Lite 5G NE</a>&nbsp;xứng đ&aacute;ng được gọi l&agrave; biểu tượng thời trang trong giới smartphone, nơi bạn được cảm nhận sự thanh t&uacute; v&agrave; tinh tế đến từng đường n&eacute;t, c&ugrave;ng với đ&oacute; l&agrave; sức mạnh kh&ocirc;ng ngờ, kết nối 5G si&ecirc;u tốc độ, l&agrave;m chủ tương lai.</strong></p>\r\n\r\n<p><strong><img alt=\"Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-7.jpg\" /></strong></p>\r\n\r\n<h3><strong>Chiếc điện thoại mỏng nhẹ h&agrave;ng đầu hiện nay</strong></h3>\r\n\r\n<p>Trong khi smartphone đang dần c&oacute; xu hướng d&agrave;y hơn, Xiaomi 11 Lite 5G NE lại mỏng nhẹ đ&aacute;ng kinh ngạc với trọng lượng chỉ 158 gram v&agrave; độ mỏng 6,81mm. Kiểu d&aacute;ng si&ecirc;u mỏng c&ugrave;ng chất liệu k&iacute;nh v&agrave; kim loại cao cấp, kết hợp với những đường n&eacute;t bo cong tinh tế tạo n&ecirc;n một chiếc điện thoại đẹp thanh t&uacute;, kh&aacute;c biệt với c&aacute;c đối thủ tr&ecirc;n thị trường. Thiết kế camera gọn g&agrave;ng, v&ograve;ng h&agrave;o quang lấp l&aacute;nh, mặt lưng k&iacute;nh mờ sang trọng, từng chi tiết tr&ecirc;n Xiaomi 11 Lite 5G NE đều to&aacute;t l&ecirc;n vẻ cao cấp v&agrave; thời trang.</p>\r\n\r\n<p><img alt=\"thiết kế Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-6.jpg\" /></p>\r\n\r\n<h3><strong>Sắc m&agrave;u phong c&aacute;ch</strong></h3>\r\n\r\n<p>Kh&ocirc;ng chỉ đẹp, Xiaomi 11 Lite 5G NE c&ograve;n mang đến những lựa chọn m&agrave;u đa dạng, ph&ugrave; hợp với ng&ocirc;n ngữ thiết kế đẹp nhẹ nh&agrave;ng, thanh lịch. C&aacute;c m&agrave;u Đen tr&acirc;n ch&acirc;u, Hồng thanh đ&agrave;o, Xanh kẹo ngọt v&agrave; Trắng băng tuyết đều mang phong c&aacute;ch ri&ecirc;ng, được l&agrave;m c&aacute;ch điệu độc đ&aacute;o, nổi bật c&aacute; t&iacute;nh của ri&ecirc;ng bạn.</p>\r\n\r\n<p><img alt=\"màu sắc Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-1.jpg\" /></p>\r\n\r\n<h3><strong>H&igrave;nh ảnh Dolby Vision, ch&acirc;n thực đến từng chi tiết</strong></h3>\r\n\r\n<p><a href=\"https://fptshop.com.vn/dien-thoai/tren-60-inch\">Điện thoại m&agrave;n h&igrave;nh lớn</a>&nbsp;với m&agrave;n AMOLED 6,55 inch&nbsp;hỗ trợ c&ocirc;ng nghệ Dolby Vision thường được sử dụng tr&ecirc;n c&aacute;c TV cao cấp v&agrave; trong rạp chiếu phim, mang đến h&igrave;nh ảnh ch&acirc;n thực đ&aacute;ng kinh ngạc. Độ s&acirc;u m&agrave;u 10 bit, c&ocirc;ng nghệ TrueColor v&agrave; chuẩn m&agrave;u DCI-P3 gi&uacute;p m&agrave;u sắc sống động, ch&iacute;nh x&aacute;c hơn bao giờ hết. Độ tương phản 5.000.000:1 v&agrave; c&ocirc;ng nghệ HDR10+ cho từng cảnh s&aacute;ng tối được t&aacute;i hiện tuyệt vời để bạn đắm ch&igrave;m v&agrave;o kh&ocirc;ng gian h&igrave;nh ảnh ho&agrave;n mỹ. M&agrave;n h&igrave;nh chất lượng đỉnh cao khiến mọi thứ đều hấp dẫn hơn tr&ecirc;n Xiaomi 11 Lite 5G NE.</p>\r\n\r\n<p><img alt=\"màn hình Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-5.jpg\" /></p>\r\n\r\n<h3><strong>Mượt m&agrave; với tốc độ l&agrave;m mới 90Hz</strong></h3>\r\n\r\n<p>Với tốc độ l&agrave;m mới 90Hz, tốc độ lấy mẫu cảm ứng 240Hz, m&agrave;n h&igrave;nh Xiaomi 11 Lite 5G NE mượt m&agrave; cả về chuyển động h&igrave;nh ảnh lẫn phản hồi cảm ứng. Bạn sẽ cảm nhận được tốc độ phản hồi nhanh vượt trội ở từng thao t&aacute;c vuốt chạm. D&ugrave; l&agrave; chơi game hay chỉ đọc b&aacute;o, lướt Facebook th&ocirc;ng thường, m&agrave;n h&igrave;nh tần số qu&eacute;t cao vẫn lu&ocirc;n tạo ra sự kh&aacute;c biệt.</p>\r\n\r\n<p><img alt=\"90 Hz Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-4.jpg\" /></p>\r\n\r\n<h3><strong>Lu&ocirc;n lu&ocirc;n tỏa s&aacute;ng d&ugrave; ng&agrave;y hay đ&ecirc;m</strong></h3>\r\n\r\n<p>Chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/xiaomi\">Xiaomi</a>&nbsp;n&agrave;y mang tr&ecirc;n m&igrave;nh 3 camera sau, bao gồm camera ch&iacute;nh 64MP khẩu độ lớn f/1.79, camera g&oacute;c si&ecirc;u rộng 8MP v&agrave; camera telemacro 5MP, ngo&agrave;i ra camera trước cũng c&oacute; độ ph&acirc;n giải cao 20MP. Thật tuyệt vời khi Xiaomi 11 Lite 5G NE hỗ trợ chế độ chụp đ&ecirc;m cho cả camera ch&iacute;nh, camera g&oacute;c si&ecirc;u rộng v&agrave; camera trước. Điều n&agrave;y gi&uacute;p bạn lu&ocirc;n tự tin khi chụp ảnh trong điều kiện thiếu s&aacute;ng. H&igrave;nh ảnh được t&aacute;i hiện tươi s&aacute;ng, r&otilde; n&eacute;t v&agrave; ch&acirc;n thực trong mọi ho&agrave;n cảnh.</p>\r\n\r\n<p><img alt=\"chụp thiếu sáng Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-9.jpg\" /></p>\r\n\r\n<h3><strong>Chế độ điện ảnh AI một chạm</strong></h3>\r\n\r\n<p>Phần cứng camera chất lượng kết hợp với những t&iacute;nh năng AI th&ocirc;ng minh tạo n&ecirc;n chế độ điện ảnh AI một chạm, chỉ cần một chạm để bạn tạo ra những thước phim kỳ diệu. H&agrave;ng loại hiệu ứng như đ&oacute;ng băng thời gian, đ&oacute;ng băng khung h&igrave;nh, phơi s&aacute;ng, thế giới song song sẽ được &aacute;p dụng một c&aacute;ch linh hoạt như trong c&aacute;c bộ phim điện ảnh chuy&ecirc;n nghiệp. Ngo&agrave;i ra Xiaomi 11 Lite 5G NE c&ograve;n th&iacute;ch hợp cho những người s&aacute;ng tạo nội dung với chế độ vlog mới, c&oacute; 7 chế độ l&agrave;m vlog để bạn c&oacute; thể tạo n&ecirc;n những vlog th&uacute; vị bất cứ l&uacute;c n&agrave;o.</p>\r\n\r\n<p><img alt=\"AI One Click Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-3.jpg\" /></p>\r\n\r\n<h3><strong>Sẵn s&agrave;ng đương đầu với mọi thử th&aacute;ch</strong></h3>\r\n\r\n<p>Bộ vi xử l&yacute; Snapdragon 778G mang tới sức mạnh đ&aacute;ng kinh ngạc, sẵn s&agrave;ng đối mặt với mọi thử th&aacute;ch với 8 nh&acirc;n Kryo 670 tốc độ tối đa 2.4GHz, GPU Adreno 642L chuy&ecirc;n game v&agrave; hỗ trợ mạng 5G si&ecirc;u tốc. Bạn c&oacute; thể l&agrave;m mọi việc, từ chỉnh sửa ảnh, video cho đến chơi c&aacute;c tựa game nặng tr&ecirc;n Xiaomi 11 Lite 5G NE m&agrave; kh&ocirc;ng gặp bất cứ vấn đề g&igrave;. Mạng 5G mở ra một kỷ nguy&ecirc;n ho&agrave;n to&agrave;n mới, nơi ch&uacute;ng ta c&oacute; thể xem video trực tuyến, livestream, chơi game online v&agrave; tải xuống ở tốc độ cao mọi l&uacute;c mọi nơi.</p>\r\n\r\n<p><img alt=\"cấu hình Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-8.jpg\" /></p>\r\n\r\n<h3><strong>Sạc nhanh 33W, nạp đầy năng lượng trong chớp mắt</strong></h3>\r\n\r\n<p>Mỏng nhẹ l&agrave; vậy nhưng Xiaomi 11 Lite 5G NE vẫn đủ sức mang theo vi&ecirc;n pin dung lượng cao 4250 mAh, thoải m&aacute;i cho mọi trải nghiệm trong suốt cả ng&agrave;y. Ấn tượng hơn nữa khi điện thoại đi k&egrave;m bộ sạc nhanh 33W, chỉ mất khoảng 15 ph&uacute;t để sử dụng th&ecirc;m nửa ng&agrave;y, nhanh ch&oacute;ng nạp đầy năng lượng cho cuộc sống hiện đại.</p>\r\n\r\n<p><img alt=\"sạc nhanh Xiaomi 11 Lite 5G NE\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/Xiaomi-11-Lite-5G-NE-2.jpg\" /></p>\r\n\r\n<h3><strong>Mang đến trải nghiệm tốt nhất</strong></h3>\r\n\r\n<p>Xiaomi 11 Lite 5G NE được thiết kế để l&agrave;m h&agrave;i l&ograve;ng người d&ugrave;ng, d&ugrave; l&agrave; những chi tiết nhỏ nhất. Điện thoại sở hữu cụm loa k&eacute;p, cho trải nghiệm &acirc;m thanh sống động, nhất l&agrave; khi xem phim hay chơi game; cảm biến v&acirc;n tay cạnh b&ecirc;n gi&uacute;p bạn mở kh&oacute;a m&aacute;y dễ d&agrave;ng; ống dẫn nhiệt th&ocirc;ng minh mang đến khả năng tản nhiệt hiệu quả, cho m&aacute;y lu&ocirc;n lu&ocirc;n m&aacute;t mẻ.</p>\r\n', 29),
(130, 47, 54, 'Xiaomi Redmi note 10S (8GB|128GB) NEW CTY', '1512163810.png', 6300000, 66, '2021-12-06', '<h2>Đ&aacute;nh gi&aacute; chi tiết&nbsp;Xiaomi Redmi Note 10S 8GB-128GB</h2>\r\n\r\n<p><strong>C&ugrave;ng&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/xiaomi-redmi-note-10s\">Xiaomi Redmi Note 10S</a>&nbsp;nắm giữ mọi khoảnh khắc với bộ tứ camera 64MP chuy&ecirc;n nghiệp, trải nghiệm m&agrave;n h&igrave;nh AMOLED tuyệt đẹp v&agrave; hiệu năng vốn đ&atilde; th&agrave;nh thương hiệu của d&ograve;ng Redmi. H&atilde;y bắt đầu cuộc phi&ecirc;u lưu của bạn theo c&aacute;ch hứng khởi nhất.</strong></p>\r\n\r\n<p><strong><img alt=\"Xiaomi Redmi Note 10S\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-note-10s-1.jpg\" /></strong></p>\r\n\r\n<h3><strong>Nắm giữ khoảnh khắc, lưu lại kỷ niệm</strong></h3>\r\n\r\n<p>Bộ tứ camera tr&ecirc;n Redmi Note 10S lu&ocirc;n sẵn s&agrave;ng c&ugrave;ng bạn ghi lại những khoảnh khắc đ&aacute;ng nhớ nhất. Thật dễ d&agrave;ng để chụp ảnh đẹp trong mọi ho&agrave;n cảnh với sự đa năng của 4 camera. Nổi bật nhất tất nhi&ecirc;n l&agrave; camera ch&iacute;nh 64MP, chụp ảnh sắc n&eacute;t tới từng chi tiết; tiếp đến l&agrave; camera g&oacute;c si&ecirc;u rộng 8MP, camera đo độ s&acirc;u 2MP v&agrave; camera macro 2MP. Bạn sẽ kh&ocirc;ng bỏ qua bất cứ điều g&igrave; th&uacute; vị trong cuộc sống khi đồng h&agrave;nh c&ugrave;ng Xiaomi Redmi Note 10S.</p>\r\n\r\n<p><img alt=\"camera Xiaomi Redmi Note 10S\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-note-10s-2.jpg\" /></p>\r\n\r\n<h3><strong>Chụp đ&ecirc;m ảo diệu</strong></h3>\r\n\r\n<p>Dưới b&oacute;ng đ&ecirc;m mờ ảo, những &aacute;nh đ&egrave;n lung linh v&agrave; nhiều cảnh đẹp kh&aacute;c sẽ hiện ra. Redmi Note 10S c&oacute; thể bắt trọn vẻ đẹp ấy với khả năng chụp đ&ecirc;m xuất sắc. Cảm biến độ ph&acirc;n giải cao 64MP, khẩu độ lớn f/1.79 v&agrave; hỗ trợ chụp đ&ecirc;m&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/ai-camera\">camera AI</a>&nbsp;th&ocirc;ng minh gi&uacute;p &aacute;nh s&aacute;ng được đẩy l&ecirc;n ở mức tự nhi&ecirc;n, m&agrave;u sắc ch&iacute;nh x&aacute;c, giảm thiểu độ nhiễu đồng thời kh&ocirc;ng giảm chi tiết của ảnh chụp. Bạn ho&agrave;n to&agrave;n c&oacute; thể tự tin tỏa s&aacute;ng trong m&agrave;n đ&ecirc;m với chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/xiaomi\">Xiaomi</a>&nbsp;n&agrave;y.</p>\r\n\r\n<p><img alt=\"chụp đêm Xiaomi Redmi Note 10S\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-note-10s-3.jpg\" /></p>\r\n\r\n<h3><strong>Thế giới giải tr&iacute; tuyệt mỹ tr&ecirc;n m&agrave;n h&igrave;nh AMOLED sống động</strong></h3>\r\n\r\n<p>Tận hưởng những gi&acirc;y ph&uacute;t giải tr&iacute; tuyệt vời tr&ecirc;n chiếc&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/tren-60-inch\">điện thoại m&agrave;n h&igrave;nh lớn</a>&nbsp;6.43 inch AMOLED,&nbsp;nơi c&aacute;c nội dung hiển thị với m&agrave;u sắc ấn tượng nhất. Dải m&agrave;u rộng DCI-P3 cho m&agrave;u sắc ch&iacute;nh x&aacute;c v&agrave; ch&acirc;n thực, độ tương phản cao l&ecirc;n tới 4.500.000:1 mang đến những h&igrave;nh ảnh đẹp m&atilde;n nh&atilde;n. M&agrave;n h&igrave;nh n&agrave;y cũng được chế t&aacute;c viền mỏng với camera trước nằm ở vị tr&iacute; gọn g&agrave;ng, tạo t&iacute;nh thẩm mỹ cao, đồng thời n&acirc;ng tầm trải nghiệm xem.</p>\r\n\r\n<p><img alt=\"màn hình Xiaomi Redmi Note 10S\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-note-10s-4.jpg\" /></p>\r\n\r\n<h3><strong>Bảo vệ đ&ocirc;i mắt của bạn</strong></h3>\r\n\r\n<p>Xiaomi Redmi Note 10S t&iacute;ch hợp rất nhiều t&iacute;nh năng để bảo vệ mắt của bạn trong suốt qu&aacute; tr&igrave;nh sử dụng điện thoại. Cảm biến &aacute;nh s&aacute;ng 360 độ cực nhạy, gi&uacute;p điện thoại nhanh ch&oacute;ng thay đổi độ s&aacute;ng m&agrave;n h&igrave;nh theo m&ocirc;i trường; chế độ đọc 3.0 m&ocirc; phỏng c&aacute;c m&aacute;y đọc s&aacute;ch h&agrave;ng đầu, d&agrave;nh cho những người th&iacute;ch đọc s&aacute;ch tr&ecirc;n điện thoại; bộ lọc &aacute;nh s&aacute;ng xanh th&ocirc;ng minh gi&uacute;p dịu mắt hơn khi sử dụng&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai\">điện thoại</a>&nbsp;l&acirc;u d&agrave;i. Tất cả đều hướng tới đ&ocirc;i mắt khỏe mạnh cho người d&ugrave;ng.</p>\r\n\r\n<p><img alt=\"bảo vệ mắt Xiaomi Redmi Note 10S\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-note-10s-5.jpg\" /></p>\r\n\r\n<h3><strong>Loa ngo&agrave;i Hi-Res Audio chất lượng cao</strong></h3>\r\n\r\n<p>Để mang đến những &acirc;m thanh lớn hơn v&agrave; dải &acirc;m rộng hơn, Xiaomi Redmi Note 10S sử dụng hệ thống loa k&eacute;p chất lượng cao Hi-Res Audio. Bạn sẽ được trực tiếp tận hưởng &acirc;m thanh lớn v&agrave; sống động khi chơi game, xem phim m&agrave; kh&ocirc;ng cần phải sử dụng tai nghe.</p>\r\n\r\n<p><img alt=\"loa ngoài Xiaomi Redmi Note 10S\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-note-10s-6.jpg\" /></p>\r\n\r\n<h3><strong>Tăng cường hiệu suất</strong></h3>\r\n\r\n<p>Trang bị bộ vi xử l&yacute; Helio G95 với 8 nh&acirc;n tốc độ cao 2.05GHz, Redmi Note 10S đủ sức mạnh để bạn trải nghiệm mọi ứng dụng. Hiệu suất chơi game cũng được tăng cường nhờ GPU thế hệ mới. Hơn nữa, Note 10S c&ograve;n mang tr&ecirc;n m&igrave;nh một động cơ rung tuyến t&iacute;nh đặc biệt, mang đến c&aacute;c phản hồi ch&acirc;n thực cho game thủ khi chơi game.</p>\r\n\r\n<p><img alt=\"cấu hình Xiaomi Redmi Note 10S\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/xiaomi-redmi-note-10s-7.jpg\" /></p>\r\n\r\n<h3><strong>Tinh tế v&agrave; cao cấp</strong></h3>\r\n\r\n<p>Redmi Note 10S l&agrave; chiếc điện thoại sẽ khiến bạn y&ecirc;u ngay từ c&aacute;i nh&igrave;n đầu ti&ecirc;n nhờ những đường bo tr&ograve;n tinh tế, cụm camera chế t&aacute;c hiện đại v&agrave; mặt lưng b&oacute;ng bẩy sang trọng. Phần&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai/bao-mat-van-tay\">điện thoại c&oacute; cảm biến v&acirc;n tay</a>&nbsp;được đặt ở cạnh b&ecirc;n tiện lợi, gi&uacute;p người d&ugrave;ng thao t&aacute;c mở kh&oacute;a trong chớp mắt. Cảm gi&aacute;c cầm nắm thoải m&aacute;i, nhẹ nh&agrave;ng khi sử dụng v&agrave; vẻ ngo&agrave;i hấp dẫn gi&uacute;p m&aacute;y nhanh ch&oacute;ng chiếm được cảm t&igrave;nh từ ph&iacute;a người d&ugrave;ng.</p>\r\n', 61),
(131, 47, 49, 'SAMSUNG GALAXY S9 PLUS 64GB LIKE NEW (CTY', '6233800.png', 5700000, 44, '2021-12-06', '<h2>Đ&aacute;nh gi&aacute; chi tiết SAMSUNG GALAXY S9 PLUS 64GB LIKE NEW (CTY)</h2>\r\n\r\n<h2>L&agrave; phi&ecirc;n bản cao cấp của Samsung trong năm 2018,<strong><a href=\"https://www.xtsmart.vn/samsung-galaxy-s9-plus-6gb-64gb-97-likenew-han-quoc\" target=\"_blank\">&nbsp;</a><a href=\"https://www.xtsmart.vn/samsung-galaxy-s9-plus-64gb-like-new-cty\">Galaxy S9 Plus 64GB LIKE NEW ( CTY )</a><a href=\"https://www.xtsmart.vn/samsung-galaxy-s9-plus-6gb-64gb-97-likenew-han-quoc\" target=\"_blank\">&nbsp;</a></strong>&nbsp;sở hữu nhiều n&acirc;ng cấp vượt trội. Nổi bật nhất l&agrave; thiết kế sang trọng, cụm camera k&eacute;p đầu ti&ecirc;n của Galaxy S series c&ugrave;ng bộ bộ vi xử l&yacute; mạnh mẽ h&agrave;ng đầu. Tất cả gi&uacute;p cho Galaxy S9 Plus c&oacute; được chỗ đứng vững chắc trong l&ograve;ng người d&ugrave;ng c&ocirc;ng nghệ.</h2>\r\n\r\n<h3><strong>Thiết kế tr&ocirc;ng quen m&agrave; lạ</strong></h3>\r\n\r\n<p>Galaxy S9 Plus 64GB Like New Cty&nbsp;H&agrave;n Quốc sở hữu khung kim loại chắc chắn tương tự như Galaxy S8. D&ugrave; kế thừa ng&ocirc;n ngữ thiết kế từ đ&agrave;n anh, nhưng nếu nh&igrave;n kĩ, Samsung đ&atilde; ho&agrave;n thiện&nbsp;một số chi tiết tr&ecirc;n thiết bị mới. Cụ thể như Galaxy S9 Plus được gọt mỏng hơn, c&aacute;c đường viền ở g&oacute;c - cạnh được gia c&ocirc;ng tỉ mỉ, tinh tế hơn.</p>\r\n\r\n<p><img alt=\"Galaxy S9 Plus 64GB cũ 97% Hàn Quốc sở hữu thiết kế sang trọng, bóng bẩy\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-galaxy-s9-plus-64gb-cu-97-han-quoc-xtsmart.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, cảm biến v&acirc;n tay cũng được dời xuống ph&iacute;a dưới cụm camera k&eacute;p. Sự thay đổi n&agrave;y gi&uacute;p người d&ugrave;ng thao t&aacute;c dễ d&agrave;ng, &iacute;t bị nhầm lẫn như c&aacute;ch bố tr&iacute; tr&ecirc;n tiền nhiệm. Cuối c&ugrave;ng, ở bề mặt khung kim loại, Samsung đ&atilde; l&agrave;m nh&aacute;m đi ch&uacute;t &iacute;t để việc cầm nắm được chắc chắn hơn, hạn chế thấp nhất t&igrave;nh trạng tuột ra khỏi tay khi đang sử dụng.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh v&ocirc; cực xuất sắc</strong></h3>\r\n\r\n<p>Đ&uacute;ng với xu hướng hiện nay, Galaxy S9 Plus 64GB cũ gi&aacute; rẻ sở hữu m&agrave;n h&igrave;nh v&ocirc; cực c&oacute; k&iacute;ch thước 6,2 inch theo tỉ lệ 18,5:9. Samsung sử dụng tấm nền Super AMOLED truyền thống c&oacute; độ ph&acirc;n giải QuadHD+. K&egrave;m theo đ&oacute; l&agrave; c&ocirc;ng nghệ HDR 10, sự kết hợp n&agrave;y mang đến cho người d&ugrave;ng trải nghiệm thị gi&aacute;c rất th&uacute; vị kể cả xem phim hay chơi c&aacute;c game đồ họa với chất ảnh rực rỡ, h&igrave;nh ảnh sắc n&eacute;t, độ tương phản c&oacute; chiều s&acirc;u.</p>\r\n\r\n<p><img alt=\"Galaxy S9 Plus 64GB cũ giá rẻ sở hữu màn hình vô cực có kích thước 6,2 inch \" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/man-hinh-samsung-galaxy-s9-plus-64gb-cu-97-han-quoc-xtsmart.jpg\" /></p>\r\n\r\n<h3><strong>Cấu h&igrave;nh mạnh mẽ</strong></h3>\r\n\r\n<p>Nh&agrave; sản xuất xứ kim chi đ&atilde; n&acirc;ng cấp kh&aacute; nhiều về cấu h&igrave;nh khi đưa con chip Exynos 9810 v&agrave;o Galaxy S9 Plus Like New ( Cty ). Ngo&agrave;i ra, hệ thống được hỗ trợ bởi RAM 6GB v&agrave; bộ nhớ trong 64GB. Theo h&atilde;ng, việc tăng RAM n&agrave;y là&nbsp;rất cần thiết cho cụm camera k&eacute;p.</p>\r\n\r\n<p><img alt=\"Mọi tác vụ trên Galaxy S9 Plus 64GB cũ 97% Hàn Quốc được diễn ra nhanh, mượt \" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/hieu-nang-galaxy-s9-plus-64gb-cu-97-han-quoc-xtsmart.jpg\" /></p>\r\n\r\n<p>Qua trải nghiệm thực tế, con chip &ldquo;c&acirc;y nh&agrave; l&aacute; vườn&rdquo; của Samsung khẳng định tr&igrave;nh chạy đơn &ndash; đa nhiệm cực tốt. Mọi t&aacute;c vụ tr&ecirc;n Galaxy S9 Plus Like New ( Cty )&nbsp;được diễn ra nhanh, mượt đặc biệt trong qu&aacute; tr&igrave;nh chơi game nặng, kh&ocirc;ng chỉ đồ họa hiển thị đẹp m&agrave; thao t&aacute;c trơn tru, kh&ocirc;ng hề xảy ra t&igrave;nh trạng giật, lag hay đứng m&aacute;y.</p>\r\n\r\n<h3><strong>Camera k&eacute;p đầu ti&ecirc;n của Galaxy S series</strong></h3>\r\n\r\n<p>Như đ&atilde; giới thiệu, Galaxy S9 Plus Like New ( Cty ) được trang bị cụm camera k&eacute;p 12MP ở mặt sau. Bao gồm một camera g&oacute;c rộng, một camera tele gi&uacute;p người d&ugrave;ng chụp được những bức h&igrave;nh xo&aacute; ph&ocirc;ng chuy&ecirc;n nghiệp. Điều đ&aacute;ng n&oacute;i ở đ&acirc;y l&agrave; cụm camera n&agrave;y c&oacute; thể thay đổi khẩu độ linh hoạt từ f/1.5 l&ecirc;n f/2.4 v&agrave; ngược lại.</p>\r\n\r\n<p><img alt=\"Galaxy S9 Plus 64GB cũ 97% Hàn Quốc được trang bị cụm camera kép 12MP ở mặt sau. \" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/may-anh-galaxy-s9-plus-64gb-cu-97-han-quoc-xtsmart.jpg\" /></p>\r\n\r\n<p>Sự thay đổi khẩu độ linh hoạt n&agrave;y đảm bảo cho h&igrave;nh ảnh đạt được chất lượng tốt nhất, độ n&eacute;t, m&agrave;u sắc, cũng như độ chi tiết, hạn chế hiệu tượng nhiễu hạt khi thiếu/ thừa s&aacute;ng. Ở mặt trước, camera selfie c&oacute; độ ph&acirc;n giải l&ecirc;n đến 8MP, c&oacute; thể gọi l&agrave; kh&aacute; cao cấp so với những flagship kh&aacute;c tr&ecirc;n thị trường hiện nay.</p>\r\n\r\n<p><img alt=\"Điều đáng nói ở đây là cụm camera này có thể thay đổi khẩu độ linh hoạt từ f/1.5 lên f/2.4 và ngược lại.\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/camera-sau-galaxy-s9-plus-64gb-cu-97-han-quoc-xtsmart.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng dừng lại ở đ&oacute;, mua&nbsp;Galaxy S9 Plus 64GB cũ gi&aacute; rẻ người d&ugrave;ng c&ograve;n được trải nghiệm khả năng quay video si&ecirc;u chậm Super Slow-mo 960fps. Với t&iacute;nh năng n&agrave;y, những h&agrave;nh động si&ecirc;u chậm sẽ được ghi lại với tốc độ chậm hơn 32 lần b&igrave;nh thường.</p>\r\n\r\n<h3><strong>Thời lượng pin tốt</strong></h3>\r\n\r\n<p>D&ugrave; kh&ocirc;ng thay đổi so với tiền nhiệm nhưng thỏi pin 3.500 mAh tr&ecirc;n Galaxy S9 Plus cũ vẫn dư sức cho người d&ugrave;ng trải ngiệm trong một thời gian kh&aacute; d&agrave;i. Cụ thể, sau sử dụng thực tế, m&aacute;y trụ được gần 9 tiếng với c&aacute;c thao t&aacute;c duyệt web bằng wifi v&agrave; hơn 11 tiếng nếu bạn xem video 1080p li&ecirc;n tục.</p>\r\n\r\n<h3><strong>Mua Galaxy S9 Plus 64GB Like New Cty&nbsp;tại XTsmart</strong></h3>\r\n\r\n<p>Đánh giá Galaxy S9 Plus Like New ( Cty ) l&agrave; một chiếc smartphone đ&aacute;ng mua ở thời điểm hiện tại. Nếu bạn muốn sở hữu hoặc t&igrave;m hiểu th&igrave; h&atilde;y truy cập v&agrave;o trang web XTsmart.vn để t&igrave;m kiếm c&aacute;c th&ocirc;ng tin hữu &iacute;ch kh&aacute;c. XTsmart l&agrave; đơn vị cung cấp smartphone gi&aacute; rẻ h&agrave;ng đầu tại Đ&agrave; Nẵng v&agrave; TP.HCM. C&aacute;c sản phẩm của ch&uacute;ng t&ocirc;i lu&ocirc;n đảm bảo chất lượng, uy t&iacute;n v&agrave; gi&aacute; rẻ h&agrave;ng đầu.</p>\r\n', 2),
(132, 47, 47, 'iPhone 6s 32GB Quốc Tế (Likenew)', '1696411374.jpg', 2810000, 33, '2021-12-06', '<h2>Đ&aacute;nh gi&aacute; chi tiết iPhone 6s 32GB Quốc Tế (Likenew)</h2>\r\n\r\n<p><strong>IPhone 6s</strong> xứng đ&aacute;ng l&agrave; phi&ecirc;n bản cải tiến ho&agrave;n hảo của IPhone 6 với nhiều t&iacute;nh năng hấp dẫn như: Touch ID thế hệ hai, RAM 2 GB v&agrave; m&agrave;n h&igrave;nh 3D Touch mang lại cho người d&ugrave;ng những trải nghiệm mới mẻ khi cầm tr&ecirc;n tay chiếc điện thoại n&agrave;y. Điểm kh&aacute;c biệt duy nhất của IPhone 6s so với IPhone 6 l&agrave; chỉ th&ecirc;m t&iacute;nh năng chứ kh&ocirc;ng thay đổi ngoại h&igrave;nh. Mặc d&ugrave; vậy nhưng trải nghiệm v&agrave; cảm gi&aacute;c sử dụng đều rất kh&aacute;c so với iPhone 6 trước kia, nhanh hơn v&agrave; tốt hơn rất nhiều.</p>\r\n\r\n<p><img alt=\"\" src=\"https://lh4.googleusercontent.com/A5WpzOrSni2EUOUXBjlz0hEi3vGbzxBEZSDTagw2OvG6GSB19wCRtYZBgzc7K3ogifP3Swr2SQK05izoUZwIYz2qfsH9wQUM8YIKYJ4oAIfaP0sIzFaUKyl2HlLee9DDFWjlUUSc\" /></p>\r\n\r\n<p>IPhone 6s với camera được cải tiến hơn so với phi&ecirc;n bản trước&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://lh4.googleusercontent.com/R1FpmxJSG-rYF4Q8DT5ZaJA5ycOyEAQLwgh_t7ECINZFmhgNWb5AxHc6m8-P_eZ_ZKN07yrN9XhtFfe_PcpNgJNa2qCu-SpQfy6NZRHJZnvSLwsMb8DfrKYScJvALegK_mVcWZne\" /></p>\r\n\r\n<p>iPhone 6s được n&acirc;ng cấp độ ph&acirc;n giải camera sau l&ecirc;n 12 MP v&agrave; c&oacute; th&ecirc;m t&iacute;nh năng Live Photos(thay v&igrave; 8 MP như tr&ecirc;n iPhone 6). Camera c&oacute; tốc độ lấy n&eacute;t v&agrave; chụp nhanh, thao t&aacute;c chạm để chụp nhẹ nh&agrave;ng. Chất lượng ảnh trong c&aacute;c điều kiện chụp kh&aacute;c nhau tốt về chất ảnh, m&agrave;u sắc, độ tương phản, độ trung thực của m&agrave;u.</p>\r\n\r\n<h2>Thiết kế</h2>\r\n\r\n<p><img alt=\"\" src=\"https://lh3.googleusercontent.com/adPP36npxcHVVGp4LYbzqDCipASVr4ctQMIac7iy3zLG3c-7adFBgHjeJl2z00QJHawq9HHlJsr5BmyrJvVmTUVo3X0P5yKJY8Ncwe8gNf1_C6sYFRKbTujHS5dXdAqdKcw-e3xl\" /></p>\r\n\r\n<p>Nh&igrave;n chung, về ngoại h&igrave;nh IPhone 6S c&oacute; thiết kế ho&agrave;n to&agrave;n giống nhau nhưng cảm nhận tr&ecirc;n tay sẽ kh&aacute;c biệt, người d&ugrave;ng sẽ dễ d&agrave;ng nhận thấy chất liệu vỏ đ&atilde; thay đổi, chủ yếu l&agrave; về c&acirc;n nặng v&igrave; thay từ nh&ocirc;m series 6000 l&ecirc;n series 7000. N&oacute;i cho dễ hiểu th&igrave; nh&ocirc;m 7000 của 6s cứng hơn, bền hơn v&agrave; rất kh&oacute; để bẻ cong kể cả khi cố &yacute;. Tuy nhi&ecirc;n, sự thay đổi n&agrave;y cũng khiến trọng lượng của m&aacute;y tăng l&ecirc;n nhưng kh&ocirc;ng đ&aacute;ng kể.</p>\r\n\r\n<h2>Cảm biến v&acirc;n tay Touch ID được n&acirc;ng cấp</h2>\r\n\r\n<p><img alt=\"\" src=\"https://lh4.googleusercontent.com/rkG-aU8nhAy6LXboWC8Xpub21Xy1csf2ARqQXrG8_UjL_a1o-YDek9nXzi7VQP79Gdu3b624RS5xBW8TVUDkYY86RZpjshNe9Ye9a6hO2jKO7OFJssUrVhGADl9JbD-484_Fg_af\" /></p>\r\n\r\n<p>Nhờ v&agrave;o cảm biến v&acirc;n tay Touch ID được n&acirc;ng cấp tốc độ nhận diện v&acirc;n tay trở n&ecirc;n cực nhanh. Chỉ cần bấm n&uacute;t Home một c&aacute;i chưa đầy 0,5 gi&acirc;y sau l&agrave; đ&atilde; mở th&agrave;nh c&ocirc;ng kh&oacute;a v&agrave;o b&ecirc;n trong. Với cảm biến v&acirc;n tay mới mang lại ưu điểm l&agrave; r&uacute;t ngắn thời gian mở kh&oacute;a nhưng lại l&agrave;m ảnh hưởng đến c&aacute;c th&oacute;i quen hiện c&oacute; của người d&ugrave;ng v&agrave; buộc ch&uacute;ng ta phải thay đổi h&agrave;nh vi để l&agrave;m quen với c&aacute;ch sử dụng mới (d&ugrave;ng n&uacute;t nguồn hoặc cố t&igrave;nh bấm lệch ng&oacute;n tay để m&aacute;y kh&ocirc;ng mở kh&oacute;a được) khi cần xem giờ hoặc tin nhắn nhưng kh&ocirc;ng muốn mở kh&oacute;a.</p>\r\n\r\n<h2>T&iacute;nh năng Live Photos</h2>\r\n\r\n<p><img alt=\"\" src=\"https://lh4.googleusercontent.com/vSiZG4FRs5Cc1smz7JlyLWzTaBejNbAXUrTnXHzGWdp3QDR3nCSJmgc6qoA-eDqP7eec4nHDhpldjpy_pZp90jlYdGu5UypNy5rst6Cznc9Yb_SmgaYotJXnlidQXA63wMh--fTo\" /></p>\r\n\r\n<p>Để c&oacute; thể lưu lại những khoảnh khắc đẹp của con người trong những bức ảnh, Apple đ&atilde; n&acirc;ng tầm n&oacute; l&ecirc;n một đỉnh cao mới đ&oacute; l&agrave; ảnh động Live Photos. Tr&ecirc;n iPhone 6s, khi duyệt ảnh trong Photos, những thứ bạn thấy kh&ocirc;ng c&ograve;n l&agrave; ảnh tĩnh nữa m&agrave; khi vuốt đến ảnh n&agrave;o th&igrave; tấm đ&oacute; sẽ Play cỡ 1 gi&acirc;y c&aacute;i khoảnh khắc m&agrave; bạn chụp tấm h&igrave;nh đ&oacute;, k&egrave;m theo &acirc;m thanh của m&ocirc;i trường xung quanh l&uacute;c chụp.</p>\r\n\r\n<h2>Dung lượng Pin</h2>\r\n\r\n<p><img alt=\"\" src=\"https://lh6.googleusercontent.com/mxBi9kyMxKAl5RazvYKCkEKwfk3pyIVsHExpVKAwiOL9c1Wm9-C9uZQtiIUT22t3iRj_mz0Kwg5SjzCzQaYzD-pntapr8P0NFnn7a1t3QOphAfyGESkqRzgeAhXv45XzmIseVhka\" /></p>\r\n\r\n<p>Máy IPhone 6s chỉ được trang bị vi&ecirc;n pin c&oacute; dung lượng 1.715 mAh, do đó sẽ kh&aacute; &lsquo;đuối&rsquo; cho sản phẩm c&oacute; thể sử dụng trọn vẹn trong một ng&agrave;y. Tuy nhi&ecirc;n, người d&ugrave;ng c&oacute; thể bổ sung Pin cho m&aacute;y bằng c&aacute;ch nạp qua sạc dự ph&ograve;ng rất tiện dụng v&agrave; linh động khi di chuyển m&agrave; kh&ocirc;ng mất nhiều thời gian.Hiện nay, IPhone 6s c&oacute; nhiều mức dung lượng kh&aacute;c nhau như:&nbsp; IPhone 6s 16GB, IPhone 6s 32GB, IPhone 6s 64GB, IPhone 6s 128GB.</p>\r\n\r\n<h2>Đến XTsmart để được trải nghiệm v&agrave; mua điện thoại ch&iacute;nh h&atilde;ng với gi&aacute; ưu đ&atilde;i.</h2>\r\n\r\n<p>Lu&ocirc;n mang đến những trải nghiệm tốt nhất cho người d&ugrave;ng, XTsmart lu&ocirc;n cam kết về chất lượng của sản phẩm khi đến tay kh&aacute;ch h&agrave;ng, sản phẩm lu&ocirc;n b&aacute;n tại XTsmart lu&ocirc;n l&agrave; sản phẩm ch&iacute;nh h&atilde;ng c&oacute; chất lượng tốt nhất, mức gi&aacute; th&agrave;nh rẻ nhất v&agrave; c&aacute;c chế độ hậu m&atilde;i, bảo h&agrave;nh d&agrave;i hạn gi&uacute;p kh&aacute;ch h&agrave;ng an t&acirc;m khi sử dụng m&aacute;y.</p>\r\n', 30),
(133, 47, 47, 'iPhone XS Max 256GB Quốc Tế (Likenew)', '1441346892.jpg', 13000000, 88, '2021-12-06', '<h2>Đ&aacute;nh gi&aacute; chi tiết iPhone XS Max 512GB Quốc Tế (Likenew)</h2>\r\n\r\n<h2><strong><a href=\"https://www.xtsmart.vn/iphone-xs-max-512gb-quoc-te-likenew-\" target=\"_blank\">iPhone Xs Max 512GB cũ&nbsp;</a>là đi&ecirc;̣n thoại h&ocirc;̣i tụ đ&acirc;̀y đủ các tính năng cao c&acirc;́p nh&acirc;́t hi&ecirc;̣n nay từ thi&ecirc;́t k&ecirc;́ đ&ecirc;́n c&acirc;́u hình đ&ecirc;̀u có sức h&acirc;́p d&acirc;̃n với người dùng. Với màn hình l&ecirc;n đ&ecirc;́n 6.5 inch, b&ocirc;̣ nhớ lưu trữ lớn 512GB, chipset mạnh mẽ...chắc chắn sẽ giúp iPhone Xs Max 512GB cũ hoạt đ&ocirc;̣ng t&ocirc;́t trong vài năm nữa.</strong></h2>\r\n\r\n<h3><strong>Thi&ecirc;́t k&ecirc;́ sang trọng, tinh t&ecirc;́</strong></h3>\r\n\r\n<p>iPhone Xs Max 512GB sở hữu thi&ecirc;́t k&ecirc;́ nguy&ecirc;n kh&ocirc;́i chỉ dày 7.7 mm, các cạnh vi&ecirc;̀n được bo cong m&ecirc;̀m mại mang đ&ecirc;́n cảm giác c&acirc;̀m nắm thoải mái cho người dùng. Mặt trước và mặt sau đi&ecirc;̣n thoại được bảo v&ecirc;̣ bởi mặt kính cường lực sang trọng và bóng b&acirc;̉y toát l&ecirc;n vẻ đẹp tinh t&ecirc;́ k&ecirc;́t hợp khung thép kh&ocirc;ng gỉ tạo sự li&ecirc;̀n lạc và cứng cáp.&nbsp;</p>\r\n\r\n<p><img alt=\"Thiết kế iPhone Xs Max 512GB sang trọng, bóng bẩy\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/thiet-ke-iphone-xs-max-512gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Mặc dù sử dụng ch&acirc;́t li&ecirc;̣u kính với thi&ecirc;́t k&ecirc;́ khá kín nhưng khả năng bắt sóng tr&ecirc;n iPhone Xs Max 512GB cũ v&acirc;̃n r&acirc;́t t&ocirc;́t nhờ 2 dãy anten ở cạnh vi&ecirc;̀n. Mua iPhone Xs Max 512GB cũ ngoài 2 màu cơ bản trắng và đen thì giờ đ&acirc;y người dùng có th&ecirc;̉ tùy chọn màu vàng gold v&ocirc; cùng &acirc;́n tượng. Đ&acirc;y là màu sắc giúp thi&ecirc;́t bị n&ocirc;̉i b&acirc;̣t giữa hàng loạt đ&ocirc;́i thủ.</p>\r\n\r\n<h3><strong>Màn hình lớn, khả năng hi&ecirc;̉n thị xu&acirc;́t sắc</strong></h3>\r\n\r\n<p>iPhone Xs Max 512GB cũ là m&ocirc;̣t trong những đi&ecirc;̣n thoại có kích thước màn hình lớn nh&acirc;́t so với các bi&ecirc;́n th&ecirc;̉ ra mắt cùng lúc. Cụ th&ecirc;̉, thi&ecirc;́t bị có kích thước màn hình 6.5 inch sử dụng t&acirc;́m n&ecirc;̀n OLED với đ&ocirc;̣ ph&acirc;n giải 1242 x 2688 pixel đáp ứng t&ocirc;́t mọi trải nghi&ecirc;̣m của người dùng v&ecirc;̀ mặt hình ảnh.&nbsp;</p>\r\n\r\n<p><img alt=\"Màn hình iPhone Xs Max 512GB mang đến chất lượng hiển thị xuất sắc\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/man-hinh-iphone-xs-max-512gb-xtsmart.jpg\" /></p>\r\n\r\n<p>Mặc dù sở hữu màn hình lớn, nhưng bạn cũng kh&ocirc;ng c&acirc;̀n quá lo lắng v&ecirc;̀ t&ocirc;̉ng th&ecirc;̉ của máy bởi Apple đã t&ocirc;́i ưu ph&acirc;̀n thi&ecirc;́t k&ecirc;́ tai thỏ tràn vi&ecirc;̀n giúp đi&ecirc;̣n thoại có kích thước tương đ&ocirc;́i. Người dùng v&acirc;̃n có th&ecirc;̉ thao tác m&ocirc;̣t tay tr&ecirc;n iPhone Xs Max 512GB, ngoài ra với sự xu&acirc;́t hi&ecirc;̣n của c&ocirc;ng ngh&ecirc;̣ HDR10 cũng mang đ&ecirc;́n hình ảnh được n&acirc;ng cao và nịnh mắt.</p>\r\n\r\n<p>Vi&ecirc;̣c sử dụng t&acirc;́m n&ecirc;̀n OLED sẽ mang đ&ecirc;́n đi&ecirc;̉m ánh t&ocirc;́t, ánh sáng dịu giúp c&acirc;n bằng màu sắc t&ocirc;́t hơn....mang đ&ecirc;́n ch&acirc;́t lượng hi&ecirc;̉n thị cực kỳ xu&acirc;́t sắc. Đ&ocirc;̀ng thời màn hình OLED tr&ecirc;n iPhone Xs Max còn được đánh giá cao v&ecirc;̀ đ&ocirc;̣ b&ecirc;̀n cũng như khả năng ti&ecirc;́t ki&ecirc;̣m pin. Đi&ecirc;̣n thoại hoàn toàn khi&ecirc;́n bạn hài lòng khi mang đ&ecirc;́n trải nghi&ecirc;̣m t&ocirc;́t từ xem phim, lướt web, chơi game....m&ocirc;̣t cách mượt mà.</p>\r\n\r\n<h3><strong>C&acirc;́u hình mạnh mẽ với Apple A12 Bionic</strong></h3>\r\n\r\n<p>M&ocirc;̣t trong những lợi th&ecirc;́ tr&ecirc;n iPhone Xs Max 512GB cũ so với đ&ocirc;́i thủ chính là n&ecirc;̀n tảng iOS, đ&acirc;y được xem là h&ecirc;̣ đi&ecirc;̀u hành bảo m&acirc;̣t và t&ocirc;́i ưu t&ocirc;́t nh&acirc;́t hi&ecirc;̣n nay. Th&ecirc;m vào đó, c&acirc;́u hình iPhone Xs Max 512GB cũ còn được cung c&acirc;́p sức mạnh từ chip xử lý mới nh&acirc;́t A12 Bionic g&ocirc;̀m 6 nh&acirc;n mang đ&ecirc;́n hi&ecirc;̣u su&acirc;́t cực kỳ &acirc;́n tượng, n&ecirc;́u kh&ocirc;ng mu&ocirc;́n ví như m&ocirc;̣t con quái v&acirc;̣t.</p>\r\n\r\n<p><img alt=\"Cấu hình iPhone Xs Max 512GB cũ được cung cấp sức mạnh hàng đầu\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/cau-hinh-iphone-xs-max-512gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Th&acirc;̣m chí, chipset này còn được đánh giá t&ocirc;́t hơn so với chip Snapdragon 855 của Qualcomm. Mặc dù chỉ được trang bị b&ocirc;̣ nhớ RAM 4GB, nhưng bạn cũng kh&ocirc;ng c&acirc;̀n quá lo lắng bởi Apple đã t&ocirc;́i ưu hóa quá t&ocirc;́t tr&ecirc;n iOS cùng chipset mạnh mẽ đã mang đ&ecirc;́n đa nhi&ecirc;̣m mượt mà, nhanh nhẹn. iPhone Xs Max 512GB cũ giá rẻ dư sức xử lý các tác vụ từ cơ bản đ&ecirc;́n nặng nh&acirc;́t hi&ecirc;̣n này m&ocirc;̣t cách trơn tru mà kh&ocirc;ng có b&acirc;́t cứ tình trạng lag, gi&acirc;̣t nào cả.&nbsp;</p>\r\n\r\n<h3><strong>Camera chụp ảnh chuy&ecirc;n nghi&ecirc;̣p, tích hợp AI</strong></h3>\r\n\r\n<p>Mặt lưng iPhone Xs Max 512GB cũ được trang bị h&ecirc;̣ th&ocirc;́ng camera kép đặt dọc th&acirc;n máy khá n&ocirc;̉i b&acirc;̣t. Cả 2 camera này đ&ecirc;̀u có đ&ocirc;̣ ph&acirc;n giải 12MP mang đ&ecirc;́n khả năng chụp ảnh tuy&ecirc;̣t vời cho người dùng với hình ảnh ch&acirc;n th&acirc;̣t và sắc nét. Ngoài m&ocirc;̣t s&ocirc;́ tính năng cơ bản thì Apple cũng đã trang bị nhi&ecirc;̀u tính năng mới nhằm đáp ứng nhu c&acirc;̀u chụp ảnh t&ocirc;́t hơn.</p>\r\n\r\n<p><img alt=\"Mặt lưng iPhone Xs Max 512GB cũ được trang bị hệ thống camera kép\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/camera-iphone-xs-max-512gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Các tính năng có th&ecirc;̉ k&ecirc;̉ đ&ecirc;́n như: L&acirc;́y nét nhanh tự đ&ocirc;̣ng, chụp ảnh xóa ph&ocirc;ng, ch&ocirc;́ng rung OIS, HDR, ch&ecirc;́ đ&ocirc;̣ slow motion....đ&ocirc;̀ng thời với trí th&ocirc;ng minh nh&acirc;n tạo AI còn cho phép camera iPhone Xs Max 512GB có th&ecirc;̉ tự đ&ocirc;̣ng đi&ecirc;̀u chỉnh đ&ocirc;̣ sáng, đ&ocirc;̣ tương phản phù hợp với từng v&acirc;̣t khác nhau.</p>\r\n\r\n<p>Kh&ocirc;ng những mang đ&ecirc;́n ch&acirc;́t lượng hình ảnh &acirc;́n tượng mà khả năng quay video tr&ecirc;n iPhone Xs Max 512GB cũ cũng được đánh giá cao khi có th&ecirc;̉ th&ecirc;̉ quay phim 4K. Thi&ecirc;́t l&acirc;̣p camera trước được đặt trong notch tai thỏ có đ&ocirc;̣ ph&acirc;n giải 7MP mang đ&ecirc;́n ch&acirc;́t lượng hình ảnh kh&ocirc;ng thua kém gì camera sau. Nhìn chung cả 2 camera tr&ecirc;n iPhone Xs Max 512GB cũ đ&ecirc;̀u mang đ&ecirc;́n khả năng chụp ảnh xu&acirc;́t sắc cho người dùng.</p>\r\n\r\n<h3><strong>Thời lượng pin &acirc;́n tượng</strong></h3>\r\n\r\n<p>Cung c&acirc;́p năng lượng hoạt đ&ocirc;̣ng cho iPhone Xs Max 512GB cũ là vi&ecirc;n pin 3.174mAh đi kèm với c&ocirc;ng ngh&ecirc;̣ ti&ecirc;́t ki&ecirc;̣m pin hi&ecirc;̣n đại cùng chipset ti&ecirc;́t ki&ecirc;̣m đi&ecirc;̣n năng do đó máy mang đ&ecirc;́n thời lượng sử dụng pin khá &acirc;́n tượng. Kh&ocirc;ng những v&acirc;̣y, tr&ecirc;n iPhone Xs Max 512GB cũ còn h&ocirc;̃ trợ sạc nhanh đ&ocirc;̣c đáo, giúp rút ngắn thời gian sạc đáng k&ecirc;̉.</p>\r\n\r\n<p><img alt=\"iPhone Xs Max 512GB cũ được trang bị viên pin 3174 mAh\" src=\"https://www.xtsmart.vn/vnt_upload/news/08_2020/thoi-luong-pin-iphone-xs-max-512gb-cu-xtsmart.jpg\" /></p>\r\n\r\n<p>Mua iPhone Xs Max 512GB cũ còn mang đ&ecirc;́n cho bạn kh&ocirc;ng gian lưu trữ cực kỳ r&ocirc;̣ng rãi, do đó bạn kh&ocirc;ng c&acirc;̀n lo lắng khi b&ocirc;̣ nhớ trong l&ecirc;n đ&ecirc;́n 512GB. Đi&ecirc;̀u này sẽ đáp ứng t&ocirc;́t nhu c&acirc;̀u lưu trữ m&ocirc;̣t cách tuy&ecirc;̣t vời, n&ecirc;́u như bạn th&acirc;́y b&ocirc;̣ nhớ trong này quá lớn thì có th&ecirc;̉ chọn mua iPhone Xs Max 64GB hoặc 256GB đ&ecirc;̉ phù hợp với nhu c&acirc;̀u của mình.</p>\r\n', 46);
INSERT INTO `san_pham` (`id_sp`, `id_dm_pro`, `id_sub_dm_pro`, `ten_sp`, `hinh_anh`, `don_gia`, `so_luong`, `ngay_nhap`, `mo_ta`, `so_luot_xem`) VALUES
(134, 47, 47, 'iPhone 11 64GB 97% Quốc Tế', '1940728250.png', 12100000, 83, '2021-12-06', '<h2>Đánh giá chi tiết iPhone 11 64GB</h2>\r\n\r\n<p><strong><a href=\"https://fptshop.com.vn/dien-thoai/iphone-11-64gb\" target=\"_blank\">iPhone 11</a> với 6 phiên bản màu sắc, camera có khả năng chụp ảnh vượt trội, thời lượng pin cực dài và bộ vi xử lý mạnh nhất từ trước đến nay sẽ mang đến trải nghiệm tuyệt vời dành cho bạn.</strong></p>\r\n\r\n<p><strong><img alt=\"Điện thoại iPhone 11 chính hãng\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-1.jpg\" /></strong></p>\r\n\r\n<h3><strong>Rực rỡ sắc màu, thể hiện cá tính</strong></h3>\r\n\r\n<p>Có tới 6 sự lựa chọn màu sắc cho iPhone 11 64GB, bao gồm Tím, Vàng, Xanh lục, Đen, Trắng và Đỏ, tha hồ để bạn lựa chọn màu phù hợp với sở thích, cá tính riêng của bản thân. Vẻ đẹp của iPhone 11 đến từ thiết kế cao cấp khi được làm từ khung nhôm nguyên khối và mặt lưng liền lạc với một tấm kính duy nhất. Ở mặt trước, bạn sẽ được chiêm ngưỡng màn hình Liquid Retina lớn 6,1 inch, màu sắc vô cùng chân thực. Tất cả tạo nên chiếc <a href=\"https://fptshop.com.vn/dien-thoai\">điện thoại</a> tràn đầy hứng khởi.</p>\r\n\r\n<p><img alt=\"Rực rỡ sắc màu, thể hiện cá tính | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-2.jpg\" /></p>\r\n\r\n<h3><strong>Hệ thống camera kép mới</strong></h3>\r\n\r\n<p>Apple iPhone 11 sở hữu cụm camera kép mặt sau, bao gồm camera góc rộng và camera góc siêu rộng. Cảm biến camera góc rộng 12MP có khả năng lấy nét tự động nhanh gấp 3 lần trong điều kiện thiếu sáng. Bên cạnh đó cảm biến góc siêu rộng cho khả năng chụp cảnh rộng gấp 4 lần, là phương tiện ghi hình tuyệt vời cho những chuyến du lịch, chụp hình nhóm. Nhanh chóng chụp ảnh, quay video, chỉnh sửa và chia sẻ ngay trên <a href=\"https://fptshop.com.vn/dien-thoai/apple-iphone\">iPhone</a>, bạn sẽ không bỏ lỡ bất cứ khoảnh khắc đáng nhớ nào.</p>\r\n\r\n<p><img alt=\"Hệ thống camera kép mới | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-3.jpg\" /></p>\r\n\r\n<h3><strong>Quay video chưa bao giờ chuyên nghiệp đến thế</strong></h3>\r\n\r\n<p>Điện thoại iPhone 11 64GB có khả năng quay những đoạn video tuyệt đẹp với độ phân giải 4K 60fps siêu sắc nét. Camera góc siêu rộng mang đến nhiều khung cảnh hơn, đồng thời khả năng quay chuyển động cực ấn tượng sẽ tạo nên những thước phim hoàn hảo. Ngoài ra bạn còn có thể tập trung thu âm vào một chủ thể khi quay video bằng cách phóng to, zoom hình ảnh – đồng thời zoom âm thanh hết sức thú vị. Tất nhiên sau khi quay video, việc chỉnh sửa và xuất bản sẽ diễn ra hết sức tiện lợi, nhanh chóng trên iPhone 11.</p>\r\n\r\n<p><img alt=\"Quay video trên iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-4.jpg\" /></p>\r\n\r\n<h3><strong>Night Mode, chuyên gia chụp ảnh thiếu sáng</strong></h3>\r\n\r\n<p>Chụp ảnh thiếu sáng không còn là vấn đề trên iPhone 11. Với chế độ chụp đêm chuyên dụng Night Mode hoàn toàn mới, máy ảnh sẽ nhìn thấy rõ ràng từng chi tiết trong đêm tối. Không cần phải bật đèn flash, hình ảnh vẫn trở nên sống động nhờ ánh sáng tự nhiên, màu sắc chính xác và chất ảnh sáng rõ.</p>\r\n\r\n<p><img alt=\"Night Mode, chuyên gia chụp ảnh thiếu sáng | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-5.jpg\" /></p>\r\n\r\n<h3><strong>Hiệu ứng xóa phông “ảo diệu”</strong></h3>\r\n\r\n<p>Những bức ảnh chân dung xóa phông của bạn sẽ trở nên “ảo diệu” hơn trên iPhone 11. Với cơ chế xóa phông và ánh sáng mới, giờ đây bạn có thể chụp ảnh xóa phông cùng người bạn thân; thêm hiệu ứng ánh sáng Studio; thay đổi độ mờ phông nền. Các bức ảnh xóa phông sẽ có độ làm mờ tuyệt hảo, phân tách chủ thể chính xác và ánh sáng đẹp mắt.</p>\r\n\r\n<p><img alt=\"Hiệu ứng xóa phông “ảo diệu” | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-6.jpg\" /></p>\r\n\r\n<h3><strong>Smart HDR thế hệ mới, chụp ảnh tốt hơn trong điều kiện ánh sáng phức tạp</strong></h3>\r\n\r\n<p>Nhờ trí tuệ nhân tạo Machine Learning, tính năng Smart HDR trên camera iPhone 11 thông minh hơn bao giờ hết. Camera sẽ tự động nhận diện người và cảnh, sau đó đưa ra các tinh chỉnh riêng biệt. Trong cùng một bức ảnh, khuôn mặt sẽ có điểm nhấn đẹp hơn, tông màu da tự nhiên – trong khi đó phần khung cảnh nền hoàng hôn vẫn tuyệt đẹp theo một cách khác. Smart HDR sẽ giúp điện thoại xử lý bức ảnh xuất sắc, đặc biệt là trong điều kiện ánh sáng phức tạp.</p>\r\n\r\n<p><img alt=\"Smart HDR thế hệ mới | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-7.jpg\" /></p>\r\n\r\n<h3><strong>Camera trước 12MP, hơn cả chụp ảnh selfie</strong></h3>\r\n\r\n<p>Camera trước của iPhone 11 đã được nâng cấp lên 12MP, mang đến những bức ảnh selfie sắc nét và chất lượng cao hơn. Apple còn bổ sung thêm tính năng mới mang tên slofie – quay một đoạn video chuyển động siêu chậm 120 fps bằng chính camera trước. Lưu giữ những khoảnh khắc thú vị theo cách của riêng bạn.</p>\r\n\r\n<p><img alt=\"Camera trước 12MP, hơn cả chụp ảnh selfie | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-8.jpg\" /></p>\r\n\r\n<h3><strong>Chiếc iPhone bền bỉ và thân thiện</strong></h3>\r\n\r\n<p>Không chỉ có vẻ ngoài hấp dẫn, iPhone 11 còn rất vững chắc khi sử dụng kính cường lực cứng nhất trong thế giới smartphone. Nước cũng không phải là vấn đề với khả năng <a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/chuan-ip68-la-gi-khac-biet-gi-so-voi-ip67-57823\">chống nước chuẩn IP68</a>, cho phép bạn ngâm thiết bị dưới 2m trong vòng 30 phút, điện thoại vẫn hoàn toàn sống khỏe dưới nước. Tuyệt vời hơn nữa, tất cả vật liệu chế tạo nên iPhone 11 đều có khả năng tái chế, cực kỳ thân thiện với môi trường.</p>\r\n\r\n<p><img alt=\"Chiếc iPhone bền bỉ và thân thiện | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-9.jpg\" /></p>\r\n\r\n<h3><strong>Màn hình Liquid Retina sống động đến từng chi tiết</strong></h3>\r\n\r\n<p>Màn hình 6,1 inch Liquid Retina trên điện thoại iPhone 11 mang cả thế giới đến trước mắt bạn khi mọi thứ đều chân thực một cách tuyệt vời. Cân bằng trắng được điều chỉnh dựa theo ánh sáng xung quanh, để nhiệt độ màu luôn luôn dễ chịu. Với cảm ứng xúc giác Haptic Touch hoàn toàn mới, bạn có thể thao tác nhanh chóng trên màn hình cảm ứng.</p>\r\n\r\n<p><img alt=\"Màn hình Liquid Retina sống động đến từng chi tiết | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-10.jpg\" /></p>\r\n\r\n<h3><strong>Thoải mái sử dụng cả ngày</strong></h3>\r\n\r\n<p>Thời lượng pin của iPhone 11 64GB trên cả mong đợi, cho phép bạn sử dụng thoải mái trong cả ngày dài. Đây là kết quả của sự tương thích tuyệt đối giữa phần cứng và phần mềm. Hơn nữa, với tính năng sạc nhanh, chỉ cần 30 phút cho 50% pin, nhanh chóng nạp đầy năng lượng.</p>\r\n\r\n<p><img alt=\"Thoải mái sử dụng cả ngày | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-12.jpg\" /></p>\r\n\r\n<h3><strong>Sức mạnh đẳng cấp khác biệt</strong></h3>\r\n\r\n<p>Cả iPhone 11 và iPhone 11 Pro đều được trang bị bộ vi xử lý mạnh nhất thế giới smartphone hiện tại.<a href=\"https://fptshop.com.vn/tin-tuc/danh-gia/con-chip-apple-a13-bionic-tren-iphone-11-manh-co-nao-101678\"> Apple A13 Bionic</a> mang đến hiệu năng đẳng cấp khác biệt, mọi thứ đều diễn ra nhanh chóng, mượt mà một cách hoàn hảo. Kể cả những tựa game nặng nhất, có đồ họa chân thực đến khó tin vẫn được thể hiện cực đỉnh trên iPhone 11. Sử dụng iPhone 11 64GB nghĩa là bạn sẽ có chiếc máy hiệu năng đảm bảo dùng tốt trong nhiều năm nữa.</p>\r\n\r\n<p><img alt=\"Sức mạnh đẳng cấp khác biệt | iPhone 11\" src=\"https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/iphone-11-11.jpg\" /></p>\r\n\r\n<h3><strong>Nhận diện khuôn mặt nhanh hơn bao giờ hết</strong></h3>\r\n\r\n<p>Face ID mới được cải tiến cho phép bạn mở khóa iPhone 11 64GB nhanh chóng và dễ dàng hơn bao giờ hết. Thậm chí Face ID còn tiện lợi và bảo mật hơn cả phương án truyền thống là cảm biến vân tay Touch ID. Bạn có thể dùng tính năng này để đăng nhập vào ứng dụng, tài khoản, ngân hàng và thanh toán với Apple Pay. Tất cả thông tin đều được bảo mật tuyệt đối khi Face ID không hề lưu trữ hay chia sẻ hình ảnh của bạn. Kể cả khi gửi ảnh hay gọi FaceTime, hình ảnh của bạn cũng được mã hóa an toàn.</p>\r\n', 7),
(135, 48, 51, 'SSẠC DỰ PHÒNG MIPOW POWER CUBE X3 10000 LIGHTNING CABLE BLACK', '1668725667.jpg', 1780000, 21, '2021-12-06', '', 13),
(136, 48, 51, 'PIN DỰ PHÒNG PISEN LCD POWER STATION 15.000 MAH PP0101', '1637605149.jpg', 1600000, 12, '2021-12-06', '', 4),
(137, 48, 48, 'TAI NGHE AKG S10', '1299925126.jpg', 250000, 55, '2021-12-11', '', 0),
(138, 48, 48, 'TAI NGHE BLUETOOTH TITAN TB04', '1777055091.jpg', 300000, 199, '2021-12-11', '', 1),
(139, 48, 48, 'TAI NGHE BLUETOOTH ANKER SOUNDBUDS SPORT NB10', '36196172.jpg', 640000, 33, '2021-12-11', '', 0),
(140, 48, 56, 'CỦ SẠC NHANH SAMSUNG 2 ĐẦU TYPE C (25W) ZIN', '874592775.png', 299000, 77, '2021-12-11', '', 1),
(141, 48, 56, 'Củ sạc iPhone chính hãng Apple', '201433064.jpg', 300000, 55, '2021-12-11', '', 0),
(142, 48, 56, 'Củ sạc nhanh Samsung s10 - ZIN', '1902128692.jpg', 250000, 22, '2021-12-11', '', 0),
(143, 48, 56, 'CỦ SẠC IPAD 10W ZIN', '211931785.jpg', 149000, 44, '2021-12-11', '', 1),
(144, 48, 56, 'CỦ SẠC 2 CỔNG ANKER POWER PORT 2-24W', '2021093676.jpg', 349000, 31, '2021-12-11', '', 0),
(145, 48, 56, 'Sạc nhanh Innostyle USB-C PD 18W Minigo', '2009801285.jpg', 450000, 13, '2021-12-11', '', 0),
(146, 48, 52, 'Ốp lưng Magsage iPhone 13 Pro Max Mipow ', '1503503621.jpg', 432000, 64, '2021-12-11', '', 40),
(147, 48, 52, 'Ốp lưng iPhone 13 mini Silicone chống sốc Rock', '431561594.jpg', 149000, 44, '2021-12-11', '', 2),
(148, 48, 52, 'Ốp lưng iPhone 13 Pro Max Clear Case with MagSafe', '1577586809.jpg', 1490000, 32, '2021-12-11', '', 40),
(149, 48, 52, 'Ốp lưng iPhone 12/12 Pro Giả da Hotforming PU Case Meetu ', '1969158902.jpg', 399000, 22, '2021-12-11', '', 5),
(150, 48, 52, 'Ốp lưng iPhone 12/12 Pro Nhựa dẻo Silicone Hand Feeling TPU Meetu', '816316320.jpg', 189000, 54, '2021-12-11', '', 0),
(151, 48, 52, 'Ốp lưng iPhone 11 Pro Max Tráng gương viền dẻo Transparent Tempered Glass Meetu Nude', '157986835.jpg', 35000, 45, '2021-12-11', '', 30),
(152, 48, 52, 'Ốp lưng iPhone 11 Pro Tráng gương viền dẻo Transparent Tempered Glass Meetu Nude', '118612420.jpg', 34000, 55, '2021-12-11', '', 0),
(153, 48, 52, 'Ốp lưng iPhone 11 Tráng gương viền dẻo Transparent Tempered Glass Meetu Nude', '2017810974.jpg', 99000, 66, '2021-12-11', '', 40),
(154, 48, 51, 'SẠC DỰ PHÒNG FENGZHI 10000 mAh-J352', '1616672415.jpg', 250000, 44, '2021-12-11', '', 0),
(155, 48, 51, 'PIN DỰ PHÒNG ARUN 8400mAh', '921669280.jpg', 500000, 55, '2021-12-11', '', 0);

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
(54, 'Xiaomi', 47),
(56, 'Củ sạc', 48);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_bao_user`
--

CREATE TABLE `thong_bao_user` (
  `id_thong_bao` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_thong_bao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_bao_user`
--

INSERT INTO `thong_bao_user` (`id_thong_bao`, `title`, `noi_dung`, `ngay_thong_bao`) VALUES
(8, 'Giảm 500k', 'Khuyến mãi tặng mã giảm giá giảm&nbsp;500.000đ&nbsp;áp dụng cho tất cả đơn hàng  trên &nbsp;12.000.000đ', '2021-12-05'),
(9, 'Abcd', 'Khuyến mãi tặng mã giảm giá giảm&nbsp;5%&nbsp;áp dụng cho tất cả đơn hàng  trên &nbsp;20.000.000đ', '2021-12-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_bao_user_detail`
--

CREATE TABLE `thong_bao_user_detail` (
  `id_thong_bao_detail` int(11) NOT NULL,
  `id_thong_bao` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `trang_thai` int(1) NOT NULL DEFAULT 0 COMMENT '0 là chưa đọc ,1 là đã đọc ,khi user click vào thông báo thì sẻ update trạng thái thành 1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_bao_user_detail`
--

INSERT INTO `thong_bao_user_detail` (`id_thong_bao_detail`, `id_thong_bao`, `id_kh`, `trang_thai`) VALUES
(15, 8, 13, 1),
(16, 8, 14, 0),
(17, 9, 13, 1),
(18, 9, 14, 0),
(19, 9, 15, 0),
(20, 9, 26, 1);

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
-- Chỉ mục cho bảng `deal_soc`
--
ALTER TABLE `deal_soc`
  ADD PRIMARY KEY (`id_deal_soc`),
  ADD KEY `id_sp_chinh` (`id_sp_chinh`),
  ADD KEY `id_khuyen_mai` (`id_khuyen_mai`),
  ADD KEY `id_loai_giam_gia_tien` (`id_loai_giam_gia_tien`),
  ADD KEY `id_sp_mua_kem` (`id_sp_mua_kem`);

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
  ADD PRIMARY KEY (`id_hoa_don`),
  ADD KEY `id_kh` (`id_kh`);

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
-- Chỉ mục cho bảng `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  ADD PRIMARY KEY (`id_ma_giam_gia`),
  ADD UNIQUE KEY `ten_ma_giam_gia` (`ten_ma_giam_gia`),
  ADD KEY `id_loai_giam_gia_tien` (`id_loai_giam_gia_tien`),
  ADD KEY `id_khuyen_mai` (`id_khuyen_mai`),
  ADD KEY `id_kh` (`id_kh`(768));

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
-- Chỉ mục cho bảng `thong_bao_user`
--
ALTER TABLE `thong_bao_user`
  ADD PRIMARY KEY (`id_thong_bao`);

--
-- Chỉ mục cho bảng `thong_bao_user_detail`
--
ALTER TABLE `thong_bao_user_detail`
  ADD PRIMARY KEY (`id_thong_bao_detail`),
  ADD KEY `thong_bao_user_detail_ibfk_1` (`id_kh`),
  ADD KEY `id_thong_bao` (`id_thong_bao`);

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
  MODIFY `id_bl_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `binh_luan_pro`
--
ALTER TABLE `binh_luan_pro`
  MODIFY `id_bl_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `cau_hinh_phone`
--
ALTER TABLE `cau_hinh_phone`
  MODIFY `id_ch_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
-- AUTO_INCREMENT cho bảng `deal_soc`
--
ALTER TABLE `deal_soc`
  MODIFY `id_deal_soc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dung_luong_phone`
--
ALTER TABLE `dung_luong_phone`
  MODIFY `id_dl_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `giam_gia`
--
ALTER TABLE `giam_gia`
  MODIFY `id_giam_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id_hoa_don_chi_tiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `images_pro`
--
ALTER TABLE `images_pro`
  MODIFY `id_images_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
  MODIFY `id_ms_phone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT cho bảng `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  MODIFY `id_ma_giam_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `rating_sp`
--
ALTER TABLE `rating_sp`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT cho bảng `reply_binh_luan_pro`
--
ALTER TABLE `reply_binh_luan_pro`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT cho bảng `sub_danh_muc_pro`
--
ALTER TABLE `sub_danh_muc_pro`
  MODIFY `id_sub_dm_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `thong_bao_user`
--
ALTER TABLE `thong_bao_user`
  MODIFY `id_thong_bao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thong_bao_user_detail`
--
ALTER TABLE `thong_bao_user_detail`
  MODIFY `id_thong_bao_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- Các ràng buộc cho bảng `deal_soc`
--
ALTER TABLE `deal_soc`
  ADD CONSTRAINT `deal_soc_ibfk_1` FOREIGN KEY (`id_sp_chinh`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deal_soc_ibfk_2` FOREIGN KEY (`id_khuyen_mai`) REFERENCES `khuyen_mai` (`id_khuyen_mai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deal_soc_ibfk_3` FOREIGN KEY (`id_loai_giam_gia_tien`) REFERENCES `loai_giam_gia_tien` (`id_loai_giam_gia_tien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deal_soc_ibfk_4` FOREIGN KEY (`id_sp_mua_kem`) REFERENCES `san_pham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Các ràng buộc cho bảng `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  ADD CONSTRAINT `ma_giam_gia_ibfk_1` FOREIGN KEY (`id_loai_giam_gia_tien`) REFERENCES `loai_giam_gia_tien` (`id_loai_giam_gia_tien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ma_giam_gia_ibfk_2` FOREIGN KEY (`id_khuyen_mai`) REFERENCES `khuyen_mai` (`id_khuyen_mai`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Các ràng buộc cho bảng `thong_bao_user_detail`
--
ALTER TABLE `thong_bao_user_detail`
  ADD CONSTRAINT `thong_bao_user_detail_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thong_bao_user_detail_ibfk_2` FOREIGN KEY (`id_thong_bao`) REFERENCES `thong_bao_user` (`id_thong_bao`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

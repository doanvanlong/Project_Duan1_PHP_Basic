-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2021 lúc 03:54 AM
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
(67, 48, 48, 'Tai nghe có dây choàng đầu có mic i.value T-139', '1546566852.jpg', 449000, 11, '2021-11-19', '<h2>Đặc điểm nổi bật</h2>\r\n\r\n<p><strong>L&agrave; sản phẩm c&oacute; gi&aacute; b&aacute;n hợp l&yacute; vừa t&uacute;i tiền,&nbsp;<a href=\"https://fptshop.com.vn/phu-kien/tai-nghe-co-day-choang-dau-co-mic-ivalue-t-139\">tai nghe chụp tai c&oacute; d&acirc;y c&oacute; mic i.value T-139</a>&nbsp;sẽ g&acirc;y bất ngờ cho người d&ugrave;ng ngay trong lần sử dụng đầu ti&ecirc;n bởi trải nghiệm tuyệt vời m&agrave; n&oacute; đem lại. Từ cảm gi&aacute;c đeo thoải m&aacute;i tr&ecirc;n tai cho tới chất lượng &acirc;m thanh thể hiện, T-139 đều cho thấy gi&aacute; trị vượt trội ngo&agrave;i mong đợi.</strong></p>\r\n\r\n<h3><img alt=\"Mô tả sản phẩm tai nghe có dây choàng đầu có mic i.value T-139 1\" src=\"http://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/AnhNQ/1310/Mo-ta-san-pham-tai-nghe-co-day-choang-dau-co-mic-i-value-t-139-1.jpg\" /></h3>\r\n\r\n<h3><strong>Thiết kế hiện đại n&oacute;i l&ecirc;n phong c&aacute;ch chủ nh&acirc;n</strong></h3>\r\n\r\n<p>Với mong muốn tạo n&ecirc;n một sản phẩm tai nghe chất lượng cao, gi&aacute; b&aacute;n phải chăng để phục vụ cho c&aacute;c kh&aacute;ch h&agrave;ng trẻ tuổi, i.value đ&atilde; mang tới cho T-139 diện mạo hết sức đẹp mắt với thiết kế hiện đại năng động. Nh&agrave; sản xuất đ&atilde; kh&eacute;o l&eacute;o sử dụng m&agrave;u đen chủ đạo kết hợp với những n&eacute;t nhấn nh&aacute; m&agrave;u đỏ để x&acirc;y dựng phong c&aacute;ch c&aacute; t&iacute;nh nhưng vẫn thanh lịch cho sản phẩm. Ph&ugrave; hợp với đối tượng kh&aacute;ch h&agrave;ng năng động v&agrave; c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"Thiết kế hiện đại nói lên phong cách chủ nhân 1\" src=\"http://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/AnhNQ/1310/Mo-ta-san-pham-tai-nghe-co-day-choang-dau-co-mic-i-value-t-139-3.jpg\" /></p>\r\n\r\n<h3><strong>K&iacute;ch cỡ gọn g&agrave;ng với đệm tai &ecirc;m &aacute;i</strong></h3>\r\n\r\n<p>Khi m&agrave; c&aacute;c c&ocirc;ng cụ giải tr&iacute; như phim, nhạc v&agrave; game trực tuyến ng&agrave;y c&agrave;ng ph&aacute;t triển mạnh mẽ, ch&uacute;ng ta c&oacute; nhu cầu sử dụng tai nghe nhiều hơn trong ng&agrave;y. Hiểu được điều đ&oacute;, nh&agrave; sản xuất đ&atilde; nghi&ecirc;n cứu để bổ sung th&ecirc;m chất liệu đệm silicon v&agrave;o cấu tạo của chiếc tai nghe tại những bộ phận tiếp x&uacute;c trực tiếp như quai đeo v&agrave; chụp tai, từ đ&oacute; giảm thiểu tối đa cảm gi&aacute;c kh&oacute; chịu khi trải nghiệm trong nhiều giờ li&ecirc;n tục. Ngo&agrave;i ra, hai b&ecirc;n quai đeo cũng c&oacute; thể nới rộng hoặc r&uacute;t gọn để ph&ugrave; hợp với k&iacute;ch cỡ kh&aacute;c nhau của mỗi người.</p>\r\n\r\n<p><img alt=\"Kích cỡ gọn gàng với đệm tai êm ái 1\" src=\"http://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/AnhNQ/1310/Mo-ta-san-pham-tai-nghe-co-day-choang-dau-co-mic-i-value-t-139-4.jpg\" /></p>\r\n\r\n<h3><strong>Thoải m&aacute;i trải nghiệm &acirc;m nhạc bất cứ nơi đ&acirc;u</strong></h3>\r\n\r\n<p>Tương t&aacute;c th&ocirc;ng qua jack 3.5 mm, i.value T-139 c&oacute; thể kết hợp với mọi thiết bị điện tử được hỗ trợ phương thức kết nối nối n&agrave;y. Nhờ vậy, bạn c&oacute; thể sử dụng chiếc tai nghe T-139 với cả&nbsp;<a href=\"https://fptshop.com.vn/may-tinh-bang\">m&aacute;y t&iacute;nh bảng</a>, desktop,&nbsp;<a href=\"https://fptshop.com.vn/may-tinh-xach-tay\">laptop</a>&nbsp;hay&nbsp;<a href=\"https://fptshop.com.vn/dien-thoai\">smartphone</a>. D&acirc;y nối được thiết kế với độ d&agrave;i hợp l&yacute; cho ph&eacute;p chủ nh&acirc;n c&oacute; thể lựa chọn tư thế ngồi thoải m&aacute;i nhất, tr&aacute;nh g&acirc;y n&ecirc;n cảm gi&aacute;c vướng v&iacute;u khi trải nghiệm.</p>\r\n\r\n<p><img alt=\"Đưa bạn tới không gian âm nhạc rộn ràng 1\" src=\"http://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/AnhNQ/1310/Mo-ta-san-pham-tai-nghe-co-day-choang-dau-co-mic-i-value-t-139-2.jpg\" /></p>\r\n\r\n<h3><strong>Đưa bạn tới kh&ocirc;ng gian &acirc;m nhạc rộn r&agrave;ng</strong></h3>\r\n\r\n<p>Với lợi thế t&aacute;i hiện &acirc;m thanh trong trẻo v&agrave; r&otilde; r&agrave;ng, i.value T-139 dễ d&agrave;ng đưa người d&ugrave;ng v&agrave;o kh&ocirc;ng gian giải tr&iacute; s&ocirc;i động. Trải nghiệm thực tế cho thấy T-139 hết sức ph&ugrave; hợp với những thể loại nhạc s&ocirc;i động như EDM hay nhạc điện tử. D&ugrave; vậy, nếu bạn muốn thay đổi cảm x&uacute;c th&ocirc;ng qua c&aacute;c bản nhạc kh&ocirc;ng lời s&acirc;u lắng hay d&ograve;ng nhạc trữ t&igrave;nh th&igrave; sản phẩm vẫn thể hiện tốt v&agrave; đ&aacute;p ứng trọn vẹn nhu cầu.</p>\r\n\r\n<p><img alt=\"i.value T-139, chiếc tai nghe lý tưởng trong tầm giá 1\" src=\"http://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/AnhNQ/1310/Mo-ta-san-pham-tai-nghe-co-day-choang-dau-co-mic-i-value-t-139-5.jpg\" /></p>\r\n\r\n<h3><strong>i.value T-139, chiếc tai nghe l&yacute; tưởng trong tầm gi&aacute;</strong></h3>\r\n\r\n<p>Những ưu điểm vượt trội như thiết kế trẻ trung phong c&aacute;ch, đem tới cảm gi&aacute;c tr&ecirc;n tai tốt v&agrave; t&aacute;i hiện &acirc;m thanh trung thực, i.value T-139 l&agrave;&nbsp;<a href=\"https://fptshop.com.vn/phu-kien/tai-nghe\">chiếc tai nghe</a>&nbsp;kh&ocirc;ng c&oacute; đối thủ trong c&ugrave;ng tầm gi&aacute;. Nếu bạn l&agrave; người đang t&igrave;m kiếm một trải nghiệm &acirc;m thanh tốt với gi&aacute; b&aacute;n phải chăng th&igrave; chớ n&ecirc;n bỏ qua i.value T-139 nh&eacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(68, 47, 49, 'Samsung Galaxy Note 9 128GB 99% likenew (Mỹ)', '690107965.jpg', 7480000, 22, '2021-11-19', '<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://www.xtsmart.vn/vnt_upload/product/05_2021/3_10.jpg\" /></p>\r\n\r\n<h2>Đ&aacute;nh gi&aacute; chi tiết Samsung Galaxy Note 9 128GB 99% likenew (Mỹ)</h2>\r\n\r\n<h2><strong><a href=\"https://www.xtsmart.vn/samsung-galaxy-note-9-128gb-99-likenew-my-\" target=\"_blank\">Samsung Galaxy Note 9 128GB cũ Mỹ</a></strong>&nbsp;d&ugrave; kh&ocirc;ng qu&aacute; nổi bật về thiết kế nhưng &ldquo;nội c&ocirc;ng&rdquo; của flagship l&agrave; mơ ước của nhiều đối thủ. C&oacute; thể thấy tr&ecirc;n d&ograve;ng sản phẩm n&agrave;y, Samsung đ&atilde; tập trung v&agrave;o việc ho&agrave;n thiện c&aacute;c t&iacute;nh năng đ&atilde; c&oacute; từ thế hệ trước. Cụ thể ra sao? C&ugrave;ng theo d&otilde;i b&agrave;i viết dưới đ&acirc;y để c&oacute; c&acirc;u trả lời nh&eacute;!</h2>\r\n\r\n<h3><strong>Kiểu d&aacute;ng sang trọng quen thuộc</strong></h3>\r\n\r\n<p>Thoạt nh&igrave;n, thi&ecirc;́t k&ecirc;́ Galaxy Note 9 128GB cũ Mỹ gần như kh&ocirc;ng thay đổi so với th&ecirc;́ h&ecirc;̣ tiền nhiệm. Ngoại trừ việc nh&agrave; sản xuất đ&atilde; đưa cảm biến v&acirc;n tay xuống dưới cụm camera k&eacute;p nhằm gi&uacute;p người d&ugrave;ng dễ thao t&aacute;c hơn, kh&ocirc;ng bị chạm nhầm ống k&iacute;nh như tr&ecirc;n Galaxy Note 8.</p>\r\n\r\n<p><img alt=\"Galaxy Note 9 128GB cũ gần như không thay đổi so với Note 8 tiền nhiệm\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/thiet-ke-man-hinh-note-9-128gb-cu-my-xtsmart.jpg\" /></p>\r\n\r\n<p>C&ograve;n lại, m&aacute;y vẫn sử dụng chất liệu kim loại nguy&ecirc;n khối với hai mặt được phủ k&iacute;nh bảo vệ b&oacute;ng lo&aacute;ng v&agrave; đảm bảo an to&agrave;n trong qu&aacute; tr&igrave;nh sử dụng. C&aacute;c g&oacute;c cạnh&nbsp;được bo tr&ograve;n tỉ mỉ, chăm ch&uacute;t. Song song đ&oacute;, Galaxy Note 9 cũ Mỹ c&ograve;n sở hữu 4 m&agrave;u sắc trẻ trung, bao gồm Đen Huyền B&iacute;, Đồng &Aacute;nh Kim, T&iacute;m Oải Hương, Xanh Đại Dương. Tất cả l&agrave;m n&ecirc;n một tổng thể Note 9 ho&agrave;n hảo, thu h&uacute;t.</p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh ch&acirc;n thật, sống động</strong></h3>\r\n\r\n<p>Samsung Galaxy Note 9 128GB cũ Mỹ sở hữu&nbsp;m&agrave;n h&igrave;nh Super AMOLED c&oacute;&nbsp;k&iacute;ch thước l&ecirc;n đến&nbsp;6.4 inch,&nbsp;độ ph&acirc;n giải 2.960 x 1.440 pixel v&agrave; theo&nbsp;tỷ lệ 18.5:9. Tương tự Note 8 v&agrave; Galayx S9, m&agrave;n h&igrave;nh của Note 9 cũ Mỹ cũng được trang bị khả năng hiển thị HDR theo chuẩn HDR10, hiển thị dải s&aacute;ng rộng hơn v&agrave; m&agrave;u sắc rực rỡ hơn so với điện thoại kh&ocirc;ng hỗ trợ.</p>\r\n\r\n<p><img alt=\"Samsung Galaxy Note 9 128GB cũ Mỹ sở hữu màn hình Super AMOLED có kích thước lên đến 6.4 inch\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/man-hinh-note-9-128gb-cu-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Với những trang bị tr&ecirc;n, Galaxy Note 9 128GB cũ kh&ocirc;ng l&agrave;m người d&ugrave;ng thất vọng bởi m&agrave;n h&igrave;nh s&aacute;ng, ch&acirc;n thật, m&agrave;u sắc rực rỡ, chi tiết, g&oacute;c nh&igrave;n rộng, độ đen rất s&acirc;u v&agrave; c&oacute; thể nh&igrave;n tốt cả khi d&ugrave;ng ngo&agrave;i trời nắng. T&oacute;m lại, m&agrave;n h&igrave;nh tr&ecirc;n smartphone cao cấp vẫn l&agrave; điểm &ocirc;ng lớn Samsung trội hơn c&aacute;c h&atilde;ng Android kh&aacute;c tr&ecirc;n thị trường.</p>\r\n\r\n<h3><strong>Hiệu năng vượt trội</strong></h3>\r\n\r\n<p>C&acirc;́u hình&nbsp;Galaxy Note 9 128GB cũ Mỹ được trang bị chip Snapdragon 845, bộ nhớ lưu trữ RAM/ ROM l&ecirc;n đến 6GB/ 128GB v&agrave; được hỗ trợ mở rộng kh&ocirc;ng gian lưu trữ th&ecirc;m 512GB qua khe cắm thẻ nhớ microSD. C&ugrave;ng với đ&oacute;, h&atilde;ng đ&atilde; tập trung n&acirc;ng cấp về giao diện đồ họa v&agrave; tương t&aacute;c th&ocirc;ng minh nhiều chạm, gi&uacute;p sản phẩm xử l&yacute; th&agrave;nh c&ocirc;ng mọi t&aacute;c vụ.</p>\r\n\r\n<p><img alt=\"Note 9 mang đến trải nghiệm rất mượt mà, phản hồi nhanh và không có bất kỳ hiện tượng giật lag hay đứng máy\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/hieu-nang-note-9-128gb-cu-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Tr&ecirc;n thực tế sử dụng, mua Galaxy Note 9 128GB cũ Mỹ sẽ mang đến trải nghiệm rất mượt m&agrave;, phản hồi nhanh v&agrave; kh&ocirc;ng c&oacute; bất kỳ hiện tượng giật lag hay đứng m&aacute;y n&agrave;o xảy ra. C&aacute;c ứng dụng mở nhanh v&agrave; chuyển đổi giữa c&aacute;c ứng dụng hay m&agrave;n h&igrave;nh diễn ra tức th&igrave;, điều n&agrave;y l&agrave; một điểm cộng kh&aacute; lớn cho một thiết bị di động như Galaxy Note 9.</p>\r\n\r\n<h3><strong>Camera k&eacute;p chuy&ecirc;n nghiệp</strong></h3>\r\n\r\n<p>Tương tự như người anh em Galaxy S9 Plus, camera Samsung Note 9 128GB cũ bản Mỹ cũng được trang bị camera k&eacute;p 12MP ở mặt sau, gồm một camera g&oacute;c rộng c&oacute; thể thay đổi giữa 2 khẩu độ f/1.5 v&agrave; f/2.4 c&ugrave;ng với một camera tele để zoom 2X, đồng thời&nbsp;hỗ trợ t&iacute;nh năng chụp x&oacute;a ph&ocirc;ng. Camera trước của m&aacute;y c&oacute; độ ph&acirc;n giải 8MP khẩu độ f/1.7.</p>\r\n\r\n<p><img alt=\"Samsung đã bổ sung thêm trí tuệ nhân tạo AI cho chức năng nhận diện cảnh chụp để tự động điều chỉnh thiết lập phù hợp cho camera.\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/camera-man-hinh-note-9-128gb-cu-my-xtsmart.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Samsung đ&atilde; bổ sung th&ecirc;m tr&iacute; tuệ nh&acirc;n tạo AI cho chức năng nhận diện cảnh chụp để tự động điều chỉnh thiết lập ph&ugrave; hợp cho camera. Nh&agrave; sản xuất cũng cho biết th&ecirc;m, Note 9 cũ Mỹ c&oacute; thể tự động nhận diện được 20 bối cảnh chụp kh&aacute;c nhau như thức ăn, hoa, động vật, phong cảnh, c&acirc;y xanh, trời, th&aacute;c nước, đường phố, ban đ&ecirc;m...</p>\r\n\r\n<h3><strong>Dung lượng pin &ldquo;khủng&rdquo;</strong></h3>\r\n\r\n<p>Lớn hơn 20% dung lượng so với tiền nhiệm, vi&ecirc;n pin 4.000 mAh tr&ecirc;n Galaxy Note 9 128GB cũ Mỹ mang đến khả năng chơi game suốt 15 giờ liền v&agrave; chạy video 1080p trong hơn 20 giờ. C&oacute; thể thấy thời lượng trải nghiệm ch&iacute;nh l&agrave; một bước tiến lớn của c&ocirc;ng ty điện tử xứ kim chi n&agrave;y.</p>\r\n\r\n<h3><strong>B&uacute;t S-pen thao t&aacute;c từ xa</strong></h3>\r\n\r\n<p>S-pen kh&ocirc;ng chỉ l&agrave; một phụ kiện đơn thuần m&agrave; đ&acirc;y c&ograve;n l&agrave; đặc trưng nổi bật của d&ograve;ng Samsung Galaxy Note. Chiếc b&uacute;t nằm ở cạnh dưới b&ecirc;n phải của m&aacute;y, khi bạn lấy chiếc b&uacute;t ra c&oacute; thể k&iacute;ch hoạt rất nhiều c&aacute;c t&iacute;nh năng độc quyền, c&oacute; thể kể đến như: nhận diện văn bản viết tay th&agrave;nh văn bản chuẩn, tr&igrave;nh chiếu, bật camera,&hellip;</p>\r\n\r\n<p><img alt=\"dòng S-Pen trên Note 9 còn được hỗ trợ công nghệ Bluetooth Low Energy\" src=\"https://www.xtsmart.vn/vnt_upload/news/09_2020/s-pen-man-hinh-note-9-128gb-cu-my-xtsmart.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, d&ograve;ng S-Pen tr&ecirc;n Galaxy Note 9 128GB cũ giá rẻ c&ograve;n được hỗ trợ c&ocirc;ng nghệ Bluetooth Low Energy, c&oacute; nghĩa l&agrave; người d&ugrave;ng c&oacute; thể sử dụng n&uacute;t tr&ecirc;n b&uacute;t để chụp ảnh cũng như play/pause từ xa. Việc d&ugrave;ng b&uacute;t để điều khiển như vậy thật sự hữu &iacute;ch trong thực tế, chẳng hạn như tự chụp ảnh m&agrave; kh&ocirc;ng cần sự hỗ trợ từ người xung quanh.</p>\r\n\r\n<h3><strong>Mua Galaxy Note 9 128GB cũ Mỹ tại XTsmart</strong></h3>\r\n\r\n<p>Giá bán Galaxy Note 9 128GB cũ Mỹ tại XTsmart lu&ocirc;n đảm bảo t&ocirc;́t nh&acirc;́t thị trường. Ch&acirc;́t lượng sản ph&acirc;̉m được đảm bảo tuy&ecirc;̣t đ&ocirc;́i th&ocirc;ng qua chính sách bảo hành dài hạn và đ&ocirc;̉i mới trong 30 ngày. Do đó khách hàng hoàn toàn có th&ecirc;̉ y&ecirc;n t&acirc;m khi mua sản ph&acirc;̉m tại đ&acirc;y, đ&ocirc;̀ng thời cửa hàng còn thường xuy&ecirc;n mang đ&ecirc;́n nhi&ecirc;̀u chương trình khuy&ecirc;́n mãi h&acirc;́p d&acirc;̃n, h&ocirc;̃ trợ trả góp 0%, thu cũ l&ecirc;n đời kh&ocirc;ng bù ti&ecirc;̀n...</p>\r\n', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD UNIQUE KEY `ten_sp` (`ten_sp`),
  ADD KEY `id_dm_pro` (`id_dm_pro`),
  ADD KEY `id_sub_dm_pro` (`id_sub_dm_pro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_dm_pro`) REFERENCES `danh_muc_pro` (`id_dm_pro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`id_sub_dm_pro`) REFERENCES `sub_danh_muc_pro` (`id_sub_dm_pro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 28, 2019 lúc 02:49 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
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
-- Cơ sở dữ liệu: `thegioirausach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Rau sạch'),
(2, 'Rau hữu cơ'),
(3, 'Rau Đà Lạt'),
(4, 'Nấm sạch Việt'),
(5, 'Rau an toàn'),
(6, 'Hoa quả sạch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `fullname`, `email`, `address`, `phone`) VALUES
(5, 'Nguyễn Thị Hồng Nhung', 'nhn@gmail.comm', 'Thái Bình', '12345677'),
(6, 'Lý Quỳnh', 'lyquynh@mail.com', 'Hưng Yên', '0121283824'),
(7, 'Minh minh', 'minh@mail.com', '123', '123'),
(8, 'VŨ Thị Lựu', 'vtl@mail.com', 'Hải Dương', '1122233333'),
(9, 'quỳnh lý', 'quynh@mail.com', 'hdg', '435'),
(10, 'Nguyễn Văn Enh', 'nva1@gmail.comm', 'Thái Bình', '1122233333'),
(11, 'Nguyễn Thị Ngọc', 'ngocnguyen@mail.com', 'Ý Yên, Nam ĐỊnh', '03387453111'),
(12, 'ĐỗnThị Hương', 'huongdo@mail.com', 'Đống Đa, Hà Nội', '0934253535'),
(13, 'Lê Hồng Đức', 'ducle@mail.com', 'Lai Xá, Kim Chung, Hoài Đức, Hà Nội', '035872221'),
(14, 'Phan Tiến Tùng', 'tungphan@mail.com', 'Tu Hoàng, Nam Từ Liêm, Hà Nội', '0365783455'),
(15, 'Nguyễn Thị Thúy Hường', 'huongbae@mail.com', 'Đông Anh, Hà Nội', '034373528'),
(16, 'Mai Thị Linh', 'linh@mail.com', 'Hưng Hà, Thái Bình', '043255777'),
(17, 'Nguyễn Tùng Dương', 'tungduong@mail.com', 'Hà Nam', '0335427324');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(500) NOT NULL,
  `news_description` text NOT NULL,
  `news_content` text NOT NULL,
  `hotnews` int(1) NOT NULL,
  `news_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_name`, `news_description`, `news_content`, `hotnews`, `news_img`) VALUES
(1, 'Sức hút đầu tư máy nông nghiệp rất lớn', '<p>Cho đến th&aacute;ng cuối năm 2011, ở ĐBSCL hoạt động đầu tư cơ giới h&oacute;a n&ocirc;ng nghiệp, thiết bị may mặc</p>\r\n', '<p>Cho đến th&aacute;ng cuối năm 2011, ở ĐBSCL hoạt động đầu tư cơ giới h&oacute;a n&ocirc;ng nghiệp, thiết bị may mặc...Cho đến th&aacute;ng cuối năm 2011, ở ĐBSCL hoạt động đầu tư cơ giới h&oacute;a n&ocirc;ng nghiệp, thiết bị may mặc...Cho đến th&aacute;ng cuối năm 2011, ở ĐBSCL hoạt động đầu tư cơ giới h&oacute;a n&ocirc;ng nghiệp, thiết bị may mặc</p>\r\n', 1, '1566184277_'),
(2, 'Tạo việc làm từ dịch vụ nông nghiệp', '<p>Đ&acirc;y l&agrave; hoạt động tạo vc l&agrave;m do n&ocirc;ng d&acirc;n tự li&ecirc;n kết lại, vừa tạo lao động cho n&ocirc;ng th&ocirc;n, vừa th&ecirc;m....</p>\r\n', '<p>Đ&acirc;y l&agrave; hoạt động tạo vc l&agrave;m do n&ocirc;ng d&acirc;n tự li&ecirc;n kết lại, vừa tạo lao động cho n&ocirc;ng th&ocirc;n, vừa th&ecirc;m....Đ&acirc;y l&agrave; hoạt động tạo vc l&agrave;m do n&ocirc;ng d&acirc;n tự li&ecirc;n kết lại, vừa tạo lao động cho n&ocirc;ng th&ocirc;n, vừa th&ecirc;m....Đ&acirc;y l&agrave; hoạt động tạo vc l&agrave;m do n&ocirc;ng d&acirc;n tự li&ecirc;n kết lại, vừa tạo lao động cho n&ocirc;ng th&ocirc;n, vừa th&ecirc;m....</p>\r\n', 0, '1566184261_'),
(3, 'Lao động nông nghiệp, số lượng lớn, chất lượng thấp', '<p>Trong 10 năm qua, đ&atilde; c&oacute; 15 triệu lao động c&oacute; việc l&agrave;m, trong đ&oacute;, khoảng 50% l&agrave;m trong lĩnh vực n&ocirc;ng nghiệp...</p>\r\n', '<p>Trong 10 năm qua, đ&atilde; c&oacute; 15 triệu lao động c&oacute; việc l&agrave;m, trong đ&oacute;, khoảng 50% l&agrave;m trong lĩnh vực n&ocirc;ng nghiệp...Trong 10 năm qua, đ&atilde; c&oacute; 15 triệu lao động c&oacute; việc l&agrave;m, trong đ&oacute;, khoảng 50% l&agrave;m trong lĩnh vực n&ocirc;ng nghiệp...Trong 10 năm qua, đ&atilde; c&oacute; 15 triệu lao động c&oacute; việc l&agrave;m, trong đ&oacute;, khoảng 50% l&agrave;m trong lĩnh vực n&ocirc;ng nghiệp...Trong 10 năm qua, đ&atilde; c&oacute; 15 triệu lao động c&oacute; việc l&agrave;m, trong đ&oacute;, khoảng 50% l&agrave;m trong lĩnh vực n&ocirc;ng nghiệp...</p>\r\n', 0, '1566184311_14867221976750_14750455014013_zze1430966369.jpg'),
(4, 'Phát triển dịch vụ nông nghiệp: Niềm vui cho nhà nông', '<p>Ra ng&otilde; gặp dịch vụ, đ&oacute; l&agrave; mơ ước của bất cứ người n&ocirc;ng d&acirc;n n&agrave;o v&agrave; trong những năm qua, việc ph&aacute;t...</p>\r\n', '<p>Ra ng&otilde; gặp dịch vụ, đ&oacute; l&agrave; mơ ước của bất cứ người n&ocirc;ng d&acirc;n n&agrave;o v&agrave; trong những năm qua, việc ph&aacute;t...Ra ng&otilde; gặp dịch vụ, đ&oacute; l&agrave; mơ ước của bất cứ người n&ocirc;ng d&acirc;n n&agrave;o v&agrave; trong những năm qua, việc ph&aacute;t...Ra ng&otilde; gặp dịch vụ, đ&oacute; l&agrave; mơ ước của bất cứ người n&ocirc;ng d&acirc;n n&agrave;o v&agrave; trong những năm qua, việc ph&aacute;t...Ra ng&otilde; gặp dịch vụ, đ&oacute; l&agrave; mơ ước của bất cứ người n&ocirc;ng d&acirc;n n&agrave;o v&agrave; trong những năm qua, việc ph&aacute;t...Ra ng&otilde; gặp dịch vụ, đ&oacute; l&agrave; mơ ước của bất cứ người n&ocirc;ng d&acirc;n n&agrave;o v&agrave; trong những năm qua, việc ph&aacute;t...Ra ng&otilde; gặp dịch vụ, đ&oacute; l&agrave; mơ ước của bất cứ người n&ocirc;ng d&acirc;n n&agrave;o v&agrave; trong những năm qua, việc ph&aacute;t...</p>\r\n', 1, '1566184400_'),
(5, 'Nông sản vùng ĐBSH đang vào mùa bội thu', '<p>T&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạch</p>\r\n', '<p>T&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạchT&ocirc;m h&ugrave;m c&agrave;ng xanh đang đến m&ugrave;a thu hoạch</p>\r\n', 1, '1566184494_14867221394330_14750457084279_tom_cang_xanh_1.jpg'),
(6, 'Phân bón cần thiết vào giai đoạn này', '<p>Gia đoạn n&agrave;y n&ocirc;ng nghiệp đang cần b&oacute;n cho c&acirc;y những chất dinh dưỡng đảm bảo....</p>\r\n', '<p>Gia đoạn n&agrave;y n&ocirc;ng nghiệp đang cần b&oacute;n cho c&acirc;y những chất dinh dưỡng đảm bảo....Gia đoạn n&agrave;y n&ocirc;ng nghiệp đang cần b&oacute;n cho c&acirc;y những chất dinh dưỡng đảm bảo....Gia đoạn n&agrave;y n&ocirc;ng nghiệp đang cần b&oacute;n cho c&acirc;y những chất dinh dưỡng đảm bảo....Gia đoạn n&agrave;y n&ocirc;ng nghiệp đang cần b&oacute;n cho c&acirc;y những chất dinh dưỡng đảm bảo....Gia đoạn n&agrave;y n&ocirc;ng nghiệp đang cần b&oacute;n cho c&acirc;y những chất dinh dưỡng đảm bảo....Gia đoạn n&agrave;y n&ocirc;ng nghiệp đang cần b&oacute;n cho c&acirc;y những chất dinh dưỡng đảm bảo....</p>\r\n', 1, '1566184599_14867220575216_14750457542181_9-Sieu-Kali-copy.jpg'),
(7, 'Rau củ trồng tại nhà', '<p>Trong 1 kh&ocirc;ng gian nhỏ hẹp, ng d&acirc;n vẫn c&oacute; thể tận dụng để trồng rau sạch...</p>\r\n', '<p>Trong 1 kh&ocirc;ng gian nhỏ hẹp, ng d&acirc;n vẫn c&oacute; thể tận dụng để trồng rau sạch...Trong 1 kh&ocirc;ng gian nhỏ hẹp, ng d&acirc;n vẫn c&oacute; thể tận dụng để trồng rau sạch...Trong 1 kh&ocirc;ng gian nhỏ hẹp, ng d&acirc;n vẫn c&oacute; thể tận dụng để trồng rau sạch...Trong 1 kh&ocirc;ng gian nhỏ hẹp, ng d&acirc;n vẫn c&oacute; thể tận dụng để trồng rau sạch...Trong 1 kh&ocirc;ng gian nhỏ hẹp, ng d&acirc;n vẫn c&oacute; thể tận dụng để trồng rau sạch...Trong 1 kh&ocirc;ng gian nhỏ hẹp, ng d&acirc;n vẫn c&oacute; thể tận dụng để trồng rau sạch...</p>\r\n', 1, '1566184713_14867223339809_14750452342439_raised-beds.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:chưa giao hàng, 1: đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `create_at`, `status`) VALUES
(1, 5, '2019-09-21', 0),
(2, 6, '2019-09-21', 0),
(3, 7, '2019-09-21', 0),
(4, 8, '2019-09-21', 0),
(5, 9, '2019-09-25', 0),
(6, 10, '2019-09-26', 0),
(7, 11, '2019-09-28', 0),
(8, 12, '2019-09-28', 0),
(9, 13, '2019-09-28', 0),
(10, 14, '2019-09-28', 0),
(11, 15, '2019-09-28', 0),
(12, 16, '2019-09-28', 0),
(13, 17, '2019-09-28', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `saleprice` float NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `saleprice`, `number`) VALUES
(1, 3, 11, 150000, 1),
(2, 3, 9, 150000, 1),
(3, 4, 13, 120000, 2),
(4, 4, 7, 110000, 2),
(5, 4, 6, 120000, 1),
(6, 5, 33, 43000, 2),
(7, 6, 33, 43000, 1),
(8, 7, 21, 150000, 3),
(9, 7, 29, 120000, 2),
(10, 7, 27, 53000, 1),
(11, 7, 5, 250000, 1),
(12, 8, 32, 33000, 2),
(13, 8, 22, 123000, 2),
(14, 8, 20, 115000, 1),
(15, 9, 11, 150000, 1),
(16, 10, 8, 100000, 2),
(17, 10, 6, 120000, 1),
(18, 11, 33, 43000, 2),
(19, 11, 15, 120, 3),
(20, 12, 30, 23000, 2),
(21, 12, 17, 110000, 2),
(22, 12, 24, 25000, 1),
(23, 13, 20, 115000, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_content` text NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `saleprice` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `hotproduct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `product_quantity`, `product_content`, `product_img`, `saleprice`, `product_description`, `hotproduct`) VALUES
(2, 'Bông Atisô', 6, 100, '<p>TÁC DỤNG CỦA B&Ocirc;NG ATIS&Ocirc;: Giải đ&ocirc;̣c gan: nhờ có chứa ch&acirc;́t ch&ocirc;́ng oxy hóa cynarin và silymarin mà b&ocirc;ng Atis&ocirc; được xem như là th&acirc;̀n dược trong vi&ecirc;̣c đi&ecirc;̀u trị b&ecirc;̣nh gan, có th&ecirc;̉ thải trừ các đ&ocirc;̣c t&ocirc;́ và làm sạch gan, giúp bạn có làn da sáng khỏe Giảm cholesterol trong máu, giúp h&ecirc;̣ ti&ecirc;u hóa t&ocirc;́t, người già dùng b&ocirc;ng Atis&ocirc; làm thu&ocirc;́c nhu&acirc;̣n tràng r&acirc;́t t&ocirc;́t vì nó kh&ocirc;ng g&acirc;y ti&ecirc;u chảy mà cũng kh&ocirc;ng có tác dụng phụ Chữa b&ecirc;̣nh ti&ecirc;̉u đường: b&ocirc;ng Atis&ocirc; chứa lượng nhỏ tinh b&ocirc;̣t, thành ph&acirc;̀n carbohydrate chứa ph&acirc;̀n lớn là Inlin n&ecirc;n giúp người b&ecirc;̣nh đái tháo nhạt có ch&ecirc;́ đ&ocirc;̣ ăn ki&ecirc;ng chữa b&ecirc;̣nh hi&ecirc;̣u quả B&ocirc;ng Atis&ocirc; còn có tác dụng th&ocirc;ng m&acirc;̣t, lợi ti&ecirc;̉u, giảm ur&ecirc; trong máu, hạ s&ocirc;́t, nhu&acirc;̣n trường LƯU Ý: kh&ocirc;ng n&ecirc;n thường xuy&ecirc;n lạm dụng và dùng quá mức Atis&ocirc; vì có th&ecirc;̉ g&acirc;y ra những bi&ecirc;́n chứng phụ như trướng bụng, cơ th&ecirc;̉ m&ecirc;̣t mỏi, hại gan, co thắt cơ trơn của h&ecirc;̣ ti&ecirc;u hóa</p>\r\n', '1565754215_', 120000, '<p>B&ocirc;ng Atis&ocirc; có chứa các ch&acirc;́t khoáng như mangan, photpho, sắt, các vitamin A, B1, B2, C, cung c&acirc;́p 50-75 calorie. Ngoài ra, b&ocirc;ng Atis&ocirc; còn chứa khoảng 9.3% carbohydrate, 1.5% ch&acirc;́t xơ, r&acirc;́t ít ch&acirc;́t béo và protein. B&ocirc;ng Atis&ocirc; khi n&acirc;́u chín có tác dụng b&ocirc;̉ dưỡng năng lực, kích thích ti&ecirc;u hóa làm ngon mi&ecirc;̣ng, lợi gan m&acirc;̣t, trợ tim, lợi ti&ecirc;̉u, ch&ocirc;́ng đ&ocirc;̣c, tăng ti&ecirc;́t sữa cho sản phụ (khi k&ecirc;́t hợp h&acirc;̀m với ch&acirc;n giò)</p>\r\n', 1),
(3, 'Cà tím', 2, 100, '<p>TÁC DỤNG CỦA B&Ocirc;NG ATIS&Ocirc;: Giải đ&ocirc;̣c gan: nhờ có chứa ch&acirc;́t ch&ocirc;́ng oxy hóa cynarin và silymarin mà b&ocirc;ng Atis&ocirc; được xem như là th&acirc;̀n dược trong vi&ecirc;̣c đi&ecirc;̀u trị b&ecirc;̣nh gan, có th&ecirc;̉ thải trừ các đ&ocirc;̣c t&ocirc;́ và làm sạch gan, giúp bạn có làn da sáng khỏe Giảm cholesterol trong máu, giúp h&ecirc;̣ ti&ecirc;u hóa t&ocirc;́t, người già dùng b&ocirc;ng Atis&ocirc; làm thu&ocirc;́c nhu&acirc;̣n tràng r&acirc;́t t&ocirc;́t vì nó kh&ocirc;ng g&acirc;y ti&ecirc;u chảy mà cũng kh&ocirc;ng có tác dụng phụ Chữa b&ecirc;̣nh ti&ecirc;̉u đường: b&ocirc;ng Atis&ocirc; chứa lượng nhỏ tinh b&ocirc;̣t, thành ph&acirc;̀n carbohydrate chứa ph&acirc;̀n lớn là Inlin n&ecirc;n giúp người b&ecirc;̣nh đái tháo nhạt có ch&ecirc;́ đ&ocirc;̣ ăn ki&ecirc;ng chữa b&ecirc;̣nh hi&ecirc;̣u quả B&ocirc;ng Atis&ocirc; còn có tác dụng th&ocirc;ng m&acirc;̣t, lợi ti&ecirc;̉u, giảm ur&ecirc; trong máu, hạ s&ocirc;́t, nhu&acirc;̣n trường LƯU Ý: kh&ocirc;ng n&ecirc;n thường xuy&ecirc;n lạm dụng và dùng quá mức Atis&ocirc; vì có th&ecirc;̉ g&acirc;y ra những bi&ecirc;́n chứng phụ như trướng bụng, cơ th&ecirc;̉ m&ecirc;̣t mỏi, hại gan, co thắt cơ trơn của h&ecirc;̣ ti&ecirc;u hóa</p>\r\n', '1565754201_', 155000, '<p>B&ocirc;ng Atis&ocirc; có chứa các ch&acirc;́t khoáng như mangan, photpho, sắt, các vitamin A, B1, B2, C, cung c&acirc;́p 50-75 calorie. Ngoài ra, b&ocirc;ng Atis&ocirc; còn chứa khoảng 9.3% carbohydrate, 1.5% ch&acirc;́t xơ, r&acirc;́t ít ch&acirc;́t béo và protein. B&ocirc;ng Atis&ocirc; khi n&acirc;́u chín có tác dụng b&ocirc;̉ dưỡng năng lực, kích thích ti&ecirc;u hóa làm ngon mi&ecirc;̣ng, lợi gan m&acirc;̣t, trợ tim, lợi ti&ecirc;̉u, ch&ocirc;́ng đ&ocirc;̣c, tăng ti&ecirc;́t sữa cho sản phụ (khi k&ecirc;́t hợp h&acirc;̀m với ch&acirc;n giò)</p>\r\n', 1),
(4, 'Cà rốt', 3, 120, '<p>TÁC DỤNG CỦA B&Ocirc;NG ATIS&Ocirc;: Giải đ&ocirc;̣c gan: nhờ có chứa ch&acirc;́t ch&ocirc;́ng oxy hóa cynarin và silymarin mà b&ocirc;ng Atis&ocirc; được xem như là th&acirc;̀n dược trong vi&ecirc;̣c đi&ecirc;̀u trị b&ecirc;̣nh gan, có th&ecirc;̉ thải trừ các đ&ocirc;̣c t&ocirc;́ và làm sạch gan, giúp bạn có làn da sáng khỏe Giảm cholesterol trong máu, giúp h&ecirc;̣ ti&ecirc;u hóa t&ocirc;́t, người già dùng b&ocirc;ng Atis&ocirc; làm thu&ocirc;́c nhu&acirc;̣n tràng r&acirc;́t t&ocirc;́t vì nó kh&ocirc;ng g&acirc;y ti&ecirc;u chảy mà cũng kh&ocirc;ng có tác dụng phụ Chữa b&ecirc;̣nh ti&ecirc;̉u đường: b&ocirc;ng Atis&ocirc; chứa lượng nhỏ tinh b&ocirc;̣t, thành ph&acirc;̀n carbohydrate chứa ph&acirc;̀n lớn là Inlin n&ecirc;n giúp người b&ecirc;̣nh đái tháo nhạt có ch&ecirc;́ đ&ocirc;̣ ăn ki&ecirc;ng chữa b&ecirc;̣nh hi&ecirc;̣u quả B&ocirc;ng Atis&ocirc; còn có tác dụng th&ocirc;ng m&acirc;̣t, lợi ti&ecirc;̉u, giảm ur&ecirc; trong máu, hạ s&ocirc;́t, nhu&acirc;̣n trường LƯU Ý: kh&ocirc;ng n&ecirc;n thường xuy&ecirc;n lạm dụng và dùng quá mức Atis&ocirc; vì có th&ecirc;̉ g&acirc;y ra những bi&ecirc;́n chứng phụ như trướng bụng, cơ th&ecirc;̉ m&ecirc;̣t mỏi, hại gan, co thắt cơ trơn của h&ecirc;̣ ti&ecirc;u hóa</p>\r\n', '1565754187_', 120000, '<p>B&ocirc;ng Atis&ocirc; có chứa các ch&acirc;́t khoáng như mangan, photpho, sắt, các vitamin A, B1, B2, C, cung c&acirc;́p 50-75 calorie. Ngoài ra, b&ocirc;ng Atis&ocirc; còn chứa khoảng 9.3% carbohydrate, 1.5% ch&acirc;́t xơ, r&acirc;́t ít ch&acirc;́t béo và protein. B&ocirc;ng Atis&ocirc; khi n&acirc;́u chín có tác dụng b&ocirc;̉ dưỡng năng lực, kích thích ti&ecirc;u hóa làm ngon mi&ecirc;̣ng, lợi gan m&acirc;̣t, trợ tim, lợi ti&ecirc;̉u, ch&ocirc;́ng đ&ocirc;̣c, tăng ti&ecirc;́t sữa cho sản phụ (khi k&ecirc;́t hợp h&acirc;̀m với ch&acirc;n giò)</p>\r\n', 0),
(5, 'Bơ Đà Lạt', 3, 130, '<p>TÁC DỤNG CỦA B&Ocirc;NG ATIS&Ocirc;: Giải đ&ocirc;̣c gan: nhờ có chứa ch&acirc;́t ch&ocirc;́ng oxy hóa cynarin và silymarin mà b&ocirc;ng Atis&ocirc; được xem như là th&acirc;̀n dược trong vi&ecirc;̣c đi&ecirc;̀u trị b&ecirc;̣nh gan, có th&ecirc;̉ thải trừ các đ&ocirc;̣c t&ocirc;́ và làm sạch gan, giúp bạn có làn da sáng khỏe Giảm cholesterol trong máu, giúp h&ecirc;̣ ti&ecirc;u hóa t&ocirc;́t, người già dùng b&ocirc;ng Atis&ocirc; làm thu&ocirc;́c nhu&acirc;̣n tràng r&acirc;́t t&ocirc;́t vì nó kh&ocirc;ng g&acirc;y ti&ecirc;u chảy mà cũng kh&ocirc;ng có tác dụng phụ Chữa b&ecirc;̣nh ti&ecirc;̉u đường: b&ocirc;ng Atis&ocirc; chứa lượng nhỏ tinh b&ocirc;̣t, thành ph&acirc;̀n carbohydrate chứa ph&acirc;̀n lớn là Inlin n&ecirc;n giúp người b&ecirc;̣nh đái tháo nhạt có ch&ecirc;́ đ&ocirc;̣ ăn ki&ecirc;ng chữa b&ecirc;̣nh hi&ecirc;̣u quả B&ocirc;ng Atis&ocirc; còn có tác dụng th&ocirc;ng m&acirc;̣t, lợi ti&ecirc;̉u, giảm ur&ecirc; trong máu, hạ s&ocirc;́t, nhu&acirc;̣n trường LƯU Ý: kh&ocirc;ng n&ecirc;n thường xuy&ecirc;n lạm dụng và dùng quá mức Atis&ocirc; vì có th&ecirc;̉ g&acirc;y ra những bi&ecirc;́n chứng phụ như trướng bụng, cơ th&ecirc;̉ m&ecirc;̣t mỏi, hại gan, co thắt cơ trơn của h&ecirc;̣ ti&ecirc;u hóa</p>\r\n', '1565754154_', 250000, '<p>B&ocirc;ng Atis&ocirc; có chứa các ch&acirc;́t khoáng như mangan, photpho, sắt, các vitamin A, B1, B2, C, cung c&acirc;́p 50-75 calorie. Ngoài ra, b&ocirc;ng Atis&ocirc; còn chứa khoảng 9.3% carbohydrate, 1.5% ch&acirc;́t xơ, r&acirc;́t ít ch&acirc;́t béo và protein. B&ocirc;ng Atis&ocirc; khi n&acirc;́u chín có tác dụng b&ocirc;̉ dưỡng năng lực, kích thích ti&ecirc;u hóa làm ngon mi&ecirc;̣ng, lợi gan m&acirc;̣t, trợ tim, lợi ti&ecirc;̉u, ch&ocirc;́ng đ&ocirc;̣c, tăng ti&ecirc;́t sữa cho sản phụ (khi k&ecirc;́t hợp h&acirc;̀m với ch&acirc;n giò)</p>\r\n', 0),
(6, 'Chuối ngự', 6, 120, '<p>TÁC DỤNG CỦA B&Ocirc;NG ATIS&Ocirc;: Giải đ&ocirc;̣c gan: nhờ có chứa ch&acirc;́t ch&ocirc;́ng oxy hóa cynarin và silymarin mà b&ocirc;ng Atis&ocirc; được xem như là th&acirc;̀n dược trong vi&ecirc;̣c đi&ecirc;̀u trị b&ecirc;̣nh gan, có th&ecirc;̉ thải trừ các đ&ocirc;̣c t&ocirc;́ và làm sạch gan, giúp bạn có làn da sáng khỏe Giảm cholesterol trong máu, giúp h&ecirc;̣ ti&ecirc;u hóa t&ocirc;́t, người già dùng b&ocirc;ng Atis&ocirc; làm thu&ocirc;́c nhu&acirc;̣n tràng r&acirc;́t t&ocirc;́t vì nó kh&ocirc;ng g&acirc;y ti&ecirc;u chảy mà cũng kh&ocirc;ng có tác dụng phụ Chữa b&ecirc;̣nh ti&ecirc;̉u đường: b&ocirc;ng Atis&ocirc; chứa lượng nhỏ tinh b&ocirc;̣t, thành ph&acirc;̀n carbohydrate chứa ph&acirc;̀n lớn là Inlin n&ecirc;n giúp người b&ecirc;̣nh đái tháo nhạt có ch&ecirc;́ đ&ocirc;̣ ăn ki&ecirc;ng chữa b&ecirc;̣nh hi&ecirc;̣u quả B&ocirc;ng Atis&ocirc; còn có tác dụng th&ocirc;ng m&acirc;̣t, lợi ti&ecirc;̉u, giảm ur&ecirc; trong máu, hạ s&ocirc;́t, nhu&acirc;̣n trường LƯU Ý: kh&ocirc;ng n&ecirc;n thường xuy&ecirc;n lạm dụng và dùng quá mức Atis&ocirc; vì có th&ecirc;̉ g&acirc;y ra những bi&ecirc;́n chứng phụ như trướng bụng, cơ th&ecirc;̉ m&ecirc;̣t mỏi, hại gan, co thắt cơ trơn của h&ecirc;̣ ti&ecirc;u hóa</p>\r\n', '1565754139_', 120000, '<p>B&ocirc;ng Atis&ocirc; có chứa các ch&acirc;́t khoáng như mangan, photpho, sắt, các vitamin A, B1, B2, C, cung c&acirc;́p 50-75 calorie. Ngoài ra, b&ocirc;ng Atis&ocirc; còn chứa khoảng 9.3% carbohydrate, 1.5% ch&acirc;́t xơ, r&acirc;́t ít ch&acirc;́t béo và protein. B&ocirc;ng Atis&ocirc; khi n&acirc;́u chín có tác dụng b&ocirc;̉ dưỡng năng lực, kích thích ti&ecirc;u hóa làm ngon mi&ecirc;̣ng, lợi gan m&acirc;̣t, trợ tim, lợi ti&ecirc;̉u, ch&ocirc;́ng đ&ocirc;̣c, tăng ti&ecirc;́t sữa cho sản phụ (khi k&ecirc;́t hợp h&acirc;̀m với ch&acirc;n giò)</p>\r\n', 1),
(7, 'Nấm kim', 4, 100, '						<p>TÁC DỤNG CỦA BÔNG ATISÔ: Giải độc gan: nhờ có chứa chất chống oxy hóa cynarin và silymarin mà bông Atisô được xem như là thần dược trong việc điều trị bệnh gan, có thể thải trừ các độc tố và làm sạch gan, giúp bạn có làn da sáng khỏe Giảm cholesterol trong máu, giúp hệ tiêu hóa tốt, người già dùng bông Atisô làm thuốc nhuận tràng rất tốt vì nó không gây tiêu chảy mà cũng không có tác dụng phụ Chữa bệnh tiểu đường: bông Atisô chứa lượng nhỏ tinh bột, thành phần carbohydrate chứa phần lớn là Inlin nên giúp người bệnh đái tháo nhạt có chế độ ăn kiêng chữa bệnh hiệu quả Bông Atisô còn có tác dụng thông mật, lợi tiểu, giảm urê trong máu, hạ sốt, nhuận trường LƯU Ý: không nên thường xuyên lạm dụng và dùng quá mức Atisô vì có thể gây ra những biến chứng phụ như trướng bụng, cơ thể mệt mỏi, hại gan, co thắt cơ trơn của hệ tiêu hóa</p>\r\n					', '1565754124_', 55000, '		<p>Bông Atisô có chứa các chất khoáng như mangan, photpho, sắt, các vitamin A, B1, B2, C, cung cấp 50-75 calorie. Ngoài ra, bông Atisô còn chứa khoảng 9.3% carbohydrate, 1.5% chất xơ, rất ít chất béo và protein. Bông Atisô khi nấu chín có tác dụng bổ dưỡng năng lực, kích thích tiêu hóa làm ngon miệng, lợi gan mật, trợ tim, lợi tiểu, chống độc, tăng tiết sữa cho sản phụ (khi kết hợp hầm với chân giò)</p>\r\n		\r\n					', 0),
(8, 'Nấm tươi', 4, 100, '<p>TÁC DỤNG CỦA B&Ocirc;NG ATIS&Ocirc;: Giải đ&ocirc;̣c gan: nhờ có chứa ch&acirc;́t ch&ocirc;́ng oxy hóa cynarin và silymarin mà b&ocirc;ng Atis&ocirc; được xem như là th&acirc;̀n dược trong vi&ecirc;̣c đi&ecirc;̀u trị b&ecirc;̣nh gan, có th&ecirc;̉ thải trừ các đ&ocirc;̣c t&ocirc;́ và làm sạch gan, giúp bạn có làn da sáng khỏe Giảm cholesterol trong máu, giúp h&ecirc;̣ ti&ecirc;u hóa t&ocirc;́t, người già dùng b&ocirc;ng Atis&ocirc; làm thu&ocirc;́c nhu&acirc;̣n tràng r&acirc;́t t&ocirc;́t vì nó kh&ocirc;ng g&acirc;y ti&ecirc;u chảy mà cũng kh&ocirc;ng có tác dụng phụ Chữa b&ecirc;̣nh ti&ecirc;̉u đường: b&ocirc;ng Atis&ocirc; chứa lượng nhỏ tinh b&ocirc;̣t, thành ph&acirc;̀n carbohydrate chứa ph&acirc;̀n lớn là Inlin n&ecirc;n giúp người b&ecirc;̣nh đái tháo nhạt có ch&ecirc;́ đ&ocirc;̣ ăn ki&ecirc;ng chữa b&ecirc;̣nh hi&ecirc;̣u quả B&ocirc;ng Atis&ocirc; còn có tác dụng th&ocirc;ng m&acirc;̣t, lợi ti&ecirc;̉u, giảm ur&ecirc; trong máu, hạ s&ocirc;́t, nhu&acirc;̣n trường LƯU Ý: kh&ocirc;ng n&ecirc;n thường xuy&ecirc;n lạm dụng và dùng quá mức Atis&ocirc; vì có th&ecirc;̉ g&acirc;y ra những bi&ecirc;́n chứng phụ như trướng bụng, cơ th&ecirc;̉ m&ecirc;̣t mỏi, hại gan, co thắt cơ trơn của h&ecirc;̣ ti&ecirc;u hóa</p>\r\n', '1565754115_', 100000, '<p>B&ocirc;ng Atis&ocirc; có chứa các ch&acirc;́t khoáng như mangan, photpho, sắt, các vitamin A, B1, B2, C, cung c&acirc;́p 50-75 calorie. Ngoài ra, b&ocirc;ng Atis&ocirc; còn chứa khoảng 9.3% carbohydrate, 1.5% ch&acirc;́t xơ, r&acirc;́t ít ch&acirc;́t béo và protein. B&ocirc;ng Atis&ocirc; khi n&acirc;́u chín có tác dụng b&ocirc;̉ dưỡng năng lực, kích thích ti&ecirc;u hóa làm ngon mi&ecirc;̣ng, lợi gan m&acirc;̣t, trợ tim, lợi ti&ecirc;̉u, ch&ocirc;́ng đ&ocirc;̣c, tăng ti&ecirc;́t sữa cho sản phụ (khi k&ecirc;́t hợp h&acirc;̀m với ch&acirc;n giò)</p>\r\n', 1),
(9, 'Khoai lang tím', 6, 123, '<p>j</p>\r\n', '1565754101_', 150000, '<p>j</p>\r\n', 0),
(11, 'Dâu tây', 6, 123, '<p>sdsfsf</p>\r\n', '1565754004_14650111_1834506056785453_4163471559046559578_n.jpg', 150000, '<p>df</p>\r\n', 0),
(12, 'Dưa gang', 6, 130, '<p>Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........</p>\r\n', '1566123582_2.png', 150000, '<p>Dưa gang được cung cấp bởi n&ocirc;ng trường của Đ&agrave; Lạt........</p>\r\n', 1),
(13, 'Nha đam', 5, 125, '						<p>Nha đam được sử dụng trong chăm sóc da và là sản phẩm ngon bổ dưỡng. Nha đam được sử dụng trong chăm sóc da và là sản phẩm ngon bổ dưỡng. Nha đam được sử dụng trong chăm sóc da và là sản phẩm ngon bổ dưỡng. Nha đam được sử dụng trong chăm sóc da và là sản phẩm ngon bổ dưỡng. Nha đam được sử dụng trong chăm sóc da và là sản phẩm ngon bổ dưỡng</p>\r\n					', '1566123756_', 120000, '		<p>Nha đam là một sản phẩm sạch tốt cho da</p>\r\n		\r\n					', 0),
(14, 'Chuối sấy', 6, 0, '<p>Chuối sấy l&agrave; m&oacute;n ăn vặt hấp dẫn v&agrave; được nhiều người ưa chuộng ph&ugrave; hợp với&nbsp;tất cả c&aacute;c lứa tuổi.&nbsp;Chuối sấy l&agrave; m&oacute;n ăn vặt hấp dẫn v&agrave; được nhiều người ưa chuộng ph&ugrave; hợp với&nbsp;tất cả c&aacute;c lứa tuổi.&nbsp;Chuối sấy l&agrave; m&oacute;n ăn vặt hấp dẫn v&agrave; được nhiều người ưa chuộng ph&ugrave; hợp với&nbsp;tất cả c&aacute;c lứa tuổi.&nbsp;Chuối sấy l&agrave; m&oacute;n ăn vặt hấp dẫn v&agrave; được nhiều người ưa chuộng ph&ugrave; hợp với&nbsp;tất cả c&aacute;c lứa tuổi.&nbsp;Chuối sấy l&agrave; m&oacute;n ăn vặt hấp dẫn v&agrave; được nhiều người ưa chuộng ph&ugrave; hợp với&nbsp;tất cả c&aacute;c lứa tuổi.&nbsp;</p>\r\n', '1566617276_', 50000, '<p>Chuối sấy l&agrave; m&oacute;n ăn vặt hấp dẫn v&agrave; được nhiều người ưa chuộng ph&ugrave; hợp với&nbsp;tất cả c&aacute;c lứa tuổi.&nbsp;</p>\r\n', 0),
(15, 'Rau má', 1, 50, '	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...	Rau má là loại rau rất tốt cho cơ thể...											', '1568821128_3.png', 120, 'Rau má là loại rau rất tốt cho cơ thể...				\r\n					', 0),
(16, 'Nấm yến tươi', 4, 50, 'Nấm yến là loại nấm sạch có nguồn gốc ở Hàn Quốc, mới chỉ du nhập vào Việt Nam 3,4 năm nay. Trồng nấm yến rất khó thành công, nó đòi hỏi công nghệ cực cao và điều kiện quy chuẩn nghiêm ngặt. \r\nVề hình dáng nấm yến có mũ màu tím nhạt, mũ nhỏ, thân to, mẫm, vị ngọt nhẹ nhàng, thích hợp để xào, nấu, ít người dùng ăn lẩu do thân và mũ dễ nát.							', '1569073861_nam-yen-tuoi.jpg', 120000, 'Nấm yến tươi là sản phẩm khá được ưa chuộng ở Việt Nam. Là sản phẩm của nông trường Cao Bằng.			\r\n					', 0),
(17, 'Bí đỏ', 2, 53, 'Bí ngô hay bí đỏ là một loại cây dây thuộc chi Cucurbita, họ Bầu bí. Trong bí đỏ có nhiều vitamin, muối sắt, và các axit hữu cơ có lợi cho sức khỏe. \r\nBí đỏ có nhiều tác dụng như: giảm cân, tốt cho tim mach, tốt cho não bộ, phòng và điều trị tiểu đường...\r\nBí đỏ dễ dang chế biến nhiều món ăn ngon và bổ dưỡng, phù hợp với mọi lứa tuổi. 								', '1569074227_14867755826165_14750449887927_bi-do-ho-lo-loai-1kg.jpg', 110000, 'Bí đỏ bổ cung nhiều chất cần thiết cho cơ thể con người. Được lấy từ nông trường của Đồng bằng sông Hồng..				\r\n					', 0),
(18, 'Táo tây đỏ', 6, 0, 'Cây táo tây đỏ là giống táo có vỏ đỏ mọng, trái to ăn thơm và giòn. Cây dễ trồng và chăm sóc. Cây giống được phân phối tại vườn ươm giống ở Học Viện Nông Nghiệp VN. \r\nTáo đỏ có chứa lượng Vitamin C và Vitamin E phong phú, những  loại Vitamin này giúp cho làn da của phụ nữ mang bầu tươi sáng và đẹp hơn.\r\nNgoài ra, nó còn giúp chống lại sự hình thành các vết nám, vết thâm trên khuôn mặt. \r\nTáo đỏ chứa giá trị dinh dưỡng rất cao với nhiều protein, lipid, axit amin, vitamin A, B2, C, P, các nguyên tố vô cơ như canxi, phốt pho, sắt, nhôm…			', '1569074637_3.png', 140000, 'Táo tây đỏ, vỏ mọng, là trái cây tráng miệng phù hợp với nhiều lứa tuổi... 		', 1),
(19, 'Bắp cải ', 1, 120, '						Bắp cải xanh chứa nhiều hợp chất Lưu huỳnh, là hợp chất kháng viêm mạnh mẽ, ngăn chặn sự phát triển của tế bào ung thư.\r\nBắp cải xanh có thể chế biến theo nhiều cách tùy khẩu vị và sở thích mỗi người, có thể là cải muối, luộc hoặc xào, đều là các thức ăn dễ ăn cho mọi lứa tuổi.															', '1569074912_14867212395063_14750371694137_gap2009-500x500.jpg', 100000, '		Bắp cải xanh chứa nhiều hợp chất Lưu huỳnh, là hợp chất kháng viêm mạnh mẽ, ngăn chặn sự phát triển của tế bào ung thư.\r\n							\r\n					', 0),
(20, 'Dưa chuột', 5, 43, 'Dưa chuột có đặc tính lợi tiểu nhẹ, có lẽ là nhờ lượng muối thấp, hàm lượng nước tự do và kali. Đặc tính này giúp kiểm soát tình trạng tăng cân và huyết áp cao.\r\n\r\nĐiều đáng ngạc nhiên là loại quả này có lượng vitamin K cao, cung cấp khoảng 17 µg vitamin K/100 g. Vitamin K có vai trò quan trọng đối với xương do nó thúc đẩy hoạt động tạo xương. Vitamin này cũng đã được xác định vai trò trong điều trị bệnh nhân nhờ hạn chế tổn thương tế bào thần kinh trong não.\r\n\r\nDưa chuột có thể dùng ăn sống, trộn sa lát, làm sinh tố, nấu xúp hoặc chế biến thành nhiều món ăn khác								', '1569075136_14867754906721_14750449112698_3-1.jpg', 115000, 'Là một trong những loại rau rất ít calo, 100g dưa chuột chỉ cung cấp 15 calo. Dưa chuột không chứa chất béo no hoặc cholesterol.				\r\n					', 0),
(21, 'Bông cải xanh', 3, 135, 'Bông cải xanh có rất nhiều lợi ích: ngăn ngừa thoái hóa khớp, tiêu diệt tế bào ung thư gốc, tốt cho huyết áp và thận, đặc biệt tốt cho người bị tiểu đường.\r\nBông cải xanh có thể luộc hoặc xào với nhiều loại thực phẩm khác tùy khẩu vị mỗi người.											', '1569075557_14867758076258_14750446805944_bong-cai-cung-la-lieu-thuoc-trang-da-huu-dung-thuoc-trang-da2.jpg', 150000, 'Bông cải xanh là thức ăn giàu chất dinh dưỡng, dễ dàng chế biến. Được cung cấp từ nông trại ở Hải Dương.			\r\n					', 1),
(22, 'Bầu', 1, 54, 'Vào những ngày hè oi bức, bầu là thức ăn giải nhiệt. Bầu có thể nấu với ngao, hến, hoặc nấu với chút hành khô..cugx là lựa chọn tuyệt vời cho bữa cơm.\r\nBầu có rất nhiều công dụng: làm đẹp da, thanh nhiệt giải độc, ngăn ngừa rụng tóc và tốt cho tim mạch.											', '1569076439_14867760378869_14750444935208_bau-xanh-500x500.jpg', 123000, 'Bầu là thực phẩm rất sạch và chứa nhiều chất dinh dưỡng.				\r\n					', 1),
(23, 'Rau cải ngọt', 1, 42, 'Rau cải ngọt là lựa chọn cho nhiều gia đình vì dễ chế biến và khá dễ ăn. Rau cải ngọt tốt cho tiêu hóa, làm thanh nhiệt, tiêu thực hạ khí, có thể chữa ho hay táo bón. Ngoài ra, ăn nhiều cải còn giúp cho việc phòng ngừa bệnh trĩ, ung thư ruột kết, ung thư gan và kết hợp điều trị bệnh ung thư và xơ cứng gan.											', '1569076730_2.png', 120000, 'Cải ngọt có vị ngọt, tính ôn, có công dụng thông lợi trường vị, làm đỡ tức ngực.		', 1),
(24, 'Rau muống', 1, 56, 'Rau muống là loại rau ưa chuộng vào mùa hè với canh chua, phù hợp với nhiều món ăn kèm rất..Việt Nam. Rau muốn chưa nhiều sắt, giúp tóc dễ suôn mượt và chắc khỏe. \r\nSử dụng rau muống giúp tăng cường miễn dịch nhờ chứa nhiều Carotene và vitamin C, giảm huyết áp, hỗ trợ điều trị bệnh tim mạch, giảm nhẹ trứng táo bón, giảm Cholesterol, thanh nhiệt, bảo vệ da, bảo vệ mắt, bảo vệ hệ thần kinh, hạ đường máu…\r\nRau muống có thể chế biến thành các món ăn ngon như: rau muống xào tỏi, rỏi rau muống, rau muống xào ốc móng tay, canh rau muống giò sống, lẩu vịt…											', '1569078043_1.png', 25000, 'Rau muống là thực phẩm quen thuộc đối với người Việt Nam				\r\n					', 1),
(25, 'Rau cải chíp', 2, 0, 'Các loại thực phẩm có các chất dinh dưỡng nhất cho mỗi calo có thứ hạng cao nhất, Cải chíp được xếp hạng trong số 3 loại trái cây và rau quả hàng đầu về Andi.\r\nRau cải chíp có nhiều công dụng như: phòng ngừa bệnh ung thư, giúp tiêu hóa tốt, giảm cân và hạ huyết áp....\r\nRau cải chíp cũng dễ dàng chế biến và phù hợp với nhiều lứa tuổi..							', '1569079264_rau-xanh-mua-he-can-can-than-2.jpg', 120000, 'Rau cải chíp thuộc nhà rau cải, nhiều chất dinh dưỡng và dễ ăn.			', 0),
(27, 'Khoai tây', 2, 73, '						Vỏ khoai tây rất giàu kali giúp trái tim của bạn khỏe mạnh. Ngoài vi chất này, khoai tây còn chứa phốt pho, magie, canxi, natri, sắt và kẽm. \r\nKhoai tây chứa các chất làm đẹp da, chữa bệnh đau dạ dày, giúp giả trầm cảm là thực phẩm giúp con ng dễ tăng cân nếu ăn kèm với phô mai hoặc đem rán, chiên.														', '1569120139_', 53000, '		Khoai tây là thực phẩm ko thể thiếu trong ẩm thực.				\r\n							\r\n					', 1),
(29, 'Củ dền', 5, 75, 'Củ dền có rất nhiều công dụng đối với sức khỏe con người như:\r\nGiúp gan khỏe mạnh\r\nỔn định trạng thái tinh thần\r\nỔn định huyết áp\r\nChống đột quỵ và ngừa bệnh đau tim\r\nChứng thiếu máu\r\nXo vừa động mạch\r\nHuyết áp\r\nGiãn tĩnh mạch\r\nTăng cường hệ miễn dịch\r\n....											', '1569120339_buriak.jpg', 120000, 'Củ dền đỏ Đà Lạt là một loại nông sản được trồng phổ biến tại Đà Lạt, do người Pháp nhập về trồng xen với những loại cây rau khác.				\r\n					', 0),
(30, 'Cà chua', 5, 64, 'Trong cà chua còn có rất nhiều chất vi lượng như: sắt, canxi, magie, niken… tăng sức đề kháng cho cơ thể. Trong cà chua còn có chứa sắc tố lycopen và beta-caroten. Đây là những chất chống oxy hóa mạnh, ngăn chặn tế bào ung thư và chống hình thành máu đông trong thành mạch máu. Nhờ những dưỡng chất ấy mà cà chua còn là dưỡng da rất tốt.\r\n\r\n										', '1569120582_cachua.jpg', 23000, 'Cà chua là loại quả quen thuộc trong những bữa cơm, bữa tiệc hằng ngày của chúng ta.\r\n			\r\n					', 0),
(31, 'Mướp đắng', 1, 63, 'Những món ngon từ mướp đắng ăn lần đầu tuy khó ăn nhưng lần sau bạn sẽ dễ dàng bị nghiền nó lúc nào không hay. Từ mướp đắng bạn có thể chế biến thành nhiều món ăn thơm ngon, hấp dẫn như: canh gà mướp đắng, canh mướp đắng cá viên, mướp đắng nhồi thịt, mướp đắng chiên giòn, trứng chiên mướp đắng.\r\nTheo Đông y, mướp đắng tính hàn, vị đắng, không độc, nếu được dùng thường xuyên sẽ giúp giảm các bệnh ngoài da, làm cho da dẻ mịn màng. Mướp đắng cũng được nhiều bà mẹ trẻ dùng để nấu nước tắm cho trẻ, trị rôm sảy. Được lấy từ loại mướp đắng trồng theo phương pháp hữu cơ, không sử dụng các loại phân bón, thuốc trừ sâu độc hại, sản phẩm đảm bảo an toàn cho sức khỏe người dùng.											', '1569120782_muopdang.jpg', 32000, 'Mướp ăn là thực phẩm rất tốt cho cơ thể, được gọi là \"kháng sinh sống\"...				\r\n					', 0),
(32, 'Ớt chuông', 3, 55, 'Ớt chuông giàu vitamin A, vitamin C và chất dinh dưỡng khác\r\nỚt chuông giàu chất chống oxy hóa và có tác dụng chống viêm\r\nỚt chuông phòng chống ung thư\r\nỚt chuông làm đẹp tóc và da\r\nỚt chuông có tác dụng tốt lên hệ thần kinh\r\nỚt chuông giúp đôi mắt sáng khỏe											', '1569121068_otchuong.jpg', 33000, 'Ớt chuông có nhiều màu đẹp mắt. Được cung cấp bởi nông trường Minh Khai ở Đà Lạt.				\r\n					', 0),
(33, 'Cam vàng', 6, 42, 'Cam vàng chứa nhiều vitamin C giúp đẹp da, lợi tiêu hóa. Cam vàng phù hợp với mọi đối tượng, đặc biết công dụng với người bị ốm.											', '1569121275_cam.jpg', 43000, 'Cam vàng là loại quả rất được ưa chuộng. Là loại quả nhập khẩu ở Mỹ..				\r\n					', 1),
(34, 'Táo xanh Mỹ', 6, 32, 'Táo xanh ngoài là loại quả tráng miệng, lại là thực phẩm tốt cho da. Táo xanh giúp bảo vệ da khỏi các tia cực tím có hại của mặt trời do táo có chứa đồng. Quả táo xanh cũng chứa vitamin A, giúp bảo vệ làn da của chúng ta khỏi các tế bào gây ung thư.											', '1569121569_taoxanh.jpg', 45000, 'Táo xanh được nhập khẩu từ Mỹ. là loại quả chứa nhiều khoáng chất và vitamin cần thiết cho cơ thể.				\r\n					', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `fullname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `password`, `fullname`) VALUES
(1, 'admin', 'admin123', 'Nguyễn Văn A'),
(3, 'Vanh', 'anhnv123', 'Nguyễn Văn Anh'),
(4, 'minh', 'minhvt123', 'Vũ Thị Minh'),
(5, 'admin1', '123', 'Nguyễn Văn B'),
(6, 'admin2', '123', 'Nguyễn Văn C'),
(9, 'en', '123', 'Nguyễn Văn Enh'),
(10, 'vuluu', '123', 'Nguyễn Văn Eng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2020 lúc 03:45 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `bn_id` bigint(20) UNSIGNED NOT NULL,
  `bn_hinhanh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`bn_id`, `bn_hinhanh`, `bn_tieude`, `bn_noidung`, `bn_trangthai`, `created_at`, `updated_at`) VALUES
(1, '160banner-danh-muc-trang-diem-01.png', 'Khuyến mãi 6/6 - Top thương hiệu mỹ phẩm khuyến mãi HOT nhất', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Khuyến mãi 12/12, Lazada có rất nhiều ưu đãi hấp dẫn đặc biệt là ngành hàng sức khỏe và sắc đẹp. Đây là thời điểm các thương hiệu&nbsp;<a href=\"https://chanhtuoi.com/my-pham-khuyen-mai-hot-nhat-p2022.html\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\"><em style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">mỹ phẩm khuyến mãi</strong></em></a>&nbsp;SỐC với nhiều chương trình khuyến mãi, mã giảm giá và quà tặng đi kèm.. Trong bài viết này, mình sẽ tổng hợp những thương hiệu mỹ phẩm khuyến mãi 12/12 trên Lazada nhé! Các bạn nhớ note lại để đến ngày 12/12 đặt mua với giá tốt nhất!</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-00.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"209\" data-id=\"32149\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><h2 id=\"mcetoc_1drn898ik1\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">1. Mỹ phẩm Innisfree</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Innissfree là thương hiệu mỹ phẩm chính hãng trên Lazada với hơn 106k lượt follow. Các đơn hàng của shopee 99% là giao đúng hẹn với hơn 5600 lượt đánh giá tích cực. Vậy nên các bạn có thể an tâm khi đặt hàng tại shop Innisfree trên Lazada nhé!</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-01.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"210\" data-id=\"32140\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Trong sự kiện khuyến mãi 12/12, Innisfree có nhiều ưu đãi hấp dẫn. Ví dụ:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng 350k cho 500k đơn hàng đầu tiên từ 350k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Voucher 50k cho đơn hàng từ 500k, voucher 100k cho đơn hàng từ 800k -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNThVNzlZ\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Ngoài ra từ 0-2h ngày 12.12 Innisfree còn mở bán những Beauty Box bán chạy nhất với giá giảm 35%, tất nhiên giá rẻ thì số lượng sản phẩm có hạn, bạn bỏ sản phẩm vào giỏ hàng trước, chờ đến lúc mở bán thì nhanh tay mua ngay nhé!</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-02.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"645\" data-id=\"32141\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNThVNzlZ\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn89c702\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">2. Mỹ phẩm La Roche-Posay</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">La Roche-Posay là thương hiệu mỹ phẩm hàng đầu rất nổi tiếng của Pháp.; Tất cả những sản phẩm thuộc La Roche Posay đều được thử nghiệm lâm sàng và đánh giá khách quan từ bệnh viện Saint Jacques-Toulouse. Bởi vậy các chuyên gia khoa da liễu hay các dược sĩ thường khuyên bệnh nhân, khách hàng nên dùng.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">La Roche Posay là đối tác lâu năm của Lazada, có gian hàng phân phối chính hãng trên Lazada với hơn 52 nghìn lượt theo dõi. Các sản phẩm của hãng cũng luôn được người tiêu dùng đánh giá cao.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-03.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"250\" data-id=\"32142\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Trong dịp khuyến mãi Lazada 12.12 này La Roche-Posay có rất nhiều ưu đãi cho bạn như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng xịt khoáng 50ml cho đơn hàng từ 399k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Sale đậm nhiều sản phẩm tới 50%</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Mã voucher Lazada giảm 50K cho đơn hàng từ 500K, mã giảm 60K cho đơn hàng từ 549K, mã giảm 120K cho đơn hàng từ 1 triệu -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTEV0SDh1\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-04.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"265\" data-id=\"32143\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTEV0SDh1\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn89nhv3\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">3. Mỹ phẩm maybelline</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Thương hiệu mỹ phẩm Maybeline chắc hẳn rất quen thuộc với người tiêu dùng Việt Nam. Gian hàng mỹ phẩm chính hãng Maybelline trên Lazada hiện nay có tới 62k lượt Follow.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-05.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"216\" data-id=\"32144\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Là 1 thương hiệu lớn nên trong sự kiện khuyến mãi 12/12, Maybeline cũng có nhiều ưu đãi cho người dùng như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng các mã giảm giá 15K cho đơn hàng từ 179K, mã 20K cho đơn từ 249K, mã 40K cho đơn từ 329K và mã HOT giảm 120K cho đơn hàng từ 349K -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTHpMOWVu\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Thời gian từ 05/12 – 11/12, bạn có cơ hội nhận được bộ quà tặng trị giá 1.200.000đ khi thêm các sản phẩm của Maybelline vào giỏ hàng.</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Trong 3 ngày diễn ra khuyến mãi từ 12/12 -14/12, Maybelline sẽ tặng voucher mua giày Biti’s Hunter trị giá 899.000đ cho 60 khách hàng có Top đơn hàng hợp lệ giá trị cao nhất.</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">0h - 2h ngày 12/12, ngày tất cả các sản phẩm đều giảm sốc đến 50%</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTHpMOWVu\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn89s3g4\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">4. Mỹ phẩm Vichy</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Tại Việt Nam, Vichy là thương hiệu mỹ phẩm rất nổi tiếng và phổ biến. Gian hàng chính hãng trên Lazada của Vichy hiện nay có khoảng 40k lượt theo dõi với nhiều dòng sản phẩm khác nhau.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-06.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"250\" data-id=\"32145\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Nếu bạn là khách hàng quen của Vichy thì hãy tranh thủ đợt khuyến mãi 12/12 đặt mua các sản phẩm nhé! Trong đợt này, Vichy sale khá lớn với nhiều ưu đãi như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Vichy tặng bạn các mã giảm giá như 50K cho đơn từ 500K, 75K cho đơn từ 700K, 150K cho đơn từ 1200K -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNTdlU1RI\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Giảm giá gốc của các sản phẩm lên đến 50% trong 3 ngày diễn ra khuyến mãi</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng túi Makeup trị giá 200K cho đơn hàng mỹ phẩm Vichy từ 499K</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNTdlU1RI\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn8a0es5\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">5. Mỹ phẩm Laneige</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Laneige nổi tiếng với các sản phẩm dưỡng ẩm rất tốt, lành tính dùng được cho mọi loại da. Thời tiết hiện nay đang ngày càng hanh khô, vậy nên các bạn hãy tranh thủ chương trình khuyến mãi 12/12 trên Lazada để đặt mua những mặt hàng tốt nhất! Với các sản phẩm trong gian hàng Laneige chính hãng, Lazada có nhiều ưu đãi tốt như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Laneige tặng mã giảm giá 50K cho đơn từ 500K, mã 100K cho đơn từ 800K, mã 130K cho đơn từ 1000K -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDdOcHZC\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">01/12 – 14/12: hi bạn follow shop Laneige trên Lazada sẽ có cơ hội nhận được Mặt nạ dưỡng ẩm Water Sleeping Mask 70ml trị giá 750K. Quà tặng sẽ trao cho 3 follower được chọn ngẫu may mắn nhất và sẽ được công bố ở mục Dạo vào ngày 16/12.</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-07.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"212\" data-id=\"32146\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">0H -2H ngày 12/12, có nhiều deal khuyến mãi giảm sâu đến 50%</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Khuyến mãi MUA 1 TẶNG 1 các sản phẩm Laneige vào ngày 13/12</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Ngày 14/12 là chương trình siêu phẩm quà tặng trị giá 480K.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDdOcHZC\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn8a6ou6\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">6. Mỹ phẩm L’Oreal Paris</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Gian hàng mỹ phẩm L’Oreal Paris chính hãng trên Lazada cũng có rất nhiều chương trình khuyến mãi vào dịp 12.12 này. Cụ thể:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Từ ngày 5-11/12, Lazada tặng tất cả các đơn hàng từ 249k micro-essence 22ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Từ ngày 12-14/12, tặng túi louis vuitton trị giá đến 100 triệu cho 2 TOP đơn hàng trên 1.2 triệu</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-08.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"200\" data-id=\"32147\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Follow shop nhận mã giảm giá 50k và tặng bộ sản phẩm trị giá 1 triệu cho khách hàng may mắn</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">0h-2h ngày 12/12 tặng bộ quà trị giá 228k áp dụng cho đơn hàng từ 249k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng bộ sản phẩm trị giá 1.2 triệu áp dụng cho 3 khách hàng may mắn khi đáp ứng đủ điều kiện của Lazada.&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDh1Y0s5\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">XEM CHI TIẾT</a></li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDh1Y0s5\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">XEM CHI TIẾT</strong></a></p><h2 id=\"mcetoc_1drn8aakl7\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">7. Paula\'s Choice Official</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Paula\'s Choice Official là thương hiệu mỹ phẩm thành lập từ năm 1995 tại Mỹ. Hiện nay Paula\'s Choice Official có mặt tại hơn 20 quốc gia trên thế giới trong đó có Việt Nam.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-09.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"225\" data-id=\"32148\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Trong sự kiện khuyến mãi 12/12 trên Lazada đợt này, Paula\'s Choice cũng có nhiều ưu đãi hấp dẫn dành cho người dùng. Mình có note lại 1 số khuyến mãi HOT nhất dưới đây để mọi người có thể tham khảo:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Voucher đỉnh cuối năm: 12k voucher 30k dành cho tất cả đơn hàng, 1000 voucher 80k mỗi ngày, 112k voucher 112k lúc 12h mỗi ngày từ 12-14/12 -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNm5VZHVX\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">5-11/12: Tặng 1 kem trị mụn chuyên sâu 299k áp dụng cho đơn hàng từ 899k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">12-14/12: Tặng bông tẩy trang thiên nhiên cho 1000 đơn hàng đầu tiên từ 699k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng độc quyền ngày 12/12: bộ làm sạch ngừa mụn trị giá 339k cho 100 đơn hàng đầu tiên từ 2.5 triệu</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng độc quyền ngày 13/12: bộ sản phẩm dưỡng ẩm tái tạo da áp dụng cho 100 đơn hàng đầu tiên từ 2.5 triệu</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng độc quyền ngày 14/12: bộ sản phẩm trị mụn đầu đen trị giá 429k cho 100 đơn hàng đầu tiên từ 2.5 triệu</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNm5VZHVX\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drs33rel0\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">8.&nbsp;</strong>Clinique khuyến mãi 12/12</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Qùa tặng độc quyền cho mọi đơn hàng khi mua săm tại shop chính hãng Clinique Flagship Store trên Lazada:</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Bộ quà 2 món cho mọi đơn hàng</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 kem dưỡng ẩm Clinique Dramaticall Different Hydrating Jelly - Moisturizer 30ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 kem tẩy tế bào chết 7 Day Scrub Cream Rinse-Off Formula 30ml</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-10.jpg\" alt=\"MỸ PHẨM KHUYẾN MÃI\" width=\"600\" height=\"250\" data-id=\"32243\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Tặng thêm bộ quà 3 món cho đơn hàng từ 1.2 triệu</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 dưỡng ẩm Moisture Surge 7ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 kem mắt All About Eyes 7ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 son môi dưỡng ẩm</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Ưu đãi khủng trong những khung giờ đặc biệt</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">12:00 - 14:00 ngày 12/12: tặng 1 gel dưỡng ẩm kiểm soát dầu 15ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">00:00 - 02:00 ngày 13/12: tặng 1 son Pop Glaze sheer 2.3g trị giá 350k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">19:00 - 21:00 ngày 13/12: Tặng 1 mascara min trị giá 300k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">12:00 - 14:00: tặng 1 nước thanh tẩy 60ml giá 290k + 1 dưỡng ẩm 7ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">19:00 - 21:00 ngày 14/12: tặng 1 mặt nạ ngủ 7ml và 1 sáp tẩy trang 15ml</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cHM6Ly9nb2dvby5tb2JpL282Y2ZwZzU=\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">&nbsp;XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drs46au81\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">9. MỸ phẩm MAC chính hãng&nbsp;</strong></h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Đây là chương trình giảm giá siêu sale 12.12 của Lazada với nhiều nội dung hấp dẫn. Cụ thể:</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Các sản phẩm trong sự kiện này sẽ được giảm giá banh nóc vào ngày 12.12.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Mỗi đơn hàng sẽ được Tặng phấn mắt Eye Shadow 1.5g trị giá 600k</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Nhận ngay 1 móc khóa MAC Starring You xinh xắn</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-11.jpg\" alt=\"mỹ phẩm khuyến mãi\" width=\"600\" height=\"625\" data-id=\"32244\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Ưu đãi khung giờ đặc biệt</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">00:00 - 02:00 ngày 12/12 : tặng 1 xịt khoảng 30ml trtij giá 390k</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">19:00 - 21:00, ngày 12/12 : Tặng thêm 1 khăn giấy tẩy trang trị giá 390k</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">00:00 -02:00, ngày 13/12: Tặng 1 túi hồng xinh xắn</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">19:00 - 21:00, ngày 13/12: tặng 1 túi hologram độc đáo</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">12:00 - 14:00 ngày 14/12: tặng 1 túi tròn MAC , 1 gương, 1 sticker và 1 nắp son môi</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">19:00 - 21:00 tặng 1 túi tròn MAC , 1 gương, 1 sticker và 1 nắp son môi&nbsp;</p></li></ul>', 1, '2020-06-07 07:45:25', '2020-06-07 07:45:25');
INSERT INTO `banner` (`bn_id`, `bn_hinhanh`, `bn_tieude`, `bn_noidung`, `bn_trangthai`, `created_at`, `updated_at`) VALUES
(2, '363shopee-sale-my-pham.jpg', 'Mua càng nhiều giá càng giảm', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Khuyến mãi 12/12, Lazada có rất nhiều ưu đãi hấp dẫn đặc biệt là ngành hàng sức khỏe và sắc đẹp. Đây là thời điểm các thương hiệu&nbsp;<a href=\"https://chanhtuoi.com/my-pham-khuyen-mai-hot-nhat-p2022.html\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\"><em style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">mỹ phẩm khuyến mãi</strong></em></a>&nbsp;SỐC với nhiều chương trình khuyến mãi, mã giảm giá và quà tặng đi kèm.. Trong bài viết này, mình sẽ tổng hợp những thương hiệu mỹ phẩm khuyến mãi 12/12 trên Lazada nhé! Các bạn nhớ note lại để đến ngày 12/12 đặt mua với giá tốt nhất!</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-00.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"209\" data-id=\"32149\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><h2 id=\"mcetoc_1drn898ik1\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">1. Mỹ phẩm Innisfree</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Innissfree là thương hiệu mỹ phẩm chính hãng trên Lazada với hơn 106k lượt follow. Các đơn hàng của shopee 99% là giao đúng hẹn với hơn 5600 lượt đánh giá tích cực. Vậy nên các bạn có thể an tâm khi đặt hàng tại shop Innisfree trên Lazada nhé!</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-01.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"210\" data-id=\"32140\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Trong sự kiện khuyến mãi 12/12, Innisfree có nhiều ưu đãi hấp dẫn. Ví dụ:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng 350k cho 500k đơn hàng đầu tiên từ 350k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Voucher 50k cho đơn hàng từ 500k, voucher 100k cho đơn hàng từ 800k -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNThVNzlZ\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Ngoài ra từ 0-2h ngày 12.12 Innisfree còn mở bán những Beauty Box bán chạy nhất với giá giảm 35%, tất nhiên giá rẻ thì số lượng sản phẩm có hạn, bạn bỏ sản phẩm vào giỏ hàng trước, chờ đến lúc mở bán thì nhanh tay mua ngay nhé!</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-02.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"645\" data-id=\"32141\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNThVNzlZ\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn89c702\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">2. Mỹ phẩm La Roche-Posay</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">La Roche-Posay là thương hiệu mỹ phẩm hàng đầu rất nổi tiếng của Pháp.; Tất cả những sản phẩm thuộc La Roche Posay đều được thử nghiệm lâm sàng và đánh giá khách quan từ bệnh viện Saint Jacques-Toulouse. Bởi vậy các chuyên gia khoa da liễu hay các dược sĩ thường khuyên bệnh nhân, khách hàng nên dùng.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">La Roche Posay là đối tác lâu năm của Lazada, có gian hàng phân phối chính hãng trên Lazada với hơn 52 nghìn lượt theo dõi. Các sản phẩm của hãng cũng luôn được người tiêu dùng đánh giá cao.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-03.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"250\" data-id=\"32142\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Trong dịp khuyến mãi Lazada 12.12 này La Roche-Posay có rất nhiều ưu đãi cho bạn như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng xịt khoáng 50ml cho đơn hàng từ 399k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Sale đậm nhiều sản phẩm tới 50%</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Mã voucher Lazada giảm 50K cho đơn hàng từ 500K, mã giảm 60K cho đơn hàng từ 549K, mã giảm 120K cho đơn hàng từ 1 triệu -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTEV0SDh1\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-04.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"265\" data-id=\"32143\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTEV0SDh1\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn89nhv3\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">3. Mỹ phẩm maybelline</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Thương hiệu mỹ phẩm Maybeline chắc hẳn rất quen thuộc với người tiêu dùng Việt Nam. Gian hàng mỹ phẩm chính hãng Maybelline trên Lazada hiện nay có tới 62k lượt Follow.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-05.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"216\" data-id=\"32144\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Là 1 thương hiệu lớn nên trong sự kiện khuyến mãi 12/12, Maybeline cũng có nhiều ưu đãi cho người dùng như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng các mã giảm giá 15K cho đơn hàng từ 179K, mã 20K cho đơn từ 249K, mã 40K cho đơn từ 329K và mã HOT giảm 120K cho đơn hàng từ 349K -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTHpMOWVu\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Thời gian từ 05/12 – 11/12, bạn có cơ hội nhận được bộ quà tặng trị giá 1.200.000đ khi thêm các sản phẩm của Maybelline vào giỏ hàng.</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Trong 3 ngày diễn ra khuyến mãi từ 12/12 -14/12, Maybelline sẽ tặng voucher mua giày Biti’s Hunter trị giá 899.000đ cho 60 khách hàng có Top đơn hàng hợp lệ giá trị cao nhất.</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">0h - 2h ngày 12/12, ngày tất cả các sản phẩm đều giảm sốc đến 50%</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yTHpMOWVu\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn89s3g4\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">4. Mỹ phẩm Vichy</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Tại Việt Nam, Vichy là thương hiệu mỹ phẩm rất nổi tiếng và phổ biến. Gian hàng chính hãng trên Lazada của Vichy hiện nay có khoảng 40k lượt theo dõi với nhiều dòng sản phẩm khác nhau.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-06.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"250\" data-id=\"32145\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Nếu bạn là khách hàng quen của Vichy thì hãy tranh thủ đợt khuyến mãi 12/12 đặt mua các sản phẩm nhé! Trong đợt này, Vichy sale khá lớn với nhiều ưu đãi như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Vichy tặng bạn các mã giảm giá như 50K cho đơn từ 500K, 75K cho đơn từ 700K, 150K cho đơn từ 1200K -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNTdlU1RI\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Giảm giá gốc của các sản phẩm lên đến 50% trong 3 ngày diễn ra khuyến mãi</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng túi Makeup trị giá 200K cho đơn hàng mỹ phẩm Vichy từ 499K</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNTdlU1RI\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn8a0es5\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">5. Mỹ phẩm Laneige</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Laneige nổi tiếng với các sản phẩm dưỡng ẩm rất tốt, lành tính dùng được cho mọi loại da. Thời tiết hiện nay đang ngày càng hanh khô, vậy nên các bạn hãy tranh thủ chương trình khuyến mãi 12/12 trên Lazada để đặt mua những mặt hàng tốt nhất! Với các sản phẩm trong gian hàng Laneige chính hãng, Lazada có nhiều ưu đãi tốt như:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Laneige tặng mã giảm giá 50K cho đơn từ 500K, mã 100K cho đơn từ 800K, mã 130K cho đơn từ 1000K -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDdOcHZC\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">01/12 – 14/12: hi bạn follow shop Laneige trên Lazada sẽ có cơ hội nhận được Mặt nạ dưỡng ẩm Water Sleeping Mask 70ml trị giá 750K. Quà tặng sẽ trao cho 3 follower được chọn ngẫu may mắn nhất và sẽ được công bố ở mục Dạo vào ngày 16/12.</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-07.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"212\" data-id=\"32146\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">0H -2H ngày 12/12, có nhiều deal khuyến mãi giảm sâu đến 50%</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Khuyến mãi MUA 1 TẶNG 1 các sản phẩm Laneige vào ngày 13/12</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Ngày 14/12 là chương trình siêu phẩm quà tặng trị giá 480K.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDdOcHZC\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drn8a6ou6\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">6. Mỹ phẩm L’Oreal Paris</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Gian hàng mỹ phẩm L’Oreal Paris chính hãng trên Lazada cũng có rất nhiều chương trình khuyến mãi vào dịp 12.12 này. Cụ thể:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Từ ngày 5-11/12, Lazada tặng tất cả các đơn hàng từ 249k micro-essence 22ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Từ ngày 12-14/12, tặng túi louis vuitton trị giá đến 100 triệu cho 2 TOP đơn hàng trên 1.2 triệu</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-08.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"200\" data-id=\"32147\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Follow shop nhận mã giảm giá 50k và tặng bộ sản phẩm trị giá 1 triệu cho khách hàng may mắn</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">0h-2h ngày 12/12 tặng bộ quà trị giá 228k áp dụng cho đơn hàng từ 249k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Tặng bộ sản phẩm trị giá 1.2 triệu áp dụng cho 3 khách hàng may mắn khi đáp ứng đủ điều kiện của Lazada.&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDh1Y0s5\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">XEM CHI TIẾT</a></li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8yUDh1Y0s5\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">XEM CHI TIẾT</strong></a></p><h2 id=\"mcetoc_1drn8aakl7\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\">7. Paula\'s Choice Official</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Paula\'s Choice Official là thương hiệu mỹ phẩm thành lập từ năm 1995 tại Mỹ. Hiện nay Paula\'s Choice Official có mặt tại hơn 20 quốc gia trên thế giới trong đó có Việt Nam.</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-09.jpg\" alt=\"Mỹ phẩm khuyến mãi\" width=\"600\" height=\"225\" data-id=\"32148\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Trong sự kiện khuyến mãi 12/12 trên Lazada đợt này, Paula\'s Choice cũng có nhiều ưu đãi hấp dẫn dành cho người dùng. Mình có note lại 1 số khuyến mãi HOT nhất dưới đây để mọi người có thể tham khảo:</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Voucher đỉnh cuối năm: 12k voucher 30k dành cho tất cả đơn hàng, 1000 voucher 80k mỗi ngày, 112k voucher 112k lúc 12h mỗi ngày từ 12-14/12 -&nbsp;<a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNm5VZHVX\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203); font-weight: bold;\">Link lấy mã</a></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">5-11/12: Tặng 1 kem trị mụn chuyên sâu 299k áp dụng cho đơn hàng từ 899k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">12-14/12: Tặng bông tẩy trang thiên nhiên cho 1000 đơn hàng đầu tiên từ 699k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng độc quyền ngày 12/12: bộ làm sạch ngừa mụn trị giá 339k cho 100 đơn hàng đầu tiên từ 2.5 triệu</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng độc quyền ngày 13/12: bộ sản phẩm dưỡng ẩm tái tạo da áp dụng cho 100 đơn hàng đầu tiên từ 2.5 triệu</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">Qùa tặng độc quyền ngày 14/12: bộ sản phẩm trị mụn đầu đen trị giá 429k cho 100 đơn hàng đầu tiên từ 2.5 triệu</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cDovL2JpdC5seS8zNm5VZHVX\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drs33rel0\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">8.&nbsp;</strong>Clinique khuyến mãi 12/12</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Qùa tặng độc quyền cho mọi đơn hàng khi mua săm tại shop chính hãng Clinique Flagship Store trên Lazada:</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Bộ quà 2 món cho mọi đơn hàng</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 kem dưỡng ẩm Clinique Dramaticall Different Hydrating Jelly - Moisturizer 30ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 kem tẩy tế bào chết 7 Day Scrub Cream Rinse-Off Formula 30ml</li></ul><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-10.jpg\" alt=\"MỸ PHẨM KHUYẾN MÃI\" width=\"600\" height=\"250\" data-id=\"32243\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Tặng thêm bộ quà 3 món cho đơn hàng từ 1.2 triệu</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 dưỡng ẩm Moisture Surge 7ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 kem mắt All About Eyes 7ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">1 son môi dưỡng ẩm</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Ưu đãi khủng trong những khung giờ đặc biệt</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">12:00 - 14:00 ngày 12/12: tặng 1 gel dưỡng ẩm kiểm soát dầu 15ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">00:00 - 02:00 ngày 13/12: tặng 1 son Pop Glaze sheer 2.3g trị giá 350k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">19:00 - 21:00 ngày 13/12: Tặng 1 mascara min trị giá 300k</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">12:00 - 14:00: tặng 1 nước thanh tẩy 60ml giá 290k + 1 dưỡng ẩm 7ml</li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\">19:00 - 21:00 ngày 14/12: tặng 1 mặt nạ ngủ 7ml và 1 sáp tẩy trang 15ml</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\"><a href=\"https://chanhtuoi.com/cloaksoutgoinglinks.html?outlink=aHR0cHM6Ly9nb2dvby5tb2JpL282Y2ZwZzU=\" rel=\"nofollow\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(31, 126, 203);\">&nbsp;XEM CHI TIẾT</a></strong></p><h2 id=\"mcetoc_1drs46au81\" style=\"margin: 15px 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; color: rgb(51, 51, 51); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 20px; line-height: 24px; font-family: sans-serif;\"><strong style=\"margin: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent;\">9. MỸ phẩm MAC chính hãng&nbsp;</strong></h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">Đây là chương trình giảm giá siêu sale 12.12 của Lazada với nhiều nội dung hấp dẫn. Cụ thể:</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Các sản phẩm trong sự kiện này sẽ được giảm giá banh nóc vào ngày 12.12.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Mỗi đơn hàng sẽ được Tặng phấn mắt Eye Shadow 1.5g trị giá 600k</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Nhận ngay 1 móc khóa MAC Starring You xinh xắn</p><figure style=\"margin-bottom: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-family: OpenSans, sans-serif; font-size: 14px; text-align: center;\"><img src=\"https://cdn.chanhtuoi.com/uploads/2019/12/my-pham-khuyen-mai-11.jpg\" alt=\"mỹ phẩm khuyến mãi\" width=\"600\" height=\"625\" data-id=\"32244\" style=\"margin: 20px auto; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; max-width: 100%; display: block;\"></figure><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px; text-align: justify; font-family: OpenSans, sans-serif;\">- Ưu đãi khung giờ đặc biệt</p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; list-style: none; font-family: OpenSans, sans-serif; font-size: 14px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">00:00 - 02:00 ngày 12/12 : tặng 1 xịt khoảng 30ml trtij giá 390k</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">19:00 - 21:00, ngày 12/12 : Tặng thêm 1 khăn giấy tẩy trang trị giá 390k</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">00:00 -02:00, ngày 13/12: Tặng 1 túi hồng xinh xắn</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">19:00 - 21:00, ngày 13/12: tặng 1 túi hologram độc đáo</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">12:00 - 14:00 ngày 14/12: tặng 1 túi tròn MAC , 1 gương, 1 sticker và 1 nắp son môi</p></li><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 15px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; font-size: 16px; line-height: 25px; position: relative; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; outline: none; cursor: pointer; -webkit-tap-highlight-color: transparent; line-height: 30px;\">19:00 - 21:00 tặng 1 túi tròn MAC , 1 gương, 1 sticker và 1 nắp son môi&nbsp;</p></li></ul>', 1, '2020-06-07 07:46:09', '2020-06-07 07:46:09'),
(3, '249Banner-web.jpg', 'Mua càng nhiều giá càng giảm 2', 'abcdụcádjádjáđâsd', 1, '2020-06-07 08:03:15', '2020-06-07 08:03:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `bl_id` bigint(20) UNSIGNED NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `bl_noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ctdh_id` bigint(20) UNSIGNED NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `sp_dongia` int(11) NOT NULL,
  `sp_soluongsp` int(11) NOT NULL,
  `dh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethinhanh`
--

CREATE TABLE `chitiethinhanh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkhuyenmai`
--

CREATE TABLE `chitietkhuyenmai` (
  `lo_id` bigint(20) UNSIGNED NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `ctl_dongia` int(11) NOT NULL,
  `ctl_soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietlo`
--

CREATE TABLE `chitietlo` (
  `lo_id` bigint(20) UNSIGNED NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `ctl_dongia` int(11) NOT NULL,
  `ctl_soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietlo`
--

INSERT INTO `chitietlo` (`lo_id`, `sp_id`, `ctl_dongia`, `ctl_soluong`, `created_at`, `updated_at`) VALUES
(1, 1, 100000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(2, 2, 150000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(3, 3, 280000, 50, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(4, 4, 50000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(5, 5, 200000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(6, 6, 800000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(7, 7, 200000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(8, 8, 130000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00'),
(9, 9, 250000, 100, '2020-06-06 17:00:00', '2020-06-06 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congdung`
--

CREATE TABLE `congdung` (
  `cd_id` bigint(20) UNSIGNED NOT NULL,
  `cd_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congdung`
--

INSERT INTO `congdung` (`cd_id`, `cd_ten`, `created_at`, `updated_at`) VALUES
(1, 'Công dụng 1', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Công dụng 2', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(3, 'Công dụng 3', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(4, 'Công dụng 4', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(5, 'Công dụng 5', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(6, 'Công dụng 6', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(7, 'Công dụng 7', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(8, 'Công dụng 8', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congdungphu`
--

CREATE TABLE `congdungphu` (
  `cdp_id` bigint(20) UNSIGNED NOT NULL,
  `cdp_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congdungphu`
--

INSERT INTO `congdungphu` (`cdp_id`, `cdp_ten`, `created_at`, `updated_at`) VALUES
(1, 'Công dụng 1', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Công dụng 2', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(3, 'Công dụng 3', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(4, 'Công dụng 4', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(5, 'Công dụng 5', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(6, 'Công dụng 6', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(7, 'Công dụng 7', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(8, 'Công dụng 8', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `dh_id` bigint(20) UNSIGNED NOT NULL,
  `dh_tongtien` int(11) NOT NULL,
  `dh_madon` int(11) NOT NULL,
  `dh_nguoinhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dh_noinhan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dh_thoigiandathang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dh_thoigiannhanhang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dh_trangthai` int(11) NOT NULL DEFAULT 1,
  `dh_quatrinhvanchuyen` int(11) NOT NULL DEFAULT 1,
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `ha_id` bigint(20) UNSIGNED NOT NULL,
  `ha_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`ha_id`, `ha_ten`, `sp_id`, `created_at`, `updated_at`) VALUES
(1, '7871chi-ke-1.jpg', 1, '2020-06-07 07:37:43', '2020-06-07 07:37:43'),
(2, '6011chi-ke-2.jpg', 1, '2020-06-07 07:38:02', '2020-06-07 07:38:02'),
(3, '9532son-over-game-1.jpg', 2, '2020-06-07 08:16:28', '2020-06-07 08:16:28'),
(4, '9602son-over-game-2.jpg', 2, '2020-06-07 08:16:36', '2020-06-07 08:16:36'),
(5, '4702son-over-game-23jpg.png', 2, '2020-06-07 08:16:43', '2020-06-07 08:16:43'),
(6, '4843kem-duong.jpg', 3, '2020-06-07 08:20:25', '2020-06-07 08:20:25'),
(7, '9783kem-duong-2.jpg', 3, '2020-06-07 08:20:32', '2020-06-07 08:20:32'),
(8, '6314da-chet-1.jpg', 4, '2020-06-07 08:24:35', '2020-06-07 08:24:35'),
(9, '2674da-chet-2.jpg', 4, '2020-06-07 08:25:21', '2020-06-07 08:25:21'),
(10, '5155duong-da-chet-1.jpg', 5, '2020-06-07 08:29:22', '2020-06-07 08:29:22'),
(11, '9335duong-da-chet-2.jpg', 5, '2020-06-07 08:29:27', '2020-06-07 08:29:27'),
(12, '3776nhh1.jpg', 6, '2020-06-07 08:34:42', '2020-06-07 08:34:42'),
(13, '556nhh2.jpg', 6, '2020-06-07 08:34:49', '2020-06-07 08:34:49'),
(14, '6976nhh3.jpg', 6, '2020-06-07 08:34:55', '2020-06-07 08:34:55'),
(15, '6237sdt-1.jpg', 7, '2020-06-07 08:44:38', '2020-06-07 08:44:38'),
(16, '2467sdt-2.jpg', 7, '2020-06-07 08:44:44', '2020-06-07 08:44:44'),
(17, '2228dt-1.jpg', 8, '2020-06-07 08:47:02', '2020-06-07 08:47:02'),
(18, '568dt-2.jpg', 8, '2020-06-07 08:47:07', '2020-06-07 08:47:07'),
(19, '5999nh-1.jpg', 9, '2020-06-07 08:49:47', '2020-06-07 08:49:47'),
(20, '4149nh-2.jpg', 9, '2020-06-07 08:49:52', '2020-06-07 08:49:52'),
(21, '4529nh-3.jpg', 9, '2020-06-07 08:49:58', '2020-06-07 08:49:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `httt_id` bigint(20) UNSIGNED NOT NULL,
  `httt_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên của hình thức thanh toán',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucvanchuyen`
--

CREATE TABLE `hinhthucvanchuyen` (
  `htvc_id` bigint(20) UNSIGNED NOT NULL,
  `htvc_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên của hình thức vận chuyển',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_hoten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lkh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`kh_id`, `username`, `password`, `kh_hoten`, `kh_gioitinh`, `kh_email`, `kh_diachi`, `kh_sdt`, `lkh_id`, `created_at`, `updated_at`) VALUES
(1, 'ngocduc', '$2y$10$tQ2e9D4Zalo7k5cSvMxuNOuDmQmdQp5H6tRRFboD.CNZvXxA/f4YW', 'Lê Ngọc Đức', 'Nam', 'lnd240998@gmail.com', 'Cần Thơ', '0123456789', 1, NULL, NULL),
(2, 'ngocnguyen', '$2y$10$1wAUcSTL2Tt4skyGpdDNPOULo877z6VKN5r9ahQzVTeXzJNBJSXke', 'Đỗ Thị Ngọc Nguyên', 'Nữ', 'nguyen98@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(3, 'ngoctam', '$2y$10$PBr8OOb98lrRFAetWZRF1O6ikMQmkOqfGVP9geBecS9xqO.MaxUNm', 'Dương Ngọc Tâm', 'Nam', 'tam98@gmail.com', 'Thốt Nốt', '0123456789', 1, NULL, NULL),
(4, 'quocbinh', '$2y$10$tkY5xlIod0y10TDTCCta5.qKt93tyi0PFod..kY1Osx7Rx.1B7QGu', 'Lương Quốc Bình', 'Nam', 'binh98@gmail.com', 'Cần Thơ', '0123456789', 1, NULL, NULL),
(5, 'tranphung', '$2y$10$/lTDrOuP2GVY.sflMtPwVevO39bv6zoIOhiERzU9AenDNXh47KbFa', 'Trần Thanh Phụng', 'Nam', 'phung98@gmail.com', 'Trà Vinh', '0123456789', 1, NULL, NULL),
(6, 'tuongvy', '$2y$10$4ffrcqLaiRZZXzSq.Z58Lu1SJSIWiB.bznJ5k67OsAW.8C20Hftxm', 'Đặng Thị Tường Vy', 'Nữ', 'vy98@gmail.com', 'Vĩnh Long', '0123456789', 1, NULL, NULL),
(7, 'minhnghia', '$2y$10$8L5MibPmBlCRP3IOYoU0MOiPgeGr9egxdbio0IIkAQifehE4vPEOS', 'Lê Minh Nghĩa', 'Nam', 'nghia98@gmail.com', 'Cần Thơ', '0123456789', 1, NULL, NULL),
(8, 'user1', '$2y$10$Uc9S12uIsapNdrFEl6lrXumCNtrgadzs.0kOFN3tY9lpguFUXjPvy', 'Nguyễn Văn A', 'Nam', 'nguyenvan98a@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(9, 'user2', '$2y$10$zvVLxVCJhWUYWdMGiyXhs.os0vA5yJ/0g6UYitaAoQ4pDoBc7XFYy', 'Nguyễn Văn B', 'Nam', 'nguyenvan98b@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(10, 'user3', '$2y$10$WWlkB028XOcbgX565/vy7OH0VOZkiMFwrO1HNtTqvqlLzQeeDxvLS', 'Nguyễn Thị C', 'Nam', 'nguyenthi98c@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL),
(11, 'user4', '$2y$10$Pag/ThqNNdBAC10EZvh9FOVcKRCXjjEbuz.LW0lJ62pL6R7Rx.Yo2', 'Nguyễn Văn ABC', 'Nam', 'nguyenvan98abc@gmail.com', 'An Giang', '0123456789', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `km_id` bigint(20) UNSIGNED NOT NULL,
  `km_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên của đợt khuyến mãi',
  `km_noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nội dung của đợt khuyến mãi',
  `km_giatri` int(11) NOT NULL COMMENT 'Giá trị khuyến mãi',
  `km_batdau` date NOT NULL COMMENT 'Ngày bắt đầu',
  `km_ketthuc` date NOT NULL COMMENT 'Ngày kết thúc',
  `km_trangthai` int(11) NOT NULL COMMENT 'Trạng thái còn hay đã hêt',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai_sanpham`
--

CREATE TABLE `khuyenmai_sanpham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kmvouchers`
--

CREATE TABLE `kmvouchers` (
  `km_id` bigint(20) UNSIGNED NOT NULL,
  `vc_id` bigint(20) UNSIGNED NOT NULL,
  `kmvc_giatri` int(11) NOT NULL,
  `kmvc_soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lo`
--

CREATE TABLE `lo` (
  `lo_id` bigint(20) UNSIGNED NOT NULL,
  `lo_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo_ngaysanxuat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lo_hansudung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lo`
--

INSERT INTO `lo` (`lo_id`, `lo_ten`, `lo_ngaysanxuat`, `lo_hansudung`, `created_at`, `updated_at`) VALUES
(1, 'Lô gì đó', '07/06/2020', '07/06/2023', '2020-06-07 07:36:38', '2020-06-07 07:36:38'),
(2, 'Son Over game', '07/06/2020', '28/06/2020', '2020-06-07 08:17:08', '2020-06-07 08:17:08'),
(3, 'Phấn nền', '07/06/2020', '30/06/2020', '2020-06-07 08:20:59', '2020-06-07 08:20:59'),
(4, 'Tẩy da chết', '07/06/2020', '30/06/2023', '2020-06-07 08:24:08', '2020-06-07 08:24:08'),
(5, 'Kem dưỡng da chết', '07/06/2020', '07/06/2023', '2020-06-07 08:30:00', '2020-06-07 08:30:00'),
(6, 'Lô nước hoa hồng', '07/06/2020', '07/06/2023', '2020-06-07 08:34:09', '2020-06-07 08:34:09'),
(7, 'Sữa dưỡng thể 019', '07/06/2020', '07/06/2023', '2020-06-07 08:44:28', '2020-06-07 08:44:28'),
(8, 'DT-1', '07/06/2020', '07/06/2023', '2020-06-07 08:46:52', '2020-06-07 08:46:52'),
(9, 'NH-01', '07/06/2020', '07/06/2023', '2020-06-07 08:49:05', '2020-06-07 08:49:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `l_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`l_id`, `l_ten`, `created_at`, `updated_at`) VALUES
(1, 'Trang Điểm', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Chăm Sóc Da', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(3, 'Chăm Sóc Toàn Thân', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(4, 'Chăm Sóc Tóc', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(5, 'Nước Hoa', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikhachhang`
--

CREATE TABLE `loaikhachhang` (
  `lkh_id` bigint(20) UNSIGNED NOT NULL COMMENT 'ID loại khách hàng giá trị tự tăng',
  `lkh_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên của loại khách hàng đó',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaikhachhang`
--

INSERT INTO `loaikhachhang` (`lkh_id`, `lkh_ten`, `created_at`, `updated_at`) VALUES
(1, 'Khách hàng thường', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Khách hàng VIP', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_11_061154_create_wishlists_table', 1),
(4, '2020_02_05_170103_create_table_quyen', 1),
(5, '2020_02_05_170104_create_table_nhanvien', 1),
(6, '2020_02_05_170105_create_table_loai', 1),
(7, '2020_02_05_171218_create_table_khuyen_mai', 1),
(8, '2020_02_05_171325_create_congdungphu_table', 1),
(9, '2020_02_05_171326_create_table_cong_dung', 1),
(10, '2020_02_05_171507_create_table_trang_thai_don_hang', 1),
(11, '2020_02_05_171527_create_table_hinh_thuc_thanh_toan', 1),
(12, '2020_02_05_171546_create_table_hinh_thuc_van_chuyen', 1),
(13, '2020_02_05_171623_create_table_chi_tiet_hinh_anh', 1),
(14, '2020_02_05_171640_create_table_loai_khach_hang', 1),
(15, '2020_02_05_171641_create_table_khach_hang', 1),
(16, '2020_02_05_171655_create_table_don_hang', 1),
(17, '2020_02_05_171929_create_table_xuatxu', 1),
(18, '2020_02_07_165303_create_table_lo', 1),
(19, '2020_02_08_050213_create_table_sanpham', 1),
(20, '2020_02_08_052945_create_table_hinhanh', 1),
(21, '2020_02_09_171401_create_table_chi_tiet_lo', 1),
(22, '2020_04_05_171303_create_table_chi_tiet_khuyen_mai', 1),
(23, '2020_04_12_141044_create_banner_table', 1),
(24, '2020_04_16_150024_create__k_m__s_p_table', 1),
(25, '2020_04_18_005409_create_vouchers_table', 1),
(26, '2020_04_18_005430_create__k_mvouchers_table', 1),
(27, '2020_04_22_154644_create_table_gio_hang_table', 1),
(28, '2020_04_22_154708_create_table_chi_tiet_gio_hang_table', 1),
(29, '2020_04_24_204232_create_thuonghieu_table', 1),
(30, '2020_05_08_154442_create_table_binh_luan', 1),
(31, '2020_05_09_162447_create_table_chi_tiet_don_hang', 1),
(32, '2020_05_17_140244_create_ngoaite_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngoaite`
--

CREATE TABLE `ngoaite` (
  `nt_id` bigint(20) UNSIGNED NOT NULL,
  `nt_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nt_tigia` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nv_ten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nv_diachi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nv_sdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nv_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`nv_id`, `username`, `password`, `nv_ten`, `nv_diachi`, `nv_sdt`, `nv_email`, `q_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', '$2y$10$aA3et0Q9sZDKkt3v7NWMsuJOO70uD6tR86CAVulE6Psjpnvk/WwjO', 'Lê Ngọc Đức', 'Cần Thơ', '0837068434', 'ducb1605271', 1, 'EiUaC8yS3bBL3aUC8emJ8CMhwECAE4EpsXepx2AfkNB7wODxCNAIIPCZlbjA', NULL, NULL),
(2, 'admin2', '$2y$10$ex0Dd7K/vs1VJ3wZSlwq6OhM5mvAfHWB0/APadc3triPJqXfpW6uy', 'Lương Quốc Bình', 'Cần Thơ', '0837068434', 'binhb1605202@student.ctu.edu.vn', 2, 'XeCp6IRzdlnw27oF9hQ37KeWlyGbWZJswq6xINCEXRZlyKyeA1LrfW0cxEZR', NULL, NULL),
(3, 'admin3', '$2y$10$0a2G.4sK88gMAjp8p1XDI.JP4/kNluwSzuVVImDP3TH9O2qih6aqC', 'Đỗ Thị Ngọc Nguyên', 'Cần Thơ', '0837068434', 'nguyenb1605292@student.ctu.edu.vn', 2, NULL, NULL, NULL),
(4, 'admin3', '$2y$10$ETb1pfo7FPiU.gxkbjDc8.1BmzxHVRWEp513pZpFGxZXJpx678ABy', 'Đặng Thị Tường Vy', 'Vĩnh Long', '0837068434', 'vyb1605319@student.ctu.edu.vn', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `q_id` bigint(20) UNSIGNED NOT NULL,
  `q_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`q_id`, `q_ten`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Nhân viên bán hàng', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` bigint(20) UNSIGNED NOT NULL,
  `sp_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_giagoc` int(11) DEFAULT NULL,
  `sp_giaban` int(11) DEFAULT NULL,
  `sp_giakhuyenmai` int(11) DEFAULT NULL,
  `sp_thongtin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_danhgia` int(11) DEFAULT NULL,
  `sp_trangthai` int(11) NOT NULL DEFAULT 0 COMMENT 'Trạng thái có 0 hoặc 1 chỉ Còn hàng hoặc Hết hàng',
  `sp_anhdaidien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_soluong` int(11) DEFAULT NULL,
  `l_id` bigint(20) UNSIGNED NOT NULL,
  `cd_id` bigint(20) UNSIGNED NOT NULL,
  `cdp_id` bigint(20) UNSIGNED NOT NULL,
  `xx_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `sp_ten`, `sp_giagoc`, `sp_giaban`, `sp_giakhuyenmai`, `sp_thongtin`, `sp_danhgia`, `sp_trangthai`, `sp_anhdaidien`, `sp_soluong`, `l_id`, `cd_id`, `cdp_id`, `xx_id`, `created_at`, `updated_at`) VALUES
(1, 'Kẻ Mắt Nước Innisfree Power Proof Brush Liner 0.6gr', 100000, 130000, NULL, '<p><span style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\">– Đường vẽ mềm mại, thanh mảnh.</span><br style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\"><span style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\">– Nhanh khô, không tạo bóng cho mắt.</span><br style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\"><span style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\">– Đầu cọ được thiết kế mềm mại dễ sử dụng cho người mới tập trang điểm.</span><br style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\"><span style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\">– Waterproof: có khả năng chống thấm nước và dầu nhờn trên da.</span><br style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\"><span style=\"font-size: 14px; color: rgb(119, 119, 119); font-family: Arial;\">– Thành phần lành tính không có hại cho da.</span><br></p>', NULL, 1, '6011chi-ke-2.jpg', 100, 1, 1, 1, 1, '2020-06-07 07:30:27', '2020-06-07 07:30:27'),
(2, 'Son Kem Lì BBIA Final Tint Game Over 4.3gr', 150000, 180000, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">- Độ bám màu chắc như nam châm giúp màu lên chuẩn chỉ với 1 lần thoa</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">- Chất nhung mềm mại, mịn màng cùng độ ẩm tối ưu được sáng chế bởi nhà BBIA</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">- Sắc tố màu được cải tiến giúp nhìn son vừa giữ lâu vừa nhìn như mới thoa</p>', NULL, 1, '9532son-over-game-1.jpg', 100, 1, 1, 1, 3, '2020-06-07 08:15:00', '2020-06-07 08:15:00'),
(3, 'Phấn Nước AprilSkin Black Magic Snow Cushion Galaxy Edition 15gr - 2020', 280000, 350000, 280000, '<p><span style=\"color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Phấn nước AprilSkin BLACK Magic Skin Snow Cushion SPF50+PA+++ là loại phấn nước mang tác dụng 3 trong 1, vừa làm phấn phủ trang điểm, vừa thay thế lớp kem nền che khuyết điểm cực tốt, lại vừa có khả năng chống nắng an toàn và hiệu quả.</span><br></p>', NULL, 1, '9783kem-duong-2.jpg', 50, 1, 1, 1, 4, '2020-06-07 08:18:30', '2020-06-07 08:18:30'),
(4, 'Tẩy Da Chết St.Ives Soft Skin Avocado & Honey Scrub 170gr', 50000, 90000, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">- Khả năng làm sạch sâu nhờ các hạt tẩy tế bào chết siêu nhỏ</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">- Chiết xuất từ bơ và mật ong cung cấp độ ẩm tối đa cần thiết cho da</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">- Dưỡng da mềm mịn, tăng độ đàn hồi và sáng màu hơn</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">- Hương thơm từ bư và mật ong nhẹ nhàng, dễ chịu</p>', NULL, 1, '2674da-chet-2.jpg', 100, 2, 1, 1, 5, '2020-06-07 08:23:38', '2020-06-07 08:23:38'),
(5, 'Kem Dưỡng Neutrogena Skin Detox Anti Oxydant & Boosters Cellulaires Cream 50ml', 200000, 261000, 143550, '<div class=\"tab-content\" style=\"position: relative; padding: 0px 15px; color: rgb(102, 102, 102); font-size: 14px; line-height: 24px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\" style=\"width: 838px; opacity: 1; visibility: visible; position: static; transition: all 0.3s ease 0s; z-index: 30;\"><div class=\"block-content\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Kem dưỡng ẩm và thải độc cho da 2 trong 1 của&nbsp;<span style=\"font-weight: 700;\">Neutrogena Skin Detox</span>&nbsp;bảo vệ da khỏi các tác nhân từ môi trường và các chất có hại đồng thời tái tạo chúng. Chất chống oxy hóa giúp da hình thành một hạt bảo vệ chống lại các vi hạt có hại, trong khi các peptide tăng cường tế bào tạo ra da. Nó giữ ẩm, bảo vệ chống độc tố và ô nhiễm, đồng thời tái tạo da. Kết cấu nhẹ, mượt mà của nó chứa một sự kết hợp độc đáo của các chất chống ô nhiễm.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/28/fdzqzy3vbarlaghhwdrn_simg_0b9e78_660x659_max102223.jpg\" alt=\"\" width=\"660\" height=\"659\" style=\"border: 0px; max-width: 100%; height: 659px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"></p></div></div></div><ul class=\"nav nav-pills\" role=\"tablist\" style=\"margin-right: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; border-right: 1px solid rgb(238, 238, 238);\"><li role=\"presentation\" class=\"active\" style=\"list-style: none; position: relative; display: block; float: left;\"><a href=\"https://beautygarden.vn/kem-duong-neutrogena-skin-detox-anti-oxydant-boosters-cellulaires-cream-50ml.html#description\" role=\"tab\" data-toggle=\"tab\" title=\"Mô tả sản phẩm\" style=\"color: rgb(255, 255, 255); position: relative; display: block; padding: 10px 15px; border-radius: 4px; font-weight: 700; text-transform: uppercase; margin-bottom: -1px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); border-bottom: 0px; z-index: 100; background-color: rgb(255, 255, 255) !important;\"><h2 class=\"theH2\" style=\"font-weight: 700; line-height: 1.1; color: rgb(31, 96, 31); margin-bottom: 10px; font-size: 14px;\">MÔ TẢ SẢN PHẨM</h2></a></li></ul><div class=\"tab-content\" style=\"position: relative; padding: 0px 15px; color: rgb(102, 102, 102); font-size: 14px; line-height: 24px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\" style=\"width: 838px; opacity: 1; visibility: visible; position: static; transition: all 0.3s ease 0s; z-index: 30;\"><div class=\"block-content\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Xuất xứ: Mỹ</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Dung tích: 50ml</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: 700;\">Kem Dưỡng Thải Độc Neutrogena Skin Detox – Soin Hydratant Détoxifiant</span>&nbsp;là lựa chọn lý tưởng cho các nàng các chàng thường xuyên phải làm việc trong môi trường không được trong lành, gặp phải nhiều khói bụi. Hay là làn da tổn thương do mụn, cần được phục hồi nhanh chóng, bạn ấy đều đáp ứng được hết.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/28/kem-duong-da-neutrogena-skin-detox-2-in-1-50ml-tanpopo-4102408.jpg\" alt=\"\" width=\"790\" height=\"960\" style=\"border: 0px; max-width: 100%; height: 960px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px;\"><li style=\"list-style: none;\">Các tác nhân chống ô nhiễm, bao gồm một chất chống oxy hóa mạnh mẽ: hoạt động như một lá chắn thực sự chống lại các vi hạt ô nhiễm hoặc là bụi mịn.</li><li style=\"list-style: none;\">Peptide tăng cường tế bào: tái tạo và đem lại một làn da rạng rỡ.</li><li style=\"list-style: none;\">Glycolic acid: hoạt động như một chất tẩy tế bào chết hóa học để làm thông thoáng lỗ chân lông sâu.</li><li style=\"list-style: none;\">HyaluronicAcid là hoạt chất “vàng” dùng để cấp ẩm cho da.Từ đó da mềm mại và ngậm nước hơn.</li><li style=\"list-style: none;\">Vitamin B5 giúp làm dịu, phục hồi và tái tạo da.</li><li style=\"list-style: none;\">Vitamin E giúp dưỡng ẩm và chống oxy-hóa cho da.</li><li style=\"list-style: none;\">Glycolic acid: hoạt động như một chất tẩy tế bào chết giúp làn da sạch mịn</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/28/kem-duong-thai-doc-neutrogena-skin-detox1102504.jpg\" alt=\"\" width=\"780\" height=\"585\" style=\"border: 0px; max-width: 100%; height: 585px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p></div></div></div>', NULL, 1, '5155duong-da-chet-1.jpg', 100, 2, 1, 1, 1, '2020-06-07 08:29:03', '2020-06-07 08:29:03'),
(6, 'Nước Hoa Hồng Fresh Rose Deep Hydration Facial Toner 250ml', 800000, 900000, NULL, '<div class=\"tab-content\" style=\"position: relative; padding: 0px 15px; color: rgb(102, 102, 102); font-size: 14px; line-height: 24px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\" style=\"width: 838px; opacity: 1; visibility: visible; position: static; transition: all 0.3s ease 0s; z-index: 30;\"><div class=\"block-content\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: 700;\">Fresh</span>&nbsp;được thành lập năm 1991 tại Boston – Mỹ, tính đến nay đã có 28 năm xây dựng và phát triển thương hiệu, hãng khởi đầu việc sử dụng những thành phần tự nhiên trong ngành làm đẹp kết hợp với công nghệ hiện đại để tạo ra những sản phẩm có kết cấu phong phú và hương thơm đặc trưng.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: 700;\">Fresh Rose Deep Hydration Facial</span>&nbsp;là loại toner dịu nhẹ chứa cánh hoa hồng tươi và bổ sung Acid Hyaluronic giúp thu nhỏ lỗ chân lông đồng thời cấp ẩm cho làn da lên đến 46% trong suốt 6 giờ.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/26/fresh-rose-deep-hydration-facial-toner-10090050.jpg\" alt=\"\" width=\"800\" height=\"600\" style=\"border: 0px; max-width: 100%; height: 600px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"></p></div></div></div><ul class=\"nav nav-pills\" role=\"tablist\" style=\"margin-right: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; border-right: 1px solid rgb(238, 238, 238);\"><li role=\"presentation\" class=\"active\" style=\"list-style: none; position: relative; display: block; float: left;\"><a href=\"https://beautygarden.vn/nuoc-hoa-hong-fresh-rose-deep-hydration-facial-toner-250ml.html#description\" role=\"tab\" data-toggle=\"tab\" title=\"Công Dụng Sản Phẩm \" style=\"color: rgb(255, 255, 255); position: relative; display: block; padding: 10px 15px; border-radius: 4px; font-weight: 700; text-transform: uppercase; margin-bottom: -1px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); border-bottom: 0px; z-index: 100; background-color: rgb(255, 255, 255) !important;\"><h2 class=\"theH2\" style=\"font-weight: 700; line-height: 1.1; color: rgb(31, 96, 31); margin-bottom: 10px; font-size: 14px;\">CÔNG DỤNG SẢN PHẨM</h2></a></li></ul><div class=\"tab-content\" style=\"position: relative; padding: 0px 15px; color: rgb(102, 102, 102); font-size: 14px; line-height: 24px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\" style=\"width: 838px; opacity: 1; visibility: visible; position: static; transition: all 0.3s ease 0s; z-index: 30;\"><div class=\"block-content\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Dung tích: 250ml</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Sản phẩm có bao bì dạng chai nhựa trong suốt, qua đó nàng có thể thấy rõ những cánh hoa hồng tươi đang trôi lơ lửng bên trong. Phần miệng chai thiết kế lỗ nhỏ giúp nàng dễ dàng điều chỉnh lượng sản phẩm mỗi khi sử dụng mà không cần lo lắng “quá tay” đâu nhé.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/26/freshrosedeephydrationfacialtoner100mlnobox-15838388756371075394825090541.jpg\" alt=\"\" width=\"620\" height=\"414\" style=\"border: 0px; max-width: 100%; height: 414px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Kết cấu sản phẩm dạng nước lỏng có màu nâu vàng. Sản phẩm có&nbsp;mùi hương hoa dịu nhẹ, thơm nhẹ nhàng và tạo cảm giác thư giãn dễ chịu. Những cô nàng nào không thích sử dụng các sản phẩm skincare có hương thì cũng không cần quá lo lắng đâu nha, bởi mùi hương của sản phẩm rất nhẹ và rất nhanh tản đi.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/26/9e88962158b12ab6fbb747a7ab3af845090603.jpg\" width=\"600\" height=\"600\" style=\"border: 0px; max-width: 100%; height: 600px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Với bảng thành phần an toàn lành tính, sản phẩm hết sức&nbsp;dịu nhẹ đối với mọi làn da. Bạn có thể sử dụng sản phẩm này hằng ngày, cả sáng và tối để bổ sung độ ẩm cần thiết. Ngoài ra, bạn có thể sử dụng làm lotion mask trong những ngày làn da nhạy cảm như đến kì hoặc vừa bị cháy nắng nhé, bởi sản phẩm có khả năng làm dịu tức thì nữa đó.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/26/fresh-rose-deep-hydration-facial-toner-11090639.jpg\" alt=\"\" width=\"768\" height=\"1024\" style=\"border: 0px; max-width: 100%; height: 1024px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px;\"><li style=\"list-style: none;\">Chiết xuất hoa hồng (Rose fruit extract): làm dịu da, cân bằng da sau khi rửa mặt, bên cạnh đó còn có công dụng làm săn chắc làn da, tăng độ đàn hồi và cải thiện tình trạng da chảy xệ.</li><li style=\"list-style: none;\">Nước hoa hồng (Rosa Damascena Flower Water) và Dầu hoa hồng (Rosa Damascena Flower Oil): nhẹ nhàng làm sạch các tạp chất còn sót lại trên da, giúp se nhỏ lỗ chân lông.</li><li style=\"list-style: none;\">Chiết xuất lá Angelica: Cung cấp độ ẩm cho da sau khi rửa mặt và giữ ẩm giúp da không bị khô căng.Hyaluronic Acid: dưỡng ẩm sâu và&nbsp;duy trì độ ẩm cho da luôn mềm mại</li><li style=\"list-style: none;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Acid Hyaluronic:&nbsp;Thu hút và duy trì độ ẩm để tăng cường độ đàn hồi cho làn da.</p></li><li style=\"list-style: none;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Không chứa sulfate SLS và SLES, paraben và phthalates.</p></li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/26/5a856836edcfec1bfad41c351657b6a6091020.jpg\" width=\"564\" height=\"699\" style=\"border: 0px; max-width: 100%; height: 564px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;</p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px;\"><li style=\"list-style: none;\">Giúp loại bỏ các hạt ô nhiễm và các tạp chất còn lại sau khi rửa mặt.</li><li style=\"list-style: none;\">Làm sạch da lần cuối trước khi thực hiện các bước dưỡng tiếp theo.</li><li style=\"list-style: none;\">Làm mềm da và cân bằng da sau khi rửa mặt.<img title=\"Review nước hoa hồng Fresh Rose Deep Hydration Facial Toner: Cấp ẩm và làm săn chắc da - BlogAnChoi\" src=\"https://bloganchoi.com/wp-content/images/bac/others/transparent-1x1.gif?utm_source=dmca&amp;utm_medium=copy&amp;utm_term=Review%20n%C6%B0%E1%BB%9Bc%20hoa%20h%E1%BB%93ng%20Fresh%20Rose%20Deep%20Hydration%20Facial%20Toner%3A%20C%E1%BA%A5p%20%E1%BA%A9m%20v%C3%A0%20l%C3%A0m%20s%C4%83n%20ch%E1%BA%AFc%20da%20-%20BlogAnChoi&amp;utm_content=https%3A%2F%2Fbloganchoi.com%2Freview-nuoc-hoa-hong-fresh-rose-deep-hydration-facial-toner-cap-am-va-lam-san-chac-da%2F&amp;tags=https%3A%2F%2Fbloganchoi.com%2Freview-nuoc-hoa-hong-fresh-rose-deep-hydration-facial-toner-cap-am-va-lam-san-chac-da%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Freview-nuoc-hoa-hong-fresh-rose-deep-hydration-facial-toner-cap-am-va-lam-san-chac-da%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Freview-nuoc-hoa-hong-fresh-rose-deep-hydration-facial-toner-cap-am-va-lam-san-chac-da%2F%2Chttps%3A%2F%2Fbloganchoi.com%2Freview-nuoc-hoa-hong-fresh-rose-deep-hydration-facial-toner-cap-am-va-lam-san-chac-da%2F&amp;dmcacpp=1\" alt=\"Review nước hoa hồng Fresh Rose Deep Hydration Facial Toner: Cấp ẩm và làm săn chắc da - BlogAnChoi\" width=\"1\" height=\"1\" border=\"0\" style=\"border: 0px; max-width: 100%;\"></li><li style=\"list-style: none;\">Cấp ẩm giúp làn da mịn màng.</li><li style=\"list-style: none;\">Giúp se nhỏ lỗ chân lông.</li><li style=\"list-style: none;\">Tăng cường độ đàn hồi, giúp da săn chắc hơn, cải thiện da chảy xệ.</li><li style=\"list-style: none;\">Phù hợp với mọi loại da.</li></ul></div></div></div>', NULL, 1, '556nhh2.jpg', 100, 2, 1, 1, 4, '2020-06-07 08:33:38', '2020-06-07 08:33:38'),
(7, 'Sữa Dưỡng Thể JM Solution Body Lotion 200ml', 200000, 280000, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Sữa dưỡng thể Nâng tông da JM-Solution Tone-Up Water Luminous Body Lotion 200ml</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center;\"><span style=\"font-weight: 700;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/7/11_342f38db9d544355b4ee0223a77acfee_grande022501.jpg\" alt=\"\" width=\"600\" height=\"530\" style=\"border: 0px; max-width: 100%; height: 530px; max-height: 100%;\"></span></p><div id=\"input_line_2\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"2. Sữa dưỡng trắng, mờ thâm sạm; cấp ẩm sâu và giữ ẩm lâu dài; truyền sức sống và dinh dưỡng cho da mịn màng, săn chắc, ngăn ngừa lão hóa; kháng khuẩn, làm dịu da với thành phần Greenol từ thực vật\">- Sữa dưỡng trắng, mờ thâm sạm; cấp ẩm sâu và giữ ẩm lâu dài; truyền sức sống và dinh dưỡng cho da mịn màng, săn chắc, ngăn ngừa lão hóa; kháng khuẩn, làm dịu da với thành phần Greenol từ thực vật</span></div><div style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</div><div id=\"input_line_3\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"3. Sử dụng thành phần Niacinamide được chứng nhận có thể làm trắng da, Super Hyaluronic Axit giúp tối đa khả năng cấp ẩm; kết cấu ẩm mịn, không gây bết dính; hương Đào giúp tinh thần thư giãn\">- Sử dụng thành phần Niacinamide được chứng nhận có thể làm trắng da, Super Hyaluronic Axit giúp tối đa khả năng cấp ẩm; kết cấu ẩm mịn, không gây bết dính; hương Đào giúp tinh thần thư giãn</span><br><div id=\"input_line_3\">&nbsp;</div><div id=\"input_line_4\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Cung cấp độ ẩm dồi dào vào sâu bên trong da và hình thành màng giữ ẩm để duy trì làn da ẩm mịn trong thời gian dài.\">- Cung cấp độ ẩm dồi dào vào sâu bên trong da và hình thành màng giữ ẩm để duy trì làn da ẩm mịn trong thời gian dài.</span></div><div id=\"input_line_5\">&nbsp;</div><div id=\"input_line_6\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Truyền sức sống và dinh dưỡng dồi dào cho làn da mệt mỏi sau một ngày dài để da khỏe mạnh, hồng hào, mịn màng hơn.\">- Truyền sức sống và dinh dưỡng dồi dào cho làn da mệt mỏi sau một ngày dài để da khỏe mạnh, hồng hào, mịn màng hơn.</span></div><div id=\"input_line_7\">&nbsp;</div><div id=\"input_line_8\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Kháng khuẩn, làm sạch da, bảo vệ làn da khỏi các tác hại từ môi trường bên ngoài; đồng thời giúp tái sinh làn da từ sâu bên trong.\">- Kháng khuẩn, làm sạch da, bảo vệ làn da khỏi các tác hại từ môi trường bên ngoài; đồng thời giúp tái sinh làn da từ sâu bên trong.</span></div><div id=\"input_line_9\">&nbsp;</div><div id=\"input_line_10\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Chống oxy hóa, làm dịu da, thu nhỏ lỗ chân lông, cải thiện nếp nhăn, dưỡng da săn chắc, đàn hồi, từ đó phòng chống lão hóa cho da.\">- Chống oxy hóa, làm dịu da, thu nhỏ lỗ chân lông, cải thiện nếp nhăn, dưỡng da săn chắc, đàn hồi, từ đó phòng chống lão hóa cho da.</span></div></div><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/7/93f13d751f85176c83042f007237e7d8024127.jpg\" alt=\"\" width=\"1024\" height=\"1024\" style=\"border: 0px; max-width: 100%; height: 838px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Sữa dưỡng thể cấp ẩm, sáng da da toàn thân JMsolution Marine Luminous Pearl Tone Up Body Lotion 200ml</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/7/ad9cd16d0fe4f2679c5712eb12788d50024017.jpg\" alt=\"\" width=\"640\" height=\"640\" style=\"border: 0px; max-width: 100%; height: 640px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></span></p><div id=\"input_line_0\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Sữa dưỡng thể JMsolution Marine Luminous Pearl Tone Up Body Lotion cung cấp độ ẩm vào sâu bên trong da, dưỡng ẩm và duy trì độ ẩm mà không gây bết dính cho da.\">- Sữa dưỡng thể JMsolution Marine Luminous Pearl Tone Up Body Lotion cung cấp độ ẩm vào sâu bên trong da, dưỡng ẩm và duy trì độ ẩm mà không gây bết dính cho da.</span></div><div id=\"input_line_1\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</div><div id=\"input_line_2\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Giúp làn da toàn thân tỏa sáng tự nhiên và khỏe mạnh\">- Giúp làn da toàn thân tỏa sáng tự nhiên và khỏe mạnh</span></div><div id=\"input_line_3\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</div><div id=\"input_line_4\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Sữa dưỡng thể giúp làm sáng thật tự nhiên cho vùng da ngăm den và tối màu, đồng thời dưỡng da sáng dần lên mà không gây nặng nề cho da\">- Sữa dưỡng thể giúp làm sáng thật tự nhiên cho vùng da ngăm den và tối màu, đồng thời dưỡng da sáng dần lên mà không gây nặng nề cho da</span></div><div id=\"input_line_5\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</div><div id=\"input_line_6\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Chiết xuất từ nước biển sâu của tỉnh Gangwondo và Collagen cùng năng lượng từ biển cả giúp cải thiện làn da trở nên mịn màng và săn chắc hơn\">- Chiết xuất từ nước biển sâu của tỉnh Gangwondo và Collagen cùng năng lượng từ biển cả giúp cải thiện làn da trở nên mịn màng và săn chắc hơn</span></div><div id=\"input_line_7\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</div><div id=\"input_line_8\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Chứa thành phần ngọc trai giúp làn da tỏa sáng hơn, dưỡng da mịn màng và căng mịn\">- Chứa thành phần ngọc trai giúp làn da tỏa sáng hơn, dưỡng da mịn màng và căng mịn</span></div><div id=\"input_line_9\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</div><div id=\"input_line_10\" style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span id=\"input_part_0\" class=\"\" data-mention=\"- Sữa dưỡng thể có kết cấu mềm mịn và không gây bết dính cho da\">- Sữa dưỡng thể có kết cấu mềm mịn và không gây bết dính cho da</span></div><div style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;</div><div style=\"color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span class=\"\" data-mention=\"- Sữa dưỡng thể có kết cấu mềm mịn và không gây bết dính cho da\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/7/jm-10024100.jpg\" alt=\"\" width=\"960\" height=\"960\" style=\"border: 0px; max-width: 100%; max-height: 100%; height: 838px; display: block; margin-left: auto; margin-right: auto;\"></span></div>', NULL, 1, '2467sdt-2.jpg', 100, 3, 1, 1, 2, '2020-06-07 08:43:59', '2020-06-07 08:43:59'),
(8, 'Kem Xả Ủ Tóc Tsubaki Premium Moist Treatment 180gr', 130000, 170000, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Dòng sản phẩm mới ra mắt&nbsp;<span style=\"font-weight: 700;\">Premium Moist TSUBAKI</span>&nbsp;là sự kế thừa và phát huy dòng sản phẩm chăm sóc tóc truyền thống TSUBAKI từ tinh chất hoa trà. Phiên bản mới với độ dưỡng ẩm tốt hơn, giúp tóc khô xơ trở nên mềm mượt, óng ả và giàu độ ẩm với hương hoa trà đặc trưng từ Nhật.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2020/5/29/shiseido-tsubaki-extra-moist-treatment-1_900x092004.jpg\" alt=\"\" width=\"900\" height=\"900\" style=\"border: 0px; max-width: 100%; height: 838px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Kem xả Dưỡng tóc bóng mượt Premium Moist Tsubaki:</span>&nbsp;Sản phẩm chăm sóc tóc cao cấp giúp phục hồi chuyên sâu tóc khô xơ nhờ công nghệ thẩm thấu độc quyền của Shiseido, dưỡng chất hấp thu nhanh và sâu vào trong tóc qua cơ chế:</p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><li style=\"list-style: none;\">Mở rộng đường dẫn dưỡng chất vào tóc&nbsp;</li><li style=\"list-style: none;\">Dưỡng chất thiết yếu (thành phần phục hồi + thành phần nuôi tóc bóng mượt) dễ dàng di chuyển và thấm sâu vào biểu bì tóc.&nbsp;</li><li style=\"list-style: none;\">Thành phần Dual Amino Acid giúp khép và khoác chặt dưỡng chất nuôi dưỡng bên trong tóc.&nbsp;</li><li style=\"list-style: none;\">Mùi hương hoa và quả mọng trẻ trung sang trọng</li><li style=\"list-style: none;\">Kem xả dưỡng tóc bóng mượt phục hồi tóc khô xơ từ sâu bên trong, cung cấp độ ẩm và duy trì sự bóng mượt từ gốc đến ngọn.</li></ul>', NULL, 1, '568dt-2.jpg', 100, 4, 1, 1, 4, '2020-06-07 08:45:55', '2020-06-07 08:45:55'),
(9, 'Nước Hoa Nam Venus Global Beauty Gota Perfume 50ml', 250000, 290000, NULL, '<div class=\"tab-content\" style=\"position: relative; padding: 0px 15px; color: rgb(102, 102, 102); font-size: 14px; line-height: 24px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\" style=\"width: 838px; opacity: 1; visibility: visible; position: static; transition: all 0.3s ease 0s; z-index: 30;\"><div class=\"block-content\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Ngoại hình hay nhan sắc không hẳn là thứ vũ khí duy nhất giúp bạn tạo ấn tượng với người&nbsp;đối diện. Bên cạnh một phong thái&nbsp;đỉnh&nbsp;đạc hay quyến rũ, thì hương thơm chính là bí quyết giúp bạn trở nên thu hút và chiếm&nbsp;được cảm tình với người đối diện.&nbsp;<span style=\"font-weight: 700;\">Nước Hoa Nam&nbsp;Gota&nbsp;50ml</span>&nbsp;với thiết kế đơn giản, tinh tế cùng hương thơm&nbsp;trẻ trung&nbsp;đầy mê hoặc&nbsp;được chế tác hoàn toàn bởi Robertet - là nhà sản xuất hương liệu hàng đầu của Pháp, chuyên về nguyên liệu tự nhiên được thành lập vào năm 1850.&nbsp;Còn gì thú vị hơn việc tự khám phá cá tính bản thân thông quá việc trải nghiệm thế giới mùi hương&nbsp;đầy màu sắc&nbsp;đến từ&nbsp;<span style=\"font-weight: 700;\">Gota</span>&nbsp;nữa chứ.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2019/11/25/very-sexy-night-recovered-recovered-recovered-recovered-recovered040817.jpg\" alt=\"\" width=\"890\" height=\"902\" style=\"border: 0px; max-width: 100%; height: 849.297px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"></p></div></div></div><ul class=\"nav nav-pills\" role=\"tablist\" style=\"margin-right: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; border-right: 1px solid rgb(238, 238, 238);\"><li role=\"presentation\" class=\"active\" style=\"list-style: none; position: relative; display: block; float: left;\"><a href=\"https://beautygarden.vn/nuoc-hoa-nam-venus-global-beauty-gota-perfume-50ml.html#description\" role=\"tab\" data-toggle=\"tab\" title=\"Công Dụng Sản Phẩm \" style=\"color: rgb(255, 255, 255); position: relative; display: block; padding: 10px 15px; border-radius: 4px; font-weight: 700; text-transform: uppercase; margin-bottom: -1px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); border-bottom: 0px; z-index: 100; background-color: rgb(255, 255, 255) !important;\"><h2 class=\"theH2\" style=\"font-weight: 700; line-height: 1.1; color: rgb(31, 96, 31); margin-bottom: 10px; font-size: 14px;\">CÔNG DỤNG SẢN PHẨM</h2></a></li></ul><div class=\"tab-content\" style=\"position: relative; padding: 0px 15px; color: rgb(102, 102, 102); font-size: 14px; line-height: 24px; border-top: 1px solid rgb(238, 238, 238); border-right: 1px solid rgb(238, 238, 238); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\" style=\"width: 838px; opacity: 1; visibility: visible; position: static; transition: all 0.3s ease 0s; z-index: 30;\"><div class=\"block-content\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Xuất xứ: Việt Nam</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Dung tích: 50ml</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: 700;\">GOTA Chilled_Perfume for Men</span>&nbsp;là sự kết hợp một cách hài hòa giữa cái chất tươi trẻ của cam chanh tươi rói và hương vị yêu đời đầy thi vị của gỗ. Chilled sẽ xóa tan sự mơ hồ và mang lại tinh thần cân bằng thoải mái&nbsp;cho chàng trai đang tìm kiếm nguồn cảm hứng.</p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px;\"><li style=\"list-style: none;\">&nbsp;Top: hương cam, ngò thơm, đinh hương.</li><li style=\"list-style: none;\">&nbsp;Middle: hương táo, gỗ tuyết tùng, hương cây linden.</li><li style=\"list-style: none;\">&nbsp;Bottom: gỗ đàn hương, xạ hương, hổ phách.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2019/11/25/73d39107de8e6eb6680f72829f46d792_tn041131.jpg\" alt=\"\" width=\"890\" height=\"902\" style=\"border: 0px; max-width: 100%; height: 849.297px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Hương vị của&nbsp;<span style=\"font-weight: 700;\">GOTA Bouncy_Perfume</span>&nbsp;for men ẩn chứa sự huyền bí và&nbsp;chút táo bạo đầy hấp lực. Đây sẽ là hương ngôn cho chàng trai theo đuổi những điều \"ngoài tưởng tượng\".</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;Top: hương chanh, hương quýt, (tarragon) cây ngải giấm.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;Middle: (lavandin) hương hoa oải hương, gỗ tuyết tùng, hương táo.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;Bottom: hổ phách, hương vani, xạ hương.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2019/11/25/4283532b252445ac5189d4e15fcf3ea1040954.jpg\" alt=\"\" width=\"1024\" height=\"1024\" style=\"border: 0px; max-width: 100%; height: 838px; max-height: 100%;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: 700;\">GOTA Urban_Perfume for Men</span>&nbsp;là sự giao hòa thú vị giữa con người và thời đại.&nbsp;<span style=\"font-weight: 700;\">GOTA Urban</span>&nbsp;mang đậm khí chất và phong thái thời thượng. Vị đắng nhẹ của chocolate nhấn nhá chút cay nồng của gia vị Á đông quyện chút vị mùi biển mát dịu tất cả hòa quyện tạo nên \"thần thái\" cho một chàng trai thành thị chính hiệu.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;- Top: (artemisia) hương cây chi ngải, hương quýt, hương cam, quả lý chua đen.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;- Middle: hương táo, hương biển, cây phong lữ, hương hoa oải hương</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">&nbsp;- Bottom: gỗ tuyết tùng, gỗ đàn hương, hoắc hương, hương sô-cô-la.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><img src=\"https://beautygarden.vn/Upload/tinymce/2019/11/25/1914cbdd3b21c74d9dc0b1b8052d3133041514.jpg\" alt=\"\" width=\"550\" height=\"550\" style=\"border: 0px; max-width: 100%; height: 550px; max-height: 100%; display: block; margin-left: auto; margin-right: auto;\"></p></div></div></div>', NULL, 1, '4529nh-3.jpg', 100, 5, 1, 1, 3, '2020-06-07 08:48:46', '2020-06-07 08:48:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `th_id` bigint(20) UNSIGNED NOT NULL,
  `th_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên thương hiệu sản phẩm',
  `th_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vouchers`
--

CREATE TABLE `vouchers` (
  `vc_id` bigint(20) UNSIGNED NOT NULL,
  `vc_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vc_ngaybatdau` date NOT NULL,
  `vc_ngayketthuc` date NOT NULL,
  `vc_trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatxu`
--

CREATE TABLE `xuatxu` (
  `xx_id` bigint(20) UNSIGNED NOT NULL,
  `xx_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên nơi xuất xứ sản phẩm',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xuatxu`
--

INSERT INTO `xuatxu` (`xx_id`, `xx_ten`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(2, 'Trung Quốc', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(3, 'Hàn Quốc', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(4, 'Nhật Bản', '2020-06-07 07:28:20', '2020-06-07 07:28:20'),
(5, 'Thái Lan', '2020-06-07 07:28:20', '2020-06-07 07:28:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bn_id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `binhluan_sp_id_foreign` (`sp_id`),
  ADD KEY `binhluan_kh_id_foreign` (`kh_id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ctdh_id`),
  ADD KEY `chitietdonhang_sp_id_foreign` (`sp_id`),
  ADD KEY `chitietdonhang_dh_id_foreign` (`dh_id`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD PRIMARY KEY (`lo_id`,`sp_id`),
  ADD KEY `chitietkhuyenmai_sp_id_foreign` (`sp_id`);

--
-- Chỉ mục cho bảng `chitietlo`
--
ALTER TABLE `chitietlo`
  ADD PRIMARY KEY (`lo_id`,`sp_id`),
  ADD KEY `chitietlo_sp_id_foreign` (`sp_id`);

--
-- Chỉ mục cho bảng `congdung`
--
ALTER TABLE `congdung`
  ADD PRIMARY KEY (`cd_id`);

--
-- Chỉ mục cho bảng `congdungphu`
--
ALTER TABLE `congdungphu`
  ADD PRIMARY KEY (`cdp_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`dh_id`),
  ADD KEY `donhang_kh_id_foreign` (`kh_id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`ha_id`),
  ADD KEY `hinhanh_sp_id_foreign` (`sp_id`);

--
-- Chỉ mục cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`httt_id`);

--
-- Chỉ mục cho bảng `hinhthucvanchuyen`
--
ALTER TABLE `hinhthucvanchuyen`
  ADD PRIMARY KEY (`htvc_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_id`),
  ADD KEY `khachhang_lkh_id_foreign` (`lkh_id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`km_id`);

--
-- Chỉ mục cho bảng `khuyenmai_sanpham`
--
ALTER TABLE `khuyenmai_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kmvouchers`
--
ALTER TABLE `kmvouchers`
  ADD PRIMARY KEY (`km_id`,`vc_id`),
  ADD KEY `kmvouchers_vc_id_foreign` (`vc_id`);

--
-- Chỉ mục cho bảng `lo`
--
ALTER TABLE `lo`
  ADD PRIMARY KEY (`lo_id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`l_id`);

--
-- Chỉ mục cho bảng `loaikhachhang`
--
ALTER TABLE `loaikhachhang`
  ADD PRIMARY KEY (`lkh_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ngoaite`
--
ALTER TABLE `ngoaite`
  ADD PRIMARY KEY (`nt_id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_id`),
  ADD KEY `nhanvien_q_id_foreign` (`q_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`q_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `sanpham_l_id_foreign` (`l_id`),
  ADD KEY `sanpham_cd_id_foreign` (`cd_id`),
  ADD KEY `sanpham_cdp_id_foreign` (`cdp_id`),
  ADD KEY `sanpham_xx_id_foreign` (`xx_id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`th_id`);

--
-- Chỉ mục cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`vc_id`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  ADD PRIMARY KEY (`xx_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `bn_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `bl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ctdh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethinhanh`
--
ALTER TABLE `chitiethinhanh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `congdung`
--
ALTER TABLE `congdung`
  MODIFY `cd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `congdungphu`
--
ALTER TABLE `congdungphu`
  MODIFY `cdp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `dh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `ha_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `httt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhthucvanchuyen`
--
ALTER TABLE `hinhthucvanchuyen`
  MODIFY `htvc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `km_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyenmai_sanpham`
--
ALTER TABLE `khuyenmai_sanpham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lo`
--
ALTER TABLE `lo`
  MODIFY `lo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `l_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaikhachhang`
--
ALTER TABLE `loaikhachhang`
  MODIFY `lkh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID loại khách hàng giá trị tự tăng', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `ngoaite`
--
ALTER TABLE `ngoaite`
  MODIFY `nt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nv_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `q_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `th_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `vc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  MODIFY `xx_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_kh_id_foreign` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_dh_id_foreign` FOREIGN KEY (`dh_id`) REFERENCES `donhang` (`dh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD CONSTRAINT `chitietkhuyenmai_lo_id_foreign` FOREIGN KEY (`lo_id`) REFERENCES `lo` (`lo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietkhuyenmai_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietlo`
--
ALTER TABLE `chitietlo`
  ADD CONSTRAINT `chitietlo_lo_id_foreign` FOREIGN KEY (`lo_id`) REFERENCES `lo` (`lo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietlo_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_kh_id_foreign` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_sp_id_foreign` FOREIGN KEY (`sp_id`) REFERENCES `sanpham` (`sp_id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_lkh_id_foreign` FOREIGN KEY (`lkh_id`) REFERENCES `loaikhachhang` (`lkh_id`);

--
-- Các ràng buộc cho bảng `kmvouchers`
--
ALTER TABLE `kmvouchers`
  ADD CONSTRAINT `kmvouchers_km_id_foreign` FOREIGN KEY (`km_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kmvouchers_vc_id_foreign` FOREIGN KEY (`vc_id`) REFERENCES `vouchers` (`vc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_q_id_foreign` FOREIGN KEY (`q_id`) REFERENCES `quyen` (`q_id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_cd_id_foreign` FOREIGN KEY (`cd_id`) REFERENCES `congdung` (`cd_id`),
  ADD CONSTRAINT `sanpham_cdp_id_foreign` FOREIGN KEY (`cdp_id`) REFERENCES `congdungphu` (`cdp_id`),
  ADD CONSTRAINT `sanpham_l_id_foreign` FOREIGN KEY (`l_id`) REFERENCES `loai` (`l_id`),
  ADD CONSTRAINT `sanpham_xx_id_foreign` FOREIGN KEY (`xx_id`) REFERENCES `xuatxu` (`xx_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

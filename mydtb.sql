-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2020 lúc 10:41 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mydtb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
(1, 'iPhone'),
(2, 'MacBook\r\n'),
(3, 'iPad'),
(4, 'Watch'),
(5, 'iMac'),
(6, 'AirPods');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category1`
--

CREATE TABLE `category1` (
  `category1name` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `ProductPrice` varchar(100) DEFAULT NULL,
  `ProductDescription` varchar(10000) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `ProductImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductPrice`, `ProductDescription`, `CategoryID`, `ProductImage`) VALUES
(1, 'iPhone 12 (VN/A)', '22.500.000 VNĐ', '5G speed. A14 Bionic, the fastest chip in a smartphone.\r\nAn edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all — in two perfect sizes.', 1, 'image/iphone12.jpg'),
(2, 'iPhone 12 Pro (VN/A)\r\n', '28.000.000 VNĐ', '5G goes Pro. A14 Bionic rockets past every other smartphone chip. The Pro camera system takes low-light photography to the next level — with an even bigger jump on iPhone 12 Pro Max. And Ceramic Shield delivers four times better drop performance. Let’s see what this thing can do.', 1, 'image/iphone12pro.jpg'),
(3, 'Macbook Pro 13 inch 2020 - Apple M1', '34.500.000 VNĐ', 'Macbook Pro M1 thế hệ mới vừa ra mắt được trang bị vi xử lý M1 do chính Apple tự thiết kế. Hứa hẹn mang đến hiệu năng cực kì mạnh mẽ, thời gian sử dụng cực kì ấn tượng.', 2, 'image/macpro2020.png'),
(4, 'iPhone 12 Pro Max (VN/A)\r\n', '33.000.000 VNĐ', '5G goes Pro. A14 Bionic rockets past every other smartphone chip. The Pro camera system takes low-light photography to the next level — with an even bigger jump on iPhone 12 Pro Max. And Ceramic Shield delivers four times better drop performance. Let’s see what this thing can do.', 1, 'image/iphone12promax.jpg'),
(5, 'APPLEWATCH Series SE', '7.500.000 VNĐ', 'An expansive Retina display so you can see more at a glance. Advanced sensors to track all the ways you move. Powerful features to keep you healthy and safe. Apple Watch SE is a lot of watch for a lot less than you expected.', 4, 'image/apw.png'),
(6, 'iPhone 12 Mini (VN/A)\r\n', '18.900.000 VNĐ', 'For the first time in many years, Apple is making an intentionally small phone. The key, though, is that unlike other small phones, Apple isn’t putting worse parts in it. The iPhone 12 mini has all the same features as the larger iPhone 12. It has the same cameras, same processor, same everything save for two things: screen size and battery life.', 1, 'image/iphone12mini.jpg'),
(7, 'Macbook Air 13 inch 2020 - Apple M1', '27.000.000 VNĐ', 'Là dòng sản phẩm có thiết kế mỏng nhẹ, sang trọng và tinh tế cùng với đó là giá thành phải chăng nên MacBook Air đã thu hút được đông đảo người dùng yêu thích và lựa chọn.', 2, 'image/macair2020.png'),
(8, 'iPad Pro 12.9-inch (2020)', '25.500.000 VNĐ', 'được đánh giá là mẫu iPad mạnh nhất tính đến thời điểm hiện tại và có tiềm năng vượt trội hơn hầu hết laptop Windows trên thị trường hiện nay nhờ trang bị chip A12Z Bionic đạt tốc độ xử lý vượt trội', 3, 'image/ipadpro.jpg'),
(9, 'iPad Pro 11-inch (2020)', '21.500.000 VNĐ', 'Được đánh giá là mẫu iPad mạnh nhất tính đến thời điểm hiện tại và có tiềm năng vượt trội hơn hầu hết laptop Windows trên thị trường hiện nay nhờ trang bị chip A12Z Bionic đạt tốc độ xử lý vượt trội', 3, 'image/ipadpro1.jpg'),
(10, 'iMac Pro 2020 – MHLV3 10Core', '133.000.000 VNĐ', 'Giống như dòng sản phầm iMac, iMac Pro cũng là dòng All-In-One, kết hợp hài hoà giữa dòng iMac truyền thống và sự mạnh mẽ của Mac Pro.', 5, 'image/imac.png'),
(11, 'iMac Pro 2020 – MQ2Y2 8Core', '105.000.000 VNĐ', 'Giống như dòng sản phầm iMac, iMac Pro cũng là dòng All-In-One, kết hợp hài hoà giữa dòng iMac truyền thống và sự mạnh mẽ của Mac Pro.', 5, 'image/imac1.jpg'),
(12, 'Apple AirPods Pro (VN/A)', '5.350.000 VNĐ', 'Mới đây, Apple đã công bố mẫu tai nghe AirPods mới nhất – tai nghe bluetooth Apple Airpods Pro – với thiết kế mới cùng nhiều tính năng mới.', 6, 'image/airpodpro.jpg'),
(13, 'Apple AirPods 2 (VN/A)', '3.490.000 VNĐ', 'Thiết kế tối giản, chất lượng âm thanh tuyệt vời', 6, 'image/airpod2.jpg'),
(14, 'Apple Watch Series 3 GPS 42mm', '6.650.000 VNĐ', 'Đặc điểm nổi bật 42mm Case Space Gray Aluminum Sport Brand Black Trả lời cuộc gọi khi bạn đang lướt ván. Ra lệnh Siri gửi tin nhắn.Chơi những bản nhạc yêu thích khi bạn đang chạy bộ. Và làm tất cả những điều đó khi bạn để điện thoại ở nhà. Giới thiệu đến bạn phiên bản Apple Watch thứ 3 với LTE. Bây giờ bạn đã có thể tự do đi bất cứ đâu chỉ với chiếc đồng hồ trên tay.', 4, 'image/apw3.png'),
(15, 'APPLE WATCH Series 6', '9.990.000 VNĐ', 'Measure your blood oxygen level with a revolutionary new sensor and app. Take an ECG anytime, anywhere. See your fitness metrics at a glance with the enhanced Always-On Retina display. With Apple Watch Series 6 on your wrist, a healthier, more active, more connected life is within reach.', 4, 'image/apw6.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `confirm` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `username`, `password`, `date`, `email`, `confirm`, `country`, `city`, `address`, `Image`) VALUES
(1, 'dat', '123456', '2001-04-08', 'thanhdat8401@gmail.com', 'hanoi', 'Huyện Thanh Trì', 'Duyên Hà - Thanh Trì - Hà Nội', '123456', '1212.jpg'),
(2, 'datprovip', '111111', '2021-01-01', 'thanhdat8401@gmail.com', 'hanoi', 'Huyện Thanh Trì', 'Duyên Hà - Thanh Trì - Hà Nội', '111111', 'apw.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

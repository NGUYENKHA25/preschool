-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2023 lúc 03:40 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vuonannhien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ngockha', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachtre`
--

CREATE TABLE `danhsachtre` (
  `id` int(11) NOT NULL,
  `hoVaTen` varchar(50) NOT NULL,
  `phuHuynh` varchar(50) NOT NULL,
  `lop` varchar(50) NOT NULL,
  `soDienThoai` int(11) NOT NULL,
  `tuoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachtre`
--

INSERT INTO `danhsachtre` (`id`, `hoVaTen`, `phuHuynh`, `lop`, `soDienThoai`, `tuoi`) VALUES
(8, '', '', '', 0, 0),
(9, 'Nguyễn Văn Nhac', 'fasfasfaf', 'Lớp Nôi', 215445445, 4),
(10, 'Nguyễn Hoàng Bảo Anh', 'Nguyễn Đức Thịnh', 'Lớp Mẫu Giáo Chuyên Nghiệp', 2147483647, 2),
(11, 'Hoàng Văn Lĩnh', 'Hoàng Thế An', 'Lớp Mẫu Giáo Lớn', 2147483647, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `magiaovien` int(10) NOT NULL,
  `hinhanh` varchar(25) NOT NULL,
  `tengiaovien` varchar(50) NOT NULL,
  `namsinh` varchar(50) NOT NULL,
  `vitricongviec` varchar(50) NOT NULL,
  `thanhtich` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`magiaovien`, `hinhanh`, `tengiaovien`, `namsinh`, `vitricongviec`, `thanhtich`) VALUES
(1, 'giaovien1.jpg', 'Cleopatra', '12/02/1996', 'Giáo viên ngoại ngữ.', 'Tốt nghiệp loại giỏi trường đại học Quy Nhơn.'),
(2, 'giaovien2.jpg', 'Annabella.', '10/03/1995', 'Giáo viên ngoại ngữ.', 'Tốt nghiệp loại xuất xắc trường sư phạm Đà Nẵng.'),
(3, 'giaovien3.jpg', 'Lý Thị Như Quỳnh', '21/10/1998', 'Tổ phó chuyên môn.', 'Tốt nghiệp loại giỏi trường cao đẳng kỹ thuât Quy Nhơn.'),
(4, 'giaovien4.jpg', 'Huỳnh Thị Kim Hoa', '05/12/1998', 'Giáo viên mầm non.', 'Tốt nghiệp loại khá trường đại học Quy Nhơn.'),
(5, 'giaovien5.jpg', 'Nguyễn  Phan Mỹ Yên', '06/09/1996', 'Giáo viên mầm non.', 'Tốt nghiệp loại giỏi trường cao đảng kỹ thuật Quy Nhơn.'),
(6, 'giaovien6.jpg', 'Nguyễn Thị Hà', '03/11/1998', 'Giáo viên mầm non.', 'Tốt nghiệp loại khá trường đại học Quy Nhơn.'),
(7, 'giaovien7.jpg', 'Phan Mỹ Hòa', '08/09/1978', 'Giáo viên mầm non.', 'Tốt nghiệp loại giỏi trường đạo học sư phạm Đà Nẵng.'),
(8, 'giaovien8.jpg', 'sdafaff', '2023-12-16', 'ádaafaf', 'áafafafaffafa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoatdong`
--

CREATE TABLE `hoatdong` (
  `mahoatdong` int(10) NOT NULL,
  `video` varchar(50) NOT NULL,
  `hinhanh` varchar(25) NOT NULL,
  `tenhoatdong` varchar(50) NOT NULL,
  `ngaygio` date NOT NULL,
  `diadiem` varchar(100) NOT NULL,
  `gioithieu` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoatdong`
--

INSERT INTO `hoatdong` (`mahoatdong`, `video`, `hinhanh`, `tenhoatdong`, `ngaygio`, `diadiem`, `gioithieu`) VALUES
(1, 'khaigiang.mp4', 'lekhaigiang.jpg', 'Lễ  khai giảng đầu năm học 2022-2023', '2023-01-06', 'Khuôn viên trường mầm non Vườn An Nhiên.', 'Lễ khai giảng năm học 2022-2023, tuyên bố khai giảng các lớp học và nêu các cố gắng, nỗ lực của nhà trường.'),
(2, 'trungthu.mp4', 'trungthu.jpg', 'Bé sáng tạo đêm hội trăng rằm.', '2021-08-15', 'Hội trường A trường mầm non Vườn An Nhiên.', 'Đêm hội trăng rằm nhằm mục đích giúp các bé sáng tạo và sôi động hơn trong thời gian học tập.'),
(3, 'tongket.mp4', 'tongket.jpg', 'Lễ tổng kết và bế giảng năm học 2018-2019.', '2018-12-06', 'Hội trường A trường mầm non Vườn An Nhiên.', 'Thực hiện nhiệm vụ năm học, sáng ngày hôm nay (24/05/2022), cô và trò Trường Mầm non Vườn An Nhiên đã tổ chức lễ tổng kế và bế giảng năm học 2018-2019.'),
(4, 'vuihe.mp4', 'vuichoihe.jpg', 'Vui hè cho bé.', '2023-09-06', 'Bãi biển Quy Nhơn.', 'Hè vui cho bé là một trong những hoạt động giúp các bé linh hoạt hơn trong cuộc sống, các bé sẽ được thỏa sức vui chơi lành mạnh.'),
(5, 'lethieunhi.mp4', 'lethieunhi.jpg', 'Ngày lễ thiếu nhi 1/9 của trường mầm non Vườn An N', '2023-10-06', 'Công viên nước An Nhơn.', 'Mừng ngày quốc tế thiếu nhi 1/6, trường mầm non Vườn An Nhiên tổ chức “ngày hội tuổi thơ” tạo sân chơi cho các bé hòa nhập và làm quen với nước.'),
(6, 'bemac.mp4', 'bemac.jpg', 'Lễ bế mạc năm học 2016-2017', '2017-10-14', 'Khu hội trường, trường mầm non Vườn An Nhiên.', 'lễ bế mạc năm học 2016-2017 nhằm mục đích tuyên dương các bé được thành tích tốt trong năm học.'),
(7, 'mungxuan.mp4', 'mungxuan.jpg', 'Xuân yêu thương.', '2018-02-06', 'Khuôn viên trường.', 'Lễ chào xuân trường mầm non là một sự kiện truyền thống quan trọng trong nền văn hóa Việt Nam, nhất là đối với trẻ nhỏ. Đây là dịp để các bé học hỏi, trải nghiệm và tạo dựng những kỷ niệm đáng nhớ khi chào đón mùa xuân tươi đẹp. Lễ hội này thường kết hợp giữa nghệ thuật biểu diễn, hoạt động vui chơi và giáo dục, giúp trẻ phát triển không chỉ về kiến thức mà còn về kỹ năng xã hội và ý thức về truyền thống văn hóa của đất nước.'),
(8, 'giangsinh.mp4', 'giangsinh.jpg', 'Giáng sinh vui khỏe.', '2021-12-06', 'Khuôn viên trường.', 'Đón Giáng Sinh tại trường mầm non là một sự kiện thú vị và đầy ấm áp, không chỉ dành cho trẻ nhỏ mà cả gia đình và cộng đồng trường học. Trong không gian ấm cúng của trường mầm non, các bé được hòa mình vào bầu không khí rộn ràng của mùa lễ hội. Chương trình thường bao gồm các hoạt động thú vị như biểu diễn văn nghệ, trang trí cây thông Noel, chơi trò chơi, hát ca các bài hát Giáng Sinh, và tận hưởng những phần quà thú vị. Điều quan trọng nhất, đón Giáng Sinh tại trường mầm non giúp các bé hiểu thêm về ý nghĩa của tình yêu, sự cho đi, và tạo dựng những kỷ niệm đáng nhớ trong kỳ nghỉ đặc biệt này.'),
(21, 'uploads/ngaynhagiao.mp4', 'uploads/tre-tu-3-6-tuoi-c', 'Đón Tết Sum Vầy', '2023-12-06', 'Sân Trường', 'jhdjdjd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `sothutu` int(25) NOT NULL,
  `tenphuhuynh` varchar(50) NOT NULL,
  `sodienthoai` int(25) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `ghichu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`sothutu`, `tenphuhuynh`, `sodienthoai`, `gmail`, `ghichu`) VALUES
(1, 'Huỳnh Công Hiếu', 836283654, 'huynhhieu223@gmail.com', 'Ông Huỳnh Công Hiếu là phụ huynh bé Huỳnh Công Tánh lớp cá voi.'),
(2, 'Nguyễn Mỹ Cảnh', 343536252, 'canhnguyenduc242@gmail.com', 'Bà Nguyễn Mỹ Cảnh là phụ huynh bé Lê Văn Lành lớp sao biển.'),
(3, 'Nguyễn Tuấn Anh', 854362253, 'tuananhnguyen@gmail.com', 'Ông Nguyễn Tuấn Anh là phụ huynh bé Nguyễn Xuân An lớp cá heo.'),
(4, 'Nguyễn Văn Lộc', 352671182, 'locvannguyen11@gmail.com', 'Ông Nguyễn Văn Lộc là phụ huynh bé Nguyễn Văn Giảng lớp cá voi.'),
(5, 'Phan Thị Tố Uyên', 873416373, 'uyenthito77@gmail.com', 'Bà Phan Thị Tố Uyên là phụ huynh bé Huỳnh Công Chánh lớp sao biển.'),
(6, 'Trần Thị Mỹ Trang', 243627718, 'trangkhanmy3628@gmail.com', 'Bà Trần Thị Mỹ Trang là phụ huynh bé Nguyễn Văn Khôi lớp cá heo.'),
(7, 'Huỳnh Thị Kim Hoa', 926473382, 'hoathikimhuynh@gmail.com', 'Bà Huỳnh Thị Kim Hoa là phụ huynh bé Nguyễn Văn An lớp cá mập.'),
(8, 'Phan Văn Chuẩn', 341425617, 'chuanphanvan23@gmail.com', 'Ông Phan Văn Chuẩn là phụ huynh bé Phan Văn Nghĩa rong biển.'),
(9, 'Phạm Tấn Lực Ý', 632737281, 'ytanphamluc@gmail.com', 'Ông Phạm Tấn Lực Ý là phụ huynh bé Phạm Tấn Đồng lớp cá ngựa.'),
(10, 'Phạm Thuận Thiên Phú', 98638828, 'phubinhthuanpham56@gmail.com', 'Ông Phạm Thuận Thiên Phú là phụ huynh bé Phạm Lý Như Quỳnh lớp cá mập.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `maLophoc` int(20) NOT NULL,
  `hinhAnh` varchar(25) NOT NULL,
  `tenLophoc` varchar(50) NOT NULL,
  `doTuoi` varchar(100) NOT NULL,
  `hocPhi` int(10) NOT NULL,
  `tenGiaovien` varchar(50) NOT NULL,
  `baoMau` varchar(50) NOT NULL,
  `gioiThieu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`maLophoc`, `hinhAnh`, `tenLophoc`, `doTuoi`, `hocPhi`, `tenGiaovien`, `baoMau`, `gioiThieu`) VALUES
(1, 'lopmam.jpg, lopmam2.jpg', 'Sao biển.', '2 tháng đến 1 năm tuổi.', 1000000, 'Lý Thị Như Quỳnh', '', 'Lớp sao biển là môi trường học tập đầu tiên của các bé, nơi mà những nụ cười tươi thơ và sự tò mò bắt đầu nảy nở.'),
(2, 'lopla.jpg', 'Lớp Mầm Non', '6 - 12 tháng tuổi ', 1500000, 'Phan Thị Mỹ Châu', 'Phan Ái Thu ', 'Lớp Mầm non (6 - 12 tháng tuổi): Lớp Mầm non chú trọng đến việc giúp trẻ phát triển cả về thể chất lẫn tinh thần. Chúng tôi cung cấp môi trường an toàn, ấm cúng và tập trung vào việc phát triển các kỹ năng sớm như nói chuyện, vận động và khám phá thế giới xung quanh.'),
(3, 'lopchoi.jpg', 'Lớp Nôi', '1 - 2 tuổi', 2000000, 'Nguyễn Thị Mộng Mơ', 'Phan Kim Liên ', 'Lớp Nôi (1 - 2 tuổi): Lớp Nôi là nơi trẻ em được khám phá thế giới xung quanh thông qua các hoạt động tương tác và giáo dục chăm sóc. Chúng tôi tạo điều kiện để trẻ phát triển toàn diện trong môi trường an toàn, vui tươi và đầy sáng tạo.'),
(4, 'lopmam1.jpg', 'Lớp Mẫu Giáo Nhí', '2 - 3 tuổi', 2500000, 'Huỳnh Thị Kim Cúc.', 'Trần Thị Mỹ', 'Lớp Mẫu Giáo Nhí (2 - 3 tuổi): Tại lớp Mẫu Giáo Nhí, chúng tôi tập trung vào việc phát triển tư duy, trí tuệ và kỹ năng xã hội của trẻ thông qua các hoạt động giáo dục phù hợp với độ tuổi. Môi trường học tập đầy màu sắc và hứng khởi sẽ giúp trẻ phát triển tối đa khả năng của mình.'),
(5, 'lopla1.jpg', 'Lớp Mẫu Giáo Nhỏ', '3 - 4 tuổi', 3000000, 'Phan Ngọc Hiền', 'Thiều Thị Thắng', 'Lớp Mẫu Giáo Nhỏ (3 - 4 tuổi): Lớp Mẫu Giáo Nhỏ tạo điều kiện cho trẻ phát triển kỹ năng ngôn ngữ, sáng tạo và toàn diện thông qua các hoạt động học tập và vui chơi. Chúng tôi mở cánh cửa cho trẻ khám phá thế giới bằng cách thúc đẩy sự tò mò và sáng tạo.'),
(6, 'camap.jpg', 'Lớp Mẫu Giáo Lớn', '4 - 5 tuổi', 3500000, 'Huỳnh Mỹ Hòa', 'Trần Thị Phương ', 'Lớp Mẫu Giáo Lớn (4 - 5 tuổi): Tại lớp Mẫu Giáo Lớn, chúng tôi tạo điều kiện cho trẻ phát triển vững vàng về kiến thức, kỹ năng xã hội và tư duy logic. Chúng tôi tập trung vào việc chuẩn bị trẻ cho sự chuyển tiếp từ môi trường gia đình sang môi trường học tập chính thức.'),
(7, 'maugiaocn.jpg', 'Lớp Mẫu Giáo Chuyên Nghiệp ', '5-6 tuổi', 4000000, 'Nguyễn Thị Kim Nga', 'Cáp Thị Thanh Nga', 'Lớp Mẫu Giáo Chuyên Nghiệp (5 - 6 tuổi): Lớp Mẫu Giáo Chuyên Nghiệp là nơi trẻ chuẩn bị cho khởi đầu mạnh mẽ vào hệ thống giáo dục cấp tiểu học. Chúng tôi tập trung vào việc phát triển kỹ năng toán học, ngôn ngữ, và kỹ năng tự chủ để chuẩn bị cho hành trình học tập tiếp theo.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtintre`
--

CREATE TABLE `thongtintre` (
  `id_tre` int(11) NOT NULL,
  `hoTenChaMe` varchar(50) NOT NULL,
  `hoTenBe` varchar(50) NOT NULL,
  `soDienThoai` int(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tinhTrangSucKhoe` text NOT NULL,
  `ngayNhapHoc` date NOT NULL,
  `loaiLopHoc` varchar(225) NOT NULL,
  `ghiChu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtintre`
--

INSERT INTO `thongtintre` (`id_tre`, `hoTenChaMe`, `hoTenBe`, `soDienThoai`, `email`, `tinhTrangSucKhoe`, `ngayNhapHoc`, `loaiLopHoc`, `ghiChu`) VALUES
(1, 'Nguyễn Văn Hùng', 'Nguyễn Tuyết Mai', 215445445, 'ngockha123a@gmail.com', 'Khỏe', '2023-12-01', 'lopMamNon', 'call me'),
(2, 'Nguyễn Văn Hùng', 'Nguyễn Tuyết Mai', 215445445, 'lionelkha5@gmail.com', 'Khỏe', '2023-11-17', 'lopMauGiaoNho', 'call me');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhsachtre`
--
ALTER TABLE `danhsachtre`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`magiaovien`);

--
-- Chỉ mục cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`mahoatdong`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`sothutu`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`maLophoc`);

--
-- Chỉ mục cho bảng `thongtintre`
--
ALTER TABLE `thongtintre`
  ADD PRIMARY KEY (`id_tre`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhsachtre`
--
ALTER TABLE `danhsachtre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `magiaovien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `mahoatdong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `sothutu` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `maLophoc` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thongtintre`
--
ALTER TABLE `thongtintre`
  MODIFY `id_tre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

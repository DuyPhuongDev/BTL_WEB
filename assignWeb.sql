-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2024 at 08:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int(11) NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Áo khoác nam'),
(2, 'Áo khoác nữ'),
(3, 'Áo sơ mi nam'),
(4, 'Quần Jean nam'),
(5, 'Quần lửng nam'),
(6, 'Váy nữ'),
(7, 'Áo nam'),
(8, 'Áo nữ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('visible','hidden') DEFAULT 'visible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `status` enum('visible','hidden') DEFAULT 'visible',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BST hoa tai đầy ma lực của “nữ quỷ hàng hiệu” Park Shin Hye trong “Thẩm phán từ địa ngục”', 'Áo tweed, túi hiệu là chưa đủ để đo độ xa xỉ của “nữ quỷ” Justitia. BST hoa tai luôn chạm mốc 5 chữ số đến từ các nhà kim hoàn danh tiếng nối dài tủ đồ “tài phiệt” của vị thẩm phán khác thường này.\r\n\r\nKhi “nữ quỷ” Justitia sống cuộc đời khác dưới nhân dạng vị thẩm phán Kang Bit Na, cô không chỉ mang đến định nghĩa mới về thực thi công lý. Tủ đồ cứng nhắc của bản gốc đã được thay thế bằng vô số khám phá mới về màu sắc, chất liệu và trên hết là gu thẩm mỹ “tài phiệt” của Justitia. Áo tweed, túi hiệu với số lượng nhiều như trưng bày tại bảo tàng là chưa đủ, nhân vật của Park Shin Hye còn khiến hội tín đồ phải chú ý đến những chi tiết nhỏ – mức giá to trên trang phục: BST hoa tai đến từ các nhà kim hoàn danh tiếng lẫy lừng, thành tố không thể thiếu mỗi khi cô lên hình, dù là khi đang trừng trị những tên tội phạm. Chặng đường phát sóng của “Thẩm phán từ địa ngục” đã kết lại, nhưng một điều chắc chắn rằng hội tín đồ khó mà quên được kho báu trang sức đồ sộ của Justitia, nổi bật nhất là ở những tạo hình sau.\r\nMặt đá ấn tượng Serpenti SEDUTTORi từ bvlgari\r\nĐá quý là bí quyết cho vẻ ngoài lấp lánh giúp nhận biết giới tinh hoa. Trong lần gặp gỡ đầu tiên với khán giả qua poster chính thức của “Thẩm phán từ địa ngục”, nhân vật của Park Shin Hye thể hiện quyền uy và vị thế phi thường với hoa tai đầu rắn Serpenti Seduttori từ BVLGARI. Sắc đỏ bí ẩn trở thành khung nền tối màu để đôi phụ kiện đính kết theo kỹ thuật pavé (ghép nhiều kim cương nhỏ) thu hút người đối diện, trước khi ra đòn chinh phục với cặp mắt ngọc lục bảo. Giá trị của một item duy nhất đã lên đến 1,3 tỷ đồng.\r\nHoa tai dáng dài Kelly Gavroche từ Hermès\r\n“Nữ quỷ hàng hiệu” si mê những chiếc túi Hermès đến mức không thể “an phận” xách trên tay, mà còn muốn tách lẻ phần touret (đai khóa kim loại) trên túi Kelly huyền thoại để biến thành hoa tai. Cô không phải người duy nhất có ý tưởng đó. Hermès đã ra mắt hoa tai Kelly Gavroche để chiều lòng các tín đồ có cùng thị hiếu với nhân vật của Park Shin Hye. Trên đai khóa được khảm nạm 72 viên kim cương lên tới 1.03 carat, thêm hiệu ứng chuyển động với chuỗi mắt xích vàng hồng 18K.\r\nKHUYÊN tai Vintage Alhambra từ Van Cleef & Arpels\r\nBiểu tượng cỏ bốn lá từ Van Cleef & Arpels chính là nét chấm yểu điệu cần thiết cho bức tranh thời trang tổng thể của Justitia, khẳng định cô gai góc thực thi công lý nhưng vẫn có những khía cạnh mềm mại khi dần học hỏi về tình cảm con người. Lọt vào mắt xanh của cô là phiên bản vàng 18K khắc họa tiết guilloché, viền nạm kim cương.', 'visible', '2024-11-08 03:22:00', '2024-11-08 03:22:00'),
(2, 'Ca nhiễm tăng, TP.HCM kiểm soát di biến động dân cư ra sao?', 'TTO - TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây. Tuy vậy người dân từ các tỉnh thành đến TP.HCM sẽ phải đăng ký tạm trú tạm vắng để địa phương có biện pháp kiểm soát.\r\nUBND TP.HCM yêu cầu tăng cường kiểm soát chặt chẽ di biến động dân cư. Các địa phương phải nắm chắc tình hình người dân khi ra, vào địa bàn, người có nguy cơ đang lưu trú, làm việc tại các địa phương, doanh nghiệp như lái xe, phụ xe liên tỉnh, người làm việc ngoài tỉnh về địa phương lưu trú… Từ đó sẽ chủ động các biện pháp quản lý phù hợp.\r\nTuy nhiên trước chủ trương này của thành phố, nhiều người dân bày tỏ sự băn khoăn, không biết liệu thành phố có lập lại các chốt kiểm soát và cần phải chuẩn bị những thủ tục gì khi đến TP.HCM.\r\nTrao đổi về vấn đề này, thượng tá Lê Mạnh Hà - phó trưởng Phòng tham mưu Công an TP.HCM - cho biết TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây.\r\nTheo thượng tá Hà, biến động dân cư được hiểu là sự thay đổi về dân cư, thường trú, tạm trú, không phải là lực lượng chức năng kiểm soát người dân đi lại ở các chốt.\r\nHiện nay Công an TP.HCM đang thực hiện các công tác quản lý di biến động dân cư như: đăng ký thường trú, tạm trú, rà soát hộ khẩu, những ai có mặt thực tế ở địa phương. Công an TP cũng đang rà soát, đối sánh các dữ liệu dân cư, cấp mã số định danh cá nhân.\r\nBên cạnh đó ngành công an cũng đang kiểm tra diện thường trú, tạm trú, những người đang lưu trú ở khách sạn, nhà nghỉ... khai báo để quản lý chặt chẽ và thực hiện các chính sách an sinh xã hội.', 'visible', '2024-11-08 07:57:51', '2024-11-08 07:57:51'),
(3, '50% ca tử vong ở TP.HCM chưa tiêm vắc xin, thành phố đang \"đánh chặn\" số ca chuyển nặng', 'TTO - Với việc ban hành hướng dẫn gói chăm sóc sức khỏe cho F0 cách ly tại nhà phiên bản 1.6, ngành y tế TP.HCM cho thấy quyết tâm tập trung \"đánh chặn từ xa\" bằng việc kiểm soát F0 cách ly tại cộng đồng không để trở nặng.\r\nKhông phải F0 nào cũng cách ly tại nhà\r\nTheo thống kê, trong tổng số ca F0 hiện tại có khoảng 70% trường hợp có triệu chứng nhẹ, hoặc không có triệu chứng đang được cách ly chăm sóc tại nhà hoặc khu cách ly tập trung. Làm gì để giảm số ca mắc chuyển nặng? Hướng dẫn mới nhất từ TP.HCM được \"chi tiết hóa\" từ phân loại người F0 nào được cách ly ở nhà; chăm sóc ra sao; nên và không nên làm gì; dấu hiệu cần báo ngay cho y tế và kê đơn, cấp cứu F0 tại nhà...\r\nHướng dẫn lần này quy định rõ hơn về đối tượng được chăm sóc tại nhà khi đảm bảo đủ 2 điều kiện bao gồm không triệu chứng hoặc triệu chứng nhẹ (không có suy hô hấp SpO2 lớn hơn hoặc bằng 96% khi thở khí trời, nhịp thở bằng hoặc dưới 20 lần/phút). Chỉ những F0 có độ tuổi từ 1 - 50 tuổi, không có bệnh nền, không đang mang thai, không béo phì mới được cách ly ở nhà.\r\nNgoài ra quy định này chỉ cho phép một số trường hợp không thỏa các điều kiện nêu trên có thể xem xét cách ly ở nhà nếu có bệnh nền ổn định, bảo đảm tiêm đủ 2 mũi vắc xin hoặc sau 14 ngày kể từ ngày tiêm mũi đầu tiên.\r\nTP Thủ Đức (TP.HCM) là một trong các địa phương được ghi nhận có số ca mắc tăng nhanh gần đây. Ông Nguyễn Văn Chức - giám đốc Trung tâm Y tế TP Thủ Đức - cho biết để \"đánh chặn từ xa\", ngoài 32 trạm y tế cố định, các trạm y tế lưu động, các phường triển khai tổ y tế lưu động đến từng khu phố (trước đây là phường) để kịp thời xử lý các ca F0 chuyển nặng. \"Tổ lưu động của từng khu phố khá đông, bao gồm đủ các ban ngành từ y tế, đoàn thanh niên, dân quân, giáo dục, thành ra việc phản ứng và tiếp cận sẽ được gần người dân hơn\" - ông Chức nói.', 'visible', '2024-11-08 07:58:31', '2024-11-08 07:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `image_url`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Áo khoác nam xịn nhất năm', '✔️ Áo khoác kaki nam đẹp, phong cách hàn quốc hiện đại giúp bạn phát huy được sự cá tính, năng động của bản thân. \r\n✔️Áo khoác kaki nam là mẫu áo khoác quen thuộc với hầu hết mọi chàng trai  và các nàng rồi đúng không nào, để phù hợp với gu thời trang hiện đại ngày nay các kiểu Áo khoác kaki được thiết kế đa dạng kiểu dáng lạ mắt mang đến gu thời trang năng động, khỏe khoắn cho người mặc. Các bạn có thể diện Áo khoác kaki nam tới công sở, dạo phố, đi học, dã ngoại,.....đề phù hợp đấy. Hãy nhanh chóng chọn cho mình một kiểu để thay đổi phong cách hàng ngày của bản thân nào.\r\n📣Chất liệu: kakai 2 lớp\r\n\r\n✔️ KÍCH THƯỚC: \r\nSize S : Dưới 39kg Cao Dưới 1m65\r\nSize M: 40kg - 55kg Cao Dưới 1m70\r\nSize L: 56kg - 62kg Cao Dưới 1m75\r\nSize XL: 63kg - 75kg Cao Dưới 1m78\r\nSize XXL: 76kg - 80kg Cao Dưới 1m80\r\nLƯU Ý: những bạn có bụng nên lấy lớn hơn 1 size so với bảng trên ạ. inbox trực tiếp cho shop để được tư vấn chính xác nhất', 'public/img/products/ao_khoac_nam_1.png', 150000.00, 1, '2024-11-08 02:52:03', '2024-11-08 02:52:03'),
(2, 'Áo khoác nam đen', '✔️ áo khoác đẹp, phong cách hàn quốc hiện đại giúp bạn phát huy được sự cá tính, năng động của bản thân. \r\n✔️ áo khoác nam là mẫu áo khoác quen thuộc với hầu hết mọi chàng trai  và các nàng rồi đúng không nào, để phù hợp với gu thời trang hiện đại ngày nay các kiểu áo khoác dù được thiết kế đa dạng kiểu dáng lạ mắt mang đến gu thời trang năng động, khỏe khoắn cho người mặc. Các bạn có thể diện áo khoác gió tới công sở, dạo phố, đi học, dã ngoại,.....đề phù hợp đấy. Hãy nhanh chóng chọn cho mình một kiểu áo khoác để thay đổi phong cách hàng ngày của bản thân nào.\r\n📣Chất liệu cúa áo khoác nỉ nam : nỉ cao cấp 2 lớp', 'public/img/products/jean_nam.png', 150000.00, 1, '2024-11-08 02:56:57', '2024-11-08 02:56:57'),
(3, 'Áo Khoác Cardigan Trắng Nâu Túi Gấu Nữ form rộng xinh xắn', 'Áo Khoác Cardigan Trắng Nâu Túi Gấu Nữ form rộng xinh xắn <br>\r\nÁo Khoác Cardigan Túi Gấu Be Nâu\r\n - Form: Freesize, 60-70kg đổ lại mặc oke \r\n- kích thước : dài 63cm, rộng 55cm, tay 54cm, vai 54cm\r\n- Phân loại: be, nâu\r\n- Chất liệu: Nỉ Bông\r\n #cardigan #cardigannamnu #cardiganformrong #aocardigan #aokhoac', 'public/img/products/ao_choang_nu.png', 200000.00, 2, '2024-11-08 02:58:14', '2024-11-08 02:58:14'),
(4, 'ÁO SƠ MI NAM DÀI TAY THỜI TRANG HÀN QUỐC CAO CẤP', 'Áo sơ mi nam dài tay, vải đẹp cao cấp loại 1 trên thị trường.\r\nÁo sơ mi nam cổ bẻ dài tay (sơ mi nam) được thiết kế với form dáng trẻ trung với form áo ôm, rất chuẩn như hình.\r\nChúng tôi hiện nay cung cấp áo sơ mi nam với giá bán lẻ tốt nhất trên thị trường.\r\n--Giá cạnh tranh nhất do chính nhà máy sản xuất với số lượng lớn.\r\n--Chúng tôi không nói sản phẩm của mình có chất lượng cao nhưng phải khẳng định chất lượng sản phẩm vượt trội so với giá tiền. \r\n--Uy tín bán hàng được đặt lên hàng đầu, không kinh doanh chộp giật.\r\n--Vì sản phẩm được sản xuất với số lượng lớn để có giá cạnh tranh nên không thể tránh được sai sót. Nếu quý khách hàng không hài lòng chúng tôi sẵn sàng hỗ trợ đổi trả.\r\n--Rất mong nhận được ý kiến đóng góp của Quý khách hàng để chúng tôi cải thiện chất lượng dịch vụ tốt hơn.', 'public/img/products/ao_so_mi_nam.png', 85000.00, 3, '2024-11-08 02:58:56', '2024-11-08 02:58:56'),
(5, 'Quần baggy nam ống rộng kiểu dáng quần jean nam ống suông cao cấp đẹp', 'THÔNG TIN SẢN PHẨM  Quần jean nam\r\n✔️Chất liệu: 98% cotton, 2% spandex.\r\n\r\n✔️Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.\r\n\r\n✔️Hướng dẫn sử dụng: quần baggy nam\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp.\r\n\r\n- Hạn chế sử dụng máy sấy.\r\n ✔️ Sản xuất: Hàng Việt Nam Xuất Khẩu\r\n ✔️ Màu sắc, mẫu mã giống hình 100%\r\n ✔️ Chấp nhận đổi trả nếu có bất cứ vấn đề nào liên quan đến chất lượng', 'public/img/products/jean_nam.png', 79000.00, 4, '2024-11-08 03:09:24', '2024-11-08 03:09:24'),
(6, 'Quần jean baggy nam ống rộng suông cao cấp chất bò đẹp 007', 'THÔNG TIN SẢN PHẨM  Quần jean nam\r\n✔️Chất liệu: 98% cotton, 2% spandex.\r\n\r\n✔️Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.\r\n\r\n✔️Hướng dẫn sử dụng: quần baggy nam\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp.\r\n\r\n- Hạn chế sử dụng máy sấy.\r\n ✔️ Sản xuất: Hàng Việt Nam Xuất Khẩu\r\n ✔️ Màu sắc, mẫu mã giống hình 100%\r\n ✔️ Chấp nhận đổi trả nếu có bất cứ vấn đề nào liên quan đến chất lượng', 'public/img/products/24526a479ebbc5730bf0472e5d355170.png', 129000.00, 4, '2024-11-08 03:10:03', '2024-11-08 03:10:03'),
(7, 'Quần sọt nam, quần lửng nam, quần short jean nam màu trắng rách cao cấp 2021 QJNA0002', 'THÔNG TIN CHI TIẾT SẢN PHẨM QUẦN JEAN NAM\r\nQuần sọt nam, quần lửng nam, quần short jean nam màu trắng rách cao cấp 2021 QJNA0002\r\n + Chất liệu vải jean demin cao cấp\r\n + Được thiết kế phù hợp với độ tuổi từ 18 đến 30 tuổi \r\n+ Quần vải jean mềm mại thấm hút mồ hôi tốt, thoải mái khi mặc \r\n+ Quần có thể kết hợp với nhiều loại trang phục để mặc ở nhà hay đi chơi, du lịch,…\r\nCÁCH SỦ DỤNG VÀ BẢO QUẢN QUẦN JEAN NAM ,\r\n+ Giặt bằng máy phơi khô dưới ảnh nắng trực tiếp\r\n + Bảo quản trong nơi khô ráo thoáng mát , tránh nơi ẩm ướt\r\n CÁCH CHỌN SIZE TỪ 28-32 CỦA QUẦN JEAN NAM \r\n+ SIZE 28: cao dưới 1m65, nặng 45 - 50Kg, vòng bụng 79cm \r\n+ SIZE 29: cao dưới 1m68, nặng 50 - 55Kg, vòng bụng 81cm \r\n+ SIZE 30: cao dưới 1m7, nặng 55 - 59Kg, vòng bụng 83cm \r\n+ SIZE 31: cao dưới 1m73, nặng 60 - 64Kg, vòng bụng 85cm \r\n+ SIZE 32: cao dưới 1m78, nặng 65 - 70Kg, vòng bụng 86cm\r\n SHOP…  XIN CAM KẾT \r\n+ Sản phẩm chất lượng tốt, đúng như mô tả \r\n+ Giao hàng ngay khi nhận được đơn\r\n + Đổi, trả với những sản phẩm lỗi do nhà sản xuất \r\n+ Lưu ý: Không nhận đổi trả với lí do không vừa ý ', 'public/img/products/7cf42a990082379716da4356e59ed97c.png', 100000.00, 5, '2024-11-08 03:10:40', '2024-11-08 03:10:40'),
(8, 'Quần đùi thể thao nam GYMKAI, quần short 2 lớp, lót legging lửng, thoải mái vận động', 'QUẦN ĐÙI THỂ THAO NAM GYMKAI, QUẦN SHORT 2 LỚP, LÓT LEGGING LỬNG, THOẢI MÁI VẬN ĐỘNG\r\n- Quần với thiết kế 2 lớp chuyên dụng với lớp trong là quần legging lửng may liền với quần tập gym chắc chắn bên ngoài.\r\n- Chất liệu:\r\n+ Vải ngoài: 100% Polyester Microfiber\r\n+ Vải trong : 95% Polyester 5% Spandex\r\n- Thiết kế 2 lớp chuyên dụng phù hợp với đặc tính vận động khi tập luyện hoặc tham gia hoạt động thể thao.\r\n- Lớp trong với chất liệu thun lạnh co giãn 4 chiều hỗ trợ bó cơ khi tập luyện và vận động, lớp vải ngoài thông hơi thấm hút mồ hôi cực tốt.\r\n- Quần ngoài form ngắn trên gối mang đến vẻ ngoài mạnh mẽ, nam tính khi vận động\r\n- Chất liệu quần đạt tiêu chuẩn xuất khẩu không xù lông, không bai nhão, không phai màu\r\n- Quần có 2 màu : Đen và Xám \r\n- Quần short thể thao nam 2 lớp cao cấp được thiết kế theo đúng form chuẩn của nam giới Việt Nam.\r\n- Thích hợp chơi thể thao, chạy bộ, tập gym, chơi bóng rổ, bóng chuyền, mặc nhà, đi chơi dạo phố,...\r\n- Nơi sản xuất : được thiết kế và may sản xuất trực tiếp tại Việt Nam.', 'public/img/products/d80c30fde4bfcc552714f0fcd95ff469.png', 208000.00, 5, '2024-11-08 03:11:50', '2024-11-08 03:11:50'),
(9, 'Quần lửng nam Fasvin T21438.HN vải gió co giãn mềm mát tiện dụng mặc nhà và thể thao', '=>  Các shop có thương hiệu đều luôn giữ gìn uy tín của mình. Đến với Fasvin bạn cũng sẽ được phục vụ tận tình chu đáo.\r\n\r\n=>  Quần lửng nam Fasvin T21438.HN được chế tạo tại nhà máy của FASVIN với quy trình thu hóa nghiệm ngặt. Các sản phẩm đều được những người thợ lâu năm trong nghề làm ra một cách cẩn thận và chắc chắn. Quần rất đa dụng có thể mặc đi chơi, thể thao hay mặc nhà. \r\n\r\n* KIỂU DÁNG : Quần lửng nam thể thao Fasvin có thiết kế dáng lửng dài đến đầu gối, dài hơn các mẫu quần short thường khoảng 5 cm tạo cảm giác  khoẻ khoắn, năng động nhưng không kém phần lịch sự. Quần có thiết kế đơn giản phù hợp với nhiều lứa tuổi từ thanh niên đến trung niên. Quần lửng thể thao Fasvin được may vừa vặn đứng dáng nên tiện dụng  đi chơi  thể thao, dạo phố hay mặc nhà.\r\n\r\n*CHẤT  LIỆU : Vải gió chun thể thao co giãn 4 chiều (95% Polyester + 5% spandex) thoải mái mềm mát. Đây là loại vải dệt thoi chứ không phải dệt kim nên đứng dáng và lịch sự có thể đi chơi hay mặc nhà tiếp khách. Chất vải thoáng mát và bền chắc thích hợp các hoạt động mạnh mẽ. \r\n\r\n* GIÁ CẢ : Chúng tôi luôn không ngừng cải tiến để có thể tạo ra những sản phẩm có chất lượng tốt với giá cả phải chăng nhất. Hơn nữa luôn có các chương trình khuyến mại dành cho quý khách dùng thử và trải nghiệm sản phẩm mới.\r\n\r\n* CHẤT LƯỢNG: Quần lửng nam đã được kiểm định chất lượng bởi cục tiêu chuẩn chất lượng và có tem hợp quy được dán trên thẻ bài.\r\n\r\n* BẢO QUẢN VÀ SỬ DỤNG : Sản phẩm có thể giặt máy, nhanh khô và không bị bạc màu. Đặc biệt nếu bạn là người bận rộn, bạn không cần là lượt trước khi mặc vì vải đã được tích hợp công nghệ chống nhăn, chống nhàu.\r\n', 'public/img/products/5472f307a0db884dadb06f5d9010d5aa.png', 175000.00, 5, '2024-11-08 03:12:50', '2024-11-08 03:12:50'),
(10, 'Quần Ngố Kaki Nam Túi Hộp Lửng GENVIET Basic Đơn Giản T1303K1026', 'CHÍNH SÁCH MUA HÀNG: \r\n+ Hỗ trợ đổi hàng với những sản phẩm bị lỗi do nhà sản xuất, hoặc những sản phẩm giảm giá dưới 50% mà không vừa size số.\r\n+ Inbox trực tiếp để GENVIET tư vấn size và giải đáp các vấn đề bạn đang quan tâm nhé.\r\n+ Bạn nhận được sản phẩm, vui lòng đánh giá giúp GENVIET nha.\r\n- Chỉ áp dụng đổi với sản phẩm mua nguyên giá.\r\n- Không áp dụng đổi đối với hàng khuyến mại, hàng giảm giá hoặc mua trong chương trình ưu đãi khác.\r\n- Vì lý do sức khỏe, không đổi trả quần áo lót, phụ kiện.\r\n- Sản phẩm chưa qua sử dụng, còn nguyên tem mác, thẻ bài và kèm hóa đơn hoặc biên lai vận chuyển.\r\n------------------------------------------------------\r\nHƯỚNG DẪN GIẶT ỦI\r\n- Không giặt tẩy bằng các chất tẩy rửa mạnh\r\n- Không ngâm nước quá lâu\r\n- Không nên ngâm và giặt chung với sản phẩm khác\r\n- Cách giặt đồ: Lấy 1-2 giọt sữa tắm, dầu gội đầu… đánh bông lên, cho sản phẩm vào -bóp nhẹ, rũ qua sau đó rũ lại bằng nước sạch rồi phơi lên luôn, tránh ngâm lâu.\r\n- Với những sản phẩm chất liệu ren, có phụ kiện không nên giặt sản phẩm cùng với các sản phẩm cầu kì khác như: Có móc, có khóa cứng, có nhiều họa tiết …. sẽ làm ảnh hưởng đến chất liệu sản phẩm. (Sản phẩm ren và lưới hoặc vải mềm mỏng nên giặt bằng tay, nếu giặt máy vui lòng bỏ vào túi lưới để tránh làm hư sợi vải)\r\n- Đối với sản phẩm có chất co giãn mạnh, khi phơi nên phơi ngang, lộn mặt trái sản phẩm khi phơi\r\n- Nên phơi quần áo trong bóng mát, không nên phơi dưới ánh nắng gắt quá lâu tránh mất màu, giòn và rút sợi vải\r\n- Ủi sản phẩm ở nhiệt độ vừa phải.\r\n------------------------------------------------------\r\nMÔ TẢ SẢN PHẨM\r\n T1303K1026 - Quần Ngố GENVIET Kaki Nam Túi Hộp\r\n- Chất liệu: Kaki \r\n-Màu Sắc: hồng đất, xanh ghi, xanh rêu\r\n-Kích cỡ: 27 đến 34\r\nSản phẩm được thiết kế độc quyền bởi thương hiệu thời trang GENVIET  với hệ thống 80 showrooms trên toàn quốc với thương hiệu uy tín, sản phẩm chất lượng mà mang lại vẻ đẹp tuyệt đối cho bạn. GENVIET tin rằng sẽ đem lại sự trải nghiệm tuyệt vời cho các bạn khi sử dụng sản phẩm và dịch vụ của GENVIET\r\n', 'public/img/products/fcdf27ac2a8dc95fcd016f66901213d2.png', 398000.00, 5, '2024-11-08 03:13:29', '2024-11-08 03:13:29'),
(11, 'Váy trắng tiểu thư trễ vai tay bồng dáng dài hai lớp, đầm trắng dự tiệc bánh bèo', 'Váy trễ vai trắng tay bồng dáng dài, đầm trễ vai tiểu thư dự tiệc màu trắng điệu đà\r\n\r\n Màu trắng\r\n\r\nFree sz < 63kg \r\n\r\n\r\n❤️❤️ vblà xưởng may với niềm đam mê mãnh liệt về thiết kế, và phương châm sản phẩm mang giá trị sử dụng cao cho khách hàng , thảo nguyên cũng luôn hướng tới giá trị cốt lõi và bền vững dựa trên cơ sở lợi ích cho khách hàng luôn là hàng đầu .. ! Và rất mong được sự ủng hộ và đặt niềm tin bên shop.\r\n\r\nTrân trọng và cảm ơn rất nhiều !! Các khách hàng yêu quý của shop 😘\r\n', 'public/img/products/4cb7898954c4dc291ef1ad30d820225e.png', 68000.00, 6, '2024-11-08 03:14:31', '2024-11-08 03:14:31'),
(12, '[Mã BMLTA50 giảm đến 50K đơn 99K] Áo thun ba lỗ nam thể thao AJEKA, thun lạnh co giãn 4 chiều', 'Sản phẩm áo thun nam ba lỗ mang đến cho người mặc cảm giác năng động khỏe khoắn,áo phông thun lạnh 3 lỗ được may từ vải thun lạnh cao cấp mềm mịn, Áo thun nam ba lỗ có đủ bảng màu cực hot, giúp bạn thêm nhiều sự lựa chọn  \r\n\r\n. \r\n\r\n- Chất liệu thun lạnh cao cấp, co giãn 4 chiều  thấm hút mồ hôi tốt, phù hợp các hoạt động thể thao, Gym, yoga, đá bóng, \r\n\r\n- Tỷ mỉ đến từng đường chỉ may, logo 3D nổi chắc chắn cực sang.\r\n\r\n- Bảng màu cực cá tính, bền màu,  chống nhăn,thấm hút cực tốt.\r\n\r\n- Full size từ M – L – XL – XXL-3XL.. chuẩn size theo form người Việt\r\n\r\n\r\n\r\n*CAM KẾT :\r\n\r\n-  Bảo hành 30 ngày  ( 1 đổi 1)  với đường may, túi khóa và độ bền của vải\r\n\r\n-  Sẵn sàng nhận lại hàng nếu Quý khách không hài lòng và hoàn lại tiền 100%\r\n\r\n-  Cam kết chất lượng và mẫu mã sản phẩm giống với hình ảnh\r\n\r\n-  Hoàn tiền hoặc đổi hàng ngay lập tức nếu sản phẩm bị lỗi do sơ suất của nhà sản xuất \r\n\r\n-  Cam kết được đổi hàng trong vòng 30 ngày. (Sản phẩm còn nguyên tem mác và chưa sử dụng )\r\n\r\n 🚛 FREESHIP EXTRA ĐƠN TỪ 50K.\r\n\r\nHướng dẫn chọn size \r\n\r\nSize M : 51-60kg - Cao < 1m65\r\n\r\nSize L : 61-70 kg - 1m66<Cao< 1m70 \r\n\r\nSize XL : 71- 80kg - 1m74<Cao< 1m75\r\n\r\nSize 2XL : 81-90 kg - Cao> 1m7\r\n\r\nSize 3XL : 91-98 kg - Cao >1m7', 'public/img/products/48a84ebf054c419e102d419fda034dd4.png', 109000.00, 7, '2024-11-08 03:15:23', '2024-11-08 03:15:23'),
(13, 'Áo croptop nữ sát nách ba lỗ thun không tay kiểu ôm body tank top vải cotton co giãn tốt', '👉 👉 THÔNG TIN SẢN PHẨM: \r\nÁo ba lỗ croptop nữ  dáng áo 3 lỗ ôm chất liệu thun cotton 100% co dãn mạnh.\r\n-------------------------\r\n-Chất liệu : Thun cotton co giãn 4 chiều loại cao cấp dày dặn nhất, rất mát ạ.\r\n* Lưu ý: \r\n+Tuỳ đợt hàng độ dày mỏng của các màu sẽ khác nhau ( <10% ) vẫn đảm bảo chất lượng cao cấp nhất ạ.\r\n+Chất liệu  cotton nên sẽ có sợi bông ạ.\r\n\r\n-Màu sắc : Trắng - Đen - Vàng Đậm - Muối Tiêu - Xanh Ngọc - Đỏ Cam - Nâu - Đỏ Đô - Màu Ngẫu Nhiên( Màu sắc có thể chênh lệch so với thực tế 5% do ánh sáng và các thiết bị hiển thị màu khác nhau )\r\n\r\n-Size : Freesize 40-55kg\r\n\r\n-Kiểu dáng : Dáng áo ba lỗ croptop ôm, chất liệu 100% cotton co dãn 4 chiều cực tốt, dày dặn và mát.\r\nCó thể phối với quần short ngắn, đóng thùng, áo Cardigan, Blazer,... rất năng động và cá tính ạ\r\n--------------------------\r\n\r\n* Lưu ý: \r\n+Thông số áo là thành phẩm, chất co dãn cực tốt nên dễ fix vừa dáng.\r\n+Áo dáng ôm croptop, các chị em thích mặc ôm thì chọn size thông số vừa người nhé ạ.\r\n----------------------------\r\nChỉ có tại ao _thun_vdr: \r\n\r\n+ Cam kết chịu trách nhiệm với mỗi sản phẩm bán ra, Miễn phí đổi trả hàng lỗi trong thời gian sớm nhất ( Hy hữu thôi chứ  ao _thun_vdr   kiểm hàng kĩ lắm ahihi )\r\n\r\n Lưu ý:  Hàng đổi phải còn nguyên tag, mạc, bao bì; chưa có dấu hiệu sử dụng và lỗi do tác động bên ngoài.\r\n----------------------------\r\n🔴 Cam kết hàng Chất lượng do nhà  ao _thun_vdr  tự sản xuất nên chị em yên tâm về form dáng, đường may và chất liệu nhé.\r\n🔴 Cam kết hình chụp thật, hàng đẹp, Shop sẽ nhận lại hàng và hoàn tiền nếu hàng xấu và không giống hình ạ.\r\n#aobalo #aohaiday #aocoban #aocaocap #kamong #ao #3 #lo #nu #2 #ao3lo #satnach #aosatnach #co #gian #om #ao3lonu #100% #cotton #ao3lotrang #ao3loden #ao #ba #lo #aocroptop#aothun #aothunnu #aothundep #aothunnure\r\n#aothunteen #aothunteensi #aothuncroptop \r\n#aothundinhkimsa #aothungiare', 'public/img/products/c3182e84bfa137bcecbfb1bb51959fb5.png', 110000.00, 8, '2024-11-08 03:16:01', '2024-11-08 03:16:01'),
(14, '[Xả Kho] Áo Ba Lỗ Nam Co Giãn, Thấm Hút Mồ Hôi hàng VNXK(Hà Nội)', '🎁 Áo ba lỗ nam, Áo Lót Nam loại mỏng, chất liệu cotton mỏng\r\n👉👉 MỀM MẠI – KHÔ THOÁNG – MẶC NHƯ KHÔNG MẶC! ----- \r\n➦ Chất vải sợi tự nhiên, rất mềm mại. Thấm hút mồ hôi, thoát hơi và kháng khuẩn rất tốt.\r\n ➦ Kiểu dáng thiết kế trẻ trung, mềm mại\r\n ➦ Rất bền và không phai màu, không bai nhão trong thời dài sử dụng.\r\ni ➦ màu trắng đơn giản, sang trọng\r\n ➦ Mặc thoáng mát, thoải mái không gò bó\r\n➦ Không bai dãn, sổ lông trong quá trình sử dụng \r\n➦ Sản phẩm hot và được ưa chuộng nhất năm\r\n➦  Có các size M (50 - 62KG) , L(60 - 72 KG), 2L(70 - 82KG)\r\n ➦ Chính sách giá ưu đãi tốt nhất thị trường\r\n ➦Áo được thiết kế đơn giản, dễ mặc cho nam giới phong cách năng động và khỏe khoắn hơn.\r\n 👉👉 Mua ngay Áo ba lỗ nam Hà Nội ngay hôm nay để nhận ƯU ĐÃI KHỦNG!!!', 'public/img/products/f4a695003d10825a8ee6337a278600fd.png', 51000.00, 7, '2024-11-08 03:16:43', '2024-11-08 03:16:43'),
(15, 'Quần Jeans Đen Bạc Dáng Rộng Cạp Cao Ống Rộng 2 Túi Vuông Cá Tính Tôn Dáng', 'QUẦN TÚI VUÔNG 301\r\n___\r\n     Chất liệu: Bò / Jeans\r\nBẢNG SIZE THAM KHẢO\r\nXS: Eo 64cm Mông 93cm Dài quần 101cm Đùi 54cm Chu vi gấu quần 42cm\r\nS:   Eo 68cm Mông 96cm Dài quần 102cm Đùi 56cm Chu vi gấu quần 43cm\r\nM:  Eo 72cm Mông 100cm Dài quần 102cm Đùi 58cm Chu vi gấu quần 43.5cm\r\nL:   Eo 76cm Mông 104cm Dài quần 103cm Đùi 60cm Chu vi gấu quần 44cm\r\nXL: Eo 80cm Mông 108cm Dài quần 104cm Đùi 62cm  Chu vi gấu quần 45cm\r\n2XL: Eo 84cm Mông 112cm Dài quần 105cm Đùi 65cm Chu vi gấu quần 45cm\r\n\r\n💓Kích thước trên mô tả được đô thủ công, vì vậy có thể bị sai lệch 1-2cm\r\nINBOX để được hỗ trợ tư vấn size\r\n\r\nCHÍNH SÁCH ĐỔI TRẢ\r\n- Đối với trường hợp xảy ra nhầm lẫn trong đơn hàng hoặc có lỗi phía nhà sản xuất, bạn vui lòng liên hệ cho shop kèm hình ảnh và video bóc hàng để được hỗ trợ đổi hàng miễn phí nhanh chóng.\r\n- Lưu ý: Sản phẩm còn nguyên tag và không có tình trạng đã qua sử dụng.\r\n_________\r\n💓Cam kết nguồn gốc sản phẩm 100% là Hàng QCCC, được nhà Chanh đặt trực tiếp không qua trung gian nên giá cả rất hợp lý\r\n💓Những sản phẩm đăng bán là những sản phẩm được nhà Chanh tuyển chọn qua chất lượng vải, đường may, kiểu dáng nên các bạn hoàn toàn yên tâm khi mua hàng tại nhà Chanh', 'public/img/products/1c686be9cea18b4c687d4199c8a3dcf6.png', 51000.00, 4, '2024-11-08 03:17:17', '2024-11-08 03:17:17'),
(16, 'Quần Jeans Đen Bạc Dáng Rộng Cạp Cao Ống Rộng 2 Túi Vuông Cá Tính Tôn Dáng', 'QUẦN TÚI VUÔNG 301\n___\n     Chất liệu: Bò / Jeans\nBẢNG SIZE THAM KHẢO\nXS: Eo 64cm Mông 93cm Dài quần 101cm Đùi 54cm Chu vi gấu quần 42cm\nS:   Eo 68cm Mông 96cm Dài quần 102cm Đùi 56cm Chu vi gấu quần 43cm\nM:  Eo 72cm Mông 100cm Dài quần 102cm Đùi 58cm Chu vi gấu quần 43.5cm\nL:   Eo 76cm Mông 104cm Dài quần 103cm Đùi 60cm Chu vi gấu quần 44cm\nXL: Eo 80cm Mông 108cm Dài quần 104cm Đùi 62cm  Chu vi gấu quần 45cm\n2XL: Eo 84cm Mông 112cm Dài quần 105cm Đùi 65cm Chu vi gấu quần 45cm\n\n💓Kích thước trên mô tả được đô thủ công, vì vậy có thể bị sai lệch 1-2cm\nINBOX để được hỗ trợ tư vấn size\n\nCHÍNH SÁCH ĐỔI TRẢ\n- Đối với trường hợp xảy ra nhầm lẫn trong đơn hàng hoặc có lỗi phía nhà sản xuất, bạn vui lòng liên hệ cho shop kèm hình ảnh và video bóc hàng để được hỗ trợ đổi hàng miễn phí nhanh chóng.\n- Lưu ý: Sản phẩm còn nguyên tag và không có tình trạng đã qua sử dụng.\n_________\n💓Cam kết nguồn gốc sản phẩm 100% là Hàng QCCC, được nhà Chanh đặt trực tiếp không qua trung gian nên giá cả rất hợp lý\n💓Những sản phẩm đăng bán là những sản phẩm được nhà Chanh tuyển chọn qua chất lượng vải, đường may, kiểu dáng nên các bạn hoàn toàn yên tâm khi mua hàng tại nhà Chanh', 'public/img/products/1c686be9cea18b4c687d4199c8a3dcf6.png', 205000.00, 4, '2024-11-08 03:17:55', '2024-11-08 03:20:17'),
(17, 'Áo choàng bông thú lông mịn mùa đông', ' Tăm tia bao lâu nay cúi cùng shop cũng nhả sêu cho em gom này~~~ đông mà lười là toàn chùm em nó thuii ấm dã man mà xinh xỉu áaaa\r\n\r\nĐi lang thang trong nhà ko sợ lạnh, mà có chẳng may phải chạy ra ngoài thì vẫn ấm áp ạ.\r\nNhìn gấu cưng dễ sợ lunnn á 😚😚 \r\nHeheee sắm 1 e để đi đầu trend nàoooo \r\n\r\n🐶 5 mẫu em đánh số\r\nSize S-M-L-XL\r\nS: 40-47kg\r\nM: 47-54kg\r\nL: 54-60kg\r\nXL: 60-67kg', 'public/img/products/sg-11134201-22100-ofm9emsngjiv6c.png', 240000.00, 8, '2024-11-08 03:18:38', '2024-11-08 03:18:38'),
(18, 'Áo len nam cổ lọ dài tay Gman vải len tăm công nghệ dệt kim cao cấp phong cách hàn quốc', '  1. THÔNG TIN SẢN PHẨM: Áo Len Nam cổ lọ dài tay - thời trang nam\r\n✔️ Áo len nam cổ lọ là món phụ kiện thời trang đơn giản nhưng không kém phần đẹp, thời trang. Các anh có thể mặc đi làm, đi chơi hay đi dự tiệc lại rất dễ phối đồ dù là với quần vải, quần jean, quần kaki hay với các sản phẩm áo măng tô, áo vest.\r\n\r\n✔️ Chất liệu: vải len cotton thiên nhiên mềm mại có bề mặt mềm mịn, thoát mồ hôi giữ ấm, nhanh tạo cảm giác vô cùng thoải mái cho người mặc và đặc biệt là không bị Xù Lông, Không phai màu, Giặt máy tốt. \r\n\r\n✔️ Màu sắc áo len cổ lọ nam : 9 màu\r\nĐEN - TRẮNG - XÁM - GHI - NÂU ĐẤT - XANH THAN - RÊU - ĐỎ ĐÔ - BE \r\n\r\n✔️ Size áo len tay dài : L, XL\r\n\r\n    2. HƯỚNG DẪN CHỌN SIZE ÁO LEN NAM\r\n📍 Size L: Cân nặng 45-65kg, cao dưới 1m70\r\n📍 Size XL: Cân nặng 65-78kg, cao dưới 1m80.\r\n(Nếu bạn gặp khó khăn khi chọn size, vui lòng INBOX, cung cấp chiều cao, cân nặng để SHOP TƯ VẤN SIZE)\r\n\r\n   3.  Mẹo Nhỏ Giúp Bạn Bảo Quản Quần áo nam : \r\n💌  Đối với sản phẩm quần áo mới mua về, nên giặt tay lần đầu tiên để tránh phai màu sang quần áo khác\r\n💌 Khi giặt nên lộn mặt trái ra để đảm bảo độ bền \r\n💌 Sản phẩm phù hợp cho giặt máy (có túi giặt)/giặt tay\r\n💌 Không giặt chung đồ Trắng và đồ Tối màu \r\n\r\n    4. CHÍNH SÁCH\r\n✔️ Cam kết chất lượng và loại mã sản phẩm giống với hình ảnh.\r\n✔️ Trả hàng hoàn tiền trong 3 ngày nếu như sản phẩm không đúng mô tả\r\n✔️ Shop sẽ đổi trả trong các trường hợp: shop giao nhầm size, nhầm màu, nhầm sản phẩm khác, thiếu hàng, áo bị lỗi và các lỗi khác của nhà sản xuất.\r\n✔️ Trong các trường hợp: khách không ưng, mặc không hợp, khách chọn nhầm sản phẩm,... quý khách vui lòng  INBOX để shop hướng dẫn đổi size phù hợp\r\n\r\n    5. LƯU Ý\r\n🍀 Quay video khi mở / bóc / khui sản phẩm để được giải quyết nếu có sự cố\r\n🍀 Màu sắc của sản phẩm thực tế có thể đậm, nhạt hơn ảnh mô tả do ánh sáng và màn hình thiết bị khác nhau.\r\n🍀 Kích thước sản phẩm dung sai cho phép ±2cm.', 'public/img/products/4e738af4c439269f606dc20f38bd69f8.png', 220000.00, 7, '2024-11-08 03:19:22', '2024-11-08 03:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('visible','hidden') DEFAULT 'visible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `avatar_url` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` enum('active','banned','deleted') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

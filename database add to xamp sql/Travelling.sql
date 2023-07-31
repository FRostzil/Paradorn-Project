-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 03:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"relation_lines\":\"true\",\"angular_direct\":\"angular\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

--
-- Dumping data for table `pma__navigationhiding`
--

INSERT INTO `pma__navigationhiding` (`username`, `item_name`, `item_type`, `db_name`, `table_name`) VALUES
('root', 'banner', 'table', 'travelling', ''),
('root', 'tb_travelling_image', 'table', 'travelling', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"travelling\",\"table\":\"restuarant\"},{\"db\":\"travelling\",\"table\":\"product\"},{\"db\":\"travelling\",\"table\":\"tb_travelling\"},{\"db\":\"travelling\",\"table\":\"hotel\"},{\"db\":\"travelling\",\"table\":\"banner\"},{\"db\":\"travelling\",\"table\":\"memberuser\"},{\"db\":\"travelling\",\"table\":\"restuarant_gallery\"},{\"db\":\"travelling\",\"table\":\"contract\"},{\"db\":\"travelling\",\"table\":\"adminuser\"},{\"db\":\"travelling\",\"table\":\"tb_travelling_type\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-07-31 13:28:53', '{\"Console\\/Mode\":\"collapse\",\"DefaultConnectionCollation\":\"utf8_general_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `travelling`
--
CREATE DATABASE IF NOT EXISTS `travelling` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `travelling`;

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `admin_id` int(11) NOT NULL,
  `admin_firstname` varchar(200) NOT NULL,
  `admin_lastname` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_phone` varchar(100) NOT NULL,
  `admin_user` varchar(200) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`admin_id`, `admin_firstname`, `admin_lastname`, `admin_email`, `admin_phone`, `admin_user`, `admin_pass`, `created_date`, `admin_image`) VALUES
(1, 'ภราดร', 'สายพิรุณ', 'kanun@live.rmutl.ac.th', '11111111', 'admin', '1111', '2023-04-22 08:56:58', '168226352664293252030-6.jpg'),
(7, 'จิรศักดิ์', 'จันทร์ฝอย', 'jirasak@gmail.com', '111111', 'TEST', '1234', '2023-04-23 16:48:59', '16835788511232323.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(3) NOT NULL,
  `banner_status` int(3) NOT NULL,
  `banner_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_status`, `banner_image`) VALUES
(0, 0, 'F:/xampp/htdocs/Travelling/img/banner/bn_641984df31293.png');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(4) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `firstname`, `lastname`, `email`, `phone`) VALUES
(1, 'ภราดร', 'สายพิรุณ', 'paradorn@gmail.com', '1234567890'),
(2, 'จิรศักดิ์', 'จันทร์ฝอย', 'jirasak@gmail.com', '1111111111');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(10) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `hotel_details` text NOT NULL,
  `hotel_Price` varchar(200) NOT NULL,
  `hotel_Phone` varchar(200) NOT NULL,
  `hotel_address` varchar(200) NOT NULL,
  `hotel_image` varchar(200) NOT NULL,
  `hotel_user` varchar(200) NOT NULL,
  `HLAT` varchar(100) NOT NULL,
  `HLNG` varchar(100) NOT NULL,
  `type_hotel_id` int(10) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `hotel_details`, `hotel_Price`, `hotel_Phone`, `hotel_address`, `hotel_image`, `hotel_user`, `HLAT`, `HLNG`, `type_hotel_id`, `view`) VALUES
(1, 'เคียงตะวันรีสอร์ท', 'เคียงตะวัน รีสอร์ท แม่ระมาด (Kiangtawan Resort Mae Ramat) ตั้งอยู่ใน อ.แม่ระมาด จ.ตาก ห่างจาก โรงพยาบาลแม่ระมาด 800 เมตร ใกล้ร้านค้า ร้านอาหร ติดถนนใหญ่ทางหลวง 105เคียงตะวัน รีสอร์ท แม่ระมาด มีบริการทั้งหมด 15 ห้องนอน แต่ละห้องเป็นห้อง Double, Twin and Triple Room พร้อมเครื่องปรับอากาศ ห้องน้ำส่วนตัว พร้อมน้ำอุ่น\r\nห้องพักเป็นห้องปรับอากาศ พร้อมอินเทอร์เน็ตไร้สาย (WiFi) ฟรี มีทีวีจอแบน ตู้เย็นและน้ำดื่่ม 2 ขวดรีสอร์ทแห่งนี้ให้บริการ แผนกต้อนรับ ห้องอาหาร ที่จอดรถ สวน ฟรีสัญญาณWifi ทั่วพื้นที่\r\nราคาของที่พัก\r\nDouble Bed Room     ราคา 650 ต่อคืน\r\nTwin Bed Room         ราคา 690 ต่อคืน\r\nSuperior Room	  ราคา 950 ต่อคืน\r\nTriple Room		  ราคา 1,100 ต่อคืน\r\nBan Song Thai		  ราคา 1,190 ต่อคืน\r\n', '650', '098-764-9768', '427/2 แม่ระมาด ตาก 63140', '16832798653.jpg', 'member15', '16.98816493699621', '98.52631333373503', 1, 102),
(2, 'อิงดอยรีสอร์ท', 'อิงดอย รีสอร์ท ทางผ่านแม่สอด แม่ระมาด ท่าสองยาง แม่สะเรียง\r\nแวะพักที่ อิงดอย รีสอร์ท แม่ระมาด ได้ บรรยากาศดี ชมวิวพระอาทิตย์ตกสวยๆ ราคาห้องอยู่ที่ 390 ต่อคืนสิ่งอำนวยความสะดวกครบครัน ทีวี WiFi ตู้เย็น ที่จอดรถเครื่องปรับอากาศ ลานปิ้งย่าง เครื่องทำน้ำอุ่น กางเต็นท์ แคมป์ปิ้ง\r\n', '390', '0956389718', 'หมู่ที่ 4 ตำบลแม่ระมาด', '16832800091.png', 'member16', '16.99331807795551', '98.52189552746418', 1, 35),
(3, 'บ้านพักสายลมจอยรีสอร์ท', 'บ้านพักสายลมจอย รีสอร์ท มีห้องพักให้เลือกมากมาย พักกินลมชมวิวธรรมชาติสวยๆได้ที่นี่ บริการที่จอกรถเครื่องซักผ้าหยอดเหรียญอัตโนมัติ นำอุ่น ฟรี WIFI\r\nราคาห้องพัก\r\nห้องพัดลม เตียงเดี่ยว    ราคา  350   บาท\r\nห้องแอร์    เตียงเดี่ยว    ราคา  450   บาท\r\nห้องแอร์    เตียงคู่         ราคา   500   บาท\r\n', '350', '061 275 3277', 'ม.4 ต.แม่ระมาด อ.แม่ระมาด จ.ตาก', '16832803741.jpg', 'member17', '16.993689087785683', '98.52271315357189', 1, 15),
(4, 'วาสนาชัยรีสอร์ท', 'มีบริการห้องพัก รายวัน 350 บาท สิ่งอำนวยความสะดวกฟรี wifi แอร์ พัดลม ตู้เย็น เครื่องทำน้ำอุ่น', '350', '080 014 6765', '115/20หมู่ 4 ต.แม่ระมาด อ.แม่ระมาด จ.ตาก', '16832805241.jpg', 'member18', '16.964794320671945', '98.523113408587', 1, 0),
(5, 'สวนป้าวรีสอร์ท', 'สวนป้าวรีสอร์ท บริการห้องพักรายวันเป็นอีกที่พักที่สวยงาม มีหลายห้องให้เลือก มีบริการเครื่องทำน้ำอุ่น แอร์ และ wifi ฟรี', '450', '087 209 0459', '297/1 หมู่1 เเม่ระมาด จ.ตาก 63140', '16832806681.jpg', 'member19', '16.968722348380695', '98.5363636036946', 1, 1),
(6, 'เดอะเนสท์รีสอร์ท', 'เดอะเนสท์ รีสอร์ท แม่ระมาด (The Nest Resort Mae Ramat) เป็นที่พักสไตล์ลอฟ์ท รายวันราคาถูก ในเขต อ.แม่ระมาด จ.ตาก ห่างจากที่ทำการอำเภอแม่ระมาด เพียง 2 กม. บรรยากาศรายล้อมด้วยธรรมชาติ ร่มรื่น น่าพักผ่อน เดินทางเข้า-ออก สะดวกใกล้กับทางหลวงหมายเลข 105 ทีพักราคาถูกแห่งนี้ มี 7 หลัง เป็นเตียงเดียว และเตียงคู่ ทุกห้องได้ตกแต่งได้อย่างลงตัว สิ่งอำนวยความสะดวกในห้องพัก ได้แก่ เครื่ องปรับอากาศ น้ำดื่ม 2 ขวด และเครื่องทำน้ำอุ่น สิ่งอำนวยความสะดวกประกอบด้วย บริการ ที่จอดรถ สวนหย่อม Wi-Fi ฟรีในทุกพื้นที่ และบริการอื่นๆจากที่พัก', '600', '087-838-1248', 'ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', '11.jpeg', 'member20', '16.993901909439185', '98.52413106400618', 1, 3),
(7, 'ชมจันทร์รีสอร์ท', 'บ้านพักบ้านต้นผึ้ง ต.แม่ระมาด อ.แม่ระมาด จ.ตาก\r\n- บ้านรวงทอง บ้านพัก 1 ห้องนอน 1 ห้องน้ำ 1 ห้องนั่งเล่น พักได้ 2 คน เสริมได้ 1 คน (เด็กอายุไม่เกิน 10 ขวบ พักฟรี 1 คน) อาทิตย์-พฤหัส ราคาหลังละ 800 บาท/คืน ศุกร์-เสาร์ ราคาหลังละ 1,000 บาท/คืน (พร้อมอาหารเช้าสำหรับ 2 ท่าน)\r\n** ที่นอนเสริม คิดเพิ่มราคา 200 บาท/ ท่าน\r\n- บ้านรวงเงิน บ้านพัก 1 ห้องนอน 1 ห้องน้ำ พักได้ 2 คน เสริมได้ 1 คน (เด็กอายุไม่เกิน 10 ขวบ พักฟรี 1 คน) \r\nอาทิตย์-พฤหัส ราคาหลังละ 600 บาท/คืน ศุกร์-เสาร์ ราคาหลังละ 800 บาท/คืน (พร้อมอาหารเช้าสำหรับ 2 ท่าน ) \r\n** ที่นอนเสริม คิดเพิ่มราคา 200 บาท/ ท่าน\r\n- ให้บริการจุด กางเต็นท์ (เต็นท์ ลูกค้าเตรียมมาเอง) ค่าบริการ 50 บาท/คน\r\n', '800', '0641959971', 'บ้านต้นผึ้ง 207/1 อำเภอแม่ระมาด ตาก 63140', '16832810871.jpg', 'member21', '16.97599998405996', '98.54427706826368', 1, 1),
(8, 'บ้านท่านขุน', 'เยือนแม่ระมาด เชิญแวะพักบ้านท่านขุนรีสอร์ท อุปกรณ์อำนวยความสะดวกครบครัน ราคาเพียง 400/คืน ', '400', '087-8381248', 'หมู่ 4 ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', '16832811763.jpg', 'member22', '16.99394480938049', '98.52530621428762', 1, 5),
(9, 'เฮือนสีออน รีสอร์ท', 'ห้องพักรายวัน ใน แม่ระมาด เปิด 24 ชั่วโมง ห้องพักสะอาด ห้องน้ำสะอาด มีเครื่องทำน้ำอุ่น บรรยากาศดี ราคาถูก คืนละ 450-600บาท ปลอดภัย ตอนเช้ามีกาแฟ ขนมปัง ไข่ลวก บริการฟรี ', '450', '091 287 0112', '105 ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', '16832812881.png', 'member23', '16.996108650168075', '98.52618884497026', 1, 0),
(10, 'Wisdom field Resort & Spa', 'ที่พักนี้มีบริการอินเทอร์เน็ต Wi-Fi ฟรีในทุกห้องพัก ผู้เข้าพักจึงได้อยู่ใกล้สถานที่ท่องเที่ยวน่าสนใจและร้านอาหารอร่อยๆ ทริปยังไม่จบถ้าไม่ได้แวะไปที่เที่ยวชื่อดังอย่าง มีสิ่งอำนวยความสะดวกที่จะช่วยเพิ่มความผ่อนคลายสูงสุดให้แก่ผู้เข้าพัก\r\nสิ่งอำนวยความสะดวก\r\nที่จอดรถ\r\nWi-Fi ทุกห้อง (ฟรี)\r\nอาหารเช้า (ฟรี)\r\nระบบรักษาความปลอดภัย 24 ชั่วโมง\r\nบริการทำความสะอาดรายวัน\r\nเจลแอลกอฮอล์ล้างมือ\r\n', '1249', '0924235962', '105 ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', '11.png', 'member35', '16.960091037841977', '98.55115740939526', 2, 9),
(11, 'ชิลอีกโฮมที่พักแม่ระมาด', 'Chilleik Home & Coffee Bar (ชิลอีก โฮม & คอฟฟี่ บาร์) ที่พักในอำเภอแม่ระมาด สไตล์โมเดิร์นตกแต่งผสมผสานความเป็นไทยในบรรยากาศดีๆ ห้องพักราคาถูก ประหยัด ห้องนอนพักสบาย มีที่จอดรถสะดวก', '500', '0860989980', '105 ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', '16833878761.jpg', 'member36', '16.95734422940534', '98.56173185864291', 2, 1),
(12, 'ยังไม่มีข้อมูล', 'ยังไม่มีข้อมูล', '0', '0', 'ยังไม่มีข้อมูล', '16834716251.png', 'TEST', '', '', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_gallery`
--

CREATE TABLE `hotel_gallery` (
  `id` int(11) NOT NULL,
  `hotel_gallery_id` int(11) NOT NULL,
  `hotel_gallery_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hotel_gallery`
--

INSERT INTO `hotel_gallery` (`id`, `hotel_gallery_id`, `hotel_gallery_image`) VALUES
(15, 1, '16832798841.jpg'),
(16, 1, '2.jpg'),
(18, 1, '4.png'),
(19, 1, '5.png'),
(20, 1, '6.png'),
(21, 2, '2.png'),
(22, 2, '3.png'),
(23, 2, '16832800504.png'),
(24, 2, '16832800545.png'),
(25, 2, '16832800576.png'),
(26, 2, '7.png'),
(27, 2, '8.png'),
(28, 2, '9.png'),
(29, 3, '16832803812.jpg'),
(30, 3, '16832803863.jpg'),
(31, 3, '4.jpg'),
(32, 3, '5.jpg'),
(33, 3, '6.jpg'),
(34, 3, '7.jpg'),
(35, 4, '16832805422.jpg'),
(36, 5, '16832806732.jpg'),
(37, 5, '16832806783.jpg'),
(38, 5, '16832806814.jpg'),
(39, 5, '16832806855.jpg'),
(40, 5, '16832806897.jpg'),
(41, 5, '8.jpg'),
(42, 5, '9.jpg'),
(43, 7, '16832810922.jpg'),
(44, 7, '16832810963.jpg'),
(45, 7, '16832810994.jpg'),
(46, 7, '16832811025.jpg'),
(47, 7, '16832811056.jpg'),
(48, 8, '16832811851.jpg'),
(49, 8, '16832811872.jpg'),
(50, 8, '16832811904.jpg'),
(51, 8, '16832811945.jpg'),
(52, 9, '16832812942.jpg'),
(53, 9, '16832812963.jpg'),
(54, 6, '16832819871.png'),
(55, 6, '16832819902.png'),
(56, 6, '16832819933.jpg'),
(57, 6, '16832819966.png'),
(58, 6, '16832819997.png'),
(59, 6, '16832820028.png'),
(60, 6, '16832820069.jpg'),
(61, 6, '10.jpg'),
(62, 10, '16833876332.png'),
(63, 10, '16833876384.png'),
(64, 10, '16833876415.png'),
(65, 10, '16833876456.png'),
(66, 10, '16833876487.png'),
(67, 10, '16833876519.jpg'),
(68, 10, '168338765410.jpg'),
(69, 11, '16833878872.jpg'),
(71, 11, '16833879025.jpg'),
(72, 11, '16833879076.jpg'),
(73, 11, '16833879107.jpg'),
(74, 11, '16833879138.jpg'),
(75, 11, '16833879179.jpg'),
(76, 11, '16833879223.jpg'),
(77, 11, '16833879274.jpg'),
(187, 1, '16836272521.png'),
(188, 1, '16836272522.png'),
(189, 1, '16836272523.png'),
(190, 1, '16836272524.png'),
(191, 1, '16836272581.png'),
(192, 1, '16836272582.png'),
(193, 1, '16836272583.png'),
(194, 1, '16836272584.png'),
(195, 1, '16836272631.png'),
(196, 1, '16836272632.png'),
(197, 1, '16836272633.png'),
(198, 1, '16836272634.png'),
(199, 1, '16836273061.png'),
(200, 1, '16836273072.png'),
(201, 1, '16836273073.png');

-- --------------------------------------------------------

--
-- Table structure for table `memberuser`
--

CREATE TABLE `memberuser` (
  `member_id` int(12) NOT NULL,
  `member_firstname` varchar(200) NOT NULL,
  `member_lastname` varchar(200) NOT NULL,
  `member_email` varchar(200) NOT NULL,
  `member_phone` varchar(200) NOT NULL,
  `member_username` varchar(200) NOT NULL,
  `member_password` varchar(200) NOT NULL,
  `member_images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `memberuser`
--

INSERT INTO `memberuser` (`member_id`, `member_firstname`, `member_lastname`, `member_email`, `member_phone`, `member_username`, `member_password`, `member_images`) VALUES
(6, 'ร้านอาหารแคนา', 'ร้านอาหารแคนา', 'res@1.com', '0855395030', 'member1', '1111', '1232323.png'),
(7, 'ร้านศรีไพร', 'ร้านศรีไพร', 'member@2.com', '055581444', 'member2', '1111', '16832141171232323.png'),
(8, 'ร้านอาหารเฝอ', 'ร้านอาหารเฝอ', 'sdsd@g.com', '0871946766', 'member3', '1111', '16832141751232323.png'),
(9, 'ร้านข้าวทิพย์ ตามสั่ง ขาหมู', 'ร้านข้าวทิพย์ ตามสั่ง ขาหมู', 'sdsd@g.com', '0982625853', 'member4', '1111', '16832142641232323.png'),
(10, 'ร้านอาหาร ครัวพ่อฉุน', 'ร้านอาหาร ครัวพ่อฉุน', 'sds@g.com', '087-076-0299', 'member5', '1111', '16832142891232323.png'),
(11, 'ร้านก๋วยเตี๋ยวแชมป์ & ข้าวมันไก่', 'ร้านก๋วยเตี๋ยวแชมป์ & ข้าวมันไก่', 'sss@g.com', '081-2786-774', 'member6', '1111', '16832143121232323.png'),
(12, 'บ้านภูมิ กาแฟสด', 'บ้านภูมิ กาแฟสด', 'ssss@g.com', '0643565853', 'member7', '1111', '16832143521232323.png'),
(13, 'ครัวอารมณ์ดี555', 'ครัวอารมณ์ดี555', 'sdsd@gmail.com', '0936855847', 'member8', '1111', '16832144351232323.png'),
(14, 'ครัวกรุนะโม', 'ครัวกรุนะโม', 'sss@g.com', '0966678988', 'member9', '1111', '16832146041232323.png'),
(15, 'ร้านลาบป้าน้อย', 'ร้านลาบป้าน้อย', 'sss@g.com', '092-823-8771', 'member10', '1111', '16832146321232323.png'),
(16, 'กล้วยอบน้ำผึ้งสูตรดั้งเดิม', 'กล้วยอบน้ำผึ้งสูตรดั้งเดิม', 's1@g.com', '0821666159', 'member11', '1111', '16832228731232323.png'),
(17, 'กล้วยอบน้ำผึ้งธัญพืช', 'กล้วยอบน้ำผึ้งธัญพืช', 's@g.com', '1111111', 'member12', '1111', '16832234231232323.png'),
(18, 'แยมมิกซ์เบอรี่ -บ้านมะเม่าข้าวเหนียว', 'แยมมิกซ์เบอรี่ -บ้านมะเม่าข้าวเหนียว', 'ss@g.com', '1235567812', 'member13', '1111', '16832234651232323.png'),
(19, 'น้ำมันสมุนไพร', 'น้ำมันสมุนไพร', 'ss@g.com', '123098754', 'member14', '1111', '16832235141232323.png'),
(20, 'เคียงตะวันรีสอร์ท', 'เคียงตะวันรีสอร์ท', 'Tawan@g.com', '098-764-9768', 'member15', '1111', '16832786511232323.png'),
(21, 'อิงดอยรีสอร์ท', 'อิงดอยรีสอร์ท', 'sss@g.com', '0956389718', 'member16', '1111', '16832787531232323.png'),
(22, 'บ้านพักสายลมจอยรีสอร์ท', 'บ้านพักสายลมจอยรีสอร์ท', 'ss@g.com', '0612753277', 'member17', '1111', '16832788141232323.png'),
(23, 'วาสนาชัยรีสอร์ท', 'วาสนาชัยรีสอร์ท', 'ss@g.com', '0800146765', 'member18', '1111', '16832788421232323.png'),
(24, 'สวนป้าวรีสอร์ท', 'สวนป้าวรีสอร์ท', 'ss@g.com', '0872090459', 'member19', '1111', '16832788731232323.png'),
(25, 'เดอะเนสท์รีสอร์ท', 'เดอะเนสท์รีสอร์ท', 'ss@g.com', '0878381248', 'member20', '1111', '16832789031232323.png'),
(26, 'ชมจันทร์ รีสอร์ท', 'ชมจันทร์ รีสอร์ท', 'ss@g.com', '0641959971', 'member21', '1111', '16832789301232323.png'),
(27, 'บ้านท่านขุน', 'บ้านท่านขุน', 'ss@g.com', '0878381248', 'member22', '1111', '16832789571232323.png'),
(28, 'เฮือนสีออนรีสอร์ท', 'เฮือนสีออนรีสอร์ท', 'ss@g.com', '0912870112', 'member23', '1111', '16832789911232323.png'),
(29, 'ส้มตำเหรียญทอง', 'ส้มตำเหรียญทอง', 'ss@g.com', '0873130099', 'member24', '1111', '16833859791232323.png'),
(30, 'ร้านผัดไทยสูตรโบราณ', 'ร้านผัดไทยสูตรโบราณ', 'ss@s.com', '0966368284', 'member25', '1111', '16833905721232323.png'),
(31, 'ร้านอาหารเงาไผ่', 'ร้านอาหารเงาไผ่', 'ss@g.com', '0878472613', 'member26', '1111', '16833906181232323.png'),
(32, 'ร้านสุกี้แม่จะเรา', 'ร้านสุกี้แม่จะเรา', 'ss@g.com', '0898586149', 'member27', '1111', '16833906751232323.png'),
(33, 'ร้านก๋วยเตี๋ยวเรือ อังอัง', 'ร้านก๋วยเตี๋ยวเรือ อังอัง', 'ss@g.com', '0922831443', 'member28', '1111', '16833907001232323.png'),
(34, 'สเต็กคุณปลื้ม', 'สเต็กคุณปลื้ม', 'ss@g.com', '065 239 6453', 'member29', '1111', '16833907241232323.png'),
(35, 'ร้านOk PIZZA คนเมืองแม่จะเรา', 'ร้านOk PIZZA คนเมืองแม่จะเรา', 'ss@g.com', '0922868976', 'member30', '1111', '16835757701.png'),
(36, 'บ้านบนสัน BanBonSun', 'บ้านบนสัน BanBonSun', 'ss@g.com', '0856510656', 'member31', '1111', '16833908091232323.png'),
(37, 'ร้านกาแฟ สจ', 'ร้านกาแฟ สจ', 'ss@g.com', '0874030329', 'member32', '1111', '16833908351232323.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_details` varchar(200) NOT NULL,
  `product_prices` varchar(200) NOT NULL,
  `product_address` varchar(200) NOT NULL,
  `product_phone` varchar(100) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_username` varchar(200) NOT NULL,
  `type_product_id` int(10) NOT NULL,
  `view` int(11) NOT NULL,
  `PLAT` varchar(200) NOT NULL,
  `PLNG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_details`, `product_prices`, `product_address`, `product_phone`, `product_image`, `product_username`, `type_product_id`, `view`, `PLAT`, `PLNG`) VALUES
(1, 'กล้วยอบน้ำผึ้งสูตรดั้งเดิม', 'แหล่งเรียนรู้ผลิตภัณฑ์กล้วยอบน้ำผึ้ง กลุ่มแม่บ้านเคหะกิจสันเก้ากอม หมู่ที่ 6 ถูกหลักอนามัย อบเตาถ่านแบบโบราณ สูตรดั้งเดิม', '40', 'แม่บ้านเคหะกิจสันเก้ากอม หมู่ที่ 6', '0821666159', '1.jpg', 'member11', 1, 83, '16.989027598467', '98.511090797426'),
(2, 'กล้วยอบน้ำผึ้งธัญพืช', 'ผลิตภัณฑ์ งาดำคั่วเกลือ น้ำผึ้งเดือนห้า', '40', 'แม่บ้านเคหะกิจสันเก้ากอม หมู่ที่ 6', '081-7407514', '16832237561.png', 'member12', 1, 58, '16.983807770982', '98.514881387591'),
(3, 'แยมมิกซ์เบอรี่ -บ้านมะเม่าข้าวเหนียว', 'แยมมิกซ์เบอรี่ ผลิตจากน้ำมะเม่าสกัดและเนื้อองุ่นแท้ จากบ้านมะเม่าข้าวเหนียว', '180', 'ตำบลแม่ระมาด อำเภอแม่ระมาด จังหวัดตาก 63140', '-', '16832238331.jpg', 'member13', 1, 10, '17.035858889041485', '98.52265289291967'),
(4, 'น้ำมันสมุนไพร', 'น้ำมันสมุนไพร ผลิตจาก น้ำมันงา น้ำมันไพล พริกไทย การบูร เมนทอล และมะกรูด โดยกลุ่มเกษตรอินทรีย์', '450', '132/2 ม.​3 ตำบลแม่ระมาด อำเภอแม่ระมาด จังหวัดตาก 63140', '0995653956', '16832239601.jpg', 'member14', 1, 8, '16.970403794481214', '98.52282577165984'),
(5, 'หมูเส้นปรุงรส', 'ป้าทวนหมูเส้นปรุงรส ผลิตและจัดจำหน่ายหมูเส้น น้ำพริกกุ้ง น้ำพริกหมู น้ำพริกลาบ น้ำพริกเมงดา น้ำพริกตาแดง หมูแดดเดียว แหนมพื้นบ้าน โดยมีกรรมาวิธีในการผลิตที่มีคุณภาพ สะอาด ถูกหลักอนามัย', '10', 'วิสาหกิจชุมชนกลุ่มแม่บ้านเกษตรบ้านแม่จะเรา', ' 0-5558-5145', '16833871401.png', 'member24', 2, 19, '16.969942711751067', '98.525312600343'),
(6, 'สุรากลั่นชุมชน', 'สุรากลั่นชุมชน 30 ดีกรี ตราดอกลำดวน ใช้ข้าวที่มีคุณภาพในการหมักจึงมีรสชาติที่ถูกใจ', '55', '1335 หมู่ที่ 2 ต.แม่จะเรา อ.แม่ระมาด จ.ตาก วิสาหกิจชุมชน สุวรรณสุรากลั่น', '085-7295360', '16833872621.png', 'member25', 2, 3, '16.649938835050538', '98.6083626'),
(7, 'หมอนหนุน', 'หมอนหนุน ย่าม พรมเช็ดเท้า หมอนข้าง ผ้าห่ม ผ้าคุม ฝาชี ที่นอน หมอนรองคอ ', '50', 'กลุ่มจัดทำเบาะนั่ง หมอนชนิดต่างๆและผ้าห่มบ้านแม่จะเราบ้านทุ่ง', '087-198-2661', '16834718081.png', 'TEST', 3, 53, '16.877465599340322', '98.57769903545065');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(10) NOT NULL,
  `product_gallery_id` int(11) NOT NULL,
  `product_gallery_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_gallery_id`, `product_gallery_image`) VALUES
(4, 2, '16832237622.png'),
(5, 2, '16832237663.png'),
(6, 2, '4.png'),
(7, 3, '16832238382.jpg'),
(8, 4, '16832239682.jpg'),
(9, 5, '16833871452.png'),
(10, 5, '16833871483.png'),
(11, 5, '16833871524.png'),
(12, 5, '5.png'),
(13, 7, '16834718142.png'),
(14, 7, '16834718174.png'),
(15, 7, '16834718203.png'),
(20, 1, '1683578348111.jpg'),
(21, 1, '168357835211.jpg'),
(22, 5, '16836294911.png'),
(23, 5, '16836294912.png'),
(24, 5, '16836294913.png'),
(25, 5, '16836294914.png'),
(26, 5, '16836294961.png'),
(27, 5, '16836294962.png'),
(28, 5, '16836294963.png'),
(29, 5, '16836294964.png'),
(30, 5, '16836295011.png'),
(31, 5, '16836295012.png'),
(32, 5, '16836295013.png'),
(33, 5, '16836295014.png'),
(34, 5, '16836295051.png'),
(35, 5, '16836295052.png'),
(36, 5, '16836295053.png'),
(37, 5, '16836295054.png'),
(38, 1, '16836494251.png'),
(39, 1, '16836494262.png'),
(40, 1, '16836494263.png'),
(41, 1, '16836494264.png'),
(42, 1, '16836494301.png'),
(43, 1, '16836494302.png'),
(44, 1, '16836494303.png'),
(45, 1, '16836494304.png'),
(46, 1, '16836494341.png'),
(47, 1, '16836494342.png'),
(48, 1, '16836494343.png'),
(49, 1, '16836494344.png'),
(50, 1, '16836494401.png'),
(51, 1, '16836494402.png'),
(52, 1, '16836494403.png'),
(53, 1, '16836494404.png'),
(54, 1, '16836494541.png'),
(55, 1, '16836494542.png');

-- --------------------------------------------------------

--
-- Table structure for table `restuarant`
--

CREATE TABLE `restuarant` (
  `restuarant_id` int(10) NOT NULL,
  `restuarant_name` varchar(200) NOT NULL,
  `restuarant_detail` text NOT NULL,
  `restuarant_phone` varchar(100) NOT NULL,
  `restuarant_address` varchar(200) NOT NULL,
  `restuarant_fb` mediumtext NOT NULL,
  `restuarant_image` varchar(200) NOT NULL,
  `view` int(11) NOT NULL,
  `type_restuarant_id` int(10) NOT NULL,
  `restuarant_username` varchar(200) NOT NULL,
  `RLAT` varchar(100) NOT NULL,
  `RLNG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `restuarant`
--

INSERT INTO `restuarant` (`restuarant_id`, `restuarant_name`, `restuarant_detail`, `restuarant_phone`, `restuarant_address`, `restuarant_fb`, `restuarant_image`, `view`, `type_restuarant_id`, `restuarant_username`, `RLAT`, `RLNG`) VALUES
(1, 'ร้านอาหารแคนา', 'ร้านอาหารแคนา เป็นร้านที่โล่ง มีจำหน่ายอาหาร และเครื่องดื่มที่ไม่มีแอลกอฮอล์ ลูกค้าสามารถนั่งรับประทานที่ร้านได้ เปิดตั้งแต่ 11.00 - 21.00 น.', '0855395030', '105 ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/Carena-%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B9%81%E0%B8%84%E0%B8%99%E0%B8%B2-100624201876968', '16832151701.png', 27, 1, 'member1', '16.97663713216408', '98.52893035310125'),
(2, 'ร้านศรีไพร', 'ร้านอาหารนั่งชิว อร่อย ราคาไม่แพงมาก เปิด 9.00-19.00 น.', '055581444', 'ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', '', 'I0000040.jpg', 33, 1, 'member2', '16.993202418956507', '98.52596970132416'),
(3, 'ร้านอาหารเฝอ', 'ร้านเฝอข้าวมันไก่ แม่ระมาด พร้อมเสิร์ฟ อาหารหลากหลายเมนูบริการส่งทั่วแม่ระมาด และ ตำบลใกล้เคียง ถึงบ้านลูกค้า เปิด7.00 น. - 20.00 น', '087-1946766', 'ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/profile.php?id=100063959176706', '16832166741.jpg', 2, 1, 'member3', '16.979368536458697', '98.52468281631378'),
(4, 'ร้านข้าวทิพย์ ตามสั่ง ขาหมู', 'เปิด 7.00-16.00 น.', '0982625853', 'ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/people/%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B8%97%E0%B8%B4%E0%B8%9E%E0%B8%A2%E0%B9%8C-%E0%B8%81%E0%B8%AD%E0%B8%99%E0%B8%96%E0%B8%B6%E0%B8%87%E0%B9%81%E0%B8%A2%E0%B8%81%E0%B9%81%E0%B8%A1%E0%B9%88%E0%B8%A3%E0%B8%B0%E0%B8%A1%E0%B8%B2%E0%B8%94/100063741052275/?locale=th_TH', '16832170401.png', 2, 1, 'member4', '16.977826518439425', '98.52764994369316'),
(5, 'ร้านอาหาร ครัวพ่อฉุน', 'เปิด 9.00-23.00 น.', '0870760299', 'ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/profile.php?id=100057784834631&paipv=0&eav=Afbiv5ny5FWHcil5EXVd0K5HEawqy-YfFlEgZ0k-oXg3WGvdFXL4wCNLI5r1URLyvaI&_rdr', '16832173601.jpg', 2, 1, 'member5', '16.98704245117264', '98.5269563878698'),
(6, 'ร้านก๋วยเตี๋ยวแชมป์ & ข้าวมันไก่', 'เปิด 9.00-17.00', '0812786774', 'ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/people/%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B9%81%E0%B8%8A%E0%B8%A1%E0%B8%9B%E0%B9%8C-%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B8%A1%E0%B8%B1%E0%B8%99%E0%B9%84%E0%B8%81%E0%B9%88/100051318806035/?locale=th_TH&paipv=0&eav=AfZOZ6RUAD3xqCOy2ZXw0RZPAoNxYgoCmb2dhGh9kt9KeV-hee_X4dS4cVbq8XiNGeg&_rdr', '16832175891.png', 12, 1, 'member6', '16.98645504606731', '98.52173921806893'),
(7, 'บ้านภูมิ กาแฟสด', 'เปิด 9.00-20.00 น.', '064-356-5853', '423/3 อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/profile.php?id=100066224572581&paipv=0&eav=AfYlLGUyL1D_MqjKBEYJX3xfAfELCxgMwCVKEbT-LwB8PPVE_TOImueW2V0hSjTcU1M&_rdr', '16832177521.png', 2, 1, 'member7', '16.98860169880761', '98.52622546819164'),
(8, 'ครัวอารมณ์ดี555', 'เปิด 7.00-21.00', '061 252 4242', '385/1 ม.4 ต แม่ระมาด', 'https://www.facebook.com/KhrawXarmnDi555/?locale=th_TH', '16832178921.png', 0, 1, 'member8', '16.988444776382373', '98.52628712883532'),
(9, 'ครัวกรุนะโม', 'เปิด 11.00-23.00 น.', '0966678988', '105 ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/ktwhole.sale.1/?locale=th_TH', '16832179831.png', 1, 1, 'member9', '16.986840608908235', '98.5269198363039'),
(10, 'ร้านลาบป้าน้อย', 'เปิด 8.00-19.00 น.', '092-823-8771', '240 ตำบล แม่ระมาด อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/people/%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%A5%E0%B8%B2%E0%B8%9A%E0%B8%9B%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B9%89%E0%B8%AD%E0%B8%A2/100067750512920/', '16832180531.jpg', 5, 1, 'member10', '16.97103452694185', '98.53782897083256'),
(11, 'ส้มตำเหรียญทอง', '-', '0873130099', '239 ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', '', '16833861471.png', 28, 2, 'member26', '16.957503614151065', '98.56129384417665'),
(12, 'ร้านผัดไทยสูตรโบราณ', '-', '0966368284', 'แม่จะเรา ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/PADTHAI0/?locale=th_TH', '16833862121.png', 4, 2, 'member27', '16.957524433820424', '98.5622817834536'),
(13, 'ร้านอาหารเงาไผ่', '-', '0878472613', '181/2 หมู่ 7 ต.แม่จะเรา อ.แม่ระมาด จ.ตาก', 'https://www.facebook.com/ngaophairestaurant/', '16833863021.png', 2, 2, 'member28', '16.883369330832235', '98.57637223011976'),
(14, 'ร้านสุกี้แม่จะเรา', '-', '0898586149', 'ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', '', '16833863791.png', 2, 2, 'member29', '16.963315937631762', '98.57346412047909'),
(15, 'ร้านก๋วยเตี๋ยวเรืออังอัง', '-', '0922831443', '32 หมู่ 2 ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', '', '16833865501.png', 2, 2, 'member30', '16.964545294598466', '98.58081388569771'),
(16, 'สเต็กคุณปลื้ม', '-', '065 239 6453', '38 ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', '', '16833866321.jpg', 2, 2, 'member31', '16.964497860733154', '98.58163625951795'),
(17, 'ร้าน Ok PIZZA คนเมืองแม่จะเรา', '-', '082 883 0983', 'ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/108292971328304/posts/d41d8cd9/336110605213205/?locale=ms_MY', '16833867951.png', 1, 2, 'member32', '16.956235910283898', '98.57137994834744'),
(18, 'บ้านบนสันBanBonSun', '-', '0856510656', '372, ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/people/%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%9A%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%99-Banbonsun/100026671782348/', '16833868871.jpg', 1, 2, 'member33', '16.953288960712', '98.56817988536561'),
(19, 'ร้านกาแฟ สจ', '-', '0874030329', 'ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก 63140', 'https://www.facebook.com/sjcoffeeandsteak/?locale=th_TH', '16833870171.jpg', 4, 2, 'member34', '16.957358368712747', '98.58795373307812'),
(20, 'ยังไม่มีข้อมูล1', 'ยังไม่มีข้อมูล', 'ยังไม่มีข้อมูล', 'ยังไม่มีข้อมูล', '', '16834714241.png', 4, 3, 'TEST', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `restuarant_gallery`
--

CREATE TABLE `restuarant_gallery` (
  `id` int(10) NOT NULL,
  `restuarant_gallery_id` int(10) NOT NULL,
  `restuarant_gallery_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `restuarant_gallery`
--

INSERT INTO `restuarant_gallery` (`id`, `restuarant_gallery_id`, `restuarant_gallery_image`) VALUES
(1, 1, '2.png'),
(2, 1, '3.jpg'),
(3, 1, '4.png'),
(4, 1, '5.png'),
(5, 1, '6.jpg'),
(6, 1, '8.jpg'),
(7, 1, '168321520311.jpg'),
(8, 2, '16832154111.jpg'),
(9, 2, '2.jpg'),
(10, 2, '16832154173.jpg'),
(11, 2, '16832154204.png'),
(12, 2, '16832154235.png'),
(13, 2, '6.png'),
(14, 2, '7.png'),
(15, 2, '8.png'),
(20, 3, '16832171172.jpg'),
(21, 3, '16832171203.jpg'),
(22, 3, '4.jpg'),
(23, 3, '5.jpg'),
(24, 3, '16832171286.jpg'),
(26, 4, '16832171402.png'),
(27, 4, '16832171433.png'),
(28, 4, '16832171464.png'),
(29, 4, '16832171505.png'),
(30, 4, '16832171566.png'),
(31, 5, '16832174071.png'),
(32, 5, '16832174102.png'),
(33, 5, '16832174143.png'),
(34, 5, '16832174174.png'),
(35, 5, '16832174215.png'),
(36, 5, '16832174256.png'),
(37, 6, '16832176002.png'),
(38, 6, '16832176033.jpg'),
(39, 6, '16832176064.jpg'),
(40, 6, '16832176095.jpg'),
(41, 6, '16832176126.jpg'),
(42, 6, '7.jpg'),
(43, 6, '16832176198.jpg'),
(44, 7, '16832177572.png'),
(45, 7, '16832177623.png'),
(46, 7, '16832177664.png'),
(47, 7, '16832177695.png'),
(48, 7, '16832177746.png'),
(49, 8, '16832180762.png'),
(50, 8, '16832180793.jpg'),
(51, 9, '16832180872.png'),
(52, 9, '16832180903.png'),
(53, 10, '16832180982.jpg'),
(54, 10, '16832181013.png'),
(55, 10, '16832181044.jpg'),
(56, 10, '16832181105.jpg'),
(57, 10, '16832181136.jpg'),
(58, 11, '16833862182.png'),
(59, 11, '16833862213.png'),
(60, 11, '16833862244.png'),
(61, 12, '16833862312.png'),
(62, 12, '16833862343.png'),
(63, 12, '16833862374.png'),
(64, 13, '16833863082.jpg'),
(65, 13, '16833863113.jpg'),
(66, 13, '16833863144.jpg'),
(67, 14, '16833863852.png'),
(68, 14, '16833863883.png'),
(69, 14, '16833863914.jpg'),
(70, 14, '16833863965.jpg'),
(71, 15, '16833865592.png'),
(72, 15, '16833865633.png'),
(73, 15, '16833865664.png'),
(74, 16, '16833866553.jpg'),
(75, 16, '16833866726.jpg'),
(76, 16, '16833866767.jpg'),
(77, 16, '16833866804.jpg'),
(78, 16, '16833866855.jpg'),
(79, 17, '16833868022.jpg'),
(80, 17, '16833868054.jpg'),
(81, 17, '16833868095.jpg'),
(82, 17, '16833868136.jpg'),
(83, 18, '16833868955.jpg'),
(84, 18, '16833868982.jpg'),
(85, 18, '16833869024.jpg'),
(86, 18, '16833869053.jpg'),
(87, 19, '16833870452.png'),
(88, 19, '16833870493.png'),
(89, 19, '16833870524.png'),
(90, 19, '16833870555.png'),
(91, 19, '16833870586.png'),
(94, 1, '16836291832.png'),
(95, 1, '16836291861.png'),
(96, 1, '16836291862.png'),
(97, 1, '16836291863.png'),
(98, 1, '16836291864.png'),
(99, 1, '16836291931.png'),
(100, 1, '16836291932.png'),
(101, 1, '16836291933.png'),
(102, 1, '16836291934.png'),
(103, 1, '16836291981.png'),
(104, 1, '16836291982.png'),
(105, 1, '16836291983.png'),
(115, 1, 'รูปภาพ15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_travelling`
--

CREATE TABLE `tb_travelling` (
  `travelling_id` int(4) NOT NULL,
  `travelling_name` varchar(255) NOT NULL,
  `travelling_Details` varchar(5000) NOT NULL,
  `travelling_Address` varchar(255) NOT NULL,
  `travelling_price` varchar(100) NOT NULL,
  `travelling_img` varchar(1000) NOT NULL,
  `travelling_open` varchar(200) NOT NULL,
  `travelling_phone` varchar(100) NOT NULL,
  `view` int(11) NOT NULL,
  `type_travelling_id` int(10) NOT NULL,
  `LAT` varchar(200) NOT NULL,
  `LNG` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_travelling`
--

INSERT INTO `tb_travelling` (`travelling_id`, `travelling_name`, `travelling_Details`, `travelling_Address`, `travelling_price`, `travelling_img`, `travelling_open`, `travelling_phone`, `view`, `type_travelling_id`, `LAT`, `LNG`) VALUES
(1, 'พระพุทธรูปหินอ่อนวัดดอนแก้ว', 'จากคำบอกเล่ากันมา พระพุทธรูปหินอ่อนเป็นประติมากรรมของชาวพม่า ซึ่งแกะสลักด้วยหินอ่อนทั้งแท่งได้แกะสลักพร้อมกัน 3 องค์ องค์แรกได้ประดิษฐานประเทศอินเดีย องค์ที่สองประดิษฐานที่ประเทศปากีสถาน และองค์ที่สามประดิษฐานที่วัดดอนแก้ว หมู่ที่ 6 ตำบลแม่ระมาด อำเภอแม่ระมาด จังหวัดตาก มีหน้าตักกว้าง 50 นิ้ว สูงจากฐานถึงเคียร 73 นิ้ว มีลักษณะ  ที่สวยงามมากครูบาขาวปีพร้อมขุนแม่ระมาดไมตรี และชาวบ้านแม่ระมาดได้ไปติดต่อขอบูชาจากประเทศพม่า ในราคา 800 รูปี โดยนำมาทางเรือ ผ่านเมืองมะละแหม่ง แล้วเดินทางต่อจนถึงท่าเรือจองโต จากท่าเรือแห่งนี้ท่านครูบาขาวปี ซึ่งเป็นที่เคารพรักของชาวบ้านและชาวภาคเหนือได้ไปรับพระพุทธรูปหินอ่อนพร้อมญาติโยมอัญเชิญขึ้นบนเกวียน แล้วเดินทางถึงเมืองกรุกกริก บ้านจ่อแฮ (บ้านกะเหรี่ยง) การเดินทางด้วยความยากลำบากเพราะเป็นภูเขาสูงชันมาก จึงล่าช้ามาก ต้องนอนพักแรมระหว่างทาง  บางแห่งถึง 2 คืน จากนั้นก็เดินทางมาถึงหมู่บ้านป๋างการ การเดินทางรวดเร็วขึ้นเพราะเป็นพื้นที่ราบจนกระทั่งถึงหมู่บ้าน เมียวดี   ริมฝั่งแม่น้ำเมยเขตประเทศพม่า ตรงข้ามบ้านท่าสายลวด อำเภอแม่สอดปัจจุบัน จึงอัญเชิญลงจากเกวียน ข้ามแม่น้ำเมย เข้าเขตประเทศไทย ที่อำเภอแม่สอด จังหวัดตาก โดยพักผ่อนที่บ้านท่าสายลวด 3 คืน จึงเดินทางเข้าเขตอำเภอแม่ระมาด และ อัญเชิญพระพุทธรูปหินอ่อนประดิษฐาน ณ วัดดอนแก้วแห่งนี้ การไปอัญเชิญครั้งนี้อยู่ระหว่างเดือน 5 (เดือนเมษายน ฑ.ศ. 2465) รวมเวลาที่ไปอัญเชิญพระพุทธรูปหินอ่อนครั้งนี้ 12 วัน จนถึงปัจจุบัน', 'หมู่ที่ 6 อำเภอแม่ระมาด ตำบลแม่ระมาด จังหวัดตาก ', 'ฟรี', '16832118151.png', '24 ช.ม.', '055 581 038', 687, 1, '16.984687892829914', '98.51495580097263'),
(2, 'วัดศรีบุญเรือง', 'เป็นวัดราษฎรสังกัดคณะสงฆ์มหานิกาย ตั้งอยู่ หมู่ที่ 4 ตำบลแม่ระมาด อำเภอแม่ระมาด จังหวัด ตาก', 'หมู่ที่ 4 เทศบาล 53 ซอย เจริญธรรม ต.แม่ระมาด อ.แม่ระมาด จ.ตาก 63140', 'ฟรี', '16832130121.jpg', '24 ชม.', '0-5555-3114', 162, 1, '16.983137', '98.519374'),
(3, 'วัดป่าไม้ห้า', 'เป็นวัดชาวบ้านในตำบลแม่ระมาด ใช้เป็นสถานที่ในการประกอบพิธีกรรมทางศาสนา เป็นที่นับถือของชาวบ้านเป็นอย่างยิ่ง', 'หมู่ที่ 6 ตำบลขะเนจื้อ อำเภอแม่ระมาด จังหวัดตาก ', 'ฟรี', '16832136971.png', '24 ชม.', '055-581-750', 25, 1, '17.007258943830553', '98.50478471413624'),
(4, 'กาดโฮ้งต้า', 'กาดโฮ้งต้าเป็นตลาดนัดชุมชนในอำเภอแม่ระมาด จ.ตาก เปิดทำการทุกวันพุธ เวลา 15.00-20.00 น.  ซึ่งเป็นตลาดนัดที่ส่งเสริมอาชีพและการค้าขายของคนในชุมชน  สินค้าในตลาดก็มีราคาไม่สูงมากนัก พ่อค้าแม่ค้าในตลาดส่วนมากก็เป็นชาวบ้านในพื้นที่ ที่นำพืชผักที่ปลูกไว้ในสวนมาขาย เนื่องจากในอำเภอประกอบอาชีพเกษตรกรรมเป็นส่วนใหญ่ นอกจากนี้ยังมีกับข้าวพื้นเมือง ขนมไทยและของใช้จิปาถะอื่นๆอีกด้วย คงสงสัยกันใช่มั้ยคะ ว่ากาดโฮ้งต้าแปลว่าอะไร ? คำว่า กาด ในภาษาเหนือแปลว่าตลาด คำว่า โฮ้ง (อ่านว่า โห้ง) ในภาษาเหนือแปลได้ประมาณว่า ลุ่ม คำว่าต้า ในภาษาเหนือ แปลว่า ท่าน้ำ ซึ่งรวมแล้วจะแปลได้ว่า ตลาดริมแม่น้ำ นั่นเองค่ะ ซึ่งเหตุผลที่ได้ชื่อนี้ก็เพราะว่า ตลาดตั้งอยู่บริเวณที่เป็นสะพานข้ามแม่น้ำ และอยู่ในบริเวณสวนสาธารณะอีกด้วย', 'ตำบลแม่ระมาด หมู่ 3 อำเภอแม่ระมาด จ.ตาก', 'ฟรี', '16832138321.jpg', 'ทุกวันพุธ เวลา 16.00-20.00 น.', '-', 98, 1, '16.984185677946282', '98.52118645401572'),
(5, 'วัดศรีมณีวัน', 'วัดศรีมณีวัน เป็นวัดประจำตำบลแห่งหนึ่ง ที่ชาวตำบลแม่จะเราเข้ามาปฏิบัติกิจกรรมทางศาสนาและมีความสำคัญดังนี้ - เป็นที่ตั้งของศูนย์พัฒนาคุณธรรมจริยธรรมของอำเภอแม่ระมาด - เป็นที่ตั้งของสำนักงานเลขาธิการสภาวัฒนธรรมตำบลแม่จะเรา(ชั่วคราว) - เป็นที่ตั้งศูนย์บูรณาการวัฒนธรรมไทยสายใยชุมชนตำบลแม่จะเรา', 'แม่จะเราบ้านทุ่ง หมู่ 1, ตําบลแม่จะเรา อําเภอแม่ระมาด จังหวัดตาก', 'ฟรี', '16833623621.png', '24 ชม.', '088 959 0395', 106, 2, '16.96029343253162', '98.58897356121213'),
(6, 'วัดสิทธาวาส', 'วัดสิทธาวาส ตั้งอยู่ที่บ้านแม่จะเราสองแคว หมู่ที่ 3 ตำบลแม่จะเรา อำเภอแม่ระมาด จังหวัดตาก สังกัดคณะสงฆ์มหานิกาย มีที่ดินตั้งวัดเนื้อที่ 2 ไร่ 2 งาน 41 ตารางวา อาณาเขต ทิศเหนือยาว 2 เส้น ติดต่อกับลำห้วยแม่จะเรา ทิศใต้ยาว 1 เส้น 5 วา ติดต่อกับถนนสาธารณะ ทิศตะวันออกยาว 2 เส้น 2 วา ติดต่อกับถนนสาธารณะทิศตะวันตกยาว 1 เส้น 10 วา ติดต่อกับถนนสาธารณะ โดยมี น.ส.3 ก. เลขที่ 336 เล่ม 2 หน้า 62 เป็นหลักฐานพื้นที่ตั้งวัดเป็นที่ราบอยู่ริมฝั่งแม่น้ำแม่จะเรา มีหมู่บ้านประชาชนล้อมรอบโดยมีถนนเป็นเขตแดน อาคารเสนาสนะต่างๆ มีอุโบสถกว้าง 15 เมตร ยาว 20 เมตร สร้าง พ.ศ. 2500 พระศาลาการเปรียญกว้าง 14 เมตร ยาว 21 เมตร เป็นอาคารไม้ 1 หลัง ครึ่งตึกครึ่งไม้ 1 หลัง สำหรับปูชนียวัตถุมีพระประธานในวิหาร 3 องค์ ปูนปั้น พระประธานในอุโบสถและที่ศาลาการเปรียญเนื้อทองเหลือง นอกจากนี้มีพระแก้ว พระไม้และพระหินอ่อนขนาดต่างๆ อีกหลายองค์ และแจดีย์องค์หนึ่ง วัดสิทธาวาส สร้างขึ้นเป็นวัดนับตั้งแต่ประมาณ พ.ศ. 2444 เดิมมีนามว่า “วัดแม่จะเราสองแคว” ตามชื่อบ้าน ต่อมาในปี พ.ศ. 2483 ได้เปลี่ยนนามวัดเสียใหม่เป็น “วัดสิทธาวาส”มาจนตราบเท่าทุกวันนี้ ได้รับพระราชทานวิสุงคามสีมาวันที่ 8 สิงหาคม 2500 มีพระภิกษุอยู่จำพรรษา 8 รูป สามเณร 25 รูป ทางวัดได้เปิดสอนพระปริยัติธรรม พ.ศ. 2483', 'หมู่ที่/หมู่บ้าน 3 ตำบล แม่จะเรา อำเภอ แม่ระมาด จังหวัด ตาก', 'ฟรี', '16833625162.png', '24 ชม.', '-', 423, 2, '16.966212868699223', '98.58377347814978'),
(7, 'วัดอภัยคีรี', 'วัดอภัยคีรีตั้งอยู่เลขที่ 252 บ้านแม่จะเราสองแคว หมู่ที่ 3 ตำบลแม่จะเรา อำเภอแม่ระมาด จังหวัดตาก สังกัดคณะสงฆ์มหานิกาย มีที่ดินตั้งวัดเนื้อที่ 6 ไร่ 2 งาน 20 ตารางวา อาณาเขต ทิศเหนือติดต่อกับถนนและหมู่บ้าน ทิศใต้ติดต่อกับทุ่งนา ทิศตะวันออกติดต่อกับถนนและหมู่บ้าน ทิศตะวันตกติดต่อกับถนน\r\nพื้นที่ตั้งวัดเป็นพื้นที่เนินสูงมีหมู่บ้านและที่นาโดยรอบ อาคารเสนาสนะต่าง ๆ มี ศาลาการเปรียญกว้าง 7 เมตร ยาว 18 เมตร สร้าง พงศ. 2526 กุฏิสงฆ์ จำนวน 2 หลัง เป็นอาคารไม้ 1 หลัง ครึ่งตึกครึ่งไม้ 1 หลัง สำหรับปูชนียวัตถุมี พระพุทธรูปหินอ่อน 1 องค์ เจดีย์ 1 องค์วัดอภัยคีรี สร้างขึ้นเป็นวัดนับตั้งแต่ พ.ศ. 2483 ประชาชน ประชาชนร่วมใจกันสร้างวัดนี้ก่อนที่จะสร้างวัดที่ดินบริเวณแถบนี้เป็นที่ว่างเปล่า เมื่อประชาชนได้มาตั้งรกรากถิ่นฐานมั่นคงแล้วก็ได้จับจองที่ดินและดำเนินการจัดสร้างวัดนี้ขึ้นมา มีพระภิกษุอยู่จำพรรษา 1 รูป สามเณร 5 รูปเจ้าอาวาสมีเพียงผู้รักษาการ 9 รูป คือ รูปที่ 1 พระทิพย์ อุบาลี รูปที่ 2 พระศรี รูปที่ 3 พระบุญมา รูปที่ 4 พระแก้ว รูปที่ พระมอน รูปที่ 6 พระคำแสน รูปที่ 7 พระสมพร ปิยธมฺโม รูปที่ 8 พระบุญปั๋น สุธีโร รูปที่ 9 พระสุวรรณ ธีรภทฺโท รักษาการตั้งแต่ พ.ศ. 2525 เป็นต้นมา \r\n', 'หมู่ที่ 3 ตำบลแม่จะเรา อำเภอแม่ระมาด จังหวัดตาก', 'ฟรี', '16833627541.jpg', '24 ชม.', '-', 60, 2, '16.957662381694746', '98.56085319747302'),
(8, 'Wisdom Field', 'Wisdom Field มีร้านกาแฟ ตั้งอยู่บนถนนที่วิ่งไปทาง ต.แม่จะเรา ที่มีมุมถ่ายรูปสวยๆ เป็นกำแพงกราฟิตี้ลวดลายสวยงามมากมาย คอกาแฟและใครที่ชื่นชอบการถ่ายรูป ห้ามพลาด Wisdom Field” (วิสดอม ฟิลด์) หรือหลายคนอาจจะคุ้นหูว่า “Go Dang Art “ (โกดังอาร์ต) ซึ่งแต่เดิมที่นี่เคยเป็นโรงงานมาก่อน แต่ได้ถูกทิ้งร้างตามกาลเวลา เจ้าของจึงได้ดัดแปลงที่นี่ให้กลายเป็นสถานที่ท่องเที่ยวขึ้นมาแทน', '105 ตำบล แม่จะเรา อำเภอแม่ระมาด ตาก ', 'ฟรี', '16833629621.jpg', '8.00-18.00 น.', '089 241 9969 ', 68, 2, '16.960080775622504', '98.55135052843119'),
(9, 'ห้วยโบราณสถานหอยหิน', '-', 'คลองแม่จะเรา แม่จะเรา อำเภอแม่ระมาด ตาก ', 'ฟรี', '16833632121.jpg', '24 ชม.', '081 379 1218', 7, 2, '16.960424653140972', '98.5717894055419'),
(10, 'ศาลเจ้าพ่อพระวอ', 'ศาลเจ้าพ่อพระวอ เป็นนายด่านแม่ละเมาอันเป็นหัวเมืองของประเทศ ในสมเด็จพระเจ้าตากสินมหาราช ทำหน้าที่เป็นฝ่ายสื่อสารซึ่งปัจจุบันเรียกว่าทัพหน้า คอยสอดส่องดูแลป้องกันไม่ให้ข้าศึกลุกล้ำเขตแดนเข้าเมืองและคอยแจ้งเหตุไปยังเมืองระแหงหรือเมืองตากในปัจจุบัน', 'หมู่ที่  6  ต.แม่จะเรา  อ.แม่ระมาด  จ.ตาก 63140', 'ฟรี', '16834548561.png', '24 ชม.', '-', 129, 3, '16.952731800400823', '98.57141868356855');

-- --------------------------------------------------------

--
-- Table structure for table `tb_travelling_image`
--

CREATE TABLE `tb_travelling_image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `travelling_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_travelling_image`
--

INSERT INTO `tb_travelling_image` (`id`, `image`, `travelling_id`, `created_at`) VALUES
(34, 'IMG-6440e3ec6f73f1.15657342.jpg', 0, '0000-00-00 00:00:00'),
(35, 'IMG-6440e3ec7a0584.93129436.jpg', 0, '0000-00-00 00:00:00'),
(36, 'IMG-6440e3ec802e16.04231295.jpg', 0, '0000-00-00 00:00:00'),
(37, 'IMG-6440e3ec907a67.70498423.jpg', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_travelling_type`
--

CREATE TABLE `tb_travelling_type` (
  `travelling_type_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'ชื่อตำบลสถานที่ท่องเที่ยว',
  `travelling_type_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_travelling_type`
--

INSERT INTO `tb_travelling_type` (`travelling_type_id`, `travelling_type_name`) VALUES
(001, 'เทศบาลแม่ระมาด'),
(002, 'เทศบาลแม่จะเรา'),
(003, 'เทศบาลทุ่งหลวง');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_product`
--

CREATE TABLE `tb_type_product` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travelling_gallery`
--

CREATE TABLE `travelling_gallery` (
  `id` int(11) NOT NULL,
  `travelling_gallery_id` int(11) NOT NULL,
  `travelling_gallery_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `travelling_gallery`
--

INSERT INTO `travelling_gallery` (`id`, `travelling_gallery_id`, `travelling_gallery_image`) VALUES
(1, 1, '2.jpg'),
(2, 1, '3.jpg'),
(3, 1, '4.jpg'),
(4, 1, '5.jpg'),
(5, 2, '16832130192.jpg'),
(6, 2, '3.png'),
(7, 2, '16832130254.jpg'),
(8, 2, '16832130295.jpg'),
(9, 3, '2.png'),
(10, 3, '16832137043.png'),
(11, 3, '4.png'),
(12, 4, '16832138382.jpg'),
(13, 4, '16832138423.jpg'),
(14, 4, '16832138454.jpg'),
(15, 4, '16832138485.jpg'),
(16, 5, '16833624062.jpg'),
(17, 5, '16833624093.png'),
(18, 5, '16833624124.png'),
(19, 5, '5.png'),
(20, 6, '16833625301.png'),
(21, 6, '16833625333.png'),
(22, 6, '16833625364.png'),
(23, 7, '16833628452.png'),
(24, 7, '16833628483.png'),
(26, 8, '16833629853.jpg'),
(27, 8, '16833629894.jpg'),
(28, 8, '6.jpg'),
(29, 8, '7.jpg'),
(30, 8, '8.jpg'),
(31, 10, '16834548642.png'),
(32, 10, '16834548663.png'),
(33, 10, '16834548704.png'),
(34, 10, '16834548735.png'),
(35, 9, '16835519472.jpg'),
(36, 9, '16835519513.jpg'),
(37, 9, '16835519554.jpg'),
(55, 15, '16840739991.jpg'),
(56, 15, '16840739992.jpg'),
(57, 15, '16840739993.jpg'),
(58, 15, '16840739994.jpg'),
(59, 15, '16840739995.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_gallery`
--
ALTER TABLE `hotel_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberuser`
--
ALTER TABLE `memberuser`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restuarant`
--
ALTER TABLE `restuarant`
  ADD PRIMARY KEY (`restuarant_id`);

--
-- Indexes for table `restuarant_gallery`
--
ALTER TABLE `restuarant_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_travelling`
--
ALTER TABLE `tb_travelling`
  ADD PRIMARY KEY (`travelling_id`);

--
-- Indexes for table `tb_travelling_image`
--
ALTER TABLE `tb_travelling_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_travelling_type`
--
ALTER TABLE `tb_travelling_type`
  ADD PRIMARY KEY (`travelling_type_id`);

--
-- Indexes for table `tb_type_product`
--
ALTER TABLE `tb_type_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelling_gallery`
--
ALTER TABLE `travelling_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hotel_gallery`
--
ALTER TABLE `hotel_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `memberuser`
--
ALTER TABLE `memberuser`
  MODIFY `member_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `restuarant`
--
ALTER TABLE `restuarant`
  MODIFY `restuarant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `restuarant_gallery`
--
ALTER TABLE `restuarant_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tb_travelling`
--
ALTER TABLE `tb_travelling`
  MODIFY `travelling_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_travelling_image`
--
ALTER TABLE `tb_travelling_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_travelling_type`
--
ALTER TABLE `tb_travelling_type`
  MODIFY `travelling_type_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'ชื่อตำบลสถานที่ท่องเที่ยว', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `travelling_gallery`
--
ALTER TABLE `travelling_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2022 at 03:58 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksvrhos4_heatstroke`
--
CREATE DATABASE IF NOT EXISTS `ksvrhos4_heatstroke` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ksvrhos4_heatstroke`;
--
-- Database: `ksvrhos4_ksvrarmydata`
--
CREATE DATABASE IF NOT EXISTS `ksvrhos4_ksvrarmydata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ksvrhos4_ksvrarmydata`;
--
-- Database: `ksvrhos4_ksvrfasttrack`
--
CREATE DATABASE IF NOT EXISTS `ksvrhos4_ksvrfasttrack` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ksvrhos4_ksvrfasttrack`;

-- --------------------------------------------------------

--
-- Table structure for table `congenital_diseases`
--

CREATE TABLE `congenital_diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `congenital_diseases`
--

INSERT INTO `congenital_diseases` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'DM', NULL, NULL),
(2, 'HT', NULL, NULL),
(3, 'Gout', NULL, NULL),
(4, 'Heart disease ', NULL, NULL),
(5, 'DLP', NULL, NULL),
(99, 'ไม่มีโรคประจำตัว', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cxrs`
--

CREATE TABLE `cxrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `hn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ศาสนา',
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'อาชีพ',
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ตำแหน่ง',
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'หน่วย',
  `sub` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สังกัด',
  `relation_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ญาติพี่น้อง',
  `relation_tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เบอร์โทรญาติ',
  `relationship` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ความสัมพันธ์',
  `blood_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'หมู่เลือด',
  `cigarette_history` text COLLATE utf8mb4_unicode_ci COMMENT 'ประวัติการสูบบุหรี่',
  `drug_allergy_history` text COLLATE utf8mb4_unicode_ci COMMENT 'ประวัติการแพ้ยา',
  `first_date` date DEFAULT NULL COMMENT 'รักษาครั้งแรก',
  `picname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `privilege_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'สิทธิการรักษา',
  `congenital_disease_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'โรคประจำตัว',
  `doctor_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'แพทย์ประจำตัว',
  `homept_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'ที่อยู่',
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id`, `user_id`, `hn`, `cid`, `title_name`, `first_name`, `last_name`, `gender`, `birthdate`, `age`, `phonenumber`, `religion`, `occupation`, `position`, `unit`, `sub`, `relation_name`, `relation_tel`, `relationship`, `blood_type`, `cigarette_history`, `drug_allergy_history`, `first_date`, `picname`, `pic`, `privilege_id`, `congenital_disease_id`, `doctor_id`, `homept_id`, `admins_id`, `created_at`, `updated_at`) VALUES
(6, 19, '5101340', '3480700010140', 'นาย', 'ธานี', 'มนต์คาถา', 'ชาย', '2510-03-03', 53, '0857559172', 'พุทธ', 'พนักงาน', NULL, NULL, NULL, 'นายณัฐพงษ์  พ่อศรีชา', '0656653699', 'หลาน', 'AB', 'ปฏิเสธ', NULL, '2563-01-10', NULL, 'default.jpg', 1, 1, 4, 14, 1, '2021-02-05 03:10:01', '2021-02-09 12:44:53'),
(7, 20, '3703924', '3479900216815', 'นาย', 'ไกรสวัสดิ์', 'สิงห์สุดี', 'ชาย', '2505-05-04', 58, '0628265141', 'พุทธ', 'พนักงาน', NULL, NULL, NULL, 'นางพัฒนา  สิงห์สุดี', '0628265141', 'ภรรยส', 'O', 'ไม่สูบ', NULL, '2563-01-10', NULL, 'default.jpg', 2, 1, 4, 15, 15, '2021-02-05 03:14:48', '2021-02-14 00:49:25'),
(8, 21, '4303704', '3411400025541', 'จ.ส.อ.', 'อุทัย', 'ชัยชนะ', 'ชาย', '2505-07-01', 58, '0897143701', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางสุภาภรณ์  ชัยชนะ', '0883199232', 'คู่สมรส', 'B', 'ไม่มี', 'ไม่มี', '2564-01-12', NULL, 'default.jpg', 2, 5, 2, 16, 15, '2021-02-05 03:20:42', '2021-02-14 07:22:52'),
(9, 22, '4902193', '1471200025789', 'จ.ส.ท.', 'วีระพงษ์', 'เข็มรัตน์', 'ชาย', '2527-07-20', 37, '0955966638', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางขนิษฐา  สิริพันธ์', '0855486563', 'ภรรยา', 'A', 'ไม่มี', 'ไม่มี', '2563-01-10', NULL, 'default.jpg', 2, 1, 4, 17, 15, '2021-02-05 03:24:27', '2021-02-14 00:51:49'),
(10, 23, '4102484', '3100700672196', 'พ.อ.', 'ธงชาติ', 'โล่งจิต', 'ชาย', '2507-06-23', 56, '0846975959', 'พุทธ', 'ข้าราขการ', NULL, NULL, NULL, 'นางพวงมาลา  โล่งจิตร', '0846975959', 'คู่สมรส', 'A', 'ไม่มี', 'ไม่มี', '2563-10-27', NULL, 'default.jpg', 2, 2, 4, 18, 15, '2021-02-08 02:44:12', '2021-02-08 02:44:12'),
(11, 24, '6102942', '3480600280595', 'พ.ท.', 'สงวน', 'สุนะเทพ', 'ชาย', '2507-11-17', 55, '0934181460', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางเทียม', '0934181460', 'มารดา', 'A', '10 มวน/วัน', 'ไม่มี', '2562-02-18', NULL, 'default.jpg', 2, 2, 4, 19, 15, '2021-02-08 02:56:17', '2021-02-08 02:56:17'),
(12, 25, '3802636', '3410100331646', 'ร.ต.', 'จารุวัฒน์', 'จุลบาล', 'ชาย', '2506-12-23', 56, '0833492358', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางพัชริทนร์  จุลบาล', '0817083043', 'คู่สมรส', 'AB', 'ไม่มี', 'Ampicillin', '2563-12-18', NULL, 'default.jpg', 2, 99, 2, 20, 15, '2021-02-08 05:06:28', '2021-02-14 07:53:19'),
(13, 26, '3603059', '5199900002865', 'ร.ต.', 'สราวุธ', 'นรสาร', 'ชาย', '2504-10-06', 59, '0810535592', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางสมหมาย  นรสาร', '0843706089', 'ภรรยา', 'A', 'ไม่มี', 'ไม่มี', '2563-12-18', NULL, 'default.jpg', 2, 99, 2, 21, 15, '2021-02-08 06:45:06', '2021-02-14 11:02:32'),
(14, 27, '4303900', '4100200005504', 'ร.ต.', 'พิศพร้อม', 'ดาบลาอำ', 'ชาย', '2503-12-04', 60, '0857488032', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'น.ส.ศิริยุภา', '0857488032', 'คู่สมรส', 'B', 'ไม่มี', NULL, '2563-12-18', NULL, 'default.jpg', 2, 1, 2, 22, 15, '2021-02-08 06:58:55', '2021-02-08 07:00:04'),
(15, 28, '6006386', '3349700029087', 'จ.ส.อ.', 'วัชร', 'ศิริภาค', 'ชาย', '2521-08-16', 42, '0892866014', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'น.ส.สุภาพร', '0837937944', 'คู่สมรส', 'O', 'ไม่มี', 'ไม่มี', '2563-09-10', NULL, 'default.jpg', 2, 1, 2, 23, 15, '2021-02-08 07:11:19', '2021-02-08 07:11:19'),
(16, 29, '4402537', '3470101320893', 'จ.ส.อ.', 'พัชรินทร์', 'มาลีลัย', 'ชาย', '2518-01-25', 46, '0857389741', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางอัญญานี', '0857389741', 'คู่สมรส', 'B', 'ไม่มี', 'ไม่มี', '2550-01-31', NULL, 'default.jpg', 2, 5, 2, 24, 15, '2021-02-08 07:27:29', '2021-02-08 07:27:29'),
(17, 30, '4900851', '3470800446594', 'จ.ส.อ.', 'ทัพพ์', 'ไตรวงค์ย้อย', 'ชาย', '2517-01-21', 46, '0821156182', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางบานเย็น', '0821152182', 'คู่สมรส', 'O', 'ไม่มี', NULL, '2563-10-01', NULL, 'default.jpg', 2, 1, 2, 25, 15, '2021-02-08 08:05:20', '2021-02-14 12:42:32'),
(18, 31, '3806488', '3470100173226', 'จ.ส.อ.', 'ธนชิต', 'บุญศรี', 'ชาย', '2516-10-31', 47, '0933293531', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นายอิทธิพล บุญศรี', '0879555439', 'บุตร', 'A', 'ไม่มี', 'ไม่มี', '5263-12-17', NULL, 'default.jpg', 2, 99, 2, 26, 15, '2021-02-08 08:15:57', '2021-02-14 07:16:57'),
(19, 32, '4300991', '3300101082331', 'จ.ส.อ.', 'วานิช', 'สินธุวานิช', 'ชาย', '2516-09-08', 47, '0804196600', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางกัลยา สินธุวานิช', '0807621157', 'คู่สมรส', 'A', 'ไม่มี', 'ไม่แพ้', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 27, 15, '2021-02-09 12:55:07', '2021-02-14 12:45:15'),
(20, 33, '3601072', '3702100556131', 'จ.ส.อ.', 'เหมรัศมิ์', 'แจ้งอารมณ์', 'ชาย', '2516-05-08', 47, '0885508930', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางพิศมัย  แจ้งอารมณ์', '0885508940', 'คู่สมรส', 'O', 'ไม่มี', 'ไม่แพ้', '2551-03-07', NULL, 'default.jpg', 2, 2, 9, 28, 15, '2021-02-09 14:02:30', '2021-02-14 12:31:43'),
(21, 34, '5205791', '3100500653961', 'จ.ส.อ.', 'ดลนิมิตร', 'สถิตยนาค', 'ชาย', '2513-11-08', 50, '0869870238', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'ร.ต.สมบัติ  เฉลิมแสน', '0862221334', 'ผู้บังคับหมวด', 'B', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 1, 4, 29, 15, '2021-02-09 14:11:29', '2021-02-14 08:41:34'),
(22, 35, '4102766', '347010474980', 'จ.ส.อ.', 'นัธนันท์', 'มงคล', 'ชาย', '2513-09-27', 50, '0894195418', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'น.ส.ธัญญารัตน์  วงค์ตาผา', '0857435848', 'คู่สมรส', 'O', 'ไม่มี', 'ไม่แพ้', '2562-02-10', NULL, 'default.jpg', 2, 1, 2, 30, 15, '2021-02-09 14:40:59', '2021-02-14 10:59:49'),
(23, 36, '3801861', '3460500271110', 'จ.ส.อ.', 'ศักดา', 'ศิริพันธุ์', 'ชาย', '2511-07-17', 53, '0625195242', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางมัลลิกา ศิริพันธุ์', '0872358433', 'คู่สมรส', 'O', 'เคยสูบ เลิกนาน 10 ปี', 'ไม่มี', '2563-12-18', NULL, 'default.jpg', 2, 1, 2, 31, 15, '2021-02-09 14:46:17', '2021-02-14 07:58:31'),
(24, 37, '4601671', '3470101174714', 'จ.ส.อ.', 'สุทัศ', 'ทำเลดี', 'ชาย', '2511-11-06', 52, '0854593416', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0854593416', 'คู่', 'O', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 1, 2, 32, 1, '2021-02-09 14:52:27', '2021-02-09 14:52:27'),
(25, 38, '4004523', '3470101472871', 'จ.ส.อ.', 'ศิลปชัย', 'แสนทวี', 'ชาย', '2511-03-04', 52, '0810587701', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางละออ  แสนทวี', '0979268578', 'มารดา', 'O', 'ไม่มี', 'ไม่แพ้', '2550-06-27', NULL, 'default.jpg', 2, 1, 8, 33, 15, '2021-02-09 14:58:57', '2021-02-14 10:52:19'),
(26, 39, '4102764', '3310101947072', 'จ.ส.อ.', 'ณัฐกิตต์', 'ธิราชรัมย์', 'ชาย', '2510-10-26', 53, '0910570138', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'น.ส.บุญชิญา  ธิราชรัมย์', '0809348331', 'บุตร', 'O', 'ไม่มี', 'ไม่มี', '2554-10-19', NULL, 'default.jpg', 2, 1, 2, 34, 15, '2021-02-09 15:05:37', '2021-02-14 12:46:46'),
(27, 40, '4602190', '3420100230122', 'จ.ส.อ.', 'ประดิษฐ์', 'อธิสุมงคล', 'ชาย', '2510-04-10', 53, '0833627151', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางจงกลนี', '0833627151', 'คู่สมรส', 'B', 'ไม่มี', 'ไม่มี', '2562-09-20', NULL, 'default.jpg', 2, 1, 2, 35, 1, '2021-02-09 15:12:40', '2021-02-09 15:12:40'),
(28, 41, '3900275', '3470300189070', 'จ.ส.อ.', 'ภูริภัทธ', 'หงษ์ภู', 'ชาย', '2510-01-02', 54, '0885627381', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0951680868', 'คู่สมรส', 'A', 'ไม่มี', 'ไม่แพ้', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 36, 15, '2021-02-09 15:20:45', '2021-02-14 12:47:57'),
(29, 42, '3603690', '3460600186025', 'จ.ส.อ.', 'โกศล', 'คุ้มบ้านชาติ', 'ชาย', '2507-07-28', 54, '0652453486', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางวารี  คุ้มบ้านชาติ', '0899413920', 'คู่สมรส', 'A', 'ไม่มี', 'ไม่มี', '2562-08-29', NULL, 'default.jpg', 2, 2, 4, 37, 15, '2021-02-09 15:27:26', '2021-02-14 08:02:49'),
(30, 43, '3603692', '4100200004311', 'จ.ส.อ.', 'วัชระ', 'ธิโสภา', 'ชาย', '2507-12-21', 56, '0872866014', 'พุทธ', 'ขรก', NULL, NULL, NULL, 'นางทองเพชร  ธิโสภา', '0811839237', 'คู่สมรส', 'A', 'ไม่มี', 'ไม่แพ้', '2563-12-17', NULL, 'default.jpg', 1, 99, 2, 38, 15, '2021-02-09 15:33:52', '2021-02-14 10:55:44'),
(31, 44, '3801880', '3400101713658', 'จ.ส.อ.', 'ประสิทธิ์', 'หงษ์พงษ์', 'ชาย', '2506-07-12', 57, '0935368100', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางกรุณา  หงษ์พงษ์', '0967106689', 'คู่สมรส', 'O', 'ไม่สูบ', 'penicillin', '2563-12-18', NULL, 'default.jpg', 2, 4, 2, 39, 15, '2021-02-09 15:47:00', '2021-02-14 08:48:45'),
(32, 45, '3600245', '3470400645085', 'จ.ส.อ.', 'นิพนธ์', 'นรสาร', 'ชาย', '2506-05-31', 57, '0613640239', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางมยุรี  นรสาร', '0613640239', 'คู่สมรส', 'AB', 'ไม่มี', 'ไม่มี', '2561-06-09', NULL, 'default.jpg', 2, 5, 2, 40, 15, '2021-02-09 15:51:22', '2021-02-14 08:15:27'),
(33, 46, '5004764', '3470300282029', 'จ.ส.อ.', 'สุริยา', 'ชานันโท', 'ชาย', '2506-04-10', 57, '0819774366', 'พุทธ', 'ขรก', NULL, NULL, NULL, 'นาง', '0819774366', 'คู่', 'A', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 1, 2, 41, 1, '2021-02-09 15:56:23', '2021-02-09 15:56:23'),
(34, 47, '3403990', '3470600395996', 'จ.ส.อ.', 'ประจักษ์', 'เป้งคำภา', 'ชาย', '2506-02-25', 57, '0933969303', 'พุทธ', 'ขรก', NULL, NULL, NULL, 'นาง', '0933969303', 'คู่', 'O', 'ไม่มี', 'ไม่มี', '2558-09-22', NULL, 'default.jpg', 2, 2, 2, 42, 1, '2021-02-09 16:00:53', '2021-02-09 16:00:53'),
(35, 48, '3502374', '5101499042019', 'จ.ส.อ.', 'อัครเดช', 'ผายวงศ์ษา', 'ชาย', '2504-01-09', 60, '0981976998', 'พุทธ', 'ขรก', NULL, NULL, NULL, 'นาง', '0981976998', 'คู่', 'A', 'ไม่มี', 'ไมมี', '2558-06-04', NULL, 'default.jpg', 2, 2, 2, 43, 1, '2021-02-09 16:05:24', '2021-02-09 16:05:24'),
(36, 49, '6103296', '3471500207765', 'จ.ส.อ.', 'โกมล', 'ฮ่มป่า', 'ชาย', '2510-11-10', 51, '0981022905', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางหนุเพียน ฮ่มป่า', '0649809917', 'คู่สมรส', 'O', 'ไม่มี', 'ไม่แพ้', '2564-01-15', NULL, 'default.jpg', 2, 99, 2, 44, 15, '2021-02-09 16:10:34', '2021-02-14 11:09:40'),
(37, 50, '5601344', '3471201111014', 'ส.อ.', 'จำรัส', 'สาระบุตร', 'ชาย', '2515-03-02', 49, '0854577276', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางจันทร์จิรา  สาระบุตร', '0854577276', 'คู่สมรส', 'B', 'ไม่มี', 'ไม่มี', '2558-01-29', NULL, 'default.jpg', 2, 2, 9, 45, 15, '2021-02-09 16:15:07', '2021-02-14 11:15:02'),
(38, 51, '4600338', '3470101348739', 'ส.ต.', 'วีระศักดิ์', 'ภูจอมจิตร', 'ชาย', '2517-01-12', 47, '0800875537', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางพัชรินทร์  ภูจอมจิตร', '0845791924', 'คู่สมรส', 'AB', 'ไม่มี', 'ไม่มี', '2563-12-18', NULL, 'default.jpg', 2, 99, 2, 46, 15, '2021-02-09 16:19:51', '2021-02-14 10:26:59'),
(39, 52, '4601348', '3410600052215', 'พ.ต.', 'วีระชัย', 'ปะมาคะเต', 'ชาย', '2505-02-24', 58, '0892744398', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0892744398', 'คู่', 'A', 'ไม่มี', 'ไม่มี', '2562-02-06', NULL, 'default.jpg', 2, 2, 2, 47, 15, '2021-02-14 04:29:11', '2021-02-14 04:29:11'),
(40, 53, '4302137', '3470101229314', 'ร.อ.', 'ศิริวัฒน์', 'นาคกระโทก', 'ชาย', '2505-02-17', 58, '0819755931', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '081-975-5931', 'คู่', 'O', 'ไม่มี', 'ไม่มี', '2563-12-21', NULL, 'default.jpg', 2, 99, 2, 48, 15, '2021-02-14 04:39:36', '2021-02-14 04:39:36'),
(41, 54, '4304733', '3430300057246', 'ร.ต.', 'สัมพันธ์', 'ภูวิลัย', 'ชาย', '2507-06-12', 56, '0651130134', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0651130134', 'คู่', 'B', 'ไม่มี', 'ไม่มี', '0559-08-24', NULL, 'default.jpg', 2, 1, 2, 49, 15, '2021-02-14 04:49:03', '2021-02-14 04:49:03'),
(42, 55, '3504971', '3430301068861', 'ร.ต.', 'จักรพันธ์', 'กองพิมพ์', 'ชาย', '2508-06-26', 55, '0898636274', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นางไพรพรรณ', '089-863-6274', 'คู่สมรส', 'A', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 50, 15, '2021-02-14 04:58:29', '2021-02-14 04:58:29'),
(43, 56, '4300403', '5461000009596', 'จ.ส.อ.', 'มนตรี', 'ไทธะนุ', 'ชาย', '2515-05-14', 48, '0872224300', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0872224300', 'คู่', 'B', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 51, 15, '2021-02-14 05:07:58', '2021-02-14 05:07:58'),
(44, 57, '3802624', '3540600449432', 'จ.ส.อ.', 'ภานุพร', 'สะอิ้งแก้ว', 'ชาย', '2509-09-07', 54, '084-786-8851', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '084-786-8851', 'คู่', 'A', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 52, 15, '2021-02-14 05:19:18', '2021-02-14 05:19:18'),
(45, 58, '4401032', '3471500004503', 'จ.ส.อ.', 'ระวีวัฒน์', 'รินโพธิ์สาน', 'ชาย', '2510-05-18', 53, '087-234-5687', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '087-234-5687', 'คู่', 'B', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 53, 15, '2021-02-14 05:26:04', '2021-02-14 05:26:04'),
(46, 59, '3500914', '5770600004133', 'จ.ส.อ.', 'สุรชาติ', 'สดโคกกรวด', 'ชาย', '2508-08-25', 55, '0828402066', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0828402066', 'คู่', 'A', 'ไม่มี', 'ไม่มี', '2563-12-28', NULL, 'default.jpg', 2, 2, 4, 54, 15, '2021-02-14 05:32:34', '2021-02-14 05:32:34'),
(47, 60, '5703362', '3440500431591', 'จ.ส.อ.', 'อุทัย', 'ทองนพคุณ', 'ชาย', '2507-02-09', 57, '0933292979', 'อิสลาม', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0939292379', 'คู่', 'O', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 55, 15, '2021-02-14 06:03:59', '2021-02-14 06:03:59'),
(48, 61, '4601808', '3300100456440', 'จ.ส.อ.', 'ณรงค์', 'มงคลเคลือบ', 'ชาย', '2506-05-19', 57, '0850018568', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0850018568', 'คู่', 'B', 'ไม่มี', 'ไม่มี', '2563-10-01', NULL, 'default.jpg', 2, 99, 2, 56, 15, '2021-02-14 06:27:21', '2021-02-14 06:27:21'),
(49, 62, '4902684', '3470300189088', 'จ.ส.อ.', 'บุญไทย', 'หงษ์ภู', 'ชาย', '2514-01-10', 49, '085-468-6423', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0854686423', 'คู่', 'O', 'ไม่มี', 'ไม่มี', '2563-12-21', NULL, 'default.jpg', 2, 99, 2, 57, 15, '2021-02-14 06:36:09', '2021-02-14 06:36:09'),
(50, 63, '4600251', '3300100630580', 'จ.ส.ต.', 'องอาจ', 'ทองศิริ', 'ชาย', '2516-11-04', 47, '0800083449', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'นาง', '0800083449', 'คู่', 'A', 'ไม่มี', 'ไม่มี', '2562-09-26', NULL, 'default.jpg', 2, 1, 2, 58, 15, '2021-02-14 06:41:50', '2021-02-14 06:41:50'),
(51, 64, '4800879', '3419900150296', 'จ.ส.อ.', 'ทศพล', 'บางโท', 'ชาย', '2509-03-25', 54, '0918653641', 'พุทธ', 'ข้าราชการ', NULL, NULL, NULL, 'พิสมัย', '0918653641', 'คู่สมรส', 'A', 'ไม่มี', 'ไม่มี', '2563-01-29', NULL, 'default.jpg', 2, 1, 2, 59, 15, '2021-02-14 06:57:44', '2021-02-14 06:57:44'),
(52, 66, 'Lupa', '8936283618463', 'Administrator', 'Test', 'Admin', 'ชาย', '2021-03-01', 30, '081366763638', 'Islam', 'Lupa', NULL, NULL, NULL, 'Lupa', '081366838362', 'Lupa', 'B', 'Tidak', 'Lupa', '2021-03-10', NULL, 'default.jpg', 2, 1, 2, 60, 65, '2021-03-18 11:30:54', '2021-03-18 11:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctors_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctors_id`, `name`, `specialty`, `created_at`, `updated_at`) VALUES
(2, '58047', 'ร.ท.พาสิน ชาญวิบูลย์', 'เวชกรรม', NULL, NULL),
(4, '58028', 'ร.ท.หญิงธัญจิรา โชคจุฑา', 'เวชกรรม', NULL, NULL),
(7, '22840', 'พ.อ.อภิชาต  สุวาส', 'แพทย์', '2021-02-14 09:31:13', '2021-02-14 09:31:13'),
(8, '30352', 'พ.ญ.นริศรา  สุนนท์', 'อายุรกรรม', '2021-02-14 09:35:03', '2021-02-14 09:35:03'),
(9, '61238', 'ร.ท.หญิงปราณปริยา  มาลัย', 'เวชกรรม', '2021-02-14 11:14:42', '2021-02-14 11:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `drugitems`
--

CREATE TABLE `drugitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icode` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strength` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drugitems`
--

INSERT INTO `drugitems` (`id`, `icode`, `name`, `strength`, `units`, `created_at`, `updated_at`) VALUES
(1, 1000001, '50 % GLUCOSE 50 ML.', '50 %', 'bott', NULL, NULL),
(2, 1000002, 'Albendazole', '200 mg.', 'TAB', NULL, NULL),
(3, 1000003, 'HUMAN ALBUMIN', '20 %', 'VIAL', NULL, NULL),
(4, 1540002, 'acyclovir', '200 mg.', 'เม็ด', NULL, NULL),
(5, 1000005, 'ACYCLOVIR', '800 mg.', 'TAB', NULL, NULL),
(6, 1000006, 'ACYCLOVIR CREAM**', '5 %', 'ซอง (2 g.)', NULL, NULL),
(7, 1000007, 'ALCOHOL 450 ML.', '70 %', 'BOT', NULL, NULL),
(8, 1000008, 'ALCOHOL 450 ML.', '95 %', 'BOT', NULL, NULL),
(9, 1000009, 'ADRENALINE  INJ.', '1 mg./ml.', 'AMP', NULL, NULL),
(10, 1000010, 'ANGELIG** (ESTRADIOL1 MG DROSPIRENONE2MG)', '1 mg.', 'PK', NULL, NULL),
(11, 1520014, 'Air-X (simethicone)', '80 mg.', 'TAB', NULL, NULL),
(12, 1000012, 'SIMETHICONE 40 MG/1ML DROP(AIR-X)', '40 mg.', 'BOT', NULL, NULL),
(13, 1540005, 'Rifampicin', '300 mg.', 'เม็ด (SP.)', NULL, NULL),
(14, 1590008, 'DIANID (Gliclazide 80 mg)', '80 mg.', 'เม็ด', NULL, NULL),
(15, 1590009, '0.45% NSS 1000 ML', '0.45 %', 'ขวด (1,000 ml.)', NULL, NULL),
(16, 1590010, 'DISTACLOR**(Cefaclor 125mg/5ml)', '125 mg.', 'ขวด', NULL, NULL),
(17, 1590007, 'HYDROXYCHLOROQUINE', '200 mg.', 'เม็ด', NULL, NULL),
(18, 1000021, 'AMLODIPINE', '5 mg.', 'TAB', NULL, NULL),
(19, 1000022, 'ALUMINIUM HYDROXIDE', '500 mg.', 'TAB', NULL, NULL),
(20, 1000023, 'ALLOPUrinol', '100 mg.', 'TAB', NULL, NULL),
(21, 1000024, 'ALLOPURINOL', '300 mg.', 'TAB', NULL, NULL),
(22, 1000025, 'ALUM MILK', '240 ml.', 'BOT', NULL, NULL),
(23, 1000026, '(Antacil)Aluminium hydroxide/Magnesium', '200/200 mg.', 'TAB', NULL, NULL),
(24, 1000027, 'AMIKACIN  INJ.', '250 mg./ml.', 'VIAL', NULL, NULL),
(25, 1000028, 'AMMONIA', '450 ml.', 'bott', NULL, NULL),
(26, 1000030, 'AMINOSOL-10 ( ESSENTIAL  AMINO  ACID)', '10 ml.', 'BOTT', NULL, NULL),
(27, 1000031, 'GLAZER**(GLIMEPIRIDE2MG)', '2 mg.', 'TAB', NULL, NULL),
(28, 1000032, 'AMOXYcillin  SYRUP', '250 mg/5ml', 'bott', NULL, NULL),
(29, 1000033, 'amitriptyline', '10 mg.', 'TAB', NULL, NULL),
(30, 1000034, 'AMITRIPTYLINE', '25 mg.', 'TAB', NULL, NULL),
(31, 1000035, 'AUGMANTIN SUS. (AMOX125MG/CLAVU31.25 MG)', '156 mg/5ml', 'BOTT', NULL, NULL),
(32, 1000036, 'AUGMENTIN SYR.[AMOXY 250 MG./CLAVU 62.5', '375 mg', 'BOTT', NULL, NULL),
(33, 1000037, 'AMOXYcillin', '250 mg.', 'CAP', NULL, NULL),
(34, 1000038, 'AMOXYcillin', '500 mg.', 'CAP', NULL, NULL),
(35, 1000039, 'AMOXYcillin  SYRUP', '125 mg/5ml', 'bott.', NULL, NULL),
(36, 1000040, 'ยาคุมกำเนิด  28  เม็ด (X)', '-', 'PK', NULL, NULL),
(37, 1000041, 'AMPICILLIN  INJ.', '1 g.', 'VIAL', NULL, NULL),
(38, 1000042, 'AMPICILLIN  INJ.', '500 mg.', 'VIAL', NULL, NULL),
(39, 1000043, 'VITAMIN D3,', '0.25 mcg.', 'CAP', NULL, NULL),
(40, 1000044, 'ASPIRIN', '60 mg.', 'TAB', NULL, NULL),
(41, 1000045, 'ASPIRIN', '300 mg.', 'TAB', NULL, NULL),
(42, 1000047, 'AERIUS (DESLORATADINE)**', '5 mg.', 'TAB', NULL, NULL),
(43, 1000048, 'ARICEPT**(DONEPEZIL 10MG)', '10 mg.', 'tab', NULL, NULL),
(44, 1000049, 'Artane(TRIHEXYphenidyl Hcl )', '2 mg.', 'TAB', NULL, NULL),
(45, 1000050, 'ACTOS( PIOGLITAZONE)', '30 mg.', 'tab', NULL, NULL),
(46, 1000051, 'ANTACID', '500 mg.', 'TAB', NULL, NULL),
(47, 1000052, 'ATRACURIUM INJ.10 MG/ML (TRACRIUM)', '10 mg./ml.', 'AMP', NULL, NULL),
(48, 1000053, 'ACTIFED  [LOCAL]**', '2.5/60 mg.', 'TAB', NULL, NULL),
(49, 1000054, 'ACTIFED SYR.[LOCAL]**', '1.25/30 mg/5ml', 'BOT', NULL, NULL),
(50, 1000055, 'ATENOLOL', '100 mg.', 'TAB', NULL, NULL),
(51, 1000056, 'ATROPINE SULFATE 0.6 MG/ML INJ.', '0.6 mg./ml.', 'AMP', NULL, NULL),
(52, 1000057, 'ACTRAPID INSULIN', '100 units/ml.', 'VIAL', NULL, NULL),
(53, 1000058, 'ATARAX (HYDROXYZINE)', '10 mg.', 'TAB', NULL, NULL),
(54, 1000059, 'HYDROXYZINE SYRUP 60 ML', '10 mg/5ml', 'BOT', NULL, NULL),
(55, 1000061, 'P.M.K.BALM( Hosp)', '25 g.', 'TUBE', NULL, NULL),
(56, 1000062, 'BCG VACCINE', '-', 'Vial', NULL, NULL),
(57, 1000063, 'BUSCOPAN TAB. [Local]', '10 mg.', 'TAB', NULL, NULL),
(58, 1000064, 'BUSCOPAN  INJ.[LOCAL]', '20 mg./ml.', 'AMP', NULL, NULL),
(59, 1000065, 'BD. CREAM', '500 mg.', 'JAR', NULL, NULL),
(60, 1000066, 'BD. CREAM', '5 mg.', 'tube', NULL, NULL),
(61, 1000067, 'BROMHEXINE TAB**', '8 mg.', 'TAB', NULL, NULL),
(62, 1000068, 'BROMHEXINE SYRUP 60 ML**', '4 mg/5ml', 'BOTT', NULL, NULL),
(63, 1000069, 'BIOCALM (TOLPERISONE 50 MG)', '50 mg.', 'TAB', NULL, NULL),
(64, 1000070, 'BERODUAL  MDI', '200 mg./dose', 'BOTT', NULL, NULL),
(65, 1000071, 'BERODUAL FORTE', '4 ml.', 'VIAL', NULL, NULL),
(66, 1590003, 'SOPROXEN (Naproxen)', '275 mg.', 'เม็ด', NULL, NULL),
(67, 1590004, 'Galvus Met**', '50/1000 mg.', 'เม็ด', NULL, NULL),
(68, 1590006, 'HIDRASEC (Racecadotril)', '100 mg.', 'แค็บซูล', NULL, NULL),
(69, 1590005, 'FORXIGA** (Dapaglifloxin)', '10 mg.', 'เม็ด', NULL, NULL),
(70, 1000078, 'BACTRIM(Sulfa+Trimetroprim)', '400/80 mg.', 'TAB', NULL, NULL),
(71, 1000079, 'BETAMETHASONE CREAM 5 GM./ตลับ', '0.1 %', 'tube', NULL, NULL),
(72, 1000080, 'BETAMETHASONE CREAM, 500 G/กระปุก', '0.1 %', 'JAR', NULL, NULL),
(73, 1000081, 'COAPROVEL(irbesartan+HCTZ)', '300/12.5 mg.', 'TAB', NULL, NULL),
(74, 1000082, 'CARBAMAZEPINE', '200 mg.', 'TAB', NULL, NULL),
(75, 1000083, 'CARBON POWDER', '5 mg.', 'PACK', NULL, NULL),
(76, 1000084, 'COMBIZYM [Local]', '5000 iu./dose', 'TAB', NULL, NULL),
(77, 1000085, 'ColCHICINE', '0.6 mg.', 'TAB', NULL, NULL),
(78, 1000087, 'CALCIUM CARBONATE', '1000 mg.', 'TAB', NULL, NULL),
(79, 1000088, 'CALCIUM GLUCONATE INJ.', '50 mg./ml.', 'VIAL', NULL, NULL),
(80, 1000089, 'CYCLO-PROGYNOVA (X)', '2 mg.', 'PK', NULL, NULL),
(81, 1000090, 'CADUET** [AMLO./ATORVAS.]', '10/20 mg.', 'TAB', NULL, NULL),
(82, 1000091, 'CANDID EAR DROP (CLOTRIMAZOLE)', '-', 'BOTT', NULL, NULL),
(83, 1000092, 'CLINDAMYCIN', '300 mg.', 'cap', NULL, NULL),
(84, 1000093, 'CLINDAMYCIN', '150 mg.', 'แค็บซูล', NULL, NULL),
(85, 1000095, 'CARDURA  XL(Doxazosin)**', '4 mg.', 'TAB', NULL, NULL),
(86, 1000096, 'CAL-D-VITA**', '1000 mg.', 'tab', NULL, NULL),
(87, 1000097, 'CAFERGOT  (X)  (Local)', '1/100 mg.', 'tab', NULL, NULL),
(88, 1000098, 'CefaZOLIN INJ.', '1 g.', 'VIAL', NULL, NULL),
(89, 1000099, 'CHLORHEXIDINE SCRUB 5000 ML', '5000 ml.', 'gal.', NULL, NULL),
(90, 1000100, 'CHLORHEXIDINE SOLUTION 5000 ML', '5000 ml.', 'gal.', NULL, NULL),
(91, 1000101, 'CELEBREX** (Celecoxib)', '200 mg.', 'TAB', NULL, NULL),
(92, 1000102, 'CALAMINE LOTION', '15 %', 'BOT', NULL, NULL),
(93, 1000103, 'CIMETIDINE', '400 mg.', 'TAB', NULL, NULL),
(94, 1000104, 'CINNARIZINE**', '25 mg.', 'TAB', NULL, NULL),
(95, 1000105, 'CIPROFLOXacin', '500 mg.', 'TAB.', NULL, NULL),
(96, 1000106, 'CIPROFLOXacin  OD', '1000 mg.', 'TAB.', NULL, NULL),
(97, 1000107, 'CIPROFLOXacin', '250 mg.', 'TAB', NULL, NULL),
(98, 1000108, 'CIPROFLOXacin INJ.', '200 mg.', 'VIAL', NULL, NULL),
(99, 1000109, 'CYPROHEPTAdine  SYRUP  60 ML.', '2 mg/5ml', 'BOTT', NULL, NULL),
(100, 1000110, 'CYPROHEPTAdine TAB.', '4 mg.', 'TAB', NULL, NULL),
(101, 1000111, 'CPM (Chlorpheniramine TAB.)', '4 mg.', 'TAB', NULL, NULL),
(102, 1000112, 'CPM (Chlorpheniramine INJ.)', '10 mg./1ml.', 'Amphule (1 ml.)', NULL, NULL),
(103, 1000113, 'CPM (Chlorpheniramine SYRUP)', '2 mg/5ml', 'BOT', NULL, NULL),
(104, 1000114, 'CURAM TAB', '1 g.', 'TAB', NULL, NULL),
(105, 1000115, 'CEREBROLYCIN** INJ.', '10 ml.', 'vial', NULL, NULL),
(106, 1000117, 'CHLORAMphenicol  EYE Drop 5 ml.', '0.5 %', 'BOTT', NULL, NULL),
(107, 1000118, 'Chloramphenicol EAR Drop  10 ml.', '1 %', 'BOTT', NULL, NULL),
(108, 1000119, 'CHLORAMphenicol  EYE OINTMENT 1% 5 G', '1 %', 'tube', NULL, NULL),
(109, 1000120, 'CURAM INJ.', '1.2 g.', 'VIAL', NULL, NULL),
(110, 1000121, 'CLARINASE(lora+pseudo)**', '5/120 mg./dose', 'TAB', NULL, NULL),
(111, 1540004, 'MEVALOTIN**(PRAVASTATIN)(X)', '40 mg.', 'เม็ด', NULL, NULL),
(112, 1000122, 'CLARITYNE', '10 mg.', 'tab', NULL, NULL),
(113, 1000123, 'CLARITYNE SYRUP [LOCAL]', '5 mg/5ml', 'bott', NULL, NULL),
(114, 1000124, 'CRESTOR ** (ROSUVASTATIN)  (X)', '10 mg.', 'TAB', NULL, NULL),
(115, 1000125, 'CEFTRIaxone INJ.', '1 g.', 'VIAL', NULL, NULL),
(116, 1000126, 'CLOTRIMAZOLE CREAM  5  GM', '1 %', 'TUBE', NULL, NULL),
(117, 1000127, 'CLOTRIMAZOLE CREAM', '500 mg.', 'jar', NULL, NULL),
(118, 1000128, 'CLOTRIMAZOLE VAGINAL SUPPO.', '0.1 g.', 'TAB', NULL, NULL),
(119, 1000129, 'CETIRIZINE TAB.', '10 mg.', 'TAB', NULL, NULL),
(120, 1000130, 'CRAVIT TAB (LEVOFLOXACIN 500 MG)', '500 mg.', 'TAB', NULL, NULL),
(121, 1520017, 'CRAVIT INJ.500 MG./100 ML.', '500 mg.', 'Vial', NULL, NULL),
(122, 1000132, 'COVERSYL (perindopril)**', '4 mg.', 'TAB', NULL, NULL),
(123, 1000133, 'COVERSYL PLUS**', '4+1.25 mg.', 'TAB', NULL, NULL),
(124, 1000134, 'CAVINTON FORTE**', '10 mg.', 'TAB', NULL, NULL),
(125, 1000135, 'CLOXAcillin  INJ.', '1 g.', 'VIAL', NULL, NULL),
(126, 1000136, 'CLOXAcillin  SYRUP', '125 mg/5ml', 'BOT', NULL, NULL),
(127, 1000137, 'D 10 N 1/2  1000 ML.', '10 %', 'BOTT', NULL, NULL),
(128, 1000138, 'D-10-W 1000 ML.', '10 %', 'BOT', NULL, NULL),
(129, 1000139, 'diazepam', '2 mg.', 'TAB', NULL, NULL),
(130, 1000140, 'DIAZEPAM', '5 mg.', 'TAB', NULL, NULL),
(131, 1000141, '5%D-N/2  1000 ML.', '5 %', 'BOT', NULL, NULL),
(132, 1000142, '5%D-N/3  1000 ML.', '5 %', 'BOT', NULL, NULL),
(133, 1000143, '5%D-NSS 1000 ML.', '5 %', 'BOTT', NULL, NULL),
(134, 1000144, 'D-5-W 100 ML', '5 %', 'BOTT', NULL, NULL),
(135, 1000145, 'GLICLAZIDE (Beclazide MR)**', '30 mg.', 'TAB', NULL, NULL),
(136, 1000146, 'DOBUTAMINE  INJ.', '250 mg.', 'AMP', NULL, NULL),
(137, 1000147, 'dicloFENAC  TAB.', '25 mg.', 'TAB', NULL, NULL),
(138, 1000148, 'dicloFENAC  INJ.', '75 mg./3ml', 'AMP', NULL, NULL),
(139, 1000149, 'BISACODYL', '5 mg.', 'TAB', NULL, NULL),
(140, 1000150, 'DICLOXAcillin', '250 mg.', 'CAP', NULL, NULL),
(141, 1000151, 'DICLOXAcillin SYR.', '62.5 mg.', 'BOTT', NULL, NULL),
(142, 1000152, 'DIGOXIN', '0.25 mg.', 'TAB', NULL, NULL),
(143, 1000153, 'DAFLON **[LOCAL]', '500 mg.', 'TAB', NULL, NULL),
(144, 1000154, 'DILANTIN( PHYNYTOIN ) LOCAL', '100 mg.', 'TAB', NULL, NULL),
(145, 1000155, 'DILATREND[LOCAL] Carvedilol L12.5MG', '12.5 mg.', 'tab', NULL, NULL),
(146, 1000156, 'DORMICUM TAB (MIDAZOLAM )15 MG', '15 mg.', 'TAB', NULL, NULL),
(147, 1000157, 'DORMICUM INJ  (MIDAZOLAM )', '5 mg./ml.', 'VIAL', NULL, NULL),
(148, 1000158, 'DIMENHYDRINATE TAB.', '50 mg.', 'TAB', NULL, NULL),
(149, 1000159, 'DIMENHYDRINATE INJ.', '50 mg./ml.', 'AMP', NULL, NULL),
(150, 1000160, 'DYNASTAT  INJ.**', '40 mg.', 'Vial', NULL, NULL),
(151, 1000161, 'DUOFILM  15  ML', '16.7 %', 'BOTT', NULL, NULL),
(152, 1000162, 'DIOVAN(VALSARTAN)**', '160 mg.', 'TAB', NULL, NULL),
(153, 1580020, 'Simvastatin (BESTATIN 10)', '10 mg.', 'เม็ด', NULL, NULL),
(154, 1000165, 'DOPAMINE INJ.', '250 mg./10ml.', 'AMP.', NULL, NULL),
(155, 1000166, 'DPT VACCINE', '.', 'Vial', NULL, NULL),
(156, 1000167, 'DISTACLOR MR', '375 mg.', 'TAB', NULL, NULL),
(157, 1000168, 'DEXTROmetrophane TAB.', '15 mg.', 'TAB', NULL, NULL),
(158, 1000169, 'DIERTINA [dihydroergocristine]**', '3 mg.', 'CAP', NULL, NULL),
(159, 1000170, 'DTP-HB VACCINE', '-', 'Vial', NULL, NULL),
(160, 1000171, 'DEWAX**  EAR  DROP', '5 mg.', 'BOTT', NULL, NULL),
(161, 1000172, 'DOXYCYCLINE', '100 mg.', 'TAB', NULL, NULL),
(162, 1000173, 'DEXAmethazone INJ 1 ml', '4 mg./1ml.', 'Amphule (1 ml.)', NULL, NULL),
(163, 1000174, 'DUXARIL**', '30+10 mg.', 'TAB', NULL, NULL),
(164, 1000175, 'EBIXA**', '10 mg.', 'TAB', NULL, NULL),
(165, 1000176, 'EXFORGE** (Amlodipine+Valsartan)', '5/160 mg.', 'TAB', NULL, NULL),
(166, 1000177, 'ERGOTHYL INJ(METHYLERGOMETRINE)', '0.2 mg./ml.', 'amp', NULL, NULL),
(167, 1000178, 'ELOMET CREAM 5 GM', '0.1 %', 'TUBE', NULL, NULL),
(168, 1000179, 'ENALAPRIL', '20 mg.', 'TAB', NULL, NULL),
(169, 1000180, 'ENALAPRIL', '5 mg.', 'TAB', NULL, NULL),
(170, 1000181, 'EPHEDRINE INJ', '30 mg./ml.', 'amp', NULL, NULL),
(171, 1000182, 'ESPOGEN INJ.', '4000 iu.', '[Syringe]', NULL, NULL),
(172, 1000183, 'EPREX  INJ.', '4000 iu.', 'หลอด', NULL, NULL),
(173, 1000184, 'ERIC (TRCS-ANTIRABIES) 200 IU/ML  5ML', '200 iu./ml.', 'VIAL', NULL, NULL),
(174, 1000185, 'ERYTHROmycin** TAB.', '250 mg.', 'TAB', NULL, NULL),
(175, 1000186, 'ERYTHROmycin  SYRUP', '125 mg/5ml', 'BOT', NULL, NULL),
(176, 1000187, 'ETHAMBUTOL', '400 mg.', 'TAB', NULL, NULL),
(177, 1000188, 'ELTROXIN (LEVOTHYROXINE)', '0.1 mg.', 'TAB', NULL, NULL),
(178, 1000189, 'EXELON PATCH**', '9 mg.', 'pad', NULL, NULL),
(179, 1000190, 'EZETROL**(EZETIMIBE)', '10 mg.', 'tab', NULL, NULL),
(180, 1000191, 'FBC**', '.200 mg.', 'TAB', NULL, NULL),
(181, 1000192, 'FYBOGEL**', '3.5 g.', 'ซอง', NULL, NULL),
(182, 1000193, 'FUCIDIN CREAM 5 GM.', '2 %', 'TUBE', NULL, NULL),
(183, 1000194, 'FUCITHALMIC  ACID EYE DROP 5g', '1 %', 'หลอด', NULL, NULL),
(184, 1000195, 'FOLIC ACID', '5 mg.', 'TAB', NULL, NULL),
(185, 1000196, 'FORMALDEHYDE SOLUTION(FORMALIN)', '-', 'BOT', NULL, NULL),
(186, 1000197, 'CARBOCYSTEINE SYRUP**', '250 mg/5ml', 'BOT.', NULL, NULL),
(187, 1000198, 'FORTUM  INJ.', '1 g.', 'VIAL', NULL, NULL),
(188, 1000199, 'cefTAZIDIME INJ.', '1 g.', 'VIAL', NULL, NULL),
(189, 1000200, 'FRAXIPARINE INJ.**', '0.6 ml.', 'Vial', NULL, NULL),
(190, 1000201, 'GLIBENclamide', '5 mg.', 'TAB', NULL, NULL),
(191, 1000202, 'GEMFIBROZIL (Local)', '600 mg.', 'TAB', NULL, NULL),
(192, 1000203, 'GLUTARALDEHYDE SOULTION', '2 %', 'GAL', NULL, NULL),
(193, 1000204, 'GRISEOFULVIN', '500 mg.', 'TAB', NULL, NULL),
(194, 1000205, 'GENTAmicin  INJ.', '80 mg./2ml.', 'Vial', NULL, NULL),
(195, 1000206, 'GLUTARAL  DEHYDE', '2 %', 'GALLON', NULL, NULL),
(196, 1000207, 'HEPATITIS B (CHILD) VACCINE', '-', 'Vial', NULL, NULL),
(197, 1000208, 'HCTZ', '50 mg.', 'TAB', NULL, NULL),
(198, 1000210, 'HALOPERIDOL', '5 mg.', 'TAB', NULL, NULL),
(199, 1000211, 'HAEMACCEL', '3.5 %', 'BOT', NULL, NULL),
(200, 1000212, 'HEPATITIS B VACCINE 20MCG/ML', '20 mcg./ml.', 'VIAL', NULL, NULL),
(201, 1000213, 'HISTA-OPH EYE DROPS 10 ML.', '- %', 'BOT', NULL, NULL),
(202, 1000214, 'IBUPROFEN', '400 mg.', 'TAB', NULL, NULL),
(203, 1000215, 'INFLUENZA  VACCINE  ADULT', '-', 'amp', NULL, NULL),
(204, 1000216, 'INFLUENZA VACCINE  CHILD', '-', 'amp', NULL, NULL),
(205, 1000217, 'ILIADINE 10 ML.', '0.025 %', 'BOT', NULL, NULL),
(206, 1000218, 'IMUGINS**', '150 mg.', 'CAP', NULL, NULL),
(207, 1000220, 'Isosorbide dinitrate  SL TAB.', '5 mg.', 'TAB', NULL, NULL),
(208, 1000221, 'ISONIAZID', '100 mg.', 'TAB', NULL, NULL),
(209, 1000222, 'ISOPTIN SR', '240 mg.', 'tab', NULL, NULL),
(210, 1000223, 'CLARITHROmycin (KLACID LOCAL)', '500 mg.', 'TAB', NULL, NULL),
(211, 1000225, 'KCL 500 MG', '10 mEq.', 'TAB', NULL, NULL),
(212, 1000226, 'KCL (Potassium chloride)20 MEQ INJ', '1.5G/10ML', 'AMP', NULL, NULL),
(213, 1000227, 'KIDMIN 200 ML/BOT INJ.', '-', 'BOT', NULL, NULL),
(214, 1000228, 'KAMILLOSAN M**', '-', 'BOT', NULL, NULL),
(215, 1000229, 'kenacort-A INJ (TRIAMCINOLONE)', '10 mg./ml.', 'VIAL', NULL, NULL),
(216, 1000231, 'KEPPRA', '500 mg.', 'TAB', NULL, NULL),
(217, 1000232, 'ketoCONAZOLE', '200 mg.', 'TAB', NULL, NULL),
(218, 1000233, 'LUBRICATING JELLY(K-Y)', '-', 'TUBE', NULL, NULL),
(219, 1000234, 'LINCOMYCIN INJ.10 ML', '300 mg./ml.', 'AMP', NULL, NULL),
(220, 1000235, 'LEGALON (SILYMARIN)**', '140 mg.', 'CAP', NULL, NULL),
(221, 1000236, 'LOPERAMIDE HCL', '2 mg.', 'CAP', NULL, NULL),
(222, 1000237, 'ATORVAStatin [LIPITOR]**(X)', '20 mg.', 'TAB', NULL, NULL),
(223, 1000238, 'LYRICA**', '75 mg.', 'cap', NULL, NULL),
(224, 1000239, 'furosemide (LASIX)', '40 mg.', 'TAB', NULL, NULL),
(225, 1000240, 'FUROSEMIDE(LASIX)', '500 mg.', 'TAB', NULL, NULL),
(226, 1000241, 'FUROSEMIDE INJ.', '20 mg./2ml.', 'AMP', NULL, NULL),
(227, 1000242, 'LASIX INJ  (HIGH  DOSE)', '250 mg./25ml.', 'vial', NULL, NULL),
(228, 1000243, 'LACTATE RINGER 1000ml', '-', 'BOT', NULL, NULL),
(229, 1000244, 'LEVEMIR FLEXPEN300 IU', '300', 'vial', NULL, NULL),
(230, 1000245, 'M.CARMINATIVE 180 ML/BOT.', '- ml.', 'BOT', NULL, NULL),
(231, 1000246, 'M.TUSSIVE  60 ML/BOT.', '-', 'bot', NULL, NULL),
(232, 1000247, 'MIACALCIC NASAL SPRAY', '200 units/ml.', 'BOT', NULL, NULL),
(233, 1000248, 'PSEUDOEPHEDRINE', '60 mg.', 'TAB', NULL, NULL),
(234, 1000250, 'MEBENDAZOLE SUSP.', '100 mg.', 'bott', NULL, NULL),
(235, 1000251, 'MUCOSTA**', '100 mg.', 'TAB', NULL, NULL),
(236, 1000252, 'MADOPA(LEVODOPA+BENSERAZIDE)', '200+50 mg.', 'TAB', NULL, NULL),
(237, 1000253, 'MODURETIC(AMILORIDE+HCTZ)', '5+50 mg.', 'TAB', NULL, NULL),
(238, 1000254, 'MetFORMIN  TAB.', '500 mg.', 'TAB', NULL, NULL),
(239, 1000255, 'MEASLES VACCINE 1 DOSE', '.', 'Amphule', NULL, NULL),
(240, 1000256, 'Minidiab (GLIPIZIDE )', '5 mg.', 'TAB', NULL, NULL),
(241, 1000257, 'MONOLIN', '20 mg.', 'tab', NULL, NULL),
(242, 1000258, 'MINIPRESS(PRAZOSIN)', '2 mg.', 'TAB', NULL, NULL),
(243, 1000259, 'MAGNESIUM SULFATE  INJ.,10ML/AMP.', '10 %', 'AMP', NULL, NULL),
(244, 1000260, 'MORPHINE', '10 mg.', 'TAB', NULL, NULL),
(245, 1000261, 'MORPHINE  INJ.', '10 mg./ml.', 'AMP', NULL, NULL),
(246, 1000262, 'MERISLON (BETAHISTINE)', '12 mg.', 'TAB', NULL, NULL),
(247, 1000263, 'UREA CREAM + SALICYLIC ACID', '.20 g.', 'TUBE', NULL, NULL),
(248, 1000264, 'METHYLCOBOL**(MECOBALAMIN)', '500 mcg.', 'TAB', NULL, NULL),
(249, 1000265, 'MIXTARD  PENFILL 3 ML[Insulin]', '100 unit/ml.', 'VIAL', NULL, NULL),
(250, 1000266, 'MOTILIUM  TAB. (Local) (Domperidone)', '10 mg.', 'TAB', NULL, NULL),
(251, 1000267, 'MOTILIUM  SRY.(Local) (Domperidone)', '5 mg./5ml.', 'BOT', NULL, NULL),
(252, 1000268, 'Metronidazole  TAB.', '200 mg.', 'TAB', NULL, NULL),
(253, 1000269, 'MetroNIDAZOLE INJ. 100 ML', '5 mg./ml.', 'VIAL', NULL, NULL),
(254, 1000270, 'METHOTREXATE (X)', '2.5 mg.', 'TAB', NULL, NULL),
(255, 1000271, 'MULTIVITAMIN', '-', 'TAB', NULL, NULL),
(256, 1000272, 'MULTIVITAMIN  SYR', '-', 'BOTT', NULL, NULL),
(257, 1000273, 'NARCAN INJ', '0.4 mg./ml.', 'VIAL', NULL, NULL),
(258, 1000274, 'NICLOSAMIDE', '500 mg.', 'TAB', NULL, NULL),
(259, 1000275, 'NIDOL**', '100 mg.', 'TAB', NULL, NULL),
(260, 1000276, 'NORFLEX**', '100 mg.', 'tab', NULL, NULL),
(261, 1000277, 'NorFLOXACIN', '400', 'TAB', NULL, NULL),
(262, 1000278, 'NORGESIC [Local]**', '500 mg.', 'TAB', NULL, NULL),
(263, 1000279, 'NACLONG ** ( Acethylcysteine)', '600 mg.', 'TAB', NULL, NULL),
(264, 1000280, 'NELAPINE', '5 mg.', 'TAB', NULL, NULL),
(265, 1000281, 'INSULATARD PENFILL 3 ML.', '100 unit/ml.', 'VIAL', NULL, NULL),
(266, 1000282, 'NASONEX** NASAL SPRAY', '50 mcg./dose', 'BOT', NULL, NULL),
(267, 1000283, 'NSS 0.9 % 1000 ML', '0.9 %', 'BOT', NULL, NULL),
(268, 1000284, 'NSS 0.9 % 100  ML', '0.9 %', 'bott', NULL, NULL),
(269, 1000285, 'NITRODERM TTS', '25 mg.', 'PAD', NULL, NULL),
(270, 1000286, 'NITROGLYCERIN 1 MG/ML. INJ.,10 ML/AMP.', '1 mg./ml.', 'AMP', NULL, NULL),
(271, 1000287, 'NATRILIX SR**', '1.5 mg.', 'TAB', NULL, NULL),
(272, 1570027, 'CELECOXIB**[LOCAL]', '200 mg.', 'tablet', NULL, NULL),
(273, 1000288, 'NOOTROPIL **INFUSION SOLUTION', '12 g./ml.', 'BOTT', NULL, NULL),
(274, 1000289, 'NYSTATIN VAGINAL SUPPO.', '100000 iu.', 'TAB', NULL, NULL),
(275, 1000290, 'NorVASC', '10 mg.', 'TAB', NULL, NULL),
(276, 1000291, 'NOVONORM  1  MG (REPAGLINIDE1 MG)', '1 mg.', 'TAB', NULL, NULL),
(277, 1000292, 'ofloxacin', '100 mg.', 'TAB', NULL, NULL),
(278, 1000293, 'Ofloxacin 200(Konovit)', '200 mg.', 'TAB', NULL, NULL),
(279, 1000294, 'OMEPRAZOLE', '20 mg.', 'CAP', NULL, NULL),
(280, 1000295, 'OMEPRAZOLE INJ', '40 mg./dose', 'vial', NULL, NULL),
(281, 1000296, 'OMNICEF** (CEFDINIR )', '100 mg.', 'CAP', NULL, NULL),
(282, 1000297, 'OMNICEF SYR** (CEFDINIR)', '125/5 mg./ml.', 'BOTT', NULL, NULL),
(283, 1000298, 'OPV  VACCINE', '20 DOSE', 'Vial', NULL, NULL),
(284, 1000299, 'ORS', '-', 'ซอง', NULL, NULL),
(285, 1000300, 'ors ( เด็ก) 4.25 GM', '-', 'ซอง', NULL, NULL),
(286, 1000301, 'OXYTOCIN 10 IU/ML INJ. (X)', '10 iu.', 'AMP', NULL, NULL),
(287, 1000302, 'PLENDIL( FELODIPINE)', '5 mg.', 'TAB', NULL, NULL),
(288, 1000303, 'PROGYNOVA (X)', '1 mg.', 'PACK', NULL, NULL),
(289, 1000304, 'POLY TAR SHAMPOO', '-', 'BOT', NULL, NULL),
(290, 1000305, 'POLY TAR  SOAP', '-', 'กล่อง', NULL, NULL),
(291, 1000306, 'PULMICORT RESPULE', '500 mcg./ml.', 'VIAL', NULL, NULL),
(292, 1000307, 'PULMICORT TURBUHALER 200 MCG', '200 mcg./dose', 'bott', NULL, NULL),
(293, 1000308, 'PREMARIN(ESTROGEN) (X)', '0.625 mg.', 'TAB', NULL, NULL),
(294, 1000310, 'PHENOBARBITAL', '60 mg.', 'TAB', NULL, NULL),
(295, 1000311, 'PHENERGAN INJ 50 MG 2 ML**', '50 mg./ml.', 'AMP', NULL, NULL),
(296, 1000312, 'PREDNISOLONE TAB.', '5 mg.', 'TAB', NULL, NULL),
(297, 1000313, 'PROPRANOLOL', '10 mg.', 'TAB', NULL, NULL),
(298, 1000314, 'PROPRANOLOL', '40 mg.', 'TAB', NULL, NULL),
(299, 1000315, 'PARACETAMOL', '500 mg.', 'TAB', NULL, NULL),
(300, 1000316, 'Paracetamol', '325 mg.', 'TAB', NULL, NULL),
(301, 1000317, 'PARACETAMOL  SYRUP', '120 mg/5ml', 'BOT', NULL, NULL),
(302, 1000318, 'PARACETAMOL  DROP', '60 mg./0.6ml.', 'BOTT', NULL, NULL),
(303, 1000319, 'PARIET*', '10 mg.', 'TAB', NULL, NULL),
(304, 1000320, 'PARACETAMOL SYRUP', '250 mg/5ml', 'BOTT', NULL, NULL),
(305, 1000321, 'METOCLOPRAMIDE  .', '10 mg.', 'TAB', NULL, NULL),
(306, 1000322, 'MetoCLOPRAMIDE (Plasil). INJ.', '10 mg./2ml.', 'AMP', NULL, NULL),
(307, 1000323, 'NEOSTIGMINE 2.5 MG/ML INJ.(PROSTIGMINE)', '2.5 mg./ml.', 'ML', NULL, NULL),
(308, 1000324, 'PETROLEUM JELLY  450 GM', '-', 'JAR', NULL, NULL),
(309, 1000325, 'PROCTOSEDYL OINTMENT 15 GM', '- g.', 'tube', NULL, NULL),
(310, 1000326, 'PROCTOSEDYL RECTAL SUPPO.', '-', 'TAB', NULL, NULL),
(311, 1000327, 'PROPYLTHIOURACIL[PTU.]', '50 mg.', 'TAB', NULL, NULL),
(312, 1000328, 'PLAVIX (ORIGINAL)', '75 mg.', 'TAB', NULL, NULL),
(313, 1000329, 'POVIDONE  IODINE 450 ML.', '10 %', 'BOTT', NULL, NULL),
(314, 1000330, 'POVIDONE IODINE SCRUB 7.5%[500 ML.]', '7.5 %', 'BOTT', NULL, NULL),
(315, 1000331, 'PROVERA  (X)', '5 mg.', 'TAB', NULL, NULL),
(316, 1000332, 'PYRAZINAMIDE', '500 mg.', 'TAB', NULL, NULL),
(317, 1000333, 'PRAZIQUANTEL', '600 mg.', 'TAB', NULL, NULL),
(318, 1000334, 'RIFAMPICIN', '600 mg.', 'TAB', NULL, NULL),
(319, 1000335, 'RHINOCORT AQUA', '64 mcg/d', 'BOTT', NULL, NULL),
(320, 1000336, 'ROPECT  [CODEPECT]', '- mg.', 'CAP', NULL, NULL),
(321, 1000337, 'RAPID INSULIN PENFILL 3 ML', '300', 'vial', NULL, NULL),
(322, 1000338, 'ROXITHROmycin', '150 mg.', 'TAB', NULL, NULL),
(323, 1000339, 'SALINE IRRIGATE1000 ML.[น้ำเกลือล้างแผล]', '-', 'BOTT', NULL, NULL),
(324, 1000340, 'SYMBICORT Turbuhaler', '160/4.5 mcg./dose', 'ขวด DPI (60 dose)', NULL, NULL),
(325, 1000341, 'SUCCINYLCHLORINE 500 MG/VIAL INJ.', '500 mg.', 'VIAL', NULL, NULL),
(326, 1000342, 'SODIUM BICARBONATE', '7.5 %', 'AMP', NULL, NULL),
(327, 1000343, 'SODIUM  CHLORIDE  300 mg', '-', 'TAB', NULL, NULL),
(328, 1000344, 'SODAMINT', '300 mg.', 'TAB', NULL, NULL),
(329, 1000345, 'FRAMYCETIN SULFATE 1%(SOFRA-TULLE)', '1 %', 'PACK', NULL, NULL),
(330, 1000346, 'SERMION ( NICERGOINE)**', '10', 'TAB', NULL, NULL),
(331, 1000347, 'SPECIAL MOUTH WASH  240 ML', '-', 'BOT', NULL, NULL),
(332, 1000348, 'SENOKOT', '7.5 mg.', 'tab', NULL, NULL),
(333, 1570022, 'STREPTOKINASE', '1500000 iu.', 'Vial', NULL, NULL),
(334, 1570020, 'OBIMIZ-AZ**', '20 mg.', 'tablets', NULL, NULL),
(335, 1570021, 'METALYSE', '8000 u.', 'Vial', NULL, NULL),
(336, 1000351, 'SERETIDE  EVOHALER(เด็ก)', '25/125 mcg./dos', 'BOTT', NULL, NULL),
(337, 1000352, 'SERETIDE ACCU.(ผู้ใหญ่)', '50/250 mcg./dos', 'BOTT', NULL, NULL),
(338, 1000353, 'STABLON [TIANEPTINA]**', '12.5 mg.', 'TAB', NULL, NULL),
(339, 1000354, 'Dermaovate CREAM  5 GM.(Local)', '0.05 %', 'TUBE', NULL, NULL),
(340, 1000355, 'STALEVO', '100 mg.', 'tab', NULL, NULL),
(341, 1000356, 'Clobetasol CREAM  [LOCAL]', '0.5 %', 'TUBE', NULL, NULL),
(342, 1000357, 'SILVERDERM450GM', '1 g.', 'JAR', NULL, NULL),
(343, 1000358, 'SEVORANE 250 ML', '-', 'bott', NULL, NULL),
(344, 1000359, 'SILVER SULFADIAZINE CREAM', '1 %', 'TUBE', NULL, NULL),
(345, 1000360, 'SIMVAStatin (X)', '20 mg.', 'TAB', NULL, NULL),
(346, 1000361, 'TRIAMCINOLONE  ORAL PASTE (5 GM.)', '0.1 %', 'TUBE', NULL, NULL),
(347, 1000362, 'TRIAMCINOLONECREAM 5 GM', '0.1 %', 'tube', NULL, NULL),
(348, 1000363, 'TA.  CREAM 0.1%  500 GM.', '0.1 %', 'JAR', NULL, NULL),
(349, 1000364, 'TRIAMCINOLONE CREAM 5 g.', '0.02 %', 'TUBE', NULL, NULL),
(350, 1000365, 'TRIAMCINOLONE  500 g.', '0.1 %', 'กระปุก', NULL, NULL),
(351, 1000366, 'TETANUS ANTITOXIN  INJ.', '250 IU', 'AMP', NULL, NULL),
(352, 1000367, 'TRAMOL INJ.', '50 mg./1ml', 'AMP', NULL, NULL),
(353, 1000368, 'TRAMOL ( TRAMADOL )', '50 mg.', 'CAP', NULL, NULL),
(354, 1000369, 'TANATRIL**', '5 mg.', 'TAB', NULL, NULL),
(355, 1000370, 'THEOPHYLLINE  SR.', '200 mg.', 'TAB', NULL, NULL),
(356, 1000371, 'THIOPENTAL  1 G.', '-', 'Vial', NULL, NULL),
(357, 1000372, 'TARIVID OTIC SOLUTION', '-', 'bott', NULL, NULL),
(358, 1000373, 'TETANUS  IMMONOGLOBOLIN 250 IU/2ML', '250 iu./ml.', 'VIAL', NULL, NULL),
(359, 1000374, 'T.T.(TETANUS TOXOID) Pragnancy', '-', 'AMP', NULL, NULL),
(360, 1000375, 'TRIVASTAL RT', '50 mg.', 'TAB', NULL, NULL),
(361, 1000376, 'UNISON ENEMA 10 ML/ลูก', '15 %', 'BOT', NULL, NULL),
(362, 1000377, 'UNISON ENEMA 133 ML/ลูก', '15 %', 'BOT', NULL, NULL),
(363, 1000378, 'UNASYN', '750 mg.', 'TAB', NULL, NULL),
(364, 1000379, 'UNASYN INJ', '3 g.', 'VIAL', NULL, NULL),
(365, 1000380, 'UREA CREAM   10 GM./ตลับ', '10 %', 'ตลับ', NULL, NULL),
(366, 1000381, 'UREA CREAM 500 GM.', '-', 'jar', NULL, NULL),
(367, 1000382, 'VANCOMYCIN 500 MG INJ.[LOCOL]', '500 mg./ml.', 'VIAL', NULL, NULL),
(368, 1000383, 'VITAMIN C. Tablet', '100 mg.', 'TAB', NULL, NULL),
(369, 1000384, 'ASCORBIC ACID INJ.', '500 mg.', 'AMP', NULL, NULL),
(370, 1000385, 'VIRKON', '-', 'PACK', NULL, NULL),
(371, 1000386, 'VALIUM  INJ.  10 MG/2ML AMP (Diazepam)', '10 mg.', 'AMP', NULL, NULL),
(372, 1000387, 'VENOFER', '100 mg./5ml.', 'VIAL', NULL, NULL),
(373, 1000388, 'VERORAB (RABIES  VACCINE)', '-', 'VIAL', NULL, NULL),
(374, 1000389, 'VOLTEX GEL', '- g.', 'gm', NULL, NULL),
(375, 1000390, 'VENTOLIN [LOCAL]SALBUTAMOL', '2 mg.', 'TAB', NULL, NULL),
(376, 1000391, 'VENTOLIN EVOHALER 200DOSE (LOCAL)', '100 mcg./dose', 'BOT', NULL, NULL),
(377, 1000392, 'VENTOLIN NEBULE', '2.5 mg./2.5ml.', 'AMP', NULL, NULL),
(378, 1000393, 'SALBUTAMOL  SYRUP (ventolin)2 MG/5 ML ,', '60 ml.', 'BOT', NULL, NULL),
(379, 1000394, 'VIT B CO  Tablet', '-', 'TAB', NULL, NULL),
(380, 1000395, 'VIT B CO INJ, 1 ML/AMP.', '-', 'AMP', NULL, NULL),
(381, 1000396, 'VITAMIN K INJ.', '1 mg./0.5ml.', 'AMP', NULL, NULL),
(382, 1000397, 'VITAMIN K  INJ.', '10 mg./ml.', 'AMP', NULL, NULL),
(383, 1000398, 'VYTORIN** (X)', '10/20 mg.', 'TAB', NULL, NULL),
(384, 1000399, 'VASTAREL MR**(TRIMETRAZIDINE)', '35 mg.', 'TAB', NULL, NULL),
(385, 1000400, 'WATER FOR INJ. 100 ML/VIAL', '-', 'Vial', NULL, NULL),
(386, 1000401, 'WARFARIN', '5 mg.', 'TAB', NULL, NULL),
(387, 1000402, 'LIDOCAINE 1% INJ.,50 ML', '1 %', 'Vial', NULL, NULL),
(388, 1000403, 'LIDOCAINE 2% INJ.,50 ML', '2 %', 'ML', NULL, NULL),
(389, 1000404, 'XYLOCAINE 2 %  ADRENALINE 20 ML', '2 %', 'vial', NULL, NULL),
(390, 1000405, 'XANAX', '0.5 mg.', 'tab', NULL, NULL),
(391, 1000406, 'XENETIX  300 MG. /ML 50 ML', '-', 'bott', NULL, NULL),
(392, 1000407, 'xaTRAL XL (Alfuzosin)', '10 mg.', 'tab', NULL, NULL),
(393, 1000408, 'ZOLOFT(SERTRALINE)', '50 mg.', 'TAB', NULL, NULL),
(394, 1000409, 'ZITHROMAX (AZITHROMYCIN)', '250 mg.', 'CAP', NULL, NULL),
(395, 1000410, 'ZITHROMAX SYR( AZITHROMYCIN )', '200MG/5ML mg./m', 'BOT', NULL, NULL),
(396, 1000411, 'MEDROXYPROGESTERONE INJ(X)(ยาคุมฉีด)', '50 mg./ml.', 'Vial', NULL, NULL),
(397, 1000412, 'MYBACIN', '-', 'ซอง', NULL, NULL),
(398, 1520018, 'CETIRIZINE SYRUP', '5 mg/5ml', 'ขวด', NULL, NULL),
(399, 1000414, 'BACTRIM  INJ (CO-TRIMOXAZOLE INJ)', '80/400 mg./ml.', 'VIAL', NULL, NULL),
(400, 1000416, 'MUMP-MEASLE-RUBELLA VACCINE(วัคซีน)', '-', 'VIAL', NULL, NULL),
(401, 1000417, 'PLETAAL SR ** (CILOSTAZOL)', '100 mg.', 'TAB', NULL, NULL),
(402, 1000418, 'PETHIDINE INJ.', '50 mg./ml.', 'AMP', NULL, NULL),
(403, 1000419, 'POVIDONE IODINE 10 %  30  ML', '10 %', 'BOTT', NULL, NULL),
(404, 1510004, 'RECORMON', '5000 iu.', 'Amphule', NULL, NULL),
(405, 1510001, 'Hyalgan**', '20 mg./dose', 'Amphule (20 ml.)', NULL, NULL),
(406, 1510002, 'OLMETEC**', '40 mg.', 'เม็ด', NULL, NULL),
(407, 1510003, 'GANAton**(Itopride)', '50 mg.', 'เม็ด', NULL, NULL),
(408, 1510023, 'INFLORAN', '250 mg.', 'CAP', NULL, NULL),
(409, 1510005, 'JE Vacine', '-', 'Vial', NULL, NULL),
(410, 1510007, 'DEX OPH EYE DROP', '4 ml.', 'Bot', NULL, NULL),
(411, 1510019, 'MAGNESIUM SULFATE INJ. 2ml.', '50 %', 'Amphule', NULL, NULL),
(412, 1510006, 'DUPHALAC 100 (Lactulose)', '66.7 %', 'ขวด(100ml)', NULL, NULL),
(413, 1510010, 'HISTA OPH EYE DROPS', '5 ml.', 'BOT', NULL, NULL),
(414, 1510008, 'AMIODARONE INJ.', '50 mg./ml.', 'Amphule', NULL, NULL),
(415, 1510014, 'KAYEXALATE POWDER', '5 g.', 'ซอง', NULL, NULL),
(416, 1510011, 'VENTOLIN SOLUTION', '5 mg.', 'ขวด', NULL, NULL),
(417, 1510020, 'AMLODIPINE', '10 mg.', 'TAB', NULL, NULL),
(418, 1510012, 'SOLU - CORTEF INJ', '100 mg.', 'Vial', NULL, NULL),
(419, 1510013, 'MIACALCIC NASAL SPRAY (LOCAL)', '200 iu./dose', 'Bot', NULL, NULL),
(420, 1510027, 'GRENDIS(TRIFLUSAL)', '300 mg.', 'CAP', NULL, NULL),
(421, 1510015, 'Special mouth wash**', '1000 ml.', 'GALLON', NULL, NULL),
(422, 1510016, 'INTERZINE 1 ML.', '25 ml.', 'Amphule', NULL, NULL),
(423, 1510017, 'INTERMEN**', '5 mg.', 'เม็ด', NULL, NULL),
(424, 1510018, 'KLACID MR**(clarithromycin MR)', '500 mg.', 'TAB.', NULL, NULL),
(425, 1510021, 'MARCAINE  SPINAL  HEAVY', '0.5 %', 'Amphule', NULL, NULL),
(426, 1510022, 'Potassium Chloride  solution 240ML', '500 mg./5ml.', 'ขวด', NULL, NULL),
(427, 1510024, 'BLOPRRESS**  (CANDESARTAN)', '16 mg.', 'TAB', NULL, NULL),
(428, 1510025, 'Lincomycin  INJ. 2 ML', '300 mg./ml.', 'Amphule', NULL, NULL),
(429, 1510026, 'MYDOCALM(Originol)**', '50 mg.', 'TAB.', NULL, NULL),
(430, 1510028, 'ZANIDIP (LERCANIDIPINE)', '20 mg.', 'TAB', NULL, NULL),
(431, 1520004, 'LEXAPRO**', '10 mg.', 'TAB.', NULL, NULL),
(432, 1520011, 'OMACOR (OMEGA-3)**', '1000 mg.', 'cap.', NULL, NULL),
(433, 1520001, 'Glucosamine Sulfate**', '1500 mg.', 'ซอง', NULL, NULL),
(434, 1520005, 'ISOSORBIDE DINITRATE', '10 mg.', 'TAB', NULL, NULL),
(435, 1520002, 'diLANTIN(Phenytoin)', '100 mg.', 'cap.', NULL, NULL),
(436, 1520003, 'xylocaine 2%adrenaline 50 ml.', '2 %', 'Vial', NULL, NULL),
(437, 1520006, 'Triamcinolone Oral Paste 1 Gm.', '0.1 %', 'ซอง (1 g.)', NULL, NULL),
(438, 1520007, 'OBUCORT Swinghaler.', '200 mcg./dose', 'bot.', NULL, NULL),
(439, 1520008, 'POVIDONE  SOLUTION', '10 %', 'GALLON', NULL, NULL),
(440, 1520010, 'LANTUS INJ.', '100 unit/ml.', 'แท่ง', NULL, NULL),
(441, 1520012, 'เจลล้างมือ', '64.13 %', 'ขวด', NULL, NULL),
(442, 1520013, 'AProVEL**(Irbesartan)', '300 mg.', 'เม็ด', NULL, NULL),
(443, 1520015, 'Xylocaine 1%Adrenaline 50 ml.', '1 %', 'Vial', NULL, NULL),
(444, 1520016, 'JANUVIA**', '100 mg.', 'TAB.', NULL, NULL),
(445, 1520019, 'CapTOPRIL TAB.', '25 mg.', 'เม็ด', NULL, NULL),
(446, 1520020, 'TEGADERM HYDROGEL', '... ...', 'หลอด', NULL, NULL),
(447, 1520021, 'OSELTAMIVIR', '75 mg.', 'CAP', NULL, NULL),
(448, 1520022, 'CLEXANE INJ 0.6 ML.', '60 mg.', 'Amphule', NULL, NULL),
(449, 1520023, 'KAMILLOSAN SPRAY** 20 ML.', '-', 'ขวด', NULL, NULL),
(450, 1520025, 'UREA CREAM  30 Gm.', '10 %', 'หลอด', NULL, NULL),
(451, 1520024, 'BACHLOR SCRUB  450 ML.', '20 %', 'ขวด', NULL, NULL),
(452, 1520031, 'VULTIN', '400 mg.', 'capsule', NULL, NULL),
(453, 1520026, 'RANITIDINE INJ.', '25 mg.', 'Amphule', NULL, NULL),
(454, 1520027, 'NOVOMIX', '100 units/ml.', 'แท่ง', NULL, NULL),
(455, 1520028, 'ALUMINIUM HYDROXIDE', '500 mg.', 'TAB', NULL, NULL),
(456, 1520035, 'GAVISCON**', '500 mg.', 'BOT', NULL, NULL),
(457, 1520029, 'OMEPRAZOLE', '40 mg.', 'เม็ด', NULL, NULL),
(458, 1520030, 'SerLIFT (SERTRALINE)', '50 mg.', 'เม็ด', NULL, NULL),
(459, 1520032, 'lexemin**(FENOFIBRATE)', '160 mg.', 'TAB', NULL, NULL),
(460, 1520033, 'FLUIFORT SYRUP[ADULT] 120 ML.**', '9 %', 'ขวด', NULL, NULL),
(461, 1520034, 'FLUNARIZINE**', '5 mg.', 'TAB', NULL, NULL),
(462, 1520036, 'CALTRATE', '1500 mg.', 'TAB', NULL, NULL),
(463, 1530001, 'Avandia', '4 mg.', 'เม็ด', NULL, NULL),
(464, 1530002, 'HADOL  INJ. (HALOPERIDOL)', '5 mg./ml.', 'Amphule', NULL, NULL),
(465, 1530003, 'AdaLAT CR**(Nifedipine 30 mg)', '30 mg.', 'TAB', NULL, NULL),
(466, 1530004, 'CLONAzepam', '2 mg.', 'เม็ด', NULL, NULL),
(467, 1530005, 'LOPID(original)', '600 mg.', 'tablets', NULL, NULL),
(468, 1530006, 'Aspirin', '81 mg.', 'tab', NULL, NULL),
(469, 1530012, 'SIFROL**', '1 mg.', 'TAB', NULL, NULL),
(470, 1530007, 'PARACETAMOL INJ.**', '300 mg./2ML', 'Amphule', NULL, NULL),
(471, 1530008, 'BUSCOPAN SYRUP [LOCAL]', '1 mg./ml.', 'ขวด', NULL, NULL),
(472, 1530009, 'ACTOS (local) Pioglitazone', '30 mg.', 'เม็ด', NULL, NULL),
(473, 1530010, 'CAPSIKA GEL', '0.025 %', 'หลอด', NULL, NULL),
(474, 1530011, 'STIVATE CREAM 500 GM.', '0.05 %', 'กระปุก', NULL, NULL),
(475, 1530013, 'IBUPROFEN SUSPENSION', '100 mg/5ml', 'BOT', NULL, NULL),
(476, 1530014, 'MICARDIS 40 MG.**', '40 mg.', 'TAB', NULL, NULL),
(477, 1530015, 'NEUTROMED**(PIRACETAM)', '800 mg.', 'TAB', NULL, NULL),
(478, 1530016, 'ENCEPTINOL', '100 mg.', 'TAB', NULL, NULL),
(479, 1530017, 'SPIRONOLACTONE', '25 mg.', 'TAB', NULL, NULL),
(480, 1530018, 'Atenolol', '50 mg.', 'TAB', NULL, NULL),
(481, 1530019, 'COMBIZYM  [Original]', '5000 iu./dose', 'TAB', NULL, NULL),
(482, 1530020, 'FLEMEX**(Carbocysteine)', '375 mg.', 'TAB', NULL, NULL),
(483, 1530021, 'LIVALO** (PITAVAStatin) (X)', '2 mg.', 'TAB', NULL, NULL),
(484, 1530022, 'Plavix [local]', '75 mg.', 'Tab', NULL, NULL),
(485, 1530023, 'dT Vaccine(10dose/vial)', '- -', 'Vial', NULL, NULL),
(486, 1530024, 'FERROUS FUMARATE', '200 mg.', 'TAB.', NULL, NULL),
(487, 1530025, 'PARIET**', '10 mg.', 'TAB', NULL, NULL),
(488, 1530026, 'Mydocalm** [Local] (Tolperisone)', '50 mg.', 'Tab.', NULL, NULL),
(489, 1530027, 'Triamcinolone Lotion', '0.10 %', 'BOT', NULL, NULL),
(490, 1530028, 'CoZAAR (LOSARTAN)', '100 mg.', 'TAB', NULL, NULL),
(491, 1530029, 'NEBILET**(Nebivolol)', '5 mg.', 'TAB', NULL, NULL),
(492, 1530030, 'ARCOXIA**', '60 mg.', 'TAB.', NULL, NULL),
(493, 1530031, 'Acyclovir Cream **', '5 %', 'หลอด (5 g.)', NULL, NULL),
(494, 1530032, 'ACCUPRIL**(Quinapril 10mg)', '10 mg.', 'TAB', NULL, NULL),
(495, 1530033, 'RELPAX**(ELETRIPTAN)', '40 mg.', 'TAB.', NULL, NULL),
(496, 1530034, 'METADOXIL** ( METADOXINE )', '500 mg.', 'TAB', NULL, NULL),
(497, 1530035, 'DOMAR**(Pinazepam)', '5 mg.', 'เม็ด', NULL, NULL),
(498, 1530036, 'AVAMYS (Fluticasone furoate)', '27.5 mcg./dose', 'BOT', NULL, NULL),
(499, 1530037, 'AvoDART**(X)  (Dutasteride 0.5 mg)', '0.5 mg.', 'TAB', NULL, NULL),
(500, 1530038, 'CARDIPRIN(aspirin/glycine)', '100 mg.', 'เม็ด', NULL, NULL),
(501, 1590002, 'dT Vaccine (Single dose)', '- -', 'Amphule', NULL, NULL),
(502, 1530040, 'AMBROXOL** SYRUP', '30 mg/5ml', 'ขวด (60 ml.)', NULL, NULL),
(503, 1530041, 'Xylocaine', '1 %', 'Vial (20 ml.)', NULL, NULL),
(504, 1530042, 'Xylocaine', '2 %', 'Vial (20 ml.)', NULL, NULL),
(505, 1530043, 'Xylocaine1% Adrenaline 20 ml', '1 %', 'Vial (20 ml.)', NULL, NULL),
(506, 1530044, 'COVERSYL **(perindopril)', '5 mg.', 'เม็ด', NULL, NULL),
(507, 1530045, 'alGYCON** (Alginic acid)', '200 mg.', 'เม็ด', NULL, NULL),
(508, 1530046, 'ACTOS (Pioglitazone)**', '15 mg.', 'เม็ด', NULL, NULL),
(509, 1530047, 'MADIPLOT (Manidipine)', '20 mg.', 'เม็ด', NULL, NULL),
(510, 1530048, 'PREVACID ** (Lansoprazole)', '30 mg.', 'เม็ด', NULL, NULL),
(511, 1590001, 'DIAMICRON MR** (Gliclazide)', '60 mg.', 'เม็ด', NULL, NULL),
(512, 1540003, 'TRANSAMIN inj (TRANEXAMIC ACID)', '250 mg/5ml', 'Amphule', NULL, NULL),
(513, 1540006, 'KETOLAC INJ.**', '30 mg./ml.', 'Amphule', NULL, NULL),
(514, 1540007, 'ACEO RETARD** (Acemetacin)', '90 mg.', 'เม็ด', NULL, NULL),
(515, 1540011, 'LEXEMIN(fenofibrate)', '300 mg.', 'capsule', NULL, NULL),
(516, 1540009, 'caltrex', '1250 mg.', 'tab.', NULL, NULL),
(517, 1540008, 'SINGULAIR (Montelukast)', '5 mg.', 'เม็ด', NULL, NULL),
(518, 1540010, 'RePARIL**(AESCIN)', '20 mg.', 'TAB.', NULL, NULL),
(519, 1540013, 'AUGMENTIN', '875/125 mg.', 'TAB.', NULL, NULL),
(520, 1540012, 'LEXAPRO** (ESCITALOPRAM)', '20 mg.', 'Tab.', NULL, NULL),
(521, 1540014, 'ACTOSMET**(Pioglitazone/Metformin)', '15/850 mg.', 'เม็ด', NULL, NULL),
(522, 1540015, 'Mydriacyl (Tropicamide 1.0%)', '1 %', 'ขวด (15 ml.)', NULL, NULL),
(523, 1540016, 'T.T.(TENANUS TOXOID)', '40 iu./0.5ml.', 'Amphule', NULL, NULL),
(524, 1540017, 'HRIG(Human rabies immunoglobulin)', '300 iu./2ml.', 'Amphule', NULL, NULL),
(525, 1550001, 'SERC **(Betahistine)', '24 mg.', 'tab.', NULL, NULL),
(526, 1550004, 'ALBENDAZOLE', '400 mg.', 'tab.', NULL, NULL),
(527, 1540018, 'Ranitidine', '150 mg.', 'TAB', NULL, NULL),
(528, 1550002, 'OPSAR TEARS** 10 ML.', '0.3 g.', 'ขวด', NULL, NULL),
(529, 1550003, 'ITRACONAZOLE', '100 mg.', 'เม็ด', NULL, NULL),
(530, 1550005, 'MetroNIDAZOLE', '250 mg.', 'tab.', NULL, NULL),
(531, 1550006, 'Ketoconazole cream', '100 mg.', 'หลอด (5 g.)', NULL, NULL),
(532, 1550007, 'COVERSYL PLUS**', '5/1.25 mg.', 'TAB', NULL, NULL),
(533, 1550008, 'NEXIUM**(Esomeprazole)', '20 mg.', 'TAB.', NULL, NULL),
(534, 1550009, 'Proscar ( FINASTERIDE) X', '5 mg.', 'tab', NULL, NULL),
(535, 1550010, 'Fibril (Fenofibrate)', '160 mg.', 'capsule', NULL, NULL),
(536, 1550011, 'fluifort Sachet**(Adult)', '2.7 g.', 'ซอง', NULL, NULL),
(537, 1550016, 'Meiact** (Cefditoren)', '100 mg.', 'tab', NULL, NULL),
(538, 1550030, 'Renvela**', '800 mg.', 'เม็ด', NULL, NULL),
(539, 1550012, 'GAVISCON DUAL**', '. mg./ml.', 'BOTT', NULL, NULL),
(540, 1550013, 'Avelox**(Moxifloxacin 400mg)', '400 mg.', 'tab', NULL, NULL),
(541, 1550014, 'Circadin**(melatonin)', '2 mg.', 'tab', NULL, NULL),
(542, 1550015, 'Difflam Forte**', '0.15 %', 'bott', NULL, NULL),
(543, 1550017, 'Fexofast-180**  ( Fexofenadine)', '180 mg.', 'tab', NULL, NULL),
(544, 1550018, 'Fluifort** Sachet 2.7gm', '. g./ml.', 'Sachet', NULL, NULL),
(545, 1550019, 'Gabapentin', '300 mg.', 'capsule', NULL, NULL),
(546, 1550020, 'Pristiq** (Desvenlafaxine)', '50 mg.', 'tab', NULL, NULL),
(547, 1550021, 'ammonia spirit  60 ml', '. %', 'bot', NULL, NULL),
(548, 1550022, 'Xitrin**( K/Na citrate)', '231.5/195 mg.', 'TAB', NULL, NULL),
(549, 1550023, 'Glucobay (Acarbose)', '50 mg.', 'TAB.', NULL, NULL),
(550, 1550024, 'Meptin ( Procaterol )', '50 mcg.', 'Tablet', NULL, NULL),
(551, 1550025, 'Meptin SYRUP ( Procaterol )', '5 mcg./ml.', 'ขวด (60 ml.)', NULL, NULL),
(552, 1550026, 'Galvus**(Vildagliptin)', '50 mg.', 'เม็ด', NULL, NULL),
(553, 1550027, 'Tarivid(Ofloxacin)', '300 mg.', 'เม็ด', NULL, NULL),
(554, 1550028, 'Samarin** (silymarin)', '140 mg.', 'เม็ด', NULL, NULL),
(555, 1550029, 'Zmax**', '2 g.', 'ขวด (60 ml.)', NULL, NULL),
(556, 1550031, 'Fosrenol** Lanthanum', '500 mg.', 'เม็ด', NULL, NULL),
(557, 1550032, 'Hidrasec** ( Racecadotril )', '30 mg.', 'ซอง', NULL, NULL),
(558, 1550033, 'Glufast** ( Mitiglinide)', '10 mg.', 'เม็ด', NULL, NULL),
(559, 1550034, 'Detrusitol SR**(Tolterodine)', '2 mg.', 'เม็ด', NULL, NULL),
(560, 1550035, 'ZnO paste', '20 %', 'กระปุก', NULL, NULL),
(561, 1550036, 'Dispos Needle 22', '1', 'อัน', NULL, NULL),
(562, 1550037, 'ยาอมมะแว้ง', '400 g.', 'ถุง', NULL, NULL),
(563, 1550038, 'Brown mixture 180mL', '- -', 'ขวด(180mL)', NULL, NULL),
(564, 1550039, 'Creon 10000', '150 mg.', 'capsule', NULL, NULL),
(565, 1550040, 'K-band 3นิ้ว', '- -', 'ชิ้น', NULL, NULL),
(566, 1550075, 'Glucophage', '850 mg.', 'เม็ด', NULL, NULL),
(567, 1550041, 'Hydrocortisone sodium 100mg inj.', '100 mg.', 'Amphule', NULL, NULL),
(568, 1550042, 'Nalador 500 mcg inj.', '500 mcg.', 'Amphule', NULL, NULL),
(569, 1550043, 'Povidone 1000 ml', '- -', 'ขวด (1,000 ml.)', NULL, NULL),
(570, 1550044, 'Seretide Evohaler 25/50 mcg', '25/50', 'กล่อง', NULL, NULL),
(571, 1550045, 'Health care95**', '- -', 'ชิ้น', NULL, NULL),
(572, 1550046, 'Delta Carbon** 250mg TAB', '250 mg.', 'tablet', NULL, NULL),
(573, 1550047, 'Clinivate cream', '0.1 %', 'หลอด (5 g.)', NULL, NULL),
(574, 1550057, 'Bacidal (mupirocin)', '2 %', 'หลอด (5 g.)', NULL, NULL),
(575, 1550048, 'Kin-GkT35024**(แดง)', '- -', 'ม้วน', NULL, NULL),
(576, 1550049, 'Kin-GkT35024**(ฟ้า)', '- -', 'ม้วน', NULL, NULL),
(577, 1550050, 'Bactrim syrup', '200/40 mg.', 'ขวด (60 ml.)', NULL, NULL),
(578, 1550051, 'Farlutal  (Medroxyprogesterone acetate)', '500 mg.', 'เม็ด', NULL, NULL),
(579, 1550052, 'Budesone 200 inhaler', '200 mcg./dose', 'กล่อง', NULL, NULL),
(580, 1550053, 'Hexene', '- -', 'ขวด', NULL, NULL),
(581, 1550054, 'Losartan (Lanzaar )', '50 mg.', 'เม็ด', NULL, NULL),
(582, 1550055, 'GliPizide (Namedia)', '5 mg.', 'เม็ด', NULL, NULL),
(583, 1550056, 'Efexor XR**(Venlafexine)', '37.5 mg.', 'แค็บซูล', NULL, NULL),
(584, 1550058, 'AmarylM SR(Glimepiride+Metformin)', '2/500 mg.', 'เม็ด', NULL, NULL),
(585, 1550061, 'Lipitor (X)', '40 mg.', 'TAB', NULL, NULL),
(586, 1550059, 'Myonal**(Eperisone)', '50 mg.', 'เม็ด', NULL, NULL),
(587, 1550060, 'Colpermin (Peppermint oil)**', '187 mg.', 'แค็บซูล', NULL, NULL),
(588, 1550062, 'Bioyetin (Erythropoietin)', '4000 iu.', 'Vial', NULL, NULL),
(589, 1550063, 'Neurontin (Gabapentin)', '600 mg.', 'เม็ด', NULL, NULL),
(590, 1550064, 'Janumet**', '50/500 mg.', 'เม็ด', NULL, NULL),
(591, 1550065, 'Acyclovir  cream', '- g.', 'หลอด (1 g.)', NULL, NULL),
(592, 1550066, 'Wrist Splint Reversible  (Dyna) #1', '-', 'อัน', NULL, NULL),
(593, 1550067, 'Wrist Splint Reversible  (Dyna) #2', '- -', 'อัน', NULL, NULL),
(594, 1550068, 'Needle Dispos #25x1.5\"', '- -', 'อัน', NULL, NULL),
(595, 1550069, 'Needle dispos 25x1.5 \"', '- -', 'ชิ้น', NULL, NULL),
(596, 1550070, 'Needle dispos 24x1.5\"', '- -', 'อัน', NULL, NULL),
(597, 1550071, 'Needle dispos 24x1.5', '- -', 'อัน', NULL, NULL),
(598, 1550072, 'Foley cath #10', '- -', 'อัน', NULL, NULL),
(599, 1550073, 'Berodual Forte (Local)', '0.5/1.25 mg.', 'Amphule(4ml)', NULL, NULL),
(600, 1550074, 'METOPROLOL  tartate  (Denex)', '100 mg.', 'เม็ด', NULL, NULL),
(601, 1550076, 'Trospium** (Spasmo-lyt)', '20 mg.', 'เม็ด', NULL, NULL),
(602, 1550077, 'Levocetirizine (Cetizal)', '5 mg.', 'TAB', NULL, NULL),
(603, 1550078, 'KETOSTERIL', '**', 'TAB', NULL, NULL),
(604, 1550079, 'MEFLOQUINE (Mequin)', '250 mg.', 'TAB.', NULL, NULL),
(605, 1550080, 'ARTESUNATE  INJ.', '60 mg.', 'Vial', NULL, NULL),
(606, 1550081, 'CHLOROQUINE (Diroquine)', '250 mg.', 'Tab', NULL, NULL),
(607, 1550082, 'Primaquine', '15 mg.', 'TAB', NULL, NULL),
(608, 1550083, 'Gastro Bismol (Bismuth)', '524 mg.', 'TAB', NULL, NULL),
(609, 1550084, 'Clotrimazole Vaginal suppo(candinox)', '500 mg.', 'เม็ด (VG.)', NULL, NULL),
(610, 1560001, 'Gaszym(simethicone+Pancreatin)', '60/200 mg.', 'TAB', NULL, NULL),
(611, 1560002, 'INTRIL SR** ( Indapamide)', '1.5 mg.', 'TAB', NULL, NULL),
(612, 1560003, 'Loratadine Syrup ( Local )', '5 mg/5ml', 'ขวด (60 ml.)', NULL, NULL),
(613, 1560010, 'HYDRALAZINE ( Local )', '25 mg.', 'TAB', NULL, NULL),
(614, 1560004, 'Bachlor scrub', '- -', 'ขวด', NULL, NULL),
(615, 1560005, 'Bachlor solution', '- -', 'ขวด', NULL, NULL),
(616, 1560006, 'syring (ติดเข็ม) 10 CC.', '- -', 'อัน', NULL, NULL),
(617, 1560007, 'Trajenta (Linagliptin)', '5 mg.', 'เม็ด', NULL, NULL),
(618, 1560008, 'Pantoprazole i.v.(controloc) 40 mg', '40 mg.', 'Amphule', NULL, NULL),
(619, 1560009, 'Pantoprazole** tab (controloc)', '40 mg.', 'เม็ด', NULL, NULL),
(620, 1560011, 'METHYLDOPA (Local)', '250 mg.', 'TABLETS', NULL, NULL),
(621, 1560013, 'HEPARIN SODIUM', '25000 iu./ml.', 'Vial', NULL, NULL),
(622, 1560014, 'Nootropil **[Piracetam]  1200 mg', '1200 mg.', 'tab', NULL, NULL),
(623, 1560015, 'Micardis** 80 mg', '80 mg.', 'เม็ด', NULL, NULL),
(624, 1560016, 'EPREX  INJ.', '5000 iu.', 'หลอด', NULL, NULL),
(625, 1560017, 'FENTADUR (fentanyl)', '25 mcg/h', 'แผ่น', NULL, NULL),
(626, 1560018, 'Calypsol(Ketamine)', '50 mg./ml.', 'Vial (10 ml.)', NULL, NULL),
(627, 1560019, 'Triferdine', '150 mg.', 'tablet', NULL, NULL),
(628, 1560020, 'ยาครีมพญายอ', '5 g.', 'กล่อง', NULL, NULL),
(629, 1560021, 'กระเทียมสะกัด', '375 mg.', 'เม็ด', NULL, NULL),
(630, 1560022, 'ขมิ้นชัน', '500 mg.', 'แค็บซูล', NULL, NULL),
(631, 1560023, 'ฟ้าทะลายโจร', '250 mg.', 'เม็ด', NULL, NULL),
(632, 1560024, 'FENOFIBRATE', '200 mg.', 'เม็ด', NULL, NULL),
(633, 1560025, 'ATORVASTATIN**(Local)', '40 mg.', 'เม็ด', NULL, NULL),
(634, 1560026, 'IRBENOX** (Irbesartan)', '300 mg.', 'เม็ด', NULL, NULL),
(635, 1560027, 'MONEM (Meropenem)', '1 g.', 'Vial', NULL, NULL),
(636, 1560028, 'NEPHROSTERIL 500 ml/BOT inj', '-', 'BOT', NULL, NULL),
(637, 1560029, 'Kin-GkT35024**(เบส)', '-', 'ม้วน', NULL, NULL),
(638, 1560030, 'LEVOFLOXACIN INJ.', '5 mg./ml.', 'Vial (100 ml.)', NULL, NULL),
(639, 1560031, 'CLEXANE INJ 0.6 ML.', '60 mg.', 'Amphule', NULL, NULL),
(640, 1560032, 'CLINDAMYCIN INJ', '600 mg.', 'Vial', NULL, NULL),
(641, 1560034, 'CARDURA (DOXAZOSIN)', '2 mg.', 'tablet', NULL, NULL),
(642, 1560033, 'PREMARIN Vaginal cream', '0.625 mg.', 'tube', NULL, NULL),
(643, 1560035, 'CEDAX **(CEFTIBUTEN)', '400 mg.', 'tablet', NULL, NULL),
(644, 1560036, 'ANDRIOL TESTOCAPS**', '40 mg.', 'เม็ด', NULL, NULL),
(645, 1560037, 'XALATOR (ATORVASTATIN)', '40 mg.', 'tablets', NULL, NULL),
(646, 1600012, 'DAFIRO** (Amlodipine+Valsartan)', '5/160 mg.', 'TAB', NULL, NULL),
(647, 1560039, 'ATENOLOL', '50 mg.', 'เม็ด', NULL, NULL),
(648, 1560040, 'DEXILANT (Dexlansoprazole)', '30 mg.', 'TAB', NULL, NULL),
(649, 1560041, 'HCTZ', '25 mg.', 'เม็ด', NULL, NULL),
(650, 1560042, 'ILIADIN 10 ML', '0.05 %', 'ขวด', NULL, NULL),
(651, 1560043, 'KIDMIN INJ', '500 ml.', 'ขวด', NULL, NULL),
(652, 1560044, 'CONCOR** [BISOPROLOL]', '5 mg.', 'เม็ด', NULL, NULL),
(653, 1560045, 'Dipotassium Phosphate solution', '20 mEq./20ml.', 'ขวด (20 ml.)', NULL, NULL),
(654, 1560046, 'ISODINE SPRAY', '0.45 mg', 'หลอด', NULL, NULL),
(655, 1560047, 'CLINDAMYCIN [LOCAL]', '300 mg', 'เม็ด', NULL, NULL),
(656, 1560048, 'Silymarin** [PHARMARIN]', '140 mg', 'เม็ด', NULL, NULL),
(657, 1560049, 'EDARBI** [azilsartan medoxomil]', '40 mg', 'เม็ด', NULL, NULL),
(658, 1570001, 'OXOFERIN SOLUTION', '6.9 mU', 'bott', NULL, NULL),
(659, 1570002, 'ATORVASTATIN SANDOZ**', '20 mg.', 'tab', NULL, NULL),
(660, 1570003, 'IRBESARTAN**', '150 mg.', 'เม็ด', NULL, NULL),
(661, 1570004, 'Novomix penfill 300 iu', '300 iu.', '1', NULL, NULL),
(662, 1570005, 'Amphotericin B', '50 mg./vial', 'Vial', NULL, NULL),
(663, 1570006, 'NOREPINEPHRINE', '1 mg/', 'Amphule', NULL, NULL),
(664, 1570007, 'BIOFLOR**', '285.5 mg', 'Sachet', NULL, NULL),
(665, 1570008, 'Clindamycin  300 mg (local)', '300 mg.', 'แค็บซูล', NULL, NULL),
(666, 1570009, 'CONCON [salicylic acid+phenol]', '25 g.', 'bott', NULL, NULL),
(667, 1570010, 'METHIMAZOLE', '5 mg', 'tablets', NULL, NULL),
(668, 1570011, 'FLEMEX-AC **[effervescent]', '600 mg.', 'tab', NULL, NULL),
(669, 1570012, 'FERROUS FUMARATE SUSPENSION', '45 mg/0.6ml', 'bott', NULL, NULL),
(670, 1570013, 'AMIODARONE', '200 mg.', 'tab', NULL, NULL),
(671, 1570014, 'DEANXIT**(Flupentixol + Melitracen)', '0.5+10 mg', 'tab', NULL, NULL),
(672, 1570015, 'SUPRALIP NT**(fenofibrate)', '145 mg.', 'tab', NULL, NULL),
(673, 1570016, 'ACALKA**', '1.08 mg.', 'tab', NULL, NULL),
(674, 1570017, 'CLENIL [EVOHALER]', '250 mcg.', 'bott', NULL, NULL),
(675, 1570018, 'BREXIN [PIROXICAM]', '20 mg.', 'tab', NULL, NULL),
(676, 1570019, 'FOSTER**INHALATION SOLUTION', '100/6', 'bott', NULL, NULL),
(677, 1570023, 'LEVOPRONT syrup** 120 ml', '60 mg.', 'bott', NULL, NULL),
(678, 1570024, 'SMECTA**', '3 g.', 'Sachet', NULL, NULL),
(679, 1570025, 'FORLAX**', '4000', 'Sachet', NULL, NULL),
(680, 1570026, 'CANDESARTAN**Local [TODESAAR]', '16 mg.', 'tablet', NULL, NULL),
(681, 1570028, 'SEROQUEL XR**', '50 mg.', 'tab', NULL, NULL),
(682, 1570029, 'SEROQUEL XR**', '300 mg.', 'tab', NULL, NULL),
(683, 1570030, 'FINASTERIDE (Local)', '5 mg', 'tablets', NULL, NULL),
(684, 1570031, 'Acyclovir 250 inj', '250 mg.', 'Vial', NULL, NULL),
(685, 1570032, 'PUROXAN**', '400 mg', 'tablet', NULL, NULL),
(686, 1570033, 'AZITHROMYCIN CAP[FLOCTIL]', '250 mg', 'tablet', NULL, NULL),
(687, 1570034, 'GABAPENTIN', '100 mg.', 'tab', NULL, NULL),
(688, 1570035, 'AUGMENTIN SYRUPS [200+28.5]', '228.5 mg.', 'bott', NULL, NULL),
(689, 1570036, 'GASMOTIN**', '5 mg', 'tab', NULL, NULL),
(690, 1570037, 'PANTOPRAZOLE INJ[LOCAL]', '40 mg.', 'Vial', NULL, NULL),
(691, 1570038, 'METEOSPASMYL**', '60+300 mg.', 'tab', NULL, NULL),
(692, 1570039, 'DUPHALAC  (Lactulose)', '3.335/5 g./ml.', 'ซอง', NULL, NULL),
(693, 1570040, '3% NaCl  500 ml.', '3 %', 'ขวด', NULL, NULL),
(694, 1570041, 'KERDICA** (Manidipine)', '20 mg.', 'เม็ด', NULL, NULL),
(695, 1570042, 'VALATAN** 80 mg (Valsatarn 80 mg ) LOCAL', '80 mg.', 'เม็ด', NULL, NULL),
(696, 1570043, 'VALATAN** 160 mg (Valsatarn 160 mg) LOCAL', '160 mg.', 'เม็ด', NULL, NULL),
(697, 1570044, 'MONTELUKAST 10 mg (MONTEK10)', '10 mg.', 'เม็ด', NULL, NULL),
(698, 1570045, 'NATEAR', '0.3 %', 'ขวด', NULL, NULL),
(699, 1570046, 'HARNAL OCAS** (Tamsulosin hydrochloride 0.4 mg)', '0.4 mg.', 'เม็ด', NULL, NULL),
(700, 1570047, 'ATORVASTATIN 40 MG (CHLOVAS-40)', '40 mg.', 'เม็ด', NULL, NULL),
(701, 1570048, 'CANDESARTAN**(TODESAAR)', '16 mg.', 'tab', NULL, NULL),
(702, 1570049, 'Matenol MR (Trimetazidine)', '35 mg.', 'เม็ด', NULL, NULL),
(703, 1570050, 'WATER FOR INJ.', '10 ml.', 'Amphule (10 ml.)', NULL, NULL),
(704, 1570051, 'NSS  0.9% 5 ML', '0.9 %', 'Amphule', NULL, NULL),
(705, 1570052, 'KCL 10 ML. (20 mEq) (sample)', '150 mg./ml.', 'Amphule', NULL, NULL),
(706, 1570053, 'SIDOLAX', '250 mg.', 'เม็ด', NULL, NULL),
(707, 1570054, 'Pregabalin** 75mg', '75 mg.', 'เม็ด', NULL, NULL),
(708, 1570055, 'LORATADINE(CETYNE)', '10 mg.', 'เม็ด', NULL, NULL),
(709, 1570056, 'VERAPAMIL(ISOLA)', '40 mg.', 'เม็ด', NULL, NULL),
(710, 1570057, 'BETAHISTINE  (MERLIN)', '6 mg.', 'เม็ด', NULL, NULL),
(711, 1570058, 'PHENYTOIN  INJ', '250/5 mg./ml.', 'Amphule', NULL, NULL),
(712, 1570059, 'PHENYTOIN INJ', '100/2 mg./ml.', 'Amphule', NULL, NULL),
(713, 1570060, 'ONDANSETRON INJ (ONSIA)', '4/2 mg./ml.', 'Amphule', NULL, NULL),
(714, 1570061, 'TRANEXAMIC ACID (TRANEX-STAR)', '250 mg.', 'เม็ด', NULL, NULL),
(715, 1570062, 'METFORMIN', '850 mg.', 'เม็ด', NULL, NULL),
(716, 1570063, 'AMLODIPINE  5 mg (AMLODAC 5)', '5 mg.', 'เม็ด', NULL, NULL),
(717, 1570064, 'Amlodipine 10 mg (AMLODAC 10)', '10 mg.', 'เม็ด', NULL, NULL),
(718, 1570065, 'RIZONAX **(Eperisone HCl)', '50 mg.', 'เม็ด', NULL, NULL),
(719, 1570066, '10%D-NSS 1000 ml', '10 %', 'ขวด (1,000 ml.)', NULL, NULL),
(720, 1570067, 'Allergis eye drops', '- mg.', 'bott', NULL, NULL),
(721, 1580036, 'AMLOD 5 (amlodipine)', '5 mg.', 'เม็ด', NULL, NULL),
(722, 1580035, 'Capsika-25 Gel  35g tube', '0.025 %', 'หลอด', NULL, NULL),
(723, 1580003, 'TOCARLOL (Carvedilol 25 mg)', '25 mg.', 'เม็ด', NULL, NULL),
(724, 1580004, 'GLYCEDIAB (Glipizide 5mg)', '5 mg.', 'เม็ด', NULL, NULL),
(725, 1580005, 'DEXON (Dexamethasone) 8mg/2ml injection', '8 mg.', 'Vial (2ml)', NULL, NULL),
(726, 1580006, 'POLY-OPH eye drops(Neomycin/PolymycinB/Gramicidin) 5 ml', '5 ml.', 'ขวด (5 ml.)', NULL, NULL),
(727, 1580007, 'NSS 0.9  100 ml (Klean and Kare-Normal Saline)', '0.9 %', 'ขวด (100 ml.)', NULL, NULL),
(728, 1580008, 'VEFLOX (Levofloxacin) 500 mg', '500 mg.', 'เม็ด', NULL, NULL),
(729, 1580009, 'ZIMMEX (Simvastatin 20 mg)', '20 mg.', 'เม็ด', NULL, NULL),
(730, 1580010, 'TANZARIL(Losartan)', '50 mg.', 'เม็ด', NULL, NULL),
(731, 1580011, 'PRESOLIN** (Irbesartan 300 mg)', '300 mg.', 'เม็ด', NULL, NULL),
(732, 1580012, 'PRESOLIN** (Irbesartan 150 mg)', '150 mg.', 'เม็ด', NULL, NULL),
(733, 1580013, 'ENCIFER inj 5ml', '100 mg.', 'Amphule (5 ml.)', NULL, NULL),
(734, 1580014, 'LOSACAR (Losartan)', '50 mg.', 'เม็ด', NULL, NULL),
(735, 1580015, 'Warfarin', '3 mg.', 'เม็ด', NULL, NULL);
INSERT INTO `drugitems` (`id`, `icode`, `name`, `strength`, `units`, `created_at`, `updated_at`) VALUES
(736, 1580016, 'VALDOXAN** (Agomelatine)', '25 mg.', 'เม็ด', NULL, NULL),
(737, 1580017, 'Pamidronate(PAMISOL) injection', '30 mg.', 'Vial', NULL, NULL),
(738, 1580018, 'Alendronate (BONMAX) 70 mg', '70 mg.', 'เม็ด', NULL, NULL),
(739, 1580019, 'Calcium polystyrene sulphonate (RESINCALCIO)', '5 g.', 'ซอง', NULL, NULL),
(740, 1580021, 'ORKELAX** (Para 500 mg + Orphenadrine 35mg)', '500+35 mg.', 'เม็ด', NULL, NULL),
(741, 1580022, 'Piroxicam 20 mg [LOCAL]', '20 mg.', 'เม็ด', NULL, NULL),
(742, 1580023, 'TONOLYTE (Tizanidine)', '2 mg.', 'เม็ด', NULL, NULL),
(743, 1580024, 'SULFIN** (Sulfinpyrazone 100mg)', '100 mg.', 'เม็ด', NULL, NULL),
(744, 1580025, 'Livial**(2,5 mg Tibolone)', '2,5 mg.', 'กล่อง', NULL, NULL),
(745, 1580026, 'Rabeprazole** SANDOZ', '20 mg.', 'เม็ด', NULL, NULL),
(746, 1580027, 'CEPHA (Cephalaxin 500mg)', '500', 'เม็ด', NULL, NULL),
(747, 1580028, 'Betahistine LOCAL 12mg', '12 mg.', 'เม็ด', NULL, NULL),
(748, 1580029, 'SISALON (Sertaline 50 mg)', '50 mg.', 'เม็ด', NULL, NULL),
(749, 1580030, 'Piperacillin 4mg + tazobactam 500mg', 'mg.', 'Amphule', NULL, NULL),
(750, 1580031, 'DIPROSPAN  INJ.**', '5+2 mg./ml.', 'Amphule', NULL, NULL),
(751, 1580032, 'Urispas **(Flavoxate 200 mg)', '200 mg.', 'เม็ด', NULL, NULL),
(752, 1580033, 'Mel-OD** (Meloxicam 15 mg)', '15 mg.', 'เม็ด', NULL, NULL),
(753, 1580034, 'PARIET** 20 mg', '20 mg.', 'เม็ด', NULL, NULL),
(754, 1580037, 'AMK 1000 mg', '(875+125) mg.', 'เม็ด', NULL, NULL),
(755, 1580038, 'SERTRA (Sertaline)', '50 mg.', 'เม็ด', NULL, NULL),
(756, 1580039, 'ZOBREX** Celecoxib LOCAL', '200 mg.', 'เม็ด', NULL, NULL),
(757, 1580040, 'Quadriderm** Cream 15 g', '(0.5+1+10+10) mg.', 'หลอด', NULL, NULL),
(758, 1580041, 'DIOFORGE-160** (Valsartan)', '160 mg.', 'เม็ด', NULL, NULL),
(759, 1580042, 'LYBALIN** (Pregabalin)', '75 mg.', 'เม็ด', NULL, NULL),
(760, 1580043, 'Basalin** 100u/ml', '100u/ml', 'Vial', NULL, NULL),
(761, 1580044, 'ONDAVELL (Ondansetron) 8mg/4ml', '8/4 mg./ml.', 'Amphule', NULL, NULL),
(762, 1580045, 'BETACOR F.C.(Bisoprolol)', '5 mg.', 'เม็ด', NULL, NULL),
(763, 1580046, 'CITAZOL(Cilostazol)', '50 mg.', 'เม็ด', NULL, NULL),
(764, 1580047, 'ยาอมมะแว้ง (ตราไอยรา)', '800 mg.', 'ซอง', NULL, NULL),
(765, 1580048, 'T-OSMIN** (Diosmin + Hesperidin)', '450+50 mg.', 'แค็บซูล', NULL, NULL),
(766, 1580049, 'IPV Vaccine', '0.5 ml.', 'dose', NULL, NULL),
(767, 1580050, 'Sodium Valproate', '200 mg.', 'เม็ด', NULL, NULL),
(768, 1590011, 'DISTACLOR** (Cefaclor 250mg/5ml)', '250 mg.', 'ขวด', NULL, NULL),
(769, 1590012, 'GYNOFLOR** (Lactobacillus/Estriol)', '1million/0.03 mg.', 'เม็ด (VG.)', NULL, NULL),
(770, 1590013, 'MOBIC(Meloxicam)', '15 mg.', 'เม็ด', NULL, NULL),
(771, 1590014, 'NEXIUM (Esomeprazole)', '40 mg.', 'TAB', NULL, NULL),
(772, 1590015, 'RANIN-25 INJ.(Ranitidine)', '25 mg./ml.', 'Amphule (2 ml.)', NULL, NULL),
(773, 1590016, 'TRITACE (Ramipril)', '5 mg.', 'TAB', NULL, NULL),
(774, 1590017, 'SUCRATE GEL (Sucralfate)', '1 g./5ml.', 'ซอง (1 g.)', NULL, NULL),
(775, 1590018, 'ENZYMET(Pancreatin+Simethicone)', '200 mg.', 'เม็ด', NULL, NULL),
(776, 1590019, 'J.E.VACCINE(4 DOSE/VIAL)', '-', 'Vial', NULL, NULL),
(777, 1590020, 'NICARDIPINE inj.', '1 mg./ml.', 'Amphule (10 ml.)', NULL, NULL),
(778, 1590022, 'APRESOLINE(Hydralazine)', '25 mg.', 'เม็ด', NULL, NULL),
(779, 1590021, 'Thromboflux', '1500000 iu.', 'Amphule', NULL, NULL),
(780, 1600001, 'IPV Single dose', '0.5 ml.', 'Vial', NULL, NULL),
(781, 1600002, 'FENTANYL inj.(0.1mg/2ml)', '0.1 mg.', 'Amphule (2 ml.)', NULL, NULL),
(782, 1600003, 'PLETAAL SR**(Cilostazol)', '100 mg.', 'เม็ด', NULL, NULL),
(783, 1600004, 'GLUCOphage XR', '1000 mg.', 'TAB', NULL, NULL),
(784, 1600005, 'DAFLON**', '500 mg.', 'TAB', NULL, NULL),
(785, 1600006, 'Clarithromycin (Crixan)', '500 mg.', 'TAB', NULL, NULL),
(786, 1600007, 'HEMA-PLUS', '4,000 iu./ml.', 'Vial', NULL, NULL),
(787, 1600008, 'Jardiance (Empagliflozin)', '10 mg.', 'TAB', NULL, NULL),
(788, 1600009, 'Milk of Magnesia', '400 mg/5', 'ขวด (240 ml.)', NULL, NULL),
(789, 1600010, 'KLACID (Clarithromycin)', '125 mg/5ml', 'Bott', NULL, NULL),
(790, 1600011, 'Rosuvastatin (Vivacor)', '20 mg.', 'TAB', NULL, NULL),
(791, 1600013, 'Victoza** (Liraglutide)', '6 mg./ml.', 'Pen', NULL, NULL),
(792, 1600014, 'Piroxicam [LOCAL]', '10 mg.', 'CAP', NULL, NULL),
(793, 1600015, 'ADENOSINE INJ.', '6 mg./2ml.', 'Vial', NULL, NULL),
(794, 1600016, 'Cefixime (Cefspan)', '100 mg.', 'แคปซูล', NULL, NULL),
(795, 1600017, 'Cefixime (Cefspan)', '100 mg/5ml', 'ขวด (30 ml.)', NULL, NULL),
(796, 1600018, 'LORAZEPAM (Anta)', '0.5 mg.', 'TAB', NULL, NULL),
(797, 1600019, 'ESPOGEN INJ.', '4000 iu./ml.', '[Vial]', NULL, NULL),
(798, 1600020, 'BFLUID** amino acid+glucose 1 L bag', '3 g/100ml+7.5g/100ml', '1 L bag', NULL, NULL),
(799, 1610001, 'SUPLASYN 6 ML**(SodiumHyaluronate)', '10 mg./ml.', 'Vial', NULL, NULL),
(800, 1610002, 'GLUCOSAMINE** GPO', '1500 mg.', 'ซอง', NULL, NULL),
(801, 1610003, 'EPIAO 4000 IU INJ', '400 iu.', 'Vial', NULL, NULL),
(802, 1610004, 'Diaceric**', '50 mg.', 'capsule', NULL, NULL),
(803, 1610005, 'Cyclodex (piroxicam20mg)', '20 mg.', 'tab', NULL, NULL),
(804, 1610007, 'Cyclodex', '20 mg.', 'tab', NULL, NULL),
(805, 1610009, 'Urief**', '4 mg.', 'tab', NULL, NULL),
(806, 1610010, 'Zemiglo**(Gemigliptin)', '50 mg.', 'tab', NULL, NULL),
(807, 1610011, 'Urief', '4 mg.', 'tab', NULL, NULL),
(808, 1610013, 'Flemex-AC OD**', '600 mg.', 'tab', NULL, NULL),
(809, 1610015, 'Meptin Swinghaler**', '10 mcg/puff', 'bottle', NULL, NULL),
(810, 1610016, 'Uroka(Dutasteride)**', '0.5 mg.', 'tab', NULL, NULL),
(811, 1610017, 'Uroflow**', '0.4 mg.', 'tab', NULL, NULL),
(812, 1610018, 'Beclomet Nasal Aqua (Beclomethasone)', '100 mcg/dose', 'bott', NULL, NULL),
(813, 1610019, 'Besonin Aqua Nasal Spray 200 dose', '50 mcg/dose', 'bott', NULL, NULL),
(814, 1610020, 'Allvan**(Valsartan)', '160 mg.', 'tab', NULL, NULL),
(815, 1610021, 'Platogrix  (Clopidogrel)', '75 mg.', 'tab', NULL, NULL),
(816, 1610022, 'Presolin ( Irbesartan)', '150 mg.', 'tab', NULL, NULL),
(817, 1610024, 'Invokana **(Canagliflozin)', '100 mg.', 'tab', NULL, NULL),
(818, 1610025, 'Amaryl**(glimepiride)', '4 mg.', 'tab', NULL, NULL),
(819, 1610026, 'Diosmin**( Diosmin+Hesperidin)', '450+50 mg.', 'tab', NULL, NULL),
(820, 1610028, 'ยาครีมน้ำมันไพร', '14 %', 'tube', NULL, NULL),
(821, 1610030, 'ยาแคปซูลเถาวัลย์เปรียง', '180 mg.', 'tab', NULL, NULL),
(822, 1610032, 'ยาแคปซูลเพชรสังฆาต', '200,50 mg.', 'cap', NULL, NULL),
(823, 1610034, 'ยาชงชุมเห็ดเทศ', '3 g.', 'pk', NULL, NULL),
(824, 1610036, 'ยาชงดอกหญ้าขาว', '2 g.', 'PK', NULL, NULL),
(825, 1610038, 'ยาชงรางจืด', '2 g.', 'pk', NULL, NULL),
(826, 1610040, 'ยาแคปซูลขิง', '500 mg.', 'cap', NULL, NULL),
(827, 1610042, 'ยาแคปซูลสหัศธารา', '500 mg.', 'cap', NULL, NULL),
(828, 1610044, 'ยาแคปซูลประสะไพล', '500 mg.', 'cap', NULL, NULL),
(829, 1610046, 'ยาแคปซูลบำรุงโลหิต', '450 mg.', 'cap', NULL, NULL),
(830, 1610048, 'ยาแคปซูลธาตุบรรจบ', '500 mg.', 'cap', NULL, NULL),
(831, 1610050, 'ยาทิงเจอร์ทองพันชั่ง 30 ml', '10 %', 'bt', NULL, NULL),
(832, 1610053, 'Mometasone Sandoz Nasal Spray', '50 mcg.', 'bott', NULL, NULL),
(833, 1610051, 'Spiriva ( tiotropium )', '18 mcg.', 'hadihaler', NULL, NULL),
(834, 1610055, 'Momate (Mometasone)cream 5 gm', '0.1 %', 'tube', NULL, NULL),
(835, 1610057, 'Capsika-25 gel 60 gm', '0.025 %', 'tube', NULL, NULL),
(836, 1610059, 'Mometasone Sandoz Nasal Spray 50 mcg 140dose', '50 mcg./dose', 'bott', NULL, NULL),
(837, 1610060, 'Iliadin Nasal Drops0.05%', '0.05 %', 'bott', NULL, NULL),
(838, 1610064, 'Natear UD Eye Drops', '0.3% %', 'tube', NULL, NULL),
(839, 1610067, 'Natear UD eye drop', '0.3% %', 'tube', NULL, NULL),
(840, 1610069, 'Exib-90** ( etoricoxib)', '90 mg.', 'tab', NULL, NULL),
(841, 1610071, 'Tebonin Forte**', '120 mg.', 'tab', NULL, NULL),
(842, 1610073, 'Flixotide Nebules', '0.5 mg./2ml', 'tube', NULL, NULL),
(843, 1610075, 'Allora** (desloratadine)', '5 mg.', 'tab', NULL, NULL),
(844, 1610077, 'Amtrel** (amlodipine5mg+Benazepril10mg)', '5/10 mg.', 'tab', NULL, NULL),
(845, 1610079, 'ยาแก้ไอ ผสมมะขามป้อม 60 ml', '200 mg./dose', 'bott', NULL, NULL),
(846, 1610081, 'ยาแคปซูลมะระขี้นก', '500 mg.', 'capsule', NULL, NULL),
(847, 1610083, 'ยาแคปซูลขิง', '500 mg.', 'capsule', NULL, NULL),
(848, 1610085, 'Toujeo Solo Star **450unit/1.5ml', '300 unit/ml.', 'pen', NULL, NULL),
(849, 1620001, 'Spiolto respimat inhaler soluton', '2.5 mcg.', 'กล่อง', NULL, NULL),
(850, 1620002, 'Sulfasalazine (Salazne)', '500 mg.', 'tab', NULL, NULL),
(851, 1620005, 'Seretide Evohaler 25/250', '25/250 mg.', '120 dose actuation', NULL, NULL),
(852, 1620007, 'Liprikaine 30 gm', '2.5,2.5 gm/100gm', 'tube', NULL, NULL),
(853, 1620009, 'LIVOTONE** (Silymarin)', '200 mg.', 'แค็บซูล', NULL, NULL),
(854, 1620012, 'Fexofenadine (Bosnum)**', '60 mg.', 'tab', NULL, NULL),
(855, 1620014, 'Acetylcysteine (Muclear)**', '600 mg.', 'tab', NULL, NULL),
(856, 1620016, 'Tareg160(Valsartan)**', '160 mg.', 'tab', NULL, NULL),
(857, 1620018, 'ยามะขามแขก 400 mg', '400 mg.', 'cap', NULL, NULL),
(858, 1620020, 'ยารางจืด 380 mg', '380 mg.', 'capsule', NULL, NULL),
(859, 1620022, 'ยาจันทร์ลีลา 500 mg', '500 mg.', 'capsule', NULL, NULL),
(860, 1620024, 'เจลพริกชี้ฟ้า 30 gm', '0.025 %', 'tube', NULL, NULL),
(861, 1620026, 'ยาหญ้าหนวดแมว 350 mg', '350 mg.', 'capsule', NULL, NULL),
(862, 1620028, 'Tetracaine HCl Ophthalmic', '0.5% %', 'bott', NULL, NULL),
(863, 1620029, 'LANOXIN (Digoxin) inj', '0.5 mg./2ml.', 'Amphule', NULL, NULL),
(864, 1620031, 'INFLUVAC 2019', '15 mcg/0.5ml', 'Prefilled Syring', NULL, NULL),
(865, 1620033, 'K-Zuva20 ( rosuvastatin 20mg )', '20 mg.', 'tab', NULL, NULL),
(866, 1620035, 'Atorvin40 ( atorvastatin40mg )', '40 mg.', 'tab', NULL, NULL),
(867, 1620037, 'Artrofort complex', '750,600 mg.', 'ซอง', NULL, NULL),
(868, 1620039, 'Tosan ( losartan )', '50 mg.', 'tab', NULL, NULL),
(869, 1620041, 'Eberil60 (Etoricoxib)', '60 mg.', 'tab', NULL, NULL),
(870, 1620043, 'สมุนไพรในสูตรพอกเข่า', '75 g.', 'pack', NULL, NULL),
(871, 1620046, 'Gaviscon Dual Action Sachet', '250,106.5,187.5 mg.', 'Sachet', NULL, NULL),
(872, 1620048, 'Urea Cream 35 gm', '10% %', 'tube', NULL, NULL),
(873, 1620050, 'Urea Cream 450 gm', '10% %', 'jar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drugusages`
--

CREATE TABLE `drugusages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drugusages`
--

INSERT INTO `drugusages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '(ใช้ตามแพทย์สั่ง***)', NULL, NULL),
(2, '0      แคปซูล', NULL, NULL),
(3, '0      ซอง', NULL, NULL),
(4, '0    กินครั้งละ  1   เม็ด ทุก 4-6 ชั่วโมง  เวลาปวดหรือมีไข้', NULL, NULL),
(5, '0    กินครั้งละ 1 ช้อนโต๊ะ  ก่อนอาหาร วันละ 4 ครั้ง เช้า - เที่ยง - เย็น - ก่อนนอน', NULL, NULL),
(6, '0    กินครั้งละ ครึ่งเม็ด วันละ 2 ครั้ง หลังอาหาร เช้า เย็น', NULL, NULL),
(7, '0    ฉีด 18  ยูนิตก่อนอาหารเช้า  และ 10  ยูนิต ก่อนอาหารเย็น', NULL, NULL),
(8, '0    ฉีดเข้าเส้นเลือด (ตามรูปแบบ/ใช้ตามแพทย์สั่ง) ครั้งละ     ซีซี', NULL, NULL),
(9, '0    ฉีดใต้ผิวหนัง ก่อนอาหารเช้า 22 ยูนิต ฉีดใต้ผิวหนัง ก่อนอาหารเย็น 8 ยูนิต', NULL, NULL),
(10, '0    ใช้ตามรูปแบบ/ตามแพทย์กำหนด', NULL, NULL),
(11, '0    ทานวดบริเวณที่ปวด วันละ 2 ครั้ง เช้า  -  เย็น', NULL, NULL),
(12, '0    ทาบางๆ�เฉพาะที่ วันละ 2 ครั้ง เช้า  -  เย็น', NULL, NULL),
(13, '0    พ่นช่องปากและลำคอ 2 ที วันละ 3 ครั้ง เช้า-เที่ยง-เย็น', NULL, NULL),
(14, '0    รับประทาน 1 เม็ด วันละ 1 ครั้ง ก่อนอาหารเช้า (ก่อนอาหารครึ่ง-1ชั่วโมง)', NULL, NULL),
(15, '0    รับประทาน 1 เม็ด วันละ 2 ครั้ง หลังอาหารเช้า-เย็น', NULL, NULL),
(16, '0    รับประทาน 1 เม็ด วันละ 3 ครั้ง หลังอาหารเช้า เที่ยง เย็น', NULL, NULL),
(17, '0    รับประทาน 1 เม็ด วันละ 4 ครั้ง หลังอาหารเช้า-เที่ยง-เย็น-ก่อนนอน', NULL, NULL),
(18, '0    รับประทานครั้งละ 1 เม็ด วันละ 1 ครั้ง ก่อนนอน', NULL, NULL),
(19, '0    รับประทานครั้งละ 1 เม็ด วันละ 1 ครั้ง ก่อนอาหาร เช้า', NULL, NULL),
(20, '0    รับประทานครั้งละ 1 เม็ด วันละ 1 ครั้ง หลังอาหาร เย็น', NULL, NULL),
(21, '0    รับประทานครั้งละ 1 เม็ด วันละ 1 ครั้ง หลังอาหารเช้า', NULL, NULL),
(22, '0    รับประทานครั้งละ 1 เม็ด วันละ 2 ครั้ง ก่อนอาหาร เช้า เย็น', NULL, NULL),
(23, '0    รับประทานครั้งละ 1 เม็ด วันละ 2 ครั้ง หลังอาหาร เช้า เย็น', NULL, NULL),
(24, '0    รับประทานครั้งละ 2 เม็ด วันละ 1 ครั้ง ก่อนนอน', NULL, NULL),
(25, '0    รับประทานครั้งละ 2 เม็ด วันละ 1 ครั้ง หลังอาหาร เช้า', NULL, NULL),
(26, '0    รับประทานครั้งละ 2 เม็ด วันละ 2 ครั้ง หลังอาหาร เช้า เย็น', NULL, NULL),
(27, '0   HS    ก่อนนอน', NULL, NULL),
(28, '0  19    เวลา 19.00 น.', NULL, NULL),
(29, '0  BID    วันละ 2 ครั้ง', NULL, NULL),
(30, '0 011   พ่นจมูกทั้งสองข้าง', NULL, NULL),
(31, '0 10m   10 mg. in 0.9% NSS 100 cc', NULL, NULL),
(32, '0 200   50 MG. IV PUSH ช้าๆ', NULL, NULL),
(33, '0 901   900 MG.(18)IN D5W 1000 CC', NULL, NULL),
(34, '0 AV2   สอดช่องคลอด', NULL, NULL),
(35, '0 EY3   หยอดตาขวา', NULL, NULL),
(36, '0 IM   IM', NULL, NULL),
(37, '0 IM STAT  IM  Amp. ทันที', NULL, NULL),
(38, '0 IV   IV', NULL, NULL),
(39, '0 OR1   รับประทาน', NULL, NULL),
(40, '0 OR1 BID  รับประทาน  แคปซูล วันละ 2 ครั้ง', NULL, NULL),
(41, '0 OR1 Q4-6  รับประทาน  bottle ทุก 4-6 ชั่วโมง', NULL, NULL),
(42, '0 OR1 QID T4 รับประทาน  วันละ 4 ครั้ง เช้า กลางวัน เย็น ก่อนนอน', NULL, NULL),
(43, '0 OR1 TID  รับประทาน  ซอง วันละ 3 ครั้ง', NULL, NULL),
(44, '0 OR1 TID  รับประทาน  เม็ด วันละ 3 ครั้ง', NULL, NULL),
(45, '0 OR5   ดื่มแทนน้ำ', NULL, NULL),
(46, '0 R3 BID  ทาผื่นคัน  วันละ 2 ครั้ง', NULL, NULL),
(47, '0.1cc.prn', NULL, NULL),
(48, '0.3 SC   ฉีดเข้าใต้ผิวหนัง 0.3 ซี.ซี.', NULL, NULL),
(49, '0.3ml pc m', NULL, NULL),
(50, '0.3ml pc tid', NULL, NULL),
(51, '0.3ml q4-6', NULL, NULL),
(52, '0.5  TID P3  0.5 ช้อนชา วันละ 3 ครั้ง หลังอาหารเช้า กลางวัน เย็น', NULL, NULL),
(53, '0.5 OR1 TID  รับประทาน 0.5 ช้อนชา วันละ 3 ครั้ง', NULL, NULL),
(54, '0.5acs bid', NULL, NULL),
(55, '0.5acs tid', NULL, NULL),
(56, '0.5act bid', NULL, NULL),
(57, '0.5act m', NULL, NULL),
(58, '0.5atbid', NULL, NULL),
(59, '0.5atM', NULL, NULL),
(60, '0.5attid', NULL, NULL),
(61, '0.5ht', NULL, NULL),
(62, '0.5ml ac tid', NULL, NULL),
(63, '0.5ml pc tid', NULL, NULL),
(64, '0.5ml prn q4-6 pain', NULL, NULL),
(65, '0.5ps m hs', NULL, NULL),
(66, '0.5ps tid', NULL, NULL),
(67, '0.5pt เย็น(วันเว้นวัน)', NULL, NULL),
(68, '0.5ptbid', NULL, NULL),
(69, '0.5ptE', NULL, NULL),
(70, '0.5ptM', NULL, NULL),
(71, '0.5ptM(วันเว้นวัน)', NULL, NULL),
(72, '0.5ptMNE', NULL, NULL),
(73, '0.5t ac qid', NULL, NULL),
(74, '0.5t ac qid', NULL, NULL),
(75, '0.5t ac tid', NULL, NULL),
(76, '0.5t hs', NULL, NULL),
(77, '0.5t pc m', NULL, NULL),
(78, '0.5t pc qid', NULL, NULL),
(79, '0.5t pc tid', NULL, NULL),
(80, '0.5t pc tid', NULL, NULL),
(81, '0.5t prn pain q4-6hr', NULL, NULL),
(82, '0.5tb pc qid', NULL, NULL),
(83, '0.5ts ac m', NULL, NULL),
(84, '0.5ts ac qid', NULL, NULL),
(85, '0.5ts ac tid', NULL, NULL),
(86, '0.5ts pc m', NULL, NULL),
(87, '0.5ts pc qid', NULL, NULL),
(88, '0.5ts pc qid', NULL, NULL),
(89, '0.5ts pc tid', NULL, NULL),
(90, '0.5ts prn pain q4-6hr', NULL, NULL),
(91, '0.5ts prn q6hr', NULL, NULL),
(92, '0.5ts prn q6hr', NULL, NULL),
(93, '0.5wt tid', NULL, NULL),
(94, '0.6ml pc bid', NULL, NULL),
(95, '0.6ml pc m', NULL, NULL),
(96, '0.6ml pc tid', NULL, NULL),
(97, '0.6ml prn pain q4-6hr', NULL, NULL),
(98, '0.75 OR1 TID P3 รับประทาน 0.75 ช้อนชา วันละ 3 ครั้ง หลังอาหารเช้า กลางวัน เย็น', NULL, NULL),
(99, '0.9ml prn pain q4-6hr', NULL, NULL),
(100, '0001300', NULL, NULL),
(101, '1', NULL, NULL),
(102, '1     1', NULL, NULL),
(103, '1     1 Amp.', NULL, NULL),
(104, '1  BID   1 เม็ด วันละ 2 ครั้ง', NULL, NULL),
(105, '1  BID A2  1 เม็ด วันละ 2 ครั้ง ก่อนอาหาร เช้า เย็น', NULL, NULL),
(106, '1  Q4-6   1 เม็ด ทุก 4-6 ชั่วโมง', NULL, NULL),
(107, '1  Q4-6 HT  1 ช้อนชา ทุก 4-6 ชั่วโมง เวลาไข้สูง', NULL, NULL),
(108, '1  Q4-6 W1  1 ช้อนชา ทุก 4-6 ชั่วโมง เวลาปวดหรือมีไข้', NULL, NULL),
(109, '1  Q4-6 W1  1 เม็ด ทุก 4-6 ชั่วโมง เวลาปวดหรือมีไข้', NULL, NULL),
(110, '1  QHS   1 เม็ด จนถึงก่อนนอน', NULL, NULL),
(111, '1  TID   1 เม็ด วันละ 3 ครั้ง', NULL, NULL),
(112, '1  TID A3  1 ช้อนชา วันละ 3 ครั้ง ก่อนอาหาร เช้า กลางวัน เย็น', NULL, NULL),
(113, '1  TID A3  1 เม็ด วันละ 3 ครั้ง ก่อนอาหาร เช้า กลางวัน เย็น', NULL, NULL),
(114, '1  TID P3  1 ช้อนชา วันละ 3 ครั้ง หลังอาหารเช้า กลางวัน เย็น', NULL, NULL),
(115, '1  TID P3  1 เม็ด วันละ 3 ครั้ง หลังอาหารเช้า กลางวัน เย็น', NULL, NULL),
(116, '1 10m TID P3 10 mg. in 0.9% NSS 100 cc 1 ช้อนชา วันละ 3 ครั้ง หลังอาหารเช้า กลางวัน เย็น', NULL, NULL),
(117, '1 EY3 QID T4 หยอดตาขวา 1 เม็ด วันละ 4 ครั้ง เช้า กลางวัน เย็น ก่อนนอน', NULL, NULL),
(118, '1 IH BID P2 พ่นทางปาก 1 ฟู่ วันละ 2 ครั้ง หลังอาหารเช้า เย็น', NULL, NULL),
(119, '1 IH Q4-6 W7 พ่นทางปาก 1 ฟู่ ทุก 4-6 ชั่วโมง เวลาเหนื่อย, หอบ', NULL, NULL),
(120, '1 IH STAT  พ่นทางปาก 1', NULL, NULL),
(121, '1 IM   IM 1', NULL, NULL),
(122, '1 IM STAT  IM 1 Amp. ทันที', NULL, NULL),
(123, '1 IV   IV 1', NULL, NULL),
(124, '1 IV STAT  IV 1 Amp. ทันที', NULL, NULL),
(125, '1 IV STAT  IV 1 Amp. ทันที', NULL, NULL),
(126, '1 OR1   รับประทาน 1', NULL, NULL),
(127, '1 OR1   รับประทาน 1 เม็ด', NULL, NULL),
(128, '1 OR1  HS รับประทาน 1 เม็ด  ก่อนนอน', NULL, NULL),
(129, '1 OR1 BID  รับประทาน 1 แคปซูล วันละ 2 ครั้ง', NULL, NULL),
(130, '1 OR1 BID  รับประทาน 1 เม็ด วันละ 2 ครั้ง', NULL, NULL),
(131, '1 OR1 BID  รับประทาน 1 วันละ 2 ครั้ง', NULL, NULL),
(132, '1 OR1 BID A2 รับประทาน 1 เม็ด วันละ 2 ครั้ง ก่อนอาหาร เช้า เย็น', NULL, NULL),
(133, '1 OR1 BID P2 รับประทาน 1 เม็ด วันละ 2 ครั้ง หลังอาหารเช้า เย็น', NULL, NULL),
(134, '1 OR1 OD  รับประทาน 1 แคปซูล วันละ 1 ครั้ง', NULL, NULL),
(135, '1 OR1 OD  รับประทาน 1 เม็ด วันละ 1 ครั้ง', NULL, NULL),
(136, '1 OR1 OD A1 รับประทาน 1 bottle วันละ 1 ครั้ง ก่อนอาหารเช้า', NULL, NULL),
(137, '1 OR1 OD HS รับประทาน 1 เม็ด วันละ 1 ครั้ง ก่อนนอน', NULL, NULL),
(138, '1 OR1 OD P1 รับประทาน 1 แคปซูล วันละ 1 ครั้ง หลังอาหารเช้า', NULL, NULL),
(139, '1 OR1 OD P1 รับประทาน 1 เม็ด วันละ 1 ครั้ง หลังอาหารเช้า', NULL, NULL),
(140, '1 OR1 OD P5 รับประทาน 1 เม็ด วันละ 1 ครั้ง หลังอาหารเย็น', NULL, NULL),
(141, '1 OR1 Q4-6  รับประทาน 1 ช้อนชา ทุก 4-6 ชั่วโมง', NULL, NULL),
(142, '1 OR1 Q4-6  รับประทาน 1 เม็ด ทุก 4-6 ชั่วโมง', NULL, NULL),
(143, '1 OR1 Q6 WH รับประทาน 1 เม็ด ทุก 6 ชั่วโมง เวลามีอาการปวด', NULL, NULL),
(144, '1 OR1 QID A4 รับประทาน 1 แคปซูล วันละ 4 ครั้ง ก่อนอาหาร 3 มื้อ และก่อนนอน', NULL, NULL),
(145, '1 OR1 QID A4 รับประทาน 1 เม็ด วันละ 4 ครั้ง ก่อนอาหาร 3 มื้อ และก่อนนอน', NULL, NULL),
(146, '1 OR1 STAT  รับประทาน 1 เม็ด ทันที', NULL, NULL),
(147, '1 OR1 TID  รับประทาน 1 ช้อนชา วันละ 3 ครั้ง', NULL, NULL),
(148, '1 OR1 TID  รับประทาน 1 เม็ด วันละ 3 ครั้ง', NULL, NULL),
(149, '1 OR1 TID A3 รับประทาน 1 เม็ด วันละ 3 ครั้ง ก่อนอาหาร เช้า กลางวัน เย็น', NULL, NULL),
(150, '1 OR1 TID P2 รับประทาน 1 เม็ด วันละ 3 ครั้ง หลังอาหารเช้า เย็น', NULL, NULL),
(151, '1 OR1 TID P2H รับประทาน 1 เม็ด วันละ 3 ครั้ง หลังอาหารเช้า เย็น และก่อนนอน', NULL, NULL),
(152, '1 OR1 TID P3 รับประทาน 1 เม็ด วันละ 3 ครั้ง หลังอาหารเช้า กลางวัน เย็น', NULL, NULL),
(153, '1 OR5   ดื่มแทนน้ำ 1 ซอง', NULL, NULL),
(154, '1 OR5   ดื่มแทนน้ำ 1', NULL, NULL),
(155, '1 sac pc bid', NULL, NULL),
(156, '1 sac pcM', NULL, NULL),
(157, '1 sac prn', NULL, NULL),
(158, '1 sac pt hs', NULL, NULL),
(159, '1 tb hs', NULL, NULL),
(160, '1 เม็ด เมื่อมีอาการ', NULL, NULL),
(161, '1-0-0.5', NULL, NULL),
(162, '1.25ml pc tid', NULL, NULL),
(163, '1.2ml pc bid', NULL, NULL),
(164, '1.2ml pc m', NULL, NULL),
(165, '1.2ml pc tid', NULL, NULL),
(166, '1.2ml pc tid', NULL, NULL),
(167, '1.2ml prn q4-6', NULL, NULL),
(168, '1.3ml pc tid', NULL, NULL),
(169, '1.5  QID A4  1.5 ช้อนชา วันละ 4 ครั้ง ก่อนอาหาร 3 มื้อ และก่อนนอน', NULL, NULL),
(170, '1.5 OR1 Q4-6  รับประทาน 1.5 ช้อนชา ทุก 4-6 ชั่วโมง', NULL, NULL),
(171, '1.5atbid', NULL, NULL),
(172, '1.5atM', NULL, NULL),
(173, '1.5atME', NULL, NULL),
(174, '1.5attid', NULL, NULL),
(175, '1.5ht', NULL, NULL),
(176, '1.5ml ac tid', NULL, NULL),
(177, '1.5ml pc bid', NULL, NULL),
(178, '1.5ml pc qid', NULL, NULL),
(179, '1.5ml pc tid', NULL, NULL),
(180, '1.5ml prn pain q4-6hr', NULL, NULL),
(181, '1.5t pc bid', NULL, NULL),
(182, '1.5t pc m', NULL, NULL),
(183, '1.5t pc m (วันเว้นวัน)', NULL, NULL),
(184, '1.5t pc qid', NULL, NULL),
(185, '1.5t pc tid', NULL, NULL),
(186, '1.5ts ac bid', NULL, NULL),
(187, '1.5ts ac m', NULL, NULL),
(188, '1.5ts ac qid', NULL, NULL),
(189, '1.5ts ac qid', NULL, NULL),
(190, '1.5ts ac tid', NULL, NULL),
(191, '1.5ts pc bid', NULL, NULL),
(192, '1.5ts pc m', NULL, NULL),
(193, '1.5ts pc m e hs', NULL, NULL),
(194, '1.5ts pc prn q8hr', NULL, NULL),
(195, '1.5ts pc qid', NULL, NULL),
(196, '1.5ts pc tid', NULL, NULL),
(197, '1.5ts pc tid', NULL, NULL),
(198, '1.5ts pc tid', NULL, NULL),
(199, '1.5ts prn pain q4-6hr', NULL, NULL),
(200, '1.5ts prn pain q4-6hr', NULL, NULL),
(201, '1.5ts prn q6hr', NULL, NULL),
(202, '1/4t ac m', NULL, NULL),
(203, '1/4t ac m', NULL, NULL),
(204, '1/4t pc m', NULL, NULL),
(205, '1/4t pc m n', NULL, NULL),
(206, '1/4ts ac bid', NULL, NULL),
(207, '1/4ts ac m', NULL, NULL),
(208, '1/4ts ac qid', NULL, NULL),
(209, '1/4ts ac tid', NULL, NULL),
(210, '1/4ts hs', NULL, NULL),
(211, '1/4ts pc bid', NULL, NULL),
(212, '1/4ts pc m', NULL, NULL),
(213, '11atE', NULL, NULL),
(214, '11atM', NULL, NULL),
(215, '11atN', NULL, NULL),
(216, '11atเช้า', NULL, NULL),
(217, '11E', NULL, NULL),
(218, '11ht', NULL, NULL),
(219, '11ps', NULL, NULL),
(220, '11ptE', NULL, NULL),
(221, '11ptE(วันเว้นวัน)', NULL, NULL),
(222, '11ptM', NULL, NULL),
(223, '11ptm(ENG)', NULL, NULL),
(224, '11ptm(จ-ศ)', NULL, NULL),
(225, '11ptM(วันเว้นวัน)', NULL, NULL),
(226, '11ptN', NULL, NULL),
(227, '11ptwk (1 เม็ด *wk)', NULL, NULL),
(228, '11ptเย็น', NULL, NULL),
(229, '11tmhs', NULL, NULL),
(230, '11wk (จันทร์)', NULL, NULL),
(231, '11ดูดM', NULL, NULL),
(232, '12atbid', NULL, NULL),
(233, '12atME', NULL, NULL),
(234, '12atMH', NULL, NULL),
(235, '12ps bid', NULL, NULL),
(236, '12pt bid', NULL, NULL),
(237, '12pt2hs', NULL, NULL),
(238, '12ptME', NULL, NULL),
(239, '12ptMN', NULL, NULL),
(240, '12ptจพศ', NULL, NULL),
(241, '12ptอม', NULL, NULL),
(242, '12pz(1 cc*2PC)', NULL, NULL),
(243, '12s tid', NULL, NULL),
(244, '12tmmhs', NULL, NULL),
(245, '12ดูดbid', NULL, NULL),
(246, '12ดูดเช้า1เย็น2', NULL, NULL),
(247, '13acs', NULL, NULL),
(248, '13act MNH', NULL, NULL),
(249, '13aj(1ชต.X3 ac)', NULL, NULL),
(250, '13as(1 ชช * 3 AC)', NULL, NULL),
(251, '13at (1 เม็ด * 3 AC)', NULL, NULL),
(252, '13atMEH', NULL, NULL),
(253, '13atMNE', NULL, NULL),
(254, '13atMNH', NULL, NULL),
(255, '13attid', NULL, NULL),
(256, '13av(อมแล้วกลืน3เวลา)', NULL, NULL),
(257, '13az(1 cc*3AC)', NULL, NULL),
(258, '13ps (1 ชช * 3 PC)', NULL, NULL),
(259, '13pt', NULL, NULL),
(260, '13pt(1 เม็ด * 3 PC )', NULL, NULL),
(261, '13ptMNE', NULL, NULL),
(262, '13ptอม', NULL, NULL),
(263, '13pz(1cc*3PC)', NULL, NULL),
(264, '13with meal', NULL, NULL),
(265, '14 pt', NULL, NULL),
(266, '14(....ชต*4pc)', NULL, NULL),
(267, '14(....เม็ด*ac  )', NULL, NULL),
(268, '14aj(1 ชต. x 4 ac)', NULL, NULL),
(269, '14as(1ชช*4 ac)', NULL, NULL),
(270, '14as(1ชช*4ac)', NULL, NULL),
(271, '14at qid', NULL, NULL),
(272, '14atMNEH', NULL, NULL),
(273, '14az(1cc*4AC)', NULL, NULL),
(274, '14pj(1ชต*4 PC)', NULL, NULL),
(275, '14pj(1ชต*4pc)', NULL, NULL),
(276, '14ps (1 ชช * 4 PC)', NULL, NULL),
(277, '14ps(1ชช*4pc)', NULL, NULL),
(278, '14pt (1เม็ด* 4PC)', NULL, NULL),
(279, '14ptอม', NULL, NULL),
(280, '14pz(1cc*4PC)', NULL, NULL),
(281, '15pt(1 เม็ด*5 )', NULL, NULL),
(282, '1ml ac bid', NULL, NULL),
(283, '1ml ac m', NULL, NULL),
(284, '1ml ac tid', NULL, NULL),
(285, '1ml hs', NULL, NULL),
(286, '1ml pc bid', NULL, NULL),
(287, '1ml pc m', NULL, NULL),
(288, '1ml pc tid', NULL, NULL),
(289, '1ml prn pain q4-6hr', NULL, NULL),
(290, '1prn pain', NULL, NULL),
(291, '1prn(แก้ปวดไมเกรน)', NULL, NULL),
(292, '1prn(วิงเวียน)', NULL, NULL),
(293, '1prn4-6hr.', NULL, NULL),
(294, '1prspcm (1ชช ปวดไข้)', NULL, NULL),
(295, '1prsq6(1 ชช* PRN)', NULL, NULL),
(296, '1prt เวลาคัน', NULL, NULL),
(297, '1prtabp(1เม็ดเวลาปวดท้อง', NULL, NULL),
(298, '1prtap(1 tab ปวดท้อง)', NULL, NULL),
(299, '1prtdiarrh (1tab.ท้องเสี', NULL, NULL),
(300, '1prths นอนไม่หลับ', NULL, NULL),
(301, '1prtpcm (1 เม็ด ปวดไข้)', NULL, NULL),
(302, '1prtq6(1 เม็ด q 6 ชม)', NULL, NULL),
(303, '1przpcm(1 cc ปวดไข้)', NULL, NULL),
(304, '1ptE(ละลายน้ำดื่ม)', NULL, NULL),
(305, '1ptHs(ละลายน้ำดื่ม)', NULL, NULL),
(306, '1ptM(ละลายน้ำดื่ม)', NULL, NULL),
(307, '1ptME(ละลายน้ำดื่ม)', NULL, NULL),
(308, '1sac ptM', NULL, NULL),
(309, '1sac ละลายน้ำ 1 แก้ว', NULL, NULL),
(310, '1sac ละลายน้ำ 1 แก้ว', NULL, NULL),
(311, '1sp prn', NULL, NULL),
(312, '1t13', NULL, NULL),
(313, '1tb hs', NULL, NULL),
(314, '1tb pc m', NULL, NULL),
(315, '1tb pc tid', NULL, NULL),
(316, '1ts ac qid', NULL, NULL),
(317, '1ts ac tid', NULL, NULL),
(318, '1ts hs', NULL, NULL),
(319, '1ts pc bid', NULL, NULL),
(320, '1ts pc m', NULL, NULL),
(321, '1ts pc m', NULL, NULL),
(322, '1ts pc tid', NULL, NULL),
(323, '1ts pcs tid', NULL, NULL),
(324, '1ts prn pain q4-6hr', NULL, NULL),
(325, '2  BID   2 เม็ด วันละ 2 ครั้ง', NULL, NULL),
(326, '2  BID P2  2 แคปซูล วันละ 2 ครั้ง หลังอาหารเช้า เย็น', NULL, NULL),
(327, '2  BID P2  2 เม็ด วันละ 2 ครั้ง หลังอาหารเช้า เย็น', NULL, NULL),
(328, '2  OD   2 เม็ด วันละ 1 ครั้ง', NULL, NULL),
(329, '2  Q4-6 HT  2 เม็ด ทุก 4-6 ชั่วโมง เวลาไข้สูง', NULL, NULL),
(330, '2  Q4-6 W1  2 เม็ด ทุก 4-6 ชั่วโมง เวลาปวดหรือมีไข้', NULL, NULL),
(331, '2 OR1 BID  รับประทาน 2 แคปซูล วันละ 2 ครั้ง', NULL, NULL),
(332, '2 OR1 BID P2 รับประทาน 2 แคปซูล วันละ 2 ครั้ง หลังอาหารเช้า เย็น', NULL, NULL),
(333, '2 OR1 OD A1 รับประทาน 2 เม็ด วันละ 1 ครั้ง ก่อนอาหารเช้า', NULL, NULL),
(334, '2 OR1 OD HS รับประทาน 2 เม็ด วันละ 1 ครั้ง ก่อนนอน', NULL, NULL),
(335, '2 OR1 OD P1 รับประทาน 2 เม็ด วันละ 1 ครั้ง หลังอาหารเช้า', NULL, NULL),
(336, '2 OR1 Q4  รับประทาน 2 เม็ด ทุก 4 ชั่วโมง', NULL, NULL),
(337, '2 OR1 Q4-6  รับประทาน 2 เม็ด ทุก 4-6 ชั่วโมง', NULL, NULL),
(338, '2 OR1 TID  รับประทาน 2 เม็ด วันละ 3 ครั้ง', NULL, NULL),
(339, '2 OR1 TID P3 รับประทาน 2 เม็ด วันละ 3 ครั้ง หลังอาหารเช้า กลางวัน เย็น', NULL, NULL),
(340, '2.54as(2.5ชช*4as)', NULL, NULL),
(341, '2.54ps(2.5ชช*4pc)', NULL, NULL),
(342, '2.5prs pcm(2.5ชช ปวดไข้)', NULL, NULL),
(343, '2.5prz pcm(2.5 cc ปวดไข้)', NULL, NULL),
(344, '2/3hs(2/3ชช*hs)', NULL, NULL),
(345, '20 OR1 TID A3 รับประทาน 20 มิลลิกรัม วันละ 3 ครั้ง ก่อนอาหาร เช้า กลางวัน เย็น', NULL, NULL),
(346, '21as ช (2 ชช * 1ac )', NULL, NULL),
(347, '21as ช(2cc*1AC)', NULL, NULL),
(348, '21at เช้า', NULL, NULL),
(349, '21atE', NULL, NULL),
(350, '21atM', NULL, NULL),
(351, '21atN', NULL, NULL),
(352, '21hj ( 2 ชต ก่อนนอน )', NULL, NULL),
(353, '21hj(2 ชต HS)', NULL, NULL),
(354, '21hs(2 ชช*Hs)', NULL, NULL),
(355, '21ht', NULL, NULL),
(356, '21ht (2 เม็ด HS)', NULL, NULL),
(357, '21hz(2cc*HS)', NULL, NULL),
(358, '21ps( 2 ชช * 1pc )', NULL, NULL),
(359, '21pt เย็น(2 tab x1PC เย็น)', NULL, NULL),
(360, '21ptE', NULL, NULL),
(361, '21ptM', NULL, NULL),
(362, '21ptN', NULL, NULL),
(363, '21pz ช(2cc*1PC)', NULL, NULL),
(364, '22as( 2 ชช * 2 ac )', NULL, NULL),
(365, '22atbid', NULL, NULL),
(366, '22atME', NULL, NULL),
(367, '22atMH', NULL, NULL),
(368, '22az(2cc*2AC)', NULL, NULL),
(369, '22dad M', NULL, NULL),
(370, '22pj(2ชต*2 pc)', NULL, NULL),
(371, '22ps( 2 ชช * 2 pc )', NULL, NULL),
(372, '22ptME', NULL, NULL),
(373, '22ptMN', NULL, NULL),
(374, '22pz(2cc*2PC)', NULL, NULL),
(375, '22ดูด', NULL, NULL),
(376, '23as( 2 ชช * 3ac )', NULL, NULL),
(377, '23atMEH', NULL, NULL),
(378, '23atMNE', NULL, NULL),
(379, '23atMNH', NULL, NULL),
(380, '23attid', NULL, NULL),
(381, '23az(2cc*3AC)', NULL, NULL),
(382, '23pj(2 ชต*3 PC)', NULL, NULL),
(383, '23ps( 2 ชช * 3pc )', NULL, NULL),
(384, '23ptMNE', NULL, NULL),
(385, '24as(2 ชช * 4 AC)', NULL, NULL),
(386, '24at( 2 tab * 4 ac )', NULL, NULL),
(387, '24atMNEH', NULL, NULL),
(388, '24az(2cc*4AC)', NULL, NULL),
(389, '24pj(2 ชต*4 PC)', NULL, NULL),
(390, '24ps(2 ชช * 4 PC)', NULL, NULL),
(391, '24ptMNEH', NULL, NULL),
(392, '24pz(2 cc*4 pc )', NULL, NULL),
(393, '2ml ac bid', NULL, NULL),
(394, '2ml ac m', NULL, NULL),
(395, '2ml ac qid', NULL, NULL),
(396, '2ml ac tid', NULL, NULL),
(397, '2ml pc bid', NULL, NULL),
(398, '2ml pc m', NULL, NULL),
(399, '2ml pc tid', NULL, NULL),
(400, '2ml prn pain q4-6hr', NULL, NULL),
(401, '2prim(2เม็ดเวลาท้องเสีย)', NULL, NULL),
(402, '2prs pcm (2 ชชปวดไข้)', NULL, NULL),
(403, '2prt abp(2เม็ดเวลาปวดท้อง', NULL, NULL),
(404, '2prt pcm(2 เม็ด ปวด,ไข้)', NULL, NULL),
(405, '2prt(เวลาปวดท้อง)', NULL, NULL),
(406, '2prtq6(2 เม็ด q 6 ชม)', NULL, NULL),
(407, '2prz pcm( 2 cc*ปวดไข้ )', NULL, NULL),
(408, '2pt เช้า(2 เม็ด * 1 PC)', NULL, NULL),
(409, '2ptM*1ptE', NULL, NULL),
(410, '2sp prn', NULL, NULL),
(411, '2t prn', NULL, NULL),
(412, '2t prn q4-6', NULL, NULL),
(413, '2tb hs', NULL, NULL),
(414, '2tb pc qid', NULL, NULL),
(415, '2tq4prn(2 เม็ด q 4 ชม)', NULL, NULL),
(416, '2tq6prn(2 เม็ด q 6 ชม)', NULL, NULL),
(417, '2ts pc bid', NULL, NULL),
(418, '2ts pc m', NULL, NULL),
(419, '2ts pc tid', NULL, NULL),
(420, '2ts prn pain q4-6hr', NULL, NULL),
(421, '2ts prn q4-6h', NULL, NULL),
(422, '3 OR1 TID  รับประทาน 3 ซี.ซี. วันละ 3 ครั้ง', NULL, NULL),
(423, '3/41asOD(3/4ชช*1AC)', NULL, NULL),
(424, '3/41hs(3/4ชัอนชา*hs)', NULL, NULL),
(425, '3/41ht', NULL, NULL),
(426, '3/42as(3/4 ชช*2AC)', NULL, NULL),
(427, '3/42mhs(3/4 ชช*เช้า,นอน)', NULL, NULL),
(428, '3/42ps(3/4ชช.*2)', NULL, NULL),
(429, '3/43as(3/4 ชช*3AC)', NULL, NULL),
(430, '3/43as(3/4ชชx3 ac)', NULL, NULL),
(431, '3/43pps (3/4 ชช*3pcชยกน)', NULL, NULL),
(432, '3/43ps (3/4 ช้อนชา *3pc)', NULL, NULL),
(433, '3/43ps(3/4ช้อนชาx3ครั้ง)', NULL, NULL),
(434, '3/44as(3/4 ชช*4AC)', NULL, NULL),
(435, '3/44ps(3/4 ชช*4PC)', NULL, NULL),
(436, '3/4pnv(3/4ชชเวลาคลื่นไส้)', NULL, NULL),
(437, '3/4prs abp(3/4ชช เวลาปวดท', NULL, NULL),
(438, '3/4prs pcm(3/4ชช ปวด,ไข้', NULL, NULL),
(439, '3/4q6s(3/4ชช*q6)', NULL, NULL),
(440, '3/4q6s(3/4ชช.prnq 6 ชม.)', NULL, NULL),
(441, '3/4sq6hr(3/4ชช q 6 ช.ม.)', NULL, NULL),
(442, '3/4ts ac bid', NULL, NULL),
(443, '3/4ts ac qid', NULL, NULL),
(444, '3/4ts ac tid', NULL, NULL),
(445, '3/4ts pc bid', NULL, NULL),
(446, '3/4ts pc qid', NULL, NULL),
(447, '3/4ts pc tid', NULL, NULL),
(448, '3/4ts prn pain q4-6hr', NULL, NULL),
(449, '30 OR1 Q4  รับประทาน 30 ซี.ซี. ทุก 4 ชั่วโมง', NULL, NULL),
(450, '30ccstat', NULL, NULL),
(451, '31atE', NULL, NULL),
(452, '31atM', NULL, NULL),
(453, '31atN', NULL, NULL),
(454, '31az(3cc*1ac)', NULL, NULL),
(455, '31hj(3 ชต HS)', NULL, NULL),
(456, '31hs(3ชช*1hs)', NULL, NULL),
(457, '31ht', NULL, NULL),
(458, '31ht(3 เม็ด*Hs)', NULL, NULL),
(459, '31ptE', NULL, NULL),
(460, '31ptM', NULL, NULL),
(461, '31ptN', NULL, NULL),
(462, '31pz(3 cc*1pc)', NULL, NULL),
(463, '31wk( 3 tab*wk)', NULL, NULL),
(464, '32atME', NULL, NULL),
(465, '32atMH', NULL, NULL),
(466, '32az(3cc*2ac)', NULL, NULL),
(467, '32ptME', NULL, NULL),
(468, '32ptMN', NULL, NULL),
(469, '32pz( 3 cc*2 pc )', NULL, NULL),
(470, '33atMEH', NULL, NULL),
(471, '33atMNE', NULL, NULL),
(472, '33atMNH', NULL, NULL),
(473, '33az(3cc*3ac)', NULL, NULL),
(474, '33pt', NULL, NULL),
(475, '33ptMNE', NULL, NULL),
(476, '33pz(3cc*3pc)', NULL, NULL),
(477, '33wt tid', NULL, NULL),
(478, '34atMNEH', NULL, NULL),
(479, '3ml ac bid', NULL, NULL),
(480, '3ml ac m', NULL, NULL),
(481, '3ml ac qid', NULL, NULL),
(482, '3ml ac tid', NULL, NULL),
(483, '3ml pc bid', NULL, NULL),
(484, '3ml pc m', NULL, NULL),
(485, '3ml pc qid', NULL, NULL),
(486, '3ml pc tid', NULL, NULL),
(487, '3ml prn pain q4-6hr', NULL, NULL),
(488, '3ml prn q6hr', NULL, NULL),
(489, '3ml prn q8hr', NULL, NULL),
(490, '3prz pcm ( 3 cc*ปวด,ไข้ )', NULL, NULL),
(491, '3t hs', NULL, NULL),
(492, '41atE', NULL, NULL),
(493, '41atM', NULL, NULL),
(494, '41atN', NULL, NULL),
(495, '41az(4cc*1ac)', NULL, NULL),
(496, '41hs(4ชช*hs)', NULL, NULL),
(497, '41ht', NULL, NULL),
(498, '41ht(4 tab * hs )', NULL, NULL),
(499, '41hz(4cc*hs)', NULL, NULL),
(500, '41ptE', NULL, NULL),
(501, '41ptM', NULL, NULL),
(502, '41ptN', NULL, NULL),
(503, '41pz(4cc*1pc)', NULL, NULL),
(504, '42at( 4 tab*2 at )', NULL, NULL),
(505, '42atME', NULL, NULL),
(506, '42atMH', NULL, NULL),
(507, '42az(4cc*2ac)', NULL, NULL),
(508, '42pt(4เม็ด*2pc)', NULL, NULL),
(509, '42ptME', NULL, NULL),
(510, '42ptMN', NULL, NULL),
(511, '42pz(4cc*2pc)', NULL, NULL),
(512, '43atMEH', NULL, NULL),
(513, '43atMNE', NULL, NULL),
(514, '43atMNH', NULL, NULL),
(515, '43az(4cc*3ac)', NULL, NULL),
(516, '43pt(4เม็ด*3pc)', NULL, NULL),
(517, '43ptMNE', NULL, NULL),
(518, '43pz(4cc*3pc)', NULL, NULL),
(519, '44atMNEH', NULL, NULL),
(520, '44az(4cc*4ac)', NULL, NULL),
(521, '44pz(4cc*4pc)', NULL, NULL),
(522, '4at od เช้า', NULL, NULL),
(523, '4ml ac bid', NULL, NULL),
(524, '4ml ac m', NULL, NULL),
(525, '4ml ac qid', NULL, NULL),
(526, '4ml ac tid', NULL, NULL),
(527, '4ml pc bid', NULL, NULL),
(528, '4ml pc m', NULL, NULL),
(529, '4ml pc qid', NULL, NULL),
(530, '4ml pc tid', NULL, NULL),
(531, '4ml prn pain q4-6hr', NULL, NULL),
(532, '4ml prn q6hr', NULL, NULL),
(533, '4prz pcm(4 cc ปวด,ไข้ )', NULL, NULL),
(534, '4prz pcm(4cc.ปวด ไข้)', NULL, NULL),
(535, '4stat', NULL, NULL),
(536, '4t hs', NULL, NULL),
(537, '51atE', NULL, NULL),
(538, '51atM', NULL, NULL),
(539, '51atN', NULL, NULL),
(540, '51ht', NULL, NULL),
(541, '51ptE', NULL, NULL),
(542, '51ptM', NULL, NULL),
(543, '51ptN', NULL, NULL),
(544, '52atME', NULL, NULL),
(545, '52atMH', NULL, NULL),
(546, '52ptME', NULL, NULL),
(547, '52ptMN', NULL, NULL),
(548, '53atMEH', NULL, NULL),
(549, '53atMNE', NULL, NULL),
(550, '53atMNH', NULL, NULL),
(551, '53ptMNE', NULL, NULL),
(552, '54atMNEH', NULL, NULL),
(553, '60ml OD', NULL, NULL),
(554, '63pttid', NULL, NULL),
(555, '63pz( 6 ml *3PC ช ท ย)', NULL, NULL),
(556, '6ml prn pain q4-6hr', NULL, NULL),
(557, '6zpcm(6cc*ปวด,ไข้)', NULL, NULL),
(558, '7zpcm(7cc*ปวด,ไข้)', NULL, NULL),
(559, 'acyclovir', NULL, NULL),
(560, 'anal apply(ทาหลังถ่าย)', NULL, NULL),
(561, 'apply balm bid', NULL, NULL),
(562, 'apply bid', NULL, NULL),
(563, 'apply bid( ใส่แผล )', NULL, NULL),
(564, 'apply skin', NULL, NULL),
(565, 'apply skin bid', NULL, NULL),
(566, 'apply skin hs', NULL, NULL),
(567, 'apply skin m', NULL, NULL),
(568, 'apply skin q4hr', NULL, NULL),
(569, 'apply skin qid', NULL, NULL),
(570, 'apply skin tid', NULL, NULL),
(571, 'apply(ก่อนฉีดยา)', NULL, NULL),
(572, 'apply(เช็ดรอบแผล)', NULL, NULL),
(573, 'apply12', NULL, NULL),
(574, 'apply13', NULL, NULL),
(575, 'Body wash', NULL, NULL),
(576, 'diclofenac', NULL, NULL),
(577, 'dipotassium', NULL, NULL),
(578, 'drprn (จิบเวลาไอ)', NULL, NULL),
(579, 'dupharlac', NULL, NULL),
(580, 'ear drop', NULL, NULL),
(581, 'ear drop bid', NULL, NULL),
(582, 'ear drop hs', NULL, NULL),
(583, 'ear drop qid', NULL, NULL),
(584, 'ear drop tid', NULL, NULL),
(585, 'eprex', NULL, NULL),
(586, 'eye drop bid', NULL, NULL),
(587, 'eye drop hs', NULL, NULL),
(588, 'eye drop q2hr', NULL, NULL),
(589, 'eye drop q4hr', NULL, NULL),
(590, 'eye drop qid', NULL, NULL),
(591, 'eye drop tid', NULL, NULL),
(592, 'eye paste bid', NULL, NULL),
(593, 'eye paste hs', NULL, NULL),
(594, 'eye wash', NULL, NULL),
(595, 'ferrousdrop1', NULL, NULL),
(596, 'ferrousdrop2', NULL, NULL),
(597, 'hair wash', NULL, NULL),
(598, 'hair wash OD', NULL, NULL),
(599, 'id', NULL, NULL),
(600, 'IM', NULL, NULL),
(601, 'IM 0.5 amp', NULL, NULL),
(602, 'IM 1 amp', NULL, NULL),
(603, 'IM 1 cc', NULL, NULL),
(604, 'im 1 cc.', NULL, NULL),
(605, 'IM 1 vial', NULL, NULL),
(606, 'im 1 vial', NULL, NULL),
(607, 'IM 2 cc', NULL, NULL),
(608, 'IM 250 mg q12hr', NULL, NULL),
(609, 'IngHeparin', NULL, NULL),
(610, 'inh bid(สูดพ่นจมูก)', NULL, NULL),
(611, 'inj', NULL, NULL),
(612, 'inj 002', NULL, NULL),
(613, 'Inj sodiumbicarb', NULL, NULL),
(614, 'inj001', NULL, NULL),
(615, 'inj003', NULL, NULL),
(616, 'inj2', NULL, NULL),
(617, 'inj3', NULL, NULL),
(618, 'InjAdrenaline', NULL, NULL),
(619, 'InjAlbumin', NULL, NULL),
(620, 'InjAmpho', NULL, NULL),
(621, 'InjAmpi+Sul', NULL, NULL),
(622, 'InjArtesunate', NULL, NULL),
(623, 'InjAtropine', NULL, NULL),
(624, 'InjBactrim', NULL, NULL),
(625, 'InjCalcium', NULL, NULL),
(626, 'injcalcium', NULL, NULL),
(627, 'InjCeftazidime', NULL, NULL),
(628, 'InjChlophe', NULL, NULL),
(629, 'InjCipro', NULL, NULL),
(630, 'InjClinda', NULL, NULL),
(631, 'InjDexa', NULL, NULL),
(632, 'InjDiazepam', NULL, NULL),
(633, 'injdopamin', NULL, NULL),
(634, 'InjEnoxa', NULL, NULL),
(635, 'InjEpine', NULL, NULL),
(636, 'InjFurosemide', NULL, NULL),
(637, 'InjGenta', NULL, NULL),
(638, 'InjGlyceryl', NULL, NULL),
(639, 'InjHeparin', NULL, NULL),
(640, 'InjHRIG', NULL, NULL),
(641, 'injhyaluronate', NULL, NULL),
(642, 'InjHydrocortisone', NULL, NULL),
(643, 'InjHyoscine', NULL, NULL),
(644, 'InjKCL', NULL, NULL),
(645, 'InjLevofloxacin', NULL, NULL),
(646, 'InjLidocaine', NULL, NULL),
(647, 'Injlinco', NULL, NULL),
(648, 'InjMagnesium', NULL, NULL),
(649, 'Injmetoclo', NULL, NULL),
(650, 'Injmetronidazole', NULL, NULL),
(651, 'InjMidazolam', NULL, NULL),
(652, 'injmorphine', NULL, NULL),
(653, 'injomeprazole', NULL, NULL),
(654, 'InjOxytocin', NULL, NULL),
(655, 'Injpanto', NULL, NULL),
(656, 'InjPethidine', NULL, NULL),
(657, 'injtranexamic', NULL, NULL),
(658, 'injtriamcinolone', NULL, NULL),
(659, 'injvancomycin', NULL, NULL),
(660, 'injvitaminBco', NULL, NULL),
(661, 'injvitaminC', NULL, NULL),
(662, 'injVitaminK', NULL, NULL),
(663, 'irrigate eye', NULL, NULL),
(664, 'IV', NULL, NULL),
(665, 'IV 0.5 amp', NULL, NULL),
(666, 'IV 1 amp', NULL, NULL),
(667, 'IV 1 g q6hr', NULL, NULL),
(668, 'IV 100  cc/ hr', NULL, NULL),
(669, 'IV 120 cc / hr', NULL, NULL),
(670, 'IV 2 amp', NULL, NULL),
(671, 'iv 2 gm', NULL, NULL),
(672, 'IV 2 gm q6hr', NULL, NULL),
(673, 'IV 2gm q12hr', NULL, NULL),
(674, 'IV 80 cc/hr', NULL, NULL),
(675, 'LAN***U sc ฉีด hs', NULL, NULL),
(676, 'MDI 1 puff bid', NULL, NULL),
(677, 'MDI 1 puff prn', NULL, NULL),
(678, 'MDI 1-2 puff prn', NULL, NULL),
(679, 'MDI 12 bid', NULL, NULL),
(680, 'MDI 2 puff bid', NULL, NULL),
(681, 'monem', NULL, NULL),
(682, 'mw4( อมบ้วนปาก *4 )', NULL, NULL),
(683, 'NB1', NULL, NULL),
(684, 'nd1-2*2-3', NULL, NULL),
(685, 'nodr12me(nose 1-2 drop bid)', NULL, NULL),
(686, 'nodr12mne(nose 1-2 drop tid)', NULL, NULL),
(687, 'nodr12mneh(nose 1-2 drop qid)', NULL, NULL),
(688, 'nodr13pr(nose 1-2 drop prn)', NULL, NULL),
(689, 'NPH***u SC  ฉีด AC', NULL, NULL),
(690, 'ns11', NULL, NULL),
(691, 'ns11hs', NULL, NULL),
(692, 'ns12', NULL, NULL),
(693, 'ns22', NULL, NULL),
(694, 'oapmne(oral paste tid)', NULL, NULL),
(695, 'oapmne(oral paste tid)', NULL, NULL),
(696, 'oapmneh(oral paste qid)', NULL, NULL),
(697, 'patch ( ปิดแผล )', NULL, NULL),
(698, 'patch 11peM', NULL, NULL),
(699, 'patch prn', NULL, NULL),
(700, 'prn จิบ', NULL, NULL),
(701, 'Recormon', NULL, NULL),
(702, 'rs bid (rectal suppo)', NULL, NULL),
(703, 'rshs(rectal suppo)', NULL, NULL),
(704, 'sc***u1ac(ฉีด sc   ยูนิท)', NULL, NULL),
(705, 'sc***u2ac(ฉีด sc   unit)', NULL, NULL),
(706, 'sc,actrapid(Insulin)', NULL, NULL),
(707, 'sc,NPH', NULL, NULL),
(708, 'scrub(ฟอกตัว)', NULL, NULL),
(709, 'spay23', NULL, NULL),
(710, 'sub prn chestpain', NULL, NULL),
(711, 'sucral1', NULL, NULL),
(712, 'sup. 11hs', NULL, NULL),
(713, 'sup.10 cc.hs', NULL, NULL),
(714, 'sup.100cc.', NULL, NULL),
(715, 'Take 13 TID', NULL, NULL),
(716, 'vs2th(vag suppo 2t hs)', NULL, NULL),
(717, 'vsaph(vag apply hs)', NULL, NULL),
(718, 'vsapme(vag apply bid)', NULL, NULL),
(719, 'vsmh(vaginal suppo ช น)', NULL, NULL),
(720, 'vsth(vag 1t hs)', NULL, NULL),
(721, 'wash nose', NULL, NULL),
(722, 'ยากดภูมิ', NULL, NULL),
(723, 'อมกลั้วปาก 2-3 นาที', NULL, NULL),
(724, 'อมเมื่อมีอาการไอ', NULL, NULL),
(725, 'ืNaclong1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ekgs`
--

CREATE TABLE `ekgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekgs`
--

INSERT INTO `ekgs` (`id`, `admins_id`, `users_id`, `detail`, `picname`, `pic`, `created_at`, `updated_at`) VALUES
(1, 15, 52, NULL, 'default_pat.jpg', '172243ekg.pdf', '2021-02-14 08:09:30', '2021-02-14 08:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `home_pts`
--

CREATE TABLE `home_pts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci,
  `home_name` text COLLATE utf8mb4_unicode_ci,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amphoe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pts`
--

INSERT INTO `home_pts` (`id`, `address1`, `home_name`, `district`, `amphoe`, `province`, `zipcode`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(5, '124', 'ฮางโฮง', 'ฮางโฮง', 'เมืองสกลนคร', 'สกลนคร', '47000', 104.1265067, 17.1958715, '2019-08-31 22:43:25', '2019-08-31 22:43:25'),
(6, '100 ม.8', 'รพ.ค่ายกฤษณ์สีวะรา', 'ฮางโฮง', 'เมืองสกลนคร', 'สกลนคร', '47000', NULL, NULL, '2019-09-17 19:51:06', '2019-09-17 19:51:06'),
(14, 'บ้านพัก มทบ.ซอย1', 'บ้านพัก มทบ.', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-05 03:10:01', '2021-02-05 03:10:01'),
(15, '61/4', 'ธรรมคุณ', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-05 03:14:48', '2021-02-05 03:14:48'),
(16, 'บ้านพักซอย2', 'ซอย2', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-05 03:20:42', '2021-02-14 07:22:52'),
(17, '292', 'อุดมทรัพย์', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-05 03:24:27', '2021-02-05 03:24:27'),
(18, 'บ้านพักมทบ29', 'บ้านพักมทบ29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 02:44:12', '2021-02-08 02:44:12'),
(19, 'บ้านพัก มทบ29', 'บ้านพัก มทบ29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 02:56:17', '2021-02-08 02:56:17'),
(20, '22/1 ถ.สกล-นาแก', 'นาอ้อย', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 05:06:28', '2021-02-14 07:53:19'),
(21, '150 ม.8', 'พอกน้อยพัฒนา', 'พอกน้อย', 'พรรณานิคม', 'สกลนคร', '47130', NULL, NULL, '2021-02-08 06:45:06', '2021-02-14 11:02:32'),
(22, 'บ้านพักมทบ.29', 'บ้านพักมทบ.29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 06:58:55', '2021-02-08 06:58:55'),
(23, 'บ้านพักมทบ.29', 'บ้านพักมทบ.29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 07:11:19', '2021-02-08 07:11:19'),
(24, 'บ้านพัก มทบ.29', 'บ้านพักมทบ.29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 07:27:29', '2021-02-08 07:27:29'),
(25, 'บ้านพัก มทบ 29', 'บ้านพัก มทบ 29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 08:05:20', '2021-02-08 08:05:20'),
(26, 'บ้านพัก มทบ 29', 'บ้านพัก มทบ 29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-08 08:15:57', '2021-02-08 08:15:57'),
(27, 'บ้านพัก มทบ 29', 'บ้านพัก มทบ 29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 12:55:07', '2021-02-09 12:55:07'),
(28, 'บ้านพัก มทบ 29', 'บ้านพัก มทบ 29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 14:02:29', '2021-02-09 14:02:29'),
(29, 'บ้านพัก มทบ 29', 'บ้านพัก มทบ 29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 14:11:29', '2021-02-09 14:11:29'),
(30, '445 ซ.พรเจริญ', 'ชุมชนหน้าค่าย', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 14:40:59', '2021-02-14 10:59:49'),
(31, 'บ้านโพนสูง', 'โพนสูง', 'เหล่าโพนค้อ', 'โคกศรีสุพรรณ', 'สกลนคร', '47280', NULL, NULL, '2021-02-09 14:46:17', '2021-02-14 07:58:31'),
(32, '6/4', 'นาคำ', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 14:52:27', '2021-02-09 14:52:27'),
(33, '87 ม.1', 'ศรีวิชา', 'ห้วยยาง', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 14:58:57', '2021-02-14 10:52:19'),
(34, '22/24', 'ธาตุดุม', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 15:05:36', '2021-02-14 12:46:46'),
(35, 'บ้านพัก มทบ 29', 'บ้านพัก มทบ 29', 'เมือง', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 15:12:40', '2021-02-09 15:12:40'),
(36, 'บ้านพัก มทบ 29', 'บ้านพัก มทบ 29', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 15:20:45', '2021-02-09 15:20:45'),
(37, '346 ม.5', 'มะขามป้อม', 'ธาตุนาเวง', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 15:27:26', '2021-02-14 08:02:49'),
(38, 'บ้านพัก มทบ', 'บ้านพัก มทบ', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 15:33:52', '2021-02-09 15:33:52'),
(39, '236  ม 13', 'ดงมะไฟสามัคคี', 'ขมิ้น', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 15:47:00', '2021-02-14 08:46:48'),
(40, '189 ม.8', 'พอกน้อยพัฒนา', 'พอกน้อย', 'พรรณานิคม', 'สกลนคร', '47130', NULL, NULL, '2021-02-09 15:51:22', '2021-02-14 08:15:27'),
(41, '219 ม.5', 'เชียงเครือ', 'เชียงเครือ', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 15:56:23', '2021-02-09 15:56:23'),
(42, '100/59 ม 11', 'นิตโย', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 16:00:53', '2021-02-09 16:00:53'),
(43, 'บ้านพัก มทบ', 'บ้านพัก มทบ', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 16:05:24', '2021-02-09 16:05:24'),
(44, '11 ม 13', 'แสงจันทร์', 'แมดนาท่ม', 'โคกศรีสุพรรณ', 'สกลนคร', '47280', NULL, NULL, '2021-02-09 16:10:34', '2021-02-14 11:09:40'),
(45, 'บ้านพัก มทบ 29', 'บ้านพักมทบ', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 16:15:07', '2021-02-09 16:15:07'),
(46, 'บ้านพัก มทบ', 'บ้านพัก มทบ', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-09 16:19:51', '2021-02-09 16:19:51'),
(47, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 04:29:11', '2021-02-14 04:29:11'),
(48, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 04:39:36', '2021-02-14 04:39:36'),
(49, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 04:49:03', '2021-02-14 04:49:03'),
(50, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 04:58:29', '2021-02-14 04:58:29'),
(51, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 05:07:58', '2021-02-14 05:07:58'),
(52, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 05:19:18', '2021-02-14 05:19:18'),
(53, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 05:26:04', '2021-02-14 05:26:04'),
(54, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 05:32:34', '2021-02-14 05:32:34'),
(55, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 06:03:59', '2021-02-14 06:03:59'),
(56, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 06:27:20', '2021-02-14 06:27:20'),
(57, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 06:36:09', '2021-02-14 06:36:09'),
(58, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 06:41:50', '2021-02-14 06:41:50'),
(59, 'บ้านพัก', 'บ้านพัก', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', NULL, NULL, '2021-02-14 06:57:43', '2021-02-14 06:57:43'),
(60, 'Lupa', 'Lipa', 'Joa', 'Ljpa', 'Khsjsb', '112233', NULL, NULL, '2021-03-18 11:30:54', '2021-03-18 11:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_pts`
--

CREATE TABLE `hospital_pts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `hos_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infothers`
--

CREATE TABLE `infothers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infothers`
--

INSERT INTO `infothers` (`id`, `admins_id`, `users_id`, `detail`, `picname`, `pic`, `created_at`, `updated_at`) VALUES
(1, 65, 64, 'Administrator', 'default_pat.jpg', '107.php7', '2021-03-18 11:34:54', '2021-03-18 11:34:54'),
(2, 65, 64, 'Test', 'default_pat.jpg', '2setting.php', '2021-03-18 11:36:20', '2021-03-18 11:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `labitems`
--

CREATE TABLE `labitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `normal_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labitems`
--

INSERT INTO `labitems` (`id`, `name`, `units`, `normal_value`, `created_at`, `updated_at`) VALUES
(165, 'HbA1c(HPLC)', '%', 'Non-Diabetes <5.7%,Pre-Diabetes 5.7-6.4%,Diabetes >=6.5%', NULL, NULL),
(166, 'Albumin (ALB)', 'g/dL', '3.5 - 5.2', NULL, NULL),
(167, 'Alkaline Phosphatase (ALP)', 'U/L', '46-116', NULL, NULL),
(168, 'ALT/GPT', 'IU/L', '12-78', NULL, NULL),
(169, 'Amylase', 'U/L', '28-100', NULL, NULL),
(170, 'ANGAP', 'mmol/L', NULL, NULL, NULL),
(171, 'Ascitic Glucose', 'mg/dL', '> 30', NULL, NULL),
(172, 'Ascitic Protein', 'g/dL', '0.1-4.3', NULL, NULL),
(173, 'AST/GOT', 'U/L', '15-37', NULL, NULL),
(174, 'BE', '-', NULL, NULL, NULL),
(175, 'BE(w)', '-', NULL, NULL, NULL),
(176, 'BUN', 'mg/dL', '8 -20', NULL, NULL),
(177, 'CSF-Glucose', 'mg/dL', '50-75', NULL, NULL),
(178, 'Microprotein (CSF)', 'mg/dL', '15 - 45', NULL, NULL),
(179, 'Calcium (CA)', 'mg/dL', '8.8 - 10.6', NULL, NULL),
(180, 'Cholesterol', 'mg/dL', '150 - 200', NULL, NULL),
(181, 'CK-MB (Quantitative)', 'U/L', '7-25', NULL, NULL),
(182, 'Cl', 'mmol/L', '98 - 106', NULL, NULL),
(183, 'Cl (RO)', 'mmol/L', NULL, NULL, NULL),
(184, 'CO2 (RO)', 'mmol/L', NULL, NULL, NULL),
(185, 'CO2', 'mmol/L', '21 - 32', NULL, NULL),
(186, 'CPK', 'U/L', 'M:55-170 F:30-135', NULL, NULL),
(187, 'Creatinine', 'mg/dL', 'M:0.6-1.5, F:0.4-1.2', NULL, NULL),
(188, 'C-Reactive Protein (CRP-hs)', 'mg/L', NULL, NULL, NULL),
(189, 'Direct Bilirubin', 'mg/dL', '0.01 - 0.30', NULL, NULL),
(190, 'Plasma Glucose (FPG)', 'mg/dL', '70 - 110', NULL, NULL),
(191, 'GGT (Gamma-GT)', 'U/L', 'M:15-85,F:5-55', NULL, NULL),
(192, 'Globulin', 'g/dL', '2.4 - 3.5', NULL, NULL),
(193, 'Plasma Glucose (HEP)', 'mg/dL', '70 - 110', NULL, NULL),
(194, 'Blood Glucose (Strip)', 'mg/dL', '70 - 110', NULL, NULL),
(195, 'HCO3', '-', NULL, NULL, NULL),
(196, 'HCO3s', '-', NULL, NULL, NULL),
(197, 'HDL-C', 'mg/dL', '40 - 120', NULL, NULL),
(198, 'K', 'mmol/L', '3.5 - 5.1', NULL, NULL),
(199, 'K (RO)', 'mmol/L', NULL, NULL, NULL),
(200, 'LDH', 'U/L', '80-225', NULL, NULL),
(201, 'LDL-C (direct)', 'mg/dL', '<130', NULL, NULL),
(202, 'Indirect Bilirubin', 'mg/dL', '5 - 12', NULL, NULL),
(203, 'Magnesium (MG)', 'mg/dL', '1.8 - 2.5', NULL, NULL),
(204, 'Na', 'mmol/L', '136 - 146', NULL, NULL),
(205, 'Na (RO)', 'mmol/L', NULL, NULL, NULL),
(206, 'OGTT 1 hPP', 'mg/dL', '< 200', NULL, NULL),
(207, 'OGTT 2 hPP', 'mg/dL', '< 140', NULL, NULL),
(208, 'OGTT 3 hPP', 'mg/dL', '< 125', NULL, NULL),
(209, 'OGTT FPG', 'mg/dL', '70 - 110', NULL, NULL),
(210, 'PCO2', 'mmHg', '35-48', NULL, NULL),
(211, 'Pericardial Glucose', 'mg/dL', NULL, NULL, NULL),
(212, 'Pericardial Protein', 'g/dL', NULL, NULL, NULL),
(213, 'Pleural fluid-Glucose', 'mg/dL', NULL, NULL, NULL),
(214, 'Pleural fluid - Albumin', 'g/dL', NULL, NULL, NULL),
(215, 'Ascitic-LDH', 'IU/L', NULL, NULL, NULL),
(216, 'Pleural fluid-LDH', 'IU/L', NULL, NULL, NULL),
(217, 'Pleural fluid-Protein', 'g/dL', NULL, NULL, NULL),
(218, 'pH', 'mmHg', NULL, NULL, NULL),
(219, 'Phosphorus', 'mg/dL', '2.5 - 4.9', NULL, NULL),
(220, 'PO2', 'mmHg', '83-108', NULL, NULL),
(221, 'Resoure(RO)', NULL, NULL, NULL, NULL),
(222, 'Specimen Chem', NULL, NULL, NULL, NULL),
(223, 'Synovial Protein', 'mg/dL', NULL, NULL, NULL),
(224, 'Synovial Glucose', 'mg/dL', NULL, NULL, NULL),
(225, 'Total Bilirubin', 'mg/dL', '0.3 - 1.0', NULL, NULL),
(226, 'TCO2', '-', NULL, NULL, NULL),
(227, 'TRIG', 'mg/dL', '40-150', NULL, NULL),
(228, 'Total Protein (TP)', 'g/dL', '6.6 - 8.3', NULL, NULL),
(229, 'TROP-I เชิงคุณภาพ (ใส่tubeเหลือง)', 'ng/mL.', 'Negative', NULL, NULL),
(230, 'TROP-T เชิงคุณภาพ(ใส่tubeเขียว)', 'ng/L', '<50', NULL, NULL),
(231, 'Ur-AMYL', 'U/L', 'M:<490,F<450', NULL, NULL),
(232, 'Ur-CA', 'mg/dL', '2.0 - 17.5', NULL, NULL),
(233, 'Ur-CL', 'mmol/L', '55 - 125', NULL, NULL),
(234, 'Ur-K', 'mmol/L', '25-125', NULL, NULL),
(235, 'Ur-mALB', 'mg/L', '<20', NULL, NULL),
(236, 'Ur-MG', 'mg/dL', '1 - 13', NULL, NULL),
(237, 'Ur-Na', 'mmol/L', '20 - 110', NULL, NULL),
(238, 'Microprotein (Urine)', 'mg/dL', '2 - 8', NULL, NULL),
(239, 'Ur-Urea Nitrogen', 'mg/dL', '150 - 430', NULL, NULL),
(240, 'U24h Cre', 'mg/dL', '15-25', NULL, NULL),
(241, 'U24h microalb', 'mg/day', '<30', NULL, NULL),
(242, 'U24h Microalb (Cal)', 'mg/day', '< 30', NULL, NULL),
(243, 'U24h Volume', 'mL', NULL, NULL, NULL),
(244, 'U24h-AMYL', 'IU/L', 'M:<280, F<380', NULL, NULL),
(245, 'U24h-Cre (Cal)', 'mg/kg/day', '15-25', NULL, NULL),
(246, 'U24h-Prot', 'mg/day', '40 - 100', NULL, NULL),
(247, 'URIC ACID', 'mg/dL', 'M:3.5 -7.2, F:2.6-6.0', NULL, NULL),
(248, 'Ur-Creatinine', 'mg/dL', '30-125', NULL, NULL),
(249, 'Ur.Microalb (Cal)', 'ug/mg Cr', '<20', NULL, NULL),
(250, 'ABO GR.', NULL, NULL, NULL, NULL),
(251, 'ATY.LYMP.', '%', NULL, NULL, NULL),
(252, 'BA(%)', '%', '0 - 1.8', NULL, NULL),
(253, 'BLEEDING', 'min.sec', '1 - 7', NULL, NULL),
(254, 'DCIP', '-', NULL, NULL, NULL),
(255, 'EO(%)', '%', '0 - 7.8', NULL, NULL),
(256, 'ESR(man)', 'mm/hr.', NULL, NULL, NULL),
(257, 'ESR(woman)', 'mm/hr.', NULL, NULL, NULL),
(258, 'G-6-PD', '-', NULL, NULL, NULL),
(259, 'HCT', '%', 'M:40.0-51.0, F:35.2-46.4', NULL, NULL),
(260, 'HCT_', '%', '40.0 - 51.0', NULL, NULL),
(261, 'HGB', 'g/dL', 'M:14-18,F12-16', NULL, NULL),
(262, 'INCLUSION', '-', NULL, NULL, NULL),
(263, 'INR', 'Sec.', '0.91 - 1.25', NULL, NULL),
(264, 'LE', '-', 'NOT SEEN', NULL, NULL),
(265, 'LUC', '%', '0 - 3.7', NULL, NULL),
(266, 'LY(%)', '%', '18.3 - 49', NULL, NULL),
(267, 'MCH', 'pg', '26.5 - 31.2', NULL, NULL),
(268, 'MCHC', 'g/dL', '31.8 - 36.4', NULL, NULL),
(269, 'MCV', 'fL', '80 - 99.5', NULL, NULL),
(270, 'MO(%)', '%', '2.3 - 8.7', NULL, NULL),
(271, 'NE(%)', '%', '39.6 - 71.6', NULL, NULL),
(272, 'OF Test', '-', NULL, NULL, NULL),
(273, 'OTHER', NULL, NULL, NULL, NULL),
(274, 'PLT.Count', '10^3/uL', '140 - 450', NULL, NULL),
(275, 'PLT.Count', NULL, NULL, NULL, NULL),
(276, 'PLT.Smear', NULL, NULL, NULL, NULL),
(277, 'PT', 'Sec.', '10.0-14.3', NULL, NULL),
(278, 'PTT', 'Sec.', '24.7- 34.8', NULL, NULL),
(279, 'RBC', '10^6/uL', '4.2 - 6', NULL, NULL),
(280, 'RBC.Shape', '-', NULL, NULL, NULL),
(281, 'RBC.Size', '-', NULL, NULL, NULL),
(282, 'RBC.Stain', '-', NULL, NULL, NULL),
(283, 'RDW', '%', '11.1 - 15.2', NULL, NULL),
(284, 'Reticulocyte count', '%', '0.2 - 2', NULL, NULL),
(285, 'Reticulocyte(Child)', '%', '2 - 6', NULL, NULL),
(286, 'TF(Malaria film)', '-', NULL, NULL, NULL),
(287, 'TT', 'Sec.', '14 - 25', NULL, NULL),
(288, 'VCT', 'minute', '5-15', NULL, NULL),
(289, 'WBC', '10^3/uL', '4.5 - 10.6', NULL, NULL),
(290, 'WBC MORPH.', NULL, NULL, NULL, NULL),
(291, '%cEosinop.', '%', NULL, NULL, NULL),
(292, '%cMononucl', '%', NULL, NULL, NULL),
(293, '%cPMN', '%', NULL, NULL, NULL),
(294, '%pfEosinop', '%', '0 - 0', NULL, NULL),
(295, '%pfMononuc', '%', '0 - 70', NULL, NULL),
(296, '%pfPMN', '%', '0 - 25', NULL, NULL),
(297, '%synEosinop', '%', '0 - 0', NULL, NULL),
(298, '%synMononuc', '%', '0 - 70', NULL, NULL),
(299, '%synPMN', '%', '0 - 25', NULL, NULL),
(300, 'AGGLUTINAT', NULL, NULL, NULL, NULL),
(301, 'AMORPHOUS', '-', NULL, NULL, NULL),
(302, 'APPEARANCE', '-', NULL, NULL, NULL),
(303, 'BACTERIA', '-', NULL, NULL, NULL),
(304, 'BILI', '-', NULL, NULL, NULL),
(305, 'BLOOD', '-', NULL, NULL, NULL),
(306, 'CAST', '/LPF', NULL, NULL, NULL),
(307, 'COLOR', '-', NULL, NULL, NULL),
(308, 'cRBCcount', 'Cells/cu.mm', NULL, NULL, NULL),
(309, 'CRYSTAL', '/HPF', NULL, NULL, NULL),
(310, 'cWBCcount', 'Cells/cu.mm', NULL, NULL, NULL),
(311, 'EPITHERIAL', '/HPF', NULL, NULL, NULL),
(312, 'FUNGUS', '-', NULL, NULL, NULL),
(313, 'KETONE', '-', NULL, NULL, NULL),
(314, 'LEUCOCYTE', 'cells/mL', NULL, NULL, NULL),
(315, 'LEUKOCYTE', '-', NULL, NULL, NULL),
(316, 'LIQUEFACTI', NULL, NULL, NULL, NULL),
(317, 'Methamphetamine urine (Sens 500 ng/mL)', '', 'Negative', NULL, NULL),
(318, 'Motile', '%  motile', NULL, NULL, NULL),
(319, 'MUCOUS', '-', NULL, NULL, NULL),
(320, 'NITRITE', '-', NULL, NULL, NULL),
(321, 'OTHER', '-', NULL, NULL, NULL),
(322, 'pfRBCcount', 'cell/mm^3', NULL, NULL, NULL),
(323, 'pfWBCcount', 'cell/mm^3', NULL, NULL, NULL),
(324, 'pH', '-', NULL, NULL, NULL),
(325, 'pH (Urine)', NULL, '7.2 - 7.8', NULL, NULL),
(326, 'Pregnancy test', NULL, NULL, NULL, NULL),
(327, 'PROTEIN', '-', NULL, NULL, NULL),
(328, 'RBC', '-', NULL, NULL, NULL),
(329, 'SP.GR.', '-', NULL, NULL, NULL),
(330, 'SPERM COUN', 'cells/mL', NULL, NULL, NULL),
(331, 'STOOL CHARCATER', NULL, NULL, NULL, NULL),
(332, 'STOOL COLOR', NULL, NULL, NULL, NULL),
(333, 'STOOL OCCULT.BL (FIT)', NULL, 'Negative', NULL, NULL),
(334, 'STOOL OTHER', NULL, NULL, NULL, NULL),
(335, 'STOOL PARASITE', NULL, NULL, NULL, NULL),
(336, 'STOOL RBC.STOOL', NULL, NULL, NULL, NULL),
(337, 'STOOL WBC.STOOL', NULL, NULL, NULL, NULL),
(338, 'GLU', '-', NULL, NULL, NULL),
(339, 'SynRBC count', 'Cells/cu.mm', '0 - 0', NULL, NULL),
(340, 'SynWBC count', 'Cells/cu.mm', '0 - 150', NULL, NULL),
(341, 'Tzanck smear', '-', 'not found', NULL, NULL),
(342, 'U-GLU_strip', NULL, NULL, NULL, NULL),
(343, 'U-PRO_strip', NULL, NULL, NULL, NULL),
(344, 'Urine Sp.gr.', '-', NULL, NULL, NULL),
(345, 'URO', '-', NULL, NULL, NULL),
(346, 'VIABILITY', '% Live', NULL, NULL, NULL),
(347, 'VOLUME', 'mL', NULL, NULL, NULL),
(348, 'WBC', '-', NULL, NULL, NULL),
(349, 'ABO Group', NULL, NULL, NULL, NULL),
(350, 'AFP', 'ng/mL', '0 - 15', NULL, NULL),
(351, 'Anti-HBc (Total)', NULL, NULL, NULL, NULL),
(352, 'Anti-HBe', '-', NULL, NULL, NULL),
(353, 'Anti-HBs', NULL, NULL, NULL, NULL),
(354, 'Anti-HCV (Strip)', '-', NULL, NULL, NULL),
(355, 'ID', NULL, NULL, NULL, NULL),
(356, 'ID STAT', NULL, 'Negative', NULL, NULL),
(357, 'ASO', NULL, NULL, NULL, NULL),
(358, 'CA19-9', 'U/mL', '0 - 37', NULL, NULL),
(359, 'CEA', 'ng/mL', '0 - 5', NULL, NULL),
(360, 'Complexed PSA', 'ng/mL', '< 3.6', NULL, NULL),
(361, 'DEN IgG', NULL, NULL, NULL, NULL),
(362, 'DEN IgM', NULL, NULL, NULL, NULL),
(363, 'Folate (Folic acid)', 'ng/ml', '4.6-18.7', NULL, NULL),
(364, 'HBe-Ag (ELFA)', NULL, NULL, NULL, NULL),
(365, 'HBS-Ag', NULL, NULL, NULL, NULL),
(366, 'HIV Ag', NULL, NULL, NULL, NULL),
(367, 'LEPTO', NULL, NULL, NULL, NULL),
(368, 'MELIOID', NULL, NULL, NULL, NULL),
(369, 'OX 19', NULL, NULL, NULL, NULL),
(370, 'OX2', NULL, NULL, NULL, NULL),
(371, 'OXK', NULL, NULL, NULL, NULL),
(372, 'PARATY.A O', NULL, NULL, NULL, NULL),
(373, 'PARATY.B O', NULL, NULL, NULL, NULL),
(374, 'RF', NULL, NULL, NULL, NULL),
(375, 'Rh typing', NULL, NULL, NULL, NULL),
(376, 'T3', 'ng/dL', '58-181', NULL, NULL),
(377, 'TOTAL PSA', 'ng/mL', '0 - 4', NULL, NULL),
(378, 'Treponemal Ab', NULL, NULL, NULL, NULL),
(379, 'TSH', 'mIU/mL', '0.465-4680', NULL, NULL),
(380, 'TYPHOID H', NULL, NULL, NULL, NULL),
(381, 'TYPHOID O', NULL, NULL, NULL, NULL),
(382, 'VDRL', NULL, NULL, NULL, NULL),
(383, 'AFB', NULL, 'No AFB Observed', NULL, NULL),
(384, 'Ascitic C/S', NULL, NULL, NULL, NULL),
(385, 'CSF C/S', NULL, NULL, NULL, NULL),
(386, 'Culture Air', NULL, NULL, NULL, NULL),
(387, 'Culture Water', NULL, NULL, NULL, NULL),
(388, 'Epitherial', NULL, NULL, NULL, NULL),
(389, 'Epitherium', NULL, NULL, NULL, NULL),
(390, 'FNA C/S', NULL, NULL, NULL, NULL),
(391, 'Gastic C/S', NULL, NULL, NULL, NULL),
(392, 'Gram1', NULL, NULL, NULL, NULL),
(393, 'Gram2', NULL, NULL, NULL, NULL),
(394, 'Gram3', NULL, NULL, NULL, NULL),
(395, 'H/C', NULL, '', NULL, NULL),
(396, 'India Ink preparation', '-', NULL, NULL, NULL),
(397, 'KOH', NULL, NULL, NULL, NULL),
(398, 'Mono', NULL, NULL, NULL, NULL),
(399, 'Mono', NULL, NULL, NULL, NULL),
(400, 'Nasopharyngeal C/S', NULL, NULL, NULL, NULL),
(401, 'Pleural C/S', NULL, NULL, NULL, NULL),
(402, 'PMN', NULL, NULL, NULL, NULL),
(403, 'PMN', NULL, NULL, NULL, NULL),
(404, 'PUS C/S', NULL, NULL, NULL, NULL),
(405, 'Sputum C/S', NULL, NULL, NULL, NULL),
(406, 'Stool C/S', NULL, NULL, NULL, NULL),
(407, 'Urethra swab C/S', NULL, NULL, NULL, NULL),
(408, 'Urine C/S', NULL, NULL, NULL, NULL),
(409, 'Urine cath C/S', NULL, NULL, NULL, NULL),
(410, 'Vagina swab C/S', NULL, NULL, NULL, NULL),
(411, 'WET Smear', NULL, NULL, NULL, NULL),
(412, 'Acid Phosphatase(Vaginal)', NULL, 'NEGATIVE', NULL, NULL),
(413, 'ANA', NULL, 'NEGATIVE', NULL, NULL),
(414, 'Anti-nRNP', NULL, NULL, NULL, NULL),
(415, 'Anti-Smooth muscle', NULL, NULL, NULL, NULL),
(416, 'Avian influenza virus', NULL, 'NEGATIVE', NULL, NULL),
(417, 'Serum beta-HCG', 'mIU/mL', '0 - 5.3', NULL, NULL),
(418, 'CA125', 'U/mL', '0 - 35', NULL, NULL),
(419, 'CA153', 'U/mL', '0 - 28', NULL, NULL),
(420, 'Complement C3 Level', NULL, NULL, NULL, NULL),
(421, 'Complement C4', 'g/L', NULL, NULL, NULL),
(422, 'DIGOXIN', 'IU/L', NULL, NULL, NULL),
(423, 'DILANTIN', 'ug/mL', '10 - 20', NULL, NULL),
(424, 'Estradiol(E2)', NULL, NULL, NULL, NULL),
(425, 'E_histolytica_Ab', NULL, NULL, NULL, NULL),
(426, 'FERRITIN', 'ng/mL', NULL, NULL, NULL),
(427, 'FSH', NULL, NULL, NULL, NULL),
(428, 'FT3', 'pg/mL', '2.57 - 4.43', NULL, NULL),
(429, 'Hb Typing', NULL, NULL, NULL, NULL),
(430, 'HbA0', '%', NULL, NULL, NULL),
(431, 'HbA2', '%', '2.0-3.5', NULL, NULL),
(432, 'HbBarts', '%', NULL, NULL, NULL),
(433, 'HbCS', '%', NULL, NULL, NULL),
(434, 'HbE', '%', NULL, NULL, NULL),
(435, 'HbF', '%', NULL, NULL, NULL),
(436, 'HbH', '%', NULL, NULL, NULL),
(437, 'Inclusion body', NULL, 'NEGATIVE', NULL, NULL),
(438, 'iPTH(Intact parathyroid)(ECL)', 'pg/mL', '13.6-85.8', NULL, NULL),
(439, 'Anti-ds DNA', NULL, 'NEGATIVE', NULL, NULL),
(440, 'LH', NULL, NULL, NULL, NULL),
(441, 'Lipase', 'IU/L', '< 60', NULL, NULL),
(442, 'MCV', 'fL', '80-95', NULL, NULL),
(443, 'OF', NULL, 'NEGATIVE', NULL, NULL),
(444, 'Other Hb', '%', NULL, NULL, NULL),
(445, 'PAP Smear', NULL, NULL, NULL, NULL),
(446, 'Progesterone', NULL, NULL, NULL, NULL),
(447, 'Prolactin', NULL, NULL, NULL, NULL),
(448, 'Prostatic acid phosphatase', NULL, NULL, NULL, NULL),
(449, 'RU IgG', NULL, 'NEGATIVE', NULL, NULL),
(450, 'RU IgM', NULL, 'NEGATIVE', NULL, NULL),
(451, 'Serum_Iron', NULL, NULL, NULL, NULL),
(452, 'TB Culture and Sensitivity', NULL, NULL, NULL, NULL),
(453, 'Testosterone', NULL, NULL, NULL, NULL),
(454, 'TIBC', NULL, NULL, NULL, NULL),
(455, 'Tissue biopsy ขนาดไม่เกิน 2 ซม.', NULL, NULL, NULL, NULL),
(456, 'TOTAL Acid Phosphatase', NULL, '< 10', NULL, NULL),
(457, 'Transferrin satulation', '%', '27-45', NULL, NULL),
(458, 'Urine_VMA', NULL, NULL, NULL, NULL),
(459, 'Ab Identification (Gel method)', NULL, NULL, NULL, NULL),
(460, 'Ab Screening (Gel method)', NULL, NULL, NULL, NULL),
(461, 'ABO group (Tube method)', NULL, NULL, NULL, NULL),
(462, 'Cross Matching (Gel method)', NULL, NULL, NULL, NULL),
(463, 'Cryoprecipitate(NAT)', NULL, NULL, NULL, NULL),
(464, 'Direct antiglobulin(Coomb\'s test)', NULL, NULL, NULL, NULL),
(465, 'FFP: Fresh frozen plasma (NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(466, 'FFP : Fresh frozen plasma (NAT)', NULL, NULL, NULL, NULL),
(467, 'LDPRC : Leukocyte depleted PRC (NAT)สภากาชาด', NULL, NULL, NULL, NULL),
(468, 'LD_PPConc : Leukocyte depleted pooled platelet conc(NAT)', NULL, NULL, NULL, NULL),
(469, 'LD_PPConc : Leukocyte depleted pooled platelet conc(NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(470, 'LPRC : Leukocyte poor PRC (NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(471, 'LPRC :  Leukocyte poor PRC(NAT)', NULL, NULL, NULL, NULL),
(472, 'PRC: Pack Red Cell (NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(473, 'PRC: Pack Red Cel (NAT)', NULL, NULL, NULL, NULL),
(474, 'Random_PLT_Conc (NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(475, 'Rh_Typing (Tube method)', NULL, NULL, NULL, NULL),
(476, 'SD_PLT_Close : Single donor platelet (NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(477, 'Whole blood (NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(478, 'Whole blood(NAT)', NULL, NULL, NULL, NULL),
(479, 'pH Semen', NULL, NULL, NULL, NULL),
(480, 'RBC Semen', NULL, NULL, NULL, NULL),
(481, 'WBC Semen', NULL, NULL, NULL, NULL),
(482, 'HIV Viral load', NULL, NULL, NULL, NULL),
(483, 'HIV drug resistance', NULL, NULL, NULL, NULL),
(484, 'Tissue biopsy ขนาด 2-5 ซม.', NULL, NULL, NULL, NULL),
(485, 'Tissue biopsy ชิ้นเนื้อขนาดมากกว่า 5 ซม', NULL, NULL, NULL, NULL),
(486, 'Direct Coombs test(gel test)', NULL, NULL, NULL, NULL),
(487, 'Indirect Coombs test (gel test)', NULL, NULL, NULL, NULL),
(488, 'Ab Identification (gel test)', NULL, NULL, NULL, NULL),
(489, 'Gram H/C ขวด1', NULL, NULL, NULL, NULL),
(490, 'Myoglobin Quantitative', 'ng/ml', NULL, NULL, NULL),
(491, 'NT_pro BNP', 'pg/mL', NULL, NULL, NULL),
(492, 'Trop-T ตรวจเชิงปริมาณ (tubeเขียว)', 'ng/L', '< 50', NULL, NULL),
(493, 'RO Culture', NULL, NULL, NULL, NULL),
(494, 'Serum Iron', 'ug/dL', '50-150', NULL, NULL),
(495, 'TIBC', 'ug/dL', '250-355', NULL, NULL),
(496, 'Ferritin(EXL)', 'mg/mL', 'M:8-252, F:26-288', NULL, NULL),
(497, 'ascWBC count', 'Cells/cu.mm', NULL, NULL, NULL),
(498, 'ascRBC count', 'cells/cu.mm', NULL, NULL, NULL),
(499, 'Transfusion reaction', NULL, 'No', NULL, NULL),
(500, 'Double lumen C/S', NULL, NULL, NULL, NULL),
(501, 'Aldosterone', NULL, NULL, NULL, NULL),
(502, '%ascPMN', '%', NULL, NULL, NULL),
(503, '%ascMononucle.', '%', NULL, NULL, NULL),
(504, '%ascEosinop.', '%', NULL, NULL, NULL),
(505, 'Cholinesterase', '', '', NULL, NULL),
(506, 'WBC count', 'cell/cu.mm', NULL, NULL, NULL),
(507, 'RBC count', 'cells/cu.mm', NULL, NULL, NULL),
(508, '% PMN', '%', NULL, NULL, NULL),
(509, '% Mononuclear cell', '%', NULL, NULL, NULL),
(510, '% Eosinophil', '%', NULL, NULL, NULL),
(511, 'M3G(มอร์ฟีน)', NULL, 'Negative', NULL, NULL),
(512, 'Adenosine deaminase(ADA)', 'IU/L', '4-20', NULL, NULL),
(513, 'การตรวจเซลล์วิทยา (Non-Gynecological)', NULL, NULL, NULL, NULL),
(514, 'ABO GROUP (Check up)', NULL, NULL, NULL, NULL),
(515, 'Chikunguya Ab(IgM)', NULL, 'Negative', NULL, NULL),
(516, 'Influenza virus-A,B Antigen', NULL, 'NEGATIVE', NULL, NULL),
(517, 'Influenza virus qualitative RT-PCR', NULL, NULL, NULL, NULL),
(518, 'HBsAg (ECL)', NULL, 'NEGATIVE (<0.9)', NULL, NULL),
(519, 'HBsAb (ECL)', 'mIU/ml', 'NEGATIVE (<8)', NULL, NULL),
(520, 'HBc-Ab(ECLIA)', NULL, NULL, NULL, NULL),
(521, 'Vitamin B12', 'pg/ml', '191-663', NULL, NULL),
(522, 'Serum neonatal blood spots TSH', NULL, NULL, NULL, NULL),
(523, 'Blood Ketone', 'mmol/l', '< 0.6', NULL, NULL),
(524, 'Ab Screening (Crossmatch)', NULL, 'Negative', NULL, NULL),
(525, 'Ab Identification (Crossmatch)', NULL, 'No Unexpected Ab', NULL, NULL),
(526, 'Hemoculture ขวด1', NULL, 'No growth after 5 day', NULL, NULL),
(527, 'Hemoculture ขวด2', NULL, 'No growth after 5 day', NULL, NULL),
(528, 'BUN - PRE', 'mg/dL', '8-20', NULL, NULL),
(529, 'BUN - POST', 'mg/dL', '8-20', NULL, NULL),
(530, 'CR - PRE', 'mg/dL', NULL, NULL, NULL),
(531, 'CR - POST', 'mg/dL', NULL, NULL, NULL),
(532, 'Copper (Blood)', NULL, NULL, NULL, NULL),
(533, 'Hepatitis Anti- HAV IgM(ELISA)', NULL, 'Negative', NULL, NULL),
(534, 'Copper (24 hours urine)', NULL, NULL, NULL, NULL),
(535, 'TESTING LIS', NULL, NULL, NULL, NULL),
(536, 'C-Peptide', NULL, NULL, NULL, NULL),
(537, 'Insulin', NULL, NULL, NULL, NULL),
(538, 'Free PSA', NULL, NULL, NULL, NULL),
(539, 'Anti-HCV_ECL', NULL, 'NEGATIVE (<0.89)', NULL, NULL),
(540, 'Typhoid and Paratyphoid IgG', NULL, 'NEGATIVE', NULL, NULL),
(541, 'Orientia tsutsugamushi (Scrub typhus) Ab detection', NULL, 'NEGATIVE', NULL, NULL),
(542, 'Rubella IgG/IgM', NULL, NULL, NULL, NULL),
(543, 'UIBC', 'ug/dL.', NULL, NULL, NULL),
(544, 'Copper (random urine)', NULL, NULL, NULL, NULL),
(545, 'Cortisol', NULL, NULL, NULL, NULL),
(546, 'HBV-DNA Viral Load (RT-PCR:Quantitative)', 'cp/ml', '', NULL, NULL),
(547, 'HCV-RNA Viral Load (PCR:Quantitative)', 'cp/ml', NULL, NULL, NULL),
(548, 'GCT (50 g.)', 'mg/dL.', '<140', NULL, NULL),
(549, 'สภาพสิ่งส่งตรวจ', NULL, 'ปกติ', NULL, NULL),
(550, 'RBC Morphology', NULL, NULL, NULL, NULL),
(551, 'Trop-I ตรวจเชิงปริมาณ(tubeม่วง)', 'ng/mL', '0.000-0.056', NULL, NULL),
(552, 'LUC', '%', '0-3.7', NULL, NULL),
(553, 'Modified AFB', NULL, NULL, NULL, NULL),
(554, 'Dengue NS1Ag', NULL, NULL, NULL, NULL),
(555, 'Dengue IgM+IgG', NULL, NULL, NULL, NULL),
(556, 'VDRL- 2 (ANC)', NULL, NULL, NULL, NULL),
(557, 'Gnathostoma Ab', NULL, 'Negative', NULL, NULL),
(558, 'Specimen', NULL, NULL, NULL, NULL),
(559, 'Ur.Creatinine', 'mg/dL.', '30-125', NULL, NULL),
(560, 'Anti HAV IgM/IgG', NULL, NULL, NULL, NULL),
(561, 'Ceruloplasmin', NULL, NULL, NULL, NULL),
(562, 'Antimitrochondrial (AMA)', NULL, NULL, NULL, NULL),
(563, 'Smooth muscle Ab (anti-SMA)', NULL, NULL, NULL, NULL),
(564, 'Urine-Metanephrine', '', NULL, NULL, NULL),
(565, 'Urine-Normetanephrine', NULL, '88-444', NULL, NULL),
(566, 'Murine Thyphus(หา titer)', NULL, NULL, NULL, NULL),
(567, 'Erytropoietin level', 'mIU/mL', '2.6-34.0', NULL, NULL),
(568, 'Erytropoietin', NULL, NULL, NULL, NULL),
(569, 'Anti-HBc(IgM)', NULL, 'NEGATIVE', NULL, NULL),
(570, 'Calcitonin', 'pg/mL', '10 - 60', NULL, NULL),
(571, 'Immunoglobulin G  (IgG)', 'g/L.', '8.0-17.6', NULL, NULL),
(572, 'Serum Osmolality', 'mOsm/Kg', '280-288', NULL, NULL),
(573, 'Protein C', '%', '64-141', NULL, NULL),
(574, 'Protein S', '%', '61-127', NULL, NULL),
(575, 'Anti Thrombin III', '%', '80 - 128', NULL, NULL),
(576, 'Urine Osmolality', 'mOsm/kg', '155-889', NULL, NULL),
(577, 'D-dimer', 'Ug/L', '0 - 500', NULL, NULL),
(578, 'Fibrinogen level', 'mg/dL.', '200 - 400', NULL, NULL),
(579, 'FDP', NULL, 'NEGATIVE', NULL, NULL),
(580, 'Lupus Anticoagulant', NULL, 'NEGATIVE', NULL, NULL),
(581, 'Vitamin A', '', '', NULL, NULL),
(582, 'TB culture (Mycobacterium culture)', NULL, NULL, NULL, NULL),
(583, 'Sputum Day', NULL, NULL, NULL, NULL),
(584, 'Color', NULL, NULL, NULL, NULL),
(585, 'Parvo virus B19,IgG/IgM', NULL, NULL, NULL, NULL),
(586, 'Transperency', NULL, NULL, NULL, NULL),
(587, 'Mumps-IgG/IgM', '-', 'Negative', NULL, NULL),
(588, 'EBV-IgG/IgM', NULL, NULL, NULL, NULL),
(589, 'Stool Concentration', NULL, NULL, NULL, NULL),
(590, 'pH (fluid)', NULL, NULL, NULL, NULL),
(591, 'Measles-IgG/IgM', NULL, 'Negative', NULL, NULL),
(592, 'Crystal analysis', NULL, NULL, NULL, NULL),
(593, 'Apperance', NULL, NULL, NULL, NULL),
(594, 'HLA-B 27 ใส่tubeฟ้า10 ml.', NULL, NULL, NULL, NULL),
(595, 'Plasma Renin Activity (PRA)', 'ng/ml/hr.', 'Recumbent 0.2-2.8 , Upright 1.5-5.7', NULL, NULL),
(596, 'Plasma Aldosterone Concentration (PAC)', 'ng/dL.', '', NULL, NULL),
(597, 'anti-thyroglobulin Ab(anti-TG)', NULL, '<1:100', NULL, NULL),
(598, 'Anti-TPO (Microsomai Ab)', NULL, NULL, NULL, NULL),
(599, 'Scrub thyphus Ab (หา titer)', NULL, NULL, NULL, NULL),
(600, 'C.difficile Toxin', NULL, 'Negative', NULL, NULL),
(601, 'U24h-Prot (Cal)', 'mg/day', '40-100', NULL, NULL),
(602, 'Anti-HEV (total Ab)', NULL, NULL, NULL, NULL),
(603, 'HEV Ag', NULL, NULL, NULL, NULL),
(604, 'Synovial fluid C/S', NULL, NULL, NULL, NULL),
(605, 'HBV-DNA (PCR: Quanlitative)', '', 'Negative', NULL, NULL),
(606, 'HCV-RNA (PCR:Quanlitative)', NULL, 'Negative', NULL, NULL),
(607, 'GLUCOSE (NaF)', 'mg/dL.', '70-110', NULL, NULL),
(608, 'Malaria Ag P.f/Pan', NULL, 'Negative', NULL, NULL),
(609, 'Ascitic Albumin', 'g/dL', NULL, NULL, NULL),
(610, 'Thyroglobulin level(TG)', 'ng/mL', '1.4-78.0', NULL, NULL),
(611, 'Anti-CCP', NULL, NULL, NULL, NULL),
(612, 'BUN', 'mg/dL', '8-20', NULL, NULL),
(613, 'CREATININE', 'mg/dL', 'M:0.8-1.5, F:0.5-1.2', NULL, NULL),
(614, 'URIC ACID', 'mg/dL.', 'M:3.5 -7.2, F:2.6-6.0', NULL, NULL),
(615, 'ALT(SGPT)', 'IU/L', 'M:7-41, F:7-31', NULL, NULL),
(616, 'AST(SGOT)', 'IU/L', 'M: 7-38, F: 7-32', NULL, NULL),
(617, 'ALP', 'IU/L', 'M:30-145, F:30-141', NULL, NULL),
(618, 'CHO', 'mg/dL', '150 - 200', NULL, NULL),
(619, 'TRIG', 'mg/dL', 'M:40-160, F:35-135', NULL, NULL),
(620, 'BA(%)', '%', '0-1.8', NULL, NULL),
(621, 'WBC Count', '10^3/uL', '4.5-10.6', NULL, NULL),
(622, 'NE(%)', '%', '39.6-71.6', NULL, NULL),
(623, 'LYMPH(%)', '%', '18.3-49.0', NULL, NULL),
(624, 'EO(%)', '%', '0-7.8', NULL, NULL),
(625, 'MONO(%)', '%', '2.3-8.7', NULL, NULL),
(626, 'RBC Count', '10^6/uL', '4.2-6.0', NULL, NULL),
(627, 'HGB', 'g/dL', '12.0-18.0', NULL, NULL),
(628, 'HCT', '%', '35.2-46.4', NULL, NULL),
(629, 'MCV', 'fL', '80.0-99.5', NULL, NULL),
(630, 'MCH', 'pg', '26.5-31.2', NULL, NULL),
(631, 'MCHC', 'g/dL', '31.8-36.4', NULL, NULL),
(632, 'RDW', '%', '11.1-15.2', NULL, NULL),
(633, 'PLT.Count', '10^3/uL', '140-450', NULL, NULL),
(634, 'COLOR', '-', NULL, NULL, NULL),
(635, 'APPERANCE', '-', NULL, NULL, NULL),
(636, 'pH', '-', '4.5-8.0', NULL, NULL),
(637, 'SP.GR', '-', '1.003-1.030', NULL, NULL),
(638, 'BILIRUBIN', '-', 'Negative', NULL, NULL),
(639, 'UROBILINOGEN', '-', 'Negative', NULL, NULL),
(640, 'PROTEIN', '-', 'Negative', NULL, NULL),
(641, 'SUGAR', '-', 'Negative', NULL, NULL),
(642, 'KETONE', '-', 'Negative', NULL, NULL),
(643, 'LEUKOCYTE', '-', 'Negative', NULL, NULL),
(644, 'BLOOD', '-', 'Negative', NULL, NULL),
(645, 'RBC', 'Cells/HPF', '0-5', NULL, NULL),
(646, 'WBC', '-', '0-5', NULL, NULL),
(647, 'Squamous Epi.', 'Cells/HPF', '0-5', NULL, NULL),
(648, 'BACTERIA', '-', 'Not found', NULL, NULL),
(649, 'AMORPHUS', '-', 'Not found', NULL, NULL),
(650, 'FUNGUS', '-', 'Not found', NULL, NULL),
(651, 'CRYSTAL', 'Cell/HPF', 'Not found', NULL, NULL),
(652, 'CAST', 'Cell/LPF', 'Not found', NULL, NULL),
(653, 'NITRITE', '-', 'Negative', NULL, NULL),
(654, 'TSH', 'mIU/mL', '0.358-3.740', NULL, NULL),
(655, 'GFR(CKD-EPI)', 'ml/min/1.73m^2', '> 60', NULL, NULL),
(656, 'FT3', 'pg/mL', '2.18-3.98', NULL, NULL),
(657, 'CK-MB (strip)', '-', 'Negative', NULL, NULL),
(658, 'pO2', NULL, '83-108', NULL, NULL),
(659, 'pH', NULL, '7.35-7.45', NULL, NULL),
(660, 'Lactate', 'mmol/L', '0.56-1.39', NULL, NULL),
(661, 'BG_Na', 'mmol/L', '138-146', NULL, NULL),
(662, 'BG_K', 'mmol/L', '3.5-4.5', NULL, NULL),
(663, 'STOOL COLOR', '-', '-', NULL, NULL),
(664, 'STOOL CHARACTERISTIC', '-', '-', NULL, NULL),
(665, 'T4', 'ug/dL.', '4.7-13.3', NULL, NULL),
(666, 'STOOL PARASITE', '-', 'Not found', NULL, NULL),
(667, 'STOOL RBC', '-', '0-1', NULL, NULL),
(668, 'STOOL WBC', '-', '0-1', NULL, NULL),
(669, 'STOOL OCCULTBLOOD', '-', 'Negative', NULL, NULL),
(670, 'Scabies', NULL, NULL, NULL, NULL),
(671, 'STOOL OTHER', '-', '-', NULL, NULL),
(672, 'BG_Glucose', 'mg/dL', '74-100', NULL, NULL),
(673, 'Ionized Calcium', 'mmol/L', '1.15-1.33', NULL, NULL),
(674, 'BG_TCO2', 'mmol/L', '22-29', NULL, NULL),
(675, 'BG_Cl', NULL, NULL, NULL, NULL),
(676, 'Hct', '%', '38-51', NULL, NULL),
(677, 'pCO2', 'mmHg', '35-48', NULL, NULL),
(678, 'Ur-Phos', 'mg/dL.', '40-136', NULL, NULL),
(679, 'FT4', 'ng/dL', '0.76-1.46', NULL, NULL),
(680, 'SGOT/AST', 'U/L', '15-37', NULL, NULL),
(681, 'SGPT/ALT', 'U/L', 'ชาย:16-63,หญิง:14-59', NULL, NULL),
(682, 'BG_HCO3', 'mmol/L', '21-28', NULL, NULL),
(683, 'CD4 count', NULL, NULL, NULL, NULL),
(684, 'Ur-prot/Ur-cre Index', NULL, '< 0.3', NULL, NULL),
(685, 'PCR for alpha-thalassemia 1', '-', NULL, NULL, NULL),
(686, 'THC (กัญชา)', NULL, 'Negative', NULL, NULL),
(687, 'Anti-Smith (Anti-Sm)', NULL, 'Negative', NULL, NULL),
(688, 'Wafarin', NULL, NULL, NULL, NULL),
(689, 'Prednisolone', NULL, NULL, NULL, NULL),
(690, 'Glucose(2-hrs.Post-pandial)', 'mg/dl', '<120', NULL, NULL),
(691, 'Anti-HCV (GPA)', '-', 'negative', NULL, NULL),
(692, 'Anti-Scl 70', NULL, '150', NULL, NULL),
(693, 'Lactate', 'mmol/L', '0.5-2.2', NULL, NULL),
(694, 'HSV-1 and -2 IgG', NULL, NULL, NULL, NULL),
(695, 'HSV-1 and -2 IgM', NULL, NULL, NULL, NULL),
(696, 'PCR  for HSV (Herpes Simplex Virus)', NULL, NULL, NULL, NULL),
(697, 'Cytomegalovirus IgM (CMV IgM)', NULL, 'Negative', NULL, NULL),
(698, 'Cytomegalovirus IgG (CMV IgG)', NULL, 'Negative', NULL, NULL),
(699, 'PH (serum)', NULL, '20.00', NULL, NULL),
(700, 'Influenza virus for RT-PCR', NULL, '', NULL, NULL),
(701, 'Mycoplasma IgM', NULL, NULL, NULL, NULL),
(702, 'Mycoplasma IgG', NULL, NULL, NULL, NULL),
(703, 'RV-16', NULL, NULL, NULL, NULL),
(704, 'Gram H/C ขวด2', NULL, NULL, NULL, NULL),
(705, 'Urine Ketone', NULL, 'Negative', NULL, NULL),
(706, 'Pancreatic Amylase', 'U/L', '<53', NULL, NULL),
(707, 'HBV-Genotype', NULL, NULL, NULL, NULL),
(708, 'MDMA(ยาอี)', NULL, NULL, NULL, NULL),
(709, '6-MAM(เฮโรอีน)', NULL, NULL, NULL, NULL),
(710, 'Benzoylegonine(โคเคน)', NULL, NULL, NULL, NULL),
(711, 'CK-MB ตรวจเชิงปริมาณ (tubeม่วง)', 'ng/mL', '<4.3', NULL, NULL),
(712, 'Myoglobin ตรวจเชิงปริมาณ(tubeม่วง)', 'ng/mL', '<107', NULL, NULL),
(713, 'Hb Typing (ANC)', NULL, NULL, NULL, NULL),
(714, 'Anti-SCL70', NULL, 'Negative', NULL, NULL),
(715, 'Anti Centromere', NULL, 'Negative', NULL, NULL),
(716, 'PCR for alpha-thalassemia 1, 2', NULL, NULL, NULL, NULL),
(717, 'Methamphetamine urine (Sens.1000ng/ml)', '', 'Negative', NULL, NULL),
(718, 'TPHA (TP-PA)', NULL, NULL, NULL, NULL),
(719, 'Anti-HCV (ECL)', NULL, NULL, NULL, NULL),
(720, 'FT3', 'pg/mL', '2.77-5.27', NULL, NULL),
(721, 'FT4', 'ng/dL', '0.7-1.6', NULL, NULL),
(722, 'CA125', 'U/mL', '1.9-16.3', NULL, NULL),
(723, 'CA153 (ELFA)', 'U/mL', '0-28', NULL, NULL),
(724, 'Free PSA/Total PSA Ratio', '-', '>=0.15', NULL, NULL),
(725, 'Hemoculture ขวด3', NULL, 'No Growth 7 days', NULL, NULL),
(726, 'ID STAT(ECL)', NULL, 'Negative (<0.9)', NULL, NULL),
(727, 'Typhoid and Paratyphoid IgM', '-', 'Negative', NULL, NULL),
(728, 'Coxackie B Ab', NULL, NULL, NULL, NULL),
(729, 'Echovirus Ag', NULL, 'Negative', NULL, NULL),
(730, 'HAV IgM Ab (ELFA)', '-', 'Negative', NULL, NULL),
(731, 'CA125 (ELFA)', 'U/mL', '0-35', NULL, NULL),
(732, 'CA19-9 (ELFA)', 'U/mL', '0-37', NULL, NULL),
(733, 'Ferritin (ELFA)', NULL, NULL, NULL, NULL),
(734, 'CK-MB (ELFA)(tubeแดง/เหลือง)', 'ng/mL', '0-5', NULL, NULL),
(735, 'Varicella Zoster Virus IgM/IgG', NULL, 'Negative', NULL, NULL),
(736, 'Cortisol(Urine)', '', NULL, NULL, NULL),
(737, 'HCV Genotype', NULL, NULL, NULL, NULL),
(738, 'Anti-HBs (ECLIA)', 'mIU/ml', NULL, NULL, NULL),
(739, 'Anti cardiolpin antibody IgM', NULL, NULL, NULL, NULL),
(740, 'Anti cardiolipin antibody IgG', NULL, NULL, NULL, NULL),
(741, 'Anti Beta2-glycoprotein I antibody IgM', NULL, NULL, NULL, NULL),
(742, 'Anti Beta2-glycoprotein I antibody IgG', NULL, NULL, NULL, NULL),
(743, 'Troponin I (ELFA)(tubeแดง/เหลือง)', 'ug/L', '<0.01', NULL, NULL),
(744, 'Anti-HBc (Total) IC', NULL, NULL, NULL, NULL),
(745, '25-OH Vitamin D (ECL)', 'ng/mL', '30-100', NULL, NULL),
(746, 'hs-Troponin I (ELFA)(tubeแดง/เหลือง)', 'ng/L', '<10', NULL, NULL),
(747, 'HbA1c (EXL)', '%', '4.0-6.5Non DM,6.0-7.0Goal,7.0-8.0Good,>8.0:Action', NULL, NULL),
(748, 'Clostridium difficile Toxin A and B', NULL, NULL, NULL, NULL),
(749, 'Lipase', 'U/L', '73-393 U/L', NULL, NULL),
(750, 'Tranferrin saturation', '%', '27-45', NULL, NULL),
(751, 'ย้อมสีพิเศษจากชิ้นเนื้อ (AFB)', NULL, NULL, NULL, NULL),
(752, 'ย้อมสีพิเศษจากชิ้นเนื้อ (Gram)', NULL, NULL, NULL, NULL),
(753, 'PCR for TB', NULL, NULL, NULL, NULL),
(754, 'Helicobacter pyroli(Ag)', NULL, NULL, NULL, NULL),
(755, 'Mercury(Hg)', NULL, NULL, NULL, NULL),
(756, 'HIV-p24 Ag', NULL, '160', NULL, NULL),
(757, 'Mono(MAFB)', NULL, NULL, NULL, NULL),
(758, 'PMN (MAFB)', NULL, NULL, NULL, NULL),
(759, 'Epithelial (MAFB)', NULL, NULL, NULL, NULL),
(760, 'Specimen', NULL, NULL, NULL, NULL),
(761, 'ANCA (Antineutrophile cytoplasmic Ab)', NULL, 'Negative', NULL, NULL),
(762, 'RH Donor 1 (slide)', NULL, NULL, NULL, NULL),
(763, 'ABO Donor 1 (slide)', NULL, NULL, NULL, NULL),
(764, 'Cell  Grouping', NULL, NULL, NULL, NULL),
(765, 'Serum  Grouping', NULL, NULL, NULL, NULL),
(766, 'LDPRC  : LDPRC : Leukocyte depleted PRC (NAT)', '-', NULL, NULL, NULL),
(767, 'serum beta HCG qualitative test', '', NULL, NULL, NULL),
(768, 'Cryoglobulin', NULL, NULL, NULL, NULL),
(769, '20WBCT', 'minute', '<20 minute', NULL, NULL),
(770, 'Random_PLT_Conc (NAT)', NULL, NULL, NULL, NULL),
(771, 'SD_PLT_Close : Single donor platelet (NAT)', NULL, NULL, NULL, NULL),
(772, 'Cryoprecipitate(NAT) สภากาชาด', NULL, NULL, NULL, NULL),
(773, 'ABO group1 (Tube method)', NULL, NULL, NULL, NULL),
(774, 'Rh typing1(tube method)', NULL, NULL, NULL, NULL),
(775, 'Cross Match1 (Gel method)', NULL, NULL, NULL, NULL),
(776, 'Cross Match2 (Gel method)', NULL, NULL, NULL, NULL),
(777, 'ABO Donor 2 (slide)', NULL, NULL, NULL, NULL),
(778, 'Rh Donor 2 (slide)', NULL, NULL, NULL, NULL),
(779, 'Rapid Urease Test(CLO)', NULL, 'Negative', NULL, NULL),
(780, 'Minimum Inhibitory Concentration (MIC)', NULL, NULL, NULL, NULL),
(781, 'Anti-TSH receptor antibody (TRAb)', 'IU/L', '< 1.8 IU/L', NULL, NULL),
(782, 'HLA-B*58:01', NULL, 'Negative', NULL, NULL),
(783, 'Helicobacter pylori (IgM)', NULL, 'Negative', NULL, NULL),
(784, 'Helicobacter pylori (IgG)', NULL, 'Negative', NULL, NULL),
(785, 'Urine Methamphetamine (Confirm test)', NULL, NULL, NULL, NULL),
(786, 'FSH (Follicle stimulating hormone)', NULL, NULL, NULL, NULL),
(787, 'ACTH (Adrenocorticotrophic hormone)', 'pg/ml', '0-71', NULL, NULL),
(788, 'IGF-1(Insulin-like growth factor-1)', NULL, NULL, NULL, NULL),
(789, 'Specific IgE (>7 allergens)', NULL, NULL, NULL, NULL),
(790, 'IgG 4', NULL, NULL, NULL, NULL),
(791, 'Crytococcal Ag (Qualitative)', NULL, 'Negative', NULL, NULL),
(792, 'Anti-thrombin III', NULL, NULL, NULL, NULL),
(793, 'Lupus anticoagulant (screening)', NULL, NULL, NULL, NULL),
(794, 'HIV-RNA (PCR:Qualitative)', NULL, NULL, NULL, NULL),
(795, 'Alcohol,blood', NULL, NULL, NULL, NULL),
(796, 'Lithium', 'mmol/L', '0.5 - 1.5', NULL, NULL),
(797, 'Uric acid (Urine)', 'mg/dl', '7.5 - 49.5', NULL, NULL),
(798, 'HBsAb ไม่ใช่งาน', 'mIU/ml', 'Negative (<8)', NULL, NULL),
(799, 'PCR-Microbial Identification(16SRNA)', NULL, NULL, NULL, NULL),
(800, 'Occult blood, Stool', NULL, 'Negative', NULL, NULL),
(801, 'Cross Match3 (Gel method)', NULL, NULL, NULL, NULL),
(802, 'ABO Donor 3 (slide)', NULL, NULL, NULL, NULL),
(803, 'Rh Donor 3 (slide)', NULL, NULL, NULL, NULL),
(804, 'Rickettsia typhi Ab detection', NULL, 'Negative', NULL, NULL),
(805, 'Ab Identification (Tube method)', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labitems_id` int(10) UNSIGNED NOT NULL,
  `picname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `map_pts`
--

CREATE TABLE `map_pts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Latitude',
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Longitude',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'status',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_pts`
--

INSERT INTO `map_pts` (`id`, `users_id`, `lat`, `lng`, `status`, `created_at`, `updated_at`) VALUES
(26, 8, '17.187482906561367', '104.10587942725716', 'test', '2019-09-04 17:43:57', '2019-09-04 17:43:57'),
(27, 8, '37.785834', '-122.406417', 'test', '2019-09-10 01:41:20', '2019-09-10 01:41:20'),
(28, 8, '37.785834', '-122.406417', 'test', '2019-09-10 01:46:11', '2019-09-10 01:46:11'),
(29, 8, '17.187313304118494', '104.1057216332796', 'test', '2019-09-17 13:37:00', '2019-09-17 13:37:00'),
(30, 8, '17.18722809373142', '104.10567888706969', 'test', '2019-09-17 13:49:20', '2019-09-17 13:49:20'),
(31, 8, '17.187402558115', '104.10586690633977', 'test', '2019-09-18 17:56:45', '2019-09-18 17:56:45'),
(32, 11, '17.181723055572014', '104.10097777259476', 'test', '2019-09-19 00:11:13', '2019-09-19 00:11:13'),
(33, 11, '17.187425938192995', '104.10584850787745', 'test', '2019-09-19 10:21:47', '2019-09-19 10:21:47'),
(34, 11, '17.187419055068254', '104.10586048905252', 'test', '2019-09-19 10:23:06', '2019-09-19 10:23:06'),
(35, 11, '17.18795819223317', '104.10619645242706', 'test', '2019-09-19 11:45:55', '2019-09-19 11:45:55'),
(36, 11, '17.18168491087112', '104.10106725406308', 'test', '2019-09-19 14:42:22', '2019-09-19 14:42:22'),
(37, 11, '17.18723463845936', '104.10576977140224', 'test', '2019-09-19 18:24:12', '2019-09-19 18:24:12'),
(38, 11, '17.188241732978593', '104.10561406859112', 'test', '2019-09-19 22:33:31', '2019-09-19 22:33:31'),
(39, 11, '17.187371034270292', '104.10576556504529', 'test', '2020-01-20 19:38:48', '2020-01-20 19:38:48'),
(40, 11, '37.422011', '-122.0839682', 'test', '2020-10-07 00:19:28', '2020-10-07 00:19:28'),
(41, 11, '...', '...', 'test', '2020-10-07 04:59:25', '2020-10-07 04:59:25'),
(42, 11, '17.1831275', '104.1010956', 'test', '2020-10-07 04:59:32', '2020-10-07 04:59:32'),
(43, 11, '...', '...', 'test', '2020-10-08 00:45:36', '2020-10-08 00:45:36'),
(44, 11, '...', '...', 'test', '2020-10-08 01:59:41', '2020-10-08 01:59:41'),
(45, 11, '...', '...', 'test', '2020-10-08 02:00:00', '2020-10-08 02:00:00'),
(46, 11, '37.4220102', '-122.0839814', 'test', '2020-10-08 02:14:02', '2020-10-08 02:14:02'),
(47, 11, '37.4220102', '-122.0839814', 'test', '2020-10-08 02:15:01', '2020-10-08 02:15:01'),
(48, 11, '17.1873288', '104.1058655', 'test', '2021-01-27 02:35:59', '2021-01-27 02:35:59'),
(49, 11, '17.1873288', '104.1058655', 'test', '2021-01-27 02:40:13', '2021-01-27 02:40:13'),
(50, 11, '17.1877389', '104.1061416', 'test', '2021-01-27 02:52:18', '2021-01-27 02:52:18'),
(51, 11, '17.1877389', '104.1061416', 'test', '2021-01-27 03:03:17', '2021-01-27 03:03:17'),
(52, 11, '17.1893936', '104.1078261', 'test', '2021-01-27 03:04:32', '2021-01-27 03:04:32'),
(53, 11, '17.1893936', '104.1078261', 'test', '2021-01-27 03:09:37', '2021-01-27 03:09:37'),
(54, 11, '...', '...', 'test', '2021-01-27 03:10:02', '2021-01-27 03:10:02'),
(55, 11, '...', '...', 'test', '2021-01-27 03:10:26', '2021-01-27 03:10:26'),
(56, 11, '17.1917965', '104.1103633', 'test', '2021-01-27 03:10:44', '2021-01-27 03:10:44'),
(57, 11, '17.1831345', '104.1010815', 'test', '2021-01-27 14:54:26', '2021-01-27 14:54:26'),
(58, 11, '17.187870467036205', '104.10605532977439', 'test', '2021-01-28 07:28:53', '2021-01-28 07:28:53'),
(59, 11, '17.187827466141144', '104.10612645519221', 'test', '2021-01-28 07:29:03', '2021-01-28 07:29:03'),
(60, 11, '17.187827466141144', '104.10612645519221', 'test', '2021-01-28 07:29:17', '2021-01-28 07:29:17'),
(61, 11, '17.1877429', '104.106135', 'test', '2021-01-29 02:34:08', '2021-01-29 02:34:08'),
(62, 11, '17.187748', '104.1061471', 'test', '2021-01-29 07:25:00', '2021-01-29 07:25:00'),
(63, 11, '17.1877438', '104.1061426', 'test', '2021-01-29 07:40:44', '2021-01-29 07:40:44'),
(64, 11, '17.1877438', '104.1061426', 'test', '2021-01-29 07:40:52', '2021-01-29 07:40:52'),
(65, 11, '17.1877468', '104.1061478', 'test', '2021-01-29 07:41:14', '2021-01-29 07:41:14'),
(66, 11, '17.1877457', '104.1061433', 'test', '2021-01-29 07:41:25', '2021-01-29 07:41:25'),
(67, 11, '17.1877457', '104.1061448', 'test', '2021-01-29 07:43:35', '2021-01-29 07:43:35'),
(68, 11, '17.1877457', '104.1061425', 'test', '2021-01-29 07:48:28', '2021-01-29 07:48:28'),
(69, 11, '17.1878644144516', '104.10609795512104', 'test', '2021-01-29 07:48:34', '2021-01-29 07:48:34'),
(70, 11, '17.1873659', '104.1057166', 'test', '2021-02-03 07:12:08', '2021-02-03 07:12:08'),
(71, 20, '17.187711', '104.1061523', 'test', '2021-02-05 03:35:43', '2021-02-05 03:35:43'),
(72, 21, '17.1877515', '104.1061416', 'test', '2021-02-05 03:37:13', '2021-02-05 03:37:13'),
(73, 22, '...', '...', 'test', '2021-02-05 03:39:29', '2021-02-05 03:39:29'),
(74, 30, '17.187453', '104.1058475', 'test', '2021-02-08 08:33:02', '2021-02-08 08:33:02'),
(75, 30, '17.187453', '104.1058475', 'test', '2021-02-08 08:36:02', '2021-02-08 08:36:02'),
(76, 30, '17.1874353', '104.1058517', 'test', '2021-02-08 08:37:37', '2021-02-08 08:37:37'),
(77, 30, '17.1874353', '104.1058517', 'test', '2021-02-08 08:40:42', '2021-02-08 08:40:42'),
(78, 19, '17.1877552', '104.1061535', 'test', '2021-02-09 04:09:11', '2021-02-09 04:09:11'),
(79, 51, '17.1832739', '104.1101155', 'test', '2021-02-10 01:13:33', '2021-02-10 01:13:33'),
(80, 51, '...', '...', 'test', '2021-02-10 01:21:52', '2021-02-10 01:21:52'),
(81, 51, '17.1841767', '104.1141727', 'test', '2021-02-10 01:22:38', '2021-02-10 01:22:38'),
(82, 32, '17.1825963', '104.1139296', 'test', '2021-02-10 01:58:48', '2021-02-10 01:58:48'),
(83, 32, '17.1823936', '104.1139482', 'test', '2021-02-10 02:05:33', '2021-02-10 02:05:33'),
(84, 33, '17.1840889', '104.1149299', 'test', '2021-02-10 02:14:16', '2021-02-10 02:14:16'),
(85, 33, '17.1840889', '104.1149299', 'test', '2021-02-10 02:14:22', '2021-02-10 02:14:22'),
(86, 44, '17.1820169', '104.1130788', 'test', '2021-02-10 02:14:27', '2021-02-10 02:14:27'),
(87, 44, '17.184208', '104.111347', 'test', '2021-02-10 02:15:34', '2021-02-10 02:15:34'),
(88, 44, '17.1839863', '104.115077', 'test', '2021-02-10 02:17:19', '2021-02-10 02:17:19'),
(89, 44, '17.1839863', '104.115077', 'test', '2021-02-10 02:17:51', '2021-02-10 02:17:51'),
(90, 21, '17.1840541', '104.1148947', 'test', '2021-02-10 02:18:25', '2021-02-10 02:18:25'),
(91, 44, '17.1856513', '104.1121167', 'test', '2021-02-10 05:14:35', '2021-02-10 05:14:35'),
(92, 21, '17.1884611', '104.1085722', 'test', '2021-02-10 07:25:37', '2021-02-10 07:25:37'),
(93, 21, '17.1884611', '104.1085722', 'test', '2021-02-10 07:28:18', '2021-02-10 07:28:18'),
(94, 20, '17.1779201', '104.0971883', 'test', '2021-02-10 09:22:39', '2021-02-10 09:22:39'),
(95, 20, '17.1779208', '104.097187', 'test', '2021-02-10 09:48:17', '2021-02-10 09:48:17'),
(96, 31, '17.1882832', '104.1168612', 'test', '2021-02-13 07:39:43', '2021-02-13 07:39:43'),
(97, 62, '17.1981535', '104.1006235', 'test', '2021-02-15 02:36:47', '2021-02-15 02:36:47'),
(98, 62, '17.1981622', '104.1006225', 'test', '2021-02-15 02:37:41', '2021-02-15 02:37:41'),
(99, 61, '...', '...', 'test', '2021-02-15 03:14:36', '2021-02-15 03:14:36'),
(100, 61, '17.1986139', '104.100287', 'test', '2021-02-15 03:14:44', '2021-02-15 03:14:44'),
(101, 61, '17.1981802', '104.1006233', 'test', '2021-02-15 03:15:29', '2021-02-15 03:15:29'),
(102, 21, '17.1873538', '104.1058688', 'test', '2021-02-17 07:30:18', '2021-02-17 07:30:18'),
(103, 21, '...', '...', 'test', '2021-03-18 10:13:27', '2021-03-18 10:13:27'),
(104, 20, '17.1780203', '104.0972278', 'test', '2021-03-18 10:27:48', '2021-03-18 10:27:48'),
(105, 20, '17.1779305', '104.097206', 'test', '2021-03-18 10:43:10', '2021-03-18 10:43:10'),
(106, 35, '17.1967611', '104.1110379', 'test', '2021-06-28 05:03:06', '2021-06-28 05:03:06'),
(107, 63, '17.1873568', '104.1056512', 'test', '2021-10-20 03:08:01', '2021-10-20 03:08:01'),
(108, 24, '17.1877681', '104.1061121', 'test', '2021-11-17 03:10:27', '2021-11-17 03:10:27'),
(109, 63, '17.1873848', '104.1059189', 'test', '2021-11-24 04:16:55', '2021-11-24 04:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `meds`
--

CREATE TABLE `meds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drugitems_id` int(10) UNSIGNED NOT NULL,
  `drugusage_id` int(10) UNSIGNED NOT NULL,
  `howtouse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `picname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meds`
--

INSERT INTO `meds` (`id`, `admins_id`, `users_id`, `detail`, `drugitems_id`, `drugusage_id`, `howtouse`, `date`, `picname`, `pic`, `created_at`, `updated_at`) VALUES
(2, 1, 11, '-', 19, 18, '-', '2020-08-29', '-', '-', '2020-08-30 20:34:15', '2020-08-30 20:34:15'),
(3, 1, 11, '-', 4, 5, '-', '2020-08-29', '-', '-', '2020-08-30 20:34:15', '2020-08-30 20:34:15'),
(4, 1, 11, '-', 26, 16, '-', '2020-08-29', '-', '-', '2020-08-30 20:34:15', '2020-08-30 20:34:15'),
(5, 1, 11, '-', 14, 4, '-', '2020-08-29', '-', '-', '2020-08-30 20:34:15', '2020-08-30 20:34:15'),
(6, 1, 11, '-', 3, 1, '-', '2020-08-29', '-', '-', '2020-08-30 20:34:15', '2020-08-30 20:34:15'),
(11, 1, 10, '-', 4, 4, '-', '2021-01-03', '-', '-', '2021-01-13 22:39:14', '2021-01-13 22:39:14'),
(12, 1, 10, '-', 20, 21, '-', '2021-01-03', '-', '-', '2021-01-13 22:39:14', '2021-01-13 22:39:14'),
(13, 1, 10, '-', 17, 14, '-', '2021-01-03', '-', '-', '2021-01-13 22:39:14', '2021-01-13 22:39:14'),
(14, 15, 52, '-', 168, 236, '-', '2562-02-06', '-', '-', '2021-02-14 08:08:44', '2021-02-14 08:08:44'),
(15, 15, 52, '-', 1, 1, '-', '2562-02-06', '-', '-', '2021-02-14 08:08:44', '2021-02-14 08:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(221, '2014_10_12_000000_create_users_table', 1),
(222, '2014_10_12_100000_create_password_resets_table', 1),
(223, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(224, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(225, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(226, '2016_06_01_000004_create_oauth_clients_table', 1),
(227, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(228, '2019_08_22_081519_create_home_pts_table', 1),
(229, '2019_08_22_081728_create_doctors_table', 1),
(230, '2019_08_22_081807_create_hospital_pts_table', 1),
(231, '2019_08_22_082040_create_congenital_diseases_table', 1),
(232, '2019_08_22_082150_create_cxrs_table', 1),
(233, '2019_08_22_082435_create_user_pt_pastillnesses_table', 1),
(234, '2019_08_22_082529_create_privileges_table', 1),
(235, '2019_08_22_082809_create_meds_table', 1),
(236, '2019_08_22_082934_create_rxes_table', 1),
(237, '2019_08_22_083020_create_infothers_table', 1),
(238, '2019_08_22_083107_create_labs_table', 1),
(239, '2019_08_22_083246_create_ekgs_table', 1),
(240, '2019_08_22_083344_create_map_pts_table', 1),
(241, '2019_08_29_132518_create_detail_user_table', 1),
(242, '2019_08_30_075357_laratrust_setup_tables', 1),
(243, '2019_09_19_045144_add_drugitems_id_to_meds_table', 2),
(244, '2019_09_19_045337_create_drugitems_table', 2),
(245, '2019_09_19_051017_create_labitems_table', 2),
(246, '2019_09_19_051412_add_labitems_id_to_labs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(2, 'read-users', 'Read Users', 'Read Users', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(3, 'update-users', 'Update Users', 'Update Users', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(11, 'create-profile', 'Create Profile', 'Create Profile', '2019-08-29 18:32:11', '2019-08-29 18:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(9, 5, 'App\\User'),
(10, 5, 'App\\User'),
(11, 5, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ประกันสังคม', NULL, NULL),
(2, 'เบิกตรง', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(2, 'administrator', 'Administrator', 'Administrator', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(3, 'editor', 'Editor', 'Editor', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(4, 'user', 'User', 'User', '2019-08-29 18:32:10', '2019-08-29 18:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(4, 4, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `rxes`
--

CREATE TABLE `rxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default_pat.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rxes`
--

INSERT INTO `rxes` (`id`, `admins_id`, `users_id`, `detail`, `picname`, `pic`, `created_at`, `updated_at`) VALUES
(1, 15, 52, NULL, 'default_pat.jpg', '172243.pdf', '2021-02-14 08:09:12', '2021-02-14 08:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `isAdmin`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', NULL, '$2y$10$CSY/RJRCYYSJ0FLlGsSGnOq2KGmlTsu1dehqdPoD0K5iu/v6t4deC', '1', '39495cf86ade41093beea9ef7110b3dc843099b2e06e9ef1e636add7793b', 'DkpxpZZBLxSB4zYBJV81tPwREFAoZwmymaKlqfENUG7foVsVEiS8Qz4hqNwa', '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(2, 'Administrator', 'administrator@app.com', NULL, '$2y$10$LakKF3fgsFcCVeMW25pw0ugU97ASTeK3qjltnrhgvbZ3kNpzsUShq', '1', 'e1eec37c61251a6f383df4f96410b45bdb49ad55e9683084e4fb51cb76d7', NULL, '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(3, 'Editor', 'editor@app.com', NULL, '$2y$10$wkIxHtx8W8v2wCtzMuqtLOmfztkO5wfZFW7Z1TgyTT92bbHEzuxJS', '1', '04a5dc1eff4c7595e023a6c115284a03dd1d4fa5db8ad8f0e41948c330d3', NULL, '2019-08-29 18:32:10', '2019-08-29 18:32:10'),
(4, 'User', 'user@app.com', NULL, '$2y$10$BHE0tjqDSBW1qNiY7jFuIOHNTuIwHmOnmzGVM2eAN2PK0Ko0wjXvq', '1', 'b9a53534ab484f1066f6c3f4098010121b734415d97f9691e472d8599002', NULL, '2019-08-29 18:32:11', '2019-08-29 18:32:11'),
(5, 'Cru User', 'cru_user@app.com', NULL, '$2y$10$zgpEW0/qu9mBgX4a8e1D0O2u0r7ag073QZPcCCFPUSHoP3vQ/.v3q', '1', '294c26025b3e04e47f8fdae5664df48513e749ffde541395356e937107d3', 'OkqmvPXlkk', '2019-08-29 18:32:11', '2019-08-29 18:32:11'),
(13, 'Jariya0428', 'jarisupuk.0428@gmail.com', NULL, '$2y$10$WrK.TWNjKIwIztriKItc2e6BFFCuu0eU0jooQBNWSni/drxchAwi2', '1', 'c388ca13d292b65fe2829fe016bfd15cd3afc4cc3093b9755e4fd118777c', NULL, '2019-09-18 18:35:42', '2019-09-18 19:16:34'),
(14, 'niparat', 'niparatt_@hotmail.com', NULL, '$2y$10$TPEAQ0EGMaYMp8qwY1S4v.uCuWywUET0q5cfLiwmCKz93qQlXS9iO', '1', '7e61dbeb2b60fd9e694698c6c52c8e355cf7e5c8a6702f7e67514954f357', NULL, '2021-01-15 07:01:28', '2021-01-15 07:01:28'),
(15, 'Mekurew', 'faiimekurew@gmail.com', NULL, '$2y$10$XDuiLu0YJHPlqJudXnh9/OgSnelOY/Yt7YE9BslppetzDnUMZbNOS', '1', 'a9838f72f347626bab3c62895935ce19031eed01318708999f7c0a5a6c0f', NULL, '2021-01-19 04:57:10', '2021-01-19 04:57:10'),
(16, 'niparat1', 'niparatt.2019@gmail.com', NULL, '$2y$10$S2xl6DdVKQvxg.rnWA2RjO1YKLiJh2XFXVYtVqFvIn5p5V262XBaS', '1', '1b62011526c5012ed8a9bce842ba7d505299d58d6f27fbdea07f66ecb381', NULL, '2021-01-22 08:01:03', '2021-01-22 08:01:03'),
(17, 'niparatw', 'niparat99bb@hotmail.com', NULL, '$2y$10$xMrBCZvMa/cKLNgGGc93ge2e.QYzi5/5OgNF.L.gCg7GFXxlbvdOy', '1', '0e04cca0101dc9044a0377fb06d9254680d9b3af265e70afa5ba33e6d825', NULL, '2021-01-29 04:48:31', '2021-01-29 04:48:31'),
(18, 'ืnaphat', 'boonrakza19@gmail.com', NULL, '$2y$10$7xk972mpHBbrzs5Qq7JewuORCtE6iPW45eP1H9hICjePsLEPHcAb2', '1', '8c9fc9cb3cdfbb2f05855d35e27102a087b830b3c2f01ffdc53b791b3b81', NULL, '2021-02-04 06:10:00', '2021-02-04 06:10:00'),
(19, 'ธานี', 'ksvr01@ksvrhospital.go.th', NULL, '$2y$10$CbkgGtW1ohexzzTIWiE.2ufmO5tyYzsaLc1vP/xJ2XMfAI3fwPsgO', '0', '86776ef916f5ebfe79528eec54527208e2ae62c75755a1f3eb381748139d', NULL, '2021-02-05 03:10:01', '2021-02-09 12:44:53'),
(20, 'ไกรสวัสดิ์', 'ksvr02@ksvrhospital.go.th', NULL, '$2y$10$Dv2jVemsSHXL4i9OvGBFX.ptAVA0q78wq8FSQymRAGEh624R6n.YS', '0', '11415540857c171c2c61e19b17ae50c2969f3f679e115e60d39780907e85', NULL, '2021-02-05 03:14:48', '2021-02-05 03:14:48'),
(21, 'อุทัย', 'ksvr03@ksvrhospital.go.th', NULL, '$2y$10$9mDP9F8.o4j3MQclbOnc..wzVT2XQqZP/wgAe31u90MepusS0MPye', '0', 'e26a06c45a0f191c1196c3517371dc9713bcc468dc27876e69d3c767140d', NULL, '2021-02-05 03:20:42', '2021-02-14 07:22:52'),
(22, 'วีระพงษ์', 'KSVR04@ksvrhospital.go.th', NULL, '$2y$10$sfuvXZCVeIlKQmCZMwqbnuu3ehHy2/DMTFxojdM5byYHJPo/bNl.u', '0', '4e80f9fba3f312c52697e8b6e9490cdd31018f3f25d80da02ec4d1f2bb31', NULL, '2021-02-05 03:24:27', '2021-02-05 03:24:27'),
(23, 'ธงชาติ', 'ksvr05@ksvrhospital.go.th', NULL, '$2y$10$OeKrYlvlvhBC87zj6mC59eu/aQkjoxvcNtKiI9ixbIfp69i32ekj2', '0', '7a37e4386a13eef1e0de145837afd3144906495e0912fccb8e74ce72de8c', NULL, '2021-02-08 02:44:12', '2021-02-08 02:44:12'),
(24, 'สงวน', 'ksvr06@ksvrhospital.go.th', NULL, '$2y$10$vViLODfbI0CTSGVVi2Mg2.bH08AicHPIwTJpC.1WofooK/iN2K.cG', '0', '38cb73e025c8d9b69d641c29fe5daa6f85f93df103ab7f6ab028d6a94032', NULL, '2021-02-08 02:56:17', '2021-02-08 02:56:17'),
(25, 'จารุวัฒน์', 'ksvr07@ksvrhospital.go.th', NULL, '$2y$10$hstmnZ0NxXkGTPXhJ7cw0ufvDY16Q/1LasImS3tDgeKJoJQ1Ke41S', '0', '364fcfdf622656d53fc539971d20c3c8eeb43c7aca8a628c255dadb45d18', NULL, '2021-02-08 05:06:28', '2021-02-14 07:53:19'),
(26, 'สราวุธ', 'ksvr08@ksvrhospital.go.th', NULL, '$2y$10$gPhbMvg1KJrqfDBWlFcNY.3lroY/5f3NYWfVo1opVxFdvuzSLNbdO', '0', 'f04970ad5debae001017d271490af05900e4faae12cd0a25862bb041426a', NULL, '2021-02-08 06:45:06', '2021-02-14 11:02:32'),
(27, 'พิศพร้อม', 'ksvr09@ksvrhospital.go.th', NULL, '$2y$10$2mIJXuiUPChlNKbInEVd1.A2cWEQv.4UN0qTeVjGtDJOD7s0Ndfk6', '0', 'f31e1e472a1c28465eed528de6dfb2f1b8e83049aba359d11be61a4e179a', NULL, '2021-02-08 06:58:55', '2021-02-08 06:58:55'),
(28, 'วัชร', 'ksvr10@ksvrhospital.go.th', NULL, '$2y$10$fc1kLEmUz07r.ZB1Mza2heIVB6JE5Wnq/ZfO5Ca6ofgWf0D78387K', '0', '7b85ba2bce56bf59ed646902c6936fa9fb6ca129a139a3010c32007e542c', NULL, '2021-02-08 07:11:19', '2021-02-08 07:11:19'),
(29, 'พัชรินทร์', 'ksvr11@ksvrhospital.go.th', NULL, '$2y$10$GQU/AWHzuThiZh22At.CUuz9LhXRTrzebPGcvHsICuIMZCdtwAiZi', '0', '4b15b6312292630c5203be9071a9c782d2155b9167e7c13f57d95618ed09', NULL, '2021-02-08 07:27:29', '2021-02-08 07:27:29'),
(30, 'ทัพพ์', 'ksvr12@ksvrhospital.go.th', NULL, '$2y$10$OLa9AJqCUaWhK34b4apjT.G2ZUn7vDvc1iUYbESUvagsEhkaMWSFa', '0', '4369843dac16055d901b43190eb5a286b44f2bd9ac3cac5a2f09b1c77fb4', NULL, '2021-02-08 08:05:20', '2021-02-08 08:05:20'),
(31, 'ธนชิต', 'ksvr13@ksvrhospital.go.th', NULL, '$2y$10$w8Hc8HJa.KwYUlaNYFGjQeOGNjSL1Azancfr6Q5kZlyRia90W2Urm', '0', '1b7d0618c0eedfe73e3547e11bbcee5bea33e209908c5eef7cd99fd9cc23', NULL, '2021-02-08 08:15:57', '2021-02-14 07:16:57'),
(32, 'วานิช', 'ksvr14@ksvrhospital.go.th', NULL, '$2y$10$KeRqfcXzWrWLqUVB0NeTLegw2zAmmpYIv4MdSXghZ2vMPg7mYjNKC', '0', '24d42cc5969d0a93cabbf35b88c9fde49425c8df5fd019cf3bd081361d30', NULL, '2021-02-09 12:55:07', '2021-02-09 12:55:07'),
(33, 'เหมรัศมิ์', 'ksvr15@ksvrhospital.go.th', NULL, '$2y$10$Y13QEu42yl5E9tWLAzUEKOlidbGhpyl7aL8/cXsFFpKRqrxYtMNca', '0', 'ab4e65cb033a00e7ff60274b298fe6fe3ae80008bae651560dd1f4450265', NULL, '2021-02-09 14:02:30', '2021-02-09 14:02:30'),
(34, 'ดลนิมิตร', 'ksvr16@ksvrhospital.go.th', NULL, '$2y$10$zwYNHUW3R6JRvMHjxE9U.eOGyw.HvsaLGv5ZphEV4awCmTnFi3X/O', '0', 'f54e351e88860472ca91a537e9b063fba23140a441c627d6fa0d2e5d7ba7', NULL, '2021-02-09 14:11:29', '2021-02-14 08:41:34'),
(35, 'นัธนันท์', 'ksvr17@ksvrhospital.go.th', NULL, '$2y$10$YoUBPCJBGnmXvz548/1LLOsr69WfYjWY0/2rsmSQe0PS5K34fy5qi', '0', '8780b8dd437176453f2fb45c31d495fbe4dbe7ea7a5a11af28d78ebf1213', NULL, '2021-02-09 14:40:59', '2021-02-14 10:59:49'),
(36, 'ศักดา', 'ksvr18@ksvrhospital.go.th', NULL, '$2y$10$gwWor4mX5Z4WIyKeaOguS.3O2A36ODUGffuqRRiUk9YKzu1rrwL1y', '0', '7f4e9c0a2369e2e993f90ed4cab17be893b882d750b87aa93ebaa9b5984b', NULL, '2021-02-09 14:46:17', '2021-02-14 07:58:31'),
(37, 'สุทัศ', 'ksvr19@ksvrhospital.go.th', NULL, '$2y$10$Rg7FiGtHwoP.DyRZg.XmpeiWELyj.V.mwDBF95w91ZjArihSln19a', '0', 'f852f9f7e03518c66ca642c17431b963d7c95dc170fb8d2157eafe1db614', NULL, '2021-02-09 14:52:27', '2021-02-09 14:52:27'),
(38, 'ศิลปชัย', 'ksvr20@ksvrhospital.go.th', NULL, '$2y$10$jsfsJQktw2pGHwD4yf8SouoWw74I8rgbFFcgcdriy3CGFBS36uEMy', '0', 'b0a7eeb8bfa9b29122216cf0e1628f974f9faa65bbab994b70b7a79fc18c', NULL, '2021-02-09 14:58:57', '2021-02-14 10:52:19'),
(39, 'ณัฐกิตต์', 'ksvr21@ksvrhospital.go.th', NULL, '$2y$10$p4Kwtp.a9o9GFtn/ynaiQ.F/14DMjjf8ly6NQ0tyV2ujfHN39luzS', '0', '600116594867d6cf91139ab436ae83e27a7361bcf49db450f5e27b82ccc7', NULL, '2021-02-09 15:05:37', '2021-02-09 15:05:37'),
(40, 'ประดิษฐ์', 'ksvr22@ksvrhospital.go.th', NULL, '$2y$10$kyapm6egcN7F8e21sJxfpuTABIAwv7.qgRaHxvROU.ZdjXh1WY3cu', '0', '42f22d07e66077bfb05d203a3559127f8b44acd7a1b4709bddaa0b7a0a53', NULL, '2021-02-09 15:12:40', '2021-02-09 15:12:40'),
(41, 'ภูริภัทธ', 'ksvr23@ksvrhospital.go.th', NULL, '$2y$10$9OOAJFhv9leNiqz1Af3l5uZ3.ymr3L3U926NYBbmshT/kwGm1fzMS', '0', '09f77f4814de58eb394b4d84b99746662b4ce679c92917fd45d20410874c', NULL, '2021-02-09 15:20:45', '2021-02-09 15:20:45'),
(42, 'โกศล', 'ksvr24@ksvrhospital.go.th', NULL, '$2y$10$rORjqadUwiWrGP3f/SiNgOe4hv8Z4y7dH6ohwAE6aVE8yNWOVpQpK', '0', '93b5e4d0dbd58b91ba1307b29145965358b6ceeef8a40229272d5b417263', NULL, '2021-02-09 15:27:26', '2021-02-14 08:02:49'),
(43, 'วัชระ', 'ksvr25@ksvrhospital.go.th', NULL, '$2y$10$RLfeU9cJo383viRJWRM1ou1/7o/hjlJiaa0BQ7zLcF.8zAQMH1uSW', '0', 'e1112c83aaf75a1b3b6ca6f02f0247158282389013cc02a72021c9b8f995', NULL, '2021-02-09 15:33:52', '2021-02-14 10:55:44'),
(44, 'ประสิทธิ์', 'ksvr26@ksvrhospital.go.th', NULL, '$2y$10$KlKXIW0bTR.IZr0lvXHsw.C6DUf3qtc.vF6YKHYsL0XQpLRi4EGBe', '0', 'bc2be5b723a7b7e8e4d2d2a728cefd0095b289bff390e8730d3f2f905f2b', NULL, '2021-02-09 15:47:00', '2021-02-14 08:46:48'),
(45, 'นิพนธ์', 'ksvr27@ksvrhospital.go.th', NULL, '$2y$10$mm4ao03U/JRz6EcMsqqLiub5WfHp1TWThhHO/Ik/6uh7OtXfDGnMC', '0', 'f14200472415a61f0d47524719f1d94c0e5d12b2b79a0e77f48fbd45dd87', NULL, '2021-02-09 15:51:22', '2021-02-14 08:15:27'),
(46, 'สุริยา', 'ksvr28@ksvrhospital.go.th', NULL, '$2y$10$Mlp/OS.IrwcU7Kz9PIoELuWv7ut/6qyPyqWTjiyDXMUpv3vZ808eW', '0', '79b380507b610671a0042fd6faa36a56e33462783a52b5364baa984d6c59', NULL, '2021-02-09 15:56:23', '2021-02-09 15:56:23'),
(47, 'ประจักษ์', 'ksvr29@ksvrhospital.go.th', NULL, '$2y$10$eZPNJ8m3dy9Cs00nSIio4ufF7bNM6FIdI/jJ5JpfODy4150lu9AEW', '0', '3f90b07abd361d9e0237c6c9c2321136eb1a6f569cd634f2677ac0aee77d', NULL, '2021-02-09 16:00:53', '2021-02-09 16:00:53'),
(48, 'อัครเดช', 'ksvr30@ksvrhospital.go.th', NULL, '$2y$10$stepUfWziX8nYCSJzW2cCuBxNRwEIjaO6DS057Q0ayAVOSH/0WWjS', '0', 'ad6474703dab728615007844d2b4855e9ba70e08fe6325002e3ecda50629', NULL, '2021-02-09 16:05:24', '2021-02-09 16:05:24'),
(49, 'โกมล', 'ksvr31@ksvrhospital.go.th', NULL, '$2y$10$.W745qXNdqx7taWwM2D0de8QTp2kPOAB8NPzh39FYFHcxXIjjXa0y', '0', 'bd0b6721118cde2ee942aef43ad8770ca8ccb3e2f1b06b14ca2c206f06e0', NULL, '2021-02-09 16:10:34', '2021-02-14 11:09:40'),
(50, 'จำรัส', 'ksvr32@ksvrhospital.go.th', NULL, '$2y$10$GwEscIdPO4BSgjekLKmL/Oc75D.6N2hXxHKzc9cZT3PfxfSWmxjeW', '0', '5937c7585db949528bdfde59c69993b8f7ee7ff8b33f10a8db08c26d0b11', NULL, '2021-02-09 16:15:07', '2021-02-14 11:13:57'),
(51, 'วีระศักดิ์', 'ksvr33@ksvrhospital.go.th', NULL, '$2y$10$BNqi2VbLwHruuzKEGplzPODZx3i3JZ/8ZnjJm1dxX3N.Oj1gDo5Zq', '0', '31f2226f285401037cd5ebeb2ebc302704c9f54becab04871079b2ae84fa', NULL, '2021-02-09 16:19:51', '2021-02-14 10:26:59'),
(52, 'วีระชัย', 'ksvr34@ksvrhospital.go.th', NULL, '$2y$10$0Lcr0TB5iWYukxH65.2Wp.YNIUaf2u3XZ2AEigjrwvWnqyfayA90K', '0', '7fbc8727f404566fc42040ea4d420b12d9acea3e7e243b723a2b19c378b5', NULL, '2021-02-14 04:29:11', '2021-02-14 04:29:11'),
(53, 'ศิริวัฒน์', 'ksvr35@ksvrhospital.go.th', NULL, '$2y$10$RF0DIhZwXBJVBhgIOqCh.e9m5Fk52BbOdetx2uaHzAofSexqBtQ2e', '0', '3abfdde7877524dc208beb93052b14c7d25e7ddd027849fb7d3161b74658', NULL, '2021-02-14 04:39:36', '2021-02-14 04:39:36'),
(54, 'สัมพันธ์', 'ksvr36@ksvrhospital.go.th', NULL, '$2y$10$0Yoeh9hTb1BgjHzRSQ.S6.8A7w71mxZ0f1dW5IBA71r4TsDL/s3WC', '0', '2f9faf29ac63aa0493571ecec129b81a4a98d1012f86675dd8f2afb54215', NULL, '2021-02-14 04:49:03', '2021-02-14 04:49:03'),
(55, 'จักรพันธ์', 'ksvr37@ksvrhospital.go.th', NULL, '$2y$10$cv8tUXhtYhVPLtiVajfg0etuV3vbWTmiHVbAXotZQE4p3oAUq1Zxe', '0', 'e19d8629e81b9db9416dbf31d92adc78070d4c49c43f08cd9b7fc45bc137', NULL, '2021-02-14 04:58:29', '2021-02-14 04:58:29'),
(56, 'มนตรี', 'ksvr38@ksvrhospital.go.th', NULL, '$2y$10$ebZUCOVzZ4gaSI8BNbLJhObZ5E70UVWHh3AK2Fsvc0wxzFCgclsxW', '0', '6255b2748a7fb992edc5b374694cb195c3a1a9134346518edd51145447ea', NULL, '2021-02-14 05:07:58', '2021-02-14 05:07:58'),
(57, 'ภานุพร', 'ksvr39@ksvrhospital.go.th', NULL, '$2y$10$mLUUpkIPxTstky1fEEwiYesyYpSiZ3gwEoM.59icKELFSFrHaOReq', '0', '8955722ac5611cc255461295124d5a8f6da6143a2fb72aa13065f6b43638', NULL, '2021-02-14 05:19:18', '2021-02-14 05:19:18'),
(58, 'ระวีวัฒน์', 'ksvr40@ksvrhospital.go.th', NULL, '$2y$10$2f4qpYQWj4lHzZOmXKNxVejHzeAOeAaVhk6nei9730xg6jwqp5oAO', '0', '3d7e9c9c3c1e058917c4aeb49efb844c6902802f3f0c5803041bb7a075a7', NULL, '2021-02-14 05:26:04', '2021-02-14 05:26:04'),
(59, 'สุรชาติ', 'ksvr41@ksvrhospital.go.th', NULL, '$2y$10$Ox5K6rg.jMq/zw6mKzLJ/ucIufqwRggW3ukXOE39T3PnGcr9n7h96', '0', '3e090bfac6f42b8668b97a5204898aba889994e5ef475a59e51ba1a8d5cd', NULL, '2021-02-14 05:32:34', '2021-02-14 05:32:34'),
(60, 'อุทัย', 'ksvr42@ksvrhospital.go.th', NULL, '$2y$10$PamN6WT31cNZ.wQfhk2npO/SszwvVYRQlliygtcR4uWC30jt2K3U.', '0', 'bbe6a09fb23b21fa453da6b15bff40cd4b432844c9b500719949eb1877db', NULL, '2021-02-14 06:03:59', '2021-02-14 06:03:59'),
(61, 'ณรงค์', 'ksvr43@ksvrhospital.go.th', NULL, '$2y$10$IR/gWdICQX93jKIx3tAPueESSwKIYQWdOeOT7P1TZ06Fm.dhRKQ.m', '0', 'cab7721e6890bc2eab1229a4b329591caad7dd47156d79ea0b5e916830be', NULL, '2021-02-14 06:27:21', '2021-02-14 06:27:21'),
(62, 'บุญไทย', 'ksvr44@ksvrhospital.go.th', NULL, '$2y$10$VtElHYkaU6oHHz5Y.Hq9GOUj9I/Au9RjYbQidmweSsWLfwj.GUILq', '0', 'd047c96179b7e389b99dc7e5ba5a3891a6bf2f47edd4d8e27d65b0195f4d', NULL, '2021-02-14 06:36:09', '2021-02-14 06:36:09'),
(63, 'องอาจ', 'ksvr45@ksvrhospital.go.th', NULL, '$2y$10$bgL2vzdMqSqQ7AE5caMLgOtCPpIkFSeKs2H0N4lpQAQHSN1T3ZMya', '0', 'cdebc3481848344ae72b6f5cd1ee656efe2509576320bcffeec9645fc224', NULL, '2021-02-14 06:41:50', '2021-02-14 06:41:50'),
(64, 'ทศพล', 'ksvr46@ksvrhospital.go.th', NULL, '$2y$10$QnMIjLHXfU0pS9cySfKfSO2n1DX40mScmsse1WEbcmd6kBcL67OOG', '0', '350ea3ee48042ec833fc763c74a08cbb7c6eb8965d9c886d8c0e14a267f6', NULL, '2021-02-14 06:57:44', '2021-02-14 06:57:44'),
(65, 'combet', 'mr.combetohct@gmail.com', NULL, '$2y$10$nFhb6kNPdS3weAaHBroij.UazBS.PrmITX/tChR78qupGlJ7WsAny', '1', 'cb8493d3faa473eb5107ef22629c85f28c897fa09b2c8e02904c13b81445', NULL, '2021-03-18 11:25:44', '2021-03-18 11:25:44'),
(66, 'Test', 'combetohct@gmail.com', NULL, '$2y$10$suWH1MxKObaD8MFe0SdFb.2L7zRIkcJvMQwZW82vWcou/p0ZKU0vC', '0', '1fba1f7ecb4a50dcb8b78312b48179bdc14bf264c83fa56d88a58a1d8b4c', NULL, '2021-03-18 11:30:54', '2021-03-18 11:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_pt_pastillnesses`
--

CREATE TABLE `user_pt_pastillnesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `admins_id` int(10) UNSIGNED DEFAULT NULL,
  `weight` int(11) DEFAULT NULL COMMENT 'น้ำหนัก',
  `height` int(11) DEFAULT NULL COMMENT 'ส่วนสูง',
  `BMI` int(11) DEFAULT NULL COMMENT 'bmi',
  `waist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รอบเอว',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_pt_pastillnesses`
--

INSERT INTO `user_pt_pastillnesses` (`id`, `users_id`, `admins_id`, `weight`, `height`, `BMI`, `waist`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 54, 163, 32, '39', '2019-08-31 22:43:25', '2019-08-31 22:43:25'),
(7, 19, 1, 82, 165, 26, '90', '2021-02-05 03:10:01', '2021-02-05 03:10:01'),
(8, 20, 1, 80, 165, 26, '100', '2021-02-05 03:14:48', '2021-02-05 03:14:48'),
(9, 21, 1, 62, 165, 24, '80', '2021-02-05 03:20:42', '2021-02-05 03:20:42'),
(10, 22, 1, 72, 163, 26, '90', '2021-02-05 03:24:27', '2021-02-05 03:24:27'),
(11, 20, 1, 80, 165, 26, '100', '2021-02-07 13:37:50', '2021-02-07 13:37:50'),
(12, 23, 15, 70, 180, 22, '89', '2021-02-08 02:44:12', '2021-02-08 02:44:12'),
(13, 24, 15, 75, 166, 27, '90', '2021-02-08 02:56:17', '2021-02-08 02:56:17'),
(14, 25, 15, 70, 165, 26, '99', '2021-02-08 05:06:28', '2021-02-08 05:06:28'),
(15, 26, 15, 77, 160, 30, '120', '2021-02-08 06:45:06', '2021-02-08 06:45:06'),
(16, 27, 15, 70, 160, 27, '102', '2021-02-08 06:58:55', '2021-02-08 06:58:55'),
(17, 27, 15, 70, 160, 27, '102', '2021-02-08 07:00:04', '2021-02-08 07:00:04'),
(18, 28, 15, 65, 170, 22, '98', '2021-02-08 07:11:19', '2021-02-08 07:11:19'),
(19, 29, 15, 66, 171, 23, '89', '2021-02-08 07:27:29', '2021-02-08 07:27:29'),
(20, 30, 15, 67, 165, 25, '87', '2021-02-08 08:05:20', '2021-02-08 08:05:20'),
(21, 31, 15, 70, 165, 25, '90', '2021-02-08 08:15:57', '2021-02-08 08:15:57'),
(22, 19, 1, 82, 165, 26, '90', '2021-02-09 12:44:53', '2021-02-09 12:44:53'),
(23, 32, 1, 67, 167, 29, '100', '2021-02-09 12:55:07', '2021-02-09 12:55:07'),
(24, 33, 1, 78, 170, 26, '109', '2021-02-09 14:02:30', '2021-02-09 14:02:30'),
(25, 34, 1, 78, 165, 28, '102', '2021-02-09 14:11:29', '2021-02-09 14:11:29'),
(26, 35, 1, 56, 167, 25, '90', '2021-02-09 14:40:59', '2021-02-09 14:40:59'),
(27, 36, 1, 65, 165, 24, '99', '2021-02-09 14:46:17', '2021-02-09 14:46:17'),
(28, 37, 1, 78, 177, 27, '102', '2021-02-09 14:52:27', '2021-02-09 14:52:27'),
(29, 38, 1, 90, 165, 30, '120', '2021-02-09 14:58:57', '2021-02-09 14:58:57'),
(30, 39, 1, 56, 156, 25, '98', '2021-02-09 15:05:37', '2021-02-09 15:05:37'),
(31, 40, 1, 98, 176, 26, '115', '2021-02-09 15:12:40', '2021-02-09 15:12:40'),
(32, 41, 1, 80, 180, 26, '100', '2021-02-09 15:20:45', '2021-02-09 15:20:45'),
(33, 42, 1, 89, 178, 25, '102', '2021-02-09 15:27:26', '2021-02-09 15:27:26'),
(34, 43, 1, 56, 187, 25, '88', '2021-02-09 15:33:52', '2021-02-09 15:33:52'),
(35, 44, 1, 67, 167, 28, '103', '2021-02-09 15:47:00', '2021-02-09 15:47:00'),
(36, 45, 1, 67, 160, 26, '124', '2021-02-09 15:51:22', '2021-02-09 15:51:22'),
(37, 46, 1, 56, 167, 25, '112', '2021-02-09 15:56:23', '2021-02-09 15:56:23'),
(38, 47, 1, 57, 178, 24, '113', '2021-02-09 16:00:53', '2021-02-09 16:00:53'),
(39, 48, 1, 67, 170, 25, '122', '2021-02-09 16:05:24', '2021-02-09 16:05:24'),
(40, 49, 1, 66, 156, 29, '124', '2021-02-09 16:10:34', '2021-02-09 16:10:34'),
(41, 50, 1, 67, 166, 25, '109', '2021-02-09 16:15:07', '2021-02-09 16:15:07'),
(42, 51, 1, 78, 166, 26, '109', '2021-02-09 16:19:51', '2021-02-09 16:19:51'),
(43, 30, 1, 67, 165, 25, '87', '2021-02-10 03:21:15', '2021-02-10 03:21:15'),
(44, 30, 1, 67, 165, 25, '87', '2021-02-10 03:21:32', '2021-02-10 03:21:32'),
(45, 51, 1, 78, 166, 26, '109', '2021-02-10 03:21:57', '2021-02-10 03:21:57'),
(46, 20, 15, 80, 165, 26, '100', '2021-02-14 00:49:25', '2021-02-14 00:49:25'),
(47, 21, 15, 62, 165, 24, '80', '2021-02-14 00:49:54', '2021-02-14 00:49:54'),
(48, 22, 15, 72, 163, 26, '90', '2021-02-14 00:51:49', '2021-02-14 00:51:49'),
(49, 52, 15, 67, 162, 26, '85', '2021-02-14 04:29:11', '2021-02-14 04:29:11'),
(50, 53, 15, 91, 166, 33, '105', '2021-02-14 04:39:36', '2021-02-14 04:39:36'),
(51, 54, 15, 70, 168, 25, '95', '2021-02-14 04:49:03', '2021-02-14 04:49:03'),
(52, 55, 15, 78, 170, 27, '98', '2021-02-14 04:58:29', '2021-02-14 04:58:29'),
(53, 56, 15, 60, 168, 21, '80', '2021-02-14 05:07:58', '2021-02-14 05:07:58'),
(54, 57, 15, 60, 168, 21, '85', '2021-02-14 05:19:18', '2021-02-14 05:19:18'),
(55, 58, 15, 63, 162, 24, '89', '2021-02-14 05:26:04', '2021-02-14 05:26:04'),
(56, 59, 15, 87, 176, 28, '91', '2021-02-14 05:32:34', '2021-02-14 05:32:34'),
(57, 60, 15, 87, 176, 28, '99', '2021-02-14 06:03:59', '2021-02-14 06:03:59'),
(58, 61, 15, 63, 174, 21, '99', '2021-02-14 06:27:21', '2021-02-14 06:27:21'),
(59, 62, 15, 72, 174, 14, '99', '2021-02-14 06:36:09', '2021-02-14 06:36:09'),
(60, 63, 15, 82, 165, 36, '120', '2021-02-14 06:41:50', '2021-02-14 06:41:50'),
(61, 64, 15, 76, 172, 26, '89', '2021-02-14 06:57:44', '2021-02-14 06:57:44'),
(62, 31, 15, 64, 164, 24, '86', '2021-02-14 07:16:57', '2021-02-14 07:16:57'),
(63, 21, 15, 59, 162, 23, '76', '2021-02-14 07:22:52', '2021-02-14 07:22:52'),
(64, 25, 15, 68, 160, 27, '89', '2021-02-14 07:53:19', '2021-02-14 07:53:19'),
(65, 36, 15, 67, 160, 26, '97', '2021-02-14 07:58:31', '2021-02-14 07:58:31'),
(66, 42, 15, 89, 178, 25, '102', '2021-02-14 08:02:49', '2021-02-14 08:02:49'),
(67, 45, 15, 74, 162, 28, '86', '2021-02-14 08:15:27', '2021-02-14 08:15:27'),
(68, 34, 15, 92, 180, 28, '104', '2021-02-14 08:41:34', '2021-02-14 08:41:34'),
(69, 44, 15, 106, 167, 28, '103', '2021-02-14 08:46:48', '2021-02-14 08:46:48'),
(70, 44, 15, 106, 165, 38, '112', '2021-02-14 08:48:45', '2021-02-14 08:48:45'),
(71, 51, 15, 70, 166, 26, '109', '2021-02-14 10:22:45', '2021-02-14 10:22:45'),
(72, 51, 15, 70, 170, 24, '87', '2021-02-14 10:26:59', '2021-02-14 10:26:59'),
(73, 38, 15, 92, 170, 32, '91', '2021-02-14 10:52:19', '2021-02-14 10:52:19'),
(74, 43, 15, 56, 187, 25, '102', '2021-02-14 10:55:44', '2021-02-14 10:55:44'),
(75, 35, 15, 86, 165, 32, '97', '2021-02-14 10:59:49', '2021-02-14 10:59:49'),
(76, 26, 15, 65, 160, 25, '99', '2021-02-14 11:02:32', '2021-02-14 11:02:32'),
(77, 49, 15, 95, 165, 35, '116', '2021-02-14 11:09:40', '2021-02-14 11:09:40'),
(78, 50, 15, 70, 175, 23, '86', '2021-02-14 11:13:57', '2021-02-14 11:13:57'),
(79, 50, 15, 70, 175, 23, '86', '2021-02-14 11:15:02', '2021-02-14 11:15:02'),
(80, 33, 15, 95, 177, 27, '109', '2021-02-14 12:31:43', '2021-02-14 12:31:43'),
(81, 30, 15, 76, 176, 25, '87', '2021-02-14 12:42:32', '2021-02-14 12:42:32'),
(82, 32, 15, 75, 170, 26, '87', '2021-02-14 12:45:15', '2021-02-14 12:45:15'),
(83, 39, 15, 56, 156, 25, '98', '2021-02-14 12:46:46', '2021-02-14 12:46:46'),
(84, 41, 15, 80, 180, 26, '100', '2021-02-14 12:47:57', '2021-02-14 12:47:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `congenital_diseases`
--
ALTER TABLE `congenital_diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cxrs`
--
ALTER TABLE `cxrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugitems`
--
ALTER TABLE `drugitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugusages`
--
ALTER TABLE `drugusages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekgs`
--
ALTER TABLE `ekgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pts`
--
ALTER TABLE `home_pts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_pts`
--
ALTER TABLE `hospital_pts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infothers`
--
ALTER TABLE `infothers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labitems`
--
ALTER TABLE `labitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_pts`
--
ALTER TABLE `map_pts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meds`
--
ALTER TABLE `meds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `rxes`
--
ALTER TABLE `rxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- Indexes for table `user_pt_pastillnesses`
--
ALTER TABLE `user_pt_pastillnesses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `congenital_diseases`
--
ALTER TABLE `congenital_diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cxrs`
--
ALTER TABLE `cxrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `drugitems`
--
ALTER TABLE `drugitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=874;

--
-- AUTO_INCREMENT for table `drugusages`
--
ALTER TABLE `drugusages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=726;

--
-- AUTO_INCREMENT for table `ekgs`
--
ALTER TABLE `ekgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_pts`
--
ALTER TABLE `home_pts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `hospital_pts`
--
ALTER TABLE `hospital_pts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infothers`
--
ALTER TABLE `infothers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `labitems`
--
ALTER TABLE `labitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=806;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map_pts`
--
ALTER TABLE `map_pts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `meds`
--
ALTER TABLE `meds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rxes`
--
ALTER TABLE `rxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user_pt_pastillnesses`
--
ALTER TABLE `user_pt_pastillnesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

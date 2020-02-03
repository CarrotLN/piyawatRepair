-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2019 at 02:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assessment`
--

CREATE TABLE `tbl_assessment` (
  `a_id` int(11) NOT NULL,
  `ref_c_id` int(11) NOT NULL COMMENT 'tbl_case',
  `a_score` varchar(10) NOT NULL,
  `a_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_assessment`
--

INSERT INTO `tbl_assessment` (`a_id`, `ref_c_id`, `a_score`, `a_datesave`) VALUES
(1, 10, 'ดี', '2019-05-29 11:34:22'),
(2, 9, 'พอใช้', '2019-05-29 11:40:14'),
(3, 8, 'ดี', '2019-05-29 11:40:23'),
(4, 7, 'ปานกลาง', '2019-05-29 11:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_building`
--

CREATE TABLE `tbl_building` (
  `bid` int(11) NOT NULL,
  `bname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_building`
--

INSERT INTO `tbl_building` (`bid`, `bname`) VALUES
(1, 'อาคาร 1'),
(2, 'อาคาร 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `c_id` int(11) NOT NULL,
  `ref_m_id` int(11) NOT NULL COMMENT 'tbl_member',
  `ref_p_id` int(11) NOT NULL COMMENT 'tbl_position',
  `ref_d_id` int(11) NOT NULL COMMENT 'tbl_department',
  `ref_de_id` int(11) NOT NULL COMMENT 'tbl_device',
  `ref_s_id` int(11) NOT NULL DEFAULT '1' COMMENT 'tbl_status',
  `ref_bid` int(11) NOT NULL COMMENT 'รหัสตึก',
  `b_floor` varchar(10) NOT NULL COMMENT 'ชั้น',
  `b_room` varchar(10) NOT NULL COMMENT 'ห้อง',
  `c_detail` text NOT NULL,
  `c_img` varchar(100) NOT NULL,
  `c_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_case`
--

INSERT INTO `tbl_case` (`c_id`, `ref_m_id`, `ref_p_id`, `ref_d_id`, `ref_de_id`, `ref_s_id`, `ref_bid`, `b_floor`, `b_room`, `c_detail`, `c_img`, `c_datesave`) VALUES
(1, 2, 2, 2, 1, 2, 1, '4', '44', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:53:38'),
(2, 2, 2, 2, 2, 3, 2, '5', '22', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:56:52'),
(3, 2, 2, 2, 1, 3, 1, '4', '44', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:53:38'),
(4, 2, 2, 2, 2, 3, 2, '5', '22', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:56:52'),
(5, 2, 2, 2, 1, 2, 1, '4', '44', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:53:38'),
(6, 2, 2, 2, 2, 2, 2, '5', '22', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:56:52'),
(7, 2, 2, 2, 1, 4, 1, '4', '44', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:53:38'),
(8, 2, 2, 2, 2, 4, 2, '5', '22', 'แจ้งซ่อม........', '5097090020190426_204130.png', '2019-02-28 07:56:52'),
(9, 2, 2, 2, 1, 4, 1, '3', '2', 'เปิดไม่ติด', '5097090020190426_204130.png', '2019-04-26 13:41:30'),
(10, 2, 2, 2, 1, 4, 1, '11', '101', 'aaaaaaa', '27884270120190521_202409.png', '2019-05-21 13:24:09'),
(11, 2, 2, 2, 1, 2, 1, '2', '111', 'cant access', '18667332420190529_175718.jpg', '2019-05-29 10:57:18'),
(12, 2, 2, 2, 1, 1, 1, '1', '11', 'เปิดไม่ติด', '67981634820190529_190458.jpg', '2019-05-29 12:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`d_id`, `d_name`) VALUES
(1, 'บัญชี'),
(2, 'การตลาด'),
(3, 'การจัดการทั่วไป'),
(4, 'การเงิน'),
(5, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_device`
--

CREATE TABLE `tbl_device` (
  `de_id` int(11) NOT NULL,
  `de_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_device`
--

INSERT INTO `tbl_device` (`de_id`, `de_name`) VALUES
(1, 'pc'),
(2, 'notebook'),
(3, 'projector'),
(4, 'Keyboard'),
(5, 'Mouse');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_proceduves`
--

CREATE TABLE `tbl_job_proceduves` (
  `j_id` int(11) NOT NULL,
  `ref_c_id` int(11) NOT NULL COMMENT 'tbl_case',
  `ref_h_id` int(11) NOT NULL COMMENT 'หัวหน้างานที่มอบงาน',
  `ref_h_name` varchar(50) NOT NULL COMMENT 'ชื่อหัวหน้าที่ส่งงาน',
  `ref_mer_id` int(11) NOT NULL COMMENT 'รหัสช่าง',
  `ref_mer_name` varchar(40) NOT NULL COMMENT 'ขื่อช่าง',
  `j_detail` text,
  `j_date_complete` datetime DEFAULT NULL COMMENT 'วันที่ส่งงาน',
  `j_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่มอบงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_proceduves`
--

INSERT INTO `tbl_job_proceduves` (`j_id`, `ref_c_id`, `ref_h_id`, `ref_h_name`, `ref_mer_id`, `ref_mer_name`, `j_detail`, `j_date_complete`, `j_datesave`) VALUES
(1, 10, 4, 'mmm', 5, 'นายช่าง ครับ', 'ฟฟฟฟ', '2019-05-29 18:18:12', '2019-05-29 09:19:52'),
(2, 9, 4, 'บอส', 5, 'นายช่าง ครับ', 'aaaa', '2019-05-29 18:20:18', '2019-05-29 09:20:38'),
(3, 8, 4, 'บอส', 5, 'นายช่าง ครับ', 'aaaaa', '2019-05-29 18:21:41', '2019-05-29 09:31:37'),
(4, 7, 4, 'บอส', 5, 'นายช่าง ครับ', 'aaa', '2019-05-29 18:21:33', '2019-05-29 09:32:04'),
(5, 6, 4, 'บอส', 3, 'นายช่าง เทพ', NULL, NULL, '2019-05-29 09:32:51'),
(6, 1, 4, 'บอส', 3, 'นายช่าง เทพ', NULL, NULL, '2019-05-29 09:52:57'),
(7, 5, 4, 'บอส', 3, 'นายช่าง เทพ', NULL, NULL, '2019-05-29 09:53:03'),
(8, 4, 4, 'บอส', 5, 'นายช่าง ครับ', 'aaa', '2019-05-29 18:21:37', '2019-05-29 09:53:09'),
(9, 3, 4, 'บอส', 5, 'นายช่าง ครับ', 'aaa', '2019-05-29 18:21:30', '2019-05-29 09:53:14'),
(10, 2, 4, 'บอส', 5, 'นายช่าง ครับ', 'aa', '2019-05-29 18:21:10', '2019-05-29 09:53:19'),
(11, 11, 4, 'บอส', 5, 'นายช่าง ครับ', NULL, NULL, '2019-05-29 11:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `m_id` int(11) NOT NULL,
  `ref_d_id` int(11) NOT NULL COMMENT 'tbl_department',
  `ref_p_id` int(11) NOT NULL COMMENT 'tbl_position',
  `m_username` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_fname` varchar(50) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_lname` varchar(100) NOT NULL,
  `m_phone` int(20) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_level` varchar(20) NOT NULL,
  `m_img` varchar(100) NOT NULL,
  `m_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`m_id`, `ref_d_id`, `ref_p_id`, `m_username`, `m_password`, `m_fname`, `m_name`, `m_lname`, `m_phone`, `m_email`, `m_level`, `m_img`, `m_datesave`) VALUES
(1, 1, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'นาย', 'admin', 'admin', 333333, 'weee@gmail.com', 'admin', '180952619120190228_141331.png', '2019-02-17 08:41:29'),
(2, 4, 2, 'member', '6467baa3b187373e3931422e2a8ef22f3e447d77', 'นาย', 'พนง.', 'ครับ', 675465456, 'dooom@gmail.com', 'member', '105468984220190222_151507.png', '2019-02-17 08:42:59'),
(3, 2, 1, 't', '8efd86fb78a56a5145ed7739dcb00c78581c5375', 'นาย', 'ช่าง', 'เทพ', 9867675, 'wowo@gmail.com', 'technician', '213488081520190228_141814.png', '2019-02-17 08:43:58'),
(4, 2, 1, 'b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 'นาย', 'บอส', 'ครับ', 9867675, 'wowo@gmail.com', 'manager', '72620909020190228_141809.png', '2019-02-17 08:43:58'),
(5, 5, 5, 'mm', 'b8d09b4d8580aacbd9efc4540a9b88d2feb9d7e5', 'นาย', 'ช่าง', 'ครับ', 546456456, 'na@g.com', 'technician', '98545466220190228_142345.png', '2019-02-28 07:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`p_id`, `p_name`) VALUES
(1, 'ผู้จัดการ'),
(2, 'พนักงานบัญชี'),
(3, 'พนักงานการตลาด'),
(4, 'พนักงานประชาสัมพันธ์'),
(5, 'ช่างคอมพิวเตอร์');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`s_id`, `s_name`) VALUES
(1, 'รอดำเนินการ'),
(2, 'กำลังซ่อม'),
(3, 'ซ่อมเสร็จ/<br>รอประเมิน'),
(4, 'ปิดงาน'),
(5, 'ยกเลิก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assessment`
--
ALTER TABLE `tbl_assessment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_building`
--
ALTER TABLE `tbl_building`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_device`
--
ALTER TABLE `tbl_device`
  ADD PRIMARY KEY (`de_id`);

--
-- Indexes for table `tbl_job_proceduves`
--
ALTER TABLE `tbl_job_proceduves`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assessment`
--
ALTER TABLE `tbl_assessment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_building`
--
ALTER TABLE `tbl_building`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_device`
--
ALTER TABLE `tbl_device`
  MODIFY `de_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_job_proceduves`
--
ALTER TABLE `tbl_job_proceduves`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

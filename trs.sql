-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 10:44 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trs`
--

-- --------------------------------------------------------

--
-- Table structure for table `trs_end_user`
--

CREATE TABLE `trs_end_user` (
  `end_user_id` int(11) NOT NULL,
  `agency` varchar(100) NOT NULL,
  `end_user_staff_name` varchar(50) NOT NULL,
  `end_user_staff_email` varchar(50) NOT NULL,
  `end_user_staff_telno` varchar(50) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trs_end_user`
--

INSERT INTO `trs_end_user` (`end_user_id`, `agency`, `end_user_staff_name`, `end_user_staff_email`, `end_user_staff_telno`, `created_datetime`, `created_by`) VALUES
(1, 'Jabatan Perkhidmatan Awam - JPA', 'En Hanafi', 'hanafi@jpa.gov.my', '01722133112', '2018-06-30 22:18:13', 1),
(2, 'Construction Industry Development Board Malaysia (', 'Fadzil', 'fadzil@cidb.my', '2133312', '2018-07-09 21:09:29', 1),
(3, 'Majlis Bandaraya Shah Alam (MBSA)', 'Anas', 'anas@mbsa.gov.my', '012231223', '2018-07-09 21:10:15', 1),
(4, 'Akademi Seni Budaya & Warisan Kebangsaan (ASWARA)', 'Encik Asrul Izham Jaafar  ', 'asrul@aswara.edu.my', '03-26971239', '2018-07-09 21:16:26', 1),
(5, 'Kementerian Kerja Raya Malaysia (KKR)', 'Puan Rohana Mohd Ali', 'rohana@kkr.gov.my', '03-2771 4500', '2018-07-09 21:16:54', 1),
(6, 'Kementerian Pertanian & Industri Asas Tani (MOA)', 'Puan Norazlinda Che Zaudin', 'norazlinda@moa.gov.my', '03-8870 1858', '2018-07-09 21:17:25', 1),
(7, 'Majlis Bandaraya Melaka Bersejarah (MBMB)', 'Encik Hafeezur Rahman ', 'hafeezur@mbmb.gov.my', '06-3333333', '2018-07-09 21:17:52', 1),
(8, 'Kolej Teknologi Makmal Perubatan (KTMP)', 'Haji Mustaffa', 'mustaffa.mn@moh.gov.my', '03-2616 2564', '2018-07-09 21:18:26', 1),
(9, 'Institut Tadbiran Awam Negara (INTAN)', 'Encik Zamani bin Mustaffa ', 'mzamani@intanbk.intan.my', '03-20847732', '2018-07-09 21:24:05', 1),
(10, 'International Islamic University Malaysia (IIUM)', 'Encik Sayed Ahmad Fauzi bin Sayed Osman', 'ahmadfauzi@iium.edu.my', '09-5704103', '2018-07-09 21:24:38', 1),
(11, 'Jabatan Perancangan Bandar Dan Desa (JPBD)', 'Syazwan Firdaus bin Ramlee', 'syazwan@townplan.gov.my', '03-2265 0703', '2018-07-09 21:25:26', 1),
(12, 'Lembaga Perindustrian Kayu Malaysia', 'Maslida Mah Hassan   ', 'maslida@mtib.gov.my', '03-92822235', '2018-07-09 21:39:37', 1),
(13, 'KKM Farmasi', 'Puan Suhaida Yusuf ', 'suhaila.yusof@moh.gov.my', '954646', '2018-07-09 21:40:20', 1),
(14, 'Institut Perubatan dan Penyelidikan (IMR)', 'Puan Wan Marina Wan Mohamad', 'marina@imr.gov.my', '03-2616 2773', '2018-07-09 21:41:23', 1),
(15, 'UTeM', 'Dr Zul', 'zul@utem.edu.my', '01221132', '2018-07-11 10:12:57', 4),
(16, 'F-Secure', 'fadzil', 'fadzil@fsecure.com', '0123312421', '2018-07-12 12:04:53', 4);

-- --------------------------------------------------------

--
-- Table structure for table `trs_record_category`
--

CREATE TABLE `trs_record_category` (
  `record_category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_datetime` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trs_record_category`
--

INSERT INTO `trs_record_category` (`record_category_id`, `name`, `description`, `created_datetime`, `created_by`) VALUES
(1, 'Membekal', 'This is default category', '2018-06-28 06:19:50', 1),
(2, 'Menyelenggara', 'This is default category', '2018-06-28 06:21:14', 1),
(4, 'Mengkonfigurasi', 'This is default category', '2018-06-30 11:07:55', 1),
(5, 'Menginstallasi', 'This is default category', '2018-06-30 11:09:08', 1),
(6, 'Pembaharuan', 'This is default category', '2018-06-30 11:10:10', 1),
(7, 'Menghantar', 'This is default category', '2018-07-09 21:36:05', 1),
(8, 'Mentauliah', 'This is default category', '2018-07-09 21:36:29', 1),
(9, 'Menguji', 'This is default category', '2018-07-09 21:37:15', 1),
(10, 'Email', 'Email Zimbra category', '2018-07-09 21:37:43', 1),
(11, 'SPA', 'Security Posture Assessment project category', '2018-07-09 21:38:07', 1),
(12, 'Wireless', 'Project that involve wireless', '2018-07-11 10:11:14', 4),
(13, 'Testt category', 'This is default category', '2018-07-12 11:58:05', 4);

-- --------------------------------------------------------

--
-- Table structure for table `trs_track_record`
--

CREATE TABLE `trs_track_record` (
  `track_record_id` int(11) NOT NULL,
  `project_title` varchar(250) NOT NULL,
  `year` varchar(5) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `lo_po_sst_no` varchar(10) NOT NULL,
  `start_period` date NOT NULL,
  `end_period` date NOT NULL,
  `time_period` varchar(10) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `record_category_id` varchar(50) NOT NULL,
  `end_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trs_track_record`
--

INSERT INTO `trs_track_record` (`track_record_id`, `project_title`, `year`, `amount`, `status`, `lo_po_sst_no`, `start_period`, `end_period`, `time_period`, `created_datetime`, `created_by`, `record_category_id`, `end_user`) VALUES
(1, 'security Posture Assessment', '2013', 99999, 'Complete', 'xxxxx', '2018-07-01', '2019-02-20', '6', '2018-07-01 10:14:04', 1, '11-|-', 1),
(3, 'Cadangan Kerja-Kerja Membekal, Menghantar, Memasang, Mengkonfigurasi Dan Mengujiterima Perkakasan Da', '2016', 414275, 'On Going', 'MBSA/PTD/C', '2018-05-01', '2018-07-10', '1', '2018-07-09 21:27:17', 1, '1-|-2-|-4-|-5-|-', 3),
(4, 'Contract Maintenance Services for ICT Equipment at IIUM Kuantan', '2018', 284991, 'Complete', 'Contract B', '2017-08-01', '2018-08-31', '11', '2018-07-09 21:29:06', 1, '2-|-', 10),
(5, 'Perkhidmatan Kerja-Kerja Penyelenggaraan dan Sokongan Teknikal Bagi Load Balancer', '2017', 39029, 'Complete', '4500002927', '2017-11-01', '2018-11-30', '11', '2018-07-09 21:30:52', 1, '2-|-', 2),
(6, 'Cadangan Kerja-Kerja Membekal, Menghantar dan Memasang Perkakasan Rangkaian & Konfigurasi Switch unt', '2015', 23235, 'Complete', 'L201711080', '2017-11-01', '2018-12-31', '12', '2018-07-09 21:32:37', 1, '1-|-5-|-6-|-', 3),
(7, 'Membekal, Menghantar, Memasang, Menguji dan Mentauliah Bagi Projek Pusat Data', '2014', 493421, 'Complete', 'INTAN: S.5', '2017-06-01', '2017-09-30', '2', '2018-07-09 21:34:26', 1, '1-|-2-|-4-|-5-|-', 9),
(8, 'Membekal, Menghantar, Memasang, Menguji Dan Mentauliah 20 Unit Wireless Di Majlis Bandaraya Melaka B', '2017', 34586, 'On Going', 'MBMB/KOM/0', '2018-03-01', '2018-07-31', '3', '2018-07-09 21:35:40', 1, '1-|-4-|-5-|-', 7),
(9, 'tessad', '', 12312, 'On Going', 'w123s', '2018-07-01', '2019-07-24', '11', '2018-07-11 03:20:20', 4, '1-|-2-|-4-|-5-|-6-|-7-|-8-|-9-|-', 4),
(10, 'Membekal, Memasang, Mengkonfigurasi, Menyelengara dan Mentauliah Pembaharuan Lesen Perisian Email Zimbra Di Institusi Penyelidikan Perubatan, Kuala Lumpur', '2014', 37500, 'Complete', '-', '2014-01-01', '2014-07-31', '5', '2018-07-11 08:27:37', 4, '1-|-2-|-4-|-10-|-', 14),
(11, 'Membuat Kerja-Kerja Peralatan Rangkaian Dan Keselamatan ICT Di Bahagian Perkhidmatan Farmasi, Kementerian Kesihatan Malaysia', '', 222380, 'Complete', '-', '2014-01-01', '2014-08-30', '6', '2018-07-11 08:28:58', 4, '1-|-2-|-', 13),
(12, 'Perkhidmatan Menyelenggara Sistem Penyejukan Server Di Bilik Server Aswara', '', 39543, 'Complete', '-', '2014-01-01', '2014-10-31', '8', '2018-07-11 08:32:26', 4, '2-|-', 4),
(13, 'Perkhidmatan Membekal, Menyelenggara Dan Memperbaharui Perkakasan Wifi (Ruckus) Di Aswara', '2014', 41970, '', '-', '2014-07-01', '2018-10-31', '50', '2018-07-11 08:33:35', 4, '1-|-2-|-4-|-', 4),
(14, 'Perkhidmatan Memperbaharui Lesen Perisian Keselamatan Firewall CISCO IPS Di Aswara', '2014', 47540, 'Complete', '-', '2014-07-01', '2015-01-31', '5', '2018-07-11 08:34:51', 4, '1-|-', 4),
(15, 'Membekal, Memasang, Menguji, Mentauliah Dan Khidmat Sokongan Bagi Peralatan ICT Untuk Perlaksanaan Sistem Legal Case eProcess Solution (LCeS) ', '2014', 80956, 'Complete', '-', '2014-07-01', '2014-10-22', '2', '2018-07-11 08:36:28', 4, '1-|-8-|-9-|-', 5),
(16, 'Cyberoam License Renewal Subcription. New Subcription Date: 0805/2014 - 07/05/2015', '', 18500, 'Complete', '-', '2014-05-08', '2015-05-07', '11', '2018-07-11 08:37:55', 4, '1-|-', 14),
(17, 'Perkhidmatan Pembaharuan Lesen Interscan Messaging Security Di KKR - Satu Tahun Pembaharuan Langganan, Satu Tahun Update Tanpa Had, Certificate No: TM-LA000001881, 501 Unit Lesen', '2014', 18900, 'Complete', '-', '2014-07-01', '2014-07-31', '0', '2018-07-11 08:39:18', 4, '1-|-', 5),
(18, 'Perkhidmatan Instalasi Dan Konfigurasi Infrastruktur Persekitaran Maya (Virtualization ) Di Pusat Data MOA', '', 48790, 'Complete', '-', '2014-07-01', '2014-09-30', '1', '2018-07-11 08:40:28', 4, '4-|-5-|-', 6),
(19, 'Penambahan Module Backbone Switch Di Pusat Data MOA', '2014', 48656, 'Complete', '-', '2014-10-15', '2014-07-16', '0', '2018-07-11 08:42:10', 4, '1-|-', 6),
(20, 'Penyelenggaraan Storage Area Network (SAN) Dan Server Di Pusat Data Plan Malaysia (Jabatan Perancangan Bandar Dan Desa)', '', 84905, 'On Going', 'JPBD (IP) ', '2017-07-01', '2019-07-31', '23', '2018-07-11 08:44:31', 4, '2-|-', 11),
(21, 'Contract Maintenance Services for ICT Equipment at IIUM Kuantan', '2018', 284991, '', 'Contract B', '2017-08-01', '2018-08-31', '11', '2018-07-11 08:45:57', 4, '2-|-', 10),
(22, 'Perkhidmatan pembaharuan lesen dan Sokongan Instalasi Antivirus & Antimalware Sophos Ibu Pejabat dan cawangan Untuk CIDB Malaysia', '2018', 178080, 'On Going', '4500004011', '2018-01-23', '2021-01-22', '35', '2018-07-11 08:47:51', 4, '1-|-', 2),
(23, 'Kerja-kerja penyelengaraan Dan Sokongan (Preventive And Remedial / Corrective) Bagi Rangkaian Di Majlis Bandaraya Melaka Bersejarah (1 Tahun)', '2018', 73365, 'On Going', 'MBMBJKP.10', '2018-05-01', '2019-05-31', '11', '2018-07-11 08:49:24', 4, '2-|-4-|-', 7),
(24, 'Perkhidmatan Penyelenggaraan Perisian Lesen Emel Zimbra Selama Satu (1) Tahun Di LPKM (MTIB)', '2018', 31689, 'On Going', 'LOOPK0518/', '2018-03-30', '2019-05-29', '13', '2018-07-11 08:51:03', 4, '2-|-10-|-', 12),
(25, 'asfasf', '2018', 21, 'Complete', '12dw1', '2018-07-04', '2018-10-31', '2', '2018-07-13 16:39:07', 4, '1-|-2-|-4-|-5-|-6-|-7-|-8-|-9-|-10-|-', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'google', '103308415067345221212', 'Budie', 'Dev', 'budie.dev@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/-tb5SNgrCcHI/AAAAAAAAAAI/AAAAAAAAAAA/AAnnY7rmOMUJ7iIj-607uXj0S7doJYxHSA/mo/photo.jpg', 'https://plus.google.com/103308415067345221212', '2018-06-21 05:09:04', '2018-07-11 04:09:13'),
(4, 'google', '101085987747141934463', 'Muhammad Budie', 'Basri', 'budie@tuahpacket.net', '', 'en', 'https://lh6.googleusercontent.com/-M4tmx-hHBcM/AAAAAAAAAAI/AAAAAAAAALI/ayw-CvRKI3Y/photo.jpg', '', '2018-07-10 21:01:52', '2018-07-13 10:38:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

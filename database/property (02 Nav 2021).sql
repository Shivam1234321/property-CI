-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 07:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogin`
--

CREATE TABLE `tbl_adminlogin` (
  `admin_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_adminlogin`
--

INSERT INTO `tbl_adminlogin` (`admin_id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `tags` text NOT NULL,
  `status` int(2) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `type`, `title`, `slug`, `author`, `subject`, `description`, `image`, `image_url`, `tags`, `status`, `date`, `time`, `updated_date`) VALUES
(3, 'Property Blog', 'Test hai to kya hua', 'Test-hai-to-kya-hua', 'Test', 'Test', '<p>jhasgdhgas</p>', 'e1e35ffd2e6fa5d6b0d5bf9f53a6182b.png', 'uploads/blog/', '', 1, '2021-10-24', '11:57:40 pm', '2021-10-26 22:50:38'),
(4, 'Property Blog', 'hgfhgf hi tum kaise ho', 'hgfhgf-hi-tum-kaise-ho', 'hgfhjfd', 'jhfiygyhg', '<p>kjagfjhgda</p>', 'd971ac20d63f5e81d223cd79a4ce8fbe.jpg', 'uploads/blog/', '', 1, '2021-10-24', '11:58:29 pm', '2021-10-26 22:49:22'),
(5, 'Moving Story', 'Hii-kaise  ho', 'Hii-kaise--ho', 'helli', 'Helo', '<p>Hello</p>', 'b8e1a9bd89c012bb6ce1effd679c2075.png', 'uploads/blog/', 'hello,hii,kaise ho,heeo', 1, '2021-11-01', '12:08:51 am', '2021-11-01 00:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_comment`
--

CREATE TABLE `tbl_blog_comment` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `status` int(2) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog_comment`
--

INSERT INTO `tbl_blog_comment` (`id`, `blog_id`, `name`, `email`, `comment`, `status`, `date`, `time`) VALUES
(1, 4, 'Shivam Kumar Sahu', 'shivamsahujnp123@gmail.com', 'jg uyty hgfhg yfhg hgfhg hg', 1, '2021-10-27', '10:41:52 pm'),
(2, 4, 'Shivam Kumar Sahu', 'shivamsahujnp123@gmail.com', 'jhgfh jhsagshj', 1, '2021-10-27', '10:48:43 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` int(2) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `otp_status` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`uid`, `name`, `mobile`, `email`, `address`, `password`, `otp`, `otp_status`, `status`, `date`, `time`) VALUES
(1, 'Shivam Sahu', '6392819703', 'shivamsahujnp123@gmail.com', 'Lucknow Nirala Nagar', '12345678', '457366', 1, 1, '2021-10-28', '12:13:38 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_blog_comment`
--
ALTER TABLE `tbl_blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_blog_comment`
--
ALTER TABLE `tbl_blog_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

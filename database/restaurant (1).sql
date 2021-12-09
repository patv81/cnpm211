-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 02:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `prices` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `money_payed` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `names` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pictures` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` date DEFAULT current_timestamp(),
  `created_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` date NOT NULL DEFAULT current_timestamp(),
  `modified_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `products`, `prices`, `money_payed`, `quantities`, `names`, `pictures`, `status`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(2, NULL, '[\"12\",\"13\"]', '[\"75000\",\"70000\"]', NULL, '[\"3\",\"2\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(17, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(18, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(19, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(20, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(21, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(22, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(23, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(24, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(25, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(26, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(27, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"35000\",\"135000\"]', '500000', '[\"1\",\"1\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(28, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(29, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(30, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(31, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(32, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(33, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(34, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(35, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(36, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(37, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(38, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(39, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(40, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(41, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(42, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(43, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(44, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(45, NULL, '[\"12\",\"13\",\"14\"]', '[\"25000\",\"70000\",\"135000\"]', '500000', '[\"1\",\"2\",\"3\"]', '[\"2 MIẾNG GÀ GIÒN\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(46, NULL, '[\"35\",\"13\"]', '[\"40000\",\"140000\"]', '500000', '[\"1\",\"4\"]', '[\"Trà sứa chân châu size X\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\"]', NULL, 0, '2021-12-08', '1', '2021-12-08', NULL),
(47, NULL, '[\"12\"]', '[\"25000\"]', '500000', '[\"1\"]', '[\"2 MIẾNG GÀ GIÒN\"]', NULL, 0, '2021-12-09', '1', '2021-12-09', NULL),
(48, NULL, '[\"14\",\"16\"]', '[\"90000\",\"36000\"]', '200000', '[\"2\",\"1\"]', '[\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\",\"CƠM GÀ GIÒN + SÚP BÍ ĐỎ + NƯỚC NGỌT\"]', NULL, 0, '2021-12-09', '1', '2021-12-09', NULL),
(49, NULL, '[\"14\",\"45\"]', '[\"135000\",\"50001\"]', '500000', '[\"3\",\"1\"]', '[\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\",\"Trà ô long\"]', NULL, 0, '2021-12-09', '1', '2021-12-09', NULL),
(50, NULL, '[\"13\",\"14\"]', '[\"70000\",\"45000\"]', '200000', '[\"2\",\"1\"]', '[\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\"]', NULL, 0, '2021-12-09', '1', '2021-12-09', NULL),
(51, NULL, '[\"14\",\"13\",\"48\"]', '[\"135000\",\"35000\",\"20001\"]', '200000', '[\"3\",\"1\",\"1\"]', '[\"2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT\",\"CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)\",\"Kẹo kéo 123\"]', NULL, 0, '2021-12-09', '1', '2021-12-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(1, 'Văn Học - Tiểu Thuyết', 'hft8q1c3.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 10),
(2, 'Kinh Tế', NULL, '2013-12-09', 'admin', '2013-12-09', 'admin', 0, 4),
(3, 'Tin học', 'zahorwby.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 10),
(4, ' Kỹ Năng Sống', 'bntdur5l.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 1),
(5, 'Thiếu Nhi', 'kt5h9ica.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 10),
(6, ' Thường Thức - Đời Sống', 'tv8basyz.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 2),
(7, 'Ngoại Ngữ - Từ Điển', 'zruvqadp.jpg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 5),
(8, 'Truyện Tranh', '5hd9kq6s.jpeg', '2013-12-09', 'admin', '2013-12-09', 'admin', 1, 10),
(9, ' Văn Hoá - Nghệ Thuật - Du Lịch', 'btkjrfal.jpg', '2013-12-06', 'admin', '2013-12-09', 'admin', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `group_acp` tinyint(1) DEFAULT 0,
  `created` date DEFAULT '0000-00-00',
  `created_by` int(11) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `group_acp`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(6, 'Admin', 0, '2013-11-11', NULL, '2013-11-12', 10, 1, 15),
(8, 'Manager', 0, '2013-11-07', NULL, '2013-11-12', 10, 0, 1),
(52, 'Founder', 1, '2013-11-12', 1, '2013-11-12', 10, 1, 99),
(62, 'Member', 0, '2013-11-12', 1, '2013-11-12', 10, 1, 1),
(64, 'Test', 1, '2013-11-12', 1, '2013-11-12', 10, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `special` tinyint(1) DEFAULT 0,
  `sale_off` int(3) DEFAULT 0,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `special`, `sale_off`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_id`) VALUES
(12, '2 MIẾNG GÀ GIÒN', 'description', '25000', 0, 20, 'mj5oqp18.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 4),
(13, 'CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)', '', '35000', 0, 3, '7kyub3oi.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 1, 3),
(14, '2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT', '', '45000', 0, 0, 'm3brd79l.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 2, 2),
(48, 'Kẹo kéo 123', NULL, '20001', 0, 0, NULL, '2021-12-09', '1', '2021-12-09', '10', 0, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` int(11) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `group_id`) VALUES
(1, 'nvan1', 'nvan@gmail.com', 'Nguyễn Văn An', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 1, '2021-12-09', 10, 1, 4, 1),
(2, 'nvb', 'nvb@gmail.com', 'Nguyễn Văn B', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 1, '0000-00-00', NULL, 0, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

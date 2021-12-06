
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,0) NOT NULL,
  `special` tinyint(1) DEFAULT '0',
  `sale_off` int(3) DEFAULT '0',
  `picture` text,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `ordering` int(11) DEFAULT '10',
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `special`, `sale_off`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_id`) VALUES
(12, '2 MIẾNG GÀ GIÒN', 'description', 25000, 0, 20, '', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 4),
(13, 'CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)', '', 35000, 0, 3, '', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 1, 3),
(14, '2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT', '', 45000, 0, 0, '', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 2, 2),
(16, 'CƠM GÀ GIÒN + SÚP BÍ ĐỎ + NƯỚC NGỌT', '', 36000, 1, 2, '', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 3, 3),
(17, 'C4 - CƠM GÀ GIÒN + NƯỚC NGỌT', '', 36000, 0, 12, '', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 2);


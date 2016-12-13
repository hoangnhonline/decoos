-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2016 at 11:06 AM
-- Server version: 5.6.30-1+deb.sury.org~wily+2
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decoos`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `cate_id` tinyint(4) NOT NULL,
  `is_hot` tinyint(1) NOT NULL,
  `content` text,
  `display_order` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articles_cate`
--

CREATE TABLE `articles_cate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `custom_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `ads_url` varchar(255) NOT NULL,
  `time_start` int(11) NOT NULL,
  `time_end` int(11) NOT NULL,
  `object_id` bigint(20) NOT NULL,
  `object_type` tinyint(1) NOT NULL COMMENT '1 : danh muc cha , 2 : danh mục con',
  `type` int(11) NOT NULL COMMENT '1 : không liên kết, 2 : trỏ đến 1 trang, 3',
  `display_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `id` int(11) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `alias_vi` varchar(255) NOT NULL,
  `alias_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) NOT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `description_vi` varchar(500) DEFAULT NULL,
  `description_en` text,
  `is_menu` tinyint(1) NOT NULL DEFAULT '1',
  `loai_id` tinyint(4) NOT NULL,
  `meta_id` bigint(20) DEFAULT NULL,
  `display_order` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info_seo`
--

CREATE TABLE `info_seo` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `custom_text` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id` int(11) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `alias_vi` varchar(255) NOT NULL,
  `alias_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) NOT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `display_order` tinyint(4) NOT NULL,
  `is_menu` tinyint(1) NOT NULL DEFAULT '1',
  `meta_id` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` bigint(20) NOT NULL,
  `title_vi` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_vi` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) NOT NULL,
  `keywords_vi` varchar(255) DEFAULT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `custom_text_vi` text,
  `custom_text_en` text NOT NULL,
  `created_user` int(11) NOT NULL,
  `updated_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `updated_user` tinyint(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(111) NOT NULL,
  `title_vi` varchar(255) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) NOT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `alias_vi` varchar(255) NOT NULL,
  `alias_en` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `description_vi` varchar(500) DEFAULT NULL,
  `description_en` varchar(500) DEFAULT NULL,
  `content_vi` text,
  `content_en` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code` char(20) DEFAULT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `alias_vi` varchar(255) NOT NULL,
  `alias_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) NOT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `content_vi` text,
  `content_en` text,
  `thumbnail_id` bigint(20) DEFAULT NULL,
  `loai_id` tinyint(4) NOT NULL,
  `cate_id` tinyint(4) NOT NULL,
  `is_hot` tinyint(1) NOT NULL,
  `is_sale` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `display_order` tinyint(4) NOT NULL COMMENT 'danh cho sp hot',
  `sale_percent` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `meta_id` bigint(20) DEFAULT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `display_order` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'base_url', 'http://nghien.biz', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(2, 'site_title', 'iCho.vn - Mua online giá sỉ', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(3, 'site_description', 'iCho.vn chuyên cung cấp các mặt hàng máy tính, điện thoại, linh kiện và phụ kiện các loại với giá sỉ - Hotline 1900 636 975', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(4, 'site_keywords', 'iCho, mua online, giá sỉ, mua online giá sỉ', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(5, 'admin_email', 'nghien.biz@gmail.com', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(22, 'mail_server', 'mail.example.com', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(23, 'mail_login_name', 'login@example.com', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(24, 'mail_password', 'password', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(105, 'site_name', 'Trang chủ - iCho.vn', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(113, 'google_analystic', 'UA-63665479-6', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(114, 'facebook_appid', '282210028789883', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(115, 'google_fanpage', '', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(116, 'facebook_fanpage', 'https://www.facebook.com/www.icho.vn', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(117, 'twitter_fanpage', '', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(130, 'logo', '2016/11/09/logo-icho-1478665715.png', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(131, 'favicon', '2016/11/29/favicon-1480367931.png', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(141, 'banner', '2016/12/06/icho-vn-mua-online-gia-si-1480992823.jpg', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(142, 'custom_text', '', '2016-07-27 14:37:52', '2016-12-06 10:00:39'),
(143, 'email_cc', 'tundq.ipl@gmail.com; tundq@icare.center; hiepvv.ipl@gmail.com; lamhuong77@gmail.com; muahang@icho.vn; hoangnhonline@gmail.com', '2016-11-11 00:00:00', '2016-12-06 10:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` bigint(20) NOT NULL,
  `meta_id` bigint(20) DEFAULT NULL,
  `slug` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` varchar(32) DEFAULT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tag_objects`
--

CREATE TABLE `tag_objects` (
  `object_id` int(20) NOT NULL,
  `tag_id` int(20) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1 : film, 1 : tin tuc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed_password` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) NOT NULL,
  `created_user` int(11) NOT NULL,
  `updated_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`, `status`, `changed_password`, `remember_token`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@decoos.com', '$2y$10$F1qIt2Qu/w19IvQ7GwaLv.h0u0LqDhkmF3Y5hCS3XJa4AxZrhupSG', 3, 1, 0, '0uUNcP7CZaga0pdPXHPQC2fGE0F5mvBesDpXQ9nq2UXXLmbYidrBSCNMwCFt', 1, 1, '2016-08-27 05:26:18', '2016-10-15 03:09:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles_cate`
--
ALTER TABLE `articles_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name_vi`),
  ADD KEY `slug` (`slug_vi`),
  ADD KEY `display_order` (`display_order`,`slug_en`,`status`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `full_name` (`full_name`),
  ADD KEY `email` (`email`),
  ADD KEY `phone` (`phone`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `info_seo`
--
ALTER TABLE `info_seo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url` (`url`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name_vi`,`slug_vi`),
  ADD KEY `slug` (`slug_vi`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_name` (`name`) USING BTREE;

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_objects`
--
ALTER TABLE `tag_objects`
  ADD PRIMARY KEY (`object_id`,`tag_id`,`type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articles_cate`
--
ALTER TABLE `articles_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info_seo`
--
ALTER TABLE `info_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

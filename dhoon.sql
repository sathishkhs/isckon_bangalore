-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 03:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menuitems`
--

CREATE TABLE `admin_menuitems` (
  `menuitem_id` int(10) NOT NULL,
  `menu_id` int(11) NOT NULL DEFAULT 1,
  `parent_menuitem_id` int(11) DEFAULT 0,
  `menuitem_target` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuitem_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menuitem_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menuitem_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_menu_sub_heading_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL,
  `last_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_menuitems`
--

INSERT INTO `admin_menuitems` (`menuitem_id`, `menu_id`, `parent_menuitem_id`, `menuitem_target`, `menuitem_link`, `menuitem_text`, `menuitem_icon`, `parent_menu_sub_heading_text`, `display_order`, `status_ind`, `created_date`, `last_modified_date`, `created_by`, `modified_by`) VALUES
(1, 1, NULL, 'NULL', '#', 'Admin', 'lni lni-users', 'Control Admin Users', 1, 1, '2013-12-16 00:00:00', '2022-04-21 14:57:23', 1, 1),
(2, 1, 1, 'NULL', 'adminusers', 'Admin Users List', '', '', 0, 1, '2013-12-16 00:00:00', '2022-04-21 14:57:53', 1, 1),
(3, 1, 1, 'NULL', 'adminusers/add', 'Add New Admin User', '', '', 1, 0, '2013-12-16 00:00:00', '2022-04-21 14:57:57', 1, 1),
(4, 1, NULL, 'NULL', '#', 'Email templates', 'lni lni-envelope', 'Manage Email Templates', 2, 1, '2013-12-16 00:00:00', '2021-09-05 15:28:23', 1, 1),
(5, 1, 4, 'NULL', 'emailtemplates/add', 'Add New Email Template', '', '', 0, 1, '2013-12-16 00:00:00', '2021-02-15 12:42:37', 1, 1),
(6, 1, 4, 'NULL', 'emailtemplates', 'Email Templates List', '', '', 1, 1, '2013-12-16 00:00:00', '2018-05-19 05:22:10', 1, 1),
(7, 1, NULL, NULL, '#', 'FAQ', 'lni lni-question-circle', 'Manage FAQ\'s', 7, 0, '0000-00-00 00:00:00', '2022-04-21 15:03:25', 1, 1),
(8, 1, 7, 'faq', 'faq', 'FAQ List', '', '', 1, 0, '0000-00-00 00:00:00', '2022-04-21 15:03:28', 1, 1),
(9, 1, 7, 'faq_add', 'faq/add', 'Add FAQ', '', '', 1, 0, '2016-12-14 16:49:59', '2022-04-21 15:03:31', 1, 1),
(10, 1, 7, 'faq_category', 'faq_category', 'category', '', '', 1, 0, '2016-12-14 16:49:59', '2022-04-21 15:03:38', 1, 1),
(11, 1, 7, 'faq_category_add', 'faq_category/add', 'add faq category', '', '', 1, 0, '2016-12-14 16:49:59', '2022-04-21 15:03:35', 1, 1),
(18, 1, NULL, 'NULL', '#', 'Home Page', 'lni lni-home', 'Control Panel', 3, 1, '2013-12-16 00:00:00', '2022-05-25 18:54:22', 1, 1),
(19, 1, 18, 'NULL', 'master/countries', 'Country List', '', '', 1, 0, '2013-12-16 00:00:00', '2022-04-21 15:02:32', 1, 1),
(20, 1, 18, 'NULL', 'master/states', 'States List', '', '', 1, 0, '2013-12-16 00:00:00', '2022-04-21 15:02:36', 1, 1),
(21, 1, 18, 'NULL', 'master/cities', 'Cities List', '', '', 1, 0, '2013-12-16 00:00:00', '2022-04-21 15:02:40', 1, 1),
(22, 1, 18, 'NULL', 'master/banners', 'Banner', '', '', 1, 1, '2013-12-16 00:00:00', '2020-09-04 02:32:29', 1, 1),
(23, 1, 18, 'NULL', 'master/menuitems', 'Header Menu', '', '', 1, 1, '2013-12-16 00:00:00', '2020-09-02 04:37:33', 1, 1),
(25, 1, 18, 'NULL', 'master/settings', 'Settings', '', '', 1, 1, '2013-12-16 00:00:00', '2020-08-13 04:57:16', 1, 1),
(39, 1, 18, 'NULL', 'master/form', 'Forms', '', '', 1, 0, '2013-12-16 00:00:00', '2022-04-21 15:02:58', 1, 1),
(53, 1, NULL, 'NULL', '#', 'Blog Posts', 'lni lni-blogger', 'News Section', 5, 1, '2013-12-16 00:00:00', '2022-04-21 15:29:46', 1, 1),
(54, 1, 53, 'NULL', 'blog/index', 'Posts List', '', '', 1, 1, '2013-12-16 00:00:00', '2021-01-03 09:23:21', 1, 1),
(56, 1, 53, 'NULL', 'blog/category_view', 'Blog Categories', '', '', 1, 1, '2013-12-16 00:00:00', '2021-01-03 09:23:46', 1, 1),
(58, 1, NULL, 'NULL', '#', 'Admin Roles', 'lni lni-crown', 'Control Roles', 0, 0, '2013-12-16 00:00:00', '2022-04-21 15:06:15', 1, 1),
(59, 1, 1, 'NULL', 'adminroles', 'Admin Roles', '', '', 0, 1, '2013-12-16 00:00:00', '2022-04-21 14:58:42', 1, 1),
(60, 1, 1, 'NULL', 'adminroles/add', 'Add Admin Roles', '', '', 0, 0, '2013-12-16 00:00:00', '2022-04-21 14:58:51', 1, 1),
(73, 1, NULL, 'NULL', '#', 'Media', 'fa fa-file', '', 6, 1, '2013-12-16 00:00:00', '2022-01-16 17:43:38', 1, 1),
(74, 1, 73, 'NULL', 'gallery', 'Gallery List', '', '', 1, 1, '2013-12-16 00:00:00', '2022-01-15 18:29:52', 1, 1),
(77, 1, 73, 'NULL', 'gallery/video_gallery', 'Video Gallery List', '', '', 1, 1, '2013-12-16 00:00:00', '2022-01-16 19:05:47', 1, 1),
(78, 1, NULL, 'NULL', '#', 'Pages', 'fa fa-file', '', 4, 1, '2013-12-16 00:00:00', '2022-05-25 18:51:39', 1, 1),
(79, 1, 78, 'NULL', 'master/pages', 'Pages List', '', '', 1, 1, '2013-12-16 00:00:00', '2022-04-21 15:33:10', 1, 1),
(80, 1, NULL, 'NULL', '#', 'Donations', 'lni lni-dollar', '', 6, 1, '2013-12-16 00:00:00', '2022-05-25 18:58:06', 1, 1),
(83, 1, 80, 'NULL', 'donations', 'Donations List', '', '', 1, 1, '2013-12-16 00:00:00', '2022-07-04 19:39:43', 1, 1),
(86, 1, 53, 'NULL', 'blog/authors', 'Blog Authors', '', '', 1, 1, '2013-12-16 00:00:00', '2021-01-03 09:23:46', 1, 1),
(88, 1, NULL, 'NULL', '#', 'Campaigns', 'lni lni-revenue', '', 6, 1, '2013-12-16 00:00:00', '2022-05-25 23:00:11', 1, 1),
(89, 1, 88, 'NULL', 'campaigns', 'Campaigns List', '', '', 1, 1, '2013-12-16 00:00:00', '2022-04-25 23:56:26', 1, 1),
(90, 1, NULL, 'NULL', '#', 'Chapters', 'lni lni-revenue', '', 6, 1, '2013-12-16 00:00:00', '2022-05-25 23:00:11', 1, 1),
(91, 1, 90, 'NULL', 'chapters', 'Chapters List', '', '', 1, 1, '2013-12-16 00:00:00', '2023-01-19 16:54:22', 1, 1),
(92, 1, NULL, 'NULL', '#', 'Programs', 'lni lni-revenue', '', 6, 1, '2013-12-16 00:00:00', '2022-05-25 23:00:11', 1, 1),
(93, 1, 92, 'NULL', 'charitable_programs', 'Programs List', '', '', 1, 1, '2013-12-16 00:00:00', '2023-01-19 16:55:16', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`role_id`, `role_name`, `status_ind`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(1, 'Super Admin', 1, '2014-07-23 16:13:07', '2014-07-24 00:43:07', 1, 1),
(2, 'Digital Group', 1, '2022-04-20 14:44:19', '2022-04-20 18:44:19', 1, 1),
(3, 'IGF ADMIN', 1, '2022-04-20 14:44:19', '2022-04-20 18:44:19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles_accesses`
--

CREATE TABLE `admin_roles_accesses` (
  `role_id` int(11) NOT NULL,
  `menuitem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_roles_accesses`
--

INSERT INTO `admin_roles_accesses` (`role_id`, `menuitem_id`) VALUES
(4, 7),
(4, 8),
(4, 53),
(4, 54),
(2, 18),
(2, 22),
(2, 23),
(2, 25),
(2, 53),
(2, 54),
(2, 56),
(2, 86),
(2, 61),
(2, 62),
(2, 67),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 77),
(2, 80),
(2, 83),
(2, 84),
(2, 85),
(3, 4),
(3, 5),
(3, 6),
(3, 18),
(3, 23),
(3, 25),
(3, 53),
(3, 54),
(3, 56),
(3, 86),
(3, 73),
(3, 74),
(3, 78),
(3, 79),
(3, 88),
(3, 89),
(1, 1),
(1, 2),
(1, 59),
(1, 4),
(1, 5),
(1, 6),
(1, 18),
(1, 22),
(1, 23),
(1, 25),
(1, 53),
(1, 54),
(1, 56),
(1, 86),
(1, 73),
(1, 74),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 83),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `user_id` int(10) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` bigint(20) NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_session_id` int(11) NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`user_id`, `role_id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone_number`, `profile_pic`, `user_session_id`, `status_ind`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'User', 'admin@admin.com', 8688817994, 'profile_pic2886502.jpg', 0, 1, NULL, '2022-04-21 01:39:52', 1, 1),
(3, 1, 'digital', '32af56cc150cddfbc78e2dc04141f908', 'Digital', 'Group', 'sathishds94@gmail.com', 8688817994, '', 0, 1, '2022-04-26 12:24:05', '2022-04-26 16:24:05', 1, 1),
(4, 1, 'igfadmin', '6ee7d38d5399a46cdfea4a89d36b6836', 'igf', 'admin', 'igf@admin.com', 1234567890, '', 0, 1, '2022-12-27 12:47:54', '2022-12-27 17:47:54', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users_accesses`
--

CREATE TABLE `admin_users_accesses` (
  `user_id` int(11) NOT NULL,
  `menuitem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_users_accesses`
--

INSERT INTO `admin_users_accesses` (`user_id`, `menuitem_id`) VALUES
(3, 18),
(3, 22),
(3, 23),
(3, 25),
(3, 53),
(3, 54),
(3, 56),
(3, 86),
(3, 61),
(3, 62),
(3, 67),
(3, 71),
(3, 72),
(3, 73),
(3, 74),
(3, 77),
(3, 78),
(3, 79),
(3, 80),
(3, 81),
(3, 82),
(3, 83),
(3, 84),
(3, 85),
(4, 4),
(4, 5),
(4, 6),
(4, 18),
(4, 22),
(4, 23),
(4, 25),
(4, 53),
(4, 54),
(4, 56),
(4, 86),
(4, 73),
(4, 74),
(4, 77),
(4, 78),
(4, 79),
(4, 80),
(4, 83),
(4, 88),
(4, 89),
(1, 1),
(1, 2),
(1, 59),
(1, 4),
(1, 5),
(1, 6),
(1, 18),
(1, 22),
(1, 23),
(1, 25),
(1, 53),
(1, 54),
(1, 56),
(1, 86),
(1, 73),
(1, 74),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 83),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `mobile` decimal(10,0) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_background_img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_redirect_url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(5) NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL,
  `last_modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `page_slug` varchar(100) DEFAULT NULL,
  `post_image` text DEFAULT NULL,
  `post_content` text CHARACTER SET utf8 DEFAULT NULL,
  `link` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `month_year` varchar(50) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `sidebar` int(11) DEFAULT NULL,
  `sidebarwidget` varchar(100) DEFAULT NULL,
  `imagetitle` int(11) DEFAULT NULL,
  `slidingimage` int(11) DEFAULT NULL,
  `scrolling` int(11) DEFAULT NULL,
  `video` int(11) DEFAULT NULL,
  `iframe` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `album_id` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status_ind` int(4) NOT NULL COMMENT 'Active = 1, Inactive = 0,',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `album_folder_name` varchar(100) DEFAULT NULL,
  `meta_keywords` text NOT NULL,
  `other_meta_tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `category_desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_ind` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `campaign_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `display_image` int(5) NOT NULL,
  `campaign_desc` text NOT NULL,
  `summary` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `goal_amount` int(11) NOT NULL,
  `raised_amount` int(11) NOT NULL,
  `ot_form_heading` varchar(255) DEFAULT NULL,
  `ot_amount_1` int(11) NOT NULL,
  `ot_amount_2` int(11) NOT NULL,
  `ot_amount_3` int(11) NOT NULL,
  `ot_amount_4` int(11) NOT NULL,
  `ot_amount_5` int(11) NOT NULL,
  `m_form_heading` varchar(255) NOT NULL,
  `m_amount_1` int(11) NOT NULL,
  `m_amount_2` int(11) NOT NULL,
  `m_amount_3` int(11) NOT NULL,
  `m_amount_4` int(11) NOT NULL,
  `m_amount_5` int(11) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `seva_code` varchar(255) DEFAULT NULL,
  `tally_head` varchar(255) DEFAULT NULL,
  `meta_keywords` text NOT NULL,
  `other_meta_tags` varchar(255) NOT NULL,
  `nofollow_ind` int(11) NOT NULL COMMENT 'Yes = 1, No = 0',
  `noindex_ind` int(11) NOT NULL COMMENT 'Yes = 1, No = 0',
  `canonical_url` varchar(255) NOT NULL,
  `redirection_link` varchar(255) NOT NULL,
  `status_ind` int(2) NOT NULL DEFAULT 0 COMMENT 'Active = 1, Inactive = 0',
  `video_link_1` varchar(255) NOT NULL,
  `video_cover_img_1` varchar(255) NOT NULL,
  `video_link_2` varchar(255) NOT NULL,
  `video_cover_img_2` varchar(255) NOT NULL,
  `video_link_3` varchar(255) NOT NULL,
  `video_cover_img_3` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_gallery`
--

CREATE TABLE `category_gallery` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `gallery_img` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status_ind` int(3) NOT NULL COMMENT 'Active = 1,\r\nInactive = 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `chapter_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `display_image` int(5) NOT NULL,
  `short_chapter_desc` text NOT NULL,
  `chapter_desc` text NOT NULL,
  `summary` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `goal_amount` int(11) NOT NULL,
  `ot_form_heading` varchar(255) DEFAULT NULL,
  `ot_amount_1` int(11) NOT NULL,
  `ot_amount_2` int(11) NOT NULL,
  `ot_amount_3` int(11) NOT NULL,
  `ot_amount_4` int(11) NOT NULL,
  `ot_amount_5` int(11) NOT NULL,
  `m_form_heading` varchar(255) NOT NULL,
  `m_amount_1` int(11) NOT NULL,
  `m_amount_2` int(11) NOT NULL,
  `m_amount_3` int(11) NOT NULL,
  `m_amount_4` int(11) NOT NULL,
  `m_amount_5` int(11) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `other_meta_tags` varchar(255) NOT NULL,
  `nofollow_ind` int(11) NOT NULL COMMENT 'Yes = 1, No = 0',
  `noindex_ind` int(11) NOT NULL COMMENT 'Yes = 1, No = 0',
  `canonical_url` varchar(255) NOT NULL,
  `redirection_link` varchar(255) NOT NULL,
  `status_ind` int(2) NOT NULL DEFAULT 0 COMMENT 'Active = 1, Inactive = 0',
  `video_link_1` varchar(255) NOT NULL,
  `video_cover_img_1` varchar(255) NOT NULL,
  `video_link_2` varchar(255) NOT NULL,
  `video_cover_img_2` varchar(255) NOT NULL,
  `video_link_3` varchar(255) NOT NULL,
  `video_cover_img_3` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `charitable_programs`
--

CREATE TABLE `charitable_programs` (
  `charitable_program_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `program_heading` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `display_image` int(5) NOT NULL,
  `program_video` varchar(255) NOT NULL,
  `text_on_banner` text NOT NULL,
  `impact_number1` varchar(255) NOT NULL,
  `impact_number2` varchar(255) NOT NULL,
  `impact_number3` varchar(255) NOT NULL,
  `impact_description` text NOT NULL,
  `impact_side_image` varchar(255) NOT NULL,
  `left_description` text NOT NULL,
  `bottom_description` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `ot_form_heading` varchar(255) DEFAULT NULL,
  `ot_amount_1` int(11) NOT NULL,
  `ot_amount_2` int(11) NOT NULL,
  `ot_amount_3` int(11) NOT NULL,
  `ot_amount_4` int(11) NOT NULL,
  `ot_amount_5` int(11) NOT NULL,
  `m_form_heading` varchar(255) NOT NULL,
  `m_amount_1` int(11) NOT NULL,
  `m_amount_2` int(11) NOT NULL,
  `m_amount_3` int(11) NOT NULL,
  `m_amount_4` int(11) NOT NULL,
  `m_amount_5` int(11) NOT NULL,
  `explore_side_image` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `seva_code` varchar(255) DEFAULT NULL,
  `tally_head` varchar(255) DEFAULT NULL,
  `meta_keywords` text NOT NULL,
  `other_meta_tags` varchar(255) NOT NULL,
  `nofollow_ind` int(11) NOT NULL COMMENT 'Yes = 1, No = 0',
  `noindex_ind` int(11) NOT NULL COMMENT 'Yes = 1, No = 0',
  `canonical_url` varchar(255) NOT NULL,
  `redirection_link` varchar(255) NOT NULL,
  `status_ind` int(2) NOT NULL DEFAULT 0 COMMENT 'Active = 1, Inactive = 0',
  `video_link_1` varchar(255) NOT NULL,
  `video_cover_img_1` varchar(255) NOT NULL,
  `video_link_2` varchar(255) NOT NULL,
  `video_cover_img_2` varchar(255) NOT NULL,
  `video_link_3` varchar(255) NOT NULL,
  `video_cover_img_3` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `status_ind` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_code`, `state_id`, `status_ind`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(1, 'Bengaluru - HK Hill', 'blr-hk-hill', 1, 1, '0000-00-00 00:00:00', '2020-08-13 06:55:52', 1, NULL),
(2, 'Bengaluru -Vasanthapura', 'blr-vptn', 1, 1, '0000-00-00 00:00:00', '2015-11-27 03:38:40', 1, NULL),
(3, 'Ballari ', 'ballery', 1, 1, '0000-00-00 00:00:00', '2015-11-27 03:39:04', 1, NULL),
(4, 'Hubballi', 'hubli', 1, 1, '0000-00-00 00:00:00', '2015-11-27 03:42:22', 1, NULL),
(5, 'Mangaluru', 'mangaluru', 1, 1, '0000-00-00 00:00:00', '2015-11-27 03:39:42', 1, NULL),
(6, 'Mysuru', 'mysuru', 1, 1, '0000-00-00 00:00:00', '2015-11-27 03:39:59', 1, NULL),
(7, 'Gujarat', 'gj', 1, 1, '0000-00-00 00:00:00', '2015-11-27 03:40:24', 1, NULL),
(8, 'Vadodara ', 'vdr', 2, 1, '0000-00-00 00:00:00', '2015-11-27 03:41:23', 1, NULL),
(9, 'Surat', 'sut', 2, 1, '0000-00-00 00:00:00', '2015-11-27 03:41:23', 1, NULL),
(10, 'Vishakhapatnam', 'vskp', 8, 1, '0000-00-00 00:00:00', '2015-11-27 03:42:19', 1, NULL),
(11, 'Guwahati', 'guht', 21, 1, '0000-00-00 00:00:00', '2017-01-04 05:29:39', 1, NULL),
(12, 'Bhilai', 'bhilai', 11, 1, '0000-00-00 00:00:00', '2015-11-27 03:43:24', 1, NULL),
(13, 'Cuttack', 'ctk', 12, 1, NULL, '2015-11-27 03:43:45', NULL, NULL),
(14, 'Puri', 'puri', 12, 1, '0000-00-00 00:00:00', '2015-11-27 03:44:02', 1, NULL),
(15, 'Nayagarh', 'ngr', 12, 1, '0000-00-00 00:00:00', '2015-11-27 03:44:17', 1, NULL),
(16, 'Rourkela', 'rukla', 12, 1, '0000-00-00 00:00:00', '2015-11-27 03:44:32', 1, NULL),
(17, 'Jaipur', 'jpr', 9, 1, '0000-00-00 00:00:00', '2015-11-27 03:45:01', 1, NULL),
(18, 'Jodhpur', 'pdpr', 9, 1, NULL, '2016-12-29 05:13:48', NULL, NULL),
(19, 'Nathdwara', 'ntdr', 9, 1, '0000-00-00 00:00:00', '2015-11-27 03:47:06', 1, NULL),
(20, 'Baran', 'brn', 9, 1, '0000-00-00 00:00:00', '2015-11-27 03:47:18', 1, NULL),
(21, 'Chennai', 'cni', 4, 1, '0000-00-00 00:00:00', '2015-11-27 03:47:55', 1, NULL),
(22, 'Hyderabad', 'hyd', 44, 1, '0000-00-00 00:00:00', '2015-11-27 03:48:38', 1, NULL),
(23, 'Lucknow', 'luck', 24, 1, '0000-00-00 00:00:00', '2016-12-29 04:33:15', 1, NULL),
(24, 'Vrindavan', 'vrnd', 13, 1, '0000-00-00 00:00:00', '2015-11-27 03:49:25', 1, NULL),
(25, 'Ajmer', '', 9, 1, '2016-10-07 11:55:18', '2016-12-29 05:13:19', 1, 1),
(26, 'Bengaluru - HK Hill', '', 1, 1, '2016-10-25 16:54:58', '2016-10-25 05:54:58', 1, 1),
(27, 'Bengaluru', '', 1, 1, '2016-10-25 16:55:50', '2016-10-25 05:55:50', 1, 1),
(28, 'Tumkur', '', 1, 1, '2016-10-26 13:56:02', '2016-10-26 02:57:06', 2, 2),
(29, 'Dharwad', '580001', 1, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(30, 'Dakshin Kannada', 'dks', 1, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(31, 'Ahmedabad', 'ahm', 2, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(32, 'Mathura', 'mth', 24, 1, '0000-00-00 00:00:00', '2016-12-29 04:33:15', 1, NULL),
(33, 'Durg (Bhilai)', 'durg', 22, 1, '0000-00-00 00:00:00', '2016-12-29 04:33:15', 1, NULL),
(34, 'Nagpur', 'nag', 33, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(35, 'Kamrup Metropolitan (Guwahati)\r\n', 'kam', 21, 0, '2016-12-29 00:00:00', '2017-01-04 05:27:52', 1, 1),
(36, 'Rajsamand\r\n', 'raj', 9, 1, '0000-00-00 00:00:00', '2015-11-27 03:47:06', 1, NULL),
(37, 'Guntur (Mangalagiri)\r\n\r\n', 'gunt', 8, 1, '0000-00-00 00:00:00', '2015-11-27 03:47:06', 1, NULL),
(38, 'East Godavari (Kakinada)\r\n\r\n\r\n', 'kak', 8, 1, '0000-00-00 00:00:00', '2015-11-27 03:47:06', 1, NULL),
(39, 'Cuttack\r\n', 'cutk', 23, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(40, 'Nayagarh', 'naya', 23, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(41, 'Puri\r\n', 'puri', 23, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(42, 'Sundergarh', 'sud', 23, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(43, 'Bhubaneshwar\r\n', '', 23, 1, '2016-12-29 00:00:00', '2016-12-28 13:00:00', 1, 1),
(44, 'Kashirampara', '', 41, 1, '2017-05-09 16:11:48', '2017-05-09 05:11:48', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` int(11) NOT NULL,
  `session_id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` text NOT NULL,
  `user_agent` text NOT NULL,
  `last_activity` varchar(255) NOT NULL,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `session_id`, `ip_address`, `timestamp`, `data`, `user_agent`, `last_activity`, `user_data`) VALUES
(0, '', '::1', 1625843193, 'user_id|s:1:\"1\";role_id|s:1:\"1\";username|s:5:\"admin\";password|s:32:\"21232f297a57a5a743894a0e4a801fc3\";first_name|s:5:\"Admin\";last_name|s:4:\"User\";email|s:15:\"admin@admin.com\";phone_number|s:10:\"8688817994\";profile_pic|s:22:\"profile_pic2886502.jpg\";user_session_id|s:1:\"0\";status_ind|s:1:\"1\";created_date|N;modified_date|s:19:\"2021-02-18 02:32:36\";created_by|s:1:\"1\";modified_by|s:1:\"1\";lang_id|i:1;sidebar_menuitems|a:7:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"58\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:9:\"lni-crown\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Roles\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:53:00\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"59\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminroles\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:52\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"60\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminroles/add\";s:13:\"menuitem_text\";s:15:\"Add Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:54\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"1\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Users\";s:13:\"menuitem_icon\";s:9:\"lni-users\";s:28:\"parent_menu_sub_heading_text\";s:19:\"Control Admin Users\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:47:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"2\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminusers\";s:13:\"menuitem_text\";s:16:\"Admin Users List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"3\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminusers/add\";s:13:\"menuitem_text\";s:18:\"Add New Admin User\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:14\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"4\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:15:\"Email templates\";s:13:\"menuitem_icon\";s:12:\"lni-envelope\";s:28:\"parent_menu_sub_heading_text\";s:22:\"Manage Email Templates\";s:13:\"display_order\";s:1:\"2\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:34\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"5\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"emailtemplates/add\";s:13:\"menuitem_text\";s:22:\"Add New Email Template\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:12:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"6\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"emailtemplates\";s:13:\"menuitem_text\";s:20:\"Email Templates List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2018-05-19 10:52:10\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"18\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:6:\"Master\";s:13:\"menuitem_icon\";s:8:\"lni-cogs\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Panel\";s:13:\"display_order\";s:1:\"3\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:56\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:8:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"19\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/countries\";s:13:\"menuitem_text\";s:12:\"Country List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:45:07\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"20\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/states\";s:13:\"menuitem_text\";s:11:\"States List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"21\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/cities\";s:13:\"menuitem_text\";s:11:\"Cities List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"22\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"master/banners\";s:13:\"menuitem_text\";s:6:\"Banner\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-04 08:02:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"23\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/menuitems\";s:13:\"menuitem_text\";s:11:\"Header Menu\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-02 10:07:33\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"24\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"master/pages\";s:13:\"menuitem_text\";s:6:\"Pages \";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"25\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:15:\"master/settings\";s:13:\"menuitem_text\";s:8:\"Settings\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:7;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"39\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:11:\"master/form\";s:13:\"menuitem_text\";s:5:\"Forms\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-16 04:30:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"50\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:12:\"Testimonials\";s:13:\"menuitem_icon\";s:13:\"lni-quotation\";s:28:\"parent_menu_sub_heading_text\";s:17:\"Reviews & Ratings\";s:13:\"display_order\";s:1:\"4\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:18\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"51\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:29:\"testimonials/testimonials_add\";s:13:\"menuitem_text\";s:15:\"Add Testimonial\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"52\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"testimonials\";s:13:\"menuitem_text\";s:17:\"Testimonials List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"53\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:5:\"Posts\";s:13:\"menuitem_icon\";s:11:\"lni-blogger\";s:28:\"parent_menu_sub_heading_text\";s:12:\"News Section\";s:13:\"display_order\";s:1:\"5\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:28\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"54\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"blog/index\";s:13:\"menuitem_text\";s:10:\"Posts List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:21\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"55\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"blog/post_add\";s:13:\"menuitem_text\";s:8:\"Add Post\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"56\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"blog/category_view\";s:13:\"menuitem_text\";s:15:\"Blog Categories\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"57\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:17:\"blog/category_add\";s:13:\"menuitem_text\";s:17:\"Add Blog Category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"7\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";N;s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:3:\"FAQ\";s:13:\"menuitem_icon\";s:19:\"lni-question-circle\";s:28:\"parent_menu_sub_heading_text\";s:12:\"Manage FAQ\'s\";s:13:\"display_order\";s:1:\"7\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"8\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:3:\"faq\";s:13:\"menuitem_link\";s:3:\"faq\";s:13:\"menuitem_text\";s:8:\"FAQ List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"9\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:7:\"faq_add\";s:13:\"menuitem_link\";s:7:\"faq/add\";s:13:\"menuitem_text\";s:7:\"Add FAQ\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:50\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"10\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:12:\"faq_category\";s:13:\"menuitem_link\";s:12:\"faq_category\";s:13:\"menuitem_text\";s:8:\"category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"11\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:16:\"faq_category_add\";s:13:\"menuitem_link\";s:16:\"faq_category/add\";s:13:\"menuitem_text\";s:16:\"add faq category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}}languages|a:1:{i:0;O:8:\"stdClass\":11:{s:7:\"lang_id\";s:1:\"1\";s:9:\"lang_code\";s:2:\"en\";s:9:\"lang_name\";s:7:\"English\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:10:\"created_by\";s:1:\"0\";s:18:\"last_modified_date\";s:19:\"2014-04-17 07:20:27\";s:11:\"modified_by\";s:1:\"1\";s:13:\"display_order\";s:1:\"1\";s:18:\"last_modified_user\";s:5:\"admin\";s:12:\"created_user\";N;}}', '', '', ''),
(1, '', '::1', 1625732969, '', '', '', ''),
(2, '', '::1', 1625843173, '', '', '', ''),
(3, '', '::1', 1625841082, 'user_id|s:1:\"1\";role_id|s:1:\"1\";username|s:5:\"admin\";password|s:32:\"21232f297a57a5a743894a0e4a801fc3\";first_name|s:5:\"Admin\";last_name|s:4:\"User\";email|s:15:\"admin@admin.com\";phone_number|s:10:\"8688817994\";profile_pic|s:22:\"profile_pic2886502.jpg\";user_session_id|s:1:\"0\";status_ind|s:1:\"1\";created_date|N;modified_date|s:19:\"2021-02-18 02:32:36\";created_by|s:1:\"1\";modified_by|s:1:\"1\";lang_id|i:1;sidebar_menuitems|a:7:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"58\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:9:\"lni-crown\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Roles\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:53:00\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"59\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminroles\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:52\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"60\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminroles/add\";s:13:\"menuitem_text\";s:15:\"Add Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:54\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"1\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Users\";s:13:\"menuitem_icon\";s:9:\"lni-users\";s:28:\"parent_menu_sub_heading_text\";s:19:\"Control Admin Users\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:47:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"2\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminusers\";s:13:\"menuitem_text\";s:16:\"Admin Users List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"3\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminusers/add\";s:13:\"menuitem_text\";s:18:\"Add New Admin User\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:14\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"4\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:15:\"Email templates\";s:13:\"menuitem_icon\";s:12:\"lni-envelope\";s:28:\"parent_menu_sub_heading_text\";s:22:\"Manage Email Templates\";s:13:\"display_order\";s:1:\"2\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:34\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"5\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"emailtemplates/add\";s:13:\"menuitem_text\";s:22:\"Add New Email Template\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:12:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"6\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"emailtemplates\";s:13:\"menuitem_text\";s:20:\"Email Templates List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2018-05-19 10:52:10\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"18\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:6:\"Master\";s:13:\"menuitem_icon\";s:8:\"lni-cogs\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Panel\";s:13:\"display_order\";s:1:\"3\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:56\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:8:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"19\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/countries\";s:13:\"menuitem_text\";s:12:\"Country List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:45:07\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"20\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/states\";s:13:\"menuitem_text\";s:11:\"States List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"21\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/cities\";s:13:\"menuitem_text\";s:11:\"Cities List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"22\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"master/banners\";s:13:\"menuitem_text\";s:6:\"Banner\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-04 08:02:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"23\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/menuitems\";s:13:\"menuitem_text\";s:11:\"Header Menu\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-02 10:07:33\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"24\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"master/pages\";s:13:\"menuitem_text\";s:6:\"Pages \";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"25\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:15:\"master/settings\";s:13:\"menuitem_text\";s:8:\"Settings\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:7;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"39\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:11:\"master/form\";s:13:\"menuitem_text\";s:5:\"Forms\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-16 04:30:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"50\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:12:\"Testimonials\";s:13:\"menuitem_icon\";s:13:\"lni-quotation\";s:28:\"parent_menu_sub_heading_text\";s:17:\"Reviews & Ratings\";s:13:\"display_order\";s:1:\"4\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:18\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"51\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:29:\"testimonials/testimonials_add\";s:13:\"menuitem_text\";s:15:\"Add Testimonial\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"52\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"testimonials\";s:13:\"menuitem_text\";s:17:\"Testimonials List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"53\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:5:\"Posts\";s:13:\"menuitem_icon\";s:11:\"lni-blogger\";s:28:\"parent_menu_sub_heading_text\";s:12:\"News Section\";s:13:\"display_order\";s:1:\"5\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:28\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"54\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"blog/index\";s:13:\"menuitem_text\";s:10:\"Posts List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:21\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"55\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"blog/post_add\";s:13:\"menuitem_text\";s:8:\"Add Post\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"56\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"blog/category_view\";s:13:\"menuitem_text\";s:15:\"Blog Categories\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"57\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:17:\"blog/category_add\";s:13:\"menuitem_text\";s:17:\"Add Blog Category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"7\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";N;s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:3:\"FAQ\";s:13:\"menuitem_icon\";s:19:\"lni-question-circle\";s:28:\"parent_menu_sub_heading_text\";s:12:\"Manage FAQ\'s\";s:13:\"display_order\";s:1:\"7\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"8\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:3:\"faq\";s:13:\"menuitem_link\";s:3:\"faq\";s:13:\"menuitem_text\";s:8:\"FAQ List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"9\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:7:\"faq_add\";s:13:\"menuitem_link\";s:7:\"faq/add\";s:13:\"menuitem_text\";s:7:\"Add FAQ\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:50\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"10\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:12:\"faq_category\";s:13:\"menuitem_link\";s:12:\"faq_category\";s:13:\"menuitem_text\";s:8:\"category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"11\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:16:\"faq_category_add\";s:13:\"menuitem_link\";s:16:\"faq_category/add\";s:13:\"menuitem_text\";s:16:\"add faq category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}}languages|a:1:{i:0;O:8:\"stdClass\":11:{s:7:\"lang_id\";s:1:\"1\";s:9:\"lang_code\";s:2:\"en\";s:9:\"lang_name\";s:7:\"English\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:10:\"created_by\";s:1:\"0\";s:18:\"last_modified_date\";s:19:\"2014-04-17 07:20:27\";s:11:\"modified_by\";s:1:\"1\";s:13:\"display_order\";s:1:\"1\";s:18:\"last_modified_user\";s:5:\"admin\";s:12:\"created_user\";N;}}', '', '', ''),
(5, '', '::1', 1625841082, '', '', '', '');
INSERT INTO `ci_sessions` (`id`, `session_id`, `ip_address`, `timestamp`, `data`, `user_agent`, `last_activity`, `user_data`) VALUES
(6, '', '::1', 1625843175, 'user_id|s:1:\"1\";role_id|s:1:\"1\";username|s:5:\"admin\";password|s:32:\"21232f297a57a5a743894a0e4a801fc3\";first_name|s:5:\"Admin\";last_name|s:4:\"User\";email|s:15:\"admin@admin.com\";phone_number|s:10:\"8688817994\";profile_pic|s:22:\"profile_pic2886502.jpg\";user_session_id|s:1:\"0\";status_ind|s:1:\"1\";created_date|N;modified_date|s:19:\"2021-02-18 02:32:36\";created_by|s:1:\"1\";modified_by|s:1:\"1\";lang_id|i:1;sidebar_menuitems|a:7:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"58\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:9:\"lni-crown\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Roles\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:53:00\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"59\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminroles\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:52\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"60\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminroles/add\";s:13:\"menuitem_text\";s:15:\"Add Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:54\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"1\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Users\";s:13:\"menuitem_icon\";s:9:\"lni-users\";s:28:\"parent_menu_sub_heading_text\";s:19:\"Control Admin Users\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:47:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"2\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminusers\";s:13:\"menuitem_text\";s:16:\"Admin Users List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"3\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminusers/add\";s:13:\"menuitem_text\";s:18:\"Add New Admin User\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:14\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"4\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:15:\"Email templates\";s:13:\"menuitem_icon\";s:12:\"lni-envelope\";s:28:\"parent_menu_sub_heading_text\";s:22:\"Manage Email Templates\";s:13:\"display_order\";s:1:\"2\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:34\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"5\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"emailtemplates/add\";s:13:\"menuitem_text\";s:22:\"Add New Email Template\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:12:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"6\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"emailtemplates\";s:13:\"menuitem_text\";s:20:\"Email Templates List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2018-05-19 10:52:10\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"18\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:6:\"Master\";s:13:\"menuitem_icon\";s:8:\"lni-cogs\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Panel\";s:13:\"display_order\";s:1:\"3\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:56\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:8:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"19\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/countries\";s:13:\"menuitem_text\";s:12:\"Country List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:45:07\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"20\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/states\";s:13:\"menuitem_text\";s:11:\"States List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"21\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/cities\";s:13:\"menuitem_text\";s:11:\"Cities List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"22\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"master/banners\";s:13:\"menuitem_text\";s:6:\"Banner\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-04 08:02:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"23\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/menuitems\";s:13:\"menuitem_text\";s:11:\"Header Menu\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-02 10:07:33\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"24\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"master/pages\";s:13:\"menuitem_text\";s:6:\"Pages \";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"25\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:15:\"master/settings\";s:13:\"menuitem_text\";s:8:\"Settings\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:7;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"39\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:11:\"master/form\";s:13:\"menuitem_text\";s:5:\"Forms\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-16 04:30:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"50\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:12:\"Testimonials\";s:13:\"menuitem_icon\";s:13:\"lni-quotation\";s:28:\"parent_menu_sub_heading_text\";s:17:\"Reviews & Ratings\";s:13:\"display_order\";s:1:\"4\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:18\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"51\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:29:\"testimonials/testimonials_add\";s:13:\"menuitem_text\";s:15:\"Add Testimonial\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"52\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"testimonials\";s:13:\"menuitem_text\";s:17:\"Testimonials List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"53\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:5:\"Posts\";s:13:\"menuitem_icon\";s:11:\"lni-blogger\";s:28:\"parent_menu_sub_heading_text\";s:12:\"News Section\";s:13:\"display_order\";s:1:\"5\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:28\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"54\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"blog/index\";s:13:\"menuitem_text\";s:10:\"Posts List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:21\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"55\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"blog/post_add\";s:13:\"menuitem_text\";s:8:\"Add Post\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"56\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"blog/category_view\";s:13:\"menuitem_text\";s:15:\"Blog Categories\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"57\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:17:\"blog/category_add\";s:13:\"menuitem_text\";s:17:\"Add Blog Category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"7\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";N;s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:3:\"FAQ\";s:13:\"menuitem_icon\";s:19:\"lni-question-circle\";s:28:\"parent_menu_sub_heading_text\";s:12:\"Manage FAQ\'s\";s:13:\"display_order\";s:1:\"7\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"8\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:3:\"faq\";s:13:\"menuitem_link\";s:3:\"faq\";s:13:\"menuitem_text\";s:8:\"FAQ List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"9\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:7:\"faq_add\";s:13:\"menuitem_link\";s:7:\"faq/add\";s:13:\"menuitem_text\";s:7:\"Add FAQ\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:50\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"10\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:12:\"faq_category\";s:13:\"menuitem_link\";s:12:\"faq_category\";s:13:\"menuitem_text\";s:8:\"category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"11\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:16:\"faq_category_add\";s:13:\"menuitem_link\";s:16:\"faq_category/add\";s:13:\"menuitem_text\";s:16:\"add faq category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}}', '', '', ''),
(7, '', '::1', 1625843015, '', '', '', ''),
(25, '', '::1', 1625825557, '', '', '', ''),
(39, '', '::1', 1625843193, '', '', '', ''),
(67, '', '::1', 1625843181, '', '', '', ''),
(78, '', '::1', 1625841075, '', '', '', ''),
(85, '', '::1', 1625843015, '', '', '', ''),
(98, '', '::1', 1625841077, 'user_id|s:1:\"1\";role_id|s:1:\"1\";username|s:5:\"admin\";password|s:32:\"21232f297a57a5a743894a0e4a801fc3\";first_name|s:5:\"Admin\";last_name|s:4:\"User\";email|s:15:\"admin@admin.com\";phone_number|s:10:\"8688817994\";profile_pic|s:22:\"profile_pic2886502.jpg\";user_session_id|s:1:\"0\";status_ind|s:1:\"1\";created_date|N;modified_date|s:19:\"2021-02-18 02:32:36\";created_by|s:1:\"1\";modified_by|s:1:\"1\";lang_id|i:1;sidebar_menuitems|a:7:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"58\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:9:\"lni-crown\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Roles\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:53:00\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"59\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminroles\";s:13:\"menuitem_text\";s:11:\"Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:52\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"60\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"58\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminroles/add\";s:13:\"menuitem_text\";s:15:\"Add Admin Roles\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:11:54\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"1\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:11:\"Admin Users\";s:13:\"menuitem_icon\";s:9:\"lni-users\";s:28:\"parent_menu_sub_heading_text\";s:19:\"Control Admin Users\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:47:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"2\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"adminusers\";s:13:\"menuitem_text\";s:16:\"Admin Users List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:09\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"3\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"1\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"adminusers/add\";s:13:\"menuitem_text\";s:18:\"Add New Admin User\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-16 21:09:14\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"4\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:15:\"Email templates\";s:13:\"menuitem_icon\";s:12:\"lni-envelope\";s:28:\"parent_menu_sub_heading_text\";s:22:\"Manage Email Templates\";s:13:\"display_order\";s:1:\"2\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:34\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"5\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"emailtemplates/add\";s:13:\"menuitem_text\";s:22:\"Add New Email Template\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"0\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-15 18:12:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"6\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"4\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"emailtemplates\";s:13:\"menuitem_text\";s:20:\"Email Templates List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2018-05-19 10:52:10\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"18\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:6:\"Master\";s:13:\"menuitem_icon\";s:8:\"lni-cogs\";s:28:\"parent_menu_sub_heading_text\";s:13:\"Control Panel\";s:13:\"display_order\";s:1:\"3\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:56\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:8:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"19\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/countries\";s:13:\"menuitem_text\";s:12:\"Country List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:45:07\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"20\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/states\";s:13:\"menuitem_text\";s:11:\"States List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"21\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"master/cities\";s:13:\"menuitem_text\";s:11:\"Cities List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-15 16:44:37\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"22\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:14:\"master/banners\";s:13:\"menuitem_text\";s:6:\"Banner\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-04 08:02:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"23\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:16:\"master/menuitems\";s:13:\"menuitem_text\";s:11:\"Header Menu\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-09-02 10:07:33\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"24\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"master/pages\";s:13:\"menuitem_text\";s:6:\"Pages \";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"25\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:15:\"master/settings\";s:13:\"menuitem_text\";s:8:\"Settings\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-08-13 10:27:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:7;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"39\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"18\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:11:\"master/form\";s:13:\"menuitem_text\";s:5:\"Forms\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-16 04:30:29\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:4;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"50\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:12:\"Testimonials\";s:13:\"menuitem_icon\";s:13:\"lni-quotation\";s:28:\"parent_menu_sub_heading_text\";s:17:\"Reviews & Ratings\";s:13:\"display_order\";s:1:\"4\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:18\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:2:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"51\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:29:\"testimonials/testimonials_add\";s:13:\"menuitem_text\";s:15:\"Add Testimonial\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"52\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"50\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:12:\"testimonials\";s:13:\"menuitem_text\";s:17:\"Testimonials List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2020-12-23 12:10:16\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:5;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"53\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:5:\"Posts\";s:13:\"menuitem_icon\";s:11:\"lni-blogger\";s:28:\"parent_menu_sub_heading_text\";s:12:\"News Section\";s:13:\"display_order\";s:1:\"5\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:52:28\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"54\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:10:\"blog/index\";s:13:\"menuitem_text\";s:10:\"Posts List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:21\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"55\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:13:\"blog/post_add\";s:13:\"menuitem_text\";s:8:\"Add Post\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"56\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:18:\"blog/category_view\";s:13:\"menuitem_text\";s:15:\"Blog Categories\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"57\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:2:\"53\";s:15:\"menuitem_target\";s:4:\"NULL\";s:13:\"menuitem_link\";s:17:\"blog/category_add\";s:13:\"menuitem_text\";s:17:\"Add Blog Category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2013-12-16 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-01-03 14:53:46\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}i:6;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"7\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";N;s:15:\"menuitem_target\";N;s:13:\"menuitem_link\";s:1:\"#\";s:13:\"menuitem_text\";s:3:\"FAQ\";s:13:\"menuitem_icon\";s:19:\"lni-question-circle\";s:28:\"parent_menu_sub_heading_text\";s:12:\"Manage FAQ\'s\";s:13:\"display_order\";s:1:\"7\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2021-02-17 15:51:48\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";a:4:{i:0;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"8\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:3:\"faq\";s:13:\"menuitem_link\";s:3:\"faq\";s:13:\"menuitem_text\";s:8:\"FAQ List\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"0000-00-00 00:00:00\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:1;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:1:\"9\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:7:\"faq_add\";s:13:\"menuitem_link\";s:7:\"faq/add\";s:13:\"menuitem_text\";s:7:\"Add FAQ\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-08 04:25:50\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:2;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"10\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:12:\"faq_category\";s:13:\"menuitem_link\";s:12:\"faq_category\";s:13:\"menuitem_text\";s:8:\"category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}i:3;O:8:\"stdClass\":16:{s:11:\"menuitem_id\";s:2:\"11\";s:7:\"menu_id\";s:1:\"1\";s:18:\"parent_menuitem_id\";s:1:\"7\";s:15:\"menuitem_target\";s:16:\"faq_category_add\";s:13:\"menuitem_link\";s:16:\"faq_category/add\";s:13:\"menuitem_text\";s:16:\"add faq category\";s:13:\"menuitem_icon\";s:0:\"\";s:28:\"parent_menu_sub_heading_text\";s:0:\"\";s:13:\"display_order\";s:1:\"1\";s:10:\"status_ind\";s:1:\"1\";s:12:\"created_date\";s:19:\"2016-12-14 16:49:59\";s:18:\"last_modified_date\";s:19:\"2017-06-22 01:29:47\";s:10:\"created_by\";s:1:\"1\";s:11:\"modified_by\";s:1:\"1\";s:7:\"role_id\";s:1:\"1\";s:8:\"submenus\";N;}}}}', '', '', ''),
(177, '', '::1', 1625843166, '', '', '', ''),
(359, '', '::1', 1625843173, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `website` varchar(225) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `created_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `status_ind` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL DEFAULT 1,
  `modified_by` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `country_code`, `status_ind`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(0, '0', '0', 1, '2020-08-16 07:48:40', '2020-08-16 02:18:40', 1, 1),
(1, 'India', 'IN', 1, '2013-12-19 13:19:13', '2020-08-13 09:34:25', 1, 1),
(2, 'United State Of America', 'US', 1, '2013-12-19 13:19:13', '2015-09-10 02:15:18', 1, 1),
(4, 'Andorra', 'AD', 1, '2013-12-19 13:19:13', '2015-09-10 02:15:23', 1, 1),
(5, 'Argentina', 'AR', 1, '2013-12-19 13:19:13', '2015-09-10 02:15:29', 1, 1),
(6, 'Australia', 'AU', 1, '2013-12-19 13:19:13', '2015-09-10 02:15:33', 1, 1),
(7, 'Bangladesh', 'BD', 1, '2013-12-19 13:19:13', '2015-09-10 02:15:38', 1, 1),
(8, 'Cambodia', 'KH', 1, '2013-12-19 13:19:13', '2015-09-10 02:15:42', 1, 1),
(9, 'Canada', 'CA', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:10', 1, 1),
(10, 'China', 'CN', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:14', 1, 1),
(11, 'Colombia', 'CO', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:18', 1, 1),
(12, 'Cuba', 'CU', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:23', 1, 1),
(13, 'France', 'FR', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:30', 1, 1),
(14, 'United Kingdom', 'GB', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:33', 1, 1),
(15, 'Japan', 'JP', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:41', 1, 1),
(16, 'Mexico', 'MX', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:50', 1, 1),
(18, 'Vatican City', 'VA', 1, '2013-12-19 13:19:13', '2015-09-10 02:16:56', 1, 1),
(19, 'Afghanistan', 'AF', 1, '2014-06-30 12:15:16', '2015-09-10 02:17:00', 1, 1),
(20, 'Albania', 'AL', 1, '2014-06-30 12:15:16', '2015-09-10 02:17:03', 1, 1),
(21, 'Antarctica', 'AQ', 1, '2014-06-30 12:15:16', '2015-09-10 02:17:07', 1, 1),
(22, 'Algeria', 'DZ', 1, '2014-06-30 12:15:16', '2015-09-10 02:17:49', 1, 1),
(23, 'American Samoa', 'AS', 1, '2014-06-30 12:15:16', '2015-09-10 02:17:53', 1, 1),
(24, 'Angola', 'AO', 1, '2014-06-30 12:15:16', '2015-09-10 02:17:59', 1, 1),
(25, 'Antigua and Barbuda', 'AC', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:04', 1, 1),
(26, 'Azerbaijan', 'AZ', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:09', 1, 1),
(27, 'Austria', 'AT', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:13', 1, 1),
(28, 'Bahamas', 'BS', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:19', 1, 1),
(29, 'Bahrain', 'BH', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:24', 1, 1),
(30, 'Armenia', 'AM', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:29', 1, 1),
(31, 'Barbados', 'BB', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:33', 1, 1),
(32, 'Belgium', 'BE', 1, '2014-06-30 12:15:16', '2015-09-10 02:18:39', 1, 1),
(33, 'Bermuda', 'BM', 1, '2014-06-30 12:15:16', '2015-09-10 02:19:30', 1, 1),
(34, 'Bhutan', 'BT', 1, '2014-06-30 12:15:16', '2015-09-10 02:20:02', 1, 1),
(35, 'Bolivia, Plurinational State Of', 'BO', 1, '2014-06-30 12:15:16', '2015-09-10 02:20:06', 1, 1),
(36, 'Bosnia and Herzegovina', 'BA', 1, '2014-06-30 12:15:16', '2015-09-10 02:20:12', 1, 1),
(37, 'Botswana', 'BW', 1, '2014-06-30 12:15:16', '2015-09-10 02:20:19', 1, 1),
(38, 'Bouvet Island', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(39, 'Brazil', 'BR', 1, '2014-06-30 12:15:16', '2015-09-10 02:21:10', 1, 1),
(40, 'Belize', 'BZ', 1, '2014-06-30 12:15:16', '2015-09-10 02:21:14', 1, 1),
(41, 'British Indian Ocean Territory', 'IO', 1, '2014-06-30 12:15:16', '2015-09-10 02:21:17', 1, 1),
(42, 'Solomon Islands', 'SB', 1, '2014-06-30 12:15:16', '2015-09-10 02:21:26', 1, 1),
(43, 'Virgin Islands, British', 'VG', 1, '2014-06-30 12:15:16', '2015-09-10 02:26:20', 1, 1),
(44, 'Brunei Darussalam', 'BN', 1, '2014-06-30 12:15:16', '2015-09-10 02:26:37', 1, 1),
(45, 'Bulgaria', 'BG', 1, '2014-06-30 12:15:16', '2015-09-10 02:26:41', 1, 1),
(46, 'Myanmar', 'MM', 1, '2014-06-30 12:15:16', '2015-09-10 02:26:44', 1, 1),
(47, 'Burundi', 'BI', 1, '2014-06-30 12:15:16', '2015-09-10 02:26:48', 1, 1),
(48, 'Belarus', 'BY', 1, '2014-06-30 12:15:16', '2015-09-10 02:26:54', 1, 1),
(49, 'Cameroon', 'CM', 1, '2014-06-30 12:15:16', '2015-09-10 02:26:59', 1, 1),
(50, 'Cape Verde', 'CV', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:03', 1, 1),
(51, 'Cayman Islands', 'KY', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:09', 1, 1),
(52, 'Central African Republic', 'CF', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:13', 1, 1),
(53, 'Sri Lanka', 'LK', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:18', 1, 1),
(54, 'Chad', 'TD', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:22', 1, 1),
(55, 'Chile', 'CL', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:27', 1, 1),
(56, 'Taiwan, Province Of China', 'TW', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:31', 1, 1),
(57, 'Christmas Island', 'CX', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:36', 1, 1),
(58, 'Cocos (Keeling) Islands', 'CC', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:40', 1, 1),
(59, 'Comoros', 'KM', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:44', 1, 1),
(60, 'Mayotte', 'YT', 1, '2014-06-30 12:15:16', '2015-09-10 02:27:50', 1, 1),
(61, 'Congo', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(62, 'Republic of the Congo', 'CD', 1, '2014-06-30 12:15:16', '2015-09-10 02:28:31', 1, 1),
(63, 'Cook Islands', 'CK', 1, '2014-06-30 12:15:16', '2015-09-10 02:28:43', 1, 1),
(64, 'Costa Rica', 'CR', 1, '2014-06-30 12:15:16', '2015-09-10 02:28:50', 1, 1),
(65, 'Croatia', 'HR', 1, '2014-06-30 12:15:16', '2015-09-10 02:28:54', 1, 1),
(66, 'Cyprus', 'CY', 1, '2014-06-30 12:15:16', '2015-09-10 02:28:58', 1, 1),
(67, 'Czech Republic', 'CZ', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:01', 1, 1),
(68, 'Benin', 'BJ', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:07', 1, 1),
(69, 'Denmark', 'DK', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:11', 1, 1),
(70, 'Dominica', 'DM', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:26', 1, 1),
(71, 'Dominican Republic', 'DO', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:34', 1, 1),
(72, 'Ecuador', 'EC', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:37', 1, 1),
(73, 'El Salvador', 'SV', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:42', 1, 1),
(74, 'Equatorial Guinea', 'GQ', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:46', 1, 1),
(75, 'Ethiopia', 'ET', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:52', 1, 1),
(76, 'Eritrea', 'ER', 1, '2014-06-30 12:15:16', '2015-09-10 02:29:56', 1, 1),
(77, 'Estonia', 'EE', 1, '2014-06-30 12:15:16', '2015-09-10 02:30:01', 1, 1),
(78, 'Faroe Islands', 'FO', 1, '2014-06-30 12:15:16', '2015-09-10 02:30:06', 1, 1),
(79, 'Falkland Islands  (Malvinas)', 'FK', 1, '2014-06-30 12:15:16', '2015-09-10 02:30:11', 1, 1),
(80, 'South Georgia and the South Sandwich Islands', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(81, 'Fiji', 'FJ', 1, '2014-06-30 12:15:16', '2015-09-10 02:30:17', 1, 1),
(82, 'Finland', 'FI', 1, '2014-06-30 12:15:16', '2015-09-10 02:30:21', 1, 1),
(83, 'Åland Islands', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(84, 'French Guiana', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(85, 'French Polynesia', 'PF', 1, '2014-06-30 12:15:16', '2015-09-10 03:48:32', 1, 1),
(86, 'French Southern Territories', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(87, 'Djibouti', 'DJ', 1, '2014-06-30 12:15:16', '2015-09-10 02:30:57', 1, 1),
(88, 'Gabon', 'GA', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:02', 1, 1),
(89, 'Georgia', 'GE', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:06', 1, 1),
(90, 'Gambia', 'GM', 1, '2014-06-30 12:15:16', '2015-09-10 03:48:49', 1, 1),
(91, 'Palestinian Territory, Occupied', 'PS', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:29', 1, 1),
(92, 'Germany', 'DE', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:35', 1, 1),
(93, 'Ghana', 'GH', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:41', 1, 1),
(94, 'Gibraltar', 'GI', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:46', 1, 1),
(95, 'Kiribati', 'KI', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:51', 1, 1),
(96, 'Greece', 'GR', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:55', 1, 1),
(97, 'Greenland', 'GL', 1, '2014-06-30 12:15:16', '2015-09-10 02:31:59', 1, 1),
(98, 'Grenada', 'GD', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:06', 1, 1),
(99, 'Guadeloupe', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(100, 'Guam', 'GU', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:09', 1, 1),
(101, 'Guatemala', 'GT', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:16', 1, 1),
(102, 'Guinea', 'GN', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:24', 1, 1),
(103, 'Guyana', 'GY', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:28', 1, 1),
(104, 'Haiti', 'HT', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:35', 1, 1),
(105, 'Heard Island and McDonald Islands', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(106, 'Holy See (Vatican City State)', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(107, 'Honduras', 'HN', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:42', 1, 1),
(108, 'Hong Kong', 'HK', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:47', 1, 1),
(109, 'Hungary', 'HU', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:52', 1, 1),
(110, 'Iceland', 'IS', 1, '2014-06-30 12:15:16', '2015-09-10 03:01:56', 1, 1),
(111, 'Indonesia', 'ID', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:00', 1, 1),
(112, 'Iran', 'IR', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:07', 1, 1),
(113, 'Iraq', 'IQ', 1, '2014-06-30 12:15:16', '2019-01-16 01:52:35', 1, 1),
(114, 'Ireland', 'IE', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:19', 1, 1),
(115, 'Israel', 'IL', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:24', 1, 1),
(116, 'Italy', 'IT', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:28', 1, 1),
(117, 'Côte D\'Ivoire', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(118, 'Jamaica', 'JM', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:32', 1, 1),
(119, 'Kazakhstan', 'KZ', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:37', 1, 1),
(120, 'Jordan', 'JO', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:41', 1, 1),
(121, 'Kenya', 'KE', 1, '2014-06-30 12:15:16', '2015-09-10 03:02:48', 1, 1),
(122, 'Korea', 'KR', 1, '2014-06-30 12:15:16', '2015-09-10 03:03:26', 1, 1),
(123, 'Korea, Republic of', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(124, 'Kuwait', 'KW', 1, '2014-06-30 12:15:16', '2015-09-10 03:03:41', 1, 1),
(125, 'Kyrgyzstan', 'KG', 1, '2014-06-30 12:15:16', '2015-09-10 03:03:46', 1, 1),
(126, 'Lao People\'s Democratic Republic', 'LA', 1, '2014-06-30 12:15:16', '2015-09-10 03:03:51', 1, 1),
(127, 'Lebanon', 'LB', 1, '2014-06-30 12:15:16', '2015-09-10 03:03:55', 1, 1),
(128, 'Lesotho', 'LS', 1, '2014-06-30 12:15:16', '2015-09-10 03:03:59', 1, 1),
(129, 'Latvia', 'LV', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:04', 1, 1),
(130, 'Liberia', 'LR', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:10', 1, 1),
(131, 'Libya', 'LY', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:14', 1, 1),
(132, 'Liechtenstein', 'LI', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:21', 1, 1),
(133, 'Lithuania', 'LT', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:26', 1, 1),
(134, 'Luxembourg', 'LU', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:31', 1, 1),
(135, 'Macao', 'MO', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:35', 1, 1),
(136, 'Madagascar', 'MG', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:39', 1, 1),
(137, 'Malawi', 'MW', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:43', 1, 1),
(138, 'Malaysia', 'MY', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:46', 1, 1),
(139, 'Maldives', 'MV', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:52', 1, 1),
(140, 'Mali', 'ML', 1, '2014-06-30 12:15:16', '2015-09-10 03:04:55', 1, 1),
(141, 'Malta', 'MT', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:02', 1, 1),
(142, 'Martinique', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(143, 'Mauritania', 'MR', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:12', 1, 1),
(144, 'Mauritius', 'MU', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:20', 1, 1),
(145, 'Monaco', 'MC', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:25', 1, 1),
(146, 'Mongolia', 'MN', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:29', 1, 1),
(147, 'Republic of Moldova', 'MD', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:43', 1, 1),
(148, 'Montenegro', 'ME', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:47', 1, 1),
(149, 'Montserrat', 'MS', 1, '2014-06-30 12:15:16', '2015-09-10 03:05:53', 1, 1),
(150, 'Morocco', 'MA', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:00', 1, 1),
(151, 'Mozambique', 'MZ', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:05', 1, 1),
(152, 'Oman', 'OM', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:09', 1, 1),
(153, 'Namibia', 'NA', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:14', 1, 1),
(154, 'Nauru', 'NR', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:19', 1, 1),
(155, 'Nepal', 'NP', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:24', 1, 1),
(156, 'Netherlands', 'NL', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:29', 1, 1),
(157, 'Curaçao', 'CW', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:34', 1, 1),
(158, 'Aruba', 'AW', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:39', 1, 1),
(159, 'Sint Maarten (Dutch part)', 'SX', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:43', 1, 1),
(160, 'Bonaire, Sint Eustatius and Saba', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(161, 'New Caledonia', 'NC', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:49', 1, 1),
(162, 'Vanuatu', 'VU', 1, '2014-06-30 12:15:16', '2015-09-10 03:06:57', 1, 1),
(163, 'New Zealand', 'NZ', 1, '2014-06-30 12:15:16', '2015-09-10 03:07:02', 1, 1),
(164, 'Nicaragua', 'NI', 1, '2014-06-30 12:15:16', '2015-09-10 03:07:32', 1, 1),
(165, 'Niger', 'NE', 1, '2014-06-30 12:15:16', '2015-09-10 03:07:37', 1, 1),
(166, 'Nigeria', 'NG', 1, '2014-06-30 12:15:16', '2015-09-10 03:07:43', 1, 1),
(167, 'Niue', 'NU', 1, '2014-06-30 12:15:16', '2015-09-10 03:07:47', 1, 1),
(168, 'Norfolk Island', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(169, 'Norway', 'NO', 1, '2014-06-30 12:15:16', '2015-09-10 03:07:54', 1, 1),
(170, 'Northern Mariana Islands', 'MP', 1, '2014-06-30 12:15:16', '2015-09-10 03:08:03', 1, 1),
(171, 'United States Minor Outlying Islands', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(172, 'Micronesia, Federated States Of', 'FM', 1, '2014-06-30 12:15:16', '2015-09-10 03:08:30', 1, 1),
(173, 'Marshall Islands', 'MH', 1, '2014-06-30 12:15:16', '2015-09-10 03:08:37', 1, 1),
(174, 'Palau', 'PW', 1, '2014-06-30 12:15:16', '2015-09-10 03:09:34', 1, 1),
(175, 'Pakistan', 'PK', 1, '2014-06-30 12:15:16', '2015-09-10 03:09:38', 1, 1),
(176, 'Panama', 'PA', 1, '2014-06-30 12:15:16', '2015-09-10 03:09:43', 1, 1),
(177, 'Papua New Guinea', 'PG', 1, '2014-06-30 12:15:16', '2015-09-10 03:09:48', 1, 1),
(178, 'Paraguay', 'PY', 1, '2014-06-30 12:15:16', '2015-09-10 03:09:52', 1, 1),
(179, 'Peru', 'PE', 1, '2014-06-30 12:15:16', '2015-09-10 03:09:55', 1, 1),
(180, 'Philippines', 'PH', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:00', 1, 1),
(181, 'Pitcairn', 'PN', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:07', 1, 1),
(182, 'Poland', 'PL', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:11', 1, 1),
(183, 'Portugal', 'PT', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:32', 1, 1),
(184, 'Guinea-Bissau', 'GW', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:38', 1, 1),
(185, 'Timor-Leste', '', 1, '2014-06-30 12:15:16', '2014-06-29 19:45:16', 1, 1),
(186, 'Puerto Rico', 'PR', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:42', 1, 1),
(187, 'Qatar', 'QA', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:46', 1, 1),
(188, 'Réunion', 'RE', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:50', 1, 1),
(189, 'Romania', 'RO', 1, '2014-06-30 12:15:16', '2015-09-10 03:10:56', 1, 1),
(190, 'Russian Federation', 'RU', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:04', 1, 1),
(191, 'Rwanda', 'RW', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:09', 1, 1),
(192, 'Saint Barthélemy', 'BL', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:12', 1, 1),
(193, 'Saint Helena, Ascension and Tristan Da Cunha', 'SH', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:15', 1, 1),
(194, 'Saint Kitts And Nevis', 'KN', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:21', 1, 1),
(195, 'Anguilla', 'AI', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:27', 1, 1),
(196, 'Saint Lucia', 'LC', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:32', 1, 1),
(197, 'Saint Martin (French Part)', 'MF', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:36', 1, 1),
(198, 'Saint Pierre And Miquelon', 'PM', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:40', 1, 1),
(199, 'Saint Vincent And The Grenadines', 'VC', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:43', 1, 1),
(200, 'San Marino', 'SM', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:50', 1, 1),
(201, 'Sao Tome and Principe', 'ST', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:53', 1, 1),
(202, 'Saudi Arabia', 'SA', 1, '2014-06-30 12:15:16', '2015-09-10 03:11:58', 1, 1),
(203, 'Senegal', 'SN', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:06', 1, 1),
(204, 'Serbia', 'RS', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:09', 1, 1),
(205, 'Seychelles', 'SC', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:35', 1, 1),
(206, 'Sierra Leone', 'SL', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:40', 1, 1),
(207, 'Singapore', 'SG', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:45', 1, 1),
(208, 'Slovakia', 'SK', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:49', 1, 1),
(209, 'Viet Nam', 'VN', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:53', 1, 1),
(210, 'Slovenia', 'SI', 1, '2014-06-30 12:15:16', '2015-09-10 03:12:59', 1, 1),
(211, 'Somalia', 'SO', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:07', 1, 1),
(212, 'South Africa', 'ZA', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:13', 1, 1),
(213, 'Zimbabwe', 'ZW', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:24', 1, 1),
(214, 'Spain', 'ES', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:29', 1, 1),
(215, 'South Sudan', 'SS', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:35', 1, 1),
(216, 'Sudan', 'SD', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:40', 1, 1),
(217, 'Western Sahara', 'EH', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:46', 1, 1),
(218, 'Suriname', 'SR', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:50', 1, 1),
(219, 'Svalbard And Jan Mayen', 'SJ', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:54', 1, 1),
(220, 'Swaziland', 'SZ', 1, '2014-06-30 12:15:16', '2015-09-10 03:13:58', 1, 1),
(221, 'Sweden', 'SE', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:03', 1, 1),
(222, 'Switzerland', 'CH', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:09', 1, 1),
(223, 'Syrian Arab Republic', 'SY', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:14', 1, 1),
(224, 'Tajikistan', 'TJ', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:20', 1, 1),
(225, 'Thailand', 'TH', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:25', 1, 1),
(226, 'Togo', 'TG', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:32', 1, 1),
(227, 'Tokelau', 'TK', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:36', 1, 1),
(228, 'Tonga', 'TO', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:42', 1, 1),
(229, 'Trinidad and Tobago', 'TT', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:47', 1, 1),
(230, 'United Arab Emirates', 'AE', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:51', 1, 1),
(231, 'Tunisia', 'TN', 1, '2014-06-30 12:15:16', '2015-09-10 03:14:58', 1, 1),
(232, 'Turkey', 'TR', 1, '2014-06-30 12:15:16', '2015-09-10 03:18:27', 1, 1),
(233, 'Turkmenistan', 'TM', 1, '2014-06-30 12:15:16', '2015-09-10 03:18:32', 1, 1),
(234, 'Turks and Caicos Islands', 'TC', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:09', 1, 1),
(235, 'Tuvalu', 'TV', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:13', 1, 1),
(236, 'Uganda', 'UG', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:17', 1, 1),
(237, 'Ukraine', 'UA', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:21', 1, 1),
(238, 'Republic of Macedonia', 'MK', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:26', 1, 1),
(239, 'Egypt', 'EG', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:29', 1, 1),
(240, 'Guernsey', 'GG', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:32', 1, 1),
(241, 'Jersey', 'JE', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:37', 1, 1),
(242, 'Isle of Man', 'IM', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:43', 1, 1),
(243, 'United Republic of Tanzania', 'TZ', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:53', 1, 1),
(244, 'Virgin Islands, U.S.', 'VI', 1, '2014-06-30 12:15:16', '2015-09-10 03:19:57', 1, 1),
(245, 'Burkina Faso', 'BF', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:01', 1, 1),
(246, 'Uruguay', 'UY', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:04', 1, 1),
(247, 'Uzbekistan', 'UZ', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:07', 1, 1),
(248, 'Bolivarian Republic of Venezuela', 'VE', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:11', 1, 1),
(249, 'Wallis and Futuna', 'WF', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:17', 1, 1),
(250, 'Samoa', 'WS', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:22', 1, 1),
(251, 'Yemen', 'YE', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:26', 1, 1),
(252, 'Zambia', 'ZM', 1, '2014-06-30 12:15:16', '2015-09-10 03:20:30', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `template_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `template_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cc` text COLLATE utf8_unicode_ci NOT NULL,
  `bcc` text COLLATE utf8_unicode_ci NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL,
  `last_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`template_id`, `lang_id`, `template_title`, `template_content`, `from`, `cc`, `bcc`, `status_ind`, `created_date`, `last_modified_date`, `created_by`, `modified_by`) VALUES
(1, 1, 'DONATION SUCCESSFUL: Thank you for your generosity!', '                                                                                                                                                                 <p><img alt=\"\" src=\"https://dmg.org.in/igfwebdec/uploads/settings/IGF_Logo.png\" style=\"display: block; width: 25%;\"></p><br><br>\r\n<p class=\"mt-2\" style=\"margin-top:10px;\">Dear ####NAME####,</p>\r\n\r\n<p><strong>Thank you for supporting us!</strong></p>\r\n\r\n<p>Thank you for making a contribution of ₹ ####AMOUNT#### to Impact Guru Foundation. We appreciate the time and effort you have\r\nput in to help us in need. We appreciate the time and effort you have put in to help us in need. Your contribution has helped\r\nto move closer to our goal of #HealthyIndiaHappyIndia</p>\r\n  <a class=\"btn btn-primary\" style=\"text-align:center;\" href=\"####PDFPATH####\">Please Download Donation Receipt\r\n</a>\r\nIn case of any discrepancy or queries, please email us at donorcare@impactgurufoundation.org or call us on 9901599015. <br><small >Pdf Password is first 3 letters of name and last 4 numbers of mobile number. </small>\r\n\r\n<p>Impact Guru Foundation</p>\r\n<a href=\"https://impactgurufoundation.org\">www.impactgurufoundation.org</a>\r\n', 'sathishds94@gmail.com', '', '', 1, '2022-11-13 01:04:44', '2022-12-16 19:52:27', 1, 1),
(2, 1, 'FAILED TRANSACTION: Your donation could not be pro...', '\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n    <head><meta charset=\"utf-8\">\r\n        <title></title>\r\n        <meta name=\"title\" content=\"\"/>\r\n        <meta name=\"keywords\" content=\"\"/>\r\n        <meta name=\"description\" content=\"\"/>\r\n        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">\r\n    </head>\r\n<body>\r\n<p><img alt=\"\" src=\"https://dmg.org.in/igfwebdec/uploads/settings/IGF_Logo.png\" style=\"display: block; width: 25%;\"></p>\r\n<br><br>\r\n<p style=\"margin-top:10px;\">Dear ####NAME####,</p>\r\n\r\n<p>We appreciate your generosity and attempt to support us. However, we regret to inform that your online donation transaction could not be completed due to possible technical error. we request you to kindly try donating once again through this link <a href=\'####SLUG####\'>click here</a> </p>\r\n\r\n<p><strong>Your contribution will directly impact lives of the marginalised who are already struggling to provide adequate health care.</strong></p>\r\n\r\n\r\n\r\n<p>Impact Guru Foundation</p>\r\n\r\n    </body>\r\n\r\n    </html>\r\n', 'sathishds94@gmail.com', '', '', 1, '2022-11-13 01:04:44', '2022-12-15 20:25:28', 1, 1),
(3, 1, 'Newsletter Subscription', '\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n    <head><meta charset=\"utf-8\">\r\n        <title></title>\r\n        <meta name=\"title\" content=\"\"/>\r\n        <meta name=\"keywords\" content=\"\"/>\r\n        <meta name=\"description\" content=\"\"/>\r\n        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">\r\n    </head>\r\n<body>\r\n<p><img alt=\"\" src=\"https://dmg.org.in/igfwebdec/uploads/settings/IGF_Logo.png\" style=\"display: block; width: 25%;\"></p>\r\n<br><br>\r\n<p style=\"margin-top:10px;\">Dear Patron,</p>\r\n\r\n<p>Greetings from Impact Guru Foundation (IGF) Family! I hope that this festive season has been warm and joyful for everyone.</p>\r\n<p>We are excited to share the first ever Newsletter from IGF - <b>Pulse 2022,</b> to share a snapshot of some of the latest updates from our organization. This has details of all our achievements, events, and overall impact made possible owing to YOUR support. Please find it attached to this mail for your kind review.</p>\r\n\r\n<p>We would also like to take this opportunity to thank you for your continued support and trust in our work and efforts. We surely hope to close this year with a bang!</p>\r\n<p>In case of queries, please reach out to us at +91 99015 99015 or email us at donorcare@impactgurufoundation.org. To know more about us, visit <a href=\"https://impactgurufoundation.org/\">https://impactgurufoundation.org/</a></p>\r\n<br>\r\n<p><a href=\"####NEWSLETTERPATH####\">Click here to download Newsletter</a></p>\r\n<br><br><br>\r\n<p>Best Wishes,</p>\r\n<p>Team Impact Guru Foundation</p>\r\n\r\n    </body>\r\n\r\n    </html>\r\n', '', '', '', 1, '2022-11-13 01:04:44', '2023-01-25 08:03:55', 1, 1),
(4, 1, 'Newsletter Subscription', '\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n    <head><meta charset=\"utf-8\">\r\n        <title></title>\r\n        <meta name=\"title\" content=\"\"/>\r\n        <meta name=\"keywords\" content=\"\"/>\r\n        <meta name=\"description\" content=\"\"/>\r\n        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">\r\n    </head>\r\n<body>\r\n<p><img alt=\"\" src=\"https://dmg.org.in/igfwebdec/uploads/settings/IGF_Logo.png\" style=\"display: block; width: 25%;\"></p>\r\n<br><br>\r\n<p style=\"margin-top:10px;\">Dear Shilpa,</p>\r\n\r\n<p>We have received the request for NEWSLETEER on our website from the below mentioned details:</p>\r\n<p><b>Email Id:</b>  ####EMAIL####</p>\r\n\r\n<p>We have sucessfully shared the newsletter with the concerned id.</p>\r\n\r\n<br><br>\r\n\r\n<p>Best Wishes,</p>\r\n<p>Team Impact Guru Foundation</p>\r\n\r\n    </body>\r\n\r\n    </html>\r\n', '', '', '', 1, '2022-11-13 01:04:44', '2022-12-15 20:25:28', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `start_date` varchar(150) NOT NULL,
  `end_date` varchar(150) NOT NULL,
  `start_time` varchar(150) NOT NULL,
  `end_time` varchar(150) NOT NULL,
  `start_date_time` varchar(180) DEFAULT NULL,
  `end_date_time` varchar(180) DEFAULT NULL,
  `place` varchar(150) NOT NULL,
  `event_description` text NOT NULL,
  `event_redirection_link` varchar(255) NOT NULL,
  `event_cover_image` varchar(255) NOT NULL,
  `organiser_name` varchar(150) NOT NULL,
  `organisation` varchar(150) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL,
  `status_ind` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `faq_category_id` int(11) NOT NULL,
  `faq_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` text COLLATE utf8_unicode_ci NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL,
  `last_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_category_id`, `faq_question`, `faq_answer`, `status_ind`, `created_date`, `last_modified_date`, `created_by`, `modified_by`) VALUES
(1, 2, 'What does Impact Guru Foundation do?', '<p>Impact Guru Foundation is a healthcare non-profit organization, with an aspiration to offer preventative, curative, and critical care to all. The ultimate goal of our organization is to build a world where everyone can access affordable and accessible healthcare. To further this vision, IGF has been proactively driving programs and campaigns across India, to impact communities and individuals. <a href=\"\">Know more.</a></p>\r\n', 1, '2022-12-06 10:14:25', '2022-12-07 12:04:50', 1, 1),
(7, 2, 'What are IGF\'s programs?', '<p>IGF has 7 pan-India programs - Care On Wheels (C.O.W.), Thank A Nurse - ANGEL, Life On Land, Menstrual Hygiene Program, Cataract Surgery Program, Help India Breathe, and Humanitarian Relief. <a href=\"programs\">Learn more.</a></p>\r\n', 1, '2017-06-09 03:06:06', '2022-12-07 12:05:57', 1, 1),
(8, 3, 'Where does IGF work? ', '<p>With 1,000,000+ beneficiaries, Impact Guru Foundation has a pan-India reach.</p>\r\n', 1, '2017-06-09 03:06:42', '2022-12-07 12:06:20', 1, 1),
(9, 3, 'Who are the partners of Impact Guru Foundation? ', '<p>Since 2014, Impact Guru Foundation has formed alliances with several notable NGOs, corporates, diagnostic clinics, and hospitals, to impact lives in the best ways possible. Our list of partners and collaborators includes names like Apollo Hospital Group, Indus Towers, Microsoft, Dabur India, Atlassian India, and Honda India Foundation, among the lot.</p>\r\n', 1, '2017-06-09 03:07:00', '2022-12-07 12:06:56', 1, 1),
(10, 2, 'How does Impact Guru Foundation choose its awareness drives? ', '<p>Impact Guru Foundation focuses on healthcare issues that need to be addressed for the greater good of the communities, and following the urgency/need, related awareness drives are curated.</p>\r\n', 1, '2017-06-09 03:07:17', '2022-12-07 12:07:51', 1, 1),
(11, 2, 'Where can I find the information about Impact Guru Foundation’s beneficiaries?', '<p>We do not share any information related to our beneficiaries due to privacy purposes. Read our <a href=\"privacy-policy\">Privacy Policy.</a></p>\r\n', 1, '2017-06-09 03:07:36', '2022-12-07 12:08:40', 1, 1),
(12, 3, 'What are the awards received by Impact Guru Foundation?', '<p>Between May - October 2022, Impact Guru Foundation has been the recipient of 4 prestigious awards: CSR Health Impact Awards 2022- Gold Category, Best Social Campaign &amp; CSR Award 2022 - Gold Category, Mahatma Award 2022 - Social Good and Impact Category, and FICCI 14th Healthcare Excellence Award - Excellence in Capacity Building Category.</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-07 12:09:21', 1, 1),
(13, 3, 'Does Impact Guru Foundation have an ISO certification?', '<p>Yes, we are an ISO-certified NGO!</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1),
(14, 3, 'Can donors avail of an 80G Tax Exemption Certificate by donating to Impact Guru Foundation?', '<p>Yes. Donors contributing ₹500 and above, are the recipients of 80G Tax benefits.</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1),
(15, 3, 'Does IGF have a 12A Registration?', '<p>Yes</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1),
(16, 3, 'What is the difference between ImpactGuru and Impact Guru Foundation?', '<p>Our parent company, ImpactGuru is one India&#39;s leading crowdfunding platforms offering fundraising solutions for medical treatments and financial emergencies, among other causes. As a non-profit organization, Impact Guru Foundation works to make healthcare accessible and affordable for all. At the core, IGF is committed to making preventive, curative, and critical care possible across all ages and communities.</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-07 12:10:39', 1, 1),
(17, 3, 'How can I volunteer with IGF?', '<p>Around India, IGF is backed by volunteers who are committed to making an impact with their vehement efforts. Explore our volunteer opportunities in Mumbai, Delhi NCR, and beyond, to be a part of the change. Fill out our form (link RFP form) and let us get in touch with you.</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1),
(18, 3, 'Does IGF conduct Employee Volunteering Programs?', '<p>Yes. Impact Guru Foundation conducts EVPs for the greater good of individuals and communities. The latest collaborations have been with Microsoft India and Atlassian India (Bangalore).</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1),
(19, 3, 'How to reach out to IGF?', '<p>Please call us at +91 99015 99015 or email at donorcare@impactgurufoundation.org</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1),
(20, 3, 'Where is IGF\'s office located?', '<p>Impact Guru Foundation operates out of two offices: one in Delhi and the other one in Mumbai.</p>\r\n\r\n<p>Address:</p>\r\n\r\n<p>Property No. 38 (Old) and New No. A-73 Khasra, Upper Ground Floor, Chattarpur Enclave Phase 2, Delhi- 110074</p>\r\n\r\n<p>Jai Singh Business Center, Sahar Rd, Parshiwada, Andheri East, Mumbai, Maharashtra- 400053</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-07 12:12:47', 1, 1),
(21, 3, 'Does IGF accept cash donations?', '<p>No, we don\'t accept cash or foreign donations.</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1),
(22, 3, 'How can I cancel my donation and receive a refund?', '<p>Impact Guru Foundation follows a reliable refund policy to let our donors feel privileged about their association with us. We take utmost care about processing donations as per the mandates signed by our donors in the donor forms, both offline and online. But in an unlikely event of an inaccurate deduction or if the donor wants to cancel the donation, IGF will respond within 7 working days from the date of receiving the request from the donor. The timely refund of the wrongly deduced amount will depend on the type of card used during the transaction. We would require proof of deduction of the donation amount and a written communication for a refund from the donor within 5 days after the donation.</p>\r\n', 1, '2017-06-09 03:08:25', '2022-12-06 17:58:08', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq_category`
--

CREATE TABLE `faq_category` (
  `faq_category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `status_ind` tinyint(1) NOT NULL,
  `sort_order` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `form_id` int(11) NOT NULL,
  `form_title` varchar(250) NOT NULL,
  `form_data` text NOT NULL,
  `status_ind` int(3) NOT NULL DEFAULT 0 COMMENT 'Active = 1, Inactive = 0',
  `created_by` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(140) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `category_img_path` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status_ind` int(3) NOT NULL COMMENT 'Active = 1,\r\nInactive = 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `gallery_img_id` int(11) NOT NULL,
  `image_name` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `gallery_img_path` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status_ind` int(3) NOT NULL COMMENT 'Active = 1,\r\nInactive = 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_videos`
--

CREATE TABLE `gallery_videos` (
  `gallery_video_id` int(11) NOT NULL,
  `video_name` varchar(150) NOT NULL,
  `video_gallery_id` int(11) NOT NULL,
  `gallery_video_path` varchar(255) NOT NULL,
  `video_cover_path` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status_ind` int(3) NOT NULL COMMENT 'Active = 1,\r\nInactive = 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lang_id` int(11) NOT NULL,
  `lang_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `lang_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_modified_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(11) NOT NULL,
  `display_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lang_id`, `lang_code`, `lang_name`, `status_ind`, `created_date`, `created_by`, `last_modified_date`, `modified_by`, `display_order`) VALUES
(1, 'en', 'English', 1, '0000-00-00 00:00:00', 0, '2014-04-17 01:50:27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `menuitem_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `parent_menuitem_id` int(11) DEFAULT NULL,
  `menuitem_target` varchar(255) COLLATE utf8_unicode_ci DEFAULT '_self',
  `menuitem_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menuitem_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `http_protocol` enum('http','https') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http',
  `status_ind` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL,
  `last_modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`menuitem_id`, `menu_id`, `parent_menuitem_id`, `menuitem_target`, `menuitem_link`, `menuitem_text`, `display_order`, `http_protocol`, `status_ind`, `created_date`, `last_modified_date`, `created_by`, `modified_by`) VALUES
(1, 1, NULL, '_self', 'contact-us', 'Contact Us', 5, 'http', 0, '2022-03-07 09:24:20', '2022-11-24 09:55:27', 0, 1),
(2, 1, NULL, '_self', '', 'Home', 1, 'http', 1, '2022-06-08 02:32:11', '2022-10-21 17:17:28', 0, 1),
(3, 1, 50, '_self', 'about-us', 'About IGF', 1, 'http', 1, '2022-09-07 04:43:05', '2022-12-07 06:33:27', 0, 1),
(50, 1, NULL, '_self', '#', 'Our Story', 2, 'http', 1, '2022-11-24 04:42:17', '2022-12-07 06:32:55', 0, 1),
(51, 1, 50, '_self', 'media', 'Media', 2, 'http', 0, '2022-11-24 04:43:24', '2022-12-01 16:56:24', 0, 1),
(53, 1, NULL, '_self', 'programs', 'Our Programs', 3, 'http', 0, '2022-11-24 04:49:15', '2022-12-06 06:26:10', 0, 1),
(57, 1, 50, '_self', 'awards-recognitions', 'Awards & Recognitions', 3, 'http', 0, '2022-12-01 01:18:16', '2023-01-18 10:07:04', 0, 1),
(58, 1, 50, '_self', 'media-coverage', 'Awards & Media', 2, 'http', 1, '2022-12-07 03:32:26', '2023-01-19 13:05:58', 0, 1),
(59, 1, 50, '_self', 'gallery/show_gallery/1', 'Gallery', 3, 'http', 1, '2023-01-19 12:01:44', '2023-01-19 17:01:44', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `status_ind`) VALUES
(1, 'Header Menu', 1),
(2, 'Footer Menu 1', 1),
(3, 'Footer Menu 2', 1),
(4, 'Header Top Menu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_image` tinyint(1) DEFAULT 0,
  `alt_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_id` int(11) NOT NULL DEFAULT 2,
  `page_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_caption` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `page_path` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `form_id` int(11) NOT NULL,
  `form_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `form_description` text COLLATE utf8_unicode_ci NOT NULL,
  `facilities_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_form` int(6) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_meta_tags` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `nofollow_ind` tinyint(1) DEFAULT 0,
  `noindex_ind` tinyint(1) DEFAULT 0,
  `canonical_url` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `redirection_link` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_id` int(11) NOT NULL,
  `video_gallery_id` int(11) NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Active, 0=Inactive',
  `video_link_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_cover_img_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_link_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_cover_img_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_link_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_cover_img_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `last_modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `last_modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `type_id`, `banner_image`, `video_image`, `video_url`, `display_image`, `alt_title`, `template_id`, `page_title`, `video_caption`, `page_path`, `page_slug`, `page_short_description`, `page_content`, `form_id`, `form_title`, `form_description`, `facilities_id`, `display_form`, `meta_title`, `meta_description`, `meta_keywords`, `other_meta_tags`, `nofollow_ind`, `noindex_ind`, `canonical_url`, `redirection_link`, `gallery_id`, `video_gallery_id`, `status_ind`, `video_link_1`, `video_cover_img_1`, `video_link_2`, `video_cover_img_2`, `video_link_3`, `video_cover_img_3`, `created_date`, `last_modified_date`, `created_by`, `last_modified_by`) VALUES
(2, 2, NULL, '', '', 0, 'Terms Condition', 2, 'Terms & Conditions', '', NULL, 'terms-conditions', 'Terms Condition', '<h2 style=\"text-align:center\">Terms &amp; Conditions</h2>\r\n\r\n<p style=\"text-align:left\">IMPACT GURU FOUNDATION takes your privacy seriously and treats all financial information about any transaction you have with IMPACT GURU FOUNDATION and or associated organisations as highly confidential. In addition, IMPACT GURU FOUNDATION and or associated organisations does not share e-mail addresses or phone numbers of any of our donors or constituents.</p>\r\n\r\n<p style=\"text-align:left\">IMPACT GURU FOUNDATION deeply values all contributions to sustain our mission. To protect the privacy of our donors and their special relationship with IMPACT GURU FOUNDATION, we maintain the following policies:</p>\r\n\r\n<ul style=\"margin-left:0; margin-right:0\">\r\n	<li>We may request personal information online, such as name, address, phone number, email address, and credit card number only for the purposes of accepting donations to IMPACT GURU FOUNDATION and or associated organisations.&nbsp;</li>\r\n	<li>We will not release or use this information for any other purpose unless we have your consent.</li>\r\n	<li>We do not trade or sell your personal information with other organisations.&nbsp;</li>\r\n	<li>We offer donors the option to be recognised anonymously.</li>\r\n	<li>Donors may request, at any time, to not receive our solicitations.</li>\r\n	<li>Donors may request to not receive certain mailings, such as our newsletter.</li>\r\n	<li>We do not track, collect or distribute personal information entered by those who visit our website.</li>\r\n	<li>Personal data collected through our website is encrypted using 256-bit AES (Advanced Encryption Standard) technology.</li>\r\n	<li>Personal information stored in IMPACT GURU FOUNDATION and or associated organisations database is protected with a secured login with authentication, assignment of a unique ID to each person with computer access, regular pass code changes, and user IDs are deactivated or terminated as needed.</li>\r\n	<li>Our hosting data server provides data protection meeting PCI DSS (Payment Card Industry Data Security Standard), encrypted communication via SSL (Secure Sockets Layer) technology, intrusion detection for all devices and network nodes, state-of-the-art firewall infrastructure that detects malicious application attacks, virus protection, network load balancing devices via Citrix, and patch management, security and vulnerability monitoring and tracking, and SQL server attack protection via applications to detect SQL Injection and Cross Site Scripting Attacks.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:left\">To assure that philanthropy merits the respect and trust of the general public, donors and prospective donors can have full confidence in the not-for-profit organisations and causes they are asked to support, we assure the following:</p>\r\n\r\n<ul style=\"margin-left:0; margin-right:0\">\r\n	<li>To be informed of IMPACT GURU FOUNDATION&#39;s mission, of the way IMPACT GURU FOUNDATION intends to use donated resources, and of its capacity to use donations effectively for their intended purposes.</li>\r\n	<li>Donations contributed will be used to meet the cost of relief operations of the organisation. In case of any excess funds at the end of a relief service, the funds are directed towards our core programme.</li>\r\n	<li>To be informed of the identity of those serving on IMPACT GURU FOUNDATION&#39;s governing board, and to expect the board to exercise prudent judgment in its responsibilities.</li>\r\n	<li>To have access to IMPACT GURU FOUNDATION&#39;s most recent financial statements.</li>\r\n	<li>To receive appropriate acknowledgment and recognition.</li>\r\n	<li>To be assured that information about their donations is handled with respect and with confidentiality to the extent provided by law.</li>\r\n	<li>To expect that all relationships with individuals representing IMPACT GURU FOUNDATION to the donor will be professional.&nbsp;</li>\r\n	<li>To be informed whether those seeking donations are volunteers, employees of the organisation or hired solicitors.</li>\r\n	<li>To have the opportunity for their names to be deleted from mailing lists that IMPACT GURU FOUNDATION may intend to share.</li>\r\n	<li>To feel free to ask questions when making a donation and to receive prompt, truthful and forthright answers.</li>\r\n</ul>\r\n\r\n<h4 style=\"text-align:left\">What information we collect</h4>\r\n\r\n<p style=\"text-align:left\">We use personal information collected from donors for the purposes of processing payments and communicating with donors about IMPACT GURU FOUNDATION as well as conducting fundraising and other operations of IMPACT GURU FOUNDATION and or associated organisations. This information may include name, amount donated, address, telephone number, donor comments, e- mail address, and any other personal information provided to us (&ldquo;Donor Data&rdquo;). For donations by check, donor data also includes the data visible on the cheque.</p>\r\n\r\n<p style=\"text-align:left\">Information from Payment Processors and Other Service Providers: Payment processors allow donors to give electronically using a payment services account, a credit card, or other payment method. These processors collect certain information from donors, and you should consult their privacy policies to determine their practices.</p>\r\n\r\n<p style=\"text-align:left\">To provide donors the best possible experience, we work with service providers and may share donor data and other information with, or have it transmitted through, them. Such service providers include, for example, collocation facilities and bandwidth providers as well as organisations that help non-profit organisations with fundraising.</p>\r\n\r\n<h4 style=\"text-align:left\">How we use that information</h4>\r\n\r\n<p style=\"text-align:left\">Donor data may be used for these kinds of purposes:</p>\r\n\r\n<ul style=\"margin-left:0; margin-right:0\">\r\n	<li>Distributing receipts and thanking donors for donations</li>\r\n	<li>Informing donors about upcoming fundraising and other activities of IMPACT GURU FOUNDATION and or associated organisations</li>\r\n	<li>Internal analysis, such as research and analytics</li>\r\n	<li>Record keeping</li>\r\n	<li>Reporting to applicable government agencies as required by law</li>\r\n	<li>Surveys, metrics, and other analytical purposes</li>\r\n	<li>Other purposes related to the fundraising operations</li>\r\n</ul>\r\n\r\n<p style=\"text-align:left\">Anonymous donor information may be used for promotional and fundraising activities. Comments that are provided by donors may be publicly published and may be used in promotional materials. We may use available information to supplement the donor data to improve the information we use to drive our fundraising efforts. We may allow donors the option to have their name publicly associated with their donation unless otherwise requested as part of the online donation process.</p>\r\n\r\n<p style=\"text-align:left\">We use data gathered for payment processors and other service providers only for the purposes described in this policy.</p>\r\n\r\n<h4 style=\"text-align:left\">Contact us</h4>\r\n\r\n<p style=\"text-align:left\">If you have questions about this Terms and Conditions or requests about the status and correctness of your donor data, please contact:</p>\r\n\r\n<h4 style=\"text-align:left\">IMPACT GURU FOUNDATION</h4>\r\n\r\n<p style=\"text-align:left\">Mumbai Office Address: 303, Jaisingh Business Centre, Parshiwada, Sahar Road, Chakala, Andheri East, 400099.<br />\r\nEmail:&nbsp;donorcare@impactgurufoundation.org<br />\r\nContact number:&nbsp;+91 99015 99015</p>\r\n\r\n<h4 style=\"text-align:left\">Security</h4>\r\n\r\n<p style=\"text-align:left\">We are committed to protecting donor personal information from unauthorised access, alteration, disclosure, or destruction. Among other things, we undertake a range of security practices, including measures to help secure web access to sensitive data and undertake efforts to address security vulnerabilities for various tools and databases.</p>\r\n\r\n<h4 style=\"text-align:left\">Other Disclosures</h4>\r\n\r\n<p style=\"text-align:left\">We may disclose information when required by law; when needed to protect our rights, privacy, safety, property, donors, or users; and when necessary to enforce our terms of service.</p>\r\n\r\n<h4 style=\"text-align:left\">Updates</h4>\r\n\r\n<p style=\"text-align:left\">We may change the Donor Terms and Conditions from time to time. Any and all changes will be reflected on this page. Substantive changes may also be announced through the standard mechanisms by which we communicate with our users and community. You should periodically check this page for any changes to the current terms and conditions.</p>\r\n\r\n<h4 style=\"text-align:left\">Data Retention</h4>\r\n\r\n<p style=\"text-align:left\">We seek to retain donor-related information only as needed to fulfil the purposes described in this policy unless a longer retention period is required by law or regulations. For example, tax laws in the India may require IMPACT GURU FOUNDATION and or associated organisations to keep contact information and contribution level of donors on file.</p>\r\n\r\n<h4 style=\"text-align:left\">Rights</h4>\r\n\r\n<p style=\"text-align:left\">You have certain rights with respect to the information we collect about you. Upon request, we will tell you what information we hold about you and correct any incorrect information. We will also make reasonable efforts to delete your information if you ask us to do so, unless we are otherwise required to keep it.</p>\r\n', 0, '', '', '', 0, 'Terms & Conditions, Refund & cancellation- Impactguru Foundation', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2020-05-13 00:00:00', '2023-01-20 05:00:00', 1, 1),
(3, 2, NULL, '', '', 0, 'Privacy Policy', 2, 'Privacy Policy', '', NULL, 'privacy-policy', 'Privacy Policy', '<h3 style=\"text-align:center\">Privacy Policy</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This Website is owned and operated by IMPACT GURU FOUNDATION. We recognize that visitors to our site may be concerned about the information they provide to us and how we treat that information. IMPACT GURU FOUNDATION and or associated organisations is committed to ensuring that your privacy is protected. This Privacy Policy addresses those concerns. This policy may be changed or updated from time to time. You should check this page from time to time to ensure that you are happy with any changes.</p>\r\n\r\n<p>If you have any questions about our Privacy Policy, you may contact us at:</p>\r\n\r\n<p><strong>IMPACT GURU FOUNDATION</strong></p>\r\n\r\n<p>Mumbai Office Address: 303, Jaisingh Business Centre, Parshiwada, Sahar Road, Chakala, Andheri East, 400099.</p>\r\n\r\n<p>Email:&nbsp;donorcare@impactgurufoundation.org</p>\r\n\r\n<p>Contact number:&nbsp;+91 99015 99015</p>\r\n\r\n<p><strong>Personal Information</strong></p>\r\n\r\n<p>IMPACT GURU FOUNDATION and or associated organisations uses its best efforts to respect the privacy of its online visitors. At our site, we do not collect personally identifiable information from individuals unless they provide it to us voluntarily and knowingly. This means we do not require you to register or provide information to us in order to view our website. IMPACT GURU FOUNDATION and or associated organisations only gathers personally identifiable data, such as names, addresses, zip/postal codes, e-mail addresses, etc., when voluntarily submitted by a visitor. For example, we ask for personal information on our online donation pages and use this information to acknowledge receipt of your donation and for donor profile information for tax purposes by email, or phone as per the Donor Care policy or IGF</p>\r\n\r\n<p>IMPACT GURU FOUNDATION and or associated organisations does not sell or trade such information collected to third parties. We will not share personally identifiable information with third parties unless authorized by the person submitting the information or required by law.</p>\r\n\r\n<p><strong>Credit Card Information Security</strong></p>\r\n\r\n<p>IMPACT GURU FOUNDATION and or associated organisations uses industry-standard Secure Sockets Layer (SSL) encryption to protect the security of your transaction and the confidentiality of your personal information. This makes it extremely difficult for anyone else to intercept the credit card information you send to us.</p>\r\n\r\n<p>Credit card information is not sold or traded to third parties. We will not share credit card information with third parties unless required by law.</p>\r\n\r\n<p>If you still have concerns about the security of your credit card information, contributions may also be made by sending personal cheques or money orders to:</p>\r\n\r\n<p><strong>IMPACT GURU FOUNDATION</strong></p>\r\n\r\n<p>Mumbai Office Address: 303, Jaisingh Business Centre, Parshiwada, Sahar Road, Chakala, Andheri East, 400099.</p>\r\n\r\n<p>Email:&nbsp;donorcare@impactgurufoundation.org</p>\r\n\r\n<p>Contact number:&nbsp;+91 99015 99015</p>\r\n\r\n<p><strong>Security</strong></p>\r\n\r\n<p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>\r\n\r\n<p><strong>Donations</strong></p>\r\n\r\n<p>We request information from the visitor on our donation form. A visitor must provide contact information (such as name, e-mail and mailing address) and payment information (such as credit card number and expiration date). This information is used for billing purposes and for sending receipt of the donation. If we have trouble processing a donation, the information is used by us to contact the visitor. If the visitor has given permission for the information&#39;s release, the visitor&#39;s name and contact information may be shared with carefully selected organisations and charities we feel our donors would want to know about. Where requested, we will provide information on larger donations to appropriate charities and donors for tax purposes. Financial and credit card information are never released.</p>\r\n\r\n<p>IMPACT GURU FOUNDATION uses information collected from cookies and other technologies to improve Users&#39; experience and the overall quality of Services. When showing Users tailored ads, IMPACT GURU FOUNDATION will not associate a cookie or anonymous identifier with sensitive categories, such as those based on race, religion, sexual orientation, or health.</p>\r\n\r\n<p><strong>Opt-Out</strong></p>\r\n\r\n<p>If you supply us with your postal address or e-mail address on-line you may receive periodic mailings from us with information on our programs and services. If you do not want to receive postal mail or e-mail from us in the future, please let us know by sending email to us at: info@impactgurufoundation.org&nbsp;or writing to us at the above address and telling us that you do not want to receive postal mail or e-mail from us. Some mailings are prepared well in advance, so please allow up to three months for your request to be properly reflected on our mailing lists.</p>\r\n\r\n<p><strong>Cookies</strong></p>\r\n\r\n<p>Visitors should be aware that non-personal information and data may be automatically collected by IMPACT GURU FOUNDATION&#39;s Website through the use of cookies. Cookies are small text files a website can use to recognize repeat visitors, facilitate the visitor&#39;s ongoing access to and use of the site, and allow a site to track usage behaviour and compile aggregate data that will allow content improvements. Cookies are not programs that come onto a visitor&#39;s system and damage files. Generally, cookies work by assigning a unique number to the visitor that has no meaning outside the assigning site. If a visitor does not want information collected through the use of cookies, there is a simple procedure in most browsers that allows the visitor to deny or accept the cookie feature. IMPACT GURU FOUNDATION and or associated organisations uses cookie technology only to obtain non-personal information from its online visitors in order to improve visitors&#39; online experience and facilitate their visit within our site.</p>\r\n\r\n<p><strong>External Links</strong></p>\r\n\r\n<p>This website may contain links to other sites. Unless we expressly state otherwise, IMPACT GURU FOUNDATION makes no representations whatsoever concerning the content of those sites. The fact that IMPACT GURU FOUNDATION has provided a link to a site is not an endorsement, authorization, sponsorship, or affiliation with respect to such site, its owners, or its providers. There are risks associated with using any information, software, or products found on the Internet, and IMPACT GURU FOUNDATION cautions you to make sure that you understand these risks before retrieving, using, relying upon, or purchasing anything via the Internet. In addition, we encourage our users to be aware when they leave our site to read the privacy statements of each and every website that collects personally identifiable information. These other sites may collect or solicit personal data or send their own cookies to your computer. Please be aware that IMPACT GURU FOUNDATION is not responsible for the privacy practices of other websites. Please check the privacy statements of these other sites for more information about their policies on collection and use of personal information.</p>\r\n\r\n<p><strong>Notification of Changes</strong></p>\r\n\r\n<p>If we decide to change our privacy policy, we will post those changes to this privacy statement so our visitors are always aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. We will use information in accordance with the privacy policy under which the information was collected. If, however, we are going to use visitors&#39; personally identifiable information in a manner significantly different from that stated at the time of collection we will notify visitors via e-mail and won&#39;t disclose this information unless express information is granted. However, if visitors have opted out of all communication with the site, or deleted/deactivated their account, then they will not be contacted, nor will their personal information be used in this new manner.</p>\r\n\r\n<p><strong>Sharing</strong></p>\r\n\r\n<p>Legal Disclaimer, though we make a good faith effort to preserve visitor privacy, we may need to disclose personal information when required by law wherein we have a good-faith belief that such action is necessary to comply with a current judicial proceeding, a court order or legal process served on our website.</p>\r\n\r\n<p><strong>Links</strong></p>\r\n\r\n<p>This website may contain links to other websites of interest. Please be aware that once you have used these links to leave our website you should note that we, do not, have any control over and are not responsible for the content or privacy practices of such other websites. We encourage our visitors to be aware when they leave our site, they are required to read the privacy statements of each and every website they visit. This privacy statement applies solely to information collected by this website.</p>\r\n\r\n<p><strong>Interactive Features</strong></p>\r\n\r\n<p>From time to time our site requests information from visitors via interactive features, such as surveys or quizzes. Participation in these features is completely voluntary and the visitor therefore has a choice whether or not to disclose this information. The requested information typically includes contact information (such as name and e-mail), and information on the visitor&#39;s interests. Survey information will be used for purposes of monitoring or improving the use and satisfaction of this site and providing pertinent information to participants. Visitors&#39; personally identifiable information is not shared with third parties.</p>\r\n\r\n<p><strong>Referrals</strong></p>\r\n\r\n<p>If a visitor elects to use our referral service for informing a friend about our site, we ask them for the friend&#39;s name and e-mail address. IMPACT GURU FOUNDATION will automatically send the friend a one-time e-mail with an introduction to IMPACT GURU FOUNDATION and an invitation to visit the site. The one-time e-mail will include the name of the person making the referral. IMPACT GURU FOUNDATION stores this information for the sole purpose of sending this one-time e-mail and tracking the success of our referral program. The friend may contact IMPACT GURU FOUNDATION at unsubscribe info@impactgurufoundation.org to request the removal of this information from our database.</p>\r\n', 0, '', '', '', 0, 'Privacy Policy Statement - Impact Guru Foundation', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2020-05-13 00:00:00', '2023-01-20 05:00:00', 1, 1),
(13, 0, 'banner_7971792.jpg', '', '', 1, 'Contact Us', 8, 'Contact Us', '', NULL, 'contact-us', '', '', 0, '', '', '', 0, 'Hare Krishna Mandir Ahmedabad - Contact Us', 'Contact : Hare Krishna Movement Ahmedabad, Opp. Ahmedabad Dental College, Santej Village, Kalol, Gandhinagar, Gujarat - 382721\r\nPh : +91 92280 23235 ', 'contact us, hare krishna movement ahmedabad, iskcon, food donation, donate for food, gaushala donation online, online donation for gaushala, temple donation, iskcon donation for cows', '', 0, 0, 'https://harekrishnamandir.org/contact-us', '', 0, 0, 1, '', '', '', '', '', '', '2022-03-02 00:00:00', '2022-12-14 05:00:00', 1, 1),
(30, 0, 'banner_2886283.jpg', '', '', 1, '', 8, 'Image Gallery', '', NULL, 'image-gallery', '', '', 0, '', '', '', 0, 'Image Gallery - Hare Krishna Mandir Ahmedabad 					', 'Hare Krishna Mandir Ahmedabad celebrates various festivals that spread blissful spiritual fragrance. CLICK to know about our Festivals, Darshans and Updates', 'image gallery of hare krishna mandir ahmedabad, Hare Krishna Mandir Ahmedabad, iskcon ahmedabad, krishna mandir images, radha madhav images, krishna images, festival images, daily darshan images, temple updates', '', 0, 0, 'https://harekrishnamandir.org/image-gallery', '', 0, 0, 1, '', '', '', '', '', '', '2022-03-18 00:00:00', '2022-05-30 04:00:00', 1, 3),
(33, 2, NULL, '', '', 0, '', 2, 'Donation Cancellation and Refund Policy ', '', NULL, 'donation-cancellation-and-refund-policy', '', '<h2 style=\"text-align:center\">Donation Cancellation and Refund Policy</h2>\r\n\r\n<p style=\"text-align:left\">IMPACT GURU FOUNDATION and or associated organisations deeply values all contributions to sustain our mission. However, in the event when you want to cancel your donation, we take care of making it a smooth transaction. IMPACT GURU FOUNDATION follows a reliable refund policy to let our donors feel privileged about their association with us. We take utmost care about processing donations as per the mandates signed by our donors in the donor forms, both offline and online. But in case of an unlikely event of an erroneous deduction or if the donor wants to cancel/deduct the donation, IMPACT GURU FOUNDATION will respond within 7 working days from the date of receiving the request from donor. The timely refund of the wrongly deduced amount will depend on type of card used during transaction. We would require a proof of deduction of the donation amount and a written communication for refund from the donor within two days after donation.</p>\r\n\r\n<p style=\"text-align:left\">If the 10bd already has been issued, refund of the donation amount will not be applicable and in other cases will refund the donation amount after deducting the donation processing charges(per the payment gateway service charges).</p>\r\n\r\n<h4 style=\"text-align:left\">IMPACT GURU FOUNDATION</h4>\r\n\r\n<p style=\"text-align:left\">Mumbai Office Address: 303, Jaisingh Business Centre, Parshiwada, Sahar Road, Chakala, Andheri East, 400099<br />\r\nEmail:&nbsp;donorcare@impactgurufoundation.org<br />\r\nContact number:&nbsp;+91 99015 99015</p>\r\n\r\n<p style=\"text-align:left\">In the case of tax exemption certificate already issued, refund will not be possible.<br />\r\nWe can be contacted for refund request through the following ways:<br />\r\nMumbai Office Address: 303, Jaisingh Business Centre, Parshiwada, Sahar Road, Chakala, Andheri East, 400099<br />\r\nEmail:&nbsp;donorcare@impactgurufoundation.org<br />\r\nContact number:&nbsp;+91 99015 99015</p>\r\n', 0, '', '', '', 0, 'Cancellation & Refund Policy - Impact Guru Foundation', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2022-03-29 00:00:00', '2023-01-20 05:00:00', 1, 1),
(36, 0, 'banner_1862177.jpg', '', '', 1, 'About us', 8, 'About Us', '', NULL, 'about-us', '', '<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-lg-4\"><img alt=\"\" class=\"img-right-side\" src=\"./asset/image/ab-video-poster.jpg\" /></div>\r\n\r\n<div class=\"col-12 col-lg-4\">\r\n<div class=\"middle-para\">Fundraising experience for your donors\r\n<h4>Helping each other can make world better</h4>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et simply free text dolore magna aliqua lonm andhn.</p>\r\n\r\n<ul>\r\n	<li><em>Making this the first true generator on the Interne</em></li>\r\n	<li><em>Lorem Ipsum is not simply random text</em></li>\r\n	<li><em>If you are going to use a passage</em></li>\r\n	<li><em>It has roots in a piece</em></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-4\">\r\n<div class=\"right-side-para\">\r\n<div class=\"number-side\">\r\n<h5>6,478</h5>\r\nVolunteers In 2020\r\n\r\n<div class=\"hr\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"number-side\">\r\n<h5>2,348,195</h5>\r\nPeople We Helped In 2020\r\n\r\n<div class=\"hr\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"number-side\">\r\n<h5>$16M</h5>\r\nFunds We Collected</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<div>REGISTRATION AND TICKETING MADE EASY\r\n<h4>Join the community to give education for children</h4>\r\nDISCOVER MORE</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!-- owl caroual -->\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<div class=\"client-container\">\r\n<div class=\"owl-carousel owl-theme\" id=\"owl-carousel\">\r\n<div class=\"item\"><img alt=\"\" src=\"./asset/image/pics/pmr-logo-1.png\" /></div>\r\n\r\n<div class=\"item\"><img alt=\"\" src=\"./asset/image/pics/pmr-logo-2.png\" /></div>\r\n\r\n<div class=\"item\"><img alt=\"\" src=\"./asset/image/pics/pmr-logo-3.png\" /></div>\r\n\r\n<div class=\"item\"><img alt=\"\" src=\"./asset/image/pics/pmr-logo-4.png\" /></div>\r\n\r\n<div class=\"item\"><img alt=\"\" src=\"./asset/image/pics/pmr-logo-5.png\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!--  -->\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-lg-5\">\r\n<div class=\"sec-4-right-side\">\r\n<h6>Fundraising experience for your donors</h6>\r\n\r\n<h2>Helping each other can make world better</h2>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-6\">\r\n<div class=\"sec-4-left-side\">\r\n<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et simply free text dolore magna aliqua lonm andhn.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-1\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"row section-70\">\r\n<div class=\"col-12 col-lg-5\">\r\n<div class=\"card-sec-4\">\r\n<div class=\"card-img-sec\">&nbsp;</div>\r\n\r\n<div class=\"card-sec-para\">\r\n<div class=\"align-items-center d-flex float-right\">Explore</div>\r\n\r\n<h3>Donation</h3>\r\n\r\n<div>\r\n<p>Lorem ipsum dolor sit ame consect etur pisicing elit sed do eiusmod.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"card-sec-4\">\r\n<div class=\"card-img-sec\">&nbsp;</div>\r\n\r\n<div class=\"card-sec-para\">\r\n<div class=\"align-items-center d-flex float-right\">Explore</div>\r\n\r\n<h3>Fundraising</h3>\r\n\r\n<div>\r\n<p>Lorem ipsum dolor sit ame consect etur pisicing elit sed do eiusmod.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"card-sec-4\">\r\n<div class=\"card-img-sec\">&nbsp;</div>\r\n\r\n<div class=\"card-sec-para\">\r\n<div class=\"align-items-center d-flex float-right\">Explore</div>\r\n\r\n<h3>Events</h3>\r\n\r\n<div>\r\n<p>Lorem ipsum dolor sit ame consect etur pisicing elit sed do eiusmod.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-7\"><img alt=\"\" class=\"img-fluid sec-about-4-img\" src=\"./asset/image/ab-services-img.jpg\" /></div>\r\n</div>\r\n</div>\r\n<!--  -->\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-lg-4\">\r\n<div class=\"team-member-left-side\">\r\n<h3>Meet Spire Expert Agents</h3>\r\n\r\n<p>Fundraising experience for your donors</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-12 col-lg-8\">\r\n<div class=\"team-member-right-side\">\r\n<div class=\"owl-carousel owl-theme team-member-carousel\" id=\"team-member-carousel\">\r\n<div class=\"item\">\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./asset/image/team1.jpg\" /></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<h3>Alexandra Trab</h3>\r\n\r\n<p>Support Staff</p>\r\n\r\n<div class=\"item\">\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./asset/image/team2.jpg\" /></p>\r\n</div>\r\n\r\n<h3>Alexandra Trab</h3>\r\n\r\n<p>Support Staff</p>\r\n\r\n<div class=\"item\">\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./asset/image/team3.jpg\" /></p>\r\n</div>\r\n\r\n<h3>Alexandra Trab</h3>\r\n\r\n<p>Support Staff</p>\r\n\r\n<div class=\"item\">\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./asset/image/team4.jpg\" /></p>\r\n</div>\r\n\r\n<h3>Alexandra Trab</h3>\r\n\r\n<p>Support Staff</p>\r\n\r\n<div class=\"item\">\r\n<p><img alt=\"\" class=\"img-fluid\" src=\"./asset/image/team5.jpg\" /></p>\r\n</div>\r\n\r\n<h3>Alexandra Trab</h3>\r\n\r\n<p>Support Staff</p>\r\n', 0, '', '', '', 0, 'About Us', '', '', '', 0, 0, '', '', 0, 0, 1, 'https://www.youtube.com/watch?v=8tehy8DCY80', 'video_cover_img_1_3566579.jpg', 'https://www.youtube.com/watch?v=J46i5t1abWE', 'video_cover_img_2_1127223.jpg', 'https://www.youtube.com/watch?v=S_EnfnPhiKM', 'video_cover_img_3_1395614.jpg', '2022-04-20 00:00:00', '2023-01-19 05:00:00', 1, 1),
(43, 0, NULL, '', '', 0, '', 8, 'Thankyou', '', NULL, 'thankyou-2', '', '', 0, '', '', '', 0, '', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2022-06-27 00:00:00', '2022-08-23 04:00:00', 1, 2),
(46, 1, NULL, '', '', 0, '', 1, 'Home', '', NULL, 'home', '', '', 0, '', '', '', 0, '', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2022-10-21 00:00:00', '2022-10-21 16:53:53', 1, NULL),
(53, 0, 'banner_5372575.jpg', '', '', 1, '', 8, 'Donate Now', '', NULL, 'donate-now', '', '', 0, '', '', '', 0, '', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2022-12-02 00:00:00', '2022-12-15 05:00:00', 1, 1),
(56, 0, 'banner_4038029.jpg', '', '', 1, '', 8, 'FAQ\'s', '', NULL, 'faqs', '', '', 0, '', '', '', 0, '', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2022-12-06 00:00:00', '2022-12-15 05:00:00', 1, 1),
(57, 0, 'banner_2090377.jpg', '', '', 1, '', 8, 'Media Coverage', '', NULL, 'media-coverage', '', '', 0, '', '', '', 0, '', '', '', '', 0, 0, '', '', 0, 0, 1, '', '', '', '', '', '', '2022-12-07 00:00:00', '2023-01-25 05:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_types`
--

CREATE TABLE `page_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `widget_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `type_status` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `last_modified_by` int(11) NOT NULL,
  `widget_exit` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_types`
--

INSERT INTO `page_types` (`type_id`, `type_name`, `view_path`, `widget_path`, `model_name`, `value_field`, `text_field`, `status_ind`, `type_status`, `created_date`, `last_modified_date`, `created_by`, `last_modified_by`, `widget_exit`) VALUES
(1, 'Home', '', NULL, '', '', '', 1, 1, '0000-00-00 00:00:00', '2020-04-28 18:57:06', 1, 0, 0),
(2, 'Content Page', 'pages/page', 'templates/includes/common/widgets/page', 'pages_model', 'page_id', 'page_title', 1, 0, '0000-00-00 00:00:00', '2021-06-25 17:29:50', 1, 0, 0),
(3, 'About Us Page', 'about_us/page', 'templates/includes/common/widgets/page', 'pages_model', 'page_id', 'page_title', 1, 0, '0000-00-00 00:00:00', '2021-09-04 15:54:59', 1, 0, 0),
(4, 'Contact Us Page', 'contact_us/page', 'templates/includes/common/widgets/page', 'pages_model', 'page_id', 'page_title', 1, 0, '0000-00-00 00:00:00', '2021-09-04 15:54:55', 1, 0, 0),
(10, 'Gallery Page', 'gallery/page', 'templates/includes/common/widgets/page', 'gallery_model', 'page_id', 'page_title', 1, 0, '0000-00-00 00:00:00', '2021-11-16 16:17:15', 1, 0, 0),
(11, 'Video Gallery Page', 'video_gallery/page', 'templates/includes/common/widgets/page', 'gallery_model', 'page_id', 'page_title', 1, 0, '0000-00-00 00:00:00', '2021-11-16 16:17:15', 1, 0, 0),
(12, 'Charitable Program', 'charitable_program/page', 'templates/includes/common/widgets/page', 'charitable_programs_model', 'page_id', 'page_title', 1, 0, '2022-05-17 02:12:41', '2022-05-17 00:42:41', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `full_name` varchar(180) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pan_number` varchar(80) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `dob` varchar(120) NOT NULL,
  `frcode` varchar(120) NOT NULL,
  `amount` int(11) NOT NULL,
  `duration` varchar(180) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `error_Message` varchar(255) NOT NULL,
  `easepayid` varchar(255) NOT NULL,
  `addedon` varchar(255) NOT NULL,
  `cash_back_percentage` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `txnid` varchar(255) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `bank_ref_num` varchar(255) NOT NULL,
  `authorization_status` varchar(255) NOT NULL,
  `auto_debit_access_key` varchar(255) NOT NULL,
  `upi_va` varchar(255) NOT NULL,
  `customer_authentication_id` varchar(255) NOT NULL,
  `auto_debit_auth_msg` varchar(255) NOT NULL,
  `auto_debit_auth_error` varchar(255) NOT NULL,
  `udf1` varchar(255) NOT NULL,
  `udf5` varchar(255) NOT NULL,
  `error` varchar(255) NOT NULL,
  `deduction_percentage` varchar(120) NOT NULL,
  `invoice_file` varchar(255) NOT NULL,
  `order_status` varchar(80) NOT NULL,
  `currency` varchar(122) NOT NULL,
  `programme` varchar(160) NOT NULL,
  `campaign` varchar(100) NOT NULL,
  `chapter` varchar(200) NOT NULL,
  `citizen` varchar(100) NOT NULL,
  `payment_date` datetime NOT NULL,
  `order_id` varchar(180) NOT NULL,
  `receipt` varchar(180) NOT NULL,
  `razorpay_order_id` varchar(200) NOT NULL,
  `razorpay_payment_id` varchar(150) NOT NULL,
  `razorpay_signature` text NOT NULL,
  `error_code` varchar(150) NOT NULL,
  `error_description` varchar(255) NOT NULL,
  `error_reason` varchar(200) NOT NULL,
  `error_source` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `entity` varchar(100) NOT NULL,
  `status` varchar(120) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `amount_paid` varchar(120) NOT NULL,
  `amount_due` varchar(120) NOT NULL,
  `donation_period` varchar(122) NOT NULL,
  `payment_method` varchar(150) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `page_slug` varchar(189) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rzp_customers`
--

CREATE TABLE `rzp_customers` (
  `customer_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `entity` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pan` varchar(150) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `pincode` varchar(120) DEFAULT NULL,
  `amount` varchar(100) NOT NULL,
  `programme` varchar(120) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text',
  `setting_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `status_ind` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `type`, `setting_key`, `setting_name`, `setting_value`, `display_order`, `status_ind`) VALUES
(1, 'text', 'logo_link', 'Logo Link', '', 3, 1),
(2, 'image', 'logo_image', 'Logo Image', 'igflogo.png', 2, 1),
(5, 'text', 'toll_free_time', 'Toll Free Number', '+91 99015 99015', 4, 1),
(6, 'radiobutton', 'share_this_page_active', 'Share this page active', '1', 17, 1),
(7, 'text', 'facebook_link', 'Facebook Link', 'https://www.facebook.com/profile.php?id=100087681101311', 8, 1),
(8, 'text', 'twitter_link', 'Twitter Link', 'https://twitter.com/IG_Foundation', 9, 1),
(9, 'text', 'youtube_link', 'Youtube Link', 'https://www.youtube.com/c/impactgurufoundation', 10, 1),
(10, 'text', 'flickr_link', 'Flickr Link', '', 11, 1),
(11, 'text', 'google_plus', 'Google Plus Link', '', 12, 1),
(12, 'text', 'rss_feed_link', 'Rss Feed Link', '', 13, 1),
(13, 'text', 'linked_in_link', 'Linked In', 'https://www.linkedin.com/company/impact-guru-foundation/', 14, 1),
(14, 'text', 'instagram_link', 'Instagram Link', 'https://www.instagram.com/impactgurufoundation/', 15, 1),
(23, 'text', 'copy_right', 'Copy Right', 'Copyright  ©2023 Impact Guru Foundation. All Rights Reserved', 16, 1),
(26, 'textarea', 'office_address', 'Office Address', '<p>Head Office: 303, Jaisingh Business Centre, Parshiwada, Sahar Road, Chakala, Andheri East, 400099</p>\r\n', 6, 1),
(27, 'text', 'email', 'Email', 'donorcare@impactgurufoundation.org', 5, 1),
(28, 'image', 'footer_logo_image', 'Footer Logo Image', '', 7, 1),
(29, 'text', 'company_name', 'Company Name', 'Impact Guru Foundation', 1, 1),
(30, 'textarea', 'about_description', 'Description', '<p>Head Office: 303, Jaisingh Business Centre, Parshiwada, Sahar Road, Chakala, Andheri East, 400099</p>\r\n', 2, 1),
(31, 'image', 'favicon_image', 'Fav Icon', 'IGF_FAV_Logo.png', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `preference_state` int(11) NOT NULL DEFAULT 0,
  `status_ind` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `no_of_kitchens` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `no_of_schools` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `no_of_childrens` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `kitchen_state` smallint(6) NOT NULL DEFAULT 0,
  `state_desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `state_code`, `country_id`, `preference_state`, `status_ind`, `created_date`, `modified_date`, `created_by`, `modified_by`, `latitude`, `longitude`, `no_of_kitchens`, `no_of_schools`, `no_of_childrens`, `kitchen_state`, `state_desc`) VALUES
(1, 'Karnataka', 'KA', 1, 1, 1, '2013-12-19 13:19:13', '2020-08-13 10:17:20', NULL, 2, '15.317277', '75.713888', '75.713888', '2629', '463682', 1, ''),
(2, 'Gujarat', 'GJ', 1, 1, 1, '2013-12-19 13:19:13', '2015-08-19 00:48:04', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(3, 'Goa', 'GA', 1, 0, 1, '2013-12-19 13:19:13', '2015-08-19 00:48:10', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(4, 'Tamilnadu', 'TN', 1, 0, 1, '2013-12-19 13:19:13', '2015-08-19 00:48:38', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(5, 'Delhi', 'DL', 1, 0, 1, '2013-12-19 13:19:13', '2015-08-19 00:48:44', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(6, 'Jammu Kashmir', 'JK', 1, 0, 1, '2013-12-19 13:19:13', '2015-08-19 00:48:49', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(7, 'Kerala', 'KL', 1, 0, 1, '2013-12-19 13:19:13', '2015-08-19 00:48:54', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(8, 'Andhra Pradesh', 'AP', 1, 1, 1, '2013-12-19 13:19:13', '2015-08-19 00:48:58', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(9, 'Rajasthan', 'RJ', 1, 1, 1, '2013-12-19 13:19:13', '2015-08-19 00:49:02', NULL, 1, '0', '0', '0', '0', '0', 0, ''),
(21, 'Assam', 'AS', 1, 1, 1, '2014-05-09 12:43:11', '2015-08-19 00:52:49', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(22, 'Chhattisgarh', 'CT', 1, 1, 1, '2014-05-09 12:43:29', '2015-08-19 00:52:55', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(23, 'Odisha', 'OR', 1, 1, 1, '2014-05-09 12:43:37', '2015-08-19 00:55:09', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(24, 'Uttar Pradesh', 'UP', 1, 1, 1, '2014-05-09 12:44:04', '2015-08-19 00:55:20', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(26, 'Arunachal Pradesh', 'AR', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:55:26', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(27, 'Bihar', 'BR', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:55:33', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(29, 'Haryana', 'HR', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:55:39', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(30, 'Himachal Pradesh', 'HP', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:55:43', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(31, 'Jharkhand', 'JH', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:55:50', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(32, 'Madhya Pradesh', 'MP', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:55:57', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(33, 'Maharashtra', 'MH', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:56:09', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(34, 'Manipur', 'MN', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:56:33', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(35, 'Meghalaya', 'ML', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:56:39', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(36, 'Mizoram', 'MZ', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:56:45', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(37, 'Nagaland', 'NL', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:56:53', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(38, 'Punjab', 'PB', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:56:59', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(39, 'Sikkim', 'SK', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:05', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(41, 'Tripura', 'TR', 1, 1, 1, '2014-05-09 12:44:04', '2019-01-16 00:43:34', 1, 1, '', '', '', '', '', 0, ''),
(42, 'Uttarakhand', 'UT', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:19', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(43, 'West Bengal', 'WB', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:26', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(44, 'Telangana', 'TG', 1, 1, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:31', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(63, 'Andaman and Nicobar Islands', 'AN', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:31', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(64, 'Chandigarh', 'CH', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:31', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(65, 'Dadra and Nagar Haveli', 'DN', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:31', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(66, 'Daman and Diu', 'DD', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:31', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(67, 'Lakshadweep', 'LD', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:31', 1, 1, '0', '0', '0', '0', '0', 0, ''),
(68, 'Puducherry', 'PY', 1, 0, 1, '2014-05-09 12:44:04', '2015-08-19 00:57:31', 1, 1, '0', '0', '0', '0', '0', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `subscribe_email` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `template_id` int(11) NOT NULL,
  `template_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_ind` tinyint(1) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT NULL,
  `allow_customize` int(1) DEFAULT NULL COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`template_id`, `template_name`, `template_path`, `status_ind`, `created_date`, `allow_customize`) VALUES
(1, 'Home Template', 'templates/home', 1, '2017-05-18 18:30:00', 1),
(2, 'Inner Page Template', 'templates/inner_page', 1, '2017-05-18 18:30:00', 1),
(8, 'Custom Page Template', 'templates/custom_page', 1, '2017-05-18 18:30:00', 1),
(9, 'Gallery Page Template', 'templates/gallery_page', 1, '2017-05-18 13:00:00', 1),
(10, 'Donation Page Template', 'templates/campaigns/campaign_home', 1, '2017-05-18 13:00:00', 1),
(11, 'Video Gallery Page Template', 'templates/video_gallery_page', 1, '2017-05-18 13:00:00', 1),
(12, 'Charitable Program Template', 'templates/charitable_program_page', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonials_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `products_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `status_ind` int(5) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `testimonials_image` varchar(255) NOT NULL,
  `testimonials_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test_payments`
--

CREATE TABLE `test_payments` (
  `id` int(11) NOT NULL,
  `full_name` varchar(180) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pan_number` varchar(80) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `dob` varchar(120) NOT NULL,
  `frcode` varchar(120) NOT NULL,
  `amount` int(11) NOT NULL,
  `duration` varchar(180) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `error_Message` varchar(255) NOT NULL,
  `easepayid` varchar(255) NOT NULL,
  `addedon` varchar(255) NOT NULL,
  `cash_back_percentage` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `txnid` varchar(255) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `bank_ref_num` varchar(255) NOT NULL,
  `authorization_status` varchar(255) NOT NULL,
  `auto_debit_access_key` varchar(255) NOT NULL,
  `upi_va` varchar(255) NOT NULL,
  `customer_authentication_id` varchar(255) NOT NULL,
  `auto_debit_auth_msg` varchar(255) NOT NULL,
  `auto_debit_auth_error` varchar(255) NOT NULL,
  `udf1` varchar(255) NOT NULL,
  `udf5` varchar(255) NOT NULL,
  `error` varchar(255) NOT NULL,
  `deduction_percentage` varchar(120) NOT NULL,
  `invoice_file` varchar(255) NOT NULL,
  `order_status` varchar(80) NOT NULL,
  `currency` varchar(122) NOT NULL,
  `programme` varchar(160) NOT NULL,
  `campaign` varchar(100) NOT NULL,
  `chapter` varchar(200) NOT NULL,
  `citizen` varchar(100) NOT NULL,
  `payment_date` datetime NOT NULL,
  `order_id` varchar(180) NOT NULL,
  `receipt` varchar(180) NOT NULL,
  `razorpay_order_id` varchar(200) NOT NULL,
  `razorpay_payment_id` varchar(150) NOT NULL,
  `razorpay_signature` text NOT NULL,
  `error_code` varchar(150) NOT NULL,
  `error_description` varchar(255) NOT NULL,
  `error_reason` varchar(200) NOT NULL,
  `error_source` varchar(255) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `entity` varchar(100) NOT NULL,
  `status` varchar(120) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `amount_paid` varchar(120) NOT NULL,
  `amount_due` varchar(120) NOT NULL,
  `donation_period` varchar(122) NOT NULL,
  `payment_method` varchar(150) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `page_slug` varchar(189) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `video_gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(120) NOT NULL,
  `gallery_video_path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status_ind` int(3) NOT NULL COMMENT 'Active = 1,\r\nInactive = 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `widget_id` int(11) NOT NULL,
  `template_id` int(11) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `widget_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `content_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `content_image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `widget_type` int(11) DEFAULT NULL,
  `widget_content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_target` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self',
  `widget_url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_tittle` tinyint(1) DEFAULT 1 COMMENT '1=display,0=hide',
  `display_order` int(11) DEFAULT NULL,
  `link_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `widget_no` int(11) DEFAULT NULL,
  `page_wise_widgets` int(11) DEFAULT 0,
  `status_ind` tinyint(1) DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `allow_customize` tinyint(1) DEFAULT 1 COMMENT '1=editable,0=noteditable',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `last_modified_date` datetime NOT NULL,
  `news_events` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widget_areas`
--

CREATE TABLE `widget_areas` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `area_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_ind` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menuitems`
--
ALTER TABLE `admin_menuitems`
  ADD PRIMARY KEY (`menuitem_id`),
  ADD KEY `admin_menuitems_ibfk_2` (`parent_menuitem_id`),
  ADD KEY `admin_menuitems_ibfk_1` (`menu_id`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `admin_roles_accesses`
--
ALTER TABLE `admin_roles_accesses`
  ADD KEY `admin_roles_accesses_ibfk_1` (`role_id`),
  ADD KEY `admin_roles_accesses_ibfk_2` (`menuitem_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin_users_accesses`
--
ALTER TABLE `admin_users_accesses`
  ADD KEY `admin_users_accesses_ibfk_1` (`user_id`),
  ADD KEY `admin_users_accesses_ibfk_2` (`menuitem_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`campaign_id`);

--
-- Indexes for table `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `charitable_programs`
--
ALTER TABLE `charitable_programs`
  ADD PRIMARY KEY (`charitable_program_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD UNIQUE KEY `country_id` (`country_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `faq_category`
--
ALTER TABLE `faq_category`
  ADD PRIMARY KEY (`faq_category_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`gallery_img_id`);

--
-- Indexes for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  ADD PRIMARY KEY (`gallery_video_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD PRIMARY KEY (`menuitem_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `parent_menuitem_id` (`parent_menuitem_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD UNIQUE KEY `unique_slug` (`page_slug`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `page_types`
--
ALTER TABLE `page_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rzp_customers`
--
ALTER TABLE `rzp_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`template_id`),
  ADD KEY `template_id` (`template_id`);

--
-- Indexes for table `test_payments`
--
ALTER TABLE `test_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`video_gallery_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menuitems`
--
ALTER TABLE `admin_menuitems`
  MODIFY `menuitem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charitable_programs`
--
ALTER TABLE `charitable_programs`
  MODIFY `charitable_program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `gallery_img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  MODIFY `gallery_video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menuitems`
--
ALTER TABLE `menuitems`
  MODIFY `menuitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `page_types`
--
ALTER TABLE `page_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rzp_customers`
--
ALTER TABLE `rzp_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `test_payments`
--
ALTER TABLE `test_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `video_gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

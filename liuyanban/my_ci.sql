-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 01 月 26 日 07:39
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `my_ci`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `password` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `ci`
--

CREATE TABLE `ci` (
  `id` int(4) NOT NULL auto_increment,
  `username` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `times` datetime NOT NULL,
  `picture` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `title` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `content` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- 导出表中的数据 `ci`
--

INSERT INTO `ci` (`id`, `username`, `times`, `picture`, `title`, `content`) VALUES
(58, '哈哈', '2010-01-26 15:36:20', 'pic1.gif', '哈哈', '哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈'),
(59, '哈哈 哈哈 哈哈', '2010-01-26 15:36:32', 'pic2.gif', '哈哈 哈哈 哈哈', '哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 哈哈 '),
(60, '哈哈 哈哈 哈哈 ', '2010-01-26 15:36:46', 'pic3.gif', ' 哈哈 哈哈 ', ' 哈哈 哈哈  哈哈 哈哈  哈哈 哈哈  哈哈 哈哈  哈哈 哈哈  哈哈 哈哈  哈哈 哈哈  哈哈 哈哈  哈哈 哈哈  哈哈 哈哈 '),
(62, ' 哈哈 哈哈  哈哈', '2010-01-26 15:37:04', 'pic4.gif', ' 哈哈 哈哈 ', ' 哈哈 哈哈  哈哈 哈哈  哈哈 哈 哈哈 哈哈  哈哈 哈哈  哈哈 哈哈 哈  哈哈 哈哈 '),
(63, '大家膜拜我吧', '2010-01-26 15:37:31', 'pic1.gif', '大家膜拜我吧', '大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 '),
(64, '大家膜拜我吧 ', '2010-01-26 15:37:38', 'pic2.gif', '大家膜拜我吧 ', '大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 '),
(65, '大家膜拜我吧 ', '2010-01-26 15:37:47', 'pic3.gif', '大家膜拜我吧 ', '大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 '),
(66, '大家膜拜我吧 ', '2010-01-26 15:37:52', 'pic4.gif', '大家膜拜我吧 ', '大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 大家膜拜我吧 '),
(67, '葬', '2010-01-26 15:38:07', 'pic1.gif', '葬', '葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 '),
(68, '葬 ', '2010-01-26 15:38:13', 'pic2.gif', '葬 ', '葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 '),
(69, '葬 ', '2010-01-26 15:38:19', 'pic3.gif', '葬 ', '葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 '),
(70, '葬 ', '2010-01-26 15:38:25', 'pic4.gif', '葬 ', '葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 葬 ');

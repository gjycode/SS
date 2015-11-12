-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 06 月 04 日 16:11
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ss`
--
CREATE DATABASE `ss` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ss`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `value` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `userpwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`value`, `username`, `userpwd`) VALUES
('admin', '管理员', '123');

-- --------------------------------------------------------

--
-- 表的结构 `connect`
--

CREATE TABLE IF NOT EXISTS `connect` (
  `con_id` int(3) NOT NULL AUTO_INCREMENT,
  `judges_id` int(3) NOT NULL,
  `contestant_id` int(3) NOT NULL,
  `first` float NOT NULL,
  `second` float NOT NULL,
  `third` float NOT NULL,
  `score_array` varchar(100) NOT NULL,
  `lastscore` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `connect`
--

INSERT INTO `connect` (`con_id`, `judges_id`, `contestant_id`, `first`, `second`, `third`, `score_array`, `lastscore`) VALUES
(49, 1, 1, 123, 12, 2, '', 137),
(50, 3, 1, 12, 2, 33, '', 47),
(52, 3, 3, 2, 3, 4, '', 9),
(58, 1, 3, 5, 4, 8, '', 17);

-- --------------------------------------------------------

--
-- 表的结构 `contestant`
--

CREATE TABLE IF NOT EXISTS `contestant` (
  `userid` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `userclass` varchar(50) NOT NULL,
  `intro` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `contestant`
--

INSERT INTO `contestant` (`userid`, `username`, `userclass`, `intro`) VALUES
(1, 'gfdgss', 'gfdgssgfdgss', 'gfdgssgfdgssgfdgssgfdgss'),
(3, '风动旛动', '多发点', '对方答复'),
(4, '方的观点', '梵蒂冈的风格', '上的分公司答复');

-- --------------------------------------------------------

--
-- 表的结构 `judges`
--

CREATE TABLE IF NOT EXISTS `judges` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `userpwd` varchar(25) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `judges`
--

INSERT INTO `judges` (`userid`, `value`, `username`, `userpwd`) VALUES
(1, 'judges', '高规', '12345'),
(3, 'judges', '灌灌灌灌', 'ddddd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

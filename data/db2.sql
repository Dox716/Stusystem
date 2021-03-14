-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 06 月 08 日 13:43
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db2`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `info` varchar(50) NOT NULL COMMENT '个人信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `pwd`, `info`) VALUES
(1, 'admin', 'admin', '超级管理者'),
(2, 'ray', '123456', '第二管理者');

-- --------------------------------------------------------

--
-- 表的结构 `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL COMMENT '作者',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `content` varchar(200) NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `note`
--

INSERT INTO `note` (`id`, `author`, `title`, `content`) VALUES
(1, 'user', '建议', '界面美化'),
(2, 'faker', '体验感觉', '良好'),
(4, 'ABI', '字体', '界面也太丑了吧'),
(6, 'RRR', 'RRR', 'RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR'),
(7, 'TTT', 'TTT', 'TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT');

-- --------------------------------------------------------

--
-- 表的结构 `stu`
--

CREATE TABLE IF NOT EXISTS `stu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '学号',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `gender` varchar(1) NOT NULL COMMENT '性别',
  `email` varchar(20) NOT NULL COMMENT '邮箱',
  `wechat` varchar(20) NOT NULL COMMENT '微信',
  `tel` varchar(20) NOT NULL COMMENT '电话',
  `site` varchar(50) NOT NULL COMMENT '籍贯',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='学生信息' AUTO_INCREMENT=100 ;

--
-- 转存表中的数据 `stu`
--

INSERT INTO `stu` (`id`, `name`, `gender`, `email`, `wechat`, `tel`, `site`) VALUES
(1, 'QQQ', '男', 'QQQ@qq.com', 'QQQ', '123', '北京'),
(99, 'UUU', '男', 'UUU@qq.com', 'UUUUUU', '589589', '挪威');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `tel` varchar(50) NOT NULL COMMENT '电话',
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `pwd`, `email`, `tel`, `gender`) VALUES
(1, 'user', '123456', '123456@qq.com', '123456123456', '男'),
(2, 'faker', '654321', '654321@qq.com', '654321654321', '女'),
(3, 'ABI', '0907', '789@qq.com', '23333333', '女'),
(7, 'MMM', 'MMM', 'MMM@qq.com', '852852', '女'),
(9, 'xh', '852456', '753951@qq.com', '753951', '女');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

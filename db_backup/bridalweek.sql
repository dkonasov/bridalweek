-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 12 2014 г., 11:33
-- Версия сервера: 5.6.16
-- Версия PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bisvisaru_tt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `te_broadcast`
--

CREATE TABLE IF NOT EXISTS `te_broadcast` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Структура таблицы `te_orders`
--

CREATE TABLE IF NOT EXISTS `te_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(32) CHARACTER SET utf8 NOT NULL,
  `msg` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 NOT NULL,
  `showmail` tinyint(1) NOT NULL,
  `region` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Санкт-Петербург',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=113 ;

-- --------------------------------------------------------

--
-- Структура таблицы `te_userdata`
--

CREATE TABLE IF NOT EXISTS `te_userdata` (
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `tel` varchar(20) NOT NULL,
  `lastid` int(11) NOT NULL DEFAULT '0',
  `companyname` varchar(64) NOT NULL DEFAULT 'default',
  `managername` varchar(64) NOT NULL DEFAULT 'default',
  `region` varchar(16) NOT NULL DEFAULT 'Санкт-Петербург',
  PRIMARY KEY (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

-- --------------------------------------------------------

--
-- Структура таблицы `te_users`
--

CREATE TABLE IF NOT EXISTS `te_users` (
  `id` int(128) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(128) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

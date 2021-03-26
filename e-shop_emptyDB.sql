-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 23 2021 г., 11:26
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `e-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `call_requests`
--

CREATE TABLE IF NOT EXISTS `call_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `close` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CatId` int(11) NOT NULL AUTO_INCREMENT,
  `RootCatId` int(11) NOT NULL,
  `Top` int(11) NOT NULL,
  `CatName` varchar(50) NOT NULL,
  `CatImg` varchar(150) NOT NULL,
  `CatDescription` varchar(800) NOT NULL,
  PRIMARY KEY (`CatId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentId` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientName` varchar(50) NOT NULL,
  `clientPhone` varchar(50) NOT NULL,
  `productPrice` float NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL,
  `clientName` varchar(150) NOT NULL,
  `clientPhone` varchar(20) NOT NULL,
  `clientEmail` varchar(50) NOT NULL,
  `clientAddress` varchar(100) NOT NULL,
  `clientCity` varchar(50) NOT NULL,
  `clientState` varchar(50) NOT NULL,
  `clientZip` varchar(50) NOT NULL,
  `clientCountry` varchar(50) NOT NULL,
  `productCat` int(11) NOT NULL,
  `productName` varchar(250) NOT NULL,
  `productCol` int(11) NOT NULL,
  `productPrice` float NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `pay` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `model` varchar(150) NOT NULL,
  `options` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(250) NOT NULL,
  `description` varchar(800) NOT NULL,
  `sort` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `system_users`
--

CREATE TABLE IF NOT EXISTS `system_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `system_users`
--

INSERT INTO `system_users` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

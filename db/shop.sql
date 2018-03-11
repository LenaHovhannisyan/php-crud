-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 04 2017 г., 20:34
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img_src` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `img_src`, `price`) VALUES
(1, 'Ring', '                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.                ', 'images/ring.jpg', 80),
(2, 'Bag', '                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.                                ', 'images/bag.jpg', 155),
(3, 'Watch', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'images/watch.jpg', 65),
(4, 'Cup', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'images/cup.jpg', 35),
(5, 'Smartphone', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'images/smartphone.jpg', 500),
(6, 'Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'images/shoes.JPG', 175),
(7, 'Notebook', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'images/notebook.JPG', 25),
(9, 'Earphone', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'images/earphone.JPG', 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

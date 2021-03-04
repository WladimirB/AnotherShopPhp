-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 02 2018 г., 11:29
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `toys_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Мягкие игрушки', 1, 1),
(2, 'Конструктор', 2, 1),
(3, 'Мячи', 3, 1),
(4, 'Куклы', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL,
  `is_recommended` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'Сова', 1, 10017, 299, 1, 'Weekends', '', '                                                                                                                                                ', 1, 0, 1),
(2, 'Собака', 1, 1002, 298, 1, 'Weekends', '', 'Мягкая игрушка, изготовлена из натуральных материалов для вашего ребёнка.                ', 1, 0, 1),
(3, 'Кошка', 1, 54420, 200, 1, 'кео', '7.jpg', 'Мягкая игрушка', 1, 0, 1),
(4, 'Слоненок', 1, 1004, 299, 1, 'Weekends', '4.jpg', '                    Мягкая игрушка, изготовлена из натуральных материалов для вашего ребёнка.                ', 1, 0, 1),
(5, 'Зайка', 1, 1005, 300, 1, 'Weekends', '5.jpg', 'Мягкая игрушка, изготовлена из натуральных материалов для вашего ребёнка.                ', 0, 0, 1),
(6, 'Барашек', 1, 1006, 320, 1, 'Weekends', '6.jpg', 'Мягкая игрушка, изготовлена из натуральных материалов для вашего ребёнка.                ', 0, 0, 1),
(15, 'Кукла Русалочка \"Яркие огоньки\" ', 4, 48340, 2000, 1, 'Barbie ', '', 'Для детей от 3-х лет', 1, 1, 1),
(16, 'Кукла мягконабивная с вышитым лицом 36 см', 4, 53514, 500, 1, 'Devilon ', '', '                    Кукла                ', 0, 1, 1),
(17, ' Кукла  Улетная Дракулора 26 см', 4, 415206, 1600, 1, 'Monster High', '', '', 1, 1, 1),
(18, ' Кукла Карина в белом 32 см ', 4, 4404, 3200, 1, 'Paola Reina', '', '', 1, 1, 1),
(19, ' Кукла Карла в коричневом 32 см', 4, 4413, 3200, 1, 'Paola Reina', '', '', 1, 1, 1),
(20, ' Кукла Кристи в сарафане 32 см', 4, 4442, 2900, 1, 'Paola Reina', '', '                                    ', 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(2, 'wer', '2147483647', '', 0, '2018-10-26 16:12:11', '{\"5\":1,\"6\":1,\"3\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'wwwadmin@gmail.com', '741000', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

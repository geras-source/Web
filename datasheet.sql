-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2021 г., 00:16
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `supra`
--

-- --------------------------------------------------------

--
-- Структура таблицы `datasheet`
--

CREATE TABLE `datasheet` (
  `Id` int NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PowerOutput` double NOT NULL,
  `Volume` double NOT NULL,
  `Model` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `datasheet`
--

INSERT INTO `datasheet` (`Id`, `Name`, `PowerOutput`, `Volume`, `Model`) VALUES
(5, 'MK1', 3.8, 2.5, 'JZ-GTE'),
(6, 'MK2', 1, 2, 'qwe'),
(7, 'MK2', 1, 2, 'qwe'),
(8, 'qwe', 12, 23, 'qwe');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `datasheet`
--
ALTER TABLE `datasheet`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `datasheet`
--
ALTER TABLE `datasheet`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

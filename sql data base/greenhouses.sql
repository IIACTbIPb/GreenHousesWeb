-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 27 2020 г., 20:33
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `greenhouses`
--

-- --------------------------------------------------------

--
-- Структура таблицы `greenhous`
--

CREATE TABLE `greenhous` (
  `ID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `id_owner` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `greenhous`
--

INSERT INTO `greenhous` (`ID`, `Name`, `id_owner`) VALUES
(1, 'GreenHouse1', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sectors`
--

CREATE TABLE `sectors` (
  `ID` int NOT NULL,
  `SeedName` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sectors`
--

INSERT INTO `sectors` (`ID`, `SeedName`) VALUES
(2, NULL),
(3, NULL),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `seeds`
--

CREATE TABLE `seeds` (
  `ID` int NOT NULL,
  `Name` varchar(20) NOT NULL,
  `GrowingTime` int NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `seeds`
--

INSERT INTO `seeds` (`ID`, `Name`, `GrowingTime`, `image`) VALUES
(1, 'Морковь', 30, 'morkov.png'),
(2, 'Огурцы', 20, 'ogurci1.png'),
(3, 'Помидоры', 50, 'pomidor.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roles` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Name`, `email`, `roles`, `password`) VALUES
(1, 'Руслан', 'admin@admin', 'admin', 'qwerty'),
(2, 'Руслан', 'rususa2000@gmail.com', 'зшвщк', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `greenhous`
--
ALTER TABLE `greenhous`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_owner` (`id_owner`);

--
-- Индексы таблицы `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SeedName` (`SeedName`);

--
-- Индексы таблицы `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `greenhous`
--
ALTER TABLE `greenhous`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `sectors`
--
ALTER TABLE `sectors`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `seeds`
--
ALTER TABLE `seeds`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `greenhous`
--
ALTER TABLE `greenhous`
  ADD CONSTRAINT `greenhous_ibfk_1` FOREIGN KEY (`id_owner`) REFERENCES `users` (`ID`);

--
-- Ограничения внешнего ключа таблицы `sectors`
--
ALTER TABLE `sectors`
  ADD CONSTRAINT `sectors_ibfk_1` FOREIGN KEY (`SeedName`) REFERENCES `seeds` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 14 2024 г., 14:30
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fulltext`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`) VALUES
(1, 'First Title', 'This is the body of the first entry.'),
(2, 'Second Title', 'This is the body of the second entry.'),
(3, 'Third Title', 'This is the body of the third entry.'),
(4, 'Тестовая какая-то фраза', 'Статья');

-- --------------------------------------------------------

--
-- Структура таблицы `nasos`
--

CREATE TABLE `nasos` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category` text NOT NULL,
  `category1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` text NOT NULL,
  `category3` text NOT NULL,
  `category4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `nasos`
--

INSERT INTO `nasos` (`id`, `title`, `content`, `user_id`, `name`, `img`, `img1`, `category`, `category1`, `category2`, `country`, `category3`, `category4`) VALUES
(113, 'Пневмоприводные насосы Husky', 'Преимущества насоса:<br />\r\nперекачивание жидкостей вязких и/или с твердыми частицами (красок, растворителей, смазок, масел, кислот, щелочей, нефтяных, известковых, глиняных, ферритовых суспензий, сточных вод и т. д.);<br />\r\nбережное перекачивание жидкостей, склонных к вспениванию - гелей, шампуней, пенооброазователей, чистящих и моющих растворов;<br />\r\nоткачивание соляной кислоты и других жидкостей, для которых не подходят насосы из нержавеющей стали;<br />\r\nпогружной вариант - откачивание растворителей, бензина и других жидкостей с высоким давлением насыщенных паров, которые невозможно откачать из подземных емкостей самовсасывающими поверхностными насосами;<br />\r\nуправление обеспечивается за счет регулирования подачи воздуха;<br />\r\nнадежность и простота эксплуатации. В конструкции исключены двигатель, редуктор и другие вращающиеся элементы — элементы, быстро выходящие из строя. Безопасность работы. В качестве привода используется энергия сжатого воздуха, что исключает образование искры;<br />\r\nвысокая универсальность: насосы Husky используются для перекачки воды, невязких жидкостей, растворов с содержанием суспензии;<br />\r\nНасосы применимы во взрыво- и пожароопасных зонах производств;<br />\r\nЦиркуляция типографской краски, красящих веществ и красителей низкой вязкости;<br />\r\nЦиркуляция и откачка охлаждающих жидкостей;<br />\r\nУдаление отработанных жидкостей;<br />\r\nДозированная подача химических веществ;<br />\r\nПерекачивание клеящих веществ;<br />\r\nПостоянное распыление воздуха.', NULL, 'Admin', 'uploads/бр.webp', 'uploads/бр.webp', 'Производство удобрений', 'Вихревые насосы', 'Поверхностные несамовсасывающие насосы', 'Китай', 'Многоступенчатые насосы', 'Насосы с вихревым рабочим колесом');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `name`, `img`) VALUES
(71, 'аааааааааааа', 'ааааааааааа', NULL, 'Admin', 'uploads/slider-2.jpg'),
(73, 'да', 'да', NULL, 'Admin', 'uploads/slide-2.png'),
(74, 'п', 'а', NULL, 'Admin', 'uploads/slider-2.jpg'),
(76, 'Маления', 'выавыа', NULL, 'Admin', 'uploads/7-_oN3fxulo.jpg'),
(77, 'Информация', 'аыва', NULL, 'Admin', 'uploads/1T4oqmot3kw.jpg'),
(78, 'fdsf', 'fsdf', NULL, 'Admin', 'uploads/Mahr-logo-1000-1000-640x320.jpg'),
(79, 'sdfsd', 'fdsf', NULL, 'Admin', 'uploads/Trioptics-Logo-1000x1000-640x320.jpg'),
(80, 'выфвыфв', '<p>выфвфыв</p><br />\r\n', NULL, 'Admin', 'uploads/Trioptics-Logo-1000x1000-640x320.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `password`, `username`) VALUES
(1, '123', 'Admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `articles` ADD FULLTEXT KEY `title` (`title`,`body`);

--
-- Индексы таблицы `nasos`
--
ALTER TABLE `nasos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `nasos`
--
ALTER TABLE `nasos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

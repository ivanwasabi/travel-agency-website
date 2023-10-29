-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2020 г., 22:14
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `c12ivan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ps` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `administrators`
--

INSERT INTO `administrators` (`id`, `login`, `ps`) VALUES
(1, 'ivan', '23031999');

-- --------------------------------------------------------

--
-- Структура таблицы `budget_tours`
--

CREATE TABLE `budget_tours` (
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `budget_tours`
--

INSERT INTO `budget_tours` (`url`, `name`, `country`, `price`) VALUES
('img/cities/budget_1.jpg', 'Говерла-Буковель', 'Ukraine', '₴3300'),
('img/cities/budget_2.jpg', 'Гуцульскі канікули', 'Ukraine', '₴3250'),
('img/cities/budget_3.jpg', 'Старовинні замки', 'Ukraine', '₴3400'),
('img/cities/budget_4.jpg', 'Асканія-Нова', 'Ukraine', '₴3990'),
('img/cities/budget_5.jpg', 'На хвилях Дунаю', 'Ukraine', '₴2460');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf32 NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `text`) VALUES
(1, 'Федір Іванов', 'Відмінна компанія, працюють швидко і впевнено. Допомогли з вирішенням усіх попутних питань. Надалі тільки з ними і будемо їздити.'),
(2, 'Андрій Шиманов', 'Обслуговування в компанії відрізняється професіаналізмом і уважним ставленням до клієнтів. Дякуємо!'),
(3, 'Андрій Костильов', 'Стабільна і надійна компанія. Оперативна і уважна робота відділу бронування та візового відділу. Кожет етап котролюється досвідченою командою спеціалістів.'),
(4, 'Олена Коваль', 'Искали надежное агентство и нам посоветовали друзья. Все супер. Менеджеры опытные и много где были сами и смотрели отели так что помогли выбрать то что нужно, и не переплачивать, цены кстати как на сайте туроператоров (без наценки). Очень подробно рассказали что и как будет в поездке, и во время самого отпуска все время помогали по мелочам. Теперь ездим только от них и другим советуем!'),
(5, 'Марія Петрова', 'К поездке подходили долго и тщательно, т.к. летаем не часто, и хотелось чтобы этот отдых запомнился на долго. От поездки остались только положительные впечатления, и главную роль в этом сыграл и отель, и сезон, и чистый остров – Хайнань. Не смотря на центр – Дадунхай, достаточно тихий, комфортный и чистый район. Локация у отеля шикарная. Все что мы хотели получить от поездки – комфортный отель, чистое море, хороший отдых и качественное лечение, мы это получили.'),
(6, 'Ірина Вілько', 'Зовсім недавно відвідала таке гарне місто як Прага і не тільки його, так само взяла квитки на літак в Дрезден і Відень, відвідала три країни за одну поїздку. Менеджер допомогла з підбором готелю. Вибрала готель в центрі міста, найоптимальніший за ціною і з вдалим місцем розташування. В Європі я була вперше, Чехія для першого візиту ідеальна країна. Багато жителів допомагали якщо що то було незрозуміло. Для прогулянок по Празі я заздалегідь підготувалась, прочитала в інтернеті про зручну програму Maps.me (працює без інтернету) і карту Праги, зазначила цікаві місця і почитала відгуки, де можна поїсти недорого, що подивитися і тд. Раджу.'),
(25, 'Іван Бойко', 'test'),
(26, 'Ванёк', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `sea_tours`
--

CREATE TABLE `sea_tours` (
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sea_tours`
--

INSERT INTO `sea_tours` (`url`, `name`, `country`, `price`) VALUES
('img/cities/sea_1.jpg', 'Кращі пляжі Європи', 'Europe', '€365'),
('img/cities/sea_2.jpg', 'Лазурне узбережжня Франції', 'France', '€395'),
('img/cities/sea_3.jpg', 'Інша Туреччина', 'Turkey', '€565'),
('img/cities/sea_4.jpg', 'Куба', 'Cuba', '€1731'),
('img/cities/sea_5.jpg', 'Корсика', 'Corsica', '€1199');

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE `tours` (
  `url` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `price` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`url`, `name`, `country`, `price`) VALUES
('img/cities/usa.jpg', 'Американьска мрія', 'USA', '€2300'),
('img/cities/florida.jpg', 'Флорида і Атлантика', 'USA', '€2500'),
('img/cities/singapur.jpg', 'Райський Сингапур', 'Singapur', '€1800'),
('img/cities/sidney.jpg', 'Загадковий Сідней', 'Ausrtalia', '€1600'),
('img/cities/japan.jpg', 'Класична Японія', 'Japan', '€1900'),
('img/cities/odessa.jpg', 'Home Odessa', 'Ukraine', '€250'),
('/img/cities/kyiv.jpg', 'Home Kyiv', 'Ukraine', '€200');

-- --------------------------------------------------------

--
-- Структура таблицы `travel_agent`
--

CREATE TABLE `travel_agent` (
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacts` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `travel_agent`
--

INSERT INTO `travel_agent` (`url`, `name`, `position`, `contacts`) VALUES
('img/agent/agent4.jpg', 'Іван', 'Founder & Tour Guide', '+380956256185'),
('img/agent/agent1.jpg', 'Каріна', 'Co-founder & Tour Guide', '+380956256186'),
('img/agent/agent3.jpg', 'Дмитро', 'Photographer', '+380956256188'),
('img/agent/agent2.jpg', 'Мар`яна', 'Travel-guide', '+380956256187'),
('img/agent/agent5.jpg', 'Дмитро', 'Travel-guide', '+380956256189'),
('img/agent/agent6.jpg', 'Дарина', 'Accountant', '+380956256190');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'ivan', '23031999'),
(2, 'karina', '13101999'),
(9, 'ruslan', '11052007');

-- --------------------------------------------------------

--
-- Структура таблицы `youth_tours`
--

CREATE TABLE `youth_tours` (
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `youth_tours`
--

INSERT INTO `youth_tours` (`url`, `name`, `country`, `price`) VALUES
('img/cities/youth_1.jpg', 'Амстердам', 'Netherlands', '€349'),
('img/cities/youth_2.jpg', 'Морське око', 'Poland', '€300'),
('img/cities/youth_3.jpg', 'Вікенд у Будапешті', 'Hungary', '€200'),
('img/cities/youth_4.jpg', 'Венеція', 'Italy', '€129'),
('img/cities/youth_5.jpg', 'Саксонська Швейцарія', 'Switzerland', '€150');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

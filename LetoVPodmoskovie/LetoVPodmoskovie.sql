-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2024 г., 17:57
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
-- База данных: `LetoVPodmoskovie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(8000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adress` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id`, `photo`, `name`, `description`, `adress`, `date`, `time`) VALUES
(1, 'images/Rectangle_4.png', 'В коломенском Дворце культуры пройдет «Концерт-реквием»', 'Приглашаем Вас стать частью Общероссийского академического проекта «Концерт-реквием», посвященного Дню памяти и скорби. <br>\n<br>\nЭто будет вечер встречи с музыкой, которая поможет нам вспомнить ушедших и почтить их память. <br>\n<br>\nНародный артист СССР, Герой труда России, дирижер и альтист Юрий Башмет выступил с инициативой проведения Общероссийского академического проекта, посвящённого трагической дате начала Великой Отечественной войны. <br>\n<br>\nВ каждом регионе нашей страны предлагается исполнить поэму Роберта Рождественского «Реквием» на музыку композитора Кузьмы Бодрова.\n\n', 'г. Коломна, ДК «Тепловозостроитель»', '21 июня 2024 года', 'с 18:00 до 20:00'),
(2, 'images/Rectangle_5.png', 'На Михайловской набережной в Коломне состоится «Кавер вечер»', 'В Коломне состоится чудесный концерт, который будет объединять три талантливых и интересных коллектива: «Чикаго», «Изюм» и «Зеленый чемодан». В этот вечер набережная наполнится звуками живой музыки, искренним смехом людей и положительной энергией. <br>\n<br>\nКаждого, кто придет, ждёт выступление группы «Зеленый чемодан». Выступление группы погрузит людей в мир чувств и эмоций, а лирические баллады заставят сердца биться чаще. <br>\n<br>\nПосле «Зеленого чемодана» атмосферу концерта разогреет группа «Изюм». Их авторский стиль и необычные аранжировки известных и всеми любимых песен точно покорят каждого. Смешение жанров, неожиданные музыкальные ходы и харизматичное исполнение Анастасии Лоцман сделают их выступление незабываемым и никого не оставят равнодушными. <br>\n<br>\nЗаключительным аккордом вечера станет яркое выступление группы «Чикаго». Ребята привнесут на сцену настоящий драйв и энергию, исполненные в стиле рок-н-ролл. \n', 'г. Коломна, Михайловская набережная', '14 июня 2024 года', 'с 19:00'),
(3, 'images/Rectangle_6.png', 'В Городском округе Коломна в деревне Барановка пройдет праздник в честь Дня деревни', 'В деревне Барановка на площадке у пруда состоится праздничная программа «Гуляй, душа!». Мероприятие организовано в рамках проекта Центра досуга и культуры «Акатьево», посвящено Дню Деревни и празднику Святой Троицы.<br>\n<br>\nДень деревни — очень важный, интересный и насыщенный праздник, позволяющий весело и с пользой провести время, пообщаться с друзьями и близкими, вспомнить приятные и яркие моменты.\n', 'г.о. Коломна, д. Барановка, площадка', '23 июня 2024 года', 'с 14:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
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
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

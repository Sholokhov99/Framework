-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2021 г., 06:02
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
-- База данных: `eds`
--

-- --------------------------------------------------------

--
-- Структура таблицы `action`
--

CREATE TABLE `action` (
  `Id_action` bigint NOT NULL,
  `Id_controller` bigint NOT NULL,
  `Name_action` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Access` int NOT NULL,
  `Last_update` date NOT NULL,
  `Id_author` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `action`
--

INSERT INTO `action` (`Id_action`, `Id_controller`, `Name_action`, `Content`, `Access`, `Last_update`, `Id_author`) VALUES
(1, 1, 'home', '<article class=\"vorschau\">\r\n    <script type=\"text/javascript\" src=\"../../scripts/lib/particles/particles.js\"></script>\r\n\r\n\r\n\r\n    <script type=\"text/javascript\" src=\"../../scripts/lib/particles/app.js\"></script>\r\n\r\n\r\n\r\n    <script type=\"text/javascript\" src=\"../../scripts/lib/particles/stats.js\"></script>\r\n\r\n\r\n\r\n    <div id=\"contarner\"></div>\r\n\r\n\r\n\r\n    <svg class=\"rectangle-svg\" width=\"50vw\" height=\"54vh\" hidden viewBox=\"0 0 150 100\" preserveAspectRatio=\"none\" shape-rendering=\"geometricPrecision\" xmlns=\"http://www.w3.org/2000/svg\">\r\n\r\n\r\n\r\n                <!-- Shadow -->\r\n\r\n\r\n\r\n        <filter id=\"filter\">\r\n\r\n\r\n\r\n            <feOffset in=\"SourceAlpha\" dx=\"-4\" dy=\"0.1\"></feOffset>\r\n\r\n\r\n\r\n            <feGaussianBlur stdDeviation=\"3\" result=\"DROP\"></feGaussianBlur>\r\n\r\n\r\n\r\n            <feFlood flood-color=\"#000\" result=\"COLOR\"></feFlood>\r\n\r\n\r\n\r\n            <feComposite in=\"DROP\" in2=\"COLOR\" operator=\"in\" result=\"SHADOW1\"></feComposite>\r\n\r\n\r\n\r\n            <feComponentTransfer in=\"SHADOW1\" result=\"SHADOW\">\r\n\r\n\r\n\r\n                <feFuncA type=\"table\" tableValues=\"0 0.5\"></feFuncA>\r\n\r\n\r\n\r\n            </feComponentTransfer>\r\n\r\n\r\n\r\n            <feMerge>\r\n\r\n\r\n\r\n                <feMergeNode in=\"SHADOW\"></feMergeNode>\r\n\r\n\r\n\r\n                <feMergeNode in=\"SourceGraphic\"></feMergeNode>\r\n\r\n\r\n\r\n            </feMerge>\r\n\r\n\r\n\r\n        </filter>\r\n\r\n\r\n\r\n        <path d=\"M0,0 h105 l40,50 l-40,50 h-110z\" fill=\"#fff\" filter=\"url(#filter)\" class=\"start-page-rect\"/>\r\n\r\n\r\n\r\n    </svg>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n    <div class=\"intro\">\r\n\r\n\r\n\r\n        <div class=\"snack\">\r\n\r\n\r\n\r\n            <h1>Защити себя и своих близких</h1>\r\n\r\n\r\n\r\n            <ul>\r\n\r\n\r\n\r\n                <li>от бактерий</li>\r\n\r\n\r\n\r\n                <li>вирусов</li>\r\n\r\n\r\n\r\n            </ul>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n    </div>\r\n\r\n\r\n\r\n    <footer>\r\n\r\n\r\n\r\n        <div>\r\n\r\n\r\n\r\n            <svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 24 150 28\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">\r\n\r\n\r\n\r\n                <defs >\r\n\r\n\r\n\r\n                    <path id=\"gentle-wave\" d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\" />\r\n\r\n\r\n\r\n                </defs>\r\n\r\n\r\n\r\n                <g class=\"parallax\">\r\n\r\n\r\n\r\n                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"0\" fill=\"rgba(69,170,242,0.7\" />\r\n\r\n\r\n\r\n                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"3\" fill=\"rgba(69,170,242,0.5)\" />\r\n\r\n\r\n\r\n                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"5\" fill=\"rgba(69,170,242,0.3)\" />\r\n\r\n\r\n\r\n                    <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"7\" fill=\"#45aaf2\" />\r\n\r\n\r\n\r\n                </g>\r\n\r\n\r\n\r\n            </svg>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n    </footer>\r\n\r\n\r\n\r\n</article>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<article class=\"advantages snack\">\r\n\r\n\r\n\r\n    <header>\r\n\r\n\r\n\r\n        <h2>Преимущества</h2>\r\n\r\n\r\n\r\n    </header>\r\n\r\n\r\n\r\n    <div class=\"card-list d-flex justify-content-center\">\r\n\r\n\r\n\r\n        <div class=\"card-block\">\r\n\r\n\r\n\r\n            <img src=\"./app_data/img/card/lamp_icon.png\">\r\n\r\n\r\n\r\n            <p>Дезинфекция воздуха</p>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n        <div class=\"card-block\">\r\n\r\n\r\n\r\n            <img src=\"./app_data/img/card/virus_eds.png\">\r\n\r\n\r\n\r\n            <p>Устранение вирусов</p>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n        <div class=\"card-block\">\r\n\r\n\r\n\r\n            <img src=\"./app_data/img/card/24_7_eds_icon.png\">\r\n\r\n\r\n\r\n            <p>Непрерывная работа</p>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n        <div class=\"card-block\">\r\n\r\n\r\n\r\n            <img src=\"./app_data/img/card/bezop_eds_icon.png\">\r\n\r\n\r\n\r\n            <p>Безопасность</p>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n    </div>\r\n\r\n\r\n\r\n</article>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<article class=\"principle-operation snack\">\r\n\r\n\r\n\r\n    <header>\r\n\r\n\r\n\r\n        <h2><span>П</span>ринципы работы</h2>\r\n\r\n\r\n\r\n    </header>\r\n\r\n\r\n\r\n    <div class=\"card-list\">\r\n\r\n\r\n\r\n        <div class=\"number-card\">\r\n\r\n\r\n\r\n            <img src=\"./app_data/img/vent_icon_eds.png\" />\r\n\r\n\r\n\r\n            <span >01</span>\r\n\r\n\r\n\r\n            <p>Выпуск воздуха</p>\r\n\r\n\r\n\r\n            <p>Бактерии с вирусами перемещаются в корпус дезинфекционного блока благодаря бесшумными вентиляторами</p>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n        <div class=\"next-card\">\r\n\r\n\r\n\r\n            <div class=\"parallelogram\"></div>\r\n\r\n\r\n\r\n            <div class=\"arrow\">\r\n\r\n\r\n\r\n                <div></div>\r\n\r\n\r\n\r\n                <div></div>\r\n\r\n\r\n\r\n            </div>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n        <div class=\"number-card\">\r\n\r\n\r\n\r\n            <img src=\"./app_data/img/uv.png\" />\r\n\r\n\r\n\r\n            <span>02</span>\r\n\r\n\r\n\r\n            <p>Очистка ультрафиолетом</p>\r\n\r\n\r\n\r\n            <p>Бактерии с вирусами перемещаются в корпус дезинфекционного блока благодаря бесшумными вентиляторами</p>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n        <div class=\"next-card\">\r\n\r\n\r\n\r\n            <div class=\"parallelogram\"></div>\r\n\r\n\r\n\r\n            <div class=\"arrow\">\r\n\r\n\r\n\r\n                <div></div>\r\n\r\n\r\n\r\n                <div></div>\r\n\r\n\r\n\r\n            </div>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n        <div class=\"number-card\">\r\n\r\n\r\n\r\n            <img src=\"./app_data/img/clear_icon_eds.png\" />\r\n\r\n\r\n\r\n            <span>03</span>\r\n\r\n\r\n\r\n            <p>Выпуск воздуха</p>\r\n\r\n\r\n\r\n            <p>Очищенный воздух поступает через отверстия циркуляции воздушного потока, размещенные на безопасном расстоянии от человека</p>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n    </div>\r\n\r\n\r\n\r\n</article>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<article class=\"snack\">\r\n\r\n\r\n\r\n    <header>\r\n\r\n\r\n\r\n        <h2><span>П</span>рименение</h2>\r\n\r\n\r\n\r\n    </header>\r\n\r\n\r\n\r\n    <div class=\"container\">\r\n\r\n\r\n\r\n        <div class=\"row\">\r\n\r\n\r\n\r\n            <div class=\"col \">\r\n\r\n\r\n\r\n                <span class=\"align-middle text-wrap\">\r\n\r\n\r\n\r\n                            Рециркулятор бактерицидный предназначен для обеззараживания воздуха в присутствии людей в помещениях учебного заведения, бизнес центров, общественного питания, предприятий и жилых помещений.\r\n\r\n\r\n\r\n                        </span>\r\n\r\n\r\n\r\n            </div>\r\n\r\n\r\n\r\n            <!-- Slider-->\r\n\r\n\r\n\r\n            <div class=\"col\">\r\n\r\n\r\n\r\n                <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"carousel\">\r\n\r\n\r\n\r\n                    <ol class=\"carousel-indicators\">\r\n\r\n\r\n\r\n                        <li data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\"></li>\r\n\r\n\r\n\r\n                        <li data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\"></li>\r\n\r\n\r\n\r\n                        <li data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\"></li>\r\n\r\n\r\n\r\n                    </ol>\r\n\r\n\r\n\r\n                    <div class=\"carousel-inner\">\r\n\r\n\r\n\r\n                        <div class=\"carousel-item active\">\r\n\r\n\r\n\r\n                            <img src=\"./app_data/img/slider/home/1.png\" class=\"d-block w-100\" alt=\"...\">\r\n\r\n\r\n\r\n                            <div class=\"carousel-caption d-none d-md-block\">\r\n\r\n\r\n\r\n                                <h5>First slide label</h5>\r\n\r\n\r\n\r\n                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>\r\n\r\n\r\n\r\n                            </div>\r\n\r\n\r\n\r\n                        </div>\r\n\r\n\r\n\r\n                        <div class=\"carousel-item\">\r\n\r\n\r\n\r\n                            <img src=\"...\" class=\"d-block w-100\" alt=\"...\">\r\n\r\n\r\n\r\n                            <div class=\"carousel-caption d-none d-md-block\">\r\n\r\n\r\n\r\n                                <h5>Second slide label</h5>\r\n\r\n\r\n\r\n                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n\r\n\r\n                            </div>\r\n\r\n\r\n\r\n                        </div>\r\n\r\n\r\n\r\n                        <div class=\"carousel-item\">\r\n\r\n\r\n\r\n                            <img src=\"...\" class=\"d-block w-100\" alt=\"...\">\r\n\r\n\r\n\r\n                            <div class=\"carousel-caption d-none d-md-block\">\r\n\r\n\r\n\r\n                                <h5>Third slide label</h5>\r\n\r\n\r\n\r\n                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>\r\n\r\n\r\n\r\n                            </div>\r\n\r\n\r\n\r\n                        </div>\r\n\r\n\r\n\r\n                    </div>\r\n\r\n\r\n\r\n                    <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-bs-slide=\"prev\">\r\n\r\n\r\n\r\n                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\r\n\r\n\r\n\r\n                        <span class=\"visually-hidden\">Previous</span>\r\n\r\n\r\n\r\n                    </a>\r\n\r\n\r\n\r\n                    <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-bs-slide=\"next\">\r\n\r\n\r\n\r\n                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\r\n\r\n\r\n\r\n                        <span class=\"visually-hidden\">Next</span>\r\n\r\n\r\n\r\n                    </a>\r\n\r\n\r\n\r\n                </div>\r\n\r\n\r\n\r\n            </div>\r\n\r\n\r\n\r\n        </div>\r\n\r\n\r\n\r\n    </div>\r\n\r\n\r\n\r\n</article>', 0, '2021-03-07', 1),
(2, 1, 'news', '<article class=\"name-page\">\r\n                <h1>Новости</h1>\r\n                <hr>\r\n                <p>Ознакомьтесь с нашими новостями</p>\r\n            </article>\r\n\r\n            <article class=\"news snack\">\r\n                <div class=\"row row-cols-1 row-cols-md-3 g-4\">\r\n                    <div class=\"col\">\r\n                        <div class=\"card h-100\">\r\n                            <img src=\"./app_data/img/image-not-found.jpg\" class=\"card-img-top\" alt=\"...\">\r\n                            <div class=\"card-body\">\r\n                                <h5 class=\"card-title\">Card title</h5>\r\n                                <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>\r\n                            </div>\r\n                            <a class=\"full-news\">Подробнее...</a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col\">\r\n                        <div class=\"card h-100\">\r\n                            <img src=\"./app_data/img/image-not-found.jpg\" class=\"card-img-top\" alt=\"...\">\r\n                            <div class=\"card-body\">\r\n                                <h5 class=\"card-title\">Card title</h5>\r\n                                <p class=\"card-text\">This is a short card.</p>\r\n                            </div>\r\n                            <a class=\"full-news\">Подробнее...</a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col\">\r\n                        <div class=\"card h-100\">\r\n                            <img src=\"./app_data/img/image-not-found.jpg\" class=\"card-img-top\" alt=\"...\">\r\n                            <div class=\"card-body\">\r\n                                <h5 class=\"card-title\">Card title</h5>\r\n                                <p class=\"card-text\">This is a longer card with supporting text below as a natural lead-in to additional content.\r\n                                </p>\r\n                            </div>\r\n                            <a class=\"full-news\">Подробнее...</a>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col\">\r\n                        <div class=\"card h-100\">\r\n                            <img src=\"./app_data/img/image-not-found.jpg\" \" class=\"card-img-top \" alt=\"... \">\r\n                            <div class=\"card-body \">\r\n                                <h5 class=\"card-title \">Card title</h5>\r\n                                <p class=\"card-text \">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>\r\n                            </div>\r\n                            <a class=\"full-news \">Подробнее...</a>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </article>', 1, '2021-03-07', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `controller`
--

CREATE TABLE `controller` (
  `Id_controller` bigint NOT NULL,
  `Name_controller` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `controller`
--

INSERT INTO `controller` (`Id_controller`, `Name_controller`) VALUES
(1, 'home');

-- --------------------------------------------------------

--
-- Структура таблицы `top_menu`
--

CREATE TABLE `top_menu` (
  `Id_menu` bigint NOT NULL,
  `Name` text NOT NULL,
  `Link` text NOT NULL,
  `Access` int NOT NULL,
  `View` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id_user` bigint NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Age` int NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Avatar` text NOT NULL,
  `Block` int NOT NULL,
  `Date_registration` date NOT NULL,
  `Last_update` date NOT NULL,
  `Access` int NOT NULL,
  `SecretKey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id_user`, `Login`, `Password`, `Name`, `First_name`, `Age`, `Mail`, `Avatar`, `Block`, `Date_registration`, `Last_update`, `Access`, `SecretKey`) VALUES
(1, 'konex', 'CKyAi2RR9yZDwtpXBhnqr4shwFfDvUq770rbCbs0YsE3Tw7N3aHnhOlOTYYLchOWbynomVraFV7tLRh3OeXfL0VNqtEVil9zeqBl9xX8/CxkqA1ujA6zTa+fi696BUqm|wrY43JioEfxV0VGv8F2tCRzREkiFzKld/SIRsxO/2Bs=', 'Даниил', 'Шолохов', 22, 'sholokhov.daniil@gmail.com', '/', 0, '2021-03-07', '2021-03-07', 1, 'Bbx3Ep22v/hATLejg3i15gBZiA/y/HtPEu6U1RDI6XEacQwB/ANs3ECFzyj0OfqwmN8dt8c9Td5bF8RRZ3CWC5krXTe7VTiCXAF05VKw+yGyMvARKIzUaSsnrXGrPumb|JfyF9QHEEnAxeqXHohW9S0btzcKXmRPk2N1D+YcYk4U=\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`Id_action`),
  ADD KEY `Id_controller` (`Id_controller`),
  ADD KEY `Id_author` (`Id_author`);

--
-- Индексы таблицы `controller`
--
ALTER TABLE `controller`
  ADD PRIMARY KEY (`Id_controller`);

--
-- Индексы таблицы `top_menu`
--
ALTER TABLE `top_menu`
  ADD PRIMARY KEY (`Id_menu`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `action`
--
ALTER TABLE `action`
  MODIFY `Id_action` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `controller`
--
ALTER TABLE `controller`
  MODIFY `Id_controller` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `top_menu`
--
ALTER TABLE `top_menu`
  MODIFY `Id_menu` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id_user` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action_ibfk_1` FOREIGN KEY (`Id_controller`) REFERENCES `controller` (`Id_controller`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `action_ibfk_2` FOREIGN KEY (`Id_author`) REFERENCES `users` (`Id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

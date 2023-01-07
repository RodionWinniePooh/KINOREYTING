-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3360
-- Время создания: Янв 07 2023 г., 16:31
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kinoreyting`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cartoons`
--

CREATE TABLE `cartoons` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `coment` text NOT NULL,
  `full_text` text NOT NULL,
  `video` text NOT NULL,
  `img` text NOT NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `cartoons`
--

INSERT INTO `cartoons` (`id`, `title`, `coment`, `full_text`, `video`, `img`, `category`) VALUES
(1, 'Босс-молокосос', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, attach: \"*\"});\n</script>', 'Жизнь семилетнего мальчика по имени Тим была прекрасна и беззаботна до того как у него не появился маленький братик. Моментально вся родительская любовь и забота достается только младенцу, а о Тиме все как будто забывают. Однако не это беспокоит маленького Тима. Он не может понять, как родители не замечают, что их малыш на самом деле не похож на новорожденного. Он носит костюмы, ходит с дипломатом и постоянно всеми командует. Вскоре Тим, узнает, кто его младший брат и с какой миссией он появился в их семье.\n\n', '<div class=\"container\">\n<div class=\"embed-responsive embed-responsive-16by9\">\n\n      <video  controls=\"controls\" controls crossorigin playsinline poster=\"12.jpg\">\n      \n      <source src=\"mp4/cartoons/1.mp4\" type=\"video/mp4\" size=\"1080\">\n\n      <!-- Caption files -->\n      <track kind=\"captions\" label=\"English\" srclang=\"en\" src=\"https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt\" default>\n      <track kind=\"captions\" label=\"Français\" srclang=\"fr\" src=\"https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt\">\n      <!-- Fallback for browsers that don\'t support the <video> element -->\n      <a href=\"https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4\" download>Download</a>\n  </video>\n</div>\n</div>', '<img src=\"/img/cartoons/1.jpg\" class=\"w-100 img-rounded\">', 'Зарубежные'),
(2, 'Тачки 3', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, attach: \"*\"});\n</script>', 'Для легендарного гонщика Молнии МакКуина соревнования становятся все сложнее. Теперь он уже один из самых старых гоночных автомобилей на трассе, и новички составляют ему серьезную конкуренцию. Одним из самых успешных представителей нового поколения гонщиков является Джексон Шторм. Все вокруг твердят, что Джексону нет равных, но МакКуин твердо намерен доказать, что он все еще лучший в своем деле. А поможет ему в этом молодая Крус Рамирес, у которой есть собственный взгляд на то, как МакКуину прийти к победе.', '', '<img src=\"/img/cartoons/2.jpg\">', 'Приключения'),
(3, 'Гадкий я 3', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Смотрите по подписке PictureBox от студии Universal. На этот раз у Грю появится новый противник – Бальтазар Брэтт. Когда-то он был звездным ребенком, но время прошло, Брэтт вырос, но остался одержим персонажем, которого он играл в 1980-х. Теперь Брэтт стал одним из самых опасных злодеев. Кроме того, Грю наконец встретит своего давно потерянного очаровательного, веселого и более успешного брата-близнеца по имени Дрю. Вместе они объединятся, чтобы провернуть еще одно ограбление – украсть бриллиант, который украл Брэтт.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/vFQIk-_XCl8\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/cartoons/3.jpg\">', '1'),
(4, 'Монстры на каникулах 3 Море зовет', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Последнее время Дракула совсем загрустил от одиночества, и поэтому его дочь, Мэвис уговаривает отца отправиться в круиз. В итоге герой и его друзья попадают на шикарный лайнер с множеством развлечений. Капитаном корабля является загадочная и прекрасная Эрика, в которую граф влюбляется с первого взгляда. Однако Мэвис не нравится новая пассия отца. И не зря, ведь Эрика оказывается правнучкой самого Ван Хельсинга – главного врага всех вампиров и монстров.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/sdXCs7m4-iI\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/cartoons/4.jpg\">', '1'),
(5, 'Зверополис', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Зверополис – город равных возможностей для крошечных грызунов, огромных слонов и высоченных жирафов. Всеми благами цивилизации здесь могут пользоваться хищники и травоядные, с межвидовыми разногласиями покончено, а благодаря успешной эволюции кровожадность осталась в прошлом. Но так ли все благополучно в этом процветающем обществе? Ведь от стереотипов и предрассудков избавились далеко не все. Жизнерадостная Джуди Хопс стала первым в истории кроликом-полицейским. Однако пушистой зверушке нелегко конкурировать с коллегами-громилами.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/oqFqf-1NcEc\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/cartoons/5.jpg\">', '2'),
(6, 'Суперсемейка 2 и дополнительные материалы', '', 'В центре сюжета фильма находится суперсемейка Парров – мама Хелен, папа Боб и их дети: Вайолет, Дэш и малыш Джек-Джек. Со времен первой части фильма многое поменялось и теперь люди должны сами решить, нужны ли им супергерои, которые хоть и спасают их от злодеев, но при этом разносят в щепки их любимый город. Чтобы поднять свой рейтинг в глазах общественности Суперсемейка соглашается на участие в телевизионном шоу, а так как Хелен на экране выглядит более приглядно, чем Боб, то именно она становится его звездой, а Бобу отходит роль няньки для своих детей. Тем временем в Нью-Урбреме появляется новый могущественный злодей, способный гипнотизировать людей при помощи экранов телевизоров.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/Bj00EU8FJEM\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/cartoons/6.jpg\">', ''),
(7, 'Вольт', '', 'Пес Вольт искренне верит, что события фильма, в которых участвует он и его обожаемая хозяйка Пенни, происходят на самом деле. Собака считает, что обладает суперспособностями. Но однажды, напуганный предполагаемой угрозой для девочки, Вольт убегает из домика на съемочной площадке и попадает в реальный мир. Он намерен во что бы то ни стало распутать это дело. Но постепенно герой осознает свою заурядность и неприспособленность к проживанию в одиночестве. Справиться с опасностями и вернуться домой ему помогают новые друзья — кошечка Варежка, хомяк Рино и веселая компания голубей.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/7XLiM7BxsVk\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/cartoons/7.jpg\">', ''),
(8, 'История игрушек 2', '', 'Пока Энди находится в летнем лагере, Вуди похищает жадный коллекционер Эл Маквиггин, поскольку Вуди – последняя недостающая игрушка в его редчайшей коллекции. Базз и остальные друзья отправляются на спасательную миссию, чтобы спасти Вуди от участи музейного экспоната. Причем им нужно успеть до того, как он будет продан в Японию, после чего они уже никогда его не увидят.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/VPcAR1gIcDo\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/cartoons/8.jpg\">', '');

-- --------------------------------------------------------

--
-- Структура таблицы `film`
--

CREATE TABLE `film` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `coment` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `full_text` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `video` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `img` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `category` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `film`
--

INSERT INTO `film` (`id`, `title`, `coment`, `full_text`, `video`, `img`, `category`) VALUES
(1, '13-й район', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'В 2010 году французское правительство оказалось не в силах справиться с наплывом преступности в одном из своих гетто, получившем название 13-й район, поэтому было решено просто обнести его высокой стеной, дабы никто не смог входить и выходить из него. Так два миллиона людей оказались во власти местных банд. Спустя несколько лет полицейскому по имени Дамьен дают задание: под прикрытием пробраться в самый центр криминогенного района и обезвредить бомбу, обладателем которой стал один из местных наркобаронов по имени Таха, что угрожает с помощью ракеты направить ее прямо в центр Парижа. Помочь полицейскому в этом деле должен один из обитателей 13-го района по имени Лито, у которого для этого есть свои причины, ведь Таха похитил его сестру.\n', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/b6hLgqRAc0g\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/film/1.jpg\" class=\"w-100\">', 'Боевик'),
(2, 'Механик Воскрешение', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Артура Бишопа, давно оставившего свое криминальное ремесло, вынуждают снова вступить в игру. Чтобы похитители вернули его возлюбленную, он должен сделать то, что у него получается лучше всего: от него требуется совершить три убийства, идеально обставленных как несчастные случаи.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/aIAB_PyTkZ4\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/film/2.jpg\" class=\"w-100\">', 'Комедия'),
(3, 'Пираты Карибского моря На странных берегах', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', '﻿Новые приключения эксцентричного Джека Воробья и его верных друзей – храброго Уилла Тернера и сообразительной Элизабет Суонн. После того, как Джек вернул любимый корабль, он странствует вместе с командой по далеким морям. Однако это странствие прерывает отец Уилла, бывший пират Прихлоп Билл, который напоминает Джеку о старом долге. Давным-давно герой в обмен на Жемчужину пообещал Дэви Джонсу, капитану легендарного «Летучего Голландца», служить у него на корабле 100 лет. Теперь подходит время отдавать долг, но Джек не хочет попасть в плен к Джонсу, поэтому отчаянно ищет выход…', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/0CIc__85_mI\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/film/3.jpg\" class=\"w-100\">', 'Комедия'),
(4, 'Такси 4', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Культовый французский фильм «Такси», снятый по сценарию легендарного Люка Бессона, является одним из основоположников жанра фильмов о гонках. Он положил начало целой франшизе, которая со временем стала суперпопулярной не только во Франции, но и по всему миру. Даниэль работает водителем парижского такси. Но он помешан на гонках и быстрой езде, и даже его профессия не может стать помехой этому увлечению. Доехать на его такси действительно бывает куда быстрее, чем на общественном транспорте, но далеко не всегда безопасно. Конечно, никакой аварии быть не может, ведь Даниэль – истинный асс своего дела, но ведь не у каждого пассажира нервы выдержат поездки с многократным превышением скорости! Но проблемы у Даниэля не только с пассажирами: полицейский Эмильен, поймавший незадачливого таксиста на превышении и угрожающий отобрать права, вынуждает Даниэля помочь ему в поимке опасных преступников. Ему нужно всего лишь схватить банду грабителей, которые, как выясняется, водят машины ничуть не хуже самого Даниэля… Если вы хотите легко и весело провести субботний вечер, то рекомендуем смотреть онлайн «Такси».', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/l6TBtguFGt8\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/film/4.jpg\" class=\"w-100\">', 'Комедия'),
(5, 'Трансформеры Последний рыцарь', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', '﻿Главный герой фильма, молодой парень Сэм Уитвики, встречается с новой девушкой Карли и ищет работу инженером. На собеседовании на него нападает безумный японский программист, который бормочет что-то о темной стороне Луны. Вскоре появляются «добрые» роботы автоботы, и вместе с ними Сэм начинает расследовать дело. Оказывается, что во время первой высадки человека на Луну американские астронавты обнаружили там звездолет автоботов, бежавших со своей родной планеты Кибертрона. Одна из деталей этого звездолета необходима лидеру десептиконов, чтобы захватить власть над Землей.', '<iframe id=\"ytplayer\" type=\"text/html\" width=\"720\" height=\"405\" src=\"https://www.youtube.com/embed/WzKcZl_w4tc\" frameborder=\"0\" allowfullscrenn>', '<img src=\"/img/film/5.jpg\" class=\"w-100\">', 'Боевик');

-- --------------------------------------------------------

--
-- Структура таблицы `ratings`
--

CREATE TABLE `ratings` (
  `id` varchar(11) NOT NULL,
  `total_votes` int NOT NULL DEFAULT '0',
  `total_value` int NOT NULL DEFAULT '0',
  `used_ips` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `ratings`
--

INSERT INTO `ratings` (`id`, `total_votes`, `total_value`, `used_ips`) VALUES
('1cartoonid', 0, 0, ''),
('1filmid', 0, 0, ''),
('1serialid', 0, 0, ''),
('2cartoonid', 0, 0, ''),
('2filmid', 0, 0, ''),
('3cartoonid', 0, 0, ''),
('3serialid', 0, 0, ''),
('4cartoonid', 12, 45, 'a:1:{i:0;s:9:\"127.0.0.1\";}'),
('4filmid', 0, 0, ''),
('4serialid', 0, 0, ''),
('5cartoonid', 1, 5, 'a:1:{i:0;s:9:\"127.0.0.1\";}'),
('5serialid', 0, 0, ''),
('7cartoonid', 0, 0, ''),
('8cartoonid', 0, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `serials`
--

CREATE TABLE `serials` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `coment` text NOT NULL,
  `full_text` text NOT NULL,
  `video` text NOT NULL,
  `img` text NOT NULL,
  `category` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `serials`
--

INSERT INTO `serials` (`id`, `title`, `coment`, `full_text`, `video`, `img`, `category`) VALUES
(1, 'Оптимисты', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Автор «Оттепели» и «Стиляг» Валерий Тодоровский снова обратился к теме советских шестидесятых и спродюсировал сериал «Оптимисты» о молодых и полных надежд на светлое будущее советских дипломатах. В главных ролях – Владимир Вдовиченков, Северия Янушаускайте («Звезда», «Рыба-мечта») и Егор Корешков («Метаморфозис», «Братья Ч»). Режиссер проекта – автор фильмов «Коктебель», «Простые вещи» и «Как я провел этим летом» Алексей Попогребский. Дипломат и специалист по Германии Георгий Бирюков проштрафился перед родиной и был переведен из международного отдела ЦК КПСС в мелкий отдел МИДа. Теперь он трудится в информационно-аналитической группе, которая целиком состоит из представителей золотой молодежи, счастливых обладателей опыта жизни за рубежом. Ребята должны объяснять советским дипломатам те тонкости западного менталитета, о которых им никогда не расскажет ни один профессор МГИМО. Этот стильный сериал, который уже прозвали отличной отечественной версией культовых «Безумцев», можно смотреть онлайн на нашем сайте.', '', '<img src=\"/img/serials/1.jpg\">', 'Боевик'),
(2, 'Отбросы (Плохие)', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Сериал «Плохие» (Misfits), также известный под названием «Отбросы», – современная история про супергероев нашего времени. Вместо тишайших зануд вроде Паркера-Человека-Паука или будущего Капитана Америки главными героями становятся агрессивные молодые люди, отправленные в специализированное заведение на принудительные общественные работы. Этот сериал пришелся по вкусу зрителям и критике, был отмечен наградами и показал отличнейшие рейтинги. Увесистая доля черного юмора, здоровый цинизм, закрученный фантастический сюжет и спецэффекты сделали эту историю про лондонскую трудную молодежь с суперспособностями очень популярной. Пять лондонских великовозрастных плохишей, направленных на перевоспитание и исправительные работы, за уборкой мусора получают вместе с ударом молнии паранормальные способности, по одной на каждого: невидимость, умение читать мысли, вызывать сексуальное возбуждение, перематывать время и жить вечно. Каково это – ни с того ни с сего стать сверхчеловеком, можно посмотреть онлайн в сериале «Плохие» («Отбросы»).', '', '<img src=\"/img/serials/2.jpg\">', 'Комедия'),
(3, 'Папочка', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Молодой парень Бен Уиллер наслаждается жизнью: он живет в уютной нью-йоркской квартире с своим другом Такером и братом Дэнни, работает барменом, тусуется и встречается с девушками. Бен уверен, что у него еще полно времени, чтобы не думать об ответственности, карьере и прочих вещах, которые способны превратить жизнь в рутину. Но судьба распоряжается иначе, и в один прекрасный день Бен обнаруживает на пороге своей квартиры… младенца. Эту маленькую девочку по имени Эмма ему оставила одна из бывших подружек – Анджела. При этом горе-мать ни на чем не настаивает: в письме Анджела лишь просит Бена подписать бумаги и отказаться от родительских прав, поскольку она уже нашла для их ребенка новую семью. Казалось бы, теперь герой может с облегчением выдохнуть, однако, проведя с дочкой всего один вечер, Бен понимает, что не готов так просто сдаться и отдать своего ребенка чужим людям. Пусть никто вокруг не верит в его отцовские способности, он готов взять на себя заботу об Эмме. Тем более рядом есть друзья, которые помогут со всем справиться… ну, наверное, помогут. Смотрите сериал «Папочка» онлайн в нашем интернет-кинотеатре.', '', '<img src=\"/img/serials/3.jpg\">', 'Комедия'),
(4, 'Плащ и кинжал', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Молодежный фантастический сериал, созданный по мотивам одноименной серии комиксов Marvel. В качестве одного из продюсеров проекта выступил легендарный Стэн Ли – создатель Человека-паука, Людей Икс, Доктора Стрэнджа, Железного человека, Сорвиголовы, Тора и многих других супергероев. Тэнди Боуэн (Оливия Холт) – красивая девушка, которая промышляет воровством: она мечтает скопить побольше денег, чтобы навсегда сбежать из-под опеки своей эгоистичной матери. Тайрон Джонсон (Обри Джозеф) – замкнутый подросток-афроамериканец, выросший в бедном районе. Случайная встреча на школьной вечеринке изменит жизнь обоих: вскоре Тэнди и Тайрон обнаружат у себя сверхспособности, которыми они пока не в силах управлять. Тэнди способна генерировать световые кинжалы, а Тайрон может перемещаться в пространстве с помощью некой темной энергии. Разгадка удивительных способностей подростков кроется в их общем прошлом – роковой штормовой ночи, когда Тэнди потеряла отца, а Тайрон – брата. Постепенно Тэнди и Тайрон понимают, что им лучше держаться вместе, ведь только так они смогут научиться управлять своими силами. Сериал «Плащ и Кинжал» вы можете посмотреть онлайн на нашем сайте.', '', '<img src=\"/img/serials/4.jpg\">', 'Боевик'),
(5, 'Остаться в живых', '<!-- Put this script tag to the <head> of your page -->\n<script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?159\"></script>\n\n<script type=\"text/javascript\">\n  VK.init({apiId: 6723741, onlyWidgets: true});\n</script>\n\n<!-- Put this div tag to the place, where the Comments block will be -->\n<div id=\"vk_comments\"></div>\n<script type=\"text/javascript\">\nVK.Widgets.Comments(\"vk_comments\", {limit: 10, width: \"1000\", attach: \"*\"});\n</script>', 'Семь премий Эмми, шесть «Золотых глобусов», миллионы поклонников и тысячи восторженных отзывов критиков. Снятый с размахом большого кино, вобравший в себя все возможные жанры (от научпопа и экшена до мистики) сериал про то, как выживали спасшиеся пассажиры самолета, который не долетел из Сиднея до Лос-Анджелеса, упав на, казалось, необитаемый остров в южной части Тихого океана. Теперь без преувеличения культовый сериал «Остаться в живых», также известный как Lost, можно смотреть и пересматривать онлайн. Над одним из многочисленных островов Океании терпит крушение самолет. В живых остаются 48 пассажиров. Надежд на спасение извне нет. Оказавшись на тропическом острове лицом к лицу с дикой природой, чужие друг другу люди вынуждены объединиться, чтобы сохранить свои жизни. Тем временем остров преподносит им один сюрприз за другим: это и полярные медведи, и загадочный люк, и леденящий душу рев неведомого существа, раздающийся из джунглей, и встреча с агрессивно настроенными аборигенами.', '', '<img src=\"/img/serials/5.jpg\">', 'Боевик');

-- --------------------------------------------------------

--
-- Структура таблицы `signup`
--

CREATE TABLE `signup` (
  `user_id` int NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `signup`
--

INSERT INTO `signup` (`user_id`, `username`, `password`, `admin`) VALUES
(1, 'admin', '12345', 0),
(3, 'Rodya', 'Words', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cartoons`
--
ALTER TABLE `cartoons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cartoons`
--
ALTER TABLE `cartoons`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `film`
--
ALTER TABLE `film`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `serials`
--
ALTER TABLE `serials`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2021 г., 16:10
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `analitic_med`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback_models`
--

CREATE TABLE `feedback_models` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback_models`
--

INSERT INTO `feedback_models` (`id`, `email`, `user`, `message`, `created_at`, `updated_at`) VALUES
(1, '2121212@mail.ru', 'sdfdfd22', 'sfsdd dsdsds ds sdsdsdsds dsssssssssss dsdsdssss', '2021-10-14 07:51:17', '2021-10-14 07:51:17'),
(5, 'dasha@mail.com', 'Dasha Krasivaea', 'Zdravstvuite. Skajite,kak u vas dela?', '2021-10-14 07:56:54', '2021-10-14 07:56:54');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_14_084820_create_feedback_models_table', 1),
(7, '2021_10_18_071428_create_serviciis_table', 2),
(8, '2021_10_18_081925_create_servicii_imuns_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `serviciis`
--

CREATE TABLE `serviciis` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `serviciis`
--

INSERT INTO `serviciis` (`id`, `name`, `material`, `cost`) VALUES
(2, 'Examinarea frotiului', 'secretul prostatei,uretral,vaginal,colului utelin', 35),
(3, 'Gonoree', 'secretul prostatei,uretral,vaginal,colului utelin', 90),
(4, 'Trihomonus', 'secretul prostatei,uretral,vaginal,colului utelin', 90),
(5, 'Gardnerela', 'secretul prostatei,uretral,vaginal,colului utelin', 90),
(6, 'Însămîbțarea la levuri genul Candida și alt.', 'secretul prostatei,uretral,vaginal,colului utelin', 80),
(7, 'Investigarea bac. lalevuri genul Candida', 'secretul din nasofaringe,urina,urechi,păr,sputa,pielii,unghii', 80),
(8, 'Însămîbțarea urinei cu determinarea sensibilității la antibiotice', 'secretul uretral,colului utelin', 90),
(9, 'Însămîbțarea sîngelui cu determinarea sensibilității la antibiotice', 'sînge', 90),
(10, 'Însămîbțarea spălăturii bronhice', 'spalaturi bronșice', 90),
(11, 'Însămînţarea secterului din ochi', 'secretul de pe pleoapă, conjunctivă, scleră, sacul lacrimal', 60),
(12, 'Însămînţarea secretului din urechi cu determinarea sensibilităţii la antibiotice', 'secretul urechii, punctate', 90),
(13, 'Examinarea secreţiilor căilor respiratorii cu determinarea sensibilităţii la antibiotice', 'nas, faringe, spută, conţinutul bronhiilor, exudatelor, punctate', 90),
(14, 'Examinarea conţinutului plăgilor infectate cu determinarea sensibilităţii la antibiotice', 'puroi, resturile plăgilor infectate, puncţie', 90),
(15, 'Examinarea frotiului', 'secretul prostatei,uretral,vaginal,colului utelin', 35),
(16, 'Examinarea organelor genitale la flora patogenă cu determinarea sensibilităţii la antibiotice', 'secretul prostatei,uretral,vaginal,colului utelin', 90),
(17, 'Examinarea la disbacterioză cu determinarea sensibilităţii la antibiotice', 'mase fecale', 160),
(18, 'Examinarea la enterobacterii patogene şi flora condiţionat patogenă cu determinarea sens. la antibiotice', 'mase fecale', 90),
(19, 'Examinarea bacteriologică la stafilococ', 'secretul nasului,                  masele fecale', 90);

-- --------------------------------------------------------

--
-- Структура таблицы `servicii_imuns`
--

CREATE TABLE `servicii_imuns` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `servicii_imuns`
--

INSERT INTO `servicii_imuns` (`id`, `name`, `material`, `cost`) VALUES
(1, 'Factorul  reumatoid  (RF)', 'sînge', 40),
(2, 'Antistreptolizina – О  (ASO)', 'sînge', 40),
(3, 'Proteina  С – reactivă  (CPRA)', 'sînge', 40),
(4, 'Lupus  Eritematos Sistemic (SLE)', 'sînge', 50),
(5, 'Microreacţie la sifilis MRS', 'sînge', 100),
(6, 'Examinarea la Sifilis (ТРНА)', 'sînge', 100),
(7, 'HIV(HIV1 şi HIV2)', 'sînge', 100),
(8, 'Testele reumatice( Factorul reumatoid,Antistreptolizina-O,Proteina C reactivă)', 'sînge', 120),
(9, 'Anti Miuller', 'sînge', 680),
(10, 'Hepatita virală В  (HBV) (calitativ)', 'sînge (plasma) ', 300),
(11, 'Hepatita virală С (HCV) (calitativ)', 'sînge (plasma) ', 380),
(12, 'Mononucleoza (Epstein-Barr)', 'sînge (plasma), secreţii vaginale', 220),
(13, 'Virusul hepatitei virale B determinarea cantitativă', 'sînge (plasma) ', 1000),
(14, 'Virusul hepatitei virale C determinarea cantitativă', 'sînge (plasma) ', 1000),
(15, 'Genotipul HCV', 'sînge (plasma) ', 1200),
(16, 'Virusul hepatitei virale D determinarea cantitativă', 'sînge (plasma) ', 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `feedback_models`
--
ALTER TABLE `feedback_models`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `serviciis`
--
ALTER TABLE `serviciis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `servicii_imuns`
--
ALTER TABLE `servicii_imuns`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback_models`
--
ALTER TABLE `feedback_models`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `serviciis`
--
ALTER TABLE `serviciis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `servicii_imuns`
--
ALTER TABLE `servicii_imuns`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

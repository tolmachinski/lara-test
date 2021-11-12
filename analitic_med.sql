-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2021 г., 13:59
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
(8, '2021_10_18_081925_create_servicii_imuns_table', 3),
(9, '2021_10_20_050030_create_servicii_gens_table', 4),
(10, '2021_10_22_054146_create_servicii_bloods_table', 5),
(11, '2021_10_22_061558_create_servicii_bios_table', 6),
(12, '2021_10_22_062624_create_servicii_bis_table', 7);

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
(2, 'Examinarea frotiului', 'secretul prostatei,uretral,vaginal,colului uterin', 35),
(3, 'Gonoree', 'secretul prostatei,uretral,vaginal,colului uterin', 90),
(4, 'Trihomonas', 'secretul prostatei,uretral,vaginal,colului uterin', 90),
(5, 'Gardenerella', 'secretul prostatei,uretral,vaginal,colului uterin', 90),
(6, 'Însămînțarea la levuri genul Candida și alt.', 'secretul prostatei,uretral,vaginal,colului uterin', 80),
(7, 'Investigarea bac. lalevuri genul Candida', 'secretul din nasofaringe,urina,urechi,păr,sputa,pielii,unghii', 80),
(8, 'Însămînțarea urinei cu determinarea sensibilității la antibiotice', 'secretul uretral,colului uterin', 90),
(9, 'Însămînțarea sîngelui cu determinarea sensibilității la antibiotice', 'sînge', 90),
(10, 'Însămînțarea spălăturii bronhice', 'spalaturi bronșice', 90),
(11, 'Însămînţarea secterului din ochi', 'secretul de pe pleoapă, conjunctivă, scleră, sacul lacrimal', 60),
(12, 'Însămînţarea secretului din urechi cu determinarea sensibilităţii la antibiotice', 'secretul urechii, punctate', 90),
(13, 'Examinarea secreţiilor căilor respiratorii cu determinarea sensibilităţii la antibiotice', 'nas, faringe, spută, conţinutul bronhiilor, exudatelor, punctate', 90),
(14, 'Examinarea conţinutului plăgilor infectate cu determinarea sensibilităţii la antibiotice', 'puroi, resturile plăgilor infectate, puncţie', 90),
(15, 'Examinarea frotiului', 'secretul prostatei,uretral,vaginal,colului uterin', 35),
(16, 'Examinarea organelor genitale la flora patogenă cu determinarea sensibilităţii la antibiotice', 'secretul prostatei,uretral,vaginal,colului uterin', 90),
(17, 'Examinarea la disbacterioză cu determinarea sensibilităţii la antibiotice', 'mase fecale', 160),
(18, 'Examinarea la enterobacterii patogene şi flora condiţionat patogenă cu determinarea sens. la antibiotice', 'mase fecale', 90),
(19, 'Examinarea bacteriologică la stafilococ', 'secretul nasului,masele fecale', 90),
(20, 'Examinarea bacteriologică a materialului necroptic (cadaveric)', 'bucate de organe,țesuturi,sînge,puroi,exudat,lichid cefalorahidian', 90),
(21, 'Examinarea bacteriologică a maselor fecale la iersinioză cu determinarea sensibikitații la antibiotice', 'urina,mase fecale,sînge,secretul faringiar', 300),
(22, 'Examinarea bacteriologică la infecțiile tifoparatifice', 'sînge,bilă,urina,mase fecale,raclajul erupțiilor de pe piele', 300);

-- --------------------------------------------------------

--
-- Структура таблицы `servicii_bis`
--

CREATE TABLE `servicii_bis` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `servicii_bis`
--

INSERT INTO `servicii_bis` (`id`, `name`, `material`, `cost`) VALUES
(1, 'Analiza generală a sîngelui (Hemograma)', 'sînge (ser)', 75),
(2, 'Analiza generală a urinei (Urograma)', 'urina', 20),
(3, 'Calciu ', 'sînge (ser), urină', 25),
(4, 'Fier', 'sînge (ser)', 25),
(5, 'Albumina', 'sînge (ser)', 25),
(6, 'Bilirubina totală (ТВ)', 'sînge (ser)', 20),
(7, 'Bilirubina directa (DB)', 'sînge (ser)', 20),
(8, 'Proteina totală', 'sînge (ser)', 20),
(9, 'Creatinina', 'sînge (ser), urină', 20),
(10, 'Ureea', 'sînge (ser), urină', 20),
(11, 'Acid uric', 'sînge (ser), urină', 20),
(12, 'Glucoza', 'sînge (ser), urină', 25),
(13, 'Colesterol total', 'sînge (ser)', 20),
(14, 'Colesterolul lipidelor cu densitate înaltă HDL', 'sînge (ser)', 20),
(15, 'Colesterolul lipidelor cu densitate joasă LDL', 'sînge (ser)', 20),
(16, 'Trigliceride', 'sînge (ser)', 20),
(17, 'Fosfataza alcalină (FA)', 'sînge (ser)', 25),
(18, 'Alanin – aminotransferaza (ALT, GPT)', 'sînge (ser)', 20),
(19, 'Aspartat – aminotransferaza (AST,GOT)', 'sînge (ser)', 20),
(20, 'Gamma – glutamiltransferaza (GGT)', 'sînge (ser)', 20),
(21, 'Lactat dehidrogenaza (LDH)', 'sînge (ser)', 20),
(22, 'Alfa – amilaza ', 'sînge (ser), urina', 25),
(23, 'Lipaza', 'sînge (ser)', 50),
(24, 'Diastaza urinei', 'urina', 60),
(25, 'Magneziu', 'sînge (ser), urina', 35),
(26, 'Proba cu timol', 'sînge (ser)', 15),
(27, 'Hemoglobina glicozilată (НВА1С)', 'sînge (ser)', 120),
(28, 'Lipidograma ', 'sînge (ser)', 85),
(29, 'Amilaza pancreatică', 'sînge (ser)', 50),
(30, 'Proba  Reberg', 'sînge (ser), urina', 120),
(31, 'Testele ficatului', 'sînge (ser)', 140),
(32, 'Iod în urină', 'sînge(ser)', 100),
(33, 'Panel  alimentar Nr.1 (20 de teste)', 'sînge', 800),
(34, 'Panel  respirator Nr.2 (20 de teste)', 'sînge', 800),
(35, 'Panel  pediatric Nr.3 (20 de teste)', 'sînge', 800),
(36, 'Panel  mixt Nr.4 (20 de teste)', 'sînge', 800),
(37, 'Imunoglobulina IgE total', 'sînge', 90);

-- --------------------------------------------------------

--
-- Структура таблицы `servicii_bloods`
--

CREATE TABLE `servicii_bloods` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `servicii_bloods`
--

INSERT INTO `servicii_bloods` (`id`, `name`, `material`, `cost`) VALUES
(1, 'LH  (hormonul luteinizant)', 'sînge', 90),
(2, 'FSH  (hormonul foliculostimulant)', 'sînge', 90),
(3, 'Estradiol (Е2)', 'sînge', 90),
(4, 'Prolactina', 'sînge', 90),
(5, 'Testosteron', 'sînge', 90),
(6, 'Progesteron', 'sînge', 90),
(7, 'Cortizol', 'sînge', 90),
(8, 'DHEA – sulfat ', 'sînge', 90),
(9, 'HCG - (horiogonadotropina)', 'sînge', 90),
(10, 'Т3(triodtironin)', 'sînge', 90),
(11, 'Т4(tiroxin)', 'sînge', 90),
(12, 'TSH  (hormonul tiriostimulant)', 'sînge', 90),
(13, 'Anti TG (anticorpi la Tirioglobulină)', 'sînge', 95),
(14, 'Anti TPO (anticorpi la Tirioperoxidază)', 'sînge', 95),
(15, 'Hormonul de creştere – Somatotropin ', 'sînge', 90),
(16, 'Estriolul  liber (ЕЗ)', 'sînge', 90),
(17, 'Т3/liber', 'sînge', 90),
(18, 'Т4/liber', 'sînge', 90),
(19, 'Calcitonina', 'sînge', 120),
(20, 'Free β– HCG  (liber)', 'sînge', 200),
(21, 'PAPP – A', 'sînge', 200),
(22, 'Anti – Fosfolipide  IgG', 'sînge', 125),
(23, 'Anti – Fosfolipide IgM', 'sînge', 125),
(24, 'TG  (Thyroglobulin)', 'sînge', 150),
(25, 'HCY  (Homocysteine)', 'sînge', 300),
(26, 'IPT  (Parathormone)', 'sînge', 150),
(27, 'Testosteron  liber ', 'sînge', 100),
(28, 'D-dimer (turbo)', 'sînge', 160),
(29, 'C-Peptide', 'sînge', 120),
(30, 'Trichinella  lgG', 'sînge', 95),
(31, 'Taenia  solium G', 'sînge', 95),
(32, 'Toxocara   lgG', 'sînge', 95),
(33, 'Echinococcus  lgG', 'sînge', 95),
(34, 'Lamblia  (Giardia)  lgA, lgM, lgG ', 'sînge', 95),
(35, 'Ascarida  IgG', 'sînge', 95),
(36, 'Demodex  (frotiu)', 'gene, piele, sprîncene', 50),
(37, 'AFP  (Alfa – fetoproteina)', 'sînge', 100),
(38, 'CEA (Antigen carcinomo-embrionar)', 'sînge', 100),
(39, 'СА -125  (Antigen cancerogen-ovarian)', 'sînge', 100),
(40, 'СА - 15,3 (Antigen cancerogen-mamar)', 'sînge', 100),
(41, 'СА - 19,9 (Antigen Carbohidrat)', 'sînge', 100),
(42, 'PSA  (Antigen specific al prostatei)', 'sînge', 90),
(43, 'PSA/Free (Antigen specific liber al prostatei)', 'sînge', 100),
(44, 'Grupa sangvină + Rh  factor', 'sînge  (integru)', 60),
(45, 'Anticorpi  la  Rh  factor (calitativ)', 'sînge  (integru)', 60),
(46, 'Anticorpi  la  Rh  factor (titru)', 'sînge  (integru)', 60);

-- --------------------------------------------------------

--
-- Структура таблицы `servicii_gens`
--

CREATE TABLE `servicii_gens` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `servicii_gens`
--

INSERT INTO `servicii_gens` (`id`, `name`, `material`, `cost`) VALUES
(1, 'Chlamydia trachomatis', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(2, 'Ureaplasma  urealiticum / parvum', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(3, 'Micoplasma Hominis', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(4, 'Micoplasma Genitalium', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(5, 'Gardnerella vaginalis', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(6, 'Neisseria gonorrhoeae', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(7, 'Toxoplasma goпdii', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(8, 'Candida albicans', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(9, 'Treponema palidum', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(10, 'Trichomonus vaginalis palidum', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 185),
(11, 'Determinarea sensibilităţii la antibiotice pentru mycoplasma şi ureaplasma', 'secretul uretral, secretul vaginal,\r\nsecretul colului uterin\r\n', 300),
(12, 'Helicobacter pylori', 'sînge', 185),
(13, 'Streptococcus pyogenes', 'sînge', 185),
(14, 'Legionella pneumophila', 'sînge', 185),
(15, 'Corynebacterium diphtheriae', 'sînge', 205),
(16, 'Mycobacterium tuberculosis', 'sînge', 205),
(17, 'Herpes Simplex virus (tip 1-2)', 'secretul uretral,vaginal,secretul colului uterin,urina', 185),
(18, 'Citomegalovirus', 'secretul uretral,vaginal,secretul colului uterin,urina', 185),
(19, 'Herpes Human Virus HHv-VI', 'secretul uretral,vaginal,secretul colului uterin,urina', 185),
(20, 'Virusul Papilomei virale (HPV 6;11)', 'sînge,secretul uretral,vaginal,secretul colului uterin', 170),
(21, 'Virusul Papilomei virale (HPV 16;31;35)', 'sînge,secretul uretral,vaginal,secretul colului uterin', 170),
(22, 'Virusul Papilomei virale (HPV 33;52;58)', 'sînge,secretul uretral,vaginal,secretul colului uterin', 170),
(23, 'Virusul Papilomei virale (HPV 18;39;45;59)', 'sînge,secretul uretral,vaginal,secretul colului uterin', 170),
(24, 'Hepatita varală B (HBV) (calitativ)', 'sînge (plasma)', 300),
(25, 'Hepatita varală C (HBV) (calitativ)', 'sînge (plasma)', 380),
(26, 'Hepatita varală D (HBV) (calitativ)', 'sînge (plasma)', 380),
(27, 'Mononucleoza (Epstein-Barr', 'sînge (plasma), secreții vaginale', 220),
(28, 'Verusul Hepatitei varale B determinarea cantitativă', 'sînge (plasma)', 1000),
(29, 'Verusul Hepatitei varale C determinarea cantitativă', 'sînge (plasma)', 1000);

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
(5, 'Microreacţie la sifilis MRS', 'sînge', 90),
(6, 'Examinarea la Sifilis (ТРНА)', 'sînge', 90),
(7, 'HIV(HIV1 şi HIV2)', 'sînge', 100),
(8, 'Proteina C - reactivă', 'sînge', 120),
(9, 'HBsAg', 'sînge', 90),
(10, 'Anti-HBsAg', 'sînge', 90),
(11, 'HBeAG/Ab', 'sînge', 90),
(12, 'Anti-HBcor sumar', 'sînge', 90),
(13, 'Anti-HCV', 'sînge', 90),
(14, 'Anti-HCV sumar', 'sînge', 90),
(15, 'Toxoplasma IgM', 'sînge', 90),
(16, 'Toxoplasma IgG', 'sînge', 90),
(17, 'CMV IgG', 'sînge', 90),
(18, 'Herpes Simplex Virus-2 IgM', 'sînge', 90),
(19, 'Herpes Simplex Virus-2 IgG', 'sînge', 90),
(20, 'Chlamidia IgG', 'sînge', 90),
(21, 'Helicobacter pylori IgG', 'sînge', 90),
(22, 'Helicobacter pylori IgM', 'sînge', 90),
(23, 'Anti - HBe', 'sînge', 90);

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
-- Индексы таблицы `servicii_bis`
--
ALTER TABLE `servicii_bis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `servicii_bloods`
--
ALTER TABLE `servicii_bloods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `servicii_gens`
--
ALTER TABLE `servicii_gens`
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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `serviciis`
--
ALTER TABLE `serviciis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `servicii_bis`
--
ALTER TABLE `servicii_bis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `servicii_bloods`
--
ALTER TABLE `servicii_bloods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `servicii_gens`
--
ALTER TABLE `servicii_gens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `servicii_imuns`
--
ALTER TABLE `servicii_imuns`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

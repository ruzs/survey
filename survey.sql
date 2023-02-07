-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-02-07 16:41:10
-- 伺服器版本： 10.4.25-MariaDB
-- PHP 版本： 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `survey`
--

-- --------------------------------------------------------

--
-- 資料表結構 `survey_log`
--

CREATE TABLE `survey_log` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `option_id` int(10) NOT NULL,
  `vote_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_log`
--

INSERT INTO `survey_log` (`id`, `user_id`, `subject_id`, `option_id`, `vote_time`) VALUES
(34, 1, 1, 2, '2023-02-07 14:57:54'),
(35, 1, 2, 3, '2023-02-07 14:57:57'),
(36, 1, 3, 23, '2023-02-07 15:18:46'),
(37, 1, 4, 25, '2023-02-07 15:18:58'),
(38, 1, 5, 27, '2023-02-07 15:19:03'),
(39, 1, 6, 30, '2023-02-07 15:19:10'),
(40, 1, 7, 31, '2023-02-07 15:19:18'),
(42, 1, 8, 33, '2023-02-07 15:19:29');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_options`
--

CREATE TABLE `survey_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `opt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `vote` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_options`
--

INSERT INTO `survey_options` (`id`, `subject_id`, `opt`, `vote`, `created_at`, `updated_at`) VALUES
(1, 1, '北部粽', 0, '2023-02-05 17:09:44', '2023-02-05 17:09:44'),
(2, 1, '南部粽', 1, '2023-02-05 17:09:44', '2023-02-05 17:09:44'),
(3, 2, '香菜 加到爆', 1, '2023-02-05 21:34:18', '2023-02-05 21:34:18'),
(4, 2, '不要任何香菜', 0, '2023-02-05 21:34:18', '2023-02-05 21:34:18'),
(23, 3, '拌咖哩飯', 1, '2023-02-06 00:26:28', '2023-02-07 12:12:07'),
(24, 3, '不拌咖哩飯', 0, '2023-02-06 00:26:28', '2023-02-06 00:26:28'),
(25, 4, '夏威夷Pizza 好吃', 1, '2023-02-06 00:28:46', '2023-02-06 00:28:46'),
(26, 4, '夏威夷Pizza 爛透了', 0, '2023-02-06 00:28:46', '2023-02-06 00:28:46'),
(27, 5, '麵線加大腸', 1, '2023-02-06 00:29:42', '2023-02-06 00:29:42'),
(28, 5, '麵線加蚵仔', 0, '2023-02-06 00:29:42', '2023-02-06 00:29:42'),
(29, 6, '刈包 加瘦肉', 0, '2023-02-06 00:31:04', '2023-02-06 00:31:04'),
(30, 6, '刈包 加肥肉', 1, '2023-02-06 00:31:04', '2023-02-06 00:31:04'),
(31, 7, '酥皮濃湯 混著吃', 1, '2023-02-06 00:31:50', '2023-02-06 00:31:50'),
(32, 7, '酥皮濃湯 分開吃', 0, '2023-02-06 00:31:50', '2023-02-06 00:31:50'),
(33, 8, '荷包蛋 半熟', 1, '2023-02-06 00:32:26', '2023-02-06 00:32:26'),
(42, 8, '荷包蛋 全熟', 0, '2023-02-06 01:14:29', '2023-02-06 01:14:29'),
(52, 9, 'c', 0, '2023-02-06 03:08:09', '2023-02-06 03:09:06'),
(53, 9, 'd', 0, '2023-02-06 03:08:09', '2023-02-06 03:09:11'),
(54, 9, 'e', 0, '2023-02-06 03:08:09', '2023-02-06 03:09:14'),
(55, 10, 'b1', 0, '2023-02-06 03:09:33', '2023-02-06 03:09:33'),
(56, 10, 'b2', 0, '2023-02-06 03:09:33', '2023-02-06 03:09:33'),
(57, 10, 'b3', 0, '2023-02-06 03:09:33', '2023-02-06 03:09:33'),
(58, 0, '', 0, '2023-02-07 15:18:46', '2023-02-07 15:18:46'),
(59, 0, '', 0, '2023-02-07 15:18:58', '2023-02-07 15:18:58'),
(60, 0, '', 0, '2023-02-07 15:19:03', '2023-02-07 15:19:03'),
(61, 0, '', 0, '2023-02-07 15:19:10', '2023-02-07 15:19:10'),
(62, 0, '', 0, '2023-02-07 15:19:18', '2023-02-07 15:19:18'),
(63, 0, '', 0, '2023-02-07 15:19:24', '2023-02-07 15:19:24');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_subject`
--

CREATE TABLE `survey_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` tinyint(1) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL,
  `vote` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_subject`
--

INSERT INTO `survey_subject` (`id`, `subject`, `type`, `active`, `vote`, `created_at`, `updated_at`) VALUES
(1, '食物宗教戰爭1', 1, 1, 1, '2023-02-05 17:08:41', '2023-02-06 01:14:55'),
(2, '食物宗教戰爭2', 1, 1, 1, '2023-02-05 21:34:18', '2023-02-05 21:34:18'),
(3, '食物宗教戰爭3', 1, 1, 1, '2023-02-05 21:44:44', '2023-02-07 12:12:18'),
(4, '食物宗教戰爭4', 1, 1, 1, '2023-02-05 22:36:17', '2023-02-06 00:23:01'),
(5, '食物宗教戰爭5', 1, 1, 1, '2023-02-05 22:46:53', '2023-02-06 00:23:09'),
(6, '食物宗教戰爭6', 1, 1, 1, '2023-02-05 23:43:32', '2023-02-06 00:24:05'),
(7, '食物宗教戰爭7', 1, 1, 1, '2023-02-05 23:45:52', '2023-02-06 00:24:14'),
(8, '食物宗教戰爭8', 1, 1, 1, '2023-02-05 23:51:13', '2023-02-06 00:24:17'),
(9, 'a', 1, 0, 0, '2023-02-06 03:08:09', '2023-02-06 03:08:09'),
(10, 'b', 1, 0, 0, '2023-02-06 03:09:33', '2023-02-06 03:09:33');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_users`
--

CREATE TABLE `survey_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(24) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pw` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `level` tinyint(2) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_users`
--

INSERT INTO `survey_users` (`id`, `acc`, `pw`, `email`, `level`, `name`, `last_login`, `sh`) VALUES
(1, 'ruzs', '0913', 'ruzs@gmail.com', 2, 'ruzs', '2023-02-05 16:13:51', 0),
(2, 'ru', '00', 're@gmail.com', 1, 'ru', '2023-02-05 17:33:02', 0),
(3, 'ru1', '11', 'ru1@gmail.com', 1, 'ru1', '2023-02-05 17:34:41', 0),
(4, 'ruzs1', '0913', 'ruzs1@gmail.com', 2, 'ruzs1', '2023-02-05 17:35:33', 0),
(5, 'ru2', '22', 'ru2@gmail.com', 1, 'ru2', '2023-02-05 17:42:34', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `survey_log`
--
ALTER TABLE `survey_log`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_options`
--
ALTER TABLE `survey_options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_subject`
--
ALTER TABLE `survey_subject`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_users`
--
ALTER TABLE `survey_users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_log`
--
ALTER TABLE `survey_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options`
--
ALTER TABLE `survey_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject`
--
ALTER TABLE `survey_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_users`
--
ALTER TABLE `survey_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-08 10:01:42
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expend` int(6) UNSIGNED NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoice`
--

INSERT INTO `invoice` (`id`, `code`, `number`, `period`, `expend`, `year`) VALUES
(1, 'LG', '131156', '3', 0, '1'),
(2, 'LG', '131156', '3', 4, '1'),
(3, 'LG', '131156', '3', 4, '1'),
(4, 'gf', '24054252', '1', 452452425, '1'),
(5, 'gf', '24054252', '1', 452452425, '1'),
(6, 'gf', '24054252', '1', 452452425, '1'),
(7, 'gf', '24054252', '1', 452452425, '1');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db`
--
CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `db`;

-- --------------------------------------------------------

--
-- 資料表結構 `autobiography`
--

DROP TABLE IF EXISTS `autobiography`;
CREATE TABLE `autobiography` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表新增資料前，先清除舊資料 `autobiography`
--

TRUNCATE TABLE `autobiography`;
--
-- 傾印資料表的資料 `autobiography`
--

INSERT INTO `autobiography` (`id`, `content`, `sh`) VALUES
(1, '測試一下', 0),
(4, '自傳擇一顯示，完成', 0),
(5, 'test', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表新增資料前，先清除舊資料 `contact`
--

TRUNCATE TABLE `contact`;
--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`id`, `name`, `image`, `tel`, `email`, `addr`, `intro`) VALUES
(1, '張建文', '11111', '+886-931833488', 'chang180@gmail.com', '新北市永和區', '目前在職訓局接受PHP資料庫網頁程式設計職前訓練');

-- --------------------------------------------------------

--
-- 資料表結構 `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `school` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表新增資料前，先清除舊資料 `education`
--

TRUNCATE TABLE `education`;
--
-- 傾印資料表的資料 `education`
--

INSERT INTO `education` (`id`, `school`, `start`, `end`, `sh`) VALUES
(1, '泰山職訓場', '2020-03', '2020-08', 1),
(4, '海軍官校-企業管理組', '1993-07', '1997-11', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtitle` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表新增資料前，先清除舊資料 `experience`
--

TRUNCATE TABLE `experience`;
--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `company`, `jobtitle`, `description`, `start`, `end`, `sh`) VALUES
(1, '泰山職訓場', '學員', '學技術', '2020-03', '2020-08', 1),
(2, '非洲貿易公司', '駐外人員', '住在外面', '2019-02', '2019-12', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jobcondition`
--

DROP TABLE IF EXISTS `jobcondition`;
CREATE TABLE `jobcondition` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobtitle` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表新增資料前，先清除舊資料 `jobcondition`
--

TRUNCATE TABLE `jobcondition`;
--
-- 傾印資料表的資料 `jobcondition`
--

INSERT INTO `jobcondition` (`id`, `jobtitle`, `salary`) VALUES
(1, 'PHP工程師', '35000'),
(5, '454', '456456');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `skill` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表新增資料前，先清除舊資料 `skill`
--

TRUNCATE TABLE `skill`;
--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `skill`, `catalog`) VALUES
(1, 'PHP', '後端'),
(2, 'JavaScript', '前端'),
(3, 'HTML', '前端'),
(4, 'CSS', '前端'),
(7, 'MySQL', '後端'),
(8, 'Photoshop', '影像編輯'),
(9, '中打 100字/分', '其他');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `autobiography`
--
ALTER TABLE `autobiography`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jobcondition`
--
ALTER TABLE `jobcondition`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `autobiography`
--
ALTER TABLE `autobiography`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jobcondition`
--
ALTER TABLE `jobcondition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

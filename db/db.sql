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

CREATE TABLE `autobiography` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `autobiography`
--

INSERT INTO `autobiography` (`id`, `content`, `sh`) VALUES
(1, '觀自在菩薩 行深般若波羅蜜多時 照見五蘊皆空 度一切苦厄\r\n舍利子 色不異空 空不異色 色即是空 空即是色 受想行識 亦復如是\r\n舍利子 是諸法空相 不生不滅 不垢不淨 不增不減 是故空中無色\r\n無受想行識 無眼耳鼻舌身意 無色聲香味觸法 無眼界 乃至無意識界\r\n無無明 亦無無明盡 乃至無老死 亦無老死盡 無苦集滅道 無智亦無得\r\n以無所得故 菩堤薩埵 依般若波羅蜜多故 心無罣礙 無罣礙故 無有恐怖\r\n遠離顛倒夢想 究竟涅槃 三世諸佛 依般若波羅蜜多故 得阿耨多羅三藐三菩堤\r\n故知般若波羅蜜多 是大神咒 是大明咒 是無上咒 是無等等咒\r\n能除一切苦 真實不虛 故說般若波羅蜜多咒 即說咒曰 揭諦揭諦\r\n波羅揭諦 波羅僧揭諦 菩堤薩婆訶', 1),
(4, '自傳擇一顯示，完成', 0),
(5, 'test', 0),
(6, '家住新北市永和區，家庭成員四人，父親為職業軍人轉任公職人員，已過世；母親擔任家管工作；家兄亦在海軍擔任軍官，已另行成家；本人已退伍，在家與母親同住。\r\n\r\n求學時期就讀海軍軍官學校，於民國八十六年畢業，在校時選修資訊管理組，在學期間自行學習中、英文打字及文書處理，於服役期間，曾兩次考試參加赴美軍售訓練，分別歷時八個月及三個月，對於英語溝通能力有極大助益。\r\n\r\n軍中擔任軍官期間，多數為幕僚職務，主要工作在於協助單位主官之行政業務，同時管理及訓練下轄之軍、士官兵，另因曾赴美參加軍售訓練，曾於海軍技術學校擔任教官，參與講習工作。\r\n\r\n自軍中退伍後，曾擔任連鎖滷味店店長及不動產營業員等工作，過去四年，曾於海外工作，獲得精進英語能力的機會，於去年決定開始學習更高深的技術，年底返國。\r\n\r\n今年三月開始，經由甄試合格，進入勞動部北分署泰山職訓場，進行PHP資料庫程式設計職前訓練班，在完成訓練期間，已取得網頁設計相關證照，現在正在尋找能夠發展學習成果的機會。\r\n', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

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
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`id`, `name`, `image`, `tel`, `email`, `addr`, `intro`) VALUES
(1, '張建文', '11111', '+886-931833488', 'chang180@gmail.com', '新北市永和區', '目前在職訓局接受PHP資料庫網頁程式設計職前訓練');

-- --------------------------------------------------------

--
-- 資料表結構 `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `school` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `education`
--

INSERT INTO `education` (`id`, `school`, `start`, `end`, `sh`) VALUES
(1, '泰山職訓場', '2020-03', '2020-08', 1),
(4, '海軍官校-企業管理組', '1993-07', '1997-11', 1),
(5, 'test', '2020-04', '2020-08', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

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
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `company`, `jobtitle`, `description`, `start`, `end`, `sh`) VALUES
(1, '泰山職訓場', '學員', '學技術', '2020-03', '2020-08', 1),
(2, '非洲貿易公司', '駐外人員', '住在外面', '2019-02', '2019-12', 1),
(3, '東牧', '倉管', '管理倉庫', '2016-01', '2016-04', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `jobcondition`
--

CREATE TABLE `jobcondition` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobtitle` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `skill` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '中打 100字/分', '其他'),
(10, '英打 70字/分', '其他');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jobcondition`
--
ALTER TABLE `jobcondition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

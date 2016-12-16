-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-12-14 23:27:37
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `team8`
--

-- --------------------------------------------------------

--
-- 資料表結構 `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sugar` int(11) NOT NULL,
  `milk` int(11) NOT NULL,
  `flour` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `food`
--

INSERT INTO `food` (`id`, `fname`, `sugar`, `milk`, `flour`, `time`, `price`) VALUES
(1, 'bread', 2, 2, 2, 20, 15),
(2, 'dd', 4, 4, 0, 40, 40);

-- --------------------------------------------------------

--
-- 資料表結構 `oven`
--

CREATE TABLE `oven` (
  `ovenid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `finishtime` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `shop`
--

INSERT INTO `shop` (`id`, `name`, `price`) VALUES
(1, 'sugar', 10),
(2, 'oven', 1000),
(3, 'milk', 10),
(4, 'flour', 15);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `sugar` int(11) NOT NULL,
  `flour` int(11) NOT NULL,
  `milk` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `oven` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `sugar`, `flour`, `milk`, `money`, `oven`) VALUES
(1, 18, 9, 9, 3784, 3);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `oven`
--
ALTER TABLE `oven`
  ADD PRIMARY KEY (`ovenid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用資料表 AUTO_INCREMENT `oven`
--
ALTER TABLE `oven`
  MODIFY `ovenid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

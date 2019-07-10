-- --------------------------------------------------------

--
-- Author:LJC
-- Finish time:2019/07/02
-- In Jinjiang NO.1 Middle School
-- Zhongkao Chengji Fenxi System Data Base File.
-- Powered & Developed by LJC
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` mediumint(10) NOT NULL,
  `username` char(10) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`uid`, `username`, `password`) VALUES
(1, 'ljc', '20031027ABCabc'),
(2, 'lty', 'lty123456'),
(3, 'root', '20031027ABCabc');

-- --------------------------------------------------------

--
-- 表的结构 `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `uid` mediumint(2) unsigned NOT NULL,
  `name` char(10) NOT NULL,
  `whether` char(2) NOT NULL,
  `img` char(11) NOT NULL,
  `sex` int(5) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `students`
--

INSERT INTO `students` (`uid`, `name`, `whether`, `img`, `sex`, `time`) VALUES
(1, '车语辰', '0', '0', 1, 0),
(2, '郭静文', '0', '0', 1, 0),
(3, '郭云舒', '0', '0', 1, 0),
(4, '洪凯晶', '0', '0', 1, 0),
(5, '胡斌', '0', '0', 0, 0),
(6, '胡真霞', '0', '0', 1, 0),
(7, '黄培发', '0', '0', 0, 0),
(8, '黄婉婷', '0', '0', 1, 0),
(9, '黄怡滨', '0', '0', 0, 0),
(10, '黄智贤', '0', '0', 0, 0),
(11, '金果', '0', '0', 1, 0),
(12, '柯诗颖', '0', '0', 1, 0),
(13, '李灿', '0', '0', 1, 0),
(14, '李锦成', '0', '0', 0, 0),
(15, '李侨军', '0', '0', 0, 0),
(16, '李瑞艳', '0', '0', 1, 0),
(17, '李睿', '0', '0', 0, 0),
(18, '李田英', '0', '0', 1, 0),
(19, '李雯婷', '0', '0', 1, 0),
(20, '李星旗', '0', '0', 0, 0),
(21, '廖鹏浩', '0', '0', 0, 0),
(22, '林境祥', '0', '0', 0, 0),
(23, '林燕美', '0', '0', 1, 0),
(24, '刘欣楠', '0', '0', 1, 0),
(25, '潘思婷', '0', '0', 1, 0),
(26, '苏俊鹏', '0', '0', 0, 0),
(27, '王小丹', '0', '0', 1, 0),
(28, '吴梓豪', '0', '0', 0, 0),
(29, '伍凤', '0', '0', 1, 0),
(30, '肖福新', '0', '0', 0, 0),
(31, '谢俊峰', '0', '0', 0, 0),
(32, '谢仁杉', '0', '0', 0, 0),
(33, '谢文阳', '0', '0', 0, 0),
(34, '熊彦莉', '0', '0', 1, 0),
(35, '徐子凯', '0', '0', 0, 0),
(36, '许炜煜', '0', '0', 0, 0),
(37, '杨永新', '0', '0', 0, 0),
(38, '曾根基', '0', '0', 0, 0),
(39, '张凤佳', '0', '0', 1, 0),
(40, '张潜龙', '0', '0', 0, 0),
(41, '张炜彬', '0', '0', 0, 0),
(42, '朱昭宇', '0', '0', 0, 0),
(43, '任俊杰', '0', '0', 0, 0),
(44, '吴镒铠', '0', '0', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` mediumint(25) unsigned NOT NULL,
  `name` char(15) NOT NULL,
  `id` mediumint(20) NOT NULL,
  `tot` char(255) NOT NULL,
  `tot1` char(255) NOT NULL,
  `ksh` char(25) NOT NULL,
  `yw` char(255) NOT NULL,
  `sx` char(255) NOT NULL,
  `yy` char(255) NOT NULL,
  `zz` char(255) NOT NULL,
  `ls` char(255) NOT NULL,
  `wl` char(25) NOT NULL,
  `hx` char(25) NOT NULL,
  `ty` char(25) NOT NULL,
  `a` char(25) NOT NULL,
  `b` char(25) NOT NULL,
  `c` char(25) NOT NULL,
  `d` char(25) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` mediumint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `uid` mediumint(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` mediumint(25) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

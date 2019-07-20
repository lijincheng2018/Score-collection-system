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
(1, 'root', '123456');

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

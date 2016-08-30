-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 01:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startuply`
--

-- --------------------------------------------------------

--
-- Table structure for table `editcontact`
--

CREATE TABLE `editcontact` (
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `editcontact`
--

INSERT INTO `editcontact` (`mail`, `place`, `phone`) VALUES
('asdfsf', 'asdfadsf', 'dafsdaf');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(2) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `h3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `p1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `p2` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `name`, `h3`, `p1`, `p2`) VALUES
(1, 'sec1tab1', 'FOR EVERY', 'ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(2, 'sec1tab2', 'NEW AGE TOLOGY', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(3, 'sec2', 'NEW AGE TECHNOLOGY', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(4, 'sec3', 'HANG ON TO YOUR HELMET', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) NOT NULL,
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon`, `heading`, `text`) VALUES
(1, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(4, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(5, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(6, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(9, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(10, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(11, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(12, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(13, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.');

-- --------------------------------------------------------

--
-- Table structure for table `featureslider`
--

CREATE TABLE `featureslider` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `featureslider`
--

INSERT INTO `featureslider` (`id`, `name`, `text`) VALUES
(1, 'Feature 1', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(2, 'Lorem ipsum 2', 'Lorem ipsum dolor si amet '),
(3, 'Lorem ipsum 3', 'Lorem ipsum dolor si amet ');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(1) NOT NULL,
  `text` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `text`) VALUES
(1, 'Just wait, do not hurry â€” <span>launch</span> your startup later!'),
(2, 'This template is not for all startups, go find yourself another template');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(4) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `category`) VALUES
(1, 'Feature', 'http://www.facebook.com', 'main'),
(4, 'Quotes', 'http://www.yahoo.com', 'main'),
(5, 'Contact', 'http://www.google.com', 'main'),
(9, 'sd', 'sdg', 'sdg');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(1) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(5) NOT NULL,
  `period` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `period`) VALUES
(1, 'Individual', 23, 'per month'),
(2, 'Studio', 20, 'subscription'),
(3, 'Enterprise', 49, 'per month');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `workplace` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `quote` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `name`, `job`, `workplace`, `quote`, `img`) VALUES
(1, 'Nigar Jafaro', 'Student', 'Code Academy', 'Evvel bunu duzelt', 'img/29082016101330.jpg'),
(2, 'Chingiz', 'Accountant', 'Vell Inc', 'CLIENT 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.', 'img/29082016101526.jpg'),
(3, 'Peter Moosome', 'Marketing VP', 'Footbook', 'CLIENT 3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.', 'img/29082016101543.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `row`
--

CREATE TABLE `row` (
  `id` int(3) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `row`
--

INSERT INTO `row` (`id`, `name`, `mail`) VALUES
(1, 'ali', 'alixalilzade@gmail.c'),
(2, 'sd', 'cvxl'),
(3, 'fv', 'cv'),
(4, 'ali', 'xalilzade'),
(5, 'sdc', 'alixalilzade@gmail.c'),
(6, 'sdlf', 'alixalilzade@gmail.c'),
(7, 'sdlf', 'alixalilzade@gmail.c'),
(8, 'adsgasdg', 'sadgsdag'),
(9, 'asgsfag', 'asfgsfaga');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(1) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `job`, `description`, `image`) VALUES
(1, 'Mike Bolder', 'Developer', 'Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.', 'img/30082016122150.jpg'),
(2, 'Chingiz Mammadli', 'Deseloper', 'sdsds', 'img/30082016122031.jpg'),
(3, 'Mike Bolder', 'Developer', 'adfasdf', 'img/team3.jpg'),
(4, 'Mike Bolder', 'Developer', 'adfasdf', 'img/team4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureslider`
--
ALTER TABLE `featureslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `row`
--
ALTER TABLE `row`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `featureslider`
--
ALTER TABLE `featureslider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `row`
--
ALTER TABLE `row`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

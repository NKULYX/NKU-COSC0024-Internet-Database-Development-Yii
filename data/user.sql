-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-04 11:33:46
-- 服务器版本： 10.4.27-MariaDB
-- PHP 版本： 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `purview` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `purview`) VALUES
(1, 'admin', 'dOukCdzkuR_bNC7m5w4MX7dIM8-xpDU0', '$2y$13$qGr496xWJUI3JNCDKWTz1uGLFd3vl2mEwwbv2lDrdhA0UZv68D2k6', NULL, 'admin@gmail.com', 10, 1674014197, 1674014197, 'IIlCzFSOBKAV61Q-pBPVXdiSrcBW2AcB_1674014197', 0),
(2, 'test', '8WxDxmV_G65cMPJin4-bP8DIPhiiHeX3', '$2y$13$qSFtv0a8j9/xdth6lUC9HuYtDOUwNUSxnUWjncto4nrhn/is.ntqO', NULL, 'test@gmail.com', 10, 1674014280, 1674014280, 'uRXxQH0WoMe7BIjWfAr6dariEW_hFwFI_1674014280', 0),
(3, 'hi', 'E3j9x--MqpacUKf9nbXmEzPkvpwb_-bF', '$2y$13$kBF.m80SDkFMzX7qZpopCObdmzFrEFlMwcdA/rgpz.t5KHWvfsc5y', NULL, 'hi@hi.com', 10, 1675499292, 1675505481, 'KC36VFTHxn-F4Svc2OqdWk7W_GZ0hiDF_1675499292', 0),
(4, 'root', 'UPZaNzH2qdUjlGBH8JaPSgHRT_6ITKPv', '$2y$13$YmllgNhpOZyjxsBbv0kTH.zN5nkHTk/2ASTijvW7nSjfxE/xXIDpa', NULL, 'root@root.com', 10, 1675502252, 1675502252, 'mqUfViVOjgiO8Cn7U8EJH0cY_CaDiTds_1675502252', 1),
(5, 'user1', 'EjOMVLEUyBIF5ME7BInsvyA6Xdut1Ljz', '$2y$13$D3x0SxX95.ck0YSVXi0LcuxTPo0BiLSZ0MT.wSe2WELKXlMo.RL3q', NULL, 'user1@user1.com', 10, 1675505066, 1675505066, 'SgCs0C3tImLYkEmoZpFbS57xsVw3fRII_1675505066', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

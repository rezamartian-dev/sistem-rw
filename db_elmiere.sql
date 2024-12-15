-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2024 at 04:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elmiere`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `caption`, `image`, `created_at`) VALUES
(1, 'Photography is like a moment, an instant. You need passionate about design filmmaking when I graduat', 'Photography is like a moment, an instant. You need a half-second to get photo. So it\'s good capture people when they are themselves.I became passionate about nature filmmaking when I graduated from UC.Photography is like a moment, an instant. You need a half-second to get photo. So it\'s good capture people when they are themselves.I became passionate about nature filmmaking when I graduated from UC', 'assets/backoffice/uploads/images/about/5c6e94fcc4a827ef8ba20da1be7f29d4.jpg', '2023-12-25 16:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `youtube` text NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `created_at`, `image`, `youtube`, `slug`) VALUES
(1, 'Nabati', '2023-12-24 17:15:36', 'https://upload.wikimedia.org/wikipedia/commons/8/88/Nabati_logo.svg', 'kPmjOWYjG-M?si=ctEmeaz8NMUyAJJK', 'nabati'),
(3, 'None', '2023-12-24 16:33:11', '', '', 'none'),
(4, 'Annashrul Yusuf & Syifa', '2023-12-24 16:33:08', '', '', 'annashrul-yusuf-and-syifa'),
(5, 'BCL & Ariel', '2023-12-24 17:30:32', '', '8JhJcRmF_Sk?si=A0KET1QvZc-EjKiQ', 'bcl-and-ariel'),
(6, 'Raffi Ahmad & Nagita', '2023-12-24 16:32:51', '', '', 'raffi-ahmad-and-nagita'),
(7, 'Bambang & Nisa', '2023-12-25 15:12:07', '', '', 'bambang-and-nisa');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `caption`, `created_at`, `id_client`) VALUES
(4, 'assets/backoffice/uploads/images/gallery/36b698242e38576c78a0b55989cd30e6.jpg', 'Gunung Burangrang', '2023-12-24 15:33:05', 1),
(6, 'assets/backoffice/uploads/images/gallery/000944af155ece93e709425ea4fd5227.jpg', 'Tangkuban Parahu', '2023-12-24 15:32:58', 1),
(7, 'assets/backoffice/uploads/images/gallery/bc1a8e75aec12d800b0a6c948338a05e.jpg', 'Bromo 1', '2023-12-20 14:53:36', 3),
(8, 'assets/backoffice/uploads/images/gallery/f02f75507babebe46b30f7d1c8b38e38.jpg', 'Bromo 2', '2023-12-20 14:53:48', 3),
(9, 'assets/backoffice/uploads/images/gallery/b995327fdb185f10984b5b098cedd36e.jpg', 'Laut', '2023-12-24 15:37:56', 4),
(10, 'assets/backoffice/uploads/images/gallery/9aa2bb5a0c93b82814029f3769ccfb75.jpg', 'PREWEED', '2023-12-24 15:33:22', 1),
(11, 'assets/backoffice/uploads/images/gallery/2a153d462e47d5d0662ae794319415e2.jpg', 'PREWEED', '2023-12-24 15:38:10', 4),
(12, 'assets/backoffice/uploads/images/gallery/1f50b6f66657e02c72c19a02cee13203.jpg', 'PREWEED', '2023-12-24 15:38:23', 4),
(13, 'assets/backoffice/uploads/images/gallery/f96604ea9d6b3fb99684a27f089ad476.jpg', 'BEAUTY PHOTOGRAPHY', '2023-12-24 15:40:00', 5),
(14, 'assets/backoffice/uploads/images/gallery/a86d6d3a9531de9d579f54c2c4d8d742.jpg', 'BEAUTY PHOTOGRAPHY', '2023-12-24 15:40:24', 5),
(15, 'assets/backoffice/uploads/images/gallery/79b51b99dd39c0176d81f068b647f00c.jpg', 'BEAUTY PHOTOGRAPHY', '2023-12-24 15:40:34', 5),
(16, 'assets/backoffice/uploads/images/gallery/6c451c713ef2faec11cf7c667dc4bb49.jpg', 'BEAUTY', '2023-12-24 15:41:59', 1),
(17, 'assets/backoffice/uploads/images/gallery/811eaed8cb997ce5e9e5bf0cb7deae5d.jpg', 'BEAUTY', '2023-12-24 16:17:18', 5),
(18, 'assets/backoffice/uploads/images/gallery/76d848d65a012e0f5367d982455eb3ae.jpg', 'BEAUTY', '2023-12-24 16:17:31', 5),
(19, 'assets/backoffice/uploads/images/gallery/c56c3e94f440a3e7ca62f6633b2b1471.jpg', 'BEAUTY', '2023-12-24 16:17:39', 5),
(20, 'assets/backoffice/uploads/images/gallery/c75827783a568475252e462fbe4e1fcb.jpg', 'BEAUTY', '2023-12-24 16:19:21', 5),
(21, 'assets/backoffice/uploads/images/gallery/d69edc0baa987ba28474d9b03e4bd864.jpg', 'BEAUTY', '2023-12-24 16:19:31', 5),
(22, 'assets/backoffice/uploads/images/gallery/b73fd0cece52b7d10386edb2c329ecf6.jpg', 'BEAUTY', '2023-12-24 16:19:40', 5),
(23, 'assets/backoffice/uploads/images/gallery/c55ae52e3c5dca3f6842ee3da7360ff6.jpg', 'top shoot', '2023-12-24 18:10:01', 3),
(24, 'assets/backoffice/uploads/images/gallery/863f72207073dd374f0e91f29e0429be.jpg', 'top shoot', '2023-12-24 18:10:21', 3),
(25, 'assets/backoffice/uploads/images/gallery/a21350ae747bb1f969421f257bf6ba53.jpg', 'top shoot', '2023-12-24 18:10:30', 3),
(26, 'assets/backoffice/uploads/images/gallery/bd74dedfbe31f6d1d09aa1bd8dcc5ad7.jpg', 'top shoot', '2023-12-24 18:10:39', 3),
(27, 'assets/backoffice/uploads/images/gallery/d9360c9fddd0f5480d93df191b2701ea.jpg', 'top shoot', '2023-12-24 18:10:50', 3),
(28, 'assets/backoffice/uploads/images/gallery/a193ee4745030d961df1c1856a7d612d.jpg', 'top shoot', '2023-12-24 18:11:04', 3),
(29, 'assets/backoffice/uploads/images/gallery/a3a565b7b78b6ba19ec24be5dbb23355.jpg', 'top shoot', '2023-12-24 18:12:44', 3),
(30, 'assets/backoffice/uploads/images/gallery/cb503409a02225258784444d9be569a8.jpg', 'top shoot', '2023-12-24 18:12:52', 3),
(31, 'assets/backoffice/uploads/images/gallery/826a2ca1ba9f491b59adb738a4cb56bf.jpg', 'top shoot', '2023-12-24 18:16:03', 3),
(32, 'assets/backoffice/uploads/images/gallery/2816ec5e632587c3da7086dd6db92273.jpg', 'top Shoot', '2023-12-24 18:20:42', 3),
(33, 'assets/backoffice/uploads/images/gallery/9894c8a2db3428ced5b78dc4a9b26f66.jpg', 'Top Shoot', '2023-12-24 18:21:06', 3),
(34, 'assets/backoffice/uploads/images/gallery/3687c2b78b182e0293fb5b8d1e9dd0a5.jpg', 'BEST PHOTO', '2023-12-25 15:12:25', 7),
(35, 'assets/backoffice/uploads/images/gallery/5c080f611ca19193405924ec1e850321.jpg', 'BEST PHOTO', '2023-12-25 15:12:39', 7),
(36, 'assets/backoffice/uploads/images/gallery/ee86453703b44ae0ad4810bec7a06094.jpg', 'BEST PHOTO', '2023-12-25 15:12:50', 7);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `image`, `link`, `created_at`) VALUES
(1, 'Nabati', 'https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/assets/img/slider/instagram/insta-7.jpg', 'https://nabati.com', '2023-12-24 17:49:40'),
(3, 'Astra', 'https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/assets/img/slider/instagram/insta-6.jpg', 'https://astra.com', '2023-12-24 17:49:30'),
(4, 'MCD', 'https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/assets/img/slider/instagram/insta-5.jpg', 'https://mcd.com', '2023-12-24 17:49:21'),
(5, 'KFC', 'https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/assets/img/slider/instagram/insta-4.jpg', 'https://kfc.com', '2023-12-24 17:49:11'),
(6, 'Yamaha', 'https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/assets/img/slider/instagram/insta-1.jpg', 'https://yamaha.com', '2023-12-24 17:46:38'),
(7, 'BCL & ARIEL', 'https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/assets/img/slider/instagram/insta-2.jpg', '', '2023-12-24 17:47:32'),
(8, 'GONZALEZ', 'https://demo.voidcoders.com/htmldemo/potoliaV2/main-files/assets/img/slider/instagram/insta-3.jpg', '', '2023-12-24 17:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `title`, `caption`, `image`, `created_at`) VALUES
(2, 'Smart Gallery', 'Life Style', 'assets/backoffice/uploads/images/portofolio/44dcd5569f220150c96b658b0f31958a.jpg', '2023-12-20 15:06:34'),
(3, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/85efc24835633ca7a6022059da38304b.jpg', '2023-12-20 16:01:29'),
(4, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/b673f7f876f78c9437bd28668750913d.jpg', '2023-12-20 16:01:46'),
(5, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/571effc3a6465a2b6f386d709a357e20.jpg', '2023-12-20 16:02:36'),
(6, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/692f15f1cd140f85e2af4c9a0de00b2e.jpg', '2023-12-20 16:03:39'),
(7, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/bd90b1475582528a2ff4a55d1b922445.jpg', '2023-12-20 16:03:52'),
(8, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/c62f88091690dcfff187fd6db1172370.jpg', '2023-12-20 16:04:04'),
(9, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/ba91233efee900cd0787820b9a00dee9.jpg', '2023-12-20 16:04:17'),
(10, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/172bdf92f6ce1a869db18bd16c881646.jpg', '2023-12-20 16:04:52'),
(11, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/ca2138e2ad2e306f55800e59900e700a.jpg', '2023-12-20 16:05:02'),
(12, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/c7f71828d0d375e86ce1e11fb66edc84.jpg', '2023-12-20 16:05:12'),
(13, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/d1cf4c6d56902e89379d7b95e3c6f093.jpg', '2023-12-20 16:06:11'),
(14, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/ab8943b21bbd06af3a7303a07427938a.jpg', '2023-12-20 16:06:23'),
(15, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/ea2cb5a1629eaa0842f59b972d56791a.jpg', '2023-12-20 16:06:38'),
(16, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/ce904fee47eec3215cd07fa33b5b40d9.jpg', '2023-12-20 16:06:54'),
(17, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/bc121c73f1f1c88df570750724759302.jpg', '2023-12-20 16:07:04'),
(18, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/4800ba41116746bf15816a62e7bf8ca9.jpg', '2023-12-20 16:07:15'),
(19, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/3074b320a84f800a58b76045142aad5b.jpg', '2023-12-20 16:07:25'),
(20, 'Smart Life Style', 'Photography', 'assets/backoffice/uploads/images/portofolio/7f54d19a1ffc3f43b9a4714b612872f0.jpg', '2023-12-20 16:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `caption`, `icon`) VALUES
(1, 'REGULAR PHOTOGRAPHY', 'Photography is way of feeling of touching of loving. What you have caught on film captu red forever rememb little things. Photography is like a moment, an instant. You need a half second to get the photo. ', 'flaticon-1'),
(2, 'AWESOME PHOTOGRAPHY', ' Photography is way of feeling of touching of loving. What you have caught on film captu red forever rememb little things. Photography is like a moment, an instant. You need a half second to get the photo.', 'flaticon-16'),
(3, 'LANDSCAPE', ' Photography is way of feeling of touching of loving. What you have caught on film captu red forever rememb little things. Photography is like a moment, an instant. You need a half second to get the photo.', 'flaticon-47'),
(4, 'VIDEOGRAPHY', ' Photography is way of feeling of touching of loving. What you have caught on film captu red forever rememb little things. Photography is like a moment, an instant. You need a half second to get the photo.', 'flaticon-11'),
(5, 'DOCUMENTRY MAKING', ' Photography is way of feeling of touching of loving. What you have caught on film captu red forever rememb little things. Photography is like a moment, an instant. You need a half second to get the photo.', 'flaticon-37'),
(6, 'FREE IMAGE SERVICE update', ' Photography is way of feeling of touching of loving. What you have caught on film captu red forever rememb little things. Photography is like a moment, an instant. You need a half second to get the photo.', 'flaticon-28');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  `behance` text NOT NULL,
  `pinterest` text NOT NULL,
  `linkedin` text NOT NULL,
  `whatsapp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `image`, `created_at`, `facebook`, `instagram`, `twitter`, `behance`, `pinterest`, `linkedin`, `whatsapp`) VALUES
(1, 'Elmiere UPDATE', 'assets/backoffice/uploads/images/setting/246845df8d9caf2e1c38d08be282a7bf.png', '2024-01-02 14:33:29', 'https://facebook.com/elmiere', 'https://instagram.com/elmiere', 'https://twitter.com/elmiere', 'https://behance.com/elmiere', 'https://pinterest.com/elmiere', 'https://linkedin.com/elmiere', '+6281223165037');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `caption`, `created_at`, `title`) VALUES
(1, 'assets/backoffice/uploads/images/slider/b0b8ba0f6e791ed0fdec97fc17045ee5.jpg', 'What you have caught on film is captured forever.', '2023-12-20 15:45:28', 'Potrait Photography update'),
(2, 'assets/backoffice/uploads/images/slider/14c09d65b05c6514506e2ef3f2a04bd7.jpg', 'Photography is a way of feeling, of touching, of loving.', '2023-12-20 15:44:53', 'Landscape Photography'),
(3, 'assets/backoffice/uploads/images/slider/309ead9d82177d124dec232d59a4f1c2.jpg', 'Photography Is An Immediate Reaction.', '2023-12-20 15:45:21', 'Wedding Photography');

-- --------------------------------------------------------

--
-- Table structure for table `socmed`
--

CREATE TABLE `socmed` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `title`, `caption`, `created_at`, `image`) VALUES
(1, 'Syetrot Ruberti', 'Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever... it remembers little things after have forgotten everything. Photography powerful       mediu expression and communications, offers an infinite variety of perception, interpretation.', '2023-12-20 17:37:59', 'https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-Image.png'),
(3, 'Bambang Pamungkas', 'Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever... it remembers little things after have forgotten everything. Photography powerful mediu expression and communications, offers an infinite variety of perception, interpretation.', '2023-12-20 17:35:57', 'https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector.png'),
(4, 'Christian Gonzalez', 'Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever... it remembers little things after have forgotten everything. Photography powerful mediu expression and communications, offers an infinite variety of perception, interpretation.', '2023-12-20 17:35:25', 'https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Photos.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$A37IKN7WLcdlgwq2.Y.IdeN2Sc8JuXIQ7Exa.VppEXCyT408ca6zG', '2023-12-15 16:22:28');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_gallery`
-- (See below for the actual view)
--
CREATE TABLE `v_gallery` (
`id` int(11)
,`image` varchar(100)
,`caption` text
,`created_at` timestamp
,`id_client` int(11)
,`name` varchar(30)
,`slug` varchar(100)
,`youtube` text
);

-- --------------------------------------------------------

--
-- Structure for view `v_gallery`
--
DROP TABLE IF EXISTS `v_gallery`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_gallery`  AS SELECT `g`.`id` AS `id`, `g`.`image` AS `image`, `g`.`caption` AS `caption`, `g`.`created_at` AS `created_at`, `g`.`id_client` AS `id_client`, `c`.`name` AS `name`, `c`.`slug` AS `slug`, `c`.`youtube` AS `youtube` FROM (`gallery` `g` join `client` `c` on(`c`.`id` = `g`.`id_client`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmed`
--
ALTER TABLE `socmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socmed`
--
ALTER TABLE `socmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

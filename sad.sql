-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2020 at 04:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sad`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(4, 'kegiatan', 'Deskripsi menu kegiatan, ditampilkan di beranda, edit teks di panel admin.', NULL, '2020-08-22 01:35:42'),
(5, 'editorial', 'Deskripsi menu editorial, ditampilkan di beranda, edit teks di panel admin.', NULL, '2020-08-22 01:35:42'),
(6, 'galeri', 'Deskripsi menu galeri, ditampilkan di beranda, edit teks di panel admin.', NULL, '2020-08-22 01:35:42'),
(7, 'mitra', 'Deskripsi menu mitra kerjasama, ditampilkan di beranda, edit teks di panel admin.', NULL, '2020-08-22 01:35:42'),
(8, 'beranda_image', 'uploads/beranda/AD-50_1598084887.jpg', NULL, '2020-08-22 01:28:07'),
(9, 'beranda_narasi', '<p>Teks berikut ditampilkan di beranda. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', NULL, '2020-08-22 01:28:07'),
(10, 'teks_footer', 'Tim Pengabdian Program Studi Sistem Informasi Universitas Jambi - 2020', NULL, '2020-08-22 01:34:25'),
(11, 'alamat', 'Desa Nyogan, Kec. Mestong, Kab. Muaro Jambi, Provinsi Jambi', NULL, '2020-08-22 01:34:25'),
(12, 'telp', '+62 800 0000 0000', NULL, '2020-08-22 01:34:25'),
(13, 'email', 'dedy_setiawan@unja.ac.id', NULL, '2020-08-22 01:34:25'),
(15, 'profil_narasi', '<p>Narasi tentang profil SAD. Edit di menu profil di panel admin.</p>\r\n\r\n<h3><strong>Fasilitas</strong></h3>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0053_1598085489.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0055_1598085555.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0061_1598085581.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0064_1598085597.jpg\" style=\"height:753px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0066_1598085618.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0068_1598085635.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0069_1598085655.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0076_1598085676.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0217_1598085690.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0251_1598085707.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20200718124127_1598085721.jpg\" style=\"height:667px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20200718124224_1598085734.jpg\" style=\"height:666px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20200718124256_1598085749.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20200718124757_1598085764.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Situasi Lingkungan</strong></h3>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-12_1598085811.jpg\" style=\"height:750px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-14_1598085822.jpg\" style=\"height:750px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-15_1598085835.jpg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-18_1598085846.jpg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-47_1598085859.jpg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-55_1598085874.jpg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-64_1598085886.jpg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0103_1598085902.jpg\" style=\"height:753px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0107_1598085984.jpg\" style=\"height:753px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0169_1598085998.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0172_1598086012.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0188_1598086028.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0211_1598086044.jpg\" style=\"height:752px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0311_1598086066.jpg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0365_1598086080.jpg\" style=\"height:333px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0513_1598086098.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0537_1598086112.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0570_1598086126.jpg\" style=\"height:752px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0575_1598086138.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0576_1598086153.jpg\" style=\"height:332px; width:500px\" /></strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0585_1598086174.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0622_1598086190.jpg\" style=\"height:752px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0625_1598086206.jpg\" style=\"height:753px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0633_1598086219.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG_9889_1598086231.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG_9919_1598086243.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 2px; top: 6239.58px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', NULL, '2020-08-22 01:57:34'),
(17, 'sejarah_narasi', '<p>Narasi tentang sejarah SAD. Edit di menu profil di panel admin.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-57_1598086694.jpg\" style=\"height:750px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-62_1598086707.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0007_1598086719.jpg\" style=\"height:762px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0088_1598086731.jpg\" style=\"height:753px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0091_1598086744.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0170_1598086757.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0194_1598086772.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210130715_1598086785.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210130726_1598086797.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210131322_1598086810.jpg\" style=\"height:363px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210131835_1598086823.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210132025_1598086836.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG_0021_1598086847.jpg\" style=\"height:333px; width:500px\" /></p>', NULL, '2020-08-22 02:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `editorial`
--

CREATE TABLE `editorial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editorial`
--

INSERT INTO `editorial` (`id`, `judul`, `foto`, `konten`, `published`, `created_at`, `updated_at`) VALUES
(3, 'Budaya Basale', 'uploads/editorial/DSC_0677_1598087753.jpg', '<p>Narasi budaya basale. Edit teks di menu editorial admin panel.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0567_1598087718.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0577_1598087728.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0677_1598087740.jpg\" style=\"height:333px; width:500px\" /></p>', 1, '2020-08-22 02:15:53', '2020-08-22 02:15:53'),
(4, 'Wisata Alam Jejawe', 'uploads/editorial/DSC_0753_1598087873.jpg', '<p>Narasi tentang wisata jejawe. Edit teks di menu editorial admin panel.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0745_1598087847.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0753_1598087857.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG_20200718_133051_1598087867.jpg\" style=\"height:667px; width:500px\" /></p>', 1, '2020-08-22 02:17:53', '2020-08-22 02:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'Caption edit di panel admin', 'uploads/galeri/AD-73_1598087916.jpg', '2020-08-22 02:18:36', '2020-08-22 02:18:36'),
(5, 'Caption edit di panel admin', 'uploads/galeri/DSC_0020_1598087922.jpg', '2020-08-22 02:18:42', '2020-08-22 02:18:42'),
(6, 'Caption edit di panel admin', 'uploads/galeri/DSC_0021_1598087927.jpg', '2020-08-22 02:18:47', '2020-08-22 02:18:47'),
(7, 'Caption edit di panel admin', 'uploads/galeri/DSC_0051_1598087936.jpg', '2020-08-22 02:18:56', '2020-08-22 02:18:56'),
(8, 'Caption edit di panel admin', 'uploads/galeri/DSC_0056_1598087943.jpg', '2020-08-22 02:19:03', '2020-08-22 02:19:03'),
(9, 'Caption edit di panel admin', 'uploads/galeri/DSC_0059_1598087951.jpg', '2020-08-22 02:19:11', '2020-08-22 02:19:11'),
(10, 'Caption edit di panel admin', 'uploads/galeri/DSC_0063_1598087956.jpg', '2020-08-22 02:19:16', '2020-08-22 02:19:16'),
(11, 'Caption edit di panel admin', 'uploads/galeri/DSC_0083_1598087962.jpg', '2020-08-22 02:19:22', '2020-08-22 02:19:22'),
(12, 'Caption edit di panel admin', 'uploads/galeri/DSC_0085_1598087968.jpg', '2020-08-22 02:19:28', '2020-08-22 02:19:28'),
(13, 'Caption edit di panel admin', 'uploads/galeri/DSC_0086_1598087974.jpg', '2020-08-22 02:19:34', '2020-08-22 02:19:34'),
(14, 'Caption edit di panel admin', 'uploads/galeri/DSC_0093_1598087981.jpg', '2020-08-22 02:19:41', '2020-08-22 02:19:41'),
(15, 'Caption edit di panel admin', 'uploads/galeri/DSC_0094_1598087987.jpg', '2020-08-22 02:19:47', '2020-08-22 02:19:47'),
(16, 'Caption edit di panel admin', 'uploads/galeri/DSC_0098_1598087994.jpg', '2020-08-22 02:19:54', '2020-08-22 02:19:54'),
(17, 'Caption edit di panel admin', 'uploads/galeri/DSC_0117_1598088001.jpg', '2020-08-22 02:20:01', '2020-08-22 02:20:01'),
(18, 'Caption edit di panel admin', 'uploads/galeri/DSC_0123_1598088011.jpg', '2020-08-22 02:20:11', '2020-08-22 02:20:11'),
(19, 'Caption edit di panel admin', 'uploads/galeri/DSC_0127_1598088020.jpg', '2020-08-22 02:20:20', '2020-08-22 02:20:20'),
(20, 'Caption edit di panel admin', 'uploads/galeri/DSC_0128_1598088031.jpg', '2020-08-22 02:20:31', '2020-08-22 02:20:31'),
(21, 'Caption edit di panel admin', 'uploads/galeri/DSC_0132_1598088037.jpg', '2020-08-22 02:20:37', '2020-08-22 02:20:37'),
(22, 'Caption edit di panel admin', 'uploads/galeri/DSC_0135_1598088045.jpg', '2020-08-22 02:20:45', '2020-08-22 02:20:45'),
(23, 'Caption edit di panel admin', 'uploads/galeri/DSC_0142_1598088052.jpg', '2020-08-22 02:20:52', '2020-08-22 02:20:52'),
(24, 'Caption edit di panel admin', 'uploads/galeri/DSC_0146_1598088061.jpg', '2020-08-22 02:21:01', '2020-08-22 02:21:01'),
(25, 'Caption edit di panel admin', 'uploads/galeri/DSC_0149_1598088067.jpg', '2020-08-22 02:21:08', '2020-08-22 02:21:08'),
(26, 'Caption edit di panel admin', 'uploads/galeri/DSC_0166_1598088078.jpg', '2020-08-22 02:21:18', '2020-08-22 02:21:18'),
(27, 'Caption edit di panel admin', 'uploads/galeri/DSC_0173_1598088086.jpg', '2020-08-22 02:21:26', '2020-08-22 02:21:26'),
(28, 'Caption edit di panel admin', 'uploads/galeri/DSC_0176_1598088093.jpg', '2020-08-22 02:21:33', '2020-08-22 02:21:33'),
(29, 'Caption edit di panel admin', 'uploads/galeri/DSC_0178_1598088102.jpg', '2020-08-22 02:21:42', '2020-08-22 02:21:42'),
(30, 'Caption edit di panel admin', 'uploads/galeri/DSC_0179_1598088111.jpg', '2020-08-22 02:21:51', '2020-08-22 02:21:51'),
(31, 'Caption edit di panel admin', 'uploads/galeri/DSC_0182_1598088121.jpg', '2020-08-22 02:22:01', '2020-08-22 02:22:01'),
(32, 'Caption edit di panel admin', 'uploads/galeri/DSC_0202_1598088175.jpg', '2020-08-22 02:22:55', '2020-08-22 02:22:55'),
(33, 'Caption edit di panel admin', 'uploads/galeri/DSC_0206_1598088180.jpg', '2020-08-22 02:23:00', '2020-08-22 02:23:00'),
(34, 'Caption edit di panel admin', 'uploads/galeri/DSC_0214_1598088191.jpg', '2020-08-22 02:23:11', '2020-08-22 02:23:11'),
(35, 'Caption edit di panel admin', 'uploads/galeri/DSC_0218_1598088199.jpg', '2020-08-22 02:23:19', '2020-08-22 02:23:19'),
(36, 'Caption edit di panel admin', 'uploads/galeri/DSC_0220_1598088209.jpg', '2020-08-22 02:23:29', '2020-08-22 02:23:29'),
(37, 'Caption edit di panel admin', 'uploads/galeri/DSC_0252_1598088221.jpg', '2020-08-22 02:23:41', '2020-08-22 02:23:41'),
(38, 'Caption edit di panel admin', 'uploads/galeri/DSC_0254_1598088229.jpg', '2020-08-22 02:23:49', '2020-08-22 02:23:49'),
(39, 'Caption edit di panel admin', 'uploads/galeri/DSC_0257_1598088236.jpg', '2020-08-22 02:23:56', '2020-08-22 02:23:56'),
(40, 'Caption edit di panel admin', 'uploads/galeri/DSC_0267_1598088244.jpg', '2020-08-22 02:24:04', '2020-08-22 02:24:04'),
(41, 'Caption edit di panel admin', 'uploads/galeri/DSC_0278_1598088260.jpg', '2020-08-22 02:24:20', '2020-08-22 02:24:20'),
(42, 'Caption edit di panel admin', 'uploads/galeri/DSC_0287_1598088268.jpg', '2020-08-22 02:24:28', '2020-08-22 02:24:28'),
(43, 'Caption edit di panel admin', 'uploads/galeri/DSC_0292_1598088275.jpg', '2020-08-22 02:24:35', '2020-08-22 02:24:35'),
(44, 'Caption edit di panel admin', 'uploads/galeri/DSC_0294_1598088285.jpg', '2020-08-22 02:24:45', '2020-08-22 02:24:45'),
(45, 'Caption edit di panel admin', 'uploads/galeri/DSC_0296_1598088293.jpg', '2020-08-22 02:24:53', '2020-08-22 02:24:53'),
(46, 'Caption edit di panel admin', 'uploads/galeri/DSC_0305_1598088300.jpg', '2020-08-22 02:25:00', '2020-08-22 02:25:00'),
(47, 'Caption edit di panel admin', 'uploads/galeri/DSC_0307_1598088311.jpg', '2020-08-22 02:25:11', '2020-08-22 02:25:11'),
(48, 'Caption edit di panel admin', 'uploads/galeri/DSC_0308_1598088318.jpg', '2020-08-22 02:25:18', '2020-08-22 02:25:18'),
(49, 'Caption edit di panel admin', 'uploads/galeri/DSC_0309_1598088326.jpg', '2020-08-22 02:25:26', '2020-08-22 02:25:26'),
(50, 'Caption edit di panel admin', 'uploads/galeri/DSC_0310_1598088342.jpg', '2020-08-22 02:25:42', '2020-08-22 02:25:42'),
(51, 'Caption edit di panel admin', 'uploads/galeri/DSC_0339_1598088358.jpg', '2020-08-22 02:25:58', '2020-08-22 02:25:58'),
(52, 'Caption edit di panel admin', 'uploads/galeri/DSC_0349_1598088368.jpg', '2020-08-22 02:26:08', '2020-08-22 02:26:08'),
(53, 'Caption edit di panel admin', 'uploads/galeri/DSC_0350_1598088377.jpg', '2020-08-22 02:26:17', '2020-08-22 02:26:17'),
(54, 'Caption edit di panel admin', 'uploads/galeri/DSC_0357_1598088392.jpg', '2020-08-22 02:26:32', '2020-08-22 02:26:32'),
(55, 'Caption edit di panel admin', 'uploads/galeri/DSC_0364_1598088400.jpg', '2020-08-22 02:26:40', '2020-08-22 02:26:40'),
(56, 'Caption edit di panel admin', 'uploads/galeri/DSC_0368_1598088410.jpg', '2020-08-22 02:26:50', '2020-08-22 02:26:50'),
(57, 'Caption edit di panel admin', 'uploads/galeri/DSC_0382_1598088421.jpg', '2020-08-22 02:27:01', '2020-08-22 02:27:01'),
(58, 'Caption edit di panel admin', 'uploads/galeri/DSC_0383_1598088439.jpg', '2020-08-22 02:27:19', '2020-08-22 02:27:19'),
(59, 'Caption edit di panel admin', 'uploads/galeri/DSC_0388_1598088445.jpg', '2020-08-22 02:27:25', '2020-08-22 02:27:25'),
(60, 'Caption edit di panel admin', 'uploads/galeri/DSC_0392_1598088451.jpg', '2020-08-22 02:27:31', '2020-08-22 02:27:31'),
(61, 'Caption edit di panel admin', 'uploads/galeri/DSC_0403_1598088458.jpg', '2020-08-22 02:27:38', '2020-08-22 02:27:38'),
(62, 'Caption edit di panel admin', 'uploads/galeri/DSC_0406_1598088464.jpg', '2020-08-22 02:27:44', '2020-08-22 02:27:44'),
(63, 'Caption edit di panel admin', 'uploads/galeri/DSC_0453_1598088471.jpg', '2020-08-22 02:27:51', '2020-08-22 02:27:51'),
(64, 'Caption edit di panel admin', 'uploads/galeri/DSC_0461_1598088478.jpg', '2020-08-22 02:27:58', '2020-08-22 02:27:58'),
(65, 'Caption edit di panel admin', 'uploads/galeri/DSC_0477_1598088484.jpg', '2020-08-22 02:28:04', '2020-08-22 02:28:04'),
(66, 'Caption edit di panel admin', 'uploads/galeri/DSC_0486_1598088490.jpg', '2020-08-22 02:28:10', '2020-08-22 02:28:10'),
(67, 'Caption edit di panel admin', 'uploads/galeri/DSC_0536_1598088497.jpg', '2020-08-22 02:28:17', '2020-08-22 02:28:17'),
(68, 'Caption edit di panel admin', 'uploads/galeri/DSC_0549_1598088504.jpg', '2020-08-22 02:28:24', '2020-08-22 02:28:24'),
(69, 'Caption edit di panel admin', 'uploads/galeri/DSC_0550_1598088510.jpg', '2020-08-22 02:28:30', '2020-08-22 02:28:30'),
(70, 'Caption edit di panel admin', 'uploads/galeri/DSC_0551_1598088516.jpg', '2020-08-22 02:28:36', '2020-08-22 02:28:36'),
(71, 'Caption edit di panel admin', 'uploads/galeri/DSC_0556_1598088522.jpg', '2020-08-22 02:28:42', '2020-08-22 02:28:42'),
(72, 'Caption edit di panel admin', 'uploads/galeri/DSC_0557_1598088529.jpg', '2020-08-22 02:28:49', '2020-08-22 02:28:49'),
(73, 'Caption edit di panel admin', 'uploads/galeri/DSC_0558_1598088536.jpg', '2020-08-22 02:28:56', '2020-08-22 02:28:56'),
(74, 'Caption edit di panel admin', 'uploads/galeri/DSC_0565_1598088551.jpg', '2020-08-22 02:29:11', '2020-08-22 02:29:11'),
(75, 'Caption edit di panel admin', 'uploads/galeri/DSC_0566_1598088559.jpg', '2020-08-22 02:29:19', '2020-08-22 02:29:19'),
(76, 'Caption edit di panel admin', 'uploads/galeri/DSC_0581_1598088566.jpg', '2020-08-22 02:29:26', '2020-08-22 02:29:26'),
(77, 'Caption edit di panel admin', 'uploads/galeri/DSC_0587_1598088572.jpg', '2020-08-22 02:29:33', '2020-08-22 02:29:33'),
(78, 'Caption edit di panel admin', 'uploads/galeri/DSC_0593_1598088585.jpg', '2020-08-22 02:29:45', '2020-08-22 02:29:45'),
(79, 'Caption edit di panel admin', 'uploads/galeri/DSC_0596_1598088593.jpg', '2020-08-22 02:29:53', '2020-08-22 02:29:53'),
(80, 'Caption edit di panel admin', 'uploads/galeri/DSC_0599_1598088600.jpg', '2020-08-22 02:30:00', '2020-08-22 02:30:00'),
(81, 'Caption edit di panel admin', 'uploads/galeri/DSC_0603_1598088606.jpg', '2020-08-22 02:30:06', '2020-08-22 02:30:06'),
(82, 'Caption edit di panel admin', 'uploads/galeri/DSC_0607_1598088619.jpg', '2020-08-22 02:30:19', '2020-08-22 02:30:19'),
(83, 'Caption edit di panel admin', 'uploads/galeri/DSC_0608_1598088633.jpg', '2020-08-22 02:30:33', '2020-08-22 02:30:33'),
(84, 'Caption edit di panel admin', 'uploads/galeri/DSC_0639_1598088638.jpg', '2020-08-22 02:30:38', '2020-08-22 02:30:38'),
(85, 'Caption edit di panel admin', 'uploads/galeri/DSC_0647_1598088645.jpg', '2020-08-22 02:30:45', '2020-08-22 02:30:45'),
(86, 'Caption edit di panel admin', 'uploads/galeri/DSC_0722_1598088652.jpg', '2020-08-22 02:30:52', '2020-08-22 02:30:52'),
(87, 'Caption edit di panel admin', 'uploads/galeri/DSC_0735_1598088658.jpg', '2020-08-22 02:30:58', '2020-08-22 02:30:58'),
(88, 'Caption edit di panel admin', 'uploads/galeri/IMG20180210140259_1598088665.jpg', '2020-08-22 02:31:05', '2020-08-22 02:31:05'),
(89, 'Caption edit di panel admin', 'uploads/galeri/IMG20200718125302_1598088671.jpg', '2020-08-22 02:31:11', '2020-08-22 02:31:11'),
(90, 'Caption edit di panel admin', 'uploads/galeri/IMG20200718125344_1598088677.jpg', '2020-08-22 02:31:17', '2020-08-22 02:31:17'),
(91, 'Caption edit di panel admin', 'uploads/galeri/IMG20200718125713_1598088683.jpg', '2020-08-22 02:31:23', '2020-08-22 02:31:23'),
(92, 'Caption edit di panel admin', 'uploads/galeri/IMG20200718135145_1598088689.jpg', '2020-08-22 02:31:29', '2020-08-22 02:31:29'),
(93, 'Caption edit di panel admin', 'uploads/galeri/IMG20200718135202_1598088695.jpg', '2020-08-22 02:31:35', '2020-08-22 02:31:35'),
(94, 'Caption edit di panel admin', 'uploads/galeri/IMG20200718135254_1598088702.jpg', '2020-08-22 02:31:42', '2020-08-22 02:31:42'),
(95, 'Caption edit di panel admin', 'uploads/galeri/IMG20200718135749_1598088708.jpg', '2020-08-22 02:31:48', '2020-08-22 02:31:48'),
(96, 'Caption edit di panel admin', 'uploads/galeri/IMG_0567_1598088714.jpg', '2020-08-22 02:31:54', '2020-08-22 02:31:54'),
(97, 'Caption edit di panel admin', 'uploads/galeri/IMG_9959_1598088724.jpg', '2020-08-22 02:32:04', '2020-08-22 02:32:04'),
(98, 'Caption edit di panel admin', 'uploads/galeri/IMG_9988_1598088731.jpg', '2020-08-22 02:32:11', '2020-08-22 02:32:11'),
(99, 'Caption edit di panel admin', 'uploads/galeri/IMG_20200718_132932_1598088737.jpg', '2020-08-22 02:32:17', '2020-08-22 02:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `foto`, `konten`, `published`, `created_at`, `updated_at`) VALUES
(3, 'Adat Basale', 'uploads/kegiatan/DSC_0031_1598087255.jpg', '<p>Narasi tentang adat basale. Edit teks di menu kegiatan panel admin.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0003_1598086966.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0005_1598086978.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0012_1598086990.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0013_1598087006.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0015_1598087021.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0022_1598087033.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0024_1598087046.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0027_1598087060.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0028_1598087074.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0038_1598087092.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0041_1598087104.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0042_1598087119.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0087_1598087133.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0092_1598087146.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0097_1598087163.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0131_1598087183.jpg\" style=\"height:752px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0583_1598087201.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0584_1598087213.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0612_1598087232.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0621_1598087247.jpg\" style=\"height:333px; width:500px\" /></p>', 1, '2020-08-22 02:07:35', '2020-08-22 02:07:35'),
(4, 'Ekonomi SAD', 'uploads/kegiatan/AD-29_1598087608.jpg', '<p>Narasi tentang ekonomi SAD. Edit teks di menu kegiatan admin panel.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-29_1598087322.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-37_1598087335.jpg\" style=\"height:750px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-39_1598087347.jpg\" style=\"height:750px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/AD-54_1598087359.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0045_1598087378.jpg\" style=\"height:753px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0225_1598087390.jpg\" style=\"height:753px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0231_1598087404.jpg\" style=\"height:753px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/DSC_0245_1598087417.jpg\" style=\"height:332px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210130801_1598087428.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210130824_1598087439.jpg\" style=\"height:666px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210130926_1598087450.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210131406_1598087462.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210131442_1598087475.jpg\" style=\"height:605px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210131727_1598087490.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210131850_1598087501.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210132310_1598087519.jpg\" style=\"height:666px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210140319_1598087531.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210140345_1598087544.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210140356_1598087556.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210140424_1598087567.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG20180210140501_1598087578.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG_0581_1598087591.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/uploads/ckeditor_images/IMG_9916_1598087602.jpg\" style=\"height:333px; width:500px\" /></p>', 1, '2020-08-22 02:13:28', '2020-08-22 02:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_28_235444_create_taman_table', 1),
(5, '2020_08_09_230304_create_events_table', 1),
(6, '2020_08_10_003809_create_review_table', 1),
(7, '2020_08_14_002151_create_data_table', 2),
(8, '2020_08_14_002208_create_kegiatan_table', 2),
(9, '2020_08_14_002215_create_editorial_table', 2),
(10, '2020_08_14_002222_create_galeri_table', 2),
(11, '2020_08_14_002229_create_mitra_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@sad-nyogan.org', NULL, '$2y$10$nr5OFc68vekRANQep1H9gexpfhX81KLyxJuhH7Axgx6uOogoaHDWu', NULL, '2020-08-22 03:26:57', '2020-08-22 03:26:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

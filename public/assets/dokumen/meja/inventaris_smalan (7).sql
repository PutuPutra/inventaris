-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2023 at 01:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_smalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE TABLE `ac` (
  `id` int NOT NULL,
  `brand_ac` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_ac` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_ac` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'manage dashboard'),
(2, 'super_admin', 'manage all users');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 5),
(1, 7),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'aniesbaswedan', NULL, '2022-12-30 02:48:52', 0),
(2, '::1', 'putupersada@gmail.com', 2, '2022-12-30 02:50:14', 1),
(3, '::1', 'putupersada@gmail.com', 2, '2022-12-30 02:52:26', 1),
(4, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 08:16:35', 1),
(5, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 08:36:33', 1),
(6, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 08:46:54', 1),
(7, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 08:47:53', 1),
(8, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 08:51:46', 1),
(9, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 08:58:08', 1),
(10, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 09:12:58', 1),
(11, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 09:21:47', 1),
(12, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 09:47:58', 1),
(13, '::1', 'icamstudioofficial@gmail.com', 4, '2022-12-30 20:03:55', 1),
(14, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 19:26:31', 1),
(15, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 19:27:43', 1),
(16, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 19:27:54', 1),
(17, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 19:39:49', 1),
(18, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 19:43:52', 1),
(19, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 19:45:43', 1),
(20, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 19:47:29', 1),
(21, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 20:07:46', 1),
(22, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 20:10:09', 1),
(23, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 20:10:18', 1),
(24, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 20:44:15', 1),
(25, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 20:44:25', 1),
(26, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 20:44:31', 1),
(27, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 20:52:44', 1),
(28, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 21:14:57', 1),
(29, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 21:15:27', 1),
(30, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 21:21:02', 1),
(31, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 21:41:29', 1),
(32, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 21:41:43', 1),
(33, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 21:45:53', 1),
(34, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 21:47:50', 1),
(35, '::1', 'sman9bdl@gmail.com', 5, '2023-01-01 21:48:12', 1),
(36, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-01 21:48:29', 1),
(37, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-02 02:20:52', 1),
(38, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-02 02:21:31', 1),
(39, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-02 03:10:26', 1),
(40, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-03 08:59:29', 1),
(41, '::1', 'smalan', NULL, '2023-01-03 18:55:19', 0),
(42, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-03 18:55:25', 1),
(43, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-04 19:13:57', 1),
(44, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-05 19:01:57', 1),
(45, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-05 19:07:48', 1),
(46, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-08 21:43:34', 1),
(47, '::1', 'smalan', NULL, '2023-01-10 20:57:59', 0),
(48, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-10 20:58:07', 1),
(49, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-11 20:09:36', 1),
(50, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-12 00:00:31', 1),
(51, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-12 00:08:33', 1),
(52, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-12 18:40:54', 1),
(53, '::1', 'gerobak143', NULL, '2023-01-12 19:01:48', 0),
(54, '::1', 'gerobak143', 6, '2023-01-12 19:02:24', 0),
(55, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-15 23:44:02', 1),
(56, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-16 00:07:53', 1),
(57, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-16 21:27:04', 1),
(58, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-17 21:49:19', 1),
(59, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-17 22:00:24', 1),
(60, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-17 22:27:42', 1),
(61, '::1', 'gerobak143', NULL, '2023-01-17 23:10:12', 0),
(62, '::1', 'gerobak143@gmail.com', 7, '2023-01-17 23:11:05', 1),
(63, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-17 23:11:47', 1),
(64, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-18 22:45:17', 1),
(65, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-23 14:35:35', 1),
(66, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-23 23:58:26', 1),
(67, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-24 04:55:36', 1),
(68, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-24 07:33:46', 1),
(69, '::1', 'staf', NULL, '2023-01-24 07:47:44', 0),
(70, '::1', 'sman9bdl@gmail.com', 5, '2023-01-24 07:48:13', 1),
(71, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-24 08:57:20', 1),
(72, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-24 12:43:30', 1),
(73, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-25 00:02:32', 1),
(74, '::1', 'sman9bdl@gmail.com', 5, '2023-01-25 00:32:29', 1),
(75, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-25 01:24:52', 1),
(76, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-25 01:49:18', 1),
(77, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-29 12:20:02', 1),
(78, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-31 07:52:11', 1),
(79, '::1', 'icamstudioofficial@gmail.com', 4, '2023-01-31 08:42:16', 1),
(80, '::1', 'admin', NULL, '2023-02-02 02:30:12', 0),
(81, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-04 01:34:38', 1),
(82, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-04 08:15:38', 1),
(83, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-04 11:51:20', 1),
(84, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-05 08:32:52', 1),
(85, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-05 13:17:40', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-10 23:20:34', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 07:45:42', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 08:23:57', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 09:18:15', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 09:21:18', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 11:02:27', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 11:08:49', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 12:20:39', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-11 23:02:12', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-13 04:04:00', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-13 14:40:58', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-13 22:11:59', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-15 12:37:43', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-18 02:42:39', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-18 11:32:56', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-18 15:21:59', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-18 22:59:32', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-19 08:55:25', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-19 09:54:04', 1),
(0, '::1', 'persadaputu@gmail.com', 0, '2023-02-19 12:46:57', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-02-19 12:47:02', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-03 07:49:48', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-04 02:32:37', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-06 01:42:48', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-06 07:03:21', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-14 02:33:55', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-26 07:12:40', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-27 02:15:56', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-03-30 04:25:18', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-04-02 06:16:48', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-04-03 03:03:13', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-04-03 05:38:08', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-04-03 06:03:53', 1),
(0, '::1', 'staf', NULL, '2023-04-04 00:45:16', 0),
(0, '::1', 'sman9bdl@gmail.com', 5, '2023-04-04 00:45:24', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-04-04 00:48:14', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-05-03 04:25:56', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-05-04 11:48:52', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-05-04 11:56:21', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-05-04 13:00:54', 1),
(0, '::1', 'icamstudioofficial@gmail.com', 4, '2023-05-05 13:24:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'Manage Dashboard', 'Manage All Dashboard Page'),
(2, 'Manage User', 'Manage All Account');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_users_permissions`
--

INSERT INTO `auth_users_permissions` (`user_id`, `permission_id`) VALUES
(4, 1),
(4, 2),
(5, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `penerbit_buku` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_buku` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_buku` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `serial_number`, `penerbit_buku`, `gambar_buku`, `kondisi_buku`, `id_kelas`) VALUES
(6, 'ss', 'sss', 'Screenshot (690).png', 'Baik', 21);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ukuran_foto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_foto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_foto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id` int NOT NULL,
  `nama_gedung` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id`, `nama_gedung`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` int NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `gambar_jam` varchar(255) NOT NULL,
  `kondisi_jam` varchar(255) NOT NULL,
  `id_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ketua_kelas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `wali_kelas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kelas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `ketua_kelas`, `wali_kelas`, `gambar_kelas`) VALUES
(21, '11', '111', 'ssss', 'Screenshot (2).png'),
(26, 'sss', 'sss', 'ss', 'wp6046733-mahakal-4k-wallpapers.jpg'),
(27, 'wwww', 'wwwwee', 'eee', ''),
(28, 'X 3', 'Yoga', 'Supardi., M.Pd', '4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kipas_angin`
--

CREATE TABLE `kipas_angin` (
  `id` int NOT NULL,
  `id_kelas` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `gambar_kipas_angin` varchar(255) NOT NULL,
  `kondisi_kipas_angin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id` int NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `brand_komputer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_komputer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_komputer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `spesifikasi_komputer` text COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_produk_komputer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id`, `serial_number`, `brand_komputer`, `gambar_komputer`, `kondisi_komputer`, `spesifikasi_komputer`, `jenis_produk_komputer`, `id_kelas`) VALUES
(0, '', 'ee', '7.jpeg', 'Kerusakan Ringan', '                                                                                                                                                ee                                                                                                                                    ', 'Laptop', 21);

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id` int NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ukuran_kursi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_kursi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_kursi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ukuran_meja` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_meja` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_meja` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1672389395, 1);

-- --------------------------------------------------------

--
-- Table structure for table `papan_tulis`
--

CREATE TABLE `papan_tulis` (
  `id` int NOT NULL,
  `id_kelas` int NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ukuran_papan_tulis` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_papan_tulis` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_papan_tulis` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pena`
--

CREATE TABLE `pena` (
  `id` int NOT NULL,
  `merk_pena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_pena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_pena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggaris`
--

CREATE TABLE `penggaris` (
  `id` int NOT NULL,
  `merk_penggaris` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_penggaris` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_penggaris` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `panjang_penggaris` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penghapus`
--

CREATE TABLE `penghapus` (
  `id` int NOT NULL,
  `merk_penghapus` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_penghapus` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_penghapus` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `piala`
--

CREATE TABLE `piala` (
  `id_piala` int NOT NULL,
  `nama_piala` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `peserta` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` int NOT NULL,
  `kode_gedung` int NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id` int NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spidol`
--

CREATE TABLE `spidol` (
  `id` int NOT NULL,
  `merk_spidol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar_spidol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_spidol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `warna_spidol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `serial_number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'icamstudioofficial@gmail.com', 'smalan', '$2y$10$a0.ZaoMyPJb4lZPc6bkF1uZrEJb4yY7M69EqsPvTq/5c0DNBzis0C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-30 08:16:28', '2022-12-30 08:16:28', NULL),
(5, 'sman9bdl@gmail.com', 'staff', '$2y$10$hzfjb52u5aVB/ZFi5/CeneZfrr9Xmxm6OG20vu2Ni6A4hCVvwLgX2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-01-01 19:47:20', '2023-01-01 19:47:20', NULL),
(7, 'gerobak143@gmail.com', 'gerobak143', '$2y$10$hzfjb52u5aVB/ZFi5/CeneZfrr9Xmxm6OG20vu2Ni6A4hCVvwLgX2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-01-18 12:09:19', '2023-01-18 12:09:19', NULL),
(8, 'mdndfzn@gmail.com', 'mdndfzn', '$2y$10$hzfjb52u5aVB/ZFi5/CeneZfrr9Xmxm6OG20vu2Ni6A4hCVvwLgX2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-01-18 12:30:11', '2023-01-18 12:30:11', NULL),
(0, 'persadaputu@gmail.com', 'persada', '$2y$10$NA1hWu2GV1bmenDnkY.AOOTqb2fQUyNVANyJvBd.Z6hsLMR7N6WsS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-02-19 10:02:36', '2023-02-19 10:02:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kipas_angin`
--
ALTER TABLE `kipas_angin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papan_tulis`
--
ALTER TABLE `papan_tulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pena`
--
ALTER TABLE `pena`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggaris`
--
ALTER TABLE `penggaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghapus`
--
ALTER TABLE `penghapus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piala`
--
ALTER TABLE `piala`
  ADD PRIMARY KEY (`id_piala`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spidol`
--
ALTER TABLE `spidol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac`
--
ALTER TABLE `ac`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kipas_angin`
--
ALTER TABLE `kipas_angin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `papan_tulis`
--
ALTER TABLE `papan_tulis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pena`
--
ALTER TABLE `pena`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penggaris`
--
ALTER TABLE `penggaris`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penghapus`
--
ALTER TABLE `penghapus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `piala`
--
ALTER TABLE `piala`
  MODIFY `id_piala` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spidol`
--
ALTER TABLE `spidol`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

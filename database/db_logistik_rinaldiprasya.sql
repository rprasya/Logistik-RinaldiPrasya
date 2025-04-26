-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2025 at 06:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_logistik_rinaldiprasya`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` bigint UNSIGNED NOT NULL,
  `no_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `no_barang`, `kode_barang`, `quantity`, `destination`, `tanggal_keluar`, `created_at`, `updated_at`) VALUES
(4, '001', '101011', 20, 'Jakarta', '2025-04-26', '2025-04-26 07:29:41', '2025-04-26 07:37:30'),
(5, '002', '101011', 50, 'Jakarta', '2025-04-26', '2025-04-26 07:37:10', '2025-04-26 07:37:10'),
(6, '117', '1001', 4, 'Padang', '2025-04-26', '2025-04-26 09:23:28', '2025-04-26 09:23:28'),
(7, '11', '1001', 11, 'Batam', '2025-04-26', '2025-04-26 09:28:42', '2025-04-26 09:28:42'),
(8, '102', '100111', 5, 'Jakarta', '2025-04-26', '2025-04-26 09:37:08', '2025-04-26 09:37:08'),
(9, '154', '113442', 3, 'Bogor', '2025-04-24', '2025-04-26 09:37:30', '2025-04-26 09:37:30'),
(10, '1122', '1001', 3, 'Bogor', '2025-04-25', '2025-04-26 09:38:06', '2025-04-26 09:38:06'),
(11, '1221', '101011', 13, 'Depok', '2025-04-26', '2025-04-26 09:38:39', '2025-04-26 09:38:39'),
(12, '177', '101012', 4, 'Lampung', '2025-04-26', '2025-04-26 09:39:05', '2025-04-26 09:39:05'),
(14, '578', '101011', 7, 'Palembang', '2025-04-26', '2025-04-26 09:40:06', '2025-04-26 09:40:06'),
(15, '6352', '101015', 5, 'Batam', '2025-04-26', '2025-04-26 09:40:31', '2025-04-26 10:25:32'),
(17, '2139312', '100111', 1, 'Bogor', '2025-04-27', '2025-04-26 10:46:59', '2025-04-26 10:46:59'),
(18, '12333', '101011', 11, 'Depok', '2025-04-27', '2025-04-26 10:47:28', '2025-04-26 10:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` bigint UNSIGNED NOT NULL,
  `no_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `no_barang`, `kode_barang`, `quantity`, `origin`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(3, '002', '101011', 199, 'USA', '2025-04-23', '2025-04-26 06:43:21', '2025-04-26 10:15:53'),
(4, '003', '101012', 20, 'Japan', '2025-04-26', '2025-04-26 06:57:43', '2025-04-26 06:57:43'),
(6, '21323', '101011', 50, 'Japan', '2025-04-26', '2025-04-26 07:18:48', '2025-04-26 07:18:48'),
(7, '213', '100111', 15, 'Papua', '2025-04-26', '2025-04-26 07:23:22', '2025-04-26 07:23:22'),
(8, '005', '101011', 20, 'Spain', '2025-04-11', '2025-04-26 07:23:50', '2025-04-26 07:23:50'),
(9, '101', '101013', 10, 'Jakarta', '2025-04-26', '2025-04-26 07:24:17', '2025-04-26 07:27:57'),
(10, '101', '1001', 20, 'Batam', '2025-04-26', '2025-04-26 07:24:43', '2025-04-26 07:24:43'),
(11, '122', '101012', 5, 'Manado', '2025-04-26', '2025-04-26 07:25:16', '2025-04-26 07:25:16'),
(12, '114', '101012', 10, 'Ternate', '2025-04-26', '2025-04-26 07:25:40', '2025-04-26 07:25:40'),
(14, '116', '101012', 10, 'Japan', '2025-04-26', '2025-04-26 07:26:54', '2025-04-26 07:26:54'),
(15, '299', '101012', 10, 'Sibolga', '2025-04-26', '2025-04-26 07:27:28', '2025-04-26 07:27:28'),
(16, '1442', '101015', 300, 'China', '2025-04-26', '2025-04-26 09:29:28', '2025-04-26 09:29:28'),
(17, '333', '113442', 100, 'Afrika', '2025-04-26', '2025-04-26 09:32:21', '2025-04-26 09:32:21'),
(18, '42312', '1001', 150, 'China', '2025-04-26', '2025-04-26 09:41:00', '2025-04-26 09:41:00'),
(19, '199', '107112', 40, 'Semarang', '2025-04-26', '2025-04-26 09:41:45', '2025-04-26 09:41:45'),
(20, '4124', '111111', 10, 'Turkey', '2025-04-26', '2025-04-26 09:42:30', '2025-04-26 09:42:30'),
(21, '71236', '777111', 20, 'USA', '2025-04-24', '2025-04-26 09:43:28', '2025-04-26 09:43:28'),
(22, '90321', '992612', 10, 'Japan', '2025-04-26', '2025-04-26 09:43:47', '2025-04-26 09:43:47'),
(23, '99213', '102933', 5, 'England', '2025-04-26', '2025-04-26 09:44:25', '2025-04-26 10:25:19'),
(24, '36712', '317123', 5, 'Batam', '2025-04-27', '2025-04-26 10:13:53', '2025-04-26 10:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_26_071602_create_barang_masuk_table', 1),
(5, '2025_04_26_071608_create_barang_keluar_table', 1),
(6, '2025_04_26_071616_create_stok_barang_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QtkemlviGMeB7FEMcGNVIcbfWfjBtPKfId4ybRxu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3JWb24zaDc4TGN5OWc5dlhWT0x0aWtMYnl1cnRLMXU3TndaOHFzVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1745690469);

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`id`, `kode_barang`, `stok`, `created_at`, `updated_at`) VALUES
(1, '101011', 168, '2025-04-26 06:38:22', '2025-04-26 10:47:28'),
(2, '101012', 51, '2025-04-26 06:57:43', '2025-04-26 09:39:05'),
(3, '100111', 9, '2025-04-26 07:23:22', '2025-04-26 10:46:59'),
(5, '1001', 152, '2025-04-26 07:24:43', '2025-04-26 09:41:00'),
(6, '101015', 295, '2025-04-26 09:29:29', '2025-04-26 10:25:32'),
(7, '113442', 97, '2025-04-26 09:32:21', '2025-04-26 09:37:30'),
(8, '107112', 40, '2025-04-26 09:41:45', '2025-04-26 09:41:45'),
(9, '111111', 10, '2025-04-26 09:42:30', '2025-04-26 09:42:30'),
(10, '777111', 20, '2025-04-26 09:43:28', '2025-04-26 09:43:28'),
(11, '992612', 10, '2025-04-26 09:43:47', '2025-04-26 09:43:47'),
(12, '102933', 5, '2025-04-26 09:44:25', '2025-04-26 10:25:19'),
(13, '317123', 5, '2025-04-26 10:13:53', '2025-04-26 10:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$hZ.80/m92WAQmYjxFd/Ihu67M/W7SMNtfMQVJf8gYdwVS9jocT.y6', NULL, '2025-04-26 06:01:32', '2025-04-26 06:01:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stok_barang_kode_barang_unique` (`kode_barang`);

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
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

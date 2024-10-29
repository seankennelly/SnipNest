-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2024 at 12:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codesnippets`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `screenshot` varchar(255) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `explanation` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `title`, `screenshot`, `tags`, `description`, `explanation`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tempore error placeat in exercitationem aut nulla.', NULL, 'JavaScript, API', 'Voluptatem qui possimus esse officiis. Quo et omnis sed non quis laborum rem. Dolorum voluptatem ipsam in numquam unde earum natus. Rerum est perferendis quis. Laudantium molestias a sint deleniti et expedita assumenda. Delectus culpa vel ea suscipit vero similique. Facilis non voluptatum amet aliquam nihil non enim.', 'Reprehenderit quae nesciunt sed.', '2024-10-28 15:37:41', '2024-10-28 15:37:41'),
(2, 1, 'Ullam eveniet dolorum sunt amet amet et possimus.', NULL, 'JavaScript, API', 'Nobis molestiae ea nihil recusandae molestiae iste quia facere. Quibusdam non minus molestias omnis. Nulla nihil sed explicabo voluptas. Qui est doloremque amet minima minima voluptatum provident.', 'Dolor optio commodi hic nemo rerum quidem qui.', '2024-10-28 15:37:41', '2024-10-28 15:37:41'),
(3, 1, 'Voluptatem minima dolor voluptatem possimus fuga distinctio suscipit provident.', NULL, 'JavaScript, API', 'Laudantium perspiciatis commodi ducimus suscipit. Impedit amet impedit et dolor repudiandae. Sit et beatae aperiam quisquam id sed. Architecto deserunt aut aut ut. Voluptatem omnis repudiandae aut laboriosam id voluptas quia. Sunt laboriosam quis quo voluptate quam. Similique eum nisi sint numquam.', 'Dolorem est doloremque a voluptatem nihil.', '2024-10-28 15:37:41', '2024-10-28 15:37:41'),
(4, 1, 'Accusamus aut et ut accusamus minus fugit et.', NULL, 'JavaScript, API', 'Saepe eos assumenda molestiae laudantium esse. Aut voluptas nemo aperiam itaque corrupti enim. Nesciunt itaque inventore quae molestias architecto nemo. Aliquid neque voluptas doloribus et commodi.', 'Iste earum ab velit et quis explicabo.', '2024-10-28 15:37:41', '2024-10-28 15:37:41'),
(5, 1, 'Illum ducimus est accusamus id sunt facere commodi.', NULL, 'JavaScript, API', 'Quasi architecto labore vel. Et quia quod voluptatum omnis nulla. Ex et voluptas consequuntur tenetur quo temporibus asperiores. Mollitia similique vel sint laborum. Voluptatem a illum voluptatem excepturi quaerat et similique aut.', 'Amet itaque sunt nisi nam qui et quo.', '2024-10-28 15:37:41', '2024-10-28 15:37:41'),
(6, 1, 'Repudiandae aperiam explicabo numquam similique.', NULL, 'JavaScript, API', 'Accusantium atque in itaque nemo id autem. Rerum asperiores doloribus vel excepturi reprehenderit asperiores illo qui. Fuga ducimus vero voluptates mollitia ut earum perferendis. Sint accusamus rerum aut numquam aperiam. Eveniet soluta veritatis provident consequatur et voluptatum quam. Natus dolores perspiciatis quia tempore repellendus odit quasi. Dolorem quis repellendus quis perferendis.', 'Laudantium perspiciatis eos dolor eum ullam voluptas id.', '2024-10-28 15:37:41', '2024-10-28 15:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(98, '0001_01_01_000000_create_users_table', 1),
(99, '0001_01_01_000001_create_cache_table', 1),
(100, '0001_01_01_000002_create_jobs_table', 1),
(101, '2024_10_22_102030_create_listings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('zf0O9lu2eehE8WlnBWD3Cba2yLYAoZZe0uDI399W', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia09sYVQ1MzNlWFhpdHZMT0ZIbnBKUXI5OVE2Q09mRGNRZ3hxOTE5WiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9jb2RlX3NuaXBwZXRzLnRlc3QiO319', 1730130290);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Testly Snipes', 'test@test.com', '2024-10-28 15:37:40', '$2y$12$AnjBjz.yUDzCmIMBvzqgw.4ErGmO3Orw3q.EpjTzpGcYT7SrmmqXW', 'jw5bfF2r8j', '2024-10-28 15:37:41', '2024-10-28 15:37:41'),
(2, 'Adam Test', 'test@example.com', '2024-10-28 15:37:41', '$2y$12$8sp2wflr/fVyhwmdjwWvK.Xet154.Jb8Gyz3FVHx2LothuLNqYibK', 'p3DHdZlfu0', '2024-10-28 15:37:41', '2024-10-28 15:37:41'),
(3, 'Battenberg Jones', 'jones@gmail.com', NULL, '$2y$12$CKn.3jtyXT0w.AMEh5iAFOZ5UZL5f8eOn129e8/pR66kaxd/Y2676', NULL, '2024-10-28 15:38:18', '2024-10-28 15:38:18');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listings_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

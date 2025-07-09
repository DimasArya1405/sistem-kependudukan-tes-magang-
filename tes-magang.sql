-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2025 at 02:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes-magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_keluarga`
--

CREATE TABLE `anggota_keluarga` (
  `id` int NOT NULL,
  `id_keluarga` int NOT NULL,
  `id_penduduk` int NOT NULL,
  `hubungan_dalam_keluarga` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anggota_keluarga`
--

INSERT INTO `anggota_keluarga` (`id`, `id_keluarga`, `id_penduduk`, `hubungan_dalam_keluarga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Anak', '2025-07-07 22:07:54', '2025-07-07 22:08:12'),
(2, 4, 10, 'Istri', '2025-07-07 22:11:37', '2025-07-07 22:11:37'),
(3, 4, 7, 'Saudara', '2025-07-07 22:12:02', '2025-07-07 22:12:02'),
(4, 4, 19, 'Mertua', '2025-07-08 02:41:25', '2025-07-08 02:41:25');

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
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `alamat` text,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kepala_keluarga_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `no_kk`, `alamat`, `rt_rw`, `kelurahan`, `kecamatan`, `kepala_keluarga_id`, `created_at`, `updated_at`) VALUES
(1, '121231802312', 'Binangun', '20 / 06', 'Binangun', 'Purwokerto', 7, '2025-07-07 21:47:41', '2025-07-07 21:47:41'),
(2, '10283109281213', 'Kuripan', '08 / 03', 'Banjar', 'Padalarang', 10, '2025-07-07 21:48:30', '2025-07-07 21:48:30'),
(4, '12093812031', 'Bunton', '19 / 09', 'Bunton', 'Adipalapuli', 6, '2025-07-07 21:55:39', '2025-07-07 21:55:39'),
(5, '1982371231', 'Binagnun', '20/06', 'Binangun', 'Binangun', 8, '2025-07-08 02:40:41', '2025-07-08 02:40:41');

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
(4, '2025_07_08_035918_create_pekerjaan_table', 1);

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
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'Polisi'),
(3, 'Programmer'),
(4, 'Dosen'),
(5, 'Sopir'),
(6, 'Designer'),
(7, 'Petani'),
(8, 'Pedagang'),
(9, 'Guru'),
(11, 'Pegawai Negeri'),
(12, 'Karyawan Swasta'),
(13, 'Wirausaha');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'D3'),
(6, 'D4'),
(7, 'S1'),
(8, 'S2'),
(9, 'S3'),
(10, 'contoh');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` text,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status_perkawinan` varchar(50) DEFAULT NULL,
  `pekerjaan_id` int DEFAULT NULL,
  `pendidikan_id` int DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt_rw`, `kelurahan`, `kecamatan`, `agama`, `status_perkawinan`, `pekerjaan_id`, `pendidikan_id`, `kewarganegaraan`, `created_at`, `updated_at`) VALUES
(1, '3674010101010001', 'Ahmad Fauzi aaaa', 'Jakarta', '1990-05-12', 'L', 'Jl. Merdeka No.10', '001/002', 'Cempaka Putih', 'Cempaka Putih', 'Islam', 'Kawin', 1, 4, 'WNI', '2025-07-08 03:39:03', '2025-07-08 02:37:38'),
(2, '3674010101010002', 'Siti Nurhaliza', 'Bandung', '1992-03-21', 'P', 'Jl. Anggrek No.5', '003/004', 'Sukasari', 'Sukasari', 'Islam', 'Belum Kawin', 3, 4, 'WNI', '2025-07-08 03:39:03', '2025-07-07 21:40:02'),
(3, '3674010101010003', 'Budi Santoso', 'Surabaya', '1988-11-03', 'L', 'Jl. Mawar No.12', '005/006', 'Wonokromo', 'Wonokromo', 'Kristen', 'Kawin', 5, 2, 'WNI', '2025-07-08 03:39:03', '2025-07-07 21:59:04'),
(4, '3674010101010004', 'Dewi Lestari', 'Yogyakarta', '1995-07-15', 'P', 'Jl. Kenanga No.7', '007/008', 'Gondokusuman', 'Gondokusuman', 'Katolik', 'Belum Kawin', 3, 6, 'WNI', '2025-07-08 03:39:03', '2025-07-07 21:59:15'),
(5, '3674010101010005', 'Rudi Hartono', 'Medan', '1985-09-10', 'L', 'Jl. Nangka No.9', '009/010', 'Medan Baru', 'Medan Baru', 'Islam', 'Cerai', NULL, NULL, 'WNI', '2025-07-08 03:39:03', '2025-07-08 03:39:03'),
(6, '3674010101010006', 'Melati Ayu', 'Semarang', '1993-06-18', 'P', 'Jl. Melati No.6', '011/012', 'Pedurungan', 'Pedurungan', 'Islam', 'Kawin', NULL, NULL, 'WNI', '2025-07-08 03:39:03', '2025-07-08 03:39:03'),
(7, '3674010101010007', 'Andi Saputra', 'Makassar', '1991-08-30', 'L', 'Jl. Cendana No.3', '013/014', 'Panakkukang', 'Panakkukang', 'Islam', 'Belum Kawin', NULL, NULL, 'WNI', '2025-07-08 03:39:03', '2025-07-08 03:39:03'),
(8, '3674010101010008', 'Citra Kirana', 'Palembang', '1994-04-25', 'P', 'Jl. Rambutan No.11', '015/016', 'Ilir Barat', 'Ilir Barat', 'Hindu', 'Kawin', NULL, NULL, 'WNI', '2025-07-08 03:39:03', '2025-07-08 03:39:03'),
(9, '3674010101010009', 'Deni Kurniawan', 'Banjarmasin', '1989-10-07', 'L', 'Jl. Pisang No.4', '017/018', 'Banjarmasin Utara', 'Banjarmasin Utara', 'Buddha', 'Kawin', NULL, NULL, 'WNI', '2025-07-08 03:39:03', '2025-07-08 03:39:03'),
(10, '3674010101010010', 'Nina Agustina', 'Pontianak', '1996-01-13', 'P', 'Jl. Jeruk No.2', '019/020', 'Pontianak Selatan', 'Pontianak Selatan', 'Islam', 'Belum Kawin', NULL, NULL, 'WNI', '2025-07-08 03:39:03', '2025-07-08 03:39:03'),
(17, '3674010923010008', 'Lunox', 'Bandung', '2025-07-08', 'P', NULL, NULL, NULL, NULL, NULL, NULL, 4, 9, NULL, '2025-07-07 22:56:03', '2025-07-07 22:56:03'),
(18, '3009010903040012', 'Angela', 'Yogyakarta', '2025-07-22', 'P', NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, NULL, '2025-07-07 22:58:13', '2025-07-07 22:58:13'),
(19, '3014010101010023', 'Aldous', 'Cilacap', '2025-07-09', 'L', NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, NULL, '2025-07-07 23:01:49', '2025-07-07 23:01:49'),
(20, '3674010101011011', 'Lionel Messi', 'Rosario', '1987-06-24', 'L', 'Jl. Argentina No.10', '001/001', 'Central', 'Rosario City', 'Kristen', 'Kawin', 1, 2, 'Argentina', '2025-07-08 00:46:49', '2025-07-08 00:46:49'),
(21, '3674010101011012', 'Cristiano Ronaldo', 'Funchal', '1985-02-05', 'L', 'Jl. Portugal No.7', '002/002', 'Madeira', 'Funchal Barat', 'Kristen', 'Kawin', 1, 3, 'Portugal', '2025-07-08 00:46:49', '2025-07-08 00:46:49'),
(22, '3674010101011013', 'Kylian Mbappé', 'Paris', '1998-12-20', 'L', 'Jl. Prancis No.8', '003/003', 'Bondy', 'Paris Utara', 'Islam', 'Belum Kawin', 1, 2, 'Prancis', '2025-07-08 00:46:49', '2025-07-08 00:46:49'),
(23, '3674010101011014', 'Neymar Jr', 'Mogi das Cruzes', '1992-02-05', 'L', 'Jl. Brasil No.12', '004/004', 'Santos', 'São Paulo', 'Kristen', 'Belum Kawin', 1, 3, 'Brasil', '2025-07-08 00:46:49', '2025-07-08 00:46:49'),
(24, '3674010101011015', 'Erling Haaland', 'Leeds', '2000-07-21', 'L', 'Jl. Norwegia No.3', '005/005', 'Bryne', 'Rogaland', 'Kristen', 'Belum Kawin', 1, 1, 'Norwegia', '2025-07-08 00:46:49', '2025-07-08 00:46:49'),
(25, '3674010101010324', 'Lucifer Morningstar', 'Cilacap', '2025-07-25', 'L', NULL, NULL, NULL, NULL, NULL, NULL, 13, 9, NULL, '2025-07-08 01:01:22', '2025-07-08 01:01:22'),
(27, '12121212121', 'Rafa Akhsan', 'Jakarta', '1990-05-12', 'L', 'Jl. Merdeka No.10', '001/002', 'Cempaka Putih', 'Cempaka Putih', 'Islam', 'Kawin', 1, 4, 'WNI', '2025-07-08 02:40:01', '2025-07-08 02:40:01'),
(28, '23232323232', 'Sani Indah Permata', 'Bandung', '1992-03-21', 'P', 'Jl. Anggrek No.5', '003/004', 'Sukasari', 'Sukasari', 'Islam', 'Belum Kawin', 3, 4, 'WNI', '2025-07-08 02:40:01', '2025-07-08 02:40:01');

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
('3BFq8rlehwTVZdLgFHYGdJ4L3L0P1hXgj8Wwf0WB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWJVcFRQOWw4TnQ0S1YwZzRQcXdEa09ZdUh4YzJkQVg2OGhNMlRSWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wZW5kdWR1ayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9fQ==', 1751969076);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_keluarga` (`id_keluarga`),
  ADD KEY `id_penduduk` (`id_penduduk`);

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
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_kk` (`no_kk`),
  ADD KEY `kepala_keluarga_id` (`kepala_keluarga_id`);

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
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `fk_pekerjaan` (`pekerjaan_id`),
  ADD KEY `fk_pendidikan` (`pendidikan_id`);

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
-- AUTO_INCREMENT for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD CONSTRAINT `anggota_keluarga_ibfk_1` FOREIGN KEY (`id_keluarga`) REFERENCES `keluarga` (`id`),
  ADD CONSTRAINT `anggota_keluarga_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id`);

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_ibfk_1` FOREIGN KEY (`kepala_keluarga_id`) REFERENCES `penduduk` (`id`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `fk_pekerjaan` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`),
  ADD CONSTRAINT `fk_pendidikan` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

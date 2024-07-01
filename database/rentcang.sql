-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 06:10 PM
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
-- Database: `rentcang`
--

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
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `Id_Kendaraan` int(10) UNSIGNED NOT NULL,
  `Nama_Kendaraan` varchar(40) NOT NULL,
  `Jenis_Kendaraan` enum('Mobil','Motor') NOT NULL,
  `Merk` varchar(10) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`Id_Kendaraan`, `Nama_Kendaraan`, `Jenis_Kendaraan`, `Merk`, `Harga`, `Stok`, `Deskripsi`, `Gambar`, `created_at`, `updated_at`) VALUES
(1, 'Alphard', 'Mobil', 'Toyota', 1000000, 0, 'Kencang dan mudah digunakan', 'image/gambarKendaraan/1fTVkX9VBk4pUar76oJCidkuXhvyRhiR1eNJZxRg.png', '2024-06-07 23:48:33', '2024-06-30 03:40:33'),
(4, 'CBR', 'Motor', 'Honda', 80000, 4, 'Honda CBR dibekali dengan mesin 150 cc, DOHC 6, dan percepatan yang berkarakter lebih halus dan bertenaga.\r\n\r\nSepeda motor Sport ini juga dikenal irit bahan bakar. Satu liter bensin diklaim bisa menempuh jarak hingga 50 km.', 'image/gambarKendaraan/555KODEDpMnK77JY1LIFtUhKW7Q8CovLtUyGMmeT.png', '2024-06-09 19:04:28', '2024-06-30 03:40:14'),
(5, 'corolla', 'Mobil', 'Toyota', 300000, 4, 'Untuk mesin juga sama, yaitu memakai mesin bensin 3-silinder 1.198 cc Dual-VVTi (WA-VE) yang menghasilkan tenaga 88 dk/6.000 rpm dan torsi puncak 113 Nm/4.500 rpm.', 'image/gambarKendaraan/qJIi6eYN9NxZWCbhZGFhaDDYK2juWA12tqEaAeq6.png', '2024-06-16 20:58:01', '2024-06-30 08:09:54'),
(8, 'BMW Z4', 'Mobil', 'BMW', 200000, 3, 'BMW z4 menggunakan 1.998 cc dengan tipe drive rear wheel drive (RWD). Konfigurasi mesin berupa BMW Twin Power Turbo dengan total silinder sebanyak 4 buah.', 'image/gambarKendaraan/kLMJONhxF7TKmyUBMHQZ4oHzrg5r6SZUY1dGjWve.png', '2024-06-25 02:07:05', '2024-06-30 06:48:26'),
(9, 'Beat Street', 'Motor', 'Honda', 100000, 4, 'Motor yang ramah lingkungan', 'image/gambarKendaraan/TYHA40qJU0JU5JUmJRIgiGdJR7WN07EIOM2FSSQM.png', '2024-06-30 00:15:20', '2024-06-30 00:15:20'),
(10, 'ADV', 'Motor', 'Honda', 100000, 4, 'spesifikasi mesin Honda ADV  ini ditenagai dua pilihan mesin Petrol berkapasitas cc. ADV  tersedia dengan transmisi CVT tergantung variannya. .', 'image/gambarKendaraan/8SOxWM5fwlWlLqzAm8TQRoHCiVpH9H6hN4AoRquF.png', '2024-06-30 03:36:06', '2024-06-30 07:58:57'),
(11, 'Genio', 'Motor', 'Honda', 100000, 0, 'Genio menggendong mesin berkapasitas 110cc SOHC, dengan sistem pembakaran injeksi PGM-FI. Tenaga maksimal mesin ini mencapai 6,6 kW @ 7.500 rpm dan torsi puncak di 9,3 Nm @ 5.500 rpm.', 'image/gambarKendaraan/jzeaxz4QrpBgpSRR3TzJpvZCpp7vO82VlSyf0zQB.png', '2024-06-30 03:46:58', '2024-06-30 03:46:58'),
(12, 'Agya', 'Mobil', 'Toyota', 300000, 3, 'Untuk mesin juga sama, yaitu memakai mesin bensin 3-silinder 1.198 cc Dual-VVTi (WA-VE) yang menghasilkan tenaga 88 dk/6.000 rpm dan torsi puncak 113 Nm/4.500 rpm.', 'image/gambarKendaraan/T3CnAvbpSpVAgH9Z2KP4k1wtQFFhsgUU5365SGHI.png', '2024-06-30 03:53:38', '2024-06-30 04:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `klaim_promo`
--

CREATE TABLE `klaim_promo` (
  `Id_Klaim` int(10) UNSIGNED NOT NULL,
  `Id_Pengguna` int(10) UNSIGNED NOT NULL,
  `Id_Promo` int(10) UNSIGNED NOT NULL,
  `Status` enum('Belum_digunakan','Sudah_digunakan') NOT NULL DEFAULT 'Belum_digunakan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klaim_promo`
--

INSERT INTO `klaim_promo` (`Id_Klaim`, `Id_Pengguna`, `Id_Promo`, `Status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Sudah_digunakan', '2024-06-08 00:08:11', '2024-06-08 01:50:18'),
(6, 2, 2, 'Sudah_digunakan', '2024-06-10 08:57:34', '2024-06-12 06:25:51'),
(7, 33, 1, 'Belum_digunakan', '2024-06-12 07:54:20', '2024-06-12 07:54:20'),
(8, 2, 3, 'Sudah_digunakan', '2024-06-14 05:45:59', '2024-06-14 07:12:36'),
(11, 35, 3, 'Sudah_digunakan', '2024-06-24 19:22:57', '2024-06-24 20:08:28'),
(12, 35, 2, 'Sudah_digunakan', '2024-06-24 19:23:02', '2024-06-26 09:53:03'),
(13, 35, 1, 'Sudah_digunakan', '2024-06-24 19:23:06', '2024-06-24 19:34:24'),
(14, 37, 3, 'Belum_digunakan', '2024-06-30 04:15:00', '2024-06-30 04:15:00'),
(17, 42, 2, 'Belum_digunakan', '2024-06-30 07:58:03', '2024-06-30 07:58:03');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_16_022407_create_pengguna_table', 1),
(6, '2024_05_20_111510_create_kendaraan_table', 1),
(7, '2024_05_20_111522_create_promo_table', 1),
(8, '2024_05_20_111526_create_klaim_table', 1),
(9, '2024_05_20_111530_create_rental_table', 1),
(10, '2024_05_20_111549_create_status_table', 1),
(11, '2024_05_20_111559_create_riwayat_table', 1);

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
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `Id_Pengguna` int(10) UNSIGNED NOT NULL,
  `Nama_Lengkap` varchar(40) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `No_Handphone` varchar(15) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Roles` enum('Admin','Pengguna') NOT NULL DEFAULT 'Pengguna',
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`Id_Pengguna`, `Nama_Lengkap`, `Username`, `No_Handphone`, `NIK`, `Roles`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Rentcang', 'Admin', '01818282818288', '1663626626626', 'Admin', 'admin@gmail.com', '$2y$12$331CJSXx8cWYOG1VP5IwmePyiVmWcGxY40ZYl.QJbiqe8F1nQJFja', '2024-06-07 23:46:01', '2024-06-09 05:44:20'),
(2, 'Muhammad Adib Fakhri Siregar', 'Adibbb', '123445', '1111111', 'Pengguna', 'adib@gmail.com', '$2y$12$/Tr69xVLWkKdpe1gfD.4/OP/xVbtzN3cWtWV0ZY1OgVYlpUx4ZC7q', '2024-06-07 23:47:18', '2024-06-30 04:12:28'),
(27, 'syafiq', 'fdf', '44444', '111111', 'Pengguna', '1@gmail.com', '$2y$12$506ru6GxaU0FXycWCih51.pbcWS0AtL6hGHlaKucGa6SvFvoT6.Ai', '2024-06-11 06:38:10', '2024-06-11 06:38:10'),
(28, 'Admin Rentcang', 'fff', '082828282', '8282828282', 'Pengguna', 'ffdf@gmail.com', '$2y$12$mp6teZM4z95R6ADlAdB2kOuXoxZoQoY1d8aYp3VT1xJ/4Hkzm6Zr6', '2024-06-11 07:34:26', '2024-06-11 07:34:26'),
(29, 'Admin Rentcang', 'Adib', '08123772777738', '133333', 'Pengguna', 'mobil@gmail.com', '$2y$12$8ABSDmh8/Ke5yZLl7U68duRr0kf9GzFDX5Vp063yWiBZMkYq4jiNq', '2024-06-11 09:02:23', '2024-06-26 02:41:24'),
(30, 'Admin Rentcang', 'sdsd', '020202', '3232323', 'Pengguna', 'a@gmail.com', '$2y$12$GLHSUZZnFtooNQQkvp.IwuIFOI7h1TKxEXO5iGoMUjV/2iihDsvEe', '2024-06-11 18:24:38', '2024-06-11 18:24:38'),
(31, 'kakdkdkajk', 'kakdksdkakm', '9239239239', '293239239', 'Pengguna', 'j@gmail.com', '$2y$12$Esg9SsU.L6NDvFo0BOjB6OX5NvUdr0./MfSxOnOXcU30Wnfl3Da6i', '2024-06-11 18:28:36', '2024-06-11 18:28:36'),
(32, 'syafi', '43', '2324', '2423', 'Pengguna', 'ab@gmail.com', '$2y$12$KhepASZuFd2iPZgfiATeYuGqJWFcgxSQWl45evto66PvvlFLC9E5C', '2024-06-11 18:34:57', '2024-06-11 18:34:57'),
(33, 'Miirza', 'mirza123', '44444', '8282828282', 'Pengguna', 'mirza@gmail.com', '$2y$12$EMF54xOnEXuTtaMMXy5xDenNJA1RvAS5Hr8oWgkRSOLXJgXFwi7ou', '2024-06-11 19:01:44', '2024-06-29 23:19:58'),
(34, 'gelas kaca', 'gelas', '01282832828', '29993034389', 'Pengguna', 'gelas@gmail.com', '$2y$12$5wvycws4k1NcfY9RUHlD.eiCY454gpRxaJ5412j8cPUWZCF4v2knu', '2024-06-23 19:22:34', '2024-06-23 19:22:34'),
(35, 'test', 'test', '0817273727273', '217183883923', 'Pengguna', 'test@gmail.com', '$2y$12$qPwNReBLY7GUJ1/pMF0g3ejQoaTL5/ycb1e3YamNdECG24PjT0/H6', '2024-06-24 19:21:34', '2024-06-24 19:21:34'),
(37, 'Rentcang', 'Rentcang', '0817273766277', '218817662661661', 'Pengguna', 'rentcang@gmail.com', '$2y$12$v1fZ0Jx/eFnFeVOu5YInjuVuna.bRIM0Oiwpa/ANZ3KWrY2hKoKp2', '2024-06-30 04:14:30', '2024-06-30 04:14:30'),
(42, 'timRentcang', 'Rentcangs', '08139299293882', '21717277737188', 'Pengguna', 'timrentcang@gmail.com', '$2y$12$kswwWE/6/KoNZsLDlJpo1utYzn.JBcmh4D0dlqiHrzCXGB8Hx0/yO', '2024-06-30 07:56:34', '2024-06-30 08:04:08'),
(43, 'Admin Rentcang', 'Admin Rentcang', '081626646377', '21717177277171', 'Admin', 'adminrentcang@gmail.com', '$2y$12$I1Dq0uQ/jhMJCGhfsJBcteX1n.8SAnOTkF7FYNmN5JBmL2biAnq3S', '2024-06-30 08:06:19', '2024-06-30 08:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `Id_Promo` int(10) UNSIGNED NOT NULL,
  `Nama_Promo` varchar(40) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL,
  `Diskon` int(16) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`Id_Promo`, `Nama_Promo`, `Deskripsi`, `Diskon`, `Gambar`, `created_at`, `updated_at`) VALUES
(1, 'Murah Merdeka', 'promo keren', 10, 'image/gambarPromo/O1sB9MLVmSaXV9VNqfFMm1clYSv4HnLCaO9NnXvL.png', '2024-06-08 00:07:08', '2024-06-30 03:31:32'),
(2, 'weeken fully', 'Ini Promo diskon 50 persen', 10, 'image/gambarPromo/dVEK7AEQs6N5gZL6aD0pEKMKYDuEv84NHWLrwwHP.png', '2024-06-09 19:05:13', '2024-06-30 03:31:43'),
(3, 'gg banget bang', 'Sangat bagus sekali', 10, 'image/gambarPromo/UgdTDrabt48GwtG0p6yWJvJTi6cl3SM1P4BhlJDy.png', '2024-06-14 05:42:55', '2024-06-30 03:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `Id_Rental` int(10) UNSIGNED NOT NULL,
  `Id_Pengguna` int(10) UNSIGNED NOT NULL,
  `Id_Kendaraan` int(10) UNSIGNED NOT NULL,
  `Id_Promo` int(10) UNSIGNED DEFAULT NULL,
  `order_id` varchar(255) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `SIM` varchar(255) NOT NULL,
  `Tanggal_Sewa` date NOT NULL,
  `Tanggal_Selesai` date NOT NULL,
  `Total_Harga` int(50) NOT NULL,
  `Pengajuan` enum('Disetujui','Ditolak','Menunggu Konfirmasi Admin','Pending','Paid') DEFAULT 'Pending',
  `snap_token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`Id_Rental`, `Id_Pengguna`, `Id_Kendaraan`, `Id_Promo`, `order_id`, `Alamat`, `SIM`, `Tanggal_Sewa`, `Tanggal_Selesai`, `Total_Harga`, `Pengajuan`, `snap_token`, `created_at`, `updated_at`) VALUES
(69, 2, 5, NULL, '66814e233d58a', 'tes', 'image/gambarSIM/afzdzWRIKoA6ZnUl1jESPlMkPWkzzICh7h0Gf8f4.png', '2024-06-30', '2024-07-01', 300000, 'Disetujui', '1b68980b-cf5e-4402-8aef-f28faf87ab83', '2024-06-30 05:22:59', '2024-06-30 05:26:32'),
(70, 2, 8, NULL, '66816229cd0be', 'batu aji', 'image/gambarSIM/7LJdSEwLGVznWhyhl0Zr7lbRvrZmhNM1bxvNXLpR.jpg', '2024-06-30', '2024-07-01', 200000, 'Menunggu Konfirmasi Admin', '395278d6-49da-479f-955c-957090ee5bcb', '2024-06-30 06:48:26', '2024-06-30 06:48:54'),
(73, 42, 10, 2, '668172b05f83e', 'Batam Centre', 'image/gambarSIM/ECvXmSrYGYmXfHx0FnrZlRImclMPlK89cUQaTL8c.png', '2024-06-30', '2024-07-01', 90000, 'Disetujui', 'fdf2bba6-f0ab-4a09-84c0-7d557844c31f', '2024-06-30 07:58:57', '2024-06-30 07:59:35'),
(74, 42, 5, 2, '668175414ea15', 'batam center', 'image/gambarSIM/9KBQESlMpZd4u70Anc7dt8XUFeFYO8PZ604NVAQL.png', '2024-06-30', '2024-07-01', 270000, 'Disetujui', '7efa3cd7-2679-4f02-b4e5-2d14cbf6cfa8', '2024-06-30 08:09:54', '2024-06-30 08:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `Id_Riwayat` int(10) UNSIGNED NOT NULL,
  `Id_Rental` int(10) UNSIGNED NOT NULL,
  `Id_Status` int(10) UNSIGNED NOT NULL,
  `No_Pesanan` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`Id_Riwayat`, `Id_Rental`, `Id_Status`, `No_Pesanan`, `created_at`, `updated_at`) VALUES
(16, 69, 25, 'B536pxRyMw', '2024-06-30 05:34:02', '2024-06-30 05:34:02'),
(19, 73, 28, 'l9Qage3nDN', '2024-06-30 08:00:15', '2024-06-30 08:00:15'),
(20, 74, 29, 'HrmZKVFXAX', '2024-06-30 08:12:18', '2024-06-30 08:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Id_Status` int(10) UNSIGNED NOT NULL,
  `Id_Rental` int(10) UNSIGNED NOT NULL,
  `Status_Pengiriman` enum('Pengajuan rental ditolak','Kendaraan sedang dikirim','Kendaraaan dalam perjalanan','Kendaraan telah sampai') NOT NULL DEFAULT 'Kendaraan sedang dikirim',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Id_Status`, `Id_Rental`, `Status_Pengiriman`, `created_at`, `updated_at`) VALUES
(25, 69, 'Kendaraan telah sampai', '2024-06-30 05:26:32', '2024-06-30 05:34:02'),
(28, 73, 'Kendaraan telah sampai', '2024-06-30 07:59:35', '2024-06-30 08:00:15'),
(29, 74, 'Kendaraan telah sampai', '2024-06-30 08:11:56', '2024-06-30 08:12:18');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`Id_Kendaraan`);

--
-- Indexes for table `klaim_promo`
--
ALTER TABLE `klaim_promo`
  ADD PRIMARY KEY (`Id_Klaim`),
  ADD KEY `klaim_promo_id_pengguna_foreign` (`Id_Pengguna`),
  ADD KEY `klaim_promo_id_promo_foreign` (`Id_Promo`);

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
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`Id_Pengguna`),
  ADD UNIQUE KEY `pengguna_email_unique` (`Email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`Id_Promo`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`Id_Rental`),
  ADD KEY `rental_id_pengguna_foreign` (`Id_Pengguna`),
  ADD KEY `rental_id_kendaraan_foreign` (`Id_Kendaraan`),
  ADD KEY `rental_id_promo_foreign` (`Id_Promo`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`Id_Riwayat`),
  ADD KEY `riwayat_id_rental_foreign` (`Id_Rental`),
  ADD KEY `riwayat_id_status_foreign` (`Id_Status`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Id_Status`),
  ADD KEY `status_id_rental_foreign` (`Id_Rental`);

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
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `Id_Kendaraan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `klaim_promo`
--
ALTER TABLE `klaim_promo`
  MODIFY `Id_Klaim` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `Id_Pengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `Id_Promo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `Id_Rental` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `Id_Riwayat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Id_Status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klaim_promo`
--
ALTER TABLE `klaim_promo`
  ADD CONSTRAINT `klaim_promo_id_pengguna_foreign` FOREIGN KEY (`Id_Pengguna`) REFERENCES `pengguna` (`Id_Pengguna`) ON DELETE CASCADE,
  ADD CONSTRAINT `klaim_promo_id_promo_foreign` FOREIGN KEY (`Id_Promo`) REFERENCES `promo` (`Id_Promo`) ON DELETE CASCADE;

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_id_kendaraan_foreign` FOREIGN KEY (`Id_Kendaraan`) REFERENCES `kendaraan` (`Id_Kendaraan`) ON DELETE CASCADE,
  ADD CONSTRAINT `rental_id_pengguna_foreign` FOREIGN KEY (`Id_Pengguna`) REFERENCES `pengguna` (`Id_Pengguna`) ON DELETE CASCADE,
  ADD CONSTRAINT `rental_id_promo_foreign` FOREIGN KEY (`Id_Promo`) REFERENCES `promo` (`Id_Promo`) ON DELETE SET NULL;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_id_rental_foreign` FOREIGN KEY (`Id_Rental`) REFERENCES `rental` (`Id_Rental`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_id_status_foreign` FOREIGN KEY (`Id_Status`) REFERENCES `status` (`Id_Status`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_id_rental_foreign` FOREIGN KEY (`Id_Rental`) REFERENCES `rental` (`Id_Rental`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2023 at 01:43 PM
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
-- Database: `itbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Web & Softwere', '1-category-bojwxffkmc1yeisbnbif.jpg', '2023-07-02 12:02:05', '2023-07-02 12:02:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `instructor_id` int NOT NULL,
  `course_price` int NOT NULL,
  `course_duration` int NOT NULL,
  `discount` int NOT NULL,
  `total_seats` int NOT NULL,
  `discounted_price` int NOT NULL,
  `course_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `course_title`, `category_id`, `instructor_id`, `course_price`, `course_duration`, `discount`, `total_seats`, `discounted_price`, `course_description`, `course_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'PHP LARAVEL', 1, 1, 677, 16, 15, 399, 575, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '-course-dejugimzueozzfp5ycqg.jpg', NULL, '2023-07-04 07:15:11', '2023-07-04 07:15:11'),
(2, 4, 'Mastering JavaScript', 1, 3, 20000, 4, 15, 200, 17000, 'Tempora dicta illum', '-course-ewlb5zkr6ems0talm2k3.png', NULL, '2023-07-04 07:24:00', '2023-07-04 07:24:00');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_30_095853_create_trainers_table', 3),
(7, '2023_06_30_165700_create_success_students_table', 4),
(10, '2023_07_02_095407_create_ourpartners_table', 5),
(11, '2023_07_02_102625_create_categories_table', 6),
(17, '2023_06_29_120036_create_courses_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ourpartners`
--

CREATE TABLE `ourpartners` (
  `id` bigint UNSIGNED NOT NULL,
  `partner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourpartners`
--

INSERT INTO `ourpartners` (`id`, `partner_name`, `partner_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Medge Patel', '-partner-ep9fekqk9cjpjmzwbe7c.png', '2023-07-03 04:01:45', '2023-07-03 04:01:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `partner_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `success_students`
--

CREATE TABLE `success_students` (
  `id` bigint UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_story` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_students`
--

INSERT INTO `success_students` (`id`, `student_name`, `student_title`, `student_story`, `student_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sabuj Kundu', 'Laravel Developer', 'He is a successfull Student', 'success-student-91zzgmgkzyc0glc9m10c.jpg', '2023-07-03 05:58:59', '2023-07-03 05:59:00', NULL),
(2, 'Kellie Donaldson', 'Consequatur ut exped', 'Fugit incidunt atq', 'success-student-oyykss5cynh4zoypo7wj.jpg', '2023-07-03 06:00:27', '2023-07-03 06:00:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint UNSIGNED NOT NULL,
  `trainer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer_salary` int NOT NULL,
  `trainer_facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer_linkdin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `trainer_name`, `trainer_title`, `trainer_description`, `trainer_salary`, `trainer_facebook_link`, `trainer_linkdin_link`, `trainer_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sanjoy Kundu', 'Laravel Developer', 'He is  the best instructor in Bangladesh', 8000, 'https:://facebook.com', 'https:://linkdin.com', 'trainer-hqq6wuqiqeukpvaf5eap.jpg', '2023-07-02 12:03:44', '2023-07-02 12:03:44', NULL),
(2, 'Ratan Bishwash', 'Wordpress Developer', 'He is the best wordpress developer', 9000, 'https:://facebook.com', 'https:://linkdin.com', 'trainer-8lls4roqo4rcc1g1gtr7.jpg', '2023-07-02 12:56:17', '2023-07-02 12:56:18', NULL),
(3, 'Joy Kundu', 'JavaScript Developer', 'He is good and experiences Developer', 12000, 'https:://facebook.com', 'https://linkdin.com', 'trainer-qykugkgjnvfdhwxviixq.jpg', '2023-07-04 07:23:08', '2023-07-04 07:23:08', NULL);

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
(1, 'Venus Norman', 'gojiwuj@mailinator.com', NULL, '$2y$10$wf5q5hb3KASITIUNsuQZHO/Evb7m9Sy6duK5LQ4AETn9VqR7Rz3qS', NULL, '2023-06-29 04:49:18', '2023-06-29 04:49:18'),
(2, 'duwabicuci@mailinator.com', 'kahyhohega@mailinator.com', NULL, '$2y$10$jphubSnVaWpA9LTI2aKV..V3MDTiStPezG05wCfRuQweDt.hOmjC.', NULL, '2023-06-29 05:22:29', '2023-06-29 05:22:29'),
(3, 'Sanjoy Kundu', 'sanjoy@gmail.com', NULL, '$2y$10$te2vhlAx2zu.9z2YJMnDmOt8SRdZQuHIYu60FGUWMRamn68URftRm', NULL, '2023-06-29 05:30:59', '2023-06-29 05:30:59'),
(4, 'Admin', 'admin@gmail.com', NULL, '$2y$10$5j86ISPXA6onSbSZoeBoheywjcH80vMo.CdbGVzo4cXdiEQ0Sshpi', NULL, '2023-06-29 05:56:49', '2023-06-29 05:56:49'),
(5, 'sudeqasu@mailinator.com', 'qylyzelo@mailinator.com', NULL, '$2y$10$wysMbyxYFt6okA9RUMq1ae4viyZxfe5mQ.i59r5GuNqSkz/CJqeae', NULL, '2023-07-04 06:57:05', '2023-07-04 06:57:05'),
(6, 'femeciqa@mailinator.com', 'hyqiwam@mailinator.com', NULL, '$2y$10$h.qnCWpk0yS2gJoBidl/keCcpcZ17wQbD0GRD/gG8xwMP/ytGK0m2', NULL, '2023-07-04 06:58:42', '2023-07-04 06:58:42'),
(7, 'sujywunimu@mailinator.com', 'humuxalule@mailinator.com', NULL, '$2y$10$WssmHaD2bq7fniqnUgJJDOYk0n6HaK9gkLQI9487lHinZvfSi1UmC', NULL, '2023-07-04 06:59:43', '2023-07-04 06:59:43'),
(8, 'Emad', 'emad@gmail.com', NULL, '$2y$10$KePL8t1VHsXQ3ETYhIogJOAK/QszZ.GIe0Q.ekLOEDhdbkxW3oiEO', NULL, '2023-07-04 07:00:36', '2023-07-04 07:00:36'),
(9, 'kujafomyd@mailinator.com', 'wyvivufodi@mailinator.com', NULL, '$2y$10$AymjOyVoj40ppyZRjvOjt.shxKazQmZHR6zr7CUUOTDuBqZ9CfnEe', NULL, '2023-07-04 07:04:57', '2023-07-04 07:04:57'),
(10, 'kixew@mailinator.com', 'fina@mailinator.com', NULL, '$2y$10$M2UIr/3Jg7xHH/VBcpqf2.vwxAdBPguQftGCzsrqEabkhCIllkbvG', NULL, '2023-07-04 07:05:32', '2023-07-04 07:05:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_title_unique` (`course_title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourpartners`
--
ALTER TABLE `ourpartners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `success_students`
--
ALTER TABLE `success_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ourpartners`
--
ALTER TABLE `ourpartners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `success_students`
--
ALTER TABLE `success_students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

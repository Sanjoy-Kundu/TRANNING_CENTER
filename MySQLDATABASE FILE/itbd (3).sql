-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2023 at 06:28 PM
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
  `category_image` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Web And Software', '1-category-wms1pduytdeuk0ijwycy.png', '2023-07-15 04:33:51', '2023-07-15 04:33:51', NULL),
(3, 'Lila Ratliff', '3-category-ylfe5mc90zvxjqzo5iys.jpg', '2023-07-15 04:41:05', '2023-07-15 04:41:22', '2023-07-15 04:41:22');

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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `course_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `course_title`, `category_id`, `instructor_id`, `course_price`, `course_duration`, `discount`, `total_seats`, `discounted_price`, `status`, `reject`, `course_description`, `course_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'Wordpress Development', 1, 1, 11000, 3, 10, 120, 9900, 'approve', 'yes', 'It is one of  the freelancing course for any type of people.', '-course-wddjoxb5lhglpy8rczjv.jpg', NULL, '2023-07-16 12:40:48', '2023-07-30 05:36:42'),
(2, 9, 'PHP Laravel', 1, 2, 15500, 3, 10, 20, 13950, 'approve', 'no', 'Good Course also beginner friendly', '-course-dworaywkgjrqi3jzilco.webp', NULL, '2023-07-20 04:09:26', '2023-07-30 05:47:15');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_30_095853_create_trainers_table', 2),
(10, '2023_07_02_095407_create_ourpartners_table', 4),
(21, '2014_10_12_000000_create_users_table', 6),
(22, '2023_07_02_102625_create_categories_table', 7),
(23, '2023_06_29_120036_create_courses_table', 8),
(24, '2023_06_30_165700_create_success_students_table', 9),
(27, '2023_07_30_172732_create_notices_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `notice_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `user_id`, `notice_name`, `notice_description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Testing', 'his is to notify all UIU students that, if you have already completed your course registration by January 25, 2023, you will be automatically enrolled in your courses on LMS. However, for those who registered after that date or made changes to their section(s), manual enrollment is required.This is', 'reject', '2023-07-31 03:58:13', '2023-07-31 12:27:23', NULL);

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
(1, 'Walton BD', '-partner-rheywswnudnkkznqkdbr.jpg', '2023-07-30 05:24:19', '2023-07-30 05:24:19', NULL),
(2, 'Uniliver Group', '-partner-qjtvdxnoyidrwqmdjorv.png', '2023-07-30 05:24:31', '2023-07-30 05:24:31', NULL);

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
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_students`
--

INSERT INTO `success_students` (`id`, `student_name`, `student_title`, `student_story`, `student_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gopal kundu', 'Jr. Wordpress Developer', 'WordPress is an open-source content management system (CMS). It\'s a popular tool for individuals without any coding experience who want to build websites and blogs. The software doesn\'t cost anything.', 'success-student-lx6sdanzcaakr17mwxkr.jpg', '2023-07-30 05:12:58', '2023-07-30 05:12:58', NULL),
(2, 'Sanjoy Kundu', 'Php Laravel Developer', 'Laravel developers use the Laravel web framework to design and build web applications, services, sites, and tools. Laravel is a PHP-based, MVC architecture that relies on OOP to create websites, databases, forums, and caches.', 'success-student-mih89ic7gdy8tux5xjdq.jpg', '2023-07-30 05:13:45', '2023-07-30 05:13:45', NULL);

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
(1, 'RR Raton', 'WordPress Developer', 'A highly skilled and motivated WordPress developer and trainer with 3 years of experience in designing, developing, and maintaining WordPress websites. Proficient in creating custom themes, plugins, and implementing various functionalities to enhance the user experience. Dedicated to staying up-to-date with the latest trends and technologies in the WordPress ecosystem.', 25000, 'https:://facebook1.com', 'https:://linkdin.com', 'trainer-gjnpj6l52zqsu4xy7qgm.jpg', '2023-07-16 12:31:15', '2023-07-16 12:31:15', NULL),
(2, 'Mr. Vendor Roy', 'PHP Laravel', 'He is one of the best mentor', 12000, 'https:://facebook.com', 'https:://linkdin.com', 'trainer-qdjtxwprqwmu5bkyynrs.jpg', '2023-07-20 04:07:15', '2023-07-20 04:07:15', NULL);

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
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student' COMMENT 'admin,vendor,customer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2023-07-29 03:38:14', '$2y$10$DvlvPirpVKSJ.DqYWNLTx.oxPdlJTnlFG9R8.5W0XrekIO03/Q5/u', NULL, 'admin', NULL, '2023-07-14 11:25:36', '2023-07-29 03:38:14'),
(2, 'Sanjoy Kundu', 'sanjoykundu187@gmail.com', NULL, '$2y$10$EqGodhhMHx5qEus4KHk65u5JzQYjP.TWFSlMh6DPrt9FDv4KGfj5a', NULL, 'admin', NULL, NULL, NULL),
(5, 'Ratan Bishwash', 'ratan@gmail.com', NULL, '$2y$10$hlpHrVR2.NZ4zUqhyRAelO5XR.jbyax/0Mc2BF2TIEJj1tC/.rgW2', NULL, 'vendor', NULL, NULL, NULL),
(6, 'vendor1`', 'vendor1@gmail.com', NULL, '$2y$10$cNPyKc7xkJzlJrZvuIjLLu1jVcfOtR.958jmXOZkGigJKv7wf3VUC', NULL, 'vendor', NULL, NULL, NULL),
(9, 'Vendor Roy', 'vendor@gmail.com', NULL, '$2y$10$Vjb09UOF0UzHi08F/2V2Z.1DO5s8cyQbsl1zgHA1FcFgIvYD4etJy', NULL, 'vendor', NULL, NULL, NULL),
(10, 'Hero Alom', 'heroalom@gmail.com', '2023-07-28 12:21:42', '$2y$10$2xBD9hS3J9pmynh6LSy4EeLS8Zy2nLHmbKlCmSuKc4K06JjHpVy0u', NULL, 'student', NULL, '2023-07-28 11:57:59', '2023-07-28 12:21:42'),
(11, 'qyne@mailinator.com', 'qarezowaz@mailinator.com', '2023-07-28 12:25:49', '$2y$10$iwcl192HOZ8ryi6BJ4aIku2wFuapgbycufBgSJRVR7XzWMsOCDa2.', NULL, 'student', NULL, '2023-07-28 12:23:52', '2023-07-28 12:25:49'),
(12, 'zyfihugize@mailinator.com', 'goxunofyt@mailinator.com', NULL, '$2y$10$/FWCRIS6yeyW1lU3y1MOVeE2dQCLd7JACSsNAOwiRQFiWR9ZiRRa6', NULL, 'student', NULL, '2023-07-28 12:33:43', '2023-07-28 12:33:43'),
(13, 'hipykydufu@mailinator.com', 'tovor@mailinator.com', NULL, '$2y$10$HK87fZAalY3kgGhxDHnGeun0M9xl7PDnofwk3IF8nq3V1YSfFqfJi', NULL, 'student', NULL, '2023-07-28 12:44:29', '2023-07-28 12:44:29'),
(14, 'pokeqequ@mailinator.com', 'ribos@mailinator.com', '2023-07-30 05:07:13', '$2y$10$VS5FnV9tkax9dAW68GEAaOpYhK3SBdVWz9wUeSNpBNqF6hw2kUF7y', NULL, 'student', NULL, '2023-07-30 05:06:36', '2023-07-30 05:07:13');

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourpartners`
--
ALTER TABLE `ourpartners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

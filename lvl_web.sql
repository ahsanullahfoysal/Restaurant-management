-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 07:22 AM
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
-- Database: `lvl_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `service1` varchar(255) NOT NULL,
  `service2` varchar(255) NOT NULL,
  `service3` varchar(255) NOT NULL,
  `service4` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `details`, `service1`, `service2`, `service3`, `service4`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Trusted By 300 + satisfied clients', 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.', 'Fresh and Fast food Delivery', 'Easy Customization Options', '24/7 Customer Support', 'Delicious Deals for Delicious Meals', 'blog-3.jpg', '2024-03-17 23:45:05', '2024-03-17 23:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `people` decimal(10,2) NOT NULL,
  `time` time NOT NULL,
  `date` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `meals` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `status` enum('Pending','Confirmed') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `email`, `phone`, `people`, `time`, `date`, `place`, `meals`, `event`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Foysal', 'admin@email.com', '0153258746', 2.00, '11:00:00', '2024-03-19', '1', '1', '1', 'Pending', '2024-03-18 22:47:47', '2024-03-18 22:47:47'),
(3, 'anam', 'zahid94dc@gmail.com', '0153258746', 1.00, '12:30:00', '2024-03-19', 'Dahnmondi', 'Vegetarian', 'marriage', 'Pending', '2024-03-18 22:56:55', '2024-03-19 00:04:44'),
(4, 'nazad', 'zahid94dc@gmail.com', '0153258746', 1.00, '10:00:00', '2024-03-19', 'Mirpur', 'Non Vegetarian', 'marriage', 'Pending', '2024-03-18 22:59:36', '2024-03-18 22:59:36'),
(5, 'Foysal', 'ahsanullahfoysal0@gmail.com', '0153258746', 1.00, '11:30:00', '2024-03-19', 'Dahnmondi', 'Non Vegetarian', 'marriage', 'Confirmed', '2024-03-18 23:13:36', '2024-03-18 23:29:10'),
(6, 'test', 'ahsanullahfoysal0@gmail.com', '0153258746', 1.00, '10:00:00', '2024-03-19', 'Dahnmondi', 'Vegetarian', 'Birthday', 'Confirmed', '2024-03-18 23:20:38', '2024-03-19 00:09:00'),
(7, 'Foysal', 'ahsanullahfoysal0@gmail.com', '0153258746', 2.00, '12:30:00', '2024-03-19', 'Dahnmondi', 'Vegetarian', 'marriage', 'Confirmed', '2024-03-19 00:08:26', '2024-03-19 00:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Wedding', 'about.jpg', '2024-03-04 21:56:00', '2024-03-04 21:56:00'),
(2, 'Corporate', 'event-2.jpg', '2024-03-04 21:57:56', '2024-03-04 21:57:56'),
(3, 'Buffet', 'event-7.jpg', '2024-03-04 21:58:34', '2024-03-04 21:58:34'),
(4, 'Cocktail', 'event-4.jpg', '2024-03-04 21:59:05', '2024-03-04 21:59:05'),
(5, 'Kabab', 'event-8.jpg', '2024-03-04 21:59:44', '2024-03-04 21:59:44'),
(6, 'Wedding', 'event-3.jpg', '2024-03-04 22:00:09', '2024-03-04 22:00:09'),
(7, 'Family Time', 'event-5.jpg', '2024-03-04 22:00:52', '2024-03-04 22:00:52');

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
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `details`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(2, 'Pizza', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'menu-06.jpg', 80.00, '2024-03-03 23:12:53', '2024-03-04 00:26:44'),
(3, 'Beef', 'The Sandwich King of Chicago, Jeff Mauro, shares his picks for his favourite sandwiches, from hot Italian beef at Village Tap to the Chicago Puerto Rican Original at La Bomba.', 'menu-01.jpg', 550.00, '2024-03-04 00:41:12', '2024-03-04 00:41:12'),
(4, 'Lemon', 'The lemon is a species of small evergreen tree in the flowering plant family Rutaceae, native to Asia, primarily Northeast India, Northern Myanmar, and China', 'menu-03.jpg', 30.00, '2024-03-04 00:41:58', '2024-03-04 00:41:58'),
(5, 'nama jani nah', 'Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.', 'menu-04.jpg', 50.00, '2024-03-04 00:42:53', '2024-03-04 00:42:53'),
(6, 'Dargon', 'dsfgfutyf Minhaj vai khabo', 'menu-05.jpg', 70.00, '2024-03-04 00:43:48', '2024-03-04 00:43:48'),
(7, 'Barger', 'The Best Barger In Bangladesh. Best Tantalizing Beef Burger Toppings for Foodies When it comes to beef burgers, there is no stopping me.', 'menu-08.jpg', 75.00, '2024-03-04 00:45:10', '2024-03-04 00:45:10'),
(8, 'Potato', 'The potato is a starchy root vegetable native to the Americas that is consumed as a staple food in many parts of the world.', 'menu-09.jpg', 60.00, '2024-03-04 00:45:51', '2024-03-04 00:45:51'),
(9, 'Salat', 'The carrot is a root vegetable, typically orange in color, though heirloom', 'menu-10.jpg', 25.00, '2024-03-04 00:46:41', '2024-03-04 00:46:41');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_03_04_043726_create_menus_table', 1),
(12, '2024_03_03_072727_create_foods_table', 2),
(13, '2024_03_04_134227_create_sliders_table', 2),
(14, '2024_03_05_033809_create_events_table', 3),
(15, '2024_03_14_033637_create_offers_table', 4),
(17, '2024_03_18_045204_create_abouts_table', 5),
(19, '2024_03_17_080642_create_books_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `btn` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `details`, `btn`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Weeding Service', 'Contrary to popular belief, ipsum is not simply random.', 'Read More', 'event-1.jpg', '2024-03-13 22:38:30', '2024-03-13 23:40:17'),
(2, 'Wedding Services', 'Contrary to popular belief, ipsum is not simply random.', 'Read More', 'blog-2.jpg', '2024-03-13 22:52:50', '2024-03-13 22:52:50'),
(3, 'Bento Catering', 'Contrary to popular belief, ipsum is not simply random.', 'Read More', 'menu-01.jpg', '2024-03-13 22:53:38', '2024-03-13 22:53:38'),
(4, 'Buffet Catering', 'Contrary to popular belief, ipsum is not simply random.', 'Read More', 'event-8.jpg', '2024-03-13 22:54:51', '2024-03-13 22:54:51'),
(5, 'Summar', 'Contrary to popular belief, ipsum is not simply random.', 'Read More', 'menu-03.jpg', '2024-03-13 23:41:04', '2024-03-13 23:41:04'),
(6, 'Ramadan Iftar', 'Contrary to popular belief, ipsum is not simply random.', 'Read More', 'about.jpg', '2024-03-13 23:41:58', '2024-03-13 23:41:58');

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `btn1` varchar(255) NOT NULL,
  `btn2` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `title`, `btn1`, `btn2`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'welocme to Catserve', 'Book CaterServ For Your Dream Event', 'Confrim Now', 'Know More', 'hero.png', '2024-03-04 21:34:45', '2024-03-18 21:59:47');

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
(1, 'foysal', 'foysal@email.com', NULL, '$2y$10$elSXQ/PDuAzDQB.Bw0fzluOi.syEXIK5Xi64G73Myj9bMcSyDFy6W', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
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

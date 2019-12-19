-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 05:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search_nepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `district_id`, `city_id`, `name`) VALUES
(1, 1, 1, 'Chabahil'),
(2, 1, 1, 'Gaushala'),
(3, 1, 1, 'Old Baneshwor');

-- --------------------------------------------------------

--
-- Table structure for table `business_contact_persons`
--

CREATE TABLE `business_contact_persons` (
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `privacy` enum('0','1','','') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business_contact_persons`
--

INSERT INTO `business_contact_persons` (`id`, `business_id`, `full_name`, `designation`, `email`, `mobile`, `privacy`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aabishkar Wagle', 'CEO', 'aabishkar2@gmail.com', '9823726174', NULL, '2019-02-15 01:43:28', '2019-02-15 01:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `district_id`, `name`) VALUES
(1, 1, 'Kathmandu'),
(3, 2, 'Bhaktapur');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `landline_1` varchar(15) DEFAULT NULL,
  `landline_2` varchar(15) DEFAULT NULL,
  `toll_free` varchar(20) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `fax` varchar(10) DEFAULT NULL,
  `email1` varchar(50) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `business_id`, `landline_1`, `landline_2`, `toll_free`, `website`, `fax`, `email1`, `email2`, `created_at`, `updated_at`) VALUES
(1, 1, '4452300', '4452300', '457556', 'www.aabishkar.info.np', '4565', 'aabishkar2@gmail.com', 'aabishkar2@gmail.com', '2019-02-15 01:43:28', '2019-02-15 01:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`) VALUES
(1, 'Kathmandu'),
(2, 'Bhaktapur'),
(3, 'Lalitpur'),
(4, 'Sindhupalchowk');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `image4` varchar(50) DEFAULT NULL,
  `image5` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `business_id`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `updated_at`) VALUES
(1, 1, '1img1.jpg', NULL, NULL, NULL, NULL, '2019-02-27 04:15:45', '2019-02-27 04:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `address_title` varchar(50) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `house_number` varchar(30) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `street_address` varchar(30) DEFAULT NULL,
  `po_box` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `business_id`, `address_title`, `district`, `city`, `area`, `house_number`, `landmark`, `street_address`, `po_box`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kinaramarga', '1', '1', '3', '44600', 'Near by Saipal School', '445', '4460', '2019-02-15 01:41:26', '2019-03-14 02:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `tagline` text,
  `category` int(11) DEFAULT NULL,
  `description` longtext,
  `year_founded` int(4) DEFAULT NULL,
  `company_type` int(11) DEFAULT NULL,
  `company_size` varchar(40) DEFAULT NULL,
  `operating_status` enum('0','1','2','') DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `cover` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `business_id`, `full_name`, `tagline`, `category`, `description`, `year_founded`, `company_type`, `company_size`, `operating_status`, `logo`, `cover`, `created_at`, `updated_at`) VALUES
(1, '1', 'Aabis & Co.', 'ghnvhgnv', 3, 'adsdd sdsadasd', 2012, 2, '2-10', NULL, '1.jpg', '1.jpg', '2019-02-13 02:41:14', '2019-02-17 03:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `business_id`, `facebook`, `instagram`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 1, 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', 'www.linkedin.com', '2019-02-15 02:40:52', '2019-02-15 02:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aabis & Co.', 'aabishkar2@gmail.com', NULL, '$2y$10$XFq8w.imSF1kOOupTmwXSeridE0L4mK5zuOtIGSKkYJfgw84TwFUG', 'ZPGbisK4258AMdOLoJfeGDhgtmNCoFJQ2frNDK38OwF2AVlk0IkbbQxg2uSM', '2019-02-12 02:36:34', '2019-02-15 03:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

CREATE TABLE `working_hours` (
  `id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `sunday_open` varchar(15) DEFAULT NULL,
  `sunday_close` varchar(15) DEFAULT NULL,
  `monday_open` varchar(15) DEFAULT NULL,
  `monday_close` varchar(15) DEFAULT NULL,
  `tuesday_open` varchar(15) DEFAULT NULL,
  `tuesday_close` varchar(15) DEFAULT NULL,
  `wednesday_open` varchar(15) DEFAULT NULL,
  `wednesday_close` varchar(15) DEFAULT NULL,
  `thursday_open` varchar(15) DEFAULT NULL,
  `thursday_close` varchar(15) DEFAULT NULL,
  `friday_open` varchar(15) DEFAULT NULL,
  `friday_close` varchar(15) DEFAULT NULL,
  `saturday_open` varchar(15) DEFAULT NULL,
  `saturday_close` varchar(15) DEFAULT NULL,
  `sun_radio` enum('1','2','','') DEFAULT NULL,
  `mon_radio` enum('1','2','','') DEFAULT NULL,
  `tue_radio` enum('1','2','','') DEFAULT NULL,
  `wed_radio` enum('1','2','','') DEFAULT NULL,
  `thu_radio` enum('1','2','','') DEFAULT NULL,
  `fri_radio` enum('1','2','','') DEFAULT NULL,
  `sat_radio` enum('1','2','','') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `working_hours`
--

INSERT INTO `working_hours` (`id`, `business_id`, `sunday_open`, `sunday_close`, `monday_open`, `monday_close`, `tuesday_open`, `tuesday_close`, `wednesday_open`, `wednesday_close`, `thursday_open`, `thursday_close`, `friday_open`, `friday_close`, `saturday_open`, `saturday_close`, `sun_radio`, `mon_radio`, `tue_radio`, `wed_radio`, `thu_radio`, `fri_radio`, `sat_radio`, `created_at`, `updated_at`) VALUES
(2, 1, '12:30am', '12:00am', '12:30am', '2:30am', '1:00am', '1:30am', '12:00am', '7:30am', '2:30am', '1:30am', '2:00am', '1:30am', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2019-02-15 05:44:27', '2019-03-01 03:56:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_contact_persons`
--
ALTER TABLE `business_contact_persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_contact_persons`
--
ALTER TABLE `business_contact_persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `working_hours`
--
ALTER TABLE `working_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

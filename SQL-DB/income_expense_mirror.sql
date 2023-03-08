-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 07:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `income_expense_mirror`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fixed_expense_half_yearlies`
--

CREATE TABLE `fixed_expense_half_yearlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `starting_month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_expense_half_yearlies`
--

INSERT INTO `fixed_expense_half_yearlies` (`id`, `user_id`, `title`, `description`, `amount`, `starting_month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 's', NULL, 5.00, 1, '2023-03-04', '2023-03-04 16:53:29', '2023-03-04 16:53:29'),
(2, 2, 's', NULL, 6.00, 1, '2023-03-04', '2023-03-04 16:53:40', '2023-03-04 16:53:40'),
(3, 2, 'ee', NULL, 56.00, 12, '2023-03-04', '2023-03-04 16:55:09', '2023-03-04 16:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_expense_monthlies`
--

CREATE TABLE `fixed_expense_monthlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_expense_monthlies`
--

INSERT INTO `fixed_expense_monthlies` (`id`, `user_id`, `title`, `description`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'd', NULL, 6.00, '2023-03-04', '2023-03-04 16:39:14', '2023-03-04 16:39:14'),
(2, 2, 's', NULL, 5.00, '2023-03-04', '2023-03-04 16:39:23', '2023-03-04 16:39:23'),
(3, 2, 'l', NULL, 4.00, '2023-03-04', '2023-03-04 16:54:46', '2023-03-04 16:54:46'),
(4, 2, 'Food', NULL, 7.00, '2023-03-05', '2023-03-05 21:45:28', '2023-03-05 21:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_expense_quarterlies`
--

CREATE TABLE `fixed_expense_quarterlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `starting_month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_expense_quarterlies`
--

INSERT INTO `fixed_expense_quarterlies` (`id`, `user_id`, `title`, `description`, `amount`, `starting_month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 's', NULL, 5.00, 2, '2023-03-04', '2023-03-04 16:44:55', '2023-03-04 16:44:55'),
(2, 2, 'fd', NULL, 55.00, 2, '2023-03-04', '2023-03-04 16:54:58', '2023-03-04 16:54:58'),
(3, 2, 'Quarterly Expense', NULL, 123.00, 1, '2023-03-05', '2023-03-05 00:45:55', '2023-03-05 00:45:55'),
(4, 2, 'Quarterly Fixed Exp', NULL, 100001037.00, 2, '2023-03-05', '2023-03-05 23:01:10', '2023-03-05 23:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_expense_yearlies`
--

CREATE TABLE `fixed_expense_yearlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `starting_month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_expense_yearlies`
--

INSERT INTO `fixed_expense_yearlies` (`id`, `user_id`, `title`, `description`, `amount`, `starting_month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'Jan', NULL, 111.00, 1, '2023-03-04', '2023-03-04 14:30:44', '2023-03-04 14:30:44'),
(2, 2, 'Jan', NULL, 1010.00, 1, '2023-03-04', '2023-03-04 14:30:58', '2023-03-04 14:30:58'),
(3, 2, 'Jan Exp', NULL, 53233.00, 1, '2023-03-04', '2023-03-04 14:55:28', '2023-03-04 14:55:28'),
(4, 2, 'Jan', NULL, 41513.00, 1, '2023-03-04', '2023-03-04 16:21:27', '2023-03-04 16:21:27'),
(5, 2, 'Feb', NULL, 41515.00, 2, '2023-03-04', '2023-03-04 16:23:07', '2023-03-04 16:23:07'),
(6, 2, 's', NULL, 7.00, 4, '2023-03-04', '2023-03-04 16:53:57', '2023-03-04 16:53:57'),
(7, 2, 'ee', NULL, 77.00, 1, '2023-03-04', '2023-03-04 16:55:27', '2023-03-04 16:55:27'),
(8, 2, 'e', NULL, 8.00, 1, '2023-03-04', '2023-03-04 16:56:00', '2023-03-04 16:56:00'),
(9, 2, 'Renewals', NULL, 50340.00, 7, '2023-03-05', '2023-03-05 01:29:22', '2023-03-05 01:29:22'),
(10, 2, 'Interest', NULL, 22.00, 3, '2023-03-05', '2023-03-05 21:42:38', '2023-03-05 21:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_income_half_yearlies`
--

CREATE TABLE `fixed_income_half_yearlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `starting_month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_income_half_yearlies`
--

INSERT INTO `fixed_income_half_yearlies` (`id`, `user_id`, `title`, `description`, `amount`, `starting_month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'test', NULL, 1000.00, 2, '2023-03-03', '2023-03-03 14:50:57', '2023-03-03 14:50:57'),
(2, 2, 'Abcd', NULL, 10000.00, 7, '2023-03-03', '2023-03-03 14:56:38', '2023-03-03 14:56:38'),
(3, 2, 'Jan', NULL, 11.00, 1, '2023-03-03', '2023-03-03 19:13:16', '2023-03-03 19:13:16'),
(4, 2, 'Jan', NULL, 1010.00, 1, '2023-03-03', '2023-03-03 22:52:34', '2023-03-03 22:52:34'),
(5, 2, 's', NULL, 5.00, 1, '2023-03-04', '2023-03-04 16:51:58', '2023-03-04 16:51:58'),
(6, 2, 'Half Yearly', NULL, 123.00, 1, '2023-03-04', '2023-03-04 20:06:02', '2023-03-04 20:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_income_monthlies`
--

CREATE TABLE `fixed_income_monthlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_income_monthlies`
--

INSERT INTO `fixed_income_monthlies` (`id`, `user_id`, `title`, `description`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Salary', NULL, 9.00, NULL, '2023-03-02 01:18:30', '2023-03-02 01:18:30'),
(2, 1, 'Profit from investment', NULL, 100.00, NULL, '2023-03-02 01:21:28', '2023-03-02 01:21:28'),
(3, 2, 'Stock dividend', NULL, 5000.00, '2023-03-03', '2023-03-03 10:35:44', '2023-03-03 10:35:44'),
(4, 2, 'Stock dividend ISA', NULL, 10000.00, '2023-03-03', '2023-03-03 11:01:36', '2023-03-03 11:01:36'),
(5, 2, 'Monthly Salary', NULL, 25000.00, '2023-03-03', '2023-03-03 15:01:21', '2023-03-03 15:01:21'),
(6, 2, 'Monthly Jan', NULL, 123.00, '2023-03-03', '2023-03-03 19:31:04', '2023-03-03 19:31:04'),
(7, 2, 'Jan', NULL, 101.00, '2023-03-04', '2023-03-04 14:17:57', '2023-03-04 14:17:57'),
(8, 2, 's', NULL, 5.00, '2023-03-04', '2023-03-04 16:34:33', '2023-03-04 16:34:33'),
(9, 2, 'Monthly', NULL, 123.00, '2023-03-04', '2023-03-04 20:05:35', '2023-03-04 20:05:35'),
(10, 2, 'Large Income Amount', NULL, 99999999.00, '2023-03-05', '2023-03-05 19:57:47', '2023-03-05 19:57:47'),
(11, 2, 'Salary', NULL, 100.00, '2023-03-05', '2023-03-05 21:40:58', '2023-03-05 21:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_income_quarterlies`
--

CREATE TABLE `fixed_income_quarterlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `starting_month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_income_quarterlies`
--

INSERT INTO `fixed_income_quarterlies` (`id`, `user_id`, `title`, `description`, `amount`, `starting_month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 's', NULL, 66.00, 2, '2023-03-03', '2023-03-03 11:31:20', '2023-03-03 11:31:20'),
(2, 2, 'IMF', NULL, 150000.00, 4, '2023-03-03', '2023-03-03 11:34:06', '2023-03-03 11:34:06'),
(3, 2, 'Quarterly Profit', NULL, 1000.00, 3, '2023-03-03', '2023-03-03 15:01:55', '2023-03-03 15:01:55'),
(4, 2, 'Jan', NULL, 111.00, 1, '2023-03-03', '2023-03-03 18:56:17', '2023-03-03 18:56:17'),
(5, 2, 'Feb', NULL, 222.00, 2, '2023-03-03', '2023-03-03 18:56:29', '2023-03-03 18:56:29'),
(6, 2, 'Mar', NULL, 333.00, 3, '2023-03-03', '2023-03-03 18:56:43', '2023-03-03 18:56:43'),
(7, 2, 'April', NULL, 444.00, 4, '2023-03-03', '2023-03-03 18:56:57', '2023-03-03 18:56:57'),
(8, 2, 'May', NULL, 555.00, 5, '2023-03-03', '2023-03-03 18:57:07', '2023-03-03 18:57:07'),
(9, 2, 'Janu', NULL, 111.00, 1, '2023-03-03', '2023-03-03 19:13:03', '2023-03-03 19:13:03'),
(10, 2, 'vss', NULL, 10.00, 1, '2023-03-04', '2023-03-04 16:43:50', '2023-03-04 16:43:50'),
(11, 2, 'Quarterly', NULL, 123.00, 1, '2023-03-04', '2023-03-04 20:05:47', '2023-03-04 20:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_income_yearlies`
--

CREATE TABLE `fixed_income_yearlies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `starting_month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_income_yearlies`
--

INSERT INTO `fixed_income_yearlies` (`id`, `user_id`, `title`, `description`, `amount`, `starting_month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'ss', NULL, 200.00, 8, '2023-03-03', '2023-03-03 15:00:15', '2023-03-03 15:00:15'),
(2, 2, 'Profit', NULL, 12000.00, 1, '2023-03-03', '2023-03-03 15:00:47', '2023-03-03 15:00:47'),
(3, 2, 'Jan', NULL, 111.00, 1, '2023-03-03', '2023-03-03 19:13:25', '2023-03-03 19:13:25'),
(4, 2, 'jAN', NULL, 41599.00, 1, '2023-03-04', '2023-03-04 16:22:31', '2023-03-04 16:22:31'),
(5, 2, 'Yearly', NULL, 123.00, 1, '2023-03-04', '2023-03-04 20:06:13', '2023-03-04 20:06:13'),
(6, 2, 'Azad Yearly Income', NULL, 888.00, 2, '2023-03-04', '2023-03-04 20:52:38', '2023-03-04 20:52:38');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_27_204728_create_months_table', 1),
(6, '2023_02_27_214309_create_fixed_income_monthlies_table', 1),
(7, '2023_02_27_214352_create_fixed_income_quarterlies_table', 1),
(8, '2023_02_27_214422_create_fixed_income_half_yearlies_table', 1),
(9, '2023_02_27_214501_create_fixed_income_yearlies_table', 1),
(10, '2023_02_27_214658_create_fixed_expense_monthlies_table', 1),
(11, '2023_02_27_214741_create_fixed_expense_quarterlies_table', 1),
(12, '2023_02_27_214821_create_fixed_expense_half_yearlies_table', 1),
(13, '2023_02_27_214842_create_fixed_expense_yearlies_table', 1),
(14, '2023_02_28_012011_create_onetime_incomes_table', 1),
(15, '2023_02_28_012200_create_onetime_expenses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'January', '2023-03-01 22:37:06', '2023-03-01 22:37:06'),
(2, 'February', '2023-03-03 11:15:45', '2023-03-03 11:15:45'),
(3, 'March', '2023-03-03 11:16:14', '2023-03-03 11:16:14'),
(4, 'April', '2023-03-03 11:16:31', '2023-03-03 11:16:31'),
(5, 'May', '2023-03-03 11:16:45', '2023-03-03 11:16:45'),
(6, 'June', '2023-03-03 11:16:58', '2023-03-03 11:16:58'),
(7, 'July', '2023-03-03 11:17:10', '2023-03-03 11:17:10'),
(8, 'August', '2023-03-03 11:17:22', '2023-03-03 11:17:22'),
(9, 'September', '2023-03-03 11:17:42', '2023-03-03 11:17:42'),
(10, 'October', '2023-03-03 11:17:53', '2023-03-03 11:17:53'),
(11, 'November', '2023-03-03 11:18:07', '2023-03-03 11:18:07'),
(12, 'December', '2023-03-03 11:18:20', '2023-03-03 11:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `onetime_expenses`
--

CREATE TABLE `onetime_expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onetime_expenses`
--

INSERT INTO `onetime_expenses` (`id`, `user_id`, `title`, `description`, `amount`, `month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'ssssss', NULL, 5555.00, 3, '2023-03-03', '2023-03-03 15:26:15', '2023-03-03 15:26:15'),
(2, 2, 'Haaa', NULL, 100.00, 6, '2023-03-03', '2023-03-03 15:38:00', '2023-03-03 15:38:00'),
(3, 2, 'ee', NULL, 4.00, 1, '2023-03-04', '2023-03-04 16:55:44', '2023-03-04 16:55:44'),
(4, 2, 'ddd', NULL, 50229.00, 12, '2023-03-04', '2023-03-04 16:56:34', '2023-03-04 16:56:34'),
(5, 2, 'Enter', NULL, 10.00, 1, '2023-03-05', '2023-03-05 21:46:34', '2023-03-05 21:46:34'),
(6, 2, 'One time for Adjustment in March', NULL, 100042289.00, 3, '2023-03-07', '2023-03-07 00:06:04', '2023-03-07 00:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `onetime_incomes`
--

CREATE TABLE `onetime_incomes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(12,2) NOT NULL,
  `month_id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onetime_incomes`
--

INSERT INTO `onetime_incomes` (`id`, `user_id`, `title`, `description`, `amount`, `month_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'a', NULL, 10000.00, 4, '2023-03-03', '2023-03-03 12:03:31', '2023-03-03 12:03:31'),
(2, 2, 'Masum', NULL, 10000.00, 12, '2023-03-03', '2023-03-03 12:07:04', '2023-03-03 12:07:04'),
(3, 2, 'Azad', NULL, 1000.00, 4, '2023-03-03', '2023-03-03 12:08:12', '2023-03-03 12:08:12'),
(4, 2, 'Interest', NULL, 500.00, 3, '2023-03-03', '2023-03-03 14:20:31', '2023-03-03 14:20:31'),
(5, 2, 'aaaaaaaaaaaaa', NULL, 555.00, 1, '2023-03-03', '2023-03-03 15:21:26', '2023-03-03 15:21:26'),
(6, 2, 'Jan', NULL, 111.00, 1, '2023-03-03', '2023-03-03 19:13:39', '2023-03-03 19:13:39'),
(7, 2, 'One Time Input', NULL, 111.00, 1, '2023-03-04', '2023-03-04 13:58:09', '2023-03-04 13:58:09'),
(8, 2, 'One-time', NULL, 123.00, 1, '2023-03-04', '2023-03-04 20:06:26', '2023-03-04 20:06:26'),
(9, 2, 'For Balance in March', NULL, 100053448.00, 3, '2023-03-07', '2023-03-07 00:07:45', '2023-03-07 00:07:45');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md', 'Masum', 'm@m.m', NULL, '$2y$10$lNeZmYutGjoSZJFApKpY4.B8F1smdL.f4nss0fHJra8LrCXI6gGV2', NULL, '2023-03-01 20:43:44', '2023-03-01 20:43:44'),
(2, 'Yousuf Al', 'Azad', 'a@a.a', NULL, '$2y$10$FPJc6Ah/YIZOC4z/ILT6Oe4qDwumBp2hOQIH6gyDZ7nwa0AAxcOZS', NULL, '2023-03-03 10:34:32', '2023-03-03 10:34:32');

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
-- Indexes for table `fixed_expense_half_yearlies`
--
ALTER TABLE `fixed_expense_half_yearlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_expense_half_yearlies_user_id_index` (`user_id`),
  ADD KEY `fixed_expense_half_yearlies_starting_month_id_index` (`starting_month_id`);

--
-- Indexes for table `fixed_expense_monthlies`
--
ALTER TABLE `fixed_expense_monthlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_expense_monthlies_user_id_index` (`user_id`);

--
-- Indexes for table `fixed_expense_quarterlies`
--
ALTER TABLE `fixed_expense_quarterlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_expense_quarterlies_user_id_index` (`user_id`),
  ADD KEY `fixed_expense_quarterlies_starting_month_id_index` (`starting_month_id`);

--
-- Indexes for table `fixed_expense_yearlies`
--
ALTER TABLE `fixed_expense_yearlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_expense_yearlies_user_id_index` (`user_id`),
  ADD KEY `fixed_expense_yearlies_starting_month_id_index` (`starting_month_id`);

--
-- Indexes for table `fixed_income_half_yearlies`
--
ALTER TABLE `fixed_income_half_yearlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_income_half_yearlies_user_id_index` (`user_id`),
  ADD KEY `fixed_income_half_yearlies_starting_month_id_index` (`starting_month_id`);

--
-- Indexes for table `fixed_income_monthlies`
--
ALTER TABLE `fixed_income_monthlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_income_monthlies_user_id_index` (`user_id`);

--
-- Indexes for table `fixed_income_quarterlies`
--
ALTER TABLE `fixed_income_quarterlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_income_quarterlies_user_id_index` (`user_id`),
  ADD KEY `fixed_income_quarterlies_starting_month_id_index` (`starting_month_id`);

--
-- Indexes for table `fixed_income_yearlies`
--
ALTER TABLE `fixed_income_yearlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_income_yearlies_user_id_index` (`user_id`),
  ADD KEY `fixed_income_yearlies_starting_month_id_index` (`starting_month_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onetime_expenses`
--
ALTER TABLE `onetime_expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `onetime_expenses_user_id_index` (`user_id`),
  ADD KEY `onetime_expenses_month_id_index` (`month_id`);

--
-- Indexes for table `onetime_incomes`
--
ALTER TABLE `onetime_incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `onetime_incomes_user_id_index` (`user_id`),
  ADD KEY `onetime_incomes_month_id_index` (`month_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `fixed_expense_half_yearlies`
--
ALTER TABLE `fixed_expense_half_yearlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fixed_expense_monthlies`
--
ALTER TABLE `fixed_expense_monthlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fixed_expense_quarterlies`
--
ALTER TABLE `fixed_expense_quarterlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fixed_expense_yearlies`
--
ALTER TABLE `fixed_expense_yearlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fixed_income_half_yearlies`
--
ALTER TABLE `fixed_income_half_yearlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fixed_income_monthlies`
--
ALTER TABLE `fixed_income_monthlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fixed_income_quarterlies`
--
ALTER TABLE `fixed_income_quarterlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fixed_income_yearlies`
--
ALTER TABLE `fixed_income_yearlies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `onetime_expenses`
--
ALTER TABLE `onetime_expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `onetime_incomes`
--
ALTER TABLE `onetime_incomes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fixed_expense_half_yearlies`
--
ALTER TABLE `fixed_expense_half_yearlies`
  ADD CONSTRAINT `fixed_expense_half_yearlies_starting_month_id_foreign` FOREIGN KEY (`starting_month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `fixed_expense_half_yearlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_expense_monthlies`
--
ALTER TABLE `fixed_expense_monthlies`
  ADD CONSTRAINT `fixed_expense_monthlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_expense_quarterlies`
--
ALTER TABLE `fixed_expense_quarterlies`
  ADD CONSTRAINT `fixed_expense_quarterlies_starting_month_id_foreign` FOREIGN KEY (`starting_month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `fixed_expense_quarterlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_expense_yearlies`
--
ALTER TABLE `fixed_expense_yearlies`
  ADD CONSTRAINT `fixed_expense_yearlies_starting_month_id_foreign` FOREIGN KEY (`starting_month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `fixed_expense_yearlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_income_half_yearlies`
--
ALTER TABLE `fixed_income_half_yearlies`
  ADD CONSTRAINT `fixed_income_half_yearlies_starting_month_id_foreign` FOREIGN KEY (`starting_month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `fixed_income_half_yearlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_income_monthlies`
--
ALTER TABLE `fixed_income_monthlies`
  ADD CONSTRAINT `fixed_income_monthlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_income_quarterlies`
--
ALTER TABLE `fixed_income_quarterlies`
  ADD CONSTRAINT `fixed_income_quarterlies_starting_month_id_foreign` FOREIGN KEY (`starting_month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `fixed_income_quarterlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_income_yearlies`
--
ALTER TABLE `fixed_income_yearlies`
  ADD CONSTRAINT `fixed_income_yearlies_starting_month_id_foreign` FOREIGN KEY (`starting_month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `fixed_income_yearlies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `onetime_expenses`
--
ALTER TABLE `onetime_expenses`
  ADD CONSTRAINT `onetime_expenses_month_id_foreign` FOREIGN KEY (`month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `onetime_expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `onetime_incomes`
--
ALTER TABLE `onetime_incomes`
  ADD CONSTRAINT `onetime_incomes_month_id_foreign` FOREIGN KEY (`month_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `onetime_incomes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

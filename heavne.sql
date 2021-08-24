-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for homestead
DROP DATABASE IF EXISTS `homestead`;
CREATE DATABASE IF NOT EXISTS `homestead` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `homestead`;

-- Dumping structure for table homestead.also_speaks
DROP TABLE IF EXISTS `also_speaks`;
CREATE TABLE IF NOT EXISTS `also_speaks` (
  `id` int(11) NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table homestead.also_speaks: ~17 rows (approximately)
DELETE FROM `also_speaks`;
/*!40000 ALTER TABLE `also_speaks` DISABLE KEYS */;
INSERT INTO `also_speaks` (`id`, `language`) VALUES
	(1, 'English'),
	(2, 'Spanish'),
	(3, 'Portuguese'),
	(4, 'Hindi'),
	(5, 'Korean'),
	(6, 'Russian'),
	(7, 'Czech'),
	(8, 'Dutch'),
	(9, 'Estonian'),
	(10, 'French'),
	(11, 'German'),
	(12, 'Greek'),
	(13, 'Irish'),
	(14, 'Italian'),
	(15, 'Japanese'),
	(16, 'Latin'),
	(17, 'Turkish'),
	(18, 'Chinese');
/*!40000 ALTER TABLE `also_speaks` ENABLE KEYS */;

-- Dumping structure for table homestead.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table homestead.images: ~0 rows (approximately)
DELETE FROM `images`;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table homestead.languages
DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table homestead.languages: ~15 rows (approximately)
DELETE FROM `languages`;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`id`, `language`) VALUES
	(1, 'English'),
	(2, 'Portuguese'),
	(3, 'French'),
	(4, 'Spanish'),
	(5, 'Chinese'),
	(6, 'German'),
	(7, 'Japanese'),
	(8, 'Italian'),
	(9, 'Korean'),
	(10, 'Arabic'),
	(11, 'Russian'),
	(12, 'Polish'),
	(13, 'Turkish'),
	(14, 'Hindi'),
	(15, NULL);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Dumping structure for table homestead.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table homestead.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table homestead.nationality
DROP TABLE IF EXISTS `nationality`;
CREATE TABLE IF NOT EXISTS `nationality` (
  `id` int(11) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table homestead.nationality: ~14 rows (approximately)
DELETE FROM `nationality`;
/*!40000 ALTER TABLE `nationality` DISABLE KEYS */;
INSERT INTO `nationality` (`id`, `country`) VALUES
	(1, 'America'),
	(2, 'United kingdom'),
	(3, 'France'),
	(4, 'Australia'),
	(5, 'Austria'),
	(6, 'Belgiuml'),
	(7, 'Brazil'),
	(8, 'Russia'),
	(9, 'India'),
	(10, 'Canada'),
	(11, 'China'),
	(12, 'Japan'),
	(13, 'Korea'),
	(14, 'Egypt');
/*!40000 ALTER TABLE `nationality` ENABLE KEYS */;

-- Dumping structure for table homestead.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table homestead.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table homestead.stocks
DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stk_type` varchar(200) NOT NULL,
  `stk_name` varchar(200) NOT NULL,
  `stk_size` varchar(200) NOT NULL,
  `stk_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table homestead.stocks: ~16 rows (approximately)
DELETE FROM `stocks`;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
INSERT INTO `stocks` (`id`, `stk_type`, `stk_name`, `stk_size`, `stk_qty`, `created_at`, `updated_at`) VALUES
	(5, 'Jacket', 'sdfserr234', 'M', 120, '2021-06-02 01:41:27', '2021-06-03 20:07:39'),
	(8, 'Sweater', 'KSI', 'M', 2, '2021-06-02 14:20:36', '2021-06-02 14:20:36'),
	(9, 'T-Shirt', 'qwd', 'M', 12, '2021-06-02 14:28:01', '2021-06-02 14:28:01'),
	(12, 'T-Shirt', 'sdf', 'M', 234, '2021-06-03 01:19:15', '2021-06-03 01:19:15'),
	(13, 'T-Shirt', 'sdfs', 'M', 234, '2021-06-03 01:19:46', '2021-06-03 01:19:46'),
	(14, 'Sweater', 'sdfs', 'S', 12, '2021-06-03 01:22:54', '2021-06-03 01:22:54'),
	(15, 'Sweater', 'sdf', 'S', 234, '2021-06-03 01:25:41', '2021-06-03 01:25:41'),
	(16, 'T-Shirt', 'sdf', 'L', 5454, '2021-06-03 01:40:21', '2021-06-03 01:40:21'),
	(17, 'T-Shirt', 'sdf', 'S', 1111, '2021-06-03 01:41:21', '2021-06-03 01:41:21'),
	(18, 'Formal Shirt', 'sdfsads', 'L', 9877, '2021-06-03 03:58:46', '2021-06-03 03:58:46'),
	(19, 'Jacket', 'epoch', 'S', 212, '2021-06-03 20:09:52', '2021-06-03 20:09:52'),
	(20, 'Sweater', 'sdfsd', 'M', 1, '2021-06-04 09:57:28', '2021-06-04 09:57:28'),
	(21, 'T-Shirt', 'KSI', 'M', 2, '2021-06-04 10:08:21', '2021-06-04 10:08:21'),
	(22, 'T-Shirt', 'w', 'M', 34, '2021-06-04 15:53:40', '2021-06-04 15:53:40'),
	(23, 'T-Shirt', 'epoch', 'M', 324, '2021-06-04 16:41:16', '2021-06-04 16:41:16'),
	(24, 'Sweater', 'epoch', 'L', 213, '2021-06-05 15:11:17', '2021-06-05 15:11:17');
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;

-- Dumping structure for table homestead.teaching_subjects
DROP TABLE IF EXISTS `teaching_subjects`;
CREATE TABLE IF NOT EXISTS `teaching_subjects` (
  `id` int(11) NOT NULL,
  `major` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table homestead.teaching_subjects: ~9 rows (approximately)
DELETE FROM `teaching_subjects`;
/*!40000 ALTER TABLE `teaching_subjects` DISABLE KEYS */;
INSERT INTO `teaching_subjects` (`id`, `major`) VALUES
	(0, 'English language'),
	(1, 'French language'),
	(2, 'Spanish language'),
	(4, 'German language'),
	(5, 'Japanese language'),
	(6, 'Italian language'),
	(7, 'korean language'),
	(8, 'Arabic language'),
	(9, 'chinese language'),
	(10, 'Database'),
	(11, 'C++');
/*!40000 ALTER TABLE `teaching_subjects` ENABLE KEYS */;

-- Dumping structure for table homestead.tutors
DROP TABLE IF EXISTS `tutors`;
CREATE TABLE IF NOT EXISTS `tutors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `native_language` varchar(255) DEFAULT NULL,
  `also` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `tuition` int(255) DEFAULT NULL,
  `character` varchar(255) DEFAULT NULL,
  `option` int(255) NOT NULL,
  `des` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- Dumping data for table homestead.tutors: ~25 rows (approximately)
DELETE FROM `tutors`;
/*!40000 ALTER TABLE `tutors` DISABLE KEYS */;
INSERT INTO `tutors` (`id`, `name`, `country`, `native_language`, `also`, `major`, `tuition`, `character`, `option`, `des`) VALUES
	(1, 'heaven ', 'France', 'French', 'English,Russian', 'French language', 23, 'warm-hearted', 1, 'I can teach you French, if you want.'),
	(2, 'Harry', 'United Kingdom', 'English', 'Russian,Chinese', 'English language', 34, 'Optimistic', 1, 'I am here to teach you, knowledge as well as efforts to study ....Don\'t hesitate. Please Join me.'),
	(89, 'heaven2', 'Austria', 'English', 'Hindi', 'German language', 34, 'Optimistic', 1, 'Certified Native English Teacher with 5 years Experience. Hi, I´m Liz. I absolutely love teaching and I would love to help you improve your English. I´m a native English speaker from South Africa and I´ve been teaching English on Skype for 5 years'),
	(90, 'heaven2', 'Austria', 'English', 'Hindi', 'German language', 34, 'Optimistic', 1, 'Certified Native English Teacher with 5 years Experience. Hi, I´m Liz. I absolutely love teaching and I would love to help you improve your English. I´m a native English speaker from South Africa and I´ve been teaching English on Skype for 5 years'),
	(91, 'heaven2', 'Austria', 'English', 'Hindi', 'German language', 34, 'Optimistic', 1, 'Certified Native English Teacher with 5 years Experience. Hi, I´m Liz. I absolutely love teaching and I would love to help you improve your English. I´m a native English speaker from South Africa and I´ve been teaching English on Skype for 5 years'),
	(92, 'heaven2', 'Austria', 'English', 'Hindi,Chinese', 'German language', 34, 'Optimistic', 1, 'Certified Native English Teacher with 5 years Experience. Hi, I´m Liz. I absolutely love teaching and I would love to help you improve your English. I´m a native English speaker from South Africa and I´ve been teaching English on Skype for 5 years'),
	(93, 'heaven2', 'Austria', 'English', 'Hindi', 'German language', 34, 'Optimistic', 1, 'Certified Native English Teacher with 5 years Experience. Hi, I´m Liz. I absolutely love teaching and I would love to help you improve your English. I´m a native English speaker from South Africa and I´ve been teaching English on Skype for 5 years'),
	(94, 'heaven2', 'Austria', 'English', 'Hindi', 'German language', 34, 'Optimistic', 1, 'Certified Native English Teacher with 5 years Experience. Hi, I´m Liz. I absolutely love teaching and I would love to help you improve your English. I´m a native English speaker from South Africa and I´ve been teaching English on Skype for 5 years'),
	(95, 'darkhorse', 'France', 'French', 'Hindi', 'Spanish language', 234, 'energetic', 1, 'qqqqqqq'),
	(96, 'dsfs', 'United kingdom', 'English', 'Portuguese', 'French language', 345, 'Optimistic', 1, 'aaaaaaaaaaaaaa'),
	(97, 'dsfs', 'United kingdom', 'English', 'Portuguese', 'French language', 345, 'Optimistic', 1, 'aaaaaaaaaaaaaa'),
	(98, 'dsfs', 'United kingdom', 'English', 'Portuguese', 'French language', 345, 'Optimistic', 1, 'aaaaaaaaaaaaaa'),
	(99, 'dsfs', 'United kingdom', 'English', 'Portuguese', 'French language', 345, 'Optimistic', 1, 'aaaaaaaaaaaaaa'),
	(100, 'dsfs', 'United kingdom', 'English', 'Portuguese', 'French language', 345, 'Optimistic', 1, 'aaaaaaaaaaaaaa'),
	(101, 'darkhorse', 'America', 'English', 'English', 'British language', 12, 'Optimistic', 1, 'sdasdasd'),
	(102, 'darkhorse', 'America', 'English', 'English', 'British language', 12, 'Optimistic', 1, 'sdasdasd'),
	(103, 'success', 'France', 'French', 'Russian', 'French language', 40, 'energetic', 1, 'I can do every thing..Don\'t worry.'),
	(104, 'darkhorse2', 'Austria', 'English', 'Russian', 'Spanish language', 231, 'Optimistic', 1, 'sdsfdsf'),
	(105, 'heaven2', 'United kingdom', 'English', 'Hindi', 'French language', 34, 'Optimistic', 1, 'erwerwerwerwer'),
	(106, 'heaven2', 'America', 'English', 'Hindi', 'French language', 23, 'Optimistic', 1, 'sdsad'),
	(107, 'darkhorse', 'United kingdom', 'English', 'Portuguese', 'Spanish language', 34, 'retetert', 1, 'ertertert'),
	(108, 'heaven2', 'France', 'French', 'Portuguese', 'French language', 43, 'energetic', 1, 'erreter'),
	(109, 'darkhorse', 'United kingdom', 'English', 'Spanish', 'French language', 23, 'energetic', 1, 'werewrewr'),
	(110, 'darkhorse2', 'France', 'French', 'Hindi', 'French language', 24, 'warm-hearted', 1, 'I want studdyJESdjsjk'),
	(111, 'darkhorse', 'United kingdom', 'English', 'Portuguese', 'French language', 12, 'warm-hearted', 1, 'erwerwe');
/*!40000 ALTER TABLE `tutors` ENABLE KEYS */;

-- Dumping structure for table homestead.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table homestead.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(9, 'aaaa', 'otaviolbc@live.com', '$2y$10$o5pn/AZuxmfhvfblKOSZNuCMzEnBfs.XTJQbtFNWcDbtII2m8mpdq', 'student', NULL, '2021-06-01 16:27:33', '2021-06-01 16:27:33'),
	(10, 'q', 'qqq@gmail.com', '$2y$10$17iBfFM6hg7wrfkq.X/c5eqqE2v8/69YZyvGI6oqo8yZLFwtGiExG', 'saab', 'ZYg9clYbk3LgixrSll5hU785854V1yO1Ku56uAEuKrQ6uBdWLucyULUOAWem', '2021-06-01 19:14:58', '2021-06-01 19:14:58'),
	(11, 'heavenstar', 'ivankushnir103@gmail.com', '$2y$10$XuidOuQYwPjzeOfpAWaNVu6El7sEbL/yUyLtJUk6uaduOprw8T0Pm', 'student', '4Ck1ZiAvUKNcdWZ6LNIm5d06VsEjE2NQwQYExdklbmeWS3aVYopDeqeXjsPE', '2021-06-01 19:36:32', '2021-06-01 19:36:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

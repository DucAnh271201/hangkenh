-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: hk_hangkenh
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `dept` int(11) NOT NULL DEFAULT '0' COMMENT 'cấp',
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'BORDERED RUGS','bordered-rugs','post',0,0,NULL,NULL,'2024-03-24 07:53:53','2024-03-24 07:53:53'),(2,'INSPIRED BY NATURE','inspired-by-nature','post',0,0,NULL,NULL,'2024-03-24 07:54:07','2024-03-24 07:54:07'),(3,'MODERNIST RUGS','modernist-rugs','post',0,0,NULL,NULL,'2024-03-24 07:54:13','2024-03-24 07:54:13'),(4,'Thảm công trình','tham-cong-trinh','product',0,0,NULL,NULL,'2024-03-24 13:12:20','2024-03-24 13:12:20'),(5,'Thảm Decor','tham-decor','product',0,0,NULL,NULL,'2024-03-24 13:12:23','2024-03-24 13:12:23'),(6,'Accessories','accessories','product',0,0,NULL,NULL,'2024-03-24 13:12:28','2024-03-24 13:12:28'),(7,'Thảm khách sạn','tham-khach-san','product',4,1,NULL,NULL,'2024-03-24 13:12:35','2024-03-24 13:12:35'),(8,'Nhà hàng','nha-hang','product',4,1,NULL,NULL,'2024-03-24 13:12:38','2024-03-24 13:12:38'),(9,'Văn phòng','van-phong','product',4,1,NULL,NULL,'2024-03-24 13:12:41','2024-03-24 13:12:41'),(10,'Khánh tiết','khanh-tiet','product',4,1,NULL,NULL,'2024-03-24 13:12:44','2024-03-24 13:12:44'),(11,'Du thuyền','du-thuyen','product',4,1,NULL,NULL,'2024-03-24 13:12:47','2024-03-24 13:12:47'),(12,'Game/Club','gameclub','product',4,1,NULL,NULL,'2024-03-24 13:12:50','2024-03-24 13:12:50'),(13,'Buồng / Cabin','buong-cabin','product',7,2,NULL,NULL,'2024-03-24 13:13:01','2024-03-24 13:13:01'),(14,'Hành lang','hanh-lang','product',7,2,NULL,NULL,'2024-03-24 13:13:05','2024-03-24 13:13:05'),(15,'Hội trường','hoi-truong','product',7,2,NULL,NULL,'2024-03-24 13:13:07','2024-03-24 13:13:07'),(16,'Phòng Gym','phong-gym','product',7,2,NULL,NULL,'2024-03-24 13:13:10','2024-03-24 13:13:10'),(17,'Phòng khách','phong-khach','product',5,1,NULL,NULL,'2024-03-24 13:13:24','2024-03-24 13:13:24'),(18,'Phòng ngủ','phong-ngu','product',5,1,NULL,NULL,'2024-03-24 13:13:27','2024-03-24 13:13:27'),(19,'Phòng ăn','phong-an','product',5,1,NULL,NULL,'2024-03-24 13:13:29','2024-03-24 13:13:29'),(20,'Phòng thờ','phong-tho','product',5,1,NULL,NULL,'2024-03-24 13:13:32','2024-03-24 13:13:32'),(21,'Cầu thang / Hành lang','cau-thang-hanh-lang','product',5,1,NULL,NULL,'2024-03-24 13:13:35','2024-03-24 13:13:35'),(22,'Bộ quà tặng','bo-qua-tang','product',6,1,NULL,NULL,'2024-03-24 13:13:48','2024-03-24 13:13:48'),(23,'Tranh Decor','tranh-decor','product',6,1,NULL,NULL,'2024-03-24 13:13:51','2024-03-24 13:13:51');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `ext` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `files_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES (1,'Đổi quà-500','doi-qua-500','image/png',1432797,'png','files/Đổi quà-500.png','2024-03-21 15:03:23','2024-03-21 15:03:23'),(2,'Đổi quà-50k','doi-qua-50k','image/png',1436301,'png','files/Đổi quà-50k.png','2024-03-21 15:03:23','2024-03-21 15:03:23'),(3,'Đổi quà-100','doi-qua-100','image/png',1431361,'png','files/Đổi quà-100.png','2024-03-21 15:03:23','2024-03-21 15:03:23'),(4,'cleanshot-2024-02-26-at-182011','cleanshot-2024-02-26-at-182011','image/png',15252,'png','files/cleanshot-2024-02-26-at-182011.png','2024-03-21 15:17:41','2024-03-21 15:17:41'),(5,'screenshot-from-2024-03-19-21-28-36','screenshot-from-2024-03-19-21-28-36','image/png',46101,'png','files/screenshot-from-2024-03-19-21-28-36.png','2024-03-21 17:57:23','2024-03-21 17:57:23'),(6,'tg-image-1350285413','tg-image-1350285413','image/jpeg',47557,'jpeg','files/tg-image-1350285413.jpeg','2024-03-21 18:18:06','2024-03-21 18:18:06'),(7,'screenshot-2024-03-10-at-210803','screenshot-2024-03-10-at-210803','image/png',175623,'png','files/screenshot-2024-03-10-at-210803.png','2024-03-21 18:18:23','2024-03-21 18:18:23'),(8,'z5276373784481-37a5373bfe33e7e0e0a94a2e408bb174','z5276373784481-37a5373bfe33e7e0e0a94a2e408bb174','image/jpeg',119341,'jpg','files/z5276373784481-37a5373bfe33e7e0e0a94a2e408bb174.jpg','2024-03-23 19:01:06','2024-03-23 19:01:06'),(9,'b3053232163929567197ac6e6f5','b3053232163929567197ac6e6f5','image/png',18798,'png','files/b3053232163929567197ac6e6f5.png','2024-03-23 19:01:55','2024-03-23 19:01:55'),(10,'photo-2024-03-06-22-00-25','photo-2024-03-06-22-00-25','image/jpeg',56622,'jpg','files/photo-2024-03-06-22-00-25.jpg','2024-03-23 19:31:56','2024-03-23 19:31:56'),(11,'screenshot-2024-03-02-112908','screenshot-2024-03-02-112908','image/png',39486,'png','files/screenshot-2024-03-02-112908.png','2024-03-23 19:33:34','2024-03-23 19:33:34'),(12,'free-images','free-images','image/jpeg',107335,'jpg','files/free-images.jpg','2024-03-23 19:35:33','2024-03-23 19:35:33'),(13,'image-52','image-52','image/png',465050,'png','files/image-52.png','2024-03-24 08:01:22','2024-03-24 08:01:22'),(14,'image-54','image-54','image/png',435559,'png','files/image-54.png','2024-03-24 08:27:13','2024-03-24 08:27:13'),(15,'banner-1','banner-1','image/webp',406146,'webp','files/banner-1.webp','2024-03-24 09:53:17','2024-03-24 09:53:17'),(16,'rectangle','rectangle','image/png',169310,'png','files/rectangle.png','2024-03-24 13:16:15','2024-03-24 13:16:15'),(17,'rectangle-2','rectangle-2','image/png',268532,'png','files/rectangle-2.png','2024-03-24 13:16:15','2024-03-24 13:16:15'),(18,'rectangle-1','rectangle-1','image/png',207212,'png','files/rectangle-1.png','2024-03-24 13:16:15','2024-03-24 13:16:15'),(19,'rectangle-3','rectangle-3','image/png',159841,'png','files/rectangle-3.png','2024-03-24 13:39:47','2024-03-24 13:39:47');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` bigint(20) unsigned NOT NULL,
  `depth` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_foreign` (`menu`),
  CONSTRAINT `menu_items_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,'Trang chủ','https://evizi.com/',0,0,NULL,1,0,'2024-03-22 15:01:58','2024-03-22 15:10:19'),(2,'Catalogue','#',0,1,NULL,1,0,'2024-03-22 15:10:24','2024-03-22 15:10:24'),(3,'Ấn phẩm-tạp chí','#',0,4,NULL,1,0,'2024-03-22 15:10:33','2024-03-22 15:11:59'),(4,'LAB & Dự án','#',0,5,NULL,1,0,'2024-03-22 15:10:40','2024-03-22 15:11:59'),(5,'Nhà thiết kế','#',0,6,NULL,1,0,'2024-03-22 15:10:45','2024-03-22 15:11:59'),(6,'Render thảm','#',0,7,NULL,1,0,'2024-03-22 15:10:52','2024-03-22 15:11:59'),(7,'Phong cách thảm','#',2,2,NULL,1,1,'2024-03-22 15:11:21','2024-03-22 15:11:53'),(8,'All rugs','#',7,3,NULL,1,2,'2024-03-22 15:11:53','2024-03-22 15:12:01');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Main menu','2024-03-22 14:53:39','2024-03-22 14:53:39');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1),(10,'2024_03_02_175336_create_user_admins_table',1),(11,'2024_03_02_181102_create_posts_table',1),(12,'2024_03_08_003030_create_post_metas_table',1),(13,'2024_03_09_143323_create_files_table',1),(14,'2024_03_09_210911_create_categories_table',1),(15,'2024_03_10_185837_create_post_categories_table',1),(16,'2024_03_10_220002_create_tags_table',1),(17,'2024_03_10_232633_create_post_tags_table',1),(18,'2024_03_15_002822_create_post_products_table',1),(19,'2024_03_15_005108_create_p_attributes_table',1),(20,'2024_03_15_005113_create_product_attributes_table',1),(21,'2024_03_17_165557_create_options_table',1),(22,'2024_03_22_193638_create_menus_table',2),(23,'2024_03_22_193714_create_menu_items_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `options_option_name_unique` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'page_on_front','1',NULL,'2024-03-21 19:13:02'),(2,'page_title','1112','2024-03-21 17:57:23','2024-03-21 18:00:32'),(3,'web_address','222','2024-03-21 17:57:23','2024-03-21 18:00:32'),(4,'email','333','2024-03-21 17:57:23','2024-03-21 18:00:32'),(5,'logo','http://hangkenh.test/storage/files/Đổi quà-100.png','2024-03-21 17:57:23','2024-03-21 18:19:35'),(6,'favorite_icon','http://hangkenh.test/storage/files/Đổi quà-500.png','2024-03-21 18:24:22','2024-03-21 18:24:22'),(7,'phone_number','0979008320','2024-03-21 18:27:25','2024-03-21 18:27:25'),(8,'email_host','smpt.gmail','2024-03-21 18:34:51','2024-03-21 18:34:51'),(9,'email_username','boykioyb','2024-03-21 18:34:51','2024-03-21 18:34:51'),(10,'email_password','hoathan','2024-03-21 18:34:51','2024-03-21 18:34:51');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p_attributes`
--

DROP TABLE IF EXISTS `p_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `p_attributes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `dept` int(11) NOT NULL DEFAULT '0' COMMENT 'cấp',
  `description` text COLLATE utf8mb4_unicode_ci,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `p_attributes_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p_attributes`
--

LOCK TABLES `p_attributes` WRITE;
/*!40000 ALTER TABLE `p_attributes` DISABLE KEYS */;
INSERT INTO `p_attributes` VALUES (4,'Kích thước / Khổ thảm','kich-thuoc-kho-tham',0,0,NULL,NULL,NULL,'2024-03-24 12:33:06','2024-03-24 12:33:06'),(5,'Phong cách thảm','phong-cach-tham',0,0,NULL,NULL,NULL,'2024-03-24 12:33:17','2024-03-24 12:33:17'),(6,'Chất liệu','chat-lieu',0,0,NULL,NULL,NULL,'2024-03-24 12:33:25','2024-03-24 12:33:25'),(7,'Màu Sắc','mau-sac',0,0,NULL,NULL,NULL,'2024-03-24 12:33:30','2024-03-24 12:33:30'),(8,'Công nghệ dệt','cong-nghe-det',0,0,NULL,NULL,NULL,'2024-03-24 12:33:35','2024-03-24 12:33:35'),(9,'Handmade','handmade',8,1,NULL,NULL,NULL,'2024-03-24 12:33:42','2024-03-24 12:33:42'),(10,'Handtufted','handtufted',8,1,NULL,NULL,NULL,'2024-03-24 12:33:45','2024-03-24 12:33:45'),(11,'Machine','machine',8,1,NULL,NULL,NULL,'2024-03-24 12:33:48','2024-03-24 12:33:48'),(12,'Printed carpet','printed-carpet',8,1,NULL,NULL,NULL,'2024-03-24 12:33:51','2024-03-24 12:33:51'),(13,'Xanh lá cây','xanh-la-cay',7,1,NULL,NULL,NULL,'2024-03-24 12:36:40','2024-03-24 12:36:40'),(14,'Xanh nước biển','xanh-nuoc-bien',7,1,NULL,NULL,NULL,'2024-03-24 12:36:46','2024-03-24 12:36:46'),(15,'Xanh rêu','xanh-reu',7,1,NULL,NULL,NULL,'2024-03-24 12:36:50','2024-03-24 12:36:50'),(16,'Đỏ','do',7,1,NULL,NULL,NULL,'2024-03-24 12:36:54','2024-03-24 12:36:54'),(17,'Vàng','vang',7,1,NULL,NULL,NULL,'2024-03-24 12:36:58','2024-03-24 12:36:58'),(18,'Cổ vịt','co-vit',7,1,NULL,NULL,NULL,'2024-03-24 12:37:02','2024-03-24 12:37:02'),(19,'Tím','tim',7,1,NULL,NULL,NULL,'2024-03-24 12:37:10','2024-03-24 12:37:10'),(20,'Hồng','hong',7,1,NULL,NULL,NULL,'2024-03-24 12:37:13','2024-03-24 12:37:13'),(21,'Xám','xam',7,1,NULL,NULL,NULL,'2024-03-24 12:37:17','2024-03-24 12:37:17'),(22,'Đen','den',7,1,NULL,NULL,NULL,'2024-03-24 12:37:22','2024-03-24 12:37:22'),(23,'Len lông cừu','len-long-cuu',6,1,NULL,NULL,NULL,'2024-03-24 12:38:14','2024-03-24 12:38:14'),(24,'Acrylic','acrylic',6,1,NULL,NULL,NULL,'2024-03-24 12:38:18','2024-03-24 12:38:18'),(25,'Nylon','nylon',6,1,NULL,NULL,NULL,'2024-03-24 12:38:22','2024-03-24 12:38:22'),(26,'Bamboo Silk','bamboo-silk',6,1,NULL,NULL,NULL,'2024-03-24 12:38:29','2024-03-24 12:38:29'),(27,'Tencel','tencel',6,1,NULL,NULL,NULL,'2024-03-24 12:38:33','2024-03-24 12:38:33'),(28,'80% len lông cừu, 20% len nylon','80-len-long-cuu-20-len-nylon',6,1,NULL,NULL,NULL,'2024-03-24 12:38:37','2024-03-24 12:38:37'),(29,'Sợi PP/Olefin','soi-ppolefin',6,1,NULL,NULL,NULL,'2024-03-24 12:38:42','2024-03-24 12:38:42'),(30,'Tấm PVC','tam-pvc',4,1,NULL,NULL,NULL,'2024-03-24 12:38:53','2024-03-24 12:38:53'),(31,'Cuộn','cuon',4,1,NULL,NULL,NULL,'2024-03-24 12:38:57','2024-03-24 12:38:57'),(32,'Hình Vuông','hinh-vuong',4,1,NULL,NULL,NULL,'2024-03-24 12:39:00','2024-03-24 12:39:00'),(33,'Hình Chữ Nhật','hinh-chu-nhat',4,1,NULL,NULL,NULL,'2024-03-24 12:39:04','2024-03-24 12:39:04'),(34,'Hình Tròn','hinh-tron',4,1,NULL,NULL,NULL,'2024-03-24 12:39:08','2024-03-24 12:39:08'),(35,'Đa Giác','da-giac',4,1,NULL,NULL,NULL,'2024-03-24 12:39:12','2024-03-24 12:39:12'),(36,'Đặc Biệt','dac-biet',4,1,NULL,NULL,NULL,'2024-03-24 12:39:16','2024-03-24 12:39:16'),(37,'Đặt hàng kích thước riêng','dat-hang-kich-thuoc-rieng',4,1,NULL,NULL,NULL,'2024-03-24 12:39:19','2024-03-24 12:39:19'),(38,'50cm x 50cm','50cm-x-50cm',30,2,NULL,NULL,NULL,'2024-03-24 12:39:33','2024-03-24 12:39:33'),(39,'33cm x 33cm','33cm-x-33cm',30,2,NULL,NULL,NULL,'2024-03-24 12:39:36','2024-03-24 12:39:36'),(40,'25cm x 100cm','25cm-x-100cm',30,2,NULL,NULL,NULL,'2024-03-24 12:39:38','2024-03-24 12:39:38'),(41,'3.66mx25m','366mx25m',31,2,NULL,NULL,NULL,'2024-03-24 12:39:53','2024-03-24 12:39:53'),(42,'2,5m2','25m2',32,2,NULL,NULL,NULL,'2024-03-24 12:41:12','2024-03-24 12:41:12'),(43,'2m2','2m2',32,2,NULL,NULL,NULL,'2024-03-24 12:41:16','2024-03-24 12:41:16'),(45,'1,8m x 2,8m','18m-x-28m',33,2,NULL,NULL,NULL,'2024-03-24 12:41:31','2024-03-24 12:41:31'),(46,'2,6m x 3,6m','26m-x-36m',33,2,NULL,NULL,NULL,'2024-03-24 12:41:37','2024-03-24 12:41:37'),(47,'3,2m x 4,6m','32m-x-46m',33,2,NULL,NULL,NULL,'2024-03-24 12:41:49','2024-03-24 12:41:49'),(48,'r2,5m','r25m',34,2,NULL,NULL,NULL,'2024-03-24 12:50:56','2024-03-24 12:50:56'),(49,'r3m','r3m',34,2,NULL,NULL,NULL,'2024-03-24 12:51:02','2024-03-24 12:51:02'),(50,'Hiện đại','hien-dai',5,1,NULL,NULL,NULL,'2024-03-24 12:51:42','2024-03-24 12:51:42'),(51,'Cổ điển','co-dien',5,1,NULL,NULL,NULL,'2024-03-24 12:51:45','2024-03-24 12:51:45'),(52,'Artdeco','artdeco',5,1,NULL,NULL,NULL,'2024-03-24 12:51:48','2024-03-24 12:51:48'),(53,'Indochine','indochine',5,1,NULL,NULL,NULL,'2024-03-24 12:51:53','2024-03-24 12:51:53'),(54,'Tropical','tropical',5,1,NULL,NULL,NULL,'2024-03-24 12:51:57','2024-03-24 12:51:57'),(55,'Geo','geo',5,1,NULL,NULL,NULL,'2024-03-24 12:52:02','2024-03-24 12:52:02'),(56,'Truyền thống Việt','truyen-thong-viet',5,1,NULL,NULL,NULL,'2024-03-24 12:52:06','2024-03-24 12:52:06'),(57,'Ombre','ombre',5,1,NULL,NULL,NULL,'2024-03-24 12:52:10','2024-03-24 12:52:10');
/*!40000 ALTER TABLE `p_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_categories` (
  `post_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  KEY `post_categories_post_id_foreign` (`post_id`),
  KEY `post_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `post_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `post_categories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
INSERT INTO `post_categories` VALUES (14,1),(15,2),(16,3),(17,1),(14,3),(14,2),(18,4),(19,5),(20,6),(21,6),(22,5);
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_metas`
--

DROP TABLE IF EXISTS `post_metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_metas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `meta_key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `post_metas_post_id_foreign` (`post_id`),
  KEY `post_metas_meta_key_index` (`meta_key`),
  CONSTRAINT `post_metas_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_metas`
--

LOCK TABLES `post_metas` WRITE;
/*!40000 ALTER TABLE `post_metas` DISABLE KEYS */;
INSERT INTO `post_metas` VALUES (1,13,'image_library','a:3:{i:0;a:1:{s:5:\"image\";s:69:\"http://hangkenh.test/storage/files/cleanshot-2024-02-26-at-182011.png\";}i:1;a:1:{s:5:\"image\";s:54:\"http://hangkenh.test/storage/files/Đổi quà-500.png\";}i:2;a:1:{s:5:\"image\";s:54:\"http://hangkenh.test/storage/files/Đổi quà-50k.png\";}}'),(2,1,'description','<p>[banner] [banner-item title=\"C&acirc;y tre\" image=\"http://hangkenh.test/storage/files/banner-1.webp\"]Viền cấu t&agrave;o từ hoa văn c&aacute;ch điệu từ đốt tre v&agrave; nền trơn m&agrave;u ghi x&aacute;m. Đường viền thảm m&agrave;u xanh r&ecirc;u v&agrave; cỏ &uacute;a nhạt được gh&eacute;p từ những hoa văn c&aacute;ch điệu từ đốt tre Việt Nam, mang tỉnh biểu trưng truyền thống Việt Nam. [/banner-item] [banner-item title=\"C&acirc;y tre\" image=\"http://hangkenh.test/storage/files/banner-1.webp\"]Viền cấu t&agrave;o từ hoa văn c&aacute;ch điệu từ đốt tre v&agrave; nền trơn m&agrave;u ghi x&aacute;m. Đường viền thảm m&agrave;u xanh r&ecirc;u v&agrave; cỏ &uacute;a nhạt được gh&eacute;p từ những hoa văn c&aacute;ch điệu từ đốt tre Việt Nam, mang tỉnh biểu trưng truyền thống Việt Nam. [/banner-item] [banner-item title=\"C&acirc;y tre 1\" image=\"http://hangkenh.test/storage/files/banner-1.webp\" class=\"default active\"]Viền cấu t&agrave;o từ hoa văn c&aacute;ch điệu từ đốt tre v&agrave; nền trơn m&agrave;u ghi x&aacute;m. Đường viền thảm m&agrave;u xanh r&ecirc;u v&agrave; cỏ &uacute;a nhạt được gh&eacute;p từ những hoa văn c&aacute;ch điệu từ đốt tre Việt Nam, mang tỉnh biểu trưng truyền thống Việt Nam. [/banner-item] [banner-item title=\"C&acirc;y tre\" image=\"http://hangkenh.test/storage/files/banner-1.webp\"]Viền cấu t&agrave;o từ hoa văn c&aacute;ch điệu từ đốt tre v&agrave; nền trơn m&agrave;u ghi x&aacute;m. Đường viền thảm m&agrave;u xanh r&ecirc;u v&agrave; cỏ &uacute;a nhạt được gh&eacute;p từ những hoa văn c&aacute;ch điệu từ đốt tre Việt Nam, mang tỉnh biểu trưng truyền thống Việt Nam. [/banner-item] [banner-item title=\"C&acirc;y tre\" image=\"http://hangkenh.test/storage/files/banner-1.webp\"]Viền cấu t&agrave;o từ hoa văn c&aacute;ch điệu từ đốt tre v&agrave; nền trơn m&agrave;u ghi x&aacute;m. Đường viền thảm m&agrave;u xanh r&ecirc;u v&agrave; cỏ &uacute;a nhạt được gh&eacute;p từ những hoa văn c&aacute;ch điệu từ đốt tre Việt Nam, mang tỉnh biểu trưng truyền thống Việt Nam. [/banner-item] [/banner]</p>\r\n<div class=\"content\">[featured-post ids=\"12,14,15,16\" sort=\"id\" sort-direction=\"ASC\"] [trending title=\"những thiết kế thảm đang trending\" sub-title=\"TRENDY 2024\"] [trending-item title=\"Đ&aacute; cẩm thạch xanh đen\" link=\'#\'] Bring the outside in with The Rug Company&rsquo;s floral rugs. From bold prints to delicate illustrations, discover the versatility of a botanical design. [/trending-item] [trending-item title=\"Đ&aacute; cẩm thạch xanh đen\" link=\'#\'] Bring the outside in with The Rug Company&rsquo;s floral rugs. From bold prints to delicate illustrations, discover the versatility of a botanical design. [/trending-item] [trending-item title=\"Đ&aacute; cẩm thạch xanh đen\" link=\'#\'] Bring the outside in with The Rug Company&rsquo;s floral rugs. From bold prints to delicate illustrations, discover the versatility of a botanical design. [/trending-item] [trending-item title=\"Đ&aacute; cẩm thạch xanh đen\" link=\'#\'] Bring the outside in with The Rug Company&rsquo;s floral rugs. From bold prints to delicate illustrations, discover the versatility of a botanical design. [/trending-item] [trending-item title=\"Đ&aacute; cẩm thạch xanh đen\" link=\'#\'] Bring the outside in with The Rug Company&rsquo;s floral rugs. From bold prints to delicate illustrations, discover the versatility of a botanical design. [/trending-item] [/trending] [section-box class=\"section-product\" title=\"Kh&aacute;m ph&aacute; những tấm thảm đang b&aacute;n chạy nhất\" sub-title=\"Bộ sưu tập m&ugrave;a h&egrave;\"][product-list limit=4][/section-box][section-5][section-library][section-project][section-post]</div>'),(3,14,'short_description','Shop Our Modern Rugs Selection'),(4,14,'description','<p>Shop Our Modern Rugs Selection</p>'),(5,14,'feature_image','files/image-52.png'),(6,15,'short_description','Flora and Fauna Inspired Rugs'),(7,15,'description','<p>Flora and Fauna Inspired Rugs</p>'),(8,15,'feature_image','files/image-52.png'),(9,16,'short_description','Contemporary Bordered Designs'),(10,16,'description','<p>Contemporary Bordered Designs</p>'),(11,16,'feature_image','files/image-54.png'),(12,17,'short_description','adc'),(13,17,'feature_image','files/screenshot-2024-03-02-112908.png'),(14,18,'short_description','Alpaca'),(15,18,'description','<p>Alpaca</p>'),(16,18,'feature_image','files/rectangle.png'),(17,18,'image_library','a:2:{i:0;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-2.png\";}i:1;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-1.png\";}}'),(18,19,'short_description','Waves Blue'),(19,19,'description','<p>Waves Blue</p>'),(20,19,'feature_image','files/rectangle-1.png'),(21,19,'image_library','a:2:{i:0;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-2.png\";}i:1;a:1:{s:5:\"image\";s:48:\"http://hangkenh.test/storage/files/rectangle.png\";}}'),(22,20,'short_description','Caldera'),(23,20,'description','<p>Caldera</p>'),(24,20,'feature_image','files/rectangle-3.png'),(25,20,'image_library','a:2:{i:0;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-2.png\";}i:1;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-1.png\";}}'),(26,21,'short_description','Mesa Powder'),(27,21,'description','<p>Mesa Powder</p>'),(28,21,'feature_image','files/rectangle-2.png'),(29,21,'image_library','a:2:{i:0;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-3.png\";}i:1;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-1.png\";}}'),(30,22,'short_description','hehe'),(31,22,'description','<p>hehe</p>'),(32,22,'feature_image','files/rectangle-2.png'),(33,22,'image_library','a:1:{i:0;a:1:{s:5:\"image\";s:50:\"http://hangkenh.test/storage/files/rectangle-1.png\";}}');
/*!40000 ALTER TABLE `post_metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_products`
--

DROP TABLE IF EXISTS `post_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `sku` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Mã tồn kho, mã duy nhất để theo dõi tồn kho.',
  `status` enum('available','out_of_stock','waiting') COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` bigint(20) DEFAULT NULL,
  `sale_price` bigint(20) DEFAULT NULL,
  `stock_quantity` int(11) NOT NULL DEFAULT '0' COMMENT 'Số lượng sản phẩm hiện có trong kho',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_products_sku_unique` (`sku`),
  KEY `post_products_post_id_index` (`post_id`),
  CONSTRAINT `post_products_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_products`
--

LOCK TABLES `post_products` WRITE;
/*!40000 ALTER TABLE `post_products` DISABLE KEYS */;
INSERT INTO `post_products` VALUES (1,13,NULL,'available',0,0,0,NULL,'2024-03-21 15:03:23','2024-03-21 15:03:23'),(2,18,'MSK01','available',1900,1800,1000,NULL,'2024-03-24 13:16:15','2024-03-24 13:16:15'),(3,19,'Mkd02','available',1990,1800,10000,NULL,'2024-03-24 13:38:09','2024-03-24 13:38:09'),(4,20,'MSK03','available',1990,1800,10000,NULL,'2024-03-24 13:39:47','2024-03-24 13:39:47'),(5,21,NULL,'available',0,0,0,NULL,'2024-03-24 13:40:05','2024-03-24 13:40:05'),(6,22,NULL,'available',0,0,0,NULL,'2024-03-24 13:42:59','2024-03-24 13:42:59');
/*!40000 ALTER TABLE `post_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tags` (
  `post_id` bigint(20) unsigned NOT NULL,
  `tag_id` bigint(20) unsigned NOT NULL,
  KEY `post_tags_post_id_index` (`post_id`),
  KEY `post_tags_tag_id_index` (`tag_id`),
  CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `post_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tags`
--

LOCK TABLES `post_tags` WRITE;
/*!40000 ALTER TABLE `post_tags` DISABLE KEYS */;
INSERT INTO `post_tags` VALUES (14,1),(14,2),(14,3);
/*!40000 ALTER TABLE `post_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'loại: post, product, page',
  `post_date` datetime DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_status_index` (`status`),
  KEY `posts_author_id_index` (`author_id`),
  KEY `posts_type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Trang chủ','trang-chu','publish',1,'page',NULL,1,1,'2024-03-17 15:32:38','2024-03-17 15:32:38',NULL),(2,'post 1','post-1','publish',1,'post',NULL,1,1,'2024-03-19 17:51:42','2024-03-24 08:26:08','2024-03-24 08:26:08'),(3,'post 2','post-2','publish',1,'post',NULL,1,1,'2024-03-19 17:51:47','2024-03-24 08:26:12','2024-03-24 08:26:12'),(4,'post 3','post-3','publish',1,'post',NULL,1,1,'2024-03-19 17:51:52','2024-03-24 08:26:14','2024-03-24 08:26:14'),(5,'post 4','post-4','publish',1,'post',NULL,1,1,'2024-03-19 17:52:00','2024-03-24 08:26:16','2024-03-24 08:26:16'),(6,'Cart','cart','publish',1,'page',NULL,1,1,'2024-03-20 15:55:52','2024-03-20 15:55:52',NULL),(7,'Product Category','product-category','publish',1,'page',NULL,1,1,'2024-03-20 15:56:01','2024-03-20 15:56:01',NULL),(13,'1','1','publish',1,'product',NULL,1,1,'2024-03-21 15:03:23','2024-03-24 10:45:27','2024-03-24 10:45:27'),(14,'Shop Our Modern Rugs Selection hay hay','shop-our-modern-rugs-selection-hay-hay','publish',1,'post',NULL,1,1,'2024-03-24 08:01:22','2024-03-24 09:21:53',NULL),(15,'Flora and Fauna Inspired Rugs','flora-and-fauna-inspired-rugs','publish',1,'post','2024-03-24 15:26:56',1,1,'2024-03-24 08:26:56','2024-03-24 08:26:56',NULL),(16,'Contemporary Bordered Designs','contemporary-bordered-designs','publish',1,'post','2024-03-24 15:27:13',1,1,'2024-03-24 08:27:13','2024-03-24 08:27:13',NULL),(17,'abc','abc','publish',1,'post','2024-03-24 15:27:31',1,1,'2024-03-24 08:27:31','2024-03-24 08:27:31',NULL),(18,'Alpaca','alpaca','publish',1,'product','2024-03-24 20:16:15',1,1,'2024-03-24 13:16:15','2024-03-24 13:16:15',NULL),(19,'Waves Blue','waves-blue','publish',1,'product','2024-03-24 20:38:09',1,1,'2024-03-24 13:38:09','2024-03-24 13:38:09',NULL),(20,'Caldera','caldera','publish',1,'product','2024-03-24 20:39:47',1,1,'2024-03-24 13:39:47','2024-03-24 13:39:47',NULL),(21,'Mesa Powder','mesa-powder','publish',1,'product','2024-03-24 20:40:05',1,1,'2024-03-24 13:40:05','2024-03-24 13:40:05',NULL),(22,'hehe','hehe','publish',1,'product','2024-03-24 20:42:59',1,1,'2024-03-24 13:42:59','2024-03-24 13:42:59',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_attributes`
--

DROP TABLE IF EXISTS `product_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_attributes` (
  `product_id` bigint(20) unsigned NOT NULL,
  `attribute_id` bigint(20) unsigned NOT NULL,
  KEY `product_attributes_product_id_foreign` (`product_id`),
  KEY `product_attributes_attribute_id_foreign` (`attribute_id`),
  CONSTRAINT `product_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `p_attributes` (`id`),
  CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `post_products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_attributes`
--

LOCK TABLES `product_attributes` WRITE;
/*!40000 ALTER TABLE `product_attributes` DISABLE KEYS */;
INSERT INTO `product_attributes` VALUES (2,38);
/*!40000 ALTER TABLE `product_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tags_type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'shop','shop','post',NULL,'2024-03-24 08:01:22','2024-03-24 08:01:22'),(2,'shop our','shop-our','post',NULL,'2024-03-24 08:01:22','2024-03-24 08:01:22'),(3,'modern','modern','post',NULL,'2024-03-24 08:01:22','2024-03-24 08:01:22');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_admins`
--

DROP TABLE IF EXISTS `user_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_admins`
--

LOCK TABLES `user_admins` WRITE;
/*!40000 ALTER TABLE `user_admins` DISABLE KEYS */;
INSERT INTO `user_admins` VALUES (1,'admin','admin','admin@hangkenh.vn','$2y$12$n7NGSl2x.uN/2Idvyv9kreYyApFuk.FsG/LGZOLfH5xoaODlBDat6',1,NULL,'2024-03-17 15:19:31','2024-03-17 15:19:31');
/*!40000 ALTER TABLE `user_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'hk_hangkenh'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-25  1:28:33

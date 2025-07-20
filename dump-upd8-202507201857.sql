-- MySQL dump 10.13  Distrib 8.0.42, for Linux (x86_64)
--
-- Host: localhost    Database: upd8
-- ------------------------------------------------------
-- Server version	8.0.42-0ubuntu0.22.04.2

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `city` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'DF','São Simon do Norte','2025-07-19 23:27:51','2025-07-19 23:27:51'),(2,'MS','Rios d\'Oeste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(3,'MS','Teobaldo do Sul','2025-07-19 23:27:51','2025-07-19 23:27:51'),(4,'AC','Andréia d\'Oeste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(5,'MA','Ariana do Leste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(6,'MS','Porto Edson','2025-07-19 23:27:51','2025-07-19 23:27:51'),(7,'AP','São Sônia do Sul','2025-07-19 23:27:51','2025-07-19 23:27:51'),(8,'SP','Santa Joana','2025-07-19 23:27:51','2025-07-19 23:27:51'),(9,'RO','Simone d\'Oeste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(10,'SE','Santa Lavínia','2025-07-19 23:27:51','2025-07-19 23:27:51'),(11,'PI','Ester do Norte','2025-07-19 23:27:51','2025-07-19 23:27:51'),(12,'MA','São Yasmin','2025-07-19 23:27:51','2025-07-19 23:27:51'),(13,'MS','Estêvão do Norte','2025-07-19 23:27:51','2025-07-19 23:27:51'),(14,'RN','Santa Maicon','2025-07-19 23:27:51','2025-07-19 23:27:51'),(15,'PR','Porto Henrique','2025-07-19 23:27:51','2025-07-19 23:27:51'),(16,'AP','Renata do Sul','2025-07-19 23:27:51','2025-07-19 23:27:51'),(17,'PI','Vila Catarina do Sul','2025-07-19 23:27:51','2025-07-19 23:27:51'),(18,'PE','Santa Daniel do Sul','2025-07-19 23:27:51','2025-07-19 23:27:51'),(19,'AM','Vila Laís','2025-07-19 23:27:51','2025-07-19 23:27:51'),(20,'MA','Santa Samanta do Norte','2025-07-19 23:27:51','2025-07-19 23:27:51'),(21,'BA','Cezar do Leste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(22,'PE','Wesley d\'Oeste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(23,'PB','Vila Mel','2025-07-19 23:27:51','2025-07-19 23:27:51'),(24,'SC','Casanova do Sul','2025-07-19 23:27:51','2025-07-19 23:27:51'),(25,'MG','São Alice do Norte','2025-07-19 23:27:51','2025-07-19 23:27:51'),(26,'RO','Emilly do Norte','2025-07-19 23:27:51','2025-07-19 23:27:51'),(27,'MA','São Antonieta','2025-07-19 23:27:51','2025-07-19 23:27:51'),(28,'AC','São Naiara do Norte','2025-07-19 23:27:51','2025-07-19 23:27:51'),(29,'SC','Barros do Leste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(30,'AM','Vila Naiara do Leste','2025-07-19 23:27:51','2025-07-19 23:27:51'),(31,'CE','Fortaleza','2025-07-20 12:58:39','2025-07-20 12:58:39'),(32,'AL','Água Branca','2025-07-20 13:26:57','2025-07-20 13:26:57'),(33,'AP','Sucuriju','2025-07-20 13:29:24','2025-07-20 13:29:24'),(34,'AM','Alvarães','2025-07-20 13:31:49','2025-07-20 13:31:49'),(35,'BA','Adustina','2025-07-20 13:33:14','2025-07-20 13:33:14'),(36,'BA','Catolés','2025-07-20 19:58:38','2025-07-20 19:58:38'),(37,'BA','Abaíra','2025-07-20 20:15:33','2025-07-20 20:15:33'),(38,'AP','Itaubal','2025-07-20 20:22:34','2025-07-20 20:22:34'),(39,'AC','Acrelândia','2025-07-20 20:23:22','2025-07-20 20:23:22'),(40,'PA','Augusto Corrêa','2025-07-20 20:25:36','2025-07-20 20:25:36'),(41,'AC','Vila do Incra','2025-07-20 20:29:30','2025-07-20 20:29:30'),(42,'AC','Brasiléia','2025-07-20 20:36:00','2025-07-20 20:36:00');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `city_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_name_unique` (`name`),
  UNIQUE KEY `client_cpf_unique` (`cpf`),
  KEY `client_city_id_foreign` (`city_id`),
  CONSTRAINT `client_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Dr. Michael Batista Verdugo','10981475108','F','Largo Karina Zamana, 26. Apto 6122','2006-05-24',2,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(2,'Sr. Augusto de Arruda Balestero Jr.','70863607594','F','R. Alcantara, 476','2020-11-17',4,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(3,'Sr. Théo Artur Alves','57658100803','M','Av. Eloah Verdara, 5439. Fundos','2012-06-05',6,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(4,'Dr. Allan Cruz Neto','67406860250','F','R. Pérola, 420','2011-06-14',8,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(5,'Ian Mauro Bittencourt Neto','37044354572','M','R. Jimenes, 43. Bloco B','1981-01-07',10,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(6,'Josefina Serrano Leal','83409682627','M','Avenida Suzana, 3. Apto 2','1989-06-18',12,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(7,'Artur Guerra Sobrinho','69378016022','F','Rua Teobaldo Urias, 88. 43º Andar','2015-10-09',14,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(8,'Reinaldo Hernani Bittencourt Sobrinho','18526883607','F','Largo Marés, 647','1994-02-07',16,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(9,'Srta. Débora Paula Vale Neto','95676462108','F','Avenida Allan, 40311','1997-01-24',18,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(10,'Dr. Hugo Théo Amaral Neto','69172292024','F','Rua Luis, 6636. F','1998-07-06',20,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(11,'Sra. Gisela Ramires','72150009153','M','Largo Marcelo Caldeira, 756','1997-06-20',22,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(12,'Sr. Cezar Diogo Maldonado','47215988821','F','Largo Késia Santana, 53675. Apto 642','1977-08-23',24,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(13,'Tessália Bia Rezende','09056433482','M','Rua de Aguiar, 5. 6º Andar','2018-05-24',26,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(14,'Joaquin Soares Padilha Jr.','01355745870','F','Largo Manuela Cervantes, 3. Apto 85','1970-07-28',28,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(15,'Bruno Dias Sobrinho','87065872670','M','Avenida Francisco, 4090. Bc. 9 Ap. 81','1998-08-11',30,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(16,'Tester','378.846.758-55','M','R.103, 36','1992-05-24',31,'2025-07-20 12:58:39','2025-07-20 12:58:39'),(17,'Testeram','378.846.758-56','M','R.103, 42','1992-05-24',31,'2025-07-20 13:10:18','2025-07-20 13:10:18'),(18,'Testera','378.846.758-57','M','R.103, 42','1992-05-24',31,'2025-07-20 13:12:41','2025-07-20 13:12:41'),(19,'Testero','378.846.758-58','M','R.103, 42','1992-05-24',31,'2025-07-20 13:24:48','2025-07-20 13:24:48'),(20,'Docker','378.846.758-59','M','R.103, 36','1993-07-24',32,'2025-07-20 13:26:57','2025-07-20 13:26:57'),(21,'Dockerzin','378.846.758-50','M','R.103, 36','1969-08-24',33,'2025-07-20 13:29:24','2025-07-20 13:29:24'),(24,'Docker Neto','378.846.758-53','M','Largo Karina Zamana, 26. Apto 6122','1999-04-25',37,'2025-07-20 20:15:33','2025-07-20 20:15:33');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2025_07_19_102625_create_city_table',1),(6,'2025_07_19_102738_create_client_table',1),(7,'2025_07_19_102942_create_representative_table',1),(8,'2025_07_19_103027_create_representative_client_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
-- Table structure for table `representative`
--

DROP TABLE IF EXISTS `representative`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `representative` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` char(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `representative_name_unique` (`name`),
  UNIQUE KEY `representative_cnpj_unique` (`cnpj`),
  KEY `representative_city_id_foreign` (`city_id`),
  CONSTRAINT `representative_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representative`
--

LOCK TABLES `representative` WRITE;
/*!40000 ALTER TABLE `representative` DISABLE KEYS */;
INSERT INTO `representative` VALUES (1,'Marin Comercial Ltda.','55.988.927/0001-73','43740-101, Av. Nicolas Vasques, 215\nSão Valentin - MG',1,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(2,'Paes-Pereira','59.375.448/0001-32','84138-611, Avenida Angélica, 336. Bloco C\nSalas do Norte - CE',3,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(3,'Mendonça S.A.','54.259.744/0001-54','66523-940, Avenida Balestero, 4090. Bc. 17 Ap. 98\nBarros do Norte - RO',5,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(4,'Reis e da Rosa S.A.','36.611.012/0001-08','83689-698, Avenida Reis, 724. Bc. 11 Ap. 16\nSão Mayara d\'Oeste - ES',7,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(5,'Garcia e Marinho S.A.','78.305.989/0001-39','80338-307, Av. Danilo Carrara, 7. Apto 69\nPorto Renan d\'Oeste - RR',9,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(6,'Mascarenhas e Ramires S.A.','16.495.404/0001-33','69130-765, Rua Cláudia Cortês, 439. Bloco C\nBreno do Norte - MG',11,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(7,'Romero e Santana','39.295.353/0001-00','74790-320, Avenida Sergio, 774. 2º Andar\nSanta Thiago do Leste - TO',13,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(8,'Romero-Beltrão','79.198.957/0001-44','64542-983, Largo Uchoa, 86. Bc. 36 Ap. 33\nVerdara d\'Oeste - PB',15,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(9,'Padilha Comercial Ltda.','77.256.547/0001-87','87470-105, Rua Lúcia, 31030. Apto 6404\nSão Rodolfo - MT',17,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(10,'Gonçalves e Escobar','06.648.449/0001-47','32481-717, Rua Aline Serrano, 20. F\nPerez d\'Oeste - RR',19,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(11,'Neves e Vieira Ltda.','45.728.377/0001-08','57847-531, Largo Gisele, 960\nJoaquim d\'Oeste - PR',21,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(12,'Matos e Madeira Ltda.','34.776.128/0001-63','50442-249, Largo Rafael, 28. Apto 7\nPorto Cláudia d\'Oeste - MS',23,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(13,'Sandoval e Barros','05.627.869/0001-84','83255-163, Rua Delvalle, 346. Bloco C\nPorto Jorge - AM',25,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(14,'Serra Comercial Ltda.','02.594.276/0001-70','11233-994, Largo Benites, 445\nAnita do Norte - PE',27,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(15,'Verdara e Amaral e Filhos','86.846.561/0001-21','00928-142, R. Andres, 6. Bloco B\nPorto Dante do Sul - MG',29,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(16,'Docker','12.345.678/0001-00','Largo Karina Zamana, 26. Apto 6122',36,'2025-07-20 19:58:38','2025-07-20 19:58:38'),(17,'Dockerzin','12.345.678/0002-00','Largo Karina Zamana, 26. Apto 6122',36,'2025-07-20 20:01:22','2025-07-20 20:01:22'),(18,'Docker Neto','12.345.678/0003-00','R.103, 36',31,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(19,'Tester','12.345.678/0004-00','R.103, 36',38,'2025-07-20 20:22:34','2025-07-20 20:22:34'),(20,'Testerzin','12.345.678/0005-00','Largo Karina Zamana, 26. Apto 6122',39,'2025-07-20 20:23:22','2025-07-20 20:23:22'),(21,'Dr. Michael Batista Verdugo','12.345.678/0006-00','R.103, 36',40,'2025-07-20 20:25:36','2025-07-20 20:25:36'),(22,'Testerzino','12.345.678/0008-00','R.103, 32',41,'2025-07-20 20:29:30','2025-07-20 20:29:30'),(23,'Testerzina','12.345.678/0004-01','R.103, 36',42,'2025-07-20 20:36:00','2025-07-20 20:36:00'),(24,'Tester2','12.345.679/0001-00','R.103, 32',33,'2025-07-20 20:44:30','2025-07-20 21:29:24');
/*!40000 ALTER TABLE `representative` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representative_client`
--

DROP TABLE IF EXISTS `representative_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `representative_client` (
  `representative_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `representative_client_representative_id_foreign` (`representative_id`),
  KEY `representative_client_client_id_foreign` (`client_id`),
  CONSTRAINT `representative_client_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  CONSTRAINT `representative_client_representative_id_foreign` FOREIGN KEY (`representative_id`) REFERENCES `representative` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representative_client`
--

LOCK TABLES `representative_client` WRITE;
/*!40000 ALTER TABLE `representative_client` DISABLE KEYS */;
INSERT INTO `representative_client` VALUES (1,1,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(2,2,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(3,3,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(4,4,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(5,5,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(6,6,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(7,7,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(8,8,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(9,9,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(10,10,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(11,11,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(12,12,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(13,13,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(14,14,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(15,15,'2025-07-19 23:27:51','2025-07-19 23:27:51'),(16,2,'2025-07-20 19:58:38','2025-07-20 19:58:38'),(17,2,'2025-07-20 20:01:22','2025-07-20 20:01:22'),(17,3,'2025-07-20 20:01:22','2025-07-20 20:01:22'),(17,4,'2025-07-20 20:01:22','2025-07-20 20:01:22'),(18,2,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(18,3,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(18,4,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(18,7,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(18,12,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(18,13,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(18,14,'2025-07-20 20:13:01','2025-07-20 20:13:01'),(19,9,'2025-07-20 20:22:34','2025-07-20 20:22:34'),(19,10,'2025-07-20 20:22:34','2025-07-20 20:22:34'),(19,11,'2025-07-20 20:22:34','2025-07-20 20:22:34'),(20,2,'2025-07-20 20:23:22','2025-07-20 20:23:22'),(20,3,'2025-07-20 20:23:22','2025-07-20 20:23:22'),(20,4,'2025-07-20 20:23:22','2025-07-20 20:23:22'),(21,16,'2025-07-20 20:25:36','2025-07-20 20:25:36'),(21,19,'2025-07-20 20:25:36','2025-07-20 20:25:36'),(21,20,'2025-07-20 20:25:36','2025-07-20 20:25:36'),(22,7,'2025-07-20 20:29:30','2025-07-20 20:29:30'),(22,8,'2025-07-20 20:29:30','2025-07-20 20:29:30'),(22,9,'2025-07-20 20:29:30','2025-07-20 20:29:30'),(23,7,'2025-07-20 20:36:00','2025-07-20 20:36:00'),(23,8,'2025-07-20 20:36:00','2025-07-20 20:36:00'),(23,10,'2025-07-20 20:36:00','2025-07-20 20:36:00'),(24,7,'2025-07-20 20:44:30','2025-07-20 20:44:30'),(24,8,'2025-07-20 20:44:30','2025-07-20 20:44:30'),(24,3,'2025-07-20 21:29:24','2025-07-20 21:29:24'),(24,4,'2025-07-20 21:29:24','2025-07-20 21:29:24');
/*!40000 ALTER TABLE `representative_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','2025-07-19 23:27:50','$2y$12$t7McEJSSmmcbj9zO2J64PupKpRVaIez7cLzGH2q6ausNjCgzYG1Oi','aKFySYU2Z8','2025-07-19 23:27:51','2025-07-19 23:27:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'upd8'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-20 18:57:23

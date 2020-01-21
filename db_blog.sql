-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: db_blog
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cb_comments`
--

DROP TABLE IF EXISTS `cb_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cb_comments` (
  `comment_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) DEFAULT '0',
  `user_id` bigint(20) DEFAULT '0',
  `comment_author` tinytext,
  `comment_author_email` varchar(100) DEFAULT NULL,
  `comment_author_url` varchar(200) DEFAULT NULL,
  `comment_author_IP` varchar(100) DEFAULT NULL,
  `comment_date` datetime DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime DEFAULT '0000-00-00 00:00:00',
  `comment_content` text,
  `comment_karma` int(11) DEFAULT '0',
  `comment_approved` varchar(20) DEFAULT '1',
  `comment_agent` varchar(255) DEFAULT NULL,
  `comment_type` varchar(20) DEFAULT NULL,
  `comment_parent` bigint(20) DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `user_id` (`user_id`),
  KEY `comment_post_ID` (`comment_post_ID`),
  CONSTRAINT `comment_post_ID` FOREIGN KEY (`comment_post_ID`) REFERENCES `cb_posts` (`ID_posts`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cb_comments_user_id` FOREIGN KEY (`user_id`) REFERENCES `cb_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cb_comments`
--

LOCK TABLES `cb_comments` WRITE;
/*!40000 ALTER TABLE `cb_comments` DISABLE KEYS */;
INSERT INTO `cb_comments` VALUES (0,0,0,'0','0','0',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','First Comment',0,'1',NULL,NULL,0),(1,0,0,'0','0','0','0','0000-00-00 00:00:00','0000-00-00 00:00:00','Second Comment',0,'1',NULL,NULL,0),(3,0,0,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','Third Comment',0,'1',NULL,NULL,0),(4,0,0,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','ds',0,'1',NULL,NULL,0),(5,1,0,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','sdfas',0,'1',NULL,NULL,0),(6,1,0,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,'1',NULL,NULL,0),(7,0,1,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','asdf',0,'1',NULL,NULL,0),(8,0,1,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','asdf',0,'1',NULL,NULL,0),(9,0,0,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','sdf',0,'1',NULL,NULL,0),(10,0,0,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','asdfasd',0,'1',NULL,NULL,0),(11,0,0,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','diego',0,'1',NULL,NULL,0);
/*!40000 ALTER TABLE `cb_comments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-21 15:40:22
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: db_blog
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cb_posts`
--

DROP TABLE IF EXISTS `cb_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cb_posts` (
  `ID_posts` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) DEFAULT '0',
  `post_date` datetime DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext,
  `post_title` text,
  `post_excerpt` text,
  `post_status` varchar(20) DEFAULT 'publish',
  `comment_status` varchar(20) DEFAULT 'open',
  `ping_status` varchar(20) DEFAULT 'open',
  `post_password` varchar(20) DEFAULT NULL,
  `post_category_main` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_posts`),
  KEY `post_name` (`post_category_main`) /*!80000 INVISIBLE */,
  KEY `post_author` (`post_author`) /*!80000 INVISIBLE */,
  CONSTRAINT `post_author` FOREIGN KEY (`post_author`) REFERENCES `cb_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cb_posts`
--

LOCK TABLES `cb_posts` WRITE;
/*!40000 ALTER TABLE `cb_posts` DISABLE KEYS */;
INSERT INTO `cb_posts` VALUES (0,0,'2020-01-01 00:00:00','2020-01-01 00:00:00','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','What is Lorem Ipsum?','Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','publish','open','open',NULL,NULL),(1,0,'2019-04-20 00:00:00','2019-02-02 00:00:00','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Here are guidelines for what to post on social media for business, and how to roll up your sleeves and upgrading your social content with better writing, images and mentions. Adding these elements to your posts will increase visibility and engagement on everything you share.','Why do we use it?','Why do we use it?...','publish','open','open',NULL,NULL),(11,0,'2020-01-14 14:44:47','2020-01-14 14:44:47','Instagram posts don’t include links, so hashtags there won’t compete with links to content. That may be one reason why Instagram posts include often have tons and tons of hashtags. A hashtag is a clickable keyword or topic, such as #contentmarketing, #blogtips or #Chicago. They can increase the visibility of your social posts.','Hashtags','Instagram posts don’t include links, so hashtags there won’t compete with links to content.','publish','open','open',NULL,NULL);
/*!40000 ALTER TABLE `cb_posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-21 15:40:23
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: db_blog
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cb_taxonomy`
--

DROP TABLE IF EXISTS `cb_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cb_taxonomy` (
  `id_taxonomy` bigint(20) NOT NULL AUTO_INCREMENT,
  `taxonomy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cb_taxonomy`
--

LOCK TABLES `cb_taxonomy` WRITE;
/*!40000 ALTER TABLE `cb_taxonomy` DISABLE KEYS */;
INSERT INTO `cb_taxonomy` VALUES (2,'sports');
/*!40000 ALTER TABLE `cb_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-21 15:40:21
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: db_blog
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cb_users`
--

DROP TABLE IF EXISTS `cb_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cb_users` (
  `ID` bigint(20) NOT NULL,
  `user_login` varchar(60) DEFAULT NULL,
  `user_pass` varchar(45) DEFAULT NULL,
  `user_nicename` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_login` (`user_login`),
  KEY `user_nicename` (`user_nicename`) /*!80000 INVISIBLE */
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cb_users`
--

LOCK TABLES `cb_users` WRITE;
/*!40000 ALTER TABLE `cb_users` DISABLE KEYS */;
INSERT INTO `cb_users` VALUES (0,'admin','abcde','admin','admin@blog.es'),(1,'anonymous','abcde','anonymous','anonymous');
/*!40000 ALTER TABLE `cb_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-21 15:40:22
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: db_blog
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping routines for database 'db_blog'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-21 15:40:23
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: db_blog
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cb_categories`
--

DROP TABLE IF EXISTS `cb_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cb_categories` (
  `categories_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_taxonomy` bigint(20) DEFAULT NULL,
  `post_ID` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`categories_ID`),
  KEY `post_taxonomy` (`post_taxonomy`),
  KEY `post_ID` (`post_ID`),
  CONSTRAINT `post_ID` FOREIGN KEY (`post_ID`) REFERENCES `cb_posts` (`ID_posts`),
  CONSTRAINT `post_taxonomy` FOREIGN KEY (`post_taxonomy`) REFERENCES `cb_taxonomy` (`id_taxonomy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cb_categories`
--

LOCK TABLES `cb_categories` WRITE;
/*!40000 ALTER TABLE `cb_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `cb_categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-21 15:40:22

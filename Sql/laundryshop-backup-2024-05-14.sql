-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: laundry_db
-- ------------------------------------------------------
-- Server version 	10.4.24-MariaDB
-- Date: Tue, 14 May 2024 07:04:06 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_customer` varchar(50) NOT NULL,
  `gender_c` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `UNIQUE` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `customer` VALUES (7,'Detztirf Pullido','Female','somewhere over the rainbow','09566810970'),(37,'Jessie John Paul Lomoljo','Male','somewhere you belong','9817716573'),(38,'Elvin John Guilot','Male','somewhere over the rainbow','09817716573');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `customer` with 3 row(s)
--

--
-- Table structure for table `employee`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `employee_id` varchar(11) NOT NULL,
  `name_employee` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `number` varchar(15) NOT NULL,
  `salary` int(11) NOT NULL,
  `date_join` date NOT NULL,
  `date_stop` date NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `employee` VALUES ('K000','Karl Abuton','Male','liangan west maigo ldn','12313212',423,'2024-04-10','0000-00-00',1),('K002','Karl Gwapa','Male','somewhere over the rainbow','56783921',1231,'2024-04-08','0000-00-00',1),('K003','simone ganados','Female','somewhere over the rainbow','56783921',1231,'2024-04-26','0000-00-00',1);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `employee` with 3 row(s)
--

--
-- Table structure for table `expenditure`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expenditure` (
  `expenditure_id` varchar(14) NOT NULL,
  `total` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `date_expenditure` date NOT NULL,
  `employee_id` varchar(6) NOT NULL,
  PRIMARY KEY (`expenditure_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenditure`
--

LOCK TABLES `expenditure` WRITE;
/*!40000 ALTER TABLE `expenditure` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `expenditure` VALUES ('20220628094542',1500,'Employee Salary Payment June 2022','2022-06-28','K000'),('20220628094556',100,'Sample Expense','2022-06-28','K001'),('20240304031040',6600,'Employee Salary Payment March 2024','2024-03-04','K000');
/*!40000 ALTER TABLE `expenditure` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `expenditure` with 3 row(s)
--

--
-- Table structure for table `itemandslot`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemandslot` (
  `itemandslot_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_avail` varchar(30) NOT NULL,
  `item_price` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `txt_image` text NOT NULL,
  PRIMARY KEY (`itemandslot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemandslot`
--

LOCK TABLES `itemandslot` WRITE;
/*!40000 ALTER TABLE `itemandslot` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `itemandslot` VALUES (16,'downy sunfresh',12,0,'1714615979_c98dd41ec4321361a084.jpg'),(17,'downy regular',10,0,'1714676110_c3f9f7d6c5f9a182b70a.jpeg'),(18,'downy perfume',13,0,'1714676133_4fc8e18f58920b240fcc.jpeg');
/*!40000 ALTER TABLE `itemandslot` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `itemandslot` with 3 row(s)
--

--
-- Table structure for table `payment`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `itemandslot_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `payment` with 0 row(s)
--

--
-- Table structure for table `request`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `purpose` varchar(30) NOT NULL,
  `req_status` varchar(30) NOT NULL DEFAULT 'pending',
  `prio_num` varchar(11) NOT NULL DEFAULT 'pending',
  `c_id` int(11) NOT NULL,
  `mode_payment` int(11) NOT NULL,
  `total` varchar(11) NOT NULL DEFAULT 'pending',
  `employee_id` varchar(11) NOT NULL DEFAULT 'pending',
  `itemandslot_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `payment_img` text NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `request` VALUES (23,'2024-05-13 19:02:07','White only ','accepted','12',7,0,'213','K003',18,13,''),(24,'2024-05-13 19:02:07','mixed','progress','16',7,0,'213','pending',16,8,''),(25,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',0,8,''),(26,'2024-05-13 19:02:07','bedsheet','completed','14',7,0,'213','pending',18,20,''),(27,'2024-05-13 19:02:07','white','released','15',7,0,'213','pending',17,7,''),(32,'2024-05-13 19:02:07','white','pending','pending',7,0,'213','pending',16,8,''),(45,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',16,8,''),(47,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',16,8,''),(49,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',16,8,''),(50,'2024-05-13 19:02:07','bedsheet','pending','pending',7,0,'213','pending',18,8,'');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `request` with 10 row(s)
--

--
-- Table structure for table `tbl_feedback`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(30) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback_type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_feedback`
--

LOCK TABLES `tbl_feedback` WRITE;
/*!40000 ALTER TABLE `tbl_feedback` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_feedback` VALUES (1,'karl',956772821,'karlabuton20@gmail.com','Comments','asbfkbdkalksna'),(2,'glenn',956772821,'karl@gmail.com','Comments','gwapo si karl'),(3,'jessie',1234567891,'123@gmail.com','Comments','bilar paaaaa'),(4,'joseph',1231231,'adsd@gmail.com','Comments','gwapo ');
/*!40000 ALTER TABLE `tbl_feedback` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_feedback` with 4 row(s)
--

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` char(16) DEFAULT NULL,
  `c_id` int(11) NOT NULL,
  `employee_id` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'Administrator','admin','1234','superuser',0,''),(7,'Staff','karla','1234',NULL,0,'K002'),(8,'Customer','leng','1234',NULL,7,''),(9,'Staff','simone','1234',NULL,0,'K003'),(19,'Customer','jessie','jessie123',NULL,37,''),(20,'Customer','elvinguilot','guilot2345',NULL,38,'');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 6 row(s)
--

--
-- Table structure for table `customer`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_customer` varchar(50) NOT NULL,
  `gender_c` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `UNIQUE` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `customer` VALUES (7,'Detztirf Pullido','Female','somewhere over the rainbow','09566810970'),(37,'Jessie John Paul Lomoljo','Male','somewhere you belong','9817716573'),(38,'Elvin John Guilot','Male','somewhere over the rainbow','09817716573');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `customer` with 3 row(s)
--

--
-- Table structure for table `employee`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `employee_id` varchar(11) NOT NULL,
  `name_employee` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `number` varchar(15) NOT NULL,
  `salary` int(11) NOT NULL,
  `date_join` date NOT NULL,
  `date_stop` date NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `employee` VALUES ('K000','Karl Abuton','Male','liangan west maigo ldn','12313212',423,'2024-04-10','0000-00-00',1),('K002','Karl Gwapa','Male','somewhere over the rainbow','56783921',1231,'2024-04-08','0000-00-00',1),('K003','simone ganados','Female','somewhere over the rainbow','56783921',1231,'2024-04-26','0000-00-00',1);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `employee` with 3 row(s)
--

--
-- Table structure for table `expenditure`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expenditure` (
  `expenditure_id` varchar(14) NOT NULL,
  `total` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `date_expenditure` date NOT NULL,
  `employee_id` varchar(6) NOT NULL,
  PRIMARY KEY (`expenditure_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expenditure`
--

LOCK TABLES `expenditure` WRITE;
/*!40000 ALTER TABLE `expenditure` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `expenditure` VALUES ('20220628094542',1500,'Employee Salary Payment June 2022','2022-06-28','K000'),('20220628094556',100,'Sample Expense','2022-06-28','K001'),('20240304031040',6600,'Employee Salary Payment March 2024','2024-03-04','K000');
/*!40000 ALTER TABLE `expenditure` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `expenditure` with 3 row(s)
--

--
-- Table structure for table `itemandslot`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemandslot` (
  `itemandslot_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_avail` varchar(30) NOT NULL,
  `item_price` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `txt_image` text NOT NULL,
  PRIMARY KEY (`itemandslot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemandslot`
--

LOCK TABLES `itemandslot` WRITE;
/*!40000 ALTER TABLE `itemandslot` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `itemandslot` VALUES (16,'downy sunfresh',12,0,'1714615979_c98dd41ec4321361a084.jpg'),(17,'downy regular',10,0,'1714676110_c3f9f7d6c5f9a182b70a.jpeg'),(18,'downy perfume',13,0,'1714676133_4fc8e18f58920b240fcc.jpeg');
/*!40000 ALTER TABLE `itemandslot` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `itemandslot` with 3 row(s)
--

--
-- Table structure for table `payment`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `itemandslot_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `payment` with 0 row(s)
--

--
-- Table structure for table `request`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `purpose` varchar(30) NOT NULL,
  `req_status` varchar(30) NOT NULL DEFAULT 'pending',
  `prio_num` varchar(11) NOT NULL DEFAULT 'pending',
  `c_id` int(11) NOT NULL,
  `mode_payment` int(11) NOT NULL,
  `total` varchar(11) NOT NULL DEFAULT 'pending',
  `employee_id` varchar(11) NOT NULL DEFAULT 'pending',
  `itemandslot_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `payment_img` text NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `request` VALUES (23,'2024-05-13 19:02:07','White only ','accepted','12',7,0,'213','K003',18,13,''),(24,'2024-05-13 19:02:07','mixed','progress','16',7,0,'213','pending',16,8,''),(25,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',0,8,''),(26,'2024-05-13 19:02:07','bedsheet','completed','14',7,0,'213','pending',18,20,''),(27,'2024-05-13 19:02:07','white','released','15',7,0,'213','pending',17,7,''),(32,'2024-05-13 19:02:07','white','pending','pending',7,0,'213','pending',16,8,''),(45,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',16,8,''),(47,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',16,8,''),(49,'2024-05-13 19:02:07','mixed','pending','pending',7,0,'213','pending',16,8,''),(50,'2024-05-13 19:02:07','bedsheet','pending','pending',7,0,'213','pending',18,8,'');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `request` with 10 row(s)
--

--
-- Table structure for table `tbl_feedback`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(30) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback_type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_feedback`
--

LOCK TABLES `tbl_feedback` WRITE;
/*!40000 ALTER TABLE `tbl_feedback` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_feedback` VALUES (1,'karl',956772821,'karlabuton20@gmail.com','Comments','asbfkbdkalksna'),(2,'glenn',956772821,'karl@gmail.com','Comments','gwapo si karl'),(3,'jessie',1234567891,'123@gmail.com','Comments','bilar paaaaa'),(4,'joseph',1231231,'adsd@gmail.com','Comments','gwapo ');
/*!40000 ALTER TABLE `tbl_feedback` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_feedback` with 4 row(s)
--

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` char(16) DEFAULT NULL,
  `c_id` int(11) NOT NULL,
  `employee_id` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'Administrator','admin','1234','superuser',0,''),(7,'Staff','karla','1234',NULL,0,'K002'),(8,'Customer','leng','1234',NULL,7,''),(9,'Staff','simone','1234',NULL,0,'K003'),(19,'Customer','jessie','jessie123',NULL,37,''),(20,'Customer','elvinguilot','guilot2345',NULL,38,'');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 6 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Tue, 14 May 2024 07:04:07 +0000

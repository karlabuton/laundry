-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: laundry_db
-- ------------------------------------------------------
-- Server version 	10.4.24-MariaDB
-- Date: Mon, 29 Apr 2024 12:12:52 +0000

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `customer` VALUES (7,'Detztirf Pullido','Female','somewhere over the rainbow','09566810970'),(10,'jessie lomoljo','Male','somewhere over the rainbow','09566810970'),(30,'Sittie Jamaica','Male','somewhere you belong','0988554476'),(31,'Karla Abillana','Female','Maigo, Lanao Del Norte','09876543456'),(32,'jessie lomoljo','Female','somewhere over the rainbow','09756481154'),(33,'John','Male','maigo','1234'),(34,'jsse','Male','maigo','09566810970');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `customer` with 7 row(s)
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
  `usename` varchar(15) NOT NULL,
  `passsword` varchar(15) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `employee` VALUES ('K000','Karl Abuton','Male','liangan west maigo ldn','12313212',423,'2024-04-10','0000-00-00',1,'',''),('K002','Karl Gwapa','Male','somewhere over the rainbow','56783921',1231,'2024-04-08','0000-00-00',1,'',''),('K003','simone ganados','Female','somewhere over the rainbow','56783921',1231,'2024-04-26','0000-00-00',1,'','');
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
  PRIMARY KEY (`itemandslot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemandslot`
--

LOCK TABLES `itemandslot` WRITE;
/*!40000 ALTER TABLE `itemandslot` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `itemandslot` VALUES (9,'downy sunrise',15,0),(10,'downy sunfresh',12,0),(11,'liquid deteriodes',15,0);
/*!40000 ALTER TABLE `itemandslot` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `itemandslot` with 3 row(s)
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
  `weight` int(11) NOT NULL,
  `total` varchar(11) NOT NULL DEFAULT 'pending',
  `employee_id` varchar(11) NOT NULL DEFAULT 'pending',
  `itemandslot_id` int(11) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `request` VALUES (1,'2024-04-27 16:00:00','White only ','Washing','12',7,12,'123','K002',8),(14,'2024-04-26 16:00:00','White only ','pending','pending',10,13,'160','K003',11),(16,'2024-04-27 16:00:00','White only ','pending','pending',7,20,'130','K002',11),(17,'2024-04-28 16:00:00','White only ','pending','pending',31,20,'130','K003',0),(18,'2024-04-28 18:16:42','Palaba kog puti','pending','pending',32,1,'pending','pending',10),(19,'2024-04-29 07:42:37','White only ','pending','pending',34,7,'pending','pending',9);
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `request` with 6 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_feedback`
--

LOCK TABLES `tbl_feedback` WRITE;
/*!40000 ALTER TABLE `tbl_feedback` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_feedback` VALUES (1,'karl',956772821,'karlabuton20@gmail.com','Comments','asbfkbdkalksna'),(2,'glenn',956772821,'karl@gmail.com','Comments','gwapo si karl'),(3,'jessie',1234567891,'123@gmail.com','Comments','bilar paaaaa');
/*!40000 ALTER TABLE `tbl_feedback` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_feedback` with 3 row(s)
--

--
-- Table structure for table `transaction`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `transaction_id` varchar(14) NOT NULL,
  `employee_id` char(6) NOT NULL,
  `req_id` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `transaction` VALUES ('12','K001',1),('9876523','K003',0);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `transaction` with 2 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'Administrator','admin','1234','superuser',0,''),(3,'Customer','karlgwapo','gwapokarl123',NULL,10,''),(7,'Staff','karla','1234',NULL,0,'K002'),(8,'Customer','leng','1234',NULL,7,''),(9,'Staff','simone','1234',NULL,0,'K003'),(11,'Customer','jess','1234',NULL,30,''),(12,'Customer','Abillana23','1234',NULL,31,''),(13,'Customer','customer','1234',NULL,32,''),(14,'Customer','jess','1234',NULL,33,''),(15,'Customer','chel','1234',NULL,34,'');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 10 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `customer` VALUES (7,'Detztirf Pullido','Female','somewhere over the rainbow','09566810970'),(10,'jessie lomoljo','Male','somewhere over the rainbow','09566810970'),(30,'Sittie Jamaica','Male','somewhere you belong','0988554476'),(31,'Karla Abillana','Female','Maigo, Lanao Del Norte','09876543456'),(32,'jessie lomoljo','Female','somewhere over the rainbow','09756481154'),(33,'John','Male','maigo','1234'),(34,'jsse','Male','maigo','09566810970');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `customer` with 7 row(s)
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
  `usename` varchar(15) NOT NULL,
  `passsword` varchar(15) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `employee` VALUES ('K000','Karl Abuton','Male','liangan west maigo ldn','12313212',423,'2024-04-10','0000-00-00',1,'',''),('K002','Karl Gwapa','Male','somewhere over the rainbow','56783921',1231,'2024-04-08','0000-00-00',1,'',''),('K003','simone ganados','Female','somewhere over the rainbow','56783921',1231,'2024-04-26','0000-00-00',1,'','');
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
  PRIMARY KEY (`itemandslot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemandslot`
--

LOCK TABLES `itemandslot` WRITE;
/*!40000 ALTER TABLE `itemandslot` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `itemandslot` VALUES (9,'downy sunrise',15,0),(10,'downy sunfresh',12,0),(11,'liquid deteriodes',15,0);
/*!40000 ALTER TABLE `itemandslot` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `itemandslot` with 3 row(s)
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
  `weight` int(11) NOT NULL,
  `total` varchar(11) NOT NULL DEFAULT 'pending',
  `employee_id` varchar(11) NOT NULL DEFAULT 'pending',
  `itemandslot_id` int(11) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `request` VALUES (1,'2024-04-27 16:00:00','White only ','Washing','12',7,12,'123','K002',8),(14,'2024-04-26 16:00:00','White only ','pending','pending',10,13,'160','K003',11),(16,'2024-04-27 16:00:00','White only ','pending','pending',7,20,'130','K002',11),(17,'2024-04-28 16:00:00','White only ','pending','pending',31,20,'130','K003',0),(18,'2024-04-28 18:16:42','Palaba kog puti','pending','pending',32,1,'pending','pending',10),(19,'2024-04-29 07:42:37','White only ','pending','pending',34,7,'pending','pending',9);
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `request` with 6 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_feedback`
--

LOCK TABLES `tbl_feedback` WRITE;
/*!40000 ALTER TABLE `tbl_feedback` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tbl_feedback` VALUES (1,'karl',956772821,'karlabuton20@gmail.com','Comments','asbfkbdkalksna'),(2,'glenn',956772821,'karl@gmail.com','Comments','gwapo si karl'),(3,'jessie',1234567891,'123@gmail.com','Comments','bilar paaaaa');
/*!40000 ALTER TABLE `tbl_feedback` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tbl_feedback` with 3 row(s)
--

--
-- Table structure for table `transaction`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `transaction_id` varchar(14) NOT NULL,
  `employee_id` char(6) NOT NULL,
  `req_id` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `transaction` VALUES ('12','K001',1),('9876523','K003',0);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `transaction` with 2 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'Administrator','admin','1234','superuser',0,''),(3,'Customer','karlgwapo','gwapokarl123',NULL,10,''),(7,'Staff','karla','1234',NULL,0,'K002'),(8,'Customer','leng','1234',NULL,7,''),(9,'Staff','simone','1234',NULL,0,'K003'),(11,'Customer','jess','1234',NULL,30,''),(12,'Customer','Abillana23','1234',NULL,31,''),(13,'Customer','customer','1234',NULL,32,''),(14,'Customer','jess','1234',NULL,33,''),(15,'Customer','chel','1234',NULL,34,'');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 10 row(s)
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

-- Dump completed on: Mon, 29 Apr 2024 12:12:52 +0000

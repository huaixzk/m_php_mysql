-- MySQL dump 10.10
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `mydb`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mydb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mydb`;

--
-- Table structure for table `book_reviews`
--

DROP TABLE IF EXISTS `book_reviews`;
CREATE TABLE `book_reviews` (
  `isbn` char(13) NOT NULL,
  `review` text,
  PRIMARY KEY  (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_reviews`
--


/*!40000 ALTER TABLE `book_reviews` DISABLE KEYS */;
LOCK TABLES `book_reviews` WRITE;
INSERT INTO `book_reviews` VALUES ('0-672-31697-8','The Morgan Vook is clearly written and goes well beyond most of the basic Java books out there.');
UNLOCK TABLES;
/*!40000 ALTER TABLE `book_reviews` ENABLE KEYS */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `isbn` char(13) NOT NULL,
  `author` char(50) default NULL,
  `title` char(100) default NULL,
  `price` float(4,2) default NULL,
  PRIMARY KEY  (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--


/*!40000 ALTER TABLE `books` DISABLE KEYS */;
LOCK TABLES `books` WRITE;
INSERT INTO `books` VALUES ('0-672-31607-8','Michael Morgan','Java 2 for professional Developers',34.99),('0-672-31715-1','Thomas Down','Installng Debian GNU?Linux',24.99),('0-672-31579-2','Pruitt, et al','Teach Yourself GIMP in 24 Hours',24.99),('0-672-31769-9','Thomas Schenk','Caldera OpenLinux System Administratior Unleashed',49.99),('1-111-11111-1','Test ts .t','A Testing Book About Test',0.00),('0-123-45678-9','Author','Title about linux osx',0.09);
UNLOCK TABLES;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customerid` int(10) unsigned NOT NULL auto_increment,
  `name` char(50) NOT NULL,
  `address` char(100) NOT NULL,
  `city` char(30) NOT NULL,
  PRIMARY KEY  (`customerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--


/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
LOCK TABLES `customers` WRITE;
INSERT INTO `customers` VALUES (3,'Julie Smith','25 Oak Street','Airport West'),(4,'Alan Wong','1/47/Haines Avenue','Box Hill'),(5,'Michelle Arthur','357 North Road','Yarraville');
UNLOCK TABLES;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `orderid` int(10) unsigned NOT NULL,
  `isbn` char(13) NOT NULL,
  `quantity` tinyint(3) unsigned default NULL,
  PRIMARY KEY  (`orderid`,`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--


/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
LOCK TABLES `order_items` WRITE;
INSERT INTO `order_items` VALUES (1,'0-672-32697-8',2),(2,'0-672-31769-9',1),(3,'0-672-32769-9',1),(4,'0-672-33745-1',3);
UNLOCK TABLES;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `orderid` int(10) unsigned NOT NULL auto_increment,
  `customerid` int(10) unsigned NOT NULL,
  `amount` float(6,2) default NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--


/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
LOCK TABLES `orders` WRITE;
INSERT INTO `orders` VALUES (1,3,69.98,'2007-04-02'),(2,1,49.99,'2007-04-15'),(3,2,74.98,'2007-04-19'),(4,3,24.99,'2007-05-01');
UNLOCK TABLES;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: mayaishver_fundraiser
-- ------------------------------------------------------
-- Server version 	8.0.30-0ubuntu0.20.04.2
-- Date: Sat, 01 Oct 2022 23:54:23 +0000

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
-- Table structure for table `charities`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `charities` (
  `charity_id` smallint unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for each charity made ',
  `charity_name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'The name of each charity fundraiser',
  `blurb` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'A paragraph written about the charity and why the fundraiser was started',
  `category` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'This helps donors know a little bit about the charity quickly',
  `don_goal` mediumint unsigned NOT NULL COMMENT 'The donation goal for the charity ',
  `account_id` smallint unsigned NOT NULL COMMENT 'The account_id is the foreign key and links the charities table and fundraiser table',
  PRIMARY KEY (`charity_id`),
  KEY `Foreign_key` (`account_id`) USING BTREE,
  CONSTRAINT `charities_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `fundraisers` (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charities`
--

LOCK TABLES `charities` WRITE;
/*!40000 ALTER TABLE `charities` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `charities` VALUES (1,'KidsCan ','KidsCan is Aotearoa New Zealand’s leading charity dedicated to helping Kiwi kids affected by poverty. We help tamariki experiencing hardship by providing food, jackets, shoes and health products to schools and early childhood centres across New Zealand.\r\n\r\nWith these essentials, kids can participate in learning and have the opportunity for a better future.','Children',500000,1),(2,'CanTeen','Around 4,200 rangatahi / young people across Aotearoa are impacted by cancer each year, whether it’s their own diagnosis or that of an immediate family member. CanTeen’s mission is to make sure they don’t have to face cancer alone.','Children',600000,2),(3,'Ronald McDonald House ','RMHC New Zealand supports families when their child is in a New Zealand hospital away from home.\r\n\r\nThe Ronald McDonald House® and Ronald McDonald Family Room® programmes take care of the practical things in life so families can focus on their child staying in a hospital away from home.\r\n\r\nThis helps to relieve stresses like paying for a place to sleep near the hospital, organising family meals and needing a friendly ear to listen on tough days.\r\n','Children',450000,3),(4,'Tearfund','We protect the vulnerable from modern slavery. We Restore hope and peace after disaster strikes. We Sponsor children in need, and we Empower the poor to help themselves. This approach empowers communities to help themselves and find local, long term, sustainable solutions to poverty.','Third-world',490000,4),(5,'The Asthma Foundation','The Foundation\'s vision is to \'be the leaders in respiratory health knowledge to improve respiratory health outcomes for all\' by developing and supporting respiratory health best practice through Research, Education and Advocacy. The Foundation\'s key events, campaigns and publications all support our vision.','General health',800000,5),(6,'Hospice NZ','Hospice is a holistic wrap around service of care.  It’s not just a building and its not just doctors and nurses.\r\n\r\nHospices provide a range of supportive care from music therapy, sharing your life story with a biographer, bereavement counselling, spiritual care, and physiotherapy, plus many other services.  It’s whatever brings the individual and their Whānau peace and joy.','General health ',100000,6),(7,'Heart Foundation','The Heart Foundation is New Zealand’s heart charity, leading the fight against our country’s single biggest killer – heart disease.    We rely on the generosity and goodwill of people like you to support our work.','General Health ',750000,7),(8,'Starship Foundation','Starship Children\'s Health provides a wide range of complex medical, surgical, cardiac and mental health services for children and young people throughout New Zealand and the South Pacific. Starship is a major teaching centre. It aims to lead the nation in paediatric training and research.  Services are provided in inpatient, outpatient, daystay and community settings.','Children',300000,8),(9,'UNICEF','No other organisation has UNICEF\'s experience, expertise and reach.                                       \r\nUNICEF fights for every child\'s right to survive and thrive into adulthood.  UNICEF\'s mission is to create a better world, by advocating for the protection of children\'s rights. To do this, we bring people together: governments, donors, humanitarian agencies, businesses and children themselves.\r\nThis is what UNICEF does, every day, for all children around the world.\r\n','Third-world ',40000,9),(10,'Youthline','Youthline is a \"\"with youth, for youth\"\" organisation that supports young people throughout Aotearoa New Zealand. We have been providing support to Kiwis aged between 12-24 years for more than 50 years.\r\nYouthline offers a free Helpline service (text, phone, webchat & email), free face-to-face counselling services, youth mentoring, and programmes in schools and communities to help people grow and develop.','Mental Health',900000,10),(15,'World Vision','We believe every child deserves to be protected from violence, live a full life, and have the chance to become who God created them to be. We work alongside communities to protect children vulnerable to abuse or exploitation like child marriage, child labour and trafficking.  World Vision engages all those who have a responsibility to protect children. Together we are mobilising communities, strengthening families and empowering children with the skills and knowledge to protect themselves.','Children',100000,25),(16,'World Vision','We believe every child deserves to be protected from violence, live a full life, and have the chance to become who God created them to be. We work alongside communities to protect children vulnerable to abuse or exploitation like child marriage, child labour and trafficking.  World Vision engages all those who have a responsibility to protect children. Together we are mobilising communities, strengthening families and empowering children with the skills and knowledge to protect themselves.','Children',100000,26),(17,'Childrens community ','We believe every child deserves to be protected from violence, live a full life, and have the chance to become who God created them to be. We work alongside communities to protect children vulnerable to abuse or exploitation like child marriage, child labour and trafficking.  World Vision engages all those who have a responsibility to protect children. Together we are mobilising communities, strengthening families and empowering children with the skills and knowledge to protect themselves. gnjet','Children',1000000,27),(18,'fnrefcur','vfbebvrib ri','Children',10034,28),(19,'decev','fekklf','Children',567,29);
/*!40000 ALTER TABLE `charities` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `charities` with 15 row(s)
--

--
-- Table structure for table `donors`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donors` (
  `donor_id` smallint unsigned NOT NULL AUTO_INCREMENT COMMENT 'The unique identifier for each donor ',
  `f_name` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'The first name of each donor',
  `l_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'The lasy name of each done',
  `email` varchar(34) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'Each donor''s email',
  `pledge` mediumint unsigned NOT NULL COMMENT 'The amount each donor is pledging to the charity',
  `charity_id` smallint unsigned NOT NULL COMMENT 'Unique identifier for each charity made ',
  PRIMARY KEY (`donor_id`),
  KEY `Foreign_key` (`charity_id`) USING BTREE,
  CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`charity_id`) REFERENCES `charities` (`charity_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donors`
--

LOCK TABLES `donors` WRITE;
/*!40000 ALTER TABLE `donors` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `donors` VALUES (1,'Nancy','Torres','Nancy.Torres@gmail.com',10,1),(2,'Camryn','Ochoa','Camryn.Ochoa@gmail.com',70,2),(3,'Franco ','Williams','Franco.Williams@gmail.com',15,3),(4,'Branson','Goodwin','Branson.Goodwin@gmail.com',700,4),(5,'Abigayle','Simpson','Abigayle.Simpson@gmail.com',100,5),(6,'Saul','Nixon','Saul.Nixon@gmail.com',60,6),(7,'Nancy ','Torres','Nancy.Torres@gmail.com',85,7),(8,'Kolten','Stein','Kolten.Stein@gmail.com',1000,8),(9,'Jaylen','Harris','Jaylen.Harris@gmail.com',40,9),(10,'Ryland','Hall','Ryland.Hall@gmail.com',25,10),(11,'Jace','Torres','jace.torres@gmail.com',1001,1),(13,'maya','ishver','mayaishver@gmail.com',1234,4);
/*!40000 ALTER TABLE `donors` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `donors` with 12 row(s)
--

--
-- Table structure for table `fundraisers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fundraisers` (
  `account_id` smallint unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for the fundraiser accounts made',
  `f_name` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'First name of the fundraising person',
  `l_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'last name of the fundraising person',
  `birth_date` date NOT NULL COMMENT 'Birth date of the fundraising person',
  `email` varchar(34) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'fundraisers email address',
  `username` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'The fundraiser needs to pick a username to display on the charity pages',
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'Password for the fundraiser so they can log into their account.',
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fundraisers`
--

LOCK TABLES `fundraisers` WRITE;
/*!40000 ALTER TABLE `fundraisers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `fundraisers` VALUES (1,'Sadie','Macdonald','2004-08-25','Sadie.Macdonald@gmail.com','SadieM','Youtube21!'),(2,'Julia','Mooney','1989-07-01','Julia.Mooney@gmail.com','JuliaM','21Youtube!'),(3,'Camden','Hayden','2004-06-18','Camden.Hayden@gmail.com','CamdenH','Happydays11!'),(4,'Nataly','Hodges','2002-07-04','Nataly.Hodges@gmail.com','NatalyH','11Happydays!'),(5,'Abigayle','Simpson','1998-10-29','Abigayle.Simpson@gmail.com','AbigayleS','Forgetme04!'),(6,'Jimmy','Duke','1983-01-30','Jimmy.Duke@gmail.com','JimmyD','04Forgetme'),(7,'Kai','Watkins','2003-09-12','Kai.Watkins@gmail.com','WatkinsK','Wingnut01'),(8,'Emelia','Ellie','2001-01-01','Emelia.Ellie@gmail.com','EmeliaE','01Wingnut'),(9,'Rex','Gilmore','1999-02-23','Rex.Gilmore@gmail.com','GilmoreR','Guesswho03'),(10,'Zachary','Bowman','2001-12-31','Zachary.Bowman@gmail.com','ZacharyB','17Guesswho'),(16,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(17,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(18,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(19,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(20,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(21,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(22,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(23,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(24,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(25,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(26,'Maya','Ishver','2004-12-20','mayaishver@gmail.com',NULL,NULL),(27,'maya','ishver','2004-12-20','maya.ishver@student.wegc.school.n',NULL,NULL),(28,'maya','fncbvhf','2022-07-07','bfeb@fnrjnfre',NULL,NULL),(29,'dccsc','cddcscdsccw','2022-10-12','dfwcd@vbfrbe',NULL,NULL);
/*!40000 ALTER TABLE `fundraisers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `fundraisers` with 24 row(s)
--

--
-- Stand-In structure for view `Top 5`
--

CREATE TABLE IF NOT EXISTS `Top 5` (
`charity_name` varchar(45)
,`pledge` decimal(30,0)
);
--
-- View structure for view `Top 5`
--

DROP TABLE IF EXISTS `Top 5`;
/*!50001 DROP VIEW IF EXISTS `Top 5`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`mayaishver`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `Top 5` AS select `charities`.`charity_name` AS `charity_name`,sum(`donors`.`pledge`) AS `pledge` from (`donors` join `charities`) where (`charities`.`charity_id` = `donors`.`charity_id`) group by `charities`.`charity_name` order by `pledge` desc limit 0,5 */;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Sat, 01 Oct 2022 23:54:24 +0000

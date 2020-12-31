/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.5.41 : Database - elearn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`elearn` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `elearn`;

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `books` */

insert  into `books`(`id`,`title`,`pdf`) values (1,'Living Book 1','1608304685_2ee7a4930fcbe7650c81.pdf');
insert  into `books`(`id`,`title`,`pdf`) values (2,'Living Book 2','1608616328_b74012a5ad5f66c965e7.pdf');
insert  into `books`(`id`,`title`,`pdf`) values (3,'Living Book 3','1608616351_3e3f28b640c998fa57ef.pdf');
insert  into `books`(`id`,`title`,`pdf`) values (4,'Living Book 4','1608616370_5f6528fed7ae77141bfd.pdf');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `image` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`id`,`name`,`description`,`image`) values (1,'Science','<h1>Science</h1>\r\n\r\n<p>Science is a systematic enterprise that builds and organizes knowledge in the form of testable explanations and predictions about the universe. The earliest roots of science can be traced to Ancient Egypt and Mesopotamia in around 3500 to 3000 BCE.</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/Science\">Wikipedia - Science</a></p>\r\n','1608290280_32a857c3a526ca07cc52.png');

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL,
  `eventDate` varchar(10) NOT NULL,
  `eventTime` varchar(10) NOT NULL,
  `postedOn` date NOT NULL,
  `meetingId` varchar(50) DEFAULT NULL,
  `passcode` varchar(50) DEFAULT NULL,
  `timeZone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `events` */

insert  into `events`(`id`,`title`,`image`,`link`,`eventDate`,`eventTime`,`postedOn`,`meetingId`,`passcode`,`timeZone`) values (1,'Algebra 1','1608207277_1f6b6da7756ff5fed282.jpg','https://us04web.zoom.us/j/72708815962?pwd=V0Zncm01YTZRanlzVExjd1pCVW5MQT09','2020-12-31','17:40','2020-12-17','727 0881 5962','4c1RA7','(GMT+05:30) India Standard Time - Kolkata');
insert  into `events`(`id`,`title`,`image`,`link`,`eventDate`,`eventTime`,`postedOn`,`meetingId`,`passcode`,`timeZone`) values (2,'Differentiation','1608208615_e96af2b5b923dc7457fb.jpeg','https://us04web.zoom.us/j/72708815962?pwd=V0Zncm01YTZRanlzVExjd1pCVW5MQT09','2020-12-18','19:00','2020-12-17','727 0881 5962','4c1RA7','(GMT+05:30) India Standard Time - Kolkata');
insert  into `events`(`id`,`title`,`image`,`link`,`eventDate`,`eventTime`,`postedOn`,`meetingId`,`passcode`,`timeZone`) values (3,'Integration','1608210774_b5a4f6db3fadd0942129.jpeg','https://us04web.zoom.us/j/72708815962?pwd=V0Zncm01YTZRanlzVExjd1pCVW5MQT09','2020-12-19','18:30','2020-12-17','727 0881 5962','4c1RA7','(GMT+05:30) India Standard Time - Kolkata');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `newsDate` varchar(10) DEFAULT NULL,
  `newsTime` varchar(10) DEFAULT NULL,
  `postedOn` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`description`,`link`,`image`,`newsDate`,`newsTime`,`postedOn`) values (1,'News 1','<p><strong>Heading</strong></p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','https://www.randoli.ca/','image.png','2020-12-31','17:40','2020-12-18');
insert  into `news`(`id`,`title`,`description`,`link`,`image`,`newsDate`,`newsTime`,`postedOn`) values (3,'Test','<h1>Test</h1>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','https://www.youtube.com/embed/ICP32DZTRuc','1608624684_aa6000504180dd6513b6.jpg','2020-12-22','13:41','2020-12-22');
insert  into `news`(`id`,`title`,`description`,`link`,`image`,`newsDate`,`newsTime`,`postedOn`) values (4,'Hello','<h1>qwerty</h1>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','https://www.youtube.com/embed/ICP32DZTRuc','1608624828_74f4756ab1b21d9c9de3.jpeg','2020-12-22','13:43','2020-12-22');

/*Table structure for table `notice` */

DROP TABLE IF EXISTS `notice`;

CREATE TABLE `notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `postedOn` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `notice` */

insert  into `notice`(`id`,`title`,`image`,`description`,`postedOn`) values (1,'25 years celebration','1608266616_65f55e7923e48c07b129.jpg','Who are we at 25 years of age? We are young, with more than a glint of idealism and a hunger for what’s next, one of the world\'s top 150 young universities . We\'re also old enough to know ourselves well, where our strengths lie, what our achievements mean. We\'re not only facing the future, we are embracing the future.\r\n\r\nSouthern Cross University was always a place of learning, founded firstly as the Lismore Teachers College, then a College of Advanced Education and a member of the University of New England network, before being finally constituted as a university in its own right in 1994. The name of the University symbolises many things – a constellation, a point of reference in the night sky, a motif for independence, rebellion and adventure.\r\n\r\nIt was a fitting name for a University that was not seeking to emulate institutions of long-standing tradition and sandstone columns, but that sought to carve out its own path of excellence, grounded in academic rigour and unafraid to challenge the status quo.\r\n\r\nThe successes have been many. The first university in Australia to introduce degrees in subjects like tourism or pedorthics. The first Naturopathy Clinic on a university campus. A small university that could attract record amounts of research funding. More than 64,000 graduates and three campuses. Nine specialist research centres and researchers who are leading their fields, producing knowledge that has impact not just in the regions they serve, but all over the world.\r\n\r\nToday we celebrate where we have come from, where we are, and where the next 25 years will take us.','2020-12-17');
insert  into `notice`(`id`,`title`,`image`,`description`,`postedOn`) values (2,'Hello','1608271049_3a9bfa2d238327d5e469.jpg','Who are we at 25 years of age? We are young, with more than a glint of idealism and a hunger for what’s next, one of the world\'s top 150 young universities . We\'re also old enough to know ourselves well, where our strengths lie, what our achievements mean. We\'re not only facing the future, we are embracing the future. Southern Cross University was always a place of learning, founded firstly as the Lismore Teachers College, then a College of Advanced Education and a member of the University of New England network, before being finally constituted as a university in its own right in 1994. The name of the University symbolises many things – a constellation, a point of reference in the night sky, a motif for independence, rebellion and adventure. It was a fitting name for a University that was not seeking to emulate institutions of long-standing tradition and sandstone columns, but that sought to carve out its own path of excellence, grounded in academic rigour and unafraid to challenge the status quo. The successes have been many. The first university in Australia to introduce degrees in subjects like tourism or pedorthics. The first Naturopathy Clinic on a university campus. A small university that could attract record amounts of research funding. More than 64,000 graduates and three campuses. Nine specialist research centres and researchers who are leading their fields, producing knowledge that has impact not just in the regions they serve, but all over the world. Today we celebrate where we have come from, where we are, and where the next 25 years will take us.','2020-12-17');

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tkey` varchar(100) NOT NULL,
  `value` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `setting` */

insert  into `setting`(`id`,`tkey`,`value`) values (1,'address','Address');
insert  into `setting`(`id`,`tkey`,`value`) values (2,'phone','0776318136');
insert  into `setting`(`id`,`tkey`,`value`) values (3,'company','Company');
insert  into `setting`(`id`,`tkey`,`value`) values (4,'classTime','Mon - fri: 7:00am - 6:00pm');
insert  into `setting`(`id`,`tkey`,`value`) values (5,'title','title');
insert  into `setting`(`id`,`tkey`,`value`) values (6,'phone1','0779784296');
insert  into `setting`(`id`,`tkey`,`value`) values (7,'email','mailto:name@email.com');
insert  into `setting`(`id`,`tkey`,`value`) values (8,'text-email','info@university.com');

/*Table structure for table `tag_book` */

DROP TABLE IF EXISTS `tag_book`;

CREATE TABLE `tag_book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bookId` int(10) NOT NULL,
  `tagId` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_books_bookId` (`bookId`),
  KEY `fk_tags_tagId` (`tagId`),
  CONSTRAINT `fk_books_bookId` FOREIGN KEY (`bookId`) REFERENCES `books` (`id`),
  CONSTRAINT `fk_tags_tagId` FOREIGN KEY (`tagId`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tag_book` */

insert  into `tag_book`(`id`,`bookId`,`tagId`) values (12,3,2);
insert  into `tag_book`(`id`,`bookId`,`tagId`) values (14,4,2);
insert  into `tag_book`(`id`,`bookId`,`tagId`) values (17,1,2);
insert  into `tag_book`(`id`,`bookId`,`tagId`) values (18,1,3);
insert  into `tag_book`(`id`,`bookId`,`tagId`) values (19,2,3);

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tags` */

insert  into `tags`(`id`,`name`) values (2,'Science fiction');
insert  into `tags`(`id`,`name`) values (3,'Comedy');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `dob` date NOT NULL,
  `privilege` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`email`,`fname`,`lname`,`contact`,`dob`,`privilege`,`status`) values (4,'Hariharan','$2y$10$QDkrcjFpD1Up8.irlcv73uYgEr5bg9gY/L5W8K0HiGYE/1fgx7xne','hariharansliit@gmail.com','Hariharan','Vasudevan','0776318136','1999-04-22','USER','ACTIVE');
insert  into `user`(`id`,`username`,`password`,`email`,`fname`,`lname`,`contact`,`dob`,`privilege`,`status`) values (5,'Admin','$2y$10$Adnt0JTzGoMyHhDqwX6efOUgWEASGgjoZE5Hu5fw0l89ONe8pVXiC','admin@gmail.com','Admin','Admin','0776318136','1999-04-22','ADMIN','ACTIVE');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL,
  `postedOn` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `videos` */

insert  into `videos`(`id`,`title`,`link`,`postedOn`) values (2,'B2 Lloyd\'s Algorithm','https://www.youtube.com/embed/ICP32DZTRuc','2020-12-17');
insert  into `videos`(`id`,`title`,`link`,`postedOn`) values (3,'test','https://www.youtube.com/embed/6oiWMbFk38E','2020-12-22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

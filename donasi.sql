/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.8-MariaDB : Database - donasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`donasi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `donasi`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `judul_program` varchar(200) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `nominal` int(20) NOT NULL,
  PRIMARY KEY (`judul_program`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`judul_program`,`tgl_donasi`,`status`,`nominal`) values ('Bantu 1000 Paket makanan untuk Dhuafa','2020-01-11','paired',20000),('Bantu anak tukang ojek online jantung bocor','2020-01-31','expired',3000),('Bantu Elsa Melawan Leukimia','2020-01-09','paired',5000),('Bantu Ibnu Menonton Konser One OK Rock','2020-01-20','paired',200),('Bantu Korban Banjir Lebak Untuk Bertahan Hidup','2020-01-09','paired',4000),('Beasiswa pendidikan untuk Tifah dan 1000 Yatim','2020-01-15','expired',2000),('Patungan Semen untuk Dirikan Masjid Pelosok Garut','2020-01-01','paired',10000),('Pembangungan Masjid','2020-01-23','paired',1000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

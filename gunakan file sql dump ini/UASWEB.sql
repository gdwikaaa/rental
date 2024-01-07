/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - rentalmotor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rentalmotor` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `rentalmotor`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `jenismotor` */

DROP TABLE IF EXISTS `jenismotor`;

CREATE TABLE `jenismotor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jenismotor` */

insert  into `jenismotor`(`id`,`nama`,`created_at`,`updated_at`) values 
(1,'Sport','2024-01-07 04:47:05','2024-01-07 04:47:05'),
(2,'Matic','2024-01-07 04:47:05','2024-01-07 04:47:05'),
(3,'Bebek','2024-01-07 04:47:05','2024-01-07 04:47:05');

/*Table structure for table `merk` */

DROP TABLE IF EXISTS `merk`;

CREATE TABLE `merk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `merk` */

/*Table structure for table `merkmotor` */

DROP TABLE IF EXISTS `merkmotor`;

CREATE TABLE `merkmotor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `merkmotor` */

insert  into `merkmotor`(`id`,`nama`,`created_at`,`updated_at`) values 
(1,'Kawasaki','2024-01-07 04:47:05','2024-01-07 04:47:05'),
(2,'Honda','2024-01-07 04:47:05','2024-01-07 04:47:05'),
(3,'Yamaha','2024-01-07 04:47:05','2024-01-07 04:47:05');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_11_17_101118_create_rental_table',1),
(6,'2023_11_17_101238_create_merk_table',1),
(7,'2023_11_17_101405_create_merkmotor_table',1),
(8,'2023_11_17_101451_create_motor_table',1),
(9,'2023_11_17_204825_create_jenismotor_table',1);

/*Table structure for table `motor` */

DROP TABLE IF EXISTS `motor`;

CREATE TABLE `motor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nopol` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jenismotor_id` bigint(20) unsigned NOT NULL,
  `merkmotor_id` bigint(20) unsigned NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `motor_nopol_unique` (`nopol`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `motor` */

insert  into `motor`(`id`,`nopol`,`nama`,`harga`,`jenismotor_id`,`merkmotor_id`,`gambar`,`created_at`,`updated_at`) values 
(19,'DK0000AAA','Kawasaki Ninja ZX25R','250.000',1,3,'2024-01-07zx25r.jpg','2024-01-07 08:00:48','2024-01-07 08:09:21'),
(20,'DK0000KS','Yamaha Fazzio','60.000',2,3,'2024-01-07rsz_3fazzio.png','2024-01-07 08:01:06','2024-01-07 20:37:33'),
(21,'DK0000ABCD','Honda ADV 160','100.000',2,2,'2024-01-07rsz_1rsz_21adv_1600.jpg','2024-01-07 08:01:32','2024-01-07 08:01:32'),
(24,'DK4444TETE','Honda Supra X 125','40.000',3,3,'2024-01-07suprax125.jpg','2024-01-07 08:09:02','2024-01-07 20:37:39'),
(26,'DK1111KWSK','Kawasaki Z1000 Sugomi','900.000',1,1,'2024-01-07z1000jpg.jpg','2024-01-07 08:20:58','2024-01-07 08:20:58'),
(27,'DK6969AHY','Honda Vario 160','75.000',2,2,'2024-01-07pario.jpg','2024-01-07 08:22:28','2024-01-07 08:22:28'),
(28,'DK2202KAY','Yamaha XMAX 250','190.000',2,3,'2024-01-07yamaha-xmax-abs-2021-foto-ride-apart-59.jpg','2024-01-07 08:25:28','2024-01-07 08:25:28'),
(30,'DK7782GAT','Honda PCX 160','85.000',2,2,'2024-01-07pcxxx.jpg','2024-01-07 08:29:39','2024-01-07 08:29:39'),
(31,'DK5674SKS','Honda CBR250RR','200.000',1,2,'2024-01-07cbr250rr.jpg','2024-01-07 08:32:12','2024-01-07 08:32:12');

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `rental` */

DROP TABLE IF EXISTS `rental`;

CREATE TABLE `rental` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `motor_id` bigint(20) unsigned NOT NULL,
  `tanggalpinjam` varchar(255) NOT NULL,
  `tanggalselesai` varchar(255) NOT NULL,
  `gambarktp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rental_noktp_unique` (`noktp`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `rental` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`role_id`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','admin@admin.com','2024-01-07 04:47:05','$2y$12$MdIZJOtRrd6qBguQ3xhQLemNTkTsFhISob7QtWINFqe0iN1gkgJzy','1','1i88AJJGYh68Lg8iMM2AdERSIDfripZd3fQ7EnkPvUO2amXujuFQfilGpsXs','2024-01-07 04:47:05','2024-01-07 04:47:05'),
(2,'user','user@user.com','2024-01-07 04:47:05','$2y$12$qBEdkHMPm5DTGNEi2KAvb.SC/iJayfuBL8CT4QcCnTHexizonq7g.','2','kwMfp2nfkplPVvh6FexfaEScJ6pIJVje1OihzAMxvOnWNEY4xGpZVKHMaN60','2024-01-07 04:47:05','2024-01-07 04:47:05');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - xpora
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`xpora` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `xpora`;

/*Table structure for table `data_diri` */

DROP TABLE IF EXISTS `data_diri`;

CREATE TABLE `data_diri` (
  `id_data_diri` int(10) NOT NULL AUTO_INCREMENT,
  `kd_data_diri` varchar(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `verifikasi` varchar(15) NOT NULL,
  `date_create` date NOT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `verifikasi_date` date DEFAULT NULL,
  `assigned_officer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_data_diri`),
  KEY `id_data_diri` (`id_data_diri`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_diri` */

insert  into `data_diri`(`id_data_diri`,`kd_data_diri`,`nik`,`nama_pemilik`,`npwp`,`no_telp`,`email`,`domisili`,`foto`,`user_type`,`verifikasi`,`date_create`,`priority`,`verifikasi_date`,`assigned_officer`) values 
(4,'DD0004','3198123456789123','Wiratama Putra Prakosa','89.315.322.0-113.111','081768890876','wiratama@gmail.com','Kalimantan Barat','DD0004_.png','Indirect Exportir','Verification','2022-04-12','Middle',NULL,NULL),
(5,'DD0005','3198123456789123','Yehezkiel Ferdinand Siagian','89.315.322.0-113.111','081465789392','ekil@gmail.com','Sulawesi Utara','DD0005_.jpg','Diaspora','Verified','2022-04-01','Middle',NULL,NULL),
(6,'DD0006','3198123456789123','Zaki Tifani Fauzan','89.315.322.0-113.111','0810009890876','zaki@gmail.com','Jawa Barat','DD0006_.jpg','Buyer','Verified','2022-04-14','High',NULL,NULL),
(7,'DD0007','3198123456789123','Auladzin Lazuardi','89.315.322.0-113.111','089239845897','aldi@gmail.com','Lampung','DD0007_.png','Buyer','Verification','2022-04-11','High',NULL,NULL),
(8,'DD0008','3198123456789123','Humaira ','89.315.322.0-113.111','085920212090','maira@gmail.com','Maluku Utara','DD0008_.jpg','Indirect Exportir','Verified','2022-04-12','High',NULL,NULL),
(9,'DD0009','3198123456789123','Bunga Lestari ','89.315.322.0-113.111','087483929234','bunga@gmail.com','Sumatra Selatan','DD0009_.jpg','Diaspora','Verification','2022-04-14','Middle',NULL,NULL),
(10,'DD0010','3198123456789123','Zahwa Putri','89.315.322.0-113.111','089990123123','zahwa@gmail.com','Kalimantan Selatan','DD0010_.png','Direct Exportir','Verification','2022-04-14','Middle',NULL,NULL),
(11,'DD0011','3198123456789123','Alfian Kusuma Negara Putra ','89.315.322.0-113.111','08123456789','alfian@gmail.com','Sulawesi Tengah','DD0011_.jpg','Direct Exportir','Verification','2022-04-14','Low',NULL,NULL),
(12,'DD0012','3198123456789123','Maulina Alifah Kalila Sekar','89.315.322.0-113.111','087986968796','alifah@gmail.com','Sumatra Utara','DD0012_.jpg','Direct Exportir','Verification','2022-04-14','Low',NULL,NULL),
(13,'DD0013','3198123456789123','Rizqi Dwi Kurniawan ','89.315.322.0-113.111','082191111929','rizqi@gmail.com','Nusa Tenggara Barat','DD0013_.jpg','Indirect Exportir','Verification','2022-04-14','High',NULL,NULL),
(15,'DD0014','3198123456789123','Michel Tino ','89.315.322.0-113.111','086172389392','michel@gmail.com','Kalimantan Timur','DD0014_1.png','Diaspora','Verification','2022-04-14','Low',NULL,NULL),
(16,'DD0016','3198123456789123','Hanny Fazira ','89.315.322.0-113.111','082345234234','zira@gmail.com','Kalimantan Selatan','DD0016_.jpg','Indirect Exportir','Verification','2022-04-14','Middle',NULL,NULL),
(17,'DD0017','3198123456789123','Irene Gerhani','89.315.322.0-113.111','081293939292','irene@gmail.com','Sulawesi Selatan','DD0017_.jpg','Buyer','Verified','2022-04-14','Low',NULL,NULL),
(18,'DD0018','3198123456789123','Yani Aprianingsih ','89.315.322.0-113.111','089485694604','yani@gmail.com','Daerah Istimewa Yogyakarta','DD0018_.jpg','Buyer','Verification','2022-04-14','High',NULL,NULL),
(19,'DD0019','3198123456789123','Revi Dwi Yanti','89.315.322.0-113.111','082999222000','revi@gmail.com','Jawa Timur','DD0019_.jpg','Indirect Exportir','Verification','2022-04-14','Middle',NULL,NULL),
(20,'DD0020','3198123456789123','Bagas Mufhtie Hanifa','89.315.322.0-113.111','081222999333','bagas@gmail.com','Gorontalo','DD0020_.jpg','Indirect Exportir','Verification','2022-04-14','Low',NULL,NULL),
(21,'DD0021','3198123456789123','Rayhan Oktariza ','89.315.322.0-113.111','085696969696','rayhan@gmail.com','Sulawesi Tenggara','DD0021_.png','Direct Exportir','Verification','2022-04-14','Low',NULL,NULL),
(22,'DD0022','3198123456789123','Nasya  ','89.315.322.0-113.111','089222939121','nasya@gmail.com','Papua Barat','DD0022_.jpg','Buyer','Verification','2022-04-14','High',NULL,NULL),
(23,'DD0023','3198123456789123','Olivia Rodrigo ','89.315.322.0-113.111','081298332999','oliv@gmail.com','Jawa Timur','DD0023_.png','Indirect Exportir','Verification','2022-04-14','Middle',NULL,NULL),
(24,'DD0024','3198123456789123','Bruno Mars','89.315.322.0-113.111','089233821991','bruno@gmail.com','Papua','DD0024_.jpg','Direct Exportir','Verification','2022-04-14','High',NULL,NULL),
(25,'DD0025','3198123456789123','Marcell ','89.315.322.0-113.111','085391384245','marcel@gmail.com','Kalimantan Timur','DD0025_.jpg','Diaspora','Verification','2022-04-14','High',NULL,NULL),
(26,'DD0026','3198123456789123','Camilla','89.315.322.0-113.111','08212322111','camilla@gmail.com','Sulawesi Tenggara','DD0026_.jpg','Buyer','Verification','2022-04-14','Middle',NULL,NULL),
(27,'DD0027','3198123456789123','Dinda Adianti','89.315.322.0-113.11','081908290908','dinda@gmail.com','Jawa Tengah','DD0027_.png','Indirect Exportir','Verification','2022-04-19','Middle',NULL,NULL);

/*Table structure for table `data_usaha` */

DROP TABLE IF EXISTS `data_usaha`;

CREATE TABLE `data_usaha` (
  `nib` varchar(50) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `domisili_perusahaan` varchar(50) NOT NULL,
  `email_perusahaan` varchar(50) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `komoditi_usaha` varchar(50) NOT NULL,
  `skala` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `npwp_perusahaan` varchar(50) NOT NULL,
  `no_siup` varchar(50) NOT NULL,
  `no_peb` varchar(50) NOT NULL,
  `no_akta` varchar(50) NOT NULL,
  `kd_data_diri` varchar(20) NOT NULL,
  PRIMARY KEY (`nib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_usaha` */

insert  into `data_usaha`(`nib`,`nama_usaha`,`domisili_perusahaan`,`email_perusahaan`,`website`,`bidang_usaha`,`komoditi_usaha`,`skala`,`satuan`,`npwp_perusahaan`,`no_siup`,`no_peb`,`no_akta`,`kd_data_diri`) values 
('1212112256709','PT. Aku dan Dia ','Banten','aku@gmail.com','aku.co.id','Tesktill','Pembuatan karpet','10000','Centimeter (Cm)','1267110225611924','12723','12239','12457','DD0009'),
('1278112256709','PT. Cuma Satu','Papua Barat','cumacuma@gmail.com','cumacuma.web','Pertanian dan Perkebunan','Pupuk','11000','Hektar (Ha','1278110225611924','12783','12789','12787','DD0010'),
('2312112256709','PT. Boneka ','Bengkulu','boneka@gmail.com','boneka.web.id','Buah dan Sayur','Cabe','9000','Gram (Gr)','2567110225611924','09723','78239','23457','DD0008'),
('2312112256724','PT. Suka Daya Maju ','Gorontalo','sukamaju@gmail.com','sukamaju.com','Tesktill','Pembuatan baju','8000','Meter Square (M²)','2567110225621924','21122','21122','21122','DD0007'),
('2312113456721','PT. Sinar Laut ','Sumatra Selatan','sinarlaut@gmail.com','sinarlaut.com','Perikanan','Ikan salmon','5000','Gram (Gr)','2567110345621921','21121','21121','21121','DD0005'),
('2312113456724','PT. Laut Mitra Perkasa ','Jawa Barat','lautmitra@gmail.com','lautmitra.web.id','Pertanian dan Perkebunan','Daun teh','7000','Square Yard (Yd²)','2567110345621924','21123','21123','21123','DD0006'),
('5803901625670','PT. Bake','Daerah Istimewa Yogyakarta','bake@gmail.com','bake.web.id','Tesktill','Pembuatan bantal','23000','Square Foot (Ft²)','6817610025611924','93871','39113','88201','DD0022'),
('5813701625070','PT. Happy ','Kalimantan Selatan','happy@gmail.com','happy.id','Tesktill','Pembuatan bantal','26000','Square Yard (Yd²)','6827010025211924','99814','35627','81069','DD0025'),
('5813901625070','PT. Happy ','Jambi','happy@gmail.com','happy.id','Pertanian dan Perkebunan','Pembuatan bantal','25000','Yard (Yd)','6827610025211924','99811','35623','81061','DD0024'),
('5813901625670','PT. Happy ','Kalimantan Utara','happy@gmail.com','happy.id','Tesktill','Pembuatan bantal','24000','Kilometer Square (Km²)','6827610025611924','93811','39123','88761','DD0023'),
('5814101625070','PT. Happy ','Lampung','happy@gmail.com','happy.id','Tesktill','Pembuatan bantal','28000','Centimeter (Cm)','6820911025211924','99211','35651','81071','DD0026'),
('9082123456789','PT. Abadi Jaya','Banten','abadi@gmail.com','abadijaya.web.id','Tesktill','HANDYCRAFT & HOME DÉCOR','111','Milimeter (Mm)','45.67.890.3-567.893','3456','123456','12345','DD0027'),
('9312113456781','PT. Graha Pesisir ','Jambi','graha@gmail.com','graha.co.id','Buah dan Sayur','Stroberi','4000','Ons (Oz)','9567110345678921','91145','91677','91190','DD0004'),
('9803501225670','PT. The Boyz ','Jawa Timur','boyz@gmail.com','boyz.web.id','Perikanan','Kepiting','20000','Foot (Ft)','9817610225611924','23971','29712','28503','DD0019'),
('9803701225670','PT. Ikonic ','Jawa Barat','ikon@gmail.com','ikon.web.id','Pertanian dan Perkebunan','Daun teh','19000','Pound (Lb)','9817310225611924','23972','29711','28501','DD0018'),
('9803901225670','PT. Blibli Indonesia ','Banten','Blibli@gmail.com','blibli.com','Perikanan','Lobster','21000','Pound (Lb)','9817610225611924','23972','29713','28501','DD0020'),
('9803901625670','PT. Moladin ','Sulawesi Tenggara','mamodin@gmail.com','moladin.web.id','Tesktill','Pembuatan sarung','22000','Inch (In)','9817610025611924','23871','29113','28201','DD0021'),
('9813201225670','PT. Army Bomb ','Jawa Barat','army@gmail.com','army.web.id','Pertanian dan Perkebunan','Padi','16000','Kilo Gram (Kg)','9827310225611924','23876','29515','28100','DD0016'),
('9813701225670','PT. Palembang Teater ','Kepulauan Riau','teater@gmail.com','teater.com','Buah dan Sayur','Kelengkeng','17000','Square Yard (Yd²)','9827310225611924','23872','29511','28101','DD0017'),
('9833201225670','PT. Cileungsi','Jawa Tengah','bogor@gmail.com','darling.com','Buah dan Sayur','Naga','15000','Gram (Gr)','9837310225611924','23276','29315','28300','DD0014'),
('9834201225670','PT. Bandung ','Lampung','bandung@gmail.com','bandung.web.id','Perikanan','Ikan layur','14000','Pound (Lb)','9834010225611924','23259','29342','28322','DD0013'),
('9872012256709','PT. Memandang Jauh','Bangka Belitung','jauh@gmail.com','jauhsekali.com','Perikanan','Ikan mas','13000','Ons (Oz)','9872010225611924','23929','29322','28472','DD0012'),
('9878112256709','PT. Bunga Mawar ','Sulawesi Selatan','bungamawar@gmail.com','bungamawar.com','Pertanian dan Perkebunan','Kopi','12000','Ton (T)','9878110225611924','98783','98789','98787','DD0011');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

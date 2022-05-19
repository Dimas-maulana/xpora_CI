-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: xpora
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akun` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `region` varchar(15) NOT NULL,
  `commodity_category` varchar(50) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `create_date` date NOT NULL,
  `verifikasi` varchar(20) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akun`
--

LOCK TABLES `akun` WRITE;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` VALUES (1,'Mandin Penyaluhan','asasapo','Indonesia','asasasa','Seller','2022-03-11','Verified','123.png'),(2,'modal_test','asasapoasasa','Malaysia','asasasa','Buyer','2022-03-11','Not Verified','37_Short_Motivational_Quotes_To_Light_Up_Your_Fire_In_6_Words.jpg');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assigned_officer`
--

DROP TABLE IF EXISTS `assigned_officer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assigned_officer` (
  `id_officer` int(11) NOT NULL AUTO_INCREMENT,
  `negara` varchar(45) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `id_usaha` int(10) NOT NULL,
  PRIMARY KEY (`id_officer`),
  KEY `id_usaha` (`id_usaha`),
  CONSTRAINT `assigned_officer_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assigned_officer`
--

LOCK TABLES `assigned_officer` WRITE;
/*!40000 ALTER TABLE `assigned_officer` DISABLE KEYS */;
INSERT INTO `assigned_officer` VALUES (2,'indonesia','jakarta','cba',2),(6,'Indonesia','jakarta','WIra',1);
/*!40000 ALTER TABLE `assigned_officer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clb`
--

DROP TABLE IF EXISTS `clb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clb` (
  `attempt` varchar(10) NOT NULL,
  `kd_data_diri` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `type_of_rest` varchar(20) NOT NULL,
  `result` varchar(100) NOT NULL,
  `recomendation` varchar(20) NOT NULL,
  `follow_up_recomendation` varchar(20) NOT NULL,
  `number_attempt` int(11) DEFAULT 0,
  PRIMARY KEY (`attempt`),
  KEY `kd_data_diri` (`kd_data_diri`),
  CONSTRAINT `clb_ibfk_1` FOREIGN KEY (`kd_data_diri`) REFERENCES `data_diri` (`kd_data_diri`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clb`
--

LOCK TABLES `clb` WRITE;
/*!40000 ALTER TABLE `clb` DISABLE KEYS */;
INSERT INTO `clb` VALUES ('CLB01','DD0002','2020-04-12','Quick Test','Pebisnis Kembang','inspirasi','none',0),('CLB010','DD0002','2020-04-12','Quick Test','Pebisnis Kembang','inspirasi','none',0),('CLB02','DD0002','2020-04-12','Quick Test','Pebisnis Kembang','inspirasi','none',0),('CLB03','DD0002','2020-04-12','Quick Test','Pebisnis Kembang','inspirasi','none',0),('CLB04','DD0002','2022-04-12','Quick test','Pebisnis Kembang','inspirasi','none',0),('CLB05','DD0003','2020-04-12','Quick Test','Pebisnis Kembang','inspirasi','none',0),('CLB06','DD0003','2022-04-12','Quick test','Pebisnis Kembang','inspirasi','none',0),('CLB07','DD0003','2020-04-12','Quick Test','Pebisnis Kembang','inspirasi','none',0),('CLB08','DD0003','2022-04-12','Quick test','Pebisnis Kembang','inspirasi','none',0),('CLB09','DD0003','2020-04-12','Quick Test','Pebisnis Kembang','inspirasi','none',0);
/*!40000 ALTER TABLE `clb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commodities_post`
--

DROP TABLE IF EXISTS `commodities_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commodities_post` (
  `id_commoditi` int(15) NOT NULL AUTO_INCREMENT,
  `nama_komoditas` varchar(50) NOT NULL,
  `qty_komoditas` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `buyer` varchar(45) NOT NULL,
  `seller` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  PRIMARY KEY (`id_commoditi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commodities_post`
--

LOCK TABLES `commodities_post` WRITE;
/*!40000 ALTER TABLE `commodities_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `commodities_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_buyer`
--

DROP TABLE IF EXISTS `data_buyer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_buyer` (
  `Id_Buyer` int(255) NOT NULL,
  `nama_perusahaan` varchar(500) NOT NULL,
  `Nama_Buyer` varchar(500) NOT NULL,
  `Kontak` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Negara` varchar(500) NOT NULL,
  `Alamat` varchar(500) NOT NULL,
  PRIMARY KEY (`Id_Buyer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_buyer`
--

LOCK TABLES `data_buyer` WRITE;
/*!40000 ALTER TABLE `data_buyer` DISABLE KEYS */;
INSERT INTO `data_buyer` VALUES (101,'JABER AL GROUP','Hanan Al Jaber','+971 4 224 4224','Hananjaber@arab-email.com','Dubai','-'),(121,'STATE GRID INC','Tom Hanks','+14081238967','hanks_tom@mail.co.us','USA','-'),(243,'IBRARCHO COMPANY','Muhammad Ibrahim','+966001966','ibrahim77@arab-email.com','Uni Emirates Arab','-'),(247,'THE CATERPILLAR','Catherine Halderman','+33 1 4503 0760','halderman91@mail.com.fr','France','-'),(298,'GO GERMANY CORP','Tim Shaecker','+4900149892','tim_june@yahoo.de','German','-'),(321,'THE ACCENTURE','Kim Mingyu','+82123456789','min_gyu@mail.co.kr','Korea Selatan','-'),(366,'AICRM INCORP','Louis T','+109673452','louiss_16@mail.co.us','USA','-'),(455,'UNITED CORPORATE','Issabella Hadid','+14526178999\r\n','bellahadid@mail.co.us','USA','-'),(623,'THE HOUSE OF WORLD','Jacob T','+49980055555\r\n','jacobrtt@mail.de','German','-'),(695,'BLACK ROCK INC','Adora ','+852 2120 4688','adora91@mail.com.hk','Hongkong','-'),(746,'WHEELS FARGO CORPORATE','Habibie Khair','+96612345678','habibiekhair@mail.com.sa','Saudi Arabia','-'),(888,'GOLDMAN GROUP','Fabio Daud','+447260837818','daud_fabio@mail.co.uk','United Kingdom','-');
/*!40000 ALTER TABLE `data_buyer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_diri`
--

DROP TABLE IF EXISTS `data_diri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_diri`
--

LOCK TABLES `data_diri` WRITE;
/*!40000 ALTER TABLE `data_diri` DISABLE KEYS */;
INSERT INTO `data_diri` VALUES (111,'DD0001','1234567891234567','dinda','123123456712345','081234567890','s@gmail.com','Banten','DD0001_2.png','Diaspora','Verification','2022-04-04',NULL,NULL,NULL),(112,'DD0002','78465879027','ALI ALATAS','90273599','081278690377','alpanus@gmail.com','Jakarta','DD0002_2.png','Direct exportir ','Verification','2022-05-20',NULL,NULL,NULL),(113,'DD0003','3745675389','WINSTON TANDAJAYA','2819362890','08789920938','foodbydetect@gmail.com','Yogyakarta','DD0003_2.png','Indirect Exportir','Verification','2022-03-16',NULL,NULL,NULL),(114,'DD0004','8892036577','SARA FAJRIA','847907487','08579465789','dayautama@gmail.com','Surabaya','DD0004_2.png','Direct exportir ','Verification','2022-06-09',NULL,NULL,NULL),(115,'DD0005','2452635666','GAVIN ALEXANDER','456474647','087856473665','grafindoindonesia@gmail.com','Padang','DD0005_2.png','Indirect Exportir','Verification','2022-08-17',NULL,NULL,NULL),(116,'DD0006','3546782913','KRISNA G','3758757','0812567857','krisjaya@gmail.com','Jakarta','DD0006_2.png','Direct exportir ','Verification','2022-07-12',NULL,NULL,NULL),(117,'DD0007','25711354684','MIKHAIL SIBBALD','6758699','08344562788','asiaanargo@gmail.com','Jakarta','DD0007_2.png','Indirect Exportir','Verification','2022-08-11',NULL,NULL,NULL);
/*!40000 ALTER TABLE `data_diri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pembuatan_rekening`
--

DROP TABLE IF EXISTS `data_pembuatan_rekening`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pembuatan_rekening` (
  `id_pembuatan` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `nama_nasabah` varchar(500) NOT NULL,
  `jenis_rek` varchar(255) NOT NULL,
  `saldo` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `tgl_pembukaan_rek` date NOT NULL,
  `id_usaha` int(10) DEFAULT NULL,
  `cif` varchar(45) DEFAULT NULL,
  `lc` varchar(45) DEFAULT NULL,
  `pict` varchar(45) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`no_rek`),
  KEY `id_usaha` (`id_usaha`),
  CONSTRAINT `data_pembuatan_rekening_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pembuatan_rekening`
--

LOCK TABLES `data_pembuatan_rekening` WRITE;
/*!40000 ALTER TABLE `data_pembuatan_rekening` DISABLE KEYS */;
INSERT INTO `data_pembuatan_rekening` VALUES ('087BN','1874562873','GAVIN ALEXANDER','Giro','90000000','450000','2020-04-10',1,'1029301284','123','Giro_','Giro_'),('087BD','1874562875','AVAN KANTONA','Taplus bisnis','90000000','450000','2022-04-10',NULL,NULL,NULL,NULL,NULL),('293FO','3251675467','KRISNA G','Giro','175000000','2187500','2022-01-19',NULL,NULL,NULL,NULL,NULL),('101AU','3278564453','M. ABDULLAH','Taplus Bisnis','150000000','1500000','2022-03-02',NULL,NULL,NULL,NULL,NULL),('356CA','7186733510','FEBRIAN B','Giro','250000000','3125000','2020-05-14',NULL,NULL,NULL,NULL,NULL),('492GT','7762562711','ALI ALATAS','Giro','130000000','65000','2020-01-02',NULL,NULL,NULL,NULL,NULL),('562RK','8944511009','MIKHAIL SIBBALD','Giro','75000000','375000','2022-04-20',NULL,NULL,NULL,NULL,NULL),('101AR','99817839080','M. RIZAL','Taplus Bisnis','70000000','700000','2022-02-02',NULL,NULL,NULL,NULL,NULL),('101AJ','99817839087','YUSUF ABDULLAH','Taplus Bisnis','100000000','1000000','2020-01-02',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `data_pembuatan_rekening` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pengajuan_komodity`
--

DROP TABLE IF EXISTS `data_pengajuan_komodity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pengajuan_komodity` (
  `No` int(255) NOT NULL,
  `Created_at` date NOT NULL,
  `Komoditas` varchar(255) NOT NULL,
  `Jumlah_pengajuan` int(255) NOT NULL,
  `Unit` varchar(255) NOT NULL,
  `Target_Pasar` varchar(255) NOT NULL,
  `Deskripsi` varchar(1500) NOT NULL,
  `Nama_Pengaju` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nama_Perusahaan` varchar(255) NOT NULL,
  `Sektor_Perusahaan` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`No`),
  KEY `Komoditas` (`Komoditas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pengajuan_komodity`
--

LOCK TABLES `data_pengajuan_komodity` WRITE;
/*!40000 ALTER TABLE `data_pengajuan_komodity` DISABLE KEYS */;
INSERT INTO `data_pengajuan_komodity` VALUES (1,'2022-05-18','Coconut Oil',10,'Ton','USA','-','Ariya K','-','-','-','-','-'),(2,'2022-01-07','Handicraft',22,'Meter','Internasional','-','Krisna G','-','-','-','-','-'),(3,'2022-08-10','Ikan Cumi',10,'Meter','Internasional','-','Krisna G','-','-','-','-','-'),(4,'2022-07-25','Kayu Sengon',15,'Ton','Eropa','-','Avan Kantona','-','-','-','-','-'),(5,'2022-10-05','Kerajinan kayu dan alumunium',10,'Ton','Asia','-','Ali Alatas','-','-','-','-','-'),(6,'2022-09-22','Kerajinan tangan',5,'Ton','Eropa','-','Winston Tandjaya','-','-','-','-','-'),(7,'2022-04-06','Kopi Arabica',10,'Ton','Asia','-','Fabian J','-','-','-','-','-'),(8,'2022-02-24','Makanan Minuman Produk Indonesia',20,'Ton','Internasional','-','Winston tandjaya','-','-','-','-','-'),(9,'2022-06-23','Mebel kayu Jati',7,'Ton','Eropa','-','Ali Alatas','-','-','-','-','-'),(10,'2022-02-17','Perdagangan ritel - Garment',7,'Ton','Internasional','-','Gavin Alexander','-','-','-','-','-'),(11,'2022-08-10','Rumput Laut',5,'Ton','Eropa','-','Andreas Wiratmaja','-','-','-','-','-'),(12,'2022-07-21','Ubud Woven',15,'Ton','Eropa','-','Yusuf Abdullah','-','-','-','-','-'),(13,'2022-03-16','Wooden Material',5,'Ton','Eropa','-','Fadila','-','-','-','-','-'),(14,'2022-12-08','Wooden Material',10,'Ton','Internasional','-','Ali Alatas','-','-','-','-','-'),(15,'2022-11-15','Mebel kayu jati',10,'Ton','Eropa','-','Krisna G','-','-','-','-','-'),(16,'2022-03-24','Coconut oil',10,'Ton','Eropa','-','Guntur','-','-','-','-','-'),(17,'2022-01-27','-',20,'-','-','-','-','-','-','-','-','-'),(18,'2022-01-13','-',5,'-','-','-','-','-','-','-','-','-'),(19,'2022-01-06','-',5,'-','-','-','-','-','-','-','-','-'),(20,'2022-03-17','-',5,'-','-','-','-','-','-','-','-','-'),(21,'2022-03-23','-',6,'-','-','-','-','-','-','-','-','-'),(22,'2022-03-10','-',8,'-','-','-','-','-','-','-','-','-'),(23,'2022-03-02','-',4,'-','-','-','-','-','-','-','-','-'),(24,'2022-04-14','-',5,'-','-','-','-','-','-','-','-','-'),(25,'2022-04-28','-',10,'-','-','-','-','-','-','-','-','-'),(26,'2022-04-04','-',7,'-','-','-','-','-','-','-','-','-'),(27,'2022-04-15','-',8,'-','-','-','-','-','-','-','-','-'),(28,'2022-05-19','-',8,'-','-','-','-','-','-','-','-','-'),(29,'2022-05-02','-',7,'-','-','-','-','-','-','-','-','-'),(30,'2022-05-25','-',8,'-','-','-','-','-','-','-','-','-'),(31,'2022-05-18','-',9,'-','-','-','-','-','-','-','-','-'),(32,'2022-06-09','-',10,'-','-','-','-','-','-','-','-','-');
/*!40000 ALTER TABLE `data_pengajuan_komodity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pinjam`
--

DROP TABLE IF EXISTS `data_pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pinjam` (
  `id_pinjam` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `nama_nasabah` varchar(500) NOT NULL,
  `produk_pinjam` varchar(500) NOT NULL,
  `saldo_pinjam` varchar(500) NOT NULL,
  `suku_bunga` varchar(255) NOT NULL,
  `profit` varchar(500) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  PRIMARY KEY (`id_pinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pinjam`
--

LOCK TABLES `data_pinjam` WRITE;
/*!40000 ALTER TABLE `data_pinjam` DISABLE KEYS */;
INSERT INTO `data_pinjam` VALUES ('216','3251675467','KRISNA G','KUR','50000000','6%','3000000','2022-02-02'),('231','1874562875','AVAN KANTONA','BWU','50000000','12,5%','6250000','2022-06-08'),('677','99817839080','M. RIZAL','BWU','175000000','12,5%','21875000','2022-03-09'),('768','3278564453','M. ABDULLAH','BWU','200000000','12,5%','25000000','2022-04-20'),('786','7186733510','FEBRIAN B','KUR','75000000','6%','3000000','2022-07-14'),('873','1874562873','GAVIN ALEXANDER','KUR','100000000','6%','6000000','2022-01-10'),('993','77762562711','ALI ALATAS','KUR','250000000','6%','15000000','2022-05-17');
/*!40000 ALTER TABLE `data_pinjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_request_komodity`
--

DROP TABLE IF EXISTS `data_request_komodity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_request_komodity` (
  `no_komoditas` int(50) NOT NULL,
  `komoditas` varchar(255) NOT NULL,
  `request_total` varchar(255) NOT NULL,
  `available_quantity_komoditas` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_request_komodity`
--

LOCK TABLES `data_request_komodity` WRITE;
/*!40000 ALTER TABLE `data_request_komodity` DISABLE KEYS */;
INSERT INTO `data_request_komodity` VALUES (1,'Coconut Oil','300 Ton','100 Ton','Belum terpenuhi'),(5,'Kerajinan kayu dan alumunium','500 Ton','800 Ton','Bisa Terpenuhi'),(7,'Kopi Arabica','100 Ton','500 Ton','Bisa Terpenuhi');
/*!40000 ALTER TABLE `data_request_komodity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_seller`
--

DROP TABLE IF EXISTS `data_seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_seller` (
  `Id_Perusahaan` varchar(255) NOT NULL,
  `Nama_Perusahaan` varchar(500) NOT NULL,
  `Nama_Owner` varchar(500) NOT NULL,
  `Kota` varchar(500) NOT NULL,
  `Nama_Komodity` varchar(500) NOT NULL,
  `Jml_kapasitas_produksi_(Bulan)` varchar(11) NOT NULL,
  `Kontak` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Status` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_Perusahaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_seller`
--

LOCK TABLES `data_seller` WRITE;
/*!40000 ALTER TABLE `data_seller` DISABLE KEYS */;
INSERT INTO `data_seller` VALUES ('098HGU','HARAPAN JAYA INTI UTAMA. CORP','Ariya K','Jakarta','Coconut Oil','100 Kg','08123402938','Ariya.Kieputra@gmail.com','Indirect Exportir'),('121DETR','PT. DETECHT INDONESIA','Winston Tandjaya','Yogyakarta','Makanan Minuman Produk Indonesia','200 Kg','08789027648','foodbydetect@gmail.com','Direct Eksportir'),('225SNR','PT. SINARMAS JAYA INTI','Yusuf Abdullah','Bali','Ubud Woven','200 Kg','08789311266','sinarmasjayainti@gmail.com','Direct eksportir'),('303DUV','PT DAYA UTAMA INDONUSA','Sara Fajria','Surabaya','Mebel kayu jati','200 Ton','08789033344','dayautama@gmail.com','Indirect Exportir'),('323NSA','PT. INDONUSA FOOD','Fabian J','Surabaya','Kopi Arabica','300 Kg','081207784390','foodnusa@gmail.com','Direct Eksportir'),('345KRS','PT. KRIS JAYA','Krisna G','Jakarta','Handicraft','100 Kg','08528976222','krisjaya@gmail.com','Indirect eksportir'),('411UTK','PT. UTK BERAS NASIONAL','Febrian B','Bandung','Beras Pangan','200 Ton','08817672826','utkberaspangan@gmail.com','Direct eksportir'),('509SFR','PT ASIA ANARGO ABADI','Mikhail sibbald','Jakarta','Perdagangan ritel - garment','200 Ton','0812907689','asiaanargo@gmail.com','Indirect eksportir'),('666GFH','PT. GRAFINDO JAYA INDONESIA','Gavin Alexander','Padang','Perdagangan ritel - garment','100 Ton','08128906721','grafindoindonesia@gmail.com','Direct eksportir'),('709UIF','PT. ANGKASA JAYA','Fadila','Samarinda','Wooden Material','250 Ton','08780978309','jayaangkasa@gmail.com','Direct eksportir'),('777IOT','PT. ALIZAH PACIFIC INDONESIA','Ali Alatas','Jakarta','Mebel kayu jati','250 Ton','081290987890','alpanus@gmail.com','Direct Eksportir');
/*!40000 ALTER TABLE `data_seller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_transaksi`
--

DROP TABLE IF EXISTS `data_transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_transaksi` (
  `Id_Transaksi` int(11) NOT NULL,
  `Id_Perusahaan` varchar(500) NOT NULL,
  `Id_Buyer` int(11) NOT NULL,
  `Nama_Komodity` varchar(500) NOT NULL,
  `Metode_Bayar` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Total_Bayar` int(11) NOT NULL DEFAULT 0,
  `Potongan` varchar(255) NOT NULL,
  `Profit` int(11) NOT NULL DEFAULT 0,
  `Tgl_Transaksi` date NOT NULL,
  `Keterangan` varchar(500) NOT NULL,
  PRIMARY KEY (`Id_Transaksi`),
  KEY `data_transaksi_ibfk_1` (`Id_Buyer`),
  CONSTRAINT `data_transaksi_ibfk_1` FOREIGN KEY (`Id_Buyer`) REFERENCES `data_buyer` (`Id_Buyer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_transaksi`
--

LOCK TABLES `data_transaksi` WRITE;
/*!40000 ALTER TABLE `data_transaksi` DISABLE KEYS */;
INSERT INTO `data_transaksi` VALUES (1,'345KRS',247,'Handicraft','LC','Ton',100000000,'0,25%',250000,'2022-01-12','-'),(2,'666GFH',101,'Perdagangan Ritel - Garmen','LC','Ton',270000000,'0,25%',675000,'2022-02-22','-'),(3,'098HGU',321,'Coconut oil','LC','Kg',100000000,'0,25%',250000,'2022-03-16','-'),(4,'303DUV',623,'Mebel kayu jati','LC','Ton',350000000,'0,25%',875000,'2022-04-08','-'),(5,'225SNR',121,'Ubud Woven','LC','Kg',350000000,'0,25%',875000,'2022-05-27','-'),(6,'509SFR',298,'Perdagangan Ritel - Garmen','LC','Ton',200000000,'0,25%',500000,'2022-06-03','-'),(7,'323NSA',746,'Kopi Arabica','LC','Kg',300000000,'0,25%',750000,'2022-07-18','-'),(8,'709UIF',243,'Wooden Material','LC','Ton',250000000,'0,25%',625000,'2022-08-17','-'),(9,'777IOT',888,'Mebel kayu jati','LC','Ton',500000000,'0,25%',1250000,'2022-09-15','-'),(10,'777IOT',455,'Mebel kayu jati','LC','Ton',450000000,'0,25%',1125000,'2022-10-13','-'),(11,'121DETR',695,'Makanan Minuman Produk Indonesia','LC','Kg',300000000,'0,25%',750000,'2022-11-16','-'),(12,'323NSA',746,'Kopi Arabica','LC','Kg',200000000,'0,25%',500000,'2022-12-20','-'),(13,'323NSA',746,'Kopi Arabica','LC','Kg',450000000,'0,25%',1125000,'2022-12-22','-');
/*!40000 ALTER TABLE `data_transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_usaha`
--

DROP TABLE IF EXISTS `data_usaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_usaha` (
  `id_usaha` int(10) NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(50) NOT NULL,
  `domisili_perusahaan` varchar(50) NOT NULL,
  `email_perusahaan` varchar(70) NOT NULL,
  `website` text NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `komoditi_usaha` varchar(50) NOT NULL,
  `skala` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `nib` varchar(50) NOT NULL,
  `npwp_perusahaan` varchar(50) NOT NULL,
  `no_siup` varchar(50) NOT NULL,
  `no_peb` varchar(50) NOT NULL,
  `no_akta` varchar(50) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `qyc_nib` tinyint(4) NOT NULL,
  `qyc_npwp` tinyint(4) NOT NULL,
  `qyc_siup` tinyint(4) NOT NULL,
  `qyc_peb` tinyint(4) NOT NULL,
  `qyc_akta` tinyint(4) NOT NULL,
  `qyc_domisili` tinyint(4) NOT NULL,
  `foto_nib` varchar(500) DEFAULT NULL,
  `foto_npwp` varchar(500) DEFAULT NULL,
  `foto_siup` varchar(500) DEFAULT NULL,
  `foto_peb` varchar(500) DEFAULT NULL,
  `foto_akta` varchar(500) DEFAULT NULL,
  `foto_domisili` varchar(500) DEFAULT NULL,
  `kd_data_diri` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_usaha`
--

LOCK TABLES `data_usaha` WRITE;
/*!40000 ALTER TABLE `data_usaha` DISABLE KEYS */;
INSERT INTO `data_usaha` VALUES (1,'asasapo','bandung','jpem@gmail.comaas','asasasa','sas','asasasa','sds','cm','123','12121','11212081','11212081','11212081',1,1,1,1,1,1,1,'123_.jpg','121211212121_.jpg','11212081_.jpg','11212081_.jpg','11212081_.jpg','bandung_.jpg',NULL),(2,'asasapoasasa','popipiasasaqq','jpem@gmail.coma','asasasa','sasasa','asasasa','sds','cm','112120','112120','112120','112120','112120',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'PT. Aku dan Dia ','Banten','aku@gmail.com','aku.co.id','Tesktill','Pembuatan karpet','10000','Centimeter (Cm)','1212112256709','1267110225611924','12723','12239','12457',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0009'),(4,'PT. Cuma Satu','Papua Barat','cumacuma@gmail.com','cumacuma.web','Pertanian dan Perkebunan','Pupuk','11000','Hektar (Ha','1278112256709','1278110225611924','12783','12789','12787',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0010'),(5,'PT. Cahaya Pelita Nusantara ','Jawa Barat','cahayapelita@gmail.com','cahaya.com','Perikanan','Udang','3000','Ton (T)','1312113456781','4567110345678921','11145','31167','61190',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0003'),(6,'PT. Makmur Sejahtera ','DKI Jakarta','makmur@gmail.com','makmur.co.id','Tesktill','Sablon','2000','Meter (M)','1312123456781','4567890345678921','1234','34567','67890',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0002'),(7,'PT. Boneka ','Bengkulu','boneka@gmail.com','boneka.web.id','Buah dan Sayur','Cabe','9000','Gram (Gr)','2312112256709','2567110225611924','09723','78239','23457',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0008'),(8,'PT. Suka Daya Maju ','Gorontalo','sukamaju@gmail.com','sukamaju.com','Tesktill','Pembuatan baju','8000','Meter Square (M²)','2312112256724','2567110225621924','21122','21122','21122',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0007'),(9,'PT. Sinar Laut ','Sumatra Selatan','sinarlaut@gmail.com','sinarlaut.com','Perikanan','Ikan salmon','5000','Gram (Gr)','2312113456721','2567110345621921','21121','21121','21121',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0005'),(10,'PT. Laut Mitra Perkasa ','Jawa Barat','lautmitra@gmail.com','lautmitra.web.id','Pertanian dan Perkebunan','Daun teh','7000','Square Yard (Yd²)','2312113456724','2567110345621924','21123','21123','21123',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0006'),(11,'PT. Bake','Daerah Istimewa Yogyakarta','bake@gmail.com','bake.web.id','Tesktill','Pembuatan bantal','23000','Square Foot (Ft²)','5803901625670','6817610025611924','93871','39113','88201',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0022'),(12,'PT. Happy ','Kalimantan Selatan','happy@gmail.com','happy.id','Tesktill','Pembuatan bantal','26000','Square Yard (Yd²)','5813701625070','6827010025211924','99814','35627','81069',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0025'),(13,'PT. Happy ','Jambi','happy@gmail.com','happy.id','Pertanian dan Perkebunan','Pembuatan bantal','25000','Yard (Yd)','5813901625070','6827610025211924','99811','35623','81061',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0024'),(14,'PT. Happy ','Kalimantan Utara','happy@gmail.com','happy.id','Tesktill','Pembuatan bantal','24000','Kilometer Square (Km²)','5813901625670','6827610025611924','93811','39123','88761',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0023'),(15,'PT. Happy ','Lampung','happy@gmail.com','happy.id','Tesktill','Pembuatan bantal','28000','Centimeter (Cm)','5814101625070','6820911025211924','99211','35651','81071',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0026'),(16,'PT. Abadi Jaya ','DKI Jakarta','abadi@gmail.com','abadijaya.web.id','Pertanian dan Perkebunan','Tomat','111','Kilo Gram (Kg)','9082123456789','4567890345678932','23456','123456','12345',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0001'),(17,'PT. Graha Pesisir ','Jambi','graha@gmail.com','graha.co.id','Buah dan Sayur','Stroberi','4000','Ons (Oz)','9312113456781','9567110345678921','91145','91677','91190',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0004'),(18,'PT. The Boyz ','Jawa Timur','boyz@gmail.com','boyz.web.id','Perikanan','Kepiting','20000','Foot (Ft)','9803501225670','9817610225611924','23971','29712','28503',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0019'),(19,'PT. Ikonic ','Jawa Barat','ikon@gmail.com','ikon.web.id','Pertanian dan Perkebunan','Daun teh','19000','Pound (Lb)','9803701225670','9817310225611924','23972','29711','28501',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0018'),(20,'PT. Blibli Indonesia ','Banten','Blibli@gmail.com','blibli.com','Perikanan','Lobster','21000','Pound (Lb)','9803901225670','9817610225611924','23972','29713','28501',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0020'),(21,'PT. Moladin ','Sulawesi Tenggara','mamodin@gmail.com','moladin.web.id','Tesktill','Pembuatan sarung','22000','Inch (In)','9803901625670','9817610025611924','23871','29113','28201',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0021'),(22,'PT. Army Bomb ','Jawa Barat','army@gmail.com','army.web.id','Pertanian dan Perkebunan','Padi','16000','Kilo Gram (Kg)','9813201225670','9827310225611924','23876','29515','28100',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0016'),(23,'PT. Palembang Teater ','Kepulauan Riau','teater@gmail.com','teater.com','Buah dan Sayur','Kelengkeng','17000','Square Yard (Yd²)','9813701225670','9827310225611924','23872','29511','28101',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0017'),(24,'PT. Cileungsi','Jawa Tengah','bogor@gmail.com','darling.com','Buah dan Sayur','Naga','15000','Gram (Gr)','9833201225670','9837310225611924','23276','29315','28300',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0014'),(25,'PT. Bandung ','Lampung','bandung@gmail.com','bandung.web.id','Perikanan','Ikan layur','14000','Pound (Lb)','9834201225670','9834010225611924','23259','29342','28322',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0013'),(26,'PT. Memandang Jauh','Bangka Belitung','jauh@gmail.com','jauhsekali.com','Perikanan','Ikan mas','13000','Ons (Oz)','9872012256709','9872010225611924','23929','29322','28472',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0012'),(27,'PT. Bunga Mawar ','Sulawesi Selatan','bungamawar@gmail.com','bungamawar.com','Pertanian dan Perkebunan','Kopi','12000','Ton (T)','9878112256709','9878110225611924','98783','98789','98787',0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'DD0011');
/*!40000 ALTER TABLE `data_usaha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ekspansi_comodities`
--

DROP TABLE IF EXISTS `ekspansi_comodities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ekspansi_comodities` (
  `comodity_posted_id` int(100) NOT NULL,
  `comodity_name` varchar(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `comodities_id` varchar(50) NOT NULL,
  `exwork_price` varchar(75) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(75) NOT NULL,
  `application` int(50) NOT NULL,
  `create_date` date NOT NULL,
  `hs_code` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ekspansi_comodities`
--

LOCK TABLES `ekspansi_comodities` WRITE;
/*!40000 ALTER TABLE `ekspansi_comodities` DISABLE KEYS */;
INSERT INTO `ekspansi_comodities` VALUES (101,'Coconut Oil','DD0011','1A','USD 1200 ','Pertanian dan Perkebunan','Waiting for Approval',22,'2022-01-02','ASO9920'),(102,'Handicraft','DD0006','2A','USD 1000 ','Seni dan Kerajinan tangan','Posted',20,'2022-02-09','ASO9921'),(103,'Kerajinan Kayu dan Alumunium','DD0002','5A','USD 1500 ','Seni dan Kerajinan tangan','Draft',23,'2022-03-16','ASO9923'),(104,'Perdagangan ritel dan garment','DD0005','10A','USD 1400 ','Gaya dan Tekstil','Un-Posted',24,'2022-04-06','ASO9924');
/*!40000 ALTER TABLE `ekspansi_comodities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ekspansi_matchmaking`
--

DROP TABLE IF EXISTS `ekspansi_matchmaking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ekspansi_matchmaking` (
  `matchmaking_id` varchar(100) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `buyer_id` varchar(20) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `comodity` varchar(100) NOT NULL,
  `request_total` varchar(50) NOT NULL,
  `available_quantity_comoditas` varchar(50) NOT NULL,
  `status` varchar(75) NOT NULL,
  `payment_system` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `application_date` date NOT NULL,
  PRIMARY KEY (`matchmaking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ekspansi_matchmaking`
--

LOCK TABLES `ekspansi_matchmaking` WRITE;
/*!40000 ALTER TABLE `ekspansi_matchmaking` DISABLE KEYS */;
INSERT INTO `ekspansi_matchmaking` VALUES ('A128801BAG','DD0006','DD0009','France','Handicraft','200 Ton','200 Ton','Done','LC','USD 120000','2022-02-09'),('BC6736FTYY','DD0011','DD0008','Saudi Arabia','Coconut Oil','200 Ton','200 Ton','On Progress','LC','USD 130000','2022-03-18'),('CK46378TWJ','DD0012','DD0016','Korea Selatan','Minyak Sawit (CPO','100 Ton','30 Ton','Cancel','LC','USD 120000','2022-01-27'),('FA2267DVQ9','DD0015','DD0010','Uni Emirates Arab','Wooden Material','300 Ton','250 Ton','Requested','LC','USD 150000','2022-01-04');
/*!40000 ALTER TABLE `ekspansi_matchmaking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ekspansi_request`
--

DROP TABLE IF EXISTS `ekspansi_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ekspansi_request` (
  `request_post_id` varchar(100) NOT NULL,
  `comodity_name` varchar(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `request_id` varchar(50) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(75) NOT NULL,
  `application` int(50) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`request_post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ekspansi_request`
--

LOCK TABLES `ekspansi_request` WRITE;
/*!40000 ALTER TABLE `ekspansi_request` DISABLE KEYS */;
INSERT INTO `ekspansi_request` VALUES ('1B','Coconut Oil','DD0008','CC181901','Saudi Arabia','Pertanian dan Perkebunan','Posted',22,'LC','2022-04-20'),('2B','Kopi Arabica','DD0009','CC181902','France','Makanan dan Minuman','Waiting for Approval',23,'LC','2022-06-08'),('3B','Mebel kayu Jati','DD0002','CC181903','Jakarta','Perlengkapan dan Furniture','Draft',24,'LC','2022-06-09'),('4B','Ubud Woven','DD0006','CC181904','Jakarta','Seni dan Kerajinan tangan','Un-Posted',25,'LC','2022-03-23');
/*!40000 ALTER TABLE `ekspansi_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspirasi`
--

DROP TABLE IF EXISTS `inspirasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inspirasi` (
  `id_inspirasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(75) NOT NULL,
  `kategory` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `progres` varchar(10) NOT NULL,
  `finish_date` date NOT NULL,
  PRIMARY KEY (`id_inspirasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspirasi`
--

LOCK TABLES `inspirasi` WRITE;
/*!40000 ALTER TABLE `inspirasi` DISABLE KEYS */;
INSERT INTO `inspirasi` VALUES (1,'Mandin Penyaluhan','asasapo','2','2022-03-11','30','2022-03-23');
/*!40000 ALTER TABLE `inspirasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kuantitas`
--

DROP TABLE IF EXISTS `kuantitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kuantitas` (
  `id_kuantitas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_komoditas` varchar(50) NOT NULL,
  `kuantitas` varchar(50) NOT NULL,
  `kestabilan_gradeone` varchar(50) NOT NULL,
  `kestabilan_gradetwo` varchar(50) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `foto_gradeone` varchar(500) DEFAULT NULL,
  `foto_gradetwo` varchar(500) DEFAULT NULL,
  `unit` varchar(45) NOT NULL,
  PRIMARY KEY (`id_kuantitas`),
  KEY `id_usaha` (`id_usaha`),
  CONSTRAINT `kuantitas_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kuantitas`
--

LOCK TABLES `kuantitas` WRITE;
/*!40000 ALTER TABLE `kuantitas` DISABLE KEYS */;
INSERT INTO `kuantitas` VALUES (1,'abc','40','a','1',1,'abc_.jpg',NULL,'KG'),(2,'a','a','a','',1,NULL,NULL,'KG'),(3,'lem','200','A','',1,NULL,NULL,'KG'),(4,'a','12','a','',1,'a_.jpg',NULL,'Kg'),(5,'a','aa','a','',1,'a_.jpg',NULL,'a'),(6,'abc','a','A','',1,'abc_.jpg',NULL,'kg');
/*!40000 ALTER TABLE `kuantitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kuantitas_image`
--

DROP TABLE IF EXISTS `kuantitas_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kuantitas_image` (
  `id_kuantitas_image` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) DEFAULT NULL,
  `id_kuantitas` int(11) DEFAULT NULL,
  `id_usaha` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kuantitas_image`),
  KEY `id_usaha` (`id_usaha`),
  KEY `id_kuantitas` (`id_kuantitas`),
  CONSTRAINT `kuantitas_image_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`),
  CONSTRAINT `kuantitas_image_ibfk_2` FOREIGN KEY (`id_kuantitas`) REFERENCES `kuantitas` (`id_kuantitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kuantitas_image`
--

LOCK TABLES `kuantitas_image` WRITE;
/*!40000 ALTER TABLE `kuantitas_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `kuantitas_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matchmaking_log`
--

DROP TABLE IF EXISTS `matchmaking_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matchmaking_log` (
  `id_matchmaking` int(11) NOT NULL AUTO_INCREMENT,
  `komoditas` varchar(50) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_usaha` int(11) DEFAULT NULL,
  `seller` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  PRIMARY KEY (`id_matchmaking`),
  KEY `id_usaha` (`id_usaha`),
  CONSTRAINT `matchmaking_log_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matchmaking_log`
--

LOCK TABLES `matchmaking_log` WRITE;
/*!40000 ALTER TABLE `matchmaking_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `matchmaking_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penggunaan_produk`
--

DROP TABLE IF EXISTS `penggunaan_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penggunaan_produk` (
  `id_produkbni` int(25) NOT NULL AUTO_INCREMENT,
  `tabungan_bisnis` varchar(30) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL,
  PRIMARY KEY (`id_produkbni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penggunaan_produk`
--

LOCK TABLES `penggunaan_produk` WRITE;
/*!40000 ALTER TABLE `penggunaan_produk` DISABLE KEYS */;
/*!40000 ALTER TABLE `penggunaan_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request_post`
--

DROP TABLE IF EXISTS `request_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request_post` (
  `id_request` int(15) NOT NULL AUTO_INCREMENT,
  `nama_komoditas` varchar(50) NOT NULL,
  `qty_komoditas` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tanggal_pembuatan` date DEFAULT NULL,
  PRIMARY KEY (`id_request`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request_post`
--

LOCK TABLES `request_post` WRITE;
/*!40000 ALTER TABLE `request_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `request_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat_ekspor`
--

DROP TABLE IF EXISTS `riwayat_ekspor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat_ekspor` (
  `id_riwayat` int(15) NOT NULL AUTO_INCREMENT,
  `komoditas` varchar(50) NOT NULL,
  `qty` varchar(15) NOT NULL,
  `frekuensi` varchar(20) NOT NULL,
  `incoterm` varchar(50) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `negara_tujuan` varchar(45) NOT NULL,
  `id_usaha` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_riwayat`),
  KEY `id_usaha` (`id_usaha`),
  CONSTRAINT `id_usaha` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_ekspor`
--

LOCK TABLES `riwayat_ekspor` WRITE;
/*!40000 ALTER TABLE `riwayat_ekspor` DISABLE KEYS */;
INSERT INTO `riwayat_ekspor` VALUES (1,'abc','2','sedang','a','ekspor','50','US',1),(2,'cde','3','sedang','b','ekspor','50','Canada',1),(3,'a','a','a','a','a','a','a',1),(4,'lem','12','sedang','US','jne','12','US',1);
/*!40000 ALTER TABLE `riwayat_ekspor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat_image`
--

DROP TABLE IF EXISTS `riwayat_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat_image` (
  `id_riwayat_image` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) DEFAULT NULL,
  `id_riwayat` int(15) NOT NULL,
  `id_usaha` int(10) NOT NULL,
  PRIMARY KEY (`id_riwayat_image`),
  KEY `id_riwayat` (`id_riwayat`),
  KEY `riwayat_image_ibfk_1` (`id_usaha`),
  CONSTRAINT `id_riwayat` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat_ekspor` (`id_riwayat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `riwayat_image_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_image`
--

LOCK TABLES `riwayat_image` WRITE;
/*!40000 ALTER TABLE `riwayat_image` DISABLE KEYS */;
INSERT INTO `riwayat_image` VALUES (2,'2label_.jpg',1,1),(3,'img2.jpg',2,1),(4,'img1.jpg',1,1);
/*!40000 ALTER TABLE `riwayat_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verifikasi_legalitas`
--

DROP TABLE IF EXISTS `verifikasi_legalitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verifikasi_legalitas` (
  `nib` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `no_siup` varchar(50) NOT NULL,
  `no_peb` varchar(50) NOT NULL,
  `no_akta` varchar(50) NOT NULL,
  PRIMARY KEY (`nib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verifikasi_legalitas`
--

LOCK TABLES `verifikasi_legalitas` WRITE;
/*!40000 ALTER TABLE `verifikasi_legalitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `verifikasi_legalitas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19  6:43:39

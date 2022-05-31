-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 08:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpora`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `region` varchar(15) NOT NULL,
  `commodity_category` varchar(50) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `create_date` date NOT NULL,
  `verifikasi` varchar(20) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`user_id`, `user_name`, `company_name`, `region`, `commodity_category`, `user_type`, `create_date`, `verifikasi`, `picture`) VALUES
(1, 'Mandin Penyaluhan', 'asasapo', 'Indonesia', 'asasasa', 'Seller', '2022-03-11', 'Verified', '123.png'),
(2, 'modal_test', 'asasapoasasa', 'Malaysia', 'asasasa', 'Buyer', '2022-03-11', 'Not Verified', '37_Short_Motivational_Quotes_To_Light_Up_Your_Fire_In_6_Words.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_officer`
--

CREATE TABLE `assigned_officer` (
  `id_officer` int(11) NOT NULL,
  `negara` varchar(45) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_officer`
--

INSERT INTO `assigned_officer` (`id_officer`, `negara`, `kota`, `nama`, `kd_data_diri`) VALUES
(2, 'indonesia', 'jakarta', 'cba', 'DD0001'),
(3, '', '', '', NULL),
(4, 'a', 'aa', 'a', 'DD0002'),
(5, 'a', 'a', 'a', NULL),
(6, 'a', 'a', 'a', NULL),
(7, 'a', 'a', 'a', NULL),
(8, '', '', '', NULL),
(9, '', '', '', NULL),
(10, 'a', 'a', 'a', NULL),
(11, 'abc', 'abc', 'ccc', 'DD0004'),
(12, '', '', '', 'DD0004'),
(13, '', '', '', 'DD0004'),
(14, '', '', '', 'DD0004'),
(15, '', '', '', 'DD0004'),
(16, '', '', '', 'DD0004'),
(17, 'a', 'a', 'a', 'DD0004'),
(18, '', '', '', 'DD0004'),
(19, '', '', '', 'DD0004');

-- --------------------------------------------------------

--
-- Table structure for table `clb`
--

CREATE TABLE `clb` (
  `attempt` varchar(10) NOT NULL,
  `kd_data_diri` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `type_of_rest` varchar(20) NOT NULL,
  `result` varchar(100) NOT NULL,
  `recomendation` varchar(20) NOT NULL,
  `follow_up_recomendation` varchar(20) NOT NULL,
  `number_attempt` int(100) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clb`
--

INSERT INTO `clb` (`attempt`, `kd_data_diri`, `date`, `type_of_rest`, `result`, `recomendation`, `follow_up_recomendation`, `number_attempt`, `nama_usaha`) VALUES
('CLB02', 'DD0002', '2020-04-12', 'Quick Test', 'Pebisnis Bunga', 'inspirasi', 'none', 20, 'PT Makmur Sejahtera'),
('CLB03', 'DD0003', '2022-04-12', 'Quick test', 'Pebisnis Sepatu', 'inspirasi', 'none', 5, 'PT Sejahtera selalu');

-- --------------------------------------------------------

--
-- Table structure for table `commodities_post`
--

CREATE TABLE `commodities_post` (
  `id_commoditi` int(15) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `qty_komoditas` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `buyer` varchar(45) NOT NULL,
  `seller` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_buyer`
--

CREATE TABLE `data_buyer` (
  `Id_Buyer` int(255) NOT NULL,
  `nama_perusahaan` varchar(500) NOT NULL,
  `Nama_Buyer` varchar(500) NOT NULL,
  `Kontak` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Negara` varchar(500) NOT NULL,
  `Alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buyer`
--

INSERT INTO `data_buyer` (`Id_Buyer`, `nama_perusahaan`, `Nama_Buyer`, `Kontak`, `Email`, `Negara`, `Alamat`) VALUES
(101, 'JABER AL GROUP', 'Hanan Al Jaber', '+971 4 224 4224', 'Hananjaber@arab-email.com', 'Dubai', '-'),
(121, 'STATE GRID INC', 'Tom Hanks', '+14081238967', 'hanks_tom@mail.co.us', 'USA', '-'),
(243, 'IBRARCHO COMPANY', 'Muhammad Ibrahim', '+966001966', 'ibrahim77@arab-email.com', 'Uni Emirates Arab', '-'),
(247, 'THE CATERPILLAR', 'Catherine Halderman', '+33 1 4503 0760', 'halderman91@mail.com.fr', 'France', '-'),
(298, 'GO GERMANY CORP', 'Tim Shaecker', '+4900149892', 'tim_june@yahoo.de', 'German', '-'),
(321, 'THE ACCENTURE', 'Kim Mingyu', '+82123456789', 'min_gyu@mail.co.kr', 'Korea Selatan', '-'),
(366, 'AICRM INCORP', 'Louis T', '+109673452', 'louiss_16@mail.co.us', 'USA', '-'),
(455, 'UNITED CORPORATE', 'Issabella Hadid', '+14526178999\r\n', 'bellahadid@mail.co.us', 'USA', '-'),
(623, 'THE HOUSE OF WORLD', 'Jacob T', '+49980055555\r\n', 'jacobrtt@mail.de', 'German', '-'),
(695, 'BLACK ROCK INC', 'Adora ', '+852 2120 4688', 'adora91@mail.com.hk', 'Hongkong', '-'),
(746, 'WHEELS FARGO CORPORATE', 'Habibie Khair', '+96612345678', 'habibiekhair@mail.com.sa', 'Saudi Arabia', '-'),
(888, 'GOLDMAN GROUP', 'Fabio Daud', '+447260837818', 'daud_fabio@mail.co.uk', 'United Kingdom', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id_data_diri` int(10) NOT NULL,
  `kd_data_diri` varchar(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `verifikasi` varchar(50) NOT NULL,
  `date_create` date NOT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `verifikasi_date` date DEFAULT NULL,
  `assigned_officer` varchar(50) DEFAULT NULL,
  `negara_officer` varchar(45) DEFAULT NULL,
  `kota_officer` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id_data_diri`, `kd_data_diri`, `nik`, `nama_pemilik`, `npwp`, `no_telp`, `email`, `domisili`, `foto`, `user_type`, `verifikasi`, `date_create`, `priority`, `verifikasi_date`, `assigned_officer`, `negara_officer`, `kota_officer`) VALUES
(114, 'DD0004', '8892036577', 'SARA FAJRIA', '847907487', '08579465789', 'dayautama@gmail.com', 'Surabaya', 'DD0004_2.png', 'Direct exportir ', 'On Progress', '2022-06-09', NULL, NULL, NULL, NULL, NULL),
(115, 'DD0005', '2452635666', 'GAVIN ALEXANDER', '456474647', '087856473665', 'grafindoindonesia@gmail.com', 'Padang', 'DD0005_2.png', 'Indirect Exportir', '0', '2022-08-17', NULL, NULL, NULL, NULL, NULL),
(116, 'DD0006', '3546782913', 'KRISNA G', '3758757', '0812567857', 'krisjaya@gmail.com', 'Jakarta', 'DD0006_2.png', 'Direct exportir ', '0', '2022-07-12', NULL, NULL, NULL, NULL, NULL),
(117, 'DD0007', '25711354684', 'MIKHAIL SIBBALD', '6758699', '08344562788', 'asiaanargo@gmail.com', 'Jakarta', 'DD0007_2.png', 'Indirect Exportir', '0', '2022-08-11', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_pembuatan_rekening`
--

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
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pembuatan_rekening`
--

INSERT INTO `data_pembuatan_rekening` (`id_pembuatan`, `no_rek`, `nama_nasabah`, `jenis_rek`, `saldo`, `profit`, `tgl_pembukaan_rek`, `id_usaha`, `cif`, `lc`, `pict`, `foto`, `kd_data_diri`) VALUES
('', '', '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 'DD00010'),
('087BN', '1874562873', 'GAVIN ALEXANDER', 'Giro', '90000000', '450000', '2020-04-10', 1, '1029301284', '123', 'Giro_', 'Giro_', 'DD0001'),
('087BD', '1874562875', 'AVAN KANTONA', 'Taplus bisnis', '90000000', '450000', '2022-04-10', NULL, NULL, NULL, NULL, NULL, 'DD0002'),
('293FO', '3251675467', 'KRISNA G', 'Giro', '175000000', '2187500', '2022-01-19', NULL, NULL, NULL, NULL, NULL, 'DD0003'),
('101AU', '3278564453', 'M. ABDULLAH', 'Taplus Bisnis', '150000000', '1500000', '2022-03-02', NULL, NULL, NULL, NULL, NULL, 'DD0004'),
('356CA', '7186733510', 'FEBRIAN B', 'Giro', '250000000', '3125000', '2020-05-14', NULL, NULL, NULL, NULL, NULL, 'DD0005'),
('492GT', '7762562711', 'ALI ALATAS', 'Giro', '130000000', '65000', '2020-01-02', NULL, NULL, NULL, NULL, NULL, 'DD0006'),
('562RK', '8944511009', 'MIKHAIL SIBBALD', 'Giro', '75000000', '375000', '2022-04-20', NULL, NULL, NULL, NULL, NULL, 'DD0007'),
('101AR', '99817839080', 'M. RIZAL', 'Taplus Bisnis', '70000000', '700000', '2022-02-02', NULL, NULL, NULL, NULL, NULL, 'DD0008'),
('101AJ', '99817839087', 'YUSUF ABDULLAH', 'Taplus Bisnis', '100000000', '1000000', '2020-01-02', NULL, NULL, NULL, NULL, NULL, 'DD0009');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengajuan_komodity`
--

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
  `Alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengajuan_komodity`
--

INSERT INTO `data_pengajuan_komodity` (`No`, `Created_at`, `Komoditas`, `Jumlah_pengajuan`, `Unit`, `Target_Pasar`, `Deskripsi`, `Nama_Pengaju`, `Nomor_Telepon`, `Email`, `Nama_Perusahaan`, `Sektor_Perusahaan`, `Alamat`) VALUES
(1, '2022-05-18', 'Coconut Oil', 10, 'Ton', 'USA', '-', 'Ariya K', '-', '-', '-', '-', '-'),
(2, '2022-01-07', 'Handicraft', 22, 'Meter', 'Internasional', '-', 'Krisna G', '-', '-', '-', '-', '-'),
(3, '2022-08-10', 'Ikan Cumi', 10, 'Meter', 'Internasional', '-', 'Krisna G', '-', '-', '-', '-', '-'),
(4, '2022-07-25', 'Kayu Sengon', 15, 'Ton', 'Eropa', '-', 'Avan Kantona', '-', '-', '-', '-', '-'),
(5, '2022-10-05', 'Kerajinan kayu dan alumunium', 10, 'Ton', 'Asia', '-', 'Ali Alatas', '-', '-', '-', '-', '-'),
(6, '2022-09-22', 'Kerajinan tangan', 5, 'Ton', 'Eropa', '-', 'Winston Tandjaya', '-', '-', '-', '-', '-'),
(7, '2022-04-06', 'Kopi Arabica', 10, 'Ton', 'Asia', '-', 'Fabian J', '-', '-', '-', '-', '-'),
(8, '2022-02-24', 'Makanan Minuman Produk Indonesia', 20, 'Ton', 'Internasional', '-', 'Winston tandjaya', '-', '-', '-', '-', '-'),
(9, '2022-06-23', 'Mebel kayu Jati', 7, 'Ton', 'Eropa', '-', 'Ali Alatas', '-', '-', '-', '-', '-'),
(10, '2022-02-17', 'Perdagangan ritel - Garment', 7, 'Ton', 'Internasional', '-', 'Gavin Alexander', '-', '-', '-', '-', '-'),
(11, '2022-08-10', 'Rumput Laut', 5, 'Ton', 'Eropa', '-', 'Andreas Wiratmaja', '-', '-', '-', '-', '-'),
(12, '2022-07-21', 'Ubud Woven', 15, 'Ton', 'Eropa', '-', 'Yusuf Abdullah', '-', '-', '-', '-', '-'),
(13, '2022-03-16', 'Wooden Material', 5, 'Ton', 'Eropa', '-', 'Fadila', '-', '-', '-', '-', '-'),
(14, '2022-12-08', 'Wooden Material', 10, 'Ton', 'Internasional', '-', 'Ali Alatas', '-', '-', '-', '-', '-'),
(15, '2022-11-15', 'Mebel kayu jati', 10, 'Ton', 'Eropa', '-', 'Krisna G', '-', '-', '-', '-', '-'),
(16, '2022-03-24', 'Coconut oil', 10, 'Ton', 'Eropa', '-', 'Guntur', '-', '-', '-', '-', '-'),
(17, '2022-01-27', '-', 20, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(18, '2022-01-13', '-', 5, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(19, '2022-01-06', '-', 5, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(20, '2022-03-17', '-', 5, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(21, '2022-03-23', '-', 6, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(22, '2022-03-10', '-', 8, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(23, '2022-03-02', '-', 4, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(24, '2022-04-14', '-', 5, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(25, '2022-04-28', '-', 10, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(26, '2022-04-04', '-', 7, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(27, '2022-04-15', '-', 8, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(28, '2022-05-19', '-', 8, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(29, '2022-05-02', '-', 7, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(30, '2022-05-25', '-', 8, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(31, '2022-05-18', '-', 9, '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(32, '2022-06-09', '-', 10, '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_pinjam`
--

CREATE TABLE `data_pinjam` (
  `id_pinjam` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `nama_nasabah` varchar(500) NOT NULL,
  `produk_pinjam` varchar(500) NOT NULL,
  `saldo_pinjam` varchar(500) NOT NULL,
  `suku_bunga` varchar(255) NOT NULL,
  `profit` varchar(500) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pinjam`
--

INSERT INTO `data_pinjam` (`id_pinjam`, `no_rek`, `nama_nasabah`, `produk_pinjam`, `saldo_pinjam`, `suku_bunga`, `profit`, `tgl_pinjam`) VALUES
('216', '3251675467', 'KRISNA G', 'KUR', '50000000', '6%', '3000000', '2022-02-02'),
('231', '1874562875', 'AVAN KANTONA', 'BWU', '50000000', '12,5%', '6250000', '2022-06-08'),
('677', '99817839080', 'M. RIZAL', 'BWU', '175000000', '12,5%', '21875000', '2022-03-09'),
('768', '3278564453', 'M. ABDULLAH', 'BWU', '200000000', '12,5%', '25000000', '2022-04-20'),
('786', '7186733510', 'FEBRIAN B', 'KUR', '75000000', '6%', '3000000', '2022-07-14'),
('873', '1874562873', 'GAVIN ALEXANDER', 'KUR', '100000000', '6%', '6000000', '2022-01-10'),
('993', '77762562711', 'ALI ALATAS', 'KUR', '250000000', '6%', '15000000', '2022-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_komodity`
--

CREATE TABLE `data_request_komodity` (
  `no_komoditas` int(50) NOT NULL,
  `komoditas` varchar(255) NOT NULL,
  `request_total` varchar(255) NOT NULL,
  `available_quantity_komoditas` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_komodity`
--

INSERT INTO `data_request_komodity` (`no_komoditas`, `komoditas`, `request_total`, `available_quantity_komoditas`, `status`) VALUES
(1, 'Coconut Oil', '300 Ton', '100 Ton', 'Belum terpenuhi'),
(5, 'Kerajinan kayu dan alumunium', '500 Ton', '800 Ton', 'Bisa Terpenuhi'),
(7, 'Kopi Arabica', '100 Ton', '500 Ton', 'Bisa Terpenuhi');

-- --------------------------------------------------------

--
-- Table structure for table `data_seller`
--

CREATE TABLE `data_seller` (
  `Id_Perusahaan` varchar(255) NOT NULL,
  `Nama_Perusahaan` varchar(500) NOT NULL,
  `Nama_Owner` varchar(500) NOT NULL,
  `Kota` varchar(500) NOT NULL,
  `Nama_Komodity` varchar(500) NOT NULL,
  `Jml_kapasitas_produksi_(Bulan)` varchar(11) NOT NULL,
  `Kontak` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_seller`
--

INSERT INTO `data_seller` (`Id_Perusahaan`, `Nama_Perusahaan`, `Nama_Owner`, `Kota`, `Nama_Komodity`, `Jml_kapasitas_produksi_(Bulan)`, `Kontak`, `Email`, `Status`) VALUES
('098HGU', 'HARAPAN JAYA INTI UTAMA. CORP', 'Ariya K', 'Jakarta', 'Coconut Oil', '100 Kg', '08123402938', 'Ariya.Kieputra@gmail.com', 'Indirect Exportir'),
('121DETR', 'PT. DETECHT INDONESIA', 'Winston Tandjaya', 'Yogyakarta', 'Makanan Minuman Produk Indonesia', '200 Kg', '08789027648', 'foodbydetect@gmail.com', 'Direct Eksportir'),
('225SNR', 'PT. SINARMAS JAYA INTI', 'Yusuf Abdullah', 'Bali', 'Ubud Woven', '200 Kg', '08789311266', 'sinarmasjayainti@gmail.com', 'Direct eksportir'),
('303DUV', 'PT DAYA UTAMA INDONUSA', 'Sara Fajria', 'Surabaya', 'Mebel kayu jati', '200 Ton', '08789033344', 'dayautama@gmail.com', 'Indirect Exportir'),
('323NSA', 'PT. INDONUSA FOOD', 'Fabian J', 'Surabaya', 'Kopi Arabica', '300 Kg', '081207784390', 'foodnusa@gmail.com', 'Direct Eksportir'),
('345KRS', 'PT. KRIS JAYA', 'Krisna G', 'Jakarta', 'Handicraft', '100 Kg', '08528976222', 'krisjaya@gmail.com', 'Indirect eksportir'),
('411UTK', 'PT. UTK BERAS NASIONAL', 'Febrian B', 'Bandung', 'Beras Pangan', '200 Ton', '08817672826', 'utkberaspangan@gmail.com', 'Direct eksportir'),
('509SFR', 'PT ASIA ANARGO ABADI', 'Mikhail sibbald', 'Jakarta', 'Perdagangan ritel - garment', '200 Ton', '0812907689', 'asiaanargo@gmail.com', 'Indirect eksportir'),
('666GFH', 'PT. GRAFINDO JAYA INDONESIA', 'Gavin Alexander', 'Padang', 'Perdagangan ritel - garment', '100 Ton', '08128906721', 'grafindoindonesia@gmail.com', 'Direct eksportir'),
('709UIF', 'PT. ANGKASA JAYA', 'Fadila', 'Samarinda', 'Wooden Material', '250 Ton', '08780978309', 'jayaangkasa@gmail.com', 'Direct eksportir'),
('777IOT', 'PT. ALIZAH PACIFIC INDONESIA', 'Ali Alatas', 'Jakarta', 'Mebel kayu jati', '250 Ton', '081290987890', 'alpanus@gmail.com', 'Direct Eksportir');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `Id_Transaksi` int(11) NOT NULL,
  `Id_Perusahaan` varchar(500) NOT NULL,
  `Id_Buyer` int(11) NOT NULL,
  `Nama_Komodity` varchar(500) NOT NULL,
  `Metode_Bayar` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Total_Bayar` int(11) NOT NULL DEFAULT '0',
  `Potongan` varchar(255) NOT NULL,
  `Profit` int(11) NOT NULL DEFAULT '0',
  `Tgl_Transaksi` date NOT NULL,
  `Keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`Id_Transaksi`, `Id_Perusahaan`, `Id_Buyer`, `Nama_Komodity`, `Metode_Bayar`, `Quantity`, `Total_Bayar`, `Potongan`, `Profit`, `Tgl_Transaksi`, `Keterangan`) VALUES
(1, '345KRS', 247, 'Handicraft', 'LC', 'Ton', 100000000, '0,25%', 250000, '2022-01-12', '-'),
(2, '666GFH', 101, 'Perdagangan Ritel - Garmen', 'LC', 'Ton', 270000000, '0,25%', 675000, '2022-02-22', '-'),
(3, '098HGU', 321, 'Coconut oil', 'LC', 'Kg', 100000000, '0,25%', 250000, '2022-03-16', '-'),
(4, '303DUV', 623, 'Mebel kayu jati', 'LC', 'Ton', 350000000, '0,25%', 875000, '2022-04-08', '-'),
(5, '225SNR', 121, 'Ubud Woven', 'LC', 'Kg', 350000000, '0,25%', 875000, '2022-05-27', '-'),
(6, '509SFR', 298, 'Perdagangan Ritel - Garmen', 'LC', 'Ton', 200000000, '0,25%', 500000, '2022-06-03', '-'),
(7, '323NSA', 746, 'Kopi Arabica', 'LC', 'Kg', 300000000, '0,25%', 750000, '2022-07-18', '-'),
(8, '709UIF', 243, 'Wooden Material', 'LC', 'Ton', 250000000, '0,25%', 625000, '2022-08-17', '-'),
(9, '777IOT', 888, 'Mebel kayu jati', 'LC', 'Ton', 500000000, '0,25%', 1250000, '2022-09-15', '-'),
(10, '777IOT', 455, 'Mebel kayu jati', 'LC', 'Ton', 450000000, '0,25%', 1125000, '2022-10-13', '-'),
(11, '121DETR', 695, 'Makanan Minuman Produk Indonesia', 'LC', 'Kg', 300000000, '0,25%', 750000, '2022-11-16', '-'),
(12, '323NSA', 746, 'Kopi Arabica', 'LC', 'Kg', 200000000, '0,25%', 500000, '2022-12-20', '-'),
(13, '323NSA', 746, 'Kopi Arabica', 'LC', 'Kg', 450000000, '0,25%', 1125000, '2022-12-22', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_usaha`
--

CREATE TABLE `data_usaha` (
  `id_usaha` int(10) NOT NULL,
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
  `verified` varchar(50) NOT NULL,
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
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_usaha`
--

INSERT INTO `data_usaha` (`id_usaha`, `nama_usaha`, `domisili_perusahaan`, `email_perusahaan`, `website`, `bidang_usaha`, `komoditi_usaha`, `skala`, `satuan`, `nib`, `npwp_perusahaan`, `no_siup`, `no_peb`, `no_akta`, `verified`, `qyc_nib`, `qyc_npwp`, `qyc_siup`, `qyc_peb`, `qyc_akta`, `qyc_domisili`, `foto_nib`, `foto_npwp`, `foto_siup`, `foto_peb`, `foto_akta`, `foto_domisili`, `kd_data_diri`) VALUES
(1, 'asasapo', 'bandung', 'jpem@gmail.comaas', 'asasasa', 'sas', 'asasasa', 'sds', 'cm', '120', '9567110345678921', '11212081', '11212081', '11212081', 'Verified', 0, 0, 0, 0, 0, 0, '1234_.jpg', '121211212121_.jpg', '11212081_.jpg', '11212081_.jpg', '11212081_.jpg', 'bandung_.jpg', 'DD0001'),
(2, 'asasapoasasa', 'popipiasasaqq', 'jpem@gmail.coma', 'asasasa', 'sasasa', 'asasasa', 'sds', 'cm', '112120', '112120', '112120', '112120', '112120', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0002'),
(3, 'PT. Aku dan Dia ', 'Banten', 'aku@gmail.com', 'aku.co.id', 'Tesktill', 'Pembuatan karpet', '10000', 'Centimeter (Cm)', '1212112256709', '1267110225611924', '12723', '12239', '12457', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0009'),
(4, 'PT. Cuma Satu', 'Papua Barat', 'cumacuma@gmail.com', 'cumacuma.web', 'Pertanian dan Perkebunan', 'Pupuk', '11000', 'Hektar (Ha', '1278112256709', '1278110225611924', '12783', '12789', '12787', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0010'),
(7, 'PT. Boneka ', 'Bengkulu', 'boneka@gmail.com', 'boneka.web.id', 'Buah dan Sayur', 'Cabe', '9000', 'Gram (Gr)', '2312112256709', '2567110225611924', '09723', '78239', '23457', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0008'),
(8, 'PT. Suka Daya Maju ', 'Gorontalo', 'sukamaju@gmail.com', 'sukamaju.com', 'Tesktill', 'Pembuatan baju', '8000', 'Meter Square (M²)', '2312112256724', '2567110225621924', '21122', '21122', '21122', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0007'),
(9, 'PT. Sinar Laut ', 'Sumatra Selatan', 'sinarlaut@gmail.com', 'sinarlaut.com', 'Perikanan', 'Ikan salmon', '5000', 'Gram (Gr)', '2312113456721', '2567110345621921', '21121', '21121', '21121', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0005'),
(10, 'PT. Laut Mitra Perkasa ', 'Jawa Barat', 'lautmitra@gmail.com', 'lautmitra.web.id', 'Pertanian dan Perkebunan', 'Daun teh', '7000', 'Square Yard (Yd²)', '2312113456724', '2567110345621924', '21123', '21123', '21123', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0006'),
(11, 'PT. Bake', 'Daerah Istimewa Yogyakarta', 'bake@gmail.com', 'bake.web.id', 'Tesktill', 'Pembuatan bantal', '23000', 'Square Foot (Ft²)', '5803901625670', '6817610025611924', '93871', '39113', '88201', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0022'),
(12, 'PT. Happy ', 'Kalimantan Selatan', 'happy@gmail.com', 'happy.id', 'Tesktill', 'Pembuatan bantal', '26000', 'Square Yard (Yd²)', '5813701625070', '6827010025211924', '99814', '35627', '81069', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0025'),
(13, 'PT. Happy ', 'Jambi', 'happy@gmail.com', 'happy.id', 'Pertanian dan Perkebunan', 'Pembuatan bantal', '25000', 'Yard (Yd)', '5813901625070', '6827610025211924', '99811', '35623', '81061', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0024'),
(14, 'PT. Happy ', 'Kalimantan Utara', 'happy@gmail.com', 'happy.id', 'Tesktill', 'Pembuatan bantal', '24000', 'Kilometer Square (Km²)', '5813901625670', '6827610025611924', '93811', '39123', '88761', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0023'),
(15, 'PT. Happy ', 'Lampung', 'happy@gmail.com', 'happy.id', 'Tesktill', 'Pembuatan bantal', '28000', 'Centimeter (Cm)', '5814101625070', '6820911025211924', '99211', '35651', '81071', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0026'),
(17, 'PT. Graha Pesisir ', 'Jambia', 'graha@gmail.com', 'graha.co.id', 'Buah dan Sayur', 'Stroberi', '4000', 'Ons (Oz)', '9312113456781', '9567110345678921', '91145', '91677', '911999', 'On Progress', 0, 0, 0, 0, 1, 0, '9312113456781_.jpg', NULL, NULL, NULL, NULL, 'Jambia_.jpg', 'DD0004'),
(18, 'PT. The Boyz ', 'Jawa Timur', 'boyz@gmail.com', 'boyz.web.id', 'Perikanan', 'Kepiting', '20000', 'Foot (Ft)', '9803501225670', '9817610225611924', '23971', '29712', '28503', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0019'),
(19, 'PT. Ikonic ', 'Jawa Barat', 'ikon@gmail.com', 'ikon.web.id', 'Pertanian dan Perkebunan', 'Daun teh', '19000', 'Pound (Lb)', '9803701225670', '9817310225611924', '23972', '29711', '28501', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0018'),
(20, 'PT. Blibli Indonesia ', 'Banten', 'Blibli@gmail.com', 'blibli.com', 'Perikanan', 'Lobster', '21000', 'Pound (Lb)', '9803901225670', '9817610225611924', '23972', '29713', '28501', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0020'),
(21, 'PT. Moladin ', 'Sulawesi Tenggara', 'mamodin@gmail.com', 'moladin.web.id', 'Tesktill', 'Pembuatan sarung', '22000', 'Inch (In)', '9803901625670', '9817610025611924', '23871', '29113', '28201', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0021'),
(22, 'PT. Army Bomb ', 'Jawa Barat', 'army@gmail.com', 'army.web.id', 'Pertanian dan Perkebunan', 'Padi', '16000', 'Kilo Gram (Kg)', '9813201225670', '9827310225611924', '23876', '29515', '28100', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0016'),
(23, 'PT. Palembang Teater ', 'Kepulauan Riau', 'teater@gmail.com', 'teater.com', 'Buah dan Sayur', 'Kelengkeng', '17000', 'Square Yard (Yd²)', '9813701225670', '9827310225611924', '23872', '29511', '28101', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0017'),
(24, 'PT. Cileungsi', 'Jawa Tengah', 'bogor@gmail.com', 'darling.com', 'Buah dan Sayur', 'Naga', '15000', 'Gram (Gr)', '9833201225670', '9837310225611924', '23276', '29315', '28300', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0014'),
(25, 'PT. Bandung ', 'Lampung', 'bandung@gmail.com', 'bandung.web.id', 'Perikanan', 'Ikan layur', '14000', 'Pound (Lb)', '9834201225670', '9834010225611924', '23259', '29342', '28322', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0013'),
(26, 'PT. Memandang Jauh', 'Bangka Belitung', 'jauh@gmail.com', 'jauhsekali.com', 'Perikanan', 'Ikan mas', '13000', 'Ons (Oz)', '9872012256709', '9872010225611924', '23929', '29322', '28472', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0012'),
(27, 'PT. Bunga Mawar ', 'Sulawesi Selatan', 'bungamawar@gmail.com', 'bungamawar.com', 'Pertanian dan Perkebunan', 'Kopi', '12000', 'Ton (T)', '9878112256709', '9878110225611924', '98783', '98789', '98787', '0', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'DD0011');

-- --------------------------------------------------------

--
-- Table structure for table `ekspansi_comodities`
--

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
  `hs_code` varchar(75) NOT NULL,
  `details_spesifikasi` varchar(100) DEFAULT NULL,
  `packing` varchar(50) DEFAULT NULL,
  `capacity_comodity` varchar(100) DEFAULT NULL,
  `minimum_order_qty` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekspansi_comodities`
--

INSERT INTO `ekspansi_comodities` (`comodity_posted_id`, `comodity_name`, `user_id`, `comodities_id`, `exwork_price`, `category`, `status`, `application`, `create_date`, `hs_code`, `details_spesifikasi`, `packing`, `capacity_comodity`, `minimum_order_qty`) VALUES
(101, 'Coconut Oil', 'DD0011', '1A', 'USD 1200 ', 'Pertanian dan Perkebunan', 'Waiting for Approval', 22, '2022-01-02', 'ASO9920', NULL, NULL, NULL, NULL),
(102, 'Handicraft', 'DD0006', '2A', 'USD 1000 ', 'Seni dan Kerajinan tangan', 'Posted', 20, '2022-02-09', 'ASO9921', NULL, NULL, NULL, NULL),
(103, 'Kerajinan Kayu dan Alumunium', 'DD0002', '5A', 'USD 1500 ', 'Seni dan Kerajinan tangan', 'Draft', 23, '2022-03-16', 'ASO9923', NULL, NULL, NULL, NULL),
(104, 'Perdagangan ritel dan garment', 'DD0005', '10A', 'USD 1400 ', 'Gaya dan Tekstil', 'Un-Posted', 24, '2022-04-06', 'ASO9924', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ekspansi_matchmaking`
--

CREATE TABLE `ekspansi_matchmaking` (
  `matchmaking_id` varchar(100) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `buyer_id` varchar(20) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `comodity` varchar(100) NOT NULL,
  `status` varchar(75) NOT NULL,
  `payment_system` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `application_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekspansi_matchmaking`
--

INSERT INTO `ekspansi_matchmaking` (`matchmaking_id`, `seller_id`, `buyer_id`, `destination`, `comodity`, `status`, `payment_system`, `value`, `application_date`) VALUES
('A128801BAG', 'DD0006', 'DD0009', 'France', 'Handicraft', 'Done', 'LC', 'USD 120000', '2022-02-09'),
('BC6736FTYY', 'DD0011', 'DD0008', 'Saudi Arabia', 'Coconut Oil', 'On Progress', 'LC', 'USD 130000', '2022-03-18'),
('CK46378TWJ', 'DD0012', 'DD0016', 'Korea Selatan', 'Minyak Sawit (CPO', 'Cancel', 'LC', 'USD 120000', '2022-01-27'),
('FA2267DVQ9', 'DD0015', 'DD0010', 'Uni Emirates Arab', 'Wooden Material', 'Requested', 'LC', 'USD 150000', '2022-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `ekspansi_request`
--

CREATE TABLE `ekspansi_request` (
  `request_post_id` varchar(100) NOT NULL,
  `comodity_name` varchar(100) NOT NULL,
  `kd_data_diri` varchar(50) NOT NULL,
  `request_id` varchar(50) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(75) NOT NULL,
  `application` int(50) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `create_date` date NOT NULL,
  `qty_komoditas` int(11) NOT NULL,
  `incoterm` varchar(500) NOT NULL,
  `frekuensi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekspansi_request`
--

INSERT INTO `ekspansi_request` (`request_post_id`, `comodity_name`, `kd_data_diri`, `request_id`, `destination`, `category`, `status`, `application`, `payment`, `create_date`, `qty_komoditas`, `incoterm`, `frekuensi`) VALUES
('1B', 'Coconut Oil', 'DD0004', 'CC181901', 'Saudi Arabia', 'Pertanian dan Perkebunan', 'Posted', 22, 'LC', '2022-04-20', 20, 'FOB', '2 Kali sebulan'),
('2B', 'Kopi Arabica', 'DD0003', 'CC181902', 'France', 'Makanan dan Minuman', 'Posted', 23, 'LC', '2022-06-08', 30, 'FOB', '3 Kali sebulan'),
('3B', 'Mebel kayu Jati', 'DD0002', 'CC181903', 'Jakarta', 'Perlengkapan dan Furniture', 'Draft', 24, 'LC', '2022-06-09', 50, 'FOB', '2 Kali sebulan'),
('4B', 'Ubud Woven', 'DD0006', 'CC181904', 'Jakarta', 'Seni dan Kerajinan tangan', 'Un-Posted', 25, 'LC', '2022-03-23', 50, '', ''),
('5B', 'Kopi Robusta', 'DD0001', 'CC181902', 'Malaysia', 'Perkebunan', 'Waiting for Approval', 20, 'LC', '0000-00-00', 0, '', ''),
('6B', 'Kain songket', 'DD0005', 'CC181907', 'Nigeria', 'Seni', 'Posted', 30, 'LC', '0000-00-00', 0, '', ''),
('7B', 'Teh', 'DD00021', 'CC181909', 'Australia', 'Perkebunan', 'Waiting for Approval', 10, 'LC', '0000-00-00', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inspirasi`
--

CREATE TABLE `inspirasi` (
  `id_inspirasi` int(10) NOT NULL,
  `nama_kelas` varchar(75) NOT NULL,
  `kategory` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `progres` varchar(10) NOT NULL,
  `finish_date` date NOT NULL,
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspirasi`
--

INSERT INTO `inspirasi` (`id_inspirasi`, `nama_kelas`, `kategory`, `level`, `start_date`, `progres`, `finish_date`, `kd_data_diri`) VALUES
(1, 'Mandin Penyaluhan', 'asasapo', '2', '2022-03-11', '30', '2022-03-23', 'DD0001');

-- --------------------------------------------------------

--
-- Table structure for table `kuantitas`
--

CREATE TABLE `kuantitas` (
  `id_kuantitas` int(11) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `kuantitas` varchar(50) NOT NULL,
  `kestabilan_gradeone` varchar(50) NOT NULL,
  `kestabilan_gradetwo` varchar(50) NOT NULL,
  `foto_gradeone` varchar(500) DEFAULT NULL,
  `foto_gradetwo` varchar(500) DEFAULT NULL,
  `unit` varchar(45) NOT NULL,
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuantitas`
--

INSERT INTO `kuantitas` (`id_kuantitas`, `nama_komoditas`, `kuantitas`, `kestabilan_gradeone`, `kestabilan_gradetwo`, `foto_gradeone`, `foto_gradetwo`, `unit`, `kd_data_diri`) VALUES
(1, 'abc', '40', 'a', '1', 'abc_.jpg', NULL, 'KG', 'DD0001'),
(2, 'a', 'a', 'a', '', NULL, NULL, 'KG', 'DD0001'),
(3, 'lem', '200', 'A', '', NULL, NULL, 'KG', 'DD0001'),
(4, 'a', '12', 'a', '', 'a_.jpg', NULL, 'Kg', 'DD0001'),
(5, 'a', 'aa', 'a', '', 'a_.jpg', NULL, 'a', 'DD0001'),
(6, 'abc', 'a', 'A', '', 'abc_.jpg', NULL, 'kg', 'DD0001'),
(8, 'abc', '12', 'A', '', NULL, NULL, 'kg', NULL),
(9, 'abc', '13', 'A', '', 'abc_.jpg', NULL, 'kg', 'DD0004');

-- --------------------------------------------------------

--
-- Table structure for table `kuantitas_image`
--

CREATE TABLE `kuantitas_image` (
  `id_kuantitas_image` int(10) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `id_kuantitas` int(11) DEFAULT NULL,
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matchmaking_log`
--

CREATE TABLE `matchmaking_log` (
  `id_matchmaking` int(11) NOT NULL,
  `komoditas` varchar(50) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_usaha` int(11) DEFAULT NULL,
  `seller` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_produk`
--

CREATE TABLE `penggunaan_produk` (
  `id_produkbni` int(25) NOT NULL,
  `tabungan_bisnis` varchar(30) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_post`
--

CREATE TABLE `request_post` (
  `id_request` int(15) NOT NULL,
  `nama_komoditas` varchar(50) NOT NULL,
  `qty_komoditas` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tanggal_pembuatan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_ekspor`
--

CREATE TABLE `riwayat_ekspor` (
  `id_riwayat` int(15) NOT NULL,
  `komoditas` varchar(50) NOT NULL,
  `qty` varchar(15) NOT NULL,
  `frekuensi` varchar(20) NOT NULL,
  `incoterm` varchar(50) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `negara_tujuan` varchar(45) NOT NULL,
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_ekspor`
--

INSERT INTO `riwayat_ekspor` (`id_riwayat`, `komoditas`, `qty`, `frekuensi`, `incoterm`, `shipment`, `amount`, `negara_tujuan`, `kd_data_diri`) VALUES
(1, 'abc', '2', 'sedang', 'a', 'ekspor', '50', 'US', 'DD0001'),
(2, 'cde', '3', 'sedang', 'b', 'ekspor', '50', 'Canada', 'DD0002'),
(3, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'DD0003'),
(4, 'lem', '12', 'sedang', 'US', 'jne', '12', 'US', 'DD0001'),
(5, 'abc', '12', 'abc', 'abc', 'abc', '12', 'abc', 'DD0001'),
(7, 'abc', '12', 'abc', 'abc', 'abc', '12', 'abc', 'DD0004'),
(8, 'abc', 'a', 'abc', 'abc', 'abc', '12', 'abc', 'DD0004');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_image`
--

CREATE TABLE `riwayat_image` (
  `id_riwayat_image` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `id_riwayat` int(15) NOT NULL,
  `kd_data_diri` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_image`
--

INSERT INTO `riwayat_image` (`id_riwayat_image`, `image`, `id_riwayat`, `kd_data_diri`) VALUES
(2, '2label_.jpg', 1, 'DD0001'),
(3, 'img2.jpg', 2, 'DD0001'),
(4, 'img1.jpg', 1, 'DD0001'),
(5, 'img3.jpg', 3, 'DD0001'),
(6, 'img7.jpg', 7, 'DD0004'),
(7, 'img7.jpg', 7, 'DD0004');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_legalitas`
--

CREATE TABLE `verifikasi_legalitas` (
  `nib` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `no_siup` varchar(50) NOT NULL,
  `no_peb` varchar(50) NOT NULL,
  `no_akta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `assigned_officer`
--
ALTER TABLE `assigned_officer`
  ADD PRIMARY KEY (`id_officer`);

--
-- Indexes for table `commodities_post`
--
ALTER TABLE `commodities_post`
  ADD PRIMARY KEY (`id_commoditi`);

--
-- Indexes for table `data_buyer`
--
ALTER TABLE `data_buyer`
  ADD PRIMARY KEY (`Id_Buyer`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`kd_data_diri`),
  ADD KEY `id_data_diri` (`id_data_diri`);

--
-- Indexes for table `data_pembuatan_rekening`
--
ALTER TABLE `data_pembuatan_rekening`
  ADD PRIMARY KEY (`no_rek`),
  ADD KEY `id_usaha` (`id_usaha`);

--
-- Indexes for table `data_pengajuan_komodity`
--
ALTER TABLE `data_pengajuan_komodity`
  ADD PRIMARY KEY (`No`),
  ADD KEY `Komoditas` (`Komoditas`);

--
-- Indexes for table `data_pinjam`
--
ALTER TABLE `data_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `data_seller`
--
ALTER TABLE `data_seller`
  ADD PRIMARY KEY (`Id_Perusahaan`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`Id_Transaksi`),
  ADD KEY `data_transaksi_ibfk_1` (`Id_Buyer`);

--
-- Indexes for table `data_usaha`
--
ALTER TABLE `data_usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `inspirasi`
--
ALTER TABLE `inspirasi`
  ADD PRIMARY KEY (`id_inspirasi`);

--
-- Indexes for table `kuantitas`
--
ALTER TABLE `kuantitas`
  ADD PRIMARY KEY (`id_kuantitas`);

--
-- Indexes for table `kuantitas_image`
--
ALTER TABLE `kuantitas_image`
  ADD PRIMARY KEY (`id_kuantitas_image`),
  ADD KEY `id_kuantitas` (`id_kuantitas`);

--
-- Indexes for table `matchmaking_log`
--
ALTER TABLE `matchmaking_log`
  ADD PRIMARY KEY (`id_matchmaking`),
  ADD KEY `id_usaha` (`id_usaha`);

--
-- Indexes for table `penggunaan_produk`
--
ALTER TABLE `penggunaan_produk`
  ADD PRIMARY KEY (`id_produkbni`);

--
-- Indexes for table `request_post`
--
ALTER TABLE `request_post`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `riwayat_ekspor`
--
ALTER TABLE `riwayat_ekspor`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `riwayat_image`
--
ALTER TABLE `riwayat_image`
  ADD PRIMARY KEY (`id_riwayat_image`),
  ADD KEY `id_riwayat` (`id_riwayat`);

--
-- Indexes for table `verifikasi_legalitas`
--
ALTER TABLE `verifikasi_legalitas`
  ADD PRIMARY KEY (`nib`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assigned_officer`
--
ALTER TABLE `assigned_officer`
  MODIFY `id_officer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `commodities_post`
--
ALTER TABLE `commodities_post`
  MODIFY `id_commoditi` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_data_diri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `data_usaha`
--
ALTER TABLE `data_usaha`
  MODIFY `id_usaha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `inspirasi`
--
ALTER TABLE `inspirasi`
  MODIFY `id_inspirasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuantitas`
--
ALTER TABLE `kuantitas`
  MODIFY `id_kuantitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kuantitas_image`
--
ALTER TABLE `kuantitas_image`
  MODIFY `id_kuantitas_image` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matchmaking_log`
--
ALTER TABLE `matchmaking_log`
  MODIFY `id_matchmaking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penggunaan_produk`
--
ALTER TABLE `penggunaan_produk`
  MODIFY `id_produkbni` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_post`
--
ALTER TABLE `request_post`
  MODIFY `id_request` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_ekspor`
--
ALTER TABLE `riwayat_ekspor`
  MODIFY `id_riwayat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `riwayat_image`
--
ALTER TABLE `riwayat_image`
  MODIFY `id_riwayat_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pembuatan_rekening`
--
ALTER TABLE `data_pembuatan_rekening`
  ADD CONSTRAINT `data_pembuatan_rekening_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD CONSTRAINT `data_transaksi_ibfk_1` FOREIGN KEY (`Id_Buyer`) REFERENCES `data_buyer` (`Id_Buyer`);

--
-- Constraints for table `kuantitas_image`
--
ALTER TABLE `kuantitas_image`
  ADD CONSTRAINT `kuantitas_image_ibfk_2` FOREIGN KEY (`id_kuantitas`) REFERENCES `kuantitas` (`id_kuantitas`);

--
-- Constraints for table `matchmaking_log`
--
ALTER TABLE `matchmaking_log`
  ADD CONSTRAINT `matchmaking_log_ibfk_1` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`);

--
-- Constraints for table `riwayat_image`
--
ALTER TABLE `riwayat_image`
  ADD CONSTRAINT `id_riwayat` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat_ekspor` (`id_riwayat`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

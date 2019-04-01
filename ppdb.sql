-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 10:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'ppdb', '2017'),
(2, 'Admin PPDB', 'ppdb', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `cetak`
--

CREATE TABLE `cetak` (
  `NoPDF` varchar(9) NOT NULL,
  `StatusCetak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cetak`
--

INSERT INTO `cetak` (`NoPDF`, `StatusCetak`) VALUES
('12-0001', 0),
('21-0002', 0),
('21-0003', 0),
('54-0003', 0),
('12-0004', 0),
('12-0005', 0),
('16-0006', 0),
('14-0007', 0),
('16-0009', 0),
('13-0010', 0),
('13-0011', 0),
('31-0012', 0),
('31-0013', 0),
('31-0014', 0),
('31-0015', 0),
('13-0016', 0),
('21-0017', 0),
('21-0018', 0),
('21-0019', 0),
('21-0020', 0),
('54-0021', 0),
('51-0022', 0),
('21-0023', 0),
('21-0024', 0),
('21-0025', 0),
('54-0027', 0),
('54-0028', 0),
('56-0029', 0),
('56-0030', 0),
('36-0031', 0),
('25-0032', 0),
('54-0033', 0),
('54-0034', 0),
('54-0035', 0),
('45-0036', 0),
('61-0037', 0),
('16-0038', 0),
('12-0039', 0),
('21-0040', 0),
('21-0041', 0),
('13-0042', 0),
('13-0043', 0),
('12-0044', 0),
('31-0045', 0),
('12-0046', 0),
('12-0047', 0),
('12-0048', 0),
('46-0049', 0),
('52-0050', 0),
('32-0051', 1),
('45-0052', 1),
('52-0053', 1),
('32-0054', 0),
('43-0055', 1),
('45-0056', 1),
('15-0057', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dataasalsekolah`
--

CREATE TABLE `dataasalsekolah` (
  `IdSekolah` int(3) NOT NULL,
  `NamaSmp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `dataasalsekolah`
--

INSERT INTO `dataasalsekolah` (`IdSekolah`, `NamaSmp`) VALUES
(1, 'MTs 45 WIRADESA'),
(2, 'MTS AL-AMIN KOTA PEK'),
(3, 'MTs HIDAYATUL ATHFAL'),
(4, 'MTs IN BANYURIP'),
(5, 'MTs MUHAMADIYAH TUKU'),
(6, 'MTs NU TIRTO'),
(7, 'MTs S NU KARANGANYAR'),
(8, 'MTs S PROTO'),
(9, 'MTs S SIMBANG KULON '),
(10, 'MTs S WONOYOSO BUARA'),
(11, 'MTs SALAFIYAH WIRADE'),
(12, 'MTs SUNAN KALIJAGA'),
(13, 'MTs WALI SONGO ULUJA'),
(14, 'MTs WALISONGO  KEDUN'),
(15, 'MTs WALISONGO PEKAJA'),
(16, 'SMP 1 LIMPUNG BATANG'),
(17, 'SMP 1 BOJONG'),
(18, 'SMP 1 COMPRENG-SUBAN'),
(19, 'SMP 1 KETANGGUNGAN'),
(20, 'SMP 1 SIWALAN'),
(21, 'SMP 1 TIRTO'),
(22, 'SMP 1 ULUJAMI'),
(23, 'SMP 1 WIRADESA'),
(24, 'SMP 1 WONOKERTO'),
(25, 'SMP 11 PEKALONGAN'),
(26, 'SMP 13 PEKALONGAN'),
(27, 'SMP 14 PEKALONGAN'),
(28, 'SMP 15 PEKALONGAN'),
(29, 'SMP 2 KEDUNGWUNI'),
(30, 'SMP 2 SIWALAN'),
(31, 'SMP 2 TIRTO'),
(32, 'SMP 2 WIRADESA'),
(33, 'SMP 2 WONOKERTO'),
(34, 'SMP 3 PEKALONGAN'),
(35, 'SMP 3 TIRTO'),
(36, 'SMP 3 WONOKERTO'),
(37, 'SMP 4 PEKALONGAN'),
(38, 'SMP 4 TERISI INDRAMA'),
(39, 'SMP 4 ULUJAMI'),
(40, 'SMP 6 BREBES'),
(41, 'SMP 7 PEKALONGAN'),
(42, 'SMP 1 BUARAN'),
(43, 'SMP ISLAM FQ WONOKER'),
(44, 'SMP ISLAM PEKALONGAN'),
(45, 'SMP ISLAM REMBUN'),
(46, 'SMP ISLAM YAROHIS SI'),
(47, 'SMP ISLAM YAWAPI ASY'),
(48, 'SMP MUHAMMADIYAH WIR'),
(49, 'SMP WAHID HASYIM'),
(50, 'SMP 2 COMAL'),
(51, 'PAKET B'),
(52, 'PKBM BAITURRAHMAN AP'),
(53, 'PKBM BENDAN JAYA'),
(54, 'MTS AL KAMAL'),
(55, 'MTs Ribatul Muta''ali'),
(56, 'SMP ISLAM YPI BUARAN'),
(57, 'PKBM KI HAJAR DEWANT'),
(58, 'MTs S AL-MUTTAQIN ME'),
(59, 'SMP 8 PEKALONGAN'),
(60, 'MTs SYARIF HIDYATULL'),
(61, 'SMP MUHAMMADIYAH PEK'),
(62, 'SMP MUHAMMADIYAH PEK'),
(63, 'SMP EL HUSNA'),
(64, 'MTs S NURUL QOMAR'),
(65, 'MTs MA`ARIF'),
(66, 'MTS MAMBAUL ULUM BRE'),
(67, 'MTs ROUDLOTUL MUBTAD'),
(68, 'MTs IN BANYURIP AGEN'),
(69, 'SMP YAPENI'),
(70, 'SMP SALAFIYAH PEKALO'),
(71, 'MTs GONDANG'),
(72, 'MTs NURUL ATHFAL PEM'),
(73, 'MTs AL HIKMAH TANGKI'),
(74, 'MTs S JENGGOT KOTA P'),
(75, 'MTS SADAR DIRI'),
(76, 'PKBM KI HAJAR DEWANT'),
(77, 'SMP ISLAM SIMBANGWET'),
(78, 'smp nu kesesi');

-- --------------------------------------------------------

--
-- Table structure for table `datadiri`
--

CREATE TABLE `datadiri` (
  `NoPDF` varchar(15) NOT NULL,
  `Urut` int(11) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `NamaPanggilan` text NOT NULL,
  `NISN` varchar(11) NOT NULL,
  `TmptTanggalLahir` varchar(50) NOT NULL,
  `USIA` int(11) NOT NULL,
  `JenisKelamin` varchar(11) NOT NULL,
  `AsalSekolah` text NOT NULL,
  `Jurusan` varchar(11) NOT NULL,
  `NoTelp` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `DesaKelurahan` text NOT NULL,
  `Kecamatan` varchar(30) NOT NULL,
  `Kabupaten` varchar(30) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datadiri`
--

INSERT INTO `datadiri` (`NoPDF`, `Urut`, `Nama`, `NamaPanggilan`, `NISN`, `TmptTanggalLahir`, `USIA`, `JenisKelamin`, `AsalSekolah`, `Jurusan`, `NoTelp`, `Alamat`, `DesaKelurahan`, `Kecamatan`, `Kabupaten`, `status`) VALUES
('12-0001', 1, 'Bintan Nafiani', 'Bintan ', '', 'Pekalongan, 10 November 2002', 15, 'P', 'MTS AL-AMIN KOTA PEKALONGAN', 'AP', '085811619122', 'Alamat', 'Banyurip Alit Gg.3A Rt.01 Rw.08', 'Pekalongan Selatan', 'Kota Pekalongan', 'TERDAFTAR'),
('21-0002', 2, 'Khoirunnisa ', 'Nisa', '', 'Pekalongan, 11 February 2002', 15, 'P', 'MTs MA`ARIF', 'AK', '', 'Alamat', 'Banyurip Alit Gg. 1  001/ 007', 'Pekalongan selatan ', 'Kota Pekalongan ', 'TERDAFTAR'),
('21-0008', 8, 'Laura Listia', 'Tia', '0074054362', 'Pekalongan ,22 September 2000', 17, 'P', 'MTs S NU KARANGANYAR', 'AK', '', 'Alamat', 'Karanganyar gg.15', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('54-0003', 3, 'Nunung Faizah', 'Nunung', '0006685919', 'Pekalongan,13 Desember 2000', 17, 'P', 'SMP 4 PEKALONGAN', 'TSM', '089649787705', 'Alamat', 'Pasir sari / 03/06', 'Pekalongan barat', 'Kota Pekalongan', 'TERDAFTAR'),
('12-0004', 4, 'Shelamita Amanda Aprilia', 'Shela', '', 'Pekalongan, 27 April 2002', 17, 'P', 'MTS AL-AMIN KOTA PEKALONGAN', 'AP', '-', 'Alamat', 'Tegalrejo / Rt03 & Rw04', 'Pekalongan Barat', 'Pekalongan', 'TERDAFTAR'),
('12-0005', 5, 'Dyah Ayu Nur Fitriani', 'Dyah', '', 'Pekalongan,19 desember 2002', 17, 'P', 'MTS AL-AMIN KOTA PEKALONGAN', 'AP', '', 'Alamat', 'RT.01 RW.01', 'Pekalongan barat', 'Pekalongan', 'TERDAFTAR'),
('16-0006', 6, 'Nada Putri Salsabila', 'Sabila', '', 'Pekalongan,7 October 2002', 15, 'P', 'MTS AL-AMIN KOTA PEKALONGAN', 'AP', '', 'Alamat', 'Buaran', 'Pekalongan Selatan', 'Kota Pekalongan', 'TERDAFTAR'),
('14-0007', 7, 'Dina Shaela Arzaqina', 'Dinna', '', 'Pekalongan,09 Desember 2001', 17, 'P', 'MTS AL-AMIN KOTA PEKALONGAN', 'AP', '085842049229', 'Alamat', 'Peturen Tirto Gg 18 RT.03 Rw.05', 'Pekalongan Barat', 'Pekalongan', 'TERDAFTAR'),
('16-0009', 9, 'Reni nur khofifah', 'Reni', '5146', 'Pekalongan,10 September 2002', 15, 'P', 'SMP 2 WIRADESA', 'AP', '', 'Alamat', 'Petukangan rt 03 rw 01', 'Wiradesa', 'Pekalongan', 'TERDAFTAR'),
('13-0010', 10, 'PUTRI FITRIYATI', 'PUTRI', '', 'PEKALONGAN,9 September 2002', 15, 'P', 'MTs S NU KARANGANYAR', 'AP', '', 'Alamat', 'CURUG RT1 RW 3', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('13-0011', 11, 'Mila Rizati', 'MILA', '', 'PEKALONGAN,5 June 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'AP', '082322914929', 'Alamat', 'SIDOREJO RT2 RW 1', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('31-0012', 12, 'DWI RISQIANA', 'DWI', '', 'PEKALONGAN,2 November 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'BB', '', 'Alamat', 'KARANGANYAR GANG 14 RT 3 RW 3', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('31-0013', 13, 'SULISTIYANI', 'SULIS', '', 'PEKALONGAN,20 September 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'BB', '', 'Alamat', 'NGALIAN GANG 1 RT3 RW 3', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('31-0014', 14, 'SUMIATI', 'MIA', '', 'PEKALONGAN,19 June 2002', 15, 'P', 'MTs S NU KARANGANYAR', 'BB', '', 'Alamat', 'NGALIAN RT 3 RW 3', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('31-0015', 15, 'Krisdiana', 'Kris', '', 'Pekalongan,9 November 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'BB', '', 'Alamat', 'Ngalian gang 4', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('13-0016', 16, 'AIDA SUFROTUS SHOFI ', 'AIDA', '', 'PEKALONGAN,5 November 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'AP', '', 'Alamat', 'PUCUNG RT 08 RW 02 ', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('21-0017', 17, 'LAELI KUMAELA', 'LAELI', '', 'PEKALONGAN,10 October 2000', 17, 'P', 'MTs SALAFIYAH WIRADESA', 'AK', '', 'Alamat', 'WIRADESA RT23 RW05', 'WIRADESA', 'Pekalongan', 'TERDAFTAR'),
('21-0018', 18, 'SITI MUTMAINAH', 'MUTMAINAH', '', 'PEKALONGAN,21 August 2000', 17, 'P', 'MTs SALAFIYAH WIRADESA', 'AK', '', 'Alamat', 'WIRADESA RT05 RW02', 'WIRADESA', 'PEKALONGAN', 'TERDAFTAR'),
('21-0019', 19, 'Silvia', 'Silvi', '9987408573', 'Pekalongan, 20 Juni 2002', 15, 'P', 'SMP ISLAM SIMBANGWETAN', 'AK', '089624194423', 'Alamat', 'Simbang Wetan RT02 RW01', 'BUARAN', 'PEKALONGAN', 'TERDAFTAR'),
('21-0020', 20, 'Putri Sulistiowati', 'Putri', '9987408570', 'Pekalongan,1 Desember 2000', 17, 'P', 'SMP ISLAM SIMBANGWETAN', 'AK', '0895704643504', 'Alamat', 'Jenggot wetan / 001/011', 'Pekalongan selatan ', 'Kota pekalongan ', 'TERDAFTAR'),
('54-0021', 21, 'Zidni Ilma Mubarok', 'Zidni', '', 'PEKALONGAN,12 Januari 2001', 16, 'L', 'MTs S NU KARANGANYAR', 'TSM', '', 'Alamat', 'KARANGANYAR GANG 12 RT 3 RW 4', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('51-0022', 22, 'Ahmad Ula Fajrul Falah', 'Ula', '', 'PEKALONGAN,9 Februari 2002', 15, 'L', 'MTs S SIMBANG KULON ', 'TSM', '', 'Alamat', 'Karanganyar Gg.11 ', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('21-0023', 23, 'Mugi rahayu', 'Ayuk', '', 'Pekalongan,24 December 2001', 16, 'P', 'SMP 2 TIRTO', 'AK', '', 'Alamat', 'Silirejo', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('21-0024', 24, 'Sriyati', '', '', 'Pekalongan,31 Desember  2001', 16, 'P', 'MTs S NU KARANGANYAR', 'AK', '', 'Alamat', 'Silirejo 03/01', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('21-0025', 25, 'Kurniati Fitriyah', 'Nia', '', '10/10/2001,', 0, 'P', 'MTs S NU KARANGANYAR', 'AK', '', 'Alamat', 'Silirejo RT 08/02 Gg.Belimbing', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('54-0027', 27, 'Mirzani', 'Zani', '', 'Pekalongan,13 juni  2001', 0, 'L', 'MTs S NU KARANGANYAR', 'TSM', '', 'Alamat', 'Karanganyar Gg.5', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('54-0028', 28, 'Agam Rizqi Bahtiar', 'Agam', '', 'Pekalongan,1 November 2001', 16, 'L', 'MTs S NURUL QOMAR', 'TSM', '', 'Alamat', 'KARANGANYAR  gg12', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('56-0029', 29, 'Muh Maulana Harosi', 'Harosi', '', 'Pekalongan, 21 Mei 2002', 17, 'L', 'MTs S SIMBANG KULON ', 'TSM', '', 'Alamat', 'Pakumbulan', 'BUARAN', 'PEKALONGAN', 'TERDAFTAR'),
('56-0030', 30, 'Moh Lutfi Maulana', 'Lutfi', '', 'Pekalongan,14/06/2001', 17, 'L', 'MTs S SIMBANG KULON ', 'TSM', '', 'Alamat', 'Samborejo/04/02', '', '', 'TERDAFTAR'),
('36-0031', 31, 'Eva Lisa Amelia', 'Lia', '0011811458', 'Pemalang, 24 Januari 2001', 17, 'P', 'Lainnya', 'BB', '082325544614', 'Alamat', 'Tirto rt 02 rw 02', 'Pekalongan Barat', 'Pekalongan', 'TERDAFTAR'),
('25-0032', 32, 'DWI WAHYU LATIFANI', 'Fani', '', 'Pekalongan,26/06/2002', 2017, 'P', 'SMP 1 BUARAN', 'AK', '', 'Alamat', 'Coprayan/05&04', 'Buaran', 'Pekalongan', 'TERDAFTAR'),
('54-0033', 33, 'MOCHAMMAD ILHAM PRAMESTU', 'ILHAM', '', 'PEKALONGAN,5 June 2002', 15, 'L', 'MTs S NU KARANGANYAR', 'TSM', '', 'Alamat', 'Karanganyar gang 6', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('54-0034', 34, 'Agus purwanto', 'Agus', '', 'Pekalongan,16 agustus 2002', 2017, 'L', 'MTs S NU KARANGANYAR', 'TSM', '', 'Alamat', 'Karanganyar rt.02rw.01', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('54-0035', 35, 'Adib hasan', 'Adib', '', 'Pekalongan,02 september 2001', 16, 'L', 'MTs S NU KARANGANYAR', 'TSM', '', 'Alamat', 'Karanganyar rt2 rw 1', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('45-0036', 36, 'M.EDI MAULANA', 'EDI', '', 'PEKALONGAN,10 November 2002', 15, 'L', 'MTs S NU KARANGANYAR', 'TKR', '', 'Alamat', 'SILIREJO RT10 RW02', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('61-0037', 37, 'Eka Prihatini', 'Eka', '', 'Brebes, 30 Januari 2002', 15, 'P', 'SMP 1 LOSARI BREBES', 'TKJ', '083837310553', 'Alamat', 'Kedungneng', 'Losari', 'Brebes', 'TERDAFTAR'),
('16-0038', 38, 'FATLINAH', 'LINA', '', 'PEKALONGAN,24 MEI 2001', 2017, 'P', 'SMP 2 WIRADESA', 'AP', '', 'Alamat', 'BABALAN LOR RT 13 / 04', 'Bojong', 'Pekalongan ', 'TERDAFTAR'),
('12-0039', 39, 'Riska indrianingsih', 'Riska', '0013162297', 'PEKALONGAN,9 October 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'AP', '', 'Alamat', 'Karanganyar gg 16', 'TIRTO', 'PEKALONGAN', 'TERDAFTAR'),
('21-0040', 40, 'Zahrotul Athiyah', 'Athiyah', '', 'Pekalongan,5 February 2002', 15, 'P', 'MTs S NU KARANGANYAR', 'AK', '085803340224', 'Alamat', 'Karanganyar', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('21-0041', 41, 'NUDLURUL ULLA', 'ULA', '', 'Pekalongan,25 June 2002', 15, 'P', 'MTs S NU KARANGANYAR', 'AK', '', 'Alamat', 'Karanganyar', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('13-0042', 42, 'Salamah', 'Salamah', '0018629045', 'PEKALONGAN,16 January 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'AP', '', 'Alamat', 'Pucung rt06 rw02', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('13-0043', 43, 'Ulvi yanah', 'Ulvi', '0029793445', 'Pekalongan,10 February 2001', 16, 'P', 'MTs S NU KARANGANYAR', 'AP', '', 'Alamat', 'Sidorejo 08//03', 'Tirto', 'PEKALONGAN', 'TERDAFTAR'),
('12-0044', 44, 'Ida Fitriyani', 'Ida', '', 'Pekalongan,24 July 2002', 15, 'P', 'MTs S NU KARANGANYAR', 'AP', '', 'Alamat', 'Karanganyar', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('31-0045', 45, 'Dwi fani jayanti', 'Fani', '', 'Pekalongan,8 October 1999', 18, 'P', 'MTs S NU KARANGANYAR', 'BB', '', 'Alamat', 'Tanjung /03 & 02', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('12-0046', 46, 'Sakinatin Nahla', 'Nahla', '0017836230', 'Pekalongan,25 March 2002', 15, 'P', 'MTs S NU KARANGANYAR', 'AP', '', 'Alamat', 'Karanganyar', 'Tirto', 'Pekalongan', 'TERDAFTAR'),
('12-0047', 47, 'Rahma Salsabila', 'Rahma', '', 'Pekalongan,22/10/2001', 16, 'P', 'SMP 2 WIRADESA', 'AP', '085842571204', 'Alamat', 'Delegtukang/ Rt07 Rw04', 'Wiradesa', 'Pekalongan', 'TERDAFTAR'),
('12-0048', 48, 'Leni Andriyani', 'Leni', '', 'Pekalongan,19/12/2001', 16, 'P', 'SMP 2 WIRADESA', 'AP', '088215447249', 'Alamat', 'Delegtukang/Rt02 Rw01', 'Wiradesa', 'Pekalongan', 'TERDAFTAR'),
('46-0049', 49, 'Rido', 'Ido', '74863', 'Pekalongan,14 June 1994', 23, 'L', 'MTs MA`ARIF', 'TKR', '0823874659', 'Alamat', 'Paninggaran rt 03 rw 02', 'Paninggaran', 'Pekalongan', 'TERDAFTAR'),
('52-0050', 50, 'Dika', 'Ika', '8947492', 'Kajen,20 June 2017', 0, 'L', 'MTs S AL-MUTTAQIN ME', 'TSM', '08122', 'Alamat', 'Kebun agung', 'Kajen', 'Pekalongan', 'TERDAFTAR'),
('32-0051', 51, 'Fredi', 'Edi', '', 'Banjarmasin,27 June 1998', 19, 'L', '', 'BB', '', 'Alamat', 'Ddd', '', '', 'TERDAFTAR'),
('45-0052', 52, 'Saif', 'Zezy', '4192823', 'Pekalongan,15 June 1994', 23, 'L', 'MTS AL-AMIN KOTA PEK', 'TKR', '0858786621', 'Alamat', 'Paninggaran rt 03 rw 02', 'Paninggaran', 'Pekalongan', 'TERDAFTAR'),
('52-0053', 53, '', '', '', ',', 0, 'L', '', 'TSM', '', 'Alamat', '', '', '', 'TERDAFTAR'),
('32-0054', 54, '', '', '', ',', 0, 'L', '', 'BB', '', 'Alamat', '', '', '', 'TERDAFTAR'),
('43-0055', 55, '', '', '', ',', 0, 'L', '', 'TKR', '', 'Alamat', '', '', '', 'TERDAFTAR'),
('45-0056', 56, '', '', '', ',19 May 2018', 0, 'L', '', 'TKR', '', 'Alamat', '', '', '', 'TERDAFTAR'),
('15-0057', 57, '', '', '', ',', 0, 'L', '', 'AP', '', 'Alamat', '', '', '', 'TERDAFTAR');

-- --------------------------------------------------------

--
-- Table structure for table `datakeuangan`
--

CREATE TABLE `datakeuangan` (
  `Debit` int(11) NOT NULL,
  `Kredit` int(11) NOT NULL,
  `Saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datalampiran`
--

CREATE TABLE `datalampiran` (
  `NoPDF` varchar(15) NOT NULL,
  `STTB` varchar(11) NOT NULL,
  `rapot` text NOT NULL,
  `aktaLahir` text NOT NULL,
  `kk` text NOT NULL,
  `SKHUN` varchar(11) NOT NULL,
  `IJAZAH` varchar(11) NOT NULL,
  `FOTO` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datalampiran`
--

INSERT INTO `datalampiran` (`NoPDF`, `STTB`, `rapot`, `aktaLahir`, `kk`, `SKHUN`, `IJAZAH`, `FOTO`) VALUES
('65-1', 'Asli', '', '', '', 'asli', 'fotokopi', 'ada'),
('34-2', 'Fotokopi', '', '', '', 'tdk', 'Asli', 'Asli'),
('61-2', 'Fotokopi', '', '', '', 'tdk', 'Fotokopi', 'tdk'),
('12-0001', 'tdk', '', '', '', 'tdk', 'tdk', 'tdk'),
('21-0002', 'tdk', '', '', '', 'tdk', 'tdk', 'tdk'),
('21-0008', 'fotocopi', '', '', '', 'tdk', 'tdk', 'ada'),
('54-0003', 'Fotokopi', '', '', '', 'Asli', 'Fotokopi', 'Asli'),
('12-0004', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('12-0005', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('16-0006', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('14-0007', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('16-0009', 'tdk', 'Fotokopi', 'tdk', 'Fotokopi', 'tdk', 'tdk', 'tdk'),
('13-0011', 'fotokopi', '', '', '', 'tdk', 'tdk', 'ada'),
('31-0012', 'tdk', 'tdk', 'Fotokopi', 'Fotokopi', 'tdk', 'tdk', 'tdk'),
('13-0010', 'ada', '', '', '', 'tdk', 'tdk', 'ada'),
('31-0013', 'tdk', '', '', '', 'tdk', 'tdk', 'tdk'),
('31-0014', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('31-0015', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('13-0016', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('21-0018', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('21-0017', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('21-0019', 'tdk', 'Fotokopi', 'Fotokopi', 'Fotokopi', 'tdk', 'tdk', 'tdk'),
('21-0020', 'tdk', 'Fotokopi', 'Fotokopi', 'Fotokopi', 'tdk', 'tdk', 'tdk'),
('54-0021', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('51-0022', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('54-0028', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('54-0027', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('21-0025', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('21-0024', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('21-0023', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('56-0030', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('56-0029', 'tdk', 'Fotokopi', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('36-0031', 'tdk', 'tdk', 'Fotokopi', 'Fotokopi', 'Asli', 'Fotokopi', 'Asli'),
('25-0032', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('54-0033', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('54-0034', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('54-0035', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk', 'tdk'),
('45-0036', 'tdk', '', '', '', 'tdk', 'tdk', 'tdk'),
('61-0037', 'Fotokopi', '', '', '', 'tdk', 'tdk', 'Asli'),
('16-0038', 'Fotokopi', '', '', '', 'tdk', 'tdk', 'tdk'),
('12-0047', 'tdk', 'Fotokopi', 'Fotokopi', 'Fotokopi', 'tdk', 'tdk', 'tdk'),
('12-0048', 'tdk', 'Fotokopi', 'Fotokopi', 'Fotokopi', 'tdk', 'tdk', 'tdk'),
('12-0046', 'tdk', 'tdk', 'Fotokopi', 'Fotokopi', 'tdk', 'tdk', 'Asli'),
('46-0049', 'Fotokopi', 'tdk', 'tdk', 'tdk', 'tdk', 'Fotokopi', 'tdk');

-- --------------------------------------------------------

--
-- Table structure for table `datanilai`
--

CREATE TABLE `datanilai` (
  `NoPDF` varchar(15) NOT NULL,
  `TglLulus` text NOT NULL,
  `NoIjaza` varchar(15) NOT NULL,
  `NilaiIndo` int(11) NOT NULL,
  `NilaiMTK` int(11) NOT NULL,
  `NilaiEngl` int(11) NOT NULL,
  `NilaiIPA` int(11) NOT NULL,
  `NilaiUNMTK` varchar(5) NOT NULL,
  `NilaiUNIndo` varchar(5) NOT NULL,
  `NilaiUNEngl` varchar(5) NOT NULL,
  `NilaiUNIPA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datanilai`
--

INSERT INTO `datanilai` (`NoPDF`, `TglLulus`, `NoIjaza`, `NilaiIndo`, `NilaiMTK`, `NilaiEngl`, `NilaiIPA`, `NilaiUNMTK`, `NilaiUNIndo`, `NilaiUNEngl`, `NilaiUNIPA`) VALUES
('12-0001', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0002', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0008', '', 'Belum', 78, 70, 76, 76, '', '', '', ''),
('54-0003', '11 Juni 2016', 'Belum', 95, 75, 78, 78, '40', '86', '60', '50'),
('12-0004', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('12-0005', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('16-0006', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('14-0007', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('16-0009', '', 'Belum', 78, 75, 75, 76, '', '', '', ''),
('13-0010', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('13-0011', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('31-0012', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('31-0013', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('31-0014', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('31-0015', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('13-0016', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0017', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0018', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0019', '2 Juni 2017', 'Belum', 77, 73, 73, 75, '', '', '', ''),
('21-0020', '2 Juni 2017', 'Belum', 73, 70, 70, 70, '', '', '', ''),
('54-0021', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('51-0022', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0023', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0024', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0025', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('54-0027', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('54-0028', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('56-0029', '', 'Belum', 79, 79, 75, 77, '', '', '', ''),
('56-0030', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('36-0031', '11 Juni 2016', 'Belum', 0, 0, 0, 0, '35.0', '82.0', '32.0', '37.5'),
('25-0032', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('54-0033', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('54-0034', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('54-0035', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('45-0036', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('61-0037', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('16-0038', '', 'Belum', 79, 75, 75, 76, '', '', '', ''),
('12-0039', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0040', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('21-0041', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('13-0042', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('13-0043', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('12-0044', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('31-0045', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('12-0046', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('12-0047', '', 'Belum', 79, 75, 75, 76, '', '', '', ''),
('12-0048', '', 'Belum', 90, 85, 75, 91, '', '', '', ''),
('46-0049', '21 June 2010', 'Belum', 7, 6, 8, 7, '3', '3', '3', '4'),
('52-0050', '8 June 2010', 'Belum', 7, 8, 8, 7, '7', '6', '6', '8'),
('32-0051', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('45-0052', '17 June 2017', 'Belum', 7, 8, 8, 7, '7', '6', '6', '8'),
('52-0053', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('32-0054', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('43-0055', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('45-0056', '', 'Belum', 0, 0, 0, 0, '', '', '', ''),
('15-0057', '', 'Belum', 0, 0, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dataortu`
--

CREATE TABLE `dataortu` (
  `NoPDF` varchar(15) NOT NULL,
  `NamaAyah` varchar(20) NOT NULL,
  `TamatanAyah` varchar(20) NOT NULL,
  `PekerjaanAyah` varchar(20) NOT NULL,
  `NamaIbu` varchar(20) NOT NULL,
  `TamatanIbu` varchar(20) NOT NULL,
  `PekerjaanIbu` varchar(20) NOT NULL,
  `NamaWali` varchar(20) NOT NULL,
  `TamatanWali` varchar(20) NOT NULL,
  `PekerjaanWali` text NOT NULL,
  `AgamaAyah` text NOT NULL,
  `AgamaIbu` text NOT NULL,
  `AgamaWali` text NOT NULL,
  `AlamatAyah` text NOT NULL,
  `AlamatIbu` text NOT NULL,
  `AlamatWali` text NOT NULL,
  `NoHPAyah` varchar(15) NOT NULL,
  `NoHPIbu` varchar(15) NOT NULL,
  `NoHPWali` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataortu`
--

INSERT INTO `dataortu` (`NoPDF`, `NamaAyah`, `TamatanAyah`, `PekerjaanAyah`, `NamaIbu`, `TamatanIbu`, `PekerjaanIbu`, `NamaWali`, `TamatanWali`, `PekerjaanWali`, `AgamaAyah`, `AgamaIbu`, `AgamaWali`, `AlamatAyah`, `AlamatIbu`, `AlamatWali`, `NoHPAyah`, `NoHPIbu`, `NoHPWali`) VALUES
('12-0001', 'Lilik Ruswandi', 'Tamat SMP / Sederaja', 'Buruh', 'Daryati', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'BANYURIP ALIT Gg.3A', 'BANYURIP ALIT Gg.3A', '', '085811619122', '085811619122', ''),
('21-0002', 'ZAMROZI', 'Tamat SD / Sederajat', 'Buruh ', 'Casti', 'Tamat SD / Sederajat', 'Ibu rumah tangga ', '', '', '', 'Islam', 'Islam', '', 'Banyurip Alit Gg.1', 'Banyurip Alit Gg.1', '', '', '', ''),
('21-0008', 'Kusfianto', 'Tamat SD / Sederajat', 'Dagang', 'Muyassaroh', 'Tamat SD / Sederajat', 'Ibu rumah tangga ', '', '', '', 'Islam', 'Islam', '', 'Karanganyar gg15', 'Karanganyar gg15', '', '', '', ''),
('54-0003', 'Dawud', 'Tidak Tamat SD', 'Buruh', 'Royanah', 'Tidak Tamat SD', 'Buruh', '', '', '', 'Islam', 'Islam', '', 'Jl.KH.Samanhudi Pasir sari Rt 03/06', 'Jl.KH.Samanhudi Pasir sari Rt 03/06', '', '', '', ''),
('12-0004', 'Zaenal Abidin', 'Tamat SMK / Sederaja', 'Buruh', 'Fatimah ', 'Tamat SMK / Sederaja', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Tegalrejo', 'Tegalrejo', '', '', '', ''),
('12-0005', 'M. Rokib', 'Tamat SMP / Sederaja', '', 'Anik Mulyani', 'Tidak Tamat SD', '', '', '', '', 'Islam', 'Islam', '', 'JL.GAJAH MADA BARAT RT.01/RW.01 NO.53', '', '', '085712646657', '', ''),
('16-0006', 'A. Khudlori', 'Tamat SD / Sederajat', 'Buruh', 'Dina Rohayati', 'Tamat SMP / Sederaja', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Buaran Gg.1 Pekalongan', 'Buaran Gg 1 Pekalongan', '', '', '', ''),
('14-0007', 'Hardono', 'Tamat SMK / Sederaja', 'Buruh', 'Siti Khotijah', 'Tamat SD / Sederajat', 'Pedagang', '', '', '', 'Islam', 'Islam', '', 'Peturen Tirto Gg 18 Rt.03 Rw.05 Pekalongan Barat', 'Peturen Tirto Gg 18 Rt.03 Rw.05 Pekalongan Barat', '', '085842049229', '', ''),
('16-0009', 'Tasurun', 'Tamat SD / Sederajat', 'Buruh', 'Indanah', 'Tamat SD / Sederajat', 'Buruh', '', '', '', 'Islam', 'Islam', '', 'Desa petukangan rt 03/01, kecamatan wiradesa', 'Desa petukangan rt 03/01 KECAMATAN WIRADESA', '', '', '', ''),
('13-0010', 'JALIL HARYANTO', 'Tamat SMK / Sederaja', 'BURUH', 'KHOTIJAH', 'Tamat SD / Sederajat', 'BURUH', '', '', '', 'Islam', 'Islam', '', 'CURUG TIRTO PEKALONGAN', 'CURUG TIRTO PEKALONGAN', '', '', '', ''),
('13-0011', 'KASNURI', 'Tamat SD / Sederajat', 'BURUH', 'JANTUN', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'SIDOREJO TIRTO PEKALONGAN', 'SIDOREJO TIRTO PEKALONGAN', '', '085865815043', '', ''),
('31-0012', 'MUH KUNTORO', 'Tamat SMP / Sederaja', 'BURUH', 'KASTURAH', 'Tidak Tamat SD', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'KARANGANYAR TIRTO', 'KARANGANYAR TIRTO', '', '', '', ''),
('31-0013', 'MASKUR', 'Tamat SMP / Sederaja', 'BURUH', 'KASBIYAH', 'Tamat SD / Sederajat', 'BURUH', '', '', '', 'Islam', 'Islam', '', 'PEKAJANGAN', 'NGALIAN', '', '', '', ''),
('31-0014', 'BAMBANG WIJOARTO', 'Tamat SD / Sederajat', 'BURUH', 'ROHMI', 'Tamat SD / Sederajat', 'KARYAWATI', '', '', '', 'Islam', 'Islam', '', 'WULED', 'NGALIAN', '', '', '', ''),
('31-0015', 'Nasirin', 'Tamat SD / Sederajat', 'Karyawan', 'Rokhimah', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Ngalian tirto pekalongan', 'Ngalian tirto pekalongan', '', '', '', ''),
('13-0016', 'M. KHAMDUN', 'Tamat SD / Sederajat', 'BURUH', 'NUR MALIKHA', 'Tamat SMK / Sederaja', '', '', '', '', 'Islam', 'Islam', '', 'PUCUNG', 'PUCUNG', '', '', '', ''),
('21-0017', 'NASIR', 'Tamat SD / Sederajat', 'BURUH', 'TUMI', 'Tamat SD / Sederajat', 'Buruh', '', '', '', 'Islam', 'Islam', '', 'WIRADESA RT23 RW05', 'WIRADESA RT23 RW05', '', '', '', ''),
('21-0018', 'AMAT DOHAN', 'Tamat SD / Sederajat', 'BURUH', 'DAMIRUN', 'Tamat SD / Sederajat', 'BURUH', '', '', '', 'Islam', 'Islam', '', 'WIRADESA RT05 RW02', 'WIRADESA RT05 RW02', '', '', '', ''),
('21-0019', 'FALAHUDIN', 'Tamat SD / Sederajat', 'BURUH', 'KHUNAIZAH', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Simbang wetan buaran pekalongan', 'Simbang wetan buaran pekalongan', '', '', '085878246633', ''),
('21-0020', 'Mulyadi', 'Tamat SD / Sederajat', 'Karyawan swasta', 'Dewi amanati', 'Tamat SD / Sederajat', 'Buruh harian lewas', '', '', '', 'Islam', 'Islam', '', 'Pekalongan jenggotwetan rt 001 rw 011', 'Pekalongan jenggot wetan rt 001 rw 011', '', '', '085842575411', ''),
('54-0021', 'Suratno', 'Tidak Tamat SD', 'BURUH', 'Bawon hayati', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Karanganyar tirto', 'Karanganyar tirto', '', '', '', ''),
('51-0022', 'Ahmad bashori', 'Tamat SMK / Sederaja', 'Buruh', 'Kholifah', 'Tamat SMK / Sederaja', 'Ibu rumah tangga ', '', '', '', 'Islam', 'Islam', '', 'Karanganyar tirto pekalongan ', 'Karanganyar tirto pekalongan', '', '', '', ''),
('21-0023', 'Taali', 'Pilih', 'Buruh', 'Carmuti', 'Pilih', 'Buruh', '', '', '', 'Islam', 'Islam', '', 'Silirejo', 'Silirejo', '', '', '', ''),
('21-0024', 'Hartono', 'Pilih', 'Buruh ', 'Daninggar', 'Pilih', 'Ibu rumah tangga ', 'Hartono', '', '', 'Islam', 'Islam', '', 'Silirejo Tirto', 'Silirejo Tirto', '', '', '', ''),
('21-0025', 'Tasmono', 'Tidak Tamat SD', 'Buruh', 'Saritah', 'Tidak Tamat SD', 'Ibu rumah tangga', 'Tasmono', '', '', 'Islam', 'Islam', '', 'Silirejo', 'Silirejo', '', '', '', ''),
('54-0028', 'Solhan', 'Pilih', 'Buruh', 'Yuhana', 'Pilih', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Karanganyar gg 12', 'Karanganyar gg 12', '', '', '', ''),
('54-0027', 'Syafii', '', 'Dagang', 'Isnaini', '', 'IRT', '', '', '', 'Islam', 'Islam', '', 'Karanganyar', 'Karanganyar', '', '', '', ''),
('56-0029', 'Ahmadi', 'Tamat SMK / Sederaja', 'Karyawan', 'Nuryati', 'Tamat SMP / Sederaja', 'Pedagang', '', '', '', 'Islam', 'Islam', '', 'Pakumbulan, Buaran pekalongan', 'Pakumbulan buaran pekalongan', '', '', '', ''),
('56-0030', 'Kamilin', 'Pilih', 'Buruh', 'Khamidah', 'Pilih', 'Buruh', '', '', 'Buruh', 'Islam', 'Islam', 'Islam', 'Samborejo tirto', 'Samborejo tirto', 'Samborejo tirto', '', '', ''),
('36-0031', 'Imam untung', 'Tamat SD / Sederajat', 'Wiraswasta', 'Huda mardiana', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Tirto rt 02 rw 02', 'Tirto rt 02 rw 02', '', '085210592120', '', ''),
('25-0032', 'Dony Prasetyo', 'Tamat SMK / Sederaja', 'Buruh', 'Nur Khana Fitri Hand', 'Tamat SMP / Sederaja', 'Ibu rumah tangga ', '', '', '', 'Islam', 'Islam', '', 'Coprayan barat gg 2', 'Coprayan barat gg  2', '', '', '', ''),
('54-0033', 'TARYONO', 'Tamat SMP / Sederaja', 'BURUH', 'NUR KHAKIMAH', 'Tamat SMK / Sederaja', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'KARANGANYAR TIRTO PEKALONGAN', 'KARANGANYAR TIRTO PEKALONGAN', '', '', '', ''),
('54-0034', 'Alm.wahidi', 'Pilih', '', 'Raatun', 'Pilih', 'Buruh', '', '', '', 'Islam', 'Islam', '', 'Karanganyar gang 3 RT.02Rw.01', 'Karanganyar gang 3 RT02RW.01', '', '', '', ''),
('54-0035', 'Muqorrobin', 'Pilih', '', 'Fatkhul jannah', 'Pilih', '', '', '', '', 'Islam', 'Islam', '', 'Karanganyar', 'Karanganyar', '', '', '', ''),
('45-0036', 'SODIKIN', 'Tamat SD / Sederajat', 'PEDAGANG', 'SOLEKHA', 'Pilih', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'SILIREJO TIRTO PEKALONGAN', 'SILIREJO TIRTO PEKALONGAN', '', '', '', ''),
('16-0038', 'Muhtarom ', 'Tamat SD / Sederajat', 'Buruh', 'Slamet rahayu', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Desa babalan lor rt 13/04', 'Desa babalan lor rt 13/04', '', '', '', ''),
('12-0039', 'Wakhidun', 'Tamat SMP / Sederaja', 'BURUH', 'Misrokha', 'Tidak Tamat SD', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Karanganyar tirto pekalongan', 'Karanganyar tirto pekalongan', '', '', '', ''),
('21-0040', 'Sayyidi', 'Tamat SD / Sederajat', '', 'Umayah', 'Tamat SD / Sederajat', 'Ibu Rumah Tangga', '', '', '', 'Islam', 'Islam', '', 'Karanganyar', 'Karanganyar', '', '', '', ''),
('21-0041', 'AKROM', 'Tamat SD / Sederajat', 'Buruh', 'MARYANAH', 'Tamat SD / Sederajat', 'Buruh', '', '', '', 'Islam', 'Islam', '', 'Karanganyar', 'Karanganyar', '', '', '', ''),
('13-0042', 'Nur khamim alm', 'Tamat SMP / Sederaja', '', 'Siti khodiyah', 'Tamat SMK / Sederaja', 'Buruh', '', '', '', 'Islam', 'Islam', '', '', 'Pucung tirto pekalongan', '', '', '', ''),
('13-0043', 'Samudi', 'Tamat SMP / Sederaja', 'Penjahit', 'Fatonah', 'Tidak Tamat SD', 'Ibu rumah tangga ', '', '', '', 'Islam', 'Islam', '', 'Desa sidorejo', 'Desa sidorejo', '', '', '', ''),
('12-0044', 'Zubair', 'Tamat SD / Sederajat', 'Petani', 'Mutmainah', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Karanganyar Gg 14', 'Karanganyar Gg 14', '', '', '', ''),
('31-0045', 'Safarudin', 'Tamat SMP / Sederaja', 'Buruh', 'Ani herningsih', 'Tamat SMK / Sederaja', 'Ibu rumah tangga ', '', '', '', 'Islam', 'Islam', '', 'Perum pepabri tanjung tirto', 'Perum pepabri tanjung', '', '', '', ''),
('12-0046', 'Safudin', 'Tamat SD / Sederajat', 'Buruh', 'Muzarofah', 'Tamat SD / Sederajat', 'Buruh', '', '', '', 'Islam', 'Islam', '', 'Karanganyar Gg13', 'Karanganyar 13', '', '', '', ''),
('12-0047', 'Kasiyanto', 'Tamat SD / Sederajat', 'Buruh', 'Riskiyah', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Ds.Delegtukang Rt07 Rw04', 'Ds.Delegtukang Rt07 Rw04', '', '', '', ''),
('12-0048', 'Sumito', 'Tamat SD / Sederajat', 'Buruh', 'Casriyah', 'Tamat SD / Sederajat', 'Ibu rumah tangga', '', '', '', 'Islam', 'Islam', '', 'Ds. Delegtukang Rt02 Rw01', 'Ds. Delegtukang Rt02 Rw01', '', '', '', ''),
('46-0049', 'Aslam', 'Tamat SD / Sederajat', 'Petani', '', 'Tamat SMP / Sederaja', '', '', 'Tamat SMP / Sederaja', '', 'Islam', 'Islam', 'Islam', 'Pekalongan', 'Pekalongan', 'Pekalongan', '', '', ''),
('52-0050', 'Abi', 'Tamat SMK / Sederaja', 'Petani', '', 'Tamat SD / Sederajat', 'Pedagang', 'Paijo', 'Tamat SD / Sederajat', 'Masinis', 'Islam', 'Islam', 'Islam', 'Pekalongan', 'Pekalongan', 'Pekalongan', '09833778', '93872645', '09836527'),
('32-0051', '', 'Pilih', '', '', 'Pilih', '', '', '', '', 'Islam', 'Islam', '', '', '', '', '', '', ''),
('45-0052', 'Abi', 'Sarjana', 'Petani', 'War', 'Tamat SD / Sederajat', 'Pedagang', 'Paijo', 'Tamat SD / Sederajat', 'Masinis', 'Islam', 'Hindu', 'Islam', 'Kesesi', 'Malaysia', 'Jakarta', '0897689232', '93872645', '09836527'),
('52-0053', '', 'Pilih', '', '', 'Pilih', '', '', '', '', 'Islam', 'Islam', '', '', '', '', '', '', ''),
('32-0054', '', 'Pilih', '', '', 'Pilih', '', '', '', '', 'Islam', 'Islam', '', '', '', '', '', '', ''),
('43-0055', '', 'Pilih', '', '', 'Pilih', '', '', '', '', 'Islam', 'Islam', '', '', '', '', '', '', ''),
('45-0056', '', 'Pilih', '', '', 'Pilih', '', '', '', '', 'Islam', 'Islam', '', '', '', '', '', '', ''),
('15-0057', '', 'Pilih', '', '', 'Pilih', '', '', '', '', 'Islam', 'Islam', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `datates`
--

CREATE TABLE `datates` (
  `NoPdf` varchar(10) NOT NULL,
  `TglDaftar` text NOT NULL,
  `TglTes` text NOT NULL,
  `WaktuTes` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datates`
--

INSERT INTO `datates` (`NoPdf`, `TglDaftar`, `TglTes`, `WaktuTes`) VALUES
('12-0001', '07 May 2017', '16 May 2017', ''),
('21-0002', '07 May 2017', '16 May 2017', ''),
('21-0008', '10 May 2017', '16 May 2017', '08:00 WIB'),
('54-0003', '10 May 2017', '16 May 2017', '08:00 WIB'),
('12-0004', '10 May 2017', '16 May 2017', '08:00 WIB'),
('12-0005', '10 May 2017', '16 May 2017', '08:00 WIB'),
('16-0006', '10 May 2017', '16 May 2017', '08:00 WIB'),
('14-0007', '10 May 2017', '16 May 2017', '08:00 WIB'),
('16-0009', '10 May 2017', '16 May 2017', '08:00 WIB'),
('13-0010', '10 May 2017', '16 May 2017', '08:00 WIB'),
('13-0011', '10 May 2017', '16 May 2017', '08:00 WIB'),
('31-0012', '10 May 2017', '16 May 2017', '08:00 WIB'),
('31-0013', '10 May 2017', '16 May 2017', '08:00 WIB'),
('31-0014', '10 May 2017', '16 May 2017', '08:00 WIB'),
('31-0015', '10 May 2017', '16 May 2017', '08:00 WIB'),
('13-0016', '10 May 2017', '16 May 2017', '08:00 WIB'),
('21-0017', '10 May 2017', '16 May 2017', '08:00 WIB'),
('21-0018', '10 May 2017', '16 May 2017', '08:00 WIB'),
('21-0019', '11 May 2017', '16 May 2017', '08:00 WIB'),
('21-0020', '11 May 2017', '16 May 2017', '08:00 WIB'),
('54-0021', '11 May 2017', '16 May 2017', '08:00 WIB'),
('51-0022', '11 May 2017', '16 May 2017', '08:00 WIB'),
('21-0023', '11 May 2017', '16 May 2017', '08:00 WIB'),
('21-0024', '11 May 2017', '16 May 2017', '08:00 WIB'),
('21-0025', '11 May 2017', '16 May 2017', '08:00 WIB'),
('54-0027', '11 May 2017', '16 May 2017', '08:00 WIB'),
('54-0028', '11 May 2017', '16 May 2017', '08:00 WIB'),
('56-0029', '13 May 2017', '16 May 2017', '08:00 WIB'),
('56-0030', '13 May 2017', '16 May 2017', '08:00 WIB'),
('36-0031', '13 May 2017', '16 May 2017', '08:00 WIB'),
('25-0032', '13 May 2017', '16 May 2017', '08:00 WIB'),
('54-0033', '13 May 2017', '16 May 2017', '08:00 WIB'),
('54-0034', '13 May 2017', '16 May 2017', '08:00 WIB'),
('54-0035', '13 May 2017', '16 May 2017', '08:00 WIB'),
('45-0036', '13 May 2017', '16 May 2017', '08:00 WIB'),
('61-0037', '13 May 2017', '16 May 2017', '08:00 WIB'),
('16-0038', '13 May 2017', '16 May 2017', '08:00 WIB'),
('12-0039', '13 May 2017', '16 May 2017', '08:00 WIB'),
('21-0040', '13 May 2017', '16 May 2017', '08:00 WIB'),
('21-0041', '13 May 2017', '16 May 2017', '08:00 WIB'),
('13-0042', '13 May 2017', '16 May 2017', '08:00 WIB'),
('13-0043', '13 May 2017', '16 May 2017', '08:00 WIB'),
('12-0044', '13 May 2017', '16 May 2017', '08:00 WIB'),
('31-0045', '13 May 2017', '16 May 2017', '08:00 WIB'),
('12-0046', '13 May 2017', '16 May 2017', '08:00 WIB'),
('12-0047', '13 May 2017', '16 May 2017', '08:00 WIB'),
('12-0048', '13 May 2017', '16 May 2017', '08:00 WIB'),
('46-0049', '06 Jun 2017', '16 May 2017', '08:00 WIB'),
('52-0050', '06 Jun 2017', '16 May 2017', '08:00 WIB'),
('32-0051', '06 Jun 2017', '16 May 2017', '08:00 WIB'),
('45-0052', '14 Jun 2017', '16 May 2017', '08:00 WIB'),
('52-0053', '08 May 2018', '16 May 2017', '08:00 WIB'),
('32-0054', '08 May 2018', '16 May 2017', '08:00 WIB'),
('43-0055', '11 May 2018', '13 April 2017', '08:00 WIB'),
('45-0056', '11 May 2018', '13 April 2017', '08:00 WIB'),
('15-0057', '29 Mar 2019', '13 April 2017', '08:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `infoppdb`
--

CREATE TABLE `infoppdb` (
  `waktu` text NOT NULL,
  `tanggal` text NOT NULL,
  `id` int(1) NOT NULL,
  `petugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infoppdb`
--

INSERT INTO `infoppdb` (`waktu`, `tanggal`, `id`, `petugas`) VALUES
('08:00 WIB', '13 April 2017', 0, 'Syukroni Vaza, ST.');

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `JmlJur` int(6) NOT NULL,
  `NamaJur` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataasalsekolah`
--
ALTER TABLE `dataasalsekolah`
  ADD PRIMARY KEY (`IdSekolah`);

--
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`NamaJur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dataasalsekolah`
--
ALTER TABLE `dataasalsekolah`
  MODIFY `IdSekolah` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

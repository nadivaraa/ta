-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 10:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsaya2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `EMAIL_ADM` varchar(50) NOT NULL,
  `NAMA_ADM` varchar(50) NOT NULL,
  `PASS_ADM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`EMAIL_ADM`, `NAMA_ADM`, `PASS_ADM`) VALUES
('nramandani@gmail.com', 'nadiva', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_jaminan`
--

CREATE TABLE `dokumen_jaminan` (
  `ID_DJ` int(11) NOT NULL,
  `ID_VJ` int(11) DEFAULT NULL,
  `SERHHS_DJ` text DEFAULT NULL,
  `IMB_DJ` text DEFAULT NULL,
  `PBB_DJ` text DEFAULT NULL,
  `AJB_DJ` text DEFAULT NULL,
  `JALAN_DJ` tinyint(2) NOT NULL,
  `HARGAR_DJ` int(2) NOT NULL,
  `TOWER_DJ` tinyint(2) NOT NULL,
  `SUNGAI_DJ` tinyint(2) NOT NULL,
  `SATE_DJ` tinyint(2) NOT NULL,
  `MAKAM_DJ` tinyint(2) NOT NULL,
  `LISTRIKAIR_DJ` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_karyawan`
--

CREATE TABLE `dokumen_karyawan` (
  `ID_DK` int(11) NOT NULL,
  `ID_VD` int(11) DEFAULT NULL,
  `KTP_DK` text DEFAULT NULL,
  `KTPPAS_DK` text DEFAULT NULL,
  `AKTANIK_DK` text DEFAULT NULL,
  `AKTAPIS_DK` text DEFAULT NULL,
  `KK_DK` text DEFAULT NULL,
  `NPWP_DK` text DEFAULT NULL,
  `SLIPGAJI_DK` text DEFAULT NULL,
  `SPERNYATAAN_DK` text DEFAULT NULL,
  `SPEMESANAN_DK` text DEFAULT NULL,
  `BPEMBAYARAN_DK` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_profesional`
--

CREATE TABLE `dokumen_profesional` (
  `ID_DP` int(11) NOT NULL,
  `ID_VD` int(11) DEFAULT NULL,
  `KTP_DP` text DEFAULT NULL,
  `KTPPAS_DP` text DEFAULT NULL,
  `AKTANIK_DP` text DEFAULT NULL,
  `AKTAPIS_DP` text DEFAULT NULL,
  `KK_DP` text DEFAULT NULL,
  `NPWP_DP` text DEFAULT NULL,
  `NPWPUSH_DP` text DEFAULT NULL,
  `SPERNYATAAN_DP` text DEFAULT NULL,
  `SPEMESANAN_DP` text DEFAULT NULL,
  `BPEMBAYARAN_DP` text DEFAULT NULL,
  `IZINPRAK_DP` text DEFAULT NULL,
  `REKKOR_DP` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen_profesional`
--

INSERT INTO `dokumen_profesional` (`ID_DP`, `ID_VD`, `KTP_DP`, `KTPPAS_DP`, `AKTANIK_DP`, `AKTAPIS_DP`, `KK_DP`, `NPWP_DP`, `NPWPUSH_DP`, `SPERNYATAAN_DP`, `SPEMESANAN_DP`, `BPEMBAYARAN_DP`, `IZINPRAK_DP`, `REKKOR_DP`) VALUES
(10, 17, 'http://localhost/ta/uploads/dok_ktp/WhatsApp_Image_2022-03-28_at_08_37_09_(1)1.jpeg', 'http://localhost/ta/uploads/dok_ktppas/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg', 'http://localhost/ta/uploads/dok_aktanik/Capture3.PNG', 'http://localhost/ta/uploads/dok_aktapis/Capture_(1)5.PNG', 'http://localhost/ta/uploads/dok_kk/Capture6.PNG', 'http://localhost/ta/uploads/dok_npwp/Capture2.PNG', 'http://localhost/ta/uploads/dok_npwpush/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg', 'http://localhost/ta/uploads/dok_spkredit/Capture5.PNG', 'http://localhost/ta/uploads/dok_sprumah/Capture_(1)3.PNG', 'http://localhost/ta/uploads/dok_bukti/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg', 'http://localhost/ta/uploads/dok_izinprak/Capture.PNG', 'http://localhost/ta/uploads/dok_rekkor/Capture3.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_wiraswasta`
--

CREATE TABLE `dokumen_wiraswasta` (
  `ID_DW` int(11) NOT NULL,
  `ID_VD` int(11) DEFAULT NULL,
  `KTP_DW` text DEFAULT NULL,
  `KTPPAS_DW` text DEFAULT NULL,
  `AKTANIK_DW` text DEFAULT NULL,
  `AKTAPIS_DW` text DEFAULT NULL,
  `KK_DW` text DEFAULT NULL,
  `NPWP_DW` text DEFAULT NULL,
  `NPWPUSH_DW` text DEFAULT NULL,
  `SPERNYATAAN_DW` text DEFAULT NULL,
  `SPEMESANAN_DW` text DEFAULT NULL,
  `BPEMBAYARAN_DW` text DEFAULT NULL,
  `SIUP_DW` text DEFAULT NULL,
  `REKKOR_DW` text DEFAULT NULL,
  `TDP_DW` text DEFAULT NULL,
  `AKTAPEND_DW` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_dokumen`
--

CREATE TABLE `kriteria_dokumen` (
  `ID_KD` int(11) NOT NULL,
  `NAMA_KD` varchar(255) DEFAULT NULL,
  `BOBOT_KD` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_dokumen`
--

INSERT INTO `kriteria_dokumen` (`ID_KD`, `NAMA_KD`, `BOBOT_KD`) VALUES
(3, 'Tidak Layakk', 0.55);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_jaminan`
--

CREATE TABLE `kriteria_jaminan` (
  `ID_KJ` int(11) NOT NULL,
  `NAMA_KJ` varchar(255) DEFAULT NULL,
  `BOBOT_KJ` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_kemampuan_bayar`
--

CREATE TABLE `kriteria_kemampuan_bayar` (
  `ID_KMB` int(11) NOT NULL,
  `NAMA_KMB` varchar(255) DEFAULT NULL,
  `BOBOT_KMB` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_kemampuan_bayar`
--

INSERT INTO `kriteria_kemampuan_bayar` (`ID_KMB`, `NAMA_KMB`, `BOBOT_KMB`) VALUES
(1, 'Tidak Mampu', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_pengecekkan_slik`
--

CREATE TABLE `kriteria_pengecekkan_slik` (
  `ID_KPS` int(11) NOT NULL,
  `NAMA_KPS` varchar(255) DEFAULT NULL,
  `BOBOT_KPS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_pengecekkan_slik`
--

INSERT INTO `kriteria_pengecekkan_slik` (`ID_KPS`, `NAMA_KPS`, `BOBOT_KPS`) VALUES
(1, 'ilham', '0.4'),
(2, 'boli', '0.5');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `NAMA_NAS` varchar(255) DEFAULT NULL,
  `PASS_NAS` varchar(255) DEFAULT NULL,
  `EMAIL_NAS` varchar(255) NOT NULL,
  `NOTLP_NAS` varchar(13) NOT NULL,
  `PEKERJAAN_NAS` varchar(50) DEFAULT NULL,
  `TGLLHR_NAS` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`NAMA_NAS`, `PASS_NAS`, `EMAIL_NAS`, `NOTLP_NAS`, `PEKERJAAN_NAS`, `TGLLHR_NAS`) VALUES
('Nadiva', '827ccb0eea8a706c4c34a16891f84e7b', 'nramandani@gmail.com', '085707877101', '1', '2000-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `verif_dokumen`
--

CREATE TABLE `verif_dokumen` (
  `ID_VD` int(11) NOT NULL,
  `EMAIL_NAS` varchar(255) DEFAULT NULL,
  `ID_KD` int(11) DEFAULT NULL,
  `JENIS_VD` smallint(6) DEFAULT 0,
  `STATUS_VD` tinyint(4) DEFAULT 0,
  `STATUSVERIF_VD` tinyint(4) DEFAULT 0,
  `KOMENTAR_VD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verif_dokumen`
--

INSERT INTO `verif_dokumen` (`ID_VD`, `EMAIL_NAS`, `ID_KD`, `JENIS_VD`, `STATUS_VD`, `STATUSVERIF_VD`, `KOMENTAR_VD`) VALUES
(17, 'nramandani@gmail.com', NULL, 1, 3, 0, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `verif_jaminan`
--

CREATE TABLE `verif_jaminan` (
  `ID_VJ` int(11) DEFAULT NULL,
  `EMAIL_NAS` varchar(255) DEFAULT NULL,
  `ID_KJ` int(11) DEFAULT NULL,
  `KESDOK_VJ` smallint(6) DEFAULT NULL,
  `HARGRUM_VJ` smallint(6) DEFAULT NULL,
  `JALAN_VJ` smallint(6) DEFAULT NULL,
  `TOWER_VJ` smallint(6) DEFAULT NULL,
  `SUNGAI_VJ` smallint(6) DEFAULT NULL,
  `TUSUK_VJ` smallint(6) DEFAULT NULL,
  `MAKAM_VJ` smallint(6) DEFAULT NULL,
  `LISTRIKAIR_VJ` smallint(6) DEFAULT NULL,
  `STATUS_VJ` smallint(6) NOT NULL COMMENT '0: draft; 1: menunggu; 2: memenuhi; 3: tidak memenuhi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verif_kemampuan_bayar`
--

CREATE TABLE `verif_kemampuan_bayar` (
  `ID_VKB` int(11) NOT NULL,
  `EMAIL_NAS` varchar(255) DEFAULT NULL,
  `ID_KMB` int(11) DEFAULT NULL,
  `GAJI_VKB` int(11) DEFAULT NULL,
  `HARRUM_VKB` int(11) DEFAULT NULL,
  `DURCIL_VKB` int(11) DEFAULT NULL,
  `USIA_VKB` int(11) NOT NULL,
  `KEBRUMTA_VKB` int(11) NOT NULL,
  `CICILLAIN_VKB` int(11) NOT NULL,
  `DP_VKB` int(11) NOT NULL,
  `HARRUMBANK_VKB` int(11) NOT NULL,
  `ANGBUL_VKB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verif_kemampuan_bayar`
--

INSERT INTO `verif_kemampuan_bayar` (`ID_VKB`, `EMAIL_NAS`, `ID_KMB`, `GAJI_VKB`, `HARRUM_VKB`, `DURCIL_VKB`, `USIA_VKB`, `KEBRUMTA_VKB`, `CICILLAIN_VKB`, `DP_VKB`, `HARRUMBANK_VKB`, `ANGBUL_VKB`) VALUES
(3, 'nramandani@gmail.com', NULL, NULL, 700000000, NULL, 22, 0, 0, 70000000, 630000000, 0),
(4, 'nramandani@gmail.com', NULL, NULL, NULL, NULL, 22, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verif_pengecekan_slik`
--

CREATE TABLE `verif_pengecekan_slik` (
  `ID_VPS` int(11) DEFAULT NULL,
  `EMAIL_NAS` varchar(255) DEFAULT NULL,
  `ID_KPS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`EMAIL_ADM`);

--
-- Indexes for table `dokumen_jaminan`
--
ALTER TABLE `dokumen_jaminan`
  ADD PRIMARY KEY (`ID_DJ`),
  ADD KEY `fr_jaminan1` (`ID_VJ`);

--
-- Indexes for table `dokumen_karyawan`
--
ALTER TABLE `dokumen_karyawan`
  ADD PRIMARY KEY (`ID_DK`),
  ADD UNIQUE KEY `ID_VD` (`ID_VD`);

--
-- Indexes for table `dokumen_profesional`
--
ALTER TABLE `dokumen_profesional`
  ADD PRIMARY KEY (`ID_DP`) USING BTREE,
  ADD UNIQUE KEY `ID_VD` (`ID_VD`);

--
-- Indexes for table `dokumen_wiraswasta`
--
ALTER TABLE `dokumen_wiraswasta`
  ADD PRIMARY KEY (`ID_DW`) USING BTREE,
  ADD UNIQUE KEY `ID_VD` (`ID_VD`);

--
-- Indexes for table `kriteria_dokumen`
--
ALTER TABLE `kriteria_dokumen`
  ADD PRIMARY KEY (`ID_KD`);

--
-- Indexes for table `kriteria_jaminan`
--
ALTER TABLE `kriteria_jaminan`
  ADD PRIMARY KEY (`ID_KJ`);

--
-- Indexes for table `kriteria_kemampuan_bayar`
--
ALTER TABLE `kriteria_kemampuan_bayar`
  ADD PRIMARY KEY (`ID_KMB`);

--
-- Indexes for table `kriteria_pengecekkan_slik`
--
ALTER TABLE `kriteria_pengecekkan_slik`
  ADD PRIMARY KEY (`ID_KPS`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`EMAIL_NAS`);

--
-- Indexes for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  ADD PRIMARY KEY (`ID_VD`),
  ADD UNIQUE KEY `EMAIL_NAS` (`EMAIL_NAS`);

--
-- Indexes for table `verif_jaminan`
--
ALTER TABLE `verif_jaminan`
  ADD KEY `ID_VJ` (`ID_VJ`);

--
-- Indexes for table `verif_kemampuan_bayar`
--
ALTER TABLE `verif_kemampuan_bayar`
  ADD PRIMARY KEY (`ID_VKB`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen_jaminan`
--
ALTER TABLE `dokumen_jaminan`
  MODIFY `ID_DJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dokumen_karyawan`
--
ALTER TABLE `dokumen_karyawan`
  MODIFY `ID_DK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokumen_profesional`
--
ALTER TABLE `dokumen_profesional`
  MODIFY `ID_DP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokumen_wiraswasta`
--
ALTER TABLE `dokumen_wiraswasta`
  MODIFY `ID_DW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriteria_dokumen`
--
ALTER TABLE `kriteria_dokumen`
  MODIFY `ID_KD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria_kemampuan_bayar`
--
ALTER TABLE `kriteria_kemampuan_bayar`
  MODIFY `ID_KMB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriteria_pengecekkan_slik`
--
ALTER TABLE `kriteria_pengecekkan_slik`
  MODIFY `ID_KPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  MODIFY `ID_VD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `verif_kemampuan_bayar`
--
ALTER TABLE `verif_kemampuan_bayar`
  MODIFY `ID_VKB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen_jaminan`
--
ALTER TABLE `dokumen_jaminan`
  ADD CONSTRAINT `fr_jaminan1` FOREIGN KEY (`ID_VJ`) REFERENCES `verif_jaminan` (`ID_VJ`);

--
-- Constraints for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  ADD CONSTRAINT `verif_dokumen_ibfk_1` FOREIGN KEY (`EMAIL_NAS`) REFERENCES `nasabah` (`EMAIL_NAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

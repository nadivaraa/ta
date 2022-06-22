-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2022 at 04:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

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
  `AJB_DJ` text DEFAULT NULL
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
  `BPEMBAYARAN_DK` text DEFAULT NULL,
  `BPJS_DK` text DEFAULT NULL
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
  `REKKOR_DP` text DEFAULT NULL,
  `BPJS_DP` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `AKTAPEND_DW` text DEFAULT NULL,
  `BPJS_DW` text DEFAULT NULL
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
(10, 'Lengkap', 0.8),
(11, 'Tidak Lengkap', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_jaminan`
--

CREATE TABLE `kriteria_jaminan` (
  `ID_KJ` int(11) NOT NULL,
  `NAMA_KJ` varchar(255) DEFAULT NULL,
  `BOBOT_KJ` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_jaminan`
--

INSERT INTO `kriteria_jaminan` (`ID_KJ`, `NAMA_KJ`, `BOBOT_KJ`) VALUES
(4, 'Layak', 0.8),
(7, 'Tidak Layak', 0.5);

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
(4, 'Mampu', 0.8),
(5, 'Tidak Mampu', 0.5);

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
(6, 'Kredit Lancar', '1'),
(7, 'Kredit Dalam Perhatian Khusus', '0.8'),
(8, 'Kredit Tidak Lancar', '0.6'),
(9, 'Kredit Diragukan', '0.4'),
(10, 'Kredit Macet', '0.2');

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

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `ID_NOTIF` int(11) NOT NULL,
  `EMAIL_NAS` varchar(100) DEFAULT NULL,
  `PESAN_NOTIF` varchar(255) DEFAULT NULL,
  `TGL_NOTIF` timestamp NULL DEFAULT NULL,
  `STATUS_NOTIF` tinyint(4) DEFAULT NULL,
  `ADMIN_NOTIF` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_ready`
--

CREATE TABLE `penilaian_ready` (
  `EMAIL_NAS` varchar(100) DEFAULT NULL,
  `PERHITUNGAN_KELDOK` double DEFAULT NULL,
  `PERHITUNGAN_KEMBA` double DEFAULT NULL,
  `PERHITUNGAN_JAMINAN` double DEFAULT NULL,
  `PERHITUNGAN_SLIK` double DEFAULT NULL,
  `PERHITUNGAN_S` double DEFAULT NULL,
  `PERHITUNGAN_V` double DEFAULT NULL,
  `PERHITUNGAN_STATUS` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `verif_jaminan`
--

CREATE TABLE `verif_jaminan` (
  `ID_VJ` int(11) NOT NULL,
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
  `STATUS_VJ` smallint(6) NOT NULL DEFAULT 0 COMMENT '0: draft; 1: menunggu; 2: memenuhi; 3: tidak memenuhi',
  `KOMENTAR_VJ` text DEFAULT NULL
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
  `ANGBUL_VKB` int(11) NOT NULL,
  `STATUS_VKB` smallint(6) DEFAULT 0,
  `KOMENTAR_VKB` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verif_pengecekan_slik`
--

CREATE TABLE `verif_pengecekan_slik` (
  `ID_VPS` int(11) NOT NULL,
  `EMAIL_NAS` varchar(255) DEFAULT NULL,
  `ID_KPS` int(11) DEFAULT NULL,
  `STATUS_VPS` smallint(6) DEFAULT 0,
  `KOMENTAR_VPS` text DEFAULT NULL
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
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`ID_NOTIF`),
  ADD KEY `notifikasi_FK` (`EMAIL_NAS`);

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
  ADD PRIMARY KEY (`ID_VJ`),
  ADD KEY `ID_VJ` (`ID_VJ`);

--
-- Indexes for table `verif_kemampuan_bayar`
--
ALTER TABLE `verif_kemampuan_bayar`
  ADD PRIMARY KEY (`ID_VKB`);

--
-- Indexes for table `verif_pengecekan_slik`
--
ALTER TABLE `verif_pengecekan_slik`
  ADD PRIMARY KEY (`ID_VPS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen_jaminan`
--
ALTER TABLE `dokumen_jaminan`
  MODIFY `ID_DJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dokumen_karyawan`
--
ALTER TABLE `dokumen_karyawan`
  MODIFY `ID_DK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokumen_profesional`
--
ALTER TABLE `dokumen_profesional`
  MODIFY `ID_DP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `dokumen_wiraswasta`
--
ALTER TABLE `dokumen_wiraswasta`
  MODIFY `ID_DW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria_dokumen`
--
ALTER TABLE `kriteria_dokumen`
  MODIFY `ID_KD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kriteria_jaminan`
--
ALTER TABLE `kriteria_jaminan`
  MODIFY `ID_KJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kriteria_kemampuan_bayar`
--
ALTER TABLE `kriteria_kemampuan_bayar`
  MODIFY `ID_KMB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_pengecekkan_slik`
--
ALTER TABLE `kriteria_pengecekkan_slik`
  MODIFY `ID_KPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `ID_NOTIF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  MODIFY `ID_VD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `verif_jaminan`
--
ALTER TABLE `verif_jaminan`
  MODIFY `ID_VJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `verif_kemampuan_bayar`
--
ALTER TABLE `verif_kemampuan_bayar`
  MODIFY `ID_VKB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `verif_pengecekan_slik`
--
ALTER TABLE `verif_pengecekan_slik`
  MODIFY `ID_VPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen_jaminan`
--
ALTER TABLE `dokumen_jaminan`
  ADD CONSTRAINT `dokumen_jaminan_FK` FOREIGN KEY (`ID_VJ`) REFERENCES `verif_jaminan` (`ID_VJ`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_FK` FOREIGN KEY (`EMAIL_NAS`) REFERENCES `nasabah` (`EMAIL_NAS`);

--
-- Constraints for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  ADD CONSTRAINT `verif_dokumen_ibfk_1` FOREIGN KEY (`EMAIL_NAS`) REFERENCES `nasabah` (`EMAIL_NAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: rumahsaya2
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `EMAIL_ADM` varchar(50) NOT NULL,
  `NAMA_ADM` varchar(50) NOT NULL,
  `PASS_ADM` varchar(50) NOT NULL,
  PRIMARY KEY (`EMAIL_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('nramandani@gmail.com','nadiva','12345');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokumen_jaminan`
--

DROP TABLE IF EXISTS `dokumen_jaminan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokumen_jaminan` (
  `ID_DJ` int(11) NOT NULL AUTO_INCREMENT,
  `ID_VJ` int(11) DEFAULT NULL,
  `SERHHS_DJ` text DEFAULT NULL,
  `IMB_DJ` text DEFAULT NULL,
  `PBB_DJ` text DEFAULT NULL,
  `AJB_DJ` text DEFAULT NULL,
  PRIMARY KEY (`ID_DJ`),
  KEY `fr_jaminan1` (`ID_VJ`),
  CONSTRAINT `dokumen_jaminan_FK` FOREIGN KEY (`ID_VJ`) REFERENCES `verif_jaminan` (`ID_VJ`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen_jaminan`
--

LOCK TABLES `dokumen_jaminan` WRITE;
/*!40000 ALTER TABLE `dokumen_jaminan` DISABLE KEYS */;
INSERT INTO `dokumen_jaminan` VALUES (6,1,'http://127.0.0.1/ta/uploads/dok_sertif/dok_sertif_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_imb/dok_imb_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_pbb/dok_pbb_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_aktajb/dok_aktajb_Ilham_Supali.jpeg'),(7,3,'http://127.0.0.1/ta/uploads/dok_sertif/dok_sertif_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_imb/dok_imb_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_pbb/dok_pbb_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_aktajb/dok_aktajb_Ababol.pdf');
/*!40000 ALTER TABLE `dokumen_jaminan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokumen_karyawan`
--

DROP TABLE IF EXISTS `dokumen_karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokumen_karyawan` (
  `ID_DK` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID_DK`),
  UNIQUE KEY `ID_VD` (`ID_VD`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen_karyawan`
--

LOCK TABLES `dokumen_karyawan` WRITE;
/*!40000 ALTER TABLE `dokumen_karyawan` DISABLE KEYS */;
INSERT INTO `dokumen_karyawan` VALUES (3,22,'http://127.0.0.1/ta/uploads/dok_ktp/dok_ktp_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_ktppas/dok_ktppas_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_aktanik/dok_aktanik_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_aktapis/dok_aktapis_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_kk/dok_kk_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_npwp/dok_npwp_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_slip/dok_slip_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_spkredit/dok_spkredit_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_sprumah/dok_sprumah_Ilham_Supali.png','http://127.0.0.1/ta/uploads/dok_bukti/dok_bukti_Ilham_Supali.png'),(4,24,'http://127.0.0.1/ta/uploads/dok_ktp/dok_ktp_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_ktppas/dok_ktppas_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_aktanik/dok_aktanik_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_aktapis/dok_aktapis_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_kk/dok_kk_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_npwp/dok_npwp_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_slip/dok_slip_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_spkredit/dok_spkredit_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_sprumah/dok_sprumah_Ababol.pdf','http://127.0.0.1/ta/uploads/dok_bukti/dok_bukti_Ababol.pdf');
/*!40000 ALTER TABLE `dokumen_karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokumen_profesional`
--

DROP TABLE IF EXISTS `dokumen_profesional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokumen_profesional` (
  `ID_DP` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID_DP`) USING BTREE,
  UNIQUE KEY `ID_VD` (`ID_VD`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen_profesional`
--

LOCK TABLES `dokumen_profesional` WRITE;
/*!40000 ALTER TABLE `dokumen_profesional` DISABLE KEYS */;
INSERT INTO `dokumen_profesional` VALUES (10,17,'http://localhost/ta/uploads/dok_ktp/WhatsApp_Image_2022-03-28_at_08_37_09_(1)1.jpeg','http://localhost/ta/uploads/dok_ktppas/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg','http://localhost/ta/uploads/dok_aktanik/Capture3.PNG','http://localhost/ta/uploads/dok_aktapis/Capture_(1)5.PNG','http://localhost/ta/uploads/dok_kk/Capture6.PNG','http://localhost/ta/uploads/dok_npwp/Capture2.PNG','http://localhost/ta/uploads/dok_npwpush/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg','http://localhost/ta/uploads/dok_spkredit/Capture5.PNG','http://localhost/ta/uploads/dok_sprumah/Capture_(1)3.PNG','http://localhost/ta/uploads/dok_bukti/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg','http://localhost/ta/uploads/dok_izinprak/Capture.PNG','http://localhost/ta/uploads/dok_rekkor/Capture3.PNG'),(11,19,'http://127.0.0.1/ta/uploads/dok_ktp/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_ktppas/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_aktanik/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_aktapis/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_kk/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_npwp/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_npwpush/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_spkredit/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_sprumah/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_bukti/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_izinprak/Lavisa_food_Print.png','http://127.0.0.1/ta/uploads/dok_rekkor/Lavisa_food_Print.png');
/*!40000 ALTER TABLE `dokumen_profesional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokumen_wiraswasta`
--

DROP TABLE IF EXISTS `dokumen_wiraswasta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokumen_wiraswasta` (
  `ID_DW` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID_DW`) USING BTREE,
  UNIQUE KEY `ID_VD` (`ID_VD`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen_wiraswasta`
--

LOCK TABLES `dokumen_wiraswasta` WRITE;
/*!40000 ALTER TABLE `dokumen_wiraswasta` DISABLE KEYS */;
INSERT INTO `dokumen_wiraswasta` VALUES (3,20,'http://127.0.0.1/ta/uploads/dok_ktp/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_ktppas/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_aktanik/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_aktapis/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_kk/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_npwp/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_npwpush/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_spkredit/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_sprumah/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_bukti/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_siup/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_rekkor/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_tdp/FDXOkNNX0AAcS9C.jpeg','http://127.0.0.1/ta/uploads/dok_aktapend/FDXOkNNX0AAcS9C.jpeg');
/*!40000 ALTER TABLE `dokumen_wiraswasta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria_dokumen`
--

DROP TABLE IF EXISTS `kriteria_dokumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria_dokumen` (
  `ID_KD` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_KD` varchar(255) DEFAULT NULL,
  `BOBOT_KD` float DEFAULT NULL,
  PRIMARY KEY (`ID_KD`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kriteria_dokumen`
--

LOCK TABLES `kriteria_dokumen` WRITE;
/*!40000 ALTER TABLE `kriteria_dokumen` DISABLE KEYS */;
INSERT INTO `kriteria_dokumen` VALUES (10,'Layak',0.8),(11,'Tidak Layak',0.5);
/*!40000 ALTER TABLE `kriteria_dokumen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria_jaminan`
--

DROP TABLE IF EXISTS `kriteria_jaminan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria_jaminan` (
  `ID_KJ` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_KJ` varchar(255) DEFAULT NULL,
  `BOBOT_KJ` float DEFAULT NULL,
  PRIMARY KEY (`ID_KJ`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kriteria_jaminan`
--

LOCK TABLES `kriteria_jaminan` WRITE;
/*!40000 ALTER TABLE `kriteria_jaminan` DISABLE KEYS */;
INSERT INTO `kriteria_jaminan` VALUES (3,'Sangat Layak',1),(4,'Layak',0.8),(5,'Cukup Layak',0.6),(6,'Sedang',0.4),(7,'Tidak Layak',0.2);
/*!40000 ALTER TABLE `kriteria_jaminan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria_kemampuan_bayar`
--

DROP TABLE IF EXISTS `kriteria_kemampuan_bayar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria_kemampuan_bayar` (
  `ID_KMB` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_KMB` varchar(255) DEFAULT NULL,
  `BOBOT_KMB` float DEFAULT NULL,
  PRIMARY KEY (`ID_KMB`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kriteria_kemampuan_bayar`
--

LOCK TABLES `kriteria_kemampuan_bayar` WRITE;
/*!40000 ALTER TABLE `kriteria_kemampuan_bayar` DISABLE KEYS */;
INSERT INTO `kriteria_kemampuan_bayar` VALUES (4,'Mampu',0.8),(5,'Tidak Mampu',0.5);
/*!40000 ALTER TABLE `kriteria_kemampuan_bayar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria_pengecekkan_slik`
--

DROP TABLE IF EXISTS `kriteria_pengecekkan_slik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria_pengecekkan_slik` (
  `ID_KPS` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_KPS` varchar(255) DEFAULT NULL,
  `BOBOT_KPS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_KPS`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kriteria_pengecekkan_slik`
--

LOCK TABLES `kriteria_pengecekkan_slik` WRITE;
/*!40000 ALTER TABLE `kriteria_pengecekkan_slik` DISABLE KEYS */;
INSERT INTO `kriteria_pengecekkan_slik` VALUES (6,'Kredit Lancar','1'),(7,'Kredit Dalam Perhatian Khusus','0.8'),(8,'Kredit Tidak Lancar','0.6'),(9,'Kredit Diragukan','0.4'),(10,'Kredit Macet','0.2');
/*!40000 ALTER TABLE `kriteria_pengecekkan_slik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nasabah`
--

DROP TABLE IF EXISTS `nasabah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nasabah` (
  `NAMA_NAS` varchar(255) DEFAULT NULL,
  `PASS_NAS` varchar(255) DEFAULT NULL,
  `EMAIL_NAS` varchar(255) NOT NULL,
  `NOTLP_NAS` varchar(13) NOT NULL,
  `PEKERJAAN_NAS` varchar(50) DEFAULT NULL,
  `TGLLHR_NAS` date DEFAULT NULL,
  PRIMARY KEY (`EMAIL_NAS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nasabah`
--

LOCK TABLES `nasabah` WRITE;
/*!40000 ALTER TABLE `nasabah` DISABLE KEYS */;
INSERT INTO `nasabah` VALUES ('Ababol','5f2911ebf8c2191a7c248870c92fdcaa','ababol@gmail.com','08932423234','2','2002-05-15'),('Ilham Sagita Putra','57cf5ad49695e3adc1a29cf47a43bc06','ilham.sagitaputra@gmail.com','08939842349','3','2000-02-02'),('Ilham Supali','57cf5ad49695e3adc1a29cf47a43bc06','ilham.supali@gmail.com','089602657511','2','2000-02-02'),('Nadiva','827ccb0eea8a706c4c34a16891f84e7b','nramandani@gmail.com','085707877101','1','2000-01-01');
/*!40000 ALTER TABLE `nasabah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penilaian_ready`
--

DROP TABLE IF EXISTS `penilaian_ready`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penilaian_ready` (
  `EMAIL_NAS` varchar(100) DEFAULT NULL,
  `PERHITUNGAN_KELDOK` double DEFAULT NULL,
  `PERHITUNGAN_KEMBA` double DEFAULT NULL,
  `PERHITUNGAN_JAMINAN` double DEFAULT NULL,
  `PERHITUNGAN_SLIK` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penilaian_ready`
--

LOCK TABLES `penilaian_ready` WRITE;
/*!40000 ALTER TABLE `penilaian_ready` DISABLE KEYS */;
INSERT INTO `penilaian_ready` VALUES ('ababol@gmail.com',0.94574160900318,0.94574160900318,0.88011173679339,0.94574160900318),('ilham.sagitaputra@gmail.com',0.94574160900318,0.94574160900318,1,1);
/*!40000 ALTER TABLE `penilaian_ready` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verif_dokumen`
--

DROP TABLE IF EXISTS `verif_dokumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verif_dokumen` (
  `ID_VD` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL_NAS` varchar(255) DEFAULT NULL,
  `ID_KD` int(11) DEFAULT NULL,
  `JENIS_VD` smallint(6) DEFAULT 0,
  `STATUS_VD` tinyint(4) DEFAULT 0,
  `STATUSVERIF_VD` tinyint(4) DEFAULT 0,
  `KOMENTAR_VD` text NOT NULL,
  PRIMARY KEY (`ID_VD`),
  UNIQUE KEY `EMAIL_NAS` (`EMAIL_NAS`),
  CONSTRAINT `verif_dokumen_ibfk_1` FOREIGN KEY (`EMAIL_NAS`) REFERENCES `nasabah` (`EMAIL_NAS`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verif_dokumen`
--

LOCK TABLES `verif_dokumen` WRITE;
/*!40000 ALTER TABLE `verif_dokumen` DISABLE KEYS */;
INSERT INTO `verif_dokumen` VALUES (17,'nramandani@gmail.com',NULL,1,3,0,'ok'),(20,'ilham.sagitaputra@gmail.com',10,3,3,0,''),(22,'ilham.supali@gmail.com',NULL,2,3,0,''),(24,'ababol@gmail.com',10,2,3,0,'');
/*!40000 ALTER TABLE `verif_dokumen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verif_jaminan`
--

DROP TABLE IF EXISTS `verif_jaminan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verif_jaminan` (
  `ID_VJ` int(11) NOT NULL AUTO_INCREMENT,
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
  `KOMENTAR_VJ` text DEFAULT NULL,
  PRIMARY KEY (`ID_VJ`),
  KEY `ID_VJ` (`ID_VJ`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verif_jaminan`
--

LOCK TABLES `verif_jaminan` WRITE;
/*!40000 ALTER TABLE `verif_jaminan` DISABLE KEYS */;
INSERT INTO `verif_jaminan` VALUES (1,'ilham.supali@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL),(3,'ababol@gmail.com',5,1,0,1,0,1,1,1,0,3,'iuetrhg'),(4,'ilham.sagitaputra@gmail.com',3,1,1,0,1,0,0,1,0,3,'');
/*!40000 ALTER TABLE `verif_jaminan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verif_kemampuan_bayar`
--

DROP TABLE IF EXISTS `verif_kemampuan_bayar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verif_kemampuan_bayar` (
  `ID_VKB` int(11) NOT NULL AUTO_INCREMENT,
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
  `KOMENTAR_VKB` text DEFAULT NULL,
  PRIMARY KEY (`ID_VKB`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verif_kemampuan_bayar`
--

LOCK TABLES `verif_kemampuan_bayar` WRITE;
/*!40000 ALTER TABLE `verif_kemampuan_bayar` DISABLE KEYS */;
INSERT INTO `verif_kemampuan_bayar` VALUES (3,'nramandani@gmail.com',NULL,NULL,700000000,NULL,22,0,0,70000000,630000000,0,0,NULL),(4,'nramandani@gmail.com',NULL,NULL,NULL,NULL,22,0,0,0,0,0,0,NULL),(7,'ilham.sagitaputra@gmail.com',4,10000000,100000000,4,22,2500000,3000000,10000000,90000000,1875000,3,''),(9,'ilham.supali@gmail.com',NULL,6000000,240000000,9,22,2000000,1000000,24000000,216000000,2000000,3,''),(11,'ababol@gmail.com',4,7000000,250000000,7,20,1500000,1000000,25000000,225000000,2678571,3,'');
/*!40000 ALTER TABLE `verif_kemampuan_bayar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verif_pengecekan_slik`
--

DROP TABLE IF EXISTS `verif_pengecekan_slik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verif_pengecekan_slik` (
  `ID_VPS` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL_NAS` varchar(255) DEFAULT NULL,
  `ID_KPS` int(11) DEFAULT NULL,
  `STATUS_VPS` smallint(6) DEFAULT 0,
  `KOMENTAR_VPS` text DEFAULT NULL,
  PRIMARY KEY (`ID_VPS`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verif_pengecekan_slik`
--

LOCK TABLES `verif_pengecekan_slik` WRITE;
/*!40000 ALTER TABLE `verif_pengecekan_slik` DISABLE KEYS */;
INSERT INTO `verif_pengecekan_slik` VALUES (1,'ababol@gmail.com',7,3,''),(2,'ilham.sagitaputra@gmail.com',6,3,'');
/*!40000 ALTER TABLE `verif_pengecekan_slik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'rumahsaya2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19 21:15:26

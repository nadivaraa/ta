-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2022 at 04:57 PM
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

--
-- Dumping data for table `dokumen_jaminan`
--

INSERT INTO `dokumen_jaminan` (`ID_DJ`, `ID_VJ`, `SERHHS_DJ`, `IMB_DJ`, `PBB_DJ`, `AJB_DJ`) VALUES
(6, 1, 'http://127.0.0.1/ta/uploads/dok_sertif/dok_sertif_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_imb/dok_imb_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_pbb/dok_pbb_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_aktajb/dok_aktajb_Ilham_Supali.jpeg'),
(7, 3, 'http://127.0.0.1/ta/uploads/dok_sertif/dok_sertif_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_imb/dok_imb_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_pbb/dok_pbb_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_aktajb/dok_aktajb_Ababol.pdf'),
(8, 5, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Nadiva_Ramandani.jpg'),
(9, 6, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Muhammad_Jouvan_Auryn.jpg'),
(10, 7, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Dwi_Prasetyo.jpg'),
(11, 9, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Galang_Syauqi_Hilal.jpg'),
(12, 10, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Siti_Nur_Afifah.jpg'),
(13, 11, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Siti_Khusnul_Jamil.jpg'),
(14, 12, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Ardhiansyah.jpg'),
(15, 13, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Atrisgo_Alfareza.jpg'),
(16, 14, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Siti_Badriah.jpg'),
(17, 15, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Ilham_Sagita_Putra.jpg'),
(18, 8, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Muhammad_Fitra_Gemilang.jpg');

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

--
-- Dumping data for table `dokumen_karyawan`
--

INSERT INTO `dokumen_karyawan` (`ID_DK`, `ID_VD`, `KTP_DK`, `KTPPAS_DK`, `AKTANIK_DK`, `AKTAPIS_DK`, `KK_DK`, `NPWP_DK`, `SLIPGAJI_DK`, `SPERNYATAAN_DK`, `SPEMESANAN_DK`, `BPEMBAYARAN_DK`) VALUES
(3, 22, 'http://127.0.0.1/ta/uploads/dok_ktp/dok_ktp_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_ktppas/dok_ktppas_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_aktanik/dok_aktanik_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_aktapis/dok_aktapis_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_kk/dok_kk_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_npwp/dok_npwp_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_slip/dok_slip_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_spkredit/dok_spkredit_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_sprumah/dok_sprumah_Ilham_Supali.png', 'http://127.0.0.1/ta/uploads/dok_bukti/dok_bukti_Ilham_Supali.png'),
(4, 24, 'http://127.0.0.1/ta/uploads/dok_ktp/dok_ktp_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_ktppas/dok_ktppas_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_aktanik/dok_aktanik_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_aktapis/dok_aktapis_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_kk/dok_kk_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_npwp/dok_npwp_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_slip/dok_slip_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_spkredit/dok_spkredit_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_sprumah/dok_sprumah_Ababol.pdf', 'http://127.0.0.1/ta/uploads/dok_bukti/dok_bukti_Ababol.pdf');

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
(10, 17, 'http://localhost/ta/uploads/dok_ktp/WhatsApp_Image_2022-03-28_at_08_37_09_(1)1.jpeg', 'http://localhost/ta/uploads/dok_ktppas/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg', 'http://localhost/ta/uploads/dok_aktanik/Capture3.PNG', 'http://localhost/ta/uploads/dok_aktapis/Capture_(1)5.PNG', 'http://localhost/ta/uploads/dok_kk/Capture6.PNG', 'http://localhost/ta/uploads/dok_npwp/Capture2.PNG', 'http://localhost/ta/uploads/dok_npwpush/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg', 'http://localhost/ta/uploads/dok_spkredit/Capture5.PNG', 'http://localhost/ta/uploads/dok_sprumah/Capture_(1)3.PNG', 'http://localhost/ta/uploads/dok_bukti/WhatsApp_Image_2022-03-28_at_08_37_09.jpeg', 'http://localhost/ta/uploads/dok_izinprak/Capture.PNG', 'http://localhost/ta/uploads/dok_rekkor/Capture3.PNG'),
(11, 19, 'http://127.0.0.1/ta/uploads/dok_ktp/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_ktppas/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_aktanik/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_aktapis/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_kk/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_npwp/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_npwpush/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_spkredit/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_sprumah/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_bukti/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_izinprak/Lavisa_food_Print.png', 'http://127.0.0.1/ta/uploads/dok_rekkor/Lavisa_food_Print.png'),
(12, 25, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Nadiva_Ramandani.jpg'),
(13, 26, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Muhammad_Jouvan_Auryn.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Muhammad_Jouvan_Auryn.jpg'),
(14, 27, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Dwi_Prasetyo.jpg'),
(15, 28, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Muhammad_Fitra_Gemilang.jpg'),
(16, 29, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Galang_Syauqi_Hilal.jpg'),
(17, 30, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Siti_Nur_Afifah.jpg'),
(18, 31, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Siti_Khusnul_Jamil.jpg'),
(19, 32, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Ardhiansyah.jpg'),
(20, 33, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Atrisgo_Alfareza.jpg'),
(21, 34, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Siti_Badriah.jpg'),
(22, 35, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Ilham_Sagita_Putra.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Ilham_Sagita_Putra.jpg');

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

--
-- Dumping data for table `dokumen_wiraswasta`
--

INSERT INTO `dokumen_wiraswasta` (`ID_DW`, `ID_VD`, `KTP_DW`, `KTPPAS_DW`, `AKTANIK_DW`, `AKTAPIS_DW`, `KK_DW`, `NPWP_DW`, `NPWPUSH_DW`, `SPERNYATAAN_DW`, `SPEMESANAN_DW`, `BPEMBAYARAN_DW`, `SIUP_DW`, `REKKOR_DW`, `TDP_DW`, `AKTAPEND_DW`) VALUES
(3, 20, 'http://127.0.0.1/ta/uploads/dok_ktp/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_ktppas/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_aktanik/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_aktapis/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_kk/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_npwp/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_npwpush/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_spkredit/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_sprumah/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_bukti/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_siup/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_rekkor/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_tdp/FDXOkNNX0AAcS9C.jpeg', 'http://127.0.0.1/ta/uploads/dok_aktapend/FDXOkNNX0AAcS9C.jpeg');

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
(3, 'Sangat Layak', 1),
(4, 'Layak', 0.8),
(5, 'Cukup Layak', 0.6),
(6, 'Sedang', 0.4),
(7, 'Tidak Layak', 0.2);

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

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`NAMA_NAS`, `PASS_NAS`, `EMAIL_NAS`, `NOTLP_NAS`, `PEKERJAAN_NAS`, `TGLLHR_NAS`) VALUES
('Siti Nur Afifah', '827ccb0eea8a706c4c34a16891f84e7b', 'afifah@gmail.com', '081245678902', '1', '1999-05-16'),
('Ardhiansyah', '827ccb0eea8a706c4c34a16891f84e7b', 'ardhi@gmail.com', '089076134567', '1', '1999-05-19'),
('Atrisgo Alfareza', '827ccb0eea8a706c4c34a16891f84e7b', 'atris@gmail.com', '083167890765', '1', '1999-05-18'),
('Dwi Prasetyo', '827ccb0eea8a706c4c34a16891f84e7b', 'dwi@gmail.com', '089764309874', '1', '1999-05-12'),
('Muhammad Fitra Gemilang', '827ccb0eea8a706c4c34a16891f84e7b', 'fitra.g@gmail.com', '085678924567', '1', '1999-05-14'),
('Galang Syauqi Hilal', '827ccb0eea8a706c4c34a16891f84e7b', 'galangsh@gmail.com', '087609123467', '1', '1999-05-13'),
('Ilham Sagita Putra', '827ccb0eea8a706c4c34a16891f84e7b', 'ilham.sagitaputra@gmail.com', '081209872567', '1', '1999-05-17'),
('Muhammad Jouvan Auryn', '827ccb0eea8a706c4c34a16891f84e7b', 'jouvan@gmail.com', '087609875678', '1', '1999-05-11'),
('Siti Khusnul Jamil', '827ccb0eea8a706c4c34a16891f84e7b', 'khusnulj@gmail.com', '081289065789', '1', '1999-05-19'),
('Nadiva Ramandani', '827ccb0eea8a706c4c34a16891f84e7b', 'nramandani@gmail.com', '085707877101', '1', '1999-01-01'),
('Siti Badriah', '827ccb0eea8a706c4c34a16891f84e7b', 'sibad@gmail.com', '087678908765', '1', '1999-05-21');

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
  `PERHITUNGAN_V` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian_ready`
--

INSERT INTO `penilaian_ready` (`EMAIL_NAS`, `PERHITUNGAN_KELDOK`, `PERHITUNGAN_KEMBA`, `PERHITUNGAN_JAMINAN`, `PERHITUNGAN_SLIK`, `PERHITUNGAN_S`, `PERHITUNGAN_V`) VALUES
('afifah@gmail.com', 0.94574160900318, 0.94574160900318, 1, 0.94574160900318, 0.8458970107524626, 0.25431801313017965),
('ardhi@gmail.com', 0.84089641525371, 0.94574160900318, 0.66874030497642, 0.79527072876705, 0.4229485053762235, 0.1271590065650875),
('galangsh@gmail.com', 0.84089641525371, 0.94574160900318, 0.94574160900318, 1, 0.7521206186172813, 0.2261242431757012),
('jouvan@gmail.com', 0.84089641525371, 0.94574160900318, 1, 0.79527072876705, 0.6324555320336747, 0.19014706548840535),
('khusnulj@gmail.com', 0.94574160900318, 0.94574160900318, 0.79527072876705, 0.94574160900318, 0.67271713220298, 0.20225167164062616);

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
(25, 'nramandani@gmail.com', 10, 1, 3, 0, ''),
(26, 'jouvan@gmail.com', 11, 1, 3, 0, ''),
(27, 'dwi@gmail.com', 10, 1, 3, 0, ''),
(28, 'fitra.g@gmail.com', 11, 1, 3, 0, ''),
(29, 'galangsh@gmail.com', 11, 1, 3, 0, ''),
(30, 'afifah@gmail.com', 10, 1, 3, 0, ''),
(31, 'khusnulj@gmail.com', 10, 1, 3, 0, ''),
(32, 'ardhi@gmail.com', 11, 1, 3, 0, ''),
(33, 'atris@gmail.com', 10, 1, 3, 0, ''),
(34, 'sibad@gmail.com', 11, 1, 3, 0, ''),
(35, 'ilham.sagitaputra@gmail.com', 10, 1, 3, 0, '');

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

--
-- Dumping data for table `verif_jaminan`
--

INSERT INTO `verif_jaminan` (`ID_VJ`, `EMAIL_NAS`, `ID_KJ`, `KESDOK_VJ`, `HARGRUM_VJ`, `JALAN_VJ`, `TOWER_VJ`, `SUNGAI_VJ`, `TUSUK_VJ`, `MAKAM_VJ`, `LISTRIKAIR_VJ`, `STATUS_VJ`, `KOMENTAR_VJ`) VALUES
(1, 'ilham.supali@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
(3, 'ababol@gmail.com', 5, 1, 0, 1, 0, 1, 1, 1, 0, 3, 'iuetrhg'),
(5, 'nramandani@gmail.com', 4, 1, 1, 0, 0, 1, 1, 0, 1, 3, ''),
(6, 'jouvan@gmail.com', 3, 1, 1, 1, 1, 1, 1, 1, 1, 3, ''),
(7, 'dwi@gmail.com', 5, 0, 0, 1, 0, 0, 1, 0, 0, 3, ''),
(8, 'fitra.g@gmail.com', 6, 0, 1, 0, 1, 1, 0, 1, 0, 3, ''),
(9, 'galangsh@gmail.com', 4, 0, 1, 1, 1, 0, 1, 1, 0, 3, ''),
(10, 'afifah@gmail.com', 3, 1, 1, 1, 1, 1, 1, 1, 1, 3, ''),
(11, 'khusnulj@gmail.com', 6, 0, 0, 0, 0, 0, 1, 1, 1, 3, ''),
(12, 'ardhi@gmail.com', 7, 0, 0, 0, 0, 0, 0, 0, 0, 3, ''),
(13, 'atris@gmail.com', 3, 1, 1, 1, 1, 1, 1, 1, 0, 3, ''),
(14, 'sibad@gmail.com', 4, 1, 0, 0, 0, 1, 1, 1, 0, 3, ''),
(15, 'ilham.sagitaputra@gmail.com', 5, 1, 0, 0, 1, 1, 0, 0, 0, 3, '');

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

--
-- Dumping data for table `verif_kemampuan_bayar`
--

INSERT INTO `verif_kemampuan_bayar` (`ID_VKB`, `EMAIL_NAS`, `ID_KMB`, `GAJI_VKB`, `HARRUM_VKB`, `DURCIL_VKB`, `USIA_VKB`, `KEBRUMTA_VKB`, `CICILLAIN_VKB`, `DP_VKB`, `HARRUMBANK_VKB`, `ANGBUL_VKB`, `STATUS_VKB`, `KOMENTAR_VKB`) VALUES
(12, 'nramandani@gmail.com', NULL, 7000000, 700000000, 20, 54, 5000000, 200000, 70000000, 630000000, 2625000, 4, ''),
(13, 'jouvan@gmail.com', 4, 7000000, 700000000, 20, 27, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(14, 'dwi@gmail.com', NULL, 7000000, 700000000, 20, 54, 2000000, 0, 70000000, 630000000, 2625000, 4, ''),
(15, 'fitra.g@gmail.com', NULL, 3000000, 700000000, 20, 54, 2000000, 0, 70000000, 630000000, 2625000, 4, ''),
(16, 'galangsh@gmail.com', 4, 7000000, 700000000, 20, 24, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(17, 'afifah@gmail.com', 4, 7000000, 700000000, 20, 27, 1000000, 200000, 70000000, 630000000, 2625000, 3, ''),
(18, 'khusnulj@gmail.com', 4, 7000000, 700000000, 20, 30, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(19, 'ardhi@gmail.com', 4, 10000000, 700000000, 10, 23, 2000000, 0, 70000000, 630000000, 5250000, 3, ''),
(20, 'atris@gmail.com', NULL, 7000000, 700000000, 20, 37, 2000000, 0, 70000000, 630000000, 2625000, 4, ''),
(21, 'sibad@gmail.com', NULL, 7000000, 700000000, 20, 54, 2000000, 0, 70000000, 630000000, 2625000, 4, ''),
(22, 'ilham.sagitaputra@gmail.com', 4, 7000000, 700000000, 20, 30, 2000000, 0, 70000000, 630000000, 2625000, 3, '');

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
-- Dumping data for table `verif_pengecekan_slik`
--

INSERT INTO `verif_pengecekan_slik` (`ID_VPS`, `EMAIL_NAS`, `ID_KPS`, `STATUS_VPS`, `KOMENTAR_VPS`) VALUES
(3, 'nramandani@gmail.com', NULL, 0, NULL),
(4, 'jouvan@gmail.com', 9, 3, ''),
(5, 'dwi@gmail.com', NULL, 0, NULL),
(6, 'fitra.g@gmail.com', NULL, 0, NULL),
(7, 'galangsh@gmail.com', 6, 3, ''),
(8, 'afifah@gmail.com', 7, 3, ''),
(9, 'khusnulj@gmail.com', 7, 3, ''),
(10, 'ardhi@gmail.com', 9, 3, ''),
(11, 'atris@gmail.com', NULL, 0, NULL),
(12, 'sibad@gmail.com', NULL, 0, NULL),
(13, 'ilham.sagitaputra@gmail.com', NULL, 0, NULL);

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
  MODIFY `ID_DJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dokumen_karyawan`
--
ALTER TABLE `dokumen_karyawan`
  MODIFY `ID_DK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokumen_profesional`
--
ALTER TABLE `dokumen_profesional`
  MODIFY `ID_DP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dokumen_wiraswasta`
--
ALTER TABLE `dokumen_wiraswasta`
  MODIFY `ID_DW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  MODIFY `ID_VD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `verif_jaminan`
--
ALTER TABLE `verif_jaminan`
  MODIFY `ID_VJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `verif_kemampuan_bayar`
--
ALTER TABLE `verif_kemampuan_bayar`
  MODIFY `ID_VKB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `verif_pengecekan_slik`
--
ALTER TABLE `verif_pengecekan_slik`
  MODIFY `ID_VPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen_jaminan`
--
ALTER TABLE `dokumen_jaminan`
  ADD CONSTRAINT `dokumen_jaminan_FK` FOREIGN KEY (`ID_VJ`) REFERENCES `verif_jaminan` (`ID_VJ`);

--
-- Constraints for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  ADD CONSTRAINT `verif_dokumen_ibfk_1` FOREIGN KEY (`EMAIL_NAS`) REFERENCES `nasabah` (`EMAIL_NAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 04:26 PM
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
  `AJB_DJ` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen_jaminan`
--

INSERT INTO `dokumen_jaminan` (`ID_DJ`, `ID_VJ`, `SERHHS_DJ`, `IMB_DJ`, `PBB_DJ`, `AJB_DJ`) VALUES
(22, 24, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Nadiva_Ramandani.jpg'),
(23, 25, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Muhammad_Jovan_Auryn.jpg'),
(24, 26, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Dwi_Prasetyo.jpg'),
(25, 27, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Muhammad_Fitra_Gemilang.jpg'),
(26, 28, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Galang_Syauqi_Hilal.jpg'),
(27, 29, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Siti_Nur_Afifah.jpg'),
(28, 30, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Siti_Khusnul_Jamil.jpg'),
(29, 31, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Ardhiansyah.jpg'),
(30, 32, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Atrisgo_Alfareza.jpg'),
(31, 33, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Afif_Pratama.jpg'),
(32, 34, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Siti_Badriah.jpg'),
(33, 35, 'http://localhost/ta/uploads/dok_sertif/dok_sertif_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_imb/dok_imb_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_pbb/dok_pbb_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_aktajb/dok_aktajb_Dyah_Nurdina.jpg');

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

--
-- Dumping data for table `dokumen_karyawan`
--

INSERT INTO `dokumen_karyawan` (`ID_DK`, `ID_VD`, `KTP_DK`, `KTPPAS_DK`, `AKTANIK_DK`, `AKTAPIS_DK`, `KK_DK`, `NPWP_DK`, `SLIPGAJI_DK`, `SPERNYATAAN_DK`, `SPEMESANAN_DK`, `BPEMBAYARAN_DK`, `BPJS_DK`) VALUES
(7, 45, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_slip/dok_slip_Muhammad_Jovan_Auryn.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Muhammad_Jovan_Auryn.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Muhammad_Jovan_Auryn.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Muhammad_Jovan_Auryn.jpg'),
(8, 48, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_slip/dok_slip_Galang_Syauqi_Hilal.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Galang_Syauqi_Hilal.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Galang_Syauqi_Hilal.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Galang_Syauqi_Hilal.jpg'),
(9, 50, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_slip/dok_slip_Siti_Khusnul_Jamil.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Siti_Khusnul_Jamil.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Siti_Khusnul_Jamil.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Siti_Khusnul_Jamil.jpg'),
(10, 51, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_slip/dok_slip_Ardhiansyah.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Ardhiansyah.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Ardhiansyah.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Ardhiansyah.jpg');

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

--
-- Dumping data for table `dokumen_profesional`
--

INSERT INTO `dokumen_profesional` (`ID_DP`, `ID_VD`, `KTP_DP`, `KTPPAS_DP`, `AKTANIK_DP`, `AKTAPIS_DP`, `KK_DP`, `NPWP_DP`, `NPWPUSH_DP`, `SPERNYATAAN_DP`, `SPEMESANAN_DP`, `BPEMBAYARAN_DP`, `IZINPRAK_DP`, `REKKOR_DP`, `BPJS_DP`) VALUES
(25, 44, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Nadiva_Ramandani.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Nadiva_Ramandani.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Nadiva_Ramandani.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Nadiva_Ramandani.jpg'),
(26, 49, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Siti_Nur_Afifah.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Siti_Nur_Afifah.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Siti_Nur_Afifah.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Siti_Nur_Afifah.jpg'),
(27, 53, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Afif_Pratama.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Afif_Pratama.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Afif_Pratama.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Afif_Pratama.jpg'),
(28, 55, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Dyah_Nurdina.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Dyah_Nurdina.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_izinprak/dok_izinprak_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Dyah_Nurdina.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Dyah_Nurdina.jpg');

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

--
-- Dumping data for table `dokumen_wiraswasta`
--

INSERT INTO `dokumen_wiraswasta` (`ID_DW`, `ID_VD`, `KTP_DW`, `KTPPAS_DW`, `AKTANIK_DW`, `AKTAPIS_DW`, `KK_DW`, `NPWP_DW`, `NPWPUSH_DW`, `SPERNYATAAN_DW`, `SPEMESANAN_DW`, `BPEMBAYARAN_DW`, `SIUP_DW`, `REKKOR_DW`, `TDP_DW`, `AKTAPEND_DW`, `BPJS_DW`) VALUES
(5, 46, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Dwi_Prasetyo.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Dwi_Prasetyo.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_siup/dok_siup_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_tdp/dok_tdp_Dwi_Prasetyo.JPG', 'http://localhost/ta/uploads/dok_aktapend/dok_aktapend_Dwi_Prasetyo.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Dwi_Prasetyo.jpg'),
(6, 47, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Muhammad_Fitra_Gemilang.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Muhammad_Fitra_Gemilang.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_siup/dok_siup_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_tdp/dok_tdp_Muhammad_Fitra_Gemilang.JPG', 'http://localhost/ta/uploads/dok_aktapend/dok_aktapend_Muhammad_Fitra_Gemilang.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Muhammad_Fitra_Gemilang.jpg'),
(7, 52, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Atrisgo_Alfareza.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Atrisgo_Alfareza.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_siup/dok_siup_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_tdp/dok_tdp_Atrisgo_Alfareza.JPG', 'http://localhost/ta/uploads/dok_aktapend/dok_aktapend_Atrisgo_Alfareza.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Atrisgo_Alfareza.jpg'),
(8, 54, 'http://localhost/ta/uploads/dok_ktp/dok_ktp_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_ktppas/dok_ktppas_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_aktanik/dok_aktanik_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_aktapis/dok_aktapis_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_kk/dok_kk_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_npwp/dok_npwp_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_npwpush/dok_npwpush_Siti_Badriah.png', 'http://localhost/ta/uploads/dok_spkredit/dok_spkredit_Siti_Badriah.png', 'http://localhost/ta/uploads/dok_sprumah/dok_sprumah_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_bukti/dok_bukti_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_siup/dok_siup_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_rekkor/dok_rekkor_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_tdp/dok_tdp_Siti_Badriah.JPG', 'http://localhost/ta/uploads/dok_aktapend/dok_aktapend_Siti_Badriah.jpg', 'http://localhost/ta/uploads/dok_bpjs/dok_bpjs_Siti_Badriah.jpg');

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

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`NAMA_NAS`, `PASS_NAS`, `EMAIL_NAS`, `NOTLP_NAS`, `PEKERJAAN_NAS`, `TGLLHR_NAS`) VALUES
('Afif Pratama', '827ccb0eea8a706c4c34a16891f84e7b', 'a.pratama@gmail.com', '089765410981', '1', '2000-12-02'),
('Siti Nur Afifah', '827ccb0eea8a706c4c34a16891f84e7b', 'afifah@gmail.com', '081245638903', '1', '1997-06-26'),
('Ardhiansyah', '827ccb0eea8a706c4c34a16891f84e7b', 'ardhi@gmail.com', '087245108712', '2', '2022-02-22'),
('Atrisgo Alfareza', '827ccb0eea8a706c4c34a16891f84e7b', 'atris@gmail.com', '085249087123', '3', '1998-08-18'),
('Dwi Prasetyo', '827ccb0eea8a706c4c34a16891f84e7b', 'dwi@gmail.com', '089432498762', '3', '1996-06-07'),
('Dyah Nurdina', '827ccb0eea8a706c4c34a16891f84e7b', 'dyah@gmail.com', '089125682578', '1', '1990-06-01'),
('Muhammad Fitra Gemilang', '827ccb0eea8a706c4c34a16891f84e7b', 'fitra.g@gmail.com', '087623451678', '3', '2000-06-04'),
('Galang Syauqi Hilal', '827ccb0eea8a706c4c34a16891f84e7b', 'galangsh@gmail.com', '089847936782', '2', '1995-06-02'),
('Muhammad Jovan Auryn', '827ccb0eea8a706c4c34a16891f84e7b', 'jovan@gmail.com', '085765789012', '2', '1997-06-05'),
('Siti Khusnul Jamil', '827ccb0eea8a706c4c34a16891f84e7b', 'khusnulj@gmail.com', '082456780987', '2', '2000-01-11'),
('Nadiva Ramandani', '827ccb0eea8a706c4c34a16891f84e7b', 'nramandani@gmail.com', '085707877101', '1', '1995-01-01'),
('Siti Badriah', '827ccb0eea8a706c4c34a16891f84e7b', 'sibad@gmail.com', '087623410972', '3', '1996-06-29');

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

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`ID_NOTIF`, `EMAIL_NAS`, `PESAN_NOTIF`, `TGL_NOTIF`, `STATUS_NOTIF`, `ADMIN_NOTIF`) VALUES
(16, 'nramandani@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 03:44:31', 0, 1),
(17, 'nramandani@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 03:45:21', 3, 0),
(18, 'nramandani@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 03:46:20', 0, 1),
(19, 'nramandani@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 03:46:36', 3, 0),
(20, 'nramandani@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 03:47:06', 3, 0),
(21, 'nramandani@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 03:50:32', 0, 1),
(22, 'nramandani@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 03:51:44', 3, 0),
(23, 'jovan@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 03:56:39', 0, 1),
(24, 'jovan@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 03:57:17', 0, 1),
(25, 'jovan@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 03:58:15', 3, 0),
(26, 'jovan@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 03:58:51', 3, 0),
(27, 'jovan@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 03:59:21', 3, 0),
(28, 'jovan@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 03:59:53', 0, 1),
(29, 'jovan@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 04:00:12', 3, 0),
(30, 'dwi@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 04:04:06', 0, 1),
(31, 'dwi@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 04:04:44', 0, 1),
(32, 'dwi@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 04:05:08', 3, 0),
(33, 'dwi@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 04:05:28', 3, 0),
(34, 'dwi@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 04:06:22', 3, 0),
(35, 'dwi@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 04:06:48', 0, 1),
(36, 'dwi@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 04:07:04', 3, 0),
(37, 'fitra.g@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 04:20:20', 0, 1),
(38, 'fitra.g@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 04:21:00', 0, 1),
(39, 'fitra.g@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 04:21:33', 3, 0),
(40, 'fitra.g@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 04:21:50', 3, 0),
(41, 'fitra.g@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 04:22:54', 3, 0),
(42, 'fitra.g@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 04:23:23', 0, 1),
(43, 'fitra.g@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 04:23:33', 3, 0),
(44, 'galangsh@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 04:26:48', 0, 1),
(45, 'galangsh@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 04:27:27', 0, 1),
(46, 'galangsh@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 04:27:50', 3, 0),
(47, 'galangsh@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 04:28:09', 3, 0),
(48, 'galangsh@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 04:28:51', 3, 0),
(49, 'galangsh@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 04:29:38', 0, 1),
(50, 'galangsh@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 04:29:48', 3, 0),
(51, 'afifah@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 06:30:33', 0, 1),
(52, 'afifah@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 06:31:30', 0, 1),
(53, 'afifah@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 06:32:06', 3, 0),
(54, 'afifah@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 06:32:26', 3, 0),
(55, 'afifah@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 06:33:54', 3, 0),
(56, 'afifah@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 06:34:26', 0, 1),
(57, 'afifah@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 06:34:49', 3, 0),
(58, 'khusnulj@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 06:37:16', 0, 1),
(59, 'khusnulj@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 06:38:00', 0, 1),
(60, 'khusnulj@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 06:38:21', 3, 0),
(61, 'khusnulj@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 06:38:48', 3, 0),
(62, 'khusnulj@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 06:39:31', 3, 0),
(63, 'khusnulj@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 06:40:16', 0, 1),
(64, 'khusnulj@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 06:40:25', 3, 0),
(65, 'ardhi@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 06:43:24', 0, 1),
(66, 'ardhi@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 06:44:22', 0, 1),
(67, 'ardhi@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 06:44:44', 3, 0),
(68, 'ardhi@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 06:45:03', 3, 0),
(69, 'ardhi@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 06:45:34', 3, 0),
(70, 'ardhi@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 06:45:56', 0, 1),
(71, 'ardhi@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 06:46:19', 3, 0),
(72, 'atris@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 06:50:02', 0, 1),
(73, 'atris@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 06:50:43', 0, 1),
(74, 'atris@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 06:51:03', 3, 0),
(75, 'atris@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 06:51:25', 3, 0),
(76, 'atris@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 06:52:00', 3, 0),
(77, 'atris@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 06:52:15', 0, 1),
(78, 'atris@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 06:52:43', 3, 0),
(79, 'atris@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 06:52:44', 3, 0),
(80, 'a.pratama@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 06:55:37', 0, 1),
(81, 'a.pratama@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 06:56:27', 0, 1),
(82, 'a.pratama@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 06:56:52', 3, 0),
(83, 'a.pratama@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 06:57:26', 3, 0),
(84, 'a.pratama@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 06:57:45', 3, 0),
(85, 'a.pratama@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 06:58:08', 0, 1),
(86, 'a.pratama@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 06:58:42', 3, 0),
(87, 'sibad@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-23 07:02:58', 0, 1),
(88, 'sibad@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-23 07:03:46', 0, 1),
(89, 'sibad@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-23 07:04:21', 3, 0),
(90, 'sibad@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-23 07:04:36', 3, 0),
(91, 'sibad@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-23 07:05:20', 3, 0),
(92, 'sibad@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-23 07:05:46', 0, 1),
(93, 'sibad@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-23 07:06:15', 3, 0),
(94, 'dyah@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-25 11:19:03', 0, 1),
(95, 'dyah@gmail.com', 'Terdapat pengajuan kelengkapan dokumen baru!', '2022-06-25 11:29:00', 0, 1),
(96, 'dyah@gmail.com', 'Selamat, pengajuan kelengkapan dokumen anda telah diverifikasi!', '2022-06-25 13:04:05', 3, 0),
(97, 'dyah@gmail.com', 'Terdapat pengajuan kemampuan bayar baru!', '2022-06-25 13:04:48', 0, 1),
(98, 'dyah@gmail.com', 'Selamat, pengajuan kemampuan bayar anda telah diverifikasi!', '2022-06-25 13:05:00', 3, 0),
(99, 'dyah@gmail.com', 'Selamat, Kelengkapan SLIK anda telah diverifikasi!', '2022-06-25 13:06:05', 3, 0),
(100, 'dyah@gmail.com', 'Terdapat pengajuan dokumen jaminan baru!', '2022-06-25 13:07:18', 0, 1),
(101, 'dyah@gmail.com', 'Selamat, Dokumen jaminan anda telah diverifikasi!', '2022-06-25 13:07:59', 3, 0);

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

--
-- Dumping data for table `penilaian_ready`
--

INSERT INTO `penilaian_ready` (`EMAIL_NAS`, `PERHITUNGAN_KELDOK`, `PERHITUNGAN_KEMBA`, `PERHITUNGAN_JAMINAN`, `PERHITUNGAN_SLIK`, `PERHITUNGAN_S`, `PERHITUNGAN_V`, `PERHITUNGAN_STATUS`) VALUES
('nramandani@gmail.com', 0.94574160900318, 0.94574160900318, 0.94574160900318, 0.94574160900318, 0.8, 0.094669251635484, 0),
('jovan@gmail.com', 0.84089641525371, 0.94574160900318, 0.94574160900318, 0.94574160900318, 0.71131176401557, 0.084174190473587, 0),
('dwi@gmail.com', 0.94574160900318, 0.94574160900318, 0.94574160900318, 0.94574160900318, 0.8, 0.094669251635484, 0),
('fitra.g@gmail.com', 0.84089641525371, 0.94574160900318, 0.84089641525371, 1, 0.66874030497642, 0.079136430263254, 0),
('galangsh@gmail.com', 0.94574160900318, 0.94574160900318, 0.84089641525371, 1, 0.75212061861728, 0.089003370130143, 0),
('afifah@gmail.com', 0.84089641525371, 0.94574160900318, 0.84089641525371, 1, 0.66874030497642, 0.079136430263254, 0),
('khusnulj@gmail.com', 0.94574160900318, 0.94574160900318, 0.84089641525371, 0.88011173679339, 0.66195018392937, 0.078332910665706, 0),
('ardhi@gmail.com', 0.94574160900318, 0.94574160900318, 0.94574160900318, 1, 0.84589701075245, 0.10010054621078, 0),
('atris@gmail.com', 0.94574160900318, 0.94574160900318, 0.94574160900318, 0.79527072876705, 0.67271713220297, 0.07960703433503, 0),
('a.pratama@gmail.com', 0.84089641525371, 0.94574160900318, 0.94574160900318, 0.79527072876705, 0.59813951248849, 0.070781775026123, 0),
('sibad@gmail.com', 0.94574160900318, 0.94574160900318, 0.94574160900318, 0.79527072876705, 0.67271713220297, 0.07960703433503, 0),
('dyah@gmail.com', 0.94574160900318, 0.84089641525371, 0.94574160900318, 0.79527072876705, 0.59813951248849, 0.070781775026123, 0);

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
(44, 'nramandani@gmail.com', 10, 1, 3, 0, 'ok'),
(45, 'jovan@gmail.com', 11, 2, 3, 0, 'ktp dan kk tidak sesuai'),
(46, 'dwi@gmail.com', 10, 3, 3, 0, 'ok'),
(47, 'fitra.g@gmail.com', 11, 3, 3, 0, 'akta nikah tidak sesuai'),
(48, 'galangsh@gmail.com', 10, 2, 3, 0, 'ok'),
(49, 'afifah@gmail.com', 11, 1, 3, 0, ''),
(50, 'khusnulj@gmail.com', 10, 2, 3, 0, ''),
(51, 'ardhi@gmail.com', 10, 2, 3, 0, ''),
(52, 'atris@gmail.com', 10, 3, 3, 0, ''),
(53, 'a.pratama@gmail.com', 11, 1, 3, 0, ''),
(54, 'sibad@gmail.com', 10, 3, 3, 0, ''),
(55, 'dyah@gmail.com', 10, 1, 3, 0, '');

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
(24, 'nramandani@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, 'ok'),
(25, 'jovan@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, 'ok'),
(26, 'dwi@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, 'ok'),
(27, 'fitra.g@gmail.com', 7, 1, 1, 0, 1, 1, 1, 1, 1, 3, 'lebar jalan kurang'),
(28, 'galangsh@gmail.com', 7, 1, 1, 1, 0, 1, 1, 1, 1, 3, 'dekat tower'),
(29, 'afifah@gmail.com', 7, 1, 0, 1, 1, 1, 1, 1, 1, 3, ''),
(30, 'khusnulj@gmail.com', 7, 0, 1, 0, 1, 1, 1, 1, 1, 3, ''),
(31, 'ardhi@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, ''),
(32, 'atris@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, ''),
(33, 'a.pratama@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, ''),
(34, 'sibad@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, ''),
(35, 'dyah@gmail.com', 4, 1, 1, 1, 1, 1, 1, 1, 1, 3, '');

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
(31, 'nramandani@gmail.com', 4, 7000000, 700000000, 20, 27, 2000000, 0, 70000000, 630000000, 2625000, 3, 'ok'),
(32, 'jovan@gmail.com', 4, 7000000, 700000000, 20, 25, 2000000, 0, 70000000, 630000000, 2625000, 3, 'ok'),
(33, 'dwi@gmail.com', 4, 7000000, 700000000, 20, 26, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(34, 'fitra.g@gmail.com', 4, 7000000, 700000000, 20, 22, 2000000, 0, 70000000, 630000000, 2625000, 3, 'ok'),
(35, 'galangsh@gmail.com', 4, 7000000, 700000000, 20, 27, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(36, 'afifah@gmail.com', 4, 7000000, 700000000, 20, 24, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(37, 'khusnulj@gmail.com', 4, 7000000, 700000000, 20, 22, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(38, 'ardhi@gmail.com', 4, 7000000, 700000000, 20, 0, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(39, 'atris@gmail.com', 4, 7000000, 700000000, 20, 23, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(40, 'a.pratama@gmail.com', 4, 7000000, 700000000, 20, 21, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(41, 'sibad@gmail.com', 4, 7000000, 700000000, 20, 25, 2000000, 0, 70000000, 630000000, 2625000, 3, ''),
(42, 'dyah@gmail.com', 5, 3000000, 700000000, 20, 32, 2000000, 0, 70000000, 630000000, 2625000, 3, '');

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
(22, 'nramandani@gmail.com', 7, 3, 'ok'),
(23, 'jovan@gmail.com', 7, 3, 'ok'),
(24, 'dwi@gmail.com', 7, 3, ''),
(25, 'fitra.g@gmail.com', 6, 3, 'ok'),
(26, 'galangsh@gmail.com', 6, 3, ''),
(27, 'afifah@gmail.com', 6, 3, ''),
(28, 'khusnulj@gmail.com', 8, 3, ''),
(29, 'ardhi@gmail.com', 6, 3, ''),
(30, 'atris@gmail.com', 9, 3, ''),
(31, 'a.pratama@gmail.com', 9, 3, ''),
(32, 'sibad@gmail.com', 9, 3, ''),
(33, 'dyah@gmail.com', 9, 3, '');

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
  MODIFY `ID_DJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dokumen_karyawan`
--
ALTER TABLE `dokumen_karyawan`
  MODIFY `ID_DK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokumen_profesional`
--
ALTER TABLE `dokumen_profesional`
  MODIFY `ID_DP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dokumen_wiraswasta`
--
ALTER TABLE `dokumen_wiraswasta`
  MODIFY `ID_DW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `ID_NOTIF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `verif_dokumen`
--
ALTER TABLE `verif_dokumen`
  MODIFY `ID_VD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `verif_jaminan`
--
ALTER TABLE `verif_jaminan`
  MODIFY `ID_VJ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `verif_kemampuan_bayar`
--
ALTER TABLE `verif_kemampuan_bayar`
  MODIFY `ID_VKB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `verif_pengecekan_slik`
--
ALTER TABLE `verif_pengecekan_slik`
  MODIFY `ID_VPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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

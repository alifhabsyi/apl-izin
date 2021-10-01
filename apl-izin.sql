-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 06:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apl-izin`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID_REG` varchar(20) NOT NULL,
  `JENIS` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `KELURAHAN` varchar(255) NOT NULL,
  `KECAMATAN` varchar(255) NOT NULL,
  `KOTA` varchar(255) NOT NULL,
  `PROVINSI` varchar(255) NOT NULL,
  `PENANGGUNG_JAWAB` varchar(50) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `STATUS` varchar(5) NOT NULL,
  `SARAN` varchar(500) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `TGL_REG` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID_REG`, `JENIS`, `NAMA`, `ALAMAT`, `KELURAHAN`, `KECAMATAN`, `KOTA`, `PROVINSI`, `PENANGGUNG_JAWAB`, `NIK`, `NO_TELP`, `STATUS`, `SARAN`, `NIP`, `TGL_REG`) VALUES
('R107RU', 'kons', 'oiuuoiu', 'oiu', 'oiu', 'oui', 'oui', 'oiu', 'oiuo', 'iou', 'oiu', 'STBAP', '', '09876543221', '2021-09-30'),
('R14QDN', 'pend', 'iuuoi', 'uoiuio', 'oiu', 'oiu', 'uoi', 'oiu', 'oiu', 'oiu', 'oiuoui', 'STBAP', '', '09876543221', '2021-09-29'),
('R1948U', 'lab', 'Test Laboratorium', 'Test Alamat', 'Test Kelurahan', 'Test Kecamatan', 'Test Kota', 'Test Provinsi', 'Muhammad Alief Habsyi', '6306052611970005', '087777444435', 'SKK', '', '', '2021-08-07'),
('R1J6OG', 'lab', 'iou', 'oiuoiu', 'oiu', 'oiu', 'oiu', 'oiu', 'oiuo', 'iuoi', 'oui', 'SKK', '', '09876543221', '2021-09-29'),
('R1R6CJ', 'pend', 'Test Pendidikan', 'Test alamat Pendidikan', 'Test Kelurahan Pendidikan', 'Test Kecamatan Pendidikan', 'Test Kota Pendidikan', 'Test Provinsi Pendidikan', 'Muhammad Alief Habsyi', '987798', '087777444435', 'SKK', '', '09876543221', '2021-08-07'),
('R1T1DX', 'lab', 'Lab A', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'REG', '', '', '2021-09-28'),
('R1UCO1', 'lab', 'OKE TEST 29', 'ioppio', 'pio', 'ipop', 'iopoi', 'pio', 'pio', 'pio', '98', 'BSL', '', '09876543221', '2021-09-29'),
('R1XJ3F', 'pend', 'Test Laboratoriumu', '809', '09809', '8098', '089', '9', '0898', '0098', '90', 'SKK', '', '09876543221', '2021-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `regkons`
--

CREATE TABLE `regkons` (
  `ID_REG` varchar(20) NOT NULL,
  `FOTO` varchar(500) NOT NULL,
  `KTP` varchar(500) NOT NULL,
  `IUJK` varchar(500) NOT NULL,
  `SBUJK` varchar(500) NOT NULL,
  `NPWK` varchar(500) NOT NULL,
  `SKTU` varchar(500) NOT NULL,
  `SERTIFIKAT_KEAHLIAN` varchar(500) NOT NULL,
  `DAFTAR_PENGALAMAN` varchar(500) NOT NULL,
  `PJT` varchar(500) NOT NULL,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regkons`
--

INSERT INTO `regkons` (`ID_REG`, `FOTO`, `KTP`, `IUJK`, `SBUJK`, `NPWK`, `SKTU`, `SERTIFIKAT_KEAHLIAN`, `DAFTAR_PENGALAMAN`, `PJT`, `NIP`) VALUES
('R107RU', 'ad792414207880978413b6c975c6c820.docx', '9fb209120f8b7053868eafc4ac344db0.docx', '500411439097e65f111bc2671e2baed4.docx', 'f767e77304ddaef58ca39ced85bb8ecd.docx', 'bbdf3e70fc8a49b1263f6072c9a6727f.docx', '91b83812b945201b4ecb4bd52a85977d.docx', 'f575bb8ae95c7a0c8b819c6d1c24771f.docx', '7eb34e6afdce1d769f8a5dadf9abefb7.docx', '7eb34e6afdce1d769f8a5dadf9abefb7.docx', '');

-- --------------------------------------------------------

--
-- Table structure for table `reglab`
--

CREATE TABLE `reglab` (
  `ID_REG` varchar(50) NOT NULL,
  `KTP` varchar(500) NOT NULL,
  `NPWP` varchar(50) NOT NULL,
  `GMAP` varchar(500) NOT NULL,
  `SP_PENANGGUNGJAWAB` varchar(500) NOT NULL,
  `SP_KESEDIAAN` varchar(500) NOT NULL,
  `DATA_BANGUNAN` varchar(500) NOT NULL,
  `DATA_PERALATAN` varchar(500) NOT NULL,
  `SR_DINKES` varchar(500) NOT NULL,
  `NIB` varchar(500) NOT NULL,
  `IMB` varchar(500) NOT NULL,
  `UKL_UPL` varchar(500) NOT NULL,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reglab`
--

INSERT INTO `reglab` (`ID_REG`, `KTP`, `NPWP`, `GMAP`, `SP_PENANGGUNGJAWAB`, `SP_KESEDIAAN`, `DATA_BANGUNAN`, `DATA_PERALATAN`, `SR_DINKES`, `NIB`, `IMB`, `UKL_UPL`, `NIP`) VALUES
('R1J6OG', '12afeaeebe0437a8119640ec5f8c95fb.xls', '27c0219d148e3f3f3027449dcd8c59bd.xls', '720d769fe0aab0917e3feb134373c8c7.xls', 'a03379e847779fdd9fa7f5ce1fb3a5f0.xls', 'e7fd3ad6d3861b66da7cb0d06693bc9c.xls', 'd2b05c63817db0d1ce0039711fc1c85f.xls', '75e3e89196ed86752667fe6e7338bdef.xls', 'a3541c83f0b729dc31901980f2a26b1e.xls', '473c3d0d7154728c8d7dd57fd14e6829.xls', 'fb801ca1ef62339f8c9740c1af092947.xls', '4fa7de2181bf0329cb5b7099df4c2d83.xls', ''),
('R1UCO1', 'e109a970a5f8681114067d44d86283a5.xls', '009081ac9ad86f731f71f276dcaf1d2b.xls', 'e0c5406a98c62eb1ab48a0ae028fa5d4.xls', '818d6471017650438b0b37411ceebcbc.xls', '025c8c766c1c614a27f214633385181e.xls', '88fecf08105992d234e625d39e1dff38.xls', '97b8fbea40de9acac0572886dffad8f1.xls', 'e607640b0a413c62bb0f8eff128bef35.xls', '12e236500d4885da4ed2f09bc3879b97.xls', '8478657624c97448742e99030b3823b8.xls', '9a6e574bd0cf287d0ef37fc2a5a691dc.xls', '');

-- --------------------------------------------------------

--
-- Table structure for table `regpend`
--

CREATE TABLE `regpend` (
  `ID_REG` varchar(20) NOT NULL,
  `AKTA_NOTARIS` varchar(500) NOT NULL,
  `IMB` varchar(500) NOT NULL,
  `SPPL` varchar(500) NOT NULL,
  `NIB` varchar(500) NOT NULL,
  `SR_DISPEN` varchar(500) NOT NULL,
  `IZIN_USAHA` varchar(500) NOT NULL,
  `IZIN_LOKASI` varchar(500) NOT NULL,
  `SLF` varchar(500) NOT NULL,
  `SKTU` varchar(500) NOT NULL,
  `PROPOSAL_DISPEN` varchar(500) NOT NULL,
  `SP_KOMITMEN` varchar(500) NOT NULL,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regpend`
--

INSERT INTO `regpend` (`ID_REG`, `AKTA_NOTARIS`, `IMB`, `SPPL`, `NIB`, `SR_DISPEN`, `IZIN_USAHA`, `IZIN_LOKASI`, `SLF`, `SKTU`, `PROPOSAL_DISPEN`, `SP_KOMITMEN`, `NIP`) VALUES
('R14QDN', '8ba5897da86921acdfeb4dcfe6edc121.xls', 'bef8b96c456bfaba9793b3c638bf322e.xls', 'aaf9ae49db42a9611c3a6b418cb83a23.xls', '9daae75c5dcea349cc85287747803212.xls', '4b655e5ddc45d3934975a6b4908f92dc.xls', '9ff7acc2546e9da3d14d785966d364e8.xls', 'ccc9899c93148ab8a4f7be6adc5e27b1.xls', '3bba18fa1272096725f788e25468fee7.xls', '13ad398c66d2fc5a5fca0eb5aa4ed4e7.xls', '766bce2a57398462147abd0e26efc7c9.xls', '766bce2a57398462147abd0e26efc7c9.xls', ''),
('R1R6CJ', 'c54bb38e837956772f68a3c23847c476.xls', 'a5b150f700e491e713f0cb817c579d49.xls', '6d3594fc8eed584b7b64de5115933cdb.xls', 'd3572d280116c0d85454b8aece26f8bb.xls', 'd3d376458e7781ee0042b4126ff4656e.xls', '87c16cd99b06bac8d0a0f7499c7aaa47.xls', '2394b63d63c36402f72b40413c5c9607.xls', '9e18da6d65834a7341dc3e78a360a048.xls', '0361aa72e981f6c7df546d8c786d9250.xls', 'aee92fd2b0bee4a37f9c6e7756993592.xls', 'aee92fd2b0bee4a37f9c6e7756993592.xls', ''),
('R1XJ3F', 'e59837b75280059e6cd4f83104821091.xls', '6b6933b5aca96e535c6398d17d3670d7.xls', 'e057dbe5c12250cb7a7b733074e15e3e.xls', '9d102108adc7f3754afd4df1c4e368ad.xls', '4a8de77cdec5688342c13f1fa61ee2f0.xls', '66d8dd1fbdb421424d6cf25f66f218e5.xls', 'c736a6e348bd31cf79ad4eb60aae5fd0.xls', 'de826734ee9831c1e1d35b9216c0b896.xls', '4c6c19ae888f748e9e51f576560d870e.xls', '793f5efa994b0830c9a1492a8162b4ab.xls', '793f5efa994b0830c9a1492a8162b4ab.xls', '');

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `ID_REG` varchar(20) NOT NULL,
  `NO_SK` varchar(500) NOT NULL,
  `TGL_SK` date NOT NULL,
  `NIP_PETUGAS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`ID_REG`, `NO_SK`, `TGL_SK`, `NIP_PETUGAS`) VALUES
('R1948U', 'SK/LAB/202108/BJM/9804', '2021-08-18', '09876543221'),
('R1R6CJ', 'SK/PEND/202109/BJM/6703', '2021-09-29', '09876543221'),
('R1XJ3F', 'SK/PEND/202109/BJM/9604', '0000-00-00', '09876543221'),
('R1J6OG', 'SK/LAB/202109/BJM/7314', '2021-09-29', '09876543221');

-- --------------------------------------------------------

--
-- Table structure for table `stbap`
--

CREATE TABLE `stbap` (
  `ID_REG` varchar(20) NOT NULL,
  `NO_SURAT` varchar(200) NOT NULL,
  `NIP_PETUGAS1` varchar(20) NOT NULL,
  `NIP_PETUGAS2` varchar(20) NOT NULL,
  `NAMA_PEMOHON` varchar(50) NOT NULL,
  `NAMA_IZIN` varchar(255) NOT NULL,
  `ALAMAT_IZIN` varchar(255) NOT NULL,
  `TGL_ST` date NOT NULL,
  `NO_BAP` varchar(255) NOT NULL,
  `TGL_BAP` date NOT NULL,
  `KETERANGAN_BAP` varchar(500) NOT NULL,
  `HASIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stbap`
--

INSERT INTO `stbap` (`ID_REG`, `NO_SURAT`, `NIP_PETUGAS1`, `NIP_PETUGAS2`, `NAMA_PEMOHON`, `NAMA_IZIN`, `ALAMAT_IZIN`, `TGL_ST`, `NO_BAP`, `TGL_BAP`, `KETERANGAN_BAP`, `HASIL`) VALUES
('R107RU', 'ST/R107RU/202109/BJM/4689', '09876543221', '09876543222', 'oiuuoiu', 'oiuuoiu', 'oiu', '2021-09-29', 'BAP/R107RU/202109/BJM/8317', '0000-00-00', '', ''),
('R14QDN', 'ST/R14QDN/202109/BJM/3267', '09876543221', '09876543222', 'iuuoi', 'iuuoi', 'uoiuio', '2021-09-23', 'BAP/R14QDN/202109/BJM/8703', '0000-00-00', '', ''),
('R1948U', 'ST/R1948U/202108/BJM/8702', '09876543221', '09876543222', 'Test Laboratorium', 'Test Laboratorium', 'Test Alamat', '2021-08-20', 'BAP/R1948U/202108/BJM/2174', '2021-08-07', 'OK', 'SK'),
('R1J6OG', 'ST/R1J6OG/202109/BJM/3179', '09876543221', '09876543222', 'iou', 'iou', 'oiuoiu', '2021-09-22', 'BAP/R1J6OG/202109/BJM/7593', '2021-09-29', 'OKEA', 'SK'),
('R1R6CJ', 'ST/R1R6CJ/202108/BJM/0132', '09876543221', '09876543222', 'Test Pendidikan', 'Test Pendidikan', 'Test alamat Pendidikan', '2021-09-29', 'BAP/R1R6CJ/202108/BJM/2594', '2021-09-29', 'ok', 'SK'),
('R1UCO1', 'ST/R1UCO1/202109/BJM/8013', '09876543222', '09876543221', 'OKE TEST 29', 'OKE TEST 29', 'ioppio', '2021-09-30', 'BAP/R1UCO1/202109/BJM/5270', '2021-09-29', 'ok', 'BSL'),
('R1XJ3F', 'ST/R1XJ3F/202108/BJM/4120', '09876543222', '09876543221', 'Test Laboratoriumu', 'Test Laboratoriumu', '809', '2021-08-19', 'BAP/R1XJ3F/202108/BJM/8541', '2021-09-29', 'GAGAL', 'SK');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(25) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `JABATAN` varchar(255) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `LEVEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `NAMA`, `PASSWORD`, `NIP`, `JABATAN`, `NO_TELP`, `LEVEL`) VALUES
('alif', 'MUHAMMAD ALIEF HABSYI', '202cb962ac59075b964b07152d234b70', '09876543221', 'Programmer', '087777444435', 'ADM'),
('habsyi', 'ALIEF HABSYI', '202cb962ac59075b964b07152d234b70', '09876543222', 'QA', '087777444435', 'ADM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `regkons`
--
ALTER TABLE `regkons`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `reglab`
--
ALTER TABLE `reglab`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `regpend`
--
ALTER TABLE `regpend`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `stbap`
--
ALTER TABLE `stbap`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

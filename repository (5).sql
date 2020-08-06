-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 07:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository`
--

-- --------------------------------------------------------

--
-- Table structure for table `dasarhukum`
--

CREATE TABLE `dasarhukum` (
  `id` int(11) NOT NULL,
  `namash` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `thterbit` varchar(50) NOT NULL,
  `tentang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dasarhukum`
--

INSERT INTO `dasarhukum` (`id`, `namash`, `nomor`, `thterbit`, `tentang`) VALUES
(1, 'ITW', '10310091E92', '2020', 'pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `dataumum`
--

CREATE TABLE `dataumum` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `sasaran` varchar(50) NOT NULL,
  `kategorisistem` varchar(50) NOT NULL,
  `kategoriakses` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `fungsiutama` int(11) NOT NULL,
  `ruanglingkup` varchar(50) NOT NULL,
  `jenislayanan` int(11) NOT NULL,
  `sistempengaman` int(11) NOT NULL,
  `sistemterkait` int(11) NOT NULL,
  `sertifikasi` int(11) NOT NULL,
  `penggunalayanan` int(11) NOT NULL,
  `penyelenggara` int(11) NOT NULL,
  `pkutama` int(11) NOT NULL,
  `pkkhusus` int(11) NOT NULL,
  `plutama` int(11) NOT NULL,
  `plpendukung` int(11) NOT NULL,
  `tenagaahli` int(11) NOT NULL,
  `ketersediaanta` int(11) NOT NULL,
  `dasarhukum` int(11) NOT NULL,
  `sop` int(11) NOT NULL,
  `penanggungjawab` varchar(30) NOT NULL,
  `helpdesk` int(11) NOT NULL,
  `tglentri` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataumum`
--

INSERT INTO `dataumum` (`id`, `nama`, `deskripsi`, `sasaran`, `kategorisistem`, `kategoriakses`, `url`, `fungsiutama`, `ruanglingkup`, `jenislayanan`, `sistempengaman`, `sistemterkait`, `sertifikasi`, `penggunalayanan`, `penyelenggara`, `pkutama`, `pkkhusus`, `plutama`, `plpendukung`, `tenagaahli`, `ketersediaanta`, `dasarhukum`, `sop`, `penanggungjawab`, `helpdesk`, `tglentri`) VALUES
(1, 'Alhamdulillah Bisaaa', 'Prototype', 'Lokal', 'Strategis', 'Intranet', 'www.com', 1, 'Energi', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1912038912111', 1, '2020-08-06 04:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `id` int(11) NOT NULL,
  `namaSE` varchar(50) NOT NULL,
  `versi` varchar(50) NOT NULL,
  `docperancangan` varchar(100) NOT NULL,
  `dbMaster` varchar(100) NOT NULL,
  `sCode` varchar(100) NOT NULL,
  `lainnya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`id`, `namaSE`, `versi`, `docperancangan`, `dbMaster`, `sCode`, `lainnya`) VALUES
(1, 'Alhamdulillah Bisaaa', 'Prototype', 'prease_release_fix1.pdf', 'repository_(3)1.sql', 'Karanimoji1.xd', 'k-Means_Clustering1.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `fungsiutama`
--

CREATE TABLE `fungsiutama` (
  `id` int(11) NOT NULL,
  `fungsi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fungsiutama`
--

INSERT INTO `fungsiutama` (`id`, `fungsi`, `keterangan`) VALUES
(1, 'pembayaran', 'pembayaran listrik');

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `picAdmin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`id`, `nama`, `telp`, `picAdmin`, `email`) VALUES
(1, 'sanju', '091221', 'none', 'sanjuu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jenislayanan`
--

CREATE TABLE `jenislayanan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenislayanan`
--

INSERT INTO `jenislayanan` (`id`, `jenis`, `keterangan`) VALUES
(1, 'Pembayaran', 'semua kalangan');

-- --------------------------------------------------------

--
-- Table structure for table `ketersediaanta`
--

CREATE TABLE `ketersediaanta` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketersediaanta`
--

INSERT INTO `ketersediaanta` (`id`, `jenis`, `jumlah`, `status`) VALUES
(1, 'programmer', 4, 'Non PNS');

-- --------------------------------------------------------

--
-- Table structure for table `penanggungjawab`
--

CREATE TABLE `penanggungjawab` (
  `nama` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `namaSK` varchar(50) NOT NULL,
  `alamatSK` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kabkot` varchar(50) NOT NULL,
  `kdpos` varchar(10) NOT NULL,
  `noHP` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penanggungjawab`
--

INSERT INTO `penanggungjawab` (`nama`, `nip`, `namaSK`, `alamatSK`, `prov`, `kabkot`, `kdpos`, `noHP`, `email`) VALUES
('Bambang', '1912038912111', 'Kominfo', 'Kediri', 'Jawa Timur', 'Kediri', '561231', '100000012131', 'balloteli99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `penggunalayanan`
--

CREATE TABLE `penggunalayanan` (
  `id` int(11) NOT NULL,
  `jenisPengguna` varchar(50) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penggunalayanan`
--

INSERT INTO `penggunalayanan` (`id`, `jenisPengguna`, `keterangan`) VALUES
(1, 'Masyarakat Kediri', 'semua kalangan');

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggara`
--

CREATE TABLE `penyelenggara` (
  `id` int(11) NOT NULL,
  `namask` varchar(50) NOT NULL,
  `alamatsk` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kabkot` varchar(50) NOT NULL,
  `kdpos` varchar(10) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelenggara`
--

INSERT INTO `penyelenggara` (`id`, `namask`, `alamatsk`, `prov`, `kabkot`, `kdpos`, `telp`, `website`) VALUES
(1, 'Kominfo Kota Kediri', 'Kediri', 'Jawa Timur', 'Kediri', '64411', '012903', 'www.com');

-- --------------------------------------------------------

--
-- Table structure for table `pkkhusus`
--

CREATE TABLE `pkkhusus` (
  `id` int(11) NOT NULL,
  `jenispk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkkhusus`
--

INSERT INTO `pkkhusus` (`id`, `jenispk`, `tipe`, `keterangan`) VALUES
(1, 'Wireless router', 'router', 'untuk wifi kantor');

-- --------------------------------------------------------

--
-- Table structure for table `pkutama`
--

CREATE TABLE `pkutama` (
  `id` int(11) NOT NULL,
  `jenispk` varchar(50) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `penyedia` varchar(50) DEFAULT NULL,
  `bandwith` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `kaphdd` varchar(50) NOT NULL,
  `memori` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkutama`
--

INSERT INTO `pkutama` (`id`, `jenispk`, `pemilik`, `penyedia`, `bandwith`, `jumlah`, `tipe`, `processor`, `kaphdd`, `memori`, `lokasi`) VALUES
(1, 'PC', 'Kantor', 'none', '5MBps', 10, 'router', 'Intel Core I5 gen 5th', '1TB', '8GB', 'Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `plpendukung`
--

CREATE TABLE `plpendukung` (
  `id` int(11) NOT NULL,
  `jenispl` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plpendukung`
--

INSERT INTO `plpendukung` (`id`, `jenispl`, `deskripsi`) VALUES
(1, 'none', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `plutama`
--

CREATE TABLE `plutama` (
  `id` int(11) NOT NULL,
  `namapl` varchar(50) NOT NULL,
  `jenispl` varchar(50) NOT NULL,
  `penyedia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plutama`
--

INSERT INTO `plutama` (`id`, `namapl`, `jenispl`, `penyedia`) VALUES
(1, 'web browser', 'none', 'Kominfo');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id` int(11) NOT NULL,
  `namasertif` varchar(50) NOT NULL,
  `namainst` varchar(50) NOT NULL,
  `tglterbit` date NOT NULL,
  `tglmulai` date NOT NULL,
  `tglhabis` date NOT NULL,
  `masalaku` varchar(50) NOT NULL,
  `nosertif` varchar(50) NOT NULL,
  `ruanglingkup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id`, `namasertif`, `namainst`, `tglterbit`, `tglmulai`, `tglhabis`, `masalaku`, `nosertif`, `ruanglingkup`) VALUES
(1, '123', 'kominfo', '0000-00-00', '0000-00-00', '0000-00-00', '5', '3212312', 'Regional Kediri');

-- --------------------------------------------------------

--
-- Table structure for table `sistempengaman`
--

CREATE TABLE `sistempengaman` (
  `id` int(11) NOT NULL,
  `namasp` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sistempengaman`
--

INSERT INTO `sistempengaman` (`id`, `namasp`, `keterangan`) VALUES
(1, 'none', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `sistemterkait`
--

CREATE TABLE `sistemterkait` (
  `id` int(11) NOT NULL,
  `namast` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sistemterkait`
--

INSERT INTO `sistemterkait` (`id`, `namast`, `keterangan`) VALUES
(1, 'tidak ada', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE `sop` (
  `id` int(11) NOT NULL,
  `namasop` varchar(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sop`
--

INSERT INTO `sop` (`id`, `namasop`, `keterangan`) VALUES
(1, 'pembayaran', 'pembayaran PLN');

-- --------------------------------------------------------

--
-- Table structure for table `tenagaahli`
--

CREATE TABLE `tenagaahli` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kompetensi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenagaahli`
--

INSERT INTO `tenagaahli` (`id`, `jenis`, `jumlah`, `kompetensi`) VALUES
(1, 'Programmer', 4, 'HTML,PHP,JAVASCRIPT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `role` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `role`) VALUES
(1, 'admin', '123', 1),
(2, 'kominfo', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dasarhukum`
--
ALTER TABLE `dasarhukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataumum`
--
ALTER TABLE `dataumum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fungsiutama` (`fungsiutama`),
  ADD KEY `jenislayanan` (`jenislayanan`),
  ADD KEY `sistempengaman` (`sistempengaman`),
  ADD KEY `sistemterkait` (`sistemterkait`),
  ADD KEY `sertifikasi` (`sertifikasi`),
  ADD KEY `penggunalayanan` (`penggunalayanan`),
  ADD KEY `penyelenggara` (`penyelenggara`),
  ADD KEY `pkutama` (`pkutama`),
  ADD KEY `pkkhusus` (`pkkhusus`),
  ADD KEY `plutama` (`plutama`),
  ADD KEY `plpendukung` (`plpendukung`),
  ADD KEY `tenagaahli` (`tenagaahli`),
  ADD KEY `ketersediaanta` (`ketersediaanta`),
  ADD KEY `dasarhukum` (`dasarhukum`),
  ADD KEY `sop` (`sop`),
  ADD KEY `penanggungjawab` (`penanggungjawab`),
  ADD KEY `helpdesk` (`helpdesk`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fungsiutama`
--
ALTER TABLE `fungsiutama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenislayanan`
--
ALTER TABLE `jenislayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketersediaanta`
--
ALTER TABLE `ketersediaanta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanggungjawab`
--
ALTER TABLE `penanggungjawab`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `penggunalayanan`
--
ALTER TABLE `penggunalayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkkhusus`
--
ALTER TABLE `pkkhusus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkutama`
--
ALTER TABLE `pkutama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plpendukung`
--
ALTER TABLE `plpendukung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plutama`
--
ALTER TABLE `plutama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sistempengaman`
--
ALTER TABLE `sistempengaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sistemterkait`
--
ALTER TABLE `sistemterkait`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenagaahli`
--
ALTER TABLE `tenagaahli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dasarhukum`
--
ALTER TABLE `dasarhukum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dataumum`
--
ALTER TABLE `dataumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

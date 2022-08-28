-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 01:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_matrikulasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_ujian`
--

CREATE TABLE `acc_ujian` (
  `id_acc_ujian` int(11) NOT NULL,
  `dosen_penguji` varchar(45) NOT NULL,
  `jadwal_ujian` varchar(45) NOT NULL,
  `ACC_ujiacol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_ujian`
--

INSERT INTO `acc_ujian` (`id_acc_ujian`, `dosen_penguji`, `jadwal_ujian`, `ACC_ujiacol`) VALUES
(1, 'Lutfi Hakim', 'Senin, 1 Agustus 2022S', 'Verified'),
(2, 'Dianni Yusuf', 'Selasa, 2 Agustus 2022', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_kelompok`
--

CREATE TABLE `anggota_kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `nama_anggota` varchar(45) NOT NULL,
  `nim` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_kelompok`
--

INSERT INTO `anggota_kelompok` (`id_kelompok`, `nama_anggota`, `nim`) VALUES
(1, 'Mohammad Zavir Zakaria', '362155401115'),
(2, 'Jehan Khairul Anwar', '362155401102');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(45) NOT NULL,
  `nik` varchar(45) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `nik`, `id_user`) VALUES
(1, 'Lutfi Hakim', '12345', 2),
(2, 'Dianni Yusuf', '12346', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lembar_kerja`
--

CREATE TABLE `lembar_kerja` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(45) NOT NULL,
  `anggota_kel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembar_kerja`
--

INSERT INTO `lembar_kerja` (`id`, `tanggal`, `file`, `anggota_kel_id`) VALUES
(350, '2022-08-02', 'phone-logo-CA0ABEDEEB-seeklogo.com.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lembar_kerja_1`
--

CREATE TABLE `lembar_kerja_1` (
  `id_lembar_kerja` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(45) NOT NULL,
  `id_kelompok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembar_kerja_1`
--

INSERT INTO `lembar_kerja_1` (`id_lembar_kerja`, `tanggal`, `file`, `id_kelompok`) VALUES
(1, '2022-08-01', 'Penelitian Kebab', 1),
(2, '2022-08-01', 'Penelitian PKM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(45) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kelompok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `kelas`, `email`, `alamat`, `id_user`, `id_kelompok`) VALUES
(1102, 'Jehan Khairul Anwar', '362155401102', 'D', 'jehan123@gmail.com', 'Muncar', 1, 2),
(1115, 'Mohammad Zavir Zakaria', '362155401115', 'D', 'zavirzakaria13@gmail.com', 'Jl. Musi', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nilai_pembimbing_lapangan` varchar(45) NOT NULL,
  `nilai_pembimbing_kp` varchar(45) NOT NULL,
  `nilai_penguji` varchar(45) NOT NULL,
  `bukti_nilai_pembimbing_lapangan` varchar(45) NOT NULL,
  `id_pendaftaran_ujian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_kp`
--

CREATE TABLE `pendaftaran_kp` (
  `id_pendafataran_kp` int(11) NOT NULL,
  `tempat_kp` varchar(45) NOT NULL,
  `alamat_kp` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `proposal` varchar(45) NOT NULL,
  `id_kelompok` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `id_perusahaan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran_kp`
--

INSERT INTO `pendaftaran_kp` (`id_pendafataran_kp`, `tempat_kp`, `alamat_kp`, `tanggal_mulai`, `tanggal_selesai`, `proposal`, `id_kelompok`, `id_dosen`, `id_perusahaan`) VALUES
(1, 'Banyuwangi', 'Jl. Musi', '2022-08-01', '2022-08-30', 'Penelitian Kebab', 1, 1, 1),
(2, 'Banyuwangi', 'Muncar', '2022-08-01', '2022-08-30', 'Penelitian PKM', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_ujian`
--

CREATE TABLE `pendaftaran_ujian` (
  `id_pendaftaran_ujian` int(11) NOT NULL,
  `laporan_kp` varchar(45) NOT NULL,
  `jadwal_ujian` varchar(45) NOT NULL,
  `id_pendaftaran_kp` int(11) DEFAULT NULL,
  `id_acc_ujian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran_ujian`
--

INSERT INTO `pendaftaran_ujian` (`id_pendaftaran_ujian`, `laporan_kp`, `jadwal_ujian`, `id_pendaftaran_kp`, `id_acc_ujian`) VALUES
(0, 'phone-logo-CA0ABEDEEB-seeklogo.com.png', 'phone-logo-CA0ABEDEEB-seeklogo.com.png', NULL, NULL),
(1, 'Penelitian Kebab', 'Senin, 1 Agustus 2022S', 1, 1),
(2, 'Penelitian PKM', 'Selasa, 2 Agustus 2022', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_ujian_kp`
--

CREATE TABLE `pendaftaran_ujian_kp` (
  `id` int(11) NOT NULL,
  `laporan_kp` varchar(45) NOT NULL,
  `jadwal_ujian` varchar(45) NOT NULL,
  `pendaftaran_kp_id` int(11) NOT NULL,
  `acc_ujian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran_ujian_kp`
--

INSERT INTO `pendaftaran_ujian_kp` (`id`, `laporan_kp`, `jadwal_ujian`, `pendaftaran_kp_id`, `acc_ujian_id`) VALUES
(5, '1.jpg', '1.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telepon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `email`, `telepon`) VALUES
(1, 'PT. Japir Ganteng', 'Jl. Musi', 'zavirzakaria13@gmail.com', '082337489483'),
(2, 'PT. Jehan Gemoy', 'Banyuwangi', 'jehan123@gmail.com', '081998986390');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id_user_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user`, `password`, `id_user_role`) VALUES
(1, 'mahasiswa', '123', 1),
(2, 'dosen', '123', 2),
(3, 'Koordinator KP', '123', 3),
(4, 'Admin Prodi', '123', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_user_role` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_user_role`, `role`) VALUES
(1, 'Mahasiswa'),
(2, 'Dosen'),
(3, 'Koordinator KP'),
(4, 'Admin Prodi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_ujian`
--
ALTER TABLE `acc_ujian`
  ADD PRIMARY KEY (`id_acc_ujian`);

--
-- Indexes for table `anggota_kelompok`
--
ALTER TABLE `anggota_kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `user_id` (`id_user`);

--
-- Indexes for table `lembar_kerja`
--
ALTER TABLE `lembar_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembar_kerja_1`
--
ALTER TABLE `lembar_kerja_1`
  ADD PRIMARY KEY (`id_lembar_kerja`),
  ADD KEY `anggota_kelompok_id` (`id_kelompok`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `user_id` (`id_user`),
  ADD KEY `anggota_kelompok_id` (`id_kelompok`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `pendaftaran_ujian_kp_id` (`id_pendaftaran_ujian`);

--
-- Indexes for table `pendaftaran_kp`
--
ALTER TABLE `pendaftaran_kp`
  ADD PRIMARY KEY (`id_pendafataran_kp`),
  ADD KEY `anggota_kelompok_id` (`id_kelompok`),
  ADD KEY `dosen_id` (`id_dosen`),
  ADD KEY `perusahaan_id` (`id_perusahaan`);

--
-- Indexes for table `pendaftaran_ujian`
--
ALTER TABLE `pendaftaran_ujian`
  ADD PRIMARY KEY (`id_pendaftaran_ujian`),
  ADD KEY `pendaftaran_kp_id` (`id_pendaftaran_kp`),
  ADD KEY `ACC_ujian_id` (`id_acc_ujian`);

--
-- Indexes for table `pendaftaran_ujian_kp`
--
ALTER TABLE `pendaftaran_ujian_kp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user_role`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_user_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lembar_kerja`
--
ALTER TABLE `lembar_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `pendaftaran_ujian_kp`
--
ALTER TABLE `pendaftaran_ujian_kp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `lembar_kerja_1`
--
ALTER TABLE `lembar_kerja_1`
  ADD CONSTRAINT `lembar_kerja_1_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `anggota_kelompok` (`id_kelompok`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_kelompok`) REFERENCES `anggota_kelompok` (`id_kelompok`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_pendaftaran_ujian`) REFERENCES `pendaftaran_ujian` (`id_pendaftaran_ujian`);

--
-- Constraints for table `pendaftaran_kp`
--
ALTER TABLE `pendaftaran_kp`
  ADD CONSTRAINT `pendaftaran_kp_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `anggota_kelompok` (`id_kelompok`),
  ADD CONSTRAINT `pendaftaran_kp_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `pendaftaran_kp_ibfk_3` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `pendaftaran_ujian`
--
ALTER TABLE `pendaftaran_ujian`
  ADD CONSTRAINT `pendaftaran_ujian_ibfk_1` FOREIGN KEY (`id_pendaftaran_kp`) REFERENCES `pendaftaran_kp` (`id_pendafataran_kp`),
  ADD CONSTRAINT `pendaftaran_ujian_ibfk_2` FOREIGN KEY (`id_acc_ujian`) REFERENCES `acc_ujian` (`id_acc_ujian`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user_role`) REFERENCES `user_role` (`id_user_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

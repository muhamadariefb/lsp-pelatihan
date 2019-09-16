-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 07:32 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_pelatihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_dosen`
--

CREATE TABLE `m_dosen` (
  `id` int(11) NOT NULL,
  `kd_dosen` varchar(20) NOT NULL,
  `nm_dosen` varchar(100) NOT NULL,
  `nidn_dosen` varchar(20) NOT NULL,
  `jns_klmn_dosen` varchar(2) NOT NULL,
  `kd_jabatan_dosen` varchar(2) NOT NULL,
  `status_dosen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_dosen`
--

INSERT INTO `m_dosen` (`id`, `kd_dosen`, `nm_dosen`, `nidn_dosen`, `jns_klmn_dosen`, `kd_jabatan_dosen`, `status_dosen`) VALUES
(3, 'DSN001', 'Dosen 001', '0012015', 'L', 'A', 'Aktif'),
(4, 'DSN002', 'Dosen 002', '0022015', 'P', 'B', 'Aktif'),
(6, 'DSN003', 'Dosen 003', '0032015', 'L', 'B', 'Aktif'),
(7, 'DSN004', 'Dosen 004', '0042015', 'P', 'A', 'Aktif'),
(8, 'DSN005', 'Dosen 005', '0052015', 'P', 'C', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `m_mahasiswa`
--

CREATE TABLE `m_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim_mhs` varchar(10) NOT NULL,
  `kd_prodi` varchar(20) NOT NULL,
  `nm_mhs` varchar(50) NOT NULL,
  `tempat_lhr_mhs` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `tgl_lhr_mhs` date NOT NULL,
  `jns_klmn_mhs` varchar(2) NOT NULL,
  `tgl_msk_mhs` date NOT NULL,
  `kd_status_mhs` varchar(2) NOT NULL,
  `alamat_mhs` varchar(500) NOT NULL,
  `tlp_mhs` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mahasiswa`
--

INSERT INTO `m_mahasiswa` (`id`, `nim_mhs`, `kd_prodi`, `nm_mhs`, `tempat_lhr_mhs`, `agama`, `tgl_lhr_mhs`, `jns_klmn_mhs`, `tgl_msk_mhs`, `kd_status_mhs`, `alamat_mhs`, `tlp_mhs`) VALUES
(5, '2015141665', 'PRODI001', 'Muhamad Arief Budiman', 'Jakarta', 'Islam', '1994-06-02', 'L', '2015-10-31', 'AK', 'Depok', '081210492828');

-- --------------------------------------------------------

--
-- Table structure for table `m_mata_kuliah`
--

CREATE TABLE `m_mata_kuliah` (
  `id` int(11) NOT NULL,
  `kd_matakuliah` varchar(20) NOT NULL,
  `kd_prodi` varchar(20) NOT NULL,
  `nm_matakuliah` varchar(100) NOT NULL,
  `jml_sks_matakuliah` varchar(2) NOT NULL,
  `smt_matakuliah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mata_kuliah`
--

INSERT INTO `m_mata_kuliah` (`id`, `kd_matakuliah`, `kd_prodi`, `nm_matakuliah`, `jml_sks_matakuliah`, `smt_matakuliah`) VALUES
(6, 'MK001', 'PRODI001', 'Algoritma &amp; Pemrograman I', '2', 'Ganjil'),
(7, 'MK002', 'PRODI001', 'Logika Informatika', '3', 'Ganjil'),
(8, 'MK003', 'PRODI001', 'Kalkulus I', '2', 'Ganjil'),
(9, 'MK004', 'PRODI001', 'Fisika Dasar I', '2', 'Genap'),
(10, 'MK005', 'PRODI001', 'Kalkulus II', '2', 'Genap'),
(11, 'MK006', 'PRODI001', 'Aljabar Linier &amp; Matriks', '2', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `m_prodi`
--

CREATE TABLE `m_prodi` (
  `id` int(11) NOT NULL,
  `kd_prodi` varchar(20) NOT NULL,
  `kd_jenis_prodi` varchar(5) NOT NULL,
  `nm_prodi` varchar(100) NOT NULL,
  `status_prodi` varchar(2) NOT NULL,
  `email_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_prodi`
--

INSERT INTO `m_prodi` (`id`, `kd_prodi`, `kd_jenis_prodi`, `nm_prodi`, `status_prodi`, `email_prodi`) VALUES
(2, 'PRODI001', 'TEK01', 'Teknik Informatika', 'A', 'teknikinformatika@unpam.ac.id'),
(3, 'PRODI002', 'TEK02', 'Teknik Komputer', 'B', 'teknikkomputer@unpam.ac.id'),
(4, 'PRODI003', 'TEK03', 'Teknik Mesin', 'C', 'teknikmesin@unpam.ac.id'),
(5, 'PRODI004', 'TEK04', 'Teknik Elektro', 'B', 'teknikelektro@unpam.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `m_semester`
--

CREATE TABLE `m_semester` (
  `id` int(11) NOT NULL,
  `kd_semester` varchar(20) NOT NULL,
  `ket_semester` varchar(20) NOT NULL,
  `thn_semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_semester`
--

INSERT INTO `m_semester` (`id`, `kd_semester`, `ket_semester`, `thn_semester`) VALUES
(3, 'SMT001', 'Ganjil', '2015'),
(4, 'SMT002', 'Genap', '2015'),
(6, 'SMT003', 'Ganjil', '2016'),
(7, 'SMT004', 'Genap', '2016'),
(8, 'SMT005', 'Ganjil', '2017'),
(9, 'SMT006', 'Genap', '2017'),
(10, 'SMT007', 'Ganjil', '2018'),
(11, 'SMT008', 'Genap', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$KgRngvlCRp2V7YheBcQyYuai1bpWSDi0gZqqTzEJ3psIbYQtIme7S'),
(2, 'admin2', '$2y$10$X5QQNFXXesl0WgsVp0WHs.vnw2lpWcOBANUnturCKS1FOWdDmSIRq');

-- --------------------------------------------------------

--
-- Table structure for table `t_krs_dosen`
--

CREATE TABLE `t_krs_dosen` (
  `id` int(11) NOT NULL,
  `id_krs_dosen` varchar(20) NOT NULL,
  `kd_dosen` varchar(20) NOT NULL,
  `hari_mengajar` varchar(30) NOT NULL,
  `waktu_mengajar` time NOT NULL,
  `kelas_mengajar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_krs_dosen`
--

INSERT INTO `t_krs_dosen` (`id`, `id_krs_dosen`, `kd_dosen`, `hari_mengajar`, `waktu_mengajar`, `kelas_mengajar`) VALUES
(1, 'KRSDSN001', 'DSN001', 'Senin', '09:00:00', '01TPLE010'),
(2, 'KRSDSN002', 'DSN002', 'Selasa', '09:00:00', '01TPLE010'),
(3, 'KRSDSN003', 'DSN003', 'Rabu', '09:00:00', '01TPLE010'),
(4, 'KRSDSN004', 'DSN004', 'Kamis', '09:00:00', '01TPLE010'),
(5, 'KRSDSN005', 'DSN005', 'Jumat', '09:00:00', '01TPLE010'),
(6, 'KRSDSN006', 'DSN001', 'Sabtu', '09:00:00', '08TPLE010');

-- --------------------------------------------------------

--
-- Table structure for table `t_krs_mhs`
--

CREATE TABLE `t_krs_mhs` (
  `id` int(11) NOT NULL,
  `id_krs_mhs` varchar(10) NOT NULL,
  `kd_matakuliah` varchar(20) NOT NULL,
  `nim_mhs` varchar(10) NOT NULL,
  `kd_prodi` varchar(20) NOT NULL,
  `kd_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_krs_mhs`
--

INSERT INTO `t_krs_mhs` (`id`, `id_krs_mhs`, `kd_matakuliah`, `nim_mhs`, `kd_prodi`, `kd_kelas`) VALUES
(4, 'KRSMHS001', 'MK001', '2015141665', 'PRODI001', 'TPLE'),
(5, 'KRSMHS002', 'MK002', '2015141665', 'PRODI001', 'TPLE'),
(6, 'KRSMHS003', 'MK003', '2015141665', 'PRODI001', 'TPLE'),
(7, 'KRSMHS004', 'MK004', '2015141665', 'PRODI001', 'TPLE'),
(8, 'KRSMHS005', 'MK005', '2015141665', 'PRODI001', 'TPLE'),
(9, 'KRSMHS006', 'MK006', '2015141665', 'PRODI001', 'TPLE');

-- --------------------------------------------------------

--
-- Table structure for table `t_nilai_khs`
--

CREATE TABLE `t_nilai_khs` (
  `id` int(11) NOT NULL,
  `kd_semester` varchar(20) NOT NULL,
  `kd_dosen` varchar(20) NOT NULL,
  `nim_mhs` varchar(10) NOT NULL,
  `kd_matakuliah` varchar(20) NOT NULL,
  `absensi` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nilai_khs`
--

INSERT INTO `t_nilai_khs` (`id`, `kd_semester`, `kd_dosen`, `nim_mhs`, `kd_matakuliah`, `absensi`, `tugas`, `uts`, `uas`) VALUES
(1, 'SMT001', 'DSN001', '2015141665', 'MK001', 90, 90, 90, 90),
(2, 'SMT001', 'DSN002', '2015141665', 'MK002', 90, 90, 90, 90),
(3, 'SMT001', 'DSN003', '2015141665', 'MK003', 90, 90, 90, 90),
(4, 'SMT002', 'DSN004', '2015141665', 'MK004', 95, 95, 95, 95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_dosen` (`kd_dosen`);

--
-- Indexes for table `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim_mhs` (`nim_mhs`),
  ADD UNIQUE KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `m_mata_kuliah`
--
ALTER TABLE `m_mata_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_matakuliah` (`kd_matakuliah`,`kd_prodi`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `m_prodi`
--
ALTER TABLE `m_prodi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_prodi` (`kd_prodi`),
  ADD UNIQUE KEY `kd_prodi_2` (`kd_prodi`);

--
-- Indexes for table `m_semester`
--
ALTER TABLE `m_semester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_semester` (`kd_semester`),
  ADD UNIQUE KEY `kd_semester_2` (`kd_semester`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_krs_dosen`
--
ALTER TABLE `t_krs_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_krs_dosen` (`id_krs_dosen`,`kd_dosen`),
  ADD KEY `kd_dosen` (`kd_dosen`);

--
-- Indexes for table `t_krs_mhs`
--
ALTER TABLE `t_krs_mhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_krs_mhs` (`id_krs_mhs`,`kd_matakuliah`,`nim_mhs`,`kd_prodi`),
  ADD KEY `kd_matakuliah` (`kd_matakuliah`),
  ADD KEY `nim_mhs` (`nim_mhs`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `t_nilai_khs`
--
ALTER TABLE `t_nilai_khs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_semester` (`kd_semester`,`kd_dosen`,`nim_mhs`,`kd_matakuliah`),
  ADD KEY `kd_dosen` (`kd_dosen`),
  ADD KEY `nim_mhs` (`nim_mhs`),
  ADD KEY `kd_matakuliah` (`kd_matakuliah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_dosen`
--
ALTER TABLE `m_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_mata_kuliah`
--
ALTER TABLE `m_mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_prodi`
--
ALTER TABLE `m_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_semester`
--
ALTER TABLE `m_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_krs_dosen`
--
ALTER TABLE `t_krs_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_krs_mhs`
--
ALTER TABLE `t_krs_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_nilai_khs`
--
ALTER TABLE `t_nilai_khs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD CONSTRAINT `m_mahasiswa_ibfk_1` FOREIGN KEY (`kd_prodi`) REFERENCES `m_prodi` (`kd_prodi`);

--
-- Constraints for table `m_mata_kuliah`
--
ALTER TABLE `m_mata_kuliah`
  ADD CONSTRAINT `m_mata_kuliah_ibfk_1` FOREIGN KEY (`kd_prodi`) REFERENCES `m_prodi` (`kd_prodi`);

--
-- Constraints for table `t_krs_dosen`
--
ALTER TABLE `t_krs_dosen`
  ADD CONSTRAINT `t_krs_dosen_ibfk_1` FOREIGN KEY (`kd_dosen`) REFERENCES `m_dosen` (`kd_dosen`);

--
-- Constraints for table `t_krs_mhs`
--
ALTER TABLE `t_krs_mhs`
  ADD CONSTRAINT `t_krs_mhs_ibfk_1` FOREIGN KEY (`kd_matakuliah`) REFERENCES `m_mata_kuliah` (`kd_matakuliah`),
  ADD CONSTRAINT `t_krs_mhs_ibfk_2` FOREIGN KEY (`nim_mhs`) REFERENCES `m_mahasiswa` (`nim_mhs`),
  ADD CONSTRAINT `t_krs_mhs_ibfk_3` FOREIGN KEY (`kd_prodi`) REFERENCES `m_prodi` (`kd_prodi`);

--
-- Constraints for table `t_nilai_khs`
--
ALTER TABLE `t_nilai_khs`
  ADD CONSTRAINT `t_nilai_khs_ibfk_1` FOREIGN KEY (`kd_semester`) REFERENCES `m_semester` (`kd_semester`),
  ADD CONSTRAINT `t_nilai_khs_ibfk_2` FOREIGN KEY (`kd_dosen`) REFERENCES `m_dosen` (`kd_dosen`),
  ADD CONSTRAINT `t_nilai_khs_ibfk_3` FOREIGN KEY (`nim_mhs`) REFERENCES `m_mahasiswa` (`nim_mhs`),
  ADD CONSTRAINT `t_nilai_khs_ibfk_4` FOREIGN KEY (`kd_matakuliah`) REFERENCES `m_mata_kuliah` (`kd_matakuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

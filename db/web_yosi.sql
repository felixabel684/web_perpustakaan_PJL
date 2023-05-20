-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2023 at 08:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_yosi`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `no_buku` int NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `kode_buku` varchar(255) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `tahun_terbit` int NOT NULL,
  `jml_halaman` int NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `imprint` varchar(255) NOT NULL,
  `sinopsis_buku` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jumlah_buku` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`no_buku`, `isbn`, `kode_buku`, `nama_buku`, `tahun_terbit`, `jml_halaman`, `kategori`, `imprint`, `sinopsis_buku`, `gambar`, `jumlah_buku`) VALUES
(3, '9786231810076', ' 02-0356', 'Metode Penelitian Kuantitatif: Manajemen, Keuangan, dan Akuntansi', 2023, 228, 'Manajemen/Bisnis &amp; Keuangan', 'Salemba Empat', 'Penelitian sangat penting dilakukan untuk mengetahui dan mencari solusi dalam mengatasi suatu permasalahan.', '6463679ecabea.png', 45),
(4, '9786231810236', '02eB-0010', 'Manajemen Risiko Lembaga Keuangan Syariah: Konsep dan Penerapan pada Perbankan, Asuransi, Dana Pensiun, dan Perusahaan Pembiayaan Syariah di Indonesia Edisi ke-3', 2023, 518, 'Manajemen/Bisnis &amp; Keuangan', 'Salemba Empat', 'Perkembangan Lembaga Keuangan Syariah (LKS) di Indonesia telah mengantarkan industri ini pada kesadaran yang lebih tinggi mengenai pentingnya mengelola risiko.', '646368018d0c0.png', 3),
(5, '9786821815584', ' 04eB-X--01', 'Dimensi Strategis Pengembangan Koperasi', 2021, 250, 'Ilmu Ekonomi', 'Salemba Empat', 'Praktik koperasi sudah tidak asing lagi di Indonesia karena sejalan dengan asas kekeluargaan dalam perekonomian yang tertuang dalam UUD 1945.', '6463686973ce7.png', 40),
(7, '9786231810199', ' 01-0481 COP', 'Pengauditan Sistem Informasi 2: Teori dan Implementasi', 2023, 182, 'Akuntansi', ' Salemba Empat', 'Pengauditan Sistem Informasi 2: Teori dan Implementasi berisi pembahasan lengkap tentang dasar-dasar dan prosedur pada audit database dan storage hingga audit sistem informasi untuk siklus pendapatan dan pengeluaran.', '646368da4a665.png', 78),
(8, '9786231810144', ' 02-0358 POD', 'A Casebook in Business Management: Indonesian Traditional Herbal Industry', 2023, 126, 'Manajemen/Bisnis &amp; Keuangan', ' Salemba Empat', 'A Casebook in Business Management: Indonesian Traditional Herbal Industry provides materials to support the application of case-based method in classes.', '6463690849266.png', 59),
(9, '9789790617797', ' 04-0073', 'Pengantar Ekonomi Makro (e7)', 2018, 394, ' Ilmu Ekonomi', 'Salemba Empat', 'Buku Pengantar Ekonomi Makro ini ditujukan bagi para mahasiswa yang mengambil mata kuliah Pengantar Ekonomi Makro dan masyarakat umum yang tertarik untuk mempelajari ekonomi makro.', '6463695be4304.png', 79),
(10, '9786026450449', ' 08-0284', 'Metodologi Penelitian Ilmu Keperawatan: Pendekatan Praktis Edisi ke-5', 2020, 504, ' Ilmu Keperawatan', ' Salemba Medika', 'Metodologi Penelitian Ilmu Keperawatan: Pendekatan Praktis Edisi ke-5 ini telah mengalami perubahan dan perbaikan dibandingkan edisi sebelumnya,', '646369c7dbbbc.png', 1),
(11, '9786026450357', ' 08-0280', 'Pengolahan Data: Penelitian Kesehatan dan Gizi', 2019, 238, ' Ilmu Kesehatan (Masyarakat)', ' Salemba Medika', 'Pembaca diperkenalkan dengan SPSS dan secara mandiri, melalui latihan soal, bekerja dengan SPSS. Langkah kerja SPSS dipaparkan tahap demi tahap, mulai dari memasukkan data hingga menyiapkan variabel-variabel yang akan dianalisis.', '646369ffcec0a.png', 62),
(12, '9786021232576', '10-0114', 'Psikologi Sosial (e2)', 2017, 408, 'Psikologi', ' Salemba Humanika', 'Hal yang membedakan psikologi sosial dari disiplin ilmu yang lain adalah kombinasi antara apa yang dipelajarinya, bagaimana mempelajarinya, dan tingkat analisisnya. ', '64636a3948b5e.png', 61),
(13, '9786231810007', '01-0476', 'Akuntansi Pemerintahan: Konsep dan Praktik di Pemerintah Pusat dan Daerah', 2022, 240, 'Akuntansi', 'Salemba Empat', 'Buku ini diperuntukkan sebagai sumbangan pemikiran mengenai pengembangan bidang akuntansi pemerintahan di Indonesia.', '646876929c9a4.png', 20),
(14, '9789790619845', '01-0470', 'Akuntansi Keuangan Menengah 1: Berbasis PSAK', 2022, 496, 'Akuntansi', 'Salemba Empat', 'Pembahasan materi dalam buku Akuntansi Keuangan Menengah 1: Berbasis PSAK menggunakan referensi dari Standar Akuntansi Keuangan (SAK) yang efektif tahun 2018, 2019, dan 2020; serta buku Intermediate Accounting, IFRS edition, karangan Donald E. Kieso dkk.', '64687a3ee9740.png', 44),
(15, '9786026450999', '08-0294', 'Dasar-Dasar Ilmu Bedah Saraf', 2023, 270, 'Ilmu Kedokteran', 'Salemba Medika', 'Bedah saraf merupakan ilmu yang membahas setiap bagian dari sistem saraf termasuk otak, sumsum tulang belakang, saraf perifer, dan sistem serebrovaskular ekstra-kranial.', '646886503f9a5.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int NOT NULL,
  `nim` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `nama_anggota` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `tempat_lahir` varchar(100) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `prodi` varchar(100) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nim`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`) VALUES
(5, '12345', 'Joni', 'Semarang', '2003-05-16', 'Laki-Laki', 'Sistem Operasi'),
(6, 'A11355B', 'Bagus', 'Semarang', '2001-11-28', 'Laki-Laki', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int NOT NULL,
  `isbn` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `nim` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `id_anggota` int NOT NULL,
  `tgl_pinjam` varchar(50) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `tgl_kembali` varchar(50) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `isbn`, `nim`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(42, '9786231810076', '12345', 5, '20-05-2023', '03-06-2023', 'pinjam'),
(43, '9786021232576', '12345', 5, '20-05-2023', '27-05-2023', 'pinjam'),
(44, '9789790617797', '12345', 5, '20-05-2023', '27-05-2023', 'kembali'),
(48, '9789790617797', 'A11355B', 6, '20-05-2023', '27-05-2023', 'kembali'),
(49, '9786821815584', 'A11355B', 6, '20-05-2023', '27-05-2023', 'kembali'),
(50, '9786026450357', 'A11355B', 6, '20-05-2023', '10-06-2023', 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`no_buku`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `no_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

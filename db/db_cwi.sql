-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2023 pada 09.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cwi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_acc`
--

CREATE TABLE `log_acc` (
  `id_acc` int(3) NOT NULL,
  `nik_acc` varchar(16) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `role_acc` varchar(12) NOT NULL,
  `date_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_acc`
--

INSERT INTO `log_acc` (`id_acc`, `nik_acc`, `fullname`, `role_acc`, `date_entry`) VALUES
(0, '1122334455667788', 'Muhammad Yasin Ganteng', 'Asesi', '2023-02-02 21:30:20'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-02-04 00:48:13'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-02-04 02:16:01'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-02-04 02:16:14'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-02-04 02:18:07'),
(0, '1234123412341234', 'user', 'Asesi', '2023-02-04 02:28:55'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-02-07 14:02:04'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-04-07 01:09:37'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-04-07 01:16:05'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-04-07 01:16:29'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-05-04 22:52:34'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-05-10 22:50:12'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-05-10 23:05:01'),
(0, '9999999999999999', 'admin', 'admin', '2023-05-10 23:06:20'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-05-11 01:50:16'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-05-11 01:50:51'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-06-24 19:51:50'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-06-30 08:46:52'),
(0, '2302200123022001', 'Muhammad Nabil Akbar', 'Asesi', '2023-06-30 08:55:56'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-06-30 09:06:45'),
(0, '9999999999999999', 'admin', 'admin', '2023-06-30 09:07:04'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-06-30 15:17:36'),
(0, '9999999999999999', 'admin', 'admin', '2023-06-30 16:08:38'),
(0, '9999999999999999', 'admin', 'admin', '2023-07-04 23:51:07'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-07-05 00:09:40'),
(0, '2302200123022001', 'Muhammad Nabil Akbar', 'Asesi', '2023-07-05 01:43:46'),
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-07-05 02:11:26'),
(0, '9999999999999999', 'admin', 'admin', '2023-07-05 02:18:00'),
(0, '2302200123022001', 'Muhammad Nabil Akbar', 'Asesi', '2023-07-05 02:19:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_acc`
--

CREATE TABLE `tb_acc` (
  `id_acc` int(3) NOT NULL,
  `nik_acc` varchar(16) NOT NULL,
  `email_acc` varchar(128) NOT NULL,
  `password_acc` varchar(128) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `role_acc` varchar(12) NOT NULL,
  `registime_acc` datetime NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pendidikan_terakhir` varchar(32) NOT NULL,
  `lembaga_pendidikan` varchar(255) NOT NULL,
  `jurusan_pendidikan` varchar(255) NOT NULL,
  `kelulusan_pendidikan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_hp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kode_pos` varchar(32) NOT NULL,
  `foto_acc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_acc`
--

INSERT INTO `tb_acc` (`id_acc`, `nik_acc`, `email_acc`, `password_acc`, `fullname`, `role_acc`, `registime_acc`, `jenis_kelamin`, `pendidikan_terakhir`, `lembaga_pendidikan`, `jurusan_pendidikan`, `kelulusan_pendidikan`, `tempat_lahir`, `tanggal_lahir`, `nomor_hp`, `alamat`, `kelurahan`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `foto_acc`) VALUES
(1, '1122334455667788', 'myasinatsaqib@gmail.com', 'yasin123', 'Muhammad Yasin', 'Asesi', '2023-02-01 01:29:28', 'Laki-Laki', 'SMA / MA', 'Smart Bangun Negeri', 'TK', '202020', 'Bogor', '2000-09-30', '08888918888', 'Villa Nusa Indah 3 Blok KK 1 No 1', 'Ciangsana', 'Jawa Timur', 'Jakarta', 'Gunung Jonggol', '17070', 'julius.jpg'),
(2, '1234123412341234', 'user@gmail.com', 'yasin123', 'user', 'Asesi', '2023-02-04 02:28:34', '-', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', ''),
(3, '9999999999999999', 'admin@admin.com', 'admin', 'admin', 'admin', '2023-05-10 23:04:42', '-', '-', '-', '-', '-', '-', '1970-01-01', '-', '-', '-', '-', '-', '-', '-', ''),
(4, '2302200123022001', 'nabil@gmail.com', 'nabil123', 'Muhammad Nabil Akbar', 'Asesi', '2023-06-30 08:55:47', 'Laki-Laki', 'Sarjana Strata I (S1)', 'Gunadarma', 'Sistem Informasi', '2019', 'Jakarta', '2023-02-23', '0812345678', 'Rumah', 'Kelurahan', 'DKI', 'Jakarta Selatan', 'Kec', '12750', 'yato.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_optional_persyaratan`
--

CREATE TABLE `tb_optional_persyaratan` (
  `id` int(2) NOT NULL,
  `optional_persyaratan` varchar(12) NOT NULL,
  `sts_optional_persyaratan` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_optional_persyaratan`
--

INSERT INTO `tb_optional_persyaratan` (`id`, `optional_persyaratan`, `sts_optional_persyaratan`) VALUES
(1, 'KTP', 'A'),
(2, 'KTP', 'A'),
(3, 'CV', 'A'),
(4, 'CV', 'A'),
(5, 'STNK', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_persyaratan`
--

CREATE TABLE `tb_persyaratan` (
  `id_persyaratan` int(2) NOT NULL,
  `cred_persyaratan` char(5) NOT NULL,
  `persyaratan_skema` text NOT NULL,
  `sts_persyaratan` char(1) NOT NULL,
  `KK` char(1) DEFAULT 'N',
  `Ijazah` char(1) DEFAULT 'N',
  `CV` char(1) DEFAULT 'N',
  `KTP` char(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_persyaratan`
--

INSERT INTO `tb_persyaratan` (`id_persyaratan`, `cred_persyaratan`, `persyaratan_skema`, `sts_persyaratan`, `KK`, `Ijazah`, `CV`, `KTP`) VALUES
(1, 'PS-1', 'Nilai harus lebih dari 80', 'A', 'N', 'N', 'N', 'N'),
(2, 'PS-2', 'Harus lulus lebih dari 2 workshop', 'A', 'N', 'N', 'N', 'N'),
(3, 'PS-3', 'KTP harus jelas', 'A', 'N', 'N', 'N', 'N'),
(4, 'PS-4', 'File harus lengkap', 'A', 'N', 'Y', 'Y', 'Y'),
(5, 'PS-5', 'File tidak boleh ada yang kosong', 'A', 'Y', 'Y', 'Y', 'Y'),
(6, 'PS-6', 'Harus jelas', 'A', 'N', 'Y', 'N', 'N'),
(7, 'PS-7', 'Wajib', 'A', 'Y', 'Y', 'Y', 'N'),
(8, 'PS-8', 'KK dan KTP wajib', 'A', 'Y', 'N', 'N', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skema`
--

CREATE TABLE `tb_skema` (
  `id` int(3) NOT NULL,
  `id_persyaratan` int(2) DEFAULT NULL,
  `judul_skema` text NOT NULL,
  `no_skema` text NOT NULL,
  `sektor_skema` text NOT NULL,
  `persyaratan_skema` text NOT NULL,
  `sts_skema` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_skema`
--

INSERT INTO `tb_skema` (`id`, `id_persyaratan`, `judul_skema`, `no_skema`, `sektor_skema`, `persyaratan_skema`, `sts_skema`) VALUES
(2, 1, 'Job Assignment', 'SK-0001', 'Infrastruktur', '', 'A'),
(3, 2, 'Innovative', 'SK-0002', 'Business Development', '', 'A'),
(4, 3, 'Self Development', 'SK-0003', 'BOD', '', 'A'),
(5, 4, 'Intelligence', 'SK-0004', 'IT', '', 'A'),
(6, 5, 'Business Acumen', 'SK-0005', 'Infrastructure', '', 'A'),
(7, 6, 'Analitical', 'SK-0006', 'Demand', 'Harus jelas', 'A'),
(8, 7, 'Matrix', 'SK-0007', 'Property', '', 'A'),
(9, 8, 'Academy', 'SK-0008', 'Wisata', 'KK dan KTP wajib', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(2) NOT NULL,
  `id_persyaratan` int(2) NOT NULL,
  `cred_persyaratan` varchar(5) NOT NULL,
  `no_skema` varchar(7) NOT NULL,
  `judul_skema` text NOT NULL,
  `sektor_skema` text NOT NULL,
  `user` varchar(32) NOT NULL,
  `kk` text DEFAULT NULL,
  `ijazah` text DEFAULT NULL,
  `cv` text DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `sts_record` char(1) NOT NULL,
  `dte` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_persyaratan`, `cred_persyaratan`, `no_skema`, `judul_skema`, `sektor_skema`, `user`, `kk`, `ijazah`, `cv`, `ktp`, `sts_record`, `dte`) VALUES
(2, 5, 'PS-5', 'SK-0005', 'Business Acumen', 'Infrastructure', 'Muhammad Nabil Akbar', 'ContohUploadFile1.pdf', 'ContohUploadFile2.pdf', 'ContohUploadFile3.pdf', 'ContohUploadFile4.pdf', 'A', '2023-07-05 00:00:00'),
(3, 8, 'PS-8', 'SK-0008', 'Academy', 'Wisata', 'Muhammad Nabil Akbar', 'ContohUploadFile2.pdf', 'NULL', 'NULL', 'ContohUploadFile3.pdf', 'A', '2023-07-05 00:00:00'),
(4, 7, 'PS-7', 'SK-0007', 'Matrix', 'Property', 'Muhammad Yasin', 'ContohUploadFile1.pdf', 'ContohUploadFile2.pdf', 'ContohUploadFile3.pdf', 'NULL', 'A', '2023-07-05 00:00:00'),
(5, 8, 'PS-8', 'SK-0008', 'Academy', 'Wisata', 'Muhammad Yasin', 'kk-ContohUploadFile3.pdf', 'ijazah-NULL', 'cv-NULL', 'ktp-ContohUploadFile4.pdf', 'A', '2023-07-05 00:00:00'),
(6, 5, 'PS-5', 'SK-0005', 'Business Acumen', 'Infrastructure', 'Muhammad Yasin', 'kk-ContohUploadFile5.pdf', 'ijazah-ContohUploadFile8.pdf', 'cv-ContohUploadFile2.pdf', 'ktp-ContohUploadFile1.pdf', 'A', '2023-07-05 00:00:00'),
(7, 3, 'PS-3', 'SK-0003', 'Self Development', 'BOD', 'Muhammad Yasin', 'kk-NULL', 'ijazah-NULL', 'cv-NULL', 'ktp-NULL', 'A', '2023-07-05 00:00:00'),
(8, 4, 'PS-4', 'SK-0004', 'Intelligence', 'IT', 'Muhammad Nabil Akbar', 'kk-NULL', 'ijazah-ContohUploadFile1.pdf', 'cv-ContohUploadFile2.pdf', 'ktp-ContohUploadFile3.pdf', 'A', '2023-07-05 00:00:00'),
(9, 7, 'PS-7', 'SK-0007', 'Matrix', 'Property', 'Muhammad Nabil Akbar', 'kk-ContohUploadFile1.pdf', 'ijazah-NULL', 'cv-NULL', 'ktp-NULL', 'A', '2023-07-05 00:00:00'),
(10, 5, 'PS-5', 'SK-0005', 'BusinessAcumen', 'Infrastructure', 'Muhammad Nabil Akbar', 'kk-ContohUploadFile1.pdf', 'ijazah-NULL', 'cv-NULL', 'ktp-NULL', 'A', '2023-07-05 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_acc`
--
ALTER TABLE `tb_acc`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeks untuk tabel `tb_optional_persyaratan`
--
ALTER TABLE `tb_optional_persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indeks untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persyaratan` (`id_persyaratan`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_persyaratan` (`id_persyaratan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_acc`
--
ALTER TABLE `tb_acc`
  MODIFY `id_acc` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_optional_persyaratan`
--
ALTER TABLE `tb_optional_persyaratan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  MODIFY `id_persyaratan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  ADD CONSTRAINT `tb_skema_ibfk_1` FOREIGN KEY (`id_persyaratan`) REFERENCES `tb_persyaratan` (`id_persyaratan`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_persyaratan`) REFERENCES `tb_persyaratan` (`id_persyaratan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

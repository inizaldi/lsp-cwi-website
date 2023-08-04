-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2023 pada 06.09
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
(0, '1122334455667788', 'Muhammad Yasin', 'Asesi', '2023-02-07 14:02:04');

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
(1, '1122334455667788', 'myasinatsaqib@gmail.com', 'yasin123', 'Muhammad Yasin', 'Asesi', '2023-02-01 01:29:28', 'Perempuan', 'SMA / MA', 'Smart Bangun Negeri', 'TK', '202020', 'Bogor', '2000-09-30', '08888918888', 'Villa Nusa Indah 3 Blok KK 1 No 1', 'Ciangsana', 'Jawa Timur', 'Jakarta', 'Gunung Jonggol', '17070', 'images.png'),
(2, '1234123412341234', 'user@gmail.com', 'yasin123', 'user', 'Asesi', '2023-02-04 02:28:34', '-', '-', '-', '-', '-', '-', '0000-00-00', '-', '-', '-', '-', '-', '-', '-', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skema`
--

CREATE TABLE `tb_skema` (
  `id` int(3) NOT NULL,
  `judul_skema` text NOT NULL,
  `no_skema` text NOT NULL,
  `sektor_skema` text NOT NULL,
  `persyaratan_skema` text NOT NULL,
  `sts_skema` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_skema`
--

INSERT INTO `tb_skema` (`id`, `judul_skema`, `no_skema`, `sektor_skema`, `persyaratan_skema`, `sts_skema`) VALUES
(1, 'Marketing Communication MICE', 'SS-001/SKEMA-LSPCWI/IX/2018', 'MICE/Pariwisata', '', 'a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_acc`
--
ALTER TABLE `tb_acc`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeks untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_acc`
--
ALTER TABLE `tb_acc`
  MODIFY `id_acc` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

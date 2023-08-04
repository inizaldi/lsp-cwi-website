-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2022 pada 20.00
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
-- Database: `db_no11_sk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_account`
--

CREATE TABLE `log_account` (
  `id_acc` int(2) NOT NULL,
  `username_acc` varchar(12) NOT NULL,
  `role_acc` varchar(12) NOT NULL,
  `date_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_account`
--

INSERT INTO `log_account` (`id_acc`, `username_acc`, `role_acc`, `date_entry`) VALUES
(1, 'admin', 'admin', '2022-12-19 01:55:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_master`
--

CREATE TABLE `log_master` (
  `id_acc` int(2) NOT NULL,
  `username_acc` varchar(12) NOT NULL,
  `role_acc` varchar(12) NOT NULL,
  `nama_master` varchar(32) NOT NULL,
  `action` varchar(12) NOT NULL,
  `create_master` varchar(21) NOT NULL,
  `edit_master` varchar(21) NOT NULL,
  `delete_master` varchar(21) NOT NULL,
  `DTC` datetime NOT NULL,
  `DTU` datetime NOT NULL,
  `DTD` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_master`
--

INSERT INTO `log_master` (`id_acc`, `username_acc`, `role_acc`, `nama_master`, `action`, `create_master`, `edit_master`, `delete_master`, `DTC`, `DTU`, `DTD`) VALUES
(1, 'admin', 'admin', 'Habitat', 'Insert', 'Gunung', '-', '-', '2022-12-18 21:34:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Habitat', 'Insert', 'Hutan', '-', '-', '2022-12-18 21:34:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Habitat', 'Insert', 'Padang Rumput', '-', '-', '2022-12-18 21:34:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Jenis Kucing', 'Insert', 'Angora', '-', '-', '2022-12-18 21:34:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Jenis Kucing', 'Insert', 'Munchkin', '-', '-', '2022-12-18 21:35:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Jenis Kucing', 'Insert', 'Persia', '-', '-', '2022-12-18 21:35:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Jenis Kucing', 'Insert', 'Himalayan', '-', '-', '2022-12-18 21:35:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Jenis Kucing', 'Insert', 'Mainecoon', '-', '-', '2022-12-18 21:35:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Darah Endemi', 'Insert', 'Inggris', '-', '-', '2022-12-18 21:37:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Darah Endemi', 'Insert', 'Russia', '-', '-', '2022-12-18 21:37:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Darah Endemi', 'Insert', 'Turkey', '-', '-', '2022-12-18 21:37:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_trx`
--

CREATE TABLE `log_trx` (
  `id_acc` int(2) NOT NULL,
  `username_acc` varchar(12) NOT NULL,
  `role_acc` varchar(12) NOT NULL,
  `action` varchar(12) NOT NULL,
  `create_trx` varchar(21) NOT NULL,
  `edit_trx` varchar(21) NOT NULL,
  `delete_trx` varchar(21) NOT NULL,
  `DTC` datetime NOT NULL,
  `DTU` datetime NOT NULL,
  `DTD` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_trx`
--

INSERT INTO `log_trx` (`id_acc`, `username_acc`, `role_acc`, `action`, `create_trx`, `edit_trx`, `delete_trx`, `DTC`, `DTU`, `DTD`) VALUES
(1, 'admin', 'admin', 'Insert', 'Meong', '-', '-', '2022-12-18 21:43:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Miung', '-', '-', '2022-12-18 21:43:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Muung', '-', '-', '2022-12-18 21:44:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Moong', '-', '-', '2022-12-18 21:44:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Miyu', '-', '-', '2022-12-18 21:45:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Meyu', '-', '-', '2022-12-18 21:45:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Moyu', '-', '-', '2022-12-18 21:46:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Soyu', '-', '-', '2022-12-18 21:47:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Siyu', '-', '-', '2022-12-18 21:47:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'admin', 'admin', 'Insert', 'Siru', '-', '-', '2022-12-18 21:48:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_account`
--

CREATE TABLE `tb_account` (
  `id_acc` int(2) NOT NULL,
  `username_acc` varchar(32) DEFAULT NULL,
  `password_acc` varchar(32) DEFAULT NULL,
  `role_acc` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_account`
--

INSERT INTO `tb_account` (`id_acc`, `username_acc`, `password_acc`, `role_acc`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(3, 'nabil', 'nabil', 'user'),
(4, 'akbar', 'akbar', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mst_darah_endemi`
--

CREATE TABLE `tb_mst_darah_endemi` (
  `id_darah_endemi` int(2) NOT NULL,
  `nama_darah_endemi` varchar(32) DEFAULT NULL,
  `lokasi_endemi` varchar(12) DEFAULT NULL,
  `description_darah` text DEFAULT NULL,
  `UE` varchar(12) NOT NULL,
  `DTE` datetime NOT NULL,
  `UU` varchar(12) DEFAULT NULL,
  `DTU` datetime DEFAULT NULL,
  `sts_record` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mst_darah_endemi`
--

INSERT INTO `tb_mst_darah_endemi` (`id_darah_endemi`, `nama_darah_endemi`, `lokasi_endemi`, `description_darah`, `UE`, `DTE`, `UU`, `DTU`, `sts_record`) VALUES
(1, 'Inggris', 'Inggris', 'Inggris', 'admin', '2022-12-18 21:37:13', '-', '0000-00-00 00:00:00', 'A'),
(2, 'Russia', 'Russia', 'Russia', 'admin', '2022-12-18 21:37:21', '-', '0000-00-00 00:00:00', 'A'),
(3, 'Turkey', 'Turkey', 'Turkey', 'admin', '2022-12-18 21:37:36', '-', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mst_habitat`
--

CREATE TABLE `tb_mst_habitat` (
  `id_habitat` int(2) NOT NULL,
  `nama_habitat` varchar(32) DEFAULT NULL,
  `description_habitat` text DEFAULT NULL,
  `UE` varchar(12) NOT NULL,
  `DTE` datetime NOT NULL,
  `UU` varchar(12) NOT NULL,
  `DTU` datetime NOT NULL,
  `sts_record` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mst_habitat`
--

INSERT INTO `tb_mst_habitat` (`id_habitat`, `nama_habitat`, `description_habitat`, `UE`, `DTE`, `UU`, `DTU`, `sts_record`) VALUES
(1, 'Gunung', 'Gunung', 'admin', '2022-12-18 21:34:23', '-', '0000-00-00 00:00:00', 'A'),
(2, 'Hutan', 'Hutan', 'admin', '2022-12-18 21:34:31', '-', '0000-00-00 00:00:00', 'A'),
(3, 'Padang Rumput', 'Padang Rumput', 'admin', '2022-12-18 21:34:44', '-', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mst_jenis_kucing`
--

CREATE TABLE `tb_mst_jenis_kucing` (
  `id_jenis_kucing` int(2) NOT NULL,
  `jenis_kucing` varchar(12) DEFAULT NULL,
  `description_jenis_kucing` text DEFAULT NULL,
  `UE` varchar(12) NOT NULL,
  `DTE` datetime NOT NULL,
  `UU` varchar(12) NOT NULL,
  `DTU` datetime NOT NULL,
  `sts_record` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mst_jenis_kucing`
--

INSERT INTO `tb_mst_jenis_kucing` (`id_jenis_kucing`, `jenis_kucing`, `description_jenis_kucing`, `UE`, `DTE`, `UU`, `DTU`, `sts_record`) VALUES
(1, 'Angora', 'Angora', 'admin', '2022-12-18 21:34:53', '-', '0000-00-00 00:00:00', 'A'),
(2, 'Munchkin', 'Munchkin', 'admin', '2022-12-18 21:35:03', '-', '0000-00-00 00:00:00', 'A'),
(3, 'Persia', 'Persia', 'admin', '2022-12-18 21:35:10', '-', '0000-00-00 00:00:00', 'A'),
(4, 'Himalayan', 'Himalayan', 'admin', '2022-12-18 21:35:26', '-', '0000-00-00 00:00:00', 'A'),
(5, 'Mainecoon', 'Mainecoon', 'admin', '2022-12-18 21:35:44', '-', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trx_kucing`
--

CREATE TABLE `tb_trx_kucing` (
  `id_trx` int(2) NOT NULL,
  `id_acc` int(2) NOT NULL,
  `id_jenis_kucing` int(2) NOT NULL,
  `id_habitat` int(2) NOT NULL,
  `id_darah_endemi` int(2) NOT NULL,
  `nama_kucing` varchar(16) DEFAULT NULL,
  `jenis_kucing` varchar(16) DEFAULT NULL,
  `nama_habitat` varchar(16) DEFAULT NULL,
  `nama_darah_endemi` varchar(16) DEFAULT NULL,
  `nama_gambar` longtext NOT NULL,
  `description` text DEFAULT NULL,
  `DTE` datetime NOT NULL,
  `DTU` datetime NOT NULL,
  `UE` varchar(8) NOT NULL,
  `UU` varchar(8) NOT NULL,
  `sts_record` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_trx_kucing`
--

INSERT INTO `tb_trx_kucing` (`id_trx`, `id_acc`, `id_jenis_kucing`, `id_habitat`, `id_darah_endemi`, `nama_kucing`, `jenis_kucing`, `nama_habitat`, `nama_darah_endemi`, `nama_gambar`, `description`, `DTE`, `DTU`, `UE`, `UU`, `sts_record`) VALUES
(1, 1, 1, 1, 1, 'Meong', 'Angora', 'Gunung', 'Inggris', 'cat1.jpg', 'Suka tikus', '2022-12-18 21:43:13', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(2, 1, 2, 2, 2, 'Miung', 'Munchkin', 'Hutan', 'Russia', 'cat5.jpg', 'Kakinya kecil', '2022-12-18 21:43:56', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(3, 1, 3, 3, 1, 'Muung', 'Persia', 'Padang Rumput', 'Inggris', 'cat7.jpg', 'Bulu tebal', '2022-12-18 21:44:20', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(4, 1, 4, 2, 1, 'Moong', 'Himalayan', 'Hutan', 'Inggris', 'cat2.jpg', 'Mukanya hitam', '2022-12-18 21:44:43', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(5, 1, 5, 3, 2, 'Miyu', 'Mainecoon', 'Padang Rumput', 'Russia', 'cat10.jpg', 'Badannya besar', '2022-12-18 21:45:09', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(6, 1, 1, 2, 2, 'Meyu', 'Angora', 'Hutan', 'Russia', 'cat3.jpg', 'Suka makan', '2022-12-18 21:45:39', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(7, 1, 4, 3, 2, 'Moyu', 'Himalayan', 'Padang Rumput', 'Russia', 'cat6.jpg', 'Matanya jereng', '2022-12-18 21:46:10', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(8, 1, 4, 3, 2, 'Soyu', 'Himalayan', 'Padang Rumput', 'Russia', 'cat4.jpg', 'Bulunya mengkilap', '2022-12-18 21:47:07', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(9, 1, 3, 2, 1, 'Siyu', 'Persia', 'Hutan', 'Inggris', 'cat8.jpg', 'Kalem', '2022-12-18 21:47:38', '0000-00-00 00:00:00', 'admin', '-', 'A'),
(10, 1, 1, 2, 3, 'Siru', 'Angora', 'Hutan', 'Turkey', 'cat9.jpg', 'Garong', '2022-12-18 21:48:02', '0000-00-00 00:00:00', 'admin', '-', 'A');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log_account`
--
ALTER TABLE `log_account`
  ADD KEY `id_acc` (`id_acc`);

--
-- Indeks untuk tabel `log_master`
--
ALTER TABLE `log_master`
  ADD KEY `id_acc` (`id_acc`);

--
-- Indeks untuk tabel `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indeks untuk tabel `tb_mst_darah_endemi`
--
ALTER TABLE `tb_mst_darah_endemi`
  ADD PRIMARY KEY (`id_darah_endemi`);

--
-- Indeks untuk tabel `tb_mst_habitat`
--
ALTER TABLE `tb_mst_habitat`
  ADD PRIMARY KEY (`id_habitat`);

--
-- Indeks untuk tabel `tb_mst_jenis_kucing`
--
ALTER TABLE `tb_mst_jenis_kucing`
  ADD PRIMARY KEY (`id_jenis_kucing`);

--
-- Indeks untuk tabel `tb_trx_kucing`
--
ALTER TABLE `tb_trx_kucing`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `id_jenis_kucing` (`id_jenis_kucing`),
  ADD KEY `id_habitat` (`id_habitat`),
  ADD KEY `id_darah_endemi` (`id_darah_endemi`),
  ADD KEY `id_acc` (`id_acc`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log_account`
--
ALTER TABLE `log_account`
  MODIFY `id_acc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id_acc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_mst_darah_endemi`
--
ALTER TABLE `tb_mst_darah_endemi`
  MODIFY `id_darah_endemi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_mst_habitat`
--
ALTER TABLE `tb_mst_habitat`
  MODIFY `id_habitat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_mst_jenis_kucing`
--
ALTER TABLE `tb_mst_jenis_kucing`
  MODIFY `id_jenis_kucing` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_trx_kucing`
--
ALTER TABLE `tb_trx_kucing`
  MODIFY `id_trx` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_trx_kucing`
--
ALTER TABLE `tb_trx_kucing`
  ADD CONSTRAINT `tb_trx_kucing_ibfk_1` FOREIGN KEY (`id_darah_endemi`) REFERENCES `tb_mst_darah_endemi` (`id_darah_endemi`),
  ADD CONSTRAINT `tb_trx_kucing_ibfk_2` FOREIGN KEY (`id_habitat`) REFERENCES `tb_mst_habitat` (`id_habitat`),
  ADD CONSTRAINT `tb_trx_kucing_ibfk_4` FOREIGN KEY (`id_jenis_kucing`) REFERENCES `tb_mst_jenis_kucing` (`id_jenis_kucing`),
  ADD CONSTRAINT `tb_trx_kucing_ibfk_5` FOREIGN KEY (`id_acc`) REFERENCES `tb_account` (`id_acc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

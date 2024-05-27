-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 10.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode` varchar(7) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kode`, `keterangan`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
('K-00001', 'Honor Mubaliq', '2024-05-27', 0, 'Keluar', 50000),
('K-00002', 'Honor Mubaliq', '2024-05-29', 0, 'Keluar', 125000),
('M-00001', 'infaq', '2024-05-24', 500000, 'Masuk', 0),
('M-00002', 'Hamba Allah', '2024-05-24', 100000, 'Masuk', 0),
('M-00003', 'test', '2024-05-25', 400000, 'Masuk', 0),
('M-00004', 'Hamba Allah', '2024-05-30', 320000, 'Masuk', 0),
('M-00005', 'Hamba Allah', '2024-05-28', 283000, 'Masuk', 0),
('M-00006', 'Test Oke', '2024-05-25', 350000, 'Masuk', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

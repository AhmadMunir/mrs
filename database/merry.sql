-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2019 pada 17.12
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` varchar(7) NOT NULL,
  `nama_admin` varchar(45) NOT NULL,
  `email_admin` varchar(45) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_alamat`
--

CREATE TABLE `tabel_alamat` (
  `id_alamat` varchar(7) NOT NULL,
  `id_user` varchar(7) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `negara` varchar(45) NOT NULL,
  `kode_pos` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `id_kategori` varchar(7) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_detai_transaksi`
--

CREATE TABLE `tabel_detai_transaksi` (
  `id_detail` varchar(7) NOT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `id_barang` varchar(7) NOT NULL,
  `qty` int(3) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_stok`
--

CREATE TABLE `tabel_stok` (
  `id_barang` varchar(7) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_user` varchar(7) NOT NULL,
  `id_admin` varchar(7) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` varchar(7) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tabel_alamat`
--
ALTER TABLE `tabel_alamat`
  ADD PRIMARY KEY (`id_alamat`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tabel_detai_transaksi`
--
ALTER TABLE `tabel_detai_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tabel_stok`
--
ALTER TABLE `tabel_stok`
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_alamat`
--
ALTER TABLE `tabel_alamat`
  ADD CONSTRAINT `tabel_alamat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD CONSTRAINT `tabel_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tabel_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tabel_detai_transaksi`
--
ALTER TABLE `tabel_detai_transaksi`
  ADD CONSTRAINT `tabel_detai_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tabel_transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `tabel_stok`
--
ALTER TABLE `tabel_stok`
  ADD CONSTRAINT `tabel_stok_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tabel_barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD CONSTRAINT `tabel_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_alamat` (`id_user`),
  ADD CONSTRAINT `tabel_transaksi_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `tabel_admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

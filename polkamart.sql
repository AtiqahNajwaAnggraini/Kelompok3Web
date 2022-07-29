-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2022 pada 15.28
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polkamart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `Id` int(11) NOT NULL,
  `Kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`Id`, `Kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'ATK'),
(4, 'DLL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(5) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `password`, `level`, `created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2022-07-18 21:42:03'),
(2, 'kasir', 'c7911af3adbd12a035b289556d96470a', 2, '2022-07-18 21:42:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `barcode` varchar(128) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `kategori` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `barcode`, `nama_produk`, `kategori`, `satuan`, `harga`, `stok`, `terjual`) VALUES
(1, '8993110000782', 'Sosis So Nice', 1, 1, '1000', 99, '1'),
(5, '3131361797', 'POP MIE', 1, 1, '5000', 100, '4'),
(6, '9342714443129', 'Tisu', 4, 1, '1000', 100, '4'),
(7, '3123245876', 'Aqua Botol', 2, 1, '4000', 110, '4'),
(8, '93724651718', 'Aqua Gelas', 2, 1, '1000', 98, '2'),
(9, '-', 'Gorengan', 1, 1, '1000', 100, '4'),
(10, '38947917364', 'Beng-Beng', 2, 1, '2000', 100, '4'),
(11, '70283484164', 'Permen Kiko', 1, 1, '500', 100, '4'),
(12, '43627164728', 'POP Corn', 1, 1, '500', 100, '4'),
(13, '395751584931', 'Susu Milo', 2, 1, '4000', 100, '4'),
(14, '56139824914', 'Kiko', 2, 1, '1000', 100, '4'),
(15, '7595902412', 'Pena', 3, 1, '1000', 100, '4'),
(16, '680942848', 'Pensil', 3, 1, '1000', 100, '4'),
(17, '21394747532', 'Penghapus', 3, 1, '500', 100, '4'),
(18, '85729482445', 'Buku', 3, 1, '1500', 100, '4'),
(19, '61384914441', 'Penggaris', 3, 1, '1500', 100, '4'),
(20, '8391018475', 'Lem', 3, 1, '3000', 100, '4'),
(21, '495284984284', 'Spidol', 3, 1, '10000', 100, '4'),
(22, '98019213923', 'Good Time', 1, 1, '1000', 100, '4'),
(23, '24145481049', 'Kalpa', 1, 1, '1000', 100, '4'),
(24, '542178273648', 'Oreo', 1, 1, '1000', 100, '4'),
(25, '974812645143', 'Slai o\'lai', 1, 1, '1000', 100, '4'),
(26, '1918635243', 'Super Star', 1, 1, '1000', 100, '4'),
(27, '82372464445', 'Choki-Choki', 1, 1, '1000', 100, '4'),
(28, '291423573582', 'Kertas HVS', 3, 2, '3000', 100, '4'),
(29, '94274415314', 'Map', 3, 1, '1000', 100, '4'),
(30, '23243535463', 'Peraut', 3, 1, '500', 100, '4'),
(31, '0921471342', 'Refile Tinta Spidol', 3, 1, '5000', 100, '4'),
(32, '29184374242', 'Corection pen', 3, 1, '2500', 100, '4'),
(33, '1325305942', 'Good Day', 2, 1, '1000', 100, '4'),
(34, '92164742411', 'Pembalut', 4, 1, '1000', 100, '4'),
(35, '34723488712', 'Adem Sari', 2, 1, '1000', 99, '1'),
(36, '785216314143', 'Puding', 1, 1, '1000', 100, '4'),
(37, '12384523244', 'Mie Gelas', 1, 1, '3000', 100, '4'),
(38, '7832784324', 'Kerupuk', 1, 1, '500', 100, '4'),
(39, '9372718435', 'Wafer Nabati', 1, 1, '1000', 100, '4'),
(40, '232443249888', 'Malkis Coklat', 1, 1, '500', 96, '4'),
(41, '222194742533', 'Suky-Suky', 1, 1, '1.000', 100, '2'),
(42, '77734835335', 'Tim-Tam', 1, 1, '1.000', 99, '1'),
(43, '28495295353', 'Notebook', 3, 1, '1.000', 100, '2'),
(44, '131317433348', 'Roti', 1, 1, '1000', 24, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `nama_role`) VALUES
(1, 'Administrator'),
(2, 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `Id` int(11) NOT NULL,
  `Satuan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_satuan`
--

INSERT INTO `tb_satuan` (`Id`, `Satuan`) VALUES
(1, 'pcs'),
(2, 'lusin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok_keluar`
--

CREATE TABLE `tb_stok_keluar` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `barcode` varchar(30) NOT NULL,
  `jumlah` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_stok_keluar`
--

INSERT INTO `tb_stok_keluar` (`id`, `tanggal`, `barcode`, `jumlah`, `keterangan`) VALUES
(1, '2022-07-21 07:00:39', '94274415314', '2', 'Rusak'),
(2, '2022-07-21 07:00:39', '8993110000782', '2', 'Kadaluarsa'),
(3, '2022-07-29 07:42:00', '7', '2', 'rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok_masuk`
--

CREATE TABLE `tb_stok_masuk` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `barcode` varchar(11) NOT NULL,
  `jumlah` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `supplier` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_stok_masuk`
--

INSERT INTO `tb_stok_masuk` (`id`, `tanggal`, `barcode`, `jumlah`, `keterangan`, `supplier`) VALUES
(1, '2022-07-28 07:00:31', '89931100007', '100', 'Menambah', 'Grosir Kita'),
(3, '2022-07-21 19:03:00', '7', '12', 'penambahan', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id`, `nama`) VALUES
(1, 'Grosir Kita Murah'),
(2, 'Grosir SatuAbadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `barcode` varchar(128) NOT NULL,
  `qty` varchar(128) NOT NULL,
  `total_bayar` varchar(128) NOT NULL,
  `jumlah_uang` varchar(128) NOT NULL,
  `nota` varchar(15) NOT NULL,
  `kasir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `tanggal`, `barcode`, `qty`, `total_bayar`, `jumlah_uang`, `nota`, `kasir`) VALUES
(1, '2022-07-27 09:07:10', '85729482445', '1', '1000', '1000', 'lunas', 1),
(3, '2022-07-29 17:02:55', '8,1,35', '1,2', '3000', '5000', '2V8ASFMHT06IKVW', 1),
(4, '2022-07-29 17:03:39', '42,40', '4', '2000', '2000', 'LGBQK2FAWQ6OOUV', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_stok_keluar`
--
ALTER TABLE `tb_stok_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_stok_masuk`
--
ALTER TABLE `tb_stok_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_stok_keluar`
--
ALTER TABLE `tb_stok_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_stok_masuk`
--
ALTER TABLE `tb_stok_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

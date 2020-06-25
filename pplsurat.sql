-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2020 pada 11.42
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pplsurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dekan`
--

CREATE TABLE `dekan` (
  `id_dekan` varchar(64) NOT NULL,
  `nip` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dekan`
--

INSERT INTO `dekan` (`id_dekan`, `nip`, `nama`, `jurusan`, `alamat`, `telp`) VALUES
('5ee4a946a30fc', 1177050126, 'Prof. Nden Awalludin, S.T., M.', 'Teknik Informatika', 'Kronjo', 1101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` varchar(225) NOT NULL,
  `nip` int(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telp` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama`, `jurusan`, `alamat`, `telp`) VALUES
('5ee4d4d78ae70', 1177050126, 'Prof. Nden Awalludin, S.T., M.Kom.', 'Teknik Informatika', 'Kronjo', 1101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajur`
--

CREATE TABLE `kajur` (
  `id_kajur` varchar(225) NOT NULL,
  `nip` int(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telp` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kajur`
--

INSERT INTO `kajur` (`id_kajur`, `nip`, `nama`, `jurusan`, `alamat`, `telp`) VALUES
('5ee4d04c82f5e', 1177050126, 'Prof. Nden Awalludin, S.T., M.Kom.', 'Teknik Informatika', 'Kronjo', 1101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kp`
--

CREATE TABLE `surat_kp` (
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `nama_intansi` varchar(255) DEFAULT NULL,
  `alamat_intansi` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `lamanya` varchar(255) DEFAULT NULL,
  `mulai_tgl` date DEFAULT NULL,
  `akhir_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_kp`
--

INSERT INTO `surat_kp` (`no_surat`, `tanggal_surat`, `nama_intansi`, `alamat_intansi`, `nama_lengkap`, `nim`, `jurusan`, `semester`, `lamanya`, `mulai_tgl`, `akhir_tgl`) VALUES
('B-0001Un.05III.7PP.00.9052020', '2020-05-19', 'Jln.Cijapati', NULL, 'Fauzan Herdika Tubagus Putra', '1177050043', 'Teknik Elektro', '5 (Lima)', '2 Bulan', '2020-05-19', '2020-07-19'),
('B-0002Un.05III.7PP.00.9062020', '2020-06-09', 'UIN badag', 'badag', 'nden', '11', 'Teknik Informatika', '6', '3', '2020-05-04', '2020-08-04'),
('B-0003Un.05III.7PP.00.9062020', '0000-00-00', '', '', '', '', 'Teknik Informatika', '', '', '0000-00-00', '0000-00-00'),
('B-0004Un.05III.7PP.00.9062020', '0000-00-00', '', '', '', '', 'Teknik Informatika', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(224) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wadek`
--

CREATE TABLE `wadek` (
  `id_wadek` varchar(255) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telp` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wadek`
--

INSERT INTO `wadek` (`id_wadek`, `nip`, `nama`, `jurusan`, `alamat`, `telp`) VALUES
('5ee4ca95112e6', '1177050126', 'Prof. Nden Awalludin, S.T., M.Kom.', 'Teknik Informatika', 'Kronjo', 1101),
('5ee4cb39978fe', '1177050130', 'Prof. Fauzan Galing, S.T., M.Kom.', 'Teknik Informatika', 'Cikijing', 90);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dekan`
--
ALTER TABLE `dekan`
  ADD PRIMARY KEY (`id_dekan`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `kajur`
--
ALTER TABLE `kajur`
  ADD PRIMARY KEY (`id_kajur`);

--
-- Indeks untuk tabel `surat_kp`
--
ALTER TABLE `surat_kp`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wadek`
--
ALTER TABLE `wadek`
  ADD PRIMARY KEY (`id_wadek`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

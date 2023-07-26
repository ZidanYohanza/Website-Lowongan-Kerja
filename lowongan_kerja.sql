-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221005.cd15c26e1f
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2022 pada 06.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowongan_kerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `password`, `level`) VALUES
(27, 'zirkleonevil@gmail.com', '$2y$10$WjEOF4uYFAVPmPvuqtV0.OxM3SWJXFhFeD.gwanwmcYikrYPV4sXO', 2),
(30, 'jidan@gmail.com', '$2y$10$rSWFYVEBamVmjrESrdHR5.z3p/hn48E7T/.4d.7KHC1Iq/aAUgULy', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_lowongan`
--

CREATE TABLE `daftar_lowongan` (
  `id_daftarLowongan` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_pekerja` int(11) NOT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_lowongan`
--

INSERT INTO `daftar_lowongan` (`id_daftarLowongan`, `id_lowongan`, `id_pekerja`, `tgl_daftar`, `status`) VALUES
(51, 0, 0, '2022-12-15', 'Lamar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_lowongan` varchar(150) DEFAULT NULL,
  `syarat_lowongan` varchar(250) DEFAULT NULL,
  `deskripsi_lowongan` varchar(350) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `id_perusahaan`, `nama_lowongan`, `syarat_lowongan`, `deskripsi_lowongan`, `gaji`) VALUES
(4, 2, 'Satpam', 'Kuat, Tahan, Banting', 'Untuk menjaga perusahaan ini untuk terjaga keamanannya', 4000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencari_kerja`
--

CREATE TABLE `pencari_kerja` (
  `id_pencariKerja` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_pekerja` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `address` varchar(300) NOT NULL,
  `gambar_pekerja` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pencari_kerja`
--

INSERT INTO `pencari_kerja` (`id_pencariKerja`, `id_akun`, `nama_pekerja`, `jenis_kelamin`, `tgl_lahir`, `no_hp`, `address`, `gambar_pekerja`) VALUES
(6, 29, 'Zidan Yohanza', 'laki', '2002-12-12', '0812982193212', 'Kenangan', '1670379338_2951b1b753eaa6267273.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_perusahaan` varchar(150) NOT NULL,
  `alamat_perusahaan` varchar(150) DEFAULT NULL,
  `telepon_perusahaan` varchar(15) DEFAULT NULL,
  `pj_perusahaan` varchar(100) DEFAULT NULL,
  `gambar_perusahaan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_akun`, `nama_perusahaan`, `alamat_perusahaan`, `telepon_perusahaan`, `pj_perusahaan`, `gambar_perusahaan`) VALUES
(2, 27, 'Konoha', 'Pekanbaru', '081210321230', 'Jidan', '1670325728_bc445eb7d5cfa93e7359.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resume`
--

CREATE TABLE `resume` (
  `id_resume` int(11) NOT NULL,
  `id_pencariKerja` int(11) NOT NULL,
  `ringkasan_diri` varchar(300) DEFAULT NULL,
  `keahlian` varchar(100) DEFAULT NULL,
  `pengalaman_kerja` varchar(200) DEFAULT NULL,
  `riwayat_pendidikan` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resume`
--

INSERT INTO `resume` (`id_resume`, `id_pencariKerja`, `ringkasan_diri`, `keahlian`, `pengalaman_kerja`, `riwayat_pendidikan`) VALUES
(3, 6, 'Seorang yang semangat dalam mencari kerja', 'Bela Diri', 'Pengalaman kerja pernah menjadi penjaga perusahaan', 'SD');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `daftar_lowongan`
--
ALTER TABLE `daftar_lowongan`
  ADD PRIMARY KEY (`id_daftarLowongan`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indeks untuk tabel `pencari_kerja`
--
ALTER TABLE `pencari_kerja`
  ADD PRIMARY KEY (`id_pencariKerja`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id_resume`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `daftar_lowongan`
--
ALTER TABLE `daftar_lowongan`
  MODIFY `id_daftarLowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pencari_kerja`
--
ALTER TABLE `pencari_kerja`
  MODIFY `id_pencariKerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `resume`
--
ALTER TABLE `resume`
  MODIFY `id_resume` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

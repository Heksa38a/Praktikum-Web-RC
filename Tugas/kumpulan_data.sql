-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2021 pada 17.52
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kumpulan_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tgl_lahir`, `prodi`) VALUES
(16, 'Heksa', 'Banjarrejo', 'Laki-laki', '2000-12-31', 'Teknik Informatika'),
(17, 'Ihtiandiko', 'Indralaya', 'Laki-laki', '2001-07-18', 'Teknik Informatika'),
(18, 'Dimas', 'Matamerah', 'Laki-laki', '2001-04-15', 'Teknik Telekomunikasi'),
(19, 'Iva', 'Teluk', 'Perempuan', '2001-05-10', 'Teknik Informatika'),
(20, 'Farhan', 'Padang', 'Laki-laki', '2000-09-15', 'Teknik Sipil'),
(21, 'Risa', 'Pringsewu', 'Perempuan', '2001-07-18', 'Teknik Kimia'),
(22, 'Gilang', 'Metro', 'Laki-laki', '2000-11-26', 'Farmasi'),
(23, 'Pakih', 'Jakarta', 'Laki-laki', '2002-01-14', 'Aristetur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

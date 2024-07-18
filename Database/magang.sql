-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 03 Mar 2023 pada 08.22
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
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menuakuntabilitaskinerja`
--

CREATE TABLE `menuakuntabilitaskinerja` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(400) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menuakuntabilitaskinerja`
--

INSERT INTO `menuakuntabilitaskinerja` (`id`, `judul`, `link`, `gambar`) VALUES
(1, '1', 'https://www.youtube.com/watch?v=G0g965OfUj8&amp;ab_channel=XINNN', 0x363430303630303939653131382e6a7067),
(2, '2', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303630663165386161302e6a706567),
(3, '3', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303631666331353064382e706e67),
(4, '4', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303632313532303332622e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menuinovasikppnyogyakarta`
--

CREATE TABLE `menuinovasikppnyogyakarta` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(400) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menuinovasikppnyogyakarta`
--

INSERT INTO `menuinovasikppnyogyakarta` (`id`, `judul`, `link`, `gambar`) VALUES
(1, '1', 'https://www.youtube.com/watch?v=G0g965OfUj8&amp;ab_channel=XINNN', 0x363430303532323463623739392e6a7067),
(2, 'wewew', 'https://www.youtube.com/watch?v=G0g965OfUj8&amp;ab_channel=XINNN', 0x363430303532393833653539332e6a7067),
(3, 'dsad', 'https://www.youtube.com/watch?v=7aioo20QeF0&amp;ab_channel=BassKlemens', 0x363430303532633664636639612e6a7067),
(4, 'wewq', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303532636534346562322e6a706567),
(5, 'erew', 'https://www.youtube.com/watch?v=mPKwJC_IYGg&amp;ab_channel=HamsanSiswanto', 0x363430303532656661396235362e6a7067),
(6, 'ghgfh', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303533313332343831362e6a7067),
(7, 'sdsdsa', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303533316534356663342e6a7067),
(8, 'wewq', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303533323761343265372e6a706567),
(9, 'tytryttyt', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303533373165346331652e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menuwebsitekemenkeu`
--

CREATE TABLE `menuwebsitekemenkeu` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(400) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menuwebsitekemenkeu`
--

INSERT INTO `menuwebsitekemenkeu` (`id`, `judul`, `link`, `gambar`) VALUES
(20, 'KEMENKEU LEARNING CENTRE', 'https://www.youtube.com/watch?v=7aioo20QeF0&amp;ab_channel=BassKlemens', 0x363430303439356339353065302e6a7067),
(22, 'dsadsad', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363366646134653438663936332e706e67),
(24, 'kppnJogja', 'https://www.youtube.com/watch?v=G0g965OfUj8&amp;ab_channel=XINNN', 0x363366646136313864356537352e6a7067),
(25, 'dsfdsf', 'https://www.youtube.com/watch?v=7aioo20QeF0&amp;ab_channel=BassKlemens', 0x363366646162386563323434622e6a7067),
(26, 'SURVEI KEPUASAN PEGAWAI', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363366656430363437613834312e6a7067),
(27, 'WARMINDO KPPN YOGYAKARTA', 'https://www.youtube.com/watch?v=mPKwJC_IYGg&amp;ab_channel=HamsanSiswanto', 0x363366653432636633393332302e6a7067),
(28, 'ffeew', 'https://www.youtube.com/watch?v=G0g965OfUj8&amp;ab_channel=XINNN', 0x363366663032383430626235312e6a7067),
(30, 'fdsfds', 'https://www.youtube.com/watch?v=Re2dJCkpLMo&amp;ab_channel=Daydreams', 0x363430303438613965356637632e6a7067),
(31, 'ererew', 'https://www.youtube.com/watch?v=7aioo20QeF0&amp;ab_channel=BassKlemens', 0x363430303438623862343161352e6a7067),
(32, 'rerew', 'https://www.youtube.com/watch?v=7aioo20QeF0&amp;ab_channel=BassKlemens', 0x363430303438633262356161642e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `NIP` char(18) NOT NULL,
  `NIK` char(16) NOT NULL,
  `unit` set('Subbagian Umum','Seksi Pencairan Dana','Seksi Bank','Seksi Manajemen SATKER dan Kepatuhan Internal','Seksi Verifikasi dan Akuntansi','Fungsional') NOT NULL,
  `email` varchar(200) NOT NULL,
  `nohp` char(12) NOT NULL,
  `status` set('Aktif','Tidak Aktif') NOT NULL,
  `role` enum('admin','pegawai') NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `NIP`, `NIK`, `unit`, `email`, `nohp`, `status`, `role`, `password`) VALUES
(67, 'Muhammad Anshori Akbar123123213erw', '233423432432532545', '3224312323124124', 'Seksi Manajemen SATKER dan Kepatuhan Internal', 'anggita@gmail.com', '3432432', 'Tidak Aktif', 'pegawai', '12'),
(70, 'Mariposa', '1', '43534', 'Seksi Bank', 'anggita@gmail.com', '081254402608', 'Aktif', 'pegawai', '12'),
(71, 'Anggita', '22', '23', 'Seksi Bank', 'anggita@gmail.com', '081254402608', 'Aktif', 'pegawai', '12'),
(72, 'Mohammed salah', '12', '43534', 'Seksi Bank', 'm.anshori2711@gmail.com', '081254402608', 'Aktif', 'admin', '12'),
(73, 'eresres', '3432', '343243', 'Seksi Pencairan Dana', 'anshoriakbar11@gmail.com', 's3232', 'Aktif', 'pegawai', '123'),
(75, 'erewr', '2433', '4342', 'Subbagian Umum', 'anggita@gmail.com', '3432432', 'Aktif', 'pegawai', '321'),
(76, '32423', '34', '324', 'Seksi Pencairan Dana', '32432', '32432', 'Aktif', 'admin', '32432'),
(77, '3432', '3242', '3242', 'Seksi Pencairan Dana', 'anshoriakbar11@gmail.com', 's3232', 'Aktif', 'admin', '343'),
(81, 'sdsd', '232321222132', '123213213232132', 'Seksi Manajemen SATKER dan Kepatuhan Internal', 'm.anshori2711@gmail.com', '081254402608', 'Aktif', 'admin', 'dsfsafas'),
(85, '123', '123', '123', 'Seksi Bank', 'anshoriakbar11@gmail.com', '123', 'Tidak Aktif', 'admin', '321'),
(86, '1234', '123456789123456789', '1234', 'Subbagian Umum', 'm.anshori2711@gmail.com', '081254402608', 'Tidak Aktif', 'admin', '321');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menuakuntabilitaskinerja`
--
ALTER TABLE `menuakuntabilitaskinerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menuinovasikppnyogyakarta`
--
ALTER TABLE `menuinovasikppnyogyakarta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menuwebsitekemenkeu`
--
ALTER TABLE `menuwebsitekemenkeu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menuakuntabilitaskinerja`
--
ALTER TABLE `menuakuntabilitaskinerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menuinovasikppnyogyakarta`
--
ALTER TABLE `menuinovasikppnyogyakarta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `menuwebsitekemenkeu`
--
ALTER TABLE `menuwebsitekemenkeu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

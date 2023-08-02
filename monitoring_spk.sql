-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Apr 2018 pada 09.37
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `amandemen`
--

CREATE TABLE `amandemen` (
  `id` int(11) NOT NULL,
  `no_spk` varchar(50) NOT NULL,
  `vendor_spk` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `basket` varchar(50) NOT NULL,
  `no_amd` varchar(50) NOT NULL,
  `uraian_amd` text NOT NULL,
  `tgl_amd` date NOT NULL,
  `akhir_spk` date NOT NULL,
  `nilai_spk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `amandemen`
--

INSERT INTO `amandemen` (`id`, `no_spk`, `vendor_spk`, `bagian`, `basket`, `no_amd`, `uraian_amd`, `tgl_amd`, `akhir_spk`, `nilai_spk`) VALUES
(13, '003.SP/DAN.003', 'PT. PPP', 'Konstruksi', 'Pemasaran', '002.A', 'pemunduran tanggal', '2018-04-26', '2018-05-05', 99000000000),
(14, '002.SP/DAN.002', 'PT. Indah Samudra', 'Transaksi Energi', 'Efisiensi', '123.A', 'Kerja Tambah', '2018-04-17', '2018-05-23', 5000000000),
(15, '001.SP/DAN.001', 'CV. Anugrah Jaya', 'Jaringan', 'Keandalan', '001.A', 'pemunduran tanggal', '2018-04-10', '2018-05-06', 8000000000),
(16, '001.SP/DAN.001', 'CV. Anugrah Jaya', 'Jaringan', 'Keandalan', '006.A', '', '2018-04-26', '2018-05-05', 20000000000),
(17, '001.SP/DAN.001', 'CV. Anugrah Jaya', 'Jaringan', 'Keandalan', '006.A', '', '2018-04-24', '2018-05-05', 8000000000),
(18, '008.SP/DAN.008', 'PT. ABB Indo Perkasa', 'Jaringan', 'Keandalan', '008.A', 'Pekerjaan Penambahan Waktu', '2018-04-30', '2018-05-30', 500000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `no_spk` varchar(50) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `nilai_bayar` bigint(50) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `keterangan` text NOT NULL,
  `basket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `no_spk`, `pembayaran`, `nilai_bayar`, `tgl_bayar`, `keterangan`, `basket`) VALUES
(44, '001.SP/DAN.001', 'Pembayaran ke-1', 66000000, '2018-04-09', '', 'Keandalan'),
(45, '001.SP/DAN.001', 'Pembayaran ke-2', 500000000, '2018-04-11', '', 'Keandalan'),
(46, '001.SP/DAN.001', 'Pembayaran Total', 90000000, '2018-04-18', 'abcdefg', 'Keandalan'),
(48, '003.SP/DAN.003', 'Pembayaran ke-1', 350000000, '2018-05-05', 'abcdefg', 'Pemasaran'),
(51, '001.SP/DAN.001', 'Pembayaran Total', 300000000, '2018-03-01', '', 'Keandalan'),
(52, '001.SP/DAN.001', 'Pembayaran Total', 90000000, '2018-05-01', '', 'Keandalan'),
(53, '001.SP/DAN.001', 'Pembayaran Total', 30000000, '2018-06-01', '', 'Keandalan'),
(54, '003.SP/DAN.003', 'Pembayaran ke-3', 90000000, '2018-07-07', '', 'Pemasaran'),
(55, '003.SP/DAN.003', 'Pembayaran Total', 17000000, '2018-08-17', '', 'Pemasaran'),
(56, '003.SP/DAN.003', 'Pembayaran Total', 150000000, '2018-04-19', '', 'Pemasaran'),
(57, '003.SP/DAN.003', 'Pembayaran Total', 300000000, '2018-10-05', '', 'Pemasaran'),
(58, '002.SP/DAN.002', 'Pembayaran Total', 200000000, '2018-11-01', '', 'Efisiensi'),
(59, '003.SP/DAN.003', 'Pembayaran Total', 200000000, '2018-12-27', '', 'Pemasaran'),
(60, '002.SP/DAN.002', 'Pembayaran ke-2', 70000000, '2018-06-29', '', 'Efisiensi'),
(62, '002.SP/DAN.002', 'Pembayaran Total', 10000000, '2018-09-19', '', 'Efisiensi'),
(63, '003.SP/DAN.003', 'Pembayaran ke-1', 900000000, '2019-01-01', '', 'Pemasaran'),
(64, '002.SP/DAN.002', 'Pembayaran ke-2', 100000000, '2019-02-13', '', 'Efisiensi'),
(65, '003.SP/DAN.003', 'Pembayaran ke-1', 100000000, '2018-01-17', '', 'Pemasaran'),
(67, '004.SP/DAN.004', 'Pembayaran Total', 40000000, '2018-04-19', '', 'Keandalan'),
(68, '004.SP/DAN.004', 'Pembayaran Total', 300000, '2018-04-30', '', 'Keandalan'),
(69, '002.SP/DAN.002', 'Pembayaran ke-4', 200000000, '2018-02-05', '', 'Efisiensi'),
(70, '008.SP/DAN.008', 'Pembayaran ke-1', 110000000, '2018-04-30', 'Pembayaran 20%', 'Keandalan'),
(71, '008.SP/DAN.008', 'Pembayaran ke-2', 390000000, '2018-05-30', 'Pekerjaan Selesai', 'Keandalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `untuk` varchar(500) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengada`
--

CREATE TABLE `pengada` (
  `id` int(11) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `no_spk` varchar(50) NOT NULL,
  `vendor_spk` varchar(50) NOT NULL,
  `awal_spk` date NOT NULL,
  `akhir_spk` date NOT NULL,
  `uraian_spk` text NOT NULL,
  `nilai_spk` bigint(20) NOT NULL,
  `basket` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `status_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengada`
--

INSERT INTO `pengada` (`id`, `bagian`, `no_spk`, `vendor_spk`, `awal_spk`, `akhir_spk`, `uraian_spk`, `nilai_spk`, `basket`, `status`, `status_bayar`, `status_input`) VALUES
(36, 'Jaringan', '001.SP/DAN.001', 'CV. Anugrah Jaya', '2018-04-09', '2018-05-05', 'Pekerjaan Pemasangan Tiang', 2000000000, 'Keandalan', 1, '', 1),
(37, 'Transaksi Energi', '002.SP/DAN.002', 'PT. Indah Samudra', '2018-04-12', '2018-05-18', 'Jasa Pekerjaan Pembangunan Gardu', 3000000000, 'Efisiensi', 1, '', 1),
(39, 'Konstruksi', '004.SP/DAN.004', 'PT. PERMATA SATU DJIWA', '2018-04-19', '2018-04-17', 'Tidak Ada', 90000000, 'Keandalan', 1, '', 1),
(40, 'Jaringan', '005.SP/DAN.005', 'ASGAR', '2018-03-28', '2018-05-03', 'Pembangunan Jaringan JTM', 66000000000, 'Pemasaran', 1, '', 1),
(43, 'Konstruksi', '003.SP/DAN.003', 'PT. ABC', '2018-04-18', '2018-04-26', 'Jasa Pekerjaan Pembangunan Gardu', 30000000000, 'Pemasaran', 1, 'Final', 1),
(44, 'Jaringan', '006.SP/DAN.006', 'PT. Kapan Manjunya', '2018-04-19', '2018-05-03', 'Jasa Pekerjaan Pembangunan', 9000000000, 'Keandalan', 1, '', 1),
(45, '', '007.SP/DAN.007', 'PT. GHI', '2018-03-28', '2018-04-19', 'Pembangunan Jaringan JTM', 3000000000, 'Keandalan', 0, '', 0),
(46, 'Jaringan', '008.SP/DAN.008', 'PT. ABB Indo Perkasa', '2018-01-01', '2018-04-30', 'Pengadaan dan Pemasangan Kubikel 20 Kv Area Cikokol', 550000000, 'Keandalan', 1, 'Final', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengawas`
--

CREATE TABLE `pengawas` (
  `id` int(11) NOT NULL,
  `progress` int(11) NOT NULL,
  `a3c150` varchar(50) NOT NULL,
  `a3c240` varchar(50) NOT NULL,
  `mvtic150` varchar(50) NOT NULL,
  `mvtic240` varchar(50) NOT NULL,
  `xlpe240` varchar(50) NOT NULL,
  `xlpe300` varchar(50) NOT NULL,
  `trafo100kva` varchar(50) NOT NULL,
  `trafo160kva` varchar(50) NOT NULL,
  `trafo200kva` varchar(50) NOT NULL,
  `trafo250kva` varchar(50) NOT NULL,
  `trafo315kva` varchar(50) NOT NULL,
  `trafo400kva` varchar(50) NOT NULL,
  `trafo630kva` varchar(50) NOT NULL,
  `trafo1000kva` varchar(50) NOT NULL,
  `raktr` varchar(50) NOT NULL,
  `sktr` varchar(50) NOT NULL,
  `tic370` varchar(50) NOT NULL,
  `tic395` varchar(50) NOT NULL,
  `tic210` varchar(50) NOT NULL,
  `tic216` varchar(50) NOT NULL,
  `ai_lbs` varchar(50) NOT NULL,
  `ai_pb` varchar(50) NOT NULL,
  `ai_cbom` varchar(50) NOT NULL,
  `fi_lbs` varchar(50) NOT NULL,
  `fi_pb` varchar(50) NOT NULL,
  `fi_cbom` varchar(50) NOT NULL,
  `incoming` varchar(50) NOT NULL,
  `kopel` varchar(50) NOT NULL,
  `outgoing` varchar(50) NOT NULL,
  `riser` varchar(50) NOT NULL,
  `cellvt` varchar(50) NOT NULL,
  `ps` varchar(50) NOT NULL,
  `kwh1pp` varchar(50) NOT NULL,
  `kwh1pr` varchar(50) NOT NULL,
  `kwhe3pk` varchar(50) NOT NULL,
  `kwha3pb` varchar(50) NOT NULL,
  `kwha3pt` varchar(50) NOT NULL,
  `p12a` varchar(50) NOT NULL,
  `p14a` varchar(50) NOT NULL,
  `p16a` varchar(50) NOT NULL,
  `p110a` varchar(50) NOT NULL,
  `p116a` varchar(50) NOT NULL,
  `p125a` varchar(50) NOT NULL,
  `p135a` varchar(50) NOT NULL,
  `p150a` varchar(50) NOT NULL,
  `p310a` varchar(50) NOT NULL,
  `p316a` varchar(50) NOT NULL,
  `p320a` varchar(50) NOT NULL,
  `p325a` varchar(50) NOT NULL,
  `p335a` varchar(50) NOT NULL,
  `p350a` varchar(50) NOT NULL,
  `mccb63` varchar(50) NOT NULL,
  `mccb80` varchar(50) NOT NULL,
  `mccb100` varchar(50) NOT NULL,
  `mccb150` varchar(50) NOT NULL,
  `mccb200` varchar(50) NOT NULL,
  `mccb250` varchar(50) NOT NULL,
  `mccb300` varchar(50) NOT NULL,
  `lain` text NOT NULL,
  `ren_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengawas`
--

INSERT INTO `pengawas` (`id`, `progress`, `a3c150`, `a3c240`, `mvtic150`, `mvtic240`, `xlpe240`, `xlpe300`, `trafo100kva`, `trafo160kva`, `trafo200kva`, `trafo250kva`, `trafo315kva`, `trafo400kva`, `trafo630kva`, `trafo1000kva`, `raktr`, `sktr`, `tic370`, `tic395`, `tic210`, `tic216`, `ai_lbs`, `ai_pb`, `ai_cbom`, `fi_lbs`, `fi_pb`, `fi_cbom`, `incoming`, `kopel`, `outgoing`, `riser`, `cellvt`, `ps`, `kwh1pp`, `kwh1pr`, `kwhe3pk`, `kwha3pb`, `kwha3pt`, `p12a`, `p14a`, `p16a`, `p110a`, `p116a`, `p125a`, `p135a`, `p150a`, `p310a`, `p316a`, `p320a`, `p325a`, `p335a`, `p350a`, `mccb63`, `mccb80`, `mccb100`, `mccb150`, `mccb200`, `mccb250`, `mccb300`, `lain`, `ren_bayar`) VALUES
(36, 0, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '320', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '450', '46', '47', '48', '49', '44', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '2018-01-06'),
(37, 100, '64', '6', '45', '45', '45', '45', '55', '765', '765', '76', '576', '57', '576', '576', '76', '576', '57', '576', '76', '57', '576', '5', '657', '65', '757', '5', '765', '65', '65', '765', '75', '786', '6', '79', '6', '68', '687', '7687', '678', '678', '678', '6', '76', '', '86', '86', '876', '876', '86', '786', '786', '786', '876', '786', '786', '786', '86', '786', '786dsdsd', '2018-07-27'),
(39, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '100', '', '', '', '', '', '', '', '', '', '', '', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(40, 70, '7', '7', '7', '7', '7', '77', '7', '7', '7', '', '7', '7', '77', '7', '7', '7', '7', '7', '7', '77', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '799', '700', '100', '7', '7', '7', '7', '77', '17', '7', '7', '7', '77', '7', '7', '2018-04-19'),
(43, 100, '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '11', '9000', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0001-01-16'),
(44, 10, '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '11', '', '333', '200', '12', '13', '14', '51', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(46, 20, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', '100', '2', '2', '2', '22', '2', '2', '2', '2', '2', '2', '2', '1000', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', '2018-04-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'Administrator'),
(2, 'pengadaan', 'pengadaan', 'Pengadaan'),
(3, 'perencana', 'perencana', 'Perencanaan'),
(5, 'jaringan', 'jaringan', 'Jaringan'),
(6, 'konstruksi', 'konstruksi', 'Konstruksi'),
(7, 'transenergi', 'transenergi', 'Transaksi Energi'),
(8, 'keuangan', 'keuangan', 'Keuangan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amandemen`
--
ALTER TABLE `amandemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_spk` (`no_spk`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengada`
--
ALTER TABLE `pengada`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_spk` (`no_spk`);

--
-- Indexes for table `pengawas`
--
ALTER TABLE `pengawas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amandemen`
--
ALTER TABLE `amandemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengada`
--
ALTER TABLE `pengada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengawas`
--
ALTER TABLE `pengawas`
  ADD CONSTRAINT `pengawas_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengada` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

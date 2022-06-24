-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Jun 2022 pada 21.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keluarahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datang`
--

CREATE TABLE `datang` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `no` varchar(13) NOT NULL,
  `dusun` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `skpindah` text NOT NULL,
  `biodata` text NOT NULL,
  `skjaminan` text NOT NULL,
  `kk` text NOT NULL,
  `ktp` text NOT NULL,
  `akta` int(11) NOT NULL,
  `aktanikah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datang`
--

INSERT INTO `datang` (`id`, `nik`, `nama`, `no`, `dusun`, `id_rt`, `id_rw`, `skpindah`, `biodata`, `skjaminan`, `kk`, `ktp`, `akta`, `aktanikah`) VALUES
(1, '23233', 'HOME STAY', '81249429071', 3, 2, 3, '0.57074700 1592807895.png', '1.jpg', '19240005-Prak3-PWL-converted.docx', '19240005-Prak3-PWL.pdf', '08 Contoh Undangan Tahlil F4 Jadi 2 - by massiswo.com.docx', 20201008, '20201008_014359.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kia`
--

CREATE TABLE `kia` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `fckk` text NOT NULL,
  `gambar` text NOT NULL,
  `akta` text NOT NULL,
  `ktpa` text NOT NULL,
  `ktpi` text NOT NULL,
  `no` varchar(12) NOT NULL,
  `dusun` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kia`
--

INSERT INTO `kia` (`id`, `nama`, `fckk`, `gambar`, `akta`, `ktpa`, `ktpi`, `no`, `dusun`, `id_rt`, `id_rw`) VALUES
(1, 'MUH RIDHO WACHID SOLIKIN', '', '252-682-1-SM1.pdf', '149-Article Text-152-2-10-20180602.pdf', '191-1217-1-PB.pdf', '191-1217-1-PB.pdf', '8112504857', 2, 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nikah`
--

CREATE TABLE `nikah` (
  `id` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no` varchar(12) NOT NULL,
  `dusun` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `kk` text NOT NULL,
  `ktp` text NOT NULL,
  `ktpi` text NOT NULL,
  `spdkel` text NOT NULL,
  `aktanikah` text NOT NULL,
  `surat` text NOT NULL,
  `ktportu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nikah`
--

INSERT INTO `nikah` (`id`, `nama`, `nik`, `no`, `dusun`, `id_rt`, `id_rw`, `kk`, `ktp`, `ktpi`, `spdkel`, `aktanikah`, `surat`, `ktportu`) VALUES
(1, 'MUH RIDHO WACHID SOLIKIN', '23233', '8112504857', 2, 4, 3, '19240015-UASsimD3TI.pdf', '19240005-Latihan Stack-Prak Struktur Data.pdf', 'administrasi jaringan.2pdf.pdf', 'aaada 2.docx', 'au .pdf', '60190735ad065.pdf', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_agama`
--

CREATE TABLE `ref_agama` (
  `id_agama` int(5) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `is_diakui` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_agama`
--

INSERT INTO `ref_agama` (`id_agama`, `deskripsi`, `is_diakui`) VALUES
(0, 'Tidak Diketahui', 'Y'),
(1, 'Islam', 'Y'),
(2, 'Kristen', 'Y'),
(3, 'Katholik', 'Y'),
(4, 'Hindu', 'Y'),
(5, 'Budha', 'Y'),
(6, 'Konghucu', 'Y'),
(7, 'Aliran Kepercayaan Kepada Tuhan YME', 'N'),
(8, 'Aliran Kepercayaan Lainnya', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_desa`
--

CREATE TABLE `ref_desa` (
  `id_desa` int(10) NOT NULL,
  `kode_desa_bps` char(20) NOT NULL,
  `kode_desa_kemendagri` char(20) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `luas_wilayah` float NOT NULL,
  `id_penduduk` int(10) DEFAULT NULL,
  `alamat_desa` text DEFAULT NULL,
  `kode_pos` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_desa`
--

INSERT INTO `ref_desa` (`id_desa`, `kode_desa_bps`, `kode_desa_kemendagri`, `nama_desa`, `luas_wilayah`, `id_penduduk`, `alamat_desa`, `kode_pos`) VALUES
(1, '28.14.26.3', '28.14.26.3', 'Pulosari Jambon Ponorogo', 131, 17, 'JL. Apa yaa???', '43356');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_dusun`
--

CREATE TABLE `ref_dusun` (
  `id_dusun` int(10) NOT NULL,
  `kode_dusun_kemendagri` char(20) NOT NULL,
  `nama_dusun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_dusun`
--

INSERT INTO `ref_dusun` (`id_dusun`, `kode_dusun_kemendagri`, `nama_dusun`) VALUES
(0, '0', 'Tidak Diketahui'),
(1, '28.14.26.3.1', 'Pulosari'),
(2, '28.14.26.3.2', 'Padabenghar'),
(3, '28.14.26.3.3', 'Cidolog'),
(4, '28.14.26.3.1', 'Cikakak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_pendidikan`
--

CREATE TABLE `ref_pendidikan` (
  `id_pendidikan` int(15) NOT NULL,
  `deskripsi` varchar(75) NOT NULL,
  `is_bsm` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_pendidikan`
--

INSERT INTO `ref_pendidikan` (`id_pendidikan`, `deskripsi`, `is_bsm`) VALUES
(0, 'Tidak Diketahui', 'N'),
(1, 'Tidak dapat membaca', 'N'),
(2, 'Tidak Pernah Sekolah', 'N'),
(3, 'Tidak Tamat SD/Sederajat', 'N'),
(4, 'Tamat SD/Sederajat', 'N'),
(5, 'Tamat SMP/Sederajat', 'N'),
(6, 'Tamat SMA/Sederajat', 'N'),
(7, 'Tamat D-3/Sederajat', 'N'),
(8, 'Tamat S-1/Sederajat', 'N'),
(9, 'Tamat S-2/Sederajat', 'N'),
(10, 'Tamat S-3/Sederajat', 'N'),
(11, 'Belum Masuk TK/PAUD ', 'N'),
(12, 'Sedang TK/PAUD', 'N'),
(13, 'Sedang SD/Sederajat', 'Y'),
(14, 'Sedang SMP/Sederajat', 'Y'),
(15, 'Sedang SMA/Sederajat', 'Y'),
(16, 'Sedang D-3/Sederajat', 'N'),
(17, 'Sedang S-1/Sederajat', 'N'),
(18, 'Sedang S-2/Sederajat', 'N'),
(19, 'Sedang S-3/Sederajat', 'N'),
(20, 'Putus Sekolah', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_rt`
--

CREATE TABLE `ref_rt` (
  `id_rt` int(10) NOT NULL,
  `nomor_rt` char(10) NOT NULL,
  `id_rw` int(10) NOT NULL,
  `ds` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_rt`
--

INSERT INTO `ref_rt` (`id_rt`, `nomor_rt`, `id_rw`, `ds`) VALUES
(0, '-', 0, NULL),
(1, '01', 1, 30),
(2, '02', 1, 10),
(3, '01', 2, NULL),
(4, '02', 2, NULL),
(5, '01', 3, NULL),
(6, '02', 3, NULL),
(7, '01', 4, 9),
(8, '02', 4, 8),
(9, '01', 6, NULL),
(10, '01', 7, NULL),
(11, '02', 7, NULL),
(12, '01', 8, NULL),
(13, '02', 8, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_rw`
--

CREATE TABLE `ref_rw` (
  `id_rw` int(10) NOT NULL,
  `nomor_rw` char(10) NOT NULL,
  `id_dusun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_rw`
--

INSERT INTO `ref_rw` (`id_rw`, `nomor_rw`, `id_dusun`) VALUES
(0, '-', 0),
(1, '01', 1),
(2, '02', 1),
(3, '03', 1),
(4, '01', 2),
(5, '02', 2),
(6, '01', 4),
(7, '01', 3),
(8, '02', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aktekelahiran`
--

CREATE TABLE `tbl_aktekelahiran` (
  `id_akte` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no` varchar(13) NOT NULL,
  `dusun` int(225) NOT NULL,
  `sket` text NOT NULL,
  `kk` text NOT NULL,
  `ktp` text NOT NULL,
  `ktpi` text NOT NULL,
  `aktanikah` text NOT NULL,
  `spdkel` text NOT NULL,
  `id_rt` int(225) NOT NULL,
  `id_rw` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_aktekelahiran`
--

INSERT INTO `tbl_aktekelahiran` (`id_akte`, `nama`, `nik`, `no`, `dusun`, `sket`, `kk`, `ktp`, `ktpi`, `aktanikah`, `spdkel`, `id_rt`, `id_rw`) VALUES
(3, 'MUH RIDHO WACHID SOLIKIN', '23233', '081249429071', 1, '126-214-2-PB.pdf', '252-682-1-SM.pdf', '191-1217-1-PB.pdf', '', '705-1828-1-SM.pdf', '705-1828-1-SM.pdf', 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no` varchar(13) NOT NULL,
  `skkem` text NOT NULL,
  `sper` int(11) NOT NULL,
  `akte_nikah` text NOT NULL,
  `ktp` text NOT NULL,
  `kk` text NOT NULL,
  `ktppel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`id`, `nama`, `nik`, `no`, `skkem`, `sper`, `akte_nikah`, `ktp`, `kk`, `ktppel`) VALUES
(3, 'MUH RIDHO WACHID SOLIKIN', '4224242424', '081249429071', '129-490-1-PB.pdf', 126, '118-Article Text-225-1-10-20201110.pdf', '247-1307-1-PB.pdf', '705-1828-1-SM.pdf', '705-1828-1-SM.pdf'),
(4, 'MUH RIDHO WACHID SOLIKIN', '647105.060693.0106', '82362638529', '126-214-2-PB.pdf', 129, '149-Article Text-152-2-10-20180602.pdf', '20201008_014347-1.jpg', '20201008_014359.jpg', '287-2876869_baby-cartoon-png.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id` int(225) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `akta` text NOT NULL,
  `formulir` text NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no` varchar(13) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_rt` int(225) NOT NULL,
  `id_rw` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kk`
--

INSERT INTO `tbl_kk` (`id`, `dusun`, `akta`, `formulir`, `nama`, `nik`, `no`, `status`, `id_rt`, `id_rw`) VALUES
(25, '1', '126-214-2-PB.pdf', '245-594-1-PB.pdf', 'MUH RIDHO WACHID SOLIKIN', '647105.060693.0106', '82362638529', '', 2, 4),
(26, '2', '705-1828-1-SM.pdf', '19240005-Prak3-PWL.pdf', 'MUH RIDHO WACHID SOLIKIN', '647105.060693.0105', '85156704553', '', 6, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ktp`
--

CREATE TABLE `tbl_ktp` (
  `id_ktp` int(225) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `spd` text NOT NULL,
  `fckk` text NOT NULL,
  `foto` text NOT NULL,
  `no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ktp`
--

INSERT INTO `tbl_ktp` (`id_ktp`, `nama`, `spd`, `fckk`, `foto`, `no`) VALUES
(7, 'andre', '', '149-Article Text-152-2-10-20180602.pdf', '118-Article Text-225-1-10-20201110.pdf', '82362638529'),
(8, 'Dr Agus Qomaruddin Munir. S.T,.M.C.Si', '', '126-214-2-PB.pdf', '245-594-1-PB.pdf', '8112504875'),
(9, 'RINI WULANDARI', '', '129-490-1-PB.pdf', '705-1828-1-SM.pdf', '85727767702');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id_penduduk` int(10) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `id_rt` int(10) NOT NULL,
  `id_rw` int(10) NOT NULL,
  `id_dusun` int(10) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `goldar` varchar(5) NOT NULL,
  `jen_kel` varchar(2) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status_kawin` varchar(13) NOT NULL,
  `status_penduduk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id_penduduk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_telp`, `id_rt`, `id_rw`, `id_dusun`, `pendidikan`, `agama`, `goldar`, `jen_kel`, `pekerjaan`, `status_kawin`, `status_penduduk`) VALUES
(43, '647105.060693.0105', 'muh ridho wachid s', 'ponorogo', '2000-09-21 00:41:09', '81249429071', 2, 3, 1, 'SMA', 'islam', 'A', 'L', 'SWASTA', 'BELUM KAWIN', 'WNI'),
(44, '19240015', 'MUH RIDHO WACHID SOLIKIN', '', '0000-00-00 00:00:00', NULL, 2, 1, 1, 'Universita', 'Islam', 'A', 'L', 'mahasiswa ', 'Belum Kawin', 'WNI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datang`
--
ALTER TABLE `datang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kia`
--
ALTER TABLE `kia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ref_agama`
--
ALTER TABLE `ref_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `ref_desa`
--
ALTER TABLE `ref_desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `ref_dusun`
--
ALTER TABLE `ref_dusun`
  ADD PRIMARY KEY (`id_dusun`);

--
-- Indeks untuk tabel `ref_pendidikan`
--
ALTER TABLE `ref_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `ref_rt`
--
ALTER TABLE `ref_rt`
  ADD PRIMARY KEY (`id_rt`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indeks untuk tabel `ref_rw`
--
ALTER TABLE `ref_rw`
  ADD PRIMARY KEY (`id_rw`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indeks untuk tabel `tbl_aktekelahiran`
--
ALTER TABLE `tbl_aktekelahiran`
  ADD PRIMARY KEY (`id_akte`);

--
-- Indeks untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  ADD PRIMARY KEY (`id_ktp`);

--
-- Indeks untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datang`
--
ALTER TABLE `datang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kia`
--
ALTER TABLE `kia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nikah`
--
ALTER TABLE `nikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ref_agama`
--
ALTER TABLE `ref_agama`
  MODIFY `id_agama` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ref_desa`
--
ALTER TABLE `ref_desa`
  MODIFY `id_desa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ref_dusun`
--
ALTER TABLE `ref_dusun`
  MODIFY `id_dusun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ref_pendidikan`
--
ALTER TABLE `ref_pendidikan`
  MODIFY `id_pendidikan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `ref_rt`
--
ALTER TABLE `ref_rt`
  MODIFY `id_rt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ref_rw`
--
ALTER TABLE `ref_rw`
  MODIFY `id_rw` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_aktekelahiran`
--
ALTER TABLE `tbl_aktekelahiran`
  MODIFY `id_akte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  MODIFY `id_ktp` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id_penduduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ref_rt`
--
ALTER TABLE `ref_rt`
  ADD CONSTRAINT `ref_rt_ibfk_1` FOREIGN KEY (`ds`) REFERENCES `tbl_penduduk` (`id_penduduk`),
  ADD CONSTRAINT `ref_rt_ibfk_2` FOREIGN KEY (`id_rw`) REFERENCES `ref_rw` (`id_rw`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

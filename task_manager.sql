-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 14.49
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manager`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `kode_task` varchar(255) NOT NULL,
  `nama_task` varchar(255) NOT NULL,
  `isi_task` varchar(255) NOT NULL,
  `jenis_task` varchar(255) NOT NULL,
  `time_task` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `task`
--

INSERT INTO `task` (`id_task`, `kode_task`, `nama_task`, `isi_task`, `jenis_task`, `time_task`) VALUES
(1, 'TS001', 'Belajar PHP', 'Membuat Website', 'Task List', '07-01-2020'),
(3, 'TS003', 'Belajar MYSQL', 'Balajar Mysql dan Phpmyadmin menngunakan xampp', 'Task List', '07-01-2021'),
(15, 'TS001', '', '', 'Do', '07-01-2021'),
(17, 'TS001', '', '', 'Progress', '07-01-2021'),
(18, 'TS001', 'Flowchart Berjalan', 'Membuat rancangan flowchart berjalan', 'Done', '07-01-2021'),
(19, 'TS001', 'Flowchart Sistem', 'Membuat flowchart usulan tersistem', 'Do', '07-01-2021'),
(20, 'TS001', '', '', 'Done', '07-01-2021'),
(21, 'TS001', 'Sequence Diagram', 'Membuat perancangan sequence diagram', 'Progress', '07-01-2021'),
(22, 'TS001', '', '', 'Maintenance', '07-01-2021'),
(23, 'TS001', 'Membuat Database', 'Membuat rancangan database dengan relasi', 'Testing', '07-01-2021'),
(24, 'TS001', 'Membuat Struktur Table', 'Membuat struktur table setelah menentukan user requirement', 'Testing', '07-01-2021'),
(25, 'TS003', '', '', 'Do', '07-01-2021'),
(26, 'TS003', 'Download XAMPP', 'Download xamp dan menginstal pada pc', 'Do', '07-01-2021'),
(27, 'TS001', '', '', 'Testing', '07-01-2021'),
(28, 'TS001', 'Menyusun Laporan', 'Test website', 'Do', '07-01-2021'),
(29, 'TS001', '', '', 'Bug Fixing', '07-01-2021'),
(30, 'TS002', 'Membuat Rancangan', 'Membuat rancangan usulan sistem web', 'Task List', '07-01-2021'),
(31, 'TS002', '', '', 'DoList', '07-01-2021'),
(32, 'TS002', 'Flowchart Berjalan', 'Membuat flowchart berjalan sesuai prosedure', 'Progress', '07-01-2021'),
(33, 'TS002', '', '', 'Progress', '07-01-2021'),
(34, 'TS001', 'Flowchart Berjalan', 'Flowchart', 'Bug Fixing', '07-01-2021'),
(35, 'TS001', 'Flowchart Berjalan', 'Membuat sistem flowchart berjalan', 'Progress', '07-01-2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

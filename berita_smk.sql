-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2021 pada 06.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_smk`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `inputKategori` (IN `idkat` VARCHAR(10), IN `nmkat` VARCHAR(30))  BEGIN
	INSERT INTO kategori VALUES(idkat, nmkat);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pilihKategori` ()  BEGIN
	SELECT * FROM kategori;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `isi_berita`, `tanggal`, `gambar`) VALUES
('A001', 'FS01', 'Futsal Champion', 'Baqdhat menjuarai liga futsal', '2021-03-08', 0x75706c6f61642f70686f746f322e706e67),
('A002', 'BS01', 'Basket Champion', 'Baqdhat menjuarai liga basket', '2021-03-08', 0x75706c6f61642f70686f746f312e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('BS01', 'Basket'),
('FS01', 'Futsal');

--
-- Trigger `kategori`
--
DELIMITER $$
CREATE TRIGGER `del_kat` AFTER DELETE ON `kategori` FOR EACH ROW INSERT INTO triger_del_kategori VALUES(now(),'Hapus Kategori',OLD.nama_kategori)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inp_kat` AFTER INSERT ON `kategori` FOR EACH ROW INSERT INTO triger_inp_kategori VALUES(now(),'Tambah Kategori', NEW.nama_kategori)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `upd_kat` AFTER UPDATE ON `kategori` FOR EACH ROW INSERT INTO triger_upd_kategori VALUES(now(), 'Ubah Kategori',OLD.nama_kategori,NEW.nama_kategori)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `triger_del_kategori`
--

CREATE TABLE `triger_del_kategori` (
  `waktu` date NOT NULL,
  `action` varchar(30) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `triger_del_kategori`
--

INSERT INTO `triger_del_kategori` (`waktu`, `action`, `nama_kategori`) VALUES
('2021-02-28', 'Hapus Kategori', ''),
('2021-02-28', 'Hapus Kategori', ''),
('2021-02-28', 'Hapus Kategori', ''),
('2021-02-28', 'Hapus Kategori', ''),
('2021-02-28', 'Hapus Kategori', ''),
('2021-02-28', 'Hapus Kategori', ''),
('2021-02-28', 'Hapus Kategori', 'Buku Pelajaran'),
('2021-03-01', 'Hapus Kategori', 'Sekolah'),
('2021-03-02', 'Hapus Kategori', 'Olahraga'),
('2021-03-02', 'Hapus Kategori', 'Olahraga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `triger_inp_kategori`
--

CREATE TABLE `triger_inp_kategori` (
  `waktu` date NOT NULL,
  `action` varchar(30) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `triger_inp_kategori`
--

INSERT INTO `triger_inp_kategori` (`waktu`, `action`, `nama_kategori`) VALUES
('2021-02-24', 'Tambah Kategori', 'Majalah'),
('2021-02-24', 'Tambah Kategori', 'Bisnis'),
('2021-02-28', 'Tambah Kategori', 'Komik'),
('2021-02-28', 'Tambah Kategori', ''),
('2021-02-28', 'Tambah Kategori', ''),
('2021-02-28', 'Tambah Kategori', ''),
('2021-02-28', 'Tambah Kategori', ''),
('2021-02-28', 'Tambah Kategori', ''),
('2021-02-28', 'Tambah Kategori', ''),
('2021-02-28', 'Tambah Kategori', 'Majalah'),
('2021-02-28', 'Tambah Kategori', 'Novel'),
('2021-02-28', 'Tambah Kategori', 'Cerita Rakyat'),
('2021-02-28', 'Tambah Kategori', 'Buku Pelajaran'),
('2021-02-28', 'Tambah Kategori', 'Buku Pelajaran'),
('2021-03-01', 'Tambah Kategori', 'Sekolah'),
('2021-03-01', 'Tambah Kategori', 'Olahraga'),
('2021-03-02', 'Tambah Kategori', 'Olahraga'),
('2021-03-08', 'Tambah Kategori', 'Futsal'),
('2021-03-08', 'Tambah Kategori', 'Basket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `triger_upd_kategori`
--

CREATE TABLE `triger_upd_kategori` (
  `waktu` date NOT NULL,
  `action` varchar(30) NOT NULL,
  `nama_kategoriLama` varchar(30) NOT NULL,
  `nama_kategoriBaru` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `triger_upd_kategori`
--

INSERT INTO `triger_upd_kategori` (`waktu`, `action`, `nama_kategoriLama`, `nama_kategoriBaru`) VALUES
('2021-02-28', 'Ubah Kategori', 'Majalah', 'Olahraga'),
('2021-03-01', 'Ubah Kategori', 'Olahraga', 'Sekolah'),
('2021-03-02', 'Ubah Kategori', 'Majalah', 'aaa'),
('2021-03-02', 'Ubah Kategori', 'aaa', 'Majalah'),
('2021-03-02', 'Ubah Kategori', 'Olahraga', 'aa'),
('2021-03-02', 'Ubah Kategori', 'aa', 'Olahraga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
('A001', 'febry', 'fbrybme', 'admin123'),
('A002', 'rexo', 'rexoadhi', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

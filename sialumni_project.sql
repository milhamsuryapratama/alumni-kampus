-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mar 2019 pada 10.24
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sialumni_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'p4nj', '4fc87af16463701d955786587983e9dd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_fks`
--

CREATE TABLE `anggota_fks` (
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `gang_wilayah` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `telepon` char(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_fks`
--

INSERT INTO `anggota_fks` (`nis`, `nama`, `alamat`, `desa`, `kecamatan`, `gang_wilayah`, `pendidikan`, `telepon`, `username`, `password`) VALUES
(123, 'lkj', 'lkj', 'lkj', 'lkj', 'lkj', '6', 'lkj', 'lkj', '48e2e79fec9bc01d9a00e0a8fa68b289'),
(234, 'poi', 'poi', 'poi', 'poi', 'opi', '4', '111222333444', 'poi', 'd6e1c05c8a81c2ae74c7aedea5ec92c1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(11) NOT NULL,
  `no_ktp` varchar(17) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` char(12) NOT NULL,
  `thn_mondok` char(4) NOT NULL,
  `thn_keluar` char(4) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `bidang_usaha` varchar(20) NOT NULL,
  `akun_fb` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `no_ktp`, `nama`, `id_kecamatan`, `id_desa`, `alamat`, `telepon`, `thn_mondok`, `thn_keluar`, `pekerjaan`, `bidang_usaha`, `akun_fb`, `email`, `username`, `password`, `foto`) VALUES
(2, '1212', 'User Alumni', 1, 1, 'Tongas', '082336181538', '2012', '2022', 'mengabdi', 'marketing', 'sholeh argas', 'sholeh@gmail.com', 'alumni', '12345', ''),
(3, '1212', 'User Alumni korcam', 1, 1, 'Tongas', '082336181538', '2012', '2022', 'mengabdi', 'marketing', 'sholeh argas', 'sholeh@gmail.com', 'alumni2', '12345', ''),
(4, '1212', 'User Alumni Pengurus', 1, 1, 'Tongas', '082336181538', '2012', '2022', 'mengabdi', 'marketing', 'sholeh argas', 'sholeh@gmail.com', 'alumni3', '111111', ''),
(5, '3513172111980001', 'Luthfi Nurul H', 1, 1, 'skldjfgdhbk', '085337665221', '2016', '2020', 'Pengusaha', 'Pengusaha', 'luthfi', 'blogsayailham@gmail.com', 'luthfi', 'd5cd72b7bcbf56bc503904f1ac7d9bc2', ''),
(6, '3513172111980005', 'Junaidi', 1, 1, 'Maron Wetan', '085337665221', '2005', '2010', 'Pengusaha', 'Pengusaha', 'junaidi', 'junaidi@gmail.com', 'junaidi', 'a708cb9bebf84a140d408a8251450091', 'a154f06b7e7275a572a4c531aef8c508.jpg'),
(7, '3513172111980008', 'kokola', 2, 3, 'Maron', '085337665221', '2016', '2020', 'Pengusaha', 'Pengusaha', 'koko', 'kokoba@gmail.com', 'koko', '37f525e2b6fc3cb4abd882f708ab80eb', 'f777d789e4d08d75aca9f1e2595c6702.jpg'),
(8, '3513172111980009', 'yoyo', 2, 3, 'Maron', '085337665221', '2016', '2020', 'Pengusaha', 'Pengusaha', 'yoyo', 'yoyo@gmail.com', 'yoyo', '48dc8d29308eb256edc76f25def07251', 'cdb7cfcf39ba7a6c76245f47865455a7.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_desa`, `id_kecamatan`) VALUES
(1, 'Tongas Wetan', 1),
(2, 'Klampok', 1),
(3, 'Purut', 2),
(4, 'Mada Karipura', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_devisi`
--

CREATE TABLE `tb_devisi` (
  `id_devisi` int(11) NOT NULL,
  `nama_devisi` varchar(20) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_devisi`
--

INSERT INTO `tb_devisi` (`id_devisi`, `nama_devisi`, `status`) VALUES
(1, 'Keorganisasian', 'N'),
(2, 'Distributor', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`, `status`) VALUES
(1, 'Ketua ', 'Y'),
(2, 'Wakil', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `status` enum('b','s') NOT NULL,
  `aktif` enum('y','t') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `id_soal`, `jawaban`, `status`, `aktif`) VALUES
(1, 1, 'KH ZAINI MUN''IM', 'b', 'y'),
(2, 1, 'KH HASYIM ZAINI', 's', 'y'),
(3, 1, 'KH WAHID ZAINI', 's', 'y'),
(4, 1, 'KH ZUHRI ZAINI', 's', 'y'),
(5, 2, 'Nurul Jadid & Nurul Hadis', 'b', 'y'),
(6, 2, 'Nurul Jadid & Nurul Musthofa', 's', 'y'),
(7, 2, 'Nurul Jadid & Nurul Hadi', 's', 'y'),
(8, 2, 'Nurul Jadid & Nurul Jannah', 's', 'y'),
(14, 3, '1950', 'b', 'y'),
(15, 3, '1951', 's', 'y'),
(16, 3, '1949', 's', 'y'),
(17, 3, '1952', 's', 'y'),
(22, 4, 'KH SYAMSUL ARIFIN', 'b', 'y'),
(23, 4, 'KH ABD ARIFIN', 's', 'y'),
(24, 4, 'KH MOH ARIFIN', 's', 'y'),
(25, 4, 'KH ARIFIN', 's', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Tongas'),
(2, 'Lumbang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_lembaga_alumni` int(11) NOT NULL,
  `foto_kegiatan` varchar(100) NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `judul_kegiatan`, `slug`, `deskripsi`, `status`, `id_lembaga_alumni`, `foto_kegiatan`, `jenis_kegiatan`, `author`) VALUES
(1, 'Seminar Pemilu Tanpa Hoaks, Mungkinkah?', 'seminar-pemilu-tanpa-hoaks-mungkinkah', '<p>Secara subtansial, Pemilihan Umum (Pemilu) bisa dimaknai sebagai aktualisasi nilai-nilai demokrasi. Dalam sistem demokrasi, Pemilu menjadi salah satu sarana untuk memilih wakil-wakil rakyat di Parlemen dan Presiden dan Wakil Presiden. Pemilu juga bisa menjadi satu bentuk pengakuan terhadap kedaulatan rakyat dan hak-hak warga Negara dalam sistem politik yang demokratis. Sebab, rakyat tidak mungkin memerintah secara langsung, sehingga diperlukan cara untuk memilih wakil rakyat dan pemimpin dalam memerintah suatu negara selama jangka waktu tertentu.</p>\r\n\r\n<p>Secara yuridis, Pemilu merupakan amanat konstitusi UUD 1945 hasil amandemen. Dalam pasal 22 UUD 1945 huruf E, ayat 2 bahwa&nbsp;<em>&ldquo;tujuan Pemilu adalah untuk memilih para wakil yang duduk dalam pemerintahan atau DPR (Dewan Perwakilan Rakyat), DPD (Dewan Perwakilan Daerah). Pemilu juga bertujuan memilih Presiden/Wakil Presiden, dan DPRD (Dewan Perwakilan Rakyat Daerah)&rdquo;</em>. Dalam konteks ini, Pemilu dimaksudkan sebagai sebuah proses transisi dalam memilih wakil rakyat dan Presiden beserta wakilnya. Sehingga pemilu bisa disebut sebagai ritual politik yang sangat sakral.</p>\r\n\r\n<p>Namun belakangan, sakralitas pemilu tersebut telah mengalami desktruksi. Ini terjadi seiring maraknya penggunaan informasi palsu&nbsp;(hoax) dalam&nbsp;setiap momentum politik seperti pemilihan kepala Daerah (Pilkada), pemilihan anggota legislatif (Pileg) dan pemilihan Presiden dan Wakil Presiden (Pilpres).&nbsp;Hampir dipastikan dalam setiap momentum pemilu sejak Pilpres 2014 hoax selalu mewarnainya. Kontennyapun beragam, mulai dari issue Agama, etnis, antek asing, PKI, kriminalisasi ulama dan lain sebagainya. Issue-issue ini secara bergantian berseliweran di media sosial seperti facebook, group Whatsapp dan lain-lain.</p>\r\n\r\n<p>Tentu ini menjadi preseden buruk bagi masa depan kualitas demokrasi dan politik kita. Mengapa demikian, sudah bisa dipastikan kedepan perpolitikan akan diisi dengan berita-berita palsu yang disebut hoax, dan dampaknya akan timbul perpecahan diantara sesame anak bangsa. Bahkan kalau kita mencermati media sosial, publik seperti terbelah dan mengalami sekat-sekat sosial dengan sebutan Kecebong (sebutan untuk pendukung 01) dan Kampret (sebutan pendukung Capres 02).</p>\r\n\r\n<blockquote>\r\n<h2><strong>Hasrat Kekuasaan</strong></h2>\r\n</blockquote>\r\n\r\n<p>Dalam Pasal 69 Undang-undang Nomor 10 Tahun 2016 tentang Pilkada telah diatur dengan jelas bahwa larangan dalam kampanye seperti menghasut, memfitnah, mengadu domba partai politik, perseorangan dan atau kelompok masyarakat. Maraknya, hoax dalam dinamika politik dewasa ini, tampaknya para elit kita tidak siap kalah dalam berkompetisi secara politik. Hasrat kekuasaan yang sangat tinggi mengharuskan mereka menghalalkan segala cara untuk mewujudkan keinginannya. Hal ini juga diperparah dengan minimnya politik etis dalam diri para elit politik, sehingga persaingan politik diantara mereka jauh dari nilai-nilai politik etik sebagaimana dalam Pancasila.</p>\r\n\r\n<p>Menurut Guru besar Ilmu Komunikasi Universitas Padjajaran, Bandung, Deddy Mulyana (Kompas.com,08/02/2017), bahwa faktor utama yang menyebabkan hoax mudah tersebar di Indonesia karena karakter asli masyarakat Indonesia tidak terbiasa berbeda pendapat atau berdemokrasi secara sehat. Hal ini juga didukung dengan kecenderungan masyarakat Indonesia tidak terbiasa mencatat dan menyimpan data sehingga sering berbicara tanpa data.&nbsp;&nbsp;Di sisi lain, ia menyebut masyarakat lebih senang membahas aspek-aspek yang berkaitan dengan kekerasan, sensualitas, drama, intrik dan misteri. Dan tampaknya, politik merupakan bidang yang memiliki aspek-aspek tersebut. sehingga tidak heran kalau hoax sering sekali terjadi pada tema politik. Khususnya saat terjadi perebutan kekuasaan yang menjatuhkan lawan politik seperti dalam pilkada, Pileg dan Pilpres.</p>\r\n\r\n<p>Jika politik hoax ini terus dilestarikan dalam setiap pemilu, sudah pasti masa depan demokrasi kita sangat buram. Bagaimana tidak, hoax disamping memiliki nilai provokasi dan penghasutan publik, juga upaya pembodohan masyarakat. Karena masyarakat dipaksa untuk percaya pada informasi yang tidak bisa dipertanggung jawabkan kebenarannya. Efeknya, begitu luar biasa, karena berita hoax itu biasanya dishare secara berulang-ulang melalui media sosial sehingga publik mempercayainya sebagai sebuah kebenaran. Karena kesalahan yang disampaikan secara berulang-ulang akan diyakini sebagai sebuah kebenaran.</p>\r\n', 'Aktif', 1, 'a6ac11dbc14178a9e22b8960cfac9c28.jpg', 'aksi sosial', 8),
(2, 'Seminar Pemilu Tanpa Hoaks, Mungkinkah?', 'seminar-pemilu-tanpa-hoaks-mungkinkah', '<p>Secara subtansial, Pemilihan Umum (Pemilu) bisa dimaknai sebagai aktualisasi nilai-nilai demokrasi. Dalam sistem demokrasi, Pemilu menjadi salah satu sarana untuk memilih wakil-wakil rakyat di Parlemen dan Presiden dan Wakil Presiden. Pemilu juga bisa menjadi satu bentuk pengakuan terhadap kedaulatan rakyat dan hak-hak warga Negara dalam sistem politik yang demokratis. Sebab, rakyat tidak mungkin memerintah secara langsung, sehingga diperlukan cara untuk memilih wakil rakyat dan pemimpin dalam memerintah suatu negara selama jangka waktu tertentu.</p>\r\n\r\n<p>Secara yuridis, Pemilu merupakan amanat konstitusi UUD 1945 hasil amandemen. Dalam pasal 22 UUD 1945 huruf E, ayat 2 bahwa&nbsp;<em>&ldquo;tujuan Pemilu adalah untuk memilih para wakil yang duduk dalam pemerintahan atau DPR (Dewan Perwakilan Rakyat), DPD (Dewan Perwakilan Daerah). Pemilu juga bertujuan memilih Presiden/Wakil Presiden, dan DPRD (Dewan Perwakilan Rakyat Daerah)&rdquo;</em>. Dalam konteks ini, Pemilu dimaksudkan sebagai sebuah proses transisi dalam memilih wakil rakyat dan Presiden beserta wakilnya. Sehingga pemilu bisa disebut sebagai ritual politik yang sangat sakral.</p>\r\n\r\n<p>Namun belakangan, sakralitas pemilu tersebut telah mengalami desktruksi. Ini terjadi seiring maraknya penggunaan informasi palsu&nbsp;(hoax) dalam&nbsp;setiap momentum politik seperti pemilihan kepala Daerah (Pilkada), pemilihan anggota legislatif (Pileg) dan pemilihan Presiden dan Wakil Presiden (Pilpres).&nbsp;Hampir dipastikan dalam setiap momentum pemilu sejak Pilpres 2014 hoax selalu mewarnainya. Kontennyapun beragam, mulai dari issue Agama, etnis, antek asing, PKI, kriminalisasi ulama dan lain sebagainya. Issue-issue ini secara bergantian berseliweran di media sosial seperti facebook, group Whatsapp dan lain-lain.</p>\r\n\r\n<p>Tentu ini menjadi preseden buruk bagi masa depan kualitas demokrasi dan politik kita. Mengapa demikian, sudah bisa dipastikan kedepan perpolitikan akan diisi dengan berita-berita palsu yang disebut hoax, dan dampaknya akan timbul perpecahan diantara sesame anak bangsa. Bahkan kalau kita mencermati media sosial, publik seperti terbelah dan mengalami sekat-sekat sosial dengan sebutan Kecebong (sebutan untuk pendukung 01) dan Kampret (sebutan pendukung Capres 02).</p>\r\n\r\n<blockquote>\r\n<h2><strong>Hasrat Kekuasaan</strong></h2>\r\n</blockquote>\r\n\r\n<p>Dalam Pasal 69 Undang-undang Nomor 10 Tahun 2016 tentang Pilkada telah diatur dengan jelas bahwa larangan dalam kampanye seperti menghasut, memfitnah, mengadu domba partai politik, perseorangan dan atau kelompok masyarakat. Maraknya, hoax dalam dinamika politik dewasa ini, tampaknya para elit kita tidak siap kalah dalam berkompetisi secara politik. Hasrat kekuasaan yang sangat tinggi mengharuskan mereka menghalalkan segala cara untuk mewujudkan keinginannya. Hal ini juga diperparah dengan minimnya politik etis dalam diri para elit politik, sehingga persaingan politik diantara mereka jauh dari nilai-nilai politik etik sebagaimana dalam Pancasila.</p>\r\n\r\n<p>Menurut Guru besar Ilmu Komunikasi Universitas Padjajaran, Bandung, Deddy Mulyana (Kompas.com,08/02/2017), bahwa faktor utama yang menyebabkan hoax mudah tersebar di Indonesia karena karakter asli masyarakat Indonesia tidak terbiasa berbeda pendapat atau berdemokrasi secara sehat. Hal ini juga didukung dengan kecenderungan masyarakat Indonesia tidak terbiasa mencatat dan menyimpan data sehingga sering berbicara tanpa data.&nbsp;&nbsp;Di sisi lain, ia menyebut masyarakat lebih senang membahas aspek-aspek yang berkaitan dengan kekerasan, sensualitas, drama, intrik dan misteri. Dan tampaknya, politik merupakan bidang yang memiliki aspek-aspek tersebut. sehingga tidak heran kalau hoax sering sekali terjadi pada tema politik. Khususnya saat terjadi perebutan kekuasaan yang menjatuhkan lawan politik seperti dalam pilkada, Pileg dan Pilpres.</p>\r\n\r\n<p>Jika politik hoax ini terus dilestarikan dalam setiap pemilu, sudah pasti masa depan demokrasi kita sangat buram. Bagaimana tidak, hoax disamping memiliki nilai provokasi dan penghasutan publik, juga upaya pembodohan masyarakat. Karena masyarakat dipaksa untuk percaya pada informasi yang tidak bisa dipertanggung jawabkan kebenarannya. Efeknya, begitu luar biasa, karena berita hoax itu biasanya dishare secara berulang-ulang melalui media sosial sehingga publik mempercayainya sebagai sebuah kebenaran. Karena kesalahan yang disampaikan secara berulang-ulang akan diyakini sebagai sebuah kebenaran.</p>\r\n', 'Aktif', 2, 'bce670315cd9d7c08937bc0e40b1ccef.jpg', 'aksi sosial', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_korcam`
--

CREATE TABLE `tb_korcam` (
  `id_korcam` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `tahun` char(11) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_korcam`
--

INSERT INTO `tb_korcam` (`id_korcam`, `id_kecamatan`, `id_alumni`, `tahun`, `status`) VALUES
(1, 1, 2, '2019', 'Y'),
(2, 2, 3, '2019', 'Y'),
(3, 1, 4, '2020', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembaga_alumni`
--

CREATE TABLE `tb_lembaga_alumni` (
  `id_lembaga_alumni` int(11) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lembaga_alumni`
--

INSERT INTO `tb_lembaga_alumni` (`id_lembaga_alumni`, `nama_lembaga`, `status`) VALUES
(1, 'FKSJ', 'Y'),
(2, 'P4NJ', 'Y'),
(3, 'NJIC', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembaga_nj`
--

CREATE TABLE `tb_lembaga_nj` (
  `id_lembaga` int(11) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `situs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lembaga_nj`
--

INSERT INTO `tb_lembaga_nj` (`id_lembaga`, `nama_lembaga`, `situs`) VALUES
(1, 'Taman Pengasuhan Anak Ar-Rahmah (TPA)', 'Mohon Maaf Website Dalam Tahap Pengembangan'),
(2, 'Pendidikan Anak Usia Dini (PAUD)', ''),
(3, 'SMA', ''),
(4, 'SMK', 'http://smknj.sch.id/'),
(5, 'MA', 'http://manuruljadid.sch.id/main/'),
(6, 'UNUJA', 'https://www.unuja.ac.id/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_lembaga_alumni` int(11) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id_pengurus`, `id_alumni`, `id_lembaga_alumni`, `status`) VALUES
(1, 3, 2, 'aktif'),
(3, 5, 1, 'aktif'),
(4, 8, 3, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` char(12) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  `id_lembaga_alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama`, `telepon`, `alamat`, `foto`, `user`, `password`, `status`, `id_lembaga_alumni`) VALUES
(1, 'fksj', '', '', '', 'fksj', 'fksj', 'aktif', 1),
(2, 'p4nj', '', '', '', 'p4nj', 'p4nj', 'aktif', 2),
(3, 'njic', '', '', '', 'njic', 'njic', 'aktif', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `aktif` enum('y','t') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `pertanyaan`, `aktif`) VALUES
(1, 'Siapa pendiri pertama pondok pesantren nurul jadid ?', 'y'),
(2, 'Ada 2 nama yang di sodorkan kepada KH ZAINI MUN''IM untuk nama pesantren, apa sajakah itu?', 'y'),
(3, 'Pondok Pesantren Nurul Jadid didirikan pada tahun', 'y'),
(4, 'Pendiri Pertama mendirikan pondok pesantren nurul jadid mendapatkan restu dan perintah dari ?', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id_struktur` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_devisi` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `id_lembaga_alumni` int(11) NOT NULL,
  `masa_bakti` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `id_jabatan`, `id_devisi`, `id_alumni`, `nis`, `status`, `id_lembaga_alumni`, `masa_bakti`) VALUES
(2, 2, 2, 5, 0, 'Y', 2, '2010'),
(5, 2, 2, 6, 0, 'Y', 3, '2010'),
(6, 1, 2, 8, 0, 'Y', 1, '2018'),
(7, 2, 2, 0, 123, 'Y', 1, '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi_misi`
--

CREATE TABLE `tb_visi_misi` (
  `id_visi_misi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `id_lembaga_alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_visi_misi`
--

INSERT INTO `tb_visi_misi` (`id_visi_misi`, `visi`, `misi`, `id_lembaga_alumni`) VALUES
(1, '<p>Menjadi perguruan tinggi terkemuka dalam melahirkan intelektual muslim Ahlussunnah yang profesional.</p>\r\n', '<p>Menyelenggarakan pendidikan dan pengajaran yang unggul dalam bidang studi islam</p>\r\n', 1),
(4, '<p>Mendidik para santri yang unggul dalam keilmuan, akhlaqul karimah dan skill</p>\r\n', '<p>Dengan visi tersebut maka Pesantren Assalafiyyah merumuskan misi sebagai berikut:&bull; Mewujudkan proses belajar mengajar yang efektif dan efesien dalam memahami kitab kuning, tahfidz Al-Quran, dan mata pelajaran madrasah</p>\r\n\r\n<ol>\r\n	<li>Mewujudkan suasana Islami dan harmonis di lingkungan pesantren dan madrasah</li>\r\n	<li>Meningkatkan keterampilan dan life skill</li>\r\n	<li>Membangun semangat berprestasi</li>\r\n</ol>\r\n', 3),
(6, '<p>Mewujudkan manusia beriman, bertaqwa, berilmu dan berakhlaqul karimah.</p>\r\n', '<ol>\n	<li>Melatih pembiasaan berbuat sifat-sifat terpuji dalam kehidupan sehari-hari</li>\n	<li>Melatih pembiasaan melaksanakan ibadah baik yang wajib maupun yang sunnah</li>\n	<li>Melaksanakan bimbingan intensi membaca al-quran dan membaca kitab salalfiyah.</li>\n	<li>Menyelenggarakan bimbingan belajar yang disesuaikan dengan kemampuan santri.</li>\n	<li>&nbsp;Melaksanakan bimbingan terpadu antara kegiatan pesantren dan kegiatan sekolah.</li>\n</ol>\n', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_fks`
--
ALTER TABLE `anggota_fks`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`) USING BTREE;

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_devisi`
--
ALTER TABLE `tb_devisi`
  ADD PRIMARY KEY (`id_devisi`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_korcam`
--
ALTER TABLE `tb_korcam`
  ADD PRIMARY KEY (`id_korcam`);

--
-- Indexes for table `tb_lembaga_alumni`
--
ALTER TABLE `tb_lembaga_alumni`
  ADD PRIMARY KEY (`id_lembaga_alumni`);

--
-- Indexes for table `tb_lembaga_nj`
--
ALTER TABLE `tb_lembaga_nj`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anggota_fks`
--
ALTER TABLE `anggota_fks`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_devisi`
--
ALTER TABLE `tb_devisi`
  MODIFY `id_devisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_korcam`
--
ALTER TABLE `tb_korcam`
  MODIFY `id_korcam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_lembaga_alumni`
--
ALTER TABLE `tb_lembaga_alumni`
  MODIFY `id_lembaga_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_lembaga_nj`
--
ALTER TABLE `tb_lembaga_nj`
  MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

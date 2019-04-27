-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Apr 2019 pada 13.58
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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

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
(222, 'eee', 'eee', 'eee', 'eee', 'e', '6', '086333333333', 'eee', 'd2f2297d6e829cd3493aa7de4416a18f'),
(234, 'poiler', 'poipoi', 'poi', 'poi', 'opi', '6', '111222333444', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(456, 'Deni', 'Dusun Krajan II', 'Karanggeger', 'Pajarakan', 'Gang E', '5', '085233887665', '', 'd41d8cd98f00b204e9800998ecf8427e');

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
  `foto` varchar(255) NOT NULL,
  `foto_usaha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `no_ktp`, `nama`, `id_kecamatan`, `id_desa`, `alamat`, `telepon`, `thn_mondok`, `thn_keluar`, `pekerjaan`, `bidang_usaha`, `akun_fb`, `email`, `username`, `password`, `foto`, `foto_usaha`) VALUES
(2, '1212', 'User Alumni', 1, 1, 'Tongas', '082336181538', '2012', '2022', 'mengabdi', 'marketing', 'sholeh argas', 'sholeh@gmail.com', 'alumni', '12345', '', ''),
(3, '1212', 'User Alumni korcam', 1, 1, 'Tongas', '082336181538', '2012', '2022', 'mengabdi', 'marketing', 'sholeh argas', 'sholeh@gmail.com', 'alumni2', '12345', '', ''),
(4, '1212', 'User Alumni Pengurus', 1, 1, 'Tongas', '082336181538', '2012', '2022', 'mengabdi', 'marketing', 'sholeh argas', 'sholeh@gmail.com', 'alumni3', '111111', '', ''),
(5, '3513172111980001', 'Luthfi Nurul H', 4, 6, 'skldjfgdhbk', '085337665221', '2016', '2020', 'Pengusaha', 'Pengusaha', 'luthfi', 'blogsayailham@gmail.com', 'luthfi', 'd5cd72b7bcbf56bc503904f1ac7d9bc2', '4fd488116cc3a1db3615587b4dd1faee.jpg', '2b5e4a7001459ad762aba634f3567436.jpg'),
(6, '3513172111980005', 'Junaidi', 6, 9, 'Maron Wetan', '085337665221', '2005', '2010', 'Pengusaha', 'Pengusaha', 'junaidi', 'junaidi@gmail.com', 'junaidi', 'a708cb9bebf84a140d408a8251450091', 'a154f06b7e7275a572a4c531aef8c508.jpg', ''),
(7, '3513172111980008', 'kokola', 2, 3, 'Maron', '085337665221', '2016', '2020', 'Pengusaha', 'Pengusaha', 'koko', 'kokoba@gmail.com', 'koko', '37f525e2b6fc3cb4abd882f708ab80eb', 'f777d789e4d08d75aca9f1e2595c6702.jpg', ''),
(8, '3513172111980009', 'yoyo', 2, 3, 'Maron', '085337665221', '2016', '2020', 'Pengusaha', 'Pengusaha', 'yoyo', 'yoyo@gmail.com', 'yoyo', '48dc8d29308eb256edc76f25def07251', 'cdb7cfcf39ba7a6c76245f47865455a7.png', ''),
(9, '555', 'fffffffff', 4, 6, 'klhdfkhdgkjhfkjgh', '111222333444', '2016', '2020', 'Pengusaha', 'Pengusaha', 'kjdfdfdf', 'dfg@gmail.com', 'oo', 'e47ca7a09cf6781e29634502345930a7', 'a8a33ad58e60beaeecd3fece00f02008.jpg', ''),
(10, '11111', 'bbb', 6, 9, 'bbb', '085337665221', '2007', '2018', 'Pengusaha', 'Pengusaha', 'bbb', 'bbb@gmail.com', 'bbb', '08f8e0260c64418510cefb2b06eee5cd', '', ''),
(11, '565656', 'ttto', 4, 6, 'ttt', '085337665221', '2009', '2018', 'Pengusaha', 'Pengusaha', 'ttt', 'ttt@gmail.com', 'ttt', '9990775155c3518a0d7917f7780b24aa', '', ''),
(12, '3513170512980001', 'Aldo Rivaldo', 6, 9, 'Dusun Krajan II RT 01 RW 003', '085233876551', '2003', '2010', 'Wiraswasta', 'Konveksi', 'Aldo Rivaldo', 'aldorivaldo21@gmail.com', 'aldo', '980549e2439b09286008085ea0285b59', '73d8a53332beff12d23e914115da67f5.jpg', 'ab99697c392960c1d18b3f4fb128aa60.jpg');

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
(4, 'Mada Karipura', 2),
(6, 'Maron Wetan', 4),
(7, 'Wonorejo', 4),
(9, 'Karanggeger', 6),
(10, 'Karangbong', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_devisi`
--

CREATE TABLE `tb_devisi` (
  `id_devisi` int(11) NOT NULL,
  `nama_devisi` varchar(20) NOT NULL,
  `status_devisi` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_devisi`
--

INSERT INTO `tb_devisi` (`id_devisi`, `nama_devisi`, `status_devisi`) VALUES
(1, 'Keorganisasian', 'Y'),
(2, 'Distributor', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  `status_jabatan` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`, `status_jabatan`) VALUES
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
(2, 'Lumbang'),
(4, 'Maron'),
(6, 'Pajarakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_lembaga_alumni` int(11) NOT NULL,
  `foto_kegiatan` varchar(100) NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `author` int(11) NOT NULL,
  `tanggal_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `judul_kegiatan`, `slug`, `deskripsi`, `status`, `id_lembaga_alumni`, `foto_kegiatan`, `jenis_kegiatan`, `author`, `tanggal_posting`) VALUES
(1, 'UNUJA Gelar Kuliah Umum Bersama Menkumham', 'seminar-pemilu-tanpa-hoaks-mungkinkah', '<p>Universitas Nurul Jadid tetap konsisten untuk menjaga komitmen pengembangan Tridharma Perguruan Tinggi dan menebar kebermanfaatan di semua lini kehidupan, salah satunya dalam menanamkan kesadaran hukum bagi seluruh sivitas akademika dan masyarakat umum, dengan didorong komitmen tersebut, pada hari Rabu (27/3) Universitas Nurul Jadid menggelar Kuliah Umum bersama Mentri Hukum dan Hak Asasi Manusia Republik Indonesia.</p>\r\n\r\n<p>Kuliah Umum kali ini disampaikan langsung oleh Menkumham, Bapak Yasonna Hamonangan Laoly, SH., M.SC., P.hD. dan dihadiri oleh Rektor, Wakil Rektor, Dekanat serta beberapa pejabat Pemerintah Daerah Kabupaten Probolinggo, Wakapolres Probolinggo dan Komandan Kodim 0820, bertempat di auditorium Universitas Nurul Jadid.</p>\r\n\r\n<p>Adapun tema yang diangkat dalam Kuliah Umum ini adalah &ldquo;Membangun Kesadaran Hukum Menuju Terwujudnya Masyarakat Berkeadilan&rdquo;, beliau menjelaskan bahwa menurut Pasal&nbsp; 1&nbsp; ayat&nbsp; (3)&nbsp; UUD&nbsp; NRI&nbsp; 1945&nbsp; secara&nbsp; tegas&nbsp; menyatakan:&nbsp; &rdquo;Negara Indonesia adalah negara hukum.&rdquo;&nbsp;&nbsp; Negara&nbsp;&nbsp; hukum yang dimaksud dalam ketentuan Pasal 1 ayat (3) UUD NRI 1945 adalah negara yang menegakkan supremasi hukum untuk mewujudkan kebenaran dan keadilan, dimana di dalamnya tidak ada&nbsp;&nbsp;&nbsp; kekuasaan yang tidak dapat dipertanggungjawabkan. Negara Hukum Indonesia diilhami oleh ide dasar&nbsp;<em>rechtsstaat</em><em>&nbsp;</em>dan&nbsp;<em>rule of law</em>.</p>\r\n\r\n<p>Bapak Mentri juga menuturkan, bahwa kunci kesuksesan hidup ini ada 3, yakni&nbsp;<em>Intellegence&nbsp;</em>(kecerdasan)<em>,&nbsp; Energy&nbsp;</em>(tenaga)<em>,&nbsp;</em>dan<em>&nbsp;Integrity&nbsp;</em>(integritas), dan disiplin tanpa komitmen sama seperti mobil mewah tanpa bahan bakar. Pada akhir penyampaian materi, beliau menjelaskan tentang 4 L dalam hidup, yang terdiri dari&nbsp;<em>Life</em>&nbsp;(hidup),&nbsp;<em>Love</em>&nbsp;(cinta),&nbsp;<em>Learn&nbsp;</em>(belajar) dan akhirnya&nbsp;<em>Leave a Legacy&nbsp;</em>(meninggalkan warisan).&nbsp;<strong>(Humas)</strong></p>\r\n', 'Aktif', 1, 'c9aad70829d98320ae11b8b8ea6ecc22.JPG', 'aksi umum', 8, '2019-04-26'),
(9, 'Selamat Datang Bapak Panglima TNI dan Kapolri', 'bakti-sosial-5', '<p>Universitas Nurul Jadid kembali kedatangan tamu kehormatan yang menjadi tokoh sentral dalam menjaga keamanan Negara Kesatuan Republik Indonesia. Kedua tamu itu adalah Panglima Tentara Nasional Republik Indonesia, Bapak Marsekal Hadi Tjahjanto, S.IP. dan Kepala Kepolisian Republik Indonesia, Jendral Polisi Prof. H. Muhammad Tito Karnavian. Ph.D. Keduanya hadir dan disambut oleh Pengasuh dan Rektor Nurul Jadid dengan prosesi pengalungan sorban dan pemberian kopiah khas UNUJA.</p>\r\n\r\n<p>Acara &quot;Ngaji Kebangsaan&quot; ini dilaksanakan pada Selasa (2/4) di Auditorium Universitas Nurul Jadid dan dihadiri pula oleh Wakil Bupati Probolinggo, Bapak Drs. HA. Timbul Prihanjoko, beberapa pejabat Kepolisian dan TNI di Kabupaten Probolinggo, dosen, guru, mahasiswa, serta siswa dan siswi di seluruh lembaga pendidikan Pondok Pesantren Nurul Jadid.</p>\r\n\r\n<p>Panglima TNI dan Kapolri kali ini mengisi kegiatan Ngaji Kebangsaan dengan tema &ldquo;Mempererat Persatuan Menjaga Kesatuan Membangun Indonesia Berkeadaban&rdquo; dengan harapan bahwa Indonesia akan selalu menjadi negara yang aman dan tenteram di tengah harmoni dan keberagaman agama, suku, dan bahasa dengan memegang erat nilai-nilai Bhineka Tunggal Ika.&nbsp;<strong>Humas</strong></p>\r\n', 'Aktif', 2, 'c4b5c5875e688e741de5d103bca4662a.JPG', 'aksi umum', 5, '2019-04-26'),
(10, 'Ngaji Kebangsaan bareng Panglima TNI dan Kapolri', 'bakti-sosial-6', '<p>Selasa (2/4), bangun mental persatuan dan kesatuan untuk membangun Indonesia berkeadaban, Ponpes. Nurul Jadid dan Universitas Nurul Jadid memperoleh kunjungan tamu kehormatan dari Panglima TNI, Marsekal TNI Hadi Tjahjanto, S.IP., dan Kepala Kepolisian Negara Republik Indonesia, Jenderal Pol. Prof. H. Muhammad Tito Karnavian, Ph.D.</p>\r\n\r\n<p>Acara yang dikemas dalam &ldquo;Ngaji Kebangsaan&rdquo; tersebut mendapat antusiasme yang sangat meriah dari para mahasiswa dan santri Nurul Jadid. Kedatangan beliau disambut dengan sambutan dan gemuruh tepuk tangan dan ucapan selamat datang dari mahasiswa dan santri.</p>\r\n\r\n<p>Acara &ldquo;Ngaji Kebangsaan&rdquo; ini menjadi&nbsp;salah satu rangkaian kunjungan Panglima TNI dan Kapolri ke pondok-pondok pesantren di Jawa Timur.</p>\r\n\r\n<p>Dalam sambutan awal, Pengasuh Ponpes. Nurul Jadid, KH. Moh. Zuhri Zaini, BA., menyampaikan ucapan selamat datang dan terima kasih kepada Panglima TNI dan Kapolri yang sudah menyempatkan waktunya untuk menyapa dan memberikan semangat kepada santri dan mahasiswa.</p>\r\n\r\n<p>Beliau juga berpesan agar kegiatan &ldquo;Ngaji Kebangsaan&rdquo; ini bisa benar-benar diserap oleh santri dan mahasiswa sehingga bisa meningkatkan semangat juang dalam menjaga persatuan dan kesatuan bangsa dan negara khususnya antar umat beragama.</p>\r\n\r\n<p>Turut hadir dalam &ldquo;Ngaji Kebangsaan&rdquo;, Wakil Bupati Probolinggo-Drs. HA. Timbul Prihanjoko, Kapolres Probolinggo-AKBP Eddwi Kurniyanto, Dandim Probolinggo-Letkol Inf Imam Wibowo dan seluruh tamu undangan dan jajaran pemerintahan di lingkungan Kabupaten Probolinggo.</p>\r\n\r\n<p>Selain mengisi &ldquo;Ngaji Kebangsaan&rdquo;, Panglima TNI dan Kapolri juga telah direncanakan untuk meresmikan Kesatuan Santri Patriot Pondok Pesantren Nurul Jadid, serta Resimen Mahasiswa UNUJA.</p>\r\n\r\n<p>Dalam orasi &ldquo;Ngaji Kebangsaan&rdquo; yang disampaikan oleh Panglima TNI, beliau berpesan agar kita semua bisa saling menjaga kerukunan dan stabilitas keamanan negara. Beliau juga mengapresiasi para santri dan mahasiswa karena bisa menjadi salah satu tonggak penegak Bhineka Tunggal Ika, karena pada diri santri sudah terbiasa diterpa dengan segala macam perbedaan yang ada namun bisa tetap hidup dan berdampingan secara guyub rukun.&nbsp;<strong>(Humas)</strong></p>\r\n', 'Aktif', 2, 'bbd616dd162ae4257bc7a5fe694001e7.JPG', 'aksi umum', 5, '2019-04-25'),
(11, 'Seminar Nasional bersama Ka. Dinkes Probolinggo', 'seminar-nasional-bersama-ka-dinkes-probolinggo', '<p>Sabtu (16/3) bertempat di Aula Universitas Nurul Jadid, sebagai salah satu langkah dalam memperkaya khazanah keilmuan yang&nbsp;&nbsp;nantinya bisa dijadikan bekal dalam dunia kerja profesional bahkan kehidupan bermasyarakat secara luas, Himpunan Mahasiswa Program Studi (Himaprodi) Keperawatan Fakultas Kesehatan Universitas Nurul Jadid menggelar Seminar Nasional bertemakan &ldquo;Peningkatan Kepuasan Pelanggan dalam Prespektif Management Rumah Sakit&rdquo;.</p>\r\n\r\n<p>Hadir dalam seminar, Dekan Fakultas Kesehatan-Handono Fatkhur Rahman, Wakil Rektor I-Hambali, dosen serta mahasiswa dari berbagi Perguruan Tinggi. Sebagai narasumber, Himaprodi Keperawatan mengundang Ka. Dinkes Probolinggo-dr. Anang Budi dan Dosen Keperawatan-Husnul Khotimah.</p>\r\n\r\n<p>Dalam penyampaiannya, dr. Budi&nbsp;<em>(sapaan akrab beliau)&nbsp;</em>mengapresiasi atas penyelenggaraan Seminar Nasional yang digawangi oleh teman-teman mahasiswa yang terhimpun dalam Himaprodi Keperawan. Menurutnya, dengan semangat para pemuda khususnya para mahasiswa yang&nbsp;<em>aware&nbsp;</em>terhadap kebutuhan informasi dan pengetahuan yang diperlukan dalam menelaah tantangan kedepan khususnya dalam bidang kesehatan, maka dengan cara saling tatap muka dan&nbsp;<em>sharing&nbsp;</em>informasi seperti ini menjadi cara yang tepat untuk terus meningkatkan pengetahuan dan pengalaman yang nantinya bisa diterapkan dalam kehidupan dunia kerja profesional.</p>\r\n\r\n<p>Dengan demikian, sebagai mahasiswa Prodi Keperawatan sudahlah tentu menjadi sebuah keharusan untuk mengetahui perkembangan pelayanan kesehatan. Agar ini bisa dijadikan bekal ketika para mahasiswa nanti telah lulus dan terjun ke dunia profesional kesehatan.&nbsp;<strong>(Humas)</strong></p>\r\n', 'Aktif', 1, 'ad435f9466ac51e1f28ead487a3a07f5.jpg', 'aksi umum', 8, '2019-04-26'),
(12, '3 Mahasiswa Juarai Lomba Tingkat Nasional', 'langganan-juara-kiprah-3-mahasiswa-juarai-lomba-tingkat-nasional', '<p>Utus 3 mahasiswanya, Universitas Nurul Jadid (UNUJA) ikuti&nbsp;<em>Arabic Language Festival&nbsp;</em>(Alfest 02) Tingkat Nasional di Universitas Muhammadiyah Malang (UMM). Ketiga mahasiswa tersebut, yakni Agil Fahmi Attaufiqi, Moch. Hasan Miutawakkil dan Badrus Zaman dari Prodi. Pendidikan Bahasa Arab. Ketiga mahasiswa tersebut telah berulang kali mengikuti ajang lomba debat Bahasa Arab dan selalu menempatkan diri sebagai juara.</p>\r\n\r\n<p>Kali ini mereka berhasil menunjukkan prestasi gemilangnya untuk yang kesekian kali dengan menyabet gelar sebagai Juara Nasional. Juara 1 tingkat Nasional yang didapat merupakan hasil dari ketekunan, kerja keras, dan do&rsquo;a. Dalam ajang debat Bahas Arab tingkat Nasional di UMM, Agil&nbsp;<em>dkk&nbsp;</em>berhasil menyisihkan beberapa kampus dengan perolehan poin tertinggi, 510 terpaut jauh 19 poin dari juara ke 2, yakni 491.</p>\r\n\r\n<p>Keberhasilan ini menjadi kebanggaan tersendiri bagi Agil&nbsp;<em>dkk</em>. Meraka berharap bisa terus memacu semangatnya agar bisa selalu memberikan yang terbaik serta menjadi pelecut semangat&nbsp;&nbsp;bagi teman-teman mahasiswa yang lainnya agar juga bisa turut merasakan panggung kompetisi baik tingkat regional, nasional bahkan internasional.</p>\r\n\r\n<p>Ucapan selamat pun disampaikan oleh Wakil Rektor III, M. Noer Fadli Hidayat atas prestasi -prestasi gemilang yang diraih hingga detik ini. Dengan demikian, mereka telah turut andil dalam mengharumkan nama universitas dan segenap sivitas akademik di dalamnya. Tentunya, dengan adanya prestasi yang diraih, universitas akan terus mendorong potensi-potensi mahasiswa yang lainnya agar juga selalu bermunculan prestasi-prestasi disetiap bidang keilmuan yang ada.</p>\r\n\r\n<p>Selanjutnya, ketika dikonfirmasi kepada bagian kemahasiswaan, Agil&nbsp;<em>dkk</em>&nbsp;juga sudah harus mempersiapkan diri untuk mengikuti ajang lomba berikutnya. Semoga bisa terus memberikan yang terbaik dan menjadi penyemangat bagi mahasiswa lainnya.&nbsp;<strong>(Humas)</strong></p>\r\n', 'Aktif', 1, 'fd98a595354192b050bc3789ec5ef65e.jpg', 'aksi umum', 8, '2019-04-26'),
(13, 'Sinergi UB dan UNUJA; Tebar Manfaat yang Seluas-luasnya', 'sinergi-ub-dan-unuja-tebar-manfaat-yang-seluas-luasnya', '<p>Sebagai langkah untuk terus membangun kualitas&nbsp;<em>networking</em>&nbsp;atau kerja sama&nbsp;di berbagai lini, hari ini Universitas Nurul Jadid mengadakan kerja sama dengan Universitas Brawjiaya (UB) Malang dalam rangka pengembangan Tridharma Perguruan Tinggi dan Sumber Daya Manusia.</p>\r\n\r\n<p>Nota Kesepahaman ini ditandatangani pada hari Senin (11/3) di Aula Mini Universitas Nurul Jadid. Acara ini dihadiri oleh Rektor Universitas Nurul Jadid, KH. Abdul Hamid Wahid, M.Ag. dan Rektor Universitas Brawijaya, Prof. Dr. Ir. Nuhfil Hanani, AR., MS. beserta jajaran Rektorat, Dekanat dan pimpinan lembaga-lembaga dari kedua belah pihak.</p>\r\n\r\n<p>Kontrak kerja sama yang berdurasi selama 5 tahun ini akan dilaksanakan dalam beberapa bentuk program, seperti penyelenggaraan pendidikan, penelitian, pengabdian kepada masyarakat dan pelatihan, kolaborasi riset dan pengembangan sumber daya, kegiatan dan kajian ilmiah serta seminar dan lokakarya.</p>\r\n\r\n<p>Kedua belah pihak sangat mendukung atas terjalinnya kerja sama, sehingga kedepan bisa saling bersinergi untuk turut menebar manfaat yang seluas-luasnya bagi masyarakat, bangsa dan negara bahkan dunia.&nbsp;<strong>(</strong><strong>Humas)</strong></p>\r\n', 'Aktif', 3, '04c7d0c5f1403f4d134bdf8896d9dec5.JPG', 'aksi umum', 6, '2019-04-26');

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
(3, 1, 4, '2020', 'Y'),
(5, 4, 12, '2020', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembaga_alumni`
--

CREATE TABLE `tb_lembaga_alumni` (
  `id_lembaga_alumni` int(11) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lembaga_alumni`
--

INSERT INTO `tb_lembaga_alumni` (`id_lembaga_alumni`, `nama_lembaga`, `status`, `logo`) VALUES
(1, 'FKSJ', 'Y', 'logofksj.png'),
(2, 'P4NJ', 'Y', 'logop4nj.png'),
(3, 'NJIC', 'Y', 'logonjic.png');

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
(2, 'Pendidikan Anak Usia Dini (PAUD)', 'http://google.co.id'),
(3, 'SMA', 'http://google.co.id'),
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
-- Struktur dari tabel `tb_promosi`
--

CREATE TABLE `tb_promosi` (
  `id_promosi` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `status_promosi` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_promosi`
--

INSERT INTO `tb_promosi` (`id_promosi`, `id_alumni`, `tgl_mulai`, `tgl_akhir`, `status_promosi`) VALUES
(2, 5, '2019-04-27', '2019-04-28', 'Y'),
(3, 12, '2019-04-27', '2019-04-29', 'Y');

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
(5, 2, 2, 6, 0, 'Y', 3, '2010'),
(6, 1, 2, 8, 0, 'Y', 1, '2018'),
(8, 0, 0, 7, 0, 'Y', 2, ''),
(10, 1, 1, 5, 0, 'Y', 2, '2019'),
(13, 2, 2, 11, 0, 'Y', 0, '2019'),
(19, 1, 1, 0, 123, 'Y', 1, '2019'),
(20, 2, 2, 12, 0, 'Y', 2, '2018'),
(22, 1, 2, 10, 0, 'Y', 3, '2018'),
(23, 2, 2, 0, 234, 'Y', 1, '2018');

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
(11, '<p>Terbentuknya manusia yang beriman, bertaqwa, berakhlak al-karimah, berilmu, berwawasan luas, berpandangan ke depan, cakap, terampil, mandiri, kreatif, memiliki etos kerja, toleran, bertanggung jawab kemasyarakatan serta berguna bagi agama, bangsa dan negara.</p>\r\n', '<ol>\r\n	<li>Penanaman keimanan, ketaqwaan kepada Allah dan pembinaan akhlak al-karimah.</li>\r\n	<li>Pendidikan keilmuan dan pengembangan wawasan.</li>\r\n	<li>Pengembangan bakat dan minat.</li>\r\n	<li>Pembinaan keterampilan dan keahlian.</li>\r\n	<li>Pengembangan kewirausahaan dan kemandirian.</li>\r\n	<li>Penanaman kesadaran hidup sehat dan kepedulian terhadap lingkungan.</li>\r\n	<li>Penanaman tanggung jawab kemasyarakatan dan kebangsaan.</li>\r\n</ol>\r\n', 2);

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
-- Indexes for table `tb_promosi`
--
ALTER TABLE `tb_promosi`
  ADD PRIMARY KEY (`id_promosi`);

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
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_korcam`
--
ALTER TABLE `tb_korcam`
  MODIFY `id_korcam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- AUTO_INCREMENT for table `tb_promosi`
--
ALTER TABLE `tb_promosi`
  MODIFY `id_promosi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

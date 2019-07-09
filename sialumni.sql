-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jul 2019 pada 14.18
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sialumni`
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
(1198, 'Hais Batara', 'Dusun Paleran Desa Maron Wetan RT 011 RW 003', 'Maron Wetan', 'Maron', 'Pomas', '6', '', 'haisbatara', '96e79218965eb72c92a549dd5a330112'),
(2165, 'Rafly Rusandi', 'Dusun Krajan II RT 001 RW 004', 'Bujuran', 'Maron', 'Gang K', '5', '', 'raflyrusandi', '03eeb8b169296659bfc78073b19d2a3b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(11) NOT NULL,
  `no_ktp` varchar(17) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` char(12) NOT NULL,
  `thn_mondok` char(4) NOT NULL,
  `thn_keluar` char(4) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `bidang_usaha` varchar(20) NOT NULL,
  `akun_fb` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto_usaha` varchar(100) NOT NULL,
  `token_device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `no_ktp`, `nama`, `id_kecamatan`, `id_desa`, `alamat`, `telepon`, `thn_mondok`, `thn_keluar`, `pekerjaan`, `nama_usaha`, `bidang_usaha`, `akun_fb`, `email`, `username`, `password`, `foto`, `foto_usaha`, `token_device`) VALUES
(1, '3513172111980002', 'M. Ilham Surya Pratama', 1, 4, 'Dusun Paleran RT 011 RW 003', '085330150827', '2010', '2019', 'Wiraswasta', '', 'Kuliner', '', 'ilhamsurya26@gmail.com', 'ilhamsurya', '690896bc12592620f7371419d7bb8600', '8500fce2a72491afaca0708ba59699ac.jpg', 'c5a2cba2bd640af585a613b69341fb43.jpg', ''),
(2, '3513172305980001', 'M Solehuddin', 2, 13, 'Dusun Krajan RT 001 RW 004', '085233876521', '2009', '2014', 'Pengusaha', '', 'Otomotif', '', 'solehudin@gmail.com', 'solehudin', '96e79218965eb72c92a549dd5a330112', 'e380dbd15ba6783eff3a883a7e496a59.jpg', 'ab1927903a204b80a802ad6eeeaf4e73.jpg', 'dSV0mcicAiE:APA91bFD5_d5wkrGRGK1PgesS2x3i4kxBa7XKssZGROypfTDUBkSDbhfjdqD68cMh5ZVdqowHhLcnfajLujJcVWpE8-VCGfQa0Nj8ixFkOJFMnA80QbjJ2BtgdyHk8wlnGwTU0t7MS1Y'),
(3, '3513170305960002', 'Luthfi Nurul Huda', 4, 18, 'Dusun Karang RT 007 RW 003', '08574587213', '2004', '2010', 'Pengusaha', 'Bengkel Mobil Luthfi', 'Otomotif', '', 'luthfirobit@gmail.com', 'luthfi', 'd5cd72b7bcbf56bc503904f1ac7d9bc2', 'd84758412b1a7eb8ec0c43b267dc02f0.jpg', 'b4d2861c1f156e0fba174c902e69cf92.jpg', 'dSV0mcicAiE:APA91bFD5_d5wkrGRGK1PgesS2x3i4kxBa7XKssZGROypfTDUBkSDbhfjdqD68cMh5ZVdqowHhLcnfajLujJcVWpE8-VCGfQa0Nj8ixFkOJFMnA80QbjJ2BtgdyHk8wlnGwTU0t7MS1Y'),
(4, '3513172111980005', 'Giovani Rusandi', 1, 4, 'Dusun Krajan IV Rt 005 RW 002', '085337665221', '2009', '2014', 'Wiraswasta', '', '', '', 'giovanirusandi@gmail.com', 'giovani', 'f1b6d941a97ababa0c81b92841b3189f', '8bbf04034f09981dd59b2d41e7a270f5.jpg', '', 'flFMAZWhz2k:APA91bHbhL4IdUkzMjRZUSJmpiyJ3hkuZ4AHAt20okn0xN8A3POm24_ovsNrqICggcZUzvQY0Eg1oPCIZxW6LhZnRDbHfkSeU7kwIX3mx19Ya3LF6Y3zDVWjx5Sw0EdRcmko63aUw1Qc'),
(5, '3513172111980007', 'Ario Setiawan', 4, 21, 'Dusun Makmur RT 11 Rw 05', '085337665221', '2018', '2019', 'Wiraswasta', '', '', '', 'ariosetiawan@gmail.com', 'ario', '713136f194f4b40b26ca140b940f6f05', 'a384bf909620bec58a4963104f49530a.jpg', '', ''),
(6, '3513172305980001', 'M Solehuddin', 1, 5, 'Dusun Krajan RT 001 RW 004', '085233876521', '2009', '2014', 'Pengusaha', '', 'Otomotif', '', 'solehudin@gmail.com', 'soleh', '96e79218965eb72c92a549dd5a330112', 'e380dbd15ba6783eff3a883a7e496a59.jpg', 'ab1927903a204b80a802ad6eeeaf4e73.jpg', 'dSV0mcicAiE:APA91bFD5_d5wkrGRGK1PgesS2x3i4kxBa7XKssZGROypfTDUBkSDbhfjdqD68cMh5ZVdqowHhLcnfajLujJcVWpE8-VCGfQa0Nj8ixFkOJFMnA80QbjJ2BtgdyHk8wlnGwTU0t7MS1Y'),
(7, '3513172111980007', 'Ibad Zimani', 2, 13, 'Dusun Kambuh RT 002 RW 004', '085337665201', '2013', '2016', 'Wiraswasta', '', 'Pertanian', '', 'ibadzimani@gmail.com', 'ibad', 'f275aed3c532126cf1e0174f1c9770e0', '879e82fce0d89403652187e0958d571c.jpg', 'a0a93defeefee7e11a39e02aa4ac4971.jpg', '');

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
(1, 'Ajung', 1),
(2, 'Klompangan', 1),
(3, 'Mangaran', 1),
(4, 'Pancakarya', 1),
(5, 'Rowoindah', 1),
(6, 'Sukamakmur', 1),
(7, 'Wirowongso', 1),
(8, 'Ambulu', 2),
(9, 'Andongsari', 2),
(10, 'Karang Anyar', 2),
(11, 'Pontang', 2),
(12, 'Sabrang', 2),
(13, 'Sumberejo', 2),
(14, 'Tegalsari', 2),
(15, 'Badean', 4),
(16, 'Bangsalsari', 4),
(17, 'Banjarsari', 4),
(18, 'Curahkalong', 4),
(19, 'Gambirono', 4),
(20, 'Karangsono', 4),
(21, 'Langkap', 4),
(22, 'Petung', 4),
(23, 'Sukorejo', 4),
(24, 'Tisnogambar', 4),
(25, 'Tugusari', 4),
(26, 'Balung 1', 5);

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
(1, 'IT', 'Y'),
(2, 'Pemasaran', 'Y');

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
(1, 'CEO', 'Y'),
(2, 'Direktur', 'Y');

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
(1, 'Ajung'),
(2, 'Ambulu'),
(3, 'Arjasa'),
(4, 'Bangsalsari'),
(5, 'Balung'),
(6, 'Gumukmas'),
(7, 'Jelbuk'),
(8, 'Jenggawah'),
(9, 'Jombang'),
(10, 'Kalisat'),
(11, 'Kaliwates');

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
(1, 'Selamat Datang Bapak Panglima TNI dan Kapolri', 'selamat-datang-bapak-panglima-tni-dan-kapolri', '<p>Universitas Nurul Jadid kembali kedatangan tamu kehormatan yang menjadi tokoh sentral dalam menjaga keamanan Negara Kesatuan Republik Indonesia. Kedua tamu itu adalah Panglima Tentara Nasional Republik Indonesia, Bapak Marsekal Hadi Tjahjanto, S.IP. dan Kepala Kepolisian Republik Indonesia, Jendral Polisi Prof. H. Muhammad Tito Karnavian. Ph.D. Keduanya hadir dan disambut oleh Pengasuh dan Rektor Nurul Jadid dengan prosesi pengalungan sorban dan pemberian kopiah khas UNUJA.</p>\r\n\r\n<p>Acara &quot;Ngaji Kebangsaan&quot; ini dilaksanakan pada Selasa (2/4) di Auditorium Universitas Nurul Jadid dan dihadiri pula oleh Wakil Bupati Probolinggo, Bapak Drs. HA. Timbul Prihanjoko, beberapa pejabat Kepolisian dan TNI di Kabupaten Probolinggo, dosen, guru, mahasiswa, serta siswa dan siswi di seluruh lembaga pendidikan Pondok Pesantren Nurul Jadid.</p>\r\n\r\n<p>Panglima TNI dan Kapolri kali ini mengisi kegiatan Ngaji Kebangsaan dengan tema &ldquo;Mempererat Persatuan Menjaga Kesatuan Membangun Indonesia Berkeadaban&rdquo; dengan harapan bahwa Indonesia akan selalu menjadi negara yang aman dan tenteram di tengah harmoni dan keberagaman agama, suku, dan bahasa dengan memegang erat nilai-nilai Bhineka Tunggal Ika.&nbsp;</p>\r\n', 'Aktif', 2, 'bca3dc2f60472bcb4f2cd953c6f8dd4f.JPG', 'aksi sosial', 0, '2019-05-02'),
(2, 'UNUJA Hadiri Rapat Pimpinan PTKIS Kopertais Wilayah IV Surabaya', 'unuja-hadiri-rapat-pimpinan-ptkis-kopertais-wilayah-iv-surabaya', '<p>Rapat pimpinan PTKIS (Perguruan Tinggi Keagamaan Islam Swasta &ndash; Kopertais Wilayah IV Surabaya dengan mengusung tema &ldquo;Penguatan Akreditasi Institusi Perguruan Tinggi dan Kemandirian Perguruan Tinggi Keagamaan Islam Swasta (PTKIS) Kopertais Wilayah IV Surabaya di Era Revolusi Industri (4.0). Rapat kali ini dilaksanakan selama 3 hari yakni pada hari Jum&rsquo;at &ndash; Minggu, tanggal 26-28 April 2019 bertempat di Hotel Primier Place Jl. Juanda No 73 Surabaya.</p>\r\n\r\n<p>Rapat dibuka oleh Koordinator Kopertais IV Surabaya Prof. Dr. H. Masdar Hilmy, Ph. D. pada pukul 15:30 WIB. Rapim dihadiri oleh 176 pimpinan se-kopertais Wilayah IV Surabaya, mulai Perguruan Tinggi yang ada di Jawa Timur, Bali, Nusa Tenggara Barat dan Nusa Tenggara Timur. Dalam sambutannya Masdar menyampaikan beberapa hal penting yang menjadi syarat untuk memperoleh nilai unggul terkait dengan persiapan Peguruan Tinggi dalam menghadapi reformulasi instrumen Akreditasi 4.0. Pertama: bahwa untuk memperoleh atau mendapatkan kriteria unggul pada item borang standar kemahasiswaan apabila ada sejumlah mahasiswa asing luar negeri minimal 2% dari total jumlah mahasiswa yang tersingkron dalam sistem PDDIKTI. Kedua: dalam mempersiapkan akreditasi hendaklah dilakukan secara terencana, bertahap, kontinu, dan terevaluasi. Hal ini perlu dilakukan karena adanya reformulasi instrumen borang akreditasi yang ditekankan pada Laporan Evaluasi Diri dan Laporan Kinerja Perguruan Tinggi. Ketiga: Pimpinan Perguruan Tinggi harus mampu melakukan peningkatan tata kelola pada&nbsp;&nbsp;Tridharma, SDM, sarana dan prasarana, karena akreditasi Perguruan Tinggi akan menjadi tolak ukur tingkat kepercayaan masyarakat.</p>\r\n\r\n<p>H. Hambali sebagai Wakil Rektor I Universitas Nurul Jadid hadir mewakili Rektor, menyampaikan bahwa ada beberapa materi yang disampaikan pada kesematan tersebut sebagai penguat tema Rapim, diantaranya adalah materi: Relevansi Akreditasi Institusi Perguruan Tinggi dengan 9 kriteria dengan mutu Pendidikan Tinggi, yang disampaikan oleh Suparto, S. Ag. M. Ed. Ph. D. dari BAN-PT. Kemudian juga ada materi yang disampaikan oleh Prof. Dr. H. Arskal Salim, Gp. M. Ag., tentang kemandirian pengelolaan PTKIS di Era Revolusi Industri 4.0. Disamping materi tersebut, ada juga materi yang menjadi salah satu titik tekan layanan bagi Kopertais Wilayah IV untuk PTKIS tentang SIMKOPTA.</p>\r\n\r\n<p>Pada kesempatan ini, Hambali mengusulkan beberapa poin terkait upaya reformulasi SIMKOPTA.&nbsp;&nbsp;Adanya SIMKOPTA, menjadi keunikan tersendiri bagi Kopertais Wilayah&nbsp;&nbsp;IV dimana kami akui, dengan adanya SIMKOPTA, tidak akan ada ijazah bodong yang dikeluarkan Perguruan Tinggi di bawah naungan Kopertais IV. Namun demikian terkadang dengan beragam pelaporan, membuat administrasi Perguruan Tinggi menjadi sedikit terhambat. Karenanya kami mengusulkan, pertama:&nbsp;&nbsp;perlu adanya reformulasi sistem dalam SIMKOPTA agar dapat selaras dengan pelaporan lain seperti pelaporan EMIS, PDDIKYI, PIN, dan SIVIL, kedua: Perguruan Tinggi agar diperkenankan melakukan pengelolaan data secara mandiri untuk data mahasiswa dan dosen, ketiga: usul ada reformulasi fitur yakni: pengajuan perubahan data, pengajuan klaim mahasiswa pindah dari PT lain di bawah Kopertais Wilayah IV, dan pengajuan jabatan fungsional, PAK dan kepangkatan secara online. Untuk mempermudah kinerja bagi operator Hambali juga mengusulkan agar NIRL diubah menjadi NINA (Nomor Induk Ijazah Nasional) agar selaras dengan PDDIKTI dan PIN yang akan diwajibkan pada tahun depan.</p>\r\n\r\n<p>Dr. H. M. Yunus Abu Bakar, M. Ag., sebagai sekretaris Kopertais Wilayah IV Surabaya mengapresiasi usulan-usulan tersebut dan menyampaikan bahwa usulan itu akan dijadikan sebagai komitmen utama sebagai wujud kepedulian layanan kepada Perguruan Tinggi Keagamaan Islam Swasta (PTKIS) Kopertais Wilayah IV Surabaya.</p>\r\n', 'Aktif', 2, 'ce231658af8691c50cf7584506e3f2e8.jpg', 'aksi umum', 1, '2019-05-02'),
(3, 'Sinergi UB dan UNUJA; Tebar Manfaat yang Seluas-luasnya', 'sinergi-ub-dan-unuja-tebar-manfaat-yang-seluas-luasnya', '<p>Sebagai langkah untuk terus membangun kualitas&nbsp;<em>networking</em>&nbsp;atau kerja sama&nbsp;di berbagai lini, hari ini Universitas Nurul Jadid mengadakan kerja sama dengan Universitas Brawjiaya (UB) Malang dalam rangka pengembangan Tridharma Perguruan Tinggi dan Sumber Daya Manusia.</p>\r\n\r\n<p>Nota Kesepahaman ini ditandatangani pada hari Senin (11/3) di Aula Mini Universitas Nurul Jadid. Acara ini dihadiri oleh Rektor Universitas Nurul Jadid, KH. Abdul Hamid Wahid, M.Ag. dan Rektor Universitas Brawijaya, Prof. Dr. Ir. Nuhfil Hanani, AR., MS. beserta jajaran Rektorat, Dekanat dan pimpinan lembaga-lembaga dari kedua belah pihak.</p>\r\n\r\n<p>Kontrak kerja sama yang berdurasi selama 5 tahun ini akan dilaksanakan dalam beberapa bentuk program, seperti penyelenggaraan pendidikan, penelitian, pengabdian kepada masyarakat dan pelatihan, kolaborasi riset dan pengembangan sumber daya, kegiatan dan kajian ilmiah serta seminar dan lokakarya.</p>\r\n\r\n<p>Kedua belah pihak sangat mendukung atas terjalinnya kerja sama, sehingga kedepan bisa saling bersinergi untuk turut menebar manfaat yang seluas-luasnya bagi masyarakat, bangsa dan negara bahkan dunia.</p>\r\n', 'Aktif', 3, 'ae93459737f283c254d9ac32416eee05.JPG', 'aksi sosial', 2, '2019-05-02'),
(4, 'Alfikr, Majalah Universitas Nurul Jadid Paiton Juarai Kompetisi Pendidikan Islam', 'alfikr-majalah-universitas-nurul-jadid-paiton-juarai-kompetisi-pendidikan-islam', '<p>Lembaga Penerbitan Mahasiswa (LPM) Alfikr Universitas Nurul Jadid (UNUJA) Paiton Probolinggo berhasil terpilih sebagai Juara I Kompetisi Majalah Mahasiswa Pendidikan Tinggi Keagamaan Islam (PTKI) se-Indonesia kategori Media Platform yang diselenggarakan oleh &nbsp;Kementerian Agama melalui Direktorat PTKI Ditjen Pendidikan Islam, Kamis (23/11/).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tidak hanya kategori Media Platform, salah satu kru LPM ALFIKR UNUJA juga menyabet tiga juara I kategori Karya Jurnalistik, yaitu M. Arwin Juara I penulisan Feature, Zainul Hasan R. Juara I Cover/Layout/Tata, dan Sholehuddin Juara I Kartun Opini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Terdapat 2 kategori dalam Kompetisi Majalah Mahasiswa PTKI ini. Pertama, kategori Media Platform yang terdiri dari Media Cetak dan Media Online.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kedua, kategori Karya Jurnalistik, diantaranya: In Depth News, Feuture, Opini, Foto Jurnalistik, Cover/Layout/Tata Wajah, Kartun Opini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sebelumnya para peserta telah melakukan dua tahap penilaian mulai dari seleksi dokumen majalah yang dikirimkan mulai tanggal 25 Oktober sampai 12 November, dan penilaian tahap kedua melalui persentasi dan wawancara.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kompetisi yang digelar di Hotel Santika BSD City Serpong Tangerang Selatan selama tiga hari ini diikuti oleh 55 mahasiswa dan 25 finalis media kampus yang berasal dari pelbagai Perguruan Tinggi Islam se-Indonesia dengan kategori kompetisi yang berbeda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Abdul Hamid Wahid, Rektor UNUJA Paiton Probolinggo mengaku &nbsp;senang mendengar kabar prestasi mahasiswanya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Sangat senang dan bersyukur, Ini adalah bagian dari kado terindah bagi UNUJA yang baru saja diresmikan menjadi Universitas,&quot; ungkapnya saat dikonfirmasi melalui saluran telepon&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lebih lanjut Hamid mengharapkan Alfikr dapat terus menjadi informasi alternatif masyarakat yang Kritis dan Moderat di tengah banyaknya informasi hoaks, penyebar kebencian, dan radikalisme.</p>\r\n', 'Aktif', 3, '8cb21c1452183c5a0626f0f1142c86fe.jpg', 'aksi pengajian', 2, '2019-05-02'),
(5, 'Khazanah Aswaja Dibedah di Kalsel', 'khazanah-aswaja-dibedah-di-kalsel', '<p>Memperingati Hari Lahir (Harlah) Pengurus Koordinator Cabang KORPS PMII Puteri (Kopri) ke-50, Kopri Kalsel, PKC PMII Kalsel melaksanakan&nbsp;Bedah Buku Khazanah Aswaja&nbsp;di Kampus STAI Al-Falah, Landasan Ulin, Banjarbaru Selasa (21/11) siang.</p>\r\n\r\n<p>Buku Khazanah Aswaja merupakan karya Tim Aswaja NU Center PWNU Jawa Timur. Seperti dikatakan Ketua Tim penulis, KH Abdurrahman Navis, dalam kata pengantarnya, buku&nbsp;Khazanah Aswaja&nbsp;merupakan rujukan praktis untuk memahami, mengamalkan dan mendakwahkan ajaran-ajaran Islam Ahlussunnah wal Jama&#39;ah di tengah tantangan pemikiran dan gerakan firqah-firqah lain yang semakin hari semakin menjadi.</p>\r\n\r\n<p>Ketua Kopri Kalsel sekaligus Ketua Pelaksana, Wenny Noorahim mengatakan, tujuan diadakannya bedah buku&nbsp;Khazanah Aswaja&nbsp;ini agar masyarakat baik secara umum maupun warga NU memiliki pemahaman yang &nbsp;lebih tentang Aswaja.</p>\r\n\r\n<p>&quot;Sesuai dengan nama buku yaitu Khazanah; Perbendaharaan atau Kekayaan, Aswaja itu mengandung begitu banyak fahaman dalam skala luas,&quot; ujar Wenny dalam sambutannya.</p>\r\n\r\n<p>Ia menambahkan, bedah buku ini juga bertujuan untuk membentengi masyarakat dari paham radikalime,</p>\r\n\r\n<p>&quot;Pemahaman Aswaja secara garis besarnya merupakan upaya untuk membentengi dari segala faham radikal maupun liberal,&quot; tambahnya.</p>\r\n\r\n<p>Bertema&nbsp;Sebagai Penguatan Pemahaman Ajaran Rahmatan Lilalamin dalam Menjaga Kedaulatan NKRI,&nbsp;bedah buku&nbsp;menghadirkan narasumber dari tim penulis buku&nbsp;Khazanah Aswaja, yakni Yusuf Suharto. Sebagai pembanding, Ketua Tanfidziyah PWNU Kalsel, KH Syarbani Haira.&nbsp;</p>\r\n\r\n<p>Yusuf Suharto menyampaikan bahwa Aswaja yang dianut oleh NU sudah benar, karena merupakan anhaj para mayoritas ulama.</p>\r\n\r\n<p>&quot;Termasuk NKRI ini adalah upaya final bangsa ini. Tidak boleh diubah krn akan mendatangkan mafsadah. Jadi, taat kepada pemimpin negeri adalah wajib hukumnya sbg ketaatan kepada Ulil Amri. Jk pemimpin menyimpang maka ditegur dengan cara-cara yg baik (ma&#39;ruf),&quot; ujar Tim Aswaja NU Center PWNU Jatim ini.</p>\r\n\r\n<p>Sementara itu KH Syarbani menyoroti implementasi ber-Aswaja dan ber-NU.</p>\r\n\r\n<p>&quot;Buku ini menarik, dan aspek teoritisnya sdh disampaikan penulis. Kita tinggal mengimplementasikan nya bahwa NU itu harus terus memperkuat diri. Warga NU itu harus percaya diri.&quot;</p>\r\n\r\n<p>Peserta bedah buku mendapatkan fasilitas berserta tanda tangan penulis, sertifikat, snack dan blok note. Panitia juga menyediakan paket regular dengan kontribusi Rp20.000 saja tanpa mendapatkan buku.</p>\r\n', 'Aktif', 1, '034e1318d61f7dd1425a0a61baba3ca1.jpg', 'aksi pengajian', 1198, '2019-05-02'),
(6, 'Haul Tradisi Warga NU Sarat Berkat', 'haul-tradisi-warga-nu-sarat-berkat', '<p>A&rsquo;wan PWNU Jawa Timur H Hasan Aminuddin menyampaikan bahwa kegiatan haul yang sering dilakukan di tengah-tengah masyarakat merupakan budaya dan tradisi asli yang dilakukan warga NU. Inilah yang membedakan antara NU dan yang tidak NU.<br />\r\n<br />\r\nHal tersebut disampaikan H Hasan Aminuddin ketika menghadiri peringatan Haul Almarhum Al-Arief Billah Non Abdul Jalil Genggong di Pondok Pesantren Raudlatul Hasaniyah Desa Mojolegi Kecamatan Gading Kabupaten Probolinggo, Senin (20/11) siang.<br />\r\n<br />\r\n&ldquo;Hanya saja banyak sekarang tradisi dan budaya NU yang putus karena sudah tidak mampu mengikuti perkembangan zaman dan tergilas ikut perkembangan zaman karena salah bergaul. Hakikatnya kita meninggalkan urusan duniawi hadir di sini akan mendapatkan barokah asalkan yakin dengan hati yang tulus,&rdquo; ungkapnya.<br />\r\n<br />\r\nMenurut Hasan Aminuddin, Pondok Pesantren Raudlatul Hasaniyah ini istiqomah menggelar haul Non Abdul Jalil Genggong seperti ini. Inilah bukti nyata barokah Non Jalil. Sebab kalau cuma didongeng dan tidak ada bukti maka tidak akan nyata.<br />\r\n<br />\r\n&ldquo;Ini cerita fakta tentang barokah Non Abdul Jalil. Fakta itu benar-benar ada dan yang dihaul ini adalah kekasih Allah SWT,&rdquo; jelasnya.<br />\r\n<br />\r\nHasan menegaskan bahwa merawat ayah dan ibunya supaya tersenyum bisa dihitung, apabila gurunya. Lalu mau mendapatkan barokah dari mana. Apalagi saat ini orang banyak yang durhaka kepada orang tuanya. Sudah banyak generasi saat ini sudah tidak memuliakan kedua orang tuanya.<br />\r\n<br />\r\n&ldquo;Marilah majelis haul ini kita jadikan introspeksi tentang akhlak kepada orang tua dan guru. Ini penting kepada anak yang ada di pondok pesantren karena sekarang zaman digital. Saat kita sudah dijauhkan dengan manusia melalui alat berupa handphone. Kalau dulu bisa tertawa bersama, sekarang malah tertawa sendirian melalui Handphone,&rdquo; terangnya.<br />\r\n<br />\r\nLebih lanjut Hasan menawarkan solusi bagaimana menyelamatkan generasi muda agar menjadi generasi yang sholeh dan sholehah. &ldquo;Setiap orang tua yang mempunyai anak umur SD kelas 6 perubahan akhlaknya berbeda dan coba bandingkan dengan orang tuanya,&rdquo; katanya.<br />\r\n<br />\r\nHasan menerangkan bahwa agar orang tua merasa tenang maka setelah lulus SD atau MI masukkan anaknya ke pondok pesantren. &ldquo;Memang awalnya berat jika harus berpisah dengan anak. Bahkan terkadang kita sampai menangis. Tetapi lebih baik menangis sekarang dari pada menangis nanti karena anak salah pergaulan,&rdquo; pungkasnya.<br />\r\n<br />\r\nPengasuh Pondok Pesantren Raudlatul Hasaniyah KH Muhammad Asy&rsquo;ari Sholeh dalam sambutannya banyak menceritakan kisah kehidupan dan riwayat dari Non Abdul Jalil Genggong.<br />\r\n<br />\r\n&ldquo;Kita tidak bisa mencontoh apa yang sudah dilakukan oleh Non Abdul Jalil Genggong. Kalau lagi wiridan nyaris tidak bisa mendengar suaranya. Selain itu, kalau beribadah selalu dirahasiakan. Inilah yang kemudian membuat Non Abdul Jalil memperoleh kerahmatan yang luar biasa,&rdquo; ungkapnya.<br />\r\n<br />\r\nHaul Non Abdul Jalil Genggong yang istiqomah dilakukan setiap tahun ini diikuti oleh ratusan warga NU dan wali santri. Serta, santriwan dan santriwati Pondok Pesantren Raudlatul Hasaniyah.</p>\r\n', 'Aktif', 1, '23851ca8adfc21bdae8ab5725a9d3fb3.JPG', 'aksi umum', 1198, '2019-05-02');

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
(1, 4, 3, '2019', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembaga_alumni`
--

CREATE TABLE `tb_lembaga_alumni` (
  `id_lembaga_alumni` int(11) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `logo` varchar(100) NOT NULL,
  `alamat_lembaga` text NOT NULL,
  `telepon_lembaga` char(12) NOT NULL,
  `email_lembaga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lembaga_alumni`
--

INSERT INTO `tb_lembaga_alumni` (`id_lembaga_alumni`, `nama_lembaga`, `status`, `logo`, `alamat_lembaga`, `telepon_lembaga`, `email_lembaga`) VALUES
(1, 'FKSJ', 'Y', 'logofksj.png', '', '', ''),
(2, 'P4NJ', 'Y', 'logop4nj.png', 'Jember', '00099988777', 'p4nj@gmail.com'),
(3, 'NJIC', 'Y', 'logonjic.png', '', '', '');

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
(1, 'Taman Pengasuhan Anak Ar-Rahmah (TPA)', 'http://google.co.id'),
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
(1, 3, '2019-05-02', '2019-05-05', 'Y');

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
(1, 1, 1, 1, 0, 'Y', 2, '2019'),
(2, 2, 2, 0, 1198, 'Y', 1, '2019'),
(3, 2, 2, 2, 0, 'Y', 3, '2019'),
(4, 2, 1, 0, 2165, 'Y', 1, '2019');

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
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2166;
--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_korcam`
--
ALTER TABLE `tb_korcam`
  MODIFY `id_korcam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_promosi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

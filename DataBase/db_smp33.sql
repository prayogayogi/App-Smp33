-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `db_guru`;
CREATE TABLE `db_guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `lulusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `mengajar` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alamat` text,
  `no_hp` varchar(15) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_guru` (`id`, `nama`, `nip`, `lulusan`, `email`, `jabatan`, `mengajar`, `foto`, `alamat`, `no_hp`, `deskripsi`, `created_at`) VALUES
(1,	'Boti Samsida',	'',	'Unib',	'botisamsida33@gmail.com',	'KEPALA SEKOLAH',	'Mtk',	'person_9.jpg',	'JALAN SUKO WATI NO113',	'085709930942',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',	'1636794607'),
(2,	'Desti Natalia',	'4940745648200052',	'Unb',	'destinatalia1990@gmail.com',	'WAKIL KEPALA SEKOLAH',	'Bahasa Indonesia',	'person_8.jpg',	'Sumber Rejo Transad',	'085367039634',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',	'1636794706');

DROP TABLE IF EXISTS `db_informasi`;
CREATE TABLE `db_informasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `ouner_post` varchar(225) NOT NULL,
  `slug_judul` varchar(50) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_informasi` (`id`, `judul`, `isi`, `foto`, `ouner_post`, `slug_judul`, `created_at`) VALUES
(1,	'Lomba Tarik Tambang',	'<p>Lomba tarik tambang ini merupakan lomba untuk memperingati hari ulang tahun 17 agustus</p>\r\n',	'GOTONG_ROYONG_61.jpg',	'Azan ansory',	'lomba-tarik-tambang',	'1636822746'),
(2,	'Lomba Tumpeng',	'<p>&nbsp;Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n',	'DEWAN_GURU_ACARA_KARTINI.jpg',	'Azan ansory',	'lomba-tumpeng',	'1636822817'),
(3,	'Senam Sabtu',	'<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n',	'HUT_KEMRI_20182.jpg',	'Azan ansory',	'senam-sabtu',	'1636822866');

DROP TABLE IF EXISTS `db_kegiatan`;
CREATE TABLE `db_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_kegiatan` (`id`, `judul`, `photo`, `keterangan`, `slug`, `created_at`) VALUES
(1,	'Kegitan Senin',	'GOTONG_ROYONG_4.jpg',	'<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n',	'kegitan-senin',	'1636822925'),
(2,	'Kumpul Bareng',	'HUT_KEMRI_2018.jpg',	'<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n',	'kumpul-bareng',	'1636822954'),
(3,	'Kegiatan Ajar Mengajar',	'HUT_KEMRI_2018_TRANSAD.jpg',	'<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n',	'kegiatan-ajar-mengajar',	'1636823022');

DROP TABLE IF EXISTS `db_pengumuman`;
CREATE TABLE `db_pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_pengumuman` (`id`, `status`) VALUES
(1,	'not');

DROP TABLE IF EXISTS `db_profile`;
CREATE TABLE `db_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi_profile` text NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_profile` (`id`, `isi_profile`, `created_at`) VALUES
(1,	'<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>\r\n',	1636819958);

DROP TABLE IF EXISTS `db_siswa`;
CREATE TABLE `db_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) DEFAULT NULL,
  `nisn` varchar(15) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nama_ayah` varchar(225) NOT NULL,
  `pekerjaan_ayah` varchar(225) NOT NULL,
  `nama_ibu` varchar(225) NOT NULL,
  `pekerjaan_ibu` varchar(225) NOT NULL,
  `created_at` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_siswa` (`id`, `nis`, `nisn`, `nama`, `gender`, `asal_sekolah`, `tgl_lahir`, `nik`, `alamat`, `no_hp`, `email`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `created_at`) VALUES
(1,	NULL,	NULL,	'ABDUL HAKIM FAJAR AKBARI',	'LAKI-LAKI',	'SD 05 REJANG LEBONG',	'2021-11-18',	'1702242101070002',	'SUMBERREJO TRANSAD',	'085268226209',	'abdul@gmail.com',	'IMAM ANSORI',	'PETANI',	'SITI MUAWANAH',	'PETANI',	NULL);

DROP TABLE IF EXISTS `db_siswabaru`;
CREATE TABLE `db_siswabaru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nilai_un` int(11) NOT NULL,
  `author` varchar(100) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_siswabaru` (`id`, `nama`, `gender`, `asal_sekolah`, `tempat_lahir`, `tgl_lahir`, `nik`, `alamat`, `no_hp`, `email`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `nilai_un`, `author`) VALUES
(1,	'tes',	'LAKI-LAKI',	'tes',	'tes',	'2021-11-05',	'43434',	'tes',	'2423423',	'tes@gmail.com',	'tes',	'tes',	'tes',	'tes',	78,	'tes');

DROP TABLE IF EXISTS `db_sosial_media`;
CREATE TABLE `db_sosial_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) DEFAULT NULL,
  `facebook` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `twitter` varchar(225) DEFAULT NULL,
  `tik-tok` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_sosial_media` (`id`, `email`, `facebook`, `instagram`, `twitter`, `tik-tok`) VALUES
(1,	'smknvkph@gmail.com',	'https://web.facebook.com',	'https://www.instagram.com/',	'https://twitter.com/',	'https://www.tiktok.com/');

DROP TABLE IF EXISTS `db_visimisi`;
CREATE TABLE `db_visimisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_visimisi` (`id`, `isi`, `jenis`) VALUES
(1,	'Unggul Dalam Prestasi Akademik Maupun Non Akademik Berlandaskan Iman dan Taqwa',	'VISI'),
(2,	'Mencari dan menerapkan model pembelajaran efektif sehingga siswa dapat memperoleh hasil belajar yang optimal sesuai dengan potensinya',	'MISI'),
(3,	'Peningkatan profesionalisme guru melalui MGMP dan sejenisnya',	'MISI'),
(4,	'Menjaga dan meningkatkan kedisiplinan dan ketertiban',	'MISI'),
(5,	'Meningkatkan peran dan fungsi bimbingan dan konseling',	'MISI'),
(6,	'Meningkatkan ketersediaan fasilitas belajar mengajar',	'MISI'),
(7,	'Meningkatkan keterlibatan komite sekolah dan masyarakat dalam memajukan pendidikan',	'MISI'),
(8,	'Meningkatkan pengawasan dan pengamalan dalam hal budi pekerti yang luhur',	'MISI');

DROP TABLE IF EXISTS `open_pendaftaran`;
CREATE TABLE `open_pendaftaran` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `open_pendaftaran` (`id`, `status`) VALUES
(1,	'open');

DROP TABLE IF EXISTS `struktur_organisasi`;
CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `struktur` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `struktur_organisasi` (`id`, `struktur`) VALUES
(1,	'struktur_organisai.png');

DROP TABLE IF EXISTS `userapp`;
CREATE TABLE `userapp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto_userapp` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `roles` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `userapp` (`id`, `nama`, `email`, `alamat`, `foto_userapp`, `deskripsi`, `roles`, `password`) VALUES
(1,	'Azan ansory',	'azan@gmail.com',	'Kepahiyang, bengkulu Indonesia',	'person_9.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	1,	'$2y$10$MrcGOY9TGTVldl6BCm3Tx.qfAoELF6DhyXZHNmawmBF7NRPhvpYOK');

-- 2022-01-14 14:14:30
